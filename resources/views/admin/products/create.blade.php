@extends('layouts.admin')
@section('admin-content')
    <div class="card card-default">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Create new product') }}</h5>
        </div>
        <form action="{{ route('admin.products.store') }}" method="POST">
            @include('admin.products.__form')
            <div class="card-footer">
                <button type="submit" class="btn btn-success">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
@endsection
@push('admin-left-top')
    <a href="{{ route('admin.products.index') }}">
        <button type="button" class="btn btn-primary" >
            {{ __('Back') }}
        </button>
    </a>

    <hr>
@endpush
