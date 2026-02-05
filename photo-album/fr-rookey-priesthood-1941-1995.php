<?php 
include '../config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Fr. Rookey Priesthood (1941-1995) &#8211; Fr Peter Mary Rookey</title>
    <meta name="description" content="View historical photos of Fr. Peter Mary Rookey's priesthood from 1941 to 1995." />
    <?php include '../includes/head-links.php'; ?>
    <style>
        .gallery-section {
            padding: 50px 0;
            background: #fff;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        .gallery-item {
            text-align: center;
            margin-bottom: 20px;
        }
        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            object-position: center;
            margin: 0 auto;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        .caption {
            margin-top: 15px;
            font-size: 16px;
            line-height: 1.5;
            color: #555;
            padding: 0 10px;
        }
        .btn-submit {
            background: #1a4b7e;
            color: #fff;
            border: 2px solid #1a4b7e;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        .btn-submit:hover {
            background: transparent;
            color: #1a4b7e;
            box-shadow: 0 5px 15px rgba(26, 75, 126, 0.2);
        }
        
        @media (max-width: 991px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main class="gallery-section">
        <div class="container">
            <h1 class="blog-title">Fr. Rookey Priesthood (1941-1995)</h1>
            
            <div class="gallery-grid">
                <!-- Add gallery items here -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Fr.-Rookeys-Ordination-Picture.jpg" class="glightbox" data-description="Fr. Rookey’s Ordination Picture">
                        <img src="../assets/img/fr-rookey-priesthood/Fr.-Rookeys-Ordination-Picture.jpg" alt="Fr. Peter Priesthood Cover">
                    </a>
                    <div class="caption">Fr. Rookey’s Ordination Picture</div>
                </div>
                
                <!-- Placeholders based on screenshot visual estimation - please update with real images/captions -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/After-Fathers-First-Public-Mass-1941.jpg" class="glightbox" data-description="After Father’s First Public Mass 1941">
                        <img src="../assets/img/fr-rookey-priesthood/After-Fathers-First-Public-Mass-1941.jpg" alt="Ordination">
                    </a>
                    <div class="caption">After Father’s First Public Mass 1941</div>
                </div>

                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Young-Fr.-Peter-1940s.jpg" class="glightbox" data-description="Young Fr. Peter 1940s">
                        <img src="../assets/img/fr-rookey-priesthood/Young-Fr.-Peter-1940s.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Young Fr. Peter 1940s</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Posing-After-First-Public-Mass-1941.jpg" class="glightbox" data-description="Posing After First Public Mass 1941">
                        <img src="../assets/img/fr-rookey-priesthood/Posing-After-First-Public-Mass-1941.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Posing After First Public Mass 1941</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Newly-Ordained-Priest.jpg" class="glightbox" data-description="Newly Ordained Priest">
                        <img src="../assets/img/fr-rookey-priesthood/Newly-Ordained-Priest.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Newly Ordained Priest</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-4.jpg" class="glightbox" data-description="Early photo of Father in his first Servite habit">
                        <img src="../assets/img/fr-rookey-priesthood/fr-4.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Early photo of Father in his first Servite habit</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-26.jpg" class="glightbox" data-description="Father in Benburb, Northern Ireland in the late 1940s with the first Servite community that had been recently established there">
                        <img src="../assets/img/fr-rookey-priesthood/fr-26.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Father in Benburb, Northern Ireland in the late 1940s with the first Servite community that had been recently established there</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/With-Cousin-Fr.-Chris-OToole-Ireland-1950.jpg" class="glightbox" data-description="Fr. Rookey with his first cousin, Fr. Christopher O’Toole in Ireland, circa 1950. Fr. Chris was the General of the Holy Cross Order in the United States and Canada from 1950 to 1962.">
                        <img src="../assets/img/fr-rookey-priesthood/With-Cousin-Fr.-Chris-OToole-Ireland-1950.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Fr. Rookey with his first cousin, Fr. Christopher O’Toole in Ireland, circa 1950. Fr. Chris was the General of the Holy Cross Order in the United States and Canada from 1950 to 1962.</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Father-in-Benburb-Ireland-Circa-1950.jpg" class="glightbox" data-description="Father in Benburb, Ireland Circa 1950">
                        <img src="../assets/img/fr-rookey-priesthood/Father-in-Benburb-Ireland-Circa-1950.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Father in Benburb, Ireland Circa 1950</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Blessing-Crowd-Ireland-1950.jpg" class="glightbox" data-description="Blessing Crowd-Ireland 1950">
                        <img src="../assets/img/fr-rookey-priesthood/Blessing-Crowd-Ireland-1950.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Blessing Crowd-Ireland 1950</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Blesses-the-Irish-in-1950.jpg" class="glightbox" data-description="Blesses the Irish in 1950">
                        <img src="../assets/img/fr-rookey-priesthood/Blesses-the-Irish-in-1950.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Blesses the Irish in 1950</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Serving-the-Irish-Faithful-1950.jpg" class="glightbox" data-description="Serving the Irish Faithful 1950">
                        <img src="../assets/img/fr-rookey-priesthood/Serving-the-Irish-Faithful-1950.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Serving the Irish Faithful 1950</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-1.jpg" class="glightbox" data-description="Professional photo taken when Father was stationed in Rome in 1953 as Assistant to the General of the Servite Order">
                        <img src="../assets/img/fr-rookey-priesthood/fr-1.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Professional photo taken when Father was stationed in Rome in 1953 as Assistant to the General of the Servite Order</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-3.jpg" class="glightbox" data-description="Sitting portrait of Fr. Peter in 1953">
                        <img src="../assets/img/fr-rookey-priesthood/fr-3.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Sitting portrait of Fr. Peter in 1953</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-2.jpg" class="glightbox" data-description="Another photo of Father in his Servite habit in 1953 Rome">
                        <img src="../assets/img/fr-rookey-priesthood/fr-2.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Another photo of Father in his Servite habit in 1953 Rome</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Westfalen-Germany-in-1954.jpg" class="glightbox" data-description="Westfalen, Germany in 1954">
                        <img src="../assets/img/fr-rookey-priesthood/Westfalen-Germany-in-1954.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Westfalen, Germany in 1954</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Father-with-glasses-1950s.jpg" class="glightbox" data-description="Father with glasses, 1950s">
                        <img src="../assets/img/fr-rookey-priesthood/Father-with-glasses-1950s.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Father with glasses, 1950s</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Passport-from-1962.jpg" class="glightbox" data-description="Passport from 1962">
                        <img src="../assets/img/fr-rookey-priesthood/Passport-from-1962.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Passport from 1962</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-35-Fr.jpg" class="glightbox" data-description="Father in Belgium in the 1960s">
                        <img src="../assets/img/fr-rookey-priesthood/fr-35-Fr.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Father in Belgium in the 1960s</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Fr.jpg" class="glightbox" data-description="Nice photo of Fr. Peter posing for the camera">
                        <img src="../assets/img/fr-rookey-priesthood/Fr.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Nice photo of Fr. Peter posing for the camera</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Wiesbaden-Germany-in-the-mid-1960s.-Father-served-as-a-parish-priest-for-several-years-in-Dusseldorf-Germany.jpg" class="glightbox" data-description="Wiesbaden, Germany in the mid-1960s. Father served as a parish priest for several years in Dusseldorf, Germany">
                        <img src="../assets/img/fr-rookey-priesthood/Wiesbaden-Germany-in-the-mid-1960s.-Father-served-as-a-parish-priest-for-several-years-in-Dusseldorf-Germany.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Wiesbaden, Germany in the mid-1960s. Father served as a parish priest for several years in Dusseldorf, Germany</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Wearing-a-beret-in-1966-Germany-with-Fr.-Scholmueller.jpg" class="glightbox" data-description="Wearing a beret in 1966 Germany with Fr. Scholmueller">
                        <img src="../assets/img/fr-rookey-priesthood/Wearing-a-beret-in-1966-Germany-with-Fr.-Scholmueller.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Wearing a beret in 1966 Germany with Fr. Scholmueller</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Outdoor-Mass-in-Portland-Oregons-Servite-Grotto-center-on-May-8-1966.-Fr.-Peter-served-at-a-Portland-parish-in-the-1940s.jpg" class="glightbox" data-description="Outdoor Mass in Portland, Oregon’s Servite Grotto center on May 8, 1966. Fr. Peter served at a Portland parish in the 1940s">
                        <img src="../assets/img/fr-rookey-priesthood/Outdoor-Mass-in-Portland-Oregons-Servite-Grotto-center-on-May-8-1966.-Fr.-Peter-served-at-a-Portland-parish-in-the-1940s.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Outdoor Mass in Portland, Oregon’s Servite Grotto center on May 8, 1966. Fr. Peter served at a Portland parish in the 1940s</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Superior-Wisconsin-at-25th-anniversary-of-ordination-dinner-with-fellow-priests.-Photo-signed-by-his-good-friend-comedian-Bob-Hope.jpg" class="glightbox" data-description="Superior, Wisconsin at 25th anniversary of ordination dinner with fellow priests. Photo signed by his good friend, comedian Bob Hope">
                        <img src="../assets/img/fr-rookey-priesthood/Superior-Wisconsin-at-25th-anniversary-of-ordination-dinner-with-fellow-priests.-Photo-signed-by-his-good-friend-comedian-Bob-Hope.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Superior, Wisconsin at 25th anniversary of ordination dinner with fellow priests. Photo signed by his good friend, comedian Bob Hope</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Another-photo-from-the-anniversary-dinner-signed-by-Bob-Hopes-wife-Dolores.-Fathers-cousin-Fr.-Chris-OToole-is-seated-second-from-right.jpg" class="glightbox" data-description="Another photo from the anniversary dinner, signed by Bob Hope’s wife, Dolores. Father’s cousin, Fr. Chris O’Toole is seated second from right">
                        <img src="../assets/img/fr-rookey-priesthood/Another-photo-from-the-anniversary-dinner-signed-by-Bob-Hopes-wife-Dolores.-Fathers-cousin-Fr.-Chris-OToole-is-seated-second-from-right.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Another photo from the anniversary dinner, signed by Bob Hope’s wife, Dolores. Father’s cousin, Fr. Chris O’Toole is seated second from right</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Rare-photo-of-Father-without-his-Roman-collar-around-his-neck.-Posing-in-May-of-1966-with-his-14-year-old-nephew-Tim-Rookey.jpg" class="glightbox" data-description="Rare photo of Father without his Roman collar around his neck. Posing in May of 1966 with his 14 year old nephew, Tim Rookey">
                        <img src="../assets/img/fr-rookey-priesthood/Rare-photo-of-Father-without-his-Roman-collar-around-his-neck.-Posing-in-May-of-1966-with-his-14-year-old-nephew-Tim-Rookey.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Rare photo of Father without his Roman collar around his neck. Posing in May of 1966 with his 14 year old nephew, Tim Rookey</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Joyfully-playing-the-piano-one-of-Fathers-favorite-recreational-activities.jpg" class="glightbox" data-description="Joyfully playing the piano, one of Father’s favorite recreational activities">
                        <img src="../assets/img/fr-rookey-priesthood/Joyfully-playing-the-piano-one-of-Fathers-favorite-recreational-activities.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Joyfully playing the piano, one of Father’s favorite recreational activities</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/On-donkey-in-Patmos-Greece-in-1973-riding-up-to-the-monastery-cave-where-St.-John-the-Apostle-wrote-the-Apocolypse.jpg" class="glightbox" data-description="On donkey in Patmos, Greece, in 1973, riding up to the monastery cave where St. John the Apostle wrote the Apocolypse">
                        <img src="../assets/img/fr-rookey-priesthood/On-donkey-in-Patmos-Greece-in-1973-riding-up-to-the-monastery-cave-where-St.-John-the-Apostle-wrote-the-Apocolypse.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">On donkey in Patmos, Greece, in 1973, riding up to the monastery cave where St. John the Apostle wrote the Apocolypse</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/On-the-cover-of-the-September-1975-Extension-magazine-edition.-Father-served-for-over-17-years-as-a-missions-priest-in-the-Missouri-Ozarks-region-from-1967-to-1984.jpg" class="glightbox" data-description="On the cover of the September, 1975 Extension magazine edition. Father served for over 17 years as a missions priest in the Missouri Ozarks region from 1967 to 1984">
                        <img src="../assets/img/fr-rookey-priesthood/On-the-cover-of-the-September-1975-Extension-magazine-edition.-Father-served-for-over-17-years-as-a-missions-priest-in-the-Missouri-Ozarks-region-from-1967-to-1984.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">On the cover of the September, 1975 Extension magazine edition. Father served for over 17 years as a missions priest in the Missouri Ozarks region from 1967 to 1984</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Pictured-in-his-Irish-derby-hat.-He-was-very-proud-of-his-Irish-heritage.jpg" class="glightbox" data-description="Pictured in his Irish derby hat. He was very proud of his Irish heritage">
                        <img src="../assets/img/fr-rookey-priesthood/Pictured-in-his-Irish-derby-hat.-He-was-very-proud-of-his-Irish-heritage.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Pictured in his Irish derby hat. He was very proud of his Irish heritage</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Mass-at-one-of-his-mission-churches-in-Missouri.jpg" class="glightbox" data-description="Mass at one of his mission churches in Missouri">
                        <img src="../assets/img/fr-rookey-priesthood/Mass-at-one-of-his-mission-churches-in-Missouri.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Mass at one of his mission churches in Missouri</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/1979-Holy-Land-travel-ad-with-Fr.-Peter-as-the-pilgrimage-priest.-He-served-as-the-spiritual-guide-for-many-religious-pilgrimages-over-the-years.jpg" class="glightbox" data-description="1979 Holy Land travel ad with Fr. Peter as the pilgrimage priest. He served as the spiritual guide for many religious pilgrimages over the years">
                        <img src="../assets/img/fr-rookey-priesthood/1979-Holy-Land-travel-ad-with-Fr.-Peter-as-the-pilgrimage-priest.-He-served-as-the-spiritual-guide-for-many-religious-pilgrimages-over-the-years.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">1979 Holy Land travel ad with Fr. Peter as the pilgrimage priest. He served as the spiritual guide for many religious pilgrimages over the years</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Kissing-the-famous-Blarney-Stone-in-1979-Ireland.jpg" class="glightbox" data-description="Kissing the famous Blarney Stone in 1979 Ireland.">
                        <img src="../assets/img/fr-rookey-priesthood/Kissing-the-famous-Blarney-Stone-in-1979-Ireland.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Kissing the famous Blarney Stone in 1979 Ireland.</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Denver-Colorado-Cathedral-being-invested-as-a-Knight-of-the-Holy-Sepulcher-on-May-6-1984.jpg" class="glightbox" data-description="Denver Colorado Cathedral being invested as a Knight of the Holy Sepulcher on May 6, 1984">
                        <img src="../assets/img/fr-rookey-priesthood/Denver-Colorado-Cathedral-being-invested-as-a-Knight-of-the-Holy-Sepulcher-on-May-6-1984.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Denver Colorado Cathedral being invested as a Knight of the Holy Sepulcher on May 6, 1984</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-38-oct-1988-Rev-Sabba-latin-patriarch-of-jerusalem.jpg" class="glightbox" data-description="With Rev. Sabba, Latin Patriarch of Jerusalem in October, 1988">
                        <img src="../assets/img/fr-rookey-priesthood/fr-38-oct-1988-Rev-Sabba-latin-patriarch-of-jerusalem.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">With Rev. Sabba, Latin Patriarch of Jerusalem in October, 1988</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-12-2.jpg" class="glightbox" data-description="Circa 1990 photo of Father">
                        <img src="../assets/img/fr-rookey-priesthood/fr-12-2.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Circa 1990 photo of Father</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-24.jpg" class="glightbox" data-description="Early 1990s Miracle Prayer card photo of Fr. Peter">
                        <img src="../assets/img/fr-rookey-priesthood/fr-24.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Early 1990s Miracle Prayer card photo of Fr. Peter</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-23.jpg" class="glightbox" data-description="Father in Medjugorje in May 1991">
                        <img src="../assets/img/fr-rookey-priesthood/fr-23.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Father in Medjugorje in May 1991</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Healing-service-in-the-tent-behind-St.-James-church-in-Medjugorje-in-the-early-1990s.jpg" class="glightbox" data-description="Healing service in the tent behind St. James church in Medjugorje in the early 1990s">
                        <img src="../assets/img/fr-rookey-priesthood/Healing-service-in-the-tent-behind-St.-James-church-in-Medjugorje-in-the-early-1990s.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Healing service in the tent behind St. James church in Medjugorje in the early 1990s</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/img20201209_19153171.jpg" class="glightbox" data-description="After 50th anniversary of ordination Mass at Our Lady of Sorrows Basilica in Chicago, May, 1991, with friends Ted and Maureen. Also, nephew Tim on right">
                        <img src="../assets/img/fr-rookey-priesthood/img20201209_19153171.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">After 50th anniversary of ordination Mass at Our Lady of Sorrows Basilica in Chicago, May, 1991, with friends Ted and Maureen. Also, nephew Tim on right</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/img20201209_18554903.jpg" class="glightbox" data-description="Photo of Fr. Peter with his two other surviving 1941 ordination classmates after their 50th anniversary of ordination Mass in May, 1991 at Our Lady of Sorrows">
                        <img src="../assets/img/fr-rookey-priesthood/img20201209_18554903.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Photo of Fr. Peter with his two other surviving 1941 ordination classmates after their 50th anniversary of ordination Mass in May, 1991 at Our Lady of Sorrows</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-7.jpg" class="glightbox" data-description="Father, in 1991, posing in front of the former Mater Dolorosa seminary chapel in Hillside, Illinois where he studied for the priesthood and celebrated his very first Mass as a priest in May, 1941">
                        <img src="../assets/img/fr-rookey-priesthood/fr-7.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Father, in 1991, posing in front of the former Mater Dolorosa seminary chapel in Hillside, Illinois where he studied for the priesthood and celebrated his very first Mass as a priest in May, 1941</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-47-st-michael-church-lake-jackson-TX-11-3-92.jpg" class="glightbox" data-description="With young child at St. Michael’s church in Jackson, Texas on November 3, 1992">
                        <img src="../assets/img/fr-rookey-priesthood/fr-47-st-michael-church-lake-jackson-TX-11-3-92.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">With young child at St. Michael’s church in Jackson, Texas on November 3, 1992</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-50-1993-at-sorrows.jpg" class="glightbox" data-description="January, 1993 healing Mass at Our Lady of Sorrows">
                        <img src="../assets/img/fr-rookey-priesthood/fr-50-1993-at-sorrows.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">January, 1993 healing Mass at Our Lady of Sorrows</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-5.jpg" class="glightbox" data-description="1990s sitting portrait of Fr. Peter drawn by famous artist, Andre Durand, while Father was in Rome. Mr. Durand also painted sitting portraits of St. Pope John Paul II, Mother Teresa and the Dalai Lama, among others">
                        <img src="../assets/img/fr-rookey-priesthood/fr-5.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">1990s sitting portrait of Fr. Peter drawn by famous artist, Andre Durand, while Father was in Rome. Mr. Durand also painted sitting portraits of St. Pope John Paul II, Mother Teresa and the Dalai Lama, among others</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-41-1993.jpg" class="glightbox" data-description="Mass consecration at side chapel, St. James church in Medjugorje in October, 1993">
                        <img src="../assets/img/fr-rookey-priesthood/fr-41-1993.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Mass consecration at side chapel, St. James church in Medjugorje in October, 1993</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/Fr-17-Rookey-St.jpg" class="glightbox" data-description="Celebrating a healing Mass at St. Lucy’s Catholic church in Kenosha, Wisconsin on August 22, 1993">
                        <img src="../assets/img/fr-rookey-priesthood/Fr-17-Rookey-St.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Celebrating a healing Mass at St. Lucy’s Catholic church in Kenosha, Wisconsin on August 22, 1993</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-45-wailing-wall-jerusalem.jpg" class="glightbox" data-description="Praying at the Wailing Wall in Jerusalem">
                        <img src="../assets/img/fr-rookey-priesthood/fr-45-wailing-wall-jerusalem.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Praying at the Wailing Wall in Jerusalem</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-priesthood/fr-21.jpg" class="glightbox" data-description="Father on the cover of a Polish language magazine in the 1990s">
                        <img src="../assets/img/fr-rookey-priesthood/fr-21.jpg" alt="Pilgrimage">
                    </a>
                    <div class="caption">Father on the cover of a Polish language magazine in the 1990s</div>
                </div>

               <!-- Add more items as needed -->

            </div>
            
            <div style="text-align: right; margin-top: 40px;">
                <a href="<?php echo BASE_URL; ?>/photo-album/photos.php" class="btn-submit" style="display: inline-block; text-decoration: none;">Back to Gallery</a>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/script-links.php'; ?>
</body>
</html>
