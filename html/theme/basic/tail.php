<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>


</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft_top">
    <dl>
        <dt>
        대출금리 : 연이자 24% 이내  /  연체이율 : 연 24% 이내  /  대출 중개수수료 없음<br />
        중개수수료를 요구하거나 받는 것은 불법으로 대출과 관련된 일체 수수료를 받지 않습니다.<br />
        취급수수료 등 기타 부대비용 없음  /  상환방법 : 원리금균등상환방식, 만기일시상환방식<br />
        연체시 불이익 : 신용등급 하락 및 연체이자가 발생 할 수 있음<br />
        조기상환수수료율 : 조건 없음
        </dt>
        <dd>
        과도한 빚은 당신에게 큰 불행을 안겨줄 수 있습니다.<br />
        대출시 신용등급 하락으로 다른 금융거래가 제약 받을 수 있습니다.
        </dd>
    </dl>
</div>
<div id="ft">
    <div id="ft_wt">
        <ul class="ft_link">
            <li>
                <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">공지사항</a>
            </li>
            <li>
                <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa">자주묻는질문</a>
            </li>
            <li>
                <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            </li>
        </ul>
        <div class="ft_keyNumber">
            <figure><img src="<?php echo G5_IMG_URL ?>/keyNumber_w.svg" alt="keyNumber" /></figure>
            <number>010-5566-2358</number>
        </div>
	</div>
	<div id="ft_wb">
        <ul class="info">
            <li>회사명 : 픽스대부중개</li>
            <li>대표이사 : 정원제</li>
            <li>사업자등록번호 : 614-03-52292</li>
            <li>대부중개업번호 : 2020-서울중랑-0031</li>
            <li>주소 : 서울특별시 중랑구 동일로160길 4, 2층(목동)</li>
            <li>등록시도명칭 : 서울시 중랑구</li>
        </div>
        <div id="ft_copy">
            <p class="copyright">Copyright &copy; 픽스대부중개 All rights reserved.</p>
            <a href="<?php echo G5_URL ?>/adm" class="adm_login" target="_blank">관리자 로그인</a>
        </div>
	</div>


    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>