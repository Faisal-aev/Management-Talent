<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

    include '../public/layouts/header.php';
    include '../public/layouts/sidebar.php';
    include '../db/koneksi.php';


    $id = $_SESSION['id_user'];

?>
<?php
    error_reporting(0);
    switch ($_GET['page']) {
        default:

            if ($level === '0') {
                include "../public/dashboard.php";
            } elseif ($level === '1') {
                include "../public/dashboard-1.php";
            } elseif ($level === '2') {
                include "../public/dashboard-2.php";
            } elseif ($level === '3') {
                include "../public/dashboard-3.php";
            }
            break;

            /////////////////////////////////////////////// START ADMIN PAGE
            // USERS
        case "data_user";
            include "../pages/admin/user/data.php";
            break;
        case "tambah_user";
            include "../pages/admin/user/add.php";
            break;
        case "edit_user";
            include "../pages/admin/user/edit.php";
            break;
        case "hapus_user";
            include "../pages/admin/user/delete.php";
            break;
    }
?>

<?php
    include '../public/layouts/footer.php';
}
?>