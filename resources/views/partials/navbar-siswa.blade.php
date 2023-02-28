<nav
    class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid ps-2 pe-0">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/siswa/dashboard">
            <img src="{{ asset('assets/img/sijuma-nav.png') }}" class="" width="100" height="35" alt="main_logo">
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav d-lg-flex">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('siswa/dashboard') ? 'active text-success' : "" }}"
                        href="/siswa/dashboard">
                        <i class="fa fa-home me-sm-1"></i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('siswa/sertifikat') ? 'active text-success' : "" }}"
                        href="/siswa/sertifikat">
                        <i class="fa fa-home me-sm-1"></i>
                        <span class="nav-link-text ms-1">Sertifikat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('siswa/nilai-nonteknis') ? 'active text-success' : "" }}"
                        href="/siswa/nilai-nonteknis">
                        <i class="fa fa-home me-sm-1"></i>
                        <span class="nav-link-text ms-1">Nilai Non Teknis</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal" type="button">
                        <i class="fas fa-sign-out-alt fixed-plugin-button-nav cursor-pointer"></i>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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