<?php include("includes/products.php"); ?>


<?php 
$pageTitle = "Purchase Mixed Media";
$section = "shop";
include('includes/header.php'); ?>


        <div class = "section shop page">
        <div class = "wrapper2">
        
            <h3>Mixed Media Art For Sale</h3>
                
                <div class = "shop"> 
                 
                     <h1>Shop Here!</h1>
                 
                     <ul class = "products">
                        <?php foreach($products as $product_id => $product) {
                            echo "<li>";
                            echo '<a href="shopdetails.php?id=' . $product_id .'">';
                            echo '<img src=" ' . $product["image"] . '" alt="' . $product["name"] . '">';
                            echo "<p>View Details</p>";
                            echo "</a>";
                            echo "</li>";
                            }
                        ?>
                        </ul>
        </div>
        </div>
        
    </div>

    
<?php include('includes/footer.php'); ?>