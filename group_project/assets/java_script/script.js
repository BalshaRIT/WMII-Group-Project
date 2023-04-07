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