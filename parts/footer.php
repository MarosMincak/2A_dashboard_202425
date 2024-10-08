<?php
$pageName = basename($_SERVER['SCRIPT_NAME']);
?>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?php echo str_replace(".php", "", $pageName);
 ?></span>
        </div>
    </div>
</footer>