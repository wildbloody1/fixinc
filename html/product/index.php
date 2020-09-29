<?php
include_once('../common.php');

$g5['title'] = "대출상품"; include_once('../_head.php');
 ?>

<div id="content">
    <dl id="product_list">
        <dd>
            <table width="100%" cellpadding="15" cellspacing="0" border="1" align="center">
                <colgroup>
                    <col width="20%">
                    <col width="80%">
                </colgroup>
                <caption>직장인신용대출</caption>
                <tbody>
                    <tr>
                        <th>대출대상</th>
                        <td>만59세 미만<br>전문직, 계약직, 정규직 등 소득확인이 되는 모든 직장인 가능</td>
                    </tr>
                    <tr>
                        <th>대출한도</th>
                        <td>100~2000만원 까지(신용에 따라 차등 적용)</td>
                    </tr>
                    <tr>
                        <th>약정금리</th>
                        <td>연 24% 이내 (신용도, 대출사에 따라 차등적용)</td>
                    </tr>
                    <tr>
                        <th>약정기간</th>
                        <td>취급일로부터 최장 5년(연장가능)</td>
                    </tr>
                    <tr>
                        <th>수수료</th>
                        <td>중개수수료, 취급수수료, 중도상환수수료 없음</td>
                    </tr>
                    <tr>
                        <th>구비서류</th>
                        <td>기본서류 : 주민등록증사본,주민등록초본(최근1주일이내),통장사본<br>
                                <br>재직서류 : 건강보험자격득실확인서 + 건강보험납부증명서
                                <br>소득서류 : 급여통장 3개월내역,의료보험납부증명서 또는 원천징수영수증</td>
                    </tr>
                    <tr>
                        <th>대출지급방법</th>
                        <td>대출 신청시 고객이지정한 계좌로 입금</td>
                    </tr>
                </tbody>
            </table>
        </dd>
        <dd>
            <table width="100%" cellpadding="15" cellspacing="0" border="1" align="center">
                <colgroup>
                    <col width="20%">
                    <col width="80%">
                </colgroup>
                <caption>사업자신용대출</caption>
                <tbody>
                    <tr>
                        <th>대출대상</th>
                        <td>만60세 이하<br>자영업 운영 3개월이상자</td>
                    </tr>
                    <tr>
                        <th>대출한도</th>
                        <td>100~2000만원 까지</td>
                    </tr>
                    <tr>
                        <th>약정금리</th>
                        <td>연 12~24%</td>
                    </tr>
                    <tr>
                        <th>약정기간</th>
                        <td>취급일로부터 최장 5년(연장가능)</td>
                    </tr>
                    <tr>
                        <th>수수료</th>
                        <td>중개수수료, 취급수수료, 중도상환수수료 없음</td>
                    </tr>
                    <tr>
                        <th>구비서류</th>
                        <td>신분증, 원초본, 통장사본, 사업자등록증<br>소득금액증명원 또는 부가세표준증명원, 카드매출통장거래내역</td>
                    </tr>
                    <tr>
                        <th>대출지급방법</th>
                        <td>대출 신청시 고객이지정한 계좌로 입금</td>
                    </tr>
                </tbody>
            </table>
        </dd>
    </dl>
    <div id="formWrap">
        <? include_once(G5_PATH."/formmail.php") ?>
    </div>
</div>

<?php include_once('../_tail.php'); ?>