
<?php
session_start();

if (isset($_GET['id'])) {
    print "<form>";
    print '<input name="updatebrand" type="text">';
    print '<input name="summit" type="submit">'; 
    print "</form>";
    $_SESSION['id']=$_GET['id'];
}

if (isset($_GET['updatebrand'])) {
    require('../controllers/product_controller.php');
    $brid = $_SESSION['id'];
    
    $updbrand = update_brand($_GET['updatebrand'], $brid);

    if ($updbrand) {
        echo "<script>alert('Update successful')</script>";
        echo "<script>window.open('../admin/brand.php','_self')</script>";
    } 

    else {
    echo 'update failed'; 
    } 
}

?>