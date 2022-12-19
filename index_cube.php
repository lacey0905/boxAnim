<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "./include/_head_common.php"; ?>
    <link rel="stylesheet" href="/ppp/css/cube.css">
</head>
<body>
    <div id="wrap">

        <?php include "./include/_body_skip.php"; ?>

        <?php include "./include/_body_header.php"; ?>

        <div id="container">

            <!-- 메인용 CSS //-->
            <link rel="stylesheet" href="./css/main.css">    
            <!--//-->

            <main id="contents">
                <section class="banner">
                    <script>
                        window.addEventListener('load', function () {
                            this.setTimeout(function () {
                                this.document.querySelector('.visual-container').classList.add('move');
                            }, 0);
                        });
                    </script>
                    <div class="cube_visual">
                        <div class="introVisual">
                            <div class="visual">
                                <div class="visual-container">
                                    <div class="visual-action" data-depth="0">
                                        <div class="visual-box" data-cube="1" style="top: 0px; left: 0px; z-index: 91;"></div>
                                        <div class="visual-box" data-cube="1" style="top: 0px; left: 66px; z-index: 92;"></div>
                                        <div class="visual-box" data-cube="1" style="top: 0px; left: 132px; z-index: 93;"></div>
                                        <div class="visual-box" data-cube="2" style="top: 0px; left: 198px; z-index: 94;"></div>
                                        <div class="visual-box" data-cube="5" style="top: 66px; left: 0px; z-index: 85;"></div>
                                        <div class="visual-box" data-cube="5" style="top: 66px; left: 66px; z-index: 86;"></div>
                                        <div class="visual-box" data-cube="5" style="top: 66px; left: 132px; z-index: 87;"></div>
                                        <div class="visual-box" data-cube="4" style="top: 66px; left: 198px; z-index: 88;"></div>
                                        <div class="visual-box" data-cube="2" style="top: 132px; left: 0px; z-index: 79;"></div>
                                        <div class="visual-box" data-cube="2" style="top: 132px; left: 66px; z-index: 80;"></div>
                                        <div class="visual-box" data-cube="2" style="top: 132px; left: 132px; z-index: 81;"></div>
                                        <div class="visual-box" data-cube="4" style="top: 132px; left: 198px; z-index: 82;"></div>
                                        <div class="visual-box" data-cube="1" style="top: 198px; left: 0px; z-index: 73;"></div>
                                        <div class="visual-box" data-cube="1" style="top: 198px; left: 66px; z-index: 74;"></div>
                                        <div class="visual-box" data-cube="1" style="top: 198px; left: 132px; z-index: 75;"></div>
                                        <div class="visual-box" data-cube="4" style="top: 198px; left: 198px; z-index: 76;"></div>
                                    </div>
                                    <div class="visual-action" data-depth="1">
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 0px; z-index: 91;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 66px; z-index: 92;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 132px; z-index: 93;"></div>
                                        <div class="visual-box" data-cube="7" style="top: 0px; left: 198px; z-index: 94;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 0px; z-index: 85;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 66px; z-index: 86;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 132px; z-index: 87;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 66px; left: 198px; z-index: 88;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 0px; z-index: 79;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 66px; z-index: 80;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 132px; z-index: 81;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 132px; left: 198px; z-index: 82;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 0px; z-index: 73;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 66px; z-index: 74;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 132px; z-index: 75;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 198px; left: 198px; z-index: 76;"></div>
                                    </div>
                                    <div class="visual-action" data-depth="2">
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 0px; z-index: 91;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 66px; z-index: 92;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 132px; z-index: 93;"></div>
                                        <div class="visual-box" data-cube="7" style="top: 0px; left: 198px; z-index: 94;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 0px; z-index: 85;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 66px; z-index: 86;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 132px; z-index: 87;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 66px; left: 198px; z-index: 88;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 0px; z-index: 79;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 66px; z-index: 80;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 132px; z-index: 81;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 132px; left: 198px; z-index: 82;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 0px; z-index: 73;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 66px; z-index: 74;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 132px; z-index: 75;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 198px; left: 198px; z-index: 76;"></div>
                                    </div>
                                    <div class="visual-action" data-depth="3">
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 0px; z-index: 91;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 66px; z-index: 92;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 0px; left: 132px; z-index: 93;"></div>
                                        <div class="visual-box" data-cube="7" style="top: 0px; left: 198px; z-index: 94;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 0px; z-index: 85;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 66px; z-index: 86;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 66px; left: 132px; z-index: 87;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 66px; left: 198px; z-index: 88;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 0px; z-index: 79;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 66px; z-index: 80;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 132px; left: 132px; z-index: 81;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 132px; left: 198px; z-index: 82;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 0px; z-index: 73;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 66px; z-index: 74;"></div>
                                        <div class="visual-box" data-cube="3" style="top: 198px; left: 132px; z-index: 75;"></div>
                                        <div class="visual-box" data-cube="6" style="top: 198px; left: 198px; z-index: 76;"></div>
                                    </div>
                                </div>
                                <div class="visual-logo">
                                    <div class="simbol"></div>
                                </div>
                            </div>
                            <div class="visual-slogan">
                                <span class="txt">국민으로부터 나오는 힘</span>
                                <span class="txt">국민을 위해 행사하는 힘</span>
                                <span class="txt">국민을 하나로 모으는 힘</span>
                            </div>
                            <div class="full-logo">국민의힘</div>
                        </div>
                    </div>
                    <!-- <div class="main_slide">
                        <ul>
                            <li class="item">
                                <div class="vs-img for-pc" style="background-image:url('./img/main_vs04.jpg');"></div>
                                <div class="vs-img for-mobile" style="background-image:url('./img/m_main_vs04.jpg');"></div>
                                <h2>
                                    국민으로부터 나오는 힘<br/>
                                    국민을 하나로 모으는 힘
                                </h2>
                            </li>
                            <li class="item">
                                <div class="vs-img for-pc" style="background-image:url('./img/main_vs05.jpg');"></div>
                                <div class="vs-img for-mobile" style="background-image:url('./img/m_main_vs05.jpg');"></div>
                                <h2>
                                    <span>아이 낳고</span> 살만한 세상이라 <span>느꼈으면.</span>
                                </h2>
                            </li>
                        </ul>
                    </div>
                    <div class="mvs_control">
                        <div class="progress"><span class="pro-bar pro-ani"></span></div>
                    </div> -->
                </section>
                <section class="sns">
                    <div class="in_link">
                        <a href=""><span>국민 모두를 위한 정당, 국민의힘! 온라인 입당</span></a>
                    </div>
                    <div class="sns_subs">
                        <span class="txt">
                            국민의힘 <b>SNS 채널 구독</b>하여 더 많은 소식 받기<em>!</em>
                        </span>
                        <span class="ico">
                            <a href="https://pf.kakao.com/_Mxjxnlj" target="_blank" class="ch">카카오채널</a>
                            <a href="https://www.youtube.com/%EC%98%A4%EB%A5%B8%EC%86%8C%EB%A6%AC?themeRefresh=1" target="_blank" class="yu">유투브</a>
                            <a href="https://www.facebook.com/peoplepowerpartyfb" target="_blank" class="fa">페이스북</a>
                            <a href="https://blog.naver.com/peoplepowerparty" target="_blank" class="bl">블로그</a>
                            <a href="https://www.instagram.com/people_power_party/" target="_blank" class="in">인스타그램</a>
                        </span>
                    </div>
                </section>
                <section class="issu">
                    <div class="is_hd container">
                        <div class="mtit">
                            <h2>일간이슈</h2>
                            <span>총 <b>2,013</b> 건의 글이 있습니다.</span>
                        </div>
                        <div class="mtab">
                            <ul class="mnav">
                                <li><a href="#;"><span>전체</span></a></li>
                                <li><a href="#;"><span>카드뉴스</span></a></li>
                                <li><a href="#;"><span>보도자료</span></a></li>
                                <li><a href="#;"><span>논평</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="msec">
                        <!-- 전체 -->
                        <div class="all">
                            <div>
                                <ul>
                                    <!-- 최신글 10개씩 -->
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">카드뉴스</span>
                                                <p class="sbj">2022 국회의원 연찬회 결의문</p>
                                                <p class="date">2022.08.26</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img1.jpg" alt="2022 국회의원 연찬회 결의문">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">보도자료</span>
                                                <p class="sbj">[윤석열 정부 첫 세제개편안 발표] 국민의 삶, 무엇이 좋아지나요?</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img2.jpg" alt="[윤석열 정부 첫 세제개편안 발표] 국민의 삶, 무엇이 좋아지나요?">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">논평</span>
                                                <p class="sbj">22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <div class="conts">
                                                <p class="name">[수석대변인 양금희]</p>
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">논평</span>
                                                <p class="sbj">22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <div class="conts">
                                                <p class="name">[수석대변인 양금희]</p>
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">논평</span>
                                                <p class="sbj">22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <div class="conts">
                                                <p class="name">[수석대변인 양금희]</p>
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>                    
                            <div class="control">
                                <div class="indi">
                                    <span class="cur"></span>
                                    <span class="end"></span>
                                </div>
                                <div class="bx-next">
                                    <a href="#none" class="pager-stop">stop</a>
                                    <a href="#none" class="pager-play">play</a>
                                    <a href="#none" class="pager-prev">prev</a>
                                    <a href="#none" class="pager-next">next</a>
                                    <a href="" class="more">more</a>
                                </div>
                            </div>
                        </div>
                        <!-- 카드뉴스 -->
                        <div class="card">
                            <div>
                                <ul>
                                    <!-- 최신글 10개씩 -->
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">카드뉴스</span>
                                                <p class="sbj">2022 국회의원 연찬회 결의문</p>
                                                <p class="date">2022.08.26</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img1.jpg" alt="2022 국회의원 연찬회 결의문">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">카드뉴스</span>
                                                <p class="sbj">[윤석열 정부 첫 세제개편안 발표] 국민의 삶, 무엇이 좋아지나요?</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img2.jpg" alt="[윤석열 정부 첫 세제개편안 발표] 국민의 삶, 무엇이 좋아지나요?">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">카드뉴스</span>
                                                <p class="sbj">22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img3.jpg" alt="22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">카드뉴스</span>
                                                <p class="sbj">22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img3.jpg" alt="22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">카드뉴스</span>
                                                <p class="sbj">22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img3.jpg" alt="22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>                    
                            <div class="control">
                                <div class="indi">
                                    <span class="cur"></span>
                                    <span class="end"></span>
                                </div>
                                <div class="bx-next">
                                    <a href="#none" class="pager-stop">stop</a>
                                    <a href="#none" class="pager-play">play</a>
                                    <a href="#none" class="pager-prev">prev</a>
                                    <a href="#none" class="pager-next">next</a>
                                    <a href="" class="more">more</a>
                                </div>
                            </div>
                        </div>
                        <!-- 보도자료 -->
                        <div class="press">
                            <div>
                                <ul>
                                    <!-- 최신글 10개씩 -->
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">보도자료</span>
                                                <p class="sbj">2022 국회의원 연찬회 결의문</p>
                                                <p class="date">2022.08.26</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img1.jpg" alt="2022 국회의원 연찬회 결의문">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">보도자료</span>
                                                <p class="sbj">[윤석열 정부 첫 세제개편안 발표] 국민의 삶, 무엇이 좋아지나요?</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img2.jpg" alt="[윤석열 정부 첫 세제개편안 발표] 국민의 삶, 무엇이 좋아지나요?">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">보도자료</span>
                                                <p class="sbj">22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 있으면 -->
                                            <div class="thumb">
                                                <img src="./img/main_iss_img3.jpg" alt="22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">보도자료</span>
                                                <p class="sbj">미성년 대상 디지털성범죄 근절을 위한 추적, 멈추지 않을 것이다 미성년 대상 디지털성범죄 근절을 위한 추적, 멈추지 않을 것이다</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 없으면 -->
                                            <div class="conts">
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">보도자료</span>
                                                <p class="sbj">미성년 대상 디지털성범죄 근절을 위한 추적, 멈추지 않을 것이다 미성년 대상 디지털성범죄 근절을 위한 추적, 멈추지 않을 것이다</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <!-- 이미지 없으면 -->
                                            <div class="conts">
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="control">
                                <div class="indi">
                                    <span class="cur"></span>
                                    <span class="end"></span>
                                </div>
                                <div class="bx-next">
                                    <a href="#none" class="pager-stop">stop</a>
                                    <a href="#none" class="pager-play">play</a>
                                    <a href="#none" class="pager-prev">prev</a>
                                    <a href="#none" class="pager-next">next</a>
                                    <a href="" class="more">more</a>
                                </div>
                            </div>
                        </div>
                        <!-- 논평 -->
                        <div class="comment">
                            <div>
                                <ul>
                                    <!-- 최신글 10개씩 -->
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">공식논평</span>
                                                <p class="sbj">2022 국회의원 연찬회 결의문</p>
                                                <p class="date">2022.08.26</p>
                                            </div>
                                            <div class="conts">
                                                <p class="name">[수석대변인 양금희]</p>
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">공식논평</span>
                                                <p class="sbj">[윤석열 정부 첫 세제개편안 발표] 국민의 삶, 무엇이 좋아지나요?</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <div class="conts">
                                                <p class="name">[수석대변인 양금희]</p>
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">공식논평</span>
                                                <p class="sbj">22.08.09. 윤석열 대통령 관악구 침수피해 현장 방문</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <div class="conts">
                                                <p class="name">[수석대변인 양금희]</p>
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">공식논평</span>
                                                <p class="sbj">미성년 대상 디지털성범죄 근절을 위한 추적, 멈추지 않을 것이다 미성년 대상 디지털성범죄 근절을 위한 추적, 멈추지 않을 것이다</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <div class="conts">
                                                <p class="name">[수석대변인 양금희]</p>
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="info">
                                                <span class="cate">공식논평</span>
                                                <p class="sbj">미성년 대상 디지털성범죄 근절을 위한 추적, 멈추지 않을 것이다 미성년 대상 디지털성범죄 근절을 위한 추적, 멈추지 않을 것이다</p>
                                                <p class="date">2022.08.22</p>
                                            </div>
                                            <div class="conts">
                                                <p class="name">[수석대변인 양금희]</p>
                                                <p class="memo">
                                                    2년 전 ‘n번방 방지법’이 국회를 통과했지만 미
                                                    성년자 대상 디지털성범죄는 여전히 늘고 있다. 
                                                    10대 디지털성범죄 피해자는 2019년 321명에
                                                    서 2021년 1,481명으로 3년 만에 361% 증가
                                                    하였고, 작년에만 디지털성범죄사범 1만7,495
                                                    명이 처분되었다. 
                                                </p>                                                
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>                    
                            <div class="control">
                                <div class="indi">
                                    <span class="cur"></span>
                                    <span class="end"></span>
                                </div>
                                <div class="bx-next">
                                    <a href="#none" class="pager-stop">stop</a>
                                    <a href="#none" class="pager-play">play</a>
                                    <a href="#none" class="pager-prev">prev</a>
                                    <a href="#none" class="pager-next">next</a>
                                    <a href="" class="more">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="notice_schedule">
                    <div class="notice">
                        <div class="mtit bd-btm">
                            <h2>공지사항</h2>
                            <span>총 <b>1,064</b> 건</span>
                            <a href="">더보기</a>
                        </div>
                        <!-- 공지글 //-->
                        <div class="nt_check">
                            <div class="thumb"><a href=""><img src="./img/notice_img1.png" alt="당헌개정안 공고 (공고권자 : 권성동 당대표 직무대행)"></a></div>
                            <div class="info">
                                <span class="cate">공지</span>
                                <p class="sbj"><a href="">당헌개정안 공고 (공고권자 : 권성동 당대표 직무대행)</a></p>
                                <p class="conts">당헌 제91조 제1항에 의거하여 제3차 전국위원회 당헌 제91조 제1항에 의거하여 제3차 전국위원회</p>
                                <p class="date">2022. 08. 22</p>
                            </div>
                        </div>
                        <!--//-->
                        <div class="nt_list">
                            <ul>
                                <li>
                                    <span class="date">2022. 08. 05</span>
                                    <p class="sbj"><a href="">국민의힘 제3차 전국위원회 소집공고</a></p>
                                    <p class="conts">
                                        당헌 제91조제1항에 의거하여 제3차 전국위원회에 부의된 당헌 제91조제1항에 의거하여 제3차 전국위원회에 부의된
                                    </p>
                                </li>
                                <li>
                                    <span class="date">2022. 08. 05</span>
                                    <p class="sbj"><a href="">국민의힘 상임위원장 후보자 선출 후보등록 결과 공고</a></p>
                                    <p class="conts">
                                        국민의힘 상임위원장 후보자 선출 후보등록 결과 공고
                                    </p>
                                </li>
                                <li>
                                    <span class="date">2022. 08. 05</span>
                                    <p class="sbj"><a href="">국민의힘 상임위원장(운영위·법사위) 후보자 선출을 위한 국민의힘 상임위원장(운영위·법사위) 후보자 선출을 위한</a></p>
                                    <p class="conts">
                                        당헌 제91조제1항에 의거하여 제3차 전국위원회에 부의된 당헌 제91조제1항에 의거하여 제3차 전국위원회에 부의된 당헌 제91조제1항에 의거하여 제3차 전국위원회에 부의된 당헌 제91조제1항에 의거하여 제3차 전국위원회에 부의된
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="schedule">
                        <div class="mtit bd-btm">
                            <h2>주요일정</h2>
                            <a href="">더보기</a>
                        </div>
                        <div class="cur_month">
                            <select name="" id="" class="sch_sel">
                                <option value="2022-07">2022. 07</option>
                                <option value="2022-08" selected>2022. 08</option><!-- 이번달 기본 선택 -->
                                <option value="2022-09">2022. 09</option>
                            </select>
                        </div>
                        <div class="cur_day">
                            <div>
                                <ul>                                    
                                    <li><a href="javascript:;">01(월)</a></li>
                                    <li><a href="javascript:;">02(화)</a></li>
                                    <li><a href="javascript:;">03(수)</a></li>
                                    <li><a href="javascript:;">04(목)</a></li>
                                    <li><a href="javascript:;">05(금)</a></li>
                                    <li><a href="javascript:;">06(토)</a></li>
                                    <li><a href="javascript:;">07(일)</a></li>
                                    <li><a href="javascript:;">08(월)</a></li>
                                    <li><a href="javascript:;">09(화)</a></li>
                                    <li><a href="javascript:;">10(수)</a></li>
                                    <li><a href="javascript:;">11(목)</a></li>
                                    <li><a href="javascript:;">12(금)</a></li>
                                    <li class="active"><a href="javascript:;">13(토)</a></li> <!-- 오늘 날짜 기본 선택 -->
                                    <li><a href="javascript:;">14(일)</a></li>
                                    <li><a href="javascript:;">15(월)</a></li>
                                    <li><a href="javascript:;">16(화)</a></li>
                                    <li><a href="javascript:;">17(수)</a></li>
                                    <li><a href="javascript:;">18(목)</a></li>
                                    <li><a href="javascript:;">19(금)</a></li>
                                    <li><a href="javascript:;">20(토)</a></li>
                                    <li><a href="javascript:;">21(일)</a></li>
                                    <li><a href="javascript:;">22(월)</a></li>
                                    <li><a href="javascript:;">23(화)</a></li>
                                    <li><a href="javascript:;">24(수)</a></li>
                                    <li><a href="javascript:;">25(목)</a></li>
                                    <li><a href="javascript:;">26(금)</a></li>
                                    <li><a href="javascript:;">27(토)</a></li>
                                    <li><a href="javascript:;">28(일)</a></li>
                                    <li><a href="javascript:;">29(월)</a></li>
                                    <li><a href="javascript:;">30(화)</a></li>
                                    <li><a href="javascript:;">31(수)</a></li>
                                </ul>
                                <a href="javascript:;" class="pager-prev">prev</a>
                                <a href="javascript:;" class="pager-next">next</a>
                            </div>
                        </div>
                        <div class="cur_detail scrollbar">
                            <ul>
                                <li>
                                    <div class="date">
                                        <span>13</span>
                                        2022.08
                                    </div>
                                    <div class="info">
                                        <div class="time">
                                            <span>13:30</span>
                                        </div>
                                        <p class="name">주호영 비상대책위원장</p>
                                        <p class="conts">홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토 홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                    </div>                            
                                </li>
                                <li>
                                    <div class="date">
                                        <span>13</span>
                                        2022.08
                                    </div>
                                    <div class="info">
                                        <div class="time">
                                            <span>13:30</span>
                                        </div>
                                        <p class="name">성일종 정책위의장</p>
                                        <p class="conts">신원식·한기호 의원 주최, &lt;신해양강국을 위한 해군의 역할과&gt;</p>
                                    </div>                            
                                </li>
                                <li>
                                    <div class="date">
                                        <span>13</span>
                                        2022.08
                                    </div>
                                    <div class="info">
                                        <div class="time">
                                            <span>13:30</span>
                                        </div>
                                        <p class="name">권성동 원내대표</p>
                                        <p class="conts">통상업무</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="date">
                                        <span>13</span>
                                        2022.08
                                    </div>
                                    <div class="info">
                                        <div class="time">
                                            <span>13:30</span>
                                        </div>
                                        <p class="name">주호영 비상대책위원장</p>
                                        <p class="conts">홍문표 의원 주최, &lt;대한민국 식량주권 쌀값 대책마련&gt; 정책토</p>
                                    </div>                            
                                </li>
                                <li>
                                    <div class="date">
                                        <span>13</span>
                                        2022.08
                                    </div>
                                    <div class="info">
                                        <div class="time">
                                            <span>13:30</span>
                                        </div>
                                        <p class="name">성일종 정책위의장</p>
                                        <p class="conts">신원식·한기호 의원 주최, &lt;신해양강국을 위한 해군의 역할과&gt;</p>
                                    </div>                            
                                </li>
                                <li>
                                    <div class="date">
                                        <span>13</span>
                                        2022.08
                                    </div>
                                    <div class="info">
                                        <div class="time">
                                            <span>13:30</span>
                                        </div>
                                        <p class="name">권성동 원내대표</p>
                                        <p class="conts">통상업무</p>
                                    </div>                            
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="raw">
                    <div class="container">
                        <div class="r1">
                            <h2>국민의힘 최근 <span>법안발의</span></h2>
                            <p>총 <b>16,827</b> 건</p>
                        </div>
                        <div class="r2">
                            <ul>
                                <li>
                                    <span class="name">강기윤 의원</span>
                                    <span class="sbj">국민연금법 일부개정법률안</span>
                                    <span class="date">2022.08.16</span>
                                </li>
                                <li>
                                    <span class="name">강기윤 의원</span>
                                    <span class="sbj">국가를 당사자로 하는 계약에 관한 법률 일부개정법률안</span>
                                    <span class="date">2022.08.16</span>
                                </li>
                                <li>
                                    <span class="name">강기윤의원 등 10인</span>
                                    <span class="sbj">지방자치단체를 당사자로 하는 계약에 관한 법률 일부개정법률안</span>
                                    <span class="date">2022.08.16</span>
                                </li>
                                <li>
                                    <span class="name">강기윤의원 등 10인</span>
                                    <span class="sbj">지방자치단체를 당사자로 하는 계약에 관한 법률 일부개정법률안</span>
                                    <span class="date">2022.08.16</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="seminar container">
                    <div class="indiv">
                        <div class="mtit bd-btm">
                            <h2>세미나일정</h2>
                            <span>총 <b>1,064</b> 건</span>
                            <a href="">더보기</a>
                        </div>
                        <ul>
                            <li>
                                <div class="date">
                                    <p><span>14</span>2022.08</p>
                                </div>
                                <div class="info">
                                    <p class="sbj">
                                        <a href="">일본식 문화재체제 60년, 국가유산체제로의 패러다임 전환 일본식 문화재체제 60년, 국가유산체제로의 패러다임 전환</a>
                                    </p>
                                    <p class="from">배현진 의원실, 국민의힘 정책위원회</p>
                                    <span class="time">AM 10:00</span>
                                </div>
                            </li>
                            <li>
                                <div class="date">
                                    <p><span>12</span>2022.08</p>
                                </div>
                                <div class="info">
                                    <p class="sbj">
                                        <a href="">일본식 문화재체제 60년, 국가유산체제로의 패러다임 전환</a>
                                    </p>
                                    <p class="from">배현진 의원실, 국민의힘 정책위원회</p>
                                    <span class="time">AM 13:00</span>
                                </div>
                            </li>
                            <li>
                                <div class="date">
                                    <p><span>09</span>2022.08</p>
                                </div>
                                <div class="info">
                                    <p class="sbj">
                                        <a href="">일본식 문화재체제 60년, 국가유산체제로의 패러다임 전환</a>
                                    </p>
                                    <p class="from">배현진 의원실, 국민의힘 정책위원회</p>
                                    <span class="time">AM 13:00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="news container">
                    <div class="photo">
                        <div class="mtit bd-btm">
                            <h2>포토뉴스</h2>
                            <span>총 <b>1,064</b> 건</span>
                            <a href="">더보기</a>
                        </div>
                        <div class="dlist">
                            <ul>
                                <!-- 상세 리스트 -->
                                <li>                            
                                    <p class="sbj">정책의원총회</p>
                                    <p class="date">2022. 08. 23</p>
                                    <div class="img">
                                        <a href=""><img src="./img/main_photo_img1.png" alt="정책의원총회"></a>
                                    </div>
                                    <p class="conts">
                                        주호영 비상대책위원장을 비롯한 당 지도부는 23일 서울 여의도 한 식당에서 당 상임고
                                        문단과 회의를 갖고 질책과 조언을 듣는 자리를 갖고 있다.
                                    </p>
                                    <div class="btm">
                                        <span class="view">324</span>
                                        <a href="javascript:;" class="sugg active">64</a>
                                        <a href="javascript:;" class="share">공유</a>
                                    </div>
                                </li>
                                <li>                            
                                    <p class="sbj">상임고문단 회의</p>
                                    <p class="date">2022. 08. 23</p>
                                    <div class="img">
                                        <a href=""><img src="./img/main_photo_img1.png" alt="상임고문단 회의"></a>
                                    </div>
                                    <p class="conts">
                                        주호영 비상대책위원장을 비롯한 당 지도부는 23일 서울 여의도 한 식당에서 당 상임고
                                        문단과 회의를 갖고 질책과 조언을 듣는 자리를 갖고 있다.
                                    </p>
                                    <div class="btm">
                                        <span class="view">324</span>
                                        <a href="javascript:;" class="sugg">64</a>
                                        <a href="javascript:;" class="share">공유</a>
                                    </div>
                                </li>
                                <li>                            
                                    <p class="sbj">제8회 동시지방선거 인천시당 당선인 워크숍</p>
                                    <p class="date">2022. 08. 23</p>
                                    <div class="img">
                                        <a href=""><img src="./img/main_photo_img1.png" alt="제8회 동시지방선거 인천시당 당선인 워크숍"></a>
                                    </div>
                                    <p class="conts">
                                        주호영 비상대책위원장을 비롯한 당 지도부는 23일 서울 여의도 한 식당에서 당 상임고
                                        문단과 회의를 갖고 질책과 조언을 듣는 자리를 갖고 있다.
                                    </p>
                                    <div class="btm">
                                        <span class="view">324</span>
                                        <a href="javascript:;" class="sugg">64</a>
                                        <a href="javascript:;" class="share">공유</a>
                                    </div>
                                </li>
                                <li>                            
                                    <p class="sbj">정책의원총회</p>
                                    <p class="date">2022. 08. 23</p>
                                    <div class="img">
                                        <a href=""><img src="./img/main_photo_img1.png" alt="정책의원총회"></a>
                                    </div>
                                    <p class="conts">
                                        주호영 비상대책위원장을 비롯한 당 지도부는 23일 서울 여의도 한 식당에서 당 상임고
                                        문단과 회의를 갖고 질책과 조언을 듣는 자리를 갖고 있다.
                                    </p>
                                    <div class="btm">
                                        <span class="view">324</span>
                                        <a href="javascript:;" class="sugg">64</a>
                                        <a href="javascript:;" class="share">공유</a>
                                    </div>
                                </li>
                                <li>                            
                                    <p class="sbj">해수부 공무원 피격사건 진상조사 TF 1차 회의</p>
                                    <p class="date">2022. 08. 23</p>
                                    <div class="img">
                                        <a href=""><img src="./img/main_photo_img1.png" alt="해수부 공무원 피격사건 진상조사 TF 1차 회의"></a>
                                    </div>
                                    <p class="conts">
                                        주호영 비상대책위원장을 비롯한 당 지도부는 23일 서울 여의도 한 식당에서 당 상임고
                                        문단과 회의를 갖고 질책과 조언을 듣는 자리를 갖고 있다.
                                    </p>
                                    <div class="btm">
                                        <span class="view">324</span>
                                        <a href="javascript:;" class="sugg">64</a>
                                        <a href="javascript:;" class="share">공유</a>
                                    </div>
                                </li>
                                <li>                            
                                    <p class="sbj">중앙대학생위원회 고려대학교지부</p>
                                    <p class="date">2022. 08. 23</p>
                                    <div class="img">
                                        <a href=""><img src="./img/main_photo_img1.png" alt="중앙대학생위원회 고려대학교지부"></a>
                                    </div>
                                    <p class="conts">
                                        주호영 비상대책위원장을 비롯한 당 지도부는 23일 서울 여의도 한 식당에서 당 상임고
                                        문단과 회의를 갖고 질책과 조언을 듣는 자리를 갖고 있다.
                                    </p>
                                    <div class="btm">
                                        <span class="view">324</span>
                                        <a href="javascript:;" class="sugg">64</a>
                                        <a href="javascript:;" class="share">공유</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="dlist_pager">
                            <div>
                                <!-- 페이징 리스트 -->                        
                                <a data-slide-index="0" href="#none">
                                    <div class="thumb"><img src="./img/main_photo_img1.png" alt="정책의원총회"></div>
                                    <p class="sbj">정책의원총회</p>
                                </a>                        
                                <a data-slide-index="1" href="#none">
                                    <div class="thumb"><img src="./img/main_photo_img1.png" alt="상임고문단 회의"></div>
                                    <p class="sbj">상임고문단 회의</p>
                                </a>                        
                                <a data-slide-index="2" href="#none">
                                    <div class="thumb"><img src="./img/main_photo_img1.png" alt="제8회 동시지방선거 인천시당 당선인 워크숍"></div>
                                    <p class="sbj">제8회 동시지방선거 인천시당 당선인 워크숍</p>
                                </a>                        
                                <a data-slide-index="3" href="#none">
                                    <div class="thumb"><img src="./img/main_photo_img1.png" alt="정책의원총회"></div>
                                    <p class="sbj">정책의원총회</p>
                                </a>                        
                                <a data-slide-index="4" href="#none">
                                    <div class="thumb"><img src="./img/main_photo_img1.png" alt="해수부 공무원 피격사건 진상조사 TF 1차 회의"></div>
                                    <p class="sbj">해수부 공무원 피격사건 진상조사 TF 1차 회의 해수부 공무원 피격사건 진상조사 TF 1차 회의</p>
                                </a>
                                <a data-slide-index="5" href="#none">
                                    <div class="thumb"><img src="./img/main_photo_img1.png" alt="중앙대학생위원회 고려대학교지부"></div>
                                    <p class="sbj">중앙대학생위원회 고려대학교지부</p>
                                </a> 
                            </div>                                
                        </div>
                        <div class="control">
                            <div class="indi">
                                <span class="cur"></span>
                                <span class="end"></span>
                            </div>
                            <div class="bx-next">
                                <a href="#none" class="pager-stop">stop</a>
                                <a href="#none" class="pager-play">play</a>
                                <a href="#none" class="pager-prev">prev</a>
                                <a href="#none" class="pager-next">next</a>
                                <a href="" class="more">more</a>
                            </div>
                        </div>
                    </div>
                    <div class="mov">
                        <div class="mtit bd-btm">
                            <h2>영상뉴스</h2>
                            <span>총 <b>1,064</b> 건</span>
                            <a href="">더보기</a>
                        </div>
                        <ul class="mlist">
                            <li>
                                <p class="sbj">[Live] 6월 23일 최고위원회의</p>
                                <p class="date">2022. 06. 23</p>
                                <div class="thumb">
                                    <a href="">
                                        <img src="./img/main_mov_img1.png" alt="[Live] 6월 23일 최고위원회의">
                                    </a>
                                </div>
                                <p class="keyword">
                                    <span>국민의힘</span>
                                    <span>이준석</span>
                                    <span>당대표</span>
                                    <span>권성동</span>
                                    <span>원내대표</span>
                                    <span>최고위원회의</span>
                                    <span>국회원구성</span>
                                    <span>법사위원장</span>
                                    <span>해수부공무원</span>
                                </p>
                                <div class="btm">
                                    <span class="view">324</span>
                                    <a href="javascript:;" class="sugg active">64</a>
                                    <a href="javascript:;" class="share">공유</a>
                                </div>
                            </li>
                            <li>
                                <p class="sbj">[Live] 6월 23일 정책의원총회</p>
                                <p class="date">2022. 06. 23</p>
                                <div class="thumb">
                                    <a href="">
                                        <img src="./img/main_mov_img1.png" alt="[Live] 6월 23일 정책의원총회">
                                    </a>
                                </div>
                                <p class="keyword">
                                    <span>국민의힘</span>
                                    <span>이준석</span>
                                    <span>당대표</span>
                                    <span>권성동</span>
                                    <span>원내대표</span>
                                    <span>최고위원회의</span>
                                    <span>국회원구성</span>
                                    <span>법사위원장</span>
                                    <span>해수부공무원</span>
                                </p>
                                <div class="btm">
                                    <span class="view">324</span>
                                    <a href="javascript:;" class="sugg">64</a>
                                    <a href="javascript:;" class="share">공유</a>
                                </div>
                            </li>
                            <li>
                                <p class="sbj">[Live] 6월 22일 제8회 동시 지방선거 인천시당 당선인 워크숍</p>
                                <p class="date">2022. 06. 23</p>
                                <div class="thumb">
                                    <a href="">
                                        <img src="./img/main_mov_img1.png" alt="[Live] 6월 22일 제8회 동시 지방선거 인천시당 당선인 워크숍">
                                    </a>
                                </div>
                                <p class="keyword">
                                    <span>국민의힘</span>
                                    <span>이준석</span>
                                    <span>당대표</span>
                                    <span>권성동</span>
                                    <span>원내대표</span>
                                    <span>최고위원회의</span>
                                    <span>국회원구성</span>
                                    <span>법사위원장</span>
                                    <span>해수부공무원</span>
                                </p>
                                <div class="btm">
                                    <span class="view">324</span>
                                    <a href="javascript:;" class="sugg">64</a>
                                    <a href="javascript:;" class="share">공유</a>
                                </div>
                            </li>
                            <li>
                                <p class="sbj">[Live] 6월 23일 정책의원총회</p>
                                <p class="date">2022. 06. 23</p>
                                <div class="thumb">
                                    <a href="">
                                        <img src="./img/main_mov_img1.png" alt="[Live] 6월 23일 정책의원총회">
                                    </a>
                                </div>
                                <p class="keyword">
                                    <span>국민의힘</span>
                                    <span>이준석</span>
                                    <span>당대표</span>
                                    <span>권성동</span>
                                    <span>원내대표</span>
                                    <span>최고위원회의</span>
                                    <span>국회원구성</span>
                                    <span>법사위원장</span>
                                    <span>해수부공무원</span>
                                </p>
                                <div class="btm">
                                    <span class="view">324</span>
                                    <a href="javascript:;" class="sugg">64</a>
                                    <a href="javascript:;" class="share">공유</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="partymember">
                    <div class="container">
                        <div class="mAsk">
                            <div class="mtit bd-btm">
                                <h2>당원에게 묻는다</h2>
                                <span>총 <b>8</b> 건</span>
                                <a href="">더보기</a>
                            </div>
                            <div class="mbody">
                                <div class="thumb">
                                    <a href=""><img src="./img/main_member_img1.png" alt=""></a>
                                </div>
                                <div class="info">
                                    <div class="date">
                                        <span class="cate">진행중</span>
                                        2022. 08. 01 ~ 2022. 12. 31
                                    </div>
                                    <p class="sbj">
                                        <a href="">층간소음 관련 규제(오피스텔 포함) 강화에 따른 당신의 생각은 어떠하신가요?</a>   
                                    </p>
                                    <div class="conts">
                                        <p>
                                            층간소음의 해결을 위해 정부 차원의 개입 및 피해 기준을 강화해야 한다고 생각하시면 투표해 주세요, 해달 영역 최대 2줄 노출, 내용이 길 경우 절삭 처리.   
                                        </p>
                                    </div>                            
                                    <div class="btnPart">
                                        <a href="javascript:;" class="share">공유하기</a>
                                        <a href="javascript:;" class="parti">참여하기</a>
                                    </div>
                                    <div class="total">
                                        <p>현재까지 총 <b>7800</b>명이 참여했습니다.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mProposal">
                            <div class="mtit bd-btm">
                                <h2>당원제안</h2>
                                <span>총 <b>320</b> 건</span>
                                <div class="control">
                                    <div class="indi">
                                        <span class="cur"></span>
                                        <span class="end"></span>
                                    </div>
                                    <div class="bx-next">
                                        <a href="#none" class="pager-stop">stop</a>
                                        <a href="#none" class="pager-play">play</a>
                                        <a href="#none" class="pager-prev">prev</a>
                                        <a href="#none" class="pager-next">next</a>
                                        <a href="" class="more">more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mslider">
                                <ul>
                                    <li>
                                        <div class="ms1">
                                            <span class="cate">정치현안</span>
                                            <span class="view">48</span>
                                            <span class="sugg">19</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">홍길동 당원님의 제안입니다 홍길동 당원님의 제안입니다. 홍길동 당원님의 제안입니다. 홍길동 당원님의 제안입니다.</a>
                                        </p>
                                        <p class="date">2022. 08. 16</p>
                                    </li>
                                    <li>
                                        <div class="ms1">
                                            <span class="cate">정치현안</span>
                                            <span class="view">48</span>
                                            <span class="sugg">19</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">홍길동 당원님의 제안입니다.</a>
                                        </p>
                                        <p class="date">2022. 08. 16</p>
                                    </li>
                                    <li>
                                        <div class="ms1">
                                            <span class="cate">정치현안</span>
                                            <span class="view">48</span>
                                            <span class="sugg">19</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">홍길동 당원님의 제안입니다.</a>
                                        </p>
                                        <p class="date">2022. 08. 16</p>
                                    </li>
                                    <li>
                                        <div class="ms1">
                                            <span class="cate">정치현안</span>
                                            <span class="view">48</span>
                                            <span class="sugg">19</span>
                                        </div>
                                        <p class="sbj">
                                            <a href="">홍길동 당원님의 제안입니다.</a>
                                        </p>
                                        <p class="date">2022. 08. 16</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="btnSuggest">
                                <a href="">제안하기</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mbottom container">
                    <div class="indiv">
                        <div class="mb1">
                            <h2>국민의힘을 <br/><span>응원해주세요<em>!</em></span></h2>
                            <p>
                                국민의힘의 이념과 정책에 뜻을 같이하시는 <br/>
                                대한민국 국민이라면 누구나 당원이 되실 수 있습니다.
                            </p>
                        </div>
                        <div class="mb_search">
                            <form class="form">
                                <fieldset>    
                                    <legend>시도당 찾기</legend>                    
                                    <div class="form-field">
                                        <label for="localname">시도당 찾기</label>
                                        <p>
                                            <input type="text" id="localname" name="localname" class="input" placeholder="시도명을 검색해주세요.">
                                            <button type="button">찾기</button>
                                        </p>                                
                                    </div>
                                </fieldset>                    
                            </form>
                        </div>
                    </div>            
                </section>
                <section class="mquick container">
                    <ul>
                        <li class="mq1"><a href="">온라인 당원가입</a></li>
                        <li class="mq2"><a href="">재외국민 온라인입당</a></li>
                        <li class="mq3"><a href="">오프라인 당원가입</a></li>
                        <li class="mq4"><a href="">후원해주세요</a></li>
                        <li class="mq5"><a href="https://pf.kakao.com/_Mxjxnlj" target="_blank"><span>카카오톡채널 추가</span></a></li>
                    </ul>
                </section>
            </main>

        </div>

        <?php include "./include/_body_footer.php"; ?>

        <!-- 메인페이지용 SCRIPT -->
        <script src="./js/main.js"></script>
        <!--//-->        

    </div>
</body>
</html>