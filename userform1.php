





	<form action="processing.php" method="post">

		<p>First Name:	<input type="text" name="fname" size="20" maxlength="40" /></p>
		<p>Last Name:	<input type="text" name="lname" size="20" maxlength="40" /></p>
		<p>Email:   <input type="text" name="email" size="40" maxlength="60" /></p>
		<p>Gender:   <input type="radio" name="gender" value="M" /> Male 
		<input type="radio" name="gender" value="F" /> Female </p>
		<p>Age <select name="age">
					<option value="0-29">Under 30</option>
					<option value="30-60">Between 30 and 60</option>
					<option value="60+">Over 60</option>
				</select></p>

		<p>comments:<textarea name="comments" rows="3" cols="40"></textarea></p>
		<p>password:<input type="password" name="password" maxlength="50"></textarea></p>
		<p><input type="submit" name="submit" value="Submit" ></p>


	</form>


