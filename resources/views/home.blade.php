@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @can('active-users')
                        Welcome to my homepage
                        @endcan
                    @can('disabled-users')
                            if you can see this, your account has been disabled. If was an error please contact with mercatodo@support.com
                        @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
