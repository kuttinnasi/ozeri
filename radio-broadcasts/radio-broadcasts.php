<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>Radio Broadcasts &#8211; Fr Peter Mary Rookey &#8211; Servite Friar</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS
    ============================================ -->
    <?php 
    include '../config.php';
    include '../includes/head-links.php';
    ?>
    
    <style>
        .broadcast-item {
            /* margin-bottom: 60px; */
            padding-bottom: 40px;
            /* border-bottom: 1px solid #eee; */
        }

        .broadcast-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .broadcast-title {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            text-align: center;
            margin-bottom: 25px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 800px;
            margin: 0 auto -181px auto;
            /* background: #000000ff;
            border: 1px solid #ddd; */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 65%;
        }

        .broadcast-desc {
            max-width: 800px;
            margin: 0 auto;
            text-align: justify;
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
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
                <h2 class="blog-title">Radio Broadcasts</h2>
                
                <!-- Broadcast 1 -->
                <div class="broadcast-item">
                    <h3 class="broadcast-title">Fr. Peter Rookey-Radio Broadcast- Benburb: Where It All Began</h3>
                    <div class="video-container">
                        <!-- Replace 'VIDEO_ID_1' with the actual YouTube Video ID -->
                        <iframe width="700" height="250" src="https://www.youtube.com/embed/yMILdrggspc?si=hPqSZzFREOScyjxf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <p class="">
                        Fr. Peter Rookey was a guest on a New Orleans, Louisiana Catholic radio broadcast many years ago that was hosted by Margaret Trosclair of Mary's Helpers. Here he speaks about how he discovered that he had the gift of healing while working in Benburb, County Tyrone, Northern Ireland in the late 1940s.
                    </p>
                </div>

                <!-- Broadcast 2 -->
                <div class="broadcast-item">
                    <h3 class="broadcast-title">Fr. Peter Rookey Radio Broadcast- The Blind See, The Deaf Hear, The Lame Walk</h3>
                    <div class="video-container">
                         <!-- Replace 'VIDEO_ID_2' with the actual YouTube Video ID -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9tSVC0WAFNw?si=rXky-MaLy-H9WQaX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <p class="">
                        Fr. Peter Rookey is heard on a radio broadcast many years ago in New Orleans, Louisiana with host Margaret Trosclair of Mary's Helpers. This was a weekly radio show that dealt with religious topics of interest to Catholics. Here, Fr. Peter talks about some miracles that occurred during his ministry as a Servite priest. He always said that Jesus did all the healing. He was just an instrument in the Lord's hands.
                    </p>
                </div>

                <!-- Broadcast 3 -->
                <div class="broadcast-item">
                    <h3 class="broadcast-title">Fr. Peter Rookey- Kansas City Radio Broadcast with Host Christine Rossi on May 27, 2004</h3>
                    <div class="video-container">
                         <!-- Replace 'VIDEO_ID_3' with the actual YouTube Video ID -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/G40_3H-zQPo?si=eQfHGoKVwqCL8bVl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <p class="">
                        Fr. Peter Rookey is interviewed on a Kansas City radio broadcast by host, Christine Rossi, on May 27, 2004. He speaks about his many years of priesthood, working as an instrument of healing for the Lord and His people.
                    </p>
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
