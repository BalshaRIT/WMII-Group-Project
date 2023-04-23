function scrollFunction() {
    const toTop = document.getElementById("back-button");
    
    function makeAppear() {
        if(window.scrollY > 500) {
            toTop.style.visibility = "visible";
        }else {
            toTop.style.visibility = "hidden";
        }
    };
    
    window.onscroll = function() {
        makeAppear();
    };
}

function sanitizeInput() {
    let inputSanitization = true;

    let userName = document.getElementById("user").value;
    let password = document.getElementById("pass").value;
    let confirmation = document.getElementById("conf").value;

    if(userName.length > 20 || password.length > 20 || confirmation.length > 20) {
        alert("Both the UserName and Password cannot exceed 20 characters.");
        inputSanitization = false;
    }

    return inputSanitization;
}