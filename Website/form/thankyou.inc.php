<style type="text/css">

@font-face {
  font-family: "sofia";
  src: url('../Fonts/Sofia.ttf') format("truetype");
}

@font-face {
  font-family: "BodoniXT";
  src: url('../Fonts/BodoniXT.ttf') format("truetype");
}


*{
margin: 0;
padding: 0;
border: 0;
font-family: "Sofia";

}

body {
    background-color: #f7e5e3;
}

main{
  padding-top: 20px;
}



h2{
  text-align: center;
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

/*=========================

Header Style


=========================*/
header{
  padding: 50px;
  padding-top: 0px;
  background-color: #f1d3cf;
  min-width: 100%;
}

.header-name{
  font-family: 'BodoniXT';
font-weight: 400;
font-style: normal;
font-size: 38px;
letter-spacing: 0em;
line-height: .8em;
text-transform: capitalize;
}

.header-name{
  box-sizing: border-box;
  display: block;
  float: left;
  line-height: 30px;
  width: 593.217px;
  height: 40.4px;
  position:static;
  z-index: auto;
}

header a{
font-family: "Sofia";
font-weight: 600;
font-style: normal;
font-size: 11px;
letter-spacing: .3em;
text-transform: uppercase;
text-align: right;
box-sizing:content-box;
display: block;
float: right;
position: static;
z-index: auto;
color: white;
text-decoration: none;
display: inline;
list-style: none;
padding-right: 30px;
width: 733.783;
height: 21px;
}

nav a:hover {
  color: grey;
  transition: .2s;
  list-style: none;
}

nav ul{
  list-style: outside none none;
  padding-right: 50px;
  padding-top: 30px;
}

nav h1{
  font-family: "BodoniXT";
  font-size: 30px;
  padding-bottom: 20px;
}

/*========
Footer
=========*/
.footer{
  position:relative;
  width: 100%;
  left: 0;
  bottom: 0;
  height: 150px;
  min-width: 100%;
  background-color: grey;
}

/* Social MEdia Codes */
.ftimg{
  float: right;
  padding-right: 150px
}


.soicalmedia {
padding-top: 50px;
}
.fa {
  padding: 20px;
  font-size: 50px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

</style>


</head>

<body>

  <header class="Header">
      <div container="right" class=topnav>
        <nav>

            <ul>
              <li class="header-name"><h1>David B. Friedman</h1></li>
              <li><a href="contact.html"> Contact Me</a></li>
              <li><a href="media.html"> Media</a></li>
              <li ><a href="resume.html"> Resume</a></li>
              <li class="nav2"><a href="about.html"> About Me</a></li>
              <li class="nav1"><a href="home.html"> Home</a></li>
            </ul>
        </nav>
    </div>
  </div>
</header>

  <main>
    <h2>Thank you for your message</h2>
    <p> I've gotten your message, and we get right back to you!</p>

  </main>

<footer class="footer">
  <nav class="soicalmedia">
    <a href="https://www.instagram.com/davidbfriedman/" target="_blank" class="fa fa-instagram"></a>
    <a href="https://twitter.com/DavidBenjaminF/" target="_blank"class=" fa fa-twitter"></a>
    <a href="https://www.youtube.com/user/22dbf/" target="_blank"class="fa fa-youtube"></a>
    <img src="images/AEALogo.png" alt="Actors Equity Logo" title="Actors Equity Association" class="ftimg">
    <img src="images/avalon.png" alt="Avalon Artists" title="Avalon Artists" class="ftimg">
  </nav>
  </footer>
</body>
