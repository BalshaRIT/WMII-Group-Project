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

document.addEventListener("DOMContentLoaded", function() {
    const mainDiv = document.getElementById("main-div");
    const mainDivContent = mainDiv.innerHTML;
    mainDiv.innerHTML = mainDivContent + mainDivContent;

    const mainDivWidth = mainDiv.offsetWidth / 2;
    const keyframes = `
        @keyframes marquee {
            0% {
                transform: translateX(${mainDivWidth}px);
            }
            100% {
                transform: translateX(-${mainDivWidth}px);
            }
        }
    `;

    const style = document.createElement("style");
    style.innerHTML = keyframes;
    document.head.appendChild(style);
});