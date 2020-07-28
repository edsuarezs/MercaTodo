<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Users\IndexUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\User;
use App\Role;
use Faker\Factory;
use Gate;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use PharIo\Manifest\Application;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param IndexUserRequest $request
     * @return Application|Factory|View
     */
    public function index(IndexUserRequest $request)
    {
        $users = User::name($request->input('filter.name'))
                ->email($request->input('filter.email'))
                ->paginate();

        return view('admin.users.index', compact('users'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users'))
        {
            return redirect(route('admin.users.index'));
        }

        $roles  = Role::all();

        return view('admin.users.edit')->with([
            'user' => $user,
            'roles'=> $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return void
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->roles()->sync($request->roles);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        if(Gate::denies('edit-users'))
        {
            return redirect(route('admin.users.index'));
        }

        $user->delete();

        return back();
    }
}
