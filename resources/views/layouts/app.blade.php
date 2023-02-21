<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}"> -->
    <title>
        {{ isset($title) ? $title : "SIJUMA"}}
    </title>
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="{{ asset('assets/js/fontawesome.js') }}"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body class="g-sidenav-show bg-gray-200">

    @include('partials.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('partials.navbar')
        <div class="container-fluid py-4">
            @yield('content')
        </div>
        @include('sweetalert::alert')
        @include('partials.footer')
    </main>

    @include('partials.script')

</body>

</html>