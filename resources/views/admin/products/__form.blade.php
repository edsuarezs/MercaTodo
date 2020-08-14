<div class="card-body">
    @csrf
    <div class="row">
        <div class="form-group col-md-12">
            <input
                name="name"
                id="name"
                type="text"
                placeholder="{{ __('name') }}"
                value="{{ old('name', $product->name) }}"
                @error('name')
                error="{{ $message }}"
                @enderror
                autocomplete="off"
            >
        </div>
        <div class="form-group col-md-6">
            <input
                rules="required|alpha_num|min:6|max:6"
                name="code"
                id="code"
                type="text"
                placeholder="{{ __('code') }}"
                value="{{ old('code', $product->code) }}"
                @error('code')
                error="{{ $message }}"
                @enderror
                autocomplete="off"
            >
        </div>
        <div class="form-group col-md-6">
            <input
                rules="required|numeric"
                name="price"
                id="price"
                type="number"
                placeholder="{{ __('price') }}"
                value="{{ old('price', $product->price) }}"
                @error('price')
                error="{{ $message }}"
                @enderror
                autocomplete="off"
            >
        </div>
        <div class="form-group col-md-6">
            <input
                rules="required|string"
                name="url_image"
                id="url_image"
                type="text"
                placeholder="{{ __('url_image') }}"
                value="{{ old('url_image', $product->url_image) }}"
                @error('url_image')
                error="{{ $message }}"
                @enderror
                autocomplete="off"
            >
        </div>
        <div class="form-group col-md-12">
            <textarea
                rules="required|max:500"
                name="description"
                id="description"
                type="text"
                placeholder="{{ __('description') }}"
                value="{{ old('description', $product->description) }}"
                @error('description')
                error="{{ $message }}"
                @enderror
                autocomplete="off"
            ></textarea>
        </div>
    </div>
</div>
