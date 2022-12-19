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
                                <label for="user_id" class="field-title">아이디</label>
                                <input type="text" id="user_id" name="user_id" class="form-input" value="gildonghong" readonly required>
                            </div>
                            <div class="form-field mt30">
                                <input type="password" id="user_pass" name="user_pass" class="form-input" required placeholder="새 비밀번호를 입력하세요">
                                <p class="stx mt10">* 4~16자 영문, 숫자, 특수문자( ! @ # $ % ^ & * ( ) ) 혼합 사용가능</p>
                            </div>
                            <div class="form-field mt20">
                                <input type="password" id="user_pass_new" name="user_pass_new" class="form-input" required placeholder="새 비밀번호 확인">
                            </div>
                            <div class="mbtn_find_box mt40">
                                <button type="button" class="mbtn scolor">확인</button>
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