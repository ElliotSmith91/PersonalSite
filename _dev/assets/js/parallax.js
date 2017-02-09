var fired=false;
window.addEventListener('scroll', function(){
  var fromTop = document.body.scrollTop;
  var intro = document.getElementById('intro');
  var flyingImgCont = document.getElementsByClassName('photography--flying-img-container');
  var flyingImg = document.getElementsByClassName("photography--flying-img");

  if (fromTop > 200 && fired === false) {
    Array.prototype.forEach.call(flyingImgCont, function(el, i){
      el.className += ' flying'+ i;
      i ++;
    });

    console.log("I've only fired once");
    fired = true;
  }

});
