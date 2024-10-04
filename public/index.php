<?php 
require_once '../src/components/header.php';
require_once '../src/components/navbar.php';
?>

<div id="content">
    <?php 
    // ตรวจสอบว่ามีการส่งค่า page มาหรือไม่ ถ้ามีให้โหลดหน้าที่ระบุ
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        // ใช้การตรวจสอบว่ามีไฟล์ที่ระบุอยู่จริงหรือไม่
        $page_path = "../src/pages/{$page}.php";
        if (file_exists($page_path)) {
            require_once $page_path; // โหลดหน้าเพจตามที่ระบุ
        } else {
            require_once '../src/pages/404.php'; // หน้า 404 ถ้าเพจไม่ถูกต้อง
        }
    } else {
        require_once '../src/pages/home.php'; // หน้าเริ่มต้น
    }
    ?>
</div>

<?php require_once '../src/components/footer.php'; ?>
