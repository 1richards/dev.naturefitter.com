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
					slide_interval          :   5000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'sites/default/files/bg.jpg', title : 'Image Credit: Maria Kazvan', thumb : '', url : ''},
														{image : 'sites/default/files/bg_mt_rainier.jpg', title : 'Image Credit: Walter Siegmund', thumb : '', url : ''},  
														{image : 'sites/default/files/bg_bwca.jpg', title : 'Image Credit: Reese Richards', thumb : '', url : ''},  
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-1.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},

												]
					
				});
		    });
		    
		</script>



  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
			<li class=""><a class="brand" href="#">NatureFitter</a>
			</li>
              <li id="nav-locations">
                <a href="#locations">Where to go</a>
              </li>
              <li class="divider-vertical" id="dividernav"></li>
			  <li id="nav-activities">
                <a href="#activities">What to do</a>
              </li>
              <li class="divider-vertical" id="dividernav"></li>
			  <li id="nav-packages">
                <a href="#packages">Guidance when you get there</a>
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

    <div class="container">
<!-- Signup Modal
================================================== -->	  
<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">x</button>
    <h2>Coming Soon!</h2>
  </div>
  <div class="modal-body">
    <div align="center"><a class="brand" href="#"> <img height="60px" src="sites/default/files/img/NatureFitter_logo.png"></a></div>
	<!-- Begin MailChimp Signup Form -->


<form class="form-horizontal" action="http://naturefitter.us5.list-manage1.com/subscribe/post?u=fee32f5220fb7eac07bc2c2a9&amp;id=175dc64e5a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	<fieldset>
	<div align="center"><h3>Sign up for access to the Beta site and email updates</h3></div><label for="mce-EMAIL"></label><br />
	<div class="control-group">
            <label class="control-label" for="FNAME">First Name</label>
            <div class="controls">
              <input class="input-xlarge focused" name="FNAME" id="FNAME" type="text" value="">
            </div>
	</div>
	
	<div class="control-group">
            <label class="control-label" for="LNAME">Last Name</label>
            <div class="controls">
              <input class="input-xlarge focused" name="LNAME" id="LNAME" type="text" value="">
            </div>
	</div>

	<div class="control-group">
            <label class="control-label" for="EMAIL">Email</label>
			<div class="controls">
				<input type="email" value="" name="EMAIL" class="input-xlarge focused email" id="mce-EMAIL" placeholder="email address" required>
			</div>
	</div>
			
			
	<div class="control-group">
            <label class="control-label" for="optionsCheckboxList">I'm interested in</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="mce-CUSTOMER" name="CUSTOMER" value="1">
                Finding an outdoor experience
              </label>
              <label class="checkbox">
                <input type="checkbox" id="mce-VENDOR" name="VENDOR" value="1">
                Supplying an outdoor experience
              </label>
			  
            </div>
    </div>
			
			
			
	<div class="control-group">
            <label class="control-label " for="optionsCheckbox"></label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="optionsCheckbox" value="option1" required>
                I agree to opt-in to receive emails from NatureFitter.
              </label>
            </div>
          </div>

	
		</fieldset>
	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary btn-large pull-right">
	




 </form>
 </div>
</div>
<!--End mc_embed_signup modal-->

<!-- About Us Modal
================================================== -->	  
<div class="modal hide fade" id="aboutUs">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">x</button>
    <h2>About us</h2>
  </div>
  <div class="modal-body">
    <h4>Helping to move the outdoor industry forward.</h4><br />
	<p>We're a startup with <a rel="tooltip" data-original-title="wink, wink Mr. VC">big ambitions</a> to bridge the gap between people who want to enjoy the outdoors and those who can help them do it. We believe there is a huge unmet need to help people easily and confidently find and book great outdoor experiences. <br><br><blockquote>If you're at all skeptical, try to book a <a href="http://lmgtfy.com/?q=Hiking+in+the+Delaware+Water+Gap" target="_blank">hiking trip near the Delaware Water Gap</a>-- we'll wait.   ...it's like you're browsing the web of the late 90's all over again, complete with animated gifs and auto-playing music. grrr.</blockquote>We're based in NYC, but don't hold it against us, we've got adventure in our hearts and content management and digital marketing in our blood. <br /><br />Sign up for our list or shoot us an <a href="mailto:info@naturefitter.com">email</a> for more details. </p>
	<a href="#" class="btn btn-large pull-right" data-dismiss="modal">Close</a>
</div></div>
<!--End about us modal-->





	
<!-- Masthead
================================================== -->

