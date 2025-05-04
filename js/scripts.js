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

//when page loads
window.onload = function() {
    typeWriter(); //Call typewriter func

    //if hash in URL, scroll to that section
    if (window.location.hash) {
        //delay scrolling
        setTimeout(function() {
            var hash = window.location.hash;
            var element = document.querySelector(hash);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }, 0);
        
        //delete hash from URL
        history.replaceState(null, null, window.location.pathname);
    } else {
        //scroll to top (no hash)
        window.scrollTo(0, 0);
    }
};

 
function toggleMenu(x) {
    x.classList.toggle("change"); //3line to X
    let menu = document.getElementById("menu");
    let main= document.getElementById("main");

    if (menu.style.right === "0px") {
        menu.style.right = "-50vw"; 
        main.style.marginLeft = "0";
        document.body.style.backgroundColor = "#0a001b"; 
    } else {
        menu.style.right = "0px";
        main.style.marginLeft = "100vw"; //Push content
        document.body.style.backgroundColor = "rgba(44, 32, 32, 0.4)";
    }
}

function closeMenu() {
    document.getElementById("menu").style.right = "-50vw";
    document.body.style.backgroundColor = "#0a001b"; // Restore background
    document.querySelector(".menu-icon").classList.remove("change");
}


//close menu & scroll to section
function closeMenuAndScroll(target) {
    closeMenu();
    setTimeout(() => {
        document.querySelector(target).scrollIntoView({ behavior: 'smooth' });
    }, 300); // Delay (close first then scroll)
}

//for resume
document.addEventListener("DOMContentLoaded", function () {
    const viewBtn = document.getElementById("viewResume");
    const popup = document.getElementById("resumePopup");
    const closeBtn = document.querySelector(".popup .close");

    if (viewBtn && popup && closeBtn) {
        viewBtn.addEventListener("click", function (e) {
            e.preventDefault();
            popup.style.display = "block";
        });

        closeBtn.addEventListener("click", function () {
            popup.style.display = "none";
        });

        //close when clicking outside the popup
        window.addEventListener("click", function (e) {
            if (e.target === popup) {
                popup.style.display = "none";
            }
        });
    }
});

//for research
document.addEventListener("DOMContentLoaded", function () {
    const viewBtn = document.getElementById("viewResearch");
    const popup = document.getElementById("researchPopup");
    const closeBtn = document.querySelector(".popup .close");

    if (viewBtn && popup && closeBtn) {
        viewBtn.addEventListener("click", function (e) {
            e.preventDefault();
            popup.style.display = "block";
        });

        closeBtn.addEventListener("click", function () {
            popup.style.display = "none";
        });

        //close when clicking outside the popup
        window.addEventListener("click", function (e) {
            if (e.target === popup) {
                popup.style.display = "none";
            }
        });
    }
});


//for accordion
document.addEventListener("DOMContentLoaded", function() {
    let accordions = document.querySelectorAll(".accordion");

    accordions.forEach(button => {
        button.addEventListener("click", function() {
            this.classList.toggle("active"); 

            let panel = this.nextElementSibling;

            if (panel.style.maxHeight) {
                panel.style.maxHeight = null; //collapse (if open)
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px"; //expand to fit
            }
        });
    });
});

document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    event.preventDefault(); //no default form submission

    const formData = new FormData(this);

    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('contact').innerHTML = data; // Show success/error message
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

