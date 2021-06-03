
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>K9 Connectables: Customer Orders</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/custom.css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
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

        <li><a href="#"><i class="fa fa-eye"></i> View User Details<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li><a href="view_admins.php">Admin Users</a></li>    
        <li><a href="view_users.php">Users</a></li>
        </ul></li> 
        
        <li><a class="active-menu" href="#"><i class="fa fa-plus-circle"></i> Add New Users<span class="fa arrow"></span></a>
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
               
                <!-- BEGIN PATIENT RECORDS  --> 
                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4> Add New (Admin) For Customer Orders</h4>
                        </div></div>
                    </div></div>
                   
        <div class="row text-center">
            <div class="col-md-12">
               
                <h2>k9 Connectable Admin : Register New Admin</h2>
               
                <h5>( Register yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-3"></div><div class="col-md-6"><div class="col-md-3"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  New Admin? Register Yourself Here</strong>  
                            </div>
                            <div class="panel-body">
                              <div class="request-form">

                                <!-- Begin Form -->   
                                <form id="registerAdmin" enctype="multipart/form-data" method="post">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user" style="font-size:14px;color:red"></i></span>
                                            <input name="firstN" id="firstN" type="text" class="form-control" placeholder="First Name" required>
                                        </div>

                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag" style="font-size:14px;color:red"></i></span>
                                            <input name="lastN" id="lastN" type="text" class="form-control" placeholder="Last Name" required>
                                        </div>

                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope" style="font-size:14px;color:red"></i></span>
                                            <input name="email" id="email" type="text" class="form-control" placeholder="Your Email" required>
                                        </div>
      
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock" style="font-size:20px;color:red"></i></span>
                                            <input name="PassWord" id="PassWord" type="password" class="form-control" placeholder="Password" required>
                                        </div>

                        <div class="panel panel-success">
                        <div class="panel-heading">

                        <div class="panel-body">                       
                        <a href="#" data-toggle="tooltip2" title="Choose an image from your desktop and try to keep it small (200px x 200px or close) and square as it will scale down better and look easier on the eye">Choose headshot image for your profile pic</a>
                        </div>
                        </div>
                        <div class="panel-body">
                           
                                <div class="form-group">
                                    <input type="file" name="upload" id="upload" class="input-large" required>
                                </div>
                                    <button type="submit" id="btnValidate" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>&nbsp;<button type="button" id="reloadpage" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Refresh</a></button>
                                  </form>

                                    <br />
                                    <span id="msg"></span><span class="msg"></span>
                            </div>
                <div class="panel-body">
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return to top" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </div></div></div>     
      
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
                       
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip2"]').tooltip();   
});
</script>

<script>
    $('#reloadpage').click(function() {
    location.reload(true);
    });
</script>



                        </div>
                    </div>
                </div>     
      
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="controller/class.controller.logout.js"></script>
    <script src="controller/class.controller.registerAdmin.js"></script>
    
</body>
</html>