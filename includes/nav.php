<link rel="stylesheet" href="css/navstyle.css">
   <div class="topnav">
      <div class="topnav-container">
         <div class="topnav-left">
            <div class="topnav-left-container">
               <div class="hamburger-packaging">
                  <button class="hamburger">
                     <i class="material-symbols-outlined">menu</i>
                  </button>
               </div>
               <a class="logo" href="/Akasha/index.php">
                  <p class="logo">Akasha<sup>DB</sup></p>
               </a>
            </div>
         </div>
         <div class="topnav-center">
            <button class="mobile-back-btn"><i class="material-symbols-outlined">arrow_back</i></button>
               <input class="searchbar" id="quicksearchbar" type="text" onkeyup="quicksearch()" placeholder="Search" name="search" autocomplete="off">
            
            <div class="search-results-container">
               <ul class="search-results" id="resultfilter">
                  <p class="result-title">Results:</p>

                  <?php
                     $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `name`") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>

                     <li>
                        <a class="keywords" href="/Akasha/characters/<?php echo $fetch['url']?>.php"><?php echo $fetch['keywords']?></a>
                           <div class="result-details">
                              <img class="bg-<?php echo $fetch['rarity']?>-star" src="/Akasha/<?php echo $fetch['img']?>">
                              <div class="result-details-text">
                              <p><?php echo $fetch['name']?></p>
                              <div class="result-tags">
                                 <p class="tag"><?php echo $fetch['category']?></p>
                                 <p class="tag"><?php echo $fetch['element']?></p>
                                 <p class="tag"><?php echo $fetch['weapon']?></p>
                              </div>
                           </div>
                        </div>
                     </li>
                  <?php
                     }
                  ?>


                  <?php
                     $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `id` ORDER BY `name`") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>

                     <li>
                        <a class="keywords" href="/Akasha/artifacts/<?php echo $fetch['url']?>.php"><?php echo $fetch['keywords']?></a>
                           <div class="result-details">
                              <img class="bg-<?php echo $fetch['fivestar']?>-star bg-<?php echo $fetch['fourstar']?>-star bg-<?php echo $fetch['threestar']?>-star bg-<?php echo $fetch['twostar']?>-star bg-<?php echo $fetch['onestar']?>-star" src="/Akasha/<?php echo $fetch['img']?>">
                              <div class="result-details-text">
                              <p><?php echo $fetch['name']?></p>
                              <div class="result-tags">
                                 <p class="tag"><?php echo $fetch['category']?></p>
                              </div>
                           </div>
                        </div>
                     </li>
                  <?php
                     }
                  ?>

                  
                  <?php
                     $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `id` ORDER BY `name`") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>
                     <li>
                        <a class="keywords" href="/Akasha/weapons/<?php echo $fetch['url']?>.php"><?php echo $fetch['keyword']?></a>
                           <div class="result-details">
                              <img class="bg-<?php echo $fetch['rarity']?>-star" src="/Akasha/<?php echo $fetch['img']?>">
                              <div class="result-details-text">
                              <p><?php echo $fetch['name']?></p>
                              <div class="result-tags">
                                 <p class="tag"><?php echo $fetch['category']?></p>
                                 <p class="tag"><?php echo $fetch['weapon']?></p>
                                 <p class="tag <?php echo $fetch['stat']?>"><?php echo $fetch['stat']?></p>

                              </div>
                           </div>
                        </div>
                     </li>
                  <?php
                     }
                  ?>

               </ul>
            </div>

         </div>
         <div class="topnav-right">
            <div class="topnav-right-container">
               <div class="mobile-search-container">
                  <button class="open-mobile-search-btn">
                     <i class="material-symbols-outlined">search</i>
                  </button>
               </div>
            </div>
         </div>

      </div>
   </div>


   <div class="sidenav">
      <a href="/Akasha/index.php">
         <button class="sidenav-btn" id="home-button">
            <i class="material-symbols-outlined">Home</i>
            <p>Home</p>
         </button>
      </a>
      
      <a href="/Akasha/database.php">
         <button class="sidenav-btn" id="database-button">
            <i class="material-symbols-outlined">Database</i>
            <p>Database</p>
         </button>
      </a>

      <a href="/Akasha/characters.php">
         <button class="sidenav-btn dropdown-button" id="character-button">
         <img class="img-icon" src="/Akasha/images/icons/character.png">
               <p>Characters</p>
         </button>
      </a>
      
      <div class="dropdown-icon-container">
         <i class="material-symbols-outlined dropdown-icon" id="character-dropdown-icon">chevron_right</i>
      </div>
         <div class="dropdown-content" id="character-dropdown-content">
            <?php
               $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `name`") or die(mysqli_error());
               while($fetch = mysqli_fetch_array($query)){
            ?>
                  <a href="/Akasha/characters/<?php echo $fetch['url']?>.php"><button id="<?php echo $fetch['url']?>-button"><?php echo $fetch['name']?></button></a>
            <?php
               }
            ?>
         </div>


      <a href="/Akasha/weapons.php">
         <button class="sidenav-btn dropdown-button" id="weapon-button">
            <img class="img-icon" src="/Akasha/images/icons/inventory-weapons.png">
            <p>Weapons</p>
         </button>
      </a>
      
      <div class="dropdown-icon-container">
            <i class="material-symbols-outlined dropdown-icon" id="weapon-dropdown-icon">chevron_right</i>
      </div>
         <div class="dropdown-content" id="weapon-dropdown-content">
            <?php
               $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `id` ORDER BY `name`") or die(mysqli_error());
               while($fetch = mysqli_fetch_array($query)){
            ?>
                  <a href="/Akasha/weapons/<?php echo $fetch['url']?>.php"><button id="<?php echo $fetch['url']?>-button"><?php echo $fetch['name']?></button></a>
            <?php
               }
            ?>
         </div>

      <a href="/Akasha/artifacts.php">
         <button class="sidenav-btn dropdown-button" id="artifact-button">
         <img class="img-icon" src="/Akasha/images/icons/flower-of-life.png">
            <p>Artifacts</p>
         </button>
      </a>

      <div class="dropdown-icon-container">
         <i class="material-symbols-outlined dropdown-icon" id="artifact-dropdown-icon">chevron_right</i>
      </div>
         <div class="dropdown-content" id="artifact-dropdown-content">
            <?php
               $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `id` ORDER BY `name`") or die(mysqli_error());
               while($fetch = mysqli_fetch_array($query)){
            ?>
                  <a href="/Akasha/artifacts/<?php echo $fetch['url']?>.php"><button id="<?php echo $fetch['url']?>-button"><?php echo $fetch['name']?></button></a>
            <?php
               }
            ?>
         </div>


   </div>

