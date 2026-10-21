


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
    <h3 class="title-5 m-b-35">CURSOS REGISTRADOS</h3>
    <div class="table-data__tool">
      
        <div class="table-data__tool-right">
           
            <a href="{{route('curso.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small" >
                <i class="zmdi zmdi-plus"></i>Nuevo Curso</a>
             
         
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
    
                    <td class="sorting_1">{{ $curso->nombre }}</td>
                    <td>{{ $curso->estatus }}</td>
                    
    
                    <td style="width: 180px; height: 50px;">
    
    
                       
                        <a href="{{ route('curso.show', $curso->id) }}"
                            class="btn btn-info btn-sm text-white"
                            ">Editar
                        </a>
                        @if($curso->estatus=='Activo')
                        <a href="{{ route('curso.edit', $curso->id) }}"
                            class="btn btn-secondary btn-sm text-white"
                            ">Desactivar 
                        </a>
                        @endif
                        @if($curso->estatus=='Inactivo')
                        <a href="{{ route('curso.edit', $curso->id) }}"
                            class="btn btn-secondary btn-sm text-white"
                            ">Activar 
                        </a>
                        @endif
                        <a href="{{ route('administrador.curso.destroy', $curso->id) }}"
                            class="btn btn-danger btn-sm text-white"
                            onclick="return confirm('¿Estas seguro de querer eliminar?')">Eliminar
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
                        "sPrevious": "Anterior"
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
                        target: 2,
                        visible: true,
                        searchable: false
                    },
                    {
                        target: 2,
                        visible: false
                    },
                    {
                        target: 2,
                        visible: false
                    },
                    {
                        target: 2,
                        visible: false
                    },
                    {
                        target: 2,
                        visible: false
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
    
    
    
                      /*  {
                            extend: 'pdfHtml5',
                            text: '<i class="fas fa-file-pdf"> </i> PDF',
                            title: '',
                             alignment: 'center',
                            messageTop: 'Encabezado de página personalizado (Subtítulo/Fecha)',
                            titleAttr: 'PDF',
                            className: 'btn btn-app  text-white export pdf',
                             targets: '_all' ,
                            pageSize: 'LEGAL',
                            exportOptions: {
                                columns: [0, 1]
                            },
                            customize: function(doc) {
                                doc.content.splice(1, 0, {
                            margin: [100, 0, 100, 12],
                            alignment: 'center',
                            image:
                                'data:image/png;base64,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'
                            }),
        
    
                                doc.styles.title = {
                                    color: '#4c8aa0',
                                    fontSize: '30',
                                    alignment: 'center'
                                },
                                doc.styles['td:nth-child(2)'] = {
                                        width: '100px',
                                        'max-width': '100px'
                                    },
                                    doc.styles.tableHeader = {
                                        fillColor: '#4c8aa0',
                                        color: 'white',
                                        alignment: 'center',
                                        
                                    },
                                    doc.content[1].margin = [100, 0, 100, 0]
    
                            }
    
                        },
    
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fas fa-file-excel">  </i>  Excel',
                            title: 'Lista de Cursos',
                            titleAttr: 'Excel',
                            className: 'btn btn-app text-white export excel',
                            orientation: 'landscape',
                            pageSize: 'LEGAL',
                            exportOptions: {
                                columns: [0, 1]
                            }
                            
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fas fa-file-archive o"></i> CSV',
                            title: 'Lista de Cursos',
                            titleAttr: 'CSV',
                            className: 'btn btn-app text-white export csv',
                            orientation: 'landscape',
                            pageSize: 'LEGAL',
                            exportOptions: {
                                columns: [0, 1]
                            }
                        },
                        {
                            extend: 'print',
                            text: '<i class=" mdi mdi-printer"> </i>Imprimir',
                            title: 'Lista de Cursos',
                            titleAttr: 'Imprimir',
                            className: 'btn btn-app text-white export imprimir',
                            orientation: 'landscape',
                            pageSize: 'LEGAL',
                            exportOptions: {
                                columns: [0, 1]
                            },
                            
                        },*/
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