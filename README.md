## This is a demo app written in PHP to demonstrate how to read and respond to USSD requests.
## This demo app requires PHP 5.2.0 or later.
 
## Example:
### Lets pretend that we placed ```http://localhost/ussd/index.php``` as our callback URL.
### To start: ```http://localhost/ussd/index.php?text=```
```
Welcome to KKF-KENYA.  
1. Events 
2. Tournaments 
3. Results 
```
### To choose option 3 ```http://localhost/ussd/index.php?text=3```
```
---For 2017---
1. Funakoshi Tournament
2. Kenya Open
3. Nairobi Open
4. JKUAT Open
```
### To choose option 1 of 3 ```http://localhost/ussd/index.php?text=3*1```
```
--- Funakoshi Tournament ---
CATEGORIES: 
1. Kata
2. Kumite
```
### to choose 1 of 3 of 1 ```http://localhost/ussd/index.php?text=3*1*1```
```
--- Funakoshi Tournament: Kata ---
Top 4 only
SENIORS: 
1. John Doe
2. Jane Doe
3. Jackie Doe
4. Lucky Doe
```

------------------------------------------------
Here is the expected workflow of the simple app:
Begin at STEP 1.
------------------------------------------------
## STEP 1:

Display the following menu and wait for a response:
```
Welcome to KKF-KENYA.  
1. Events 
2. Tournaments 
3. Results
```
If the user selects option 1, goto [STEP 2](#step-2)  
If the user selects option 2, goto [STEP 4](#step-4)  
If the user selects option 3, goto [STEP 6](#step-6)  
If the selection is none of the above, goto [STEP 9]

## STEP 2:

Display the following menu and wait for a response: 
```
---2018 Training Schedule--- 
1. Joint Training Kasarani : 20/1/2018 
2. Grading - Shotokan : 5/3/2018  
3. Grading - Goju : 12/3/2018  
4. Gashuku JKA : 1/6/2018
```
If the user selects option 1, goto [STEP 3] and so on ...

## STEP 3:

To be completed...

## STEP 4:

Display the following menu and wait for a response:
```
---2018 Tournaments--- 
1. Funakoshi: Kasarani - 20/2/2018
2. KENYA OPEN: Kasarani - 5/3/2018
3. NAIROBI OPEN: Utalii - 12/5/2018
4. JKUAT OPEN: JKUAT MAIN - 1/8/2018
```
If the user selects option 1, goto [STEP 5] and so on ...

## STEP 5:

To be completed...

## STEP 6:

Display the following menu and wait for a response: 
```
---For 2017--- 
1. Funakoshi Tournament
2. Kenya Open
3. Nairobi Open
4. JKUAT Open
```
If the user selects option 1, goto [STEP 7] and so on ...

## STEP 7:

To be completed...

