<?php
## get page variable
$page = $_GET['page'];
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php
    if ($page == 'allday') {
    echo 'Bristol All-Day Singing | ';
    } elseif ($page == 'gwehelog') {
    echo 'Gwehelog All-Day Singing | ';
    } elseif ($page == 'convention') {
    echo 'UK Sacred Harp Convention | ';
    }
    ?>Bristol Sacred Harp</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/heroic-features.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <!--
	/**
	 * @license
	 * MyFonts Webfont Build ID 2975041, 2015-02-18T13:43:23-0500
	 *
	 * The fonts listed in this notice are subject to the End User License
	 * Agreement(s) entered into by the website owner. All other parties are
	 * explicitly restricted from using the Licensed Webfonts(s).
	 *
	 * You may obtain a valid license at the URLs below.
	 *
	 * Webfont: Plathorn-NorMed by insigne
	 * URL: http://www.myfonts.com/fonts/insigne/plathorn/medium/
	 * Copyright: Copyright (c) 2014 by Jeremy Dooley. All rights reserved.
	 * Licensed pageviews: 10,000
	 *
	 *
	 * License: http://www.myfonts.com/viewlicense?type=web&buildid=2975041
	 *
	 * © 2015 MyFonts Inc
	*/

	-->
	<link rel="stylesheet" type="text/css" href="/MyFontsWebfontsKit.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="http://cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
         We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
</head>

<body>

    <!-- Page Content -->
    <div class="container">

    <header class="page-header">
        <h1 id="toplogo">Bristol Sacred Harp</h1>
    </header>



	<!-- Navigation -->
    <nav id="header" class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Home</a>
            </div>

            <!-- Right-hand Twitter button -->
            <div class="twitter-button">
                <a href="https://twitter.com/sacredharpbrs" class="twitter-follow-button" data-show-count="true">Follow @sacredharpbrs</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/allday/">Bristol All-Day Singing</a>
                    </li>
                    <li>
                        <a href="/gwehelog/">Gwehelog All-Day Singing</a>
                    </li>
                    <li>
                        <a href="/convention/">2019 UK Convention</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>
    <div class="row main-box">
		<!-- Main content -->
        <div class="col-lg-8 page-content">

        	<?php
        	if(!$page){
         		include 'home.php';
        	}else{
    			include "$page.php";
    		}?>
    	</div>
	<!-- Right column -->
        <div class="col-lg-4 sidebar">

            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="https://bristolsacredharp.us20.list-manage.com/subscribe/post?u=4574caae2008c0299a220e2ed&amp;id=aab95755da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
            <label for="mce-EMAIL">Get Bristol Sacred Harp News:</label>
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4574caae2008c0299a220e2ed_aab95755da" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
            </form>
            </div>

            <!--End mc_embed_signup-->

            <!-- Facebook -->
            <div>
                <p>Keep up with discussions in our <a href="https://www.facebook.com/groups/bristolsacredharp/">Facebook Group</a>.</p>
            </div>
            <!-- Calendar -->
            <div class="calendar">
                <iframe src="https://www.google.com/calendar/embed?title=Calendar%20of%20Singings&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=252&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=bristolsacredharp%40gmail.com&amp;color=%232952A3&amp;ctz=Europe%2FLondon" style=" border-width:0 " width="294" height="252" frameborder="0" scrolling="no"></iframe>
            </div>

            <!-- Bandcamp -->
            <iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=967320061/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless>
            	<a href="http://bristolsacredharp.bandcamp.com/album/fourth-bristol-all-day-singing">Fourth Bristol All-Day Singing by Bristol Sacred Harp</a>
            </iframe>

            <!-- Tweets -->
            <div class="twitter">
                <a class="twitter-timeline" width=350 height=400 href="https://twitter.com/sacredharpbrs" data-widget-id="565505552441442304">Tweets by @sacredharpbrs</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>

        </div>
    </div>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                <p>Contact: <a href="mailto:bristolsacredharp@gmail.com">bristolsacredharp@gmail.com</a></p>
                    <!-- <p>Copyright &copy; Your Website 2014</p> -->
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>
