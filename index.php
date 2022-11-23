<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 'homepage.php';
?>

<?php include './layout-parts/header.php' ?>

<div id="main" class="container">
    <div class="row">
        <!-- Colonna sinistra centrale -->
        <div class="col-9">
            <?php include './pages/' . $page ?>
        </div>

        <!-- Colonna destra sidebar -->
        <?php include './layout-parts/sidebar.php' ?>

    </div>
</div>

<?php include './layout-parts/footer.php' ?>