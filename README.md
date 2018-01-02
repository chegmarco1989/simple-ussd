# This is a demo app written in PHP to demonstrate how to read and
# respond to USSD requests. This demo app requires PHP 5.2.0 or later.

## Lets pretend that we placed ```http://localhost/ussd/index.php``` 
## as our callback URL in a gateway and it sends this our server

## To start: ```http://localhost/ussd/index.php?text=```

Here is the expected workflow of the simple app:

Begin at STEP 1.

## STEP 1:

Display the following menu and wait for a response:  
&nbsp;&nbsp;&nbsp;&nbsp;Welcome to KKF-KENYA.  
&nbsp;&nbsp;&nbsp;&nbsp;1. Events  
&nbsp;&nbsp;&nbsp;&nbsp;2. Tournaments  
&nbsp;&nbsp;&nbsp;&nbsp;3. Results  
If the user selects option 1, goto [STEP 2](#step-2)  
If the user selects option 2, goto [STEP 4](#step-4)  
If the user selects option 3, goto [STEP 6](#step-6)  
If the selection is none of the above, goto [STEP 9](#step-9)  

## STEP 2:

Display the following menu and wait for a response:  
&nbsp;&nbsp;&nbsp;&nbsp;---2018 Training Schedule--- 
&nbsp;&nbsp;&nbsp;&nbsp;1. Joint Training Kasarani : 20/1/2018 
&nbsp;&nbsp;&nbsp;&nbsp;2. Grading - Shotokan : 5/3/2018  
&nbsp;&nbsp;&nbsp;&nbsp;3. Grading - Goju : 12/3/2018  
&nbsp;&nbsp;&nbsp;&nbsp;4. Gashuku JKA : 1/6/2018
If the user selects option 1, goto [STEP 3](#step-1) and so on ...

## STEP 3:

To be completed...

## STEP 4:

Display the following menu and wait for a response:  
&nbsp;&nbsp;&nbsp;&nbsp;---2018 Tournaments--- 
&nbsp;&nbsp;&nbsp;&nbsp;1. Funakoshi: Kasarani - 20/2/2018
&nbsp;&nbsp;&nbsp;&nbsp;2. KENYA OPEN: Kasarani - 5/3/2018
&nbsp;&nbsp;&nbsp;&nbsp;3. NAIROBI OPEN: Utalii - 12/5/2018
&nbsp;&nbsp;&nbsp;&nbsp;4. JKUAT OPEN: JKUAT MAIN - 1/8/2018
If the user selects option 1, goto [STEP 5](#step-1) and so on ...

## STEP 5:

To be completed...

## STEP 6:

Display the following menu and wait for a response:  
&nbsp;&nbsp;&nbsp;&nbsp;---For 2017--- 
&nbsp;&nbsp;&nbsp;&nbsp;1. Funakoshi Tournament
&nbsp;&nbsp;&nbsp;&nbsp;2. Kenya Open
&nbsp;&nbsp;&nbsp;&nbsp;3. Nairobi Open
&nbsp;&nbsp;&nbsp;&nbsp;4. JKUAT Open
If the user selects option 1, goto [STEP 7](#step-1) and so on ...

## STEP 7:

To be completed...

