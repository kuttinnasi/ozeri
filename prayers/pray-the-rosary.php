<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>Pray the Rosary with Fr. Peter &#8211; Fr Peter Mary Rookey &#8211; Servite Friar</title>

    <meta name="description" content="Pray the 7 Sorrows of Mary Rosary and the Dominican Scriptural Rosary with Fr. Peter Mary Rookey." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS
    ============================================ -->
    <?php 
    include '../config.php';
    include '../includes/head-links.php';
    ?>
    <style>
        .audio-section {
            background: #fff;
            /* padding: 30px; */
            border-radius: 8px;
            /* box-shadow: 0 4px 15px rgba(0,0,0,0.05); */
            margin-bottom: 50px;
            /* border: 1px solid #eee; */
        }
        .audio-title {
            color: #2c5aa0;
            font-size: 1.8rem;
            margin-bottom: 25px;
            font-weight: 600;
        }
        .custom-player {
            /* background: #f8f9fa; */
            border: 1px solid #cccccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .player-info {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 15px;
        }
        .player-info i {
            font-size: 40px;
            color: #666;
        }
        .player-text .album { font-weight: normal; font-size: 14px; font-weight: 400; }
        .player-text .artist { color: #666; font-size: 12px; font-weight: 400; }
        
        .track-list {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }
        .track-list tr { border-bottom: 1px solid #cccccc; }
        .track-list td { padding: 4px 5px; color: #000; font-size: 14px; font-weight: 600;}
        .track-list .duration { text-align: right; font-weight: bold; }
        .track-list tr:hover { background: #f9f9f9; }

        audio { width: 100%; margin: 10px 0; }
        
        .prayer-description {
            margin-top: 20px;
            font-size: 0.95rem;
            line-height: 1.6;
            color: #000;
            /* font-style: italic; */
        }
    </style>
</head>

<body>
    <!--====== Header Start ======-->
    <?php include '../includes/header.php'; ?>
    <!--====== Header Ends ======-->

    <section class="about-area">
        <div class="container">
            <div class="section-content">
                <h2 class="blog-title" style="color: #2c5aa0; border-bottom: 2px solid #ddd; padding-bottom: 15px; margin-bottom: 40px;">Pray the 7 Sorrows of Mary Rosary w/Father</h2>
                
                <!-- 7 Sorrows Section -->
                <div class="audio-section">
                    <h3 class="audio-title"></h3>
                    
                    <div class="custom-player">
                        <div class="player-info">
                            <i class="fa-solid fa-music"></i>
                            <div class="player-text">
                                <div class="album">"Seek Ye First"<br><em>Canticle Of Love</em></div>
                                <div class="artist">DONALD AND CAROL WICHMAN</div>
                            </div>
                        </div>
                        <audio controls>
                            <source src="#" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        
                        <table class="track-list">
                            <tr><td>1. Seek Ye First</td><td class="duration">5:10</td></tr>
                            <tr><td>2. The First Sorrow of the Blessed Mother: The Prophecy Of Simeon</td><td class="duration">4:43</td></tr>
                            <tr><td>3. Healer Of My Soul</td><td class="duration">5:00</td></tr>
                            <tr><td>4. The Second Sorrow: The Flight Into Egypt</td><td class="duration">4:50</td></tr>
                            <tr><td>5. Lord You Are So Precious</td><td class="duration">4:26</td></tr>
                            <tr><td>6. The Third Sorrow: The Three Days Loss Of Jesus</td><td class="duration"></td></tr>
                            <tr><td>7. Lord Your Name Is Holy</td><td class="duration">4:43</td></tr>
                            <tr><td>8. The Fourth Sorrow: Mary Meets Jesus On The Way To Calvary</td><td class="duration">4:54</td></tr>
                            <tr><td>9. Ubi Caritas & Sing My Tongue</td><td class="duration">4:55</td></tr>
                            <tr><td>10. The Fifth Sorrow: Mary Sees the Crucifixion of Jesus</td><td class="duration">5:19</td></tr>
                            <tr><td>11. Lamb Of God</td><td class="duration">2:39</td></tr>
                            <tr><td>12. The Sixth Sorrow: Mary Recieves The Body Of Jesus</td><td class="duration">5:13</td></tr>
                            <tr><td>13. Halleluja My Father</td><td class="duration">3:29</td></tr>
                            <tr><td>14. The Seventh Sorrow: Mary Accompanies Jesus' Body To The Tomb</td><td class="duration">6:51</td></tr>
                            <tr><td>15. Ave Maria & The Miracle Prayer</td><td class="duration">6:49</td></tr>
                        </table>
                    </div>
                    
                    <p class="prayer-description">The Canticle of Love recording features Fr. Peter Mary Rookey reciting the scriptural version of the Rosary of the 7 Sorrows of Mary. The music in the background was provided by Donald and Carol Wichman from England. This recording was produced in 1995.</p>
                </div>

                <!-- Dominican Rosary Section -->
                <div class="audio-section">
                    <h3 class="audio-title">Pray the Dominican Scriptural Rosary w/Fr. Peter ( produced by Mary's Helpers of Marrero, Louisiana)</h3>
                    
                    <div class="custom-player">
                        <div class="player-info">
                            <i class="fa-solid fa-music"></i>
                            <div class="player-text">
                                <div class="album">The Holy Rosary Part 1</div>
                            </div>
                        </div>
                        <audio controls>
                            <source src="#" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        
                        <table class="track-list">
                            <tr><td>1. The Holy Rosary Part 1</td><td class="duration">45:38</td></tr>
                            <tr><td>2. The Holy Rosary Part 2</td><td class="duration">37:49</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Footer Start ======-->
    <?php include '../includes/footer.php'; ?>
    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->
    <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Jquery js ======-->
    <?php include '../includes/script-links.php'; ?>
</body>

</html>
