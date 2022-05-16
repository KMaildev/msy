@if ($message = Session::get('success'))
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="mb-0">
            {{ $message }}
        </p>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="mb-0">
            {{ $message }}
        </p>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="mb-0">
            {{ $message }}
        </p>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-dismissible alert-info">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="mb-0">
            {{ $message }}
        </p>
    </div>
@endif


@if ($errors->any())
    <!-- <div class="alert alert-solid-danger alert-dismissible d-flex align-items-center" role="alert">
    <i class="bx bx-xs bx-store me-2"></i>
    Please check the form below for errors
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div> -->
@endif
