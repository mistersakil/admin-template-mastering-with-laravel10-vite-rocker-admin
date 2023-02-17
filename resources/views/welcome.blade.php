<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon-32x32.png') }}" type="image/png" />
    <title>Eakh</title>

    <!-- Google fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        <!--sidebar wrapper -->
        @includeIf('layout.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @includeIf('layout.header')
        <!--end header -->
        <!--start page wrapper -->
        @includeIf('layout.content')

        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
            <h1 id="hello">Hello</h1>
        </footer>

    </div>
    <!-- /.wrapper -->
</body>

</html>
