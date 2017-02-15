var fired=false;
window.addEventListener('scroll', function(){
  var fromTop = document.body.scrollTop;
  var intro = document.getElementById('intro');
  var flyingImgCont = document.getElementsByClassName('photography--flying-img-container');
  var flyingImg = document.getElementsByClassName("photography--flying-img");
  var photoSection = document.getElementById('photography');
  console.log(window.pageYOffset, photoSection.offsetTop);

  if (fromTop > photoSection.offsetTop / 2 && fired === false) {
    Array.prototype.forEach.call(flyingImgCont, function(el, i){
      el.className += ' flying'+ i;
      i ++;
    });


    fired = true;
  }

});
