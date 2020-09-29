<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>대출가능 한도조회</title>
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
<style>
#loanlimitform table { width: 100%; color: #323232; padding: 40px 35px; border-spacing: 0; border: 1px solid #e6e6e6; background: #fff;}
#loanlimitform th { width: 25%; height: 50px; color: #323232; text-align: left; padding: 10px; }
#loanlimitform th label { display: block; line-height: 32px; font-size: 14px; font-weight: 500; }
#loanlimitform th input[type="checkbox"], #loanlimitform td input[type="radio"] { width: 16px; height: 16px; margin-right: 5px; vertical-align: middle; }
#loanlimitform th label.agreecheck { display: inline-block; font-size: 13px; cursor: pointer; vertical-align: middle; }
#loanlimitform td { padding: 0 10px; border-spacing: 0; }
#loanlimitform td label { display: inline-block; line-height: 16px; font-size: 13px; cursor: pointer; margin-right: 5px; vertical-align: middle; }
#loanlimitform td input, td select { width: 100%; height: 32px; font-size: 14px; color: #323232; padding: 0 10px; border: 1px solid #e6e6e6; border-radius: 3px; }
#loanlimitform .privacyBtn { line-height: 20px; font-size: 12px; font-weight: 400; color: #969696; padding: 5px 15px; float: right; vertical-align: middle; border: 1px solid #e6e6e6; border-radius: 3px; transition: 0.2s all ease-in-out; }
#loanlimitform .privacyBtn:hover { color: #323232; border-color: #323232; }
#loanlimitform .btn_submit { padding: 0; }
#loanlimitform #submitter { height: 40px; font-size: 16px; color:#fff; background:#323232; transition: 0.2s all ease-in-out; }
#loanlimitform #submitter:hover { background: #73b27c; }
</style>
</head>

<body>
<div class="wrap">
<form id="loanlimitform" name="loanlimit" method="post" action="/send_limit.php">
<table cellpadding="0" cellspacing="0">

<tr>
<th scope="row">
<label for="first_name">이름</label></th>
<td width="75%">
<input name="first_name" type="text" class="ipt" maxlength="10" required >
</td>
</tr>

<tr>
<th scope="row">
<label for="telephone">연락처</label></th>
<td>
<input name="telephone" type="text" class="ipt" maxlength="12" required >
</td>
</tr>

<tr>
<th scope="row">
<label for="email">이메일 주소</label></th>
<td>
<input name="email" type="text" class="ipt" maxlength="20" required >
</td>

<tr>
<th scope="row">
<label for="job">소득구분</label></th>
<td>
<label for="job01"><input type="radio" id="job01" value="직장인" name="job" checked />직장인</label>
<label for="job02"><input type="radio" id="job02" value="사업자" name="job" />사업자</label>
<label for="job03"><input type="radio" id="job03" value="주부" name="job" />주부</label>
<label for="job04"><input type="radio" id="job04" value="대학생" name="job" />대학생</label>
<label for="job05"><input type="radio" id="job05" value="무직자" name="job" />무직자</label>
<label for="job06"><input type="radio" id="job06" value="기타" name="job" />기타</label>
</td>
</tr>

<tr>
<th scope="row">
<label for="income">월평균소득</label></th>
<td>
<label for="income01"><input type="radio" id="income01" value="백만원 미만" name="income" checked />백만원 미만</label>
<label for="income02"><input type="radio" id="income02" value="백만원 이상" name="income" />백만원 이상</label>
<label for="income03"><input type="radio" id="income03" value="2백만원 이상" name="income" />2백만원 이상</label>
<label for="income04"><input type="radio" id="income04" value="3백만원 이상" name="income" />3백만원 이상</label>
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
