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
    <?php view('components/header')->render() ?>
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
        </div>
    </section>
    <div class="" include-html="footer"></div>
    <script src="/js/jquery.js"></script>
    <script src="/js/boootstrap5.js"></script>
    <script src="/js/chart.js"></script>
    <script src="/js/main.js"></script>
    <script>
        const news = <?php echo json_encode($news) ?>;
    </script>
    <script src="/js/news.js"></script>
</body>
</html>