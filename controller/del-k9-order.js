var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {
		ajax: "/k9/editor/examples/php/delete-order.php",
		table: "#del-k9-order",
		fields: [{
				label: "Created:",
				name: "track_date"
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

	$('#del-k9-order').DataTable( {
		//table.column( 0 ).visible( false );
		responsive: true,
		dom: 'Bfrtip',
		ajax: "/k9/editor/examples/php/delete-order.php",
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
            {
                extend: "remove",
                editor: editor,
                formButtons: [
                    'Delete',
                    { label: 'Cancel', action: function () { this.close(); } }
                ]
            }
        ]
    } );
} );