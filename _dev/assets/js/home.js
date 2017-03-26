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
  var photoSection = document.querySelector('.photography');
  var toTop = document.querySelector('.to-top');
  var designSection = document.querySelector('.design');
  var blogSection = document.querySelector('.blog');
  var blogItem = document.getElementsByClassName('blog--post');
  var designImg = document.getElementById('design-img-wrap');
  // console.log(fromTop);

  if (fromTop > photoSection.offsetTop / 2 && photoFired === false) {
    Array.prototype.forEach.call(flyingImgCont, function(el, i){
      el.className += ' flying'+ i;
      i ++;
    });
    // console.log("only once");
    photoFired = true;
  }

  if (fromTop > 200) {
    toTop.style.display = "block";
    toTop.style.opacity = "1";
  }else{
    toTop.style.display = "none";
    toTop.style.opacity = "0";
  }

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

// document.addEventListener('DOMContentLoaded', function(){
//   var targetDiv = document.body.getAttribute('data-scroll');
//   var position = document.getElementById(targetDiv).offsetTop;
//   // console.log(position);
//   document.body.scrollTop += position;
//   // document.body.scroll({
//   //   top: position,
//   //   left: 0,
//   //   behavior: 'smooth'
//   // });
// });
