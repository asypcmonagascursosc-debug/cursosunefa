@extends('administrador.plantilla.base')

@section('contenido')
<section class="welcome p-t-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-4">Información Principal
                    <span></span>
                </h1>
                <hr class="line-seprate">
            </div>
        </div>
    </div>
</section>
<section class="statistic statistic2">
    <div class="container">
        <div class="row">
          
            @php $colores = ['statistic__item statistic__item--orange','statistic__item statistic__item--green' ,'statistic__item statistic__item--blue', 'statistic__item statistic__item--red'];
            
           
            @endphp
          
            @foreach ($cursos as $curso)
           
            <div class="col-md-6 col-lg-3">
                <div class="{{$colores[$loop->index]}}">
                    <h2 class="number">{{$curso->total}}</h2>
                    <a href="{{ route('inicio.show', $curso->curso_id) }}" target="_blank"><span class="desc">{{$curso->nombre}}</span></a>
                   
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            
            @endforeach
            
            
        </div>
    </div>
</section>
@endsection