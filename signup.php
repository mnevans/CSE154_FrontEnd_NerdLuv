<!DOCTYPE html>
<html>
	<!--
	Morgan Evans, CSE 154 AL, Homework 4
	This page allows new users to enter in their given information to sign up for NerdLuv to find potential matches.
	-->		

<?php 
	include("common.php");
	head();
?>	

	<body>
		<?php banner(); ?>
		<!-- Signup form -->
		<form action="signup-submit.php" method="post">
		<fieldset>
			<legend>New User Signup:</legend>
			<div>
				<label>
					<!-- User's name -->
					<strong>Name:</strong>
					<input type="text" name="name" size="16" />
				</label>
			</div>

			<div>
				<label>				
					<!-- User's gender -->
					<strong>Gender:</strong>
					<input type="radio" name="gender" value="m" /> Male
					<input type="radio" name="gender" value="f" /> Female
				</label>
			</div>

			<div>
				<label>
					<!-- User's age -->
					<strong>Age:</strong>
					<input type="text" name="age" maxlength="2" size="6" />
				</label>
			</div>

			<div>
				<label>
					<!-- User's personality type -->
					<strong>Personality type:</strong>
					<input type="text" name="type" size="6" maxlength="4" />
					(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
				</label>
			</div>

			<div>
				<label>
					<!-- User's favorite OS -->
					<strong>Favorite OS:</strong>
					<select name="os">
					  <option selected="selected">Windows</option>
					  <option>Mac OS X</option>
					  <option>Linux</option>
					</select>
				</label>
			</div>

			<div>
				<label>
					<!-- User's minimum and maximum ages -->
					<strong>Seeking age:</strong>
					<input type="text" name="min_age" maxlength="2" size="6" placeholder="min" />
					<input type="text" name="max_age" maxlength="2" size="6" placeholder="max" />
				</label>
			</div>

			<div>
				<label>
					<input type="submit" value="Sign Up" />
				</label>
			</div>
		</fieldset>
		</form>

	<?php footer(); ?>
	</body>
</html>
