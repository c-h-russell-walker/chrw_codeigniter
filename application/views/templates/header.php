<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Chris H. Russell-Walker - Web Developer, Bassist, Cook, Brewer, Optimist, Coffee Drinker</title>
<meta name="keywords" content="developer, php, html, css, html5, css3, open source, web design, cambridge, boston, ma" />
<meta name="description" content="Chris H. Russell-Walker - Web Developer, Bassist, Cook, Brewer, Optimist, Coffee Drinker" />
<meta name="robots" content="index, follow" />

<link href="<?php print(base_url()) ?>assets/css/styles.css" media="screen" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
<script src="<?php print(base_url()) ?>assets/js/jquery.twitter.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function() {
          // Check if twitter placholder div exists
          if(jQuery("#twitter").length > 0) {
            jQuery("#twitter").getTwitter({
                    userName: "cleanslayt",
                    numTweets: 5,
                    loaderText: "",
                    slideIn: true,
                    slideDuration: 750,
                    showList: true,
                    showHeading: true,
                    headingText: "Latest Tweets",
                    showProfileLink: false,
                    showTimestamp: true
            });
          }
  });
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"></script>
<script type="text/javascript" src="<?php print(base_url()) ?>assets/js/scriptaculous.js?load=effects,builder"></script>
<script src="<?php print(base_url()) ?>assets/js/lightbox.js" type="text/javascript"></script>

<link href="<?php print(base_url()) ?>assets/images/cleanslaytlogo.png" rel="icon" type="image/png" />
</head>