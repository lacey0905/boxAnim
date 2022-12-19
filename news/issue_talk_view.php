<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 소식 스타일 //-->
    <link rel="stylesheet" href="../css/news.css">
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
                    <li><span>소식</span></li>
                    <li><span>이슈</span></li>
                    <li><strong>현장 토크</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="issue-wrap talk layout-1280">
                    <div class="page-title">
                        <h2>현장 토크</h2>
                        <p>
                            빠르고 정확한 소식을 전해드립니다.
                        </p>
                    </div>

                    <!-- 게시글 보기 -->
                    <div class="tbl-view mt50">
                        <dl>
                            <dt class="sbj">
                                제목 노출 영역입니다.
                            </dt>
                            <dd class="date">
                                2022. 09. 13
                                <button type="button" class="subtitle-btn">자막보기</button>                         
                            </dd>
                            <dd class="mov">
                                <div><img src="../img/noimg_mov.png" alt="제목 노출 영역입니다."></div>
                            </dd>
                            <dd class="keyword">
                                <span>연관키워드</span>
                                <ul>
                                    <li>#키워드</li>
                                    <li>#키워드</li>
                                    <li>#키워드</li>
                                    <li>#키워드</li>
                                    <li>#키워드</li>
                                    <li>#키워드</li>
                                </ul>
                            </dd>                      
                        </dl>
                    </div>   
                    <!--//-->

                    <div class="btn-center mt40">
                        <a href="" class="mbtn w80">목록</a>
                    </div>                    
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>    

    </div>
</body>
</html>