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
                    <li><span>가짜뉴스 제보</span></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="pmember-wrap suggest layout-1280">
                    <div class="page-title">
                        <h2>가짜뉴스 제보</h2>
                        <p>
                            성숙한 인터넷 문화 정착을 위해 국민의힘은 정보통신망 이용촉진 및 정보보호 등에 관한 법률을 준수합니다.
                        </p>
                    </div>
                                       
                    <!-- 게시글 보기 -->
                    <div class="tbl-view">
                        <dl>
                            <dt class="sbj">
                                <span>[방송언론]</span>
                                제목 노출 영역입니다.
                            </dt>
                            <dd class="name">
                                <span>작성자</span>
                                <em class="r_member">책임</em> 홍**
                            </dd>
                            <dd>
                                <span>생년월일</span>
                                2000. 01. 20
                            </dd>  
                            <dd>
                                <span>연락처</span>
                                2000. 01. 20
                            </dd>  
                            <dd>
                                <span>이메일</span>
                                example@email.com
                            </dd>  
                            <dd>
                                <span>연락처</span>
                                010-1111-2222
                            </dd> 
                            <dd>
                                <span>작성일</span>
                                2022. 09. 13
                            </dd>                            
                            <dd class="conts">
                                가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. <br/>
                                가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. <br/><br/>

                                가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. <br/>
                                가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. <br/><br/>

                                가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다. <br/>
                                가짜뉴스 제보 내용 영역입니다. 가짜뉴스 제보 내용 영역입니다.<br/>
                                가짜뉴스 제보 내용 영역입니다. <br/><br/>

                                가짜뉴스 제보 내용 영역입니다.                                 
                            </dd>                            
                        </dl>
                        <div class="suggestion">
                            <button type="button" class="up">좋아요</button>
                            <button type="button" class="down">글쎄요</button>
                        </div>
                        <div class="view-btn-wrap">
                            <div class="left">
                                <span class="vbtn">댓글 2</span>
                                <span class="vbtn white">추천 6</span>
                            </div>
                            <div class="right">
                                <a href="" class="vbtn white">수정</a>
                                <button type="button" class="vbtn white">삭제</button>
                            </div>                        
                        </div> 
                    </div>                      
                    <!--//-->
                    
                    <!-- 댓글 쓰기 //-->
                    <div class="comment-write">
                        <h3>댓글쓰기</h3>
                        <form class="form mt20">
                            <fieldset>    
                                <legend>댓글쓰기</legend>
                                <div class="form-field">
                                    <textarea name="comment-text" id="comment-text" rows="5" class="textarea limit-txt" placeholder="내용을 입력하세요."></textarea>
                                    <span class="limit-cnt">0/3000</span>
                                </div>
                                <div class="btn-right mt20">
                                    <button type="button" class="mbtn scolor">등록</button>
                                    <button type="button" class="mbtn white">취소</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--//-->
                    
                    <!-- 댓글 리스트 //-->
                    <div class="comment-list">
                        <h4>총 <b>2</b>개의 댓글이 있습니다.</h4>
                        <ul class="clist">
                            <li>
                                <p class="name">honggildong</p>
                                <p class="conts">
                                    댓글 영역입니다. 작성한 댓글 내용이 보여지는 영역으로 라인 제한이 아닌 글자수 제한이 있습니다. 글자수 제한은 예시로 3,000자를 들었지만 필요에 따라 변경하세요. 
                                </p>
                                <p class="date">2022. 09. 13  21:04</p>
                            </li>
                            <li>
                                <p class="name">parkgilja</p>
                                <p class="conts">
                                    댓글 영역입니다. 작성한 댓글 내용이 보여지는 영역으로 라인 제한이 아닌 글자수 제한이 있습니다. 댓글 영역입니다. 작성한 댓글 내용이 보여지는 영역으로 라인 제한이 아닌 
                                    글자수 제한이 있습니다. 댓글 영역입니다. 작성한 댓글 내용이 보여지는 영역으로 라인 제한이 아닌 글자수 제한이 있습니다. 댓글 영역입니다. 작성한 댓글 내용이 보여지는 
                                    영역으로 라인 제한이 아닌 글자수 제한이 있습니다.
                                </p>
                                <p class="date">2022. 09. 13  21:04</p>
                            </li>
                        </ul>
                        <!-- 11/11 수정 -->
                        <div class="paging">
                            <span class="btn_pg first"><a href="#;">처음</a></span>
                            <span class="btn_pg prev"><a href="#;">이전</a></span>			
                            
                            <span class="on"><a href="#;">1</a></span>
                            <span><a href="#;">2</a></span>
                            <span><a href="#;">3</a></span>
                            <span><a href="#;">4</a></span>
                            <span><a href="#;">5</a></span>						
                
                            <span class="btn_pg next"><a href="#;">다음</a></span>
                            <span class="btn_pg last"><a href="#;">마지막</a></span>
                        </div><!-- .paging --> 
                    </div>                    
                    <!--//-->          
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>