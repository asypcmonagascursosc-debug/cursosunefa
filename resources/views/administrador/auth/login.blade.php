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
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('plantilla/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/vendor/fontawesome-7.0.1/css/all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('plantilla/vendor/bootstrap-5.3.8.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('plantilla/css/aos.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/css/swiper-bundle-11.2.10.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plantilla/vendor/perfect-scrollbar/perfect-scrollbar-1.5.6.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('plantilla/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            
                            <img class="img-fluid" width="200" height="200" src="{{asset('frontdend/img/logo.jpg')}}" alt="">
                            
                        </div>
                        <div class="login-form">
                            <form action="{{route('validar')}}" method="post">
                                @CSRF
                                <div class="form-group">
                                    <label>Correo Electronico</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                   
                                    
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Ingresar</button>
                               
                            </form>
                            
                                           @error('email')
            
             <div class="alert alert-danger">
                <ul>
                <li> {{ $message }}</li>
              </ul>
              </div>
          
          
          @enderror
          @error('password')
            
          <div class="alert alert-danger">
    <ul>
              <li> {{ $message }}</li>
              </ul>
            </div>

        
        @enderror 
                                  
                                <div class="register-link"> 
                                    <a href="{{url('/')}}">Regresar a la pagina Principal</a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
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
