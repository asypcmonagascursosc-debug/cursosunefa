<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>UNEFA - CFP</title>
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

            </div>
        </nav>
    </div>
    <!-- Navbar End -->


   


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            @if (session('success'))
<div class="alert alert-success">
   <h1> {{ session('success') }}</h1>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Localizacion</h4>
                                <p class="m-0"></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Telefonos</h4>
                                <p class="m-0"></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email</h4>
                                <p class="m-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">

                        <h1 class="display-6">Datos de Inscripción Para el curso: </h1>
                        <h3 class="display-8">{{$curso->nombre}} </h3>
                    </div>
                    <div class="contact-form">
                        <form action="{{ route('estudiante.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                            <div class="col-6 form-group">
                                <select name="nacionalidad" id="nacionalidad" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Municipio" required="required" >
                                    <option value="V">VENEZOLANO</option>
                                    <option value="E">EXTRANJERO</option>
                                    
                                 </select>   
                            </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="cedula" id="cedula" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su numero de cedula" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="nombre" id="nombre" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su Nombre" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="apellido" id="apellido" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su Apellido" required="required">
                                </div>
                                <div class="col-6 form-group">
                                <select name="codarea" id="codarea" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Municipio" required="required" >
                                    <option value="416">0416</option>
                                    <option value="426">0426</option>
                                    <option value="414">0414</option>
                                    <option value="424">0424</option>
                                    <option value="412">0412</option>
                                    <option value="422">0422</option>
                                    
                                 </select> 
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="telefono" id="telefono" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su Numero telefonico " required="required">
                                </div>
                                <div class="col-9 form-group">
                                    <input type="email" name="email" id="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su correo electronico" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="">Municipio</label>
                                    
                                    <select name="municipio" id="municipio" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Municipio" required="required" >
                                       <option value="">Seleccione un Municipio</option>
                                        @foreach ($municipios as $municipio)
                                        <option value="{{$municipio->id}}">{{$municipio->municipio}}</option>
                                        @endforeach
                                    </select>
                                    <input type="text"name="curso_id" value="{{$curso->id}}" hidden>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="" id="parroquia">Parroquia</label>
                                    <select name="parroquia" id="parroquia1" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Municipio" required="required" >
                                        <option value="">Seleccione una Parroquia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="direccion" id="direccion" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Dirección(Comunidad,calle,casa) " required="required">
                            </div>
                           <input type="text" id="actualizar" name="actualizar" value="" hidden>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Inscribir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
    <script src="{{asset('frontdend/lib//jquery-3.4.1.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontdend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontdend/js/main.js')}}"></script>
    <!-- Validar municipio-->
    <script>
        $(document).ready(function() {
        
        $(document).on('change', '#municipio', function() {
            var query = $(this).val();

    const municipioId = this.value;
   
                        
                            
                                 $.ajax({
                        url: "{{ route('buscar_parroquias') }}",
                        type: "GET",
                        data: {
                            q: query
                        },
                        success: function(data) {
                           
                              $('#parroquia1').empty();
                            $('#parroquia1').append('<option value="">Seleccione una Parroquia </option>');
                           $.each(data, function(key, value) {
                             $('#parroquia1').append('<option value="'+value.parroquia+'">'+value.parroquia+' </option>');


                            });
                           
                         
                         
                        }
                    
                    });
                                
                              
                                                        
                       
                 
   
        
       
});


//buscar cedula
 $(document).on('blur', '#cedula', function() {
            var query = $(this).val();

    const municipioId = this.value;
   
                        
                            
                                 $.ajax({
                        url: "{{ route('buscar_cedula') }}",
                        type: "GET",
                        data: {
                            q: query
                        },
                        success: function(data) {
                            if((data[0].nombre)){
                            const nombre = document.getElementById('#nombre');
                           
                             $('#nombre').val(data[0].nombre);
                              $('#apellido').val(data[0].apellido);

                             $('#direccion').val(data[0].direccion);
                             $('#telefono').val(data[0].telefono);
                             $('#email').val(data[0].email);
                             $('actualizar').val('1');
                             document.getElementById('nombre').readOnly = true;
                             document.getElementById('direccion').readOnly = true;
                             document.getElementById('apellido').readOnly = true;
                             document.getElementById('telefono').readOnly = true;
                             document.getElementById('email').readOnly = true;
                             document.getElementById('nacionalidad').disabled = true;

                           
                            document.getElementById('codarea').disabled = true;

                            // 1. Obtener referencia al select
                            var parroquia1 = document.getElementById("parroquia1");
                                    $('#parroquia1').empty();
                                    $('#parroquia1').append('<option value="data[0].parroquia">'+data[0].parroquia+'</option>');
                                 $('#municipio').empty();
                                    $('#municipio').append('<option value="'+data[0].municipio+'">'+data[0].municipio+'</option>');
                        
                         }else{
                               $('#apellido').val(data[0].apellido);

                             $('#direccion').val(data[0].direccion);
                             $('#telefono').val(data[0].telefono);
                             $('#email').val(data[0].email);
                             document.getElementById('nombre').readOnly = false;
                             document.getElementById('direccion').readOnly = false;
                             document.getElementById('apellido').readOnly = false;
                             document.getElementById('telefono').readOnly = false;
                             document.getElementById('email').readOnly =false;
                             document.getElementById('nacionalidad').readOnly = false;

                            document.getElementById('codarea').hidden = false;



                         }
                         
                        }
                    
                    });
                                
                              
                                                        
                       
                 
   
        
       
});


 });
        </script>   

       
</body>

</html>