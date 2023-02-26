<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="bg-gray-200">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-success shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center m-2">Welcome</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                @guest
                                <a href="/login" type="submit" class="btn bg-gradient-success w-100 my-3 mb-2">
                                    <span class="d-sm-inline d-none">Login</span>
                                </a>
                                @endguest
                                @auth
                                <form action="#" id="form-logout" method="post">
                                    @csrf
                                    <button type="submit" type="submit" class="btn bg-gradient-success w-100 my-4 mb-2"
                                        onclick="Submit(e)">
                                        <span class="d-sm-inline d-none">Logout</span>
                                    </button>
                                </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                © <script>
                                document.write(new Date().getFullYear())
                                </script>,
                                di buat dengan <i class="fa fa-heart" aria-hidden="true"></i> by
                                <a href="{{ env('APP_URL') }}" class="font-weight-bold text-white"
                                    target="_blank">Marleth Young Developer</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 my-auto text-white">
                            <div class="copyright text-end text-sm text-white text-lg-end">
                                And Support Design by <a href="https://www.creative-tim.com"
                                    class="font-weight-bold text-white" target="_blank">Creative tim</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    @include('partials.script')
</body>

</html>