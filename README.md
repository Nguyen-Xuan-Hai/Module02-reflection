# Module02-reflection
***
Ngày 02/02/2021<br>
Bài 7 - Reflection
<dl>SOLID là gì
<dt>-S : Single responsibility priciple</dt>
  <dd>+ý nghĩa là một class chỉ nên giữ một trách nhiệm duy nhất. Một class có quá nhiều chức năng sẽ trở nên cồng kềnh và trở nên khó đọc, khó maintain</dd>
  <dt>-O :Open/Closed principle</dt>
  <dd>+Không được sửa đổi một Class có sẵn, nhưng có thể mở rộng bằng kế thừa.</dd>
  <dt>-L :Liskov substitution principle</dt>
  <dd>+Các đối tượng (instance) kiểu class con có thể thay thế các đối tượng kiểu class cha mà không gây ra lỗi.</dd>
  <dt>-I :Interface segregation principle</dt>
  <dd>+Thay vì dùng 1 interface lớn, ta nên tách thành nhiều interface nhỏ, với nhiều mục đích cụ thể.</dd>
  <dt>-D :Dependency inversion principle</dt>
  <dd>+Các module cấp cao không nên phụ thuộc vào các modules cấp thấp. Cả 2 nên phụ thuộc vào abstraction.</dd>
  <dd>+Interface (abstraction) không nên phụ thuộc vào chi tiết, mà ngược lại (Các class giao tiếp với nhau thông qua interface (abstraction), không phải thông qua implementation.)</dd>
</dl><br>
<dl>
  <dt>-Các cách thực hành clean code</dt>
  <dd>+Sử dụng tên biến có ý nghĩa và dễ hiểu</dd>
  <dd>+Sử dụng cùng từ vựng cho cùng một loại biến</dd>
  <dd>+Đặt tên sao cho dễ tìm kiếm</dd>
  <dd>+Tránh lồng (nesting) quá nhiều và nên return sớm</dd>
  <dd>+Tránh hack não người đọc</dd>
  <dd>+Đừng thêm những nội dung không cần thiết</dd>
  <dd>+Sử dụng đối số mặc định thay vì phải kiểm tra bằng biểu thức điều kiện</dd>
  <dd>+Đối số của hàm (ít hơn hoặc bằng 2 là lý tưởng)</dd>
  <dd>+Hàm chỉ thực hiện một chức năng</dd>
  <dd>+Tên hàm nên thể hiện chức năng của hàm</dd>
  <dd>+Hàm chỉ nên có độ trừu tượng một cấp</dd>
  <dd>+Đừng sử dụng cờ như là một đối số của hàm</dd>
  <dd>+Đừng viết hàm global</dd>
  <dd>+Đừng sử dụng Singleton pattern</dd>
  <dd>+Đóng gói điều kiện</dd>
  <dd>+Tránh điều kiện phủ định</dd>
  <dd>+Xóa dead code</dd>
  <dd>+Sử dụng đối tượng đóng gói</dd>
  <dd>+Ưu tiên thành phần hơn kế thừa</dd>
  <dd>+Tránh viết fluent interfaces</dd>
  <dd>+Tuân thủ SOLID</dd>
  <dd>+Nguyên lý phân tách interface</dd>
  <dl>
***<br>
Ngày 01/02/2021<br>
Bài 6 - Reflection
<dl>Abstract class và class thường
  <dt>Giống nhau:</dt>
  <dd>-Đều là class</dd>
  <dd>-Có thể chứa thuộc tính, phương thức</dd>
  <dt>Khác nhau:</dt>
  <dd>-Abstract class có tính trừu tượng rất cao, không thể tạo được các đối tượng của lớp đó.</dd>
  <dd>-Phương thức được khai báo nhưng không có phần thân,ngoài ra nó còn có thể có thuộc tính và phương thức bình thường</dd>
  <dd>-Lớp bình thường kế thừa lớp abstract thì phải triển khai tất cả phương thức abstract</dd>
</dl>
<dl>Interface
<dt>là một chức năng mà bạn có thể thêm và bất kì class nào. Từ chức năng ở đây không đồng nghĩa với phương thức (hoặc hàm). Interface có thể bao gồm nhiều hàm/phương thức và tất cả chúng cùng phục vụ cho một chức năng.</dt>
  <dd>-Một class có thể thực hiện nhiều interface</dd>
  <dd>-Interface có thẻ kế thừa lẫn nhau</dd>
