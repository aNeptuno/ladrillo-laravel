function reveal() {
    //select all elements with class .reveal
    var reveals = document.querySelectorAll(".reveal"); 
    //catch lenght that has been scrolled
    for (var i = 0; i < reveals.length; i++) { 
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        //define how many pixels from the top of screen to trigger animation
        var elementVisible = 150;
        //conditions to trigger animation
        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}


function revealHorizontal() {
    //select all elements with class .reveal
    var reveals = document.querySelectorAll(".reveal-horizontal"); 
    //catch lenght that has been scrolled
    for (var i = 0; i < reveals.length; i++) { 
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        //define how many pixels from the top of screen to trigger animation
        var elementVisible = 150;
        //conditions to trigger animation
        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}


window.addEventListener("scroll", reveal);
window.addEventListener("scroll", revealHorizontal);

function scrollBtn(){
    let target = document.getElementById('section-first');
    console.log(target)
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 2);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}