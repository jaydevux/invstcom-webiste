<div class="signupbox fr">
		<a name="signupbox"></a>
			<div style="position: absolute; margin: -40px 0 0 320px;"><img src="style/images/icon-star.png"></div>
			<div style="margin: 20px 10px;">
			<h2>Sign Up Today!</h2><br />
			<img style=" padding-left:75px; margin-top: -45px; padding-bottom:30px;" src="style/images/powered-ina.jpg">
			<p><form name="signup" id="signup" method="POST" action="process.php" onsubmit="return validate_form(this)">
			<input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">
			<p align="center">
			<input style="line-height: 25px; height: 25px; font-size: 15px; padding: 5px; border: 2px solid #5594e3; text-align: center;" type="text" id="email" name="email" size="30" value="Enter Your Email Address" onfocus="if(this.value=='Enter Your Email Address'){this.value=''};" onblur="if(this.value==''){this.value='Enter Your Email Address'};"><br />
			<label><input type="checkbox" name="disclaimer" id="disclaimer" value="1"> I agree 
			with the <a target="_blank" href="disclaimer.php">disclaimer</a>.</label>
			<input type="image" src="style/images/button-signup.png" border="0" alt="" type="submit" style="border: none;" name="Submit" /></p>
			<p><b>For Daily Stock Alerts!</b><br />Simple investment strategies 
			that work for the everyday investor.</p>
			<p style="font-size: 10px; margin-top: -18px; color:#000 !important;">Your email is never 
			sold or shared, please read our
			<a target="_blank" href="/disclaimer.php">disclaimer</a> &amp; 
			<a target="_blank" href="/privacy-policy.php">privacy policy</a>.</p>
			</div>
			</div>
	
	</div>		