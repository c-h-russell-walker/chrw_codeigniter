<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Chris H. Russell-Walker - Web Developer, Bassist, Cook, Brewer, Optimist, Coffee Drinker</title>
<meta name="keywords" content="developer, php, html, css, html5, css3, open source, web design, cambridge, boston, ma" />
<meta name="description" content="Chris H. Russell-Walker - Web Developer, Bassist, Cook, Brewer, Optimist, Coffee Drinker" />
<meta name="robots" content="index, follow" />

<link href="<?php print(base_url()) ?>assets/css/styles.css" media="screen" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php print(base_url()) ?>assets/js/lightbox.js" type="text/javascript"></script>
<script src="<?php print(base_url()) ?>assets/js/jquery.twitter.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function($) {
  // Check if twitter placholder div exists
  if($("#twitter").length > 0) {
    $("#twitter").getTwitter({
      userName: "cleanslayt",
      numTweets: 5,
      loaderText: "",
      slideDuration: 750,
      showList: false,
      clickFunction: "showTwitterList(event)",
      showProfileLink: false,
      showTimestamp: true
    });
  }
});
</script>

<link href="<?php print(base_url()) ?>assets/images/cleanslaytlogo.png" rel="icon" type="image/png" />
</head>
<body id="page-<?php print($title); ?>">
<!-- Main UI -->
<div id="allcontent">
    <div id="container">
        <div id="top">
          <h1><a id="header-logo" href="<?php print(base_url()) ?>">Chris H. Russell-Walker</a></h1>
        </div>
        <div id="content">
          <div id="content-text">
              <div id="top-nav">
                <div id="top-nav-content">
                    <div class="nav-item">
                        <a href="<?php print(base_url()) ?>">
                           <img src="<?php print(base_url()) ?>assets/images/home.png" border="0" alt="Home" />
                           <span class="nav-link">home</span>
                        </a> 
                    </div>
                    <div class="nav-item">
                        <a href="<?php print(base_url()) ?>portfolio">
                           <img src="<?php print(base_url()) ?>assets/images/portfolio.png" border="0" alt="Portfolio" />
                           <span class="nav-link">portfolio</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="<?php print(base_url()) ?>resume">
                           <img src="<?php print(base_url()) ?>assets/images/resume.png" border="0" alt="Resume" />
                           <span class="nav-link">resum&#233;</span>
                        </a> 
                    </div>
                    <div class="nav-item">
                        <a href="mailto:c.russell.walker@gmail.com">
                           <img src="<?php print(base_url()) ?>assets/images/email.png" border="0" alt="Contact" />
                           <span class="nav-link">contact</span>
                        </a>
                    </div>
                </div>
              </div><!-- End #top-nav -->


            <h2><span id="main-text">Chris H. Russell-Walker</span></h2>
            
            <h4>web developer / programmer / musician / cook</h4>
            <div class="separator"><img src="<?php print(base_url()) ?>assets/images/dottedlines.gif" id="top-seperator" alt="line" /></div>
            <div><span class="text-image"><img src="<?php print(base_url()) ?>assets/images/cleanslaytlogo.png" id="logo-float" class="logo" alt="cleanslayt" /></span></div>
            
            <h4 class="intro">Welcome</h4>
            <p>
                I'm a front end developer, cook, musician &amp; amateur brewer of beer and kombucha.
                I live in Cambridge, MA. and when not pursuing these ventures I enjoy cycling, reading, traveling, kickboxing and laughing at anything funny.
            </p>
            <p>
                I work at <a href="http://www.nutraclick.com" target="_blank"><strong>NutraClick</strong></a> as a front end developer tackling things small, large and extraordinary.  
                The challenges encountered so far have strengthened my skills and solidified my commitment to becoming the most well rounded developer I can be.  
                I've worked for a web development and design company located in New York - <a href="http://www.zooluweb.com" title="website design shop"><strong>Zoolu Web Solutions</strong></a>
                as well as a financial consulting firm <a href="http://www.truebridge.com"><strong>Truebridge</strong></a> expanding on a browser based CRM.
                These jobs complemented my learning while completing my CS degree from BU and playing as much music as I could.
            </p>
            <p>
                Most of my development is focused on delivering web applications using PHP, SQL, HTML &amp; CSS.  In school and with any new jobs or ventures I always enjoying learning new
                concepts, technologies, and design patterns.<br />
                <strong>I bet this might mean</strong> you are looking for <a href="<?php print(base_url()) ?>resume">my resum&#233;</a> or <a href="<?php print(base_url()) ?>portfolio">work I have done?</a>
            </p>
            
            <!--<div id="twitter"></div>-->
</div>

            <div id="footer">
              <ul class="bottom-icons">
                <li><a id="twitter-icon" href="http://www.twitter.com/cleanslayt" target="_blank">Twitter Profile</a></li>
                <li><a id="linkedin-icon" href="http://www.linkedin.com/in/chrisrussellwalker" target="_blank">Linked In Profile</a></li>
              </ul>
              <ul class="bottom-nav">
                <li><a href="<?php print(base_url()) ?>">home</a></li>
                <li><a href="<?php print(base_url()) ?>portfolio">portfolio</a></li>
                <li><a href="<?php print(base_url()) ?>resume">resum&#233;</a></li>
                <li class="last"><a href="mailto:c.russell.walker@gmail.com">contact</a></li>
              </ul>
            </div>
        </div>
    </div>
</div>
<!-- UI ends -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-37446217-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</body>
</html>