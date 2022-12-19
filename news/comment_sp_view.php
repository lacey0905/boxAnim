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
                    <li><span>논평성명</span></li>
                    <li><strong>대변인</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="comment-wrap layout-1280">
                    <div class="page-title">
                        <h2>대변인</h2>
                        <p>
                            국민의힘 대변인 공식 논평 및 보도자료입니다.
                        </p>
                    </div>

                    <!-- 게시글 보기 -->
                    <div class="tbl-view">
                        <dl>
                            <dt class="sbj">
                                <span>[보도자료]</span>
                                제목 노출 영역입니다.
                            </dt>
                            <dd class="date">
                                <span>작성일</span>
                                2022. 09. 13
                            </dd>
                            <!-- 분류가 논평일경우 노출 //-->
                            <dd class="name">
                                <span>대변인</span>
                                국민의힘 수석대변인 양금희
                            </dd>
                            <!--//-->
                            <dd class="conts">
                                대변인 내용 영역입니다. 대변인 내용 영역입니다. 대변인 내용 영역입니다. 대변인 내용 영역입니다. 대변인 내용 영역입니다. <br/>
                                대변인 내용 영역입니다. 대변인 내용 영역입니다. 대변인 내용 영역입니다. 대변인 내용 영역입니다. <br/><br/>

                                대변인 내용 영역입니다. 대변인 내용 영역입니다. 대변인 내용 영역입니다. <br/>
                                대변인 내용 영역입니다. 대변인 내용 영역입니다. <br/><br/>

                                대변인 내용 영역입니다. 대변인 내용 영역입니다. 대변인 내용 영역입니다. 대변인 내용 영역입니다. <br/>
                                대변인 내용 영역입니다. 대변인 내용 영역입니다.<br/>
                                대변인 내용 영역입니다. <br/><br/>

                                대변인 내용 영역입니다.                                 
                            </dd>   
                            <dd class="down">
                                <a href="">filename.doc</a>
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