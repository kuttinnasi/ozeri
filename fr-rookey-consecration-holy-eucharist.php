<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Fr. Rookey consecration of the Holy Eucharist - Fr. Peter Mary Rookey</title>
    <?php include 'includes/head-links.php'; ?>
    <style>
        .article-detail-section {
            padding: 50px 0;
            background: #fff;
        }
        .detail-title {
            font-size: 2.2rem;
            color: #1a4b7e;
            font-weight: 700;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #1a4b7e;
        }
        .detail-content-wrapper {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            align-items: start;
        }
        @media (min-width: 992px) {
            .detail-content-wrapper {
                grid-template-columns: 450px 1fr;
            }
        }
        .detail-image img {
            width: 100%;
            height: auto;
            border: 1px solid #ddd;
            padding: 0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .detail-text {
            font-size: 1.1rem;
            line-height: 1.5;
            color: #444;
            text-align: justify;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="article-detail-section">
        <div class="container">
            <h1 class="detail-title">Fr. Rookey consecration of the Holy Eucharist</h1>
            
            <div class="detail-content-wrapper">
                <div class="detail-image">
                    <img src="<?= BASE_URL ?>/assets/img/Fr.-Rookey-consecration-of-the-Holy-Eucharist.jpg" alt="Fr. Rookey consecration of the Holy Eucharist">
                </div>
                <div class="detail-text">
                    <p>
                        Fr. Rookey consecration of the Holy Eucharist. He looks intently at the consecrated host
                        containing the Body, Blood, Soul and Divinity of Our Lord, Jesus Christ. Father actually saw the
                        face of Jesus in the host on many occasions during the consecration at Mass. A number of other
                        priests who celebrated Mass with him saw the face of Jesus in the host also. The late Fr. Francis
                        Kotter from the Holy Hill shrine in Wisconsin celebrated Mass with Fr. Peter one time and said
                        to himself that Father couldn’t actually be seeing Jesus in the host. He took a good look at the
                        consecrated host as Father lifted it up and he saw Jesus very distinctly in the host too! Fr. Kotter
                        later would often celebrate the First Saturday Mass with Fr. Peter at Our Lady of Sorrows
                        Basilica in Chicago and assist him during the healing service that took place after Mass.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>
</body>
</html>
