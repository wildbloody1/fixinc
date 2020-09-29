<?php
include_once('../common.php');

$g5['title'] = "대출가능 한도조회"; include_once('../_head.php');
 ?>

<div id="content">

    <div id="limitWrap">
        <? include_once(G5_PATH."/formmail_limit.php") ?>
    </div>

</div>

<?php include_once('../_tail.php'); ?>