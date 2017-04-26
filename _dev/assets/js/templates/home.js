// var photoFired=false;
// var designFired=false;
// var fromTop = document.body.scrollTop;
// var intro = document.getElementById('intro');
// var flyingImgCont = document.getElementsByClassName('photography--flying-img-container');
// var flyingImg = document.getElementsByClassName("photography--flying-img");
// var photoSection = document.getElementById('photography');
// var designSection = document.getElementById('design');
// var designImg = document.getElementById('design-img-wrap');
var designFired=false;
var blogFired=false;
document.addEventListener("DOMContentLoaded", function(event){
  // console.log('dom loaded');
  window.addEventListener('scroll', function(){
    var fromTop = document.documentElement.scrollTop || document.body.scrollTop;
    var intro = document.getElementById('intro');
    var photoSection = document.querySelector('.photography');
    var designSection = document.querySelector('.design');
    var blogSection = document.querySelector('.blog');
    var blogItem = document.getElementsByClassName('blog--post');
    var designImg = document.getElementById('design-img-wrap');
    // console.log(fromTop);

    if (fromTop > blogSection.offsetTop * 0.85 && blogFired === false) {
      // console.log('blog fired');
      Array.prototype.forEach.call(blogItem, function(el, i){
        setTimeout(function(){
        el.className += ' showing';}, 150 * (i+1));
      });

      blogFired = true;
    }


    if (fromTop > designSection.offsetTop * 0.85 && designFired === false) {
      designImg.className += ' zoom';
      designFired = true;
    }

  });
});
