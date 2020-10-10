<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php include("includes/nav.php")?>
	
	<div class="register">
		
		<form id ="register" method="post" action="">
			<h2>Registration Form</h2>
		<label> Identification :</label><br>
            <input type="text" name="id" id="identify" ><br><br>
            <label> Name:</label><br>
            <input type="text" name="name" id="name" ><br><br>
            <label> Address :</label><br>
			<input type="text" name="address" id="address" ><br><br>
			<label>Street:</label><br>
            <input type="text" name="street" id="street" ><br><br>
            <label>City:</label><br>
            <input type="text" name="city" id=" city" ><br><br>
            <label> Age :</label><br>
			<input type="text" name="age" id="age" ><br><br>
			<label>Email :</label><br>
			<input type="email" name="emailaddress" id="name" ><br><br>
			
			
			<input type="submit" value="submit" name="submit"> <br><br> <br><br>

			
</div>
        </form>
	
        <?php include("includes/footer.php")?>
        <?php
    

    
        $query1="insert into tblregistration1(RegIndentification,RegName,RegAddress,RegStreet,RegCity,RegAge,RegEmail) values('".$_POST["id"]."','".$_POST["name"]."','".$_POST["address"]."','".$_POST["street"]."','".$_POST["city"]."','".$_POST["age"]."','".$_POST["emailaddress"]."')";
            $res = mysqli_query($con,$query1) or die(mysqli_error($con));
            if($res == TRUE)
            {
                echo "<script>alert('Data added successfully..!!')</script>";
            }
            else
            {
                echo "<script>alert('Something getting wrong.Please try again..!')</script>";
            }
               
        ?>
        <a class="" href="index.php">Back</a>