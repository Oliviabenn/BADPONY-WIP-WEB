<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'ob-hosting-test.link' // Put you mail domain here
	,
	'Assignment 5' // Put your site name / form name here
	,
	'me@ob-hosting-test.link' // Where will the form notification be sent?
	,
	'noreply@ob-hosting-test.link' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
