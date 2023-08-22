 <div class="container-fluid p-0 nav-bar bg-secondary">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">DIABETES</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Beranda</a>
                    <a href="{{url('cek')}}" class="nav-item nav-link">Cek Mandiri</a>
                    <a href="{{url('login')}}" class="nav-item nav-link">Masuk</a>
                </div>
            </div>
        </nav>
    </div>