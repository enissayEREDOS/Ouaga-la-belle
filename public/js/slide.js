
const slider = document.querySelector('.slider');
let slideIndex = 0;
const slides = Array.from(slider.children);
const totalSlides = slides.length;

function showNextSlide() {
    slides[slideIndex].classList.remove('active');
    slideIndex = (slideIndex + 1) % totalSlides;
    slides[slideIndex].classList.add('active');
    slider.scrollTo({
        left: slideIndex * slider.clientWidth,
        behavior: 'smooth'
    });
}

function startSlider() {
    setInterval(() => {
        if (slideIndex === totalSlides - 1) {
            slides[slideIndex].classList.remove('active');
            slideIndex = 0;
            slides[slideIndex].classList.add('active');
            slider.scrollTo({
                left: 0,
                behavior: 'auto'
            });
        } else {
            showNextSlide();
        }
    }, 3000); // Change slide every 3 seconds
}

document.addEventListener('DOMContentLoaded', startSlider);

