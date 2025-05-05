<?php

$servername = "localhost"; // اسم الخادم
$username = "root"; // اسم مستخدم قاعدة البيانات
$password = ""; // كلمة مرور قاعدة البيانات
$dbname = "login"; // اسم قاعدة البيانات

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من وجود اتصال
if ($conn->connect_error) {
  die("فشل الاتصال: " . $conn->connect_error);
}
echo "تم الاتصال بقاعدة البيانات بنجاح";

// يمكنك هنا تنفيذ استعلامات SQL الخاصة بك

// إغلاق الاتصال عند الانتهاء
$conn->close();

?>