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
                    <li><span>제안합니다</span></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="pmember-wrap suggest layout-1280">
                    <div class="page-title">
                        <h2>제안합니다</h2>
                        <p>
                            성숙한 인터넷 문화 정착을 위해 국민의힘은 정보통신망 이용촉진 및 정보보호 등에 관한 법률을 준수합니다.
                        </p>
                    </div>

                    <div class="total">
                        <div>총 <b>120</b>건의 글이 있습니다.</div>
                    </div>

                    <div class="board-search mt10">                        
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>제안합니다 검색</legend>
                                    <div class="form-field cate">
                                        <select name="" id="" class="sel">
                                            <option value="">구분</option>
                                            <option value="">정치현안</option>
                                            <option value="">정책제안</option>
                                            <option value="">민원사항</option>
                                        </select>
                                    </div>
                                    <div class="form-field date">
                                        <input type="month" class="form-input">
                                    </div>   
                                    <div class="form-field class">
                                        <select name="" id="" class="sel">
                                            <option value="">작성자</option>
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
                                <col style="width:8rem">
                                <col style="width:15rem">
                                <col>
                                <col style="width:12rem">
                                <col style="width:15rem">
                                <col style="width:8rem">
                                <col style="width:8rem">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>구분</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>등록일</th>
                                    <th>추천</th>
                                    <th>댓글</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="td1">25</td>
                                    <td class="td2">정치현안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="r_member">책임</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">24</td>
                                    <td class="td2">정책제안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="g_member">일반</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">23</td>
                                    <td class="td2">정치현안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="o_member">탈당</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">22</td>
                                    <td class="td2">정치현안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="r_member">책임</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">21</td>
                                    <td class="td2">정책제안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="g_member">일반</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">20</td>
                                    <td class="td2">정치현안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="r_member">책임</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">19</td>
                                    <td class="td2">정치현안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="r_member">책임</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">18</td>
                                    <td class="td2">정책제안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="g_member">일반</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">17</td>
                                    <td class="td2">정치현안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="r_member">책임</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
                                <tr>
                                    <td class="td1">16</td>
                                    <td class="td2">정치현안</td>
                                    <td class="td3 sbj">
                                        <a href="">공직후보자 기초자격평가(PPAT) 출제평가지(문항별 배점안내 추가) </a>                                        
                                    </td>
                                    <td class="td4"><em class="r_member">책임</em> 홍**</td>
                                    <td class="td5">2022. 09. 13</td>
                                    <td class="td6">100</td>
                                    <td class="td7">2</td>
                                </tr>
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
                    <div class="list-btn-wrap">
                        <a href="" class="mbtn scolor">글쓰기</a>
                    </div>                  
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>        

    </div>
</body>
</html>