<header class="mb-auto">
    <div>
    <h3 class="float-md-start mb-0">Adukan</h3>
    <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 {{ request()->segment(1) =='' ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Tentang Kami</a>
        <a class="nav-link fw-bold py-1 px-0 {{ request()->segment(1) =='login' ? 'active' : ''}}" href="/login">Login</a>
    </nav>
    </div>
</header>
