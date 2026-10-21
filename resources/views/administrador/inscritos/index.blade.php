


@extends('administrador.plantilla.base')
@section('css')

    <style>
/* Estilo base azul para todos los botones de paginación de texto */
.btn-azul-dt {
    background-color: #007bff !important; /* Color azul */
    color: #ffffff !important;            /* Texto blanco */
    padding: 4px 4px;
    border-radius: 4px;
    display: inline-block;
    font-weight: 500;
    transition: background-color 0.2s ease;
}

/* Efecto hover */
.btn-azul-dt:hover {
    background-color: #0056b3 !important; /* Azul más oscuro al pasar el mouse */
    color: #ffffff !important;
}

/* Iconos blancos */
.btn-azul-dt i {
    color: #ffffff !important;
    margin: 0 4px;
}

/* Limpieza del contenedor nativo de DataTables */
#zero_config_wrapper .dataTables_paginate .paginate_button {
    background: transparent !important;
    border: none !important;
    padding: 0 !important;
    margin: 0 4px;
}

/* Estado deshabilitado (ej: Primero y Anterior cuando estás en la página 1) */
#zero_config_wrapper .dataTables_paginate .paginate_button.disabled .btn-azul-dt {
    background-color: #e0e0e0 !important;
    color: #a1a1a1 !important;
    cursor: not-allowed;
}
#zero_config_wrapper .dataTables_paginate .paginate_button.disabled .btn-azul-dt i {
    color: #a1a1a1 !important;
}

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
    color: #c31313 !important;                /* Color de texto */
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

        /* 1. Forzar color de los botones Anterior y Siguiente */
div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item .page-link,
#zero_config_wrapper .dataTables_paginate .paginate_button,
#zero_config_next, 
#zero_config_previous {
    background-color: #4CAF50 !important; /* Pon aquí tu color de fondo */
    color: #ffffff !important;            /* Pon aquí tu color de texto */
    border: 1px solid #3e8e41 !important;
    border-radius: 4px !important;
    padding: 6px 12px !important;
}

/* 2. Forzar color de los iconos de FontAwesome dentro de los botones */
#zero_config_wrapper .dataTables_paginate .paginate_button i,
#zero_config_wrapper .page-link i {
    color: #ffffff !important; 
}

/* 3. Forzar color al pasar el mouse por encima (Hover) */
div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item .page-link:hover,
#zero_config_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #45a049 !important; /* Fondo al pasar el mouse */
    color: #ffffff !important;
}

/* 4. Forzar color cuando están deshabilitados (ej: Anterior en la página 1) */
div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.disabled .page-link,
#zero_config_wrapper .dataTables_paginate .paginate_button.disabled {
    background-color: #e0e0e0 !important; /* Fondo deshabilitado */
    color: #a1a1a1 !important;            /* Texto deshabilitado */
    border-color: #ddd !important;
    opacity: 0.6;
    cursor: not-allowed !important;
}

    </style>
@endsection

@section('contenido')


<div class="col-md-12">
   @isset ($mensaje)
<div class="alert alert-success">
   <h1> {{ $mensaje }}</h1>
</div>
@endisset
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <!-- DATA TABLE -->
    <h3 class="title-5 m-b-35">Estudiantes Inscritos</h3>
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
                    Cedula</th>
                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending">
                    Nombre y Apellido</th>
                   
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending">
                    Nombre del Curso</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending">
                    Municipio</th>
                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending">
                    Parroquia</th>
                     <th style="width: 40%; class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                    colspan="1" aria-sort="ascending"
                    aria-label="Name: activate to sort column descending" >
                    Acciones</th>
               
              
            </tr>
        </thead>
        <tbody class="">
            @foreach ($estudiantes as $curso)
                <tr role="" class="">
                    <td class="sorting_1">{{ $curso->cedula }}</td>
    
                    <td >{{ $curso->nombre.' '.$curso->apellido }}</td>
                    
                    <td>{{ $curso->tema }}</td>
                    <td>{{ $curso->municipio }}</td>
                    <td>{{ $curso->parroquia }}</td>
                    
    
                    <td style="width: 180px; height: 50px;">
    
    
                         <a href="{{ route('estudianteinscritos.show', $curso->cedula) }}"
                            class="btn btn-info btn-sm text-white"
                    ">Editar
                        </a>
                      
                        <a href="{{ route('estudianteinscritos.edit', $curso->cedula) }}"
                            class="btn btn-info btn-sm text-white"
                    ">Historial
                        </a>
                         
                    </td>
    
                </tr>
              
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
        <script>
            /****************************************
             *       Basic Table  $('#zero_config').DataTable();                 *
             ****************************************/
    
            var idioma =
    
                {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior",
             // Añadimos iconos y la clase azul a los cuatro botones:
        "sFirst": "<span class='btn-azul-dt'><i class='fa fa-angle-double-left'></i> Primero</span>",
        "sLast": "<span class='btn-azul-dt'>Último <i class='fa fa-angle-double-right'></i></span>",
        "sNext": "<span class='btn-azul-dt'>Siguiente <i class='fa fa-chevron-right'></i></span>",
        "sPrevious": "<span class='btn-azul-dt'><i class='fa fa-chevron-left'></i> Anterior</span>"
     },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copyTitle": 'Informacion copiada',
                        "copyKeys": 'Use your keyboard or menu to select the copy command',
                        "copySuccess": {
                            "_": '%d filas copiadas al portapapeles',
                            "1": '1 fila copiada al portapapeles'
                        },
    
                        "pageLength": {
                            "_": "Mostrar %d filas",
                            "-1": "Mostrar Todo"
                        }
                    }
                };
    

    
    
    
            var table = $('#zero_config').DataTable({
    
  
    
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "language": idioma,
              
                "lengthMenu": [
                    [5, 10, 20, -1],
                    [5, 10, 50, "Mostrar Todo"]
                ],
                dom: 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',
    
                columnDefs: [{
                        target: 5,
                        visible: false,
                        searchable: true
                    }
    
                ],
                columnDefs: [{
                        target: 2,
                        visible: false,
                        searchable: true
                    }
    
                ],
                buttons: {
                    dom: {
                        container: {
                            tag: 'div',
                            className: 'flexcontent'
                        },
                        buttonLiner: {
                            tag: null
                        }
                    },
    
    
    
    
                    buttons: [
    
    
    
                     
    
                        
                     
                        {
                            extend: 'pageLength',
                            titleAttr: 'Registros a mostrar',
                            className: 'selectTable'
                        }
                    ]
    
    
                }
    
    
    
    
    
            });
        </script>
        

@endsection