@extends('administrador.plantilla.base')
@section('css')
<!-- Incluir CSS de Summernote -->
<link rel="stylesheet" href="{{asset('plantilla/plugins/summernote/summernote-bs4.min.css')}}">
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
                <div class="card-header bg-info ">Creación de Cursos</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2 card-title ">Datos del Curso</h3>
                    </div>
                    <hr>
                    <form action="{{ route('curso.store') }}" method="post" novalidate="novalidate"
                        enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="cc-payment" class="control-label mb-1">Título</label>
                            <input id="cc-pament" name="nombre" type="text" class="form-control" aria-required="true"
                                aria-invalid="false">
                        </div>
                        <div class="mb-3">
                            <label for="cc-payment" class="control-label mb-1">Fecha de Inicio</label>
                            <input id="cc-pament" name="fechainicio" type="date" class="form-control" aria-required="true"
                                aria-invalid="false">
                        </div>
                        <div class="mb-3">
                            <label for="cc-payment" class="control-label mb-1">Fecha de Culminacion</label>
                            <input id="cc-pament" name="fechafinal" type="date" class="form-control" aria-required="true"
                                aria-invalid="false">
                        </div>
                        <div class="mb-3">
                            <label for="cc-payment" class="control-label mb-1">Termino</label>
                            <select name="termino" id="" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cc-payment" class="control-label mb-1">Cantidad de Horas</label>
                            <input id="cc-pament" name="horas" type="number" step="1" class="form-control" aria-required="true"
                                aria-invalid="false">
                        </div>
                      
                        <div class="mb-3">
                            <label for="cc-number" class="control-label mb-1">Contenido</label>
                            <input id="imagen2" name="imagen2" type="file" class="form-control cc-name valid"
                            data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name"
                            aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                            data-valmsg-replace="true"></span>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="cc-name" class="control-label mb-1">Imagen</label>

                            <input id="imagen" name="imagen" type="file" class="form-control cc-name valid"
                                data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name"
                                aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                data-valmsg-replace="true"></span>
                        </div>

                        <div class="mb-3">
                            <label for="cc-number" class="control-label mb-1">Estatus</label>
                            <select name="estatus" id="select" class="form-select">
                                
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                              
                            </select>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>

                     

                        <div class="d-grid">
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info">
                                <i class="fa-solid fa-save fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Guardar</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>














    </div>

@endsection
@section('js')
<script src="{{asset('plantilla/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('plantilla/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
  
   
    })
  </script>
@endsection