@extends('administrador.plantilla.base')
@section('css')
<!-- Incluir CSS de Summernote -->
 <link href="{{asset('frontdend/css/style.css')}}" rel="stylesheet">
@endsection


@section('contenido')
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
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header bg-info ">Editar Estudiante</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2 card-title ">Datos del Estudiante</h3>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                    <div class="section-title position-relative mb-4">

                        <h1 class="display-6">Datos de Inscripción Para : </h1>
                        <h3 class="display-8">{{$estudiante->nombre}} {{$estudiante->apellido}} </h3>
                    </div>
                    <div class="contact-form">
                        <form action="{{ route('estudianteinscritos.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                            <div class="col-6 form-group">
                                <select name="nacionalidad" id="nacionalidad" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Municipio" required="required" >
                                    <option value="V">VENEZOLANO</option>
                                    <option value="E">EXTRANJERO</option>
                                    
                                 </select>   
                            </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="cedula" value="{{$estudiante->cedula}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su numero de cedula" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="nombre" value="{{$estudiante->nombre}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su Nombre" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="apellido" value="{{$estudiante->apellido}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su Apellido" required="required">
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
                                    <input type="text" name="telefono" value="{{$estudiante->telefono}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su Numero telefonico " required="required">
                                </div>
                                <div class="col-9 form-group">
                                    <input type="email" name="email" value="{{$estudiante->email}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Su correo electronico" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="">Municipio</label>
                                    
                                    <select name="municipio" id="municipio" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Municipio" required="required" >
                                       <option value="">Seleccione un Municipio</option>
                                        @foreach ($municipios as $municipio)
                                        <option value="{{$municipio->id}}">{{$municipio->municipio}}</option>
                                        @endforeach
                                    </select>
                                    <input type="text"name="curso_id" value="" hidden>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="" id="parroquia">Parroquia</label>
                                    <select name="parroquia" id="parroquia1" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Municipio" required="required" >
                                        <option value="">Seleccione una Parroquia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="direccion" value="{{$estudiante->direccion}}" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Dirección(Comunidad,calle,casa) " required="required">
                            </div>
                           
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>














    </div>

@endsection
@section('js')
    <!-- JavaScript Libraries -->
    <script src="{{asset('frontdend/lib//jquery-3.4.1.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontdend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontdend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontdend/js/main.js')}}"></script>

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
 });
        </script>   
@endsection