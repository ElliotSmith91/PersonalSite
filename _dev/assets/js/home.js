// var photoFired=false;
// var designFired=false;
// var fromTop = document.body.scrollTop;
// var intro = document.getElementById('intro');
// var flyingImgCont = document.getElementsByClassName('photography--flying-img-container');
// var flyingImg = document.getElementsByClassName("photography--flying-img");
// var photoSection = document.getElementById('photography');
// var designSection = document.getElementById('design');
// var designImg = document.getElementById('design-img-wrap');
var photoFired=false;
var designFired=false;
var blogFired=false;
window.addEventListener('scroll', function(){
  var fromTop = document.body.scrollTop;
  var intro = document.getElementById('intro');
  var flyingImgCont = document.getElementsByClassName('photography--flying-img-container');
  // var flyingImg = document.getElementsByClassName("photography--flying-img");
  var photoSection = document.getElementById('photography');
  var designSection = document.getElementById('design');
  var blogSection = document.getElementById('blog');
  var blogItem = document.getElementsByClassName('blog--post');
  var designImg = document.getElementById('design-img-wrap');
  // console.log(window.pageYOffset, photoSection.offsetTop);

  if (fromTop > photoSection.offsetTop / 2 && photoFired === false) {
    Array.prototype.forEach.call(flyingImgCont, function(el, i){
      el.className += ' flying'+ i;
      i ++;
    });

    // console.log("only once");
    photoFired = true;
  }

  if (fromTop > blogSection.offsetTop * 0.55 && blogFired === false) {
    // console.log('blog fired');
    Array.prototype.forEach.call(blogItem, function(el, i){
      setTimeout(function(){
      el.className += ' showing';}, 150 * (i+1));
    });

    blogFired = true;
  }


  if (fromTop > designSection.offsetTop * 0.65 && designFired === false) {
    designImg.className += ' zoom';
    designFired = true;
  }

});
