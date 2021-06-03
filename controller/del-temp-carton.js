var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {
		ajax: '/new-site/editor/examples/php/del-temp-carton.php',
		table: '#del-temp-carton',
		fields: [ {
				label: 'Order No:',
				name:  'order_no',
			},{
				label: 'Carton Quantity:',
				name:  'carton_quantity',
			}
		]
	} );

	$('#del-temp-carton').DataTable( {
		//table.column( 0 ).visible( false );
		responsive: true,
        lengthMenu: [[50, -1], [50, 'All']],
		dom: 'Bfrtip',
		ajax: '/new-site/editor/examples/php/del-temp-carton.php',
		columns: [
			{ data: 'order_no' },
			{ data: 'carton_quantity' },
		],
		select: true,
		buttons: [
			//{ extend: 'create', editor: editor },
			//{ extend: 'edit',   editor: editor }
			{ extend: 'remove', editor: editor }
		]
	} );
} );