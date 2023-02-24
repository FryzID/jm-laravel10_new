<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="bg-white border rounded">
        <a class="px-3" href="/" target="_blank">
            <!-- <img src="{{ asset('assets/img/logo-ct.png') }}" class="" width="140" height="120" alt="main_logo"> -->
            <span class="ms-1 font-weight-bold text-white">SIJUMA</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == '') ? "active bg-gradient-success" : "" }}"
                    href="/">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-home me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">MASTER DATA</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'jurusan') ? "active bg-gradient-success" : "" }}"
                    href="/humas/jurusan">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Jurusan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'kelas') ? "active bg-gradient-success" : "" }}"
                    href="/humas/kelas">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'tapels') ? "active bg-gradient-success" : "" }}"
                    href="/humas/tapel">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tapel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'dudis') ? "active bg-gradient-success" : "" }}"
                    href="/humas/dudi">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dudi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'gurus') ? "active bg-gradient-success" : "" }}"
                    href="/humas/guru">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'humas') ? "active bg-gradient-success" : "" }}"
                    href="/humas/datahumas">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Humas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'siswas') ? "active bg-gradient-success" : "" }}"
                    href="/humas/siswa">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'kelassiswas') ? "active bg-gradient-success" : "" }}"
                    href="/humas/kelassiswa">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelas Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ (Request::segment(1) == 'siswapkls') ? "active bg-gradient-success" : "" }}"
                    href="/humas/siswapkl">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Siswa PKL</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn bg-gradient-success mt-4 w-100" type="button">Logout</button>
            </form>
        </div>
    </div>
</aside>