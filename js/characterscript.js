$(".filter-btn").click(function(){
    $(".filter-container").toggleClass("filter-container-show");
    $(".filter-btn").toggleClass("active-filter-btn");

 });

$(".filter-anemo").click(function(){
    $(".pyro").toggleClass("hidden1");
    $(".anemo").toggleClass("selected");
    $(".electro").toggleClass("hidden1");
    $(".hydro").toggleClass("hidden1");
    $(".cryo").toggleClass("hidden1");
    $(".geo").toggleClass("hidden1");
    $(".dendro").toggleClass("hidden1");
    $(".filter-anemo").toggleClass("active-filter");

 });

 $(".filter-pyro").click(function(){
    $(".pyro").toggleClass("selected");
    $(".anemo").toggleClass("hidden2");
    $(".electro").toggleClass("hidden2");
    $(".hydro").toggleClass("hidden2");
    $(".cryo").toggleClass("hidden2");
    $(".geo").toggleClass("hidden2");
    $(".dendro").toggleClass("hidden2");
    $(".filter-pyro").toggleClass("active-filter");

 });




 $(".filter-hydro").click(function(){
    $(".pyro").toggleClass("hidden3");
    $(".anemo").toggleClass("hidden3");
    $(".electro").toggleClass("hidden3");
    $(".hydro").toggleClass("selected");
    $(".cryo").toggleClass("hidden3");
    $(".geo").toggleClass("hidden3");
    $(".dendro").toggleClass("hidden3");
    $(".filter-hydro").toggleClass("active-filter");

 });

 $(".filter-electro").click(function(){
    $(".pyro").toggleClass("hidden4");
    $(".anemo").toggleClass("hidden4");
    $(".electro").toggleClass("selected");
    $(".hydro").toggleClass("hidden4");
    $(".cryo").toggleClass("hidden4");
    $(".geo").toggleClass("hidden4");
    $(".dendro").toggleClass("hidden4");
    $(".filter-electro").toggleClass("active-filter");

 });

 $(".filter-cryo").click(function(){
    $(".pyro").toggleClass("hidden5");
    $(".anemo").toggleClass("hidden5");
    $(".electro").toggleClass("hidden5");
    $(".hydro").toggleClass("hidden5");
    $(".cryo").toggleClass("selected");
    $(".geo").toggleClass("hidden5");
    $(".dendro").toggleClass("hidden5");
    $(".filter-cryo").toggleClass("active-filter");

 });

 $(".filter-geo").click(function(){
    $(".pyro").toggleClass("hidden6");
    $(".anemo").toggleClass("hidden6");
    $(".electro").toggleClass("hidden6");
    $(".hydro").toggleClass("hidden6");
    $(".cryo").toggleClass("hidden6");
    $(".geo").toggleClass("selected");
    $(".dendro").toggleClass("hidden6");
    $(".filter-geo").toggleClass("active-filter");

 });

 $(".filter-dendro").click(function(){
    $(".pyro").toggleClass("hidden14");
    $(".anemo").toggleClass("hidden14");
    $(".electro").toggleClass("hidden14");
    $(".hydro").toggleClass("hidden14");
    $(".cryo").toggleClass("hidden14");
    $(".geo").toggleClass("hidden14");
    $(".dendro").toggleClass("selected");
    $(".filter-dendro").toggleClass("active-filter");

 });

 $(".filter-5-star").click(function(){
    $(".1-star").toggleClass("hidden7");
    $(".2-star").toggleClass("hidden7");
    $(".3-star").toggleClass("hidden7");
    $(".4-star").toggleClass("hidden7");
    $(".5-star").toggleClass("selected");
    $(".5-5-star").toggleClass("selected");
    $(".filter-5-star").toggleClass("active-filter");

 });

 $(".filter-4-star").click(function(){
   $(".1-star").toggleClass("hidden8");
   $(".2-star").toggleClass("hidden8");
   $(".3-star").toggleClass("hidden8");
    $(".4-star").toggleClass("selected");
    $(".5-star").toggleClass("hidden8");
    $(".5-5-star").toggleClass("hidden8");
    $(".filter-4-star").toggleClass("active-filter");

 });

 $(".filter-3-star").click(function(){
   $(".1-star").toggleClass("hidden9");
   $(".2-star").toggleClass("hidden9");
   $(".3-star").toggleClass("selected");
    $(".4-star").toggleClass("hidden9");
    $(".5-star").toggleClass("hidden9");
    $(".5-5-star").toggleClass("hidden9");
    $(".filter-3-star").toggleClass("active-filter");

 });

 $(".filter-2-star").click(function(){
   $(".1-star").toggleClass("hidden10");
   $(".2-star").toggleClass("selected");
   $(".3-star").toggleClass("hidden10");
    $(".4-star").toggleClass("hidden10");
    $(".5-star").toggleClass("hidden10");
    $(".5-5-star").toggleClass("hidden10");
    $(".filter-2-star").toggleClass("active-filter");

 });

 $(".filter-1-star").click(function(){
   $(".1-star").toggleClass("selected");
   $(".2-star").toggleClass("hidden11");
   $(".3-star").toggleClass("hidden11");
    $(".4-star").toggleClass("hidden11");
    $(".5-star").toggleClass("hidden11");
    $(".5-5-star").toggleClass("hidden11");
    $(".filter-1-star").toggleClass("active-filter");

 });



 $(".filter-sword").click(function(){
    $(".sword").toggleClass("selected");
    $(".claymore").toggleClass("hidden9");
    $(".bow").toggleClass("hidden9");
    $(".polearm").toggleClass("hidden9");
    $(".catalyst").toggleClass("hidden9");
    $(".filter-sword").toggleClass("active-filter");

 });

 $(".filter-claymore").click(function(){
    $(".sword").toggleClass("hidden10");
    $(".claymore").toggleClass("selected");
    $(".bow").toggleClass("hidden10");
    $(".polearm").toggleClass("hidden10");
    $(".catalyst").toggleClass("hidden10");
    $(".filter-claymore").toggleClass("active-filter");

 });

 $(".filter-bow").click(function(){
    $(".sword").toggleClass("hidden11");
    $(".claymore").toggleClass("hidden11");
    $(".bow").toggleClass("selected");
    $(".polearm").toggleClass("hidden11");
    $(".catalyst").toggleClass("hidden11");
    $(".filter-bow").toggleClass("active-filter");

 });

 $(".filter-polearm").click(function(){
    $(".sword").toggleClass("hidden12");
    $(".claymore").toggleClass("hidden12");
    $(".bow").toggleClass("hidden12");
    $(".polearm").toggleClass("selected");
    $(".catalyst").toggleClass("hidden12");
    $(".filter-polearm").toggleClass("active-filter");

 });

 $(".filter-catalyst").click(function(){
    $(".sword").toggleClass("hidden13");
    $(".claymore").toggleClass("hidden13");
    $(".bow").toggleClass("hidden13");
    $(".polearm").toggleClass("hidden13");
    $(".catalyst").toggleClass("selected");
    $(".filter-catalyst").toggleClass("active-filter");

 });

 $(".filter-ATK").click(function(){
   $(".n").toggleClass("hidden14");
   $(".ATK").toggleClass("selected");
   $(".DEF").toggleClass("hidden14");
   $(".HP").toggleClass("hidden14");
   $(".CR").toggleClass("hidden14");
   $(".CD").toggleClass("hidden14");
   $(".EM").toggleClass("hidden14");
   $(".ER").toggleClass("hidden14");
   $(".HB").toggleClass("hidden14");
   $(".physicalDMG").toggleClass("hidden14");
   $(".pyroDMG").toggleClass("hidden14");
   $(".hydroDMG").toggleClass("hidden14");
   $(".dendroDMG").toggleClass("hidden14");
   $(".electroDMG").toggleClass("hidden14");
   $(".anemoDMG").toggleClass("hidden14");
   $(".cryoDMG").toggleClass("hidden14");
   $(".geoDMG").toggleClass("hidden14");
   $(".filter-ATK").toggleClass("active-filter");

});

