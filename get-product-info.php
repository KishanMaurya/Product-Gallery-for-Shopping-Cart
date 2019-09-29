<?php
include 'DBController.php';
$db_handle = new DBController();

$query = $db_handle->runQuery("SELECT * FROM tbl_products WHERE id = " . $_GET["id"]);
if (! empty($query)) {
        ?>  
            <div class="preview-image">
            <img src="<?php echo $query[0]["product_image"] ; ?>" />
        </div>
<div class="product-info">
                <div class="product-title"><?php echo $query[0]["name"] ; ?></div>
                <ul>
  <?php
  for($i=1;$i<=5;$i++) {
  $selected = "";
  if(!empty($query[0]["average_rating"]) && $i<=$query[0]["average_rating"]) {
    $selected = "selected";
  }
  ?>
  <li class='<?php echo $selected; ?>'>&#9733;</li>  
  <?php }  ?>
</ul>
                <div class="product-category"><?php echo $query[0]["category"] ; ?>
                
                </div>
                <div><?php echo $query[0]["price"] ; ?> USD</div>
                <div><button class="btn-info">View More</button><button class="btn-info">Add to Cart</button></div>
            </div>      
<?php
}
?>