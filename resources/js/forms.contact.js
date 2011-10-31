function showContactError(message)
{
   $('#requestContact_message').html("ERROR: "+message);
   $('#requestContact_table').fadeTo('normal', 0, function()
   {
      $('#requestContact_message').fadeTo('normal', 1, function()
      {
         $('#requestContact_message').delay(1500).slideUp('fast');
         $('#requestContact_message').delay(1500).fadeTo('normal', 0);
         $('#requestContact_table').delay(1500).fadeTo('normal', 1);
      });
   });
}

function validateContactRequest()
{
   var name = document.forms["contact_us"]["name"].value;
   var phone_number = document.forms["contact_us"]["number"].value;
   var email = document.forms["contact_us"]["email"].value;
   var message = document.forms["contact_us"]["message"].value;

	if (name == "")
	{
		showContactError("You did not provide us a name.");
		return false;
	}
	
	if (phone_number == "")
	{
		showContactError("You need to provide us a phone number to call.");
		return false;
	}
	
	if (email == "")
	{
		showContactError("You need to give us an email.");
		return false;
	}
	
   if (message == "")
   {
      showContactError("You need to provide an email message!");
      return false;
   }
/*
	var email_syntax = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
	if (email_syntax.test(email) == false)
	{
		showContactError("The email address you provided does not seem to be valid");
		return false;
	}
	
	var phone_stripped = phone_number.replace(/[\(\)\.\-\ ]/g, '');
	if (isNaN(parseInt(phone_stripped)))
	{
		showContactError("The phone number you provided doesn't seem to be valid.");
		return false;
	}
	
	if (!(phone_stripped.length == 10))
	{
		showContactError("You need to provide is a 10 digit phone number.");
		return false;
	}
*/	
	return true;
}

function processContactRequest(response)
{
   if (response == true)
   {
      $('#requestContact_message').html("Your email has been sent to us!");
      $('#requestContact_table').fadeTo('fast', 0, function() {
         $('#requestContact_message').fadeTo('normal', 1);
      });
   }   
}
