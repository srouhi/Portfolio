//typewriter 
var i = 0;
var txt = "Hi! I’m Shaghayegh Rouhi, but feel free to call me Shay. I’m currently studying Data Science at the University of Nebraska-Lincoln. Welcome to my portfolio website, feel free to explore my projects, experience, and connect with me!"; // Your text here
var speed = 25; 
function typeWriter() {
    if (i < txt.length) {
        document.getElementById("typewriter-text").innerHTML += txt.charAt(i); //Add character one by one
        i++;
        setTimeout(typeWriter, speed);
    }
}

//typewrite when page loads
window.onload = function() {
    typeWriter();
};


function toggleMenu(x) {
    x.classList.toggle("change"); //change the 3-line to X
    let menu = document.getElementById("menu");
    let main= document.getElementById("main");

    if (menu.style.right === "0px") {
        menu.style.right = "-50vw";  //width
        main.style.marginLeft = "0";
        document.body.style.backgroundColor = "#0a001b"; 
    } else {
        menu.style.right = "0px";
        main.style.marginLeft = "50vw"; //Push content
        document.body.style.backgroundColor = "rgba(44, 32, 32, 0.4)";  // Dim background
    }
}

function closeMenu() {
    document.getElementById("menu").style.right = "-50vw"; // Match menu width
    document.body.style.backgroundColor = "#0a001b"; // Restore background
    document.querySelector(".menu-icon").classList.remove("change");
}

//close menu & scroll to section
function closeMenuAndScroll(target) {
    closeMenu();
    setTimeout(() => {
        document.querySelector(target).scrollIntoView({ behavior: 'smooth' });
    }, 300); // Delay so menu close before scroll
}

//for accordion
document.addEventListener("DOMContentLoaded", function() {
    let accordions = document.querySelectorAll(".accordion");

    accordions.forEach(button => {
        button.addEventListener("click", function() {
            this.classList.toggle("active"); //toggle the active to show or hide

            let panel = this.nextElementSibling;

            if (panel.style.maxHeight) {
                panel.style.maxHeight = null; // Collapse (if already open)
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px"; // Expand to fit content
            }
        });
    });
});

//for contact form
document.getElementById("feedbackForm").addEventListener("submit", function (e) {
    e.preventDefault(); //not submitting
    //console.log("Form submission detected"); 
    //success message
    const successMessage = document.getElementById("success-message");
    successMessage.style.display = "block";
    alert("Feedback submitted successfully!");
    this.reset();
});
