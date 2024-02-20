<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="style.css">

  
</head>
<body>
 
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">BUILD</span>CON</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           <li class="nav-item">
                <a class="nav-link" href="#carouselExampleCaptions">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
             </ul>
           </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="final project5.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>Your Dream House</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repudiandae, tempora earum eligendi tempore aspernatur.</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
              </div>
          </div>

          <div class="carousel-item">
            <img src="final project3.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Always Dedicated</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repudiandae, tempora earum eligendi tempore aspernatur.</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
              </div>
          </div>

          <div class="carousel-item">
            <img src="final project2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>True Construction</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repudiandae, tempora earum eligendi tempore aspernatur.</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>

       </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
     </div>

      <!-- about section  -->

      <section id="about" class="about section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img">
                <img src="final project4.jpeg" alt="" class="img-fluid">
              </div>

            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">
                <h2>We Provide Best Quality <br> Services Ever</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                   Repellat asperiores reprehenderit possimus neque doloribus 
                   cupiditate esse officiis expedita. Expedita voluptatem similique sint
                    adipisci dolores optio id, eligendi asperiores itaque ipsa. Lorem ipsum dolor
                     sit amet consectetur adipisicing elit. Dolore eveniet in numquam aliquam blanditiis ex, 
                    unde officiis mollitia quo voluptas.</p>
                    <a href="#" class="btn btn-warning">Learn More</a>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- service section  -->

      <section id="services" class="services section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <div class="section-header text-center pb-5">
              <h2>Our Services</h2>
              <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Maiores, beatae.
              </p>
             </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
             <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-subtract"></i>
                <h3 class="card-title">Best Quality</h3>
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quia aperiam ab,
                   veritatis corrupti Lorem ipsum dolor sit amet.</p>
                  <button class="btn btn-warning text-dark">Read More</button>
              </div>
             </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-white text-center bg-dark pb-2">
               <div class="card-body">
                <i class="bi bi-slack"></i>
                 <h3 class="card-title">Sustainability</h3>
                 <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quia aperiam ab,
                    veritatis corrupti Lorem ipsum dolor sit amet.</p>
                   <button class="btn btn-warning text-dark">Read More</button>
               </div>
              </div>
             </div>
             <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-white text-center bg-dark pb-2">
               <div class="card-body">
                <i class="bi bi-playstation"></i>
                 <h3 class="card-title">Integrity</h3>
                 <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quia aperiam ab,
                    veritatis corrupti Lorem ipsum dolor sit amet.</p>
                   <button class="btn btn-warning text-dark">Read More</button>
               </div>
              </div>
             </div>
          </div>
        </div>

      </section>

      <!-- portfolio section -->

      <section id="portfolio" class="portfolio section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h2>Our Projects</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, reprehenderit!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./final project4.jpeg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">Building Make</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ea aliquid possimus sequi,
                     ullam culpa! Accusamus error magnam pariatur fuga.
                    </p>
                    <button class="btn bg-warning text-dark">Learn More</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./final project4.jpeg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">Building Make</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ea aliquid possimus sequi,
                     ullam culpa! Accusamus error magnam pariatur fuga.
                    </p>
                    <button class="btn bg-warning text-dark">Learn More</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./final project4.jpeg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">Building Make</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ea aliquid possimus sequi,
                     ullam culpa! Accusamus error magnam pariatur fuga.
                    </p>
                    <button class="btn bg-warning text-dark">Learn More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

      </section>

      <!-- team section  -->

      <section id="team" class="team section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h2>Our Projects</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, reprehenderit!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-center">
                <div class="card-body">
                  <img src="./construction owners3.jpeg" alt="" class="img-fluid rounded-circle" style="height: 130px; width: 150px;">
                  <h3 class="card-title pu-2">Jack Wilson</h3>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Fuga modi ut minima aliquam magnam fugit.</p>

                    <p class="socials">
                      <i class="bi bi-twitter text-dark mx-1"></i>
                      <i class="bi bi-facebook text-dark mx-1"></i>
                      <i class="bi bi-linkedin text-dark mx-1"></i>
                      <i class="bi bi-instagram text-dark mx-1"></i>
                    </p>
                </div>
              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-center">
                <div class="card-body">
                  <img src="./construction owners1.jpeg" alt="" class="img-fluid rounded-circle" style="height: 130px; width: 150px;">
                  <h3 class="card-title pu-2">Jack Wilson</h3>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Fuga modi ut minima aliquam magnam fugit.</p>

                    <p class="socials">
                      <i class="bi bi-twitter text-dark mx-1"></i>
                      <i class="bi bi-facebook text-dark mx-1"></i>
                      <i class="bi bi-linkedin text-dark mx-1"></i>
                      <i class="bi bi-instagram text-dark mx-1"></i>
                    </p>
                </div>
              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-center">
                <div class="card-body">
                  <img src="./construction owners2.jpeg" alt="" class="img-fluid rounded-circle" style="height: 130px; width: 150px;">
                  <h3 class="card-title pu-2">Jack Wilson</h3>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Fuga modi ut minima aliquam magnam fugit.</p>

                    <p class="socials">
                      <i class="bi bi-twitter text-dark mx-1"></i>
                      <i class="bi bi-facebook text-dark mx-1"></i>
                      <i class="bi bi-linkedin text-dark mx-1"></i>
                      <i class="bi bi-instagram text-dark mx-1"></i>
                    </p>
                </div>
              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-center">
                <div class="card-body">
                  <img src="./construction owners4.jpeg" alt="" class="img-fluid rounded-circle" style="height: 130px; width: 150px;">
                  <h3 class="card-title pu-2">Jack Wilson</h3>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Fuga modi ut minima aliquam magnam fugit.</p>

                    <p class="socials">
                      <i class="bi bi-twitter text-dark mx-1"></i>
                      <i class="bi bi-facebook text-dark mx-1"></i>
                      <i class="bi bi-linkedin text-dark mx-1"></i>
                      <i class="bi bi-instagram text-dark mx-1"></i>
                    </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

       <!-- contact section  -->

     <!-- <section id="contact" class="contact section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Similique, laudantium.</p>
              </div>
            </div>
          </div>
          <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 p-4 pb-4">
          <form action="" class="bg-light p-4.ms-auto">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="text" class="form-control" required placeholder="Your Full Name">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="email" class="form-control" required placeholder="Your Email Here">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <textarea rows="3" required class="form-control" placeholder="Your Query Here"></textarea>
                </div>
              </div>
              <button class="btn btn-warning btn-lg btn-block mt-3">Sent Now</button>
            </div>
          </form>
            </div>
          </div>
        </div>
 </section> -->

 <section id="contact" class="contact section-padding">
  <div class="container w-50 ms-auto">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Contact Us</h2>
          <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Similique, laudantium.</p>
        </div>
      </div>
    </div>
    <div class="row m-0">
      <div class="col-md-12 p-0 pt-4 p-4 pb-4">
    <form action="action.php" method="POST" class="bg-light p-4.ms-auto" autocomplete="off">
      <div class="row">
        <div class="col-md-12">
          <div class="mb-3">
            <div class="user">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <div class="email">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <div class="contact">
            <label for="contact">Contact:</label>
            <input type="number" class="form-control" name="contact" id="contact" required>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <div class="addrress">
            <label for="addrress">Address:</label>
            <input type="text" class="form-control" name="address" id="addrress" required>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <div class="message">
            <label for="message">Message:</label>
            <textarea rows="3"  class="form-control" name="message" id="message" cols="30"></textarea>
          </div>
          </div>
        </div>
        <button class="btn btn-warning btn-lg btn-block mt-3">Sent Now</button>
      </div>
    </form>
      </div>
    </div>
  </div>
</section>
 
 <!-- footer section  -->

      <footer class="bg-dark p-2 text-center">
        <div class="container">
         <p class="text-white">All Right Reserved @Website Name</p>

        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="valid.js"></script>
</body>
</html>

