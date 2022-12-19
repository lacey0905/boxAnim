<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 회원용 스타일 //-->
    <link rel="stylesheet" href="../css/member.css">
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
                    <li><span>회원</span></li>
                    <li><strong>회원등록</strong></li>
                </ul>
                <div class="page-option">
                    <button type="button" class="share">공유</button>
                    <button type="button" class="clip">클립</button>
                    <button type="button" class="print">프린트</button>
                </div>
            </div>
            <!--//-->        

            <div id="contents">
                <section class="join-wrap layout-1280">
                    <div class="page-title">
                        <h2>홈페이지 회원등록 완료</h2>
                    </div>   
                    
                    <div class="find-result mt30">
                        <h3>회원등록이 완료되었습니다</h3>
                        <p>
                            <b>홍길동</b>님은 책임당원입니다.
                        </p>
                        <p class="gtxt">
                            로그인 후, 홈페이지 모든 서비스를 이용하실 수 있습니다.
                        </p>
                    </div>
                    
                    <div class="find_btn_box">
                        <a href="" class="mbtn">메인으로</a>
                        <a href="./login.php" class="mbtn scolor">로그인</a>
                    </div>
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>