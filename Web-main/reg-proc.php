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

// تعيين رسائل النجاح والفشل
$successMessage = "تم تسجيل المستخدم بنجاح";
$errorMessage = "حدث خطأ أثناء تسجيل المستخدم";

// التحقق مما إذا تم إرسال البيانات بطريقة POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات من النموذج
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    // إجراء استعلام لإدخال بيانات المستخدم الجديدة في قاعدة البيانات
    $query = "INSERT INTO customers (Customer_UserName, Customer_Password, Customer_Mail, Customer_Phone) VALUES ('$username', '$password', '$email', '$age')";

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
