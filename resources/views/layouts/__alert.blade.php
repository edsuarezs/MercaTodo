
@if(session()->has('success'))
    <p-alert variant="success" dismiss="0">
        <p>{{ session('success') }}</p>
    </p-alert>
@endif

@if(session()->has('info'))
    <p-alert variant="info" dismiss="0">
        <p>{{ session('info') }}</p>
    </p-alert>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
           - {{ $error }} <br>
        @endforeach
    </div>
@endif
