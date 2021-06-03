var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {
		ajax: 'editor/examples/php/temp-date.php',
		table: '#temp-date',
		fields: [ {
				label: 'Created Date:',
				name:  'track_date',
			},{
				label: 'Order No:',
				name:  'order_no',
			}
		]
	} );

	$('#temp-date').DataTable( {
		"order": [[ 0, "DESC" ]],
		responsive: true,
        lengthMenu: [[50, -1], [50, 'All']],
		dom: 'Bfrtip',
		ajax: 'editor/examples/php/temp-date.php',
		columns: [
			{ data: 'track_date' },
			{ data: 'order_no' },
		],
		select: true,
		buttons: [
			//{ extend: 'create', editor: editor },
			//{ extend: 'edit',   editor: editor }
			{ extend: 'remove', editor: editor }
		]
	} );
} );