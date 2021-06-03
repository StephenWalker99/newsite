<?php
    require("model/class.model.DBConnect.php");
    if(empty($_SESSION['id'])) 
    {
        header("Location: admin_login.html");
        die("You are not permitted here without logging in"); 
        exit; 
    }

    // set time-out period (in seconds)
$inactive = 3000;
 
// check to see if $_SESSION["timeout"] is set
if (isset($_SESSION["timeout"])) {
    // calculate the session's "time to live"
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        session_destroy();
        header("Location: admin_login.html");
    }
}
$_SESSION["timeout"] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>K9 Connectables: Customer Orders</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/custom.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="editor/css/editor.dataTables.min.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>   
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
  <script src="editor/js/dataTables.editor.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  
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
                <a class="navbar-brand" href="#">K9 Connectables</a> 
            </div>
        <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
        <img class="post-image" src="uploads/img/<?php echo $_SESSION['user_image'];?>" width='30' height='30' alt="">
        <b>Welcome <?php echo $_SESSION['firstN'] . ' ' . $_SESSION['lastN']  ?> &nbsp; <a href="#" class="btn btn-danger square-btn-adjust" name="logout" id="logout" action="logout">Logout</a> </div>
        </nav>  
        <!-- /. NAV TOP  -->
               
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li class="text-center"><img src="assets/img/logo-k9.png" class="user-image img-responsive"/></li>
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-pencil"></i> Customer Orders<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li><a href="edit-k9.php">Edit Customer Records</a></li>
        <li><a href="del-k9.php">Delete Customer Records</a></li>
        <li><a href="add-k9.php">Add Customer Records</a>
        <!-- <li><a href="upload.php">Add Customer Profile</a> -->    
        </li>
        </ul>
    </li>

    <li><a href="#"><i class="fa fa-upload"></i> Upload Customer Extras<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li><a href="carton.php">Carton Quantity Records</a></li>    
        <li><a href="weight.php">Weight Records</a></li>
        <li><a href="service.php">Service Records</a></li>
        <li><a href="track-date.php">Order Date Records</a></li>
        </ul></li>

        <li><a class="active-menu" href="#"><i class="fa fa-eye"></i> View User Details<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li><a href="view_admins.php">Admin Users</a></li>    
        <li><a href="view_users.php">Users</a></li>
        </ul></li> 
        
        <li><a href="#"><i class="fa fa-plus-circle"></i> Add New Users<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li><a href="registerAdmin.php">Register New Admin</a></li>    
        <li><a href="registerUser.php">Register New User</a></li>
        </ul></li>

        <li><a href="#"><i class="fa fa-lock"></i> Security Update<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">  
        <li><a href="new-crud.php">Emergency Update</a></li>
        <li><a href="paginate.php">pagination</a></li>
        </ul>
      </div>
    </nav> 
    <!-- /. NAV SIDE  -->

              <div id="page-wrapper" >
                <div id="page-inner">
               
                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4> View and Search K9 Connectables Users</h4>
                        </div></div>
                    </div></div>  

              <div class="row">    
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel-group" id="accordion">                     
                        <div class="panel panel-info">
                            <div class="panel-heading">
                            <class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">K9 Connectables Users (click to close/open)</a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                        <div class="panel-body">
                         <div class='table-responsive'>
                          <table id="steve-user" class="display nowrap" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Email</td>
                                <td>User Image</td>
                              </tr>
                            </thead>
                          </table>   
                        </div>
                    <div class="panel-body">
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </div></div></div>

<script type="text/javascript" language="javascript" class="init">
var editor;
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "editor/examples/php/k9-user.php",
        table: "#steve-user",
        fields: [ {
                label: "First name:",
                name: "firstN",
            }, {
                label: "Last name:",
                name: "lastN",
            }, {
                label: "Email:",
                name: "email",
            }, {
                label: "Image:",
                name: "image",
                //type: "select"
            }]
          });
 

    $('#steve-user').DataTable( {
    //table.column( 0 ).visible( false );
    responsive: true,
    lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, 'All']],
    dom: 'Bfrtip',
    ajax: 'editor/examples/php/k9-user.php',
    columns: [
            { data: "firstN" },
            { data: "lastN" },
            { data: "email" },
            { data: null,
                  render: function(data,type,row){
                  return '<img src="uploads/img/users/'+data.image+'",width=40px, height=40px />'
              },
                  orderable: false
              }, 
    ],
    select: true,
      buttons: [ 
      { extend: "edit", editor: editor, formButtons: [ 'Edit', { label: 'Cancel', fn: function () { this.close(); } } ] } ] } ); } );
</script>

<script>
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
});
</script>


    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="controller/class.controller.logout.js"></script>

</body>
</html>