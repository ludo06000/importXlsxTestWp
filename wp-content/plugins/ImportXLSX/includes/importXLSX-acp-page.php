<?php get_header() ?>
<div class="wrap">
    <form action="includes/functionImport.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="file" id="file" />
            <input type="submit" name="submitBtn" value="Import">
    </form>
    <?php

            if(isset($_SESSION['message']))
            {?>
            <h4><?=$_SESSION['message'];?></h4>
            <?php unset($_SESSION['message']);
            };
    ?>
</div>
<?php get_footer() ?>

        