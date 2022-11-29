

function sort(){
    var parent = document.getElementsByClassName('item-container')[0],
    divs = parent.children,
    i = divs.length - 1;
    for (; i--;) {
        parent.appendChild(divs[i])
    }
}



  $(".toggle-list").click(function(){
    $(".toggle-list").addClass("active-layout");
    $(".toggle-browse").removeClass("active-layout");
    $(".item").addClass("item-list");
    $(".item-container").addClass("item-list-container");
 
 
 });
 
 $(".toggle-browse").click(function(){
    $(".toggle-browse").addClass("active-layout");
    $(".toggle-list").removeClass("active-layout");
    $(".item").removeClass("item-list");
    $(".item-container").removeClass("item-list-container");

 
 });


 function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("item-results");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("LI");
    // Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      // start by saying there should be no switching:
      shouldSwitch = false;
      /* check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}

$(".sorting-dropdown-btn").click(function(){
  $(".sorting-dropdown-content").toggleClass("show");
  $(".sorting-dropdown-btn").toggleClass("active-filter-btn");

});

$(document).mouseup(function(e) 
{
    var sortcontainer = $(".sorting-dropdown-container");
    if (!sortcontainer.is(e.target) && sortcontainer.has(e.target).length === 0) 
    {
      $('.sorting-dropdown-content').removeClass('show');
      $(".sorting-dropdown-btn").removeClass("active-filter-btn");

   }
});

$("#default-sort").click(function(){
  $( "#item-results" ).load(location.href+" #item-results>*","");

});


