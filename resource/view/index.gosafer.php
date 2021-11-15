<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="GoSafer | Trang tin tức, tra cứu vi phạm giao thông">
    <meta property="og:type" content="article">
    <meta property="og:description" content="GoSafer | Trang tin tức, tra cứu vi phạm giao thông">
    <meta property="og:image" content="https://gosafer.xyz/img/static.png">
    <link rel="stylesheet" href="/css/boootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>GoSafer | Trang tin tức, tra cứu vi phạm giao thông</title>
</head>
<body>
    <header class="py-2 position-relative mb-5 header-home">
        <div id="map" class="overlay"></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-lg">
                <a class="navbar-brand fs-4 d-block flex-grow-1" href="/">
                    <img src="/img/gosafter.svg" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/lookup-violation.html">
                              Tra cứu
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/lookup-violation.html">Tra cứu vi phạm</a></li>
                              <li><a class="dropdown-item" href="/lookup-violation.html">Tra cứu biển số xe</a></li>
                            </ul>
                        </div>
                        <a class="nav-link" href="/document.html">Tài liệu</a>
                        <a class="nav-link" href="/terms.html">Điều khoản</a>
                        <a class="btn-rounded-left" href="/news-page.html">Tin tức</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="header-bottom container-lg mt-5 overflow-hidden">
            <div class="mask"></div>
            <div>
                <div class="mb-5">
                    <h1 class="text-secondary fs-1 mb-4"><span id="numberOfViolation">6805 </span> <span class="fs-3">vụ tai nạn</span></h1>
                    <p class="header-bottom-content text-secondary mb-0">Hãy tuân thủ luật giao thông để  tránh mất mát cho gia đình và xã hội. Bạn có thể tra cứu lỗi vi phạm của mình trên GoSafer!</p>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-center mb-4">
                    <button data-city='hn'  class="p-2 btn-rounded-left text-light me-4 active">Hà Nội</button>
                    <button data-city='hcm' class="p-2 btn-rounded-left text-light me-4">Hồ Chí Minh</button>
                    <button data-city='all' class="p-2 btn-rounded-left text-light">Toàn Quốc</button>
                </div>
            </div>
        </div>
    </header>
    <section class="charts container-lg mb-5">
        <h2 class="chart-title">Dữ liệu vi phạm giao thông theo năm.</h2>
        <canvas id="chart-violation-yearly"></canvas>
    </section>
    <section class="charts container-lg mb-5">
        <h2 class="chart-title">10 địa phương có số vụ vi phạm cao nhất.</h2>
        <canvas id="chart-top10-violation"></canvas>
    </section>
    <section class="news container-lg mb-5">
        <h2 class="news-title">Tin giao thông nổi bật</h2>
        <div class="row" id="newsList">
            <div class="col-12">
                <div class="card-news card-hoz">
                    <a href='/news.html' class="card-news-img mb-4">
                        <img src="/img/news1.jpg" alt="">
                    </a>
                    <div class="card-news-body">
                        <a href='/news.html' class="card-news-title">Chú chó 'nghiện' giao thông công cộng.</a>
                        <p class="card-news-content text-secondary">Trong chuyến phà chở khách đông đúc ở Istanbul, mọi con mắt đều hướng về một chú chó đang ngắm nhìn phong cảnh từ cửa sổ.</p>
                        <div class="card-news-relate">
                            <div class="mb-1"><a href='/news.html' class="">Chú chó 'nghiện' giao thông công cộng.Chú chó 'nghiện' giao thông công cộng.</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="" include-html="footer"></div>
    <script src="/js/jquery.js"></script>
    <script src="/js/boootstrap5.js"></script>
    <script src="/js/chart.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>