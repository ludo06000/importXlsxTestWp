<?php
session_start();
/*
Plugin Name: Import XLSX
Description: Upload XLSX files.
Version: 1.0.00
Author: Ludovic CAPACCI
*/
?>
<form action="importFile.php" method="post" enctype="multipart/form-data" >
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
