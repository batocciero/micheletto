ScrollReveal().reveal('.scroll-reveal', { distance: '300px' }, { delay: 300 }, { interval: 1000 }, { duration: 5000 }, { reset: true });

$("#sliderTest").backstretch([
  [
    { width: 1440, url: "./images/banner-araujo-reis-v1.jpg", pixelRatio: "auto"},
    { width: 720, url: "./images/banner-araujo-reis-v1.jpg", pixelRatio: "auto"},
    { width: 320, url: "./images/banner-araujo-reis-v1.jpg", pixelRatio: "auto"}
  ],
  [
    { width: 1440, url: "https://via.placeholder.com/1920x500", pixelRatio: "auto"},
    { width: 720, url: "https://via.placeholder.com/1920x500", pixelRatio: "auto"},
    { width: 320, url: "https://via.placeholder.com/1920x500", pixelRatio: "auto"}
  ]
], {duration: 4000, transition: 'slide', transitionDuration: 'slow'});


function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
