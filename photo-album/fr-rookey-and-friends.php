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
            <h1 class="blog-title">Fr. Rookey & Friends</h1>
            
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/IMG_4497.jpg" class="glightbox" data-description="Friends Bob Benson & Sabina Reyes">
                        <img src="../assets/img/fr-rookey-friends/IMG_4497.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Bob Benson & Sabina Reyes</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr.-peter-with-marge-and-gary.jpeg" class="glightbox" data-description="Friends Barbara Wojtowicz, Kathy Quasey and Liz Murray">
                        <img src="../assets/img/fr-rookey-friends/fr.-peter-with-marge-and-gary.jpeg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Barbara Wojtowicz, Kathy Quasey and Liz Murray</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/img20180425_10303318-Copy.jpg" class="glightbox" data-description="Friend Margaret Trosclair">
                        <img src="../assets/img/fr-rookey-friends/img20180425_10303318-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Margaret Trosclair</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-97-bday-w-pohlmans-Copy.jpg" class="glightbox" data-description="Friends Janice & Peter Pohlman">
                        <img src="../assets/img/fr-rookey-friends/fr-97-bday-w-pohlmans-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Janice & Peter Pohlman</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/PA210195-Copy.jpg" class="glightbox" data-description="Friends Gloria, Gayle Ponsetti and Mary Scannell">
                        <img src="../assets/img/fr-rookey-friends/PA210195-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Gloria, Gayle Ponsetti and Mary Scannell</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/PA210196-Copy.jpg" class="glightbox" data-description="Friends Jim & Eileen Staunton">
                        <img src="../assets/img/fr-rookey-friends/PA210196-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Jim & Eileen Staunton</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/PA210217-Copy.jpg" class="glightbox" data-description="Friend Vicki Guttierez">
                        <img src="../assets/img/fr-rookey-friends/PA210217-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Vicki Guttierez</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/PA210207-Copy.jpg" class="glightbox" data-description="Friends Dr. Vincent Oganwu & His Wife">
                        <img src="../assets/img/fr-rookey-friends/PA210207-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Dr. Vincent Oganwu & His Wife</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-David-Parkes-Guy-Murphy-4-27-13-Copy.jpg" class="glightbox" data-description="Friends David Parkes & Guy Murphy">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-David-Parkes-Guy-Murphy-4-27-13-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends David Parkes & Guy Murphy</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Betty-and-Joe-Malone-Copy.jpg" class="glightbox" data-description="Friends Betty and Joe Malone">
                        <img src="../assets/img/fr-rookey-friends/Betty-and-Joe-Malone-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Betty and Joe Malone</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/img20181109_10551881.jpg" class="glightbox" data-description="Friend Sister Joan Ann Springman">
                        <img src="../assets/img/fr-rookey-friends/img20181109_10551881.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Sister Joan Ann Springman</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Rookey-Connies-6-15-13-Copy.jpg" class="glightbox" data-description="Friends Annette & Dennis O’Donnell with son Emmanuel">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Rookey-Connies-6-15-13-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Annette & Dennis O’Donnell with son Emmanuel</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/img20170524_12573233-Copy.jpg" class="glightbox" data-description="Friend Sylvia Kentgens">
                        <img src="../assets/img/fr-rookey-friends/img20170524_12573233-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Sylvia Kentgens</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr.-peter-with-marge-and-gary.jpg" class="glightbox" data-description="Friends Marge & Gary Theis">
                        <img src="../assets/img/fr-rookey-friends/fr.-peter-with-marge-and-gary.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Marge & Gary Theis</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-Christine-Copy.jpg" class="glightbox" data-description="Friend Christine Rossi">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-Christine-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Christine Rossi</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-and-Barbara-Herzic.jpg" class="glightbox" data-description="Friends Barbara Herzic & Fr. David Simonetti">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Barbara-Herzic.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Barbara Herzic & Fr. David Simonetti</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/img20200524_15284734.jpg" class="glightbox" data-description="Friend Fr. James Holup">
                        <img src="../assets/img/fr-rookey-friends/img20200524_15284734.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Fr. James Holup</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/307715_10150447777308888_1437390509_n-Copy.jpg" class="glightbox" data-description="Little friend Emmanuel, son of Dennis and Annette O’Donnell">
                        <img src="../assets/img/fr-rookey-friends/307715_10150447777308888_1437390509_n-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Little friend Emmanuel, son of Dennis and Annette O’Donnell</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-peter-and-annie-karto-1.jpg" class="glightbox" data-description="Friend Annie Karto">
                        <img src="../assets/img/fr-rookey-friends/fr-peter-and-annie-karto-1.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Annie Karto</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr2.jpg" class="glightbox" data-description="Friend Dolores Hope with Father on her 100th birthday in 2009">
                        <img src="../assets/img/fr-rookey-friends/Fr2.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Dolores Hope with Father on her 100th birthday in 2009</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-and-vicki-may-06-Copy.jpg" class="glightbox" data-description="Friend Marge Ryan standing on right and Vickie Guiterrez below her">
                        <img src="../assets/img/fr-rookey-friends/fr-and-vicki-may-06-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Marge Ryan standing on right and Vickie Guiterrez below her</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr1.jpg" class="glightbox" data-description="Friends Maria Esparanza Bianchini and husband Geo">
                        <img src="../assets/img/fr-rookey-friends/Fr1.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Maria Esparanza Bianchini and husband Geo</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.jpg" class="glightbox" data-description="Friend Maria Medina with daughter Maria Miramontes">
                        <img src="../assets/img/fr-rookey-friends/Fr.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Maria Medina with daughter Maria Miramontes</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-and-Pereiras.jpg" class="glightbox" data-description="Friend Thomas Pereira and wife">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Pereiras.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Thomas Pereira and wife</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/PA210181-Copy.jpg" class="glightbox" data-description="Friend Dale Mize">
                        <img src="../assets/img/fr-rookey-friends/PA210181-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Dale Mize</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr-Peter-and-Donie.jpg" class="glightbox" data-description="Friend Donie Cassidy">
                        <img src="../assets/img/fr-rookey-friends/Fr-Peter-and-Donie.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Donie Cassidy</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Eva-and-Fr.-Peter.jpg" class="glightbox" data-description="Friend Eva Limbaugh Svigos">
                        <img src="../assets/img/fr-rookey-friends/Eva-and-Fr.-Peter.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Eva Limbaugh Svigos</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-peter-heather-duncan.jpg" class="glightbox" data-description="Friend Heather Duncan">
                        <img src="../assets/img/fr-rookey-friends/fr-peter-heather-duncan.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Heather Duncan</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-and-Annie-Tittle-2006.jpg" class="glightbox" data-description="Friend Annie Tittle">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Annie-Tittle-2006.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Annie Tittle</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-and-Ed-Schlicter.jpg" class="glightbox" data-description="Friend Ed Slechter">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Ed-Schlicter.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Ed Slechter</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-at-Kathys-House.jpg" class="glightbox" data-description="Friends at Mass in Kathy Gearhart’s home">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-at-Kathys-House.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends at Mass in Kathy Gearhart’s home</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-Tom-Sabina-oct-2007.jpg" class="glightbox" data-description="Friends Tom Bauer and Sabina Reyes">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-Tom-Sabina-oct-2007.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Tom Bauer and Sabina Reyes</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-Tim-Anne.jpg" class="glightbox" data-description="Friend Joe Molloy on right with Father and Tim & Anne Rookey">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-Tim-Anne.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Joe Molloy on right with Father and Tim & Anne Rookey</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/IMG_5787.jpg" class="glightbox" data-description="Friend Cindy Benson, wife of Bob Benson, with Father and Tom Rookey">
                        <img src="../assets/img/fr-rookey-friends/IMG_5787.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Cindy Benson, wife of Bob Benson, with Father and Tom Rookey</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-in-Car.jpg" class="glightbox" data-description="Friend Ed Slechter, one of Father’s drivers">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-in-Car.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Ed Slechter, one of Father’s drivers</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-with-Hopes.jpg" class="glightbox" data-description="Friends Bob and Dolores Hope with Father and his brother Tom Rookey">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-with-Hopes.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Bob and Dolores Hope with Father and his brother Tom Rookey</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Mary-Zach-again.jpg" class="glightbox" data-description="Friend Mary Zach and son">
                        <img src="../assets/img/fr-rookey-friends/Mary-Zach-again.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Mary Zach and son</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-and-Roz.jpg" class="glightbox" data-description="Friend Roz Fiocci">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Roz.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Roz Fiocci</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/father-rookey-debbie-vanessa-Copy.jpg" class="glightbox" data-description="Friends Debbie Pryor and Vanessa Keck">
                        <img src="../assets/img/fr-rookey-friends/father-rookey-debbie-vanessa-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Debbie Pryor and Vanessa Keck</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Dennis-Annete-ODonnell-with-Fr.-Peter.jpg" class="glightbox" data-description="Friends Dennis and Annette O’Donnell">
                        <img src="../assets/img/fr-rookey-friends/Dennis-Annete-ODonnell-with-Fr.-Peter.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Dennis and Annette O’Donnell</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Sandy-Badke.jpg" class="glightbox" data-description="Friend Sandy Badke">
                        <img src="../assets/img/fr-rookey-friends/Sandy-Badke.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Sandy Badke</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Sara-Zervos-and-Fr.-Peter.jpg" class="glightbox" data-description="Friend Sara Zervos and daughter">
                        <img src="../assets/img/fr-rookey-friends/Sara-Zervos-and-Fr.-Peter.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Sara Zervos and daughter</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr-1.jpg" class="glightbox" data-description="Friend Betsy Bellissimo">
                        <img src="../assets/img/fr-rookey-friends/Fr-1.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Betsy Bellissimo</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-PeterLarryCarrie-Copy.jpg" class="glightbox" data-description="Friends Carrie and Larry">
                        <img src="../assets/img/fr-rookey-friends/Fr.-PeterLarryCarrie-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Carrie and Larry</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-anne-sr-michelle-2006-Copy.jpg" class="glightbox" data-description="Friend Sister Michelle Teff with niece Anne Rookey">
                        <img src="../assets/img/fr-rookey-friends/fr-anne-sr-michelle-2006-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Sister Michelle Teff with niece Anne Rookey</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/img20190701_16345646.jpg" class="glightbox" data-description="Friend Jean Mund">
                        <img src="../assets/img/fr-rookey-friends/img20190701_16345646.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Jean Mund</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Barbara-C.jpg" class="glightbox" data-description="Friend Barbara Camenga with niece and nephew Anne and Tim Rookey">
                        <img src="../assets/img/fr-rookey-friends/Barbara-C.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Barbara Camenga with niece and nephew Anne and Tim Rookey</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Pesaventos-with-Fr.-Peter.jpg" class="glightbox" data-description="Friends Tony and Betty Pevavento">
                        <img src="../assets/img/fr-rookey-friends/Pesaventos-with-Fr.-Peter.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Tony and Betty Pevavento</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/PA210213-Copy.jpg" class="glightbox" data-description="Friend Lori Pesavento Stamm">
                        <img src="../assets/img/fr-rookey-friends/PA210213-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Lori Pesavento Stamm</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-Gene-Rubel-Priory-April-2008.jpg" class="glightbox" data-description="Friend Gene Rubel">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-Gene-Rubel-Priory-April-2008.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Gene Rubel</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Sr.-Ann-Marie-Corporale.jpg" class="glightbox" data-description="Friend Sr. Ann Marie Corporale">
                        <img src="../assets/img/fr-rookey-friends/Sr.-Ann-Marie-Corporale.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Sr. Ann Marie Corporale</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Karen-Salas-Blancas-at-Fr.jpg" class="glightbox" data-description="Friend Karen Salas Blancas">
                        <img src="../assets/img/fr-rookey-friends/Karen-Salas-Blancas-at-Fr.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Karen Salas Blancas</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Heather-Parsons.jpg" class="glightbox" data-description="Friend Heather Parsons">
                        <img src="../assets/img/fr-rookey-friends/Heather-Parsons.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Heather Parsons</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Kristina-Litviak-with-Fr.-Peter.jpg" class="glightbox" data-description="Friend Kristina Litviak">
                        <img src="../assets/img/fr-rookey-friends/Kristina-Litviak-with-Fr.-Peter.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Kristina Litviak</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Tim-and-MaryAnn-Galvez-with-Fr.-Peter.jpg" class="glightbox" data-description="Friends Dr. Timothy Galvez and his wife Mary Ann-pictured in center of photo">
                        <img src="../assets/img/fr-rookey-friends/Tim-and-MaryAnn-Galvez-with-Fr.-Peter.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Dr. Timothy Galvez and his wife Mary Ann-pictured in center of photo</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Bill-Mea.jpg" class="glightbox" data-description="Friend Bill Mea-pictured on the far left">
                        <img src="../assets/img/fr-rookey-friends/Bill-Mea.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Bill Mea-pictured on the far left</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Jim-Hrecho-and-Fr.jpg" class="glightbox" data-description="Servite Brother and Friend Jim Hrechko-Father’s right hand man">
                        <img src="../assets/img/fr-rookey-friends/Jim-Hrecho-and-Fr.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Servite Brother and Friend Jim Hrechko-Father’s right hand man</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Andre-Durand.jpg" class="glightbox" data-description="Friend Andre Durand">
                        <img src="../assets/img/fr-rookey-friends/Andre-Durand.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Andre Durand</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Joe-Nicosia.jpg" class="glightbox" data-description="Friend Joe Nicosia">
                        <img src="../assets/img/fr-rookey-friends/Joe-Nicosia.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Joe Nicosia</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-in-Poland-2004.jpg" class="glightbox" data-description="Friends from Poland with Fr. Peter in Dec. 2004">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-in-Poland-2004.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends from Poland with Fr. Peter in Dec. 2004</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Father-Rookey-and-Gerry-Don-Copy.jpg" class="glightbox" data-description="Friend Gerry Donnelly">
                        <img src="../assets/img/fr-rookey-friends/Father-Rookey-and-Gerry-Don-Copy.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Gerry Donnelly</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.-Peter-and-Ivan.jpg" class="glightbox" data-description="Friend Ivan Dragicevic">
                        <img src="../assets/img/fr-rookey-friends/Fr.-Peter-and-Ivan.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Ivan Dragicevic</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/P5240681.jpg" class="glightbox" data-description="Friends Kathy and Wade Malhas">
                        <img src="../assets/img/fr-rookey-friends/P5240681.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Kathy and Wade Malhas</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Joe-Capizzano.jpg" class="glightbox" data-description="Friend Joe Capizzano">
                        <img src="../assets/img/fr-rookey-friends/Joe-Capizzano.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Joe Capizzano</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Garrett-Fosco.jpg" class="glightbox" data-description="Friend Garrett Fosco-pictured on right">
                        <img src="../assets/img/fr-rookey-friends/Garrett-Fosco.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Garrett Fosco-pictured on right</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Paul-Harvey.jpg" class="glightbox" data-description="Friend Paul Harvey with Wife Angel">
                        <img src="../assets/img/fr-rookey-friends/Paul-Harvey.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Paul Harvey with Wife Angel</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Darren-Harris-and-his-son.jpg" class="glightbox" data-description="Friend Darren Harris and his son">
                        <img src="../assets/img/fr-rookey-friends/Darren-Harris-and-his-son.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Darren Harris and his son</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Sharon-Echols.jpg" class="glightbox" data-description="Friend Sharon Echols">
                        <img src="../assets/img/fr-rookey-friends/Sharon-Echols.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Sharon Echols</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Bernie-Ellis-with-Fr.jpg" class="glightbox" data-description="Friend Bernie Ellis">
                        <img src="../assets/img/fr-rookey-friends/Bernie-Ellis-with-Fr.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Bernie Ellis</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Agnes-Fernandes-and-Fr.-Peter-Sept.jpg" class="glightbox" data-description="Friend Agnes Fernandes">
                        <img src="../assets/img/fr-rookey-friends/Agnes-Fernandes-and-Fr.-Peter-Sept.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Agnes Fernandes</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Ryan-Fuller.jpg" class="glightbox" data-description="Friend Ryan Fuller, left, with Dennis O’Donnell">
                        <img src="../assets/img/fr-rookey-friends/Ryan-Fuller.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Ryan Fuller, left, with Dennis O’Donnell</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Jeanette-Gerrig.jpg" class="glightbox" data-description="Friend Jeanette Gehrig, standing closest to Fr. Peter">
                        <img src="../assets/img/fr-rookey-friends/Jeanette-Gerrig.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Jeanette Gehrig, standing closest to Fr. Peter</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Friends-Jim-and-Jeanette-Gehrig.jpg" class="glightbox" data-description="Friends Jim and Jeanette Gehrig">
                        <img src="../assets/img/fr-rookey-friends/Friends-Jim-and-Jeanette-Gehrig.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends Jim and Jeanette Gehrig</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Richard-Bingold.jpg" class="glightbox" data-description="Friend Richard Bingold">
                        <img src="../assets/img/fr-rookey-friends/Richard-Bingold.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Richard Bingold</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Dana-Scallon-with-Fr.jpg" class="glightbox" data-description="Friend Dana Scallon">
                        <img src="../assets/img/fr-rookey-friends/Dana-Scallon-with-Fr.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Dana Scallon</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Art-Johns.jpg" class="glightbox" data-description="Friend Art Johns">
                        <img src="../assets/img/fr-rookey-friends/Art-Johns.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Art Johns</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Ray-Jendrowski.jpg" class="glightbox" data-description="Friend Ray Jendrowski, on far left">
                        <img src="../assets/img/fr-rookey-friends/Ray-Jendrowski.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Ray Jendrowski, on far left</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Dick-Safranski.png" class="glightbox" data-description="Friend Dick Safranski">
                        <img src="../assets/img/fr-rookey-friends/Dick-Safranski.png" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Dick Safranski</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/img20201211_20104389.jpg" class="glightbox" data-description="Friend Susan Tassone">
                        <img src="../assets/img/fr-rookey-friends/img20201211_20104389.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Susan Tassone</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/img20201211_20151763.jpg" class="glightbox" data-description="Friends-Married couple Lan Nguyen and Anphon Ho">
                        <img src="../assets/img/fr-rookey-friends/img20201211_20151763.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friends-Married couple Lan Nguyen and Anphon Ho</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/img20201211_20210820.jpg" class="glightbox" data-description="Friend Colleen Cruse, pictured on left with Anne Rookey">
                        <img src="../assets/img/fr-rookey-friends/img20201211_20210820.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Colleen Cruse, pictured on left with Anne Rookey</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/Fr.jpg" class="glightbox" data-description="Friend Ivan Loocks">
                        <img src="../assets/img/fr-rookey-friends/Fr.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Ivan Loocks</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-90.jpg" class="glightbox" data-description="Friend Jamie Beck">
                        <img src="../assets/img/fr-rookey-friends/fr-90.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Jamie Beck</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-77-Becky-Olsen-with-Fr.jpg" class="glightbox" data-description="Friend Becky Olsen">
                        <img src="../assets/img/fr-rookey-friends/fr-77-Becky-Olsen-with-Fr.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Becky Olsen</div>
                </div>
            </div>
            <div class="gallery-grid">
                <!-- Cover Image -->
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-40-dodie-Holyland-2009.jpg" class="glightbox" data-description="Friend Dodie Przybycien, standing to Father’s right with camera case-Holyland 2009">
                        <img src="../assets/img/fr-rookey-friends/fr-40-dodie-Holyland-2009.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Dodie Przybycien, standing to Father’s right with camera case-Holyland 2009</div>
                </div>
                <div class="gallery-item">
                    <a href="../assets/img/fr-rookey-friends/fr-52.jpg" class="glightbox" data-description="Friend Kim Lewandowski and children with friend Tom Bauer">
                        <img src="../assets/img/fr-rookey-friends/fr-52.jpg" alt="Fr. Rookey & Friends Cover">
                    </a>
                    <div class="caption">Friend Kim Lewandowski and children with friend Tom Bauer</div>
                </div>
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
