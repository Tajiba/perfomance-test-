<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php include("includes/nav.php")?>
<div class="container box pb-3">
                               <title>Delete book info</title>
                                  <form action="" method="post">
                                      <label> ISBN :</label><br>
                                     <input type="text" name="isbn" id="isbn" ><br><br>
                
                                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="delete" >Delete</button>
                                  </form>
                                    </div>
                                    <?php
                                    if(isset($_REQUEST["delete"]))
        {
			$query1="delete from addbook where RegIsbnnumber='".$_REQUEST["isbn"]."'";
            mysqli_query($con,$query1) or die(mysqli_error($con));
            echo "<script>alert('Data deleted successfully..!');window.location='display.php';</script>";   
        }
        ?>
        <?php include("includes/footer.php")?>    
        <a class="" href="index.php">Back</a>

                                