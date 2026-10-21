


@extends('administrador.plantilla.base')
@section('css')
<link href={{ asset('dist/css/dataTables.dataTables.min.css') }}rel="stylesheet">
<link href={{ asset('dist/css/autoFill.dataTables.min.css') }}rel="stylesheet">
<link href={{ asset('dist/css/buttons.dataTables.min.css') }}rel="stylesheet">
    <style>
        :after,
        :before {
            box-sizing: border-box;
        }

        a {
            color: #337ab7;
            text-decoration: none;
        }

        i {
            margin-bottom: 4px;
        }

        .btn {
            display: inline-block;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }


        .btn-app {
            color: white;
            box-shadow: none;
            border-radius: 3px;
            position: relative;
            padding: 10px 15px;
            margin: 0;
            min-width: 100px;
            max-width: 80px;
            text-align: center;
            border: 1px solid #ddd;
            background-color: #f4f4f4;
            font-size: 14px;
            transition: all .2s;
            background-color: steelblue !important;
        }

        .btn-app>.fa,
        .btn-app>.glyphicon,
        .btn-app>.ion {
            font-size: 30px;
            display: block;
        }

        .btn-app:hover {
            border-color: #aaa;
            transform: scale(1.1);
        }

        .pdf {
            background-color: #dc2f2f !important;
        }

        .excel {
            background-color: #3ca23c !important;
        }

        .csv {
            background-color: #e86c3a !important;
        }

        .imprimir {
            background-color: #8766b1 !important;
        }

        /*
    Esto es opcional pero sirve para que todos los botones de exportacion se distribuyan de manera equitativa usando flexbox

    .flexcontent {
        display: flex;
        justify-content: space-around;
    }
    */

        .selectTable {
            height: 40px;
            float: right;
        }

        div.dataTables_wrapper div.dataTables_filter {
            text-align: left;
            margin-top: 15px;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
    background-color: #f0f0f0 !important; /* Color de fondo */
    color: #333 !important;                /* Color de texto */
    border: 1px solid #ccc !important;    /* Borde */
}
        .btn-secondary {
            color: #fff;
            background-color: #4682b4;
            border-color: #4682b4;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #315f86;
            border-color: #545b62;
        }



        .titulo-tabla {
            color: #606263;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
            font-weight: bold;
        }






        .inline {
            display: inline-block;
            padding: 0;
        }
    </style>
@endsection

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
    <h3 class="title-5 m-b-35">PARROQUIAS DEL MUNICIPIO {{ $municipio->municipio }}</h3>
    <div class="table-data__tool">
      
        <div class="table-data__tool-right">
           
         
             
         
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
                    Nombre</th>
               
                     <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-sort="ascending"
                    aria-label="Name: activate to sort column descending" >
                    Acciones</th>
               
              
            </tr>
        </thead>
        <tbody class="">
            @foreach ($parroquias as $parroquia)
            <form action="{{ route('municipio.destroy', $parroquia->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE') {{-- Spoofing para usar DELETE en HTML --}}
                <tr role="" class="">
    
                    <td class="sorting_1">{{ $parroquia->parroquia }}</td>
                    
                    
    
                    <td style="width: 500px; height: 50px;">
    
    
                       
                        <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar esta Parroquia?')"
                            class="btn btn-danger btn-sm text-white"
                            "><i class="fa-solid far fa-trash"></i> Eliminar
                        </button>
                        
                      <input type="text" name="municipio_id" id="" value="{{ $municipio->id }}" hidden>
                        
                       
                    </td>
    
                </tr>
            </form>
            @endforeach
    
        </tbody>
    
    </table>
        <div class="d-flex justify-content-center">
           <!--barra-->
        </div>
    </div>
    
   
    <!-- END DATA TABLE -->
    
</div>


        @endsection

        @section('js')
        <script src={{ asset('assets/libs/jquery/dist/jquery-3.7.1.js') }}></script>
        <script src={{ asset('assets/libs/jquery/dist/dataTables.js') }}></script>
        <script src={{ asset('assets/libs/jquery/dist/dataTables.buttons.js') }}></script>
        <script src={{ asset('assets/libs/jquery/dist/buttons.dataTables.js') }}></script>
        <script src={{ asset('assets/libs/jquery/dist/buttons.print.min.js') }}></script>
        <script src={{ asset('assets/libs/jquery/dist/buttons.colVis.min.js') }}></script>
    
    
    
        <script src={{ asset('assets/libs/jquery/dist/pdfmake.min.js') }}></script>
        <script src={{ asset('assets/libs/jquery/dist/vfs_fonts.js') }}></script>
        <script src={{ asset('assets/libs/jquery/dist/jszip.min.js') }}></script>
        <script src={{ asset('assets/libs/jquery/dist/buttons.html5.min.js') }}></script>
        

@endsection