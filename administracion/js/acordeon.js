/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return ''+
        '<tr>'+
            '<td>ID:</td>'+
            '<td>Nombre</td>'+
            '<td></td>'+
        '</tr>'+
        '<tr>'+
            '<td>laID</td>'+
            '<td>ELNOMBRE</td>'+
            '<td>ACCIONES</td>'+
        '</tr>';
}
 
$(document).ready(function() {
    var table = $('#tablaacord').DataTable( {
        "ajax": "http://www.webentorn.com/objects.txt",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" }
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );