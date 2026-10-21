


@extends('administrador.plantilla.base')


@section('contenido')
@if (session('success'))
<div class="alert alert-success">
   <h1> {{ session('success') }}</h1>
</div>
@endif
@if (session('error'))
<div class="alert alert-danger">
   <h1> {{ session('error') }}</h1>
</div>
@endif

<div class="col-md-12">
    <!-- DATA TABLE -->
    <h3 class="title-5 m-b-35">Baner registrados</h3>
    <div class="table-data__tool">
      
        <div class="table-data__tool-right">
           
            <a href="{{route('baner.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small" >
                <i class="zmdi zmdi-plus"></i>Nuevo Baner</a>
             
         
        </div>
    </div>
    <div class="table-responsive table-responsive-data2 has-scroll">
        <table id="zero_config" class="table table-data2 table-striped table-bordered dataTable" role="grid"
        aria-describedby="zero_config_info">
        <thead class="thead-light">
            <tr class="tr-shadow">
                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-sort="ascending"
                    aria-label="Name: activate to sort column descending" >
                    Imagen</th>
                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending">
                    Estatus</th>
                     <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-sort="ascending"
                    aria-label="Name: activate to sort column descending" >
                    Acciones</th>
               
              
            </tr>
        </thead>
        <tbody class="">
            @foreach ($cursos as $curso)
                <tr role="" class="">
    
                    <td class="sorting_1">{{ $curso->imagen }}</td>
                    <td>{{ $curso->estatus }}</td>
                    
    
                    <td style="width: 580px; height: 50px;">
    
    
                        
                       @if($curso->estatus=='Activo')
                        <a href="{{ route('baner.edit', $curso->id) }}"
                            class="btn btn-secondary btn-sm text-white"
                            ">Desactivar 
                        </a>
                        @endif
                        @if($curso->estatus=='Inactivo')
                        <a href="{{ route('baner.edit', $curso->id) }}"
                            class="btn btn-secondary btn-sm text-white"
                            ">Activar 
                        </a>
                        @endif
                        <a href="{{ route('administrador.baner.destroy', $curso->id) }}"
                            class="btn btn-danger btn-sm text-white"
                            onclick="return confirm('¿Estas seguro de querer eliminar?')">Eliminar
                        </a>
                    </td>
    
                </tr>
              
            @endforeach
    
        </tbody>
    
    </table>
        <div class="d-flex justify-content-center">
            {{ $cursos->links() }}
        </div>
    </div>
    
   
    <!-- END DATA TABLE -->
    
</div>


        @endsection

        