<?php
// include class
include_once('MyClass.php');

// call the object
$smsgrupp = new Example();

// if post, add post to database
if(isset($_POST)){
	// use the add_new_account method to add the new record to the database
	$smsgrupp->add_new_account(htmlentities($_POST['name'], ENT_QUOTES), htmlentities($_POST['location'], ENT_QUOTES), htmlentities($_POST['age'], ENT_QUOTES), htmlentities($_POST['occupation'], ENT_QUOTES), htmlentities($_POST['account_status'], ENT_QUOTES));
	
	// redirect to index.php after submission
	header('Location: index.php');
} else {

	// check for errors and provide link back
	echo "There was an error, please click <a href=\"index.php\">here</a> to try again.";
}