<?php session_start(); 
  $conn = new mysqli('localhost','root','','quanlybanxe') or die('Ket noi that bai');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Honda Nhan Trung</title>
  </head>
  <body>
      <header id="header" class="fixed-top">

        <div class="fas fa-bars"></div>
        
        <a href="#" class="logo" id="logoHead"><img src="img/Honda-logo.jpg" alt="" style="height: 6%;width: 6%;"><h1>Honda Nhân Trung</h1></a>
        
          <div class="search-container">
            <label for="search" class="fas fa-search"></label>
            <input type="search" placeholder="search" id="search">
          </div>

      <!-- navbar  -->

      <nav class="navbar">
        <ul>
          <li><a href="#home">home</a></li>
          <li><a href="#product">product</a></li>
          <li><a href="#">sign in</a></li>
          <li><a href="#">sign up</a></li>
        </ul>
      </nav>
      </header>

      <section id="home" class="owl-carousel owl-theme home-slider">

        <div class="slide item">
        
          <div class="content text-center text-md-left pl-md-5 ml-md-5">
            <h1>Honda Winner X</h1>
            <p>chu thich</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3 class="price">40.000.000VND</h3>
            <a href="#"><button>Buy now <i class="fas fa-shopping-cart"></i></button></a>
          </div>
        
          <div class="image">
            <img src="img//winnerx.jpg" alt="" style="height: 500px;width: 600px;">
          </div>
        
        </div>
        
        <div class="slide item">
        
          <div class="content text-center text-md-left pl-md-5 ml-md-5">
            <h1>Honda Vison 2021</h1>
            <p>Chu thich</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3 class="price">35.000.000VND</h3>
            <a href="#"><button>Buy now <i class="fas fa-shopping-cart"></i></button></a>
          </div>
        
          <div class="image">
            <img src="img/vision.jpg" alt="" style="height: 500px;width: 600px;">
          </div>
        
        </div>
        
        <div class="slide item">
        
          <div class="content text-center text-md-left pl-md-5 ml-md-5">
            <h1>Honda Future 2021</h1>
            <p>Chu thich</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <h3 class="price">31.000.000VND</h3>
            <a href="#"><button>Buy now <i class="fas fa-shopping-cart"></i></button></a>
          </div>
        
          <div class="image">
            <img src="img/future.jpg" alt="" style="height: 500px;width: 600px;">
          </div>
        
        </div>
        
        </section>

        <section id="product">

          <h1 class="heading">products</h1>
          
          <div class="product-container">
          
          <h2 class="title">Xe số</h2>
          
          <div class="product-slider owl-carousel owl-theme">
        <?php
        $sql = "SELECT * FROM `hanghoa` WHERE Loai = 'So'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="product-card item">
          
            <div class="image">
              <img src="img/'.$row["Hinh"] .'.jpg" alt="">
            </div>
        
            <div class="content">
              <h3>'.$row["TenHH"].'</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">'.$row["Gia"].'VND</div>
            </div>
        
            <div class="info">
              <h4>'.$row["TenHH"].'</h4>
              <p>chu thich</p>
              <a href="#"><button>Buy now</button></a>
              <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
              </div>
            </div>
        
          </div>';
        }

          
        ?>
          
            </div>
          
          </div>
          
          </div>
          
          <!-- Con tay  -->
          
          <div class="product-container">
          
            <h2 class="title">Xe Côn</h2>
            
            <div class="product-slider owl-carousel owl-theme">
            
              <div class="product-card item">
            
                <div class="image">
                  <img src="img/winner.jpg" alt="">
                </div>
            
                <div class="content">
                  <h3>Honda Winner</h3>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">41.000.000VND</div>
                </div>
            
                <div class="info">
                  <h4>product info</h4>
                  <p>chu thich</p>
                  <a href="#"><button>Buy now</button></a>
                  <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                  </div>
                </div>
            
              </div>
            
              <div class="product-card item">
            
                <div class="image">
                  <img src="img/winnerx.jpg" alt="">
                </div>
            
                <div class="content">
                  <h3>Honda Winner X</h3>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">42.000.000VND</div>
                </div>
            
                <div class="info">
                  <h4>product info</h4>
                  <p>chu thich</p>
                  <a href="#"><button>Buy now</button></a>
                  <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                  </div>
                </div>
            
              </div>
            
              <div class="product-card item">
            
                <div class="image">
                  <img src="img/cb150.jpg" alt="">
                </div>
            
                <div class="content">
                  <h3>Honda CB150</h3>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">105.000.000VND</div>
                </div>
            
                <div class="info">
                  <h4>product info</h4>
                  <p>chu thich</p>
                  <a href="#"><button>Buy now</button></a>
                  <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                  </div>
                </div>
            
              </div>
            
              <div class="product-card item">
            
                <div class="image">
                  <img src="img/cbr150.jpg" alt="">
                </div>
            
                <div class="content">
                  <h3>Honda CBR150</h3>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">109.000.000VND</div>
                </div>
            
                <div class="info">
                  <h4>product info</h4>
                  <p>chu thich</p>
                  <a href="#"><button>Buy now</button></a>
                  <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                  </div>
                </div>
            
              </div>
            
            </div>
            
            </div>
          
            <!-- Tay ga  -->
          
          <div class="product-container">
          
              <h2 class="title">Xe Tay Ga</h2>
              
              <div class="product-slider owl-carousel owl-theme">
              
                <div class="product-card item">
              
                  <div class="image">
                    <img src="img/lead.jpg" alt="">
                  </div>
              
                  <div class="content">
                    <h3>Honda Lead</h3>
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">30.000.000VND</div>
                  </div>
              
                  <div class="info">
                    <h4>product info</h4>
                    <p>chu thich</p>
                    <a href="#"><button>Buy now</button></a>
                    <div class="share">
                      <a href="#" class="fab fa-facebook-f"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fab fa-instagram"></a>
                    </div>
                  </div>
              
                </div>
              
                <div class="product-card item">
              
                  <div class="image">
                    <img src="img/vision.jpg" alt="">
                  </div>
              
                  <div class="content">
                    <h3>Honda Vision</h3>
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">35.000.000VND</div>
                  </div>
              
                  <div class="info">
                    <h4>product info</h4>
                    <p>chu thich</p>
                    <a href="#"><button>Buy now</button></a>
                    <div class="share">
                      <a href="#" class="fab fa-facebook-f"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fab fa-instagram"></a>
                    </div>
                  </div>
              
                </div>
              
                <div class="product-card item">
              
                  <div class="image">
                    <img src="img/vario.jpg" alt="">
                  </div>
              
                  <div class="content">
                    <h3>Honda Vario</h3>
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">55.000.000VND</div>
                  </div>
              
                  <div class="info">
                    <h4>product info</h4>
                    <p>chu thich</p>
                    <a href="#"><button>Buy now</button></a>
                    <div class="share">
                      <a href="#" class="fab fa-facebook-f"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fab fa-instagram"></a>
                    </div>
                  </div>
              
                </div>
              
                <div class="product-card item">
              
                  <div class="image">
                    <img src="img/airblade.jpg" alt="">
                  </div>
              
                  <div class="content">
                    <h3>Honda Air Blade</h3>
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">48.000.000VND</div>
                  </div>
              
                  <div class="info">
                    <h4>product info</h4>
                    <p>chu thich</p>
                    <a href="#"><button>Buy now</button></a>
                    <div class="share">
                      <a href="#" class="fab fa-facebook-f"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fab fa-instagram"></a>
                    </div>
                  </div>
              
                </div>
              
              </div>
              
          </div>
          
          <!-- phan khoi lon  -->
          
          <div class="product-container">
          
            <h2 class="title">Xe Phân Khối Lớn</h2>
            
            <div class="product-slider owl-carousel owl-theme">
            
              <div class="product-card item">
            
                <div class="image">
                  <img src="img/cbr250.jpg" alt="">
                </div>
            
                <div class="content">
                  <h3>Honda CBR 250RR</h3>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">139.000.000VND</div>
                </div>
            
                <div class="info">
                  <h4>product info</h4>
                  <p>chu thich</p>
                  <a href="#"><button>Buy now</button></a>
                  <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                  </div>
                </div>
            
              </div>
            
              <div class="product-card item">
            
                <div class="image">
                  <img src="img/cbr650.jpg" alt="">
                </div>
            
                <div class="content">
                  <h3>Honda CBR 650RR</h3>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">290.000.000VND</div>
                </div>
            
                <div class="info">
                  <h4>product info</h4>
                  <p>chu thich</p>
                  <a href="#"><button>Buy now</button></a>
                  <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                  </div>
                </div>
            
              </div>
            
              <div class="product-card item">
            
                <div class="image">
                  <img src="img/cbr1000.jpg" alt="">
                </div>
            
                <div class="content">
                  <h3>Honda CBR 1000RR</h3>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">500.000.000VND</div>
                </div>
            
                <div class="info">
                  <h4>product info</h4>
                  <p>chu thich</p>
                  <a href="#"><button>Buy now</button></a>
                  <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                  </div>
                </div>
            
              </div>
            
              <div class="product-card item">
            
                <div class="image">
                  <img src="img/cb1000r.jpg" alt="">
                </div>
            
                <div class="content">
                  <h3>Honda CB1000R</h3>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">490.000.000VND</div>
                </div>
            
                <div class="info">
                  <h4>product info</h4>
                  <p>chu thich</p>
                  <a href="#"><button>Buy now</button></a>
                  <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                  </div>
                </div>
            
              </div>
          
            
            </div>
            
          </div>
          
          </section>
          <hr>
          <footer class="footer">
            <div class="author">
              <span class="author-info">Hồ Trung Nhân</span>
              <span class="author-info">MSSV: B1805898</span>
              <span class="author-info">Kỹ thuật phần mềm K44</span>
            </div>
            <div class="contact">
              <span class="contact-phonenum">0774000828</span>
              <a href="https://www.facebook.com/nhantrung.ho/" target="blank" class="contact-link">
                <i class="fab fa-facebook"></i>
                Facebook
              </a>
            </div>
          </footer>



         <script src="js/jquery.js"></script>
        <script src="js/owl.carousel.min.js"></script> 
        <script src="js/main.js"></script>
        <script src="bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.js"></script>
    
    </body>

  </body>
</html>