$(".filter-DEF").click(function(){
   $(".n").toggleClass("hidden15");
   $(".ATK").toggleClass("hidden15");
   $(".DEF").toggleClass("selected");
   $(".HP").toggleClass("hidden15");
   $(".CR").toggleClass("hidden15");
   $(".CD").toggleClass("hidden15");
   $(".EM").toggleClass("hidden15");
   $(".ER").toggleClass("hidden15");
   $(".HB").toggleClass("hidden15");
   $(".physicalDMG").toggleClass("hidden15");
   $(".pyroDMG").toggleClass("hidden15");
   $(".hydroDMG").toggleClass("hidden15");
   $(".dendroDMG").toggleClass("hidden15");
   $(".electroDMG").toggleClass("hidden15");
   $(".anemoDMG").toggleClass("hidden15");
   $(".cryoDMG").toggleClass("hidden15");
   $(".geoDMG").toggleClass("hidden15");
   $(".filter-DEF").toggleClass("active-filter");

});

$(".filter-HP").click(function(){
   $(".n").toggleClass("hidden16");
   $(".ATK").toggleClass("hidden16");
   $(".DEF").toggleClass("hidden16");
   $(".HP").toggleClass("selected");
   $(".CR").toggleClass("hidden16");
   $(".CD").toggleClass("hidden16");
   $(".EM").toggleClass("hidden16");
   $(".ER").toggleClass("hidden16");
   $(".HB").toggleClass("hidden16");
   $(".physicalDMG").toggleClass("hidden16");
   $(".pyroDMG").toggleClass("hidden16");
   $(".hydroDMG").toggleClass("hidden16");
   $(".dendroDMG").toggleClass("hidden16");
   $(".electroDMG").toggleClass("hidden16");
   $(".anemoDMG").toggleClass("hidden16");
   $(".cryoDMG").toggleClass("hidden16");
   $(".geoDMG").toggleClass("hidden16");
   $(".filter-HP").toggleClass("active-filter");

});
$(".filter-CR").click(function(){
   $(".n").toggleClass("hidden17");
   $(".ATK").toggleClass("hidden17");
   $(".DEF").toggleClass("hidden17");
   $(".HP").toggleClass("hidden17");
   $(".CR").toggleClass("selected");
   $(".CD").toggleClass("hidden17");
   $(".EM").toggleClass("hidden17");
   $(".ER").toggleClass("hidden17");
   $(".HB").toggleClass("hidden17");
   $(".physicalDMG").toggleClass("hidden17");
   $(".pyroDMG").toggleClass("hidden17");
   $(".hydroDMG").toggleClass("hidden17");
   $(".dendroDMG").toggleClass("hidden17");
   $(".electroDMG").toggleClass("hidden17");
   $(".anemoDMG").toggleClass("hidden17");
   $(".cryoDMG").toggleClass("hidden17");
   $(".geoDMG").toggleClass("hidden17");
   $(".filter-CR").toggleClass("active-filter");

});
$(".filter-CD").click(function(){
   $(".n").toggleClass("hidden18");
   $(".ATK").toggleClass("hidden18");
   $(".DEF").toggleClass("hidden18");
   $(".HP").toggleClass("hidden18");
   $(".CR").toggleClass("hidden18");
   $(".CD").toggleClass("selected");
   $(".EM").toggleClass("hidden18");
   $(".ER").toggleClass("hidden18");
   $(".HB").toggleClass("hidden18");
   $(".physicalDMG").toggleClass("hidden18");
   $(".pyroDMG").toggleClass("hidden18");
   $(".hydroDMG").toggleClass("hidden18");
   $(".dendroDMG").toggleClass("hidden18");
   $(".electroDMG").toggleClass("hidden18");
   $(".anemoDMG").toggleClass("hidden18");
   $(".cryoDMG").toggleClass("hidden18");
   $(".geoDMG").toggleClass("hidden18");
   $(".filter-CD").toggleClass("active-filter");

});
$(".filter-EM").click(function(){
   $(".n").toggleClass("hidden19");
   $(".ATK").toggleClass("hidden19");
   $(".DEF").toggleClass("hidden19");
   $(".HP").toggleClass("hidden19");
   $(".CR").toggleClass("hidden19");
   $(".CD").toggleClass("hidden19");
   $(".EM").toggleClass("selected");
   $(".ER").toggleClass("hidden19");
   $(".HB").toggleClass("hidden19");
   $(".physicalDMG").toggleClass("hidden19");
   $(".pyroDMG").toggleClass("hidden19");
   $(".hydroDMG").toggleClass("hidden19");
   $(".dendroDMG").toggleClass("hidden19");
   $(".electroDMG").toggleClass("hidden19");
   $(".anemoDMG").toggleClass("hidden19");
   $(".cryoDMG").toggleClass("hidden19");
   $(".geoDMG").toggleClass("hidden19");
   $(".filter-EM").toggleClass("active-filter");

});
$(".filter-ER").click(function(){
   $(".n").toggleClass("hidden20");
   $(".ATK").toggleClass("hidden20");
   $(".DEF").toggleClass("hidden20");
   $(".HP").toggleClass("hidden20");
   $(".CR").toggleClass("hidden20");
   $(".CD").toggleClass("hidden20");
   $(".EM").toggleClass("hidden20");
   $(".ER").toggleClass("selected");
   $(".HB").toggleClass("hidden20");
   $(".physicalDMG").toggleClass("hidden20");
   $(".pyroDMG").toggleClass("hidden20");
   $(".hydroDMG").toggleClass("hidden20");
   $(".dendroDMG").toggleClass("hidden20");
   $(".electroDMG").toggleClass("hidden20");
   $(".anemoDMG").toggleClass("hidden20");
   $(".cryoDMG").toggleClass("hidden20");
   $(".geoDMG").toggleClass("hidden20");
   $(".filter-ER").toggleClass("active-filter");

});
$(".filter-HB").click(function(){
   $(".n").toggleClass("hidden21");
   $(".ATK").toggleClass("hidden21");
   $(".DEF").toggleClass("hidden21");
   $(".HP").toggleClass("hidden21");
   $(".CR").toggleClass("hidden21");
   $(".CD").toggleClass("hidden21");
   $(".EM").toggleClass("hidden21");
   $(".ER").toggleClass("hidden21");
   $(".HB").toggleClass("selected");
   $(".physicalDMG").toggleClass("hidden21");
   $(".pyroDMG").toggleClass("hidden21");
   $(".hydroDMG").toggleClass("hidden21");
   $(".dendroDMG").toggleClass("hidden21");
   $(".electroDMG").toggleClass("hidden21");
   $(".anemoDMG").toggleClass("hidden21");
   $(".cryoDMG").toggleClass("hidden21");
   $(".geoDMG").toggleClass("hidden21");
   $(".filter-HB").toggleClass("active-filter");

});
$(".filter-physicalDMG").click(function(){
   $(".n").toggleClass("hidden22");
   $(".ATK").toggleClass("hidden22");
   $(".DEF").toggleClass("hidden22");
   $(".HP").toggleClass("hidden22");
   $(".CR").toggleClass("hidden22");
   $(".CD").toggleClass("hidden22");
   $(".EM").toggleClass("hidden22");
   $(".ER").toggleClass("hidden22");
   $(".HB").toggleClass("hidden22");
   $(".physicalDMG").toggleClass("selected");
   $(".pyroDMG").toggleClass("hidden22");
   $(".hydroDMG").toggleClass("hidden22");
   $(".dendroDMG").toggleClass("hidden22");
   $(".electroDMG").toggleClass("hidden22");
   $(".anemoDMG").toggleClass("hidden22");
   $(".cryoDMG").toggleClass("hidden22");
   $(".geoDMG").toggleClass("hidden22");
   $(".filter-physicalDMG").toggleClass("active-filter");

});
$(".filter-pyroDMG").click(function(){
   $(".ATK").toggleClass("hidden23");
   $(".DEF").toggleClass("hidden23");
   $(".HP").toggleClass("hidden23");
   $(".CR").toggleClass("hidden23");
   $(".CD").toggleClass("hidden23");
   $(".EM").toggleClass("hidden23");
   $(".ER").toggleClass("hidden23");
   $(".HB").toggleClass("hidden23");
   $(".physicalDMG").toggleClass("hidden23");
   $(".pyroDMG").toggleClass("selected");
   $(".hydroDMG").toggleClass("hidden23");
   $(".dendroDMG").toggleClass("hidden23");
   $(".electroDMG").toggleClass("hidden23");
   $(".anemoDMG").toggleClass("hidden23");
   $(".cryoDMG").toggleClass("hidden23");
   $(".geoDMG").toggleClass("hidden23");
   $(".filter-pyroDMG").toggleClass("active-filter");

});
$(".filter-hydroDMG").click(function(){
   $(".ATK").toggleClass("hidden24");
   $(".DEF").toggleClass("hidden24");
   $(".HP").toggleClass("hidden24");
   $(".CR").toggleClass("hidden24");
   $(".CD").toggleClass("hidden24");
   $(".EM").toggleClass("hidden24");
   $(".ER").toggleClass("hidden24");
   $(".HB").toggleClass("hidden24");
   $(".physicalDMG").toggleClass("hidden24");
   $(".pyroDMG").toggleClass("hidden24");
   $(".hydroDMG").toggleClass("selected");
   $(".dendroDMG").toggleClass("hidden24");
   $(".electroDMG").toggleClass("hidden24");
   $(".anemoDMG").toggleClass("hidden24");
   $(".cryoDMG").toggleClass("hidden24");
   $(".geoDMG").toggleClass("hidden24");
   $(".filter-hydroDMG").toggleClass("active-filter");

});
$(".filter-dendroDMG").click(function(){
   $(".ATK").toggleClass("hidden25");
   $(".DEF").toggleClass("hidden25");
   $(".HP").toggleClass("hidden25");
   $(".CR").toggleClass("hidden25");
   $(".CD").toggleClass("hidden25");
   $(".EM").toggleClass("hidden25");
   $(".ER").toggleClass("hidden25");
   $(".HB").toggleClass("hidden25");
   $(".physicalDMG").toggleClass("hidden25");
   $(".pyroDMG").toggleClass("hidden25");
   $(".hydroDMG").toggleClass("hidden25");
   $(".dendroDMG").toggleClass("selected");
   $(".electroDMG").toggleClass("hidden25");
   $(".anemoDMG").toggleClass("hidden25");
   $(".cryoDMG").toggleClass("hidden25");
   $(".geoDMG").toggleClass("hidden25");
   $(".filter-dendroDMG").toggleClass("active-filter");

});
$(".filter-electroDMG").click(function(){
   $(".ATK").toggleClass("hidden26");
   $(".DEF").toggleClass("hidden26");
   $(".HP").toggleClass("hidden26");
   $(".CR").toggleClass("hidden26");
   $(".CD").toggleClass("hidden26");
   $(".EM").toggleClass("hidden26");
   $(".ER").toggleClass("hidden26");
   $(".HB").toggleClass("hidden26");
   $(".physicalDMG").toggleClass("hidden26");
   $(".pyroDMG").toggleClass("hidden26");
   $(".hydroDMG").toggleClass("hidden26");
   $(".dendroDMG").toggleClass("hidden26");
   $(".electroDMG").toggleClass("selected");
   $(".anemoDMG").toggleClass("hidden26");
   $(".cryoDMG").toggleClass("hidden26");
   $(".geoDMG").toggleClass("hidden26");
   $(".filter-electroDMG").toggleClass("active-filter");

});
$(".filter-anemoDMG").click(function(){
   $(".ATK").toggleClass("hidden27");
   $(".DEF").toggleClass("hidden27");
   $(".HP").toggleClass("hidden27");
   $(".CR").toggleClass("hidden27");
   $(".CD").toggleClass("hidden27");
   $(".EM").toggleClass("hidden27");
   $(".ER").toggleClass("hidden27");
   $(".HB").toggleClass("hidden27");
   $(".physicalDMG").toggleClass("hidden27");
   $(".pyroDMG").toggleClass("hidden27");
   $(".hydroDMG").toggleClass("hidden27");
   $(".dendroDMG").toggleClass("hidden27");
   $(".electroDMG").toggleClass("hidden27");
   $(".anemoDMG").toggleClass("selected");
   $(".cryoDMG").toggleClass("hidden27");
   $(".geoDMG").toggleClass("hidden27");
   $(".filter-anemoDMG").toggleClass("active-filter");

});
$(".filter-cryoDMG").click(function(){
   $(".ATK").toggleClass("hidden28");
   $(".DEF").toggleClass("hidden28");
   $(".HP").toggleClass("hidden28");
   $(".CR").toggleClass("hidden28");
   $(".CD").toggleClass("hidden28");
   $(".EM").toggleClass("hidden28");
   $(".ER").toggleClass("hidden28");
   $(".HB").toggleClass("hidden28");
   $(".physicalDMG").toggleClass("hidden28");
   $(".pyroDMG").toggleClass("hidden28");
   $(".hydroDMG").toggleClass("hidden28");
   $(".dendroDMG").toggleClass("hidden28");
   $(".electroDMG").toggleClass("hidden28");
   $(".anemoDMG").toggleClass("hidden28");
   $(".cryoDMG").toggleClass("selected");
   $(".geoDMG").toggleClass("hidden28");
   $(".filter-cryoDMG").toggleClass("active-filter");

});
$(".filter-geoDMG").click(function(){
   $(".ATK").toggleClass("hidden29");
   $(".DEF").toggleClass("hidden29");
   $(".HP").toggleClass("hidden29");
   $(".CR").toggleClass("hidden29");
   $(".CD").toggleClass("hidden29");
   $(".EM").toggleClass("hidden29");
   $(".ER").toggleClass("hidden29");
   $(".HB").toggleClass("hidden29");
   $(".physicalDMG").toggleClass("hidden29");
   $(".pyroDMG").toggleClass("hidden29");
   $(".hydroDMG").toggleClass("hidden29");
   $(".dendroDMG").toggleClass("hidden29");
   $(".electroDMG").toggleClass("hidden29");
   $(".anemoDMG").toggleClass("hidden29");
   $(".cryoDMG").toggleClass("hidden29");
   $(".geoDMG").toggleClass("selected");
   $(".filter-geoDMG").toggleClass("active-filter");

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