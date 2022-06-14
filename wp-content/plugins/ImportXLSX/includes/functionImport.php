<?php
session_start();
/*
 * Add my new menu to the Admin Control Panel
 */
 
// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
    add_action( 'admin_menu', 'importXLSX_Add_My_Admin_Link');
// Add a new top level menu link to the ACP
    function importXLSX_Add_My_Admin_Link()
    {
        add_menu_page(
            'importXLSX', // Title of the page
            'import Xlsx Plugin', // Text to show on the menu link
            'manage_options', // Capability requirement to see the link
            'includes/importXLSX-acp-page.php' // The 'slug' - file to display when clicking the link
        );
    };

    $connection = mysqli_connect('localhost','root','root','test');
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    if(isset($_POST['submitBtn']))
    {
        $fileName=$_FILES['file']['name'];
        $file_extension = pathinfo($fileName, PATHINFO_EXTENSION);

        //if the file is not xlsx error message
        if($file_extension === 'xlsx')
        {
            $inputFileNamePath = $_FILES['file']['tmp_name'];;

            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
            $data = $spreadsheet->getActiveSheet()->toArray();

            $count = 0;

            foreach($data as $row)
            {
                $reference = $row['0'];
                $name = $row['1'];
                $brand = $row['2'];
                $status = $row['3'];
                $autre = $row['4'];

                $products = "INSERT INTO products (referenceProduct,nameProduct,brandProduct,statusProduct,autreProduct) VALUES('$reference','$name','$brand','$status','$autre')";
                $result = mysqli_query($connection, $products);
                $msg = true;
            }

            if(isset($msg))
            {
                $_SESSION['message'] = "Importation réussie";
                header('location: index.php');
                exit(0);
            }else
            {
                $_SESSION['message'] = "Importation non réussi";
                header('location: index.php');
                exit(0);
            };


        }else 
        {
            $_SESSION['message'] = "Le fichier n'est pas un fichier *.xlsx";
            header('location: index.php');
            exit(0);
        }



    }
?>