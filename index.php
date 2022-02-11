<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">studybuddy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-hamburger"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav m-auto my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#trending">trending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            signup
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<section class="main">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-7 pt-5 text-center">
        <h1 class="pt-5">Technology is best when it brings people together !</h1>
        <button class="btn1 mt-3">More tips</button>
      </div>
    </div>
  </div>
</section>
<!--==================================-->
<section class="new">
  <div class="container py-5">
    <div class="row pt-5">
      <div class="col-lg-7 m-auto">
        <div class="row text-center"> 
          <div class="col-lg-4">
            <img src="web.png" class="img-luid" alt="">
            <h6>web development</h6> 
          </div>
          <div class="col-lg-4">
            <img src="blockchain.jpg" class="img-luid" alt="">
            <h6>blockchain</h6> 
          </div>
          <div class="col-lg-4">
            <img src="ai.png" class="img-luid" alt="">
            <h6>artificial intelligence</h6> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="product" id="trending">
  <div class="container py-5 ">
    <div class="row py-5">
      <div class="col-lg-5  m-auto text-center">
        <h1>Trending</h1>
        <h6 style="color:red;">Be the best in IT</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="html.png" class="img-fluid" alt="" width="150px">
          </div>
        </div>
        <h6>HTML</h6>
        <p>$39.99</p>
      </div>
    <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="css.png" class="img-fluid" alt=""width="150px">
          </div>
        </div>
        <h6>CSS</h6>
        <p>$39.99</p>
      </div>
    <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="py.png" class="img-fluid" alt="">
          </div>
        </div>
        <h6>Python</h6>
        <p>$39.99</p>
      </div>
    <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="mongo.png" class="img-fluid" alt="" height="150px">
          </div>
        </div>
        <h6>MongoDB</h6>
        <p>$39.99</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 text-center m-auto">
        <button class="btn1">click for more</button>
      </div>
    </div>
  </div>
</section>
<section class="about">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-8 m-auto text-center">
        <h1>Welcome to our education society</h1>
        <h6 style="color:red;">Be the best in IT</h6>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-4">
          <img src="mongo.png" class="img-fluid mb-3" alt="">
          <h5>Best quality education</h5>
          <p>MongoDB is a source-available cross-platform document-oriented database program. Classified as a NoSQL database program, MongoDB uses JSON-like documents with optional schemas. MongoDB is developed by MongoDB Inc. and licensed under the Server Side Public License.</p>
        </div>
        <div class="col-lg-4">
          <img src="py.png" class="img-fluid mb-3" alt="">
          <h5>Best quality education</h5>
          <p>Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.</p>
        </div>
        <div class="col-lg-4">
          <img src="html.png" class="img-fluid mb-3" alt="" width="66%">
          <h5>Best quality education</h5>
          <p>The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.</p>
        </div>

    </div>
    <div class="row pt-3">
      <div class="col-lg-6 text-center m-auto">
        <button class="btn1">shop more</button>
      </div>
    </div>
  </div>
</section>
<section class="shop">
  <div class="container">
    <div class="row py-5">
      <div class="col-lg-8 m-auto text-center">
        <h1>Explore courses</h1>
        <h6 style="color:red;">Be the best in IT</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="html.png" class="img-fluid" alt="" width="150px">
          </div>
        </div>
        <h6>HTML</h6>
        <p>$39.99</p>
      </div>
    <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="css.png" class="img-fluid" alt="" width="150px">
          </div>
        </div>
        <h6>CSS</h6>
        <p>$39.99</p>
      </div>
    <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="py.png" class="img-fluid" alt="">
          </div>
        </div>
        <h6>Python</h6>
        <p>$39.99</p>
      </div>
    <div class="col-lg-3 text-center">
        <div class="card border-0 bg-light mb-2">
          <div class="card-body">
            <img src="mongo.png" class="img-fluid" alt="">
          </div>
        </div>
        <h6>MongoDB</h6>
        <p>$39.99</p>
      </div>
    </div>
  </div>
</section>
<section class="apple py-5">
  <div class="container text-white py-5">
    <div class="row py-5">
      <div class="col-lg-6">
        <h1 class="font-weight-bold py-3">Unlock your potential with right guidance</h1>
        <h6>Be the best in IT</h6>
        <button class="btn1 mt-3">More from us</button>
      </div>
    </div>
  </div>
</section>
<section class="contact py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-5 m-auto text-center">
        <h1>contact us</h1>
        <h6 style="color:red;">Always be in touch with us</h6>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-lg-9 m-auto">
        <div class="row">
          <div class="col-lg-4">
            <h6>Location</h6>
            <p>New york 0911 first street dc</p>

            <h6>Phone</h6>
            <p>03444-24359555</p>

            <h6>Email</h6>
            <p>rezwanjhon@gmail.com</p>
          
        </div>
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6">
              <input type="text"class="form-control bg-light"placeholder="first name">
            </div>
            <div class="col-lg-6">
              <input type="text"class="form-control bg-light"placeholder="last name">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 py-3">
              <textarea name="" class="form-control bg-light"placeholder="enter your name" id="" cols="10" rows="5"></textarea>
            </div>
          </div>
          <button class="btn1">submit</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="news py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-9 m-auto text-center">
        <h1>Join Us</h1>
        <input type="text"class="px-3" placeholder="enter your email" name="">
        <button class="btn2">Submit</button>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-11">
        <div class="row">
          <div class="col-lg-3">
            <h5 class="pb-3">Customer care</h5>
            <p>regular</p>
            <p>on time</p>
          </div>
          <div class="col-lg-3">
            <h5 class="pb-3">Customer care</h5>
            <p>regular</p>
            <p>on time</p>
          </div>
          <div class="col-lg-3">
            <h5 class="pb-3">Customer care</h5>
            <p>regular</p>
            <p>on time</p>
          </div>
          <div class="col-lg-3">
            <h5 class="pb-3">Customer care</h5>
            <span><i class="fab fa-facebook"></i></span>
            <span><i class="fab fa-instagram"></i></span>
            <span><i class="fab fa-twitter"></i></span>
            <span><i class="fab fa-google-plus"></i></span>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <p class="text-center">copyright 2022 all rights reserved&copy;</p>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>