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

document.addEventListener('DOMContentLoaded', function () {
    const div1 = document.querySelector('.div1');
    div1.addEventListener('mouseover', function () {
        div1.style.transform = 'translateY(-10px)';
    });
    div1.addEventListener('mouseout', function () {
        div1.style.transform = 'translateY(0)';
    });
});

