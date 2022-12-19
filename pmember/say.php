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
                    <div class="total">
                        <div>총 <b>120</b>건</div>
                        <a href="" class="more">더보기</a>
                    </div>
                    <div class="webjin-ask">
                        <ul>
                            <li>
                                <div class="thumb">
                                    <a href=""><img src="../img/noimg.png" alt="층간 소음 규제 강화에 대한 당신의 생각은?"></a>
                                </div>
                                <div class="info">
                                    <div class="hd">
                                        <span class="status">진행중</span>
                                        <span class="period">2022. 08. 01 ~ 2022. 12. 31</span>
                                    </div>
                                    <p class="sbj">
                                        <a href="">층간 소음 규제 강화에 대한 당신의 생각은?</a>
                                    </p>
                                    <p class="conts">
                                        층간소음 피해 해결을 위해 정부 차원의 개입이 필요하다고 느끼신다면 찬성을 눌러주세요. 해당 영역 최대 2줄 노출, 내용이 길 경우 절삭 처리. 층간소음 피해 해결을 위해 정부 차원의 개입이 필요하다고 느끼신다면 찬성을 눌러주세요. 해당 영역 최대 2줄 노출, 내용이 길 경우 절삭 처리.
                                    </p>
                                    <div class="btn">
                                        <button type="button" class="mbtn scolor" onclick="vote(1)">참여하기</button>
                                        <button type="button" class="mbtn" onclick="result_view(1)">결과보기</button>
                                        <button type="button" class="mbtn share" onclick="modalOpen('docShare')"><span>공유하기</span></button>
                                    </div>
                                    <p class="sum">
                                        현재까지 총 <span>7,800</span>명이 참여했습니다.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="board-search">                        
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>할 말 있어요 검색</legend>
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

        <!-- ###### 참여하기 Popup Start ###### //-->
        <div class="modal-wrap" id="askVote">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>참여하기</h2>
                </div>
                <div class="modal-body">
                    <div class="result-box">
                        <h3>층간 소음 규제 강화에 대한 당신의 생각은?</h3>
                        <p class="total">현재 <b>10,000</b>명 참여중</p>
                        <ul class="vote-list">
                            <li>
                                <div class="vt-body">
                                    <h4>찬성</h4>
                                    <em>80%</em>
                                    <button type="button" class="vt-bar"><span style="width:80%"></span></button>
                                </div>                                
                            </li>
                            <li>
                                <div class="vt-body">
                                    <h4>반대</h4>
                                    <em>20%</em>
                                    <button type="button" class="vt-bar"><span style="width:20%"></span></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="modalClose('askVote')">확인</button>
                </div>
            </div>
        </div>  
        <!--//-->        

        <!-- ###### 결과보기 Popup Start ###### //-->
        <div class="modal-wrap" id="askVoteResult">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>결과보기</h2>
                </div>
                <div class="modal-body">
                    <div class="result-box">
                        <h3>층간 소음 규제 강화에 대한 당신의 생각은?</h3>
                        <p class="total">현재 <b>10,000</b>명 참여중</p>
                        <ul class="vote-list">
                            <li>
                                <div class="vt-hd">
                                    <h4>찬성</h4>
                                    <span><b>8,000</b>/10,000표<b>(80%)</b></span>
                                </div>
                                <div class="vt-bar"><span style="width:80%">80%</span></div>
                            </li>
                            <li>
                                <div class="vt-hd">
                                    <h4>반대</h4>
                                    <span><b>2,000</b>/10,000표<b>(20%)</b></span>
                                </div>
                                <div class="vt-bar"><span style="width:20%">20%</span></div>
                            </li>
                        </ul>
                        <div class="btn-center mt30">
                            <a href="" class="mbtn">다른 결과보기</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="modalClose('askVoteResult')">확인</button>
                </div>
            </div>
        </div>  
        <!--//-->

        <!-- 퍼블용 임시 스크립트 소스 //-->
        <script>
            // 투표하기 팝업
            function vote(num) {
                modalOpen('askVote');
            }

            // 결과보기 팝업
            function result_view(num) {
                modalOpen('askVoteResult');
            }
        </script>        
        <!--//-->           

    </div>
</body>
</html>