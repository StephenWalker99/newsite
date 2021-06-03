var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {
		ajax: '/movenet/editor/examples/php/comments2.php',
		table: '#del-temp-service',
		fields: [ {
				label: 'Order No:',
				name:  'order_no',
			},{
				label: 'Service:',
				name:  'service',
			}
		]
	} );

	$('#del-temp-service').DataTable( {
		//table.column( 0 ).visible( false );
		responsive: true,
        lengthMenu: [[5, 10, 25, 50, -1], [1, 5, 10, 25, 50, 'All']],
		dom: 'Bfrtip',
		ajax: '/movenet/editor/examples/php/comments2.php',
		columns: [
			{ data: 'order_no' },
			{ data: 'service' },
		],
		select: true,
		buttons: [
			//{ extend: 'create', editor: editor },
			//{ extend: 'edit',   editor: editor }
			{ extend: 'remove', editor: editor }
		]
	} );
} );