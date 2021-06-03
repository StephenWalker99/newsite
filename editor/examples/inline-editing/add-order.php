<?php
    require("../../../model/class.model.DBConnect.php");
    if(empty($_SESSION['id'])) 
    {
        header("Location: ../../../admin_login.html");
        die("Redirecting to admin_login.html"); 
    }
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>K9connectables: Customer Orders</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.0.0/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.1.0/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.1.0/css/select.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/editor.dataTables.min.css">
	
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.0.0/js/dataTables.responsive.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.1.0/js/dataTables.select.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="../../js/dataTables.editor.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js">
	</script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js">
	</script>
	<script type="text/javascript" language="javascript" src="../resources/editor-demo.js">
	</script>


	

<script type="text/javascript" language="javascript" class="init">
		var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "../php/edit-add-order.php",
        table: "#add-order",
        fields: [ {
                label: "Created:",
                name: "track_date",
                type:  'datetime',
                opts:  {
                    minDate: new Date('1920-01-01'),
                    maxDate: new Date('2020-12-31')
                }
            }, {
                label: "Order No:",
                name: "order_no"
            }, {
                label: "Service:",
                name: "service"
            }, {
                label: "Billing Name:",
                name: "billing_name"
            },{
                label: "Postcode:",
                name: "zip"
                //type: "datetime"
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

	// Activate an inline edit on click of a table cell
	// or a DataTables Responsive data cell
	$('#add-order').on( 'click', 'tbody tr:not(.child) td:not(:first-child), tbody span.dtr-data', function (e) {
		editor.inline( this );
	} );

	$('#add-order').DataTable( {
		responsive: true,
		dom: "Bfrtip",
		ajax: "../php/edit-add-order.php",
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			//{ data: "user_id" },
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
		order: [ 1, 'asc' ],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editor },
			//{ extend: "edit",   editor: editor },
			//{ extend: "remove", editor: editor }
		]
	} );
} );
</script>
</head>

<body>
<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="../../../index.php">K9connectables</a> 
            </div>
   <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
        <b>Welcome <?php echo $_SESSION['firstN'] . ' ' . $_SESSION['lastN']  ?> &nbsp; <a href="#" class="btn btn-danger square-btn-adjust "name="logout" id="logout" action="logout">Logout</a> </div>
</nav>   
<!-- /. NAV TOP  -->
               
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li class="text-center"><img src="../../../assets/img/logo-k9.png" class="user-image img-responsive"/></li>
        <li><a href="../../../index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a></li>
        <li><a class="active-menu" href="#"><i class="fa fa-users fa-3x"></i> Customer Orders<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li><a href="../../../order.php">Customer Records</a>
        </li>
        <li>    
        <li><a href="edit-order.php">Edit Customer Records</a>
        </li>
        <li><a href="delete-order.php">Delete Customer Records</a>
        </li>
        </li>
        </ul></li>
        </ul>
      </div>
    </nav>
    <!-- /. NAV SIDE  -->


    <div id="page-wrapper" >
            <div id="page-inner">
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Add (K9 Connectables) Customer Orders</h4>
                        </div>
                        

                        <div class="panel-body">
                            <div class="table-responsive">



                <table id="add-order" class="table table-striped table-hover dt-responsive" cellspacing="0">
				<thead>
					<tr>
						<th></th>
                        <th>Created</th>
                        <th>Order No</th>
                        <th>Service</th>
                        <th>Billing Name</th>
                        <th>Post Code</th>
                        <th>Ship Country</th>
                        <th>Weight</th>
                        <th>Tracking No</th>
                        <th>Carton Quantity</th>
                        <th>Pick No</th>
                    </tr>
				</thead>
			</table>


                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>     
            </div>        
        </div>
             <!-- /. PAGE INNER  -->
    </div>
  
     <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    
       
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  <script src="controller/class.controller.logout.js"></script>

</body>
</html>