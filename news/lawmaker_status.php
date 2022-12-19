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
                    <li><strong>법안발의현황</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="lawmaker-wrap status layout-1280">
                    <div class="page-title">
                        <h2>의원활동</h2>
                        <p>
                            국민의 생각과 행복이 최우선인 국가정책, 국민의힘이 만들겠습니다.
                        </p>
                    </div>
                    <div class="board-category">
                        <ul>
                            <li><a href="">의원실 행사</a></li>
                            <li class="on"><a href="">법안발의현황</a></li>
                            <li><a href="">보도자료</a></li>
                            <li><a href="">국감자료</a></li>
                        </ul>
                    </div>
                    <div class="law-total">
                        <div><strong>법안발의현황</strong> 총 <b>4,751</b>건의 글이 있습니다.</div>
                        <a href="" class="more">더보기</a>
                    </div>
                    <div class="board-search mt10">                        
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>법안발의현황 검색</legend>
                                    <div class="form-field class">
                                        <select name="" id="" class="sel">
                                            <option value="">대수</option>
                                            <option value="" selected>제21대</option>
                                        </select>
                                    </div>
                                    <div class="form-field date">
                                        <input type="month" class="form-input">
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
                                <col style="width:80px">
                                <col style="width:100px">
                                <col style="width:80px">
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>의안번호</th>
                                    <th>대수</th>
                                    <th>법률법안</th>
                                    <th>대표발의자</th>
                                    <th>공동발의자</th>
                                    <th>소관위원회</th>
                                    <th>제안자</th>
                                    <th>처리상태</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<10;$i++) { ?>
                                <tr>
                                    <td class="td1">3325</td>
                                    <td class="td2">2117454</td>
                                    <td class="td3">제21대</td>
                                    <td class="td sbj">
                                        <a href="">여수ㆍ순천 10ㆍ19사건 진상규명 및 희생자 명예회복에 관한 특별법 일부개정법률안</a>
                                    </td>
                                    <td class="td5">김민기</td>
                                    <td class="td6">강민정 외 5명</td>
                                    <td class="td7">교육위원회</td>
                                    <td class="td8">소병철 의원등 25인</td>
                                    <td class="td9">수정가결</td>
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