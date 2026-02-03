<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Fr. Peter Mary Rookey His Cause For Sainthood &#8211; Fr Peter Mary Rookey &#8211; Servite Friar</title>
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
            font-size: 1rem;
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
            <h1 class="detail-title">Fr. Rookey at his ICM office desk smiling</h1>
            
            <div class="detail-content-wrapper">
                <div class="detail-image">
                    <img src="<?= BASE_URL ?>/assets/img/Fr.-Rookey-at-his-ICM-office-desk-smiling.jpg" alt="Fr. Rookey at his ICM office desk smiling">
                </div>
                <div class="detail-text">
                    <p>
                        Fr. Rookey at his ICM office desk smiling. Father worked at a desk at his International
                        Compassion Ministry office for 25 years in an office building located in Olympia Fields, Illinois.
                        Here he poses for a photo taken by a professional photographer for a book that was being
                        written about his ministry. Father oversaw his mostly volunteer office staff who helped him
                        answer phone calls and respond to a large amount of ongoing correspondence. They also
                        mailed out many requested religious articles. There was never a dull moment there and Father
                        prayed over the phone with countless people in need of physical or spiritual healing for
                        themselves or others. He spoke with people from all over the world and some would call him
                        from overseas on a regular basis. He always celebrated Mass in his office chapel at noon and
                        prayed the Divine Mercy Chaplet with his staff at 3:00 P.M. every weekday when he was not
                        holding a healing service at home or abroad. Father blessed many visitors to his office and
                        welcomed everyone who sought his healing touch and loving embrace. He was truly a man of
                        great holiness who was a shining reflection of Our Lord Jesus.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>
</body>
</html>
