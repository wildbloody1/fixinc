<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div id="form_banner">
        <? include_once(G5_PATH."/formmail.php") ?>
    </div>
<div id="content">
    <div class="product-box">
        <a href="<?php echo G5_URL ?>/product"><img src="<?php echo G5_IMG_URL ?>/product01.jpg" alt="product"/></a>
        <a href="<?php echo G5_URL ?>/product"><img src="<?php echo G5_IMG_URL ?>/product02.jpg" alt="product"/></a>
    </div>
    <div class="content-box">
        <ul class="contactLink">
            <li>
                <img src="<?php echo G5_IMG_URL ?>/con_nateon.jpg" alt="contactLink"/>
            </li>
            <li>
                <img src="<?php echo G5_IMG_URL ?>/con_kakao.jpg" alt="contactLink"/>
            </li>
            <li>
                <a href="http://www.fss.or.kr/" target="_blank"><img src="<?php echo G5_IMG_URL ?>/con_fss.jpg" alt="contactLink"/></a>
            </li>
            <li>
                <a href="http://www.minwon.go.kr/" target="_blank"><img src="<?php echo G5_IMG_URL ?>/con_minwon.jpg" alt="contactLink"/></a>
            </li>
        </ul>
        <figure>
            <img src="<?php echo G5_IMG_URL ?>/con_call.jpg" alt="call"/>
        </figure>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>