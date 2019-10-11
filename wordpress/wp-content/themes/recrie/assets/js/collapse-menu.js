let flag = false;
let templateDir = 'http://recrie.local/wp-content/themes/recrie';
$('#toggleHamburger, #toggleHamburger2').click(function () {
  flag = !flag;
  if(flag) {
      $('.l-hamburger').addClass('l-hamburger--toggled');
      $('.menu-icon').attr({
        "src": `${templateDir}/assets/minified/images/x-icon.png`
      }).toggleClass('menu-icon--rotate90');
      $('body').css('overflow', 'hidden');
    }
    else {
      $('.l-hamburger').removeClass('l-hamburger--toggled');
      $('.menu-icon').attr({
        "src": `${templateDir}/assets/minified/images/bars-icon.png`
      }).toggleClass('menu-icon--rotate90');
      $('body').css('overflow', 'auto');
    }
  $('#menu-list').toggle('0.5s');
})

function myFunction(x) {
  if (x.matches) { // If media query matches
    $('#menu-list').css('display', 'none');
    $('.menu-icon').attr({
      "src": `${templateDir}/assets/minified/images/bars-icon.png`
    })
    if(flag) {
      $('.menu-icon').toggleClass('menu-icon--rotate90');
      flag= !flag;
    }
  }
  else {
    $('#menu-list').css('display', 'block');
  }
}

var x = window.matchMedia("(max-width: 768px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

window.addEventListener('scroll', () => {
  let scrollHeight = window.pageYOffset;
  if(scrollHeight>=400) {
    $('.c-fab').css("display", "block");
  }
  else {
    $('.c-fab').css("display", "none");
  }
});