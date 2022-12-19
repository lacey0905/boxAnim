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
                    <div class="cal-daily">
                        <div class="cur_month">
                            <div class="month-sel">
                                <button type="button" class="prev">08</button>
                                <span>2022.09</span>
                                <button type="button" class="next">10</button>
                            </div>
                            <div class="mode-sel">
                                <span class="active"><button type=button>일별</button></span>
                                <span><button type=button>월별</button></span>
                            </div>
                        </div>
                        <div class="cur_day">
                            <div>
                                <ul>                                    
                                    <li><a href="javascript:;">01(월)</a></li>
                                    <li><a href="javascript:;">02(화)</a></li>
                                    <li><a href="javascript:;">03(수)</a></li>
                                    <li><a href="javascript:;">04(목)</a></li>
                                    <li><a href="javascript:;">05(금)</a></li>
                                    <li class="sat"><a href="javascript:;">06(토)</a></li>
                                    <li class="sun"><a href="javascript:;">07(일)</a></li>
                                    <li><a href="javascript:;">08(월)</a></li>
                                    <li><a href="javascript:;">09(화)</a></li>
                                    <li><a href="javascript:;">10(수)</a></li>
                                    <li><a href="javascript:;">11(목)</a></li>
                                    <li><a href="javascript:;">12(금)</a></li>
                                    <li class="sat active"><a href="javascript:;">13(토)</a></li> <!-- 오늘 날짜 기본 선택 -->
                                    <li class="sun"><a href="javascript:;">14(일)</a></li>
                                    <li><a href="javascript:;">15(월)</a></li>
                                    <li><a href="javascript:;">16(화)</a></li>
                                    <li><a href="javascript:;">17(수)</a></li>
                                    <li><a href="javascript:;">18(목)</a></li>
                                    <li><a href="javascript:;">19(금)</a></li>
                                    <li class="sat"><a href="javascript:;">20(토)</a></li>
                                    <li class="sun"><a href="javascript:;">21(일)</a></li>
                                    <li><a href="javascript:;">22(월)</a></li>
                                    <li><a href="javascript:;">23(화)</a></li>
                                    <li><a href="javascript:;">24(수)</a></li>
                                    <li><a href="javascript:;">25(목)</a></li>
                                    <li><a href="javascript:;">26(금)</a></li>
                                    <li class="sat"><a href="javascript:;">27(토)</a></li>
                                    <li class="sun"><a href="javascript:;">28(일)</a></li>
                                    <li><a href="javascript:;">29(월)</a></li>
                                    <li><a href="javascript:;">30(화)</a></li>
                                    <li><a href="javascript:;">31(수)</a></li>
                                </ul>
                                <a href="javascript:;" class="pager-prev">prev</a>
                                <a href="javascript:;" class="pager-next">next</a>
                            </div>
                        </div>
                        <div class="cur_detail">
                            <div class="cd-hd">
                                <h3><span>2022년 9월 14일(수)</span> 일정</h3>
                                <button type="button" id="copy-btn" class="tbtn"><span>텍스트 복사하기</span></button>
                                <!-- 복사용 텍스트박스 //-->
                                <textarea id="copy-text">
비상대책위원장
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
                                </textarea>
                                <!--//-->
                            </div>
                            <div class="cd-body">
                                <dl>
                                    <dt>비상대책위원장</dt>
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