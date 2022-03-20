<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/backend/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/backend/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>

    <!-- Google font-->
    <link href="assets/backend/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="assets/backend/css-1?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/assets/backend/css/vendors/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/backend/css/vendors/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/backend/css/vendors/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="/assets/backend/css/vendors/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="/assets/backend/css/vendors/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/backend/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/backend/css/admin.css">
	
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        @include('layouts.backoffice.header')
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            @include('layouts.backoffice.sidebar')
            @include('layouts.backoffice.chat')
            <div class="page-body">
            @yield('content')
            </div>
            @include('layouts.backoffice.footer')
        </div>
    </div>

    <!-- latest jquery-->
    <script src="/assets/backend/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="/assets/backend/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/backend/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/backend/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/backend/js/sidebar-menu.js"></script>
	
	<!-- Datatables js-->
	<script src="/assets/backend/js/datatables/jquery.dataTables.min.js"></script>
	<script src="/assets/backend/js/datatables/custom-basic.js"></script>

    <!--chartist js-->
    <script src="assets/backend/js/chart/chartist/chartist.js"></script>

    <!--chartjs js-->
    <script src="assets/backend/js/chart/chartjs/chart.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/backend/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="assets/backend/js/prism/prism.min.js"></script>
    <script src="assets/backend/js/clipboard/clipboard.min.js"></script>
    <script src="assets/backend/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="assets/backend/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/backend/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/backend/js/counter/counter-custom.js"></script>

    <!--peity chart js-->
    <script src="assets/backend/js/chart/peity-chart/peity.jquery.js"></script>

    <!--sparkline chart js-->
    <script src="assets/backend/js/chart/sparkline/sparkline.js"></script>

    <!--Customizer admin-->
    <script src="assets/backend/js/admin-customizer.js"></script>

    <!--dashboard custom js-->
    <script src="assets/backend/js/dashboard/default.js"></script>

    <!--right sidebar js-->
    <script src="assets/backend/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="assets/backend/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="assets/backend/js/lazysizes.min.js"></script>

    <!--script admin-->
    <script src="assets/backend/js/admin-script.js"></script>

</body>
</html>