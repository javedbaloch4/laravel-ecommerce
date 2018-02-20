@if (session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif