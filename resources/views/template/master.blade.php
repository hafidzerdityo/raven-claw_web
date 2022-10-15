<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200;300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Vendor CSS -->
    {{-- <link rel="stylesheet" href="./assets/css/libs.bundle.css" /> --}}
    <link rel="stylesheet" href="{{ asset('../../../assets/css/libs.bundle.css')}}" />

    <!-- Main CSS -->
    {{-- <link rel="stylesheet" href="./assets/css/theme.bundle.css" /> --}}
    <link rel="stylesheet" href="{{ asset('../../../assets/css/theme.bundle.css')}}" />
    <link rel="stylesheet" href="{{ asset('../../../assets/css/custom.css')}}" />

    {{-- VUETIFY --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet"> --}}

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Aplikasi Pengajuan Permohonan</title>
    
</head>
<body class="">

  <div id="app"></div>
    @include('template.navbar')
    @include('sweetalert::alert')
    @yield('main-content')
    @include('template.aside')

          {{-- <!-- Footer -->
      <footer class="footer">
          <p class="small text-muted m-0">All rights reserved | © 2021</p>
          <p class="small text-muted m-0">Template created by <a href="https://www.pixelrocket.store/">PixelRocket</a></p>
      </footer> --}}
      
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.7.10/dist/vue.js"></script> --}}
    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="../assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="../assets/js/theme.bundle.js"></script>

    <!-- custom -->
    <script src="../assets/js/custom.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script> --}}
    {{-- @yield('vue-script') --}}
</body>

</html>