
f = false;
function sub() {
    let us = document.getElementById("User");
    let ps = document.getElementById("pass");
    let sm1 = document.getElementById("error");
    let sm2 = document.getElementById("error1");
    console.log(us)
    flag = true;
    if (ps.value == "" && us.value == "") {

        sm1.style.display = "block"
        flag = false;

    }
    else {
        sm2.style.display = "none"
        sm1.style.display = "none"
    }

    if (us.value == "") {
        sm1.style.display = "block"
        flag = false;
    }
    else {
        sm2.style.display = "none"
        sm1.style.display = "none"
        
    }

    if (ps.value == "") {
        sm2.style.display = "block"
        flag = false;

    }
    else {
        sm2.style.display = "none"
        sm1.style.display = "none"

    }

    if (ps.value.length < 8) {
        sm2.style.display = "block"
        flag = false;
    }
    else {
        sm2.style.display = "none"
        sm1.style.display = "none"

    }
    if (flag == true) {
        alert("Login Successfull")
        
        
    }
    
    // prevent form submission if validation fails
    if (flag == false) {
        event.preventDefault();
    }

}

