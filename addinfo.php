<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php include("includes/nav.php")?>
	
    
    <form action="" method="post">
                                <div class="container box pb-3">
                                    <div class=" d-flex justify-content-center"><p class="pt-5 font-weight-bolder userfont">ADD BOOK</p>
                                    </div>
                                    <label> BookName :</label><br>
                                    <input type="text" name="name" id="name" ><br><br>

                                    <label> PublisherName :</label><br>
                                    <input type="text" name="pname" id="pname" ><br><br>
                                    <label> AuthorName :</label><br>
                                    <input type="text" name="author" id="author" ><br><br>
        
                                    <label> Isbnnumber :</label><br>
                                    <input type="text" name="isbn" id="isbn" ><br><br>
                                    
                                    <label>  copies :</label><br>
                                    <input type="text" name="number" id="number" ><br><br>
                                    
                                    <input type="submit" value="submit" name="submit"> <br><br> <br><br>

                                </form>  
                                </div> 
                        
                      


                                                       
<?php

$query1="insert into addbook(RegBookName,RegPublisherName,RegAuthorName,RegIsbnnumber,Regcopies ) values('".$_POST["name"]."','".$_POST["pname"]."','".$_POST["author"]."','".$_POST["isbn"]."','".$_POST["number"]."')";
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
  
        <?php include("includes/footer.php");?>
        <a class="" href="index.php">Back</a>

        




