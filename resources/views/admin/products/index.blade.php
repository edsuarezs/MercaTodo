@extends('layouts.admin')
@section('admin-content')
    @if($errors->any())
        <p-alert variant="danger" dismiss="0">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </p-alert>
    @endif
    <div class="card card-default">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Index of products') }}</h5>
            <button-toolbar key-nav aria-label="{{ __('Toolbar for products') }}">
                <button-group class="mx-1">
                    <import-button size="sm" variant="secondary">
                        <i class="fas fa fw fa-upload"></i> {{ __('Import') }}
                    </import-button>
                </button-group>
                @include('layouts.__search', ['route' => route('admin.products.index')])
            </button-toolbar>
        </div>
        <table class="table table-striped table-borderless">
            <thead>
            <tr>
                <th scope="col">{{ __('Code') }}</th>
                <th scope="col">{{ __('Name') }}</th>
                <th scope="col">{{ __('Price') }}</th>
                <th scope="col">{{ __('Url Imagen') }}</th>
            </tr>
            </thead>
            <tbody>
            <div class="table-responsive">
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->url_image }}</td>
                        <td><img src="{{ $product->url_image }}" style="height: 50px;width: 50px;"></td>
                        <td>
                            @can('edit-users')
                                <a href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                            @endcan
                        </td>
                        <td>
                            @can('delete-users')
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input
                                        type="submit"
                                        Value="Delete"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Do yo want to delete...?')">
                                </form>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Product Not found</td>
                    </tr>
            @endforelse
            </tbody>
            </div>
            </tbody>
        </table>
    </div>
    @include('layouts.__paginator', ['paginator' => $products])
@endsection
@can('edit-users')
@push('admin-left-top')
    <a href="{{ route('admin.products.create') }}">
        <button type="button" class="btn btn-primary" >
            {{ __('Create') }}
        </button>
    </a>
    <hr>
@endpush
@endcan
@include('layouts.__delete_modal')

