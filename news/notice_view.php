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
                    <li><strong>공지사항</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="dataroom-wrap layout-1280">
                    <div class="page-title">
                        <h2>공지사항</h2>
                        <p>
                            빠르고 정확한 소식을 전해드립니다.
                        </p>
                    </div>

                    <!-- 게시글 보기 -->
                    <div class="tbl-view">
                        <dl>
                            <dt class="sbj">
                                제목 노출 영역입니다.
                            </dt>
                            <dd class="date">
                                <span>작성일</span>
                                2022. 09. 13
                            </dd>
                            <dd class="conts">
                                공지사항 내용 영역입니다. 공지사항 내용 영역입니다. 공지사항 내용 영역입니다. 공지사항 내용 영역입니다. 공지사항 내용 영역입니다. <br/>
                                공지사항 내용 영역입니다. 공지사항 내용 영역입니다. 공지사항 내용 영역입니다. 공지사항 내용 영역입니다. <br/><br/>

                                공지사항 내용 영역입니다. 공지사항 내용 영역입니다. 공지사항 내용 영역입니다. <br/>
                                공지사항 내용 영역입니다. 공지사항 내용 영역입니다. <br/><br/>

                                공지사항 내용 영역입니다. 공지사항 내용 영역입니다. 공지사항 내용 영역입니다. 공지사항 내용 영역입니다. <br/>
                                공지사항 내용 영역입니다. 공지사항 내용 영역입니다.<br/>
                                공지사항 내용 영역입니다. <br/><br/>

                                공지사항 내용 영역입니다.                                 
                            </dd>                            
                        </dl>
                        <div class="view-btn-wrap center">
                            <a href="" class="mbtn w80">목록</a>                    
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