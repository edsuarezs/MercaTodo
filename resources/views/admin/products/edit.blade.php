@extends('layouts.admin')
@section('admin-content')
    <div class="card card-default">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Edit product') }}</h5>
        </div>
        <form action ="{{ route('admin.products.update', $product) }}" method="POST">
            @method('PUT')
            @include('admin.products.__form')

            <img src="{{$product->url_image}}" style="width: 200px; height: 200px;">
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
