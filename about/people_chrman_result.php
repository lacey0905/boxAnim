<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 소개 스타일 //-->
    <link rel="stylesheet" href="../css/about.css">
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
                    <li><span>소개</span></li>
                    <li><span>사람들</span></li>
                    <li><strong>시도당</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="chrman-wrap layout-1280">
                    <div class="page-title">
                        <h2>시도당</h2>
                        <p>
                            국민과 소통하며 일하는 일꾼이 되겠습니다.
                        </p>
                    </div>

                    <div class="chrman-search mt50">
                        <form class="form">
                            <fieldset>    
                                <legend>시도당 검색</legend>
                                <div class="sch-tab-cate">
                                    <ul>
                                        <li class="active"><a href="">시도당위원장</a></li>
                                        <li><a href="">당협위원장</a></li>
                                    </ul>
                                </div>
                                <div class="sch-area-name mt50">
                                    <ul>
                                        <li class="active"><a href="">서울</a></li>
                                        <li><a href="">부산</a></li>
                                        <li><a href="">대구</a></li>
                                        <li><a href="">인천</a></li>
                                        <li><a href="">광주</a></li>
                                        <li><a href="">대전</a></li>
                                        <li><a href="">울산</a></li>
                                        <li><a href="">세종</a></li>
                                        <li><a href="">경기</a></li>
                                        <li><a href="">강원</a></li>
                                        <li><a href="">충북</a></li>
                                        <li><a href="">충남</a></li>
                                        <li><a href="">전북</a></li>
                                        <li><a href="">전남</a></li>
                                        <li><a href="">경북</a></li>
                                        <li><a href="">경남</a></li>
                                        <li><a href="">제주</a></li>
                                    </ul>
                                </div>
                                <div class="sch-area-map mt50">
                                    <div class="map">
                                        <div class="img">
                                            <img src="../img/map.png" alt="전국지도">
                                            <a href="" class="Seoul active"><em>서울</em></a>
                                            <a href="" class="Busan"><em>부산</em></a>
                                            <a href="" class="Daegu"><em>대구</em></a>
                                            <a href="" class="Incheon"><em>인천</em></a>
                                            <a href="" class="Gwangju"><em>광주</em></a>
                                            <a href="" class="Daejeon"><em>대전</em></a>
                                            <a href="" class="Ulsan"><em>울산</em></a>
                                            <a href="" class="Sejong"><em>세종</em></a>
                                            <a href="" class="Gyeonggi"><em>경기</em></a>
                                            <a href="" class="Gangwon"><em>강원</em></a>
                                            <a href="" class="Chungbuk"><em>충북</em></a>
                                            <a href="" class="Chungnam"><em>충남</em></a>
                                            <a href="" class="Jeonbuk"><em>전북</em></a>
                                            <a href="" class="Jeonnam"><em>전남</em></a>
                                            <a href="" class="Gyeongsbuk"><em>경북</em></a>
                                            <a href="" class="Gyeongnam"><em>경남</em></a>
                                        </div>
                                        <div class="jeju_img">
                                            <img src="../img/map_jeju.png" alt="제주">
                                            <a href="" class="Jeju"><em>제주</em></a>
                                        </div>
                                    </div>
                                    <div class="sch">
                                        <h3>
                                            <b>지도에서 지역 선택</b> 또는 <b>시도명을 검색</b>하시면<br/>
                                            해당 시도당 위원장 정보를 확인하실 수 있습니다.
                                        </h3>
                                        <div class="mt30">
                                            <div class="form-field word">
                                                <input type="text" name="stx" id="stx" class="form-input" placeholder="검색어를 입력하세요.">
                                            </div>
                                            <div class="form-field btn">
                                                <button type="submit" class="mbtn grey">검색</button>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <!-- 검색 결과 리스트 //-->
                    <div class="result-search row mt50">
                        <ul>
                            <li>
                                <div class="thumb">
                                    <a href="javascript:peoplePop('peoplePopup','table','1');"><img src="../img/noimg_logo.png" alt="홍길동"></a>
                                </div>
                                <div class="info">
                                    <dl>
                                        <dt>
                                            <h3><a href="javascript:peoplePop('peoplePopup','table','1');">홍길동</a></h3>
                                            <span>종로구</span>
                                        </dt>
                                        <dd class="row">
                                            <p>
                                                <span>생년월일</span>
                                                1960-12-10
                                            </p>
                                            <p>
                                                <span>전화</span>
                                                000-000-0000
                                            </p>
                                            <p>
                                                <span>이메일</span>
                                                sangtoil@hanmail.net
                                            </p>
                                        </dd>
                                    </dl>
                                    <div class="sns">
                                        <a href="" class="fa">페이스북</a>
                                        <a href="" class="bl">블로그</a>
                                        <a href="" class="in">인스타</a>
                                        <a href="" class="yu">유투브</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="javascript:peoplePop('peoplePopup','table','2');"><img src="../img/noimg_logo.png" alt="홍길동"></a>
                                </div>
                                <div class="info">
                                    <dl>
                                        <dt>
                                            <h3><a href="javascript:peoplePop('peoplePopup','table','2');">홍길동</a></h3>
                                            <span>종로구</span>
                                        </dt>
                                        <dd class="row">
                                            <p>
                                                <span>생년월일</span>
                                                1960-12-10
                                            </p>
                                            <p>
                                                <span>전화</span>
                                                000-000-0000
                                            </p>
                                            <p>
                                                <span>이메일</span>
                                                sangtoil@hanmail.net
                                            </p>
                                        </dd>
                                    </dl>
                                    <div class="sns">
                                        <a href="" class="fa">페이스북</a>
                                        <a href="" class="bl">블로그</a>
                                        <a href="" class="in">인스타</a>
                                        <a href="" class="yu">유투브</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="javascript:peoplePop('peoplePopup','table','3');"><img src="../img/noimg_logo.png" alt="홍길동"></a>
                                </div>
                                <div class="info">
                                    <dl>
                                        <dt>
                                            <h3><a href="javascript:peoplePop('peoplePopup','table','3');">홍길동</a></h3>
                                            <span>종로구</span>
                                        </dt>
                                        <dd class="row">
                                            <p>
                                                <span>생년월일</span>
                                                1960-12-10
                                            </p>
                                            <p>
                                                <span>전화</span>
                                                000-000-0000
                                            </p>
                                            <p>
                                                <span>이메일</span>
                                                sangtoil@hanmail.net
                                            </p>
                                        </dd>
                                    </dl>
                                    <div class="sns">
                                        <a href="" class="fa">페이스북</a>
                                        <a href="" class="bl">블로그</a>
                                        <a href="" class="in">인스타</a>
                                        <a href="" class="yu">유투브</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="javascript:peoplePop('peoplePopup','table','4');"><img src="../img/noimg_logo.png" alt="홍길동"></a>
                                </div>
                                <div class="info">
                                    <dl>
                                        <dt>
                                            <h3><a href="javascript:peoplePop('peoplePopup','table','4');">홍길동</a></h3>
                                            <span>종로구</span>
                                        </dt>
                                        <dd class="row">
                                            <p>
                                                <span>생년월일</span>
                                                1960-12-10
                                            </p>
                                            <p>
                                                <span>전화</span>
                                                000-000-0000
                                            </p>
                                            <p>
                                                <span>이메일</span>
                                                sangtoil@hanmail.net
                                            </p>
                                        </dd>
                                    </dl>
                                    <div class="sns">
                                        <a href="" class="fa">페이스북</a>
                                        <a href="" class="bl">블로그</a>
                                        <a href="" class="in">인스타</a>
                                        <a href="" class="yu">유투브</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="javascript:peoplePop('peoplePopup','table','5');"><img src="../img/noimg_logo.png" alt="홍길동"></a>
                                </div>
                                <div class="info">
                                    <dl>
                                        <dt>
                                            <h3><a href="javascript:peoplePop('peoplePopup','table','5');">홍길동</a></h3>
                                            <span>종로구</span>
                                        </dt>
                                        <dd class="row">
                                            <p>
                                                <span>생년월일</span>
                                                1960-12-10
                                            </p>
                                            <p>
                                                <span>전화</span>
                                                000-000-0000
                                            </p>
                                            <p>
                                                <span>이메일</span>
                                                sangtoil@hanmail.net
                                            </p>
                                        </dd>
                                    </dl>
                                    <div class="sns">
                                        <a href="" class="fa">페이스북</a>
                                        <a href="" class="bl">블로그</a>
                                        <a href="" class="in">인스타</a>
                                        <a href="" class="yu">유투브</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--//-->

                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>