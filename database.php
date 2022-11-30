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
                <div class="dbheader">
                    <p>Akasha Database</p>
                    <div class="right">
                      <a href="/phpmyadmin/index.php?route=/table/export&db=akashadb&table=characters&single_table=true" target="_blank">export</a>
                      <a href="/phpmyadmin/index.php?route=/database/structure&db=akashadb" target="_blank">phpmyadmin</a>
                    </div>
                </div>

                <div class="dataset" id="set1">
                    <div class="dbheader">
                        <a target="_blank" href="/phpmyadmin/index.php?route=/sql&pos=0&db=akashadb&table=characters">Characters</a>
                        <div class="right">
                          <a id="showtable1">hide</a>
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
                        </tr>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `id` DESC LIMIT 0,9999999") or die(mysqli_error());
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['name']?></td>
                                <td><?php echo $fetch['keywords']?></td>
                                <td><?php echo $fetch['img']?></td>
                                <td><?php echo $fetch['url']?></td>
                                <td><?php echo $fetch['rarity']?></td>
                                <td><?php echo $fetch['category']?></td>
                                <td><?php echo $fetch['element']?></td>
                                <td><?php echo $fetch['weapon']?></td>
                                <td><?php echo $fetch['region']?></td>
                                <td><?php echo $fetch['stat']?></td>
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
                          <a id="showtable2">hide</a>
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

                        </tr>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `id` ORDER BY `id` DESC LIMIT 0,9999999") or die(mysqli_error());
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['name']?></td>
                                <td><?php echo $fetch['keywords']?></td>
                                <td><?php echo $fetch['img']?></td>
                                <td><?php echo $fetch['url']?></td>
                                <td><?php echo $fetch['category']?></td>
                                <td><?php echo $fetch['raritymax']?></td>
                                <td><?php echo $fetch['raritymin']?></td>
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
                          <a id="showtable3">hide</a>
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

                        </tr>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `id` ORDER BY `id` DESC LIMIT 0,9999999") or die(mysqli_error());
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['name']?></td>
                                <td><?php echo $fetch['keywords']?></td>
                                <td><?php echo $fetch['img']?></td>
                                <td><?php echo $fetch['url']?></td>
                                <td><?php echo $fetch['category']?></td>
                                <td><?php echo $fetch['weapon']?></td>
                                <td><?php echo $fetch['stat']?></td>
                                <td><?php echo $fetch['basemin']?></td>
                                <td><?php echo $fetch['basemax']?></td>
                                <td><?php echo $fetch['statmin']?></td>
                                <td><?php echo $fetch['statmax']?></td>

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


