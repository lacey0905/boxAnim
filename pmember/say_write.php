<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 당원 스타일 //-->
    <link rel="stylesheet" href="../css/pmember.css">
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
                    <li><span>당원</span></li>
                    <li><span>할 말 있어요</span></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="pmember-wrap say layout-1280">
                    <div class="page-title">
                        <h2>할 말 있어요</h2>
                        <p>
                            성숙한 인터넷 문화 정착을 위해 국민의힘은 정보통신망 이용촉진 및 정보보호 등에 관한 법률을 준수합니다.
                        </p>
                    </div>                    

                    <!-- 게시글 쓰기 -->
                    <form class="form mt50">
                        <fieldset>    
                            <legend>할 말 있어요</legend>
                            <div class="tbl-write">                        
                                <table>
                                    <colgroup>
                                        <col style="width:16rem">
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>분류</th>
                                            <td>   
                                                <div class="gubun">
                                                    <div class="custom-rdo">
                                                        <input type="radio" name="gubun" id="gubun1" checked>
                                                        <label for="gubun1">정치현안</label>
                                                    </div>
                                                    <div class="custom-rdo">
                                                        <input type="radio" name="gubun" id="gubun2">
                                                        <label for="gubun2">정책제안</label>
                                                    </div>
                                                    <div class="custom-rdo">
                                                        <input type="radio" name="gubun" id="gubun3">
                                                        <label for="gubun3">민원사항</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>작성자</th>
                                            <td>
                                                <em class="r_member">책임</em> 홍길동
                                                <!-- 책임 : <em class="r_member">책임</em> -->
                                                <!-- 일반 : <em class="g_member">일반</em> -->
                                                <!-- 탈당 : <em class="g_member">탈당</em> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>제목</th>
                                            <td>
                                                <div class="form-field">
                                                    <input type="text" class="form-input">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>내용</th>
                                            <td>
                                                <div class="form-field">
                                                    <textarea cols="30" rows="20" class="textarea"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                            
                            <div class="btn-right mt30">                                
                                <a href="javascript:history.go();" class="mbtn white w80">취소</a>
                                <button type="button" class="mbtn scolor w80">등록</button>
                            </div>  
                        </fieldset>  
                    </form>
                    <!--//-->     
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>