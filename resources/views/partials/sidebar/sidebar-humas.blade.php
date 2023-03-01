<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="bg-white border rounded">
        <a class="px-3" href="/" target="_blank">
            <img src="{{ asset('assets/img/sijuma.png') }}" class="" width="200" height="90" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">SIJUMA</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/dashboard') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/dashboard">
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
                <a class="nav-link text-white {{ Request::is('humas/jurusan') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/jurusan">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Jurusan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/kelas') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/kelas">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/tapel') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/tapel">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tapel</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">MASTER DATA USER</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/dudi') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/dudi">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dudi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/guru') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/guru">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/datahumas') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/datahumas">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Humas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/siswa') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/siswa">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/kelassiswa') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/kelassiswa">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelas Siswa</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">MASTER DATA SISWA PKL</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/siswapkl') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/siswapkl">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Siswa PKL</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/sertifikat') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/sertifikat">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sertifikat Siswa PKL</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/jurnal') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/jurnal">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Jurnal Siswa PKL</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('humas/nilai-nonteknis') ? 'active bg-gradient-success' : "" }}"
                    href="/humas/nilai-nonteknis">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Nilai Non Teknis</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a href="#" class="btn bg-gradient-success mt-4 w-100" data-bs-toggle="modal" data-bs-target="#logoutModal"
                type="button">
                <i class="fas fa-sign-out-alt fixed-plugin-button-nav cursor-pointer"></i> Logout</a>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Untuk Logout?</h4>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Kembali</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</aside>