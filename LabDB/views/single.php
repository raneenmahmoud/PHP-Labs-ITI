<?php
$id = (isset($_GET["id"]))? intval($_GET["id"])  : 0;
$current_item = $sqlhandler-> get_record_by_id($id)[0];
?>
<html>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
<div class="container d-flex justify-content-center p-5">
    <div class="card shadow-lg text-center rounded-3 p-1" style="width: 22rem;">
        <img src="<?php echo "images/" .$current_item["photo"]; ?>">
        <div class="card-body">
            <h3 class="card-title text-center"><?php echo "Name: ". $current_item["product_name"]?></h3>
            <span class="text-center"><?php echo "code:".$current_item["product_code"]; ?>
                        <br><?php echo "Item id:".$current_item["id"]; ?>
                        <br><?php echo "Price:".$current_item["list_price"]; ?>
                        <br><?php echo "rating:".$current_item["rating"]; ?>
                        <br><?php echo "Category:".$current_item["category"]; ?>
                        <br><?php echo "Country:".$current_item["country"]; ?></span>
        </div>
    </div>
</div>


</html>