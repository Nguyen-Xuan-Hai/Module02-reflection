# Module02-reflection
***
Ngày 18-02-2021 <br>
Bài 11 - Reflection
<dl>
<dt>-Thuật toán tìm kiếm tuyến tính</dt>
  <dd>+Linear Search là một giải thuật tìm kiếm rất cơ bản. Trong kiểu tìm kiếm này, một hoạt động tìm kiếm liên tiếp được diễn ra qua tất cả từng phần tử. Mỗi phần tử đều được kiểm tra và nếu tìm thấy bất kỳ kết nối nào thì phần tử cụ thể đó được trả về; nếu không tìm thấy thì quá trình tìm kiếm tiếp tục diễn ra cho tới khi tìm kiếm hết dữ liệu.</dd>
  <dt>Vd:</dt>
  <dd><pre>$numbers = range(1, 200, 5);

if (search($numbers, 31)) { 
    echo "Found"; 
} else { 
    echo "Not found"; 
}</pre>
</dd>
<dt>-Thuật toán tìm kiếm nhị phân</dt>
<dd>+Binary Search tìm kiếm một phần tử cụ thể bằng cách so sánh phần tử tại vị trí giữa nhất của tập dữ liệu. Nếu giá trị trùng nhau thì chỉ mục của phần tử được trả về. Nếu phần tử cần tìm là lớn hơn giá trị phần tử giữa thì phần tử cần tìm được tìm trong mảng con nằm ở bên phải phần tử giữa; nếu không thì sẽ tìm ở trong mảng con nằm ở bên trái phần tử giữa. Tiến trình sẽ tiếp tục như vậy trên mảng con cho tới khi tìm hết mọi phần tử trên mảng con này.</dd>
<dt>Vd:</dt>
<dd><pre>$numbers = range(1, 200, 5); 

$number = 31;
if (binarySearch($numbers, $number) !== FALSE) { 
    echo "$number Found \n"; 
} else { 
    echo "$number Not found \n"; 
} 

$number = 500; 
if (binarySearch($numbers, $number) !== FALSE) { 
    echo "$number Found \n"; 
} else { 
    echo "$number Not found \n"; 
}</pre> </dd>
</dl>
***<br>
Ngày 05/02/2021<br>
Bài 10 - Reflection
<dl>
<dt>SPL là bộ thư viên chuẩn của PHP, nó gồm tập hợp các interface, abstract class nhằm giải quyết các bài toán phổ biên.</dt>
  <dd>-Các thành phần của SPL</dd>
  <dd>+Predefined Constants là danh sách các hằng số :số pi, số E,...</dd>
  <dd>+Datastructures chứa danh sách các lớp co khả năng làm việc với cấu trúc, dữ liệu khác nhau LinkList, Stack, Queue, Heaps,...</dd>
  <dd>+Interator: Chứa các lớp cho phép có khả năng thực hiện các phép lặp để duyệt các cấu trúc khác nhau tùy vào cấu trúc dữ liệu.</dd>
  <dd>+Danh sách các Interface</dd>
  <dd>+Exception là danh sách điều khiển các lớp ngoại lệ</dd>
  <dd>+File Handling cung cấp các lớp làm việc với file trong hệ thống.</dd>
  <dd>+SPL Funtions cung cấp các hàm hỗ trợ cần thiết.</dd>
  <dd>+Miscellaneous Classes và Interface.</dd>
</dl>
<dl>Các loại cấu trúc dữ liệu: -PHP DATASTRUCTURES
<dt>-DoublyLinkedList:</dt>
  <dd>+Là một danh sách liên kết đôi, các node được liên kết với nhau theo hai hướng.</dd>
  <dd>+PHP cung cấp sẵn các lớp SplDoublyLinkedList là SplStack và SplQueue</dd>
  <dt>-HEAP là một dạng cấu trúc gần như Tree, trong đó mỗi node có giá trị lớn hơn hoặc bằng các node con của nó.</dt>
  <dd>+PHP cung cấp sẵn các lớp thuộc Heaps bao gồm SplHeap và SplPriorityQueue.Trong SplHeap có SplMaxHeap và SplMinHeap</dd>
  <dt>-ARRAYS là cấu trúc dữ liệu trong đó lưu trữ các phần tử theo hình thức liên tiếp nhau , truy cập dựa theo chỉ số.</dt>
  <dd>+PHP cung cấp lớp có sẵn SplFixedArray</dd>
  <dd>+Lưu ý cấu trúc Arrays khác khái niệm mảng trong PHP.Mảng trong PHP được triển khai theo hình thức Hashtable có trật tự.</dd>
  <dt>-MAP là cấu trúc dữ liệu trong đó các phần tử được quản lý theo cặp key-value.</dt>
  <dd>+PHP cung cấp lớp SplObjectStorage</dd>
  <dd>+Mảng trong PHP cũng có thể coi là cấu trúc Map.Trong đó key có kiểu dữ liệu là int hoặc string.</dd>
