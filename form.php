<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'badpony.shop' // Put you mail domain here
	,
	'BADPONY CONTACT' // Put your site name / form name here
	,
	'oliviabennington@gmail.com' // Where will the form notification be sent?
	,
	'noreply@badpony.shop' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
