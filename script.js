const cursor = document.querySelector('.cursor');
document.addEventListener("mousemove", (e) => {
    cursor.style.left = e.clientX + "px";
    cursor.style.top = e.clientY + "px";

});

function toggleAnswer(faqItem) {
    const answer = faqItem.querySelector('.answer');
    const isAnswerVisible = answer.style.display === 'block';

    // Toggle answer visibility
    answer.style.display = isAnswerVisible ? 'none' : 'block';

    // Toggle background color on click
    faqItem.classList.toggle('clicked');

    // Toggle icon
    const icon = faqItem.querySelector('.icon');
    icon.textContent = isAnswerVisible ? '+' : '×';
}


function scrollToDiv(divId, event) {
    event.preventDefault();

    var element = document.getElementById(divId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}

function reloadPage() {
    window.location.href = "home.php";
}

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

function calorieweb() {
    window.open("https://www.livofy.com/fitness-health-calculators/food-calorie-calculator", "_blank");
}

