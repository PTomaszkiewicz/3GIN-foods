<?php 
          $part2content = array(
            array("./photos/part2.1.png","Greys Vage","6 Days Remaning"),
            array("./photos/part2.2.png","Greys Vage","6 Days Remaning"),
            array("./photos/part2.3.png","Greys Vage","7 Days Remaning"),
            array("./photos/part2.4.png","Greys Vage","8 Days Remaning")
          );
          $part4content = array(
            array("./photos/part4.1.png","Cheese Burger","Burger Area","3.38"),
            array("./photos/part4.2.png","Toffe's Cake","Top Sticks","4.00"),
            array("./photos/part4.3.png","Dancake","Cake World","1.99"),
            array("./photos/part4.4.png","Crispy Sandwitch","Fastfood Dine","3.00"),
            array("./photos/part4.5.png","Thai Soup","Foody man","2.79"),
            array("./photos/part4.1.png","Cheese Burger","Burger Area","3.38"),
            array("./photos/part4.2.png","Toffe's Cake","Top Sticks","4.00"),
            array("./photos/part4.3.png","Dancake","Cake World","1.99"),
            array("./photos/part4.4.png","Crispy Sandwitch","Fastfood Dine","3.00"),
            array("./photos/part4.5.png","Thai Soup","Foody man","2.79"),
            array("./photos/part4.1.png","Cheese Burger","Burger Area","3.38"),
            array("./photos/part4.2.png","Toffe's Cake","Top Sticks","4.00"),
            array("./photos/part4.3.png","Dancake","Cake World","1.99"),
            array("./photos/part4.4.png","Crispy Sandwitch","Fastfood Dine","3.00"),
            array("./photos/part4.5.png","Thai Soup","Foody man","2.79")
          );
          $part4_1 = array(
            $part4content[0],
            $part4content[1],
            $part4content[2],
            $part4content[3],
            $part4content[4]
          );
          $part4_2 = array(
            $part4content[5],
            $part4content[6],
            $part4content[7],
            $part4content[8],
            $part4content[9]
          );
          $part4_3 = array(
            $part4content[10],
            $part4content[11],
            $part4content[12],
            $part4content[13],
            $part4content[14]
          );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML cos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
    <nav>
      <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none">
            <img src="./photos/burgerlogo.png" alt='logo' id="logoicon">
          <div class='d-flex location-info logofull'>
            <p class="text-odstep" id="logo1">3GIN</p><p id="logo2">food</p>
          </div>
          </a>
          <div class='d-flex location-info'>
            <strong class="text-odstep">Deliver to:</strong><img src='./photos/marker.png' alt="marker" class="text-odstep" id="marker"><p class="text-odstep">Current Location</p><strong>Minsk Mazowiecki, PL</strong>
          </div> 
          <div class="col-md-3 text-end navbar-menu">
            <img src="./photos/lupa.jpg" alt="lupa" id='lupsko'>
            <input type="search" placeholder="Search food" id='food_navbar_search' />
            <button type="button" id='loginbutt'class="btn btn-outline-primary me-2"><img src="/photos/user.png" alt=""> Login</button>
          </div>
        </header>
      </div>
    </nav>
    <div class="part1">
      <div class="part1left">
        <div class="part1content">
          <div class="slogans">
            <p id="slogan1">Are you starving?</p>
            <p id="slogan2">Within a few clicks, find meals that are accesable for you</p>
          </div>
          <div class="searchbox">
            <div class="deliverybuttons">
              <button id="delivery"><img src="./photos/delivery.png" alt=""> Delivery</button>
              <button id="pickup"><img src="./photos/pickup.png" alt="">Pickup</button>
            </div>
            <div class="bottomsearch">
              <input type="search" placeholder="Enter Your Address" id="searchfood">
              <button type="submit" id="searchfoodsubmit">Find food</button>
            </div>
          </div>
        </div>
        <img src="./photos/michapar1.png" alt="micha" id="micha">
      </div>
      <div class="part1right">
        
      </div>
    </div>
    <div class="part2">
      <div class="album py-5">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
          <?php foreach($part2content as $content) {
              echo "<div class='col'>\n";
              echo "  <div class='part2card card'>\n";
              echo "    <img src='$content[0]' alt=''/>\n";
              echo "    <div class='card-body part2cardbody'>\n";
              echo "      <p class='part2title'>$content[1]</p>\n";
              echo "      <div class='d-flex justify-content-between align-items-center'>\n";
              echo "        <div class='timecounter'>\n";
              echo "          <p class='timecountertext'>$content[2]</p>\n";
              echo "        </div>\n";
              echo "      </div>\n";
              echo "    </div>\n";
              echo "  </div>\n";
              echo "</div>";
            };

          ?>   
          </div>
        </div>
      </div>
    </div>
    <div class="part3 ">
      <p class="part3title">How does it work</p>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 ">
          <div class="col ">
            <img class="part3photos" src="./photos/part3.1.png" alt="">
            <h2 class="part3minititle">Select location</h2>
            <p class="part3opis">Choose the location where your food will be delivered.</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col ">
            <img class="part3photos" src="./photos/part3.2.png" alt="">
            <h2 class="part3minititle">Choose order</h2>
            <p class="part3opis">Check over houndreds of menus to pick your favorite food.</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col ">
            <img class="part3photos"src="./photos/part3.3.png" alt="">
            <h2 class="part3minititle">Pay advanced</h2>
            <p class="part3opis">Choose the location where your food will be delivered.</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col ">
            <img class="part3photos"src="./photos/part3.4.png" alt="">
            <h2 class="part3minititle">Enjoy meals</h2>
            <p class="part3opis">Food is made and delivered directly to your home.</p>
            
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>
    </div>
    <div class="part4">
      <p class="part4title">Popular items</p>
      <div class="part4center">
        <div id="myCarousel" class="carousel slide part4kar " data-bs-ride="carousel">

          <div class="carousel-inner ">
            <div class="carousel-item active  part4karcontent ">
      
              <div class="container">
                <div class="carousel-caption text-start">
                  <div class="album py-5 part4album">
                    <div class="container">
                
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
                        <?php 
                          foreach($part4_1 as $content2){                            
                          
                            echo "<div class='col'>\n
                                    <div class='part2card card'>\n
                                    <img src='$content2[0]' alt=''/>
                                       <div class='card-body part2cardbody'>\n
                                        
                                        <p class='part4minititle part4el'>$content2[1]</p>\n
                                        <div class='d-flex justify-content-between align-items-center part4el'>\n
                                          <div class='part4loc'>\n
                                            <img class='part4locico' src='photos/part4locico.png'alt=''>\n
                                            <p>$content2[2]</p>\n
                                          </div>\n
                                        
                                        </div>\n
                                        <p class='part4price'>$$content2[3]</p>\n
                                        <button class='part4minibutt'>Order Now</button>\n
                                      </div>\n
                                    </div>\n
                                  </div>";
                          };
                        ?>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item part4karcontent">
              <div class="container">
                <div class="carousel-caption text-start">
                  <div class="album py-5 part4album">
                    <div class="container">
                
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
                        <?php 
                            foreach($part4_2 as $content2){                            
                            
                              echo "<div class='col'>\n
                                      <div class='part2card card'>\n
                                      <img src='$content2[0]' alt=''/>
                                        <div class='card-body part2cardbody'>\n
                                          
                                          <p class='part4minititle part4el'>$content2[1]</p>\n
                                          <div class='d-flex justify-content-between align-items-center part4el'>\n
                                            <div class='part4loc'>\n
                                              <img class='part4locico' src='photos/part4locico.png'alt=''>\n
                                              <p>$content2[2]</p>\n
                                            </div>\n
                                          
                                          </div>\n
                                          <p class='part4price'>$$content2[3]</p>\n
                                          <button class='part4minibutt'>Order Now</button>\n
                                        </div>\n
                                      </div>\n
                                    </div>";
                            };
                          ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>         
            </div>
            <div class="carousel-item part4karcontent">
              <div class="container">
                <div class="carousel-caption text-start">
                  <div class="album py-5 part4album">
                    <div class="container">
                
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
                      <?php 
                          foreach($part4_3 as $content2){                            
                          
                            echo "<div class='col'>\n
                                    <div class='part2card card'>\n
                                    <img src='$content2[0]' alt=''/>
                                       <div class='card-body part2cardbody'>\n
                                        
                                        <p class='part4minititle part4el'>$content2[1]</p>\n
                                        <div class='d-flex justify-content-between align-items-center part4el'>\n
                                          <div class='part4loc'>\n
                                            <img class='part4locico' src='photos/part4locico.png'alt=''>\n
                                            <p>$content2[2]</p>\n
                                          </div>\n
                                        
                                        </div>\n
                                        <p class='part4price'>$$content2[3]</p>\n
                                        <button class='part4minibutt'>Order Now</button>\n
                                      </div>\n
                                    </div>\n
                                  </div>";
                          };
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <img class=" part4butt part4buttleft" src="./photos/arleft.svg" alt=""></img>
            <div class="no-display">Prev</div>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <img class=" part4butt part4buttright" src="./photos/arright.svg" alt=""></img>
            <div class="no-display">Next</div>
          </button>
        </div>
       
        
    </div>
  </body>
  
</html>
