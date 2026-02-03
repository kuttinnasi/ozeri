<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Memories & Testimonies &#8211; Fr Peter Mary Rookey &#8211; Servite Friar</title>
    <meta name="description" content="Read firsthand testimonies and memories of healings and miracles through the ministry of Fr. Peter Mary Rookey." />
    <?php include 'includes/head-links.php'; ?>
    <style>
        .testimonies-section {
            /* padding: 60px 0; */
            background: #fdfdfd;
            min-height: 80vh;
        }
        .testimonies-header {
            margin-bottom: 40px;
            text-align: center;
        }
        /* .testimonies-header h1 {
            font-size: 30px;
            color: #1a4b7e;
            font-weight: 600;
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
            font-family: 'Oswald', sans-serif;
        } */
        /* .testimonies-header h1::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: #8b0000;
            margin: 10px auto 0;
        } */

        .testimonies-container {
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }

        /* Sidebar Tabs */
        .testimonies-sidebar {
            flex: 0 0 320px;
            background: #fff;
            border: 1px solid #000;
            margin-top: 40px;
            border-radius: 8px;
            padding: 20px;
            position: sticky;
            top: 100px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .tab-btn {
            display: block;
            width: 100%;
            padding: 12px 15px;
            text-align: center;
            background: none;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-family: 'Oswald', sans-serif;
            letter-spacing: 0.5px;
            background-color: #1a4b7e;
        }
        .tab-btn:hover {
            background: #fff;
            color: #1a4b7e;
            border: solid 1px #1a4b7e;
        }
        .tab-btn.active {
            background: #1a4b7e;
            color: #fff;
        }

        /* Content Area */
        .testimonies-content {
            flex: 1;
        }
        .tab-pane {
            display: none;
            animation: fadeIn 0.5s ease;
            margin-top: 40px;
        }
        .tab-pane.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .category-title {
            font-size: 2.22rem;
            color: #1a4b7e;
            margin-bottom: 25px;
            border-bottom: 2px solid #1a4b7e;
            padding-bottom: 15px;
            font-family: 'Oswald', sans-serif;
        }

        /* Accordion */
        .accordion-item {
            margin-bottom: 12px;
            border: 1px solid #1a4b7e;
            border-radius: 4px;
            overflow: hidden;
            background: #fff;
        }
        .accordion-header {
            font-family: "Open Sans", sans-serif;
            background: #1a4b7e;
            color: #fff;
            padding: 3px 13px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.3s;
            /* letter-spacing: 0.5px; */
        }

        .accordion-header:hover {
            font-family: "Open Sans", sans-serif;
            /* background: #153856; */
        }
        .accordion-header .icon {
            transition: transform 0.3s;
        }
        .accordion-item.open .icon {
            transform: rotate(45deg);
        }
        .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
            padding: 0 20px;
            background: #fff;
            color: #333;
            line-height: 1.7;
        }
        .accordion-item.open .accordion-body {
            max-height: 3000px;
            padding: 25px;
        }
        .story-content {
            font-size: 1.05rem;
            text-align: justify;
        }
        .story-content p {
            margin-bottom: 18px;
        }
        .story-location {
            font-weight: 700;
            color: #1a4b7e;
            margin-top: 20px;
            text-align: right;
            border-top: 1px solid #eee;
            padding-top: 10px;
            text-transform: uppercase;
        }
        .testimonies-section p{
            font-family: "Open Sans", sans-serif;
            margin-top: 10px;
            margin-bottom: 10px;
            
        }
        /* .testimonies-section p:hover{
            color: #1a4b7e;
        } */
        .testimonies-section p a:hover{
            color: #1a4b7e !important;
        }

        /* Mobile Adjustments */
        @media (max-width: 991px) {
            .testimonies-container {
                flex-direction: column;
            }
            .testimonies-sidebar {
                flex: none;
                width: 100%;
                position: static;
                display: flex;
                overflow-x: auto;
                gap: 10px;
                padding: 10px;
                white-space: nowrap;
                box-shadow: none;
                border-bottom: 2px solid #eee;
            }
            .tab-btn {
                width: auto;
                margin-bottom: 0;
                font-size: 0.9rem;
            }
            .testimonies-header h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="testimonies-section">
        <div class="container">
            <div class="">
                <h1 class="blog-title">Memories & Testimonies</h1>
                <p><strong><a href="share-your-memories-or-healing-testimonies-of-fr-rookey.php" style="color: inherit; text-decoration: none;">Click Here to Share Your Memories or Healing Testimonies of Fr. Rookey</a></strong></p>
                <p><a href="testimonials.php" style="color: #000; font-weight: bold; text-decoration: none;">Personal Testimonies submitted to this website</a></p>

                <p><a href="https://www.facebook.com/rookeysaint" target="_blank" style="color: #1a4b7e; font-weight: bold; text-decoration: underline; ">Fr. Peter M. Rookey O.S.M. Guest Book on Chicago Sun-Times</a></p>
                <p style="margin-top: -12px;">Fr. Peter Rookey Sainthood Promotion Page on Facebook: <a href="https://www.facebook.com/rookeysaint/" target="_blank"  style="color: #1a4b7e; font-weight: bold; text-decoration: underline;">https://www.facebook.com/rookeysaint</a></p>
                <p style="margin-top: -12px;">Fr. Peter Rookey Cause for Canonization Page on Facebook:  <a href="https://www.facebook.com/groups/321174586348057/" target="_blank"  style="color: #1a4b7e; font-weight: bold; text-decoration: underline;">https://www.facebook.com/groups/321174586348057/</a></p>
                    <p style="margin-top: -12px;">Fr. Peter Rookey Video Page on YouTube : <a href="https://www.youtube.com/channel/UCD3VQ6RIlk_WUbPtD6w86HA?view_as=subscriber" target="_blank" style="color: #1a4b7e; font-weight: bold; text-decoration: underline;">youtube.com/channel/UCD3VQ6RIlk_WUbPtD6w86HA</a></p>
            </div>

            <div class="testimonies-container">
                <!-- Sidebar -->
                <aside class="testimonies-sidebar">
                    <button class="tab-btn active" data-category="reconciliation" onclick="showCategory('reconciliation')">Reconciliation</button>
                    <button class="tab-btn" data-category="miracle-prayer" onclick="showCategory('miracle-prayer')">Miracle Prayer</button>
                    <button class="tab-btn" data-category="fertility" onclick="showCategory('fertility')">Fertility</button>
                    <button class="tab-btn" data-category="tumors-cancer" onclick="showCategory('tumors-cancer')">Tumors and Cancer</button>
                    <button class="tab-btn" data-category="mystery-magic" onclick="showCategory('mystery-magic')">Mystery or Magic</button>
                    <button class="tab-btn" data-category="physical-healing" onclick="showCategory('physical-healing')">Physical Healing</button>
                    <button class="tab-btn" data-category="exorcism-1" onclick="showCategory('exorcism-1')">Exorcism 1 & 2</button>
                    <button class="tab-btn" data-category="young-people" onclick="showCategory('young-people')">Young People</button>
                    <button class="tab-btn" data-category="signs-of-hope" onclick="showCategory('signs-of-hope')">Signs of Hope</button>
                    <button class="tab-btn" data-category="closer-to-god" onclick="showCategory('closer-to-god')">Closer to God</button>
                    <button class="tab-btn" data-category="visions" onclick="showCategory('visions')">Visions</button>
                    <button class="tab-btn" data-category="inner-healing" onclick="showCategory('inner-healing')">Inner Healing</button>
                </aside>

                <!-- Content Area -->
                <div class="testimonies-content">
                    
                    <!-- Reconciliation -->
                    <div id="reconciliation" class="tab-pane active">
                        <div class="accordion-list">
                            
                            <div class="accordion-item">
                                <div class="accordion-header">LAST TO FORGIVE: SELF <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Even as I write this letter, I accept the fact that you may never have the time to read or answer my concerns, but that doesn’t seem to take away the need I have to express some thoughts I have within.</p>
                                        <p>I attended a prayer service one week ago when you spoke before a small group of thirty or forty people. My first direction of thought was not on you (as my mother had wished), but on a photo of the Lord—a direct stare into my heart and soul from a pair of eyes off a wall hanging.  This seemed to leave a thought with me even up to today. </p>
                                        <p>I realized that it is what we want to see that we see. I have also accepted the idea recently that with truth comes responsibility and often pain. Which brings me to the reason I wrote this letter. You aid that before we find peace, we must first learn to forgive. Your statement had an impact to such a degree that I turned way with tears stinging in my eyes. Father, after turning to those faces to forgive and doing so over  these troubled years, I still found myself not at peace. Until last week my heart was very heavy, Father. I have found the last face that I feel will free me and give m final peace. The face is my own.</p>
                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">ANGELS TO THE RESCUE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>As I was on my way to Mass, I heard the words, “Buckle your seat belt.” I did and prayed, “Angels be with me.”</p>
                                        <p>About a mile from my destination, I was struck head-on by a pickup truck. I didn’t see what hit me. When I opened my eyes, my engine and radiator were sizzling. My door flew open and a man was yelling, “Lady, come out of there.” He was pulling on my arm while I was still strapped in. I was petrified and started praying the St. Michael prayer out loud. He jumped back with a shocked look on his face. Quickly I called the Name of Jesus. (During the prayer group time I received a word from the lord on the power in the Name of Jesus and this came back to me in the nick of time.)</p>
                                        <p>Just at that moment a young man came up, excused himself, gently passed the other man, and helped me out of the car, saying, “You have to get out. Your engine is smoking.” My van was totaled. I was bruised and sore but walked away from what could have cost me my life.</p>
                                        <p>My gas tank sucked in like a vacuum, blew the cap off my rear tires and my engine was cracked in half. Had the front end come any closer in on my, I would not have been walking.</p>
                                        <p>The police came. I prayed for a witness. My witness was the man who pulled me out, an off duty police officer.</p>
                                        <p>The man who hit me was violent. He tried taking on the officers. It took five officers to cuff him. They even tried a tranquilizer but nothing worked. He went to jail. He has three children. We are praying for his deliverance from alcohol and violence.</p>
                                        <p>On December 331, I began my New year by renewing my consecration to Mary with my family at midnight. We attended your healing service on January 1 and much to my surprise, after thirteen years my husband entered the confessional. What a gift on the feat of the renewal of my consecration to Mary. Thank you, Blessed Mother. The best gift ever. </p>
                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">ABLE TO FORGIVE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am usually very fearful around my mother. However, just before I went outside to go to the store with my mother, I got the mail and saw the Prayer Card. I carried it into the store, but not until we were finished shopping was I able to read it while sitting in the car and waiting for her. I felt a spirit of love flow out of the card. No kidding! It was real, and when she came back to the car, I was not afraid.</p>
                                        <p>I also forgave everyone as you said I should do, either by writing notes or speaking to those people. But if the spirit of compassion had not flowed out of the card, I never would have been able to forgive.</p>
                                        <p>MICHIGAN</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">DISILLUSIONMENT DISCHARGED<span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>During one of your healing Masses I prayed for a reconciliation with my father. The next day we took a small step toward that reconciliation.</p>

                                        <p>For ten years my father and I have had a rocky relationship, sometimes even violent. So that small step was a very important part of a healing in our family. My father and I are still having our difficulties every now and then, but that’s pretty normal with two stubborn mules in one household. However, we are making progress little by little and I am very grateful for it.</p>

                                        <p>Another thing I would like to thank you for is bringing me back to Catholicism. I’ve only been a Catholic for four years. I graduated from Catholic high school. I was disillusioned with Catholicism and was losing my faith. It seemed to me that the Church didn’t care for the little people. Keep in mind that I was (and still am, pretty much) a young and impressionable teenage, so every disappointment was multiplied tenfold. I had asked my parish for help several times and was always turned away with, “I don’t know how to help you. Good-bye.”</p>

                                        <p>When I went to your healing Mass and saw you do a two hour Mass, then hang around talking to people until everyone was gone, I was surprised. I had never seen priest do that before. You really cared for the people. I realized the Church isn’t as bad as I thought. I knew there were many Catholics (priests, nuns, lay people, parishioners) who would do anything for people in need. I just needed to stick with my faith. So I decided to give Catholicism another chance. Now I’m attending a Catholic college and I wouldn’t go anywhere else. I have my father back, and my faith.</p>

                                        <p>KANSAS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">THANKS TO OUR LADY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am happy to report that the power of your prayers to Our Lady has interceded in two of the petitions I made to you. The mother that was dying of cancer has been reconciled with her children and my husband has come through his first surgery with flying colors. My heart is lighter for it.</p>

                                        <p>LOUISIANA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">A COMPLETE RECOVERY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I wrote to you a few weeks back. I was sick and staying in bed for a week at a time, feeling tired and depressed. I really thought my marriage couldn’t survive. I’m delighted to tell you that I’ve made a complete recovery and it has lasted for nearly a month now. Definitely God was listening.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FROM HURT TO HEALING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>In September 1993 my husband and I went to a Healing Mass in Missouri, and I asked the Holy Spirit to enter my life and please rid me of the pain in my leg. I was anointed by you and smelled the roses and fell back and rested in the Holy Spirit.</p>
                                        <p>When I arose, I stepped down with all my weight on my bad leg, the left one. As I went back to y pew, I stopped walking with crutches. After going a few feet, I was in the row where we sat and I knelt down. This hit me as <u>“Wow, I’m kneeling and it doesn’t hurt.”</u> By this time I started crying uncontrollable. My husband asked me if I was all right and I cried, “I have no pain in my leg.” He was moved to tears. He asked if I could walk, so I tried. Yes, I could walk without my crutches, and we walked up front to tell you the good news.</p>
                                        <p>The second miracle came the next day at your Healing Mass. I call it a healing of memories. My husband and I called all our relatives and close friends to tell them of my healing. Fifty members of both extended families were there to hear my witness and ask the Holy Spirit for healing. On my husband’s side of the family there had been a rift between the sisters and brothers for many years. Everyone was there from his immediate family. <u>There was much rejoicing and the family feels as one again.</u> To see my husband and his brothers all hugging each other and their sisters was so uplifting, not only for him but our children and me, as well as the nieces and nephews.</p>
                                        <p><u>It is truly wonderful how God works His miracles.</u> There is one more item of Divine Providence that I want to relate to you. While in Georgia in August of 1993, I saw a copy of the Miracle Prayer in the apparition room. I read this prayer and was so excited. It said everything that I wanted to tell God but couldn’t put into words. I got a copy of it and began to say it every day that week. Well, I said it on the day of my healing. After the services, a couple who had told m about your Healing Mass, asked us if we had a copy of the Miracle Prayer. We said, “No” and were handed two prayer cards with this prayer. I said, “Oh, I’ve been reading this prayer all week.”</p>
                                        <p>Well, you can imagine my surprise!</p>
                                        <p>MISSOURI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SISTER’S MARRIAGE RECONCILED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I want to thank you and the Blessed Mary and God for a glorious Christmas present. <u>My sister and her husband have been reconciled</u> since I last asked you to pray for them. <u>Praise the Lord!!!</u></p>
                                        <p>I also got engaged after Christmas. I’ve never imagined this feeling. It’s indescribable. I think that <u>Mother Mary knows my joy.</u> I’ve felt blessed before, but not quite like this. I ask that you pray for my fiancée and me for <u>a joyful, peaceful and loving marriage.</u> May it be long and full of faith. I ask for strength and courage and wisdom for this big undertaking. <u>Thanks be to God for all the blessings.</u></p>
                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">MARRIAGE RENEWED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I attended your Healing Mass on November 6. I saw in you a beauty only matched by Nature itself.</p>
                                        <p>I went in hopes of being healed, asking for time to be able to raise my daughter. My husband attended the service with me. I felt very loved by his attendance because he does not go to Church. When we approached the altar and you laid your hands on him, I saw <u>his color drain and his knees buckle.</u> At that moment I felt a twinge of jealousy and fear. Later I felt good—knowing he had been touched, because <u>he needed the proof and love more than I. The miracle that happened was a new and loving marriage.</u> I had prayed for this many times.</p>
                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">NO LONGER ORNERY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>On October 3rd, while I was participating as a stand-in at your Healing Mass, unbeknownst to me, <u>the healing I was praying for had begun!</u> As a stand-in for my father, I asked the softening of his hardened heart, and his <u>reconciliation with Our Lord and the Church</u> My father, now 83 years old, had been denied absolution in confession over 50 years ago, and he quit going to Church except at Christmas. He became very bitter and ornery. The person he was the nastiest to was my mother, by verbal and emotional abuse (she’s a living saint in my book, for all she did for him and took from him.)</p>
                                        <p>As his illness incapacitated him, he became more ornery, especially with her. Well, the night of the Healing Mass, he called mother into the bedroom, asked her to sit down beside him, and told her he was sorry for yelling at her and that she didn’t deserve it! <u>The first apology from my father in 60 years of marriage—beginning the healing!</u></p>
                                        <p>The following Saturday, October 8th, he told her that the two things he wanted were cremation and the Last Sacraments. To make an even longer short story ( he was very stubborn and bull-headed), the next day, Sunday noon, our parish priest came to the house, <u>heard his confession, gave him Communion and anointed him!</u></p>
                                        <p>After the anointing, Mother, Father and I laid hands on dad’s head and prayed to the Holy Spirit. I felt dad’s head quiver , and open then the look of total peace seemed to permeate him. My dad’s words were, “Father, I am so relieved.” Dad then proceeded to watch a winning Packer game and died in his chair a half hour later! Praise the Lord—my father had an all around winning day!</p>
                                        <p>WISCONSIN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">AFRICAN OVERTONES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rooky,</p>
                                        <p>I attended all of your sessions when you came to Kenya last year and I must sway <u>I was very blessed.</u></p>
                                        <p>I must report that I have seen wonders. I had written about being thirty-four years old and wanting to get married. I have since that time met someone and we are now engaged. We are planning to get married in August.</p>
                                        <p>My sister found a job an also one of my brothers. I am grateful to God because this boy had <u>depression for three years</u>, but is now recovered.</p>
                                        <p>I also want to thank the Lord because <u>one of my brothers and my sister have started going to Church. My friend also has started receiving Holy Communion and I am so overjoyed.</u></p>
                                        <p>KENYA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FORGIVES INFIDELITY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I attended one of you ministries, and that day changed my life, as I felt drawn to Jesus as never before.</p>
                                        <p>About the time that I attended your ministry in late 1994, I was going through a very traumatic period in my life. I found out that my husband had an affair with a colleague at work. About this time I was three months pregnant, but lost the child in the midst of all this trauma. This was a terrible blow because we were trying for a second baby for a very long time.</p>
                                        <p>I felt terribly betrayed because I loved my husband and we had been married for thirteen years. I have forgiven my husband for what he has done and am trying to forgive this woman, too, but finding it very difficult. My husband has not come back to us fully as yet because he feels he needs to support the woman and his child for a little longer, but he really wants to come back to us. He has asked me to be patient for a little longer. He now spends three days a week with us. Please pray that my husband will come back to us soon. Recently he has been coming to Sunday Mass with my son and me.</p>
                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Miracle Prayer -->
                    <div id="miracle-prayer" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">A DIFFERENT PERSON <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I am writing to you first to have you send more Miracle Prayer cards as I have given out so many. I have only a few left. We have many of our grandchildren in college, so each of them gets on at the time I write.</p>
                                        <p>I was at your Healing Mass last year. At the time when I came up for the laying of hands I felt nothing, but was so impressed with the beautiful Mass and the healing ceremony that I ordered the Miracle Prayer. Since then  I have been saying it every day—or at least trying to (sometimes I forget, as I’m 81 years old).</p>
                                        <p>About three weeks ago around 3:00 a.m., I experienced something very wonderful. The pain which I have had right below the breast bone, for years and years, left me entirely. I had the most wonderful feeling of freedom and felt very close to Jesus. Because of the fact that I have been suffering from mental depression for years, since I was about 19 years old, I didn’t really believe that I could be cured. I’m on antidepressant medicine all the time. A few days later I went to my doctor and told him the story. You see, I thought I could quit taking my medicine, but he told met hat my emotions have nothing to do with my depression because mine is a chemical imbalance—so stick to the medicine.</p>
                                        <p>But since that experience I am a different person. I love telling about my faith. For years I have entertained at nursing homes by singing and playing the guitar. Now, in addition, I can tell them about the power of the Holy Spirit, and also bring more happiness to them by talking and letting them pout out their thoughts to me. I thank Him over and over, every day.</p>
                                        <p>WISCONSIN</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">LIVES DRAMATICALLY CHANGED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                    <p>Recently, while bringing Eucharist to the sick in a nearby hospital, my friend and I were given the Miracle Prayer card by a patient with whom we had prayed. As we left her room read the prayer and were delighted.</p>

                                    <p>You see, this same prayer had been prayed over us by believers years ago, and out lives were dramatically and wonderfully changed. We ourselves have prayed it with others so many times, asking them to repeat each part after us. How many lives are miraculously touched and healed by Our Lord Jesus Christ in those who are open to Him and to the fullness and work of the Holy Spirit. Praise be to God!</p>

                                    <p>Several of our prayer group members are also involved with prayer and/or Eucharist ministry to the sick I our parish. We would all like to be able to leave one of these prayer cards with those who need it.</p>

                                    <p>Please send me 100 of these prayer cards. Thank you for your kind response to my request.</p>
                                    <p>LOUISIANA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">PRAYER BRINGS PEACE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I cut your miracle Prayer from our local paper after your visit to Ireland and I have found the ut   most peace since I started it. May God forever bless your work and give you the strength to carry on.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HAVING FAITH IN THE MIRACLE PRAYER <span class="icon"><i class="fa fa-plus"></i></span></div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">MIRACLE PRAYER ON RADIO <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Since we met, where I interviewed you in the sacristy, I am pleased to tell you that each Saturday morning, on my “Hospital and Home Patient Requests Show,” I recite the Miracle Prayer. I had not idea that through the prayer you gave me, the response would be beyond belief—the fact that people express their love to God through the radio. My wife has sent out over two hundred prayers in the last couple of weeks.</p>

                                    <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A MIRACLE HAPPENS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Father, I pray the Miracle Prayer twice a day. On December 16th at 6:00 a.m. I had an experience I can hardly explain. I was fully awake and it seemed like something was trying to either get in, or out of my body. It was as if something very white was wrapping around me. I cried out, “Leave me alone. I don’t want to die. I don’t want to leave yet. Please leave me alone.” At first I didn’t know what to think. I sat up in bed and started saying all my prayers. When I came to the Miracle Prayer, I felt warm all over, and it hit me that somehow I had a miracle happen and I didn’t realize it.</p>

                                        <p>MISSOURI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BELIEF IN MIRACLE PRAYER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Just three years ago my twin brother, who was thirty-six years of age with a wife and family of six, was discovered to have a brain tumor. He was taken to the hospital and had the brain operation. We had six weeks to await the results, that being the longest six weeks ever, no knowing what the outcome would be.</p>

                                        <p>During that time, a lady from my area sent me a letter and with was The Miracle Prayer. I kept praying it many times—until I was satisfied I had said it to my satisfaction.</p>

                                        <p>He came through the operation on December 5th just fine. One week later he was to go home. That was the day he got his results. One hour before we arrived to take him home, a doctor told him he had a malignant tumor and had to go for treatment. That was out big fear. But just one-half hour later they came back to him and told him that he did not have any need to go for treatment. He was fine and his results were clear. Now three years later he is in perfect health. He never looked back and is working every day. Thanks be to God! I believe it was a miracle and I believe in The Miracle Prayer.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BACK TO NORMAL <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Through your Miracle Prayer I’m born again.</p>

                                        <p>I attended your Healing Service in Church and through your healing I’ve improved my weakened body. On January 14, 1993, I had a bad fall in the snow and broke my left arm, bones twisted. Through your miraculous prayers I am again back to a normal life.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GOLDEN GRAINS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you most sincerely for your Miracle Prayer cards. You’ll never know the comfort the cards bring to others. My sister in Dublin has also been blessed by you.</p>

                                        <p>There are so many people who have never experienced the power of prayer and your little card is like a grain of gold.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">MIRACLE PRAYER FLOURISHING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>“I received some copies of the Miracle Prayer and I thank you very much for the same.</p>

                                        <p>A friend of mine gave me a copy of this prayer just as I was leaving my home to visit the Radiology Center to get an ultrasound for my thyroid problem. I prayed the prayer while I was driving on my way. I was shocked when the technician told me that she couldn’t find anything. I said to her, “Praise the Lord!”</p>

                                        <p>This Miracle Prayer is so good that I would like to spread it as much as possible. I have even sent copies to India (the country I come from) so that this prayer can be shared by people there, too.</p>

                                    <p>VIRGINIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FINDS JESUS IN PRISON <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>You prayed for me and my girl friend a few months ago over the phone and sent me your Miracle Prayer. Just the other day when I was asking myself how in the world am I going to get out of this jail, I was searching for an answer and that’s when I received some mail from you. It was entitled, “Dated Material” and my answer was right on the front. It said, “Prayer . . .pray . . . pray. . . “ I just want to say thanks for sending me mail at the right time and God bless you.</p>

                                        <p>I am only twenty-one and am doing six months. I’ve matured and have opened up the door to Jesus. With Jesus in my life, I have peace with myself and from time to time can feel His presence. I will continue to read your Miracle Prayer and pray for you. Thanks.</p>

                                    <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SOUL-STIRRING EXPERIENCE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                    <p>Mama and I have attended your Healing Masses and Services several times in the past years. We also have been praying the Miracle Prayer almost daily for four years. I have rested-in-the-Spirit three times. Each time was a unique, soul-stirring experience! Jesus healed me of my nicotine smoking through you and the Miracle Prayer! I thank our dear most loving God every day! I am also continuing to be changed spiritually, or which I exclaim, for “Glory be to our Holy Trinity!”</p>

                                    <p>I thank you for saying “Yes” to Jesus just as Mary, our Mother, had done.</p>

                                <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fertility -->
                    <div id="fertility" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">TRIPLE FEATURE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>For sixteen years I have sent you a birthday card and cannot believe I missed it this year. When I wrote you in October of 1990, I asked you to see if you could be the stork to go over to _____ house on ______.</p>

                                        <p>June 18, 1991, she gave birth to triplets (three little girls) premature at seven months.</p>

                                        <p>They are now four months old and doing fine. I have been here since October 6th when they were christened. Over hundred guests were invited to the Christening.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">MARCH MIRACLE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Father, in September of ’88 we lost our fist baby, aged just one day.</p>

                                        <p>After various tests and having tried for another, for nearly two years, we were unsuccessful. Then when you visited the Church in South London, I told you of my intention and you kindly prayed over us.</p>

                                        <p>I am now pleased to tell you my baby is due in March. We continue to pray for the deliverance of a healthy baby. Than you very much for that miracle.</p>

                                        <p>UNITED KINGDOM</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">LIVING IN SOLID ANTICIPATION <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I praise God for you and for His healing and blessing through you.</p>

                                        <p>I brought my daughter to your Healing Mass in July 1990. On the way up I asked God to heal her, if she was ready, and if she wasn’t ready, to give her a sign of encouragement to know God can heal. Well, when you prayed for her, they helped her up a little and she did stand by herself for a little while. You told her she just wasn’t ready, to keep praying and saying the Rosary. I am covering her with angels and with the Blood of Jesus, plus standing on Psalm 139, that some day she will walk.</p>

                                        <p>I sent in three relative’s names for you to pray that they would have children. They had spent lots of money doing to doctors. The real physician is God.</p>

                                        <p>One was married five years. Shortly after I sent her name to you she became pregnant. She has had twin girls and though they are on monitors, they are doing wonderfully.</p>

                                        <p>Another one, who was married two years, became pregnant shortly after I sent her name in. She had a baby in July.</p>

                                        <p>The third one, who was married four years, has had a girl and is expecting another one.</p>

                                        <p>With God nothing is impossible. IT is foolish not to trust in God for help and guidance, to come to live in solid anticipation that He can and will handle our problems.</p>

                                        <p>The Holy Sprit gave me the wisdom and knowledge to pray for my tow sons. One almost got electrocuted and the other one was protected from a bomb that didn’t drop where it was supposed to. It got one football field and a half away when it fell 30 feet into the ground and exploded. He was with other men in the National Guard.</p>

                                        <p>INDIANA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">EXPECTING CHILD <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I was at the Healing Service in February with my daughter. She had not been able to become pregnant. After we attended the healing service, she conceived. The baby is due in November. Our thanks to God and to you for your healing.</p>

                                        <p>We anxiously await the birth of this child, my grandchild, and pray for a healthy, happy, child of God.</p>

                                        <p>MICHIGAN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A BOY CALLED JOSEPH <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Back in the summer I wrote you a letter, and to my big surprise, you called me on the phone. I was pregnant then and very much scared because I had two sons with a lot of medical problems. You prayed with me and I felt very good. My fears disappeared. Thanks be to God, on November 11, 1992, I gave birth to a healthy boy and we called him Joseph. I feel very blessed for this miracle.</p>

                                        <p>NORTH CAROLINA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CHILD IS TREASURED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am so grateful to have had the privilege to be inspired to go to the Healing Services at our Church, because the miracle happened there.</p>

                                        <p>My neighbor was delivered of sterility. She has a fine baby boy. She and her husband had tried for five years to have child and I put her name on the altar for a healing. They are so happy with this child.</p>

                                        <p>MASSACHUSETTS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PRAYERS ARE PRECIOUS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>We have just finished a nine-day novena in Knock in honor of Our Lady—it was lovely. I didn’t forget to pray for you.</p>

                                        <p>Well, your prayers are working. My daughter-in-law is pregnant. I’m looking forward to seeing you in October. Hope you will get this and I know you’ll be so happy with the good news.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEALTHY TWINS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>On November 21, 1994 my daughter, pregnant with twins, and I attended the healing service at Church.</p>

                                        <p>One of the twins had a problem that no other baby in the world had. Medical science could not help her. So she turned her baby over to God, and through you, received the warm feeling of the power of the Holy Spirit filling her body.</p>

                                        <p>Both babies, a boy and a girl, were born seven weeks early, January 3, 1995, and they are healthy and beautiful. How incredible it is to view a miracle that weighs four pounds.</p>

                                        <p>GEORGIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BABY DUE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Father Rookey,</p>

                                        <p>You prayed over my daughter ten months ago. She was having a hard time conceiving.</p>

                                        <p>IT was not a surprise that she was pregnant the next month and the baby is due in the middle of July!</p>

                                        <p>Praise God!</p>

                                        <p>MISSOURI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">THOUGHTS ON ABORTION <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Pope John Paul II states that we must respect life. I know many people (Catholics included) that disagree with this. Many are mothers of teenage girls. With sexual permissiveness a reality for teens, many parents would prefer that their teenage daughter get an abortion (rather than have a child).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PREGNANT UNMARRIED DAUGHTER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Some mothers and fathers want their daughters to abort because they feel that a pregnancy will end their daughter’s future or that their daughters are not responsible enough to be a parent. Some parents worry about who will support or care for the child. Some parents don’t wish to deal with the shame of a pregnant unmarried daughter.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PEOPLE WOULD TALK <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p> This cause me to think about a 13 or 14 year old girl (who became pregnant). She was engaged but no married. Her name was Mary. An angel came to her and asked her to become the mother of the Savior. She had a choice. She chose to say Yes!. This was very difficult. She loved God and trusted in “Him. She know that she could be stoned to death. She knew that it was possible that no one would believe that she became pregnant by God. She knew that relatives might turn their backs on her. Yet, with all these odds, she chose the hard way by saying “yes” to God’s Will.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GOD WAS ALWAYS WITH HER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p> The very thought of her saying “no” would have meant possibly no birth of the Savior; no forgiveness; and no eternal life. Fortunately, Mary loved God so much that the thought never occurred to her. She wasn’t alone during this time. God was always with her through it all.</p>

                                        <p>I can’t help but think that God prizes human life. After all, He sent His Son in human form. If life meant nothing at conception, then perhaps God would have made His Son a full grown man and not used Mary as the means to bring His son into this world. Being God means that He could have done that. Yet, He chose to have His son enter the world like all other children (by means of a mother).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">THE HARD WAY ISN’T EASY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Unplanned pregnancy isn’t easy. There are many fears and uncertainties. Not many have the trust in God or acceptance of His Will to go through with it. The hard way isn’t easy. Mary spent most of her life in prayer. It helped strengthen her in times of sorrow and joy. Since she was human and prayer helped her, perhaps the example that she set could help us all. Maybe if we pray for those who are pregnant and let them know they’re not walking through life alone, abortion would cease to be an option. Maybe, if we take a look at how God never left Mary’s side during this time, we’d understand that what He did for her, He’d do for us (out of love).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">NON-JUDGMENTAL LOVE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>I can only feel bad for someone in that position. I don’t have any desire to judge their actions because it’s not up to me to judge. I’m just not that perfect. It seems to me that if marches, signs, and condemnation worked, there would be no abortion clinics because no one would choose to use them. Prayer, prayer and more prayer seem to be necessary. Support for those who are in this position would help. It’s only through non-judgmental love, support and prayer that people change. And isn’t that what Jesus asked us to do? HE did sat not to judge, to love one another, support one another, and pray for one another. He also wanted us to accept the Father’s will. IF people learn through example, perhaps a new look at Mary would help us learn that all things are possible through God and life should be respected. May He grant us the strength to accept His will above our own (like Mary).</p>    
                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CLUB HANDS AND FEET NORMALIZED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I feel that God wants me to tell everyone about our miracle. Our oldest boy has cerebral palsy and is mentally retarded. When you prayed over the lady next to me, I saw a light coming towards me. When you touched me, I was slain in the Spirit.</p>
                                        <p>At the next doctor’s visit he did a sonogram and said that my baby had club hands and feet and wanted me to come back three days later for more tests. I went home in shock. I was devastated. I cried and asked God how could we take care of two handicapped children. We prayed and asked God for a miracle.</p>
                                        <p>My husband and I went to a healing service and the priest prayed with both of us. At the end of his service, I was overcome with the smell of roses. The next day I called you and you prayed with me over the phone. Everyone I knew and all my family prayed the Rosary. My aunt gave me a prayer cloth you had blessed and I kept if on my person.</p>
                                        <p>When I went back to the doctor the following Tuesday, he took another sonogram. I told him this time I wanted god news! The baby’s hand never moved and then, one finger at a time moved, then the wrist. The doctor was shocked and said that this was totally different from Friday’s sonogram. He still insisted that the feet were clubbed. But we knew God had healed it all. My husband and I had a beautiful peace all along, even when the doctor gave us bad news.</p>
                                        <p>Then on May 10, 1996 our son was born with perfect hands and feet! I just want to praise God for our miracle and for all my children. People still look for excuses about why the doctor saw club hands and feet—that he was mistaken. But we know what happened. We saw it. God healed him. Praise you, Jesus, Mary and Joseph. Thank you for hearing our cries. Thanks to everyone who prayed for us.</p>
                                        <p>TEXAS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CHILDLESSNESS HEALED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I have attended your Healing Masses since 1991. In that time, my family had asked you to pray for many of the loved ones in our lives, including our daughter. She is eight years old and was born with Cerebral Palsy. Over these past five years she has had a very successful neurosurgery and has gotten stronger physically. Her eyesight, which was failing, has improved dramatically.</p>
                                        <p>Nine years ago, my husband and myself were childless. In 1988, when we learned that relatives were to visit Medjugorje, we wrote a petition to Our Lady of Medjugorje. They took the petition with them and gave it to one of the visionaries (one of the girls) who prayed for us. The very next month, we learned I was expecting. It turned out to be twin girls. Two years later we h ad a son. In the summer of 1995, we thought our changes of having another child were slim. Again, we knew of people going to Medjugorje. We sent along another petition to Our Lady for a child. Also, when I attended your Healing Masses last summer I wrote the same petition. By September, our fourth child was on the way. Today he is a healthy one-year-old. Four children!! How blessed we’ve been!</p>
                                        <p>MISSOURI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FERTILITY IN HONOLULU <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Our Lord Jesus and His Mother Mary had certainly sent you over he`re as I needed to receive your spiritual healing and your blessing to become a mother. I felt the Holy Spirit, the warmth and the strength go into my soul, body and spirit.</p>
                                        <p>IT is wonderful news! My husband and I will go to Fatima as pilgrims to thank Our Lady for all the blessings she has given to us and especially for her recent blessings. I have now conceived!</p>
                                        <p>HAWAII</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">THANKFUL FOR A LARGER FAMILY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Thank you for your compassion ministry. WE have had many prayers answered and experienced God’s love through His miracles of healing. I am very thankful for my son’s healing of his bedwetting problem which he had until he was eleven. My daughter’s eye is almost healed. She was born with Strabismus and 90% of the time her eyes did not work together. After you blessed her we returned to the doctor and there was a complete reversal!</p>
                                        <p>I am also thankful for my husband’s conversion and healing so we could have a larger family. I am 43 and have conceived our seventh child. This is truly an answer to prayers because my family is not normally able to conceive after 40. I am enclosing a copy of the first sonogram of this child and I ask your prayers for this child to be healthy and normal physically and mentally.</p>
                                        <p>Thank you for your unselfish love and prayers.</p>
                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BABY DUE MAY 2000 <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I went to see you last May with my husband and parents. During the night you asked if anyone would like to write out nay special intentions and put them in a box on the altar.</p>
                                        <p>Wee, I did and I prayed that mine would be picked out and read by you. It was!!</p>
                                        <p>I had explained in the note that I hoped to have a family myself. I had always wished for a baby. I also wished that my family would have better health.</p>
                                        <p>Well, guess what? I’m expecting a baby which is due May 2000 all being well. Exactly one year since we will have seen you.</p>
                                        <p>My mother finds it hard to walk and is still attending the hospital but is not getting any worse. My husband and I are really, really happy. We can’t wait, but I guess we’ll have to!</p>
                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tumors and Cancer -->
                    <div id="tumors-cancer" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">A MARVELOUS CHANGE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>My son had an immune deficiency and, most of all, a bizarre behavior problem. We attended your Healing Mass. It was difficult for me because of my son’s behavior. By the time I coaxed him down to the altar, I was a total wreck. You blessed my son, and when you blessed me, the Holy Spirit was so strong I could feel the presence of God with me. When I woke up, I had such a beautiful peace. I had no idea that God was giving me the strength for what was to come.</p>
                                        <p>After a few weeks my son’s behavior got worse. It was almost like he was a demonic. The fear grew in me, knowing that here was more wrong with my child. I had conge to one of several psychiatrists, pediatricians, etc., and no one could tell me why m y son acted like he did.</p>
                                        <p>Well, finally, through a lot of searching and prayers, my son was admitted into Children’s Hospital and underwent several tests. When the neurologist ordered a MRI, it was discovered that the whole right side of his brain was covered with a tumor. That explained the behavior. Later he underwent a brain biopsy and I can remember the neurologists telling me that it was malignant, but the doctors did not know what type of tumor it was.</p>
                                        <p>I kept praying all the time up until this point, and I had nothing left to give. We stayed in the hospital on the Oncology Ward for over a month. Finally one afternoon the neurologists came into our room and told me that my son’s tumor was no malignant and we could go home. We were to return every three months for a checkup.</p>
                                        <p>IT has been almost a year and the tumor has never progressed. My son has never received any treatment except for the immune deficiency, which he receives every two weeks. His behavior is not normal but it is a lot better than before.</p>
                                        <p>As I look back, I know that God sent me to that Mass and I marvel at how God works. There is no doubt in my mind that the healing for my son’s tumor was received at the Mass. I thank God for using you as His instrument.</p>
                                        <p>LOUISIANA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">MASSIVE LUMP . . . CANCER CURED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Many thanks for your letter and the medal blessed by Our Lady, which you recently sent me. My sister, Ann presently has the medal as she firmly believes in Our Lady’s intercession.</p>
                                        <p>As I already mentioned to you, when you blessed Ann in Medjugorje, she felt, as she explains herself, “a massive lump on her chest.” She was not aware until our return from Medjugorje that she also had cancer there, besides in her lymph glands. Her doctor informed her after examining her thoroughly that she was completely cured of it there. They had not told her prior to our departure so as not to worry her while we were there.</p>
                                        <p>I visited Knock yesterday. Our Lady appeared there towards the latter end of the last century and it is a wonderful place of pilgrimage in Ireland. I know that with your continuous prayers, Ann will again be returned to full health.</p>
                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">TUMOR TUNED OUT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I went to one of your Healing Masses. I was scheduled to have surgery after the New Year.</p>
                                        <p>When I went to see the doctor for my final check up, he said I no longer had a tumor. Ever since that day, I pray the Miracle Prayer every day.</p>
                                        <p>WISCONSIN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEALING HAND OF CHRIST <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I was present in the name of my daughter at your Healing Service on February 22. My daughter is 31 years old and was seriously ill with cancer. She is my only child.</p>
                                        <p>On February 23, she received a report of a normal CAT SCAN. We truly believe the healing hand of Christ granted us a miracle through your service. Praise and thanksgiving to Our Lord!</p>
                                        <p>FLORIDA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">A BURST OF POWER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I attended a Healing Service in April of 1994. I had been recovering from surgery for thyroid cancer. I didn’t know what to expect, but I decided to go anyway.</p>
                                        <p>After the Mass, we were invited to be blessed by you. We stood in line and I told myself to accept the Holy Spirit. When your cross was placed on my forehead, “Pow!” I fell into a catcher’s arms. I felt paralyzed and my body shook and trembled. It seemed like time went into slow motion.</p>
                                        <p>After this experience, I received a good news letter from my doctor.</p>
                                        <p>MASSACHUSETTS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FEELING GREAT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I wrote to you in March, asking for prayers for my cancer. I am now off chemo, feel great and I’m going to see the doctor in July again. I know that the news will be great. Thanks to your prayers and the Miracle Prayer. Prayers do help!</p>
                                        <p>CALIFORNIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CANCER FREE FOR THREE YEARS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I was diagnosed with lung cancer in 1987 and had one-third of my right lung removed. Two years later in 1989 I had a recurrence in the same lung and was treated with chemotherapy and radiation therapy.</p>
                                        <p>Then I attended your Healing Service and I firmly believe that my attendance at those services was instrumental in my recovery.</p>
                                        <p>I have been cancer-free for three and a half years and am very thankful.</p>
                                        <p>GEORGIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CANCER LIFTED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>My son was not feeling well and had a chest x-ray taken. The doctor called him and said it did not look good, probably lymphoma. We were shocked. I called you and asked for prayers at your Healing Mass. I know it was the healing hand of Jesus. When the biopsy was performed, it was noncancerous.</p>
                                        <p>MIGHIGAN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEALING AT BAKERY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Praise God! My aunt, who had cancer, is doing great. She went to your Mass at the Bakery last month. The doctor has a good prognosis for her. Thank You Jesus, Mary and Fr. Rookey!</p>
                                        <p>GEORGIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CANCER COLLAPSES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I have a friend whose daughter called and told us about your ministry. Her neighbor’s son had cancer and was so sick he was throwing up a lot. They received a phone call from you saying he would stop throwing up. A subsequent visit to his doctor showed no signs of cancer. A miracle!</p>
                                        <p>MAINE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TOUCHED BY JESUS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>My story is very involved and I am writing to you to let you know that I have been touched by Jesus.</p>
                                        <p>For two years I had suffered from tremendous head pain. I finally found a doctor who would listen and would hang I there with me. My doctor ordered a MRI which showed a shadow that the doctors thought was a vascular mass. They then ordered an aortagraphy which showed I had a small benign tumor.</p>
                                        <p>They called in a surgeon who told me that I would probably not survive surgery; that the least I could hope for was to be blind and paralyzed; or that I would end up in a vegetative state. We made arrangements for me to be in the hospital 12 to 14 weeks and then to go live for a while at a rehab center. Breaking this news to my two small children was frightening.</p>
                                        <p>Before the surgery the doctors got very angry with me because I told them that Jesus would not desert me and that I would be fine. They told us that the surgery would be about 3 hours. IT ended up being 7 ½ hours. When they opened me up, they said I should have been dead months before; my brain was so swollen that it was starting to disintegrate and I had a tumor twice the size the test had showed. Plus, it was wrapped around the brain stem. They were later astounded that I could talk, recognize people and wiggle my fingers and toes.</p>
                                        <p>I was on the critical list 3 days. Unknown to me at this time, you came in . My girlfriend had gone to see you and told you she had a friend who just undewent brain surgery but we did not know if it was cancer yet. You told her it was but that I would cured. She then stood in proxy for me. She said before she went down, her head burned and felt like it had cracked in three places (everywhere I was cut). Then you told her to go to the hospital and lay her hands on my head and say the Miracle Prayer. She did as you said and I made a turn for the better the next day and was out of neuro in a week and a half.</p>
                                        <p>I am fine today. I wanted to take this opportunity to thank you for helping to cure and heal me through the help of Jesus.</p>
                                        <p>OHIO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">LUNG CANCER DISAPPEARS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Praise be to Jesus and the Blessed Mother for using you as an instrument to transmit so much love and understanding.</p>
                                        <p>Last week I called you to pray over my friend. The doctor told him he had cancer in his lungs.</p>
                                        <p>Later when I went by his house, it was the first time he was walking around. He felt your prayer had cured him. He was feeling great.</p>
                                        <p>I pray for your healing ministry. Please, if you need my service in any way, don’t hesitate to ask me.</p>
                                        <p>FLORIDA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">IS TME THE ANSWER? <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I’m 25 years old and suffer from a rare bone disease., Olliers Disease.</p>

                                        <p>As the tumors grow in the body, they have to be removed. I’ve had 31 operations. I had lost most of my mobility through the last few years.</p>

                                        <p>As my disease was progressing, I had to have my right arm amputated. I felt lost a lot in my life, and at times I was filled with sorrow. My dad took his own life three years ago and I miss him very much.</p>

                                        <p>I went to see you on October 17. I received your blessing and I got up from my wheelchair. I felt a lot of healing in both of my legs. My healing is slow, but I feel a little stronger as each new day begins. Do you feel that time is the only answer—that slow healing can be powerful—as I do?</p>

                                        <p>I can get around slowly unaided, but in my heart I feel that one day I’ll be able to walk much more. I have strong faith, and each morning I say the Miracle Prayer, which I truly believe in.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CANCER CANCELS OUT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>You prayed for my sister when you visited our area both this year and last. She had been diagnosed with bone and brain cancer last year. You may recall hesitation, as she witnessed to the congregation this year during your visit. The biopsy was nonmalignant and subsequently a second brain tumor disappeared.</p>

                                        <p>We are so grateful that this miracle was granted. This event has brought our entire family back to the Church, which is what I am sure the Lord had intended. Thank you for all of your prayers.</p>

                                        <p>MICHIGAN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SURGERY? NO! <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I was here in Florida to see my own doctor regarding surgery. I have been living in upstate New York for the last four months, taking care of a terminally ill aunt. Two doctors and a radiologist in New York diagnosed me with ovarian cancer and scheduled surgery for me. Now I know God had other plans for me—in meeting you.</p>

                                        <p>My husband and I came to your Healing Mass two times and I rested in the Spirit both times.</p>

                                        <p>Father, on Sunday when I arrived in front of the Church, I smelled beautiful tea roses all around the car and as I walked to the front of the Church, it was such an experience. The heat rushed through me during those four hours of prayer—amazing. I kept saying to my husband, “Why is it so hot in here?” Resting in the Spirit was the most wonderful feeling. I’ll never forget it. Praise the Lord!</p>

                                            <p>After those two experiences at the Healing Masses, I had my doctor’s appointment and exams rescheduled. All tests have come back normal. I no longer need surgery. Praise Jesus! Please use my name in your other services as I am eternally grateful to you and Jesus.</p>

                                        <p>NEW YORK</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CANCER STAYS AWAY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,

                                        <p>I wrote you on October 19th asking your prayers for my problem which was cancer of the bladder. I promised you, at that time, I’d send you a donation later. So now please find a small donation as a Mass offering for me, Father.</p>

                                        <p>On November 15th I went for my usual checkup, which I every three months. The next day the doctor said, “You may go home today as your bladder is clear with just a scar.” So praise God I was delighted, Father. Thank you for your prayers. Please keep me in your prayers and I will remember you in mine.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CANCER DISAPPEARS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,

                                        <p>My mother’s brother-in-law in Mexico had cancer of the prostate, so my mother sent him the relic of St. Peregrine and the prayer to him for cancer patients.</p>

                                        <p>A couple of months later one of his daughters called my mother to notify her that her father’s cancer was completely healed. No cancer found.</p>

                                        <p>Praise the Lord and a big thank you to St. Peregrine.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BRAIN CANCER CANCELS OUT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,

                                        <p>As I went to our Spiritual Life Committee meeting at the parish, I was stopped by a couple after the meeting. They went on to tell me that their friend from Texas was diagnosed with brain cancer. They told her to go to the Cleveland Clinic to see what could be done. This is why she was at the service.</p>

                                        <p>The results that day were that she was to return home and that she should begin chemotherapy as there was nothing for her here.</p>

                                        <p>After the Mass and Healing, the woman returned home and after again more testing and x-rays of her head—all traces of cancer of the brain were gone! Thanks be to God. Praise You, Jesus!</p>

                                        <p>OHIO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEALING LIGHT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>So many thanks for the wonderful healing light. I have never felt Christ’s energy so clearly, so strongly, so purely, nor experienced the Divine Mother as a force of such beauty before.</p>

                                        <p>Also, since sending the name, to you, of a friend dying of cancer (through a message left by phone in England), she has become better. Not only more peaceful, but able to eat a little and speak with more strength again. So Christ does have mercy.</p>

                                        <p>You don’t know how much help you have given me. Jesus and Mother’s love are alive in my heart. How much they must love you, and “I” too. People who make a real difference to human life are incredibly rare.</p>

                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SMOOTH SURGERY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I called your office and asked for prayers, for the next day I was going to have surgery to have tumor removed from my breast.</p>

                                        <p>You couldn’t believe how smoothly it went. It was as it angels came to the hospital. Throughout the whole procedure everything was fine. All my love and prayers to you, Fr. Rookey.</p>

                                        <p>Praise our wonderful Lord of Mercy and His Blessed mother Mary.</p>

                                        <p>P.S. If I have to give someone a note, I’ll write on one of your prayer cards. Very effective.</p>

                                        <p>MISSOURI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GOT GREAT STRENGTH <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I attended your Healing Service on July 10th, which was my birthday. I was healed of cancer. I stopped all treatment and have since had several medical tests done to confirm the healing. On December 31st, my parish priest will say Mass in thanksgiving for my healing.</p>

                                        <p>“Thank you” seems hardly enough to say. I know God will repay you a hundred fold for your faithful service to His Kingdom. The Divine Physician has touched me more than once from your most humble, holy and obedient hands. God bless you forever.</p>

                                        <p>INDIANA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SLOW—OK <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>On August 11th I was operated on for a brain tumor. The Monday before that you prayed for me over the telephone.</p>

                                        <p>The risks involved in removing the tumor were possible paralysis on the left side or a stroke, deafness in left ear, and difficulty in swallowing or talking. I was very frightened. I tried not to think of the operation and dwell on it. I don’t remember anything about the operation. Thanks be to God, I’m walking. I do have some problems with my left shoulder. It hurts. And my left arm’s mobility is somewhat diminished. Physical therapy is helping it improve. My vocal cords on the left side are paralyzed. My voice is nasal and high. Hopefully speech therapy will help.</p>

                                        <p>I just know Our Lord, Mary, the saints and angels were there in the hospital with me. The doctors and nurses were blessed with many graces.</p>

                                        <p>My progress is slow, but that’s OK. How patient the Lord is with us.</p>

                                        <p>MICHIGAN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">“A HUGE MIRACLE” <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Above title taken from “Happenings,”</p>

                                        <p>The newsletter of Hearts for Hope, October, 1999</p>

                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am writing to you today to give you documentation of the miracle of our son, age 5 ½.He was diagnosed with Stage IV Neuroblastoma cancer on September 21, 1998. The cancer had spread this spine, shoulder, legs and bone marrow. We were told he had a 30% chance of survival.</p>

                                        <p>On September 27, our nephew gave us your Miracle Prayer. On September 28 you spoke to me and my son at the hospital and gave us your blessing over the phone. A peace filled my heart. After surgery, he started chemo on September 29. After four rounds, the tumor had shrunk enough for the surgeon to remove it on December 3. On December 4, the oncologist saw no trace of cancer cells in the bone marrow or on the bone scan. Today he is cancer free!! Praise God for our miracle. In August my husband gave witness to the miracle of our son.</p>

                                        <p>I’m enclosing a letter which highlights our son’s treatment and a newsletter from Hope Children’s Hospital about the miracle for him.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="mystery-magic" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">AN AMERICAN PRIEST <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>An American priest, famous for performing “ healing miracles” has attracted thousands of people to Masses throughout the province. It has been claimed that during the ceremonies, the blind see and the lame walk.</p>
                                        <p>Fr. Peter Rookey, a Servite from Chicago, began his tour of Ireland from Belfast last month. Thousands flocked to venues in Belfast, Larne North.</p>
                                        <p>Antrim, Tyrone and other services in the South. Healings were witnessed and according to the friends of Fr. Rookey, miracles really did happen.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">REGGIE DONNELLY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Reggie Donnelly from Dunmurry who coordinated the N.I. visit and has accompanied the priest on previous visits here, said that many people have received the gift of healing after a Laying-on-of-Hands.</p>
                                        <p>SEVEN-YEAR-OLD</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">SEVEN-YEAR-OLD <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>“Two years ago in Ardoyne, a seven-year-old was brought to Fr. Rookey. He had a malignant brain tumor. Medically nothing could be done for him, abut afterwards he was completely healed.”</p>
                                        <p>LADY WITH ACROPHOBIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">LADY WITH ACROPHOBIA <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>“On another occasion he healed a lady who had not left her house for 18 years. She had been suffering from acrophobia. She came to a recent Healing Service and told us how she is going to visit her daughter in Australia.” Mr. Donnelly said.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">A STEP IN FAITH <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Fr. Rookey was accompanied on his tour by a witness, Heather Duncan, a Scottish nurse whom he met in Medjugorje in Yugoslavia. Heather had been wheelchair bound since 1985 after an accident left her spine crushed.</p>

                                        <p>She has since been featured in a special documentary, “Working Miracles,” which tells the story of how Fr. Rookey enabled her to walk.</p>

                                        <p>Heather claimed: “Before the documentary was made, the producers of the film asked permission for a medical team to examine me and they found the same results as other doctors. My spine is still crushed and technically I should still not be able to walk.”</p>

                                        <p>During the healing services, Heather was called by Fr. Rookey to tell how after they had prayed together she left behind her spinal brace and wheelchair “to take a step in faith.”</p>

                                        <p>Heather said: “ I was told in June 1990, after a series of operations, that I would never walk again. Friends told me that Fr. Peter was having a healing service in Medjugorje. I was reluctant to go, but they picked me up and took me anyway.”</p>

                                        <p>“I prayed with him for half an hour and he said, ‘Silver and gold I have not. In the Name of Jesus, stand up!’ And I got up.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">BEGINNINGS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Fr. Rookey began his healing ministry at the Benburb Servite Priory in 1949. He said: “People came to Benburb to pray and to be blessed. Some came back and said they had been cured of illnesses like arthritis. After that, word got around and people came form as far away as Belfast and Derry. Soon so many came we had to hold the services outside.”</p>

                                        <p>But Fr. Rookey does not claim to be in any way special and says he has no personal powers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GOD NOT LIMITED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>“I do not have the gift of healing. I just pray. The Lord has the gift. Jackasses bray and we pray. It’s simple. Ideally, the Blessed Sacrament should be exposed in the Church where the Holy Spirit is invoked Jesus has only to say the word and we shall be healed. The power of God is not limited by time or space.”</p>

                                        <p>The power of group prayer, he said was important in the healing process. He prefers people to attend the gatheriings rather than approach him individually.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">THANKS BEFORE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>As Castlewellan, Fr. Rookey said: “First, we must thank the Lord before we receive His blessings. As we say in Ireland, we have to give Him a little blarney to butter Him up fist and then we ask Him to heal.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HYMNS AND ROSARY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>During the meetings, he encourages the praise of God through hymns and the Rosary. “It is in the midst of this,” he said, “the healing takes place. It is a simple thing the Lord is giving us.”</p>

                                        <p>Speaking on suffering, he said: “We, as Servites, are dedicated to Our Blessed Lady, for it is through her that all graces come w hen people are seriously ill, I ask Our Lady to intercede through the Lord. If she asks Jesus, He cannot say no.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SUFFERING A CALLING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p> “Never were there two people who suffered more than Jesus and Mary. Through their suffering we are healed. Suffering is a calling for many of us: for many it is lasting.”</p>

                                        <p>Fr. Rookey added: “Most of us are in good health so that we can help those who are not. If we were all invalids, who would help us?”</p>

                                        <p>“Others are called to suffer. The Lord wants us to be healthy, but He chose sufferers to be part of His passion, His suffering, so that we could all be healed in body and soul and so there is and always will be those who are called to suffer, like Jesus, as part of the suffering of Christ.”</p>

                                        <p>He told how many had been called to suffer, like Padre Pio who bore the wounds of Christ or St. Francis of Assisi—but many people, he said, brought on suffering through unforgiveness.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">ONE LINER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p> “Like Bob Hope, the comedian, I will put the healing message into a one liner. Hate and be sick; love and be well, at peace,” he said.

                                        <p>This is the message he preaches, be it at Mass, on the telephone to the sick and elderly, or to a bus load of American tourists who arrived at Mr. Donnelly’s house, hoping for a healing.</p>

                                        <p>With patience and unflagging energy he does not appear to mind the constant petitions or phone calls or public appearances.</p>

                                        <p>“God’s work,” he said, “was never boring.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEATHER DUNCAN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>It was not just a question of mind over matter for Scottish born Heather Duncan whose crushed spine was apparently healed in a laying–on-of-hands last year by Fr. Peter Rookey. She, for one, believes in miracles.</p>

                                        <p>Spinal Cord and Never Damaged</p>
                                            <p>Heather, then a non-practicing believer who was nursing at the Geriatric Unit in the Glenburn Wing of Woodend General Hospital in Aberdeen suffered an accident in 1985 which left her spinal cord damaged and nerves crushed. Until October 2nd last year she could not even make a cup of tea, and relied on the patience of her husband and some help to live.</p>

                                        <p>Forced to Wheelchair</p>
                                            <p>Heather, during her visit to Ireland as a witness to Fr Rookey’s healing, recalls her trauma and the overwhelming experience of one as in being able to walk although medically she should be unable to.</p>

                                            <p>Forced to live in a wheelchair supported by braces to keep her sitting upright, Heather said, “ I genuinely believe, from that point onwards, that my mission was to suffer and that I should offer it up. I wanted to go on a pilgrimage of thanksgiving.”</p>

                                            <p>It was in a little graveyard in Medjugorje, where thousands of pilgrims flock each year to pay tribute to Our Lady, that she met Fr. Rookey.</p>

                                            <p>“He asked me what was wrong, and I told him I couldn’t walk. He asked me to hold a Crucifix and to look at the face of Jesus. He laid his hands on my head and on my shoulders, down my legs and arms and all the time was praying quietly.”</p>

                                            <p>“He gave me a prayer and then I remember nothing except intense burning and heat especially where he was touching my back. Then I felt dizzy and had I not been in a wheelchair would have fallen for sure.”</p>

                                            <p>Heather said: “He asked me did I want to try and stand up and he took me by the top of the finers and I spontaneously began to walk backwards and forwards.”</p>

                                            <p>Since then, Heather has been medically examined by a series of doctors. Medically her spine is still crushed, yet she walks. A television documentary has been made about her and other “miraculous” healings. Before it was recorded, doctors were called in to examine her spine. Their findings were the same.</p>

                                        <p>Active Young Woman</p>
                                            <p>Heather, now, is a lively and active young woman. She accompanied Fr. Rookey on his visit to Ireland to assist him as a witness to her story. What is striking is her intensive level of faith. She accepts without cynicism or question her “miracle.” Others she leaves to doubt.</p>

                                        <p>*Article from Ireland’s Herald, August edition, 1991, 6.7.</p>
                                            <p>Subtitles have been added.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="physical-healing" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">NO PARALYSIS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>All praise and thanks to Almighty God for His care and for all the prayers offered for my friend.</p>

                                        <p>He was severely endangered. If he didn’t have the surgery, he would be paralyzed; if he did, there was no assurance that he would not be paralyzed.</p>

                                        <p>No Paralysis!!!!</p>

                                        <p>His surgery was so successful that he will have only a ten percent disability now. They fused 13 vertebrae. He is doing well, now. Thank you all so much.</p>

                                        <p>Wyoming</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">HEALED VERTEBRAE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I had to write and tell you about a miracle that happened the weekend you were here. That Thursday, February 12th, my husband was driving in Ohio in a semi-truck. He wrecked his truck in bad weather and was taken to the hospital. The x-rays showed he had two vertebrae that had separated with a crack in one. The doctors told him he would have to wear a brace for six months. He was in terrible pain all day Friday. On Friday evening, I went for Mass and put his name in the prayer box. My husband couldn’t remember when it happened but all of a sudden the pain was gone sometime Friday evening.</p>

                                        <p>The doctor came in Saturday morning and said there was nothing wrong with him. They said they couldn’t understand it. He is fine. Praise the Lord for this miracle.</p>

                                        <p>MICHIGAN</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">BORN AGAIN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>A young man in our Church was in tremendous pain and needed back surgery after an accident.</p>

                                        <p>A sister, in the hospital, gave him one of your cards. He prayed the Prayer and became truly “born again,” had the surgery and came out of it with almost no pain.</p>

                                        <p>He cannot get enough of reading the Bible and is at Mass every day—also became a member of our Prayer Group. Praise the Lord and thank you Jesus.</p>

                                        <p>CALIFORNIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">JESUS RESTORES VOICE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>In July 1991 my friend asked me if I would like to go and see you.</p>

                                        <p>Four and a half years before that I lost my voice and could only whisper, which was very disturbing as I nursed patients in a hospital and it distracted me when I had to whisper a number of times before I was understood.</p>

                                        <p>Father, you blessed me and laid hands on me. You gave me your crucifix and told me to say “Jesus,” which I did without difficulty.</p>

                                        <p>Since that day I have talked without any trouble. I am very grateful for your prayers. I praise the Lord for my miracle.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">IN GRATITUDE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>A year ago I wrote to you congratulating you on your book. You very kindly replied to my letter. You wrote a beautiful prayer of intercession to the Holy Spirit, and in the last paragraph was a beautiful prayer to Our Lady. My sincere thanks and appreciation.</p>

                                        <p>A few days before Christmas, I had an appointment at the hospital for Laser Treatment, and to my surprise and the doctors—the eye had completely healed and my eyesight was very good. Thanks be to God. In gratitude to the surgeon who treated me, I commend him to your prayers, that the Lord will bless his hands and that he will continue to give others the care, kindness, attention and love that I received.</p>

                                        <p>Glory be to God the Father, Son and Holy Spirit.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">ON THE LINES AGAIN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Just a month ago, I couldn’t see to write—everywhere but on the lines. Loved your Healing Mass and since then my eyes are clearing.</p>

                                        <p>Twice since Marc, I’ve been spared being killed or hurt, in two accidents that were not my fault. Our Blessed Lady has always been good to us and I am very grateful to her and the sacred Heart of Jesus.</p>

                                        <p>I pray God will grant you many more years of health in your ministry of healing.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SIGHT RESTORED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>The day I met you in Houston, I was touched in a special way that has been a few years now.</p>

                                        <p>I went up to the altar to receive a healing of my seizures, if it was to be. If it wasn’t at that time, some day it will be.</p>

                                        <p>The lady who was standing next to my cousin received her eyesight. I remember you telling her, when you stood in front of her with the Cross, that you knew she was blind. Not much longer after that she started to see light.</p>

                                        <p>Thank you for the Miracle Prayer cards. They have helped others to whom I have given them. Please pray that my family will let me be a young 27-year-old woman and lead my own life.</p>

                                        <p>TEXAS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SKEPTIC SURPRISED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I just heard about you and met you with hundreds of others in Northern Ireland. I didn’t attend your Healing Mass for myself but for the two people I had with me—and yet even with my skepticism I was the one whose pain and swelling on my neck joints went away and have stayed away!</p>
                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEALING OF LUNGS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>For the past seven or eight years, I have had severe heart and lung problems caused by M.S. that I’ve have for twenty-six years.</p>
                                        <p>Last November, I had bronchitis that threatened to cause permanent lung damage. On December 5th, I attended your Healing Mass. As I lay resting in the Spirit, I felt a feeling of warmth go from the right side to the left side of my chest.</p>
                                        <p>On December 9th I had another appointment with my doctor. She said the lungs sounded fine and my heart hadn’t sounded that good in ages!</p>
                                        <p>I’ve been so well that I haven’t had to see the doctor since then.</p>
                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PAIN IN THE NECK <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I just want to say “Thank you.” Formerly I suffered form pain in my neck, up to my head. Since I received your blessing, I do not have it. Thank you and thank God.</p>
                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A PASS ON THE DOUBLE BYPASS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>This is a testimony of a healing that I received through you when you came to a Day of Renewal in London, 1991.</p>
                                        <p>I suffered a heart attack in July 1990 and was admitted to the hospital. After many tests I was told that I had two blocked arteries and that I would have to have a double bypass operation. I was given information in September 1990 and told that I would have to wait about six months before the operation could be carried out.</p>
                                        <p>A few weeks before I was due to be called to the hospital for the tests prior to having the operation I met you at the Day of Renewal. I told you about my problem and you prayed over me for some minutes. AS you prayed, I was filled with a lovely coolness. I cannot describe it in any other way, but at the same time a tremendous force was pushing me to the ground. I knew then that I had been healed. I would like to add here that this was the very first time I had ever been to a Healing Service. I had only been coming to the Day of Renewal for a few months and I did not know anything about you at all.</p>
                                        <p>When I was eventually called to the hospital for the tests before having the operation, my doctor could not believe the results of the tests. He asked me what had I been doing as it was quite clear that I would not now need any operation. He asked me if I was still taking any medications and I told him “NO” I had not taken and medication since the day you prayed over me.</p>
                                        <p>He had me back again later in the year for more tests, ‘just in case.” He said, as he still could not understand what had happened and seemed reluctant to let me go. However, I went back again in November 1991 and this time I was officially discharged as completely fit.</p>
                                        <p>I thank God for sending me to that Healing Service and for the healing He gave me through you.</p>
                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">JUMPING HEART <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Thank you so very much for the visit and Mass and Healing Service. My husband, who made this video, went to the doctor on Friday and reports and tests showed there was healing of his heart. He said when you prayed with him Thursday night he felt his heart jump like muscle spasms. He reached in his pocket to make sure he had his medicine, then realized it was something happening.</p>
                                        <p>The doctor gave a good report and said he can do any type of work he wants again. He repairs heavy industrial machinery and had been worried since the heart attack last April. Thank you for your prayers to Jesus Christ. WE thank you, Jesus, for this healing.</p>
                                        <p>EUROPE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">OUT OF WALKER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Thank you very much. My wife and I attended with two friends your Healing Mass. Wonderful!!</p>
                                        <p>We came away with many blessings. You will recall my wife walked the length of the Church without her walker. She continues to walk around the house unaided for the most part. She had a severe case of arthritis of the knee and hip.</p>
                                        <p>We will remember you in our prayers.</p>
                                        <p>MISSOURI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CLIMBING THE STAIRS AGAIN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>Thanks a million for your wonderful prayers for me. You will be delighted to hear the weakness in the legs vanished overnight and I can climb the stairs again. Praise God! It is vitally important for me to be able to climb the stairs, as you know. Already I dread being sent to the home for the elderly Sisters.</p>
                                        <p>I am praying for you and your special Mission of Healing every single day and I know God is showering His abundant graces and blessings on you. Renewed thanks for all your kindness and goodness to me, above all, your great prayers.</p>
                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEALED IN 1951 <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>When I was eight years old, I had rheumatic fever. I don’t remember much about it. My mother, R.I. P., told me that they had to turn me in sheets in the bed as my right leg was swollen from the top to my feet.</p>
                                        <p>My mother said the Rosary every half hour. The doctor said that there was very little they could do. The ambulance took me to the hospital, but the local doctor said that I would not make it. On the way, they decided to go to Dungannon, which was at that time called the Workhouse. At the hospital, I remember you standing at the foot of the bed, reading the Missal. From that time the doctor could not believe that I had survived. They operated on the leg and drained the left one every day. I am now fully recovered. I woe my prayers to you, Fr. Rookey.</p>
                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SURPASSED ALL UNDERSTANDING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you again for coming to celebrate at our Church and for your Healing Service. I’ve already received many favorable comments from people who attended. They came not knowing what to expect, but the peace and joy they received from the Eucharist and the service surpassed all understanding. We’re grateful that you were able to be an instrument of that healing experience for them.</p>

                                        <p>You prayed and blessed the arm of a woman who had taken a bad fall on the ice almost two months ago. For weeks she had been in intense pain and unable to move her arm or use her hand for any purpose. The break was so awkward and close to her shoulder that all the doctor was able to do was to immobilize the arm instead of putting it in a cast or brace. She was looking at months of painful therapy before she could return to work. She told me that her arm felt better after your prayer and blessing and she felt great peace. Today she was able to move her arm and use her fingers to button her coat for the first time since the fall. She said she truly feels this was a blessing and healing from Jesus.</p>

                                        <p>Other people said they were thankful that Father had invited you. They had never been to a Healing Service before, and they were so caught up in the Mass that they were genuinely surprised to look at their watches and see the length of time they had been in prayer. It seemed like no time at all.</p>

                                        <p>For my part, I felt a wonderful closeness to Our Lord and our Blessed Lady. It was wonderful to be in the powerful Presence of the Holy Spirit and to know God as my Father. Thank you for being the channel of His Presence and His Peace.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">LEG COMPLETELY BETTER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I have been to your Healing Mass and I wish to let you know at that time I had a very bad leg. Had to have stitches in it. It really got worse instead of better. Just by chance I saw in the paper that you were coming the next Thursday. My leg, Father, got completely better. So my sincere heartfelt thanks to you, even though I didn’t get to speak to you.</p>

                                        <p>May God bless and watch over you and spare you many more years to do His wonderful work.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FOUR THOUSAND TANKS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Our Lord was in you as you walked healing the sick. I have never seen so many miracle sin my life—a little boy deaf from birth healed—a young crippled girl running and jumping about happily—a young girl about 16-years-old who wore thick glasses all her life was healed.</p>

                                        <p>You asked us all to say the Rosary. Not just that, I felt the Real Presence of Our Lord and Our Lady.</p>

                                        <p>May the Lord and His holy Mother bless and watch over you. I thank you for everything you did for four thousand people I do write form the heart and I thank you on behalf of all from my heart.</p>

                                        <p>ADD STATE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEART HEALED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Several years ago you were here, and my husband prayed that I would be healed from a slight heart ailment. I was blessed by you and rested in the Spirit. My husband was blessed by you and he prayed for my healing. I felt a sharp pain in my chest. It wasn’t’ until later that my husband told me he prayed for me.</p>

                                        <p>Since then, I have not had any of the pain or symptoms of my heart problem. Thank you for all the beautiful healings that the Holy Spirit does through you.</p>
                                        <p>TEXAS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEAD PAIN PASSES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>This note is to thank Our lord through you. On May 29, 1995, Our Lord used you to heal my forehead with a Cross. My pains stopped since then.</p>

                                        <p>It is exactly one year now since I have taken any medicine. I glorify my Lord for that.</p>

                                        <p>May Our Lord continue to make you His servant.</p>

                                        <p>EAST AFRICA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">DISABLE FLOCK TO HEALING SERVICE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>a. Cathedral Packed</p>

                                        <p>Wheelchairs lined the aisles of Aberdeen’s St. Mary’s Cathedral as a thousand people looked for miracle cures.</p>
                                        <p>The visit to the city by U.S. Faith healer Fr. Peter Rookey attracted people form all over the North East, and as far a field as Dundee, who packed the Cathedral form early evening till around midnight.</p>

                                        <p>b. Amazing Scenes</p>

                                        <p>The service was peppered with amazing scenes as dozens of sick, disabled and frail people of all ages, fell into an apparent hypnotic state and were gently lowered to the floor by “Catchers” after Fr. Rookey laid hands on them.</p>
                                        <p>c. People of All Ages</p>

                                        <p>The congregation ranged from the elderly to teenagers and parents with sickly young children.</p>
                                        <p>d. Bishop Speaks</p>

                                        <p>Bishop of Aberdeen, Mario Conti* said “several hundred came forward for the laying of hands during the service.”
                                            “There were some very moving incidents,” said the Bishop today.</p>

                                        <p>*Ordained priest in San Marcello Church, Rome, Italy, Generalate of Order Servants of Mary Servites!) The above excerpts form an article by Marie Sharp, Evening Press, Aberdeen, Scotland, April 30, 1991. Reprinted in International Compassion Newsletter, August, 1991.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">NUN IN SOUTH AFRICA <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I want to thank you for praying for my daughter who is a nun in South Africa. She had an operation on her eye and is now back teaching in the University. She said she sees very well. She thanks you for all the prayers.</p>

                                        <p>SOUTH AFRICA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">3-YEAR-OLD HEALED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>With great joy I write to you today. My three-year-old son has been cured of a heart defect! My mother attended your Healing Service and prayed to the Holy Spirit to heal his heart without surgical intervention. You prayed over her an the Holy Spirit granted us this wonderful grace. The cardiologist said that for this defect to heal itself is incredible. We thank you for your prayers! We especially thank the Holy Trinity for watching over us and answering our prayer!</p>

                                        <p>TEXAS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">COULDN’T EAT, WALK OR TALK <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I suffered from a stroke two years ago and couldn’t eat, walk or talk; and I was on a feeding tube and down to 99 pounds. Now, I’m eating, talking and walking, not good, but I’m doing it. And I’m up to 134 pounds. I think the only thing that helps is the Miracle Prayer. I tell everyone about it. I want to attend your Healing Mass when you are close to home. As I don’t drive, it is hard to depend on people all the time.</p>

                                        <p>I thank you for all your prayer and the good things you do for so many people.</p>

                                        <p>MICHIGAN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PRAYER SAVED HIS LIFE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I want to thank you for your prayers for my husband. He is now recovering. He was seriously ill. In the past he has had two by pass surgeries and this time he w as inoperable. The doctors tried medication which was partly successful. His last option was laser surgery on his heart. He came through surgery fine. He also had an aneurysm which had to be repaired then internal bleeding and later his heart almost stopped. His heart had to be shocked back to normal. Thanks to you for your prayers. He is now at home recovering. Thanks again. We all know prayer is what saved his life.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A FR. ROOKEY “ADDICTION” <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>My mother was diagnosed with breast cancer 2 years ago. She attended your Healing Mass before her surgery and you blessed her. The doctor felt that chemo and radiation would be too much for her as she was 92 at the time. However, because of faithfully attending your Mass each month, she is doing fine!</p>

                                        <p>My family and a friend attend your Mass each month and sit in the fourth pew from the front. We are addicted to you and have such an awe in your presence.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BACK BETTER AFTER EIGHT YEARS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>At your Healing Service when I returned to my pew in the kneeling position, I thought something was different about me, but wasn’t sure what it was. I thought it might have been my uplifted spirit.</p>

                                        <p>I soon realized that I was kneeling on both knees, without any pain in my back This was surprising to me, because I have had to kneel on one knee since I had a compression fracture in my back about eight years ago.</p>

                                        <p>The next morning my back was completely fine. I let my wife know that my back was indeed healed. She said, “He may have healed your back, but your snoring still remains.” Leave it to my wife to bring me back to reality.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GOOD NEWS SPREADS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>A few years ago I was at a Medjugorje Conference and a man gave his testimony that his wife and others persuaded him to go to Medjugorje for a “vacation” as he was dying of Crohn’s disease. He said he had lost most of his belief in God and his Catholic faith (but his wife and family had a strong faith).</p>

                                        <p>He said in Medjugorje there was a “Servite priest” who prayed over him with a cross that had relics in it from the founders of the Servite Order. He said he was “slain-in-the-Spirit” and lay on the ground along time feeling waves of energy going through his body and he was completely healed. Now that I’ve met you, I am wondering if the priest the man spoke of was you?</p>

                                        <p>Anyhow, I have lost a lot of my fear and anxiety since attending your Mass and corresponding with you. Your intercession is most powerful with God and His Mother and the Communion of Saints.</p>

                                        <p>I love you and thank you with all my heart for your prayers and correspondence.</p>

                                        <p>CALIFORNIA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="exorcism-1" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">UNPLANNED EXORCISM <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>An impromptu, unscheduled and unplanned “exorcism” was performed after a Healing Mass led by an internationally known healing priest at Our Lady of Mt. Carmel Church in Doylestown, Pennsylvania on the night of January 20, 1992.</p>

                                        <p>Over fourteen hundred people had attended a “Healing Mass” conducted by Fr. Peter Mary Rookey, A Servite Priest from Chicago, and most all of them had received form him the special blessing known as “laying on of hands.” After the services, a young man began yelling and screaming violently and acting strange and had to be held down on the altar by at least four strong men. The paramedics were called but soon realized that they really couldn’t be of any help, for the man was apparently “possessed” by an evil spirit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">EXORCISM PRAYERS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Fr. Rookey was preparing to leave, when someone summoned him to come and “do something.” He hurried back to the altar and put the same Cross he had used for the healings in front of the young man’s face. He screamed, he growled, he snarled and spat on the priest and the Cross as at least forty people watched helplessly. The priest was now convinced that the man was taken over by an evil spirit.</p>

                                        <p>Fr. Rookey then began to exorcise Frankie (not his real name but we’ll call him Frankie to protect his privacy), using his Cross containing relics of the Saints and Blessed of his Order of the Servite Fathers, holy water and blessed oil and the prescribed exorcism prayers of the Catholic Church. The alleged demonic activity was similar to what was shown in the movie,” The Exorcist,” only now it was really unfolding right before our eyes. Not one of the forty worshipers left eh man’s side. They stayed there until the very end, praying every prayer they knew over Frankie.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">A PICTURE OF HATRED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>The man, allegedly, possessed by an evil spirit, or a demon, snarled and growled and spat upon the priest and the Cross and others around him. He stuck his tongue way out n a point and shook it. He could not even bear to look at the Cross. He screamed out things like: “Get that man away from me. Get that Cross away from me. I hate him.” He spat again and again on the priest and the Cross, and screamed and growled and twisted his face and body into terrible contortions, rolled his eyes and crossed them repeatedly, and stuck his tongue out and shook it violently like a snake. The face, especially the eyes and the mouth, was a picture of hatred. Then there were moments when Frankie appeared to be in control and would say in his normal soft and gentle voice: “What’s happening to me? “I’m sorry for this.” “Am I gong to die?” He would burst into tears, and then the tongue would go out again, the eyes would roll, the voice would change and the demon apparently would take control again.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">LAYING-ON-OF-HANDS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>It all began when at least a hundred and fifty or more persons out of the more than fourteen hundred who had received the “laying-on-of-hands,” received the :gift” that Catholics call “resting in the Spirit.” To describe it briefly, after the “laying-on-of (healing) hands” some recipients will just collapse into the arms of a “catcher,” who is positioned behind the recipient to gently let the person go down flat on his back. It is similar to fainting, except that the person retains consciousness and is aware of what is going on around him. Catholics believe that the Holy Spirit actually takes over the person’s faculties at that time. It generally lasts from a few seconds to over a half hour or longer. Frankie was among those who “rested in the Spirit” but failed to come out of it and became violent.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">TWO HOURS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>The exorcism went on for at least two hours with the forty witnesses saying every prayer they knew, and bringing out relics, medals, Crosses and Rosaries, including a gold-turned one form Medjugorje, the now famous village of the on-going ten-year-old apparitions of the Virgin Mary in Yugoslavia. One lady had a relic of Padre Pio, the famous stigmata priest, and a man even had a mixture of holy waters from Medjugorje, Lourdes, Fatima and the Jordan River where the Bible says that Jesus was baptized. The alleged demon seemed to suffer the most when Fr. Rookey poured the holy water into the man’s mouth and on him, and put his Cross in front of his face. Catholic literature claims that the Cross, or Crucifix, and the Name of Jesus spoken, is most terrifying to an evil spirit. It also states that “Sacramentals and blessed objects are also effective remedies.”* However, there appeared to be a turning point when Fr. Rookey took the Medjugorje Rosary and touched it to the man’s head, throat and lips, and called on the “Lady of Medjugorje” to expel the demon. All of the forty witnesses joined him in chorus.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">ORDER OF EUCHARISTS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>After about two hours the alleged demon apparently gave up and left the man’s body. Frankie, totally exhausted, was finally able to stand up and leave the altar. Fr. Rookey said later that “possession” occurs often after Healing Services and recommended that Frankie attend another Healing Mass the next evening and attempt to locate an exorcist in the Archdiocese to continue the prescribed prayers. He told about a case where a lady was infested with five demons and he was able to identify only one who said he was Lucifer, and that it took a year for exorcists to expel the demons.</p>

                                        <p>The Church early instituted the Order of Exorcists and later composed formulas of prayers to be employed by those in the exercise of their office. Since the office is an extremely difficult one and presupposes much knowledge, virtue and tact, its solemn exercises has been restricted to priests expressly deputed f r that purpose.* According to some sources it is difficult to obtain an exorcism in the U.S. One author states: “It’s unfortunate, but in the U.S. we have to go through a lot of red tape to get help for the poor victim. It takes three to four years before the Catholic Church will even take notice of them.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">LAW OF LOVE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Fr. Rookey explained that in order to propagate his healing ministry, he must spend several hours a day n prayer, and indicated that he fasts a lot on bread and water. Although he is not in the Order of Exorcists, he was well prepared for this unscheduled one by virtue of his healing ministry. He also explained that canon lawyers agreed with him the “love” is the supreme law, and the “love” dictated not to just leave the man there suffering. Thus, his reason for carrying out the exorcism as he did.</p>

                                        <p>Frankie indeed attended the Healing Mass the following evening at St. Vincent Palloti’s Catholic Church in Hadderfield, New Jersey. Fr. Rookey, a devout and very holy man with a sense of humor, again opened the services with a couple of one-liners that he got from his good friend Bob Hope, like: ”Where’s the one place a person can go and get the warmest reception of anywhere else? Why it’s hell, of course.” And,” I’ve been a priest for over fifty years and they still call me ‘that Rookey Priest.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SPECIAL BLESSING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Frankie came up to the altar again at St. Vincent Pallotti’s Church, surrounded by his entire family, and received the special blessing from Fr. Rookey, and again he “rested in the Spirit.” But this time he came out of it with no problem and no demos. He was cheered by the five hundred fifty participants when he got us to witness and tell his story of being “possessed” from the night before in Doylestown. Frankie had ”beat the evil” and apparently now had been healed. Evidently, the demon in question was sent back to receive a “warm reception.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">AT OUR LADY OF MOUNT CARMEL <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I am writing this letter to testify to God’s power and His Mother’s love for all of us. May the Hearts of Jesus and Mary be praised!</p>
                                        <p>My name is R.S. and I am 21 years old. Since late 1987, I had been suffering from a chronic depressive state. For the first couple of years it was manageable, but by the beginning of 1990 it was so severe that it rendered me dysfunctional for almost two years until January 20, 1992. It was on this day that God chose to liberate me from the hands of despair.</p>
                                        <p>Although I had suffered many difficult experiences in my life, this prolonged depression was an absolute hell on wheels. I constantly prayed to Our Lady for deliverance. When I received letter from the Messengers of Mary saying that you were going to be at Our Lady of Mount Carmel in Doylestown, Pennsylvania on January 20, 1992, I knew that Our Lady and Providence had reserved my healing for that day because I was born on the feast day of Our Lady of Mount Carmel and I had a devotion to St. John Neumann who founded the Church building itself.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">WIND FLASHES BY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p> After having gone to Confession, I prayed the Rosary, then went to Communion. While kneeling and thanking God for the grace of having been able to attend the Healing Service, I began getting a strong inner sense of peace that no matter what would happen at the Healing Service, whether I was healed or not, I would be taken care of by the Lord.</p>
                                        <p>With this in my heart I went up to the altar to be blessed by you, dear Father, I was one of the first people to be anointed in the whole Church, which was packed. When you came up to me I said to myself that I was gong to try not to fall since I was intimidated by the idea. I had never been slain in the Spirit before. Even though I resisted vigorously, when you said the final words of prayer I felt a wind flash by me and I could stand no longer.</p>
                                        <p>As I remained on the floor I was not aware of time or space. I was very much at peace. When people would walk by me and their clothes would brush up against me, I remembered where I was. After about 15 minutes or so I attempted to “snap out of it” and get up with the help of my mother. As I sat up, an overwhelming feeling of peace overtook me and I fell back on the floor again. This happened several times By the I realized God wanted to work on me, so I let go.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">UNCONTROLLABLE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>I began receiving “Divine Therapy” as I would see painful scenes from the past and I would feel God’s love healing them I began to cry uncontrollably. My whole body became warm. This went on for quite a while. My mother became very worried because of my loud and uncontrollable crying and she would try to make me get up again. It was useless.</p>

                                        <p>I remember consciously hearing the people gathering around me after the Healing Service was over. Then I realized that I had to get up. The more I would try to get up the more I would feel forced back to the floor. I became very anxious and embarrassed in front of the gathering crowd.</p>

                                        <p>Father, you then came to me and began praying over me. At first everything was fine. All of a sudden, I began feeling very sick physically. I felt something coming over me in waves. My body began to contort uncontrollably. My tongue started coming out of my mouth and my eyes would roll back. At all times, the people around me would pray.</p>

                                        <p>When I would become more aware of what was happening I would panic because I could see my mother crying, then I would go out again. Father, you then blessed me over and over again with your Cross. An anger would well up in me and I would scream wildly.</p>

                                        <p>By now, whenever I would come through I would start thinking that this whole thing was a dream. It was too scary and awful to be real. The people around me made me drink holy water in these lucid moments; then I would start throwing up the holy water and cursing.</p>

                                        <p>I don’t like to say these things because my will was to stop them from happening, but they were really uncontrollable.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FIST AT FATHER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p> By now, several hours had gone by and this ordeal was not ending. All I wanted to do was get up and go home. I would start crying before this “devil” would take over again and cause me to be violent. At one point when the devil was getting weaker I would find that I could control my legs but my arm was still being controlled by this magnetic force. That is the best way to describe it. It was if there was a field of magnetism gluing me to the floor and forcing my hand to make a fist and swing at you, Father. At times when I would really go under its control, I would start spitting at you and the Cross. When I fully realized this, I would fight even harder to stop these things from happening. At one point I actually thought it was not going to end.</p>

                                        <p>But, thank God, you persevered and the oppression lessened. All in all it took approximately 3 ½ hours for me to come out of being slain in the Spirit totally. When I was going home I could actually sense a big change for the better in my emotional health. I felt unburdened and relieved. Upon your advice I went to see you again the next day, Tuesday, January 21, 1992 at St. Vincent Palotti Church in Hatboro, New Jersey. All day long my family and I prayed for a sign that I had truly and fully been delivered.</p>

                                        <p>After Communion, my face and hands began to burn and I felt as if I were going to collapse on the pew during the final last minutes of the Mass. I knew I my heart that I shouldn’t fear because God would once again prove His love for me.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">OUR LADY’S SIGN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>When I went up to the altar, I stood beneath the statue of Our Lady and begged her for a sign that the grace had fully been granted and that I had nothing to fear as far as any recurrence of the demonic influence on me. A few seconds after making this petition, a burst of fragrant roses broke out. It was very intense! I knew that was Our Lady telling me I would be all right.</p>

                                        <p>When you came up to me, Father, you immediately recognized me and you prayed intensely over me. I was slain only after repeated prayers on your part and the applications of the Blessed Cross to my forehead. This night though I arose seconds after being slain, you prayed over me again after I stood up but nothing would happen. I then smelled the roses again! The grace had it been granted—I was all right.</p>

                                        <p>It has been almost a month since I was delivered from demonic oppression and my psychological state has improved drastically. I believe Our Lady is healing me according to God’s schedule. My concentration and mood have improved very much. I can get by day after day now without a constant sense of despair. I do believe that when the evil spirit(s) was/were exorcised, my mind was allowed to heal. The Lord knows that He’s doing and I praise Him and thank Him and His Mother for having sent you to me.</p>

                                        <p>Ave Maria & God Bless You,

                                        <p>Love, R.S.</p>

                                        <p>This account appeared in The International Compassion Ministry Newsletter, February, 1992—Used with Permission.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="young-people" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">4-YEAR-OLD HEALED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I first saw you in Medjugorje when my husband and I were there on a pilgrimage for the Anniversary in June 1991. I was a skeptic until I saw people who never walked, get up and walked and push their w heel chairs, after you blessed them. I saw people see, after you blessed them. I saw people cry as they were healed after you invoked Jesus and prayed over them. My skepticism was at an “all time high” as people fell I watched in amazement—all this being new to me. I even caught the people as they fell so I could join in God’s love.</p>

                                        <p>I was praying for a little 4-year-old girl whom I did not know only that she had cancer. She was operated on in January of 1991 and was found to have cancer. Her neighbor asked me to pray for her. I decided to get in line for your blessing for the 4-year-old but we were stopped as it was time for Mass. I was crushed.</p>

                                        <p>However, on the way out of the tent, one of the priests with your group was leaving and I thought I would ask for his blessing. He did not turn away. I went out like a light and knew as I reposed in the tranquility that she would be all right. The little girl was operated on in August 1991, as her family burned the remainder of the candle we brought from Medjugorje (that we had burned on Apparition Hill during Our Lady’s presence at the nightly prayer group). Her doctors found no cancer. Her young mother, who is a non-Catholic, and a beautiful witness to God’s power and grace, gave praise to Our Lord for His wondrous works!</p>

                                        <p>PENNSYLVANIA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">NO TUMORS ANYMORE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you for all your prayers and blessing! And that card you sent of you blessing the little boy brought tears to my eyes because the little boy looks just like my son. I am so happy be cause all of his tests came back OK. There are no signs of tumors anywhere.</p>

                                        <p>OREGON</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">DETERIORATION REVERSES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>September 1993 you came to my home to prayer with my grand-nephew, age 9, for an inoperable brain tumor, his viision and the upcoming chemo treatments.</p>

                                        <p>We are aware that often after intense prayer, a situation or person gets worse before getting better. It’s like Satan’s last stand. Yes, my grandnephew deteriorated rapidly, and was extremely close to death by the end of that December, and the chemo wasn’t helping. He wasn’t able to eat, had difficulty swallowing and was able to take only small, small amounts of fluid. He was sleeping round the clock with about an hour or two of awareness.</p>

                                        <p>Much to everyone’ surprise, he gradually began to improve and improve. The tumor is still these and the medical prognosis was/is “never has a child lived this long with this size tumor.” They haven’t known, nor do they still know, how or why he lives. But Joseph lives! He is in the third grade, in a special program and progressing very well. He has a little better vision and has a very loving and sweet disposition. When I am near him, my heart receives the presence of Jesus in him.</p>

                                        <p>Fr. Rookey, the first time you prayed with him he was only 4-years-old and wasn’t expected to live past Christmas of 1990. Last year was the 4th time you prayed with him and each time Jesus chose to do healing that cannot be described medically.</p>

                                        <p>How grateful our entire family is to God for his continual love and healing ! We Thank you and Jesus! Alleluia!</p>

                                        <p>MISSOURI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GRANDMOTHER GIVES THANKS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I want you to help me as you did my grandson. He is perfect. Praise and thanks to t he Blessed Trinity and thank you for asking Jesus to heal him and make him well.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">PRIESTLY VOCATION CONFIRMED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I wish to share my experience.</p>

                                        <p>I was fortunate enough to attend your Healing Mass in Florida last month.</p>

                                        <p>During the Consecration of the Eucharist, I actually saw a brilliant light surround the Host, and then it surrounded you, Fr. Rookey.</p>

                                        <p>It was a revelation to me. You were one! Jesus was One with you. This was important for me, as I am discerning a vocation to the Priesthood, and God showed me the Priest is Jesus. Afterwards, you prayed over me, and the Spirit gave you words of great healing for me and confirmed my vocation.</p>

                                        <p>I am grateful for your “Yes” to our Lord’s Call.</p>

                                        <p>FLORIDA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">BABY TALKS NOW <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you for sending the cassette tape of “Let Me :Live/” I have enjoyed it very much.</p>

                                        <p>The last time you were here I brought a friend who has a grandbaby with a lot of health problems. At the Mass the baby was trying to get his mother and my friend to see the angels in the ceiling. The doctor said that he would never be able to talk. He talks now and a lot of other problems aren’t as severe as they were before. I felt through you, God is helping the baby and his mother. They are a happier family now because of you and your ministry. That visit to your Healing Mass started them back to church.</p>

                                        <p>The last time I saw you I felt you were tired and needed to rest yourself. I prayed God would give you the strength to continue your good work for everyone.</p>

                                        <p>GEORGIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A HAPPY SURPRISE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Maybe you will be surprised to receive a letter from the Netherlands.</p>

                                        <p>Time flies quickly. In May 1991 I was in Medjugorje for the seventh time. There I met a Belgium religious (you have also met her). Her family told me about your help in Medjugorje. It was just the last day before I left. It was a great mercy for me t o receive your salvation and help. The Holy Spirit sent me to you, Father. I had a tumor in my small intestine; also behind my ear. I was so very happy to meet you. I didn’t understand all that you said you spoke too fast, but inside I was understanding.</p>

                                        <p>The Spirit of power came over me. After this, I met you again for a short conversation. You laid your arm around me to embrace the Holy Cross.</p>

                                        <p>The Gospa asks us always to “pray, pray, pray” in her messages. Somebody gave mea little print from you. I say this prayer everyday. In my mind I see your Holy Cross and feel the Holy Spirit. I saw a girl walking again and a little boy who has a light again in his eyes. There were very great miraculous signs. I was so happy to see it. I’ll never forget that you did this holy work in the Name of the Holy Spirit.</p>

                                        <p>I wish you more and more the Holy Salvation and Power for all the people.</p>

                                        <p>HOLLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">MOTHER AND SON HEALED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am writing you this letter to thank you for curing me last June. I was getting tested for cancer and one doctor told my husband that I had it. So I was sent to the hospital for scans and while I was waiting for results of my tests, I went to almost every priest in the country. Then I heard that you were nearby and I went down to see you. I begged you to cure me and to let my tests be clear. I went up to the altar to you and when you touched me, I fell to the floor. I think that was my cure. I went back to the hospital and the doctor told me that my tests were clear. Thank God and you, Father, and all the other priests for curing me.</p>

                                        <p>I also asked you to pray for my son, that he would give up the drink, because he was very fond of it and thank God, he is off of the drink. Again, I thank you very much.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TEENAGER HEALED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Back in October of 1993, I wrote asking you to please pray for my son-in-law’s niece, that Jesus would please heal her of Cystic Fibrosis. I’m enclosing the note I received from her mother.</p>

                                        <p>“I was quite overwhelmed when I received your gift of love and prayer and I know that the prayers are having a great impact. After having a year of much illness, she has been enjoying a very healthy year and has so far not been hit with a cold or subsequent infection—which is pretty amazing.”</p>

                                        <p>Praise Jesus, to date she is doing fine. The teen years are every crucial for C.F. patients. She is a very lovely girl of fourteen. Please, dear Fr. Rookey, whisper a prayer for her continued good health.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GIFT OF HOPE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I was with you in Medjugorje and in Mexico. Do you remember me? I am better even though I don’t walk, and I am requesting you pray for me so that very soon I may be a completely healthy boy.</p>

                                        <p>I love you very much.</p>

                                        <p>MEXICO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">POWER OF PRAYER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>When my son was 19 months old he was diagnosed with a brain tumor. In February, 1989, he had his first surgery and then chemotherapy. In September 1989 his tumor was back. They operated again and told us radiation was out only hope but they didn’t think it would work. He was unable to eat, walk, or talk. In January 1990 we went to see you at the Church and you blessed him. About two weeks later he told us Mary talked to him and said she was going to take his tumor away. That kept our sprits up.</p>

                                        <p>He went for a test in March and his tumor had shrunk. In July 1991 he had this third surgery. Before surgery his father and I told God His Will be done, that we would understand. The surgery went well and it was not a tumor but a cyst. We felt the Lord test us and we passed.</p>

                                        <p>Our son is very special. He has gotten our entire family back to Church. Even his doctors and nurses are praying now. They feel that our son is with us because of the Power of Prayer.</p>

                                        <p>OHIO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">REFRAIN: BRAIN OK <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I would like to tell you that my daughter who was to have brain surgery is very well. She had a letter from the surgeon telling her all was clear. Instead of having to go every six weeks, it was now every six moths. It is great and we want to thank you.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GRATEFUL MOTHER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you for the comfort your blessing has brought to me. My son who was a drug addict has returned to London cured; my second son is no longer gay and has returned to God; my eldest son has started going back to Mass; my daughter started to teach her children to pray.</p>

                                        <p>Since that Wednesday when I was privileged to see you, I go every morning to Mass. Once again, I thank you with all my heart.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GRATEFUL FATHER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am writing a long overdue letter t you to express our thanks for all the prayers that you have prayed for our son. If you recall, I phoned you in October to ask for your prayers for our son who was born fifteen weeks early and weighed only one pound, thirteen ounces. I am very pleased to tell you that he has made remarkable progress and now weighs in excess of ten pounds.</p>

                                        <p>He is now six months old and getting stronger every day, thanks be to God. Once again thank you and ask for your continued prayers.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PARENT-CHILD HEALING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Praise Jesus! Thank you, Jesus! Thank you, Mary! In May 1994 you prayed over me and my four-year-old son for Jesus’ healing. I had suffered for four years with chronic sinus infections. My four-year-old son had suffered since birth from serious ear infections. He was losing his hearing and it was beginning to affect his speech and learning.</p>

                                        <p>On the way home I received word from the Lord that we had both been healed. We immediately stopped all medication that night and have been completely cured every since!</p>

                                        <p>The pediatrics doctor who treated my son asked if we were still practicing the holistic medicine. Let him tease and disbelieve, but I only have one answer: Praise Jesus! Thank you Jesus!</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SMILING ON HIS FACE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you so much for the beautiful card and those special words for your powerful prayers. I’d like to share these past few days with you.</p>

                                        <p>The person I told you about is doing much better. Praise God! Every time I see him now there is more smiling on his face an there’s a difference in his attitude.</p>

                                        <p>He came to see me last evening and I showed him our card and what you had written. He was truly touched. He took your Miracle Prayer card and Our Lady’s Memorare.</p>

                                        <p>Father, I can’t thank you enough. If this young man’s life can be changed because of his attending one Healing Service, that’s a real reason to celebrate. As the Gospel says and reads: “My prodigal son has returned.”</p>

                                        <p>If only I can save one soul. I truly can see he’s reaching out and I’m very gently leading him to Our Lord Jesus and Our Loving Mother Mary.</p>

                                        <p>May Our Savior Jesus and Our Heavenly Loving Mother Mary bless you always.</p>

                                        <p>LOUISIANA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">AT DEATH’S DOOR <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you so much for your letter, also newsletter and your book. I was happy to hear from you.</p>

                                        <p>I have a daughter who is a nurse and works at a children’s hospital. One night she rang me, very excited. She said, “ I have great news about Fr. Rookey.” She went on to tell me about the young boy in a coma, brain damaged, for months. There was not hope from the doctors. They said he would die. She said, “Fr. Rookey came to the boy, prayed over him and he was healed and is now at home.” She visits his home now and tells me she is waiting to met you next time you come. She was very excited as I had told her how I witnessed the healing of the young nurse, Heather Duncan, in Medjugorje. Praise the Lord!</p>

                                        <p>May God and our Blessed Lady keep you safe and bless you always in your good work.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A NEW CREATION <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am writing to give my belated thanks and praise to Our Heavenly Father and to His Son Jesus for the healings I received and I am continuing to receive even now. I am a 26-year-old Kenyan lady who had a serious moral problem He healed me, Father. He renewed my life. He made me a new creation and has made me a fervent an diligent youth. He’s changing me every day, and in so many ways has strengthened me. He has filled me with immense joy and love For the first time in 26 years, I see His presence in every bit of my life, encouraging and correcting, loving and picking me up, upholding and leading me. Oh, Father, it’s so amazing. I will praise his Name now and forever. I am working very hard to grow in this new life He has begun in me.</p>

                                        <p>AFRICA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TEENAGE SPEAKS OUT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>When we found out that you would be giving a Healing Service, we took my father out of the hospital that evening to see you. My parents went up to receive a blessings, but I did not. Why? Because I was mainly frightened by the amount of people “falling over.”</p>

                                        <p>Two weeks later, I saw you again and you blessed me and I rested-in-the-Spirit. It was an amazing experience. I told my family I felt at peace, all my worries had disappeared and I felt great!</p>

                                        <p>Since receiving his first blessing, my father’s condition has improved considerably.</p>

                                        <p>As well as helping my father, I’d like to thank you for helping me. Before I met you, I never really prayed. I guess I never saw the reason why. But I can now heartily say that since meeting you, I realize the reasons to pray: for love, for peace, for healing, etc. I’m the youngest of a family of six and I’m seventeen years old. I now say the Rosary every day as well as your Miracle Prayer, which is beautiful. I bought your book and I read all 176 pages in 2 1/2! The best book I’ve every read! Your story in the first chapter brought me to tears! You mother’s strength and determination were admirable and made me smile again.</p>

                                        <p>Perhaps you’re wondering how a 17-year-old can have such a strong belief. Well, I only realized the depth of my belief when I saw you lay your hands on people in wheelchairs who have walked again, when you have blessed people with incurable diseases who have been cured, when you have blessed deaf people who have heard, and when you blessed ordinary people like me who have rested-in-the-Spirit.</p>

                                        <p>You have a gift that God has given you and although, like I’ve said before, other people may admire pop stars or movie stars, I admire you above all. You have devoted your life to helping others and curing others.</p>

                                        <p>May the Lord continue to bless you in the special way He has. Thank you once again.</p>

                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BOYFRIEND TAKING INSTRUCTIONS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>The young man who was at the dinner at the last service that you asked to write to , in snow taking Catholic instruction. He is the boyfriend of my daughter, the doctor present at the Service. Oh, when I first met this young man, I did not care for his attitude, personality, etc., but I tell you that over the past year he has changed dramatically and is a wonderful young man.</p>

                                        <p>After you played Happy Birthday, he described a sense of well being, peace and the presence of the Holy Ghost. It happened to be his birthday.</p>

                                        <p>My blood tests for AIDS have all come back negative. Though I was quite ill, I am now improving. I emphasize to my wife and children the importance of God in our lives, and to thank Him for our blessings , each and every day, for our good health, and for the schools they go to, the home they live in an the food they eat. These are gifts given by God Himself.</p>

                                        <p>NEBRASKA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="signs-of-hope" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">FROM NASTY TO HAPPY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>At Holy Week ’91 some friends of mine were going to Medjugorje and asked if I had any petitions that I would like them to take to Our Lady. I wrote out my petitions, one of which was if I was to suffer great pain for Our Lady to help me do so as I was getting short tempered and plain nasty.</p>

                                        <p>I felt a great sense of joy and happiness when you entered our little Church. I knew Jesus was present with us, and all thought the Mass I could see you clearly even though I am not a total person.</p>

                                        <p>As we were saying the Rosary, I cried. I had two of my boys with me and they asked why I cried. I told them I didn’t know. Then I felt a tingling that started in my feet and went slowly up my body and it stopped at my shoulders and head. I was certain I would faint.</p>

                                        <p>I never fainted. But when you blessed the congregation before you said Mass, some holy water hit me on my head and the tingle stopped with such force I wobbled in my seat. All pain left my neck and shoulders at that time. I have felt nothing since. I thank God that I have been allowed a little extra time to be able to care for my family as I would wish.</p>

                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">PRAYING WITH SEVEN HOLY FOUNDERS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>About four weeks ago I was getting discouraged about praying for my daughter who has been very nervous. I pray for her and her family constantly. When I went to sleep I kept praying.</p>

                                        <p>I know God heard me but I want to share this because it its quite unusual. I saw in my spiritual mind the Seven Holy Founds that I saw on your Golden Jubilee card—exactly like they were—all together. They were praying the Hail Mary as if I were to join in their prayers and I did. I was very happy that they wanted me to know they were praying for my need. I thought it was a beautiful way to let me know. I wanted you know because I feel it was very special.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">A RECOVERING ALCOHOLIC <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>My husband is an alcoholic. It has been a problem now for some years. He has been in the hospital on three occasions as a result of drinking.</p>

                                        <p>He couldn’t see or admit that he is an alcoholic. Everyone in our family and his doctor did everything possible to help him but without success.</p>

                                        <p>Some years ago my mother gave me the Miracle Prayer, which I have been saying. I never gave up hope. When we heard you were having Healing Services here in Ireland, we both wanted to attend.</p>

                                        <p>My husband had taken alcohol on that day and later that night before your service was ended, he had to go for more drinks but made it back in time for your blessing. I was angry at this time—which I have felt on lots of occasions—but I knew there was nothing I could do.</p>

                                        <p>The next day he was annoyed with himself. He felt he missed out on something that evening. We found out you would be at another place Sunday afternoon and we went there. My husband had taken a very little drink and felt much better. He was also saying the Miracle Prayer.</p>

                                        <p>About three weeks later the Consultant at the Alcohol Unit asked him to go in for treatment and he went very willingly. Well, Father, everyone who knows him has been more than surprised. He is a changed person completely. I know it will be a lifetime struggle for an alcoholic but with God’s help and saying the Miracle Prayer we will get through. Thanks again.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SOMETHING FUNNY? <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>May 4, 1991, found me here at home with terrible pain in my back and legs. I had made up my mind to call my doctor and tell him I was ready for the operation that he had said I was to have. That same night I had promised to take my friend to see you.</p>

                                        <p>The pain got progressively worse so that when it came time to stand for the laying-on-of-hands I thought I would not be able to make it. Before I gave up and sat down, you came an laid your hand and the Crucifix on my head. The next minute I was on the floor. I was really frightened since I didn’t believe this could happen to me. Fortunately, the hand I held my Rosary in worked and as I squeezed my Rosary, I asked God for the blessings I needed—such peace and closeness to God I never experienced before.</p>

                                        <p>On the way home I told my friend something funny was happening because the pain was leaving. She mentioned that maybe I was cured. I said this happens to other people, not me.</p>

                                        <p>Thank goodness, she was right. God came to me through your healing hands. Thank you Father, for being there.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">OVERWHELMED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I attended the Healing Service at Church and was so inspired that I also attended the Healing Service the next day at college. I have been overwhelmed with emotion and a certain peace every since.</p>

                                        <p>I thank God on behalf of all those who have been touched by your wonderful faith in the power of prayer, and pray that you will continue to touch the lives and hearts of people for many years to come. We can all learn so much from your humble loving attitude and obvious love of life.</p>

                                        <p>AUSTRALIA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">POWERFUL SPIRIT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>What a powerful Healing Service we had last night. To see that woman get up out of her wheelchair after your praying over her; and pushing her grandson, who took her place in the wheelchair, down the aisle to the church entrance, was awe-inspiring to say the least. Many inner healings occurred last night.</p>

                                        <p>Personally, another marvelous miracle was that at he blind guitarist and I, who had never performed together at a service, hit it off just great! People said the performance was intensely edifying, along with the Pastor’s spiritual reflections and singing from the pulpit during the three hour Healing Service. What a fabulous spiritual evening that was! I praise Our Lord and His Magnificent Mother, Our Lady, for the night of spiritual glory. Jesus be praised!!</p>

                                        <p>OHIO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PRAISE TO THE LORD!! <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I had read a book on healing and had a great desire to have the laying-on-of-hands. When they told me of the Mass and the laying-on-of-hands by you, Fr. Rookey, I went with great enthusiasm and faith in God.</p>

                                        <p>I went every day and there was a great change within me—from sleeping six hours during the day, it was gradually reduced down to no sleeping during the day at all.</p>

                                        <p>I feel well. The size of my tumor has diminished. I had an interior as well as physical change since I feel the presence of the Holy Spirit at prayer whether at home or in Church. My gratitude to and faith in God have much increased. I feel near to God and His Virgin Mother.</p>

                                        <p>Changes were also seen by several member of my family. The arthritis in the neck of my father is greatly lessened and he feels better. Two other relatives experienced profound peace.</p>

                                        <p>I am grateful to God for what He has done for me and also for you, Father. If it was not for your enthusiasm, perhaps there would not have been this very intense change.</p>

                                        <p>Praise to the Lord and thanks for everything!</p>

                                        <p>MEXICO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">THE DEVIL FLEES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>My dear sister was persuaded by a friend to visit Medjugorje last year in an effort to help her following the death of her nineteen-year-old son who was killed in a pot-holding accident.</p>

                                        <p>On arriving in Medjugorje she was told that you were present and her friends dearly wanted her to see you to be healed. She refused. Her friends persisted. Over the next few days she prayed that God would give her some sign. During the following night she dreamed that she saw her son. He was very unhappy and sad and was bound in chains. A friend explained that she had not “let go of him after his death and would not let him rest in peace.</p>

                                        <p>Again, her friends prayed that she would need to go and see you but again she said no. The following night she again had the same dream. She felt this was God’s way of showing her that she should be healed and eventually she agreed to go. I cannot give full details of what happened but she says she saw the devil and was very frightened and then felt a great warmth go into her body and she saw a beautiful gold Cross at a distance which came closer and closer to her an then she passed out.</p>

                                        <p>On returning from Medjugorje her husband and family were amazed at the change in her. She said she had found a peace of mind which she didn’t think was possible. The terrible pain in her heart had gone and she was so very grateful for the peace which had replaced it.</p>

                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">RAINBOW EXPERIENCE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am writing to you personally to thank you for the most wonderful experience I have had in my life. I was one of the congregation on the evening of the 29th of April 1991. I shall never forget the wonderful expressions of the people who were healed that night. I myself am not one of those physically ill.</p>

                                        <p>I had a nervous breakdown four years ago due to my marriage breakdown and then the death of my father.</p>

                                        <p>I really must thank you once again after the touch of your hands on my head. I felt as thought Jesus had made me feel more confident and was reassuring me that life can be so wonderful. Just to be in a certain place at the right moment when I felt His presence all over me in the Cathedral. I felt He had answered my prayers after all the years I have prayed. I am now 35-years-old.</p>

                                        <p>Dear Fr. Rookey, you shall ever be in my prayers too.</p>

                                        <p>SCOTLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BUBBLES OF JOY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you, thank you, thank you! For the first time in my life I “saw” and felt the power and mercy of the Divine Mother of the Universe. I am filled with a heat like fire in my heart and bubbles of joy fill me from top to toe.</p>

                                        <p>May we love and honor you as you deserve and never forget in Whose Heart we live.</p>

                                        <p>INDIA</p>

                                        <p>Check for title</p>

                                        <p>Dear Fr. Rookey,</p>

                                        <p>I was so delighted to hear your lovely voice on the phone. It was two a.m. It was so good of you to go to all that trouble. My husband was very happy after you prayed with him. Today he is out saving the hay after months not being able to work. Thanks be to God.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BLESSING BY PHONE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you for talking and blessing my husband over the phone. His legs are much better.</p>

                                        <p>I do believe you helped me just speaking to me for those few minutes. I had pain in the stomach and it left me Thank you, Father.</p>

                                        <p>NEVADA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">EYE ADVENTURES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>In January of this past year you were at a Healing Mass in our parish.</p>

                                        <p>Two days before, I had an operation on my left eye for a detached retina. One of my nurses found my Rosary on the sheets under the pillow and told me where to find you.</p>

                                        <p>Tuesday of the next week my doctor was ecstatic. HE told me I was six months ahead in my healing and he dropped many of the medicines. I had been prescribed to take. I declared a miracle and he didn’t disagree. One of the nurses said she wished everyone coming in had such good news. I am continually amazed and grateful for all the blessings and graces God continues to pour down on me and the members of my immediate family.</p>

                                        <p>I think about you and pray for you often. Thank you for being a priest!</p>

                                        <p>WISCONSIN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SCIATICA CEASES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>This summer you were at our Church and, thanks be to God, your good self and Our Blessed Lady, you cured my of a very painful sciatic.</p>

                                        <p>I would like you to know how much I appreciate such a blessing. May God continue to guide you with such a wonderful gift.</p>

                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">NEW LIFE IN NAIROBI <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I greet you in the Holy Name of Our Lord and Savior Jesus Christ, Who has blessed us with time, wisdom, and knowledge of Himself.</p>

                                        <p>I am a Sister in a local congregation where you held many Masses and healing sessions. The last Mass I attended, I saw God’s hand at work.</p>

                                        <p>I brought a group of sick people, the majority of whom were diabetic cases. One lady had terminal cancer of the breast. I brought her to you, talked to you and you prayed over her. From that night she became well. Thank you, God.</p>

                                        <p>Another lady with an ulcer got well, as well as one of Our Sisters who had problems with her back. The three got completely well. The group decided to gather again to thank God for His miracles to all of us. We praise and thank Him.</p>

                                        <p>AFRICA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FAITH IN KENYA <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I greet you n the Name of Jesus, hoping you are fine. This is just to thank you for answering my letter requesting prayers for my mother and myself.</p>

                                        <p>I am happy that the chronic sickness in both of us has seemed to disappear. I believe that through faith, everything is possible.</p>

                                        <p>AFRICA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">“PAIN FREE” <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thanks be to Jesus Christ! May all praise and glory be His forever and ever! Since I talked with you and you prayed with me on November 4m 1995, I have been dramatically healed and the healing is still occurring!!!</p>

                                        <p>Since May of 1970, I have been having back problems with ruptured disks which are and have been pressing into the spinal nerve. My back problems have been so severe that they have threatened my job at different times. I have a wife and four children, two not yet raised.</p>

                                        <p>After you prayed with me in November, I noticed approximately ten to twenty times less pain, but still had pain all or most of the time, along with much difficulty sleeping. Also, sometimes I had severe headaches radiating up from my back. These problems I have had for several years.</p>

                                        <p>I attended your healing Mass on January 26th and was anointed by you, but felt no difference and was not “slain-in-the-Spirit.”</p>

                                        <p>One the night of February 10th (the eve of the feast of Our Lady of Lourdes), for the first time in three years or so, I slept all night without the aid of a heating pad. Also, very night since then, it has been the same. In addition, now much of the time, I am “pain free.” In fact, at work or at home, I will notice something wrong, then realize I have no pain.</p>

                                        <p>I cannot remember being free of pain for the last ten years or so! Also, I am sleeping better now than I did for the last twenty or thirty years.</p>

                                        <p>Praise be Jesus Christ both now and forever!</p>

                                        <p>I thank God for you and for Mary, the Mother of God, under her title, “Mother of Sorrows.”</p>

                                        <p>IOWA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BEAUTIFUL JOY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>My husband, son and I went to your Healing Mass in October. I wrote to you a while ago and said that if I couldn’t meet you here on earth, I would hope to met you in Heaven. Well, I met you and I was so happy to see you. I don’t think I can put everything in writing, how you touched our lives.</p>

                                        <p>I did not go to the service for physical healing, but I wanted healing of my heart and soul, and to be healed by the Holy Spirit.</p>

                                        <p>When I rested-in-the-Spirit, had the most beautiful joy inside of me that no one can or will ever take away from me. Now I feel closer to God and the Blessed Lady than ever. I was “reborn.” Now I have so much love inside that I can share with all of my brothers and sisters in Christ. Now when I jug my children, friends, uncles, aunts, even my stepmother, I have this love inside that I never had before.</p>

                                        <p>I thank God and I thank you. Through the grace of God, my husband and I are full of joy. When we hear religious tapes at home, we cry. That’s how happy we are.</p>

                                        <p>Also, I have never in my life heard a Rosary the way you prayed it. It was prayed so beautifully that I bought a cassette and played it for my daughter. She told me she wants one. When I die, I want the Rosary to be played. That’s how beautiful it is. I will always pray for you.</p>

                                        <p>TEXAS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">IN HEAVEN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>In January 1, 2000, I was prayed over after your Healing Mass at the Bakery.</p>

                                        <p>The next morning on getting up, I experienced much peace. I didn’t want to forget it, so I wrote down on a piece of paper: “ I felt like I was in Heaven.” It wore off in the humdrum tasks of the day but I believe I was more conscious of God’s presence and generosity during the course of a day and thereafter.</p>

                                        <p>One day, I counted the “little miracles” or blessings of the day and there were at least seven: 1. I was able to find something I needed. 2. Special appreciation was shown for our chaplain. 3.. Discovered the prayers for the Sorrowful Mother Rosary which appear in the Novena Book of Our Lady of Sorrows. 4. Thought of a device that would make a shower more bearable. 5. Found out about the first Chinese stamp at the Post Office. 6. Was offered a ride when needed. 7. Had a good dentist referral.</p>

                                        <p>The Lord is so good to us—in so many little ways—as well as great ones. Praise to Him now and forever. And thanks to you fro the many blessings you give to use through God.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A MIRACLE TO BE ALIVE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I want to give praise to the Lord for the healing I received the past year. I was in the hospital and went through many tests and a number of surgeries. I was miserable and I told the doctor I prayed to die. One priest came in and told me that many souls were released from Purgatory because of my suffering.</p>

                                        <p>Then you, Fr. Rookey, came to pray over me and you came three times in succession, blessing me with the relics of the saints of the Servite Order. In about a week I started to recover and was released from the hospital. I think it was a miracle that I am alive today. Praise the Lord!</p>

                                        <p>Also, you prayed over my eyes many times. The doctor had said my right eye would not have sight again. After you prayed for me again, the next morning when I woke up I could used my right eye. It was like a miracle. Praise you Jesus, Mary and the Holy Spirit and many thanks to you, Father.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">IMMUNE SYSTEM MADE PERFECT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Jesus alone knows how much He has healed me, even when I was supposed to have died. I believe that He has healed me completely from an incurable disease, i.e. lupus, through your prayers and blessing. You prayed with me and blessed me over the telephone when I was in the hospital and had bacterial meningitis and was not expected to live. I have been seriously ill since then but the doctors have never so much found a trace of lupus in my system. One doctor said, “Sister, God must have burned the lupus out of you as there is not a trace of it to be found in your system. Your immune system is perfect!”</p>

                                        <p>Asking your holy blessing and prayers and long to see you again, in Jesus and Mary, your little sister.</p>

                                        <p>FLORIDA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SEXUAL HEALING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>It was awesome to see the Lord Jesus work in healing when you prayed (especially those walking in wheelchair situations.)</p>

                                        <p>I had been having some questioning and trouble with my sexuality and the Lord has healed me and I will believe and stand on that healing in faith. I asked the Lord to heal me in that area (it’s not that I struggle with impurity as such, but thoughts toward the same gender). After I left the Healing Service, there was a song on the radio, “Sexual Healing”—it was like Jesus was singing to me!</p>

                                        <p>I know the Lord has forgiven, healed, and restored me and that there is nothing too far for him to reach!</p>

                                        <p>AUSTRALIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">AMBASSADOR MAKES ARRANGEMENTS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Two years I was diagnosed with breast cancer with spine trouble which led to the usual chemotherapy an bone marrow transplant. While all this was going on, a friend of mine in Ireland contacted the Irish Ambassador in Washington who spoke with you and organized a telephone conversation in which you gave me your blessing, for which I want to thank you most sincerely. I have since made a wonderful recovery and my life has changed in every way for the better. It’s as if the illness was a wake-up call to get my act together, to take responsibility for my own life and destiny, and as a result, I am far happier, a more positive person and feel better able to guide and direct my little family.</p>

                                        <p>Thank you for your help and support from the other side of the ocean.</p>

                                        <p>SPAIN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">NO LONGER LUKEWARM <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I’m just three years at my new address and I’ve met a very devout lady at one of our prayer meetings. We have attended a “Divine Mercy Mass” every week. At one of these Masses there were two sisters who attended regularly. I happened to have a few copies of the Miracle Prayer with me and I gave one to each of the sisters. The husband of one of the sisters had a lukewarm relationship with Jesus.</p>

                                        <p>About two weeks later this lady told me that her husband was saying the Miracle Prayer every night. She was delighted. She asked him to go to Medjugorje with her. The “lukewarm chap” replied, “Do you really want me to go?” She said, “Yes.”</p>

                                        <p>They have just returned home from Medjugorje. The Lord is certainly looking after them.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="closer-to-god" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">I KNOW I WAS HEALED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I want to thank you for coming to our city. It was an experience that brought me closer to the Lord I know I was healed. Please come back to our area. Thank you.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">MEANDERINGS FROM A BENEFACTOR <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>My friends took me to a Healing Mass on the 20th of May. That was my first meeting with you. My first sight o you was of a silent man walking back and forth at the foot of the Church, praying the Rosary. You seemed unaware of people talking and bustling about, as people do; and sad to say, I did the same for which I now beg pardon.</p>

                                        <p>It was only when you began the service that the power of God was so visible. I felt I could have remained there forever.</p>

                                        <p>You said Jesus did the work. You only prayed. Dear God, I wish I had that closeness to God in prayer.</p>

                                        <p>I remember years ago ( I am 62-years-old), I used to read the lives of the saints, but you seemed to point me to God. I think I’ve cried since. I wish I knew this God as you do. What Joy!</p>

                                        <p>You looked very pale, and I wished you might rest, but I was loathe to go home. You never once hurried anyone, or said you were tired. I was worried and wanted you to rest, but God leads some souls on a special path and so we have to allow you to cooperate with God. Soon life is over; and then you will rest.</p>

                                        <p>Before that happens, I would love to spend a pilgrimage or a retreat with you. I long to live a life of prayer, a life lived in God’s spirit, to pray in the Spirit, knowing that then, I’m praying as God wishes. What more or better could I do. Let me forget self and allow Christ to live in me. God bless you.</p>

                                        <p>SCOTLAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">WRAPPED IN LOVE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I attended your Mass on November 11th and experienced “Resting n the Spirit.” I was and still am so overwhelmed by what happened to me that I find it difficult to put into words.</p>

                                        <p>I have various health problems for which I have been hospitalized three times in the last six months and came to Mass hoping for some sort of physical healing. While there, I saw parents with severely ill children, as well as extremely disabled people, and felt selfish in even hoping for help with my problems, which then seemed very minor in comparison. It was with that feeling and feeling guilty for even being there that I approached the altar with others. When you came to me and I first realized what was happening, I was filled with such a sense of joy and sorrow, all mixed together, that I started to cry and tears still come after a week, whenever I think of it.</p>

                                        <p>I did not receive a physical healing and I don’t care that I did not because what I did get was so completely overwhelming. I felt love and warmth and so much I cannot describe. The wonder that God reached out to me and I felt His touch, was a miracle for me. I do not understand why I was chosen for this because I feel so unworthy, and this was part of the emotion I felt at the time it first started.</p>

                                        <p>In the very first instant I thought my heart would burst with the joy of realizing what was happening and then it was as if I had been emptied of all other emotions and filled with the most wonderful feeling of happiness, warmth and love. I felt like I was wrapped in love.</p>

                                        <p>My life will never be the same again—Praise the Lord!</p>

                                        <p>NEW YORK</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">BROKEN SYMBOL <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Just a week ago, I felt strongly that something wasn’t right. The feeling was overwhelming. I sought help and guidance through Alcoholics Anonymous meetings, to which I had been going for almost five years. I had prayed a long time for God to remove my nervous condition. It seemed as though a demon had entered me.</p>

                                        <p>My sister told me how the Lord used you for healing. I really needed spiritual healing and strength. I had a strange feeling inside, before I went to the Church. I had a severe panic attack and was extremely nervous. I almost left the Church to get air. I kept telling myself, “No, the healing is here.” I kept wanting to escape from where I was. When people started going to the front of the Church for healing, I felt pretty blank. Then when I was lined up for my healing, I started to breathe very heavily and felt panicky.</p>

                                        <p>Before my healing blessing, you anointed me with oil. I only remember shaking at first. I couldn’t open my eyes. There was a terrible numbness inside my body. I felt like something was squeezing me so hard that I could not do anything but scream and shake. I heard a glass break. I thought some kid threw a rock through one of the windows. Someone told me that while the demon was being cast out, the candle by the statue of Our Lady of Guadalupe broke. I was so numb all over and extremely drained; I guess I collapsed and they let me lay on the floor. While you were praying over me, I couldn’t say Jesus at first. I was able to say Jesus (very shakily.) Then Jesus is Lord several times.</p>

                                        <p>I don’t exactly know what happened but whatever it was, it was real! I felt so exhausted and tired but now (later in the evening) I feel warm and calm.</p>

                                        <p>Jesus is Lord! I’ve never in my life experienced a feeling as this, so deep in my soul. Thanks be to God. Jesus is Lord and Savior.</p>

                                        <p>COLORADO</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">“EXTRA SPECIAL” MEANING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I saw your visit to Ireland on television and was greatly moved by your deep, yet simple faith and trust in God. Although I was not fortunate enough to attend any of your prayer meetings, speaking to my mother and sister who visited you was enough to convince me. Your visit and your book have just about given an” extra special” meaning to my Catholic faith. Through your special prayer and in writing to you, Father, I feel I can communicate with God in a much more clear and meaningful way.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">HEALED WHILE ASLEEP <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>


                                        <p>Recently I attended a conference at which you spoke and blessed me.</p>

                                        <p>I picked up a copy of the Miracle Prayer last night, read it and meant it. It says something good spiritually would happen.</p>
                    
                                        <p>While slain by the Spirit, I remember my hands frozen in a manner that was peculiar.</p>

                                        <p>Last night I had a dream about Jesus coming to large room. I was laid down by the Spirit. I was blind yet I could see. I could see light and my eyes were covered. Only light because the glory of God was too much. I laid in total peace. A small girl next to me fell over me yet did not disturb me.</p>

                                        <p>When I awoke, I felt my pain being sucked out of my heart. God was taking the things away from me that I had been praying for. “Create in me a new heart,” I had prayed for so long.</p>

                                        <p>True meaning in our prayer is the real miracle—meaning what we say—then living it. Thank you for sharing this gift with me.</p>

                                        <p>OREGON</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FAITH IN THE HOLY SPIRIT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I was in a car accident and sustained neck and back injuries. After a series of treatments and a clinical test I was diagnosed with a herniated cervical disk that needed surgery.</p>

                                        <p>One day, prior to my surgery, a friend gave me a copy of the Miracle Prayer. I prayed and left it up to the Hands of the good Lord. His Will for me. I cannot express in words what happened but my prayer was answered. I have been blessed with the gifts of faith in the Holy Spirit that helped me through my surgery.</p>

                                        <p>My life was changed and I thank and praise God for His grace and mercy. I still have discomfort in my neck and back, but I’m not worried about it. I know the Lord God touched me in a very special way and healed me spiritually. I offered up my sufferings to the Almighty Father for giving His Son Jesus my Savior who suffered for me on the Cross. I now got o Mass every day and have been ushering every Sunday in our community Church. I am hungry for God and I want to be able to serve Him for the rest of my life.</p>

                                        <p>CALIFORNIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">OUT OF THE BLUE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>To participate in a Mass celebrated by you is an extra special blessings. I attended your Healing Mass and received blessings in abundance. God bless Rose, Kathy and Kelly for sponsoring the Healing Mass.</p>

                                        <p>At the “Laying-on-of-Hands” I prayed for my husband’s conversion. AS I rested in the Sprit, I was keenly aware of my heart burning, inflamed with the Holy Spirit. My petition became magnified in my heart. At that moment I knew that my prayer was received.</p>

                                        <p>Several days later, out of the blue, my husband informed me that he decided to construct a grotto for a Blessed Mother Statue that he will buy for me. He said this will be his winter project.</p>

                                        <p>Father, you also blessed several Miraculous Medals for me. My husband agreed to wear one, whereas before he refused to wear anything around his neck. I pray that in God’s time he will return to the Holy Sacraments.</p>

                                        <p>As always, you remain in my prayers. Praise Jesus! Praise Mary!</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">NOTHING LIKE IT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>In November I went to a Healing Service In Alabama with my best friend and we took our mothers along. We are Catholics. My mother had severe depression, so I wanted her to be healed.</p>

                                        <p>I had never been to anything like this in my life. When you had the two elderly ladies get up from their wheelchairs and walk down the aisle, I was puzzled. Then you asked for catchers. My friend came forward.</p>

                                        <p>You blessed the catchers and I saw my friend fall. I was really puzzled then. The next thing I knew my friend’s mother was lying on the floor. I helped her up and she was crying so hard. My heart went out to her. I knew something was happening that I couldn’t comprehend. Inside of me I told myself I was not going to fall. When it was almost my turn I looked up at Christ on the Cross and begged, “Please heal my Mother.” Then you placed your thumb on my forehead and I went down. I felt so happy.</p>

                                        <p>I want to thank you for the experience of a lifetime. I was beginning to doubt God a lot. But now I feel He is totally in control of my life. Thank you for coming.</p>

                                        <p>ALABAMA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TRIPLE BLESSING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am long overdue for a healing testimony. Five years ago I suffered from severe chronic depression. I had been hospitalized and given medication without success. When you prayed over me, I was slain in the Spirit and felt the radiance of a healing warmth. The rest of the evening I was aware of a foul odor. I believe it was an evil spirit or demon leaving my body. I was instantly healed that night. I have not suffered from depression since. Praise Jesus! And thank you, Father, for your prayers.</p>

                                        <p>At that time, I was a Protestant, as was my entire family. Shortly thereafter, I became a catechumen, studied the Catholic faith and was confirmed the following Easter. I find great joy, peace and solace in the Church and am so grateful to be a Catholic. I also feel a great devotion to Mary and have led Protestant members of my family to her as well.</p>

                                        <p>The following year, my 26-year-old daughter announced that she, too, wished to study the Catholic faith. I was thrilled. Since I have never urged her to do this, I was also quite surprised. Her explanation was simple. “ I see how happy you are, Mother, and how much the Church has done for you. I want that. Joy.” The following Easter she was confirmed in the Catholic church.</p>

                                        <p>Last year you prayed for the healing of a stone in my salivary gland. My face was grossly swollen and misshapen and I was in great pain. I faced the possibility of surgery that could result in facial paralysis. After your prayers, he stone was crushed by a needle in the doctor’s office. The swelling subsided and has not returned. Thank You, Jesus!</p>

                                        <p>TEXAS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SPIRITUAL HEALING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I called several months ago for healing of my sister-in-law that she go back to Church since she married out of the Church to a divorced Catholic. Since that call, her husband got a dispensation and they’ve been remarried in the Church.</p>

                                        <p>I praise God for the spiritual healing.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="visions" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">SAW DOVE FLYING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>You have never met me, but I heard about you through my mother-in-law when you were over in Ireland.</p>

                                        <p>In November, I heard that you were to have a Healing Mass near the outskirts of London. So I phoned your Provincial house near the outskirts of London. So I phoned your Provincial house and was assured that my brother would be prayed for, by you, from 5 o’clock that Sunday evening. My brother was critically ill and had been on the life support machine for two weeks and had shown no change.</p>

                                        <p>Two hours after you started to pray for my brother, he showed a turn for the better. He had pneumonia in his lungs and a very bad infection. I never knew a human being could suffer so much.</p>

                                        <p>The Holy Spirit had given me strength to stay with him and keep him comfortable and to encourage him to fight. It was hen that I witnessed the Holy Spirit in my heart. I saw a snow white dove flying about n my heart and had lots of space and beautiful peace to do so. I was at my lowest point when this happened to me. I understand the meaning of it now. I was to be my brother’s coach through this and my family’s shoulder for them. Then when I needed someone strong, I turned to you and your very powerful prayer. Praise the Lord!</p>

                                        <p>I want to thank you for your work with God in Ireland.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">A BEAUTIFUL EXPERIENCE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I again want to so thank you for your prayers for my daughter. She was up at Church and had a beautiful experience. She told me that she saw the face of Jesus and a bright-bright light surrounded her. Please pray that Our Lady and Our Lord never stay away from her. I am so grateful that Mother Mary brought you into our lives.</p>

                                        <p>MISSOURI</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">JESUS THE LIGHT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>During the service and at the Consecration, when you elevated the Host, I saw a very bright light about the size of a fifty cent coin, to the right side of the Host near your hand. A deep spiritual feeling came over me as I stared at the Host. I thought it could be a reflection but it wasn’t.</p>

                                        <p>I have suffered with a rapid irregular heart beat almost daily for many years, which left me unable to function, with short blackouts. Since your healing service, I have had only one very mild irregularity two weeks later, and it lasted about two minutes. Before, it lasted for hours.</p>

                                        <p>Thanks to you and my Lord of your healing touch.</p>

                                        <p>COLORADO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GRACED–FILLED EXPERIENCES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I very much appreciated the fact that you write to me and send me the beautiful prayers. Thank you. my life is settling down for the good</p>

                                        <p>I was in Lough Derg earlier this year and I love it. I prayed for everything I could think of. I prayed in a special way for the Police Force because that would have been my vocation if I had not been struck down with what became an illness through medical error. My illness was definitely of malicious origin but I forgave everybody.</p>

                                        <p>I am enclosing a photo of myself at home. The light in it is similar to the light I experienced in Lough Derg that was in the Blessed Sacrament. The entire place was bathed in darkness except for the area around the Blessed Sacrament. There were about ten people there. They were clothed in complete darkness. All I saw was an intense white light. It just came out. When I felt my head, it felt very hot. I felt I saw the drops of blood fall from the top of the Host to the bottom of the Blessed Sacrament. I also felt Our Lady smiling at me through the Fatima Statue. It was a smile form the heart. I also found that the source of my spirituality comes from my heart. I felt weak and helpless, small and insignificant, but Jesus is the Light of my life.</p>

                                        <p>Did I explain in detail how I was healed in Mount Argus? Well, I was directly behind the lady in the wheelchair who walked. As soon as she did, I had a sensation like blood rushing to my hand. I cried uncontrollably an I was healed.</p>

                                        <p>Praise the Lord. Thanks for your prayers.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">CLEAN SPARKLING LIGHT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Since you had that Healing Service at our Church last February, my conscience continuously bothers me because I realized, too late, to tell about the clear sparkling light in the center of the Blessed Sacrament. The glass in the center of the Monstrance twinkled like the brightest star. I thought nothing was extraordinary until you picked up the Monstrance and used it to bless the infirm. That was the time I knew that it was not permanently shining because it was dull and didn’t glitter anymore.</p>

                                        <p>CALIFORNIA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">LORD’S FACE IN HOST <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Just a brief note to say how good it was to see you and speak briefly with you after Mass in New York City. Father, I would also like to share that during Mass I saw briefly in the Host what appeared to be the Lord’s face, veiled or in the shadow. I hope to see you in upstate Connecticut early next year. Shalom</p>

                                        <p>CONNECTICUT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">OF SORROWS AND A VISION <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>On Saturday the 13th of November I received your blessing and also received Holy Communion from your blessed hands. I received the blessing of the sick, which I didn’t need, but took it for my mother who has cancer.</p>

                                        <p>I thought that when I got your blessings that I would go out and have the Holy Spirit come into my soul. It worried my a lot, for this not to happen.</p>

                                        <p>But my brother, who was very ill and could not sleep at all, slept very soundly on the night after you healed.</p>

                                        <p>You see, Father, I ahd a very troublesome life and marriage. My husband and I separated two years ago, so that means no vows. But things still go wrong for me. My Father died over nine moths ago. Then my mother took cancer. My sister had two very big operations. My brother’s marriage broke up. My daughter, twenty one, got pregnant and is unmarried and my other daughter has a very bad chest. My sister-in-law’s four children died within of each other, aged 18 to 32.</p>

                                        <p>I am trying to run a house with four boys who are a bit of a worry to me. I was never a good person, or praying, or going to Mass. But I had it a little bit rough. When I say “ a little bit,” I am thinking of Jesus and His Holy Mother. What they went through!</p>

                                        <p>I joined a Rosary group over twelve months ago at the Shrine of Our Holy Mother and saw a beautiful vision. Even saw Our Lady receiving ‘Holy Communion. The sun change din the sky.</p>

                                        <p>I am sending you a little rose flower with seven names on it. They will pray for you on each of these days. You are one of the best as you say yourself: Praise to Jesus. Glory to Jesus. You could not give Him enough and His blessed Mother.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SEEING THE FACE OF JESUS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>This thank you to you and those who faithfully serve at your Healing Masses is long overdue. The first experience for many of us from Indiana came when we ventured to your service in Illinois a year ago.</p>

                                        <p>When you held the Host high at the Consecration and said, “Let us see Your Face and we will be saved.” It was wonderful, awesome. At least five of us did clearly see Jesus’ Face during that Mass.</p>

                                        <p>Since you came to the retreat center at South Bend, at least three of us always see Jesus’ Face each time our priests lead us in Adoration of the Blessed Sacrament and also many times at our local Mass.</p>

                                        <p>God is so good and we are so grateful! We are happy for you that He is using you to help many people increase in faith. We want everyone to know that Our Jesus is Real and Truly present in the Blessed Sacrament. May God continue to bless you and your work.</p>

                                        <p>INDIANA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">OUR LADY WATCHING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>When you first walked across the prayer line in front of Our Lady’s statue and the Crucifix, I was standing right in front of the statue with my rosary beads. I had been praying all day getting ready for your coming.</p>

                                        <p>As you passed from the left to the right of me, I saw Our Lady looking after you. She still followed you across the end of the line. Then you blessed me and I rested in the Spirit for almost two hours. I wasn’t imagining it. Our Lady was definitely watching you. It was a night I will never forget.</p>

                                        <p>May Jesus and His Holy Mother Mary bless you and take care of you.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">CAN’T EXPLAIN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I was at your Healing Mass on October 15th. I felt so good that you laid your left hand on my forehead and then I got you to bless me again. This time you had your cross in your right hand and when you laid it on my head, I felt something—I just can’t explain it.</p>

                                        <p>I bought your book and read some of it that night when I came home. When I came to page 44, I was reading about your experience with Christ’s face in the Blessed Eucharist. I started to cry when you said, “unworthy as I am.” It has been a source of strength to me. On June 8th of this year, when I was on an island of penance for three days, I saw the image of Divine Mercy when I was in the Adoration Chapel. While I was praying the second time, I saw Jesus with the crown of thorns on His head.</p>

                                        <p>If anybody is unworthy, it definitely has to be me. I feel so nary all the time at my family. I’m always looking for some excuse to give out about something. I come from a traveling family of 18 children, 32 years down to age 9. I pray t o Jesus that I may be released form this anger.</p>

                                        <p>I have seen a few visions at home, of Our Lady and Jesus and different saints and I can’t understand why Our Lady has chosen me to see her when I’m so bad minded and evil. Please pray for me that I may overcome my anger and keep my 9 brothers and 8 sisters in your prayers. I look forward to hearing from you in the future.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SOMETIMES WE DO NOT UNDERSTAND <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>On Tuesday, December 14, 1993, I suffered a massive heart attack. The paramedics took me to a hospital where a heart catherization procedure was performed, which verified there was no chance for surgery. My fiancée was told I would not live.</p>

                                        <p>On Thursday afternoon I was told a heart transplant was my only option. One Doctor said it was doubtful I would ever leave the hospital.</p>

                                        <p>On Friday you were scheduled to celebrate a Healing Mass at the parish. My fiancée contacted you and explained that you were our last hope. Medical science had no options. That evening before your Mass you came to the hospital and prayed over me. Saturday morning I was apparently no better. Still, several IV’s and a dozen medications. At mid-morning I became very cold and shaky. The shaking became more violent as I became colder. For a few moments I felt I was going into convulsions and would die. IC could sense feverish activity of nurses and doctors around me. At some point during this episode, Fr. Rookey, an image of your face as you prayed over me the night before, passed through my mind. Finally the shaking stopped and my body returned to normal temperature. I fell asleep for several hours.</p>

                                        <p>When my fiancée came to visit later that day she noticed that I seemed better. Over the next three days the IV’s and medications were reduced. I was moved out of the Coronary Care unit into a regular room. I was released from the hospital on Christmas Eve, ten days after being admitted. I was still faced with a limited life style.</p>

                                        <p>When I asked the reason for my rapid and dramatic improvement a doctor pointed to heaven and said, “Sometimes we do not understand.”</p>

                                        <p>After more tests, it was decided that a bypass operation would be beneficial to me, and I was also strong enough to survive the surgery A triple bypass operation was performed in February and was very successful. My wife (my fiancée and I were married in January) then told me that her prayer, as you prayed over me, was that I survive long enough and be well enough to have the surgery that could help me.</p>

                                        <p>Doctors today tell me I am able to live a normal life. I returned to work April 4th, full time and I feel wonderful.</p>

                                        <p>I know Our Lord has blessed me with this healing. I do not know why. I can only thank Him, praise Him, an witness that healings do take place.</p>

                                    <p>God bless you, Fr. Rookey, and may you continue to be a channel for Our Lord’s healings.</p>

                                    <p>FLORIDA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SEE JESUS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>I had the pleasure of meeting you at Church when we had a Novena to Our Lady of Sorrows in 1993.</p>

                                        <p>A few weeks ago you came down to New Orleans for Healing Services and a one-day retreat. My friend and I went to the Healing Service. I was asked to be an usher for the service. There were about forty people there for the service. After Communion we had a laying-on-of-hands; we kissed the Monstrance and then had Benediction.</p>

                                        <p>At Benediction I saw the face of Jesus on the Host. Jesus looked as if someone had drawn Him in pencil. I closed my eyes. (At first I wondered if I were the only one seeing this.) When I opened my eyes, His Face was still on the Host. When I told my friend, after we got into the car, she said that the Lord had truly blessed me. Since then I have seen Christ at Mass in the host in another Church.</p>

                                        <p>What God has allowed to happen to me has given me an inner peace that I didn’t have before. I previously had Rosaries change to gold, had seen the sun change colors and I have seen the Blessed Mother’s eyes move on a statue.</p>

                                        <p>The Blessed Mother is the one who is responsible for leading the way for me. Father, I was truly blessed. I hope that God the Father, Jesus, the Holy Spirit and the Blessed Lady keep you well to spread the Word for us! God bless you, Father, and pray for peace.</p>

                                        <p>LOUISIANA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">THIS IS MY BLOOD <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>
                                        <p>This letter is just being written because last night we had the 2nd anniversary of Our Lady’s Prayer Group. IT was started when we returned from Medjugorje, with 15 people, and ranges now fro each meeting between 50 and 70. It takes a lot of work and I have a one track mind.</p>

                                        <p>Sunday, May 8th, I attended another of your Healing Masses. Before the Consecration, you said, “People have seen to Face of God in the Host, angels around the altar, or Our Lady.”</p>

                                        <p>Well, I looked and saw nothing. When it came time to raise the chalice in the consecrating of the wine, I looked and thought there was a red stain on the bowl of the chalice. My eyes were riveted to the chalice, but mentally I thought that as soon as it goes way, I would look and see if it could be a reflection (needless to say, there was nothing). As I watched, the stain gradually covered the cup of the chalice. There was no wine showing and your hands looked like they were cupping something that was shaped like a bowl.</p>

                                        <p>When I went to Holy Communion and saw that the wine that was used was white, I realized that God had shown me the gift He had given me.</p>

                                        <p>I don’t know whether I have explained myself very well. I am just too close in time to the event.</p>

                                    <p>God bless you for the miracles that have come to us through your hands.</p>

                                    <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">UNCOMMON APPEARANCES <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I have been telling people who have sick relatives or are themselves needing healing to call you and to pray the Miracle Prayer. I tell them that healing takes place even when you pray for theme (directly or by proxy) over the phone. Now I tell them that since I started praying the Miracle Prayer from the heart, I started seeing images on the Sacred Host and Tabernacle, and that I witnessed the Miracle of the Sun several times. Furthermore, some of the people I shared this with also started experienced similar phenomena.</p>

                                        <p>My friend and I have been seeing the Miracle of the Sun the past two or three weeks. I saw a pink sun falling, stopping, becoming two, then one again, changing to orange, reddish orange, light blue, back to pink with yellow background, spinning clockwise and then counterclockwise, stopping its spinning and starting to pulsate while simultaneously changing colors between pink and reddish orange with a turquoise (bluish-green) aura on the outside.</p>

                                        <p>A short while into this phenomena, I was in tears but continued to see clearly while feeling sorry for my sins and asking God for pardon and strength to stay on the narrow path to eternal salvation. I told Him that without His help I would not even be able to breathe. this lasted for about five minutes at least. My friend saw a lot more colors and for a much longer period, one time for fifty-five minutes while I could only get up to twenty-five or thirty minutes.</p>

                                        <p>It is very difficult to describe the phenomena. I pray that other people will see this so they can be touched by God’s Spirit and thus be converted and set on fire with love to serve the Lord.</p>

                                        <p>Last Wednesday at the second Charismatic Prayer Group meeting that my friend and I attended. I was asked to pray for the lady next to me and we all prayed for her. Afterwards, she said that she felt the power of the Holy Spirit and that she felt electricity and gentle heat from my hand. I myself did not feel anything out of the normal. Lately, people have been asking me to pray for them or their loved ones for healing—physical and spiritual because they say something n me is just attracting them to do so. Whatever it is, I pray to God that He help me when He uses me to help these people.</p>

                                        <p>We shall continue to pray for you and our fellow members of the prayer groups. Please include us in your prayers too.</p>

                                        <p>TENNESSEE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">THE LORD SPOKE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you for remembering me in your daily Masses and prayers. I remember you in prayer daily and all the members of the Servite Order and all who are associated with you in your ministry. Almighty God has called me to a life of prayer.</p>

                                        <p>Once I started to pray an Act o Consecration to the Sacred heart of Jesus (and really meant it), He started to shower many grace on me that I don’t deserve. I remember when He touched me because the Lord Jesus came again, and our Blessed Virgin mother, with a choir of angels. They were singing in voices more beautiful than I could describe. They were only singing one word: Holy, holy, holy, holy. Oh, if the people in the world could only see the Holy Trinity and our Blessed Virgin Mother in her place in the mystery of salvation, and how she loves us!</p>

                                        <p>I came to your services on April 23-25. When you blessed me, the Lord spoke to me, (in my spirit), to take my right hand and touch your left arm, while you were touching me in blessing. My first thought was- is it polite for me to touch the priest of God while he’s blessing me? Then Almighty God spoke to me again to touch and to speak a silent prayer for you.</p>

                                        <p>I had a knot on my index finger of my right hand. I never had pain, but I saw it as very ugly. After you blessed me, it was gone. I praise Almighty Father God! I thank /him for you, dear holy priest of God.</p>

                                        <p>WASHINGTON</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SO GENTLE, SOFT, BEAUTIFUL <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Something wonderful happened at the Mass on September 15, 1999. The Mass was beautiful and I smelled the scent of roses. I also believe that I saw the Holy Spirit.</p>

                                        <p>During the Mass I saw something flying quite rapidly from the left and as it passed below the Crucifix.</p>

                                        <p>During the Mass I saw something flying quite rapidly form the left and as it passed below the Crucifix.</p>

                                        <p>The next day, I realized that what I saw was the Holy Spirit. IT must have been a small white bird. It flew too quickly to be a moth and it did not go to any light fixture. It flew quickly in a curve and touched several people on their heads and then it touched me very softly with first one wing and then the other, on my forehead! I gently flipped my bangs to release it. I truly believe that I saw the Holy Spirit. Neither my sister on my right, nor a friend on my left, saw Him. He is so gentle, so soft, and so beautiful.</p>

                                        <p>OREGON</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="inner-healing" class="tab-pane">
                        <div class="accordion-list">
                            <div class="accordion-item">
                                <div class="accordion-header">FREE OF ALL ANXIETY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Praise God! I was Healed!</p>

                                        <p>I had severe anxiety for nine months. It was so bad I couldn’t work. I felt like I was going to have a heart attack twenty-four hours a day. I had most of the symptoms. From August 1992 through May 1993 I had taken 407 doses of medication. It wasn’t working and I was told I might require anxiety medication the rest of my life. It was obvious to me that I needed a miracle from God.</p>

                                        <p>On May 28, 1993, I came, in faith, to your Healing Mass. When you touched my head and prayed that I be “free of anxiety,” I felt a calm come over me and it hasn’t left. Praise God!</p>

                                        <p>Although I have been coming to your Healing Services for the last 2 ½ years, this was the first time I requested a healing for a member of my family.</p>

                                        <p>The reason I promote your healing ministry is very simple. You are performing your service the same way Jesus did two thousand years ago. Jesus taught and healed. You have the gift of healing from the Holy Spirit (per I Cor. 12). You are truly a Man of God! The Church needs more Fr. Rookeys.</p>

                                        <p>I look forward to giving my testimony of this healing whenever I attend your Healing Services!</p>

                                        <p>ARIZONA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">INNER HEALING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey, M</p>

                                        <p>I experienced the “Gift of Tears” on many occasions in Medjugorje when I felt most happy. This in itself has helped me to cope with a recent apparent worsening of the illness, multiple sclerosis, which I have had for ten years. My eyesight became a big problem; I couldn’t focus on words, so reading was impossible; my speech was also very slurred, slow and monotonous. I sounded like somebody who had a cerebrovascular accident as well as too much to drink. My walking became worse. I fell over more than usual and had difficulty in standing up.</p>

                                        <p>This worsening of the illness meant hospitalization for a short spell. There, in my imagination, I met Jesus and His dear Mother, Mary in the doctors, nurses and very caring visitors. I don’t think I would have thought such “holy “ things if I had never been to Medjugorje. I was the type of person who very much took everything for granted.</p>

                                        <p>I would like to thank you for your Healing Ministry. I certainly felt fuller after you prayed over me in the cemetery in Medjugorje, as did my friend.</p>

                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">ABLE TO REJOICE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>In august of last year my sister attended a Healing Mass that you celebrated in Kansas City and was blessed with what she describes as a spiritual healing.</p>

                                        <p>To give you just a short history—when my sister was thirty years old, she had several strokes which left her paralyzed on the right side and speechless.</p>

                                        <p>Although she never regained the use of her right side or the ability to read, she did regain some speech. Her disabilities were very hard for her to accept and kept her form leading the life she wanted. But since her healing and inviting the Holy Spirit, she is able to rejoice in her life once again.</p>

                                        <p>She will be undergoing a bone marrow transplant and because of the healing you gave her, she is ready for whatever is to come.</p>

                                        <p>Thank you seems so small, but I don’t know how else to express my gratitude for the gift you have already given my sister.</p>

                                        <p>TEXAS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">DEPRESSION DISEMBODIED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I had written to you telling you that I was suffering form a deep depression feelings of despair and hopelessness and asked for your prayers.</p>

                                        <p>I am very well now, thank God. I hadn’t dared believe that I could be so well again. Thank you for your very real help.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">HE TOUCHED ME <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>There is a definite need in my life for some spiritual and mental healing, so I thanked God for the opportunity to receive and accept (sometimes the most difficult and painful) His gifts.</p>

                                        <p>I’m not sure what He blessed me with that night, but I am assured that He touched me and is working miracles in me and through me.</p>

                                        <p>KANSAS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">TOTAL TRUST <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>My story begins with my sister telling me that a priest is coming to celebrate a Healing Mass at her parish. I definitely was interested, but I was really hoping that my husband would come too. As things turned out, he was called out of town, so I asked my 20-year-old son and 19-year-old daughter if they would like to join me, particularly to pray for their father that he might be freed from a eating disorder that he had, as long as he could remember and it was getting worse as years passed.</p>

                                        <p>He was very depressed most of the time and sometimes would have fits of anger. Through the years he had been on every kind of diet: liquid diet, Weight Watchers, and Over-eaters Anonymous. He also would buy and read every book out on the topic. He searched for an answer. In November of ’85, I asked him to please go see a doctor for a good physical and to talk to the doctor. This was the time when we first knew he had an eating disorder. The doctor recommended that he go to a psychiatrist across the hall. So he went to A.A. meetings and read the book on the Twelve Steps, just substituting food instead of drink. That lasted only short time because he felt he was getting nowhere.</p>

                                        <p>About a year later I asked him to please go back for another physical because he was really dragging at home and at work, to the point of not being able to stay awake. He chose another doctor this time. This one also sent him to another psychiatrist. Then he put him on a six-month program on Eating Disorders ( a learning program—no diets). He stuck with it and mentally absorbed a lot but it didn’t reduce his eating habits. He had developed diabetes and high blood pressure. They were both at a point of extreme emergency. Just before Christmas, he was told was on the verge of a stroke or heart attack. Even the thought of dying did not make things change; he often prayed for God to take him because he felt he was a prisoner inside of his own body with no way out. He even got to the point of saying he was not going to Church. But it never materialized. Thank God!</p>

                                        <p>One evening he gave me his car keys and told me NOT to give them to him no matter what . . . because he didn’t know what he’d do to himself. He went up to our room, laying quietly in the dark but his mind was screaming with anger. After some time went by, I went up to check on him, asking if I could help in any way. I asked, “How about saying a little prayer together?” He became more upset, talking in a rough, mean way . . ., saying he didn’t think he would be going to Church any more; it wasn’t doing any good and so on. I stood at the end of the bed, not even facing him. I wanted to cry, but God held me together. I turned and in a firm voice stated, “ I know it’s not you talking so I’m not upset with you.” (I don’t know why I said that but I know God was helping us.) “The devil is trying to separate us in any way he can and he’s tried for years but he’s not going to do it . . . because I lover you!”</p>

                                        <p>His head fell back n the pillow and in about a minute or so he lifted up his head and said, “What did I say to you?” (He really didn’t remember.) He was kind of dazed and said, “I don’t want to hurt you.” He is a kind and loving human being only wanting help.</p>

                                        <p>Well, my son, daughter and I did go to the Healing Mass with you last February when a gentleman was witnessing, saying he was there in Proxy for another person. So I decided I would do the same for my husband. I was next to my son and daughter as hands were laid on. The peace and joy I felt were beautiful. My son thought I had died because I was down longer that most. When I got up, I told my son, “He’s going to be fine . . . Dad’s going to be fine.”</p>

                                        <p>“You won’t be afraid again,” I thought. The nice mood this continued when you yourself played the piano after the service. I am a guitarist and your playing made me feel I could trust you.</p>

                                        <p>Well, here’s the healing part. The next day after work, I had the urge to call a counselor that I had heard speak at a Widowed-Divorced Catholics meeting. Mind you, but this time less than 24-hours after the healing service, I had already forgotten all about that. So here I was talking to this lady counselor. She said I didn’t need her workshop on Addictive Relationships as I was already aware of them in my life. Instead, I could use some on-on-one counseling.</p>

                                        <p>My inner healing began on the first visit and had progressed every single visit. Each session is like an inner message from God himself.</p>

                                        <p>NEBRASKA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TEARS AND LAUGHTER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I have been meaning to write this letter for ages. I want to say thank you from the bottom of my heart to Jesus and to you for the healing I received at a service you held at our Church. I came to see you at the end of the service after I’d cried when I was “slain in the Spirit!” About three days later I woke up and felt like a prisoner who had been set free from chains. A layer of terror and fear of failure which I felt very close to me for a long time had been taken away from me and has not returned.</p>

                                        <p>I went to seem my doctor soon after the Mass and I felt so much better and more positive and he considered that I was so much improved that I stopped taking the antidepressant tablets! He has been my doctor for twenty years and knows me well. When I told him what had happened at the Mass, he held my hand and afterwards said, “That’s made my day.”</p>

                                        <p>When I went to Mass on Sunday, as I was taking the Host, I felt such a tenderness and stillness next to me which I have never experienced before in my lift. It was beautiful. Kneeling down afterward to pray, something inside my head said clearly to me, “ I am with you always.” I wanted to cry but did not do so until I got home.</p>

                                        <p>You helped my husband too. Since he was “slain” he is much more confident, doesn’t care what people think, and laughs a lot. He sends his good wishes.</p>

                                        <p>God bless you in all the healing missions you do.</p>

                                        <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">STRENGTH WITHIN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I attended your Healing Mass with my friend. I was scheduled for surgery July 13th and was scared and afraid of the unknown. Your Healing Mass gave me spiritual strength and peace within.</p>

                                        <p>My prayers and the prayers of all who prayed for me were heard. My surgery went well. I suffered no pain from my operation and did not need any pain killer.</p>

                                        <p>Thank you, Fr. Rookey, for your kindness and prayers.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">WITH DEEP GRATITUDE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>On March 27th, I attended your Healing Mass in Maryland at the Senior Center. Words cannot express my gratitude for the consolation afforded me through the powers bestowed upon you by God Almighty. The relief I’ve experienced from the physical and emotional infirmities which encumbered me has been something akin to miraculous. Thank you for being there when I so desperately needed help. May God bless you always.</p>

                                        <p>VIRGINA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SEVERE SCHIZO HEALED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Jesus says that all who come to Him will have healing, as long as they have faith. Through the Name of Jesus you were used to heal my son. For eight years he had schizophrenia in a very severe form and thought he would have to live with it. Every year he went into the hospital. Though it made me sad to see my son deteriorate, I never gave up.</p>

                                        <p>When he came to you on the 23rd of May, I saw he was healed completely. There were signs and wonders. He is now laughing, keeping himself clean, no confusion, no more fear.</p>

                                        <p>For myself, I could not walk and had spinal problems. My right leg had been two inches shorter than my left and it is now even—after you prayed for me in Jesus’ Name. I am healed as well.</p>

                                        <p>LONDON</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">DEPRESSION AND EXAMS PASSED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I attended the Healing Mass in November and all through the service, I smelled roses. It was so strong and sweet that I asked my dad and sister about it. It was as if perfume was being sprayed continuously in Church. They told me it was the presence of the Blessed Mary, and I rejoiced. I prayed and asked you to help me be healed from my depression and pass my Board exams for Registered Nurses.</p>

                                        <p>In December, I attended the Healing Mass again and I was in a trance for eighteen hours into Sunday. The following day I saw the Virgin Mary as she held the Child Jesus in her right arm. Praise Jesus.</p>

                                        <p>I took my Board exams four days afterward and I passed. Now I am a Registered Nurse. My depression is better and I recently found job. Thank you, Fr. Rookey, for all the miracles that have happened in my life.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FRUSTRATED CHILD FREED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am a single parent mom raising my son, who has autism, on limited state assistance with no support form his father. Five years ago he was a very angry frustrated childe and in an effort to somehow communicate had bouts of scratching and biting me, leaving many scars and bruises. Then we came to the Lord and the Healing Ministries, and our lives have changed completely. He has been aggression-free for over 2 ½ years and I am able to take him with me everywhere I go . . . and want to! I was raised Lutheran, but when we received these beautiful spiritual and emotional healings through the Catholic communities, we converted and were both received into the Church two years ago.</p>

                                        <p>We have been attending your services for about two years now. You have been one of our instruments I that you always assure me that my son is very special and very close to the Lord. What a consolation; I want to share his new beauty with everyone!!</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">ST. PHILIP BENIZI <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Last fall you blessed my son in the name of Our Lady and St. Philip Beneizi. Since then there have been miracles and a constant conversion in our family. We are praying the rosary daily now. We had been thinking about leaving our new Parish, St. Philip Benizi, to go somewhere closer. Not now, not a chance! Thank you so much.</p>

                                        <p>OREGON</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SPIRIT SENDS A SHIVER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am writing to thank you for your recent letter and your telephone call. Un fortunately I was not at home, but my daughter spoke with you and you gave her your blessings for our family.</p>

                                        <p>Your healing ministry is a living witness that Christ lives today as much as He did two thousand years ago. I sensed this strongly at both of your Healing Services. When you led the procession of priests out through the grounds of the Church at the start of the service, I got a powerful feeling when I looked the Banner of Mary and when you walked past me a shiver ran through me and I knew the Holy Spirit had touched me. It reminded me of the Scripture reading in which Peter used to walk up the road and the sick would have been laid on each side of the road for his shadow to fall on them.</p>

                                        <p>Fr. Peter, keep up the good work. I can assure you that you are always in our prayers and family Rosaries.</p>

                                        <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PROTESTANT PARTICIPANTS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>In May, 1993, I had surgery for kidney cancer and the doctors found what they assume is a metastasis inside my pelvic bone. I have been prayed for in my own Protestant Church and have many friends and relatives who are continuing to pray for me. Among them is a Catholic mother of my sons’ close friends. She invited me to attend a Healing Mass where you were the officient.</p>

                                        <p>Although my husband and I could not participate in the Eucharist, not being Catholic, the service built our faith, especially your homily in which you quoted and read various scripture passages about the healing power of God. At the end of the service we both went forward to be anointed and were given the healing blessing. You cam to him first, paused briefly, and instead of praying for healing, you said something like, “You are my servant in whom I am well pleased.”</p>

                                        <p>Then you came to me and gave me the healing blessing. We were astounded because he is an ordained minister who has not had a Church for several years, but holds a full time secular job. Although we both do writing and editing for theological publications, he often feels that he is not using his gifts and education as he might. Your blessing was exactly what he needed to hear and was totally unexpected. For my part, I went home feeling that the Lord would surely heal me, and am still believing that He will.</p>

                                        <p>Although the doctors expected me to begin experiencing severe pain, that has not happened. God bless you richly.</p>

                                        <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">“RECYCLED” SERVER" <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Today I feel, for the first time in many years, peace. I have been torn between manic highs and deep depressions as a Manic Depressive for over 25 years. I could have lost my family, my life, my soul, if it wasn’t for the mercy of God who sent me a Guardian Angel. This Angel came in the form of my understanding spouse.</p>

                                        <p>For many years my medication did not curb the manic high I lived. My self-centered and self-righteous personality, which was a result of this manic high, caused many problems in my family. I also left the Church about ten years ago. My soul was in deep trouble.</p>

                                        <p>The Lord, in the past year, has worked miracle upon miracle in my life. I have returned back to the Church and am chemically and spiritually healed. It is difficult to determine when a mental disorder healing occurs but I know something wonderful has happened to me since attending your First Saturday healing Masses for the past six months.</p>

                                        <p>I am a different person today. I have rediscovered my spouse, children and grandchildren. I now like me, and I feel a deep sense of peace.’ Many spiritual gifts are coming in the way of conversions, miracles and also material miracles. A $6,100 hospital bill was paid in June. For the prior six months, the insurance company said three times, in writing, that they would not cover the stay. Another health care insurance problem was solved which looked insurmountable.</p>

                                        <p>The Holy Spirit is teaching me the gift of evangelization. I have become a recycled altar server at the age of 49.</p>

                                        <p>I have broken the chains of mental disorder. You started the ball rolling, Fr. Rookey.</p>

                                        <p>INDIANA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">JESUS AND MARY ARE MY LIFE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Peter, in Christ and Mary!</p>

                                        <p>My English is weak but I hope do you be able to understand. I am young boy of Croatia. I have 29 year and not married. Up own 24 year, I not go in Church. Year 1988, first time to go in Medjugorje. Up then, my life is change from foundation. Now is 5 year up my convert. My life is now all in God. Jesus and Mary is my life. In Medjugorje, I am be 20 time. For 10-year Mary’s visitations, I come with bicycle, 500 kilometer. Then I am see and you, special in tent where are prayer. Then is too many people in tent. I have you photos from tent. 11.7 in summer this year, I and my brother John (Ivan) to in Medjugorje on foot, 2500 kilometer. Fro us, is great joy. God, Father give us grace, just eat bread and water till end of life. We life to great grace. Thank Jesus and Mary for this grace. We are complete, deliver in Will Jesus and Mary. We ask you, prayer for our pilgrim way. You give us bless, for our way. In New York, in museum Art Metropolitan is picture: Mary as held. Little Mary, vase with lily above lively angels. I you can send reproduction and photos. This photos is special and very much beautiful. If you can send, 2-3 Miracle Prayer, we are pleased.</p>

                                        <p>God with you and bless you. Queen of Peace, Pray for us.</p>

                                        <p>CROATIA-EUROPE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">FROM SUICIDE TO JESUS’ SIDE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Last year on the last day of the New Dawn Conference at Willingham I felt I had to see you. I saw you in the car park and there were only a couple of people with you. I don’t know how but I found myself standing in front of you. All week I’d planned what to say, but instead I just said, “Father, I’m manic depressive.” The next thing I remember was an overwhelming sense of peace and joy and love, and a sense of being wrapped in cotton, and there was beauty and light—I really cannot adequately describe what I experienced— you know.</p>

                                        <p>I suffered (note the past tense) from Manic Depression for over twenty years. I’m now forty-four. In 1990 I decided that I could not continue. I’d often prayed that my life would end. I had caused so much pain and anxiety to my family and friends. I made frequent suicide attempts. The volume of drugs I took and the timing and type should have guaranteed death but each time I survived.</p>

                                        <p>Before the Healing Service at Walsingham I was receiving counseling form a psychologist. On my return she was quite unprepared for my totally different attitude. My anger had dissolved and my hate disappeared. I truly felt forgiveness and forgiven.</p>

                                        <p>Two weeks later my counselor discharged me. She said I could probably do better counseling than her! My psychiatrist also discharged me.</p>

                                        <p>I was received into the Church on August 31, 1991. My whole life is now geared to helping others. I made the conscious decision to be open and tell people about my history and experience. Mental Illness is still, sadly, a taboo subject. I can say positively that all the drug treatment in the world, will not work if the spiritual sickness is not healed too. In fact, drugs in most cases would not be necessary.</p>

                                        <p>Every day I thank God for giving me back my life. I have been granted so many graces and have promised that the rest of my life will be in the service of Our Lord.</p>

                                        <p>I now have so many true friends, one of which introduced me to her Rosary Group. I think one of the greatest gifts I have received is to know Mary. She is such a guide and comforter.</p>

                                        <p>God bless you, give you strength and protection.</p>

                                        <p>GREAT BRITAIN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">MIRACLE PRAYER TO SOUTH AMERICA <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>In June ’87 I was in Medjujorje and you prayed over me for spiritual healing. I’m doing okay. The healing is still going on, thanks to Our Lord and to Our Lady.</p>

                                        <p>Recently, I returned from a visit to the U.S. A very special friend of mine gave mea prayer card with your picture on one side and the Miracle Prayer on the other. I would very much like to distribute this prayer here in South America. Do you have a Spanish version of it? I believe in this prayer and would like to share it with others.</p>

                                        <p>Thank you for your time and especially thanks for praying over me.</p>

                                        <p>BOLIVIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">COMPLETELY TRANSFORMED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Hi! I am writing to plead to you to please come again to us at Christmas this year. Last Christmas I met you and you prayed over me two different days—my life has been completely transformed since then—I am filled daily with so much love for the Lord and so much joy and comfort from the Holy Spirit.</p>

                                        <p>You talked to me after the Healing Mass last Christmas. We prayed before the Blessed Mother—you gave me advice and were so kind! Thank you—you are truly a gift from God to the world—and Jesus and Mary has multiplied because o you. Thank you.</p>

                                    <p>FLORIDA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A LITTLE GIRL’S WITNESS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Father Rookey,</p>

                                        <p>Well, I’m writing to tell you that you have made a big change by coming into my life. You have made me see things that I might have ever seen. You have brought God back into my heart and soul and I love you for that.</p>

                                        <p>Yes, the Lord is my shepherd. He leads me through the right paths and He give me repose and I love Him. Praise You, Jesus, that’s what I say. He is King, for in Him and Him along will I receive the best out of life.</p>

                                        <p>Father, you are always in my thoughts and prayers, no matter what, and I thank you for all you have done for me. I would really like to meet you some time to thank you face to face. You remind me of a big beautiful butterfly.</p>

                                    <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">LORD, BLESS THIS HOLY MAN <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you for the beautiful and comforting words you were inspired to say and pray over me, namely, “Lord, bless this holy man.” They were the kindest words said and prayed to me in fifteen years of suffering abuse (verbal) and constant criticism. Those words healed me of all the just and put-downs. When I opened my eyes after the healing, I saw a bright light on the altar. All day I thought of the healing words and felt much self worth.</p>

                                        <p>The next day my mother and I went to your healing and I received the gift of tears and was healed of schizophrenia that I had suffered for twenty years. I prayed to forgive my aunt and mother and then was healed by your blessing. Also my mother was healed of a heavy foot and also rheumatoid arthritis. Praise the Lord!</p>

                                        <p>Thank you, Father, for being the minister of God’s healing!</p>

                                    <p>NEW YORK</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">SPIRITUALLY FED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Thank you for your recent visit to us. My wife and I must tell you we were truly blessed by the Power of the Holy Spirit that evening in which we received a spiritual healing that was much needed!</p>

                                        <p>We experienced a conversion back to the Lord Jesus Christ just six months prior and were Spirit filled outside the Catholic Church. We were not aware of the charismatic movement at that time and needed to be spiritually fed. We now know that the Catholic Church does offer Healing services which now makes it possible to lead our family members back to Christ through the Power of the Holy Spirit! Alleluia!</p>

                                    <p>FLORIDA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">HEALINGS AND HOVERINGS <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>All were delighted with you when you were in Ireland a few years ago. Three were some great healings and lots of spiritual healings. I had letters from the two sisters in Australia. Their sons are now living a normal healthy life—all because of your marvelous prayers and Holy Masses. Glory to God!</p>

                                        <p>You send us all the Holy Spirit. My son is grand at the moment, thanks a million to you. Praise the Lord!</p>

                                    <p>I have spread your great work with that precious Miracle prayer and I tell everyone about the power that the Lord and His Holy Mother have given you. You are life a breath of fresh air from heaven! You bring Our Lord and Our Lady so close. One can hear the music of the angels as you walk down the aisle to say Holy Mass. May our Blessed Lady watch over you always.</p>

                                    <p>UNITED KINGDOM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TOUCHY TURNABOUT <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I attended your healing service and so enjoyed it!</p>

                                        <p>I went up for the healing blessings, not for physical healing but for a healing of emotions and memories. Exactly one week later a family member called. Some touch areas were talked about and the healing began. I’m confident it will continue, too. It was a wonderful experience. I’m a believer! I will keep you in my prayers. Thank you.</p>

                                    <p>WISCONSIN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TEN DAYS LATER <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>It was such a blessing for me to attend a Healing Mass you conducted last December in Ohio. I had the privilege of meeting you afterward. You blessed a small wooden cross my con had made for me. I thanked you—and I went home.</p>

                                        <p>It wasn’t until about ten days later that I realized I had been healed! You see, Father—for about four years I had been dependent on antidepressants for “clinical depression.” I was so stressed because of the happenings in my life that by 1985 I got so physically ill, I though I would die! Sometimes I wished I would have.</p>

                                        <p>I was on such a “high” after your Healing Mass—that it wasn’t until about en days later that I realized I hadn’t taken even one of my pills.</p>

                                        <p>Praise the Lord! I have been healed, Fr. Rookey. I have not taken my medication since.</p>

                                        <p>Through you— God has freed me! He has given me back my life! Thank you, Father! I will never forget you! I’ll pray for you always! And I hope one day, we’ll meet again! God bless you,</p>

                                    <p>OHIO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">LOVE, GRACE AND JOY <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>What Divine love, grace and joy to have had you talk and heal people at the Friends House. S0 many healed, including myself: inner healing of peace. But most of all—it was the Divine Love and compassion from your heart as you spoke to all. “As God is Love” and it poured from you to all. God keep you.</p>

                                    <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">ATTITUDE GREATLY IMPROVED <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Members of my family and I were privileged to attend your beautiful Healing Mass last summer.</p>

                                        <p>Prior to your visit my brother had endured several major surgeries, hospitalizations, etc. It seemed this resulted in his having a pessimistic attitude.</p>

                                        <p>It was very evident that after your special blessing my brother’s attitude had greatly improved and he felt he may be healed.</p>

                                    <p>I give you credit for the healing of my legs—and helping my diabetes. You to me are like Him. Love you always. Thank you for your blessings.</p>

                                    <p>WISCONSIN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PRAYER CHANGES PEOPLE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>Through the grace of God I managed to bring my mother along to the Healing Service.</p>

                                        <p>I know you meet a great number of people, but do you remember praying over a girl that day? She was on the floor for some time. You sprinkled her with holy water and she screamed.</p>

                                        <p>Fr. Peter, that was me.</p>

                                        <p>I could hear you saying,” Does anybody know her name?” I knew that you did not know who I was. I could not bring myself to remind you because there were so many people around us, and they seemed to need you more than I did. I was talking to my sister about the tremendous healing I had received and she even said herself that in the last two years since the tremendous healing in Medjugorje, I had changed beyond recognition. I praise God for it. Since my mother came back from that Mass and Healing Service, she too has changed.</p>

                                        <p>As I’ve tried to explain to my mother on many occasions, my faith must be a challenge to me; it must be reaching out to others and growing in maturity, spiritually.</p>

                                        <p>Our Blessed Lady has surprised me and blest me for more than I deserve.</p>

                                        <p>I thank you for allowing yourself to be the vessel from which the waters of life flow. I will hold you especially before our Blessed Lady that the power of the Most High will come upon you and continue to anoint you.</p>

                                    <p>ENGLAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">EMOTIONAL HEALING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>When you visited our Church in 1991, I asked you for a healing for a friend. She had been suffering from cancer and had been severely depressed over the past year. At the time of the service, she was hospitalized. They had drained her lungs repeatedly. Through 1990 they found suspicious cells in the fluid.</p>

                                        <p>All last year whenever I talked to her, she cried. She cried at work and she told me many times that she went home every night and cried.</p>

                                        <p>Since January 1991 she has seemed to be a changed person. Whenever I talk with her, she is in good spirits. She hasn’t cried and even jokes and laughs. She is fighting to get better and is happily looking forward to getting the chemotherapy and going back to work. Whether God will cure her disease remains to be seen, but He has certainly healed the spirits of this woman. I have not approached her about this, but believe me, God did an emotional healing because she is like her old self, joking and laughing.</p>

                                    <p>NEW YORK</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GIFT OF COURAGE <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I am writing to ask you to do a few prayers for my family and myself. I am twenty-four years old and seven years ago I was diagnosed as having a disease similar to MS.</p>

                                    <p>I went to see you in June and you gave me great faith. Although I was not healed physically, I got an inner healing and I found courage and strength to help myself. I found myself thanking and praising God for what I’ve got. You see, I have a wonderful husband, a two year old daughter and another baby is due in December. My mother is also very good and helpful with everything.</p>

                                    <p>I know that there are millions of people worse off than me but I know if I keep praying and keep my faith, I will get physical healing.</p>

                                    <p>IRELAND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">GENTLE CLASP <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I was at your Healing Mass on September 29th and something happened that was important to me as the answer to a prayer and I thought you might be interested in it also.</p>

                                        <p>I have been praying the enclosed prayer, “not finding a warm hand to hold . . . Take my hand with a strong and gentle clasp.” It is from a Daily Catholic Devotions called “Living Faith.”</p>

                                        <p>While trying to get close enough to shake your hand after the Mass and anointing, others kept getting between us. But suddenly you reached around the back of the one in front of me and gave me a warm hand clasp. I felt my prayer had been answered, ‘take my hand with a strong and gentle clasp.”</p>

                                        <p>At the anointing, too, I experienced the resting in the Spirit. I felt like I could lie there all night but struggled up to make room for others. I felt weak even after I got home and just rested in the Spirit for an hour or so. I didn’t want to read or write or watch TV early and I had this restful time with the Spirit all to myself.</p>

                                    <p>The Rosary of Our Lady of Sorrows, too, brought to mind my son who was killed in an automobile accident twelve years ago. At that time I felt him saying over and over, “I love you, Mom.” For the first time since his death I though to day “I love you,” and felt it. Maybe he’s been waiting for that. He had a tragic life—studied to be a priest and as rejected—then married twice and both wives left him.</p>
                                        <p>I am enclosing an offering and would be most grateful if you would send me the Rosary of Our Lady of Sorrows. With gratitude to God and you.</p>

                                    <p>CALIFORNIA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">A PEACEFUL FEELING <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>I attended your Healing Mass on July 15 in Our Lady Queen of Peace Church. During Mass, when standing, I had a warm feeling through my body and a trembling feeling in my legs. I had the same experience while waiting for you to pray over me. I did go down in the Spirit.</p>

                                        <p>When driving home with my two sisters, I had detected the smell of roses. The scent was very strong. I asked my sisters whether they had put perfume on and both said, “no.” Neither one of them detected the aroma. I did come home with a peaceful feeling.</p>

                                        <p>May God bless you with good health, watch over you and give you strength to continue your good works. I have you in my prayers.</p>

                                    <p>NEW JERSEY</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">NEW EVALUATION <span class="icon"><i class="fa fa-plus"></i></span></div>
                                <div class="accordion-body">
                                    <div class="story-content">
                                        <p>Dear Fr. Rookey,</p>

                                        <p>On December 1, attended a Healing Mass at our parish in Chicago.</p>

                                        <p>My children had been placed in a foster home in January. This past week I wanted to end my life. The stress was far greater than I was capable of handling. I was even considering being admitted into a hospital. I was feeling very hopeless.</p>

                                        <p>When I saw my Doctor that day, she wanted to increase my anti-depressant. I said, “No,” knowing I would be attending Mass with you in the evening.</p>

                                        <p>I received the gift of tears. Praise the Lord! Today I feel I once again can conquer anything with the Lord at my side, I value my life abundantly. Thank you for being an open vessel of our Heavenly Father.</p>

                                    <p>ILLINOIS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>

    <script>
        function showCategory(categoryId) {
            // Update Tab Buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
                if(btn.getAttribute('data-category') === categoryId) {
                    btn.classList.add('active');
                }
            });

            // Update Content Panes
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
            const targetPane = document.getElementById(categoryId);
            if(targetPane) {
                targetPane.classList.add('active');
            }

            // Scroll to top of content on mobile
            if (window.innerWidth < 992) {
                document.querySelector('.testimonies-content').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        // Accordion Logic
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentElement;
                
                // Toggle current item
                item.classList.toggle('open');
                
                // Optional: Close other items in the same list
                /*
                const siblings = item.parentElement.querySelectorAll('.accordion-item');
                siblings.forEach(sibling => {
                    if (sibling !== item) sibling.classList.remove('open');
                });
                */
            });
        });
    </script>
</body>
</html>
