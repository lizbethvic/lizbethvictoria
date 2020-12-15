<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
}

body {
  background: #0d0a15;
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  margin-top: 150px;
}

/*======================================


Nav Menu Styling

======================================*/

header{
  display:inline;
  background: #0d0a15;
  top: 0;
}

nav.menu {
    position: fixed;
    top: 0;
    width: 100%;
    background: #0d0a15;
    z-index: 100;
}

.menu ul {
  list-style: none;
  float: right;
}

.logo {
  background: #0d0a15;
  width: 350px;
  float: left;
  position:static;
}

.menu > ul {
  padding-top: 50px;
}

.menu > ul > li {
  display: inline-block;
  background: #0d0a15;
  margin-bottom: 1px;
  position: relative;
  vertical-align: top;
  padding: 0 50px;

}

.menu > ul > li{
  border-left: 5px solid white;
}

.menu > ul > li:nth-child(1) {
  border-left: 0;
}

.menu > ul > li:nth-child(2) {
  padding: 0 40px;
}

.menu > ul > li:nth-child(3) {
  padding: 0 60px;
  text-align: center;
}

.menu ul li a {
  color: white;
  text-decoration: none;
  display: block;
  padding: 15px;

}

.menu ul li a:hover {
  border-bottom: 4px solid #9f8acd;
}

.menu ul li a:active {
  color: #9f8acd;
}

.sub-menu {
  display: none;
  background: #9f8acd;
  position: absolute;
  text-align: center;
  margin: 0 -60px;
  padding: 0 21px;
}

.sub-menu ul li {
  margin-top: 0;
}

.menu-item:hover .sub-menu {
  display:block;
}

ul.sub-menu li:hover {
    background: #2a2236;
}

/*======================================


Main Body Styling

======================================*/

.container {
  margin-top: 153px;
  background: #2a2236;
  max-width: 100%;
  height: 500px;
  text-align: center;
  margin: 0 auto;
  padding: 122px;
  color: white;
}

h2,
p{
  color: white;
}

/*======================================


Footer Styling

======================================*/

footer {
  display: inline;
  bottom: 0;
  position: fixed;
  background: #0d0a15;
  width: 100%;
}

.socials {
    margin-top: -51px;
    margin-right: 24px;
}

footer p {
  color: white;
  padding-left: 50px;
  padding-top: 30px;
}

.button {
  float: right;
}

img.button {
    width: 80px;
}

img.button:hover {
  border: 4px solid #a188d0;
  border-radius: 100px;
}

img.button:active {
  background: #2a2236;
  border: 4px solid #2a2236;
  border-radius: 100px;
}

</style>

<header>

  <nav class="menu">
    <div class="logo">
      <a href="../home/index.html"><img src="../images/logo.PNG" class="logo" alt="logo" title="logo"/></a>
    </div>

    <ul>
      <li class="menu-item"><a href="../about/about.html">About</a></li>
      <li class="menu-item"><a href="../storyboards/storyboard.html">Storyboards</a></li>
      <li class="menu-item"><a href="#">Art</a>
        <ul class="sub-menu">
          <li class="menu-item"><a href="../art/lifedrawing/lifedrawing.html">Life Drawing</a></li>
          <li class="menu-item"><a href="../art/sketchbook/sketchbook.html">Sketchbook</a></li>
        </ul>
      </li>
      <li class="menu-item"><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

</header>

<div class="container">
  <h1>Thank you for your enquiry</h1>
  <p>Thanks for your interest. We have received your message, and we will be in touch shortly. <br> Have a lovely day!</p>
</div>

<footer>
  <p> Copyright 2020 </p>
  <div class="socials">
    <a href="https://www.facebook.com/lizbethvictoriaarte" target="_blank"><img src="../images/button-01.PNG" class="button" alt="button 1" title="button 1"/></a>

    <a href="https://twitter.com/LizbethV_Arte" target="_blank"><img src="../images/button-02.PNG" class="button" alt="button 2" title="button 2"/></a>

    <a href="https://www.instagram.com/lizbethvictoria_arte/?hl=en" target="_blank"><img src="../images/button-03.PNG" class="button" alt="button 3" title="button 3"/></a>

    <a href="https://www.youtube.com/channel/UCh4c_1TkEM4Wp6wF8bE21Ew?view_as=subscriber" target="_blank"><img src="../images/button-04.PNG" class="button" alt="button 4" title="button 4"/></a>
  </div>

</footer>
