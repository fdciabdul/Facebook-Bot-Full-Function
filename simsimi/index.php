<!DOCTYPE html>
<html lang="vi">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; UTF-8" />
<meta http-equiv="cache-control" content="cache" />
<meta http-equiv="content-language" content="vi" />

<!-- SEO -->

<meta name="description" content="simi hệ thống chát tự động, dạy dỗ simi, dạy simi học, simi trả lời cmt fb, simi trả lời inbox fb" />
<meta name="author" content="DS" />
<meta name="copyright" content="DS" />
<meta name="robots" content="index, follow" />
<meta property="fb:admins" content="https://www.facebook.com/DuySexyy" />
<meta property="og:url" content="http://hotfb.org" />
<meta property="og:type" content="website" />
<meta property="og:description" content="simi hệ thống chát tự động, dạy dỗ simi, dạy simi học, simi trả lời cmt fb, simi trả lời inbox fb" />
<meta property="og:locale" content="vi_VN" />
<meta property="article:author" content="DS" />
<meta property="article:publisher" content="https://www.facebook.com/DuySexyy" />
<link type="image/x-icon" href="https://s3.amazonaws.com/capp.simsimi.com/images/makeup/6.png" rel="shortcut icon" />

    <title>HotFB.Org - Dạy SimSimi Nói</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   
    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<style>
  
  	body {
  	padding-top: 20px;
		}

  </style>
<body>
<!-- Html -->
<div class="container">
    <div class="row">
    <div class="col-md-8">
         
<div class="panel panel-primary">
                    <div class="panel-heading bg-light-blue">
                        <h4>Dạy Sim nói</h4>
                    </div>

                    <div class="panel-body">

<form name="tdt_form_2" id="tdt_form_2" action="#" method="POST">
	<p>Hỏi: <input type="text" name="ask" value="" id="input" class="form-control" placeholder="Câu hỏi.."/></p>
  <p>Đáp: <input type="text" name="ans" value="" id="input" class="form-control" placeholder="Câu trả lời.."/></p>
  <input type="button"  id="tdt_set" value="Dạy Sim" class="btn btn-primary">
</form>

                    

<div id="result-msg-2"></div>
<div class="list-group" id="result-2">
      <div id="print-2"></div>
</div>
    
           </div>
           </div>

     </div>
     </div><!-- /row -->

</div>







<script>
$(document).ready(function() {
    $("#result-msg").hide();
    
         
	      
$("#tdt_form").submit(function(e) {
             $("#result-msg").show();
		        $("#result-msg").html("<b>Chờ sim tý ạ...</b>");
		   var postData = $(this).serializeArray();
		   var formURL = $(this).attr("action");
		   $.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR) 
			{
          $("#print").html('');
				$(data).insertAfter($("#print"));
          $("#input").val('');
         $("#result-msg").hide();
			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$("#result-msg").html('<div class="alert alert-error">Lỗi, mời bạn làm lại</div>');
			}
		  });
	     e.preventDefault();
		 e.unbind();
        $("#result-msg").hide();
        $("#tdt_form").submit();
	 });
	 
    
    
   $("#result-msg").hide();
});

$(document).ready(function() {
    $("#result-2").hide();
    $("#result-msg-2").hide();
    $("#tdt_set").click(function() {
         $("#result-msg-2").show();
	      $("#tdt_form_2").submit(function(e) {
		        $("#result-msg-2").html("<b>Loadding...</b>");
		   var postData = $(this).serializeArray();
		   var formURL = "DuySex.php";
		   $.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR) 
			{
          $("#result-2").show();
				$('<p>'+data+'</p>').insertAfter($("#print-2"));

         $("#result-msg-2").hide();
			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$("#result-msg-2").html('<div class="alert alert-error">Lỗi, mời bạn làm lại</div>');
			}
		   });
	     e.preventDefault();
	     e.unbind();
        $("#result-msg-2").hide();
	 });
	 
	 $("#tdt_form_2").submit();
});

   $("#result-msg-2").hide();
});
</script>



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<?php
include 'footer.php';
?>
</body>

</html>

