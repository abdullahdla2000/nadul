<?php
@include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <!-- Navbar -->
  <?php include 'header.php'?>

<br>

    <!-- Products -->
    <section class="products" id="products">
        <div class="heading">
            <h2>Products</h2>
        </div>
        <!-- Products Container -->
        <div class="products-container">

        <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `products`");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>
            <div class="box">
            <img src="uploaded_img/<?php echo $row['image']; ?>">
                <h1 style="text-align:center;"> <?php echo $row['name']; ?> </h1>
                
                <span style="text-align:center;"> $<?php echo $row['price']; ?></span>
            </div>
            <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
        </div>
    </section>
    <!-- Footer -->
   
   <?php include 'footer.php'?>
</body>
</html>