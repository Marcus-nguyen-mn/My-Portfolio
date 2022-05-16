import gulp from 'gulp';
import { watch, series } from 'gulp';
import minifyCss from 'gulp-minify-css';
const sass = require('gulp-sass')(require('sass'));
import webpack from 'webpack-stream';
import browserSync from 'browser-sync';
const server = browserSync.create();
export const style = () => {
  return gulp.src('./src/sass/**/*.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(minifyCss({compatibility: 'ie8'}))
  .pipe(gulp.dest('./assets/css'));
}
export const scripts = () => { 
  return gulp.src('./src/js/**/*.js') 
  .pipe( webpack({ module: 
     { rules: [ 
       { test: /\.js$/, 
         use: { 
              loader: 'babel-loader', 
              options: { 
                 presets: ['@babel/preset-env'], 
              }, 
             }, 
       }, ], }, 
     }) ) 
.pipe(gulp.dest('./assets/js/')) }
export const serve = (done) => { 
  server.init({ 
     proxy: 'http://my-portfo.co/', 
   // put your local website link here 
   }) 
   done() 
 }
 export const reload = (done) => { server.reload()
   done() }
 export const watchForChanges = () => { 
  watch('./src/sass/**/*.scss',series(style, reload)) 
  watch(['./src/js/**/*.js'], series(scripts, reload)) 
  watch('**/*.php', reload) }
export const dev = series(
  style, scripts,
  serve,
  watchForChanges
)

export default dev