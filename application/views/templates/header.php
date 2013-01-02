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

<script src="<?php print(base_url()) ?>assets/js/lightbox.js" type="text/javascript"></script>
<script>
  jQuery(document).ready(function($) {
      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<link href="<?php print(base_url()) ?>assets/images/cleanslaytlogo.png" rel="icon" type="image/png" />
</head>