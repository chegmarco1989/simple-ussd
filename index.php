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
		events($ussdRequest_explode);  
	break;  
	case 2:  
		tournaments($ussdRequest_explode);  
	break;  
	case 3:  
		results($ussdRequest_explode);  
	break;
		default:
		invalid();
		break;
}  
}

//invalids
function invalid()
	{
		$ussd_text = "--- Invalid Choice ---";
		ussd_proceed($ussd_text);
	}

function events($response)
	{
	if(count($response)==1)
	{
		$ussd_text="---2018 Training Schedule---<br/><br/>1. Joint Training Kasarani : 20/1/2018<br/> 2. Grading - Shotokan : 5/3/2018<br/>3. Grading - Goju : 12/3/2018<br/>4. Gashuku JKA : 1/6/2018";
		ussd_proceed($ussd_text);
	}
	elseif((count($response)==2)&&$response[1]==1)
	{
		$ussd_text = "--- Joint Training Kasarani ---</br> START TIME: 0800HRS<br/>END TIME: 1700HRS<br/><br/>
		INSTRUCTORS: <br/> 1. John Doe<br/>2. Jane Doe<br/>3. Jackie Chan<br/><br/>
		COST: Kshs. 500/=";
		ussd_proceed($ussd_text);
	}
	elseif((count($response)==2)&&$response[1]==2)
	{
		$ussd_text = "--- Grading - Shotokan ---</br> START TIME: 0800HRS<br/>END TIME: 1700HRS<br/><br/>
		INSTRUCTORS: <br/> 1. John Doe<br/>2. Jane Doe<br/>3. Jackie Chan<br/><br/>
		COST: <br/>
		1. Black Belt: Kshs. 5000/=<br/>2. Brown belt: Kshs. 3000/=</br>3. Juniors: Kshs. 1500/=";
		ussd_proceed($ussd_text);
	}
	elseif((count($response)==2)&&$response[1]==3)
	{
		$ussd_text = "--- Grading - Goju ---</br> START TIME: 0800HRS<br/>END TIME: 1700HRS<br/><br/>
		INSTRUCTORS: <br/> 1. John Doe<br/>2. Jane Doe<br/>3. Jackie Chan<br/><br/>
		COST: <br/>
		1. Black Belt: Kshs. 5000/=<br/>2. Brown belt: Kshs. 3000/=</br>3. Juniors: Kshs. 1500/=";
		ussd_proceed($ussd_text);
	}	
	elseif((count($response)==2)&&$response[1]==4)
	{
		$ussd_text = "--- Gashuku JKA ---</br> START TIME: 0800HRS<br/>END TIME: 1700HRS<br/><br/>
		INSTRUCTORS: <br/> 1. John Nakayama<br/>2. Jane Hiroshima<br/>3. Jackie Niyoyankunze<br/><br/>
		COST: Kshs. 2500/=";
		ussd_proceed($ussd_text);
	}
	else
	{
		invalid();
	}
	}  
	
	function tournaments()
	{
		$ussd_text="---2018 Tournaments---<br/><br/>1. Funakoshi: Kasarani - 20/2/2018<br/> 2. KENYA OPEN: Kasarani - 5/3/2018<br/>3. NAIROBI OPEN: Utalii - 12/5/2018<br/>4. JKUAT OPEN: JKUAT MAIN - 1/8/2018";
		ussd_proceed($ussd_text);
	}  
	
	function results($response)
	{
	if(count($response)==1)
	{
		$ussd_text="---For 2017---<br/><br/>1. Funakoshi Tournament<br/> 2. Kenya Open<br/>3. Nairobi Open<br/>4. JKUAT Open";
		ussd_proceed($ussd_text);
	}
	//2nd level
	elseif((count($response)==2)&&$response[1]==1)
	{
		$ussd_text = "--- Funakoshi Tournament ---</br><br/>
		CATEGORIES: <br/> 1. Kata<br/>2. Kumite<br/>";
		ussd_proceed($ussd_text);
	}
	elseif((count($response)==2)&&$response[1]==2)
	{
		$ussd_text = "--- Kenya Open ---</br><br/>
		CATEGORIES: <br/> 1. Kata<br/>2. Kumite<br/>";
		ussd_proceed($ussd_text);
	}
	elseif((count($response)==2)&&$response[1]==3)
	{
		$ussd_text = "--- Nairobi Open ---</br><br/>
		CATEGORIES: <br/> 1. Kata<br/>2. Kumite<br/>";
		ussd_proceed($ussd_text);
	}	
	elseif((count($response)==2)&&$response[1]==4)
	{
		$ussd_text = "--- JKUAT Open ---</br><br/>
		CATEGORIES: <br/> 1. Kata<br/>2. Kumite<br/>";
		ussd_proceed($ussd_text);
	}	
	//3rd level
	elseif((count($response)==3)&&($response[1]==1)&&($response[1]==1))
	{
		$ussd_text = "--- Funakoshi Tournament: Kata ---</br><i>Top 4 only</i><br/><br/>
		SENIORS: <br/> 1. John Doe<br/>2. Jane Doe<br/>3. Jackie Doe<br/>4. Lucky Doe";
		ussd_proceed($ussd_text);
	}
	elseif((count($response)==3)&&($response[1]==1)&&($response[1]==2))
	{
		$ussd_text = "--- Funakoshi Tournament: Kumite ---</br><i>Top 4 only</i><br/><br/>
		SENIORS: <br/> 1. John Doe<br/>2. Jane Doe<br/>3. Jackie Doe<br/>4. Lucky Doe";
		ussd_proceed($ussd_text);
	}
	else
	{
		invalid();
	}
	}  
?>