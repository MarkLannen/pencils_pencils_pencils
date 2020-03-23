
 console.log("It's working");

function checkPasswordForNumber(input){
    for( let i = 0; i < input.length; i++){
        if(!isNaN(input.charAt(i))){
            return true;
        }
    }
    return false;
}

function validateFields() {
    let userNameValidate = document.getElementById("user-name").value;
    let emailValidate = document.getElementById("email").value;
    let passwordValidate = document.getElementById("password").value;

    // if (userNameValidate === "") {
    //     alert("User name is required");
    //     return false;
    // }

    if ( !(emailValidate.includes("@")) || (emailValidate = "") )  {
        alert("Please enter a valid email address");
        return false;
    }
    console.log(passwordValidate.length < 8);
    console.log(checkPasswordForNumber(passwordValidate));

    if ((passwordValidate.length < 8) || !checkPasswordForNumber(passwordValidate)){
        console.log("Got here");
        alert("Password must be at least 8 characters long and contain 1 number");
        return false;
    }
    return true;
}