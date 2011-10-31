function showError(message)
{
   $('#request_message').html("ERROR: "+message);
   $('#request_table').fadeTo('normal', 0, function()
   {
      $('#request_message').fadeTo('normal', 1, function()
      {
         $('#request_message').delay(1500).slideUp('fast');
         $('#request_message').delay(1500).fadeTo('normal', 0);
         $('#request_table').delay(1500).fadeTo('normal', 1);
      });
   });
}

function validateCallRequest()
{
   var name = document.forms["request_call"]["name"].value;
   var phone_number = document.forms["request_call"]["phone"].value;
   var email = document.forms["request_call"]["email"].value;

	if (name == "")
	{
		showError("You did not provide us a name.");
		return false;
	}
	
	if (phone_number == "")
	{
		showError("You need to provide us a phone number to call.");
		return false;
	}
	
	if (email == "")
	{
		showError("You need to give us an email.");
		return false;
	}
/*	
	var email_syntax = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
	if (email_syntax.test(email) == false)
	{
		showError("The email address you provided does not seem to be valid");
		return false;
	}
	
	var phone_stripped = phone_number.replace(/[\(\)\.\-\ ]/g, '');
	if (isNaN(parseInt(phone_stripped)))
	{
		showError("The phone number you provided doesn't seem to be valid.");
		return false;
	}
	
	if (!(phone_stripped.length == 10))
	{
		showError("You need to provide is a 10 digit phone number.");
		return false;
	}
*/	
	return true;
}

function processCallRequest(response)
{
   if (response == true)
   {
      $('#request_message').html("Your call request has been submitted.");
      $('#request_table').fadeTo('fast', 0, function() {
         $('#request_message').fadeTo('normal', 1);
      });
   }   
}
