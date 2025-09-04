const validate=()=>{
    let userid=document.getElementById('uid').value;
    let password=document.getElementById('password').value;
    let name=document.getElementById('name').value;
    let email=document.getElementById('email').value;

    userIdRegex = /^[a-zA-Z0-9]{5,12}$/;
    nameRegex = /^[a-zA-Z]{15,}$/;
    passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$#!*?&])[a-zA-Z\d@$#!*?&]{8,}$/;
    emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

    if(!userIdRegex.test(userid)){
        alert("Enter valid user id");
        return;
    }
    if(!nameRegex.test(name)){
        alert("Enter valid name");
        return;
    }
    if(!passwordRegex.test(password)){
        alert("Enter valid password");
        return;
    }
    if(!emailRegex.test(email)){
        alert("Enter valid email");
        return;
    }
    alert("Form submitted successfully");

}