function showConsultationError(message)
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

function validateConsultationRequest()
{
   var fd = document.forms["contact_us"];
   var email = fd['email'].value;
   var firstname = fd['firstname'].value;
   var lastname = fd['lastname'].value;
   var businessname = fd['businessname'].value;
   var businesstype = fd['businesstype'].value;
   var title = fd['title'].value;
   var phonenumber = fd['phonenumber'].value;
   var call_1 = fd['1_call'].value;
   var call_2 = fd['2_call'].value;
   var call_3 = fd['3_call'].value;
   var questions = fd['message'].value;

	if (firstname == "" || lastname == "")
	{
		showContactError("You did not provide us a name.");
		return false;
	}
	
	if (phonenumber == "")
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

function processConsultationRequest(response)
{
   if (response == true)
   {
      $('#requestContact_message').html("Your email has been sent to us!");
      $('#requestContact_table').fadeTo('fast', 0, function() {
         $('#requestContact_message').fadeTo('normal', 1);
      });
   }   
}
