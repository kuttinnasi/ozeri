<?php 
include '../config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Fr. Rookey & Family &#8211; Fr Peter Mary Rookey</title>
    <meta name="description" content="View historical photos of Fr. Peter Mary Rookey and his family." />
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
            max-width: 250px;
            height: auto;
            border: 1px solid #ddd;
            padding: 5px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        .caption {
            margin-top: 15px;
            font-size: 14px;
            line-height: 1.5;
            color: #555;
            padding: 0 10px;
        }
        .btn-submit {
            background: #1a4b7e;
            color: #fff;
            border: 2px solid #1a4b7e;
            padding: 12px 35px;
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
            <h1 class="blog-title">Fr. Rookey & Family</h1>
            
            <div class="gallery-grid">
                <!-- Row 1 -->
                <div class="gallery-item">
                    <img src="../assets/img/1-150x150.jpg" alt="Wedding photo">
                    <div class="caption">Wedding photo of Peter & Mary Rookey; January 1912</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/2-150x150.jpg" alt="Rookey Family 1918">
                    <div class="caption">Rookey Family circa 1918</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/3-150x150.jpg" alt="Young boys and mother">
                    <div class="caption">Two young boys left to right John Mary Rookey (1913) & Peter (born 1916) with their mother Mary Lillian.</div>
                </div>

                <!-- Row 2 -->
                <div class="gallery-item">
                    <img src="../assets/img/4-150x150.jpg" alt="Blessing photo">
                    <div class="caption">Blessing photo of Father Mary Rookey</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/5-150x150.jpg" alt="Henry on car">
                    <div class="caption">Youngest son Henry Michael Rookey (born 1932) on top of car. In middle John Peter Rookey (born 1913) with son John Timothy Rookey (born 1941) inside.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/6-150x150.jpg" alt="John and Peter with mother">
                    <div class="caption">Father L-R John Mary (born 1913) and Peter (born 1916) with their mother Mary Lillian.</div>
                </div>

                <!-- Row 3 -->
                <div class="gallery-item">
                    <img src="../assets/img/7-150x150.jpg" alt="Young Peter and brother">
                    <div class="caption">A young Peter Mary and brothers.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/8-150x150.jpg" alt="Michale Henry Rookey">
                    <div class="caption">Henry Michael Rookey</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/9-150x150.jpg" alt="Family gathering">
                    <div class="caption">A young Peter Mary and siblings.</div>
                </div>

                <!-- Row 4 -->
                <div class="gallery-item">
                    <img src="../assets/img/10-150x150.jpg" alt="Soldier">
                    <div class="caption">Brother Brother Rookey (born 1928?) as a soldier in World War II.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/11-150x150.jpg" alt="Newspaper clipping">
                    <div class="caption">Newspaper clipping of Rookey brothers enlistment.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/12-150x150.jpg" alt="Peter and friends">
                    <div class="caption">Photo of Peter Mary and brother John Peter and sisters, taking together during a visit to the family home.</div>
                </div>

                <!-- Row 5 -->
                <div class="gallery-item">
                    <img src="../assets/img/13-150x150.jpg" alt="Army Peter">
                    <div class="caption">Young Henry Michael Rookey (born 1932) as a soldier in World War II.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/14-150x150.jpg" alt="Thomas Terence Rookey">
                    <div class="caption">Thomas Terence Rookey (born 1920) as a soldier in World War II.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/15-150x150.jpg" alt="Peter on horse">
                    <div class="caption">Peter Mary on a horse.</div>
                </div>

                <!-- Row 6 -->
                <div class="gallery-item">
                    <img src="../assets/img/16-150x150.jpg" alt="Group photo">
                    <div class="caption">The first of the seven children born to Peter & Mary Rookey; clockwise starting at left John, Mary, Peter, and James.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/17-150x150.jpg" alt="Woman standing">
                    <div class="caption">A young mother Lillian Mary Rookey.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/18-150x150.jpg" alt="Seated family">
                    <div class="caption">An older Peter Mary and sisters.</div>
                </div>

                <div class="gallery-item">
                    <img src="../assets/img/19-150x150.jpg" alt="Family photo">
                    <div class="caption">Family and friends gathering at a house in Chicago.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/20-150x150.jpg" alt="Family photo">
                    <div class="caption">Fr. Rookey with family members during a visit to the family home.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/21-150x150.jpg" alt="Family photo">
                    <div class="caption">Another family photo from a reunion or gathering.</div>
                </div>

                <div class="gallery-item">
                    <img src="../assets/img/22-150x150.jpg" alt="Family photo">
                    <div class="caption">Fr. Rookey with his sister and brother-in-law.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/P5120005-150x150.jpg" alt="Family photo">
                    <div class="caption">Fr. Peter Mary Rookey with family members.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Historical family documentation.</div>
                </div>

                
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= BASE_URL ?>/photo-album/photos.php" class="btn-submit" style="display: inline-block; text-decoration: none;">Back to Gallery</a>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/script-links.php'; ?>
</body>
</html>