<div class="container"><!--<div class="container hero-unit span10" id="heroUnit">-->
<div class="row" id="logo"><a class="brand" href="#"> <img id="main-logo" src="sites/default/files/NatureFitter_logo.png"></a></div>
      	  <div class=" marketing">
              <h1 id="header"><br>The Concierge of the Outdoors</h1>
           
		   <?php print '<div id="front-location-submit"' . render($page['content']) . '</div>'; ?>
		       
		        
		        
		        
<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
		        
		        
		        
		   </div>     
		        
             
      </div> <br>
	  
			<ul class="quick-links" id="followus">
			<li class="follow-btn">
			<a href="https://twitter.com/naturefitter" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @naturefitter</a>
			</li>
			<li class="tweet-btn">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://naturefitter.com" data-count="horizontal" data-via="NatureFitter" data-related="mdo:Creator of NatureFitter.com">Tweet</a>
			</li>
			</ul>
		</div> 
</div>

		
<!--End Masthead Section-->


<!--Activities Section-->
<hr class="soften hrdivider" id="locations">

<div class="marketing" >
  <h1>Have somewhere in mind? Let's get this started.</h1>
  <p class="marketing-byline">If not, start with an <a href="#activities">activity</a> and we'll go from there.</p>
  <ul class="thumbnails example-sites">
    <li class="span3">
		<h3>Yosemite National Park	</h3>     
	 <a class="thumbnail" href="locations">
        
		<img src="sites/default/files/img/yosemite.jpg" alt="Yosemite">
      </a>
	  <div class="caption">
              
              <p>Think big. Very big. California big. Yosemite is one of the most amazing places on Earth. Set this as your goal and let us help you achieve it.</p>
              
            </div>
    </li>
    <li class="span3">
      <h3>The Boundary Waters</h3>
	  <a class="thumbnail" href="locations">
        <img src="sites/default/files/img/bwca.jpg" alt="The Boundary Waters">
      </a>
	  <div class="caption">
              
              <p>The French Canadian Voyageurs knew what was up way back in the 18th century. Over a million square acres of ancient undisturbed wilderness lake country.</p>
              
            </div>
    </li>
    <li class="span3" id="catskills">
      <h3>The Catskills</h3>
	  <a class="thumbnail" href="locations">
        <img src="sites/default/files/img/catskills.jpg" alt="Mountaineer">
      </a>
	   <div class="caption">
              
              <p>For those of you from NYC, think Central Park times a million-- no a billion.  Hiking, climbing, canoeing, biking--all within a two hour drive or train ride. Not just for hippies anymore.</p>
             
            </div>
    </li>
    <li class="span3">
      <h3>Glacier National Park</h3>
	  <a class="thumbnail" href="locations">
        <img src="sites/default/files/img/glacier.jpg" alt="Catskills Outfitters">
      </a>
	  <div class="caption">
              
              <p>If you can get there, it's more than worth the effort. Stunning alpine mountains and pristine wilderness ecosystems. And glaciers-- but <a rel="tooltip" data-original-title=";-(">not for long</a>.</p>
              
            </div>
    </li>
  </ul>
<div class="pager pagination-right">
  <ul>
     <li class="next">
      <a href="locations">More</a>
    </li>
  </ul>
</div>
</div><!-- /.marketing -->
  
  <!--/row-->
  
  <!--Activities Section-->
<hr class="soften hrdivider" id="activities">

<div class="marketing">
  <h1>Pick an activity. Be adventurous. The process is seamless.</h1>
  <p class="marketing-byline">Or don't. Maybe start with a <a href="#locations">location</a> instead.</p>
  <div class="row">
    <div class="span4 activities">
      <img class="bs-icon" src="sites/default/files/img/tent.png">
      <h2>Camping</h2>
      <p>More than just Smores. But that too. If camping's your thing, or you just need a basecamp for your expedition, you're in luck. </p>
    </div>
    <div class="span4 activities">
      <img class="bs-icon" src="sites/default/files/img/activity.png">
      <h2>Windsurfing</h2>
      <p>Why not? It's not as hard as those other kids make it seem. No idea where to start? That's what this is all about.</p>
    </div>
    <div class="span4 activities">
      <img class="bs-icon" src="sites/default/files/img/gear.png">
      <h2>X-Country Skiiing</h2>
      <p>There's nothing quite like the experience of skiing across a frozen lake in a whiteout. Seriously, try explaining it to your colleagues on Monday.</p>
    </div>
  </div><!--/row-->
  <div class="row" id="activityRow">
    <div class="span4 activities">
      <img class="bs-icon" src="sites/default/files/img/horsey.png">
      <h2>Horseback Riding</h2>
      <p>Just do it for your girlfriend. She wants to ride the horsies. Maybe it turns out you've got a little Zoro in you.
    </div>
    <div class="span4 activities">
      <img class="bs-icon" src="sites/default/files/img/hiking.png">
      <h2>Hiking</h2>
      <p>If your idea of hiking entails mountains, you're in luck.  If your idea of the wilderness is a little more Emersonian, we support that too.</p>
    </div>
    <div class="span4 activities">
      <img class="bs-icon" src="sites/default/files/img/fishing.png">
      <h2>Fishing</h2>
      <p><a rel="tooltip" data-original-title="Pun intended">Hooked</a> on fishing? So are our guides and vendors-- they're locals and know the best spots. </p>
    </div>
	
  </div>
  <div class="pager pagination-right">
  <ul>
     <li class="next">
      <a href="Activities">More</a>
    </li>
  </ul>
