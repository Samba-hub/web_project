function validateForm(){
    
    //FirstName validation
    if(!validateFirstName())
        return false;

    //LastName validation
    if(!validateLastName())
        return false;

    //Email validation
    if(!validateEmail())
        return false;

    //Phone validation
    if(!validatePhone())
        return false;

   //Price validation
    if(!validateGameName())
        return false;

    //Status valiadtion
    if(!validateStatus())
        return false;

    //Quantity validation
    if(!validateQuantity())
        return false;

    //Price validation
    if(!validatePrice())
        return false;

    
}

function validateLastName(){

    
     if(document.getElementById("lname").value == ""){
        alert("Last name must be filled out");
        return false;
    }

    var lname = document.getElementById("lname").value;

    if (lname.length < 5 || lname.length > 100){
        alert("Enter a your Last Name that is 5 charecter and more");
        return false;
    }

    return true;
}


function validateFirstName(){

    
     if(document.getElementById("fname").value == ""){
        alert("First name must be filled out");
        return false;
    }

    var fname = document.getElementById("fname").value;

    if (fname.length < 3|| fname.length > 100){
        alert("Enter a Name that is 3 charecter and more");
        return false;
    }

    return true;
}

function validateGameName(){

    
     if(document.getElementById("gname").value == ""){
        alert("The Game Name must be filled out");
        return false;
    }

    var gname = document.getElementById("gname").value;

    if (gname.length < 4 || gname.length > 100){
        alert("Enter a Game Name that is more than 4 charecter and less than 100 charecter");
        return false;
    }

    return true;
}

function validatePhone(){

    
     if(document.getElementById("phone").value == ""){
        alert("phone number must be filled out");
        return false;
    }

    var phone = document.getElementById("phone").value;

    if (isNaN(phone)) {
        alert("Phone number must contain only numbers");
        return false;
    }

    if (phone.length != 10){
        alert("Phone number must be 10 digits");
        return false;
    }

    return true;
}

function validateQuantity(){
    var q = document.getElementById("quantity").value;
    if (isNaN(q) || q < 1 || q > 100){
        alert("Qunatity must be in range of 1 to a 100");
        return false;
    }
    return true;
}

function validatePrice(){
    var p = document.getElementById("Price").value;
    if (isNaN(p) || p < 5 || p > 1000){
        alert("Price must be between 5 to 1000");
        return false;
    }
    return true;
}

function validateEmail(){

    if(document.getElementById("email").value == ""){
        alert("Email must be filled out");
        return false;
    }

    var email = document.getElementById("email").value;
    
    var atPostion = email.indexOf("@");
    var dotPostion = email.lastIndexOf(".");

    if (atPostion < 1 || (dotPostion - atPostion < 2)){
        alert("Please enter a correct email");
        document.getElementById("email").focus();
        return false;
    }
    return true;
}

function validateStatus(){
    var sell = document.getElementById("want-to-sell").checked;
    var buy = document.getElementById("want-to-buy").checked;

    if (!sell && !buy){
        alert("Please select a status: Sell or Buy");
        return false;
    }
    return true;
}