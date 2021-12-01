<?php 
include "config.php";


session_start();

$firstName = "";
$lastName = "";
$email = "";
$gender = "";
$birthdate = "";

if(isset($_SESSION['firstName'])){
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$email = $_SESSION['email'];
$gender = $_SESSION['gender'];
$birthdate = $_SESSION['birthdate'];
}else{
  echo "<script>alert('Sessions not working')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/5078679b34.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./public/css/default.css" />
    <link rel="stylesheet" href="./public/css/pages/profile.css" />
    <link rel="stylesheet" href="./public/css/match.css">
    <link rel="icon" type="image/png" href="/Cooking_with_Benefits/public/images/CWB logo.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Profile</title>

    <script>
    $(document).ready(function () {
  $(".prof").mouseenter(function () {
    $("#upload_btn").css("display", "block");
  });
  $(".form-profile").mouseleave(function () {
    $("#upload_btn").css("display", "none");
  });
});
    </script>
  </head>
  <body>
    <header class="top-nav-bar">
      <img src="/Cooking_with_Benefits/public/images/logo/logo-title.png" class="logo" />
      <nav>
        <ul class="nav-links">
          <li><i class="fas fa-user-friends"></i></li>
          <li><i class="fas fa-comment"></i></li>
          <li><i onclick="openForm()" class="far fa-bell"></i></li>
        </ul>
      </nav>
    </header>
    <!--  -->
    <div class="container">
      <!-- profile details container -->
      <div class="profile-details">
        <!-- profile image -->
        <div class="profile-image">
          <img
            class="prof-img"
            src="/Cooking_with_Benefits/public/images/avatars/pic_profile_terra_misu.jpg"
            alt=""
          />
          <label for="img-upload" id="upload_btn">Choose profile</label>
        </div>

        <!-- everything on the right of profile image -->
        <div class="details-right">
          <!-- top side of profile details -->
          <div class="profile-top">
            <div class="name-age"><?php echo $firstName;?>, 20</h5></div>
            <div class="follow-btn"><button>Follow</button></div>
            <div class="options-btn">
              <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
            </div>
          </div>

          <!-- middle of profile details -->
          <div class="profile-middle">
            <!-- icon column 1 -->
            <div class="icon1">
              <i class="fa fa-globe" aria-hidden="true"></i>
              <p>Japanese</p>
              <i class="fa fa-transgender" aria-hidden="true"></i>
              <?php echo "<p>". $gender ."</p>";?>
              <i> <span class="iconify" data-icon="vs:face-allergy"></span></i>
              <p><span>Dietary restrictions: </span>shellfish, dairy</p>
            </div>
          </div>

          <!-- bio -->
          <div class="bio">
            <p>
              I’m a college student looking to make friends with cooks. I’ve
              been cooking for 5 years, and I want to expand my range of
              recipes!
            </p>
          </div>

          <!-- Styles | Specializes in | Wants to learn -->
          <div class="methods-table">
            <table>
              <tr>
                <th class="column1">Styles</th>
                <th class="column2">Specializes in</th>
                <th class="column3">Wants to Learn</th>
              </tr>
              <tr class="row2">
                <td class="column1">Cooking</td>
                <td class="column2">Japanese, French</td>
                <td class="column3">Canadian</td>
              </tr>
              <tr class="row3">
                <td class="column1">Baking</td>
                <td class="column2">Japanese</td>
                <td class="column3">Brazillian</td>
              </tr>
              <tr class="row4">
                <td class="column1">Mixology</td>
                <td class="column2">French</td>
                <td class="column3">-</td>
              </tr>
            </table>
          </div>
        </div>

        <!-- recipes | followers | following -->
        <div class="recipes-followers-following">
          <p><span><?php echo 23;?></span> recipes</p>
          <p><span>69</span> followers</p>
          <p><span>4</span> following</p>
        </div>

        <hr />

        <!-- profile navbar -->
        <div class="lower-navbar" id="selected">
          <nav>
            <ul class="nav-links">
              <li>
                <a href="./profile.html"
                  ><button class="btn active">Recipes</button></a
                >
               
              </li>
              <li><button class="btn">About</button></li>
              <li><button class="btn">Smth</button></li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- recipes container -->
      <div class="recipes-container">
        <div class="search">
          <div class="fas fa-search"></div>
          <input type="text" placeholder="search" />
          <div class="fas fa-times"></div>
        </div>
        <div class="recipes-grid">
          <div>
            <div class="recipe-img">
              <img src="/public/images/food/cake.jpg" alt="" />
            </div>
            <div class="recipe-details">
              <div class="recipe-title"><h6>Chocolate Cake</h6></div>
              <div class="recipe-middle">
                <div class="icon2">
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  <i class="fas fa-clock"></i>
                </div>
                <div class="icon2-text">
                  <p>French</p>
                  <p>1h30m</p>
                </div>
                <div class="icon3">
                  <i class="fas fa-concierge-bell"></i>
                  <i
                    class="iconify"
                    data-icon="emojione-monotone:fork-and-knife-with-plate"
                  ></i>
                </div>
                <div class="icon3-text">
                  <p>Serves&nbsp10</p>
                  <!-- %nbsp is a space. removing it starts a new line -->
                  <p>Lunch</p>
                </div>
              </div>
              <div class="rate">
                <p>48 Reviews</p>
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>
            </div>

            <!-- <div class="recipe-details"></div> -->
          </div>
          <div>
            <div class="recipe-img">
              <img src="/public/images/food/cocktail.jpg" alt="" />
            </div>

            <div class="recipe-details">
              <div class="recipe-title"><h6>Cocktail</h6></div>
              <div class="recipe-middle">
                <div class="icon2">
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  <i class="fas fa-clock"></i>
                </div>

                <div class="icon2-text">
                  <p>French</p>
                  <p>1h30m</p>
                </div>

                <div class="icon3">
                  <i class="fas fa-concierge-bell"></i>
                  <i
                    class="iconify"
                    data-icon="emojione-monotone:fork-and-knife-with-plate"
                  ></i>
                </div>

                <div class="icon3-text">
                  <p>Serves&nbsp10</p>
                  <!-- %nbsp is a space. removing it starts a new line -->
                  <p>Lunch</p>
                </div>
              </div>

              <div class="rate">
                <p>48 Reviews</p>
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>
            </div>

            <!-- <div class="recipe-details"></div> -->
          </div>

          <div class="add-recipe">
            <a href="add-recipe.html" class="fas fa-plus-circle"></a>
          </div>
          <div>4</div>
        </div>
      </div>
    </div>

    <!-- match popup -->
    <div class="popup" id="myForm">
      <div class="close-btn" onclick="closeForm()">&times;</div>
        <h4>You have matched with <strong>Moe Hito</strong> </span></h4>
        
        <!-- user1 -->
        <div class="user1">
          <div class="recipe-name">   
            <p>Cake</p>
          </div>
       
          <div class="popup-img">
            <img src="./public/images/food/cake.jpg" alt="">
          </div>
        </div>

        <!-- user2 -->
          <div class="user2">
          <div class="recipe-name">   
            <p>Sushi</p>
          </div>
       
          <div class="popup-img">
            <img src="./public/images/food/sushi.jpeg" alt="">
          </div>
        </div>

        <div class="prof-img">
          <div><img src="./public/images/avatars/pic_profile_terra_misu.jpg" alt=""></div>  
          <div class="space"></div>
          <div><img src="./public/images/avatars/pic_profile_moe_hito.jpg" alt=""></div>
        </div>
        <!-- pink line -->
        <hr>
        <!-- chat btn -->
        <button class="chat-btn">Chat</button>
      
      </div>
    </div>

    <script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
    </script>

    <!-- iconify -->
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
  </body>
</html>