</dl>
***<br>
Ngày 04/02/2021<br>
Bài 9 - Reflection
<dl>
<dt>-Cấu trúc dữ liệu ngăn xếp (Stack)</dt>
  <dd>+Đặc điểm là làm cho ngăn xếp trở thành cấu trúc dữ liệu dạng LIFO. LIFO là viết tắt của Last-In-First-Out. Ở đây, phần tử được đặt vào (được chèn, được thêm vào) cuối cùng sẽ được truy cập đầu tiên. </dd>
  <dt>-Các hoạt động cơ bản trên cấu trúc dữ liệu ngăn xếp</dt>
  <dd>+Hoạt động push(): lưu giữ một phần tử trên ngăn xếp.</dd>
  <dd>+Hoạt động pop(): xóa một phần tử từ ngăn xếp.</dd>
  <dd>+Hoạt động peek(): lấy phần tử dữ liệu ở trên cùng của ngăn xếp, mà không xóa phần tử này.</dd>
  <dd>+Hoạt động isFull(): kiểm tra xem ngăn xếp đã đầy hay chưa.</dd>
  <dd>+Hoạt động isEmpty(): kiểm tra xem ngăn xếp là trống hay không.</dd>
</dl>
<dl>
<dt>-Cấu trúc dữ liệu hàng đợi (Queue)</dt>
  <dd>+Một đầu luôn luôn được sử dụng để chèn dữ liệu vào (hay còn gọi là sắp vào hàng) và đầu kia được sử dụng để xóa dữ liệu (rời hàng). Cấu trúc dữ liệu hàng đợi tuân theo phương pháp First-In-First-Out, tức là dữ liệu được nhập vào đầu tiên sẽ được truy cập đầu tiên.</dd>
  <dt>-Các hoạt động cơ bản trên cấu trúc dữ liệu hàng đợi</dt>
  <dd>+Hoạt động enqueue(): thêm (hay lưu trữ) một phần tử vào trong hàng đợi.</dd>
  <dd>+Hoạt động dequeue(): xóa một phần tử từ hàng đợi.</dd>
  <dd>+Phương thức peek(): lấy phần tử ở đầu hàng đợi, mà không xóa phần tử này.</dd>
  <dd>+Phương thức isFull(): kiểm tra xem hàng đợi là đầy hay không.</dd>
  <dd>+Phương thức isEmpty(): kiểm tra xem hàng đợi là trống hay hay không.</dd>
</dl>
<dl>
<dt>-Cấu trúc cây (tree)</dt>
  <dd>+Cấu trúc Tree hoạt động theo nguyên tắc phân cấp, trong đó có mối quan hệ cha-con giữa các nút (node). Node mà không có cha thì được gọi là root (nút gốc), node mà không có con thì được gọi là leaf (nút lá). Những node có chung cha thì được gọi là siblings (anh em). Khái niệm edges (cạnh) được dùng để chỉ đến đường kết nối giữa các node.</dd>
  <dt>-Thêm node vào trong Tree</dt>
  <dd>+Đây là một cách triển khai đơn giản, theo chiến thuật "chia để trị"</dd>
  <dd>+Tất cả những phần tử nhỏ hơn phần tử hiện tại thì chuyển sang bên trái, tất cả những phần tử lớn hơn thì chuyển sang bên phải, tất cả những phần tử trùng lặp (đã tồn tại trước đó) thì sẽ bị từ chối (không thêm vào)</dd>
  <dt>Duyệt qua các phần tử của tree</dt>
  <dd>+pre-order - duyệt node hiện tại rồi sau đó sang cây bên trái và cây bên phải</dd>
  <dd>+in-order (đối xứng) - duyệt bên trái trước, sau đó duyệt node hiện tại, rồi duyệt node bên phải</dd>
  <dd>+post-order - duyệt bên trái trước, sau đó bên phải, rồi duyệt node hiện tại</dd>
  <dd>+level-order (duyệt theo bề rộng) - duyệt node hiện tại, sau đó duyệt tất cả các node anh em (siblings), rồi chuyển sang duyệt những node ở level tiếp theo</dd>
</dl>
***<br>
Ngày 03/02/2021<br>
Bài 8 - Reflection
<dl>
<dt>-Cấu trúc dữ liệu là hình thức tổ chức một nhóm dữ liệu bao gồm các chức năng:</dt>
  <dd>+Lưu trữ dữ liệu</dd>
  <dd>+Cung cấp các phương thức để thao tác với dữ liệu.</dd>
  <dt>-Các cấu trúc dữ liệu thông dụng</dt>
  <dd>Set (Tập hợp): Nhóm các phần tử không trùng nhau</dd>
  <dd>List (Danh sách): Nhóm ác phần tử có thể trùng nhau</dd>
  <dd>Stack: Nhóm các phần tử theo trật tự first-in/last-out (vào trước/ra sau)</dd>
  <dd>Queue: Nhóm các phần tử theo trật tự first-in/first-out (vào trước/ra trước)</dd>
  <dd>Map (Bản đồ): Lưu trữ các cặp key/value</dd>
  <dd>Tree (Cây): Lưu trữ các phần tử theo mối quan hệ cha-con</dd>
  <dd>Graph (Đồ thị): Lưu trữ các phần tử theo mối quan hệ mạng lưới</dd>
