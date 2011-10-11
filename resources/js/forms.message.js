function showMsgError(message)
{
   $('#requestEmail_message').html("ERROR: "+message);
   $('#requestEmail_table').fadeTo('normal', 0, function()
   {
      $('#requestEmail_message').fadeTo('normal', 1, function()
      {
         $('#requestEmail_message').delay(1500).slideUp('fast');
         $('#requestEmail_message').delay(1500).fadeTo('normal', 0);
         $('#requestEmail_table').delay(1500).fadeTo('normal', 1);
      });
   });
}

function validateMsgRequest(formData, jqForm, options)
{
   var form = jqForm[0];

   var name = form.name.value;
   var phone_number = form.number.value;
   var email = form.email.value;
   var message = form.message.value;

	if (name == "")
	{
		showMsgError("You did not provide us a name.");
		return false;
	}
	
	if (phone_number == "")
	{
		showMsgError("You need to provide us a phone number to call.");
		return false;
	}
	
	if (email == "")
	{
		showMsgError("You need to give us an email.");
		return false;
	}
	
   if (message == "")
   {
      showMsgError("You need to provide an email message!");
      return false;
   }

	var email_syntax = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
	if (email_syntax.test(email) == false)
	{
		showMsgError("The email address you provided does not seem to be valid");
		return false;
	}
	
	var phone_stripped = phone_number.replace(/[\(\)\.\-\ ]/g, '');
	if (isNaN(parseInt(phone_stripped)))
	{
		showMsgError("The phone number you provided doesn't seem to be valid.");
		return false;
	}
	
	if (!(phone_stripped.length == 10))
	{
		showMsgError("You need to provide is a 10 digit phone number.");
		return false;
	}
	
	return true;
}

function processMsgRequest(response)
{
   if (response == true)
   {
      $('#requestEmail_message').html("Your email has been sent to us!");
      $('#requestEmail_table').fadeTo('fast', 0, function() {
         $('#requestEmail_message').fadeTo('normal', 1);
      });
   }   
}
