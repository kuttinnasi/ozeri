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
                    <img src="../assets/img/rooky-family/Fr.-Rookey-Parents-150x150.jpg" alt="Wedding photo">
                    <div class="caption">Wedding photo of Father’s parents, Anthony and Johanna Rookey, in 1902</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Fr.-Rookey-Family-1-150x150.jpg" alt="Rookey Family 1918">
                    <div class="caption">Rookey family- circa 1911</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Rookey-Family-1919-150x150.jpg" alt="Young boys and mother">
                    <div class="caption">Rookey parents with their first 10 children-circa 1919. Young Peter is sitting just below his father Anthony</div>
                </div>

                <!-- Row 2 -->
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Close-up-photo-of-very-young-Peter-150x150.jpg" alt="Blessing photo">
                    <div class="caption">Rookey parents with their first 10 children-circa 1919. Young Peter is sitting just below his father Anthony</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Fr.-Peter-the-Child-150x150.jpg" alt="Henry on car">
                    <div class="caption">Close-up photo of very young Peter</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Fr.-Peter-Far-Right-w-Family-in-1927-150x150.jpg" alt="John and Peter with mother">
                    <div class="caption">Early photo of young Peter with 4 of his sisters. (Willa) Rose in at the top. Below Rose on the right is his sister Mary, who died young of an illness in 1942, shortly after the death of brother Dale Rookey. Below Rose on the left is sister Genevieve with sister Kathryn on her right</div>
                </div>

                <!-- Row 3 -->
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Parents-Anthony-Johanna-Rookey-150x150.jpg" alt="Young Peter and brother">
                    <div class="caption">Rookey family photo with 11 of the 13 children-Young Peter with hand on his mother’s shoulder-circa 1927</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Mother-Johanna-McGarry-Rookey-150x150.jpg" alt="Michale Henry Rookey">
                    <div class="caption">Parents Anthony and Johanna McGarry Rookey</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Fr.-Peter-w-Mother-Johanna-1952-150x150.jpg" alt="Family gathering">
                    <div class="caption">Matriarch Johanna Rookey</div>
                </div>

                <!-- Row 4 -->
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Brother-Dale-Rookey-in-1941-150x150.jpg" alt="Soldier">
                    <div class="caption">Fr. Peter visiting his ailing mother in the hospital in 1952 or 1953</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Dale-Rookey-WWII-Obituary-1942-150x150.jpg" alt="Newspaper clipping">
                    <div class="caption">Brother Dale Rookey in 1941. First serviceman from Wisconsin to die in WWII. Johanna became the state’s 1st Gold Star Mother. Fr. Peter officiated at Dale’s funeral-the very first he performed as a priest</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Brother-Gordon-w-Wife-Velma-150x150.jpg" alt="Peter and friends">
                    <div class="caption">Dale Rookey’s obituary from January 30, 1942</div>
                </div>

                <!-- Row 5 -->
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Brother-Harold-in-WWII-150x150.jpg" alt="Army Peter">
                    <div class="caption">Photo of Father’s older brother Gordon Rookey and wife Velma. Gordon served as godfather to the future Fr. Peter</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Bernard-Rookey-2-150x150.jpg" alt="Thomas Terence Rookey">
                    <div class="caption">Brother Harold Rookey in his US Navy uniform during WWII</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Brother-Earl-Called-Tom-150x150.jpg" alt="Peter on horse">
                    <div class="caption">Brother Bernard Rookey in his WWII US Air Force uniform. He was the next child born to Anthony and Johanna after the birth of Fr. Peter.</div>
                </div>

                <!-- Row 6 -->
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Tom-Rookey-in-WWII-150x150.jpg" alt="Group photo">
                    <div class="caption">School photo of Fr. Peter’s brother Tom (Earl) Rookey</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Brother-Richard-Called-Dick-WWII-150x150.jpg" alt="Woman standing">
                    <div class="caption">Tom Rookey in his US Air Force WWII uniform. As a pilot, he flew 42 bombing missions against the Nazis and lived to tell about it</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/Rose-Rookey-Martinson-150x150.jpg" alt="Seated family">
                    <div class="caption">Brother Richard (Dick) Rookey in his US Navy uniform at age 17 during WWII. He was the last of the 13 children born to Anthony and Johanna Rookey, 23 years after their first child, Willa Rose, was born</div>
                </div>

                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/19-150x150.jpg" alt="Family photo">
                    <div class="caption">Fr. Peter with his sister, (Willa) Rose Martinson, the first born of the 13 Rookey children. She lived to be 90 years old. Also in the photo is Brother Jim Hrechko, Father’s right hand man in the ICM for many years</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/20-150x150.jpg" alt="Family photo">
                    <div class="caption">Father with his oldest brother, Chester (Chet) Rookey, who ran the Rookey Transfer family moving company in Superior Wisconsin for decades along with his brother, Robert Rookey. Their first cousin, Fr. Christopher O’Toole is also in the photo. He was the Superior General of the entire Holy Cross Order in the the US and Canada for 12 years, from 1950 to 1962</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/21-150x150.jpg" alt="Family photo">
                    <div class="caption">Wedding photo of Fr. Peter’s older brother Robert J. Rookey (always known as Bob) with wife Vera Danielson Rookey, parents of Father’s nephew, Tim Rookey and his siblings John, Mike and Betty. Right next to Robert is his brother Gordon and on the far right is sister Kathryn. Vera’s sister Esther is beside her and Esther’s husband Dan is on the far left. Robert and Vera were married on August 22, 1936.</div>
                </div>

                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/22-150x150.jpg" alt="Family photo">
                    <div class="caption">Photo of brother Robert Rookey on St. Patrick’s Day. He was an Irish tenor with the best voice in the Rookey family. Fr. Peter always called himself a whiskey tenor</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120005-150x150.jpg" alt="Family photo">
                    <div class="caption">Family photo of Father with his hand touching his white haired sister Genevieve. Also in the photo are brothers Tom, Bernie (nicknamed Bun) and Dick Rookey, along with sister Kathryn Rookey Connolly</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Fr. Peter with his sister Kathryn. He was the next Rookey child to be born after Kathryn came into the world</div>
                </div>

                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Posing at Father’s 50th anniversary of ordination party are his siblings Tom, Kathryn, Bernard and Richard</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Lovely photo of Kathryn in later years</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Six pack of Father’s brothers-clockwise are Bernard, Tom, Dick, Chet, Gordon and Robert</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Fr. Peter with his brothers Dick, Robert, Gordon, Tom, Ch et and Harold</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Father with 4 of his siblings, together with nephew Tim</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Brother Tom Rookey with his loving brother Fr. Peter</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Tom and Dale Rookey in the back row and Dick Rookey with cousin Jimmie in front</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Father’s nephew and niece, Tim & Anne Rookey with their holy uncle at a Chicago area restaurant</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Cindy and Mike Campbell, Father’s niece and nephew, at a banquet in his honor</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Siblings Tom & Kathryn with Father at a family get-together with Cindy and Mike Campbell and their children behind them</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Father’s niece, D. Marilyn Clancy with husband Bill. The daughter of Father’s sister Mary, D became the tourism director of Chicago and almost won her 1978 race for Congress.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Nephew Bernard Rookey, Jr. with wife Susan.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Fr. Peter with niece Betty Schultz on his left and brother Tom on his right. Behind him are his nephew Mike Rookey, nephew and niece Tim and Anne Rookey, and nephew John Rookey on the top right.</div>
                </div>

                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Nephew Mark Stack in his police uniform. As a teenager, he was miraculously cured of a malignant brain tumor when Father prayed over him while giving him the last rites of the Church.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Father with 6 of his brothers and his sister Genevieve Stack, mother of Mark Stack. Fr. Peter’s good friend, Bob Hope, signed this photo.</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Brother Richard Rookey posing with his son Patrick and his brother Tom</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Niece Joan Rookey Hogan (Gordon Rookey’s daughter) with her husband Ron</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Father’s grand-niece Laura Rookey posing with him and grand-uncle Tom Rookey</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Tom Rookey with his brother Gordon Rookey’s son, Tony Rookey, to his right. Pictured on the far right side is Joe Stack, brother in law to Fr. Peter and husband of his sister Genevieve</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Brother Tom Rookey with wife Rita and children Joel, Christine, Kolleen, Peter, and Brian</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Niece Sheila Connolly, daughter of Father’s sister Kathryn</div>
                </div>
                <div class="gallery-item">
                    <img src="../assets/img/rooky-family/P5120017-150x150.jpg" alt="Family photo">
                    <div class="caption">Nephew Jim Rookey, son of Father’s brother Gordon and brother to Joan Rookey Hogan and Tony Rookey</div>
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
