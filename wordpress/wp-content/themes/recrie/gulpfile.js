const {
	task,
	src,
	watch,
	parallel,
	dest,
	series
} = require("gulp")
const bs = require('browser-sync')
const sass = require('gulp-sass')
const notify = require('gulp-notify')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('gulp-autoprefixer')
const imagemin = require('gulp-imagemin')

//wordpress dir 
const templateDir = 'http://recrie.local/wp-content/themes/recrie';

paths = {
	scss: ['assets/scss/**.scss', 'assets/scss/**/**.scss'],
	img: 'assets/img/*'
}

// TODO -- BS Wordpress

const watchFiles = (done) => {
	watch(paths.scss, scss).on('change', bs.reload)
	watch(paths.img, imgSquash).on('change', bs.reload);
	done()
}

//scss
const scss = () => {
	return src(paths.scss)
		.pipe(sourcemaps.init())
		.pipe(sass({
			outputStyle: 'compressed'
		}))
		.on('error', notify.onError('Error: <%= error.message %>'))
		.pipe(autoprefixer())
		.pipe(sourcemaps.write('../map'))
		.pipe(dest('assets/css/'))
}

// //browser-sync
// const browserSync = () => {
// 	return bs({
// 		server: {
// 			index: 'index.php',
// 			browser: ['google chrome'], //open browser
// 		}
// 	})
// }

// image minify
const imgSquash = () => {
	return src("./assets/img/*")
		.pipe(imagemin())
		.pipe(dest("./assets/minified/images"));
}

task('default',
	parallel( scss, imgSquash, watchFiles),
)
