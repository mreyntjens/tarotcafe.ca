<?php
if( isset($_POST['msg']) ) {
	$to = "tarotcafemontreal@gmail.com";
	
	$subject = "tarotcafe.ca :"  ; 
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
