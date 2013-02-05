<?php 
 $pageName = 'Demo';
 include 'includes/head/head.php';
 include 'includes/header.php'; 
?>
<section>
		<div class="main">
			<article class="column1 about">   
				<h2>DEMO</h2>
				<h3>There are 2 ways to see how the app-cident app can be of use to your company.</h3>
				<h4>1. REQUEST A MEETING</h4>
				<p>You can request a meeting with one of our representatives who will show you the ins and outs of exactly what it can do and how it can benefit your company.  Use the <a href="contact.php">contact page</a> here, if you would like someone to show you how this app can save your company time and money.</p>
				<h4>2. DEMO</h4>
				<p>We have a video below for both the app and console which runs through the basics.</p>				
				<h5>App</h5>
				<video id="my_video_1" class="video-js vjs-default-skin" controls
					preload="auto" width="600" height="338"	data-setup="{}">					
					<source type="video/mp4" src="/videos/app-demo.mp4">	
				</video>				
				<h5>Console</h5>
				<video id="my_video_1" class="video-js vjs-default-skin" controls
					preload="auto" width="600" height="338"	data-setup="{}">
					<source type="video/mp4" src="/videos/console-demo.mp4">
				</video>
			</article>
			<?php include 'includes/sidebar/updates.php'; ?>
		</div>
</section> 
<?php include 'includes/footer.php'; ?>