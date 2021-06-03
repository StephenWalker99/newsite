$(document).on('click', '#logout', function() {

	$.get("model/class.model.logout.php", 
  function() {
     

      window.location.href = "index.html";
   
    });
	});//end logout