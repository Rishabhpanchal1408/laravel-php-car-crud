@if (session()->has('message'))
    <div class="w-50 mx-auto">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>{{ session('message')[0] }}</strong>{{ session('message')[1] }}
        </div>
    </div>
@endif
