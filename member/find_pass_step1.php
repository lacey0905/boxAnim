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
                <section class="find-pass-wrap">
                    <div class="page-title">
                        <h2>비밀번호 찾기</h2>
                        <p>
                            등록 시, 입력하신 정보로 비밀번호를 확인하실 수 있습니다.
                        </p>
                    </div>   
                    
                    <form class="form mt50">
                        <fieldset>    
                            <legend>비밀번호 찾기</legend>
                            <div class="form-field">
                                <input type="text" id="user_id" name="user_id" class="form-input" required placeholder="아이디를 입력하세요">
                            </div>
                            <div class="mbtn_find_box mt40">
                                <button type="button" class="mbtn">다음 단계</button>
                            </div>
                            <div class="find_link">
                                <span>&middot; 아이디를 잊으셨나요?</span>
                                <a href="javascript:;" class="link"><em>아이디찾기</em></a>
                            </div>
                        </fieldset>
                    </form>
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>