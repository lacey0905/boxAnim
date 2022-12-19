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
                    <li><strong>인물 검색</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="psearch-wrap layout-1280">
                    <div class="page-title">
                        <h2>인물 검색</h2>
                        <p>
                            국민과 소통하며 일하는 일꾼이 되겠습니다.
                        </p>
                    </div>

                    <div class="people-search mt50">
                        <h3><b>이름</b> 또는 <b>직책</b> 또는 <b>지역</b>을 입력해주세요.</h3>
                        <form class="form">
                            <fieldset>    
                                <legend>인물 검색</legend>
                                <div class="form-field word">
                                    <input type="text" name="stx" id="stx" class="form-input" value="홍길동" placeholder="검색어를 입력하세요.">
                                </div>
                                <div class="form-field btn">
                                    <button type="submit" class="mbtn grey">검색</button>
                                </div>
                            </fieldset>
                        </form>                        
                    </div>

                    <!-- 검색 결과 //-->
                    <div class="result-search row mt30">
                        <ul>
                            <li>
                                <div class="thumb">
                                    <a href="javascript:peoplePop('peoplePopup','table','1');"><img src="../img/noimg_logo.png" alt="홍길동"></a>
                                </div>
                                <div class="info">
                                    <dl>
                                        <dt>
                                            <h3><a href="javascript:peoplePop('peoplePopup','table','1');">홍길동</a></h3>
                                            <span>비상대책위원</span>
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
                                            <span>비상대책위원</span>
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
                                            <span>비상대책위원</span>
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
                                            <span>비상대책위원</span>
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
                                            <span>비상대책위원</span>
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