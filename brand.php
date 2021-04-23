<?php 
require_once 'connect/connection.php';
$query = "SELECT * FROM suppliers 
LEFT JOIN categories
ON suppliers.s_categories_id = categories.id";
$rs = $conn->query($query);
$suppliers=array();
while($row = $rs->fetch_assoc()){
    $suppliers[]=$row;
}
?>
<div class="brands">
        <div class="small-container">
            <div class="row">
                <?php foreach ($suppliers as $sup) 
                { ?>
                    <div class="col-5">
                        <a href="brand_detail.php?id=<?=$sup['s_categories_id']?>"><img src="<?=$sup['s_logo']?>"></a>
                    </div>
                <?php } ?>
            </div>
        </div>
</div>