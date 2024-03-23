<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "gamers hub";

// الاتصال بقاعدة البيانات
$con = mysqli_connect($host, $user, $pass, $db);

// التحقق من نجاح الاتصال
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// تعيين مجموعة الأحرف إلى utf8
if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $con->error);
    exit();
}
$successMessage = "تم تسجيل المشرف بنجاح";
$errorMessage = "حدث خطأ أثناء تسجيل المشرف";

// التحقق من إرسال البيانات عبر الطريقة POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات من النموذج
    $adminUsername = $_POST['adminUsername'];
    $adminEmail = $_POST['adminEmail'];
    $adminAge = $_POST['adminAge'];
    $adminPassword = $_POST['adminPassword'];

    // إجراء استعلام لإدخال بيانات المشرف الجديدة في قاعدة البيانات
    $query = "INSERT INTO admin (admin_UserName, admin_Password, admin_Mail, admin_Phone) 
              VALUES ('$adminUsername', '$adminPassword', '$adminEmail', '$adminAge')";
    // تنفيذ الاستعلام
    if (mysqli_query($con, $query)) {
        // عرض رسالة النجاح في حالة نجاح الاستعلام
        echo "<script>alert('$successMessage');</script>";
    } else {
        // عرض رسالة الفشل في حالة فشل الاستعلام
        echo "<script>alert('$errorMessage');</script>";
    }
}
// إغلاق الاتصال بقاعدة البيانات
mysqli_close($con);
