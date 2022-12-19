<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 소개 스타일 //-->
    <link rel="stylesheet" href="../css/about.css">
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
                    <li><span>소개</span></li>
                    <li><strong>찾아오시는길</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="location-wrap layout-1280">
                    <div class="page-title">
                        <h2>찾아오시는길</h2>
                        <p>
                            여러분 가까이에 국민의힘이 있습니다.
                        </p>
                    </div>

                    <div class="faq-search mt50">
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>시도당 검색</legend>
                                    <div class="form-field word">
                                        <label for="stx">시도당 찾기</label>
                                        <input type="text" name="stx" id="stx" class="form-input" placeholder="시도명을 입력하세요.">
                                    </div>
                                    <div class="form-field btn">
                                        <button type="submit" class="mbtn grey">검색</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                    <div class="location-map mt50">
                        <div class="city">
                            <ul>
                                <li class="active">
                                    <a href="javascript:viewMap('')">
                                        <h3>중앙당</h3>
                                        <p class="adr">서울 영등포구 국회대로74길 12 국민의힘</p><!-- 11/10 수정 -->
                                        <p class="tel">02-6288-0200</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('seoul')">
                                        <h3>서울시당</h3>
                                        <p class="adr">서울특별시 영등포구 국회대로76길 22, 3층 국민의힘 서울시당(여의도동, 기계회관)</p>
                                        <p class="tel">02-704-2100</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('busan')">
                                        <h3>부산시당</h3>
                                        <p class="adr">부산광역시 수영구 황령대로 497, 국민의힘 부산시당(남천동)</p>
                                        <p class="tel">051-625-6601</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('daegu')">
                                        <h3>대구시당</h3>
                                        <p class="adr">대구광역시 수성구 동대구로 382, 국민의힘 대구시당(범어동)</p>
                                        <p class="tel">053-753-9661</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('incheon')">
                                        <h3>인천시당</h3>
                                        <p class="adr">인천광역시 남동구 남동대로 750, 6층(구월동, 유영빌딩)</p>
                                        <p class="tel">032-466-0071</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('gwangju')">
                                        <h3>광주시당</h3>
                                        <p class="adr">광주광역시 서구 시청로 57, 402호 국민의힘 광주시당(치평동)</p>
                                        <p class="tel">062-528-0204</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('daejeon')">
                                        <h3>대전시당</h3>
                                        <p class="adr">대전광역시 중구 중앙로138번길 21, 국민의힘 대전시당(대흥동)</p>
                                        <p class="tel">042-253-0261</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('ulsan')">
                                        <h3>울산시당</h3>
                                        <p class="adr">울산 남구 삼산로 340 신기빌딩, 국민의힘 울산시당(삼산동)</p>
                                        <p class="tel">052-275-7363</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('sejong')">
                                        <h3>세종시당</h3>
                                        <p class="adr">세종 한누리대로 245 에스알파크원빌딩 805호, 국민의힘 세종시당</p>
                                        <p class="tel">044-866-1219</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('gyeonggi')">
                                        <h3>경기도당</h3>
                                        <p class="adr">경기도 수원시 장안구 정조로 944, 국민의힘 경기도당(영화동)</p>
                                        <p class="tel">031-248-1011</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('gangwon')">
                                        <h3>강원도당</h3>
                                        <p class="adr">강원도 춘천시 금강로 28, 국민의힘 강원도당(소양로3가)</p>
                                        <p class="tel">033-256-3201	</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('chungbuk')">
                                        <h3>충북도당</h3>
                                        <p class="adr">충청북도 청주시 흥덕구 공단로 97, 국민의힘 충북도당(복대동)</p>
                                        <p class="tel">043-235-0001	</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('chungnam')">
                                        <h3>충남도당</h3>
                                        <p class="adr">충청남도 천안시 동남구 원성1길 19, 303호 국민의힘 충남도당(원성동, 한국농어촌공사)</p>
                                        <p class="tel">041-565-1644</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('jeonbuk')">
                                        <h3>전북도당</h3>
                                        <p class="adr">전라북도 전주시 완산구 충경로 102, 국민의힘 전북도당(풍남동1가, 농협중앙회)</p>
                                        <p class="tel">063-287-2171</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('jeonnam')">
                                        <h3>전남도당</h3>
                                        <p class="adr">전남 무안군 삼향읍 남악3로 80 국민의힘 전남도당(제일프라자 702호)</p>
                                        <p class="tel">061-282-8747	</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('gyeongbuk')">
                                        <h3>경북도당</h3>
                                        <p class="adr">대구광역시 수성구 동대구로 382, 4층 국민의힘 경북도당(범어동)</p>
                                        <p class="tel">053-756-1001</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('gyeongnam')">
                                        <h3>경남도당</h3>
                                        <p class="adr">경상남도 창원시 의창구 원이대로 275, 국민의힘 경남도당(봉곡동, 국민은행)</p>
                                        <p class="tel">055-288-2111</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:viewMap('jeju')">
                                        <h3>제주도당</h3>
                                        <p class="adr">제주특별자치도 제주시 연삼로 10, 2층 국민의힘 제주도당(정우빌딩)</p>
                                        <p class="tel">064-749-5891</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="map">
                            <div class="map-wrap">
                                <!-- * 카카오맵 - 지도퍼가기 -->
                                <!-- 1. 지도 노드 -->
                                <div id="daumRoughmapContainer1666416532805" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                                <!--
                                    2. 설치 스크립트
                                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                                -->
                                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                                <!-- 3. 실행 스크립트 -->
                                <script charset="UTF-8">
                                    new daum.roughmap.Lander({
                                        "timestamp" : "1666416532805",
                                        "key" : "2c5ui",
                                        "mapWidth" : "640",
                                        "mapHeight" : "750"
                                    }).render();
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="location-center mt50">
                        <div class="center-title">중앙당</div>
                        <div class="center-wrap">
							<div class="center-box">
								<h3 class="bus"><b>버스</b> 이용시</h3>								
								<ul>
									<li>											
                                        <p class="tit">국회의사당 하차</p>
                                        <p class="flex">
                                            <span class="carriage bus-green">지선</span>
                                            <span>5615, 5618, 7613, 8761</span>
                                        </p>
                                        <p class="flex">
                                            <span class="carriage bus-blue">간선</span>
                                            <span> 153, 271B</span>
                                        </p>
									</li>
									<li>
                                        <p class="tit">기계회관 하차</p>
                                        <p class="flex">
                                            <span class="carriage bus-green">일반</span>
                                            <span>10</span>
											<span class="carriage bus-green">마을</span> 
                                            <span>영등포10</span>
										</p>
									</li>
								</ul>								
							</div>

							<div class="center-box">
                                <h3 class="subway"><b>지하철</b> 이용시</h3>
								<ul>
									<li>
                                        <p class="tit">국회의사당역 1번 출구</p> 
                                        <p class="flex">
                                            <span class="carriage subway-9">9호선</span> 
                                            <span>국회의사당역 1번 출구 <br/>(도보로 6분)</span>
                                        </p>
                                    </li>
								</ul>
							</div>

							<div class="center-box">
                                <h3 class="tel"><b>중앙당</b> 연락처</h3>								
								<ul>
									<li>
                                        <p class="tit">전화번호</p> 
                                        <p>02) 6288-0200</p>
                                    </li>
									<li>
                                        <p class="tit">주소</p> 
                                        <p>
                                            우)07238 <br/>
                                            서울 영등포구 국회대로74길 12 국민의힘 <br/> <!-- 11/10 수정 -->
                                            <a href="javascript:viewMap('')" class="view">지도보기</a>
                                        </p>
                                    </li>
								</ul>								
							</div>
						</div>
                    </div>



                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

    </div>
</body>
</html>