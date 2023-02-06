Waves.attach('button', ['waves-effect', 'waves-light']);
Waves.attach('#resultfilter li', ['waves-effect', 'waves-light']);
Waves.attach('.ripple', ['waves-effect', 'waves-light']);
Waves.attach('.item', ['waves-effect', 'waves']);
Waves.attach('.sources a', ['waves-effect', 'waves']);
Waves.attach('.talentbtn', ['waves-effect', 'waves']);

Waves.init();

$("#character-dropdown-icon").click(function(){
    $("#character-dropdown-icon").toggleClass("active-dropdown-icon");
    $("#character-dropdown-content").toggleClass("active-dropdown-content");
 });
 
 $("#weapon-dropdown-icon").click(function(){
    $("#weapon-dropdown-icon").toggleClass("active-dropdown-icon");
    $("#weapon-dropdown-content").toggleClass("active-dropdown-content");
 });
 
 $("#artifact-dropdown-icon").click(function(){
    $("#artifact-dropdown-icon").toggleClass("active-dropdown-icon");
    $("#artifact-dropdown-content").toggleClass("active-dropdown-content");
 });

 $("#akademiya-dropdown-icon").click(function(){
  $("#akademiya-dropdown-icon").toggleClass("active-dropdown-icon");
  $("#akademiya-dropdown-content").toggleClass("active-dropdown-content");
});

 $(".hamburger, .overlay").click(function(){
    $(".sidenav").toggleClass("sidenav-collapse");
    $(".maincontent").toggleClass("maincontent-collapse");
    $('.overlay').toggleClass('unfocus');
});

$(window).on("load resize", function() {
    $('.sidenav').toggleClass('sidenav-collapse', $(window).width() < 1241);
    $('.maincontent').toggleClass('maincontent-collapse', $(window).width() < 1241);
    $('.overlay').removeClass('unfocus', $(window).width() < 1241);

});

$(".open-mobile-search-btn, .mobile-back-btn").click(function(){
   $('.topnav-left').toggleClass('hide');
   $(".logo").toggleClass("hide");
   $(".topnav-right").toggleClass("hide");
   $(".topnav-center").toggleClass("mobile-topnav-center");
   $(".searchbar").toggleClass("mobile-searchbar-expand");
   $(".sidenav").addClass("sidenav-collapse");
   $(".maincontent").addClass("maincontent-collapse");
   $('.mobile-back-btn').toggleClass('show');
   $('.mobile-search-btn').toggleClass('show');
   $('.search-results-container').toggleClass('show2');
   $('.container').toggleClass('bodyhide');
   $(".overlay").removeClass("unfocus");
unfocus
});

$(window).resize(function(){
   if($(window).width() >= 875){
     $('.topnav-left').removeClass('hide');
     $('.logo').removeClass('hide');
     $('.topnav-right').removeClass('hide');
     $('.topnav-center').removeClass('mobile-topnav-center');
     $('.searchbar').removeClass('mobile-searchbar-expand');
     $('.mobile-back-btn').removeClass('show');
     $('.mobile-search-btn').removeClass('show');
     $('.search-results-container').removeClass('show2');
     $('.container').removeClass('bodyhide');
   }
 });

 $(window).resize(function(){
   if($(window).width() < 875){
     $('.search-results-container').removeClass('show');
   }
 });

$(document).ready(function() {
   var $inputs = $(".searchbar");      
   $inputs.on("input", function() {
     var $filled = $inputs.filter(function() { return this.value.trim().length > 0; });
     $('.search-results-container').toggleClass('show', $filled.length > 0);
   });
   
 });

 $(document).ready(function() {
   var $inputs = $(".searchbar");      
   $inputs.on("focus", function() {
     var $filled = $inputs.filter(function() { return this.value.trim().length > 0; });
     $('.search-results-container').toggleClass('show', $filled.length > 0);
   });
   
 });

$(document).mouseup(function(e) 
{
    var searchcontainer = $(".topnav-center");
    if (!searchcontainer.is(e.target) && searchcontainer.has(e.target).length === 0) 
    {
      $('.search-results-container').removeClass('show');
   }
});

function quicksearch() {
   var input, filter, ul, li, a, i, txtValue;
   input = document.getElementById("quicksearchbar");
   filter = input.value.toUpperCase();
   ul = document.getElementById("resultfilter");
   li = ul.getElementsByTagName("li");
   for (i = 0; i < li.length; i++) {
       a = li[i].getElementsByTagName("a")[0];
       txtValue = a.textContent || a.innerText;
       if (txtValue.toUpperCase().indexOf(filter) > -1) {
           li[i].style.display = "";
       } else {
           li[i].style.display = "none";
       }
   }
}

$(document).ready(function(){
  $(".maincontent").scroll(function(){
  	var scroll = $(".maincontent").scrollTop();
	  if (scroll > 10) {
      $('.topnav-container').addClass('topnav-color');
      $('.searchbar').addClass('searchbar-color');
      $('.search-results-container').addClass('searchbar-color');

	  }
	  else{
      $('.topnav-container').removeClass('topnav-color');
      $('.searchbar').removeClass('searchbar-color');
      $('.search-results-container').removeClass('searchbar-color');

	  }
  })
})


$("#natalentbtn").click(function(){
  $(".natalenttable").toggleClass("hide");
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}