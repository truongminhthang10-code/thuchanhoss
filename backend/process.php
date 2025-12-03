<?php
// Lấy dữ liệu từ form
$name = $_POST['your_name'] ?? 'Khách';

// Xử lý (ví dụ: viết hoa)
$name = strtoupper($name);
// KHKKJGdff
// Trả kết quả về trình duyệt
echo "<h2>Xin chào: $name</h2>";
echo "<a href='index.html'>Quay lại</a>";
?>
