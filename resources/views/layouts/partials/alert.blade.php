@if (Session::has('message') || Session::has('success') || Session::has('error') || Session::has('warning'))
    <div class="mb-3" data-theme="dark">

        @if (Session::has('message'))
            <div class="alert alert-info alert-dismissible fade show" data-theme="dark" role="alert">
                <span class="alert-icon align-middle">
                    <i class="fa text-info fa-exclamation-circle"></i>
                </span>
                <span class="alert-text"><strong>Info!</strong> {!! Session::get('message') !!} </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" data-theme="dark" role="alert">
                <span class="alert-icon align-middle">
                    <i class="fa fa-thumbs-up text-success"></i>
                </span>
                <span class="alert-text"><strong>Success!</strong> {!! Session::get('success') !!} </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" data-theme="dark" role="alert">
                <span class="alert-icon  align-middle">
                    <i class="fa text-info fa-skull-crossbones"></i>
                </span>
                <span class="alert-text"><strong>Error!</strong> {!! Session::get('error') !!} </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::has('warning'))
            <div class="alert alert-warning alert-dismissible fade show" data-theme="dark" role="alert">
                <span class="alert-icon align-middle">
                    <i class="fa text-info fa-stop-circle"></i>
                </span>
                <span class="alert-text "><strong>Warning!</strong> {!! Session::get('warning') !!} </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

    </div>
@endif

@if (Session::has('exception'))
    <div class="alert alert-danger" data-theme="dark" role="alert">
        <span class="alert-icon  align-middle">
            <i class="fa fa-bug me-3"></i>
        </span>
        <span class="alert-text">
            <strong>Exception Occured</strong>
            <hr>
            {!! Session::get('exception') !!}
        </span>
    </div>
@endif
