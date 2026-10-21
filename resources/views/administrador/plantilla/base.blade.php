<!DOCTYPE html>
<html lang="en">
    

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>PANEL ADMINISTRACIÓN</title>

  
   
    

    <link href="{{asset('plantilla/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/vendor/fontawesome-7.0.1/css/all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('plantilla/vendor/bootstrap-5.3.8.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('plantilla/css/aos.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('plantilla/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/css/swiper-bundle-11.2.10.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/vendor/perfect-scrollbar/perfect-scrollbar-1.5.6.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('plantilla/css/theme.css')}}" rel="stylesheet" media="all">

<style>
    .select-wrapper {
        display: inline-block;
        margin-right: 10px;
        vertical-align: top;
    }
    
    .form-select {
        display: inline-block;
        width: auto;
        min-width: 120px;
        padding: 0.375rem 2.25rem 0.375rem 0.75rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    .form-select:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    
    .form-select-sm {
        padding: 0.25rem 1.75rem 0.25rem 0.5rem;
        font-size: 0.8125rem;
        min-width: 100px;
    }
    
    .form-select-lg {
        padding: 0.5rem 2.75rem 0.5rem 1rem;
        font-size: 1rem;
        min-width: 140px;
    }
    
    .table-data__tool-left .select-wrapper {
        margin-right: 15px;
    }
    
    .table-data__tool-right .select-wrapper {
        margin-left: 10px;
    }
</style><style>
    .au-progress__inner {
        background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
        transition: width 0.3s ease-in-out;
    }
    
    .au-progress:nth-child(1) .au-progress__inner {
        background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
    }
    
    .au-progress:nth-child(2) .au-progress__inner {
        background: linear-gradient(90deg, #28a745 0%, #1e7e34 100%);
    }
    
    .au-progress:nth-child(3) .au-progress__inner {
        background: linear-gradient(90deg, #17a2b8 0%, #138496 100%);
    }
    
    .au-progress:nth-child(4) .au-progress__inner {
        background: linear-gradient(90deg, #ffc107 0%, #e0a800 100%);
    }
</style><style>
    .modern-lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
    }
    
    .lightbox-backdrop {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    
    .lightbox-content {
        position: relative;
        max-width: 90%;
        max-height: 90%;
        cursor: default;
    }
    
    .lightbox-content img {
        max-width: 100%;
        max-height: 100%;
        display: block;
    }
    
    .lightbox-close {
        position: absolute;
        top: -40px;
        right: 0;
        background: none;
        border: none;
        color: white;
        font-size: 30px;
        cursor: pointer;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .lightbox-open {
        overflow: hidden;
    }
</style></head>

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
                                @yield('css')
  @yield('contenido')
  @yield('js')
                            </div>
                           
                        </div>
                      
                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2026.Todo los derechos Reservados <a href="" rel="nofollow" target="_blank"> UNEFA-CFP</a>.</p>
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
  
     <!-- Bootstrap JS-->
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
     
 
    


     <!-- Requisitos de Bootstrap y jQuery (ejemplo con Bootstrap 5) -->

<!-- Incluir JS de Summernote -->



   



</body>

</html>
<!-- end document-->
