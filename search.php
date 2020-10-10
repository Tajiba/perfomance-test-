<?php include("includes/header.php")?>
<div class="container">
    <h2>Select:</h2>
     <form method="POST"action="">
         <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <select name="Isbn" class="form-control">
                        <option value="">Select</option>
                        <option value="2356">2356</option>
                        <option value="4414">4414</option>
                        <option value="1098">1098</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                    <select name="Book title"  class= "form-control">
                        <option value="">Select Title</option>
                        <option value="swimming">Swiminh</option>
                        <option value="Cricket">Cricket</option>
                        <option value="phycies">Phycies</option>
                    </select>
                </div> 
            </div>
            <div class="col-3">
            <div class="form-group">
                    <select name="author-name" class="form-control">
                        <option value="">Select</option>
                        <option value="Smith">Smith</option>
                        <option value="Davies">Davies</option>
                        <option value="Chan">Chan</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <button type="submit"name="search" class="btn btn-primary">Search</button>
            </div>

         </div>

     </form>
</div>
<?php include("includes/footer.php")?>
<a class="" href="index.php">Back</a>