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


// sync dir
const srcDir = 'src/'
const compiledDir = 'wordpress/wp-content/themes/recrie/'

paths = {
	srcHtml: srcDir + '**.html',
	srcScss: [srcDir + 'assets/scss/**.scss', srcDir + 'assets/scss/**/**.scss'],
	srcImg: srcDir + 'assets/img/*',
	srcJs: srcDir + 'assets/js/*',

	comScss: compiledDir,
	comImg: compiledDir + 'assets/minified/images/',
}

const watchFiles = (done) => {
	watch(paths.srcHtml).on('change', bs.reload)
	watch(paths.srcScss, scss).on('change', bs.reload)
	watch(paths.srcImg, imgSquash).on('change', bs.reload);
	watch(compiledDir + '*.php').on('change', bs.reload);
	done()
}

//scss
const scss = () => {
	return src(paths.srcScss)
		.pipe(sourcemaps.init())
		.pipe(sass({
			outputStyle: 'compressed'
		}))
		.on('error', notify.onError('Error: <%= error.message %>'))
		.pipe(autoprefixer())
		.pipe(sourcemaps.write('../map'))
		.pipe(dest(compiledDir))
}

//browser-sync
const browserSync = () => {
	return bs({
		port: 4000,
		proxy: "http://192.168.33.99/",
		open: "external",
		browser: ["chrome"],
	})
}

// image minify
const imgSquash = () => {
	return src(srcDir + "assets/img/*")
		.pipe(imagemin())
		.pipe(dest(paths.comImg));
}

task('default',
	parallel(browserSync, scss, imgSquash, watchFiles),
)
