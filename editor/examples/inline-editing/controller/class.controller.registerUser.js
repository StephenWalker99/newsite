$(document).ready(function() {
//console.log('register controller file linked');

$('#registerUser').submit(function(){
//console.log("register button clicked");

var postData = $(this).serialize();
console.log(postData);

$.mobile.loading('show', {text: 'Registering New Account - Please Wait',textVisible: true,theme: 'a'});

//*****Ajax JSON call will SEND and RECEIVE data back from the model****
	  $.ajax({
		  type: 'POST',
		  dataType: "json",
		  data: postData,
		  
//Always external URL in an App
url: 'http://myteesside.com/i-cook/models/class.model.registerUser.php?action=register',
		  
		  success: function(data){
        console.log(data);
		
        //display the data in the html JSON array back to the user
        $('<div></div>').html(data.html).appendTo('.msg');
        $.mobile.loading('hide');

		  },
		  error: function(){
			  console.log(data);
			  alert('There was an error handling your registration!');
			  $.mobile.loading('hide');		  }
	  
	  });
return false;
}); //close handler
});

