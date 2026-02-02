<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Fr. Rookey pausing to read a travel book during a pilgrimage to the Holy Land - Fr. Peter Mary Rookey</title>
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
            <h1 class="detail-title">Fr. Rookey pausing to read a travel book during a pilgrimage to the Holy Land</h1>
            
            <div class="detail-content-wrapper">
                <div class="detail-image">
                    <img src="<?= BASE_URL ?>/assets/img/Fr.-Rookey-pausing-to-read-a-travel-book-during-a-pilgrimage-to-the-Holy-Land.jpg" alt="Fr. Rookey pausing to read a travel book during a pilgrimage to the Holy Land">
                </div>
                <div class="detail-text">
                    <p>
                        Fr. Rookey pausing to read a travel book during a pilgrimage to the Holy Land. Father was a
                        constant traveler during his 73 year priesthood. He served many years in Ireland, Italy, Belgium,
                        and Germany before serving as a missions priest for 17 years in the Ozarks region of Missouri.
                        In 1984, he began his 30 year healing ministry based in Chicago. Besides holding countless
                        healing services in dozens of states at home, he traveled abroad to hold services in Europe,
                        Australia, Tasmania, the Philippines, Africa, Mexico, American Samoa and other regions of the
                        world. Father's last healing services were held in December of 2004 in several cities in Poland.
                        He traveled as a pilgrim to many Marian apparition sites and flew the friendly skies to
                        Medjugorje 30 times. The Holy Land was his destination on many ocassions also and a
                        documentary film was made of his last pilgrimage there in 2010. It was narrated by Chuck Neff,
                        host of The Inner Life show on Relevant Radio.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>
</body>
</html>
