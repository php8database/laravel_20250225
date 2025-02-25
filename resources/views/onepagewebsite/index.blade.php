<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>冬瓜行旅 - 台北/新北生命禮儀公司</title>
    <!-- 引入 Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            /* 預設淺背景色 */
        }

        .social-icon {
            font-size: 20px;
            margin: 0 8px;
            text-decoration: none;
            padding: 8px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .line-icon {
            background-color: #00C300;
            color: white;
        }

        .facebook-icon {
            background-color: #1877F2;
            color: white;
        }

        .instagram-icon {
            background: linear-gradient(45deg, #f58529, #d62976, #962fbf, #4c68d7);
            color: white;
        }

        .social-icons a:hover {
            opacity: 0.8;
            transform: scale(1.1);
        }

        footer {
            width: 100%;
            background-color: #f8f9fa;
            padding: 30px 0;
            text-align: center;
        }

        footer p,
        footer iframe {
            font-size: 14px;
        }

        footer iframe {
            max-width: 100%;
            border-radius: 8px;
        }

        .carousel-inner img {
            object-fit: cover;
            height: 50vh;
        }

        .container-fluid {
            margin-bottom: 40px;
        }

        /* 按鈕浮動效果 */
        .btn-primary {
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
        }

        /* 返回頂端按鈕 */
        #topBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 10px 15px;
            font-size: 20px;
            cursor: pointer;
            z-index: 1000;
        }

        #topBtn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <script>
        // 隨機生成背景顏色
        function randomBackgroundColor() {
            const colors = ['#F0F8FF', '#F5F5DC', '#E0FFFF', '#FFFACD', '#FAEBD7'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            document.body.style.backgroundColor = randomColor;
        }
        randomBackgroundColor(); // 頁面加載時隨機選擇背景色

        // 顯示或隱藏 "返回頂端" 按鈕
        window.onscroll = function () {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                document.getElementById("topBtn").style.display = "block";
            } else {
                document.getElementById("topBtn").style.display = "none";
            }
        };

        // 點擊 "返回頂端" 按鈕時，滾動到頁面頂部
        function topFunction() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>

    <!-- 頂部導航欄 -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#home">
                    <img src="images/Winter melon.png" alt="冬瓜行旅" style="width:40px;" class="rounded-pill">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">首頁</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#page1">服務介紹</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#page2">聯絡我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#page3">聯絡資訊</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- 首頁圖片輪播 -->
    <div class="container-fluid vh-50">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Funeral Services_01.png" alt="Winter Travel" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/Funeral Services_02.png" alt="Travel Image 2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/Funeral Services_03.png" alt="Travel Image 3" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <!-- 服務介紹 -->
    <div id="home" class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-6">
                <h2>我們的服務</h2>
                <p>冬瓜行旅提供專業的生命禮儀服務，協助您進行葬儀安排、靈骨塔帶看等事宜。無論是傳統葬儀、創新葬禮，還是殯葬統籌，我們都會為您提供最貼心的服務。</p>
                <a href="https://owt.com.tw/" class="btn btn-primary" target="_blank">了解更多</a>
            </div>
            <div class="col-md-6">
                <img src="images/Winter melon.png" alt="Winter Travel Service" class="img-fluid rounded">
            </div>
        </div>
    </div>

    <!-- 了解更多影片 -->
    <div id="page1" class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/AW8zxfDSQYA?si=KUOALdBl3uLsj55I"
                    title="YouTube video player" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-7 offset-md-1">
                <h3>了解更多我們的服務</h3>
                <p>觀看我們的影片，了解更多有關冬瓜行旅如何協助您處理生命禮儀的每一個細節。</p>
            </div>
        </div>
    </div>

    <!-- 聯絡我們 -->
    <div id="page2" class="container-fluid mb-5">
        <h2>線上諮詢服務</h2>
        <p>若您對於商品需求有任何的問題，歡迎提問我們會盡快與您聯絡！</p>
        <form id="contactForm">
            <div class="mb-3">
                <label for="name" class="form-label">姓名:</label>
                <input type="text" class="form-control" placeholder="請輸入姓名" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">聯絡電話:</label>
                <input type="text" class="form-control" placeholder="請輸入電話號碼" name="phone" id="phone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" placeholder="請輸入E-mail" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">留言:</label>
                <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
        <div id="confirmationMessage" class="alert alert-success mt-3" style="display:none;">
            已成功送出，感謝您的詢問，我們會盡快與您聯絡！
        </div>
    </div>

    <!-- 底部聯絡資訊 -->
    <footer>
        <div id="page3" class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-3">
                    <p>營業時間：上午09:00~晚上18:00</p>
                    <p>電話：02-2507-2200</p>
                    <p>24小時服務專線：0926-555-558</p>
                    <p>Email: pinn0900443311＠owt.com.tw</p>
                    <p>總公司地址：台北市民權東路二段135巷30弄5號1樓</p>
                    <p>冬瓜行旅會館：台北市中山區民權東路二段194號</p>

                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.108732750014!2d121.53215247511073!3d25.064303537071094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a95830e54a79%3A0x73e1f0d74c597b7d!2zMTA0OTHlj7DngaPlj7DljJfluILkuK3lsbHljYDmsJHmrIrmnbHot6_kuozmrrUxMzXlt7czMOW8hDXomZ8!5e0!3m2!1szh-TW!2sus!4v1735111958986!5m2!1szh-TW!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-3">
                    <p>關注冬瓜行旅：</p>
                    <a href="https://tinyurl.com/ujt24xtm" target="_blank" class="social-icon line-icon">
                        <i class="fab fa-line"></i>
                    </a>
                    <a href="https://www.facebook.com/owt2016" target="_blank" class="social-icon facebook-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/dk.oneway/" target="_blank" class="social-icon instagram-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <p>&copy; 2024 冬瓜行旅. 版權所有。</p>
            </div>
        </div>
    </footer>

    <!-- 返回頂端按鈕 -->
    <button id="topBtn" onclick="topFunction()">Top</button>

    <!-- 引入 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // 表單提交事件
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault(); // 防止表單直接提交
            document.getElementById('confirmationMessage').style.display = 'block';
            setTimeout(() => {
                document.getElementById('confirmationMessage').style.display = 'none';
            }, 5000); // 顯示確認消息5秒後隱藏
        });
    </script>
</body>

</html>