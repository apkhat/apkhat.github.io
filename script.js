// JavaScript para expandir e contrair as respostas das perguntas frequentes
const questions = document.querySelectorAll('.question');

questions.forEach(question => {
    const answer = question.querySelector('.answer');
    const questionTitle = question.querySelector('h3');

    questionTitle.addEventListener('click', () => {
        answer.classList.toggle('active');
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const hotbarBtn = document.querySelector(".hotbar-btn");
    const hotbar = document.querySelector(".hotbar");

    hotbarBtn.addEventListener("click", function() {
        hotbar.classList.toggle("active");
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("whatsapp").addEventListener("click", function() {
        window.location.href = "https://wa.me/+5564981174923";
    });

    document.getElementById("instagram").addEventListener("click", function() {
        window.location.href = "https://www.instagram.com/kalikaosofc/";
    });

    document.getElementById("email").addEventListener("click", function() {
        window.location.href = "mailto:lipycompython@gmail.com";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const cursorTrail = document.getElementById("cursor-trail");
    const contactOptions = document.querySelectorAll(".contact-option");

    // Follow mouse with trail
    document.addEventListener("mousemove", function(event) {
        cursorTrail.style.left = event.clientX + "px";
        cursorTrail.style.top = event.clientY + "px";
    });

    // Add click event listeners to contact options
    contactOptions.forEach(function(option) {
        option.addEventListener("click", function(event) {
            // Add animation class to cursor trail on click
            cursorTrail.classList.add("active");
            // Remove animation class after short delay
            setTimeout(function() {
                cursorTrail.classList.remove("active");
            }, 500);
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const cursorTrail = document.getElementById("cursor-trail");
});

document.addEventListener("DOMContentLoaded", function() {
    // Code here...
});
