<?php 
 $pageName = 'Home';
 include 'includes/head/head.php';
 include 'includes/header.php'; 
?> 
	<section class="steps">
		<div class="main">
			<h4>Logging a roadside accident has never been so easy, all you have to do is follow four little steps...</h4>
			<ul>
				<li>1. 3rd Party Details</li>
				<li>2. Upload Photos</li>
				<li>3. Checklist</li>
				<li>4. Log Accident!</li>
			</ul>
			<ul class="mobiles">
				<li><img src="img/demo_step_1.png" alt="accidents" class="pic1"></li>
				<li><img src="img/demo_step_2.png" alt="accidents" class="pic1"></li>
				<li><img src="img/demo_step_3.png" alt="accidents" class="pic1"></li>
				<li><img src="img/demo_step_4.png" alt="accidents" class="pic1"></li>
			</ul>
		</div>
	</section>
	<section>
			<div class="main">
				<article class="column1 about">   
						<h2>CORE FEATURES</h2>
						<h3>App</h3>
<ul>
<li>Save time for the driver at the roadside after an accident</li>
<li>Automated data retrival of core information such as location and weather conditions</li>
<li>Very easy to use, should take no longer than 5 mins to fill out all information</li>
<li>Attach mutiple photos of accident taken directly from the smartphone</li>
</ul>

						<h3>Console</h3>
<ul>
<li>All accidents logged directly into the console (no need for admin staff to update a central database)</li>
<li>A central resource for information about all of the companies drivers and vehicles including extra info for M.O.T/Service dates and any faults with vehicles</li>
<li>Easily search through accidents to display map/location, photos etc etc</li>
<li>One click reports (Excel/PDF) to display accident reports for the given period</li>
<li>Charts and tables to display accidents by driver or by weather condition (these can be changed to suit your needs)</li>
<li>Admin system to add new drivers (so they can access the app) and admin users (so they can log into the console)</li>
</ul>				
					
				</article>
				<?php include 'includes/sidebar/updates.php'; ?>
			</div>
	</section> 
<?php include 'includes/footer.php'; ?>