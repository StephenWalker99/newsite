var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {
		ajax: "/k9/editor/examples/php/edit-order.php?format=custom",
		table: "#edit-k9",
		fields: [{
				label: "Created:",
				name: "track_date",
               	type:  "date",
                def:  function () { return new Date(); },
                dateFormat: "yy/mm/dd",
                //dateFormat: "dd/mm/yy",
                fieldInfo: "Euro style yy/mm/dd format"
			}, 	{
				label: "Order No:",
				name: "order_no"
			}, 	{
				label: "Service:",
				name: "service"
			}, 	{
                label: "Billing Name:",
                name: "billing_name"
            }, 	{
				label: "Zip:",
				name: "zip"
			},  {
                label: "Shipping Country:",
                name: "shipping_country"
            },  {
                label: "Weight:",
                name: "weight"
            },  {
                label: "Tracking No:",
                name: "tracking_no"
            },  {
                label: "Carton Quantity:",
                name: "carton_quantity"
            },  {
                label: "Pick No:",
                name: "pick_no"   
            }
		]
	} );

	$('#edit-k9').DataTable( {
		//table.column( 0 ).visible( false );
		responsive: true,
		dom: 'Bfrtip',
		ajax: "/k9/editor/examples/php/edit-order.php",
		columns: [
			//{ data: "id" },
			{ data: "track_date" },
            { data: "order_no" },
			{ data: "service" },
            { data: "billing_name" },
            { data: "zip" },
			{ data: "shipping_country" }, 
			{ data: "weight" },
            { data: "tracking_no" },
            { data: "carton_quantity" },
            { data: "pick_no" }
		],
		"order": [[ 0, "desc" ]],
      select: true,
      buttons: [ 
      { extend: "edit", editor: editor, formButtons: [ 'Edit', { label: 'Cancel', fn: function () { this.close(); } } ] } ] } ); } );