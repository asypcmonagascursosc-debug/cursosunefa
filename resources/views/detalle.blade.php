<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DEATALLE - CURSO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
  
    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontdend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontdend/css/style.css')}}" rel="stylesheet">
         <link href="{{asset('frondend/css/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap')}}" rel="stylesheet">
         <link href="{{asset('frondend/css/all.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand ml-lg-3">
                
                                <h1 class="m-0 text-uppercase text-primary"><img class="img-fluid" width="80" src="{{asset('frontdend/img/logo.jpg')}}" alt="">UNEFA-MONAGAS</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{route('welcome.index')}}" class="nav-item nav-link active">INICIO</a>
                    <a href="about.html" class="nav-item nav-link"></a>
                    <a href="course.html" class="nav-item nav-link active"></a>
                   
                    
                </div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Registrarse</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->




    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                <div class="text-center section-title position-relative mb-5">
        
                    <h1 class="display-5">{{ $curso->nombre }}</h1>
                </div>
            </div>
                <div class="col-lg-8">
                    <div class="mb-5">
                        
                        <img class="img-fluid rounded   mb-4 "  src="/img/post/{{ $curso->contenido }}" alt="Image">

                        
                        <p></p>
                    </div>

                  
               </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Detalle del Curso</h3>
                       
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Fecha de Inicio</h6>
                            <h6 class="text-white my-3">{{ $curso->fechainicio }}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Fecha de Culminación</h6>
                            <h6 class="text-white my-3">{{ $curso->fechafinal }}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Duración</h6>
                            <h6 class="text-white my-3">{{ $curso->horas }} Hrs</h6>
                        </div>
                         <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Dias de Clase</h6>
                            <h6 class="text-white my-3">Sabado y Domingo</h6>
                        </div>
                       
                        
                        <h5 class="text-white py-3 px-4 m-0"></h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="{{route('estudiante.show',$curso->id)}}">Inscribir</a>
                        </div>
                    </div>

                  

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


 


   


  


  


 


 


   


  


    <!-- Footer Start -->
  
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">UNEFA-CFP</a>. Todos los derechos reservados.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="text-white m-0">DISEÑADO POR ESTUDIANTES DE INFORMATCA UPTNLSM
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


  
  
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontdend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontdend/js/main.js')}}"></script>
</body>

</html>