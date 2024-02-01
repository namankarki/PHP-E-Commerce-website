<?php
include("../includes/connect.php");
include("../functions/common_function.php");
session_start();
$username=$_SESSION['admin_name'];
if(!isset($username)) {
    header('Location: admin_login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <link rel="icon" type="image/png" href="../img/head-logo.png">
<!-- BootStraps and css -->
<?php
include("./includes/links.php");
?>
<style>
    body{
        overflow-x: hidden;
    }
    .product_image{
        width: 100px;
        object-fit: contain;
    
    }
</style>
</head>
<body> <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- first Child -->
        <nav class="navbar navbar-expand-md navbar-light bg-primary">
            <div class="container-fluid">
                <img src="../img/brand-logo1.png" class="logo" alt="">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link text-decoration-none text-white text-capitalize">Welcome <?php echo $username ?></a>
                        </li>

                    </ul>
                </nav>
            </div>

        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2 my-4">
                Manage Details
            </h3>
        </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-md-12 p-1  bg-secondary  d-flex align-items-center">
                <!-- button*10>a.nav-link.text-light -->
                <div class="button text-center mx-auto">
                    <a href="index.php?insert_product" class="btn btn-primary m-1">Insert Products</a>
                    <a href="index.php?view_products" class="btn btn-primary m-1">View Products</a>
                    <a href="index.php?insert_categories" class="btn btn-primary m-1">Insert Categories</a>
                    <a href="index.php?view_categories" class="btn btn-primary m-1">View Categories</a>
                    <a href="index.php?list_orders" class="btn btn-primary m-1">All Orders</a>
                    <a href="index.php?list_payments" class="btn btn-primary m-1">All Payments</a>
                    <a href="index.php?list_users" class="btn btn-primary m-1">List Users</a>
                    <a href="admin_logout.php" class="btn btn-primary m-1">Logout</a>

                </div>
            </div>
        </div>
        <!-- Fourth Child -->
        <div class="container my-2">
            <!-- For Insert -->
            <?php
            if (isset($_GET['insert_product'])) {
                include('insert_product.php');
            }
            if (isset($_GET['insert_categories'])) {
                include('insert_categories.php');
            }
            if (isset($_GET['view_products'])) {
                include('view_products.php');
            }
            if (isset($_GET['edit_products'])) {
                include('edit_products.php');
            }
            if (isset($_GET['delete_products'])) {
                include('delete_products.php');
            }
            if (isset($_GET['view_categories'])) {
                include('view_categories.php');
            }
            if (isset($_GET['edit_categories'])) {
                include('edit_categories.php');
            }
            if (isset($_GET['delete_categories'])) {
                include('delete_categories.php');
            }
            if (isset($_GET['list_orders'])) {
                include('list_orders.php');
            }
            if (isset($_GET['delete_orders'])) {
                include('delete_orders.php');
            }
            if (isset($_GET['list_payments'])) {
                include('list_payments.php');
            }
            if (isset($_GET['delete_payments'])) {
                include('delete_payments.php');
            }
            if (isset($_GET['list_users'])) {
                include('list_users.php');
            }
            if (isset($_GET['delete_users'])) {
                include('delete_users.php');
            }
            
            ?>
        </div>
    </div>


    <!-- Bootstraps Js link -->
<?php include('../includes/bootstrapsjs.php') ?>
</body>
</html>