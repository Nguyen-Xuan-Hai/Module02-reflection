# Module02-reflection
BTVN Login file: Login.php,Login_welcome
***
Ngày 26/01
Bài 2 – Reflection
-Hàm
+Hàm là một khối các câu lệnh được được sử dụng nhiều lần trong một chương trình
+Hàm sẽ không thực thi ngay lập tức khi trang được tải
+Hàm sẽ thực thi bởi lời gọi hàm
-Mảng dùng để lưu giữ rất nhiều giá trị bên trong một biến
-Cách duyệt mảng Associative
VD:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
-Lệnh Required,Required_once,iclude,include_one.
+Câu lệnh require sẽ tung ra thông báo lỗi nghiêm trọng (E_COMPILE_ERROR) và dừng thực thi trang hiện tại
+Lệnh require_once có thể được sử dụng để chèm một tập tin php trong một số tập tin khác, khi bạn có thể cần phải bao gồm các tập tin được gọi nhiều hơn một lần. Nếu nó đã được chèn vào rồi, thì những vị trí chèn sau sẽ bỏ qua.
+Câu lệnh include sẽ tung ra một cảnh báo (E_WARNING) và tiếp tục thực thi trang hiện tại.
+Lệnh include_once có thể được sử dụng để chèm một tập tin php trong một số tập tin khác, khi bạn có thể cần phải bao gồm các tập tin được gọi nhiều hơn một lần. Nếu nó đã được chèn vào rồi, thì những vị trí chèn sau sẽ bỏ qua.
