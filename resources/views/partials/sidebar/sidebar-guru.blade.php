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
                <a class="nav-link text-white {{ Request::is('guru/dashboard') ? 'active bg-gradient-success' : "" }}"
                    href="/guru/dashboard">
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
                <a class="nav-link text-white {{ Request::is('guru/siswapkl') ? 'active bg-gradient-success' : "" }}"
                    href="/guru/siswapkl">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user me-sm-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Siswa PKL</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('guru/nilai-nonteknis') ? 'active bg-gradient-success' : "" }}"
                    href="/guru/nilai-nonteknis">
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