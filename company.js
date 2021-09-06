// preloader
      var pre = document.getElementById('loading');
  function fun(){
   pre.style.display = "none";
  }

// manual slider

      var index = 0;
    slide(index);

    function plus(n){
      slide(index+=n);
    }
    function slide(n){
      var s = document.getElementsByClassName("myslide");
      var i;
      if(n > s.length){index = 1}
      if(n < 1 ){index = s.length}
      for(i = 0 ;i < s.length ; i++){
        s[i].style.display="none";
      }
      s[index - 1].style.display="block";
    }
    // automatic slider
    var index = 0;
    slide();
    function slide (){
      var s = document.getElementsByClassName("myslide");
      var i ;
      for(i = 0 ;i < s.length; i++){
        s[i].style.display="none";
      }
      index++;
      if(index > s.length){
        index = 1;
      }
      s[index-1].style.display="block";
      setTimeout(slide,4000);
    }
