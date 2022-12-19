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
                    <li><span>당원교육</span></li>
                    <li><strong>교육자료</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="edu-wrap layout-1280">
                    <div class="page-title">
                        <h2>교육자료</h2>
                        <p>
                            아는 것이 힘! 당원의 힘이 당을 승리로 이끕니다.
                        </p>
                    </div>
                    <div class="board-category">
                        <ul>
                            <li><a href="">동영상강의</a></li>
                            <li class="on"><a href="">교육자료</a></li>
                        </ul>
                    </div>
                    <div class="board-search mt20">
                        <div class="total">
                            총 <b>4,751</b>건의 글이 있습니다.
                        </div>
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>교육자료 검색</legend>
                                    <div class="form-field date">
                                        <input type="month" class="form-input">
                                    </div>
                                    <div class="form-field class">
                                        <select name="" id="" class="sel">
                                            <option value="" selected>제목</option>
                                            <option value="">내용</option>
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
                                <col>
                                <col style="width:12rem">
                                <col style="width:15rem">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>첨부파일</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<10;$i++) { ?>
                                <tr>
                                    <td class="no">25</td>
                                    <td class="sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가)</a>                                        
                                    </td>
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