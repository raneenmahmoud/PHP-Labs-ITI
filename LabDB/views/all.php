<?php
$rows_number = $sqlhandler->get_number_of_rows('items');
$current_index = isset($_GET["next"]) && is_numeric($_GET["next"])? (int)$_GET["next"] : 0 ;
$next_index = ($current_index + _Recorde_per_page_ < $rows_number) ? $current_index + _Recorde_per_page_ : 0 ;
$previous_index = ($current_index - _Recorde_per_page_ > 0) ? $current_index - _Recorde_per_page_ : 0 ;


$items = $sqlhandler->getRecordsPaginated(array(),$current_index);


 ?>
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
<?php $index = $current_index; ?>
<div class="container p-5 d-flex flex-wrap justify-content-between d-grid gap-3">
<?php foreach($items as $item){?>
    <div class="card text-center rounded-3 shadow-sm" style="width: 20rem;">
        <div class="card-header">
        <h3 class="card-title text-center"><?php echo "Name: ". $item["product_name"]?></h3>
        </div>
        <img src="<?php echo "images/" .$item["photo"]; ?>" style="height:40%">
        <span class="text-center"><br><?php echo "Item id:".$item["id"]; ?>
            <br><?php echo "code:".$item["product_code"]; ?>
            <br><a class="btn btn-secondary" href="<?php echo $_SERVER["PHP_SELF"] ?> ?id=<?php echo $item["id"]?>" > view item </a></span>
    </div>
    <?php  $index++;?>
<?php }?>
</div>
<div class="d-flex justify-content-center align-items-center gap-3">
<a class="btn btn-secondary" href=" <?php echo $_SERVER["PHP_SELF"]."?next=".$previous_index; ?>"> << Previous  </a>
<a class="btn btn-secondary" href="<?php echo $_SERVER["PHP_SELF"]."?next=".$next_index; ?>">next >> </a>
</div>
<!-- <a href="views/additem.php">ADD</a> -->
