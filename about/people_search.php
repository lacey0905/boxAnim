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
                                    <input type="text" name="stx" id="stx" class="form-input" placeholder="검색어를 입력하세요.">
                                </div>
                                <div class="form-field btn">
                                    <button type="submit" class="mbtn grey">검색</button>
                                </div>
                            </fieldset>
                        </form>                        
                    </div>

                    <!-- 검색전 //-->
                    <div class="before-search mt50">
                        <dl class="keyword">
                            <dt>연관키워드</dt>
                            <dd>
                                <span>#키워드</span>
                                <span>#키워드</span>
                                <span>#키워드</span>
                                <span>#키워드</span>
                            </dd>
                        </dl>
                        <dl class="latest">
                            <dt>
                                최근 검색어
                                <button type="button">전체삭제</botton>
                            </dt>
                            <dd>
                                <ul>
                                    <li>
                                        <a href="">홍길동</a>
                                        <button type="button">삭제</button>
                                    </li>
                                    <li>
                                        <a href="">종로구</a>
                                        <button type="button">삭제</button>
                                    </li>
                                    <li>
                                        <a href="">비상대책위원장</a>
                                        <button type="button">삭제</button>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <!--//-->


                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>