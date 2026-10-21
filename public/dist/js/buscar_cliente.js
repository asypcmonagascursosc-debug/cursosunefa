

	////// buscar

	$(document).ready(function() {
        $('#cedula').on('keyup', function() {
            var query = $(this).val();
            if (query.length > 2) { // Opcional: para evitar consultas con pocas letras
                $.ajax({
                    url: "{{ route('admin.ventas.buscar_cliente') }}",
                    type: "GET",
                    data: { q: query },
                    success: function(data) {
                        if (data.length > 0) {
                            $("#nombreCliente").val(data[0].nombre);
                           
                            
                        } else {
                           // $("#nombreCliente").val('');
                            
                        }
                    }
                });
            } else {
               // $("#nombreCliente").val('');
                
            }
        });
	////
    });