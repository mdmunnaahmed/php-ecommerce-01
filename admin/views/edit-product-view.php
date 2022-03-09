<?php
$obj_adminBack = new adminBack();
if (isset($_GET['prostatus'])) {
    $get_id = $_GET['id'];
    if ($_GET['prostatus'] == 'edit') {
        $result = $obj_adminBack->getEditProduct($get_id);
    }
}
?>
<?php echo $result['product_name'] ?>
<form action="" method="POST" class="ctg-form w-100">
    <input name="id" id="id" type="hidden" class="form-control" value="<?php echo $result['product_id'] ?>">
    <div class="form-group">
        <label for="u_ctg_name" class="form-label">Category Name</label>
        <input name="u_ctg_name" id="u_ctg_name" type="text" class="form-control" required value="<?php echo $result['product_id'] ?>">
    </div>

    <?php if (isset($msg)) {
        echo $msg;
    } ?>
</form>