let flag = false;
// let templateDir = 'http://recrie.local/wp-content/themes/recrie';
let templateDirTest = 'http://nexseed1ab.xsrv.jp/recrie_lp/wp-content/themes/recrie';

var md = window.matchMedia("(max-width: 768px)");

$('#toggleHamburger, #toggleHamburger2').click(function () {
	flag = !flag;
	if (flag) {
		$('.l-hamburger').addClass('l-hamburger--toggled');
		$('.menu-icon').attr({
			"src": templateDirTest + '/assets/minified/images/x-icon.png'
		}).toggleClass('menu-icon--rotate90');
		$('body').css('overflow', 'hidden');
		$('#menu-list').slideDown(500);
	} else {
		$('.l-hamburger').removeClass('l-hamburger--toggled');
		$('.menu-icon').attr({
			"src": templateDirTest + '/assets/minified/images/menu.png'
		}).toggleClass('menu-icon--rotate90');
		$('body').css('overflow', 'auto');
		$('#menu-list').slideUp(500);
	}
})

// Accordion on Financial Sample
$('.p-financial_sample__btn-open').on('click', function () {
	$('.p-financial_sample__content').slideDown(1000);
	$('.p-financial_sample__btn-prev').css("display", "none");
	$(this).css("display", "none");
});

$('.p-financial_sample__btn-close').on('click', function () {
	$('.p-financial_sample__content').slideUp(1000);
	$('.p-financial_sample__btn-prev').css("display", "block");
	$('.p-financial_sample__btn-open').css("display", "block");
});

window.addEventListener('scroll', function () {
	let scrollHeight = window.pageYOffset;
	if (scrollHeight >= 350) {
		$('.c-fab').css("display", "block");
	} else {
		$('.c-fab').css("display", "none");
	}
});

function myBrowser() {
	if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) {
		$('.p-benefit__img-no').css({ 'width': 'auto', 'height': 'auto' });
	}
}

window.addEventListener('load', function () {
	if ($('input.wpcf7-drag-n-drop-file').change(function () { // Will move the remove button when file/s are selected
		uploadButton();
	}))

	if ($('#fileUpload').hasClass('spFileUpload')) {
		upload_errors();
	}

	if($('.codedropz-upload-handler').on('drop', function () { // Will move the remove button when file/s are selected using drag and drop 
		uploadButton();
	}))

	function uploadButton() {
		let removeIcon = $('a.remove-file');
		$('a.remove-file').remove();
		$(removeIcon[0]).appendTo($('.dnd-upload-details'));
		$('span.dnd-icon-remove').addClass('c-button__default c-button__default__remove');
		$('span.dnd-icon-remove').text('ファイルを削除');
		upload_errors();
	}

	$('.cd-upload-btn').addClass('c-button__default c-button__default__upload');
	$('.codedropz-upload-inner').prepend("<img class='c-file__select' src=" + templateDirTest + '/assets/minified/images/select-file-icon.png' + ">");
	$('.codedropz-upload-inner > h3, .codedropz-upload-inner > span ').addClass('c-file__text');
	$('.codedropz-upload-handler').addClass('c-file__upload');
	mdCheck(md) // check browser resolution == 786px

	myBrowser();
});

function upload_errors() {

	// File validation error text handler
	let details = $('.dnd-upload-details');
	let count = details.length;
	let error = ' > span.has-error';

	for (i = 0; i < count; i++) {
		if ($(details[i]).has($('span.has-error')).length) {

			if (!md.matches) {
				$(details[i]).find(error).appendTo($(details[i]));
			} else {
				i = count;
			}
		}
	}
}

function mdCheck(md) {
	if (md.matches) { // If media query matches max-width of 786px
		$('.menu-icon').attr({
			"src": templateDirTest + '/assets/minified/images/menu.png'
		})
		if (flag) {
			$('.menu-icon').toggleClass('menu-icon--rotate90');
			flag = !flag;
		}
		$('#menu-list').css('display', 'none');
		$('#fileUpload').addClass('spFileUpload');

		$('h3.c-file__text').text('');
		$('.c-file__text').addClass('p-file__head');

		// appends the finanancial sample button
		$('.p-financial_sample__btn-open').insertAfter($('.p-financial_sample__title'));

	} else {
		$('#menu-list').css('display', 'block');
		$('#fileUpload').removeClass('spFileUpload');
		$('h3.c-file__text').text('ここにファイルをドラッグドロップ');
		$('.c-file__text').removeClass('p-file__head');

		$('.p-financial_sample__btn-open').appendTo($('.p-financial_sample__btn-prev'));
	}
}

md.addListener(mdCheck); // Attach listener function on state changes

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});