function usernameValidation(){
//change the colour of the label
    var ulabel=document.getElementById('usernamelabel');
    var username=document.forms['SignUpForm']['username'].value;

    if(username && username.length>=5){

        ulabel.style.color="blue";
    }
    else{
        ulabel.style.color="red";
    }

}



function passwordValidation(){

//change the colour of the label
    var plabel=document.getElementById('passwordlabel');
    var password=document.forms['SignUpForm']['password'].value;

    if(password && password.length>=8){

        plabel.style.color="blue";
    }
    else{
        plabel.style.color="red";
    }

}

function confpassValidation(){
//change the colour of the label
    var cplabel=document.getElementById('confpasswordlabel');
    var confpassword=document.forms['SignUpForm']['confmpass'].value;
    var password=document.forms['SignUpForm']['password'].value;

    if(confpassword==password){

        cplabel.style.color="blue";
    }
    else{
        cplabel.style.color="red";
    }

}


function validateFields(){

    var error=document.getElementById('error');

    var isUsernameValid=false;
    var isPasswordValid=false;
    var ismatchPass=false;

    var username=document.forms['SignUpForm']['username'].value;

    //username validation
    if(username ){
        if(username.length>=5){
            isUsernameValid=true;
        }
        else{
            error.innerHTML="username should be atleast 5 characters long";
            error.style.color="red";
            return false;
        }
    }
    else{
        error.innerHTML="enter the username";
        error.style.color="red";
        return false;
    }

    //password validation

    var password=document.forms['SignUpForm']['password'].value;
    if(password){
        if(password.length>=8){
            isPasswordValid=true;
        }
        else{
            error.innerHTML="password should be atleast 8 char long";
            error.style.color="red";
            return false;
        }
    }
    else{
        error.innerHTML="enter the password";
        error.style.color="red";
        return false;
    }

    //confirm password

    var confpassword=document.forms['SignUpForm']['confmpass'].value;

    if(confpassword){
        if(password==confpassword){
            ismatchPass=true;
        }
        else{
            error.innerHTML="incorrect reentered password";
            error.style.color="red";
            return false;
        }
    }
    else{
        error.innerHTML="confirm the password";
        error.style.color="red";
        return false;
    }

    //form submission
    if(isUsernameValid && isPasswordValid && ismatchPass){
        alert("signup success");
        return true;
    }


}

