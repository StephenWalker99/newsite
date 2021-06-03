$(document).ready(function() {
    var dataTable =  $('#k9-grid').DataTable( {
         "order": [[ 0, "desc" ]],
        responsive: {
        lengthMenu: [[3, 5, 10, 25, 50, -1], [3, 5, 10, 25, 50, 'All']],    
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
    ajax: "model/k9-grid-data.php", // json datasource
});   
});