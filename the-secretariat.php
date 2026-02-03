<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Books Written About Father Peter Mary Rookey &#8211; Fr Peter Mary Rookey &#8211; Servite Friar</title>
    <?php include 'includes/head-links.php'; ?>
    <style>
        .books-section {
            padding: 50px 0;
            background: #fff;
        }
        .books-title {
            font-size: 1.9rem;
            color: #1a4b7e;
            font-weight: 700;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #1a4b7e;
        }
        .books-content {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #333;
            margin-bottom: 40px;
        }
        .books-content p {
            margin-bottom: 20px;
        }
        .book-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }
        .book-item {
            text-align: center;
        }
        .book-item img {
            width: 100%;
            max-width: 220px;
            height: auto;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .book-item img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="books-section">
        <div class="container">
            <h1 class="books-title">Books Written About Father Peter Mary Rookey</h1>
            
            <div class="books-content">
                <p>
                    1) <strong>"Man of Miracles"</strong> by Irish journalist Heather Parsons was the first book written about Fr. Peter Mary Rookey. It contains many vivid stories and accounts of healings associated with his ministry. It is an easy and enjoyable book to read.
                </p>
                <p>
                    2) <strong>"Do you Believe That Jesus Can Heal You"</strong> is the second book written about Fr. Peter, authored by the late Margaret Trosclair, founder of Mary's Helpers of Marrero, Louisiana. It focuses on the importance of faith in the healing power of Jesus. Fr. Peter always told everyone that it is our Lord Jesus Christ who is the healer, not him. He was simply the vessel through which the Lord's miraculous healings took place.
                </p>
                <p>
                    3) <strong>"Fr. Peter Mary Rookey: A Laborer Of The Harvest In The Lord's Vineyard"</strong> was compiled and edited by Barbara Wojtowicz, a doctor born in Poland, and lives in Chicago. It is available in Polish as well as English. Barbara was fortunate to travel with Father to Poland on one of his last major pilgrimages where he blessed many thousands of the faithful at healing Masses in various Polish cities. He had a deep love for the Polish people, and also blessed the sick in hospitals and nursing homes there during this pilgrimage in December of 2004.
                </p>
                <p>
                    4) <strong>"Healer of Souls"</strong> was written by Chicago based author and journalist, Kathy Quasey, a close friend of the gifted priest. Over a number of years, she conducted a series of lengthy interviews with Fr. Peter, delving into his upbringing and the development of his deep faith and conviction. She relates many interesting aspects of his ministry and miraculous events that mark him as a priest whose dedication to Jesus and Mother Mary made a huge impact on the lives of countless souls.
                </p>
                <p>
                    All of these books are generally available for sale on Ebay or Amazon. The <strong>"Do You Believe That Jesus Can Heal You"</strong> book is also available from Mary's Helpers through their website, the link to which is: <a href="https://maryshelpers.org/" target="_blank" style="color: #1a4b7e; text-decoration: underline;">https://maryshelpers.org/</a>.
                </p>
                <p>
                    Fr. Peter Rookey is also prominently featured in many other books and magazine articles which speak of his legacy as one blessed with the Holy Spirit gift of healing which he always used for the greater glory of God.
                </p>
                <p>
                    It must be mentioned that Fr. Rookey himself wrote a fine book titled "Shepherd of Souls" that profiled the holy life of St. Anthony Pucci, an Italian priest and fellow Servite from the 19th century. St. Anthony was canonized in 1962 and proclaimed by Pope John XXIII as the patron of the Second Vatican Council.
                </p>
            </div>

            <div class="book-gallery">
                <div class="book-item">
                    <img src="<?= BASE_URL ?>/assets/img/book/book-1.jpg" alt="Man of Miracles">
                </div>
                <div class="book-item">
                    <img src="<?= BASE_URL ?>/assets/img/book/book-2.jpg" alt="Do You Believe That Jesus Can Heal You?">
                </div>
                <div class="book-item">
                    <img src="<?= BASE_URL ?>/assets/img/book/book-3.jpg" alt="A Laborer Of The Harvest">
                </div>
                <div class="book-item">
                    <img src="<?= BASE_URL ?>/assets/img/book/book-4.jpg" alt="Healer of Souls">
                </div>
                <div class="book-item">
                    <img src="<?= BASE_URL ?>/assets/img/book/book-5.jpg" alt="Shepherd of Souls">
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>
</body>
</html>
