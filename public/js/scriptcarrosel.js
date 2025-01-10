document.addEventListener('DOMContentLoaded', function () {
    const teamSlider = document.querySelector('.team_slider');
    const teamMembers = document.querySelectorAll('.team_member');
    let slideIndex = 0;

    function moveSlide() {
        const slideWidth = teamMembers[0].offsetWidth; 
        teamSlider.style.transform = `translateX(${-slideIndex * slideWidth}px)`;
    }

    setInterval(() => {
        slideIndex++
        if (slideIndex === teamMembers.length) {
            slideIndex = 0;
        }
        moveSlide();
    }, 3000);
});
