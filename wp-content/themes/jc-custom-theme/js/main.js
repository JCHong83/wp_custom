// Scroll to Top
// When the user scrolls down 20px from the top, the button  shows

var scrolltoTop = document.getElementById('scrolltoTop');

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrolltoTop.style.display = "block";
  } else {
    scrolltoTop.style.display = "none";
  }
}

// when the User clicks on the button, scroll to the top of the page

scrolltoTop.addEventListener('click', function() {
  window.scroll({ top: 0, behavior: 'smooth' });
});

// Modal Contact for Wordpress menu item

var contactModal = document.querySelector('#menu-item-244 > a');

contactModal.setAttribute('data-toggle', 'modal');
contactModal.setAttribute('data-target', '#modal-contact');