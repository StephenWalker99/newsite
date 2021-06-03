$(document).on('click', '#logout', function() {

	$.get("model/class.model.logout.php", 
  function() {
      //$.mobile.loading('show', {text: 'Logging out Dashboard - Please Wait',textVisible: true,theme: 'a'});

      window.location.href = "../../../admin_login.html";
      //$.mobile.changePage('index-log.html');

      //$.mobile.loading('hide');
    });
	});//end logout