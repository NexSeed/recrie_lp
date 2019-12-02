let flag = false;
let templateDir = 'http://recrie.local/wp-content/themes/recrie';
// let templateDirTest = 'http://nexseed1ab.xsrv.jp/recrie_lp/wp-content/themes/recrie';

var md = window.matchMedia("(max-width: 768px)");

$('#toggleHamburger, #toggleHamburger2').click(function () {
	flag = !flag;
	if (flag) {
		$('.l-hamburger').addClass('l-hamburger--toggled');
		$('.menu-icon').attr({
			"src": `${templateDir}/assets/minified/images/x-icon.png`
		}).toggleClass('menu-icon--rotate90');
		$('body').css('overflow', 'hidden');
		$('#menu-list').slideDown(500);
	} else {
		$('.l-hamburger').removeClass('l-hamburger--toggled');
		$('.menu-icon').attr({
			"src": `${templateDir}/assets/minified/images/menu.png`
		}).toggleClass('menu-icon--rotate90');
		$('body').css('overflow', 'auto');
		$('#menu-list').slideUp(500);
	}
})

window.addEventListener('scroll', () => {
	let scrollHeight = window.pageYOffset;
	if (scrollHeight >= 350) {
		$('.c-fab').css("display", "block");
	} else {
		$('.c-fab').css("display", "none");
	}
});

window.addEventListener('load', function () {
	if ($('input.wpcf7-drag-n-drop-file').change(function () { // Will move the remove button when file/s are selected
		let removeIcon = $('a.remove-file');
		$('a.remove-file').remove();
		$(removeIcon[0]).appendTo($('.dnd-upload-details'));
		$('span.dnd-icon-remove').addClass('c-button__default c-button__default__remove');
		$('span.dnd-icon-remove').append(' ファイルを削除');
		upload_errors();

	}))
		if ($('#fileUpload').hasClass('spFileUpload')) {
			upload_errors();
		}

	$('.cd-upload-btn').addClass('c-button__default c-button__default__upload');
	$('.codedropz-upload-inner').prepend(`<img class='c-file__select' src='${templateDir}/assets/minified/images/select-file-icon.png' />`);
	$('.codedropz-upload-inner > h3, .codedropz-upload-inner > span ').addClass('c-file__text');
	$('.codedropz-upload-handler').addClass('c-file__upload');
	mdCheck(md) // check browser resolution == 786px
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
			"src": `${templateDir}/assets/minified/images/menu.png`
		})
		if (flag) {
			$('.menu-icon').toggleClass('menu-icon--rotate90');
			flag = !flag;
		}
		$('#menu-list').css('display', 'none');
		$('#fileUpload').addClass('spFileUpload');

		$('h3.c-file__text').text('');
		$('.c-file__text').addClass('p-file__head');

	} else {
		$('#menu-list').css('display', 'block');
		$('#fileUpload').removeClass('spFileUpload');
		$('h3.c-file__text').text('ここにファイルをドラッグドロップ');
		$('.c-file__text').removeClass('p-file__head');
	}
}

md.addListener(mdCheck) // Attach listener function on state changes
