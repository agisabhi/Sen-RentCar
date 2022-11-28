<!doctype html>
<html lang="en">

<head>
  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "daftar") {
      echo "<script>alert('Berhasil Daftar')</script>";
    }elseif ($_GET['pesan'] == "logout") {
      echo "<script>alert('Anda Berhasil Logout')</script>";
    }
  }
   ?>
  <meta charset="UTF-8">
  <title>SENORITA RENT CAR</title>
  <meta name="keywords" content="">
  <meta name="description" content="">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="temp/styles/styles.css">
</head>
<body>
  <header class="header header--bg">
    <div class="container header--wrapper">
      <h1 class="header__title"><span class="header__title--light">SENORITA</span> RENT CAR</h1> <a class="button" align="right" href="loginadmin.php">LOG IN ADMIN</a><hr>
      <h2 class="header__paragraph"><span class="header__paragraph--light">Theme<br/><br/></span> HUMANIZED TECHNOLOGY; THE DIGITAL JOURNEY TO WIN COMPETITION</h2>
      <a class="button" href="user/daftaruser.php">SIGN UP for RENT</a>
      <a class="button" href="loginuser.php">LOG IN</a>
      <h3 class="header__paragraph"> <br/>WARNING !! <br/><br/>This website is only used to fulfill the big task of WEB PROGRAMMING. <strong>Not for register the conference. </strong></h3>
    </div>
  </header>

  <section class="process">
    <div class="container">
      <div class="page-section text-center">
        <h2 class="page-section__title">SENORITA RENT CAR</h2>
        <p class="page-section__paragraph" > Universitas Komputer Indonesia (UNIKOM) organizes the 3rd International Conference on Informatics, Engineering Science and Technology (INCITEST 2020), which will be held in UNIKOM Campus, Bandung on 2 April 2020.  INCITEST 2020 presents "Humanized Technology, the Digital Journey to Win Competition" as its main theme. In response to the crisis of digital attention where our society has partly been taken off by technology, the high dependence on technology starts to erode individual's mental health, democracy, social relationship, and our children. We are entering the society 5.0 who are expected to be able to address and provide approaches to reduce these negative aspects and at the same time are aiming for a prosperous human-centered society. Therefore, it is crucial to realign technology with the best interests of humanity. In this connection, INCITEST 2020 invites researchers, industries, practitioners, students, lecturers from related fields to contribute their papers and works to be presented at our forthcoming conference. It is hoped that the conference outcome will contribute to answer our global challenge — in which all elements of society are expected to play a leading role, involving the creation of innovation to win competition in digitalized world with more humanized way.</p>

      </div>
    </div>
  </section>

  <section class="team team--bg">
    <div class="container">
      <div class="page-section text-center">
        <h2 class="page-section__title page-section__title--white">KEYNOTE SPEAKERS</h2>
        <p class="page-section__paragraph page-section__paragraph--white">The keynote speakers are professors who are highly skilled in their fields. They come from inside and outside the country.</p>
        <div class="row">
          <div class="col-xs-12 col-lg-10 col-lg-offset-1">
            <div id="teamCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img class="img-responsive" src="assets/images/team-slider-bg.png" alt="">
                  <div class="carousel-caption">
                    <img class="img-responsive" src="assets/images/abdulkareem.png" alt="">
                    <h3 class="carousel-caption__name">Associate Professor Dr AbdulKareem Sh.Mahdi Al-Obaidi</h3>
                    <p class="carousel-caption__title">Taylor's University</p>
                    <p class="carousel-caption__paragraph">MALAYSIA</p>
                  </div>
                </div>

                <div class="item">
                  <img class="img-responsive" src="assets/images/team-slider-bg.png" alt="">
                  <div class="carousel-caption">
                    <img class="img-responsive" src="assets/images/irfan.png" alt="">
                    <h3 class="carousel-caption__name">Irfan Dwiguna Sumitra, M.Kom., Ph.D</h3>
                    <p class="carousel-caption__title">Universitas Komputer Indonesia</p>
                    <p class="carousel-caption__paragraph">INDONESIA</p>
                  </div>
                </div>

                <div class="item">
                  <img class="img-responsive" src="assets/images/team-slider-bg.png" alt="">
                  <div class="carousel-caption">
                    <img class="img-responsive" src="assets/images/yutolim.png" alt="">
                    <h3 class="carousel-caption__name">Associate Professor Yuto Lim</h3>
                    <p class="carousel-caption__title">Japan Advance Institute of Science and Technology</p>
                    <p class="carousel-caption__paragraph">JAPAN</p>
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#teamCarousel" data-slide="prev">
                <img class="carousel-control-left__img" src="assets/images/team-slider-left-marker.png" alt="">
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#teamCarousel" data-slide="next">
                <img class="carousel-control-right__img" src="assets/images/team-slider-right-marker.png" alt="">
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="SCOPE">
    <div class="container">
      <div class="page-section text-center">
        <h2 class="page-section__title">CONFERENCE SCOPE</h2>
          <p class="page-section__paragraph-content"></br/></br/>
            <strong>1. Informatic and Information system<br/></strong>
                IT Audit<br/>
                Software Engineering<br/>
                Big Data and Data Mining<br/>
                Internet Of Thing (IOT)<br/>
                Game Development<br/>
                IT Management<br/>
                Computer Network and Security<br/>
                Mobile Computing<br/>
                Security For Mobile<br/>
                Decision Support System<br/>
                Web and Cloud Computing<br/>
                Accounting Information system – Animation and Multimedia<br/></br/>
            <strong>2. Electrical and Computer Engineering<br/></strong>

                Sensors and Trandusers<br/>
                Signal, Image, Audio and Video processing<br/>
                Communication and Networking<br/>
                Robotic, Control and Automation<br/>
                Fuzzy and Neural System<br/>
                Artificial Intelligent<br/></br/>
            <strong>3. Entrepreneurship & Technopreneurs<br/></strong>

                Application of Entrepreneurship in the field of Computerized Accounting<br/>
                Application of Entrepreneurship in the field of Architecture engineering<br/>
                Application of Entrepreneurship in the field of Electrical Engineering<br/>
                Application of Entrepreneurship in the field of Industrial Engineering<br/>
                Application of Entrepreneurship in the field of Urban & Regional Planning<br/>
                Application of Entrepreneurship in the field of Civil Engineering<br/>
                Application of Entrepreneurship in the field of Informatics Engineering System<br/>
                Application of Entrepreneurship in the field of Information System<br/>
                Application of Entrepreneurship in the field of Computer Engineering<br/>
                Technopreneur and Information Communication Technology (ICT)<br/></br/>
            <strong>4. Architecture, Urban & Regional Planning, and Civil Engineering<br/></strong>

                Building Science, Project Management, Infrastructure and Regional Growth<br/>
                Digital Technology for Design and Planning<br/>
                Transportation<br/>
                Heritage and Tourism and Sustainable Architecture<br/>
                Disaster Management<br/>
                Smart and Sustainable Infrastructure<br/>
                Structural Engineering<br/>
                Urban and Regional Planning<br/></br/>
           <strong>5. Industrial Engineering<br/></strong>

                Quality Engineering & Management<br/>
                Supply Chain Management<br/>
                Operation Research<br/>
                Decision Support System and Artificial Intelligent<br/>
                Production System<br/>
                Industrial Management – Ergonomic<br/></br/>
           <strong>6. Sciences<br/></strong>

                Mathematics<br/>
                Physics<br/>
                Material Sciences<br/>
                Chemistry

      </div>
    </div>
  </section>
