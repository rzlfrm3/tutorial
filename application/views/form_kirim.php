<html>
<head>
	<title>My Upload</title>
</head>
<body>
	<h3>My Upload Form</h3>
	 <form method="POST" action="<?php echo base_url()."index.php/tabel/do_kirim"; ?>">
    	<label>First Name</label>
    	<input type="text" name="first_name" value="<?php echo $first_name; ?>" /><br><br>

    	<label>Last Name</label>
    	<input type="text" name="last_name" value="<?php echo $last_name; ?>" /><br><br>
		
		<label>Your Picture</label>
    	<input type="text" name="image" value="<?php echo $image; ?>" /><br><br>
		
				
  		<input type="submit" value="Submit" name="submit">
</body>