<meta charset="utf-8">
<?php
if(isset($_POST['email'])) {
     
    
	$email_to = "kkallisma2@naver.com";
	$email_subject = "[픽스대부중개] 1:1 안심상담 신청";
	$email_subject = '=?UTF-8?B?'.base64_encode($email_subject).'?=';

     
     
    function died($error) {
        // your error code can go here
        echo "<script> alert('$error');";
		echo "history.go(-1);";
		echo "</script>";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['product']) ||
        !isset($_POST['first_name']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['email']) ||
        !isset($_POST['price'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

    $product = $_POST['product']; // required
    $first_name = $_POST['first_name']; // required
    $telephone = $_POST['telephone']; // not required
    $email_from = $_POST['email']; // required
    $price = $_POST['price']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    
  if(strlen($price) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "대출상품 : ".clean_string($product)."\n\n";
    $email_message .= "이름 : ".clean_string($first_name)."\n\n";
    $email_message .= "연락처 : ".clean_string($telephone)."\n\n";
    $email_message .= "이메일 : ".clean_string($email_from)."\n\n";
    $email_message .= "희망금액 : ".clean_string($price)."\n\n";
     
     
// create email headers
$headers = 'From: '.$email_from;
// 제목이 깨질경우 아래 캐릭터셋 적용

@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<script>
alert ("메일이 발송되었습니다.\n빠른 시일안에 답변드리겠습니다.");
location.href='../';
</script>
 
<?php
}
?>