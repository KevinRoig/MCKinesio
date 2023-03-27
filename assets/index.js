/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/index.css';

// start the Stimulus application
import './bootstrap';

/*JS for carousel on home page */
const slidesContainer = document.getElementById("slides-container");

const slide = document.querySelector(".slide");

const prevButton = document.getElementById("slide-arrow-prev");

const nextButton = document.getElementById("slide-arrow-next");
nextButton.addEventListener("click", (event) => {

    const slideWidth = slide.clientWidth;
  
      slidesContainer.scrollLeft += slideWidth;
  
  });
  prevButton.addEventListener("click", () => {

    const slideWidth = slide.clientWidth;
  
    slidesContainer.scrollLeft -= slideWidth;
  
  });