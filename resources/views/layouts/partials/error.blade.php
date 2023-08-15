@if ($errors->any())
    <div class="alert alert-danger mb-5" role="alert">
        <span class="alert-icon  align-middle me-3">
            <i class="fa fa-bomb"></i>
        </span>
        <span class="alert-text">
            <strong>Form Has Errors</strong>
            <hr>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    </div>
@endif

@if (Session::has('html'))
    <div class="alert alert-danger text-white mb-5" data-theme="dark" role="alert">
        <span class="alert-icon  align-middle me-3">
            <i class="bi bi-alarm-fill text-danger"></i>
        </span>
        <span class="alert-text">
            <strong>Form Has Errors</strong>
            <hr>
            <ul>
                {!! Session::get('html') !!}
            </ul>
        </span>
    </div>
@endif

