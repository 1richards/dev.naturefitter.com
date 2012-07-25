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

<div class="container">

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
	
	<div class="row">
	  
    <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
	  
	  <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
      <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
	  </section>

    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  <footer class="footer container">
    <?php print render($page['footer']); ?>
  </footer>
</div>


	

