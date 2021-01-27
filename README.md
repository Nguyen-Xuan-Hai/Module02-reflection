# Module02-reflection
BTVN 26/01 Login file: Login.php,Login_welcome
***
Ngày 27/01<br>
Bài 3 – Reflection<br>
<dl>
-OOP xoay quanh khái niệm Lớp – class. Lớp là bản thiết kế hay bản mẫu\khuôn mẫu được sử dụng để tạo các đối tượng.<br>
<dt>+Các từ khoá public, protected và private còn được gọi là access modifier, tức là các từ khoá dùng để thay đổi mức độ truy cập của các thành phần.</dt>
<dd>Public có thể truy cập tới các phương thức và thuộc tính ở bất cứ đâu, dù trong nộ bộ của lớp hay ở lớp con hay cả bên ngoài lớp đều được</dd>
<dd>Private là thành phần chỉ dành riêng cho nội bộ của lớp, nghĩa là ta không thể truy xuất tới thành phần private ở lớp con hoặc ở bên ngoài lớp.</dd>
<dd>Mức truy cập protected chỉ cho phép truy xuất nội bộ trong lớp đó và lớp kế thừa, riêng ở bên ngoài lớp sẽ không truy xuất được</dd>
<dd>VD:</dd>
<dd>class Foo {<br>
    public $name;<br>
    private $age;<br>
    protected $address;<br>
}
</dd>
</dl>
<dl>Khi sử dụng từ khoá static với các thành phần của một lớp thì chúng có thể được truy cập thông qua tên của lớp mà không cần khởi tạo đối tượng. Một thuộc tính static thì không thể được truy cập thông qua một đối tượng của lớp đó, nhưng một phương thức static thì có thể được gọi thông qua một đối tượng của lớp.
<dt>VD:</dt>
<dd>class Foo<br>
{<br>
    public static $my_static = 'foo';<br>

public function staticValue() {<br>
return self::$my_static;<br>
    } }
</dd>
</dl>
