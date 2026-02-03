<?php 
include '../config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Fr. Rookey & Friends &#8211; Fr Peter Mary Rookey</title>
    <meta name="description" content="View historical photos of Fr. Peter Mary Rookey with friends and associates." />
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
            /* width: 100%; */
            max-width: 250px;
            height: auto;
            margin: 0 auto;
            /* border: 1px solid #ddd;
            padding: 5px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); */
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
            <h1 class="blog-title">Fr. Rookey & Friends</h1>
            
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/IMG_4497-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Bob Benson & Sabina Reyes</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr.-peter-with-marge-and-gary-150x150.jpeg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Barbara Wojtowicz, Kathy Quasey and Liz Murray</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/img20180425_10303318-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Margaret Trosclair</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-97-bday-w-pohlmans-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Janice & Peter Pohlman</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/PA210195-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Gloria, Gayle Ponsetti and Mary Scannell</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/PA210196-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Jim & Eileen Staunton</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/PA210217-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Vicki Guttierez</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/PA210207-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Dr. Vincent Oganwu & His Wife</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-David-Parkes-Guy-Murphy-4-27-13-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends David Parkes & Guy Murphy</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Betty-and-Joe-Malone-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Betty and Joe Malone</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/img20181109_10551881-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Sister Joan Ann Springman</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Rookey-Connies-6-15-13-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Annette & Dennis O’Donnell with son Emmanuel</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/img20170524_12573233-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Sylvia Kentgens</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr.-peter-with-marge-and-gary-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Marge & Gary Theis</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-Christine-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Christine Rossi</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Barbara-Herzic-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Barbara Herzic & Fr. David Simonetti</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/img20200524_15284734-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Fr. James Holup</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/307715_10150447777308888_1437390509_n-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Little friend Emmanuel, son of Dennis and Annette O’Donnell</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-peter-and-annie-karto-1-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Annie Karto</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr2-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Dolores Hope with Father on her 100th birthday in 2009</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-and-vicki-may-06-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Marge Ryan standing on right and Vickie Guiterrez below her</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr1-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Maria Esparanza Bianchini and husband Geo</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Maria Medina with daughter Maria Miramontes</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Pereiras-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Thomas Pereira and wife</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/PA210181-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Dale Mize</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr-Peter-and-Donie-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Donie Cassidy</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Eva-and-Fr.-Peter-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Eva Limbaugh Svigos</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-peter-heather-duncan-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Heather Duncan</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Annie-Tittle-2006-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Annie Tittle</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Ed-Schlicter-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Ed Slechter</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-at-Kathys-House-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends at Mass in Kathy Gearhart’s home</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-Tom-Sabina-oct-2007-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Tom Bauer and Sabina Reyes</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-Tim-Anne-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Joe Molloy on right with Father and Tim & Anne Rookey</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/IMG_5787-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Cindy Benson, wife of Bob Benson, with Father and Tom Rookey</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-in-Car-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Ed Slechter, one of Father’s drivers</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-with-Hopes-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Bob and Dolores Hope with Father and his brother Tom Rookey</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Mary-Zach-again-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Mary Zach and son</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Roz-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Roz Fiocci</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/father-rookey-debbie-vanessa-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Debbie Pryor and Vanessa Keck</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Dennis-Annete-ODonnell-with-Fr.-Peter-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Dennis and Annette O’Donnell</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Sandy-Badke-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Sandy Badke</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Sara-Zervos-and-Fr.-Peter-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Sara Zervos and daughter</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr-1-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Betsy Bellissimo</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-PeterLarryCarrie-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Carrie and Larry</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-anne-sr-michelle-2006-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Sister Michelle Teff with niece Anne Rookey</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/img20190701_16345646-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Jean Mund</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Barbara-C-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Barbara Camenga with niece and nephew Anne and Tim Rookey</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Pesaventos-with-Fr.-Peter-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Tony and Betty Pevavento</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/PA210213-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Lori Pesavento Stamm</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-Gene-Rubel-Priory-April-2008-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Gene Rubel</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Sr.-Ann-Marie-Corporale-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Sr. Ann Marie Corporale</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Karen-Salas-Blancas-at-Fr-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Karen Salas Blancas</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Heather-Parsons-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Heather Parsons</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Kristina-Litviak-with-Fr.-Peter-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Kristina Litviak</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Tim-and-MaryAnn-Galvez-with-Fr.-Peter-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Dr. Timothy Galvez and his wife Mary Ann-pictured in center of photo</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Bill-Mea-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Bill Mea-pictured on the far left</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Jim-Hrecho-and-Fr-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Servite Brother and Friend Jim Hrechko-Father’s right hand man</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Andre-Durand-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Andre Durand</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Joe-Nicosia-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Joe Nicosia</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-in-Poland-2004-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends from Poland with Fr. Peter in Dec. 2004</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Father-Rookey-and-Gerry-Don-Copy-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Gerry Donnelly</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Ivan-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Ivan Dragicevic</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/P5240681-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Kathy and Wade Malhas</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Joe-Capizzano-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Joe Capizzano</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Garrett-Fosco-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Garrett Fosco-pictured on right</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Paul-Harvey-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Paul Harvey with Wife Angel</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Darren-Harris-and-his-son-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Darren Harris and his son</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Sharon-Echols-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Sharon Echols</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Bernie-Ellis-with-Fr-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Bernie Ellis</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Agnes-Fernandes-and-Fr.-Peter-Sept-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Agnes Fernandes</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Ryan-Fuller-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Ryan Fuller, left, with Dennis O’Donnell</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Jeanette-Gerrig-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Jeanette Gehrig, standing closest to Fr. Peter</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Friends-Jim-and-Jeanette-Gehrig-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends Jim and Jeanette Gehrig</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Richard-Bingold-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Richard Bingold</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Dana-Scallon-with-Fr-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Dana Scallon</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Art-Johns-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Art Johns</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Ray-Jendrowski-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Ray Jendrowski, on far left</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Dick-Safranski-150x150.png" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Dick Safranski</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/img20201211_20104389-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Susan Tassone</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/img20201211_20151763-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friends-Married couple Lan Nguyen and Anphon Ho</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/img20201211_20210820-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Colleen Cruse, pictured on left with Anne Rookey</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/Fr-150x150 (1).jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Ivan Loocks</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-90-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Jamie Beck</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-77-Becky-Olsen-with-Fr-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Becky Olsen</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-40-dodie-Holyland-2009-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Dodie Przybycien, standing to Father’s right with camera case-Holyland 2009</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/fr-rookey-friends/fr-52-150x150.jpg" alt="Fr. Rookey & Friends Cover">
                    <div class="caption">Friend Kim Lewandowski and children with friend Tom Bauer</div>
                </div>
            </div>
            
            <div style="text-align: right; margin-top: 40px;">
                <a href="<?= BASE_URL ?>/photo-album/photos.php" class="btn-submit" style="display: inline-block; text-decoration: none;">Back to Gallery</a>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/script-links.php'; ?>
</body>
</html>
