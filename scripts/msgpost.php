<?php
if( isset($_POST['msg']) ) {
	//$to = "mreyntjens@gmail.com";
	$to = "marienoelle@tarotcafe.ca";
	
	$subject = "Tarotcafe.ca :"  ; 
	if( isset($_POST['subject']) ) { 
        $subject .= " " . $_POST['subject'];  
    } 
	
	$message = 'Nom : ' . $_POST['name'] ;
	$message .= ' / Courriel ou Tél. : ' . $_POST['coord'] . ' / Message : ' .  $_POST['msg'];
	$from = "no-reply@tarotcafe.ca";
	$headers = "From:" . $from;
	
	mail($to,$subject,$message,$headers);
	
	echo 'success' ;
}
?>
