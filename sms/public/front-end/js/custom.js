/* Set the width of the side navigation to 250px */

function openNav() {
  document.getElementById("mySidenav").style.width = "80%";
  document.getElementById("nav-res").style.opacity = "1";
  document.getElementById("cd-shadow-layer").style.display = "block";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("nav-res").style.opacity = "0";
  document.getElementById("cd-shadow-layer").style.display = "none";  
  //$('#nav-res').hide().fadeIn('slow');
} 

$(document).ready(function(){ 
  $("#cd-shadow-layer").click(function(){
    //$("#cd-shadow-layer").addClass("display-none");
    closeNav(); 
  });
});

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

$(document).ready(function() {
  // Configure/customize these variables.
  var showChar = 300; 
  var showChar2 = 600; 
  var ellipsestext = "...";
  var moretext = "Read More";
  var lesstext = "Read Less";
  var moretext2 = "View More";
  var lesstext2 = "View Less";
  
  $('.more').each(function() {
      var content = $(this).html();

      if(content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar, content.length - showChar);

          var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
      }

  });

  $('.more1').each(function() {
    var content = $(this).html();

    if(content.length > showChar2) {

        var c = content.substr(0, showChar2);
        var h = content.substr(showChar2, content.length - showChar2);

        var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink2">' + moretext2 + '</a></span>';

        $(this).html(html);
    }

});

  $(".morelink").click(function(){
      if($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
      } else {
          $(this).addClass("less");
          $(this).html(lesstext);
      }
      $(this).parent().prev().toggle();
      $(this).prev().toggle();
      return false;
  });

  $(".morelink2").click(function(){
    if($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext2);
    } else {
        $(this).addClass("less");
        $(this).html(lesstext2);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
  });

});

/*

function openlogout() {
  document.getElementById("mySidenav-logout").style.width = "100%";
  document.getElementById("nav-res").style.opacity = "1";
}

function closelogout() {
  document.getElementById("mySidenav-logout").style.width = "0";
  document.getElementById("nav-res").style.opacity = "0";
  document.getElementById("mySidenav").style.width = "0";
} 

*/


/*


$('.counter').each(function() {
  
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 8000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
});
*/
/*
jQuery(document).ready(function( $ ) {
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
});*/