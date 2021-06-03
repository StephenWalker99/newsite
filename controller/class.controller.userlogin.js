$(document).ready(function() {
  //console.log('controller linked');

$('form#loginForm').submit(function(e){
	//console.log('button pressed');


	e.preventDefault();
	
	var postData = $('#loginForm').serialize();
		
	//Show Page Loading Message
	//$.mobile.loading('show', {text: 'Logging In To Dashboard - Please Wait',textVisible: true,theme: 'a'});	
	
	//*****Ajax JSON call will SEND and RECEIVE data back from the model****
	$.ajax({
		type: 'POST',
		dataType: "json",
		data: postData,
		
		//Always external URL in an App
		url: 'model/class.model.userlogin.php?action=login',
				
		success: function(data){
			//console.log('controller sent data to the model');

			
			if (data.success == true){
        //console.log('data.success true received back from the model');
		   
		   //data from JSON Array
		   if(data.action=="login"){
			    //console.log('login user to dashboard');
				
				//Remove any existing data from the DOM
				$('#msg').empty();
				$('#username').empty();
				$('#registeredemail').empty();
				
				
				        //Append data from JSON into the DOM for the user details in the dashboard
                $('<div id="welcomeback"></div>').html(data.name).appendTo('#username');
                $('<div class="profile reg-details"></div>').html(data.emailad).appendTo('#registeredemail');
				        
                
                //Append data from JSON into the DOM for the user details in the dashboard
                //$('#welcomeback').append(' 'Hello and Welcome:' ('#username'));
                //$('#welcomeback').append("<b> Welcome: </b>"#username);
				        //$('#welcomeback').append('<p> Welcome Back: ('#username')</p>');
				
			   //Programmatically change page

			    window.location.href = "user.php";
			   //$.mobile.changePage('#dashboard');
		   }else{
			 
		   
			//$.loading('hide');
		   $('#msg').empty();
		   $('#registeredemail').empty();
           $('<div="formContainer"></div>').html(data.html).appendTo('#msg');
           $('<div="steve"></div>').html(data.html).appendTo('#registeredemail');
		       //$('#msg').html('got error ' + data.html);
            //Open the Modal Popup
            //$('#msg').dialog('open');
			   
		   }
		   
			
        }//close data.success	
			
		},
		error: function(){
		
alert('There was an error handlings your login authentication!');
		}
	
	});
	
	
	return false;

});//end form submit

});//end document load
