<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 'homepage';
?>
<?php include '../inc/init.php' ?>
<?php include ROOT_PATH . 'public/layout-parts/header.php' ?>


<div id="main" class="container">
    <div class="row">
        <!-- Colonna sinistra centrale -->
        <div class="col-9">
            <?php include ROOT_PATH . 'public/pages/' . $page . '.php' ?>
        </div>

        <!-- Colonna destra sidebar -->
        <?php include ROOT_PATH . 'public/layout-parts/sidebar.php' ?>

    </div>
</div>

<?php include ROOT_PATH . 'public/layout-parts/footer.php' ?>