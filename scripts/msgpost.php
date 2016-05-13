<?php
if( isset($_POST['msg']) ) {
	$to = "utilisetoncorps@gmail.com";
	
	$subject = "Tarotcafe.ca :"  ; 
	if( isset($_POST['subject']) ) { 
        $subject .= " " . $_POST['subject'];  
    } 
	
	$message = 'Nom : ' . $_POST['name'] ;
	$message .= ' / Courriel ou Tél. : ' . $_POST['coord'] . ' / Message : ' .  $_POST['msg'];
	$from = "no-reply@utilisetoncorps.ca";
	$headers = "From:" . $from;
	
	mail($to,$subject,$message,$headers);
	
	echo 'success' ;
}
?>