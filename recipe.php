<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/5078679b34.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="/public/css/default.css" /> -->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="/public/images/CWB logo.png" />
  <title>Results</title>
</head>

<body>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  <!-- picture -->

  <!-- //container -->

  <head>
    <title>Container</title>
    <style>
      .box {
        width: 30%;
        height: 20%;
        border: 1px solid #dcdcdc;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
        margin-left: 10px;
        float: left;
        /* display: flex; */
        /* justify-content: center; */
        /* align-items: center; */


      }

      .center {
        width: 30%;
        height: 20%;
        border: 1px solid #dcdcdc;
        margin-bottom: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
        margin-left: 10px;
        float: left;
        text-align: center;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      img {
        width: 100%;
        height: 50%;
      }

      #recipeThumbnail {
        width: 100%;
      
      }

      /* search */
      .search {
        position: relative;
        height: 2rem;
        width: 29%;
        left: 35%;
        background-color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1px solid #dcdcdc;
        border-radius: 0.5rem;
      }

      .search>input[type="text"] {
  
        width: 100%;
        height: 100%;
        outline: none;
        border: none;
      }

      .fa-search,
      .fa-times {
        margin: 0 7px;
      }

      /* navbar */
      .top-nav-bar a,
      li,
      i,
      button {
        color: #00ffa2;
        text-decoration: none;
      }

      header {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        padding: 5px 10%;
        background-color: white;
        height: 4rem;
        border-bottom: 1px solid #dcdcdc;
      }

      .text-center {
        font-size: 30px;

      }

      .header-bar {
        text-align: center;
        font-size: 50px;
      }

      .left {
        margin-right: auto;
        display: flex;
        align-items: center;
        position: relative;
        left: -150px;
      }

      .logo {
        cursor: pointer;
        width: 20rem;
        margin-right: auto;
        height: auto;
      }

      .logo-solid,
      .search {
        cursor: pointer;
        width: 4rem;
        height: auto;
        padding: 0.5rem 0.5rem;
      }

      .left>.search {
        position: relative;
        left: 10px;
        width: 15rem;
      }

      .nav-links {
        list-style: none;
      }

      .nav-links li {
        display: inline-block;
        padding: 0 1rem;
        margin-right: auto;
      }

      i:hover,
      .nav-links li a:hover {
        color: #00cc81;
        cursor: pointer;
      }

      button {
        display: block;
        padding: 0.7rem 1.8rem;
        background-color: #00ffa2;
        border: none;
        border-radius: 0.6rem;
        cursor: pointer;
        color: #333;
      }

      .top-nav-bar button {
        margin-left: 1.6rem;
      }

      button:hover {
        background-color: #00cc81;
      }
    </style>
  </head>

  <body>
    <header class="top-nav-bar">
      <div class="left">
        <a href="profile.php"><img src="public/images/logo/logo_solid.png" class="logo-solid" /></a>
        <a href="profile.php"><img src="public/images/avatars/pic_profile_terra_misu.jpg" class="logo-solid" /></a>
        <div class="search">
          <div class="fas fa-search"></div>
          <input id="search" type="text" placeholder="search" onkeyup="getsearch()" />

        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
        function getsearch() {
          var search = $('#search').val();
          //console.log(search);
          $.ajax( // I just copy pasted this part to
            {
              url: './search.php',
              data: {
                "search": search,
              },
              type: 'GET',
              success: function(output) {

                const result = JSON.parse(output);
                const count = JSON.parse((output)).length
                console.log(result);
                console.log(count);
                var display = "";


                display += `<p class="text-center" > We found ${count} fantastic dish results for you! </p>`
                // this is where the ads go
                display +=
                  `<div class="ad-wrapper outer tablet-ad desktop-ad full-column karma-leaderboard-docking-element docked" style="">
                <a href="https://www.walmart.com/">
                <div class="ad-sticky-container desktop-ad tablet-ad karma-ad">
                <div id="div-gpt-leaderboard-flex-1" data-tier="1" class="ad ad-container ad-wrapper type-banner type-970x90-flex margin-16-tb desktop-ad tablet-ad  karma-ad" role="complementary" aria-hidden="true" tabindex="-1" style="width: 100%; text-align: center;" data-google-query-id="CMeXp8vNo_QCFZKOpwodRk4Psg">
                <div id="google_ads_iframe_3865/ar.mdp.com/tier1/search/search_0_container_" style="border: 1pt none;">
                <img src = "public/images/ads/ads.jg" id="google_ads_iframe_3865/ar.mdp.com/tier1/search/search_0" title="This is where the ads go" name="google_ads_iframe_3865/ar.mdp.com/tier1/search/search_0" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" srcdoc="" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation-by-user-activation" style="border: 0px; vertical-align: bottom; width: 728px; height: 90px;" data-google-container-id="1" data-load-complete="true">
                
            </img>
                </a>
            
            </div></div></div>
    </div>`

                if (result.length > 0) {

                  result.forEach(element => {

                    display += `<div class="box">
          <!-- food image -->
          <div class="inner-container js-inner-container" id="recipeThumbnail" ><img src="userassets/recipeImgs/${element[3]}/img1.jpg" alt="this is picture of the dish" title="">
            <!-- food title -->
            <a class="card__titleLink manual-link-behavior" href="" title="${element[2]}">
              <h3 class="card__title">
                ${element[2]}
                <!-- $row[recipename] -->
              </h3>
            </a>
            <!--stars container-->
            <div class="card__ratingContainer">
              <div class="component recipe-ratings ">
               
              <div class="ratings-dropdown-button" aria-expanded="false"><span class="review-star-text">Rating: ${element[7]} stars</span>
                   <span class="rating-star active" aria-hidden="true" data-rating="1"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                     <!-- <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg></span>
                  <span class="rating-star active" aria-hidden="true" data-rating="2"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                      <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg></span>
                  <span class="rating-star active" aria-hidden="true" data-rating="3"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                      <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg></span>
                  <span class="rating-star active" aria-hidden="true" data-rating="4"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                      <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg></span>
                  <span class="rating-star active" aria-hidden="true" data-rating="5"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                      <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg></span> -->
                </div>
                
              </div>
              <span class="card__ratingCount card__metaDetailText">Type:  ${element[1]} </span>
            </div>
    
            <!-- details -->
            <div class="card__detailsContainer">
              <div class="card__detailsContainer-left">
    
                <div class="card__summary">
                Perfect for: ${element[4]}
                </div>
    
                <div class="card__author">
                  <span class="card__authorNamePrefix">By</span>
                  <a class="card__authorNameLink" href="" title="More content by ${element[5]}" data-tracking-content-headline="Roasted Salsa" data-tracking-category="user action">
                    <span class="card__authorName"> ${element[5]}</span>
                  </a>
                </div>

                <div class="card__author">
                  <span class="card__authorNamePrefix">Bio:</span> ${element[0]}
                  
                </div>


              </div>
    
            </div>
    
    
          </div>
        </div>`;


                  });

                  $('#searchResult').html(display);

                }

              }
            }
          );

        }
      </script>


      <nav>
        <ul class="nav-links">
          <li><i class="fas fa-user-friends"></i></li>
          <li><i class="fas fa-comment"></i></li>
          <li><i class="far fa-bell"></i></li>
        </ul>
      </nav>
    </header>
    <!-- this is the container of the food box.  -->


    <div id="searchResult">

      <div class="center">
        <!-- food image -->
        <div class="inner-container js-inner-container"><img src="public/images/cookingfriends/cook-fail.jpg" alt="" title="">
          <!-- food title -->
          <a class="card__titleLink manual-link-behavior" href="" title="Testing">
            <h3 class="card__title">
              Search for your desired cuisine!
              <!-- $row[recipename] -->
            </h3>
          </a>
          <!-- stars container -->
          <!-- <div class="card__ratingContainer">
            <div class="component recipe-ratings ">
              <div class="ratings-dropdown-button" aria-expanded="false"><span class="review-star-text">Rating: 4.7 stars</span>
                <span class="rating-star active" aria-hidden="true" data-rating="1"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                  </svg></span>
                <span class="rating-star active" aria-hidden="true" data-rating="2"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                  </svg></span>
                <span class="rating-star active" aria-hidden="true" data-rating="3"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                  </svg></span>
                <span class="rating-star active" aria-hidden="true" data-rating="4"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                  </svg></span>
                <span class="rating-star active" aria-hidden="true" data-rating="5"><svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <path class="rating-star-filled" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                  </svg></span>
              </div>

            </div>
            <span class="card__ratingCount card__metaDetailText"> 10 </span>
          </div> -->

          <!-- details -->
          <!-- <div class="card__detailsContainer">
            <div class="card__detailsContainer-left">

              <div class="card__summary">
                The charred tomatoes and peppers add a nice flavor to this salsa.
              </div>

              <div class="card__author">
                <span class="card__authorNamePrefix">By</span>
                <a class="card__authorNameLink" href="https://www.allrecipes.com/cook/5680438/" title="More content by ChrisP" data-tracking-content-headline="Roasted Salsa" data-tracking-category="user action">
                  <span class="card__authorName">ChrisP</span>
                </a>
              </div>
            </div>

          </div> -->


        </div>
      </div>

    </div>

    <!-- this is the end of food container -->






    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </body>

</html>