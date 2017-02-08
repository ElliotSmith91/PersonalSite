var fired=false;
window.addEventListener('scroll', function(){
  var fromTop = document.body.scrollTop;
  var intro = document.getElementById('intro');
  var flyingImgCont = document.getElementsByClassName('photography--flying-img-container');
  var flyingImg = document.getElementsByClassName("photography--flying-img");
  // console.log(intro.offsetTop);

  if (fromTop > 300 && fired === false) {
    Array.prototype.forEach.call(flyingImgCont, function(el, i){
      el.className += ' flying'+ i;
      i ++;
    });

    console.log("hi");

    // flyingImgCont.style.top = "60%";
    // flyingImgCont.style.right = "10%";
    fired = true;
  }
  // flyingImgCont.style.transform = "translate(0px, "+ fromTop * 3 +"px)";
  // flyingImg.style.transform = "rotateZ("+ fromTop / 7 +"deg)";
  // console.log(fromTop);
});
