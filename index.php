<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>
<style>
.aboutimg {
    width: 100%;
    height: 300px !important;

}

.servicesimg {
    width: 100%;
    height: 250px !important;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tower Guide</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--==============NAVBAR END================ -->


    <!--==============CAROUSAL START================ -->

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nepal</h5>
                    <p>The stunning seunset of nepal mountains.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Turkey</h5>
                    <p>The snow covered mountains of turkey.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pakistan</h5>
                    <p>The attractive coniferce lake of pakistan.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--==============CAROUSAL END================ -->

    <!--==============ABOUT US START================ -->
    <section>
        <div class="my-5">
            <h2 class="text-center fs-1 py-3">About Us</h2>
        </div>
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 ">
                    <img src="images/about1.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-6"> Tower guider </h2>
                    <p class="py-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero commodi iste
                        sapiente quibusdam facere esse, necessitatibus tempore sint ipsum nisi aspernatur deleniti
                        molestiae, maiores sed tenetur vel ea optio eum!
                        Sapiente at commodi eaque labore consequatur cumque voluptatum, a eveniet recusandae et facilis,
                        voluptatibus voluptatem maxime aliquam excepturi dicta rem magni. Velit aut modi adipisci atque
                        corporis non, itaque veritatis! </p>
                    <a href="about.php" class="btn btn-success ">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!--==============ABOUT US END================ -->


    <!--==============SERVICES START================ -->

    <section>
        <div class="my-5">
            <h2 class="text-center fs-1 py-3">Services</h2>
        </div>
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/img4.jpg" class="card-img-top img-fluid servicesimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/img5.jpg" class="card-img-top img-fluid servicesimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/img4.jpg" class="card-img-top img-fluid servicesimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============SERVICES END================ -->

    <!--==============GALLERY START================ -->
    <section>
       <div class="my-5">
            <h2 class="text-center fs-1 py-3">Gallery</h2>
        </div>
        <div class="container-fluid py-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
            <div class="col-lg-4 col-md-4 col-12 galleryimg pt-4">
              <img  src="images/img6.jpg" class="img-fluid" >
            </div>
          </div>
        </div>
    </section>
    <!--==============GALLERY END================ -->


    <!--==============CONTACT START================ --> 
   <section>
     <div class="my-5">
            <h2 class="text-center fs-1 py-3">Contact Us</h2>
        </div>
    <div class="container-fluid py-3">
        <form action="user.php" method="post" class="w-50 m-auto "> 
          <div class="form-group">
            <label>Name</label> <br>
            <input type="text" name="name" id="" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label> <br>
            <input type="email" name="email" id="" class="form-control">
          </div>
          <div class="form-group">
            <label>Phone</label> <br>
            <input type="text" name="Phone" id="" class="form-control">
          </div>
          <div class="form-group">
            <label>Comments</label> <br>
            <textarea name="comment" class="form-control"></textarea>
          </div>

          <input type="submit" value="submit" name="submit" class="btn btn-success mt-3">
        </form>
    </div>
   </section>


    <!--==============CONTACT END================ -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>