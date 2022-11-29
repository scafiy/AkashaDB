$(".filter-btn").click(function(){
    $(".filter-container").toggleClass("filter-container-show");
    $(".filter-btn").toggleClass("active-filter-btn");


 });

function sort(){
    var parent = document.getElementsByClassName('item-container')[0],
    divs = parent.children,
    i = divs.length - 1;
    for (; i--;) {
        parent.appendChild(divs[i])
    }
}

 $(".sortbtn").click(function(){
    $(".sortbtn  i").toggleClass("flip");
 });

 function quicksearch() {
    var input, filter, div, li, a, i, txtValue;
    input = document.getElementById("quicksearchbar");
    filter = input.value.toUpperCase();
    div = document.getElementById("item-results");
    li = div.getElementsByTagName("li");
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



  $(".filter-5-star").click(function(){
    $(".artifact-1-star, .artifact-2-star, .artifact-3-star, .artifact-4-star").toggleClass("hidden7");
    $(".artifact-5-star").toggleClass("selected");
    $(".filter-5-star").toggleClass("active-filter");

 });

 $(".filter-4-star").click(function(){
    $(".artifact-1-star, .artifact-2-star, .artifact-3-star, .artifact-5-star").toggleClass("hidden8");
    $(".artifact-4-star").toggleClass("selected");
    $(".filter-4-star").toggleClass("active-filter");

 });

$(".filter-3-star").click(function(){
   $(".artifact-1-star, .artifact-2-star, .artifact-4-star, .artifact-5-star").toggleClass("hidden9");
   $(".artifact-3-star").toggleClass("selected");
   $(".filter-3-star").toggleClass("active-filter");

});
$(".filter-2-star").click(function(){
    $(".artifact-1-star, .artifact-3-star, .artifact-4-star, .artifact-5-star").toggleClass("hidden10");
   $(".artifact-2-star").toggleClass("selected");
   $(".filter-2-star").toggleClass("active-filter");

});
$(".filter-1-star").click(function(){
   $(".artifact-2-star, .artifact-3-star, .artifact-4-star, .artifact-5-star").toggleClass("hidden11");
   $(".artifact-1-star").toggleClass("selected");
   $(".filter-1-star").toggleClass("active-filter");

});




$(".filter-5-star").click(function(){
    $(".title-1-star, .title-2-star, .title-3-star, .title-4-star").toggleClass("hidden7");
    $(".title-5-star").toggleClass("selected");

 });

 $(".filter-4-star").click(function(){
    $(".title-1-star, .title-2-star, .title-3-star, .title-5-star").toggleClass("hidden8");
    $(".title-4-star").toggleClass("selected");

 });

$(".filter-3-star").click(function(){
    $(".title-1-star, .title-2-star, .title-4-star, .title-5-star").toggleClass("hidden9");
   $(".title-3-star").toggleClass("selected");
});
$(".filter-2-star").click(function(){
    $(".title-1-star, .title-3-star, .title-4-star, .title-5-star").toggleClass("hidden10");
   $(".title-2-star").toggleClass("selected");

});
$(".filter-1-star").click(function(){
   $(".title-1-star").toggleClass("selected");
   $(".title-2-star, .title-3-star, .title-4-star, .title-5-star").toggleClass("hidden11");


});

$(".toggle-list").click(function(){
   $(".toggle-list").addClass("active-layout");
   $(".toggle-browse").removeClass("active-layout");
   $("li").addClass("artifact-row");
   $(".artifact-title-row").removeClass("hidden");
   $(".item-name").addClass("hide");
   $(".item-text").removeClass("hide");
   $(".item").removeClass("artifact-item");


});

$(".toggle-browse").click(function(){
   $(".toggle-browse").addClass("active-layout");
   $(".toggle-list").removeClass("active-layout");
   $("li").removeClass("artifact-row");   
   $(".artifact-title-row").addClass("hidden");
   $(".item-name").removeClass("hide");
   $(".item-text").addClass("hide");
   $(".item").addClass("artifact-item");


});
