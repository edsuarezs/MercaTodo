@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('Filters') }}</h6>
                    <form action="{{ route('admin.users.index') }}" method="GET">
                        <div class="row">
                            <div class="form-group col">
                                <label for="name">{{ ('Name') }}</label>
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control @error('filter.name') is-invalid @enderror"
                                    name="filter[name]"
                                    value="{{ old('filter.name', request('filter.name')) }}"
                                >
                                @error('filter.name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col">
                                <label for="name">{{ ('Email') }}</label>
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error('filter.email') is-invalid @enderror"
                                    name="filter[email]"
                                    value="{{ old('filter.email', request('filter.email')) }}"
                                >
                                @error('filter.email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="btn-group btn-group-sm">
                                    <button type="submit" class="btn btn-success"> {{ __('Search') }} </button>
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-link">{{ __('Clear') }}</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow" >
                <div class="card-body">
                    <!-- Users Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>


                            </tr>
                        </thead>
                        <!-- list of users-->
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>

                                    <td>
                                        @can('edit-users')
                                            <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('delete-users')
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input
                                                type="submit"
                                                Value="Delete"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('¿Desea eliminar...?')">
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Users Not found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $users->appends(request()->only('filter'))->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
