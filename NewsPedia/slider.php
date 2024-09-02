<!-- <script>
let slideIndex = 0;

function showSlides(n) {
    let slides = document.querySelectorAll(".slider-container .slide-group");
    
    // Ensure slideIndex stays within bounds
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    }

    // Set transform property for each slide
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(-${slideIndex * 100}%)`;
    });
}

function plusSlides(n) {
    slideIndex += n;
    showSlides(slideIndex);
}

document.querySelector('.next').addEventListener('click', () => plusSlides(1));
document.querySelector('.prev').addEventListener('click', () => plusSlides(-1));

// Initialize the first slide
showSlides(slideIndex);

</script> -->

<!-- <script>let slideIndex = 0;
const slideInterval = 3000; // Time in milliseconds (3 seconds)

function showSlides(n) {
    let slides = document.querySelectorAll(".slider-container .slide-group");
    
    // Ensure slideIndex stays within bounds
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    }

    // Set transform property for each slide
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(-${slideIndex * 100}%)`;
    });
}

function plusSlides(n) {
    slideIndex += n;
    showSlides(slideIndex);
}

// Initialize the first slide
showSlides(slideIndex);

// Automatically slide every few seconds
setInterval(() => {
    plusSlides(1);
}, slideInterval);
</script> -->
<!-- <script>
let slideIndex = 0;
const slideInterval = 3000; // Time in milliseconds (3 seconds)

function showSlides() {
    let slides = document.querySelectorAll(".slider-container .slide-group");
    const totalSlides = slides.length;

    // Ensure slideIndex stays within bounds
    slideIndex = (slideIndex + 1) % totalSlides;

    // Set transform property to move slides horizontally
    document.querySelector('.slider-container').style.transform = `translateX(-${slideIndex * 100}%)`;
}

function startAutoSlide() {
    setInterval(showSlides, slideInterval);
}

// Initialize the first slide and start automatic sliding
startAutoSlide();
</script> -->
<script>
let slideIndex = 0;
const slideInterval = 5000; // Time in milliseconds (5 seconds)

function showSlides() {
    let slides = document.querySelectorAll(".slider-container .slide-group");
    const totalSlides = slides.length;

    // Ensure slideIndex stays within bounds
    slideIndex = (slideIndex + 1) % totalSlides;

    // Set transform property to move slides horizontally
    document.querySelector('.slider-container').style.transform = `translateX(-${slideIndex * 100}%)`;
}

function startAutoSlide() {
    setInterval(showSlides, slideInterval);
}

// Initialize the first slide and start automatic sliding
startAutoSlide();


</script>


<script>
    document.querySelectorAll('.article-content1').forEach(item => {
    item.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.05)';
        this.style.boxShadow = '0 15px 25px rgba(0, 0, 0, 0.3)';
    });

    item.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
        this.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)';
    });
});

</script>