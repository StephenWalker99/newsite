$(document).ready(function() {
   var dataTable =  $('#patient-grid').DataTable( {
        responsive: {
        details: {
            renderer: function ( api, rowIdx ) {
            var data = api.cells( rowIdx, ':hidden' ).eq(0).map( function ( cell ) {
                var header = $( api.column( cell.column ).header() );
                return  '<p style="color:#00A">'+header.text()+' : '+api.cell( cell ).data()+'</p>';  // changing details mark up.
            } ).toArray().join('');
 
            return data ?    $('<table/>').append( data ) :    false;
            }
        }
        },
    processing: true,
    serverSide: true,
    ajax: "model/datatables.php", // json datasource
    } );
} );