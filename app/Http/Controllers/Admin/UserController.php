<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index')->with('users', $users);
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
     * @param Request $request
     * @param User $user
     * @return void
     */
    public function update(Request $request, User $user)
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
