// On load
$(window).on('load', function() {
    $("#loader-container").removeClass('visible');
    $("body").css("overflow", "auto");

    // setTimeout(() => {
    //     let toastElement = document.getElementById('firstToast');
    //     let toast = new bootstrap.Toast(toastElement);
    //     toast.show();
    // }, 3000);

    // setTimeout(() => {
    //     let secondToast = document.getElementById('secondToast');
    //     let toast = new bootstrap.Toast(secondToast);
    //     toast.show();
    // }, 22000);

    let company = document.querySelector('.company-slider').cloneNode(true);
    document.querySelector('#companies').appendChild(company)
});

$(document).ready(function() {
    const toastContainer = $('#facts-container');
    const apiUrl = 'https://uselessfacts.jsph.pl/random.json?language=en'; // Useless Facts API URL

    function showToast(fact) {
        const toastHTML = `
            <div class="toast fade" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Did You Know? 🤔</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" style="background: white; color: var(--secondary-dark);">
                    ${fact}
                </div>
            </div>
        `;

        toastContainer.append(toastHTML);

        const toastElement = toastContainer.children('.toast').last()[0];
        const toast = new bootstrap.Toast(toastElement);
        toast.show();

        // Remove the toast after it fades out
        setTimeout(() => $(toastElement).fadeOut(), 5000); 
    }

    function fetchAndDisplayFact() {
        $.getJSON(apiUrl, function(data) {
            const fact = data.text;
            showToast(fact);
        });
    }

    setInterval(fetchAndDisplayFact, 15000); 

    fetchAndDisplayFact();
});

// Progress bar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrolled = (scrollTop / scrollHeight) * 100;
  document.getElementById("progress-bar").style.width = scrolled + "%";
}

const themeToggler  = document.getElementById('theme-toggler');
const themeCheckbox = document.getElementById('theme-checkbox');
const mainImage     = document.querySelector('.main-image');

// Function to save theme state in local storage
function saveThemeState(theme) {
    localStorage.setItem('theme', theme);
}

// Function to load theme state from local storage
function loadThemeState() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'light') {
        document.body.classList.add('light-theme');
        themeCheckbox.checked = true;
    } else {
        document.body.classList.remove('light-theme');
        themeCheckbox.checked = false;
    }
}

// Check theme state on page load
loadThemeState();

// Event listener for theme toggler
themeCheckbox.addEventListener('change', function() {
    if (themeCheckbox.checked) {
        document.body.classList.add('light-theme');
        saveThemeState('light');
    } else {
        document.body.classList.remove('light-theme');
        saveThemeState('dark');
    }
});

// Navbar active tab
window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    let currentSection = '';

    sections.forEach(function(section) {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
            currentSection = section.getAttribute('id');
        }
    });

    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(function(link) {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === currentSection) {
            link.classList.add('active');
        }
    });
});


// Navbar dynamic
let lastScrollTop = 0;

$(window).scroll(function() {
    const currentScrollTop = $(this).scrollTop();
    const navbar = $(".navbar");

    if (currentScrollTop > lastScrollTop) {
        navbar.removeClass("slide-down").addClass("slide-up");
    } else {
        navbar.removeClass("slide-up").addClass("slide-down");
    }

    lastScrollTop = currentScrollTop;
});

// Show More
$('#toggle-skills').on('click', function(e) {
    e.preventDefault(); 
    $('.more-skills').toggleClass('show'); 
    $('.mobile-skills').toggleClass('show'); 
    if ($(this).text().includes('Show More')) {
        $(this).html('Show Less <i class="bi bi-chevron-up"></i>');
    } else {
        $(this).html('Show More <i class="bi bi-chevron-down"></i>');
    }
});


// Skills SLider
let currentSlide = 0;
const totalSlides = document.querySelectorAll('.slide').length;

function slideSkills(direction) {
    if (direction === 'next') {
        currentSlide = (currentSlide + 1) % totalSlides;
    } else {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    }

    const slideWidth = document.querySelector('.slide').offsetWidth;
    const translateX = -currentSlide * slideWidth;

    document.querySelector('.slider').style.transform = `translateX(${translateX}px)`;
}

// Auto Typed Text
const typed = new Typed(".auto-type", {
    strings: ["Web Developer", "Determined learner", "Software Engineer"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
});

// Get the tab buttons and tabs
const tabButtons = document.querySelectorAll('.tab-button');
const tabs = document.querySelectorAll('.tabs');

// Tabs
function showTab(index) {
    tabs.forEach((tab, i) => {
        tab.classList.remove('active-tab');
        if (i === index) {
            tab.classList.add('active-tab');
        }
    });

    // Update button classes
    tabButtons.forEach((button, i) => {
        if (i === index) {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }
    });
}

tabButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        showTab(index);
    });
});


// CV Button
document.addEventListener('DOMContentLoaded', function () {
    const btnCv = document.getElementById('btn-cv');

    btnCv.addEventListener('click', function () {

        let downloadLink      = document.createElement('a');
        downloadLink.href     = 'assets/static/curriculum-vitae.pdf';
        downloadLink.download = 'curriculum.pdf';
        
        document.body.appendChild(downloadLink);        
        downloadLink.click();
        document.body.removeChild(downloadLink);

        // Swal.fire({
        //     icon: 'error',
        //     title: 'Oops...',
        //     text: 'CV is not available 😢',
        //     customClass: {
        //         popup: 'dark-sweet',
        //         header: 'dark-sweet',
        //         title: 'dark-sweet',
        //         content: 'dark-sweet',
        //         actions: 'dark-sweet',
        //         confirmButton: 'dark-sweet',
        //     },
        //     buttonStyling: false,
        // });
    });
});

// Calculate Age
function calculateAge(birthDate) {
    const today = new Date();
    const birthDateObj = new Date(birthDate);
    let age = today.getFullYear() - birthDateObj.getFullYear();

    if (
        today.getMonth() < birthDateObj.getMonth() ||
        (today.getMonth() === birthDateObj.getMonth() && 
        today.getDate() < birthDateObj.getDate())
    ) {
        age--;
    }

    return age;
}

const birthDate  = '2005-07-09'; // yyyy-mm-dd format
const ageElement = document.getElementById('age');
const age = calculateAge(birthDate);
ageElement.textContent = age;

const fadeLeftElements  = document.querySelectorAll('.fade-left');
const fadeRightElements = document.querySelectorAll('.fade-right');
const fadeUpElements    = document.querySelectorAll('.fade-up');
const fadeDownElements  = document.querySelectorAll('.fade-down');

// Fade Animations
const fadeLeftObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-left-show');
        } else {
            entry.target.classList.remove('fade-left-show');
        }
    });
}, { threshold: 0.2 });

const fadeRightObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-right-show');
        } else {
            entry.target.classList.remove('fade-right-show');
        }
    });
}, { threshold: 0.2 });

const fadeUpObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-up-show');
        } else {
            entry.target.classList.remove('fade-up-show');
        }
    });
}, { threshold: 0.2 });

const fadeDownObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-down-show');
        } else {
            entry.target.classList.remove('fade-down-show');
        }
    });
}, { threshold: 0.2 });

fadeLeftElements.forEach(element => {
    fadeLeftObserver.observe(element);
});

fadeRightElements.forEach(element => {
    fadeRightObserver.observe(element);
});

fadeUpElements.forEach(element => {
    fadeUpObserver.observe(element);
});

fadeDownElements.forEach(element => {
    fadeDownObserver.observe(element);
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
  
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
  
      if (targetElement) {
        const offsetTop = targetElement.offsetTop - 80; 
  
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth',
        });
      }
    });
  });
  
const swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 10,
});