@extends('layouts.app')
@section('content')
    <div class="container-fluid row">
        <div class="col-2">
            @stack('admin-left-top')

            <a href="{{ route('admin.products.index') }}">
                <button type="button" class="btn btn-primary" >
                    {{ __('Products') }}
                </button>
            </a>

            @stack('admin-left-bottom')
        </div>
        <div class="col-10">
            @include('layouts.__alert')
            @yield('admin-content')
        </div>
    </div>
@endsection
