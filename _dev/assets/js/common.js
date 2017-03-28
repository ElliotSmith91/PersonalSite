window.addEventListener('scroll', function(){
  var fromTop = document.body.scrollTop;
  var toTop = document.querySelector('.to-top');
  // console.log(fromTop);

  if (fromTop > 200) {
    toTop.style.display = "block";
    toTop.style.opacity = "1";
  }else{
    toTop.style.display = "none";
    toTop.style.opacity = "0";
  }
});
