<head>
    <?php 
        session_start();
        include 'includes/head.php';
    ?>
    <title>Home - Akasha</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/databasestyle.css">

</head>

<nav class="nav">
    <?php 
        include 'includes/nav.php';
    ?>
</nav>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

            <li>Disclaimer: If you don't own this copy of akashadb, the database will be in view only mode. You'll not be able to add or edit data.</li>
                <div class="dbheader dbheaderbanner">
                    <div>
                    <p>Akasha Database</p>

                    </div>

                    
                    <div class="right">
                      <a href="https://github.com/scafiy/AkashaDB" target="_blank">github repository</a>
                      <a href="/phpmyadmin/index.php?route=/database/structure&db=akashadb" target="_blank">phpmyadmin</a>
                      <a href="http://localhost/phpmyadmin/index.php?route=/database/export&db=akashadb" target="_blank">export</a>

                    </div>
                </div>

                <div class="dataset" id="set1">
                    <div class="dbheader">
                        <a target="_blank" href="/phpmyadmin/index.php?route=/sql&pos=0&db=akashadb&table=characters">Characters</a>
                        <div class="right">
                          <a id="showtable1">toggle view</a>
                          <a onClick="MyWindow=window.open('upload/uploadcharacter.php','MyWindow','width=400,height=600'); return false;" href="">upload</a>
                        </div>
                        <input type="text" id="charasearch" onkeyup="charasearch()" autocomplete="off">
                    </div>
                    <div class="datatable" id="table1">
                    <table id="content1">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>keywords</th>
                            <th>img</th>
                            <th>url</th>
                            <th>rarity</th>
                            <th>category</th>
                            <th>element</th>
                            <th>weapon</th>
                            <th>region</th>
                            <th>stat</th>
                            <th>description</th>
                            <th>primarycolor</th>

                        </tr>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `id` DESC LIMIT 0,9999999") or die(mysqli_error());
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['name']?></td>
                                <td><?php echo $fetch['keywords']?></td>
                                <td>
                                    <a href="<?php echo $fetch['img']?>"><?php echo $fetch['img']?></a>
                                    <a href="images/characters/<?php echo $fetch['url']?>/splash.png">	images/characters/<?php echo $fetch['url']?>/splash.png</a>
                                    <a href="images/characters/<?php echo $fetch['url']?>/banner.png">	images/characters/<?php echo $fetch['url']?>/banner.png</a>
                                </td>
                                <td><?php echo $fetch['url']?></td>
                                <td><?php echo $fetch['rarity']?></td>
                                <td><?php echo $fetch['category']?></td>
                                <td><?php echo $fetch['element']?></td>
                                <td><?php echo $fetch['weapon']?></td>
                                <td><?php echo $fetch['region']?></td>
                                <td><?php echo $fetch['stat']?></td>
                                <td><?php echo $fetch['description']?></td>
                                <td><?php echo $fetch['primarycolor']?></td>

                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                    </div>
                </div>


                
                <div class="dataset" id="set2">
                    <div class="dbheader">
                        <a href="/phpmyadmin/index.php?route=/sql&pos=0&db=akashadb&table=artifacts">Artifacts</a>
                        <div class="right">
                          <a id="showtable2">toggle view</a>
                          <a onClick="MyWindow=window.open('upload/uploadartifact.php','MyWindow','width=400,height=600'); return false;" href="">upload</a>
                        </div>
                        <input type="text" id="artsearch" onkeyup="artsearch()" autocomplete="off">
                    </div>
                    <div class="datatable" id="table2">
                    <table id="content2">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>keywords</th>
                            <th>img</th>
                            <th>url</th>
                            <th>category</th>
                            <th>raritymax</th>
                            <th>raritymin</th>
                            <th>flowerdescription</th>
                            <th>twopiece</th>
                            <th>fourpiece</th>
                            <th>primarycolor</th>

                        </tr>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `id` ORDER BY `id` DESC LIMIT 0,9999999") or die(mysqli_error());
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['name']?></td>
                                <td><?php echo $fetch['keywords']?></td>
                                <td><a href="<?php echo $fetch['img']?>"><?php echo $fetch['img']?></a></td>
                                <td><?php echo $fetch['url']?></td>
                                <td><?php echo $fetch['category']?></td>
                                <td><?php echo $fetch['raritymax']?></td>
                                <td><?php echo $fetch['raritymin']?></td>
                                <td><?php echo $fetch['flowerdescription']?></td>
                                <td><?php echo $fetch['twopiece']?></td>
                                <td><?php echo $fetch['fourpiece']?></td>
                                <td><?php echo $fetch['primarycolor']?></td>

                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                    </div>
                </div>




                <div class="dataset" id="set3">
                    <div class="dbheader">
                        <a href="/phpmyadmin/index.php?route=/sql&pos=0&db=akashadb&table=weapons">Weapons</a>
                        <div class="right">
                          <a id="showtable3">toggle view</a>
                          <a onClick="MyWindow=window.open('upload/uploadweapon.php','MyWindow','width=400,height=600'); return false;" href="">upload</a>
                        </div>
                        <input type="text" id="wepsearch" onkeyup="wepsearch()" autocomplete="off">
                    </div>
                    <div class="datatable" id="table3">
                    <table id="content3">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>keywords</th>
                            <th>img</th>
                            <th>url</th>
                            <th>category</th>
                            <th>weapon</th>
                            <th>stat</th>
                            <th>basemin</th>
                            <th>basemax</th>
                            <th>statmin</th>
                            <th>statmax</th>
                            <th>description</th>
                            <th>passivetitle</th>
                            <th>passiveeffect</th>

                        </tr>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `id` ORDER BY `id` DESC LIMIT 0,9999999") or die(mysqli_error());
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['name']?></td>
                                <td><?php echo $fetch['keywords']?></td>
                                <td>
                                    <a href="<?php echo $fetch['img']?>"><?php echo $fetch['img']?></a>
                                    <a href="images/weapons/<?php echo $fetch['url']?>/splash.png">images/weapons/<?php echo $fetch['url']?>/splash.png</a>

                                </td>
                                <td><?php echo $fetch['url']?></td>
                                <td><?php echo $fetch['category']?></td>
                                <td><?php echo $fetch['weapon']?></td>
                                <td><?php echo $fetch['stat']?></td>
                                <td><?php echo $fetch['basemin']?></td>
                                <td><?php echo $fetch['basemax']?></td>
                                <td><?php echo $fetch['statmin']?></td>
                                <td><?php echo $fetch['statmax']?></td>
                                <td><?php echo $fetch['description']?></td>
                                <td><?php echo $fetch['passivetitle']?></td>
                                <td><?php echo $fetch['passiveeffect']?></td>

                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                    </div>
                </div>






                <div class="dataset" id="set4">
                    <div class="dbheader">
                        <a href="/phpmyadmin/index.php?route=/sql&pos=0&db=akashadb&table=banners">Banners</a>
                        <div class="right">
                          <a id="showtable4">toggle view</a>
                          <a onClick="MyWindow=window.open('upload/uploadbanner.php','MyWindow','width=400,height=600'); return false;" href="">upload</a>
                        </div>
                        <input type="text" id="wepsearch" onkeyup="wepsearch()" autocomplete="off">
                    </div>
                    <div class="datatable" id="table4">
                    <table id="content4">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>keywords</th>
                            <th>img</th>
                            <th>url</th>
                            <th>category</th>
                            <th>type</th>
                            <th>version</th>
                            <th>phase</th>
                            <th>startdate</th>
                            <th>finishdate</th>
                            <th>fivestarone</th>
                            <th>fivestartwo</th>
                            <th>fourstarone</th>
                            <th>fourstartwo</th>
                            <th>fourstarthree</th>
                            <th>fourstarfour</th>
                            <th>fourstarfive</th>

                        </tr>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM `banners` WHERE `id` ORDER BY `id` DESC LIMIT 0,9999999") or die(mysqli_error());
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['name']?></td>
                                <td><?php echo $fetch['keywords']?></td>
                                <td>
                                    <a href="<?php echo $fetch['img']?>"><?php echo $fetch['img']?></a>

                                </td>
                                <td><?php echo $fetch['url']?></td>
                                <td><?php echo $fetch['category']?></td>
                                <td><?php echo $fetch['type']?></td>
                                <td><?php echo $fetch['version']?></td>
                                <td><?php echo $fetch['phase']?></td>
                                <td><?php echo $fetch['startdate']?></td>
                                <td><?php echo $fetch['finishdate']?></td>
                                <td><?php echo $fetch['fivestarone']?></td>
                                <td><?php echo $fetch['fivestartwo']?></td>
                                <td><?php echo $fetch['fourstarone']?></td>
                                <td><?php echo $fetch['fourstartwo']?></td>
                                <td><?php echo $fetch['fourstarthree']?></td>
                                <td><?php echo $fetch['fourstarfour']?></td>
                                <td><?php echo $fetch['fourstarfive']?></td>


                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                    </div>
                </div>
             



        </div>
    </div>
<script type="text/javascript">
$(window).on("load resize", function() {
    $("#database-button").addClass("active");
 });
</script>

<script type="text/javascript">
$("#showtable1").click(function(){
    $("#table1").toggleClass("show");



});

$("#showtable2").click(function(){
    $("#table2").toggleClass("show");

});

$("#showtable3").click(function(){
    $("#table3").toggleClass("show");

});

$("#showtable4").click(function(){
    $("#table4").toggleClass("show");

});
</script>

<script>
function charasearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("charasearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("content1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function artsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("artsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("content2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
function wepsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("wepsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("content3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
    const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
    v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
    const table = th.closest('table');
    Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
        .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
        .forEach(tr => table.appendChild(tr) );
})));
</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
</body>