</dl>
<dl> ArrayList
<dt>-Mảng có thể lưu giữ một số phần tử cố định và các phần tử này nền có cùng kiểu.</dt>
  <dt>-Ưu điểm</dt>
  <dd>+Truy câp phàn tử vơi thời gian hằng số O(1)</dd>
  <dd>+Sử dụng bộ nhớ hiệu quả</dd>
  <dd>+Tính cục bộ về bộ nhớ</dd>
  <dt>-Nhược điểm</dt>
  <dd>+Không thể thay đổi kích thước của mảng khi chương trình dang thực hiện</dd>
  <dt>-Phép toán cơ bản được hỗ trợ bởi mảng</dt>
  <dd>+Duyệt: In tất cả các phần tử mảng theo cách in từng phần tử một.</dd>
  <dd>+Chèn: Thêm một phần tử vào mảng tại chỉ mục đã cho.</dd>
  <dd>+Xóa: Xóa một phần tử từ mảng tại chỉ mục đã cho.</dd>
  <dd>+Tìm kiếm: Tìm kiếm một phần tử bởi sử dụng chỉ mục hay bởi giá trị.</dd>
  <dd>+Cập nhật: Cập nhật giá trị một phần tử tại chỉ mục nào đó.</dd>
</dl>
<dl>Linked List
<dt>-Danh sách liên kết là một cấu trúc dữ liệu bao gồm một nhóm các nút (node) tạo thành một chuỗi. Mỗi nút gồm dữ liệu ở nút đó và tham chiếu đến nút kế tiếp trong chuỗi.</dt>
  <dt>-Các loại Danh sách liên kết (Linked List)</dt>
  <dd>+Danh sách liên kết đơn (Simple Linked List): chỉ duyệt các phần tử theo chiều về trước.</dd>
  <dd>+Danh sách liên kết đôi (Doubly Linked List): các phần tử có thể được duyệt theo chiều về trước hoặc về sau.</dd>
  <dd>+Danh sách liên kết vòng (Circular Linked List): phần tử cuối cùng chứa link của phần tử đầu tiên như là next và phần tử đầu tiên có link tới phần tử cuối cùng như là prev.</dd>
  <dt>-Các hoạt động cơ bản trên Danh sách liên kết</dt>
  <dd>+Hoạt động chèn: thêm một phần tử vào đầu danh sách liên kết.</dd>
  <dd>+Hoạt động xóa (phần tử đầu): xóa một phần tử tại đầu danh sách liên kết.</dd>
  <dd>+Hiển thị: hiển thị toàn bộ danh sách.</dd>
  <dd>+Hoạt động tìm kiếm: tìm kiếm phần tử bởi sử dụng khóa (key) đã cung cấp.</dd>
  <dd>+Hoạt động xóa (bởi sử dụng khóa): xóa một phần tử bởi sử dụng khóa (key) đã cung cấp.</dd>
  <dt>-Danh sách liên kết đôi (Doubly Linked List) : hoạt động duyệt qua các nút có thể được thực hiện theo hai chiều: về trước và về sau một cách dễ dàng khi so sánh với Danh sách liên kết đơn. </dt>
  <dt>-Các hoạt động cơ bản trên Danh sách liên kết đôi</dt>
  <dd>+Hoạt động chèn: thêm một phần tử vào vị trí đầu của Danh sách liên kết.</dd>
  <dd>+Hoạt động xóa: xóa một phần tử tại vị trí đầu của Danh sách liên kết.</dd>
  <dd>+Hoạt động chèn vào cuối: thêm một phần tử vào vị trí cuối của Danh sách liên kết.</dd>
  <dd>+Hoạt động xóa phần tử cuối: xóa một phần tử tại vị trí cuối của Danh sách liên kết.</dd>
  <dd>+Hoạt động chèn vào sau: thêm một phần tử vào sau một phần tử của Danh sách liên kết.</dd>
  <dd>+Hoạt động xóa (bởi key): xóa một phần tử từ Danh sách liên kết bởi sử dụng khóa đã cung cấp.</dd>
  <dd>+Hiển thị danh sách về phía trước: hiển thị toàn bộ Danh sách liên kết theo chiều về phía trước.</dd>
  <dd>+Hiển thị danh sách về phía sau: hiển thị toàn bộ Danh sách liên kết theo chiều về phía sau.</dd>
  <dt>-Danh sách liên kết vòng (Circular Linked List) là phần tử đầu tiên trỏ tới phần tử cuối cùng và phần tử cuối cùng trỏ tới phần tử đầu tiên</dt>
  <dt>-Các hoạt động cơ bản trên Danh sách liên kết vòng</dt>
  <dd>+Hoạt động chèn: chèn một phần tử vào vị trí bắt đầu của Danh sách liên kết vòng.</dd>
  <dd>+Hoạt động xóa: xóa một phần tử của Danh sách liên kết vòng.</dd>
  <dd>+Hiển thị: hiển thị toàn bộ Danh sách liên kết vòng.</dd>
</dl>
***<br>
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