</div>
  <!--/row-->
 
    <hr class="soften hrdivider" id="vendors">
<!-- Vendors Section-->
  <h1>Find gear and advice from the people who live this stuff.</h1>
  <p class="marketing-byline">Read the reviews, see comments. Just beware if they're selling you graphic design services...</p>
  <ul class="thumbnails example-sites">
     <li class="span3">
      <a class="thumbnail" href="packages">
        <img src="sites/default/files/img/mountaineer.png" alt="Mountaineer">
      </a>
	   <div class="caption">
              <h4>The Mountaineer</h4>
              <p>At the Mountaineer we try hard to stock unique, high quality gear for everyone. Serious mountaineers, expeditions, recreational hikers, big, small, short, or tall we have something for you.</p>
             
            </div>
    </li>
	 <li class="span3">
      <a class="thumbnail" href="packages">
        <img src="sites/default/files/img/edge_of_woods.png" alt="Edge of the Woods Outfitters">
      </a>
	  <div class="caption">
              <h4>Edge of the Woods Outfitters</h4>
              <p>We specialise in Delaware River Trips, Bike Rental, Pedal and Paddle Tours, Bike n Brew Tours, guided hikes, and high quality outdoor adventure gear.</p>
              
            </div>
    </li>
	<li class="span3">
      <a class="thumbnail" href="packages">
        <img src="sites/default/files/img/piragisflyinglogob.jpg" alt="Piragis Northwoods">
      </a>
	  <div class="caption">
              <h4>Piragis Northwoods</h4>
              <p>We rent canoes and camping gear to paddlers who love to canoe and camp in the Boundary Waters Canoe Area Wilderness and Canada's Quetico Provincial Park.</p>
              
            </div>
    </li>
   
   
    <li class="span3">
      <a class="thumbnail" href="packages">
        <img src="sites/default/files/img/catskills_logo.png" alt="Catskills Outfitters">
      </a>
	  <div class="caption">
              <h4>Catskill Outfitters</h4>
              <p>We think canoe. We live canoe. We paddle canoe. We rent canoe. We wonder - why don't you canoe too? But then again, we breathe kayak. We love  kayak. We are kayak. Would you like to be kayak too?</p>
              
            </div>
    </li>
  </ul>
<div class="pager pagination-right">
  <ul>
     <li class="next">
      <a href="packages">More</a>
    </li>
  </ul>
</div>
</div><!-- /.marketing -->

     <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; NatureFitter, 2012. All rights reserved.</p>
		<p>This page lovingly handcrafted with <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</p>
      </footer>

    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="sites/default/files/js/google-code-prettify/prettify.js"></script>
    <script src="sites/default/files/js/bootstrap-transition.js"></script>
    <script src="sites/default/files/js/bootstrap-alert.js"></script>
    <script src="sites/default/files/js/bootstrap-modal.js"></script>
    <script src="sites/default/files/js/bootstrap-dropdown.js"></script>
    <script src="sites/default/files/js/bootstrap-scrollspy.js"></script>
    <script src="sites/default/files/js/bootstrap-tab.js"></script>
    <script src="sites/default/files/js/bootstrap-tooltip.js"></script>
	<script type="text/javascript">$("[rel=tooltip]").tooltip();</script>
    <script src="sites/default/files/js/bootstrap-popover.js"></script>
    <script src="sites/default/files/js/bootstrap-button.js"></script>
    <script src="sites/default/files/js/bootstrap-collapse.js"></script>
    <script src="sites/default/files/js/bootstrap-carousel.js"></script>
    <script src="sites/default/files/js/bootstrap-typeahead.js"></script>
    <script src="sites/default/files/js/application.js"></script>


  
  <footer class="footer container">
    <?php print render($page['footer']); ?>
  </footer>
</div>


	

