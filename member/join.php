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
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->   

            <div id="contents">
                <section class="join-wrap">
                    <div class="page-title">
                        <h2>홈페이지 회원등록</h2>
                        <p>
                            당원만 홈페이지 회원으로 등록 가능합니다.
                        </p>
                    </div>   
                    
                    <form class="form mt50">
                        <fieldset>    
                            <legend>회원등록</legend>
                            <div class="form-field">
                                <label for="user_name" class="field-title">이름</label>
                                <input type="text" id="user_name" name="user_name" class="form-input" value="홍길동" readonly required>
                            </div>
                            <div class="form-field mt20">
                                <label for="user_birth" class="field-title">생년월일</label>
                                <input type="text" id="user_birth" name="user_birth" class="form-input" value="2000.01.01" readonly required>
                            </div>
                            <div class="form-field mt20">
                                <label for="user_hp" class="field-title">연락처</label>
                                <input type="text" id="user_hp" name="user_hp" class="form-input" value="010-0000-0000" readonly required>
                            </div>
                            <div class="form-field mt50">
                                <input type="text" id="user_id" name="user_id" class="form-input" required placeholder="아이디를 입력하세요">
                                <p class="stx mt10">* 영문과 숫자 혼용 5자 이상 16자이내 / 한글 및 특수문자 사용불가</p>
                            </div>
                            <div class="form-field pass mt20">
                                <input type="password" id="user_pass" name="user_pass" class="form-input" required placeholder="비밀번호를 입력하세요">
                                <p class="stx mt10">* 8~16자 영문, 숫자, 특수문자( ! @ # $ % ^ & * ( ) ) 혼합 사용가능</p>
                            </div>
                            <div class="form-field pass mt20">
                                <input type="password" id="user_pass_re" name="user_pass_re" class="form-input" required placeholder="비밀번호 확인">
                            </div>
                            <div class="agree_box mt30">
                                <div class="form-field">
                                    <input type="checkbox" id="agree_check" name="agree_check"><label for="agree_check">(필수) 이용약관</label>
                                </div>
                                <a href="javascript:;" class="link">전체보기</a>
                            </div>
                            <div class="agree_box mt20">
                                <div class="form-field">
                                    <input type="checkbox" id="prv_check" name="prv_check"><label for="prv_check">(필수) 개인정보 수집동의</label>
                                </div>
                                <a href="javascript:;" class="link">전체보기</a>
                            </div>
                            
                            <div class="mbtn_join_box mt40">
                                <button type="button" class="mbtn cancel">취소</button>
                                <button type="button" class="mbtn scolor reg-ok">등록</button>
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