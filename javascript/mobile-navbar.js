// const menuMobile = document.querySelector('.menu-mobile');
// const navMenu = document.querySelector('.nav-menu');

// menuMobile.addEventListener('click', () => {
//  console.log("entrou")
//  menuMobile.classList.toggle('active');
//  navMenu.classList.toggle('active');
// })


// Show the first four images
var largura = window.screen.width;
if(largura < 768){
$(".item:lt(3)").show();

// When the gallery button is clicked
$("#buttonServices-item").on('click', function(event) {
  // Prevent default behavior
  event.preventDefault();
  // All of the hidden images
  var $hidden = $(".item:hidden");
  // Show the next four images
  $($hidden).slice(0, 3).fadeIn(600);
  // If the length of $hidden is 3 then hide the button
  if ($hidden.length == 3) {
    $(this).fadeOut();
  }
});
}else{
 $(".item:lt(6)").show();
 $(".application-solution-button").css("display", "none");
}