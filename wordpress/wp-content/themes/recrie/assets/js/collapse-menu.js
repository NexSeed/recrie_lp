let flag = false;
let templateDir = 'http://recrie.local/wp-content/themes/recrie';
$('#toggleHamburger, #toggleHamburger2').click(function () {
  flag = !flag;
  if(flag) {
      $('.l-hamburger').addClass('l-hamburger--toggled');
      $('.menu-icon').attr({
        "src": `${templateDir}/assets/minified/images/x-icon.png`
      }).toggleClass('menu-icon--rotate90');
    }
    else {
      $('.l-hamburger').removeClass('l-hamburger--toggled');
      $('.menu-icon').attr({
        "src": `${templateDir}/assets/minified/images/bars-icon.png`
      }).toggleClass('menu-icon--rotate90');
    }
  $('#menu-list').toggle('0.5s');
})