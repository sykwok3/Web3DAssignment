<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assignment/application/css/bootstrap.css" crossorigin="anonymous">

  <!-- X3DOM.css -->
  <link rel='stylesheet' type='text/css' href='../assignment/application/css/x3dom.css'>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assignment/application/css/custom.css" crossorigin="anonymous">
  <!-- Lets have some fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <!-- fancyBox3 -->
  <link rel="stylesheet" type="text/css" href="../assignment/application/css/jquery.fancybox.min.css">

  <title>Web 3D Assignment</title>

</head>

<body id="bodyColor">
  <!-- The 3D App header -->
  <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">

    <!-- Brand -->
    <div class="logo">
      <a class="navbar-brand" href="#">
        <h2>Coca</h2>
        <h2>Cola</h2>
        <p>Things are better with CocaCola</p>
      </a>
    </div>

    <!-- Navbar Menu Icon -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- link Menu Icon button to the links class navbar-collapse selector] -->
    <div class="collapse navbar-collapse">
      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a id="navHome" class="nav-link active" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom">About</a>
        </li>

        <li class="nav-item">
          <a id="navStatement" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom">Statement of Originality</a>
        </li>

        <li class="nav-item">
          <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom">Models</a>
        </li>

        <li class="nav-item">
          <a id="navGallery" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
      -->
  <div class="container-fluid">

    <!-- This is the home page contents -->
    <div id="home" class="main_contents">
      <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->
      <div class="row">
        <!-- <div class="col-sm-12"> -->
        <div class="col">
          <div id="main_3d_image">
          </div>
          <!-- <div id="main_text" class="col-xs-12 col-sm-4"> -->
        </div>
        <!-- <div id="main_text" class="d-flex flex-column"> -->
        <div id="main_text" class="col-xs-12 col-sm-4">
          <div id="title_home"></div>
          <div id="subTitle_home"></div>
          <div id="description_home"></div>
        </div>
      </div>
    </div> <!-- End home page contents-->

    <!-- about page -->
    <div id="about" style="display:none;">
      <div class="row">
        <div class="col-sm-4">
          <div class="card img-narrow">
            <a href="../assignment/application/assets/images/renderImages/cokeRender.jpg" data-fancybox data-caption="My 3D Coke Can Render">
              <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/coca_cola.jpg" alt="Coca Cola">
            </a>
            <div class="card-body">
              <div id="title_left" class="card-title drinksText"></div>
              <div id="subTitle_left" class="card-subtitle drinksText"></div>
              <div id="description_left" class="card-text drinksText"></div>
              <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-outline-dark btn-responsive">Find out more ...</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <a href="../assignment/application/assets/images/renderImages/spriteRender.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
              <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/sprite.jpg" alt="Sprite">
            </a>
            <div class="card-body">
              <div id="title_centre" class="card-title drinksText"></div>
              <div id="subTitle_centre" class="card-subtitle drinksText"></div>
              <div id="description_centre" class="card-text drinksText"></div>
              <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-outline-dark btn-responsive">Find out more ...</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card img-narrow">
            <a href="../assignment/application/assets/images/renderImages/fantaRender.jpg" data-fancybox data-caption="My 3D Fanta Can Render" class="thumbnail">
              <img class="card-img-top img-fluid img-thumbnail" src="../assignment/application/assets/images/Fanta.png" alt="Dr Pepper">
            </a>
            <div class="card-body">
              <div id="title_right" class="card-title drinksText"></div>
              <div id="subTitle_right" class="card-subtitle drinksText"></div>
              <div id="description_right" class="card-text drinksText"></div>
              <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-outline-dark btn-responsive">Find out more ...</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- statement page -->
    <div id="statement" style="display:none;">
      <div class="row">
        <div class="text">
          <h><strong>Statement and Information</strong></h>
          <br>
          <hr>
          <br>
          <p>These web pages are submitted as part requirement for the degree of Computing for Business and at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged</p>
          <br>
          <hr>
          <br>
          <p>Github link: </p>
        </div>
      </div>
    </div>

    <!-- Model page-->
    <div id="models" class="main_contents" style="display:none;">
      <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
      <div class="row">
        <!-- X3D Model -->
        <div class="col-sm-8">
          <div class="card text-left">
            <div class="card-body">
              <!-- X3D Models -->
              <div>
                <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                <button type="button" class="btn btn-outline-danger btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                <button type="button" class="btn btn-outline-danger btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                <button type="button" class="btn btn-outline-danger btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Fanta</button>

                <!-- Place the X3D code here -->
                <div class="model3D">
                  <x3d id="wire">
                    <scene>
                      <Switch whichChoice="0" id='SceneSwitch'>
                        <transform>
                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/CokeCan_animated.x3d"> </inline>
                        </transform>
                        <transform>
                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/SpriteBottle_animated.x3d"> </inline>
                        </transform>
                        <transform>
                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/FantaCan_animated.x3d"> </inline>
                        </transform>
                      </Switch>
                    </scene>
                  </x3d>
                </div>
                <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- model descriptions -->
        <!-- SQLite is used here -->
        <div class="col-sm-4">
          <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div id="title_coke" class="card-title drinksText"></div>
                  <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                  <!-- <div id="description_coke" class="card-text drinksText"></div>    -->
                  <!-- SQLITE DATA -->
                  <div class="card-text drinksText"><?php echo $data[0]['modelDescription']; ?> </div>
                  <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-dark btn-responsive">Visit Coke</a>
                </div>
              </div>
            </div>
          </div> <!-- End coke description contents -->
          <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
          <div id="spriteDescription" class="row" style="display:none;">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div id="title_sprite" class="card-title drinksText"></div>
                  <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                  <!-- <div id="description_sprite" class="card-text drinksText"></div>  -->
                  <div class="card-text drinksText"><?php echo $data[1]['modelDescription']; ?> </div>
                  <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-dark btn-responsive">Visit Sprite</a>
                </div>
              </div>
            </div>
          </div> <!-- End sprite description contents -->
          <!-- Row to hold one card to hold the fanta descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div id="title_pepper" class="card-title drinksText"></div>
                  <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                  <!-- <div id="description_pepper" class="card-text drinksText"></div>   -->
                  <div class="card-text drinksText"><?php echo $data[3]['modelDescription']; ?> </div>
                  <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-dark btn-responisve">Visit Fanta.</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Row to hold the interaction panels -->
      <div id="interaction" class="row" style="display:none;">
        <!-- Column for the camera view controls -->
        <div class="col-sm-4">
          <div class="card text-left">
            <div class="card-body">
              <div class="card-Title x3dCamera_Subtitle drinksText">
                <h3>Camera Views</h3>
              </div>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraFront();">Default</a>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
            </div>
          </div>
        </div>

        <!-- Column for the animation controls -->
        <div class="col-sm-4">
          <div class="card text-left">
            <div class="card-body">
              <div class="card-Title x3dAnimationSubtitle drinksText">
                <h3>Animation Options</h3>
              </div>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="spin();">Start</a>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="stopRotation();">Stop</a>
            </div>
          </div>
        </div> 

        <!-- Column for the render type and lighting controls -->
        <div class="col-sm-4">
          <div class="card text-left">
            <div class="card-body">
              <div class="card-Title x3dRendersubtitle drinksText">
                <h3>Render and Lighting</h3>
              </div>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="headLight();">Head Light</a>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="omniLight();">Omni Light</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- gallery page -->
    <div id="gallery" style="display:none;">
      <!-- gallery -->
      <!-- <div class="row">
          <div class="col-sm-8"> -->
      <div class="card text-center" id="gallery_card">
        <div class="card-body">
          <div class="d-flex flex-column">
            <div class="card-title title_gallery drinksText"></div>
            <div class="gallery" id="gallery"></div>
            <div class="card-text description_gallery drinksText"></div>
          </div>
        </div>
      </div> <!-- End gallery card -->
      <!-- </div> -->
      <!-- </div> -->

    </div><!-- End gallery page -->

  </div> <!-- End 3D App SPA Contents -->

  <nav id="footerColor" class="navbar navbar-expand-sm footer fixed-bottom">
    <div class="container-fluid">
      <div class="navbar-text float-left copyright">
        <p><span class="align-baseline">&copy 2022 Web 3D Assignment | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
      </div>
      <div class="navbar-text float-right social">
        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
        <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
      </div>
    </div>
  </nav>

  <!-- My 3D App modals -->
  <!-- Contact modal -->
  <!-- The Modal -->
  <div class="modal fade" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">3D App Contact Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <p>Sze Yuen Kwok Email: sk762@sussex.ac.uk</p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <script src="../assignment/application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
  <script src="../assignment/application/js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../assignment/application/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="../assignment/application/js/fontawesome-all.min.js"></script>
  <script src="../assignment/application/js/custom.js" crossorigin="anonymous"></script>
  <script src="../assignment/application/js/swap_restyle.js"></script>
  <script type='text/javascript' src='../assignment/application/js/x3dom-1.7.2/x3dom.js'></script>
  <script type="text/javascript" src="../assignment/application/js/gallery_generator.js"></script>
  <script src="../assignment/application/js/getJsonData.js"></script>
  <script src="../assignment/application/js/modelInteractions.js"></script>
  <script src="../assignment/application/js/jquery.fancybox.min.js"></script>
</body>

</html>