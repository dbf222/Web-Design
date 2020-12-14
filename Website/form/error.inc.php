<style type="text/css">
@font-face {
  font-family: "sofia";
  src: url(CSS/Sofia.ttf) format("truetype");
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
  <nav>
    <ul>
      <li> <a href="index.html"> Back </a> </li>
    </ul>
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
