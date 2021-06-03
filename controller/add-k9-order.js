var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {
		ajax: "editor/examples/php/add-order.php",
		table: "#add-k9-order",
		fields: [ {
				label: "Created:",
				name: "track_date",
                type:  'datetime',
                opts:  {
                minDate: new Date('1920-01-01'),
                maxDate: new Date('2020-12-31')}
			}, {
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

	$('#add-k9-order').DataTable( {
		"order": [[ 0, "desc" ]],
		responsive: true,
		dom: 'Bfrtip',
		ajax: "editor/examples/php/add-order.php",
		columns: [
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
		select: true,
      	buttons: [ 
      	{ extend: "create", editor: editor, formButtons: [ 'Create', { label: 'Cancel', fn: function () { this.close(); } } ] } ] } ); } );

