<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>1:1 안심상담 무료 신청하기</title>
<script src="http://www.lenticularpromo.com/v/vspfiles/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
$('#accept-box').click(function(){
$('#submitter').attr('disabled',!this.checked);
});
$('#contactform').submit(function(){
return $('#accept-box').attr('checked');
});
});
</script>
<script>
$( function() {
$( "#dialog-message" ).dialog({
modal: true,
buttons: {
Ok: function() {
$( this ).dialog( "close" );
}
}
});
} );
  </script>
<style>
.wrap { width: 1000px; margin: 0 auto; }
table { width: 360px; height: 470px; color: #323232; padding: 0 15px; border-spacing: 0; border: 5px solid #323232; background: #fff; }
thead td { font-size: 24px; font-weight: 600; text-align: center; color: #323232; padding: 25px 0; border-bottom: 1px solid #e6e6e6; }
tbody tr:first-child th, tbody tr:first-child td  { height: 70px; padding-top: 20px; }
tbody tr:last-child td { padding-bottom: 20px; }
th { width: 30%; height: 50px; color: #323232; text-align: left; padding: 0 10px; }
th label { display: block; line-height: 32px; font-size: 14px; font-weight: 500; }
th input[type="checkbox"] { width: 16px; height: 16px; margin-right: 5px; vertical-align: middle; }
th label.agreecheck { display: inline-block; font-size: 13px; vertical-align: middle; }
td { padding: 0 10px; border-spacing: 0; }
td input, td select { width: 100%; height: 32px; font-size: 14px; color: #323232; padding: 0 10px; border: 1px solid #e6e6e6; border-radius: 3px; }
.privacyBtn { line-height: 20px; font-size: 12px; font-weight: 400; color: #969696; padding: 5px 7px; float: right; vertical-align: middle; border: 1px solid #e6e6e6; border-radius: 3px; transition: 0.2s all ease-in-out; }
.privacyBtn:hover { color: #323232; border-color: #323232; }
.btn_submit { padding: 0; }
#submitter { height: 40px; font-size: 16px; color:#fff; background:#323232; transition: 0.2s all ease-in-out; }
#submitter:hover { background: #3a8afd; }
</style>
</head>

<body>
<div class="wrap">
<form id="contactform" name="contactform" method="post" action="send.php">
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
<td colspan="2">1:1 안심상담 무료 신청하기</td>
</tr>
</thead>

<tr>
<th scope="row">
<label for="product">대출상품</label></th>
<td>
<select name="product">
<option value="직장인신용대출">직장인신용대출</option>
<option value="사업자신용대출">사업자신용대출</option>
<option value="여성, 주부전용대출">여성, 주부전용대출</option>
<option value="보증인신용대출">보증인신용대출</option>
<option value="담보대출">담보대출</option>
<option value="회생, 파산, 회복대출">회생, 파산, 회복대출</option>
<option value="과대출, 과다조회자대출">과대출, 과다조회자대출</option>
<option value="저신용, 연체기록자대출">저신용, 연체기록자대출</option>
<option value="통합, 대환대출">통합, 대환대출</option>
<option value="무직자, 취준생대출">무직자, 취준생대출</option>
</select>
</td>
</tr>

<tr>
<th scope="row">
<label for="first_name">이름</label></th>
<td width="70%">
<input name="first_name"  type="text" class="ipt" maxlength="10" required >
</td>
</tr>

<tr>
<th scope="row">
<label for="telephone">연락처</label></th>
<td>
<input name="telephone"  type="text" class="ipt" maxlength="12" required >
</td>
</tr>

<tr>
<th scope="row">
<label for="email">이메일 주소</label></th>
<td>
<input name="email"  type="text" class="ipt" maxlength="20" required >
</td>

<tr>
<th scope="row">
<label for="price">희망금액</label></th>
<td>
<input name="price"  type="text" class="ipt" maxlength="20" required >
</td>
</tr>

<tr>
<th colspan="2">
<input id="accept-box" name="accept" type="checkbox" value="0">
<label class="agreecheck" for="accept-box">개인정보수집 / 이용약관에 동의합니다.</label>
<a href="<?php echo get_pretty_url('content', 'privacy'); ?>" class="privacyBtn" target="_blank" >약관보기</a>
</th>
</tr>

<tr>
<td class="btn_submit" colspan="2">
<input id="submitter" type="submit" value="상담 신청하기" disabled="disabled">
</td>
</tr>

</table>
</form>
</div>
</body>
</html>
