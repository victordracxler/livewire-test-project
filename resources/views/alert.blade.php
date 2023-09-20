{{-- <h1>
    @if (session()->has('success'))
        {{ session()->has('success')['title'] }}
        {{ session()->has('success')['message'] }}

    @endif
    @if (session()->has('error'))
    {{ session()->has('error')['title'] }}
    {{ session()->has('error')['message'] }}

    @endif
</h1> --}}

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <h6 class="alert-heading d-flex align-items-center mb-1"><strong>{{ session('success')['title'] }}</strong></h6>
        <p class="mb-0">{{ session('success')['message'] }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <h6 class="alert-heading d-flex align-items-center mb-1"><strong>{{ session('error')['title'] }}</strong></h6>
        <p class="mb-0">{{ session('error')['message'] }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-warning alert-dismissible" role="alert">
        <h6 class="alert-heading d-flex align-items-center mb-1"><strong>Ocorreram erros durante a criação:</strong></h6>
        <p class="mb-0">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif