/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/contact.css';
// start the Stimulus application
import './bootstrap';

 var part1 = "email";
 var part2 = Math.pow(2,6);
 var part3 = String.fromCharCode(part2);
 var part4 = "exemple.com"
 var part5 = part1 + String.fromCharCode(part2) + part4;
 document.write("Contactez-nous par email à : <a href=" + "mai" + "lto" + ":" + part5 + ">" + part1 + part3 + part4 + "</a>");
