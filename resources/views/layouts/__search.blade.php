<form action="{{ $route }}" method="get" class="ml-3">
    <div class="input-group input-group-sm">
        <input type="search" name="search" id="search" value="{{ Request::get('search') }}" placeholder="{{ __('search') }}" class="form-control form-control-sm">
        <div class="input-group-append">
            <button class="input-group-text" type="submit">
                <i aria-hidden="true" class="fas fa-fw fa-search">Search</i>
            </button>
        </div>
    </div>
</form>
