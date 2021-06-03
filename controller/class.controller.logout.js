$(document).on('click', '#logout', function() {

	$.get("model/class.model.logout.php", 
  function() {
     

      window.location.href = "admin_login.html";
   
    });
	});//end logout