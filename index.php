<?php
include 'DBController.php';
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <body>

        <div id="gridview">
            <div class="heading">Product Gallery for Shopping Cart</div>
    <?php
    $query = $db_handle->runQuery("SELECT * FROM tbl_products ORDER BY id ASC");
    if (! empty($query)) {
        foreach ($query as $key => $value) {
            ?>  
                <div class="image">
                <img src="<?php echo $query[$key]["product_image"] ; ?>" />
                <button class="quick_look"
                    data-id="<?php echo $query[$key]["id"] ; ?>">Quick Look</button>
            </div>
    <?php
        }
    }
    ?>
        </div>
        <div id="demo-modal"></div>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script>
        $(".quick_look").on("click", function() {
            var product_id = $(this).data("id");
            	var options = {
            			modal: true,
            			height: 'auto',
            			width:'70%'
            		};
            	$('#demo-modal').load('get-product-info.php?id='+product_id).dialog(options).dialog('open');
        });

        $(document).ready(function() {
            	$(".image").hover(function() {
                    $(this).children(".quick_look").show();
                },function() {
                	   $(this).children(".quick_look").hide();
                });
        });
        </script>
    </body>
</html>