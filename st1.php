<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include'config.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$int=intval($_GET['id']);
$sql=mysql_query("SELECT `id` FROM `sttrd1` WHERE `id`='$int' ");
$row=mysql_fetch_assoc($sql);
$post = mysql_fetch_array(mysql_query("select * from `sttrd1` WHERE  `id` = '$int' LIMIT 1"));
$tong = mysql_result(mysql_query("SELECT COUNT(*) FROM `sttrd1`"), 0);
$res = mysql_query("SELECT * FROM `sttrd1` LIMIT $tong");
while ($post = mysql_fetch_array($res)){
$access_token = $post['access_token'];
$hari=date('w');
$tgl =date('d');
$bln =date('m');
$thn =date('Y');
switch($hari){
    case 0 : {$hari='Chủ Nhật';}break;
    case 1 : {$hari='Thứ Hai';}break;
    case 2 : {$hari='Thứ Ba';}break;
    case 3 : {$hari='Thứ Tư';}break;
    case 4 : {$hari='Thứ Năm';}break;
    case 5 : {$hari="Thứ Sáu";}break;
    case 6 : {$hari='Thứ 7';}break;
    default: {$hari='UnKnown';}break;
    }
switch($bln){
    case 1 : {$bln='Tháng 1';}break;
    case 2 : {$bln='Tháng 2';}break;
    case 3 : {$bln='Tháng 3';}break;
    case 4 : {$bln='Tháng 4';}break;
    case 5 : {$bln='Tháng 5';}break;
    case 6 : {$bln="Tháng 6";}break;
    case 7 : {$bln='Tháng 7';}break;
    case 8 : {$bln='Tháng 8';}break;
    case 9 : {$bln='Tháng 9';}break;
    case 10 : {$bln='Tháng 19';}break;
    case 11 : {$bln='Tháng 11';}break;
    case 12 : {$bln='Tháng 12';}break;
    default: {$bln='UnKnown';}break;
}
$tatmo = $post['tatmo'];
if($tatmo == 1){
$status = array(
'♥ Đừng bao giờ…

…im lặng…
…k đọc…
…k trả lời…
…hoặc…
… …trả lời cộc lốc…
…những tin nhắn từ người mà bạn thương yêu…
♥ Vì có thể…một ngày…
…bạn k còn có những tin nhắn
yêu thương đó để mà đọc',
'Heo con hỏi heo mẹ

Heo con : Hạnh phúc là gì vậy hở mẹ ?

Heo mẹ : Hạnh phúc cũng như cái đuôi của
con vậy ?

Heo con : Nhưng con không nắm bắt được
nó !

Heo mẹ : Đừng cố quay lại để tìm kiếm hạnh
phúc .Mà hãy để hạnh phúc theo con suốt
cuộc đời !♥',
'Đợi chờ là hạnh phúc. Hay là.
.
Kết thúc của niềm tin.
.
– Đến với nhau là cả đoạn đường dài vất vả
.
– Vậy mà chỉ cần lùi 1 bậc, quay lưng lại, đã thành người lạ
.
– Quan trọng đến mấy.. cứ cách xa.. Rồi cũng trở thành không quen biết
.
– Yêu thương đến mấy cứ im lặng…Rồi cũng sẽ nhạt nhòa !!!',
'Giả vờ…….mạnh mẽ vì không muốn người khác thấy mình yếu đuối
Giả vờ ……………vui vẻ vì không muốn người khác thấy mình cô đơn
Giả vờ …..hạnh phúc vì không muốn người khác thấy mình đau khổ
Giả vờ tươi cười vì không muốn người khác thấy mình rơi nước mắt
Giả vờ …….thoải mái vì không muốn người khác thấy mình chậtvật
Giả vờ …………………giả vờ thôi…',
'Ngã ! Sẽ rất đau nhưng đừng vội khóc.
• Biết đâu sẽ có một bàn tay khác đỡ bạn dậy..
•Nhưng cũng đừng vội cười.
•Vì biết đâu chính bàn tay đã cho bạn hi vọng đó
•Lại một lần nữa…….
•Xô bạn té ngã ..
◘ Vậy nên:
*Lau nước mắt đứng dậy đi bạn nhé….
*Hạnh phúc nào mà chẳng có đau thương ♥',
'♥ Nước mắt :
• Chảy xuôi – Chỉ làm nguôi kí ức…
♥ Nước mắt :
• Chảy ngược – Mới đẫm được niềm đau …
…
♥ Và mình :
• Lạc mất nhau – Chắc là do – Yêu quá vội … phải ko',
'Sống Trên Đời Mới Chỉ Là Một Nửa… ♥ ♣
…Biết Bao Giờ Tìm Được Nửa Thứ 2…♣ ♥
..♪..♫…Trời Sinh Ra 1 1 = 2…♫
..♪.. ♥ ♠..♪..♫…Cớ Sao Lại Có 2 : 2 =1…♫..♪
..♠ người buông tay ♥ 1 người ngã ♥
1 người cất bước ♥ 1 người đau ♥
1 người quay lưg ♥ 1 người khóc♥
1 người ra đi ♥ 1 người buồn ♥
1 người đag quên ♥ 1 người nhớ
♥ 1 người hạh phúc ♥ 1 người đau♥ 1 người ngồi đây lòg nhug nhớ
♥ 1 người ngồi đó tựa vai ai',
'♥ Có những CẢM XÚC
.. Không dễ
dàng ĐIỀU KHIỂN ♥
♥ Có những THÓI QUEN
… Không dễ gì
BỎ ĐI ♥
♥ Có những YÊU THƯƠNG
… Không cách
nào XÓA đi được ♥”
♥Có nhiều điều muốn nói
…Nhưng sợ ai đó không muốn
nghe !
♥
Có nhiều điều muốn nghe….
….Nhưng sao ai đó lại không nói ?
—•♥•—-
♥ღ♥ ♥ღ♥',
'Ai đó im lặng với bạn đó có thể là:
– Họ cảm thấy chán ngấy bạn
– Thấy bạn phiền phức
– Thấy khó chịu khi nói chuyện với bạn
– Tránh xa bạn vì không muốn bị vướng bận
– Đang có 1người khác làm họ vuihơn
– Mệt mỏi khi nói chuyện với bạn.
Và điều chủ yếu là: Ko thích bạn nữa nhưng sợ nói ra sẽ làm bạn đau lòng thôi.',
'Buông tay rồi thôi…
. . . . Coi như chấm hết…
. . . .Kết lại một câu
Bấy lâu là…ảo !
Thế giới ảo…
Nhưng tình cảm là thật. . . .
Đời hiện thực…
Nhưng cứ đóng kịch với nhau…!',
'Tôi vẫn sống 
♥
– Nhẹ nhàng nhưng lạnh nhạt…
♥
– Biết chấp nhận !!
♥
– Và cẩn thận bước đi. . . . .Giấu một chút Cô đơn
♥
. . . .Giữ trong lòng không nói
♥
. . . . . . .Giấu một chút Nỗi buồn
♥
. . .Nơi góc nhỏ trái tim',
'– Có bao giờ…
…Mình được đặt vào nơi
quan trọng nhất trong trái tim
ai đó?
– Có bao giờ…
…Mình được xem là người
duy nhất trong suy nghĩ của ai
đó?
– Có bao giờ…
…Ai đó thực sự sợ mất mình?
– Có bao giờ…
Ai đó cố gắng hết chính
mình … để Mình không bước
khỏi cuộc đời ai đó chưa?',
'~1 nụ cười…
bỗng tan thành nước mắt
~1 hạnh phúc…
bỗng hóa thành đau thương
~1 tình yêu…
Vụt bay trog phút chốc
~Có 1 người….
Lặng lẽ khóc vì 1 ai…
+ Nhớ một người mà không dám nói
+ Nghĩ đến người mà đau nhói trong tim
+ Cố lạnh lùng để quên đi ký ức
+ Gắng gượng cười che dấu sự cô đơn.',
'Con trai à….
♥ Đối với người con gái mà
bạn yêu …
– Bạn có thể để cô ấy khóc.
– Khiến cô ấy tủi thân.
– Làm cô cô ấy buồn.
– Nhưng đừng bao giờ để cô
ấy im
lặng.
…
♥ Bởi vì ….
* Im lặng là nỗi đau sâu sắc
nhất
* Là tiếng khóc đau thương
nhất của 1
người con gái
♥ Bạn hãy biết rằng….
* Cho dù có tâm sự hay
không
* Cô ấy đều muốn kể với bạn
mọi thứ…
Đó là cách cô ấy yêu bạn…!!!
Nhớ nhé con trai…',
'Xin đừng mang đi ..
nụ cười ấy
Vì nụ cười ấy..
ngậm chặt.. trái tim tôi.',
'Đừng ai bước vào cuộc sống của tớ nữa nhé
• Đau thế đủ rồi !!
ღ Thích tớ thôi.. Đừng cố gắng tìm đường vào trái tim tớ..
• Vỡ rồi … !!
ღ Đừng quan tâm tớ nhiều quá để rồi lại bỏ rơi tớ …
• Niềm tin àh ??… Mất rồi
• Hạnh phúc àh ?? … Nhạt nhòa lắm',
'Vì là con gái !
.
Nên hay cãi bướng, cãi không lại thì lăn đùng ra giận.
.
Vì là con gái !
.
Nên ngốc một cách bướng bỉnh, và bướng bỉnh một cách ngốc nghếch.
.
Và

Vì là con gái !
.
Nên dù có mạnh mẽ đến thế nào, thì tận trong sâu thẳm,vẫn cần một bờ vai mỗi khi yếu lòng. ♥',
'Người con trai cũng khóc …
Khóc cho một mối tình dang dở…
Khóc cho 1 nỗi nhớ ko trọn vẹn
Khóc vì 1 người ….
Đặc biệt trong trái tim … ♥ !
Đôi khi là khóc thầm …
Cũng có khi vì quá kìm nén mà
cảm xúc vỡ oà. . . !',
'Trong cuộc đời, chúng ta phải học rất nhiều điều:
– Học quên 1 ai đó đã từng quen…
– Học cách kiềm chế không xem những SMS quan tâm trước kia đã từng có.
– Học cách vui vẻ khi đứng trước một người đã từng rất vui.
– Học cách cứng rắn để quên một người đã từng giúp ta cứng rắn
– Học cách không đau lòng khi nhắc đến tên một ai đó đã từng yêu
– Và học cách dối lòng, mỉm cười để cảm thấy dễ chịu…',
'Hạnh phúc là khi được nhìn thấy ai đó cười
Hạnh phúc là được thấy ai đó hạnh phúc bên người khác
Hạnh phúc là khi ai đó đứng bên cạnh mình
Và hạnh phúc là khi mình nói được 3 tiếng I Love you Bao nhiêu nắng để làm khô 1 dòng sông ?
Bao nhiêu mưa để cuốn trôi 1 sa mạc ?
Bao nhiêu đêm để giết chết 1 nỗi nhớ ?
Bao nhiêu cái hôn để đong đầy 1 tình yêu?
Bao nhiêu cái nắm tay để xóa bỏ khoảng cách ?
Bao nhiêu cái ôm để thấy ta trưởng thành ?
Bao nhiêu lời nói mới làm bạn hiểu tôi ?
Bao nhiêu nước mắt để được tha thứ ?
Bao nhiêu nụ cười để làm vơi khắc khoải ?
Bao nhiêu im lặng để biết ta là của nhau ?
Bao nhiêu chờ đợi để đổi lấy 1 lời…',
'Cậu này
…Tớ không hứa sẽ ở bên Cậu mãi mãi
…Tớ không hứa sẽ yêu Cậu trọn vẹn
Nhưng Tớ hứa
… Tớ sẽ không phản bội niềm tin của Cậu, chừng nào Cậu còn tin Tớ
… Tớ hứa sẽ luôn bên cạnh Cậu … chừng nào Cậu còn cần Tớ
… Tớ hứa sẽ nắm tay Cậu thật chặt chừng nào Cậu còn chưa muốn buông
Tại sao Tớ lại hứa thế ư?
Bởi Tớ không muốn hứa những điều không có hiện thực
Tớ sẽ dành cho Cậu những gì chân thành nhất …',
'Tôi hỏi một ông lão:
-Cái nào quan trọng hơn? Yêu hay
được yêu?
Ông lão trả lời:
-Cái nào quan trọng hơn đối với một con
chim, cánh trái hay cánh phải?',
'♥ Sẽ có một ngày em nhận ra :
– Không phải mùa nắng nào cũng
đẹp
– Không phải cơn mưa nào cũng lạnh…
Và….
– không phải người con trai nào…
….. Cũng yêu em như anh ',
'Nhớ cậu – nhưng sẽ IM LẶNG
Yêu cậu – nhưng sẽ IM LẶNG
Cần cậu – nhưng sẽ IM LẶNG
Vì tớ biết – nói ra
Cậu – cũng sẽ IM LẶNG',
'♥ Ừhm ! ……
Tớ ghen đấy ! …….
Tớ không thích cậu gọi điện thoại cho
người ấy……….
Tớ không thích cậu nhắn tin với người ấy
♥ Ừhm ! …..
Tớ ích kỉ đấy ! …….
Tớ không muốn cậu quan tâm người ấy ……
Tớ muốn cậu quan tâm một mình tớ !!!
Tất cả là vì tớ yêu cậu ^^!',
'♥ Muốn buông tay…
Nhưng . . .
Rồi lại nắm . . .
♥ Muốn bỏ mặc . . .
Nhưng . . .
Lại quan tâm . . .
♥ Muốn vô tình . . .
Nhưng . . .
Trái tim . . .
Không bao giờ làm được .. . .',
'♥ Hãy để anh yêu em nhé!
• Anh sẽ bắt đầu bằng cách nhắn tin
cho em mỗi ngày…
• Có thể anh không đủ tài…
• Để nhắn những tin nhắn ngọt ngào…
• Hay lãng mạn như ai đó đã đang hoặc từng nhắn cho em…
• Nhưng hãy cứ để anh thử, anh thử
em nhé…
• Anh sẽ chỉ nhắn tin để nhắc nhở
rằng…
• Em cần phải giữ sức khỏe mỗi ngày… • Và anh sẽ chúc em ngủ ngoan mỗi tối…
• Nếu em cảm thấy những tin nhắn đó…
• Là nhàm chán và khiến em mất tự
do…
• Thì anh sẽ không làm thế nữa…
•Mà thay vào đó, anh sẽ nói rằng: Anh Nhớ Em… ♥ Hãy để anh yêu em nhé!
• Anh sẽ thực hiện điều đó thật âm
thầm…
• Nếu như em chưa sẵn sàng…
• Thì anh sẽ chỉ lặng lẽ ở bên em…
• Âm thầm và hoàn toàn tự nguyện… • Nếu em chưa sẵn sàng để yêu…
• Vậy anh sẽ bắt đầu…
• Như là một người bạn thật tốt, được
không em… ♥ Hãy để anh yêu em nhé!
• Anh sẽ mang lại cho em những nụ
cười…
• Anh muốn được nhìn thấy em cười
thật nhiều mỗi ngày…
• Hãy cứ vui cười lên em nhé, bởi anh sẽ luôn cạnh bên em…
• Vi với anh, yêu một người chỉ đơn giản
là…
• Luôn được ngắm nhìn người ấy vui vẻ,
hạnh phúc mà thôi…
. ♥ Hãy để anh yêu em nhé!
• Để mỗi lần anh cảm thấy phiền
muộn…
• Cảm thấy mệt mỏi bởi những sóng gió
trong cuộc sống này…
• Ở một nơi xa xăm nào đó trong trái tim…
• Anh có thể tìm được em, thật yên bình
và ấm áp…
• Cho anh quên hết mọi thứ…
• Đã và đang làm anh phải suy nghĩ
quá nhiều, phức tạp… ♥ Và thêm một lần nữa :
• Anh muốn nói với em rằng…
• Hãy Để Anh – Được Yêu Em – Em
Nhé…',
'E à !! Nếu một ngày nào đó e ns đôi mình

ckia tay, a đi đừơng a, e tkeo cuộc tình
ms….a sẽ mỉm cười, a sẽ ko khóc để e ra đi !
Bởi vì a y e, a luôn mong e đc hp, cko dù a
khổ đau ! Tình y ckỉ đẹp khi biết hi sinh
cko người mình y, a sẽ ckúc e tìm đc hp ms xứng đáng hơn a.
AYE',
'♥ Nếu buông tay :
• Là sẽ mất tất cả…
♥ Vậy liệu nắm chặt :
• Có giữ được gì không…
• Khi đã có quá nhiều nỗi đau..
• Người ta sẽ quên mất…
• Cảm giác yêu thương thật sự…
♥ Ta :
• Từ chối nhiều người…
• Để rồi yêu chỉ một người …
♥ Ta :
• Làm đau nhiều người…
• Để rồi lại chỉ đau vì một người…
♥ Và thêm nữa :
• Nếu đã thuộc về nhau…
• Thì có mất nhau cũng sẽ tìm lại
được…
• Còn không là của nhau…
• Thì ngay bên cạnh cũng không
thấy được nhau…
♥ Thực tại và tương lai :
• Không cho phép ta ngoảnh
lại…
• Vì khi ta ngoảnh lại
– Đau buồn sẽ lặp lại lần hai…
♥',
'Đừng bao giờ để ngày mai nói yêu.
Vì…
biết đâu ngày mai chẳng bao giờ đến.',
'Hạnh phúc:
. Là khi Em đưa tay – Anh nắm
. Là khi Em buông tay – Anh giữ
. Là khi Em lạc bước – Anh tìm
. Là khi Em buồn – Anh bên
. Là khi Em sai – Anh mắng
. Là khi Em lạnh – Anh ôm
. Là khi Em ốm – Anh lo
. Là khi Em khóc – Anh dỗ
. Là khi Em đau – Anh xót
. Là khi Em đi chơi – Anh đợi
– Và là khi Anh nói Anh yêu Em',
'♥ Chỉ cần buông chiếc lá cuối cùng
♥ Hoa sẽ nở trong những cành lá mới
♥ Chỉ cần xem nỗi buồn là hạt bụi
♥ Thì bụi buồn theo gió sẽ bay đi♥',
'Buồn nhất không phải là…
Không có ai ở bên cạnh
Mà…
Buồn nhất
Là khi
Có người bước vào cuộc đời mình
Và…
Lại bước ra đi..',
'‘*Hãy nhớ nhữg gì đáng nhớ
.
.
Quên đi nhữg gì cần quên
.
.
thay đổi những gì có thể…Và
.
.
…hãy chấp nhận nhữg gì đã mất… ',
'Nếu 1 ngày pạn muốn quên tớ]
Đừng lặng lẽ ra đi nhé]
Hãy nói cho tớ biết]
Vì tớ sợ cảm giác mất đi 1người mà ko biết lý do',
'5 nguyên tắc để luôn vui vẻ:
1. Rũ bỏ mọi thù hận
2. Quẳg đi mọi lo âu phiền muộn
3. Sốg đơn giản
4. Quên đi tất cả
5. Hãy cười thật nhiều',
'Im lặng…
…K có ngkĩa là từ bỏ.
Hờ hững…
..K có ngkĩa là hết wan tâm
..Và….
đôi lúc xa nkau để biết ta cần nkau nkiều nkư tkế nào!',
'Sao phải đợi đến lúc cô đơn mới nhận ra giá trị của một người bạn?
Sao phải đợi được yêu rồi mới đem lòng yêu người?
Sao phải đợi có một chỗ làm tốt mới bắt đầu công việc?
Sao phải đợi có thật nhiều rồi mới chia sẻ một chút?
Sao phải đợi một thứ không thuộc về mình chứ
Sao phải đợi được yêu rồi mới đem lòng yêu người?
Sao phải đợi có một chỗ làm tốt mới bắt đầu công việc?
Sao phải đợi có thật nhiều rồi mới chia sẻ một chút?
Sao phải đợi thất bại mới nhớ đến một lời khuyên?
Bạn ơi, sao phải đợi? Bởi có thể rằng bạn không biết bạn sẽ đợi đến bao lâu.',
'Chúc ai đọc tin này
*An lành vàoThứ2
*May mắn vàoThứ3
*Nụ cười vàoThứ4
*Thành công vàoThứ5
*Như ý vào Thứ6
*Ấm áp vàoThứ7
*HP vàoChủNhật',
'Đừng . . .
Cố dạy người khác phải sống thế nào.
Nếu bạn chưa bao giờ trải qua cuộc sống giống như họ !!!

Nếu…
]
]
Tớ bước đến…
]
]
Làm cậu khó xử…
]
]
Ừ thì…
]
]
Tớ sẽ bước đi cậu nhé…',
'* Tình yêu :
Cũng giống như đôi giày vậy
– Chiếc đẹp thì ko đi vừa
– Chiếc vừa thì ko đẹp nhất
– Hãy chọn cho mình đôi vừa chân & hợp với bạn
– Chứ đừng chọn đôi đẹp nhất mà ko vừa chân
– Vì … chân bạn sẽ đau & ko thoải mái
Yêu hoàn hảo 1 ng chứ đừng tìm 1 ng hoàn hảo để yêu',
'Có 1 tình bạn  ……………. đã từng là tình yêu
.
Có 1 tình yêu …………………. .đã từng là hạnh phúc

Có 1 Hạnh Phúc ………………………..giờ là kỷ niệm……..

……….Kỷ niệm ấy giờ là nỗi đau………… Nỗi đau nhói lòng…',
'Gặp một người xa lạ bỗng nhớ một người, gặp lại một người quen bỗng thấy mình xa lạ',
'Chẳng có loại tẩy nào có thể xoá sạch được những gì đã có.
Và chẳng có loại bút nào có thể vẽ lại những gì đã mất!',
'Nhớ 1 người mà chẳng thể nói …yêu một 1 người mà mãi chẳng quên…

Là bởi vì mình yêu người ta….nên mình được quyền thấy đau khi nhìn người ta bên ai khác..',
'Quả thật, giờ đây mình đã hiểu, không phải cứ xa là nhớ, mà cảm thấy nhớ nhất là ở gần nhưng chẳng phải của nhau, mà coi nhau như người xa lạ..',
'Đôi khi bạn cần phải chạy thật xa…Để thấy ai sẽ chạy theo bạn?
Đôi khi bạn cần phải nói nhỏ hơn…Để thấy ai đang nghe bạn?
Đôi khi bạn cần phải có những quyết định sai lầm…Để thấy ai đang ở đó giúp bạn sữa chữa?
Đôi khi bạn cần phải để người yêu bạn đi thật xa…Để thấy người đó có đủ yêu bạn để trở lại hay không?',
'– Khi đối diện với 1 lựa chọn khó khăn.
– Bạn hãy tung đồng xu lên
– Ở đây ko phải là chọn sấp hay ngửa
….. mà là …..
….. khi đồng xu đang rơi
……… Bản thân mới biết ta hy vọng điều gì',
'Sai lầm thứ nhất của mình là đã quá bi lụy vì yêu.
Và sai lầm thứ 2 là đã vì yêu mà vất bỏ lòng tự trọng',
'Sai lầm của 1 người con gái là quá tin vào 1 người con trai.
Sai lầm của 1 người con trai là quá thờ ơ nên đánh mất người con gái tin mình.',
'Đừng đợi phải nhìn thấy một nụ cười…Rồi mới mỉm cười lại!
Đừng đợi đến khi được yêu thương…Rồi mới yêu thương!
Đừng đợi đến khi cô đơn…Rồi mới nhớ ra bạn bè!
Đừng đợi đén khi có một công việc vừa ý…Rồi mới làm việc!
Đừng đợi đến khi có thật nhiều…Rồi mới chia sẻ đôi chút!
Đừng đợi đến khi vấp ngã…Rồi mới nhớ đến những lời khuyên!
Đừng đợi đến khi có thật nhiều thời gian…Rồi mới khởi đầu công việc!
Đừng đợi đến khi làm người khác buồn lòng…Rồi mới xin lỗi!
Đừng đợi…….Vì không biết…????…Bạn sẽ phải đợi bao lâu…????!!!!',
'Chỉ những yêu thương thực sự mới làm người ta . . mong nhớ
Chỉ những hạnh phúc thực sự mới khiến người ta cố gắng . . giữ gìn !..',
'Nhiều lúc tỏ ra thật vô tình…để rồi đêm về nhận ra ta đang khóc…
Nhiều lúc tỏ ra thật nhẫn tâm…để rồi đêm về nhận ra ta đang đau…
Nhiều lúc tỏ ra thật cứng cỏi…để rồi đêm về nhận ra ta thật yếu mềm…
Nhiều lúc cười thật tươi cùng ai…rồi đêm về nhận ra ta cô độc..',
'cái mạnh mẽ hôm nay !
– được tạo nên từ. . .đắng cay hôm qua. . .
-cũng như…
– cái lạnh lùng hôm nay !
– được tạo nên từ. . .sự phản bội hôm qua. . .',
'Anh à!
*Em cho người khác mượn bờ vai của em nhé?
…….bởi anh đâu cần nó nữa.
*Em cho ai đó chút ít hơi ấm từ bàn tay em được ko?
…….bởi tay em nhỏ bé không đủ để sưởi ấm trái tim anh.
*Cho em rẽ sang con đường nhỏ bé khác nhé anh?
…….vì đường anh tuy rộng nhưng đã không còn chỗ cho em nữa rồi!!',
'Con gái…
Vì yêu một người mà trưởng thành hơn …
Còn con trai..
Trưởng thành là khi…Mất đi một người. ..',
'Nhiều lúc muốn nhắn cho ai đó trước., nhưg lại thôi..!
K phải vì nhút nhát, mà chỉ muốn ai đó 1 lần nhắn tin trước..!
K phải vì rụt rè, mà chỉ lo có khi lại làm phiền ai đó..!
K phải vì sợ, mà chỉ k muốn đối diện với sự vô tâm và bị bỏ rơi
Chỉ dám mở điện thoại, vào danh bạ nhìn lại số rồi… thoát..!',
'Kẻ đáng thương nhất ko phải kẻ thiếu thốn tình cảm mà chính là kẻ có rất nhiều mà ko biết trân trọng nó.',
'Ko phải cứ tạnh mưa thì sẽ có cầu vồng……
Cũng như là….. Ko phải cứ có 1 người hết lòng yêu thì sẽ có 1 người đáp lại……
Và….Ko phải cứ có 1 người mòn mỏi chờ đợi……. thì sẽ có 1 người trở về',
'Thế giới ko em – Bình thường thật
Thế giới ko anh – Khó khăn biết nhường nào',
'Nước vô tình, ngàn năm trôi mãi
Mây vô tình, mây mãi vẫn bay
Trăng vô tình, trăng đùa với gió
Người vô tình, sao hiểu thấu lòng tôi',
            );
$message = $status[rand(0,count($status)-1)];
auto('https://graph.facebook.com/me/feed?access_token='.$access_token.'&message='.urlencode($message).'&method=post&subject=+');
  echo' Post : <font color="blue"><b>'.$message.'</font></b><br/>';
}}
function auto($url){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch,CURLOPT_URL,$url);
   $cx=curl_exec($ch);
  curl_close($ch);
  return($cx);
  }

?>
