<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 당원 스타일 //-->
    <link rel="stylesheet" href="../css/pmember.css">
    <!--//-->
</head>
<body>
    <div id="wrap">

        <?php include "../include/_body_skip.php"; ?>

        <?php include "../include/_body_header.php"; ?>

        <div id="container">

            <!-- location //-->
            <div id="loc">
                <ul>
                    <li class="home"><a href="">홈</a></li>
                    <li><span>당원</span></li>
                    <li><span>할 말 있어요</span></li>
                    <li><strong>당원에게 묻는다</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="pmember-wrap ask layout-1280">
                    <div class="page-title">
                        <h2>당원에게 묻는다</h2>
                        <p>
                            성숙한 인터넷 문화 정착을 위해 국민의힘은 정보통신망 이용촉진 및 정보보호 등에 관한 법률을 준수합니다.
                        </p>
                    </div>

                    <!-- 결과 보기 -->
                    <div class="result-view mt50">
                        <div class="result-box">
                            <h3>층간 소음 규제 강화에 대한 당신의 생각은?</h3>
                            <div class="conts">
                                층간소음 피해 해결을 위해 정부 차원의 개입이 필요하다고 느끼신다면 찬성을 눌러주세요. 해당 영역 최대 2줄 노출, 내용이 길 경우 절삭 처리. 층간소음 피해 해결을 위해 정부 차원의 개입이 필요하다고 느끼신다면 찬성을 눌러주세요. 해당 영역 최대 2줄 노출, 내용이 길 경우 절삭 처리.
                            </div>
                            <p class="total">현재 <b>10,000</b>명 참여중</p>
                            <ul class="vote-list">
                                <li>
                                    <div class="vt-hd">
                                        <h4>찬성</h4>
                                        <span><b>8,000</b>/10,000표<b>(80%)</b></span>
                                    </div>
                                    <div class="vt-bar"><span style="width:80%">80%</span></div>
                                </li>
                                <li>
                                    <div class="vt-hd">
                                        <h4>반대</h4>
                                        <span><b>2,000</b>/10,000표<b>(20%)</b></span>
                                    </div>
                                    <div class="vt-bar"><span style="width:20%">20%</span></div>
                                </li>
                            </ul>
                            <div class="btn-right mt30">
                                <a href="" class="mbtn w80">목록</a>
                            </div>
                        </div>
                    </div>                     
                    <!--//-->                 
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>    

    </div>
</body>
</html>