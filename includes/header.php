        <header>
        	<div class="main">
                <h1><a href="index.php">App-cident.com</a></h1>
				<div class="slogan">Because accidents do happen!</div>
                <nav>
                    <ul id="nav">
                        <li<?php if($pageName==='Home') { echo ' class="active"'; } ?>><a href="index.php">Home</a></li>
                        <li<?php if($pageName==='Demo') { echo ' class="active"'; } ?>><a href="demo.php">Demo</a></li>
						<li<?php if($pageName==='About Us') { echo ' class="active"'; } ?>><a href="about.php">About Us</a></li>
                        <li<?php if($pageName==='Help') { echo ' class="active"'; } ?>><a href="help.php">Help</a></li>
						<li<?php if($pageName==='Contact Us') { echo ' class="active"'; } ?>><a href="contact.php">Contact Us</a></li>
                    </ul>				
                </nav>
            </div>   
        </header>