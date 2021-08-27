<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('contents.index') }}">My Time Table</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto text-center">
                <a class="nav-link active" href="/show/TODO">TODO</a>
                <a class="nav-link active" href="/show/DOING">DOING</a>
                <a class="nav-link active" href="/show/DONE">DONE</a>
            </div>
        </div>
    </div>
</nav>