@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card border-0 shadow" >
                <div class="card-body">
                    <!-- Users Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Verified</th>

                            </tr>
                        </thead>
                        <!-- list of users-->
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>{{ $user->email_verified_at }}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input
                                                type="submit"
                                                Value="Eliminar"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('¿Desea eliminar...?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
