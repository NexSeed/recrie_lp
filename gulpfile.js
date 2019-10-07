const { task, src, watch, parallel, dest, series } = require("gulp")
const bs = require('browser-sync')
const sass =require('gulp-sass')
const notify = require('gulp-notify')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('gulp-autoprefixer')
const imagemin = require('gulp-imagemin')

  
// sync dir
const srcDir = 'src/'

paths = {
    html: srcDir + '**.html',
    scss: [srcDir + 'assets/scss/**.scss', srcDir + 'assets/scss/*/**.scss'],
    img: srcDir + 'assets/img/*'
}

const watchFiles = (done) => {
    watch(paths.html).on('change', bs.reload)
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
      .pipe(dest(srcDir + 'assets/css/'))
  }
  
//browser-sync
const browserSync = () => {
  return bs({ server: {
      baseDir: srcDir,
      index : 'index.html' ,
      browser:['google chrome'], //open browser
    }
  }) 
}

// image minify
const imgSquash = () => {
  return src("./src/assets/img/*")
  .pipe(imagemin()) 
  .pipe(dest("./src/assets/minified/images"));
}

task('default',
  parallel(browserSync, scss, imgSquash, watchFiles),
)