<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 검색 스타일 //-->
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/jqcloud.min.css">
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
                    <li><strong>검색</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="search-wrap layout-1280">
                    <div class="page-title">
                        <h2>검색</h2>
                        <p>
                            궁금한신 내용을 입력해 주세요.
                        </p>
                    </div>

                    <div class="board-search mt50">
                        <div class="sch">
                            <form class="form">
                                <fieldset>    
                                    <legend>검색</legend>
                                    <div class="form-field date from">
                                        <input type="month" class="form-input">
                                    </div>
                                    <div class="form-field date to">
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

                    <div class="keyword">
                        <ul>
                            <li>#키워드</li>
                            <li>#키워드</li>
                            <li>#키워드</li>
                            <li>#키워드</li>
                            <li>#키워드</li>
                        </ul>
                    </div>
                    
                    <script type="text/javascript">
                        /*!
                        * Create an array of word objects, each representing a word in the cloud
                        */
                        var word_array = [
                            {text: "자유", weight: 15, link: "https://www.google.com/"},
                            {text: "민주", weight: 9, link: "https://www.google.com/"},
                            {text: "중심인", weight: 20, link: "https://www.google.com/"},
                            {text: "헌정질서", weight: 18, link: "https://www.google.com/"},
                            {text: "역사적", weight: 12, link: "https://www.google.com/"},
                            {text: "정신", weight: 6, link: "https://www.google.com/"},
                            {text: "존중한다", weight: 9, link: "https://www.google.com/"},
                            {text: "공화", weight: 7, link: "https://www.google.com/"},
                            {text: "공정의", weight: 16, link: "https://www.google.com/"},
                            {text: "가치", weight: 10, link: "https://www.google.com/"},
                            {text: "성취", weight: 8, link: "https://www.google.com/"},
                            {text: "대한민국", weight: 15, link: "https://www.google.com/"},
                            {text: "국민의힘", weight: 5, link: "https://www.google.com/"}
                            // ...as many words as you want
                        ];

                        $(function() {
                            // When DOM is ready, select the container element and call the jQCloud method, passing the array of words as the first argument.
                            $("#tagscloud").jQCloud(word_array, {
                                autoResize: true,
                                colors: ["#d31421", "#00B3ED", "#fe4a49", "#3F3A39", "#4ad7d1", "#000000", "#001730"]
                            });
                        });
                    </script>
                    <div id="tagscloud"></div>
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>     
        
        <script src="../js/jqcloud.min.js"></script>

    </div>
</body>
</html>