<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <link href='http://fonts.googleapis.com/css?family=Kotta+One|Marcellus+SC|Cabin|Codystar|Poiret+One|Lily+Script+One|Molle:400italic|Vast+Shadow|Flamenco|Lobster|Reenie+Beanie|Redressed|Monoton|Playball|Courgette|Handlee|Jacques+Francois+Shadow&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

    <script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>

    <!-- Shared Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">

<!-- Unique -->
<link rel="stylesheet" href="assets/css/pages/portfolio-v2.css">
<link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
<title>Bodacious | Gallery</title>

<style type='text/css'>
div.fade-right0 { 
    float:left; 
    position:absolute; 
    display:none; }
h2.hilight { 
    font-family: 'Lily Script One', cursive; 
    font-size: 70px; 
    color: pink;
    text-shadow: 5px 5px 5px #a30c50;
}
.banner {
    font-family: 'Lily Script One', cursive; 
    font-size: 40px;
}
.addon {
    display:none; 
}
h2.sitetitle {
    font-family: 'Lily Script One', cursive; 
    font-size: 85px; 
    color: #ffb6c1;
    text-shadow: 5px 5px 5px #a30c50;
}
.titlebackground { 
    background-color: #292929;
}
.sorting-block .sorting-nav li.active {
color: #f6bccd;
border-bottom: solid 1px #f6bccd;
}
p, li, li a {
color: #FFFFFF;
}
.wrapper2{
border-bottom: solid 5px #72c02c;
}
.sorting-cover{
margin-left: auto;
margin-right: auto;
color: rgba(104, 50, 51, 1);
}
div.sorting-block{
display:none;
}
</style>
<script type='text/javascript'>//<![CDATA[ 
$(function(){
$(document).ready(function(){
    $(".fade-right1").animate({left:100, opacity:"show"}, 1000);
    $(".addon").delay(2000).show(100);
    $(".fade-right3").delay(3000).animate({left:100, opacity:"show"}, 1000);
    $(".fade-right1" ).delay(4000).hide(500);
    $(".fade-right3" ).delay(1500).fadeOut( "slow");
    $(".fade-right3").delay(10000).queue(function() { $(this).remove(); });
    //$(".sitetitle").delay(6000).fadeIn( 2000).animate({top:-20},700);
    $(".sitetitle").delay(6000).fadeIn( 2000);
    //$(".sitetitle").animate({top:-120},500);
    //$(".sitetitle" ).delay(500).queue(function() { $(this).addClass( "titlebackground"); });
    //$("body" ).delay(6000).queue(function() { $(this).addClass( "titlebackground"); });
    $("body" ).delay(6000).queue(function() { $(this).addClass( "titlebackground"); });
	$(".wrapper").delay(6000).queue(function() { $(this).addClass( "wrapper2"); });
	$("div.sorting-block").delay(6000).show(1);
});
});//]]>  

</script>
</head>
<body>


<!--=== Header Part ===-->



<div class="wrapper">
<div class="fade-right0 fade-right1">
<br>
    <h2  class="banner">Which came first, the <span style=" color: #f2cecd;">chicken</span> <span class="addon">or the ...</span></h2>
</div>

<div class="fade-right0 fade-right3">
<br><br><br><br>
    <h2 class="hilight">Awesome !</h2>
</div>
<div class="fade-right0 sitetitle">
<br>
    <h2 class="sitetitle">Bodacious.Designs</h2>
    <br><br>
    <span  style="float: left;" >
        <audio controls autoplay loop >
        <source src="assets/audio/01-Lorde.mp3" type="audio/mpeg">
        No tunes for you!
        </audio>
     <span>
</div>
<br><br>
<br><br><br>

</div>
<br>
<!--=== Content Part ===-->
<?php include("imports/gallery-content2.php"); ?>


</div>
<!-- unique code libraries-->
<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="assets/plugins/circles-master/circles.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.mixitup.min.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/circles-master.js"></script>
<script type="text/javascript" src="assets/js/pages/page_portfolio.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initFancybox();
        PortfolioPage.init();
        CirclesMaster.initCirclesMaster1();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
<![endif]-->




</body>
</html>
