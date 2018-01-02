<?php
//get text variable(the response)
$ussdRequest = $_GET['text'];

$level =0;  

if ($ussdRequest != NULL)
{
	$ussdRequest=  str_replace("#", "*", $ussdRequest);  
	$ussdRequest_explode = explode("*", $ussdRequest);  
	$level = count($ussdRequest_explode); 
}

if ($level==0)
{  
	displaymenu();  
}

//The displaymenu() gives us what the user initially sees by dialing the USSD code.
function displayMenu(){
			$ussd_text="Welcome to KKF-KENYA<br/> 1. Events<br/>2. Tournaments<br/>3. Results";
			ussd_proceed($ussd_text); 
}

//Because we will be printing or sending text to the user, 
//we write a function ussd_proceed(), which takes our menu as a parameter and prints it for us.
function ussd_proceed ($ussd_text){  
echo $ussd_text;  
}

//If the user has replied with some replies, then $level will be greater than 0, in fact for the rest of the replies. 
//As shown below, the user reply at index 0 in the returned array determines what route the user wishes to take. 
//We, therefore, pass the value at index zero, so as to determine the route by a switch case control structure. 
//The possible values are 1 or 2. We use functions to handle the routes
if ($level>0){  
	switch ($ussdRequest_explode[0])  
{  
	case 1:  
		events();  
	break;  
	case 2:  
		tournaments();  
	break;  
	case 3:  
		results();  
	break;  
}  
}

function events()
	{
		$ussd_text="---2018 Training Schedule---<br/><br/>1. Joint Training Kasarani : 20/1/2018<br/> 2. Grading - Shotokan : 5/3/2018<br/>3. Grading - Goju : 12/3/2018<br/>4. Gashuku JKA : 1/6/2018";
		ussd_proceed($ussd_text);
	}  
	
	function tournaments()
	{
		$ussd_text="---2018 Tournaments---<br/><br/>1. Funakoshi: Kasarani - 20/2/2018<br/> 2. KENYA OPEN: Kasarani - 5/3/2018<br/>3. NAIROBI OPEN: Utalii - 12/5/2018<br/>4. JKUAT OPEN: JKUAT MAIN - 1/8/2018";
		ussd_proceed($ussd_text);
	}  
	
	function results()
	{
		$ussd_text="---For 2017---<br/>1. Funakoshi Tournament<br/> 2. Kenya Open<br/>3. Nairobi Open<br/>4. JKUAT Open";
		ussd_proceed($ussd_text);
	}  
?>