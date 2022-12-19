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
                    <li><strong>중앙당 일정</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="schedule-wrap layout-1280">
                    <div class="page-title">
                        <h2>중앙당 일정</h2>
                        <p>
                            국민의힘에서 전해드리는 오늘의 일정 및 행사안내입니다.
                        </p>
                    </div>
                    <div class="board-search mt50">                        
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>중앙당 일정 검색</legend>
                                    <div class="form-field date">
                                        <input type="month" class="form-input">
                                    </div>
                                    <div class="form-field btn">
                                        <button type="submit" class="mbtn grey">검색</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="cal-month">
                        <div class="cm-head">
                            <div class="who-sel">
                                <span class="w1">당대표</span>
                                <span class="w2">원내대표</span>
                                <span class="w3">정책위의장</span>
                                <span class="w4">사무총장</span>
                            </div>
                            <div class="mode-sel">
                                <span><button type=button>일별</button></span>
                                <span class="active"><button type=button>월별</button></span>
                            </div>
                        </div>
                        <div class="cm-body">
                            <div class="cur_calendar">
                                <div class="cur_month">
                                    <div class="month-sel">
                                        <button type="button" class="prev">08</button>
                                        <span>2022.09</span>
                                        <button type="button" class="next">10</button>
                                    </div>
                                </div>
                                <div class="calendar-wrap">
                                    <ul class="weeks">
                                        <li class="sun">일</li>
                                        <li>월</li>
                                        <li>화</li>
                                        <li>수</li>
                                        <li>목</li>
                                        <li>금</li>
                                        <li class="sat">토</li>
                                    </ul>
                                    <ul class="days">
                                        <li class="disabled"></li>
                                        <li class="disabled"></li>
                                        <li class="disabled"></li>
                                        <li class="disabled"></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>01</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>02</span>
                                            </a>
                                        </li>
                                        <li class="sat">
                                            <a href="javascript:;">
                                                <span>03</span>
                                            </a>
                                        </li>
                                        <li class="sun">
                                            <a href="javascript:;">
                                                <span>04</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>05</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>06</span>
                                                <div class="w-dot">
                                                    <span class="w1">당대표</span>
                                                    <span class="w2">원내대표</span>
                                                    <span class="w3">정책위의장</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>07</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>08</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>09</span>
                                                <div class="w-dot">
                                                    <span class="w1">당대표</span>
                                                    <span class="w2">원내대표</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sat">
                                            <a href="javascript:;">
                                                <span>10</span>
                                            </a>
                                        </li>
                                        <li class="sun">
                                            <a href="javascript:;">
                                                <span>11</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>14</span>
                                                <div class="w-dot">
                                                    <span class="w1">당대표</span>
                                                    <span class="w2">원내대표</span>
                                                    <span class="w3">정책위의장</span>
                                                    <span class="w4">사무총장</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>15</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>16</span>
                                                <div class="w-dot">
                                                    <span class="w1">당대표</span>
                                                    <span class="w2">원내대표</span>
                                                    <span class="w4">사무총장</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sat">
                                            <a href="javascript:;">
                                                <span>17</span>
                                            </a>
                                        </li>
                                        <li class="sun">
                                            <a href="javascript:;">
                                                <span>18</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="javascript:;">
                                                <span>19</span>                                        
                                                <div class="w-dot">
                                                    <span class="w1">당대표</span>
                                                    <span class="w2">원내대표</span>
                                                    <span class="w3">정책위의장</span>
                                                    <span class="w4">사무총장</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>20</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>21</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>22</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>23</span>
                                            </a>
                                        </li>
                                        <li class="sat">
                                            <a href="javascript:;">
                                                <span>24</span>
                                            </a>
                                        </li>
                                        <li class="sun">
                                            <a href="javascript:;">
                                                <span>25</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>26</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>27</span>
                                                <div class="w-dot">
                                                    <span class="w1">당대표</span>
                                                    <span class="w2">원내대표</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>28</span>
                                                <div class="w-dot">
                                                    <span class="w1">당대표</span>
                                                    <span class="w2">원내대표</span>
                                                    <span class="w3">정책위의장</span>
                                                    <span class="w4">사무총장</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>29</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>30</span>
                                            </a>
                                        </li>
                                        <li class="disabled"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cur_detail">
                                <div class="cd-hd">
                                    <h3><span>2022년 9월 19일(월)</span> 일정</h3>
                                    <button type="button" id="copy-btn" class="tbtn"><span>텍스트 복사하기</span></button>
                                    <!-- 복사용 텍스트박스 //-->
                                    <textarea id="copy-text">
당대표
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의     
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의   
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의   
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의   
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의   
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의   
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의   

원내대표
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의  
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의  
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의  
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의  
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의  
13:30  국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의  

정책위의장
13:30  홍문표 의원 주최, <대한민국 식량주권 쌀값 대책마련> 정책토 홍문표 의원 주최, <대한민국 식량주권 쌀값 대책마련> 정책토

사무총장
13:30  홍문표 의원 주최, <대한민국 식량주권 쌀값 대책마련> 정책토 홍문표 의원 주최, <대한민국 식량주권 쌀값 대책마련> 정책토    
                                    </textarea>
                                    <!--//-->
                                </div>
                                <div class="cd-body">
                                    <dl>
                                        <dt>당대표</dt>
                                        <dd>
                                            <ul>
                                                <li>
                                                    <span>13:30</span>
                                                    <p>국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의 국회의원 및 당원협의회 운영위원장 연석회의</p>
                                                </li>    
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>   
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>   
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>   
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>                                       
                                            </ul>                            
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>원내대표</dt>
                                        <dd>
                                            <ul>
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>    
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>   
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>   
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>   
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>                                       
                                            </ul>                            
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>정책위의장</dt>
                                        <dd>
                                            <ul>
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>                                         
                                            </ul>                            
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>사무총장</dt>
                                        <dd>
                                            <ul>
                                                <li>
                                                    <span>13:30</span>
                                                    <p>홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                                </li>                                         
                                            </ul>                            
                                        </dd>
                                    </dl>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

        <!-- 중앙당 일정 SCRIPT //-->
        <script>
            // 텍스트 복사
            $(function(){
                jQuery('#copy-btn').click(
                    function() {
                        var urlbox = document.getElementById( 'copy-text' );
                        urlbox.select();
                        document.execCommand( 'Copy' );
                        alert( '복사 되었습니다.' );
                    }
                );
            });
        </script>
        <!--//-->

    </div>
</body>
</html>