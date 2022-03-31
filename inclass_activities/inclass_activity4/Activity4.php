<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity4</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
    <h1>Registration Form</h1>
    <form action="Activity4-preview.php" method="post">
    	<div class="row">
    		
	    	<label class="main-label" for="name">Name:</label>
	    	<input type="text" name="name">
    	</div>
    	
    	<div class="row">
    		<label class="main-label" for="username">Username:</label>
    		<input type="text" name="username">
    	</div>

		
    	<div class="row">
    		<label class="main-label" for="password">Password:</label>
    		<input type="password" name="password">
    	</div>

    	
    	<div class="row">
    		<label class="main-label" for="address">Address:</label>
    		<input type="text" name="address">
    	</div>

    
    	<div class="row">
    		<label class="main-label" for="country">Country:</label>
	    	<select name="country">
	    		<option value="" >(Please select a country)</option>
	    		<option value="Turkey" >Turkey</option>

	    	</select>
    	</div>
    	
    	<div class="row">
    		<label class="main-label" for="zipcode">Zipcode:</label>
    		<input type="text" name="zipcode">
    	</div>

    	<div class="row">
    		<label class="main-label" for="mail">Email:</label>
    		<input type="email" name="mail">
    	</div>

    	<div class="row">
    		<label class="main-label">Sex:</label>

	    	<input type="radio" name="male">
	    	<label for="male">Male</label>

	    	<input  type="radio" name="female">
	    	<label for="female">Female</label>
    	</div>

    	<div class="row">
    		<label class="main-label">Language:</label>
	    	
	    	<label class="language-label">English</label>
	    	<input type="checkbox" name="language[]" value="English">
	    	
	    	<label class="language-label">French</label>
	    	<input type="checkbox" name="language[]" value="French">
	    	

	    	<label class="language-label">Germany</label>
	    	<input type="checkbox" name="language[]" value="Germany
	    	">
    	</div>

    	
    	<div class="row">
    		<label class="main-label" for="about">About: </label>
    		<textarea name="about"></textarea>
    	</div>
    	
    	<div class="row">
    		<label class="main-label"></label>
    		<input type="submit" name="submit-btn" value="submit">
    	</div>

    </form>
</body>

</html>


