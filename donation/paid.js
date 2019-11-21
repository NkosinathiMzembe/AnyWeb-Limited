
//this function picks user inputs and validate them
function ValidateDataInput(){
    var myRegex=/^[a-zA-Z]*$/;//regular expression to validate text input
    var countryName=document.getElementById("country").value;// fetches user country name input
    var lname=document.getElementById("lname").value;//fetches user lastname input
    var fname=document.getElementById("fname").value;// fetches user firstname input
    var student=document.getElementById("contact").value; // fetches user studentId input
    var amount=document.getElementById("amount").value;// fetches user amount input
    var card=document.getElementById("creditCard").value;// fetches user credit card input data
  // checks to see that form is not empty
    if((countryName=="")||(lname=="")||(fname=="")||(student=="")||(amount=="")||(card=="")){
        alert("sorry!, complete the form beform submission");
        return;
    }
    //check to see that user input matches the given regex
    if(!myRegex.test(lname)){
        window.alert("invalid user name");
        return false;
           
        
  } if(!myRegex.test(fname)){

      window.alert("invalid first name");
      return false;
      
  } if(!myRegex.test(countryName)){
      window.alert("invalid country name");
      return;
  }else{
      window.alert("form is successfully submitted");
      return;
  }
    
}