function ValidateEmail(inputText){
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.getElementById("email").value)){
    return (true)
    }
    alert("Please enter a valid email address")
    return (false)
}

function validateFormOnSubmit() {
    

    var $subject = document.getElementById('subject').value;
    var $body = document.getElementById('message').value;
    var $cc = document.getElementById('email').value;
    var $first = document.getElementById('first').value;
    var $last = document.getElementById('last').value;

    if(ValidateEmail($cc)===false){
        console.log("mailer should not have opened");
        return;
    }
    // if(empty($subject)){
    //     alert("Please enter a subject");
    //     return;
    // }
    // if(empty($body)){
    //     alert("Please enter a message");
    //     return;
    // }
    // if(empty($first)){
    //     alert("Please enter your first name");
    //     return;
    // }
    // if(empty($last)){
    //     alert("Please enter your last name");
    //     return;
    // }
    // if(empty($cc)){
    //     alert("Please enter your email");
    //     return;
    // }

    window.open('mailto:harry.welchman@gmail.com?cc='+$cc+'&subject='+$subject+'&body='+$body+'\n from ' +$first+ ' ' + $last);

}

document.getElementById('submit').addEventListener('click', function(){
    validateFormOnSubmit();
});




