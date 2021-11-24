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
    <link rel="stylesheet" href="public/css/default.css" />
    <link rel="stylesheet" href="/public/css/pages/profile.css" />
    <link rel="stylesheet" href="/public/css/pages/add-recipe.css" />
    <link rel="stylesheet" href="/public/css/input-ingredient.css" />
    <link rel="icon" type="image/png" href="/public/images/CWB logo.png" />
    <title>Add Recipe</title>
  </head>
  <body>
    <header class="top-nav-bar">
      <div class="left">
        <a href="profile.html"
          ><img src="/public/images/logo/logo_solid.png" class="logo-solid"
        /></a>
        <div class="search">
          <div class="fas fa-search"></div>
          <input type="text" placeholder="search" />
          <div class="fas fa-times"></div>
        </div>
      </div>

      <nav>
        <ul class="nav-links">
          <li><i class="fas fa-user-friends"></i></li>
          <li><i class="fas fa-comment"></i></li>
          <li><i class="far fa-bell"></i></li>
        </ul>
      </nav>
    </header>

    <div class="container">
      <!-- profile details container -->
      <div class="profile-details">
        <!-- profile image -->
        <div class="profile-image">
          <img
            class="prof-img"
            src="/public/images/avatars/pic_profile_terra_misu.jpg"
            alt=""
          />
        </div>

        <!-- everything on the right of profile image -->
        <div class="details-right">
          <!-- top side of profile details -->
          <div class="profile-top">
            <div class="name-age"><h5>Terra Misu, 20</h5></div>
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
              <p>Female</p>
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
          <p><span>52</span> recipes</p>
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
        <div class="title">
          <input type="text" placeholder="Title" />
        </div>
        <form action="">
          <div class="food-img" id="display_image">
            <img src="" alt="" />
            <input
              id="image_input"
              type="file"
              name="profile_photo"
              placeholder="Photo"
            />
          </div>

          <div class="input-detail">
            <a href="./profile.html">Back</a>
            <div>
              <label for="category" 
                ><i class="fas fa-glass-martini-alt"></i>
              </label>
              <select
                name="category"
                class="category"
                id="category"
                aria-placeholder="Title"
              >
                <option value="">Category</option>
                <option value="cooking" style="color: #ffaf00">Cooking</option>
                <option value="baking" style="color: #a1de53">Baking</option>
                <option value="mixology" style="color: #00ffa2">
                  Mixology
                </option>
              </select>
            </div>
            <div class="time">
              <label for="time"><i class="fas fa-clock"></i></label>
              <input
                name="time"
                type="number"
                min="0"
                placeholder="0"
                id="hour"
              />
              <p>h</p>
              <input
                name="time"
                type="number"
                min="0"
                max="59"
                placeholder="0"
                id="minute"
              />
              <p>m</p>
            </div>

            <div>
              <label for="nationality"
                ><i class="fa fa-globe" aria-hidden="true"></i
              ></label>
              <select
                name="nationality"
                class="select-nationality"
                id="nationality"
              >
                <option value="" disabled selected>Origin</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
                <option value="american">American</option>
                <option value="andorran">Andorran</option>
                <option value="angolan">Angolan</option>
                <option value="antiguans">Antiguans</option>
                <option value="argentinean">Argentinean</option>
                <option value="armenian">Armenian</option>
                <option value="australian">Australian</option>
                <option value="austrian">Austrian</option>
                <option value="azerbaijani">Azerbaijani</option>
                <option value="bahamian">Bahamian</option>
                <option value="bahraini">Bahraini</option>
                <option value="bangladeshi">Bangladeshi</option>
                <option value="barbadian">Barbadian</option>
                <option value="barbudans">Barbudans</option>
                <option value="batswana">Batswana</option>
                <option value="belarusian">Belarusian</option>
                <option value="belgian">Belgian</option>
                <option value="belizean">Belizean</option>
                <option value="beninese">Beninese</option>
                <option value="bhutanese">Bhutanese</option>
                <option value="bolivian">Bolivian</option>
                <option value="bosnian">Bosnian</option>
                <option value="brazilian">Brazilian</option>
                <option value="british">British</option>
                <option value="bruneian">Bruneian</option>
                <option value="bulgarian">Bulgarian</option>
                <option value="burkinabe">Burkinabe</option>
                <option value="burmese">Burmese</option>
                <option value="burundian">Burundian</option>
                <option value="cambodian">Cambodian</option>
                <option value="cameroonian">Cameroonian</option>
                <option value="canadian">Canadian</option>
                <option value="cape verdean">Cape Verdean</option>
                <option value="central african">Central African</option>
                <option value="chadian">Chadian</option>
                <option value="chilean">Chilean</option>
                <option value="chinese">Chinese</option>
                <option value="colombian">Colombian</option>
                <option value="comoran">Comoran</option>
                <option value="congolese">Congolese</option>
                <option value="costa rican">Costa Rican</option>
                <option value="croatian">Croatian</option>
                <option value="cuban">Cuban</option>
                <option value="cypriot">Cypriot</option>
                <option value="czech">Czech</option>
                <option value="danish">Danish</option>
                <option value="djibouti">Djibouti</option>
                <option value="dominican">Dominican</option>
                <option value="dutch">Dutch</option>
                <option value="east timorese">East Timorese</option>
                <option value="ecuadorean">Ecuadorean</option>
                <option value="egyptian">Egyptian</option>
                <option value="emirian">Emirian</option>
                <option value="equatorial guinean">Equatorial Guinean</option>
                <option value="eritrean">Eritrean</option>
                <option value="estonian">Estonian</option>
                <option value="ethiopian">Ethiopian</option>
                <option value="fijian">Fijian</option>
                <option value="filipino">Filipino</option>
                <option value="finnish">Finnish</option>
                <option value="french">French</option>
                <option value="gabonese">Gabonese</option>
                <option value="gambian">Gambian</option>
                <option value="georgian">Georgian</option>
                <option value="german">German</option>
                <option value="ghanaian">Ghanaian</option>
                <option value="greek">Greek</option>
                <option value="grenadian">Grenadian</option>
                <option value="guatemalan">Guatemalan</option>
                <option value="guinea-bissauan">Guinea-Bissauan</option>
                <option value="guinean">Guinean</option>
                <option value="guyanese">Guyanese</option>
                <option value="haitian">Haitian</option>
                <option value="herzegovinian">Herzegovinian</option>
                <option value="honduran">Honduran</option>
                <option value="hungarian">Hungarian</option>
                <option value="icelander">Icelander</option>
                <option value="indian">Indian</option>
                <option value="indonesian">Indonesian</option>
                <option value="iranian">Iranian</option>
                <option value="iraqi">Iraqi</option>
                <option value="irish">Irish</option>
                <option value="israeli">Israeli</option>
                <option value="italian">Italian</option>
                <option value="ivorian">Ivorian</option>
                <option value="jamaican">Jamaican</option>
                <option value="japanese">Japanese</option>
                <option value="jordanian">Jordanian</option>
                <option value="kazakhstani">Kazakhstani</option>
                <option value="kenyan">Kenyan</option>
                <option value="kittian and nevisian">
                  Kittian and Nevisian
                </option>
                <option value="kuwaiti">Kuwaiti</option>
                <option value="kyrgyz">Kyrgyz</option>
                <option value="laotian">Laotian</option>
                <option value="latvian">Latvian</option>
                <option value="lebanese">Lebanese</option>
                <option value="liberian">Liberian</option>
                <option value="libyan">Libyan</option>
                <option value="liechtensteiner">Liechtensteiner</option>
                <option value="lithuanian">Lithuanian</option>
                <option value="luxembourger">Luxembourger</option>
                <option value="macedonian">Macedonian</option>
                <option value="malagasy">Malagasy</option>
                <option value="malawian">Malawian</option>
                <option value="malaysian">Malaysian</option>
                <option value="maldivan">Maldivan</option>
                <option value="malian">Malian</option>
                <option value="maltese">Maltese</option>
                <option value="marshallese">Marshallese</option>
                <option value="mauritanian">Mauritanian</option>
                <option value="mauritian">Mauritian</option>
                <option value="mexican">Mexican</option>
                <option value="micronesian">Micronesian</option>
                <option value="moldovan">Moldovan</option>
                <option value="monacan">Monacan</option>
                <option value="mongolian">Mongolian</option>
                <option value="moroccan">Moroccan</option>
                <option value="mosotho">Mosotho</option>
                <option value="motswana">Motswana</option>
                <option value="mozambican">Mozambican</option>
                <option value="namibian">Namibian</option>
                <option value="nauruan">Nauruan</option>
                <option value="nepalese">Nepalese</option>
                <option value="new zealander">New Zealander</option>
                <option value="ni-vanuatu">Ni-Vanuatu</option>
                <option value="nicaraguan">Nicaraguan</option>
                <option value="nigerien">Nigerien</option>
                <option value="north korean">North Korean</option>
                <option value="northern irish">Northern Irish</option>
                <option value="norwegian">Norwegian</option>
                <option value="omani">Omani</option>
                <option value="pakistani">Pakistani</option>
                <option value="palauan">Palauan</option>
                <option value="panamanian">Panamanian</option>
                <option value="papua new guinean">Papua New Guinean</option>
                <option value="paraguayan">Paraguayan</option>
                <option value="peruvian">Peruvian</option>
                <option value="polish">Polish</option>
                <option value="portuguese">Portuguese</option>
                <option value="qatari">Qatari</option>
                <option value="romanian">Romanian</option>
                <option value="russian">Russian</option>
                <option value="rwandan">Rwandan</option>
                <option value="saint lucian">Saint Lucian</option>
                <option value="salvadoran">Salvadoran</option>
                <option value="samoan">Samoan</option>
                <option value="san marinese">San Marinese</option>
                <option value="sao tomean">Sao Tomean</option>
                <option value="saudi">Saudi</option>
                <option value="scottish">Scottish</option>
                <option value="senegalese">Senegalese</option>
                <option value="serbian">Serbian</option>
                <option value="seychellois">Seychellois</option>
                <option value="sierra leonean">Sierra Leonean</option>
                <option value="singaporean">Singaporean</option>
                <option value="slovakian">Slovakian</option>
                <option value="slovenian">Slovenian</option>
                <option value="solomon islander">Solomon Islander</option>
                <option value="somali">Somali</option>
                <option value="south african">South African</option>
                <option value="south korean">South Korean</option>
                <option value="spanish">Spanish</option>
                <option value="sri lankan">Sri Lankan</option>
                <option value="sudanese">Sudanese</option>
                <option value="surinamer">Surinamer</option>
                <option value="swazi">Swazi</option>
                <option value="swedish">Swedish</option>
                <option value="swiss">Swiss</option>
                <option value="syrian">Syrian</option>
                <option value="taiwanese">Taiwanese</option>
                <option value="tajik">Tajik</option>
                <option value="tanzanian">Tanzanian</option>
                <option value="thai">Thai</option>
                <option value="togolese">Togolese</option>
                <option value="tongan">Tongan</option>
                <option value="trinidadian or tobagonian">
                  Trinidadian or Tobagonian
                </option>
                <option value="tunisian">Tunisian</option>
                <option value="turkish">Turkish</option>
                <option value="tuvaluan">Tuvaluan</option>
                <option value="ugandan">Ugandan</option>
                <option value="ukrainian">Ukrainian</option>
                <option value="uruguayan">Uruguayan</option>
                <option value="uzbekistani">Uzbekistani</option>
                <option value="venezuelan">Venezuelan</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="welsh">Welsh</option>
                <option value="yemenite">Yemenite</option>
                <option value="zambian">Zambian</option>
                <option value="zimbabwean">Zimbabwean</option>
              </select>
            </div>

            <div>
              <label for="servings"></label
              ><i class="fas fa-concierge-bell"></i>
              <input name="servings" type="number" placeholder="Servings" />
            </div>

            <div>
              <label for="meal-type">
                <i
                  class="iconify"
                  data-icon="emojione-monotone:fork-and-knife-with-plate"
                ></i
              ></label>
              <select name="meal-time" id="meal-time" class="meal-time">
                <option value="any">Meal time (Any)</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
              </select>
            </div>
          </div>

          <div class="ingredient">
            <div class="todoBlock">
              <!-- main title holder -->
              <div class="titleHolder">
                <h5>Ingredients</h5>
              </div>
              <!-- todo list -->
              <div class="todoList">
                <!-- list holder -->
                <div class="listHolder">
                  <ul class="list"></ul>
                </div>
                <!-- form holder -->
                <div class="formHolder">
                  <div class="col big">
                    <input type="text" id="addInput" />
                  </div>
                  <div class="col">
                    <button type="button" id="addBtn" class="btn-primary">
                      Add Item
                    </button>
                  </div>
                  <div class="col">
                    <button type="button" id="toggleBtn" class="btn-primary">
                      Hide List
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="submit" type="submit">Save</button>
        </form>
      </div>
    </div>

    <!-- iconify -->
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <!-- importing custom js -->
    <script src="/public/js/input-ingredient.js"></script>

    <script>
      const image_input = document.querySelector("#image_input");
      var uploaded_image;

      image_input.addEventListener("change", function () {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
          uploaded_image = reader.result;
          document.querySelector(
            "#display_image"
          ).style.backgroundImage = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]);
      });
    </script>
  </body>
</html>
