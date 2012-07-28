		<link rel="stylesheet" href="sites/all/themes/twitter_bootstrap/bootstrap/slideshow/css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="sites/all/themes/twitter_bootstrap/bootstrap/slideshow/theme/supersized.shutter.css" type="text/css" media="screen" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="sites/all/themes/twitter_bootstrap/bootstrap/slideshow/js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="sites/all/themes/twitter_bootstrap/bootstrap/slideshow/js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="sites/all/themes/twitter_bootstrap/bootstrap/slideshow/theme/supersized.shutter.min.js"></script>
		
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   6000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
					
					{image : 'sites/default/files/bg_1.jpg', title : '', thumb : '', url : ''},  									
					{image : 'sites/default/files/glacier_lg.jpeg', title : '', thumb : '', url : ''},  

					{image : 'sites/default/files/bg_bwca.jpg', title : '', thumb : '', url : ''},  							]
					
				});
		    });
		    
		</script>


  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-main">
      <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
			<li id="main-logo"><a class="brand" href="/"><img src="/sites/default/files/nf-rectangle_sm.png"></a>
			</li>
             <li class="divider-vertical" id="dividernav"></li>
              <li class="nav-main-menu" id="nav-locations">
                <a href="/locations"><h3>Where to go</h3></a>
              </li>
              <li class="divider-vertical" id="dividernav"></li>
			  <li class="nav-main-menu" id="nav-activities">
                <a href="/activities"><h3>What to do</h3></a>
              </li>
              <li class="divider-vertical" id="dividernav"></li>
			  <li class="nav-main-menu" id="nav-packages">
                <a href="/packages"><h3>Book a package</h3></a>
              </li>
              </ul>
          <!--      <ul class="nav pull-right">
              <li class="divider-vertical" id="dividernav"></li>
			  <li class="divider-vertical" id="dividernav"></li>
			  <li class="" id="">
                <a href="user">Sign in</a>
              </li>
              <li class="divider-vertical" id="dividernav"></li>            
              <li class="" id="">
                <a href="user">Sign up</a>
              </li>
              
            </ul>
            <ul class="nav pull-right">
              <li class="divider-vertical" id="dividernav"></li>
			  
			  <li class="" id="aboutnav">
                <a href="#aboutUs" data-toggle="modal">About</a>
              </li>
              <li class="divider-vertical" id="dividernav"></li>            
              <li class="" id="">
                <a href="#myModal" data-toggle="modal">Get deals by email</a>
              </li>
              
            </ul>-->
          
            
          </div>
        </div>
      </div>
    </div>

  
<!-- Masthead
================================================== -->


<div id="masthead">
      	  <div class=" marketing">
              <h1 id="header"><br>Book an outdoor activity package.</h1></div>
           
		   <?php print '<div id="front-location-submit-text">Choose from multi-day adventures to relaxing day trips. <br>Start by picking a place to play.</div>
		   <div id="front-location-submit">' . render($page['content']) . '</div>'; ?>
	</div>	       
		        
		        
		        
<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
		        
		        
		        
		        
		        
    <br>         
     <br>
	  <aside class="social-media">
			<ul class="quick-links" id="followus">
			<li class="follow-btn">
			<a href="https://twitter.com/naturefitter" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @naturefitter</a>
			</li>
			<li class="tweet-btn">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://naturefitter.com" data-count="horizontal" data-via="NatureFitter" data-related="mdo:Creator of NatureFitter.com">Tweet</a>
			</li>
			</ul>
	</aside>
		
<!--End Masthead Section-->




    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
