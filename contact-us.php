<?php include_once 'include/header.php'; ?>
<body id="contact-us">
	<?php include_once 'include/top.html'; ?>
	<div id="content">
      <table border="0">
         <tr>
            <td width="40%">
               <h1>E-mail</h1>
               <p>w e b r e s p o n s e t e a m @ n s - e m a i l . c o m<br /><br />Messages sent to this address will be automatically routed to the proper department.</p>
               <h1>Telephone</h1>
               <p>1-724-638-7378<br />(1-724-NET-SERV)<br /><br />A live person is available Monday to Friday from 12:00pm to 8:00pm, U.S. Eastern Time (except holidays)</p>
               <h1>Postal Mail Address</h1>
               <p>NetServices, LLC<br />PO Box 750280<br />Forest Hills, NY 11375-0280<br />United States</p>
            </td>
            <td width="60%">
					<script type="text/javascript" src="resources/js/forms.contact.js"></script>
               <div id="contactMsgBox">
                  Send Us a Message
						<div id="requestContact_message" style="width: 500px; display: none; font-weight: none"></div>
                     <form id="contact_us" onsubmit="return validateContactRequest()" action="send-message-recaptcha.php" method="post" style="margin-top:5px">
							<table border="0" id="requestContact_table">
							<tr>
								<td><label>Full Name:</label></td><td><input type="text" name="name" id="name" style="width: 300px;" /></td>
							</tr>
							<tr>
			            	<td><label>Phone Number:</label></td><td><input type="text" name="number" id="number" style="width: 300px;" /></td>
							</tr>
							<tr>
			            	<td><label>E-mail:</label></td><td><input type="text" name="email" id="email" style="width: 300px;" /></td>
							</tr>
							<tr>
			            	<td><label style="vertical-align: top">Message:</label></td><td><textarea name="message" id="message" style="width: 300px; height: 150px;"></textarea></td>
							</tr>
							<tr>
							<td></td><td><button type="submit" class="button_send_message" id="requestContact_button" style="text-align: right;"></button></td>
							</tr>
							</table>
							</form>
                  </div>
               </div>
            </td>
         </tr>
      </table>
   </div>
	<?php include_once 'include/footer.html'; ?>
</body>	
