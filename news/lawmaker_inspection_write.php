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
                    <li><span>의원활동</span></li>
                    <li><span>국감자료</span></li>
                    <li><strong>국감제보</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="lawmaker-wrap inspection layout-1280">
                    <div class="page-title">
                        <h2>의원활동</h2>
                        <p>
                            국민의 생각과 행복이 최우선인 국가정책, 국민의힘이 만들겠습니다.
                        </p>
                    </div>
                    <div class="board-category">
                        <ul>
                            <li><a href="">의원실 행사</a></li>
                            <li><a href="">법안발의현황</a></li>
                            <li><a href="">보도자료</a></li>
                            <li class="on"><a href="">국감자료</a></li>
                        </ul>
                    </div>
                    <div class="law-total center">
                        <div><strong>국감제보</strong></div>
                    </div>

                    <!-- 게시글 쓰기 -->
                    <form class="form mt20">
                        <fieldset>    
                            <legend>국감제보</legend>
                            <div class="tbl-write">                        
                                <table>
                                    <colgroup>
                                        <col style="width:16rem">
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>상임위</th>
                                            <td>   
                                                <div class="form-field">
                                                    <select name="" id="" class="sel">
                                                        <option value="">선택</option>
                                                        <option>국회운영</option>
                                                        <option>법제사법</option>
                                                        <option>정무</option>
                                                        <option>기획재정</option>
                                                        <option>교육</option>
                                                        <option>외교통일</option>
                                                        <option>국방</option>
                                                        <option>여성가족</option>
                                                        <option>행정안정</option>
                                                        <option>문화체육관광</option>
                                                        <option>농림축산식품 해양수산</option>
                                                        <option>보건복지</option>
                                                        <option>환경노동</option>
                                                        <option>국토교통</option>
                                                        <option>정보</option>
                                                        <option>과학기술정보 방송통신</option>
                                                        <option>산업통상자원 중소벤처기업</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>작성자</th>
                                            <td>
                                                <!-- 회원일경우 -->
                                                <!-- <em class="r_member">책임</em> 홍길동 -->
                                                <!-- 책임 : <em class="r_member">책임</em> -->
                                                <!-- 일반 : <em class="g_member">일반</em> -->
                                                <!-- 탈당 : <em class="g_member">탈당</em> -->

                                                <!-- 비회원일경우 -->
                                                <div class="form-field">
                                                    <input type="text" class="form-input">
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- 비회원일경우 //-->
                                        <tr>
                                            <th>생년월일</th>
                                            <td>
                                                <div class="form-field">
                                                    <input type="date" class="form-input">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>연락처</th>
                                            <td>
                                                <div class="form-field">
                                                    <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="12"  title="-없이 숫자만 입력하세요" class="form-input" placeholder="-없이 숫자만 입력하세요">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>이메일</th>
                                            <td>
                                                <div class="form-field">
                                                    <input type="email" pattern="^[^ ]+@[^ ]+\.[a-z]{2,6}$" class="form-input" placeholder="example@email.com">
                                                </div>
                                            </td>
                                        </tr>
                                        <!--//-->
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
                                        <tr>
                                            <th>첨부파일</th>
                                            <td>
                                                <div class="form-field file">
                                                    <input type="file" id="file1">
                                                    <input type="text" id="file_attatch[]" name="file_attatch[]" class="upload-name form-input">
                                                    <label for="file1" class="mbtn">파일찾기</label>
                                                    <button type="button" id="addRow" class="mbtn white w80">+ 추가</button>
                                                </div>
                                                <p class="nec"><span>*용량 20mb 이하로 업로드해 주세요.</span></p>
                                                <div id="newFileList"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 

                            <!-- 비회원일 경우 //-->
                            <div class="agree_box mt30">
                                <div class="form-field">
                                    <input type="checkbox" id="prv_check" name="prv_check"><label for="prv_check">(비회원) 개인정보취급처리 동의</label>
                                </div>
                                <a href="javascript:modalOpen('personalInfoPopup');" class="link">전체보기</a>
                            </div>  
                            <!--//-->  

                            <div class="btn-center mt30">                                
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

        <script type="text/javascript">
            // file add row
            var count = 2;
            $("#addRow").click(function () {

                if(count >= 4){
                    alert("파일 업로드 최대 개수는 3개 입니다.");
                    return;
                }else{
                    var html = '';
                    html += '<div class="form-field file mt10">';
                    html += '<input type="file" id="file'+count+'">';
                    html += '<input type="text" id="file_attatch[]" name="file_attatch[]" class="upload-name form-input">';
                    html += '<label for="file'+count+'" class="mbtn">파일찾기</label>';
                    html += '<button type="button" class="mbtn white removeRow w80">- 삭제</button>';
                    html += '</div>';

                    count++;

                    $('#newFileList').append(html);
                }
            });

            // file remove row
            $(document).on("click", ".removeRow", function(){
                $(this).closest('.form-field.file').remove();
                count--;
            });
        </script>  

    </div>
</body>
</html>