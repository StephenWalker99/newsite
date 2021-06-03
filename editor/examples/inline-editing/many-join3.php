<?php
    require("../../../model/class.model.DBConnect.php");
    if(empty($_SESSION['id'])) 
    {
        header("Location: admin_login.html");
        die("Redirecting to admin_login.html"); 
    }
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Many Join User Records : Movenet Admin</title>
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
        ajax: "../php/joinArray3.php",
        table: "#example",
        fields: [ {
                label: "First Name:",
                name:  "patients.first_name"
                //name:  "patient.patient_name"
            }, {
                label: "Last Name:",
                name:  "patients.last_name"
                //name:  "patient.patient_name"
            }, {
                label: "Medication:",
                name:  "patients.site",
                //name:  "patients.site",
                type:  "select",
                //placeholderDisabled: false,
                placeholder: "please choose meds"
            }, {
                "label": "Med Type:",
                "name": "patient_med_types[].id",
                type:  "checkbox",
                //placeholderDisabled: false,
                //placeholder: "please choose meds",
            }
        ]
    } );
 
    $('#example').DataTable( {
        dom: "Bfrtip",
        ajax: {
            url: "../php/joinArray3.php",
            type: 'POST'
        },
        columns: [
            { data: "patients.first_name" },
            { data: "patients.last_name" },
            //{ data: "patient.patient_name" },
            { data: "patient_meds.name" },
            { data: "patient_med_types", render: "[, ].name" }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
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
                <a class="navbar-brand" href="../../../index.php">Movenet</a> 
            </div>
   <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
        <b>Welcome <?php echo $_SESSION['firstN'] . ' ' . $_SESSION['lastN']  ?> &nbsp; <a href="#" class="btn btn-danger square-btn-adjust "name="logout" id="logout" action="logout">Logout</a> </div>
</nav>   
<!-- /. NAV TOP  -->
               
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li class="text-center"><img src="../../../assets/img/park.png" class="user-image img-responsive"/>
        </li>
        <li><a href="../../../index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
        </li>
        <li><a href="../../../form.php"><i class="fa fa-edit fa-3x"></i> Patient Form </a>
        </li>
        <li><a href="#"><i class="fa fa-users fa-3x"></i> Patients<span class="fa arrow"></span></a>

        <ul class="nav nav-second-level">
        <li><a href="../../../patient.php">Patient Records</a>
        </li>
        <li>    
        <li><a href="edit_patient.php">Edit Patient Records</a>
        </li>
        <li>
        <li><a href="../../../pat-print.php">Print Patient Records</a>
        </li>
        <li><a href="add_patient.php">Add Patient Records</a>
        </li>
        <li><a href="../extensions/move-export.php">Print Patient PDF</a>
        </li>
        </ul></li>

        <li><a href="../../../gp.php"><i class="fa fa-cloud-upload fa-3x"></i> General Practioners</a>
        </li>
        <li><a href="#"><i class="fa fa-folder-o fa-3x"></i> Patient Medication</a>
        </li>    
        <li><a href="#"><i class="fa fa-sitemap fa-3x"></i> Next Of Kin<span class="fa arrow"></span></a>

        <ul class="nav nav-second-level">
        <li><a href="../../../kin.php">Next Of Kin Records</a>
        </li>    
        <li><a href="edit_next_of_kin.php">Edit Kin Records</a>
        </li>
        <li>
        <li><a href="../../../pat-print.php">Print Kin Records</a>
        </li>
        <li><a href="add_next_of_kin.php">Add Kin Records</a>
        </li>
        <li><a href="../extensions/kin-export.php">Print Kin PDF</a>
        </li>
        </ul></li>  
        <li><a  href="../../../calendar.php"><i class="fa fa-bar-chart-o fa-3x"></i> Calendar</a>
        </li>   
        </ul>
      </div>
    </nav>  
        <!-- /. NAV SIDE  -->


    <div id="page-wrapper" >
            <div id="page-inner">
                
                <div class="row">
                    <div class="col-md-12">
                     <h2>Many Join User Records</h2> 
                     <br /> 
                      <p>When using a joined database tables, there are times when you might wish to use a one-to-many relationship for your data, and display that as an editable interface for your system's users.</p> 
                    </div>

                </div>
                
            <div class="row">
                <div class="col-md-12">
                 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Many Join User Records
                        </div>
                        

                        <div class="panel-body">




                            <div class="table-responsive">



               <table id="example" class="table table-striped table-hover dt-responsive display" cellspacing="0">
                <thead>
                    <tr>
                        <th>First Name</th>
                         <th>Last Name</th>
                        <th>Medication</th>
                        <th>Medication Type</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Medication</th>
                        <th>Medication Type</th>
                    </tr>
                </tfoot>
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
  <script src="../../../controller/class.controller.logout.js"></script>
   

</body>
</html>