<html><!--RASPOS 1.5ver에서는 프래임셋이 기본적으로 들어간다. 1920X1080해상도 기준으로 맞추어 져 있음으로 블라우져 확대도는 100%가 적당하다. IE를 사용하는 경우에는 CTRL + 0을 누르면 바로 해상도가 100%로 고정될 것이다. 이 프래임셋은 insertmain.php와 insertprice.php와 delete.price.php의 내용을 전달해준다.
1.5ver부터 기능정리를 위하여 폴더를 따로 두어 insert.html에서부터 그냥 /insert로 바뀌었다. 아파치는 가능하지만 nginx는 잘 모르겠다.-->
<head>
<title><---RAS-POS 1.5ver 상품관리---></title>
</head>
<frameset rows="19%, 81%" cols="1*">
<frame name="banner" scrolling="no" marginwidth="10" marginheight="14" namo_target_frame="contents" src="insertmain.php" noresize>
<frameset rows="1*" cols="50%, 50%">
<frame name="contents" scrolling="auto" marginwidth="10" marginheight="14" namo_target_frame="detail" src="insertprice.php" noresize>
<frame name="detail" scrolling="yes" marginwidth="10" marginheight="14" src="deleteprice.php" noresize>
</frameset><noframes>
<body bgcolor="#FFFFFF" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000">

<p> RAS-POS 1.5ver 상품 관리</p>
</body>
</noframes>
</frameset>
</html
