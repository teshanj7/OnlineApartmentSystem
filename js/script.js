//Password checking function
function checkPassword() {
    
    var pass = document.getElementById('pass1').value;
    var confirm = document.getElementById('pass2').value;

    if(pass !== confirm){
        window.alert("Password missmatch");
        return false;
    }        
    else{
        window.alert("Success!");
        return true;
    }

}

//enable the submit button

function enableButton(check) {
    if(check.checked)
        document.getElementById("submit").disabled=false;
    else
        document.getElementById("submit").disabled=true;
}

/*image Slider*/

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");

  if (n > slides.length)
  {slideIndex = 1}
  if (n < 1)
  {slideIndex = slides.length}
    
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "none";
  dots[slideIndex-1].className += "active";
}

//Share the page link function
function copyLink() 
{

  var copyText = document.getElementById("link");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);

}