<!Doctype html>

<!-- michaelwang0213.stackstaging.com -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



    <style type="text/css">
      html {
      }

      body {
        position: relative;
        padding: 0;
        margin: 0;
      }

      .navbar {
        opacity: 0.9;
      }

      .nav-item {
        padding-left: 20px;
        padding-right: 20px;
      }

      .carousel h1{
        position: absolute;
        z-index: 10;
        top: 40%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);

        color: white;
        font-size: 100px;
        font-family: 'Open Sans', sans-serif;
        font-weight: bold;
        text-align: center;
      }

      .carousel-item {
        height: 100vh;
      }

      .carousel-item img {
        height: 100%;
        object-fit: cover;
      }

      .carousel-item h3 {
          position: relative;
          top: -25vh;
          transform: translateY(50%);
          font-size: 80px;
          font-family: 'Open Sans', sans-serif;
          font-weight: normal;
      }

      .lead {
        font-size: 24px;
      }

      #Jumbotron {
        padding-top: 100px;
        background-image: url(blueBackground.jpg);
        background-size: auto 100%;
        color: white;
      }

      #Hello {
        padding-bottom: 100px;
      }

      .bienvenido {
        padding-right: 100px;
      }

      #Jumbotron h1 {
        padding-bottom: 20px;
      }

      #Jumbotron p {
        padding-bottom: 20px;
      }

      #Jumbotron hr {
        border-color: white;
        padding-bottom: 10px;
      }

      #Hello img {
        width: 100%;
        border-radius: 50%;
      }

      #Resume {
        padding-top: 100px;
      }

      #resume-text {
        text-align: right;
      }

      #pdf img {
        width: 100%;
      }

      #pdf img:hover {
        opacity: 0.8;
      }

      .section {
        padding-top: 100px;
        padding-bottom: 100px;
      }

      .section h1 {
        padding-bottom: 80px;
        text-align: center !important;
      }

      .section h2{
        padding-top: 80px;
        padding-bottom: 60px;
      }

      #Education {
        background-color: #ffffff;
        font-size: 18px;
      }

      #Education h1 {
        color: #1b98d9;;
      }

      #Education h2 {
        color: #1b98d9;
      }

      #Coursework h3 {
        padding-bottom: 10px;
      }

      #Coursework p {
        padding-bottom: 40px;
      }

      #school img{
        width: 150px;
        border-radius: 50%;
      }

      #projectCards {
        background-color: #1b98d9;;
      }

      #projectCards h1 {
        color: white;
      }

      .card-space p {
        padding-top: 10px;
        padding-bottom: 10px;
      }

      .card-img-top {
        height: 400px;
        object-fit: cover;
      }

      #footer {
        background-color: #404040;
        color: white;
      }

      #footer p {
        font-size: 22px;
        padding-bottom: 10px;
      }

      #footer a {
        color: white;
      }

      </style>

    <title>Bootstrap Final</title>
  </head>


  <body data-spy="scroll" data-target="#navbar" data-offset="100">
    
    <!-- Scrollspy navbar -->
    <nav id="navbar" class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" data-toggle="affix">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <!--<a class="navbar-brand" href="#">Brand</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarsExample11">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#carouselExampleIndicators">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Jumbotron">Resume</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Education">Education</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="#">Experience</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="#projectCards">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact Me</a>
            </li>
          </ul>
        </div>
    </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interal="3000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <h1>Michael Wang</h1>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="student-dark.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>STUDENT</h3>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="strollin-light.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>EXPLORER</h3>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="shadeSleepin-light.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>DREAMER</h3>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Hello World -->
    <div id="Jumbotron">
    <div class="container">

      <div id="Hello" class="row">
        <div class="col-md-8 bienvenido">
          <h1 class="display-4">Hello, world!</h1>
          <p class="lead">Michael Wang probably isn't the most convenient name to do research on. Fortunately, you've come to the right place (either that or you're incredibly lost). This website will help you learn all you need to know about me, both as a computer scientiest and as a sleepy student.</p> <!--
          <hr class="my-4">
          <p>As mere CSS leaves few oppurtunities to demonstrate coding skills, I unnecessarily added a  comment section made from scratch using PHP and MySQL.</p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Comment</a> -->
        </div>

        <div class="col-md-4">
          <img src="student-light.jpg">
         </div>
      </div>

      <div id="Resume" class="row">
        <div id="pdf" class="col-md-6">
          <img src="resume-screenshot.png">
        </div>

        <div  id="resume-text" class="col-md-6">
          <h1 class="display-4">My Resume</h1>
          <p class="lead">Basically a less in-depth version of this website.</p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Read</a>
        </div>
      </div>

    </div>
    </div>

    <!-- Education -->
    <div id="Education" class="section">
    <div class="container">

      <h1 class="display-4">Education</h1>
      
      <div id="school" class="row">
        <div class="col-md-3">
          <img src="ucla.png">
        </div>

        <div class="col-md-9">
          <h3>B.S. COMPUTER SCIENCE AND ENGINEERING</h3>
          <p></p>
          <h3>University of California, Los Angeles</h3>
          <p></p>
          <p><strong>Expected Graduation</strong> June, 2020  |  <strong>Cumulative GPA</strong> 3.49</p>
          <p><strong>Awards</strong> National Merit Award, UCLA Achievement Scholarship</p>
        </div>
      </div>

      <h2>Relevant Coursework</h2>

      <div id="Coursework">
        <div class="row">
          <div class="col-md-3">
            <h3>CS 111</h3>
          </div>

          <div class="col-md-9">
            <h3>Operating Systems</h3>
            <p>Computer software systems, kernel structure, bootstrapping, input/output (I/O) devices, interrupts, processes and threads, memory management, virtual memory, scheduling, synchronization, file systems, distributed systems, protection and security.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h3>CS M151B</h3>
          </div>

          <div class="col-md-9">
            <h3>Computer System Architecture</h3>
            <p>Computer system organization and design, implementation of CPU datapath and control, instruction set design, memory hierarchy (caches, main memory, virtual memory) organization and management, input/output subsystems (bus structures, interrupts, DMA), performance evaluation, pipelined processors.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h3>CS 118</h3>
          </div>

          <div class="col-md-9">
            <h3>Computer Network Fundamentals</h3>
            <p>Introduced fundamental concepts in the design and implementation of computer communication networks, their protocols, and applications. Topics to be covered include: layered network architecture, physical layer and data link protocols, network and transport protocols, unicast and multicast routing protocols, and applications. </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h3>CS 180</h3>
          </div>

          <div class="col-md-9">
            <h3>Algorithms & Complexity</h3>
            <p>Covered basics of algorithm design and analysis with the primary goal of developing "algorithmic thinking". Algorithmic techniques taught included asysmptotic analysis, divide and conquer, graph algorithms, greedy algorithms, dynamic programming, and randomization in addition to various concrete algorithms provided within each topic.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h3>CS 174A</h3>
          </div>

          <div class="col-md-9">
            <h3>Intro to Computer Graphics</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor tortor nec ex fringilla, vel lobortis libero consequat. Donec et mi ligula. In hac habitasse platea dictumst.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h3>CS 161</h3>
          </div>

          <div class="col-md-9">
            <h3>Fundamentals of AI <em>(Currently Taking)</em></h3>
            <p><em>Introduces the fundamental problem-solving and knowledge-representation paradigms of artificial intelligence. We will study the AI programming language LISP, state-space and problem reduction methods, brute-force and heuristic search, planning techniques, two-player games, and recent developments in game AI. In knowledge representation and reasoning, we will cover propositional and first-order logic and their inference algorithms. Finally, the course covers probabilistic approaches to AI, such as Bayesian networks, and machine learning algorithms to improve the agent's performance with experience.</em> - Course Website</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h3>CS M146</h3>
          </div>

          <div class="col-md-9">
            <h3>Intro to Machine Learning <em>(Currently Taking)</em></h3>
            <p><em>This class will introduce the fundamental concepts and algorithms in machine learning (supervised as well as unsupervised learning) as well as best practices in applying machine learning to practical problems.</em> - Course Website</p>
          </div>
        </div>
      </div>

    </div>
    </div>

    <!-- Cards -->
    <div id="projectCards" class="section">
    <div class="container">

      <h1 class="display-4">Projects</h1>

      <div class="card-deck">
        
        <div class="row">
          <div class="col-lg-6">
            <div id="column1" class="card">
              <img class="card-img-top" src="website.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Personal Website</h5>
                <p class="card-text">There's probably no need to explain this as you are already here. Feel free to view the php file for this website.</p>
                <a href="#" class="card-link">Play</a>
                <a href="#" class="card-link">View Code</a>
              </div>
            </div>
            <div class="card-space"><p></p></div>
          </div>

          <div class="col-lg-6">
            <div id="column2" class="card">
              <img class="card-img-top" src="illumination.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Illumnination Models</h5>
                <p class="card-text">Browser run 3D rendering using the WebGL API to implement the Blinn-Phong illumination model and create an environment map using shaders.</p>
                <a href="#" class="card-link">Play</a>
                <a href="#" class="card-link">View Code</a>
              </div>
            </div>
            <div class="card-space"><p></p></div>
          </div>
        </div>

        

        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <img class="card-img-top" src="catmouse.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Cat & Mouse Game</h5>
                <p class="card-text">Two player game written in Verilog and implemented on a FPGA using PMOD joysticks and a VGA as input and output.</p>
                <a href="#" class="card-link">Play</a>
                <a href="#" class="card-link">View Code</a>
              </div>
            </div>
            <div class="card-space"><p></p></div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <img class="card-img-top" src="bruinnav.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Bruin Navigator</h5>
                <p class="card-text">Navigation system program which produces turn-by-turn instructions using data from Open Street Maps. </p>
                <a href="#" class="card-link">Play</a>
                <a href="#" class="card-link">View Code</a>
              </div>
            </div>
          </div>
        </div>
      
      <!-- End card-deck -->
      </div>

    </div>
    </div>

    <!-- Table -->
    <!--
    <div id="table" class="section">
    <div class="container" >
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>
    -->

    <!-- Footer -->
    <div id="footer" class="section">
    <div class="container">
        
      <h1 class="display-4">Contact Me</h1>

      <div class="row">
        <div class="col-lg-5">
          <p><i class="fas fa-envelope-square"></i> michaelwang0213@yahoo.com</p>
        </div>
        <div class="col-lg-4">
          <a href="https://www.facebook.com/people/Michael-Wang/100003085529077"><p><i class="fab fa-facebook-square"></i> Facebook</p></a>
        </div>
        <div class="col-lg-3">
          <p><i class="fas fa-phone-square"></i> (848)236-6453</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-5"><a href="https://mw0213-com.stackstaging.com">
          <p><i class="fas fa-globe"></i> mw0213-com.stackstaging.com</p>
        </div></a>
        <div class="col-lg-4">
          <a href="https://www.linkedin.com/in/michaelwang0213/"><p><i class="fab fa-linkedin"></i> LinkedIn</p></a>
        </div>
        <div class="col-lg-3">
          <p><i class="fab fa-github-square"></i> Github</p>
        </div>
      </div>

    
    </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.1.1/js/tether.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>

      if($("#column1").height() > $("#column1").height()) {
        $("#column2").height($("#column1").height());
      } else {
        $("#column1").height($("#column2").height());
      }

    </script>


  </body>
</html>