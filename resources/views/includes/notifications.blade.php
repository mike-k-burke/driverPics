@if(session()->has('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }}</p>
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-warning">
        <p>{{ session('error') }}</p>
    </div>
@endif