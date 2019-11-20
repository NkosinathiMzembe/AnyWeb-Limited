<?php
/**
*an account class that manipulates user inputs
*/
//require('controller.php');
require('databasemanipulation.php');
class Account extends DatabaseController{
    
    
    //properties of the bank payment class
    private $myCountry=null;
    private $mylName=null;
    private $myfName=null;
    private $myAmount=null;
    private $myStudentId=null;
    private $myCard=null;
    private $pin=null;
/**
*the constructor for the account class used for creating objects of the class
*/
    function __construct(){
        $this->myCountry =trim($_POST['country']);
        $this->mylName = trim($_POST['lname']);
        $this->myfName = trim($_POST['fname']);
        $this->myAmount=trim($_POST['amount']);
        $this->myStudentId=trim($_POST['studentId']);
        $this->myCard=trim($_POST['creditCard']);
        
       
        
		}
    /**
    *the create() method is used to insert user inputs into the database
    *
    */
		
    function create(){
        $queryString = "INSERT INTO MYACCOUNT SET countryname='$this->myCountry', lastname='$this->mylName',firstname='$this->myfName',amount='$this->myAmount',studId='$this->myStudentId',creditcard='$this->myCard'";

        return $this->execute_query($queryString);	
        
		}
    /**
    *The read() method is used to read data from the database
    *
    */
		
    function read($filter=false){
        $queryString = "SELECT * FROM MYACCOUNT";
			
        if($filter){
            $queryString = $queryString." where $filter";
			}

        return $this->execute_query($queryString);
		}
    /**
    *The update() method is use to update entries
    *
    */

    function update(){
        $queryString = "UPDATE MYACCOUNT SET  countryname='$this->myCountry', lastname='$this->mylName',firstname='$this->myfName',amount='$this->myAmount',creditcard='$this->myCard', WHERE studId='$this->myStudentId'";// updates user details
			
        return $this->execute_query($queryString);
		}
		/**
        *The delete() method is used to delete an entry
        *Thus, it allows the user to delete any wrong entry
        *
        */
    function delete(){
        $queryString = "DELETE FROM MYACCOUNT WHERE studId='$this->myStudentId'";
			
        return $this->execute_query($queryString);
        
		}
    /**
    *This function takes the user's first name and amount 
    *
    */
    
    function CongratulatoryMessage(){
        $depositedamount=$this->myAmount;//fetches user input from html form
        $name=$this->myfName;//fetches user's name from html form
        $othername=$this->mylName;
        $county=$this->myCountry;
        if(!preg_match("/^[a-zA-Z]*$/",$county)){
            
            echo "invalid country name";
            return;
            
          }
        if(preg_match("/^[a-zA-Z]*$/",$name)){// validates user's input to ensure that it is accurate
            if(preg_match("/^[a-zA-Z]*$/",$othername)){
                echo "congratulations!, "." ".$name. " ". $othername. " for paying $".$depositedamount.  " ". "for your ward's fees at Bauxite Int. School";
                return;
            }
          
            
        }{
            echo "sorry!, check your name input"; // alerts user for wrong input name
            return;// terminates the function call
        }

    }
    
    
}

//an object of the account class called account_obj is created 
$account_obj=new Account();
//invoking the create method using the created object from the account class above
$account_obj->create();
$account_obj->CongratulatoryMessage();
//$account_obj->CongratulatoryMessage();



?>