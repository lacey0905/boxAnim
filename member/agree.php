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
                        <h2>이용약관동의</h2>
                        <p>
                            당원만 홈페이지 회원으로 등록 가능합니다.
                        </p>
                    </div>   
                    
                    <form class="form mt50">
                        <fieldset>    
                            <legend>이용약관동의</legend>     
                            <div class="agree_box">
                                <div class="form-field all_agree">
                                    <input type="checkbox" id="checkedAll" name="checkedAll"><label for="checkedAll">전체 동의합니다.</label>
                                </div>                                
                            </div>   
                            <div class="agree_box notice">
                                <p>
                                    선택 항목을 동의하지 않는 경우도 <br/>회원가입 및 일반적인 서비스를 이용할 수 있습니다.
                                </p>
                            </div>                    
                            <div class="agree_box mt30">
                                <div class="form-field self">
                                    <input type="checkbox" id="agree_check" name="agree_check"><label for="agree_check">(필수) 이용약관 동의</label>
                                </div>
                                <a href="javascript:modalOpen('termServicePopup');" class="link">전체보기</a>
                            </div>
                            <div class="agree_box mt30">
                                <div class="form-field self">
                                    <input type="checkbox" id="prv_check" name="prv_check"><label for="prv_check">(필수) 개인정보취급처리 동의</label>
                                </div>
                                <a href="javascript:modalOpen('personalInfoPopup');" class="link">전체보기</a>
                            </div>  
                            <div class="agree_box mt30">
                                <div class="form-field self">
                                    <input type="checkbox" id="receive_check" name="receive_check"><label for="receive_check">(선택) 혜택 및 정보 수신 동의</label>
                                </div> 
                                <a href="javascript:modalOpen('receivingPopup');" class="link">전체보기</a>                               
                            </div>
                            <div class="agree_box receive mt10">
                                <div class="form-field">(</div>
                                <div class="form-field self">
                                    <input type="checkbox" id="method_sms" name="method_sms"><label for="method_sms" class="ft14">SMS</label>
                                </div>
                                <div class="form-field self ml10">
                                    <input type="checkbox" id="method_email" name="method_email"><label for="method_email" class="ft14">E-MAIL</label>
                                </div>
                                <div class="form-field">)</div>
                            </div>
                            <div class="agree_box mt30">
                                <div class="form-field self">
                                    <input type="checkbox" id="year_check" name="year_check"><label for="year_check">(필수) 본인은 만14세 이상입니다.</label>
                                </div>
                            </div>                           
                            <div class="btn_box mt50">
                                <button type="button" class="mbtn scolor wd100">가입하기</button>
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