</dl>
###
***<br>
Ngày 29/01/2021<br>
Bài 5 - Reflection <br>
<dl>-<strong>Từ khóa final</strong>
  <dt>-Final là không cho phép phương thức đó bị ghi đè, nghĩa là chỉ cần ở lớp cha có từ khóa final là lớp đó sẽ không được kế thừa và ghi đè.</dt>
    <dd>class ConNguoi<br>
{
    private $soChan = 2;<br>

   final public function getSoChan()<br>
    {
        return $this->soChan;<br>
    }
}
<br>
//Sai vì không thể override lại final phương thức
class NguoiLon extends ConNguoi<br>
{<br>
    public function getSoChan()
    {<br>

    }
}<br>
//Fatal error: Cannot override final method ConNguoi::getSoChan()<dd>
</dl><br>
<dl><strong>Sự khác nhau giữa Overried và Overload</strong>
<dt>Override</dt>
  <dd>-Thay đổi hành vi hiện tại của phương thức.</dd>
  <dd>-Thể hiện tính đa hình tại run time.</dd>
  <dd>-Danh sách tham số phải giống nhau.</dd>
  <dd>-Phương thức ghi đè ở lớp con phải có quyền truy cập bằng hoặc lớn hơn phương thức được ghi đè ở lớp cha.</dd>
  <dd>-Kiểu trả về bắt buộc phải giống nhau.</dd>
  <dd>-Xảy ra giữa 2 class có quan hệ kế thừa</dd>
  <dt>Overload</dt>
  <dd>-Thêm hoặc mở rộng cho hành vi của phương thức.</dd>
  <dd>-Thể hiện tính đa hình tại compile time.</dd>
  <dd>-Danh sách tham số có thể khác nhau.</dd>
  <dd>-Các phương thức nạp chồng có thể có quyền truy cập khác nhau.</dd>
  <dd>-Kiểu trả về có thể khác nhau.</dd>
  <dd>-Xảy ra trong phạm vi cùng 1 class.</dd>
</dl>
<dl><strong>Constructor</strong>
  <dt>+là một phương thức đặc biệt, được thực thi ngay khi tạo ra đối tượng. Nó thường được sử dụng để khởi tạo các chức năng như gán thuộc tính với giá trị hay tạo ra các đối tượng khác từ đối tượng vừa tạo.</dt>
  <dd>VD: class demo<br>
{
    function __construct()<br>
    {
    }<br>
}</dd>
  <dt>-PHP không cho phép nhiều construct trong 1 class.</dt>
  <dt>-Khi nào thì lớp cha không cho phép lớp con kế thừa các thuộc tính và phương thức.</dt>
  <dd>+Khi lớp cha khai báo mức độ truy xuất là private</dd>
</dl>
###
***<br>
Ngày 28/01/2021 <br>
Bài 4 - Reflection<br>
<dl>
    <dt>-Namespace (tên miền không gian) là một hình thức để đóng gói các hạng mục có liên quan lại với nhau</dt>
    <dt>-Trong PHP, namespace được thiết kế để giải quyết 2 vấn đề mà các tác giả của các thư viện và ứng dụng thường gặp phải khi cố gắng tạo ra các đối tượng hoặc hàm có thể tái sử dụng được.</dt>
    <dd>+Các tên gọi bị trùng nhau giữa những lớp/hàm được tạo ra, so với các lớp/hàm có sẵn của PHP, hoặc các lớp/hàm do một người khác viết.</dd>
    <dd>+Khả năng để rút ngắn tên gọi thông qua việc đặt các bí danh (alias) nhằm giữ cho mã nguồn ngắn gọn</dd>
    </dl><br>
    <dl>PHP cũng là một ngôn ngữ lập trình nên nó cũng có cung cấp các thư viện xử lý JSON giúp lập trình viên giải quyết nó dễ dàng. Chúng ta có hai hàm đó là hàm json_decode và json_encode:
    <dt>json_decode: Hàm này mục đích chuyển một chuỗi JSON sang dạng mảng hoặc object,hàm này có cú pháp như sau: json_decode($json_string, $assoc)</dt>
    <dd>$json_string: là chuỗi JSON</dd>
    <dd>$assoc có hai giá trị true / false. Nếu true thì kết quả nó trả về là dạng  array, ngược lại nếu false thì kết quả trả về dạng object. Mặc định là false.</dd>
    <dt>json_encode: Hàm sẽ chuyển một mảng trong PHP hoặc object trong PHP thành chuỗi JSON.</dt>
    </dl>
    <br>
   <dl>-Cách dùng Composer : Autoload (Tránh cho việc phải dùng nhiều lần câu lệnh include hay require trong một tập kỹ thuật clean code)
    <dt>VD:require __DIR__ . '/vendor/autoload.php';</dt>
    <dd>{<br>
    "autoload": {<br>
        "psr-4": {"Acme\\": "src/"}<br>
    }<br>
}</dd>
</dl>
    
***
Ngày 27/01/2021<br>
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
