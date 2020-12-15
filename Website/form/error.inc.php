<style type="text/css">
@font-face {
  font-family: "Sofia";
  src: url(Fonts/Sofia.ttf) format('truetype');
}

@font-face {
  font-family: "Sofia-Light"; src: url(url("//db.onlinewebfonts.com/t/b3be20d887cc494d12ade85591c774a8.ttf") format("truetype") }

@font-face {
  font-family: "BodoniXT";
  src: url(Fonts/BodoniXT.ttf) format('truetype');
}

  *{
    background: #f7e5e3;
    font-family: "sofia";
  }
  header{
    background: #f7e5e3;
    width: 100%;
    position: fixed;
  }

  li{
    font-family: "Sofia";
    color: White;
    text-decoration: none;
    display: inline;

  }

  h2{
    text-align: center;
    float: center;
    margin-top: 25px;
    margin-bottom: 25px;
    font-family: "Sofia";
    font-size: 15px;
    line-height: 30px;
    font-weight: bold;
  }

  p{

    margin-top: 25px;
    margin-bottom: 25px;
    font-family: "Sofia";
    font-size: 15px;
    line-height: 30px;
  }
</style>


<header>

    <nav class="nav2">

        <div class="left-link">
          <h2>David B. Friedman</h2>
        </div>

        <div class="right-links nav-alt">
          <a href="home.html">WELCOME</a>
          <a href="about.html">ABOUT ME</a>
          <a href="resume.html">RESUME</a>
          <a href="media.html">MEDIA</a>
          <a href="contact.html">CONTACT ME</a>
        </div>




    </nav>
</header>


<h2>Missing fields</h2>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>





<footer>
  <div class="socialmedia">
    <div class="footl">
      <a href="https://www.facebook.com/dbf222" target="_blank"><img src='images/Footer/Facebook_logo.png' alt="Facebook" title= "@dbf222"></a>

      <a href="https://www.youtube.com/user/22dbf" target="_blank"><img src='images/Footer/youtube_logo.png' alt="youtube" title= "@22dbf"></a>

      <a href="https://www.instagram.com/davidbfriedman/" target="_blank"><img src='images/Footer/instagram_logo.png' alt="Instagram" title= "@davidbfriedman"></a>
    </div>

    <div class="footr">
      <a href="https://avalonartists.com/" target="_blank"> <img class="infopic1" src="images/Footer/avalon.png" alt="Avalon Artists Agency"></a>
      <a href="https://actorsequity.org/" target="_blank"> <img class="infopic2" src="images/Footer/AEAlogo.png" alt="Actors Equity Association"></a>

    </div>
  </div>
</footer>
