<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edukate - Online Education Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frondend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frondend/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('frondend/css/css2')}}" rel="stylesheet">
         <link href="{{asset('frondend/css/all.min.css')}}" rel="stylesheet">


 
</head>

<body>
    <div class="page-wrapper">
     
        <!--cabecera head-->
        @include('administrador.plantilla.head')
       <!-- menu izquierdo-->
       @include('administrador.plantilla.menu')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('administrador.plantilla.config')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                       
                        <div class="row">
                            <div class="col-lg-12">
                               @yield('contenido')
                            </div>
                           
                        </div>
                      
                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2025 Colorlib. All rights reserved. Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
     <!-- Jquery JS-->
     <script src="{{asset('plantilla/js/vanilla-utils.js')}}"></script>
     <!-- Bootstrap JS-->
     <script src="{{asset('plantilla/vendor/bootstrap-5.3.8.bundle.min.js')}}"></script>
     <!-- Vendor JS       -->
     <script src="{{asset('plantilla/vendor/perfect-scrollbar/perfect-scrollbar-1.5.6.min.js')}}"></script>
     <script src="{{asset('plantilla/vendor/chartjs/chart.umd.js-4.5.0.min.js')}}"></script>
 
     <!-- Main JS-->
     <script src="{{asset('plantilla/js/bootstrap5-init.js')}}"></script>
     <script src="{{asset('plantilla/js/main-vanilla.js')}}"></script>
     <script src="{{asset('plantilla/js/swiper-bundle-11.2.10.min.js')}}"></script>
     <script src="{{asset('plantilla/js/aos.js')}}"></script>
     <script src="{{asset('plantilla/js/modern-plugins.js')}}"></script>

   



</body>

</html>
<!-- end document-->
