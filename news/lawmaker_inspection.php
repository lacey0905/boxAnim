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
                    <li><strong>국감자료</strong></li>
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
                    <div class="law-total">
                        <div><strong>국감자료</strong> 총 <b>4,751</b>건의 글이 있습니다.</div>
                        <a href="" class="mbtn scolor">국감제보하기</a>
                    </div>
                    <div class="lawmaker-data-class">
                        <ul>
                            <li class="dc01"><a href="javascript:;" class="active"><span>국회운영</span></a></li>
                            <li class="dc02"><a href="javascript:;"><span>법제사법</span></a></li>
                            <li class="dc03"><a href="javascript:;"><span>정무</span></a></li>
                            <li class="dc04"><a href="javascript:;"><span>기획재정</span></a></li>
                            <li class="dc05"><a href="javascript:;"><span>교육</span></a></li>
                            <li class="dc06"><a href="javascript:;"><span>외교통일</span></a></li>
                            <li class="dc07"><a href="javascript:;"><span>국방</span></a></li>
                            <li class="dc08"><a href="javascript:;"><span>여성가족</span></a></li>
                            <li class="dc09"><a href="javascript:;"><span>행정안전</span></a></li>
                            <li class="dc10"><a href="javascript:;"><span>문화체육관광</span></a></li>
                            <li class="dc11"><a href="javascript:;"><span>농림축산식품<br>해양수산</span></a></li>
                            <li class="dc12"><a href="javascript:;"><span>보건복지</span></a></li>
                            <li class="dc13"><a href="javascript:;"><span>환경노동</span></a></li>
                            <li class="dc14"><a href="javascript:;"><span>국토교통</span></a></li>
                            <li class="dc15"><a href="javascript:;"><span>정보</span></a></li>
                            <!-- <li class="dc16"><a href="javascript:;"><span>윤리특별</span></a></li> -->
                            <li class="dc17"><a href="javascript:;"><span>과학기술정보<br/>방송통신</span></a></li>
                            <li class="dc18"><a href="javascript:;"><span>산업통상자원<br/>중소벤처기업</span></a></li>
                            <!-- <li class="dc19"><a href="javascript:;"><span>예산결산특별</span></a></li> -->
                        </ul>
                    </div>
                    <div class="board-search">                        
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>국감자료 검색</legend>   
                                    <div class="form-field date">
                                        <input type="month" class="form-input">
                                    </div>   
                                    <div class="form-field class">
                                        <select name="" id="" class="sel">
                                            <option value="" selected>제목</option>
                                            <option value="">내용</option>
                                            <option value="">위원명</option>
                                        </select>
                                    </div>                                 
                                    <div class="form-field word">
                                        <input type="text" class="form-input" placeholder="검색어를 입력하세요.">
                                    </div>
                                    <div class="form-field btn">
                                        <button type="submit" class="mbtn grey">검색</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="board-tbl">
                        <table>
                            <caption>게시판 리스트</caption>
                            <colgroup>
                                <col style="width:10rem">
                                <col style="width:15rem">
                                <col>
                                <col style="width:10rem">
                                <col style="width:12rem">
                                <col style="width:15rem">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>상임위</th>
                                    <th>제목</th>
                                    <th>위원명</th>
                                    <th>첨부파일</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<10;$i++) { ?>
                                <tr>
                                    <td class="no">25</td>
                                    <td class="class">운영위</td>
                                    <td class="sbj">
                                        <a href="">일본군 ‘위안부’ 피해자 기림의 날을 맞이하여, 역사의 진실을 기억하고 알리겠습니다.</a>                                        
                                    </td>
                                    <td class="name">홍길동</td>
                                    <td class="down">
                                        <a href="javascript:;" class="dataroom-down">다운로드</a>
                                    </td>
                                    <td class="date">2022. 09. 13</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
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
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>