<?php 

if (empty($_POST) === false) {
  
  $errors = array();
  
  $title = $_POST['title'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
 
	if (empty($title) === true || empty($firstname) === true || empty($lastname) === true || empty($email) === true || empty($message) === true || empty($subject) === true) {
		$errors[] = 'All fields are required!';
	} else {
		if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$errors[] = 'Not a valid email address';
		}
	}
 
	if (empty($errors) === true) {		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// Additional headers
		$headers .= 'To: support@app-cident.com <support@app-cident.com>' . "\r\n";
		$headers .= 'From: <'. $email .'>' . "\r\n";
		$headers .= 'Cc: adam.coogan@gmail.com' . "\r\n";
		$headers .= 'Cc: webdigga42@gmail.com' . "\r\n";
		$headers .= 'Cc: jonny@mangostorm.co.uk' . "\r\n";
		// Mail it
		mail($to, $subject, $message, $headers);
		header('Location: contact.php?sent');			
		exit();
	}
}



?>
<?php 
 $pageName = 'Contact Us';
 include 'includes/head/head.php';
 include 'includes/header.php'; 
?>
	<section>
		<div class="main">
			<article class="column1 about">   
				<h2>CONTACT US</h2>
				<h3>Request a personal meeting with one of our representatives who will show you the ins and outs of exactly what it can do and how it can benefit your company. Contact us below if you would like someone to show you how this app can save your company time and money.</h3>
				
				<?php 
				
					if(isset($_GET['sent']) === true) {
						echo '<p>Thanks for contacting us!</p>';
					} else {
						
						if(empty($errors) === false) {
							
							echo '<ul>';
							foreach($errors as $error) {
								echo '<li>', $error, '</li>';
							}
							echo '</ul>';
						
						}
					
				?>
				<form action="" method="post" class="contact">
				
				<fieldset>
					<div class="row">
						<label for="title">Title<span class="required">*</span></label>
						<select name="title" id="title">
							<option value="" selected="selected">Select</option>
							<option value="1">Mr</option>
							<option value="2">Mrs</option>
							<option value="3">Ms</option>
							<option value="4">Miss</option>
							<option value="5">Dr</option>
						</select>
					</div>							
					<div class="row">
						<label for="firstname">First name<span class="required">*</span></label>
						<input type="text" maxlength="100" class="text" name="firstname" id="firstname" <?php if (isset($_POST['firstname']) === true) { echo 'value="', strip_tags($_POST['firstname']) ,'"'; } ?>>
					</div>
					<div class="row">
						<label for="lastname">Surname<span class="required">*</span></label>
						<input type="text" maxlength="100" class="text" name="lastname" id="lastname" <?php if (isset($_POST['lastname']) === true) { echo 'value="', strip_tags($_POST['lastname']) ,'"'; } ?>>
					</div>
					<div class="row">
						<label for="email">Email<span class="required">*</span></label>
						<input type="text" maxlength="100" class="text" name="email" id="email" <?php if (isset($_POST['email']) === true) { echo 'value="', strip_tags($_POST['email']) ,'"'; } ?>>
					</div>							
					<div class="row">
						<label for="subject">Subject<span class="required">*</span></label>
						<input type="text" maxlength="100" class="text" name="subject" id="subject" <?php if (isset($_POST['subject']) === true) { echo 'value="', strip_tags($_POST['subject']) ,'"'; } ?>>
					</div>														
					<div class="row textarea">
						<label for="message">Message<span class="required">*</span></label>
						<textarea cols="50" rows="6" name="message" id="message"><?php if (isset($_POST['message']) === true) { echo strip_tags($_POST['message']); } ?></textarea>
					</div>		
					<div class="row">							
						<input type="submit" value="Contact Us">
					</div>
					</fieldset>
				</form>
				
				<?php
				}
				?>
				
			</article>

			<?php include 'includes/sidebar/updates.php'; ?>
				
		</div>
	</section> 
<?php include 'includes/footer.php'; ?>