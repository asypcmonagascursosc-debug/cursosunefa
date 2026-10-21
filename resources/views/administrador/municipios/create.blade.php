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
                <div class="card-header bg-info ">Agregar Parroquia al municipio {{ $municipio->municipio }}</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2 card-title ">Datos de la Parroquia</h3>
                    </div>
                    <hr>
                    <form action="{{ route('municipio.store') }}" method="post" novalidate="novalidate"
                        enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="cc-payment" class="control-label mb-1">Nombre de la Parroquia</label>
                            <input id="cc-pament" name="nombre" type="text" class="form-control" aria-required="true"
                                aria-invalid="false">
                                <input type="text" value="{{ $municipio->id }}" name="municipio_id" hidden>
                        </div>
                       
                      
                       
                       
                      
                      
                        <br>
                    

                      

                     

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