<section class="committee">
  <div class="container">
    <div class="page-section text-center">
        <h2 class="page-section__title">CONTACT PERSON</h2><br/>
          <p class="page-section__paragraph-content">
            <strong>Email : incitest@email.unikom.ac.id</strong><br/><br/>
            Full papers submitted to the conference will be peer reviewed. Upon acceptance, the paper that has been presented at the conference by one of the authors will be published in the <strong> IOP Conference Series:</strong> Material Science and Engineering, which will be indexed in <strong>Scopus</strong>, as well as <strong>El Compendex and Inspec.</strong>
    </div>
  </section>
<section></section>
<tr>
  <td>
  <footer class="footer footer--bg">
    <div class="container">
      <div class="page-section page-section--small">
        <div class="row gutters-100">
          <div class="col-md-6 col-lg-3">
            <h3 class="footer__title">VANUE LOCATION</h3>
            <ul>
              <li><span>AUDITORIUM SMART BUITDING LT.17 UNIKOM <br/>Jl. Dipatiukur 112-116 Bandung <br/>Indonesia</a></li>
              <li></span> 2 APRIL 2020</a></li>
              <li><span class="glyphicon glyphicon-map-marker"></span><a href="https://goo.gl/maps/Y5efCJPPwavi8wp79"> View Map Location</a></span></li>
             </ul>
          </div>
          <div class="col-md-6 col-lg-3">
            <h3 class="footer__title"></h3>
          </div>
          <div class="col-md-6 col-lg-3">
            <h3 class="footer__title">
          </div>
          <div class="col-md-6 col-lg-3">
            <h3 class="footer__title">ORGANIZING COMMITTEE</h3>
            <ul>
              <li><span><strong>Conference Chair:</strong>  Dr. Lia Warlina <br/>
                <strong>Technical Chair:</strong><br/>
                  1.Dr. Poni Sukaesih Kurniati, S.IP., M.Si.<br/>
                  2.Bobi Kurniawan, S.T., M.Kom<br/>
                  3.Senny Luckyardi, S.P <br/>
             </ul>
          </div>
        </div>
        <hr>
    <div class="footer">Copyright &copy; PW Project 2020</div>
      </div>
    </div>
  </footer>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script>
        $(document).ready(function() {

        var $videoSrc = $("#video").attr("src");

        $('#myModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" );
      });

        $('#myModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc);
      });
    });

  </script>

</body>
</html>
