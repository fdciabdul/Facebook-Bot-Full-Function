<?php
session_start();
session_destroy();
header('location: index.php?i=Đăng xuất thành công. Nhớ cập nhật bot thường xuyên nha');
?>