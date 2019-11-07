<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>HotFB.Org - Flip Text</title>
<style type="text/css">
textarea { font-family: "Arial Unicode MS", Batang }
</style>
<script language="JavaScript">
function flip() {
 var result = flipString(document.f.original.value.toLowerCase());
 document.f.flipped.value = result;
}

function flipString(aString) {
 var last = aString.length - 1;
 var result = new Array(aString.length)
 for (var i = last; i >= 0; --i) {
  var c = aString.charAt(i)
  var r = flipTable[c]
  result[last - i] = r != undefined ? r : c
 }
 return result.join('')
}

var flipTable = {
a : '\u0250',
b : 'q',
c : '\u0254', //open o -- from pne
d : 'p',
e : '\u01DD',
f : '\u025F', //from pne
g : '\u0183',
h : '\u0265',
i : '\u0131', //from pne
j : '\u027E',
k : '\u029E',
//l : '\u0283',
m : '\u026F',
n : 'u',
r : '\u0279',
t : '\u0287',
v : '\u028C',
w : '\u028D',
y : '\u028E',
'.' : '\u02D9',
'[' : ']',
'(' : ')',
'{' : '}',
'?' : '\u00BF', //from pne
'!' : '\u00A1',
"\'" : ',',
'<' : '>',
'_' : '\u203E',
';' : '\u061B',
'\u203F' : '\u2040',
'\u2045' : '\u2046',
'\u2234' : '\u2235',
'\r' : '\n' //thank you, Yeeliberto
}

for (i in flipTable) {
  flipTable[flipTable[i]] = i
}

</script>
</head>
<body>
<center>
<h1>Tạo Chữ Ngược</h1>

<form name="f">
<table width="450">
	<tr>
    	<td>Nội Dung:</td>
        <td><textarea rows="5" cols="50" name="original" onKeyUp="flip()"></textarea><input value="Tạo" onClick="flip()" type="button"></td>
    </tr>
    <tr>
    	<td>Đã Tạo:</td>
        <td><textarea rows="5" cols="50" name="flipped"></textarea></td>
    </tr>
</table>
</form>
<br><a href="tool/status/duoi.php" target="_blank"> Tạo chữ gạch dưới</a><br><a href="tool/status/trenduoi.php" target="_blank"> Tạo chữ gạch trên dưới</a><br><a href="tool/status/full.php" target="_blank"> Tạo chữ khung</a><br>


</center>
</body>
</html>