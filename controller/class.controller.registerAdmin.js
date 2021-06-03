$('INPUT[type="file"]').change(function () {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
        case 'csv':
            $('#uploadButton').attr('disabled', false);
            break;
        default:
            alert('This file type is not allowed Steve.');
            this.value = '';
    }
});


$('form#registerAdmin').submit(function(){
  var formData = new FormData($(this)[0]);
  var error = 0;
    //var $contactform = $(this).closest('.ui-page');
    var $contactform = $(this).closest('.request-form');
  
  $('.required', $contactform).each(function (i) {
        if ($(this).val() === '') {
            error++;
        } 
    }); // each
    if (error > 0) {
            alert('Please enter a valid email address.');   
    } else {
    //var longitude = $contactform.find('input[name="longitude"]').val();
    //var latitude = $contactform.find('input[name="latitude"]').val();
        //var name = $contactform.find('input[name="name"]').val();
        var email = $contactform.find('input[name="email"]').val();
    //var notes = $contactform.find('textarea[name="notes"]').val();    
    //var upload = $contactform.find('input[name="upload"]').val();
    


        //submit the form
        $.ajax({
        url: 'model/class.model.registerAdmin.php?files',    
        //url: 'http://shawleybookkeeping.co.uk/model/class.model.tees.php?files',
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function() {
            alert("Success ! Thank you for regestering as an Admin with K9 Connectables!");
        },
        error: function() {
            alert("Oops ! Server Error Please try again!");
        }
  
      
}); //$.ajax

}   
    return false;
});
