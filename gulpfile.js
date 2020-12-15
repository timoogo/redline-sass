const { src, dest, symlink, parallel, watch } = require('gulp');
const gulpSass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const cleanCss = require('gulp-clean-css');


// Browser Sync
function browser() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
    watch("*.html").on('change', browserSync.reload);
}

// Sass (scss -> css)
function sass(){
        return src('./public/assets/sass/import.scss')
        .pipe(gulpSass())
        .pipe(cleanCss())
        .pipe(dest('./public/assets/css/'))
        .pipe(browserSync.stream());

    }
// Watch Sass
function watcher(done){
    //watch('./sass/*.scss', sass)
    watch('./public/assets/sass/**/*.scss', sass)
  
    browserSync.reload()  
    done();
}


module.exports = {
    browser: parallel(browser, watcher),
    sass, watcher
}