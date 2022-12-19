<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 검색 스타일 //-->
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/jqcloud.min.css">
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
                    <li><strong>검색</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="search-wrap layout-1280">
                    <div class="page-title">
                        <h2>검색</h2>
                        <p>
                            궁금한신 내용을 입력해 주세요.
                        </p>
                    </div>

                    <div class="board-search mt50">
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>검색</legend>
                                    <div class="form-field date from">
                                        <input type="month" class="form-input">
                                    </div>
                                    <div class="form-field date to">
                                        <input type="month" class="form-input">
                                    </div>
                                    <div class="form-field word">
                                        <input type="text" class="form-input" placeholder="검색어를 입력하세요.">
                                        <div class="key-word-wrap">
                                            <ul>
                                                <li><a href="#" data-value="교육">#교육</a></li>
                                                <li><a href="#" data-value="국방정책">#국방정책</a></li>
                                                <li><a href="#" data-value="국민의힘선거">#국민의힘선거</a></li>
                                                <li><a href="#" data-value="키워드">#키워드</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-field btn">
                                        <button type="submit" class="mbtn grey">검색</button>
                                    </div>                                    
                                </fieldset>
                            </form>                            
                        </div>
                        <div class="result-txt">
                            <strong>"검색어"</strong>로 검색한 게시물이 총 <span>30</span>건이 존재합니다.
                        </div>
                    </div>

                    <div class="search-result mt50">
                        <div class="sr-head">
                            <h3>검색결과</h3>
                            <ul>
                                <li class="active"><a href="">최근 날짜순</a></li>
                                <li><a href="">정확도순</a></li>
                            </ul>
                        </div>
                        <div class="sr-list">
                            <ul>
                                <li>
                                    <div class="menu-name">
                                        <span class="name">소식</span>
                                        <span>공지사항</span>
                                    </div>
                                    <p class="sbj">
                                        <a href="">제3차 전국위원회 소집공고 (2022.08.16)</a>
                                    </p>
                                    <p class="conts">
                                        <a href="">본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다.  본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다.</a>
                                    </p>
                                </li>
                                <li>
                                    <div class="menu-name">
                                        <span class="name">소식</span>
                                        <span>논평성명</span>
                                    </div>
                                    <p class="sbj">
                                        <a href="">제3차 전국위원회 소집공고 (2022.08.16)</a>
                                    </p>
                                    <p class="conts">
                                        <a href="">본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다.  본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다. 본문 내용 2줄까지 노출합니다.</a>
                                    </p>
                                </li>
                            </ul>

                            <div class="btn_more">
                                <button type="button" class="mbtn">더보기</button>
                            </div>
                        </div>

                        <div class="sr-gallery">
                            <h3 class="mname"><span>소식</span></h3>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href=""><img src="../img/noimg_logo.png" alt="제3차 전국위원회 소집공고"></a>
                                    </div>
                                    <div class="info">
                                        <div class="menu-name">
                                            <span>이슈</span>
                                            <span>카드뉴스</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">제3차 전국위원회 소집공고</a>
                                        </p>
                                        <p class="date">2022.09.03</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href=""><img src="../img/noimg_logo.png" alt="제3차 전국위원회 소집공고"></a>
                                    </div>
                                    <div class="info">
                                        <div class="menu-name">
                                            <span>이슈</span>
                                            <span>카드뉴스</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">제3차 전국위원회 소집공고</a>
                                        </p>
                                        <p class="date">2022.09.03</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href=""><img src="../img/noimg_logo.png" alt="제3차 전국위원회 소집공고"></a>
                                    </div>
                                    <div class="info">
                                        <div class="menu-name">
                                            <span>이슈</span>
                                            <span>카드뉴스</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">제3차 전국위원회 소집공고</a>
                                        </p>
                                        <p class="date">2022.09.03</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href=""><img src="../img/noimg_logo.png" alt="제3차 전국위원회 소집공고"></a>
                                    </div>
                                    <div class="info">
                                        <div class="menu-name">
                                            <span>이슈</span>
                                            <span>카드뉴스</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">제3차 전국위원회 소집공고</a>
                                        </p>
                                        <p class="date">2022.09.03</p>
                                    </div>
                                </li>
                            </ul>
                            
                            <h3 class="mname"><span>당원</span></h3>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href=""><img src="../img/noimg_logo.png" alt="제3차 전국위원회 소집공고"></a>
                                    </div>
                                    <div class="info">
                                        <div class="menu-name">
                                            <span>교육자료</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">제3차 전국위원회 소집공고</a>
                                        </p>
                                        <p class="date">2022.09.03</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href=""><img src="../img/noimg_logo.png" alt="제3차 전국위원회 소집공고"></a>
                                    </div>
                                    <div class="info">
                                        <div class="menu-name">
                                            <span>교육자료</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">제3차 전국위원회 소집공고</a>
                                        </p>
                                        <p class="date">2022.09.03</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href=""><img src="../img/noimg_logo.png" alt="제3차 전국위원회 소집공고"></a>
                                    </div>
                                    <div class="info">
                                        <div class="menu-name">
                                            <span>교육자료</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">제3차 전국위원회 소집공고</a>
                                        </p>
                                        <p class="date">2022.09.03</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href=""><img src="../img/noimg_logo.png" alt="제3차 전국위원회 소집공고"></a>
                                    </div>
                                    <div class="info">
                                        <div class="menu-name">
                                            <span>교육자료</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">제3차 전국위원회 소집공고</a>
                                        </p>
                                        <p class="date">2022.09.03</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                                   

                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>     
        
        <script src="../js/jqcloud.min.js"></script>

    </div>
</body>
</html>