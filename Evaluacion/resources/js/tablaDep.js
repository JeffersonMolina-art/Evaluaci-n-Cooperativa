$(document).ready(function() {
    $('#buscarButton').on('click', function(event) {
        event.preventDefault();
        var state = $('#buscarDepartamento').val();

        $.ajax({
            url: "{{ route('departamentos.filter') }}",
            method: 'GET',
            data: { state: state },
            success: function(response) {
                var tableBody = $('#departamentosTable');
                tableBody.empty();

                if (response.length > 0) {
                    $.each(response, function(index, departamento) {
                        var row = '<tr>' +
                            '<td>' + departamento.departamento + '</td>' +
                            '<td>' + departamento.municipio + '</td>' +
                            '<td><input type="button" value="x"></td>' +
                            '</tr>';
                        tableBody.append(row);
                    });
                } else {
                    tableBody.append('<tr><td colspan="3">No se encontraron resultados</td></tr>');
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
});
