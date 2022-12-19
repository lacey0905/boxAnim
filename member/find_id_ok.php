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

            <div id="contents">
                <section class="find-id-wrap layout-1280">
                    <div class="page-title">
                        <h2>아이디 찾기</h2>
                        <p>
                            가입 시, 입력하신 정보로 아이디를 확인하실 수 있습니다.
                        </p>
                    </div>   
                    
                    <div class="find-result">
                        <h3>아이디 찾기가 완료되었습니다.</h3>
                        <p>
                            <b>홍길동</b> 님의 아이디는 <span>gildonghong</span> 입니다.
                        </p>
                    </div>
                    
                    <div class="find_btn_box">
                        <a href="" class="mbtn">비밀번호 찾기</a>
                        <a href="./login.php" class="mbtn scolor">로그인</a>
                    </div>
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>