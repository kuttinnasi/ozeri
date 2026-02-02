<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Personal Testimonies &#8211; Fr Peter Mary Rookey</title>
    <meta name="description" content="Read personal testimonies of healings and miracles shared by people from around the world." />
    <?php include 'includes/head-links.php'; ?>
    <style>
        .testimonies-table-section {
            padding: 40px 0;
            background: #fff;
        }
        .page-title {
            font-size: 32px;
            color: #333;
            margin-bottom: 30px;
            font-weight: 400;
        }
        .testimonies-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            border: 1px solid #ddd;
        }
        .testimonies-table thead tr {
            background-color: #1a4b7e;
            color: #ffffff;
            text-align: left;
        }
        .testimonies-table th {
            padding: 12px 15px;
            font-weight: 600;
            font-size: 16px;
            border-right: 1px solid rgba(255,255,255,0.2);
        }
        .testimonies-table th:last-child {
            border-right: none;
        }
        .testimonies-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
            font-size: 16px;
            line-height: 1.6;
            color: #444;
        }
        .testimonies-table tr:nth-of-type(even) {
            background-color: #f2f2f2;
        }
        .col-no {
            width: 50px;
            text-align: center;
            font-weight: normal;
            font-size: 16px;
        }
        .col-name {
            width: 150px;
            text-align: center;
            font-weight: normal;
        }
        .col-text {
            text-align: justify;
        }
        
        @media (max-width: 768px) {
            .testimonies-table thead {
                display: none;
            }
            .testimonies-table, .testimonies-table tbody, .testimonies-table tr, .testimonies-table td {
                display: block;
                width: 100%;
            }
            .testimonies-table tr {
                margin-bottom: 15px;
                border: 1px solid #ddd;
            }
            .testimonies-table td {
                text-align: left;
                padding-left: 50%;
                position: relative;
            }
            .testimonies-table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
            .col-no, .col-name {
                width: 100%;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="testimonies-table-section">
        <div class="container">
            <h1 class="blog-title">Testimonies</h1>
            
            <table class="testimonies-table">
                <thead>
                    <tr>
                        <th class="col-no">No.</th>
                        <th class="col-name">Name</th>
                        <th>Write Your Testimonies (for Public Display)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-no" data-label="No.">1</td>
                        <td class="col-name" data-label="Name">Jonathan</td>
                        <td class="col-text" data-label="Testimony">Hi there, I have been using the prayer request function of this website, especially given my dads aggressive cancer relapse. Since then, he has gone through intensive transplant as treatment and last week his pet scan showed his cancer was in remission. Similarly, I have prayed for my mums cancer which has stayed stable. And Milo our retriever who I also prayed for has started to improve, Praise God and thank you for all your prayers! Jonathan.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">2</td>
                        <td class="col-name" data-label="Name">Catherine donohue</td>
                        <td class="col-text" data-label="Testimony">He called hospital when my daughter was in icu on kidney dialysis prayed over her she was 3 she’s 19 now no side affects.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">3</td>
                        <td class="col-name" data-label="Name">Diácono Pedro</td>
                        <td class="col-text" data-label="Testimony">Olá, me chamo diácono Pedro,diocesano ! e hoje venho piedosamente solicitar algumas relíquias ex indumentis tenho total ciência sobre a sagrada As relíquias então hoje venho piedosamente solicitar algumas relíquias para que eu possa propagar a devoção peço também material devocional para que eu possa fazer trabalho de divulgação divulgar a devoção! Desde já muito obrigado! Atenciosamente: diácono Pedro Ferreira! Aqui está meu endereço para envio! Deus abençoe! D.Pedro Ferreira Q s 13 rua 3 Centro Numero 17 Vila São Joaquim Sobradinho Bahia CEP 48925-000 Brasil.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">4</td>
                        <td class="col-name" data-label="Name">Father Giovanni</td>
                        <td class="col-text" data-label="Testimony">For information of contact for Fr Rookey.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">5</td>
                        <td class="col-name" data-label="Name">Annmarie Wright</td>
                        <td class="col-text" data-label="Testimony">Shortly before 2012 I painted a picture of Our Lady for Father Rookey, and I was surprised when he called me to thank me for it. My friend Rosa was volunteering with him and his ministry in Chicago, and she gave him my phone number. I was overwhelmed. I didn’t think to ask him for prayers for my spiritual, emotional and physical healing. I was kind of dumbfounded. I would like to ask you to please pray that he will pray for my petitions in those areas. I am so hopeful, and I pray that he will be granted to be among the saints in our church. I believe he’s a very holy man. Thank you so much. Annmarie.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">6</td>
                        <td class="col-name" data-label="Name">	Steven Groome</td>
                        <td class="col-text" data-label="Testimony">I was born with a serious heart condition.There is a hole in my heart and the valves are sending the blood in the opposite direction that they should be . There is also a leak in my heart .When I was a baby Fr.peter Mary Rookey came here to Ireland and my family brought me to see him . He chose me out of a crowd of hundreds and prayed over me .I was on a lot of different medications and after i saw fr.peter Mary Rookey that day I didnt need the medications and every appointment I have went to since doctors always assume I had a correction but I had no operation . They look for scars every time from an operation but I dont have any ! Fr Rookey saved my life and I will be forever grateful.My life expectancy wasnt great as a baby but I am alive and well at 29 years old thank God . On my hospital records it says I had a correction but I never had surgery in my life and have no scars on my body yet my heart was corrected .My hospital records are there to prove all this .There is no other explanation for my cure . Fr . Rookey is a saint and deserves to be known as one on earth . Yours sincerely Steven Groome.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">7</td>
                        <td class="col-name" data-label="Name">Edivânia santos</td>
                        <td class="col-text" data-label="Testimony">Olá, boa tarde! Paz e bem! Gostaria de escrever a vossa senhoria e expressar meu desejo em obter o material de devoção e a sagrada relíquia do Servo de Deus Frei Peter Para que eu possa cada dia mais me espelhar na sua vida de bondade, amor a Cristo e na caminhada de fé. Sou Edivânia, sou do Rio de Janeiro(Brasil) e sou paroquiana na Paróquia São Sebastião de Austin, aonde na qual eu e meu Esposo fazemos parte do ECC (Encontro de Casais com Cristo). Por isso gentilmente escrevo fazendo esse pedido para minha devoção e veneração, desejo com a graça de Deus e sua bela intercessão alcançar as graças necessárias na minha família e amigos. Paz e bem! Meu endereço: Edivânia Santos Rua Riachão - N° 150 Bairro: Riachão Cep: 26084130 Nova Iguaçu, Rio de Janeiro, Brasil.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">8</td>
                        <td class="col-name" data-label="Name">Elizabeth Kane</td>
                        <td class="col-text" data-label="Testimony">i was blessed to attend 2 healing Masses offered by Fr Rookey in the Indianapolis area - i also was blessed to talk to him while he was in front of the Blessed Sacrament in Chicago. i was healed of my addiction to smoking and drinking alcohol. i had tried several times to quit smoking and my weak will kept me from being able to sustain it. i attribute my healing to Fr Rookey’s intercession - my addiction was removed, lifted and no cravings since 1998 - been 25 years!! i praise God and thank Him for this grace and for the help of His wonderful servant & future saint, Fr Peter Mary Rookey!! Please pray for us!! love you so much!! 🙏🏼💓🙏🏼.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">9</td>
                        <td class="col-name" data-label="Name">Sean Ferris</td>
                        <td class="col-text" data-label="Testimony">i am not sure if anyone else has experienced this and im not sure if it means the lord wants me to tell more people about my experience maybe to help those who are unsure in there faith but i was asked to go to a healing mass when my wife and i first got married i explained that there wasnt anything physicaly wrong with me at the time i was young and healthy i had stopped going to mass for a while but in my heart i never doubted in the cathlic faith i guess i had my own reasons i needed to sort out but at this point i was going to mass and saying prayers regularly as the mass was coming to an end we were asked to come up to be prayed over i stood up and looked towards father rookey and his face was bright as the sun so much i could hardly look as try to see into the light i could make out another persons face not father rookeys it was very hard to see but to me i believe it was jesus after mass i hesitated to tell my wife but when i did she told me that she also had seen the light i wouldnt have doubted it either way but it was nice to here that she also saw such an amazing gift since then we have been blessed to raise four wonderful healthy children wich i am so greatful for has anyone else had this experience and i cant help to think maybe there is more that our lord wants me to do because of this gift that he gave us thank you sean ferris.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">10</td>
                        <td class="col-name" data-label="Name">Michael</td>
                        <td class="col-text" data-label="Testimony">Over the past year since 2022 I first heard of Fr through OSMM and was fascinated by the amount of miracles that happened during his time as a priest and here on earth, yesterday I was told by my fiancé that her friend was 25 weeks pregnant and her baby was close to not making it, turns out last night or this morning the baby miraculously survived, I prayed for both the Mother and the baby with the intercession of Fr. Karlene Marie Faye 1 pound 8 oz 12 inches long.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">11</td>
                        <td class="col-name" data-label="Name">Karie Kinzler</td>
                        <td class="col-text" data-label="Testimony">I had a tubal ligation after my twins were born back in 1993. Our daughters were are 4th and 5th children. I was only 31 years old. By 1998, through the grace of God, I realized my sin of sterilization. I was working in a Catholic bookstore at the time and was trying to figure out what to do...it seemed no one could help me.. One day a woman came into the bookstore with a grocery bag of Catholic b9oks that she had read and wanted to pass on for others to read. I told her that I would take them and find a home for them. When I looked into the bag, there was a picture of a priest smiling on the cover of a book. It was Father Rookey!! I was immediately drawn to his warm smile, and picked it right up to look at and to see who this was. I cant remember the title of the book, but I read the whole book within a few days. The book talked about his healings and miracles of healings. As Divine Providence would have it, in the book there was his card with his picture on it and the Miracle Prayer on back. There was an address on back of card: The International Compassion Ministry in Olympia Fields, IL. I immediately wrote him a letter telling him about my remorse of my sterilization and how I wanted to reverse it. I did not know if he was even alive, but I wrote the letter and sent it off. Within a few weeks, I received a letter from him!! I couldnt believe it!! He wrote me back. In His letter he reminded me of Gods love and forgiveness. He gave me hope. I did have reversal in 2003.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">12</td>
                        <td class="col-name" data-label="Name">DANNY SIAROT DEIPARINE</td>
                        <td class="col-text" data-label="Testimony">Dearest Brother/Sister/Fr.: A good day to you! Hello! Im Danny S. Deiparine, a Filipino living in Plan Housing in Cambuhawe, Balamban, Cebu. I work as a certified professional teacher and am a devout Roman Catholic who teaches Kindergarten students in one of the schools here in the Philippines. I am also an active member in the Lectorate Ministry and Social Communication Member in our parish - St. Francis of Assisi Parish, Balamban, Cebu, Philippines. In light of this, I humbly request a free relic of Fr. Rookey -⛪⛪⛪ Im grateful. SIAROT DEIPARINE DANNY Relic Custodian Plan Housing, Balamban, Cambuhawe, Cebu or Balamban Central Elementary School Baliwagan, Balamban, Cebu, Philippines 09322709746/639606150892.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">13</td>
                        <td class="col-name" data-label="Name">Mark Daley</td>
                        <td class="col-text" data-label="Testimony">My son is in hospital in he appeared in a dream with me last night I was suppose to have clubbed hands and feet my mother prayed with him every night Said rosary over my son last night and he appeared in dream saying your mother prayed with me now you can to.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">14</td>
                        <td class="col-name" data-label="Name">Joy Swanson</td>
                        <td class="col-text" data-label="Testimony">Several years ago I went to a healing mass with my husband, elderly mother and her friend. Fr. Rookey prayed over my mother and I and we were slain in the spirit. I felt such peace and love and realized the tears were streaming down my face as I walked back to our pew. When we left the church it was extremely cold walking back to our car as it was winter but we could all smell the the scent of roses. I look back now and realize that my faith has grown stronger and I feel that I see the blessings and miracles in my life much clearer. ❤️</td>
                    </tr>

                    <tr>
                        <td class="col-no" data-label="No.">15</td>
                        <td class="col-name" data-label="Name">Mike Bohnert</td>
                        <td class="col-text" data-label="Testimony">He would say that sometimes the Lord would send the smell of roses through the church and then say let’s see if it happens tonight…..then there would be people reacting as the smell of roses travelled through the church as if in streams</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">16</td>
                        <td class="col-name" data-label="Name">Todd R Kerkhoven</td>
                        <td class="col-text" data-label="Testimony">Back in Roughly 2010 I had a severe pinch nerve in my neck. The doctors said that they were gonna have to do Surgery. I was given all the Pre Operation test. I had to wait for the doctor to go on a 2 week honeymoon And meet up with him before before the surgery. My cousin Linda Kerkhoven Of Davenport Iowa.Knowing how much pain it was in Said why dont you go visit father rookie. I live in Homewood Illinois and he was in Olimpia fields Il. I made an appointment and I want to see him. We ssid the divine chaplet And he blessed me. 2 weeks later I met up with the doctor. I walked in the room shook his hand squeezed it so hard he told me to stop. I couldnt do that before. The surgery was canceled. By the grace of God I was healed Through father Rookie. I am a carpenter and I would go see him when work was slow and he would pray with me to find work and it always came through. He was a great man doing Gods work. I miss him Thank you Father Rookie for your help though the Grace of God.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">17</td>
                        <td class="col-name" data-label="Name">Mary Joyce</td>
                        <td class="col-text" data-label="Testimony">Approximately Twenty Eight years ago Fr Rookey came to Oxford My sisters son wa about year and half or Two years. The church was packed,my sister was middle way in the church. My sisters little boy was born with alot of medical problems hes got special needs He started to cry my poor sister done her best to console him but to no avail She decided to go out of the church so she wouldnt be disturbing anyone. As she was about to stand up,she heard Fr Rookey tell everyone to shush. My sister thought,he was going to tell her, please keep the child quiet or leave the church. His next words were amazing. He told everyone shush, listen to the crys of an Angel. Of course everyone did. Fr Rookey had not met my sister or her little son at that time. He did not know he had special needs. My sisters little boy eventually stopped crying. It was eventually our turn to go up and get a blessing from fr Rookey. And he was able to tell my sister all about her son..she had not seen or spoken to him before that. It was absolutely amazing. That little boy will be 30 years old on the 17 th September 2022. He is still an Angel from god. The doctors asked my sister to abort him. When he was born they said he wouldnt live,hed die when he was about one year old. When he passed that they said he may make it to 5 years As I said he will soon be thirty Please pray for him and my sister She is going through a very hard time at the moment in her marriage Please pray for her and her familyThank You.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">18</td>
                        <td class="col-name" data-label="Name">Shawndra Villano</td>
                        <td class="col-text" data-label="Testimony">He healed my daughters tear ducts the day before her surgery.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">19</td>
                        <td class="col-name" data-label="Name">Eduardo Veloso Caliwara jr.</td>
                        <td class="col-text" data-label="Testimony">fr. peter rookey , please help me and pray for me because im suffering for my stomach problem please pray for me a good body condition and healthy body amen.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">20</td>
                        <td class="col-name" data-label="Name">Gina Tohill</td>
                        <td class="col-text" data-label="Testimony">Fr Rookery prayed with me over the phone for my husband Michael who was in in hospital suffering his 3rd heart attack ..my Husband was in his hospital 13 weeks he had his surgery on 1st July 2013 and he is still with us thank God ...Fr Rookery assured me he would be praying for him and for me to continue to pray the Miracle prayer that my husband was going to be ok ...I can never thank Fr Rookey enough im so glad i got to actually speak to him ...I felt i was already in the presence of a Saint...God rest you Fr Rookery God bless you with your canonisation and please pray for us especially my young grandson liam who is in grip of drugs addiction s and needs help Amen. Gina Tohill Belfast Ireland.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">21</td>
                        <td class="col-name" data-label="Name">Colleen Seiter</td>
                        <td class="col-text" data-label="Testimony">I had the honor and privilege to volunteer as a call screener and if Father was there he always took the call. We would write down the name, location and intention so Father could take more calls. If there was a break from the calls he would be reading his Bible. He is the most Holy human being I have ever met.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">22</td>
                        <td class="col-name" data-label="Name">Tessa donoghue</td>
                        <td class="col-text" data-label="Testimony">My son Lenny was born with half a working heart he had heart surgery wen he was 2 days old he had other complications with his heart that he was given very little chance of living he was given his last rights the doctors gave up on him said he would not make it a freind of my husband that he hadnt seen in years was outside the hospital we told him about Lenny he went and said Ill he back soon his wife handed us fr rookeys prayer I said it every night over Lenny until knew it without looking Lenny got better the doctors could not believe that he pulled through Lenny also had a prayer warriors praying for him all over the world Lenny is 1 yr half now. A truly mirical prayer..Lenny has a Facebook page called Lenny the lion you will see his miracle journey. God bless.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">23</td>
                        <td class="col-name" data-label="Name">Morgan MC Hugh</td>
                        <td class="col-text" data-label="Testimony">Hi my name is Morgan MC Hugh from Ireland. I was taken to see Fr. Rookey at Mels cathedral Longford as a child about 7 / 8 years old. I suffered from very bad sinus head pain., I had to stay in a dark room and in bed for days. Until I was touched by Fr. Rookey, and to this day I have never suffered from it since. And I smoke which is not good for the sinus. I am 50 now. I can say it was a miracle from God through Fr. Rookey. God bless him.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">24</td>
                        <td class="col-name" data-label="Name">Dr. Matt Hammett</td>
                        <td class="col-text" data-label="Testimony">I knew Fr. Rookey from Our Lady of Sorrows Basilica early 90’s. I use to smell roses around him, happened multiple times. I asked him what it meant, he replied in a letter I still have, “ it’s a true manifestation of Our Lady, a blessing from heaven.” He supported me in prayer over phone many times, often I’d smell roses during these encounters and experience great peace and spiritual healing with him. It led to my conversion to the Catholic Faith and to study healing. I have been a practicing devout Catholic and a chiropractor with four kids!.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">25</td>
                        <td class="col-name" data-label="Name">Dianne Resciniti</td>
                        <td class="col-text" data-label="Testimony">This year my right knee became more painful upon any contact with any surface, including the padded kneeler at church. I did not know why or what set off this condition. I googled the symptoms and everything seemed to indicate I suffered from bursitis. Im not athletic, I dont over use it in anytime or work routine and I didnt think I strained it, so I chalked it up to old age. Nonetheless, by the middle of March, it became painful to take a short drive to do errands. By the end of March, I was in pain doing nothing - just at rest. I was to the point of needing medication to relieve the pain. On Sunday, April 2, after returning from Latin Mass, I was writing a note to someone at my desk, where I have Father Rookeys prayer card with his first class relic, along with various pictures of Jesus and the Virgin Mary. I took the card and put it to my knee and said, Father Rookey, could you please heal my knee in Jesus name and make this pain go away. Within 10 minutes the pain was gone, and it has not returned, whether I am genuflecting, kneeling or on my knees cleaning my house or playing with my cat Cookie. Father Rookeys intercession through the power of Jesus Christ has taken the pain away and is healing or has healed the bursitis. AMEN! This is a miracle.</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">26</td>
                        <td class="col-name" data-label="Name">Patricia O'Campo</td>
                        <td class="col-text" data-label="Testimony">Patricia O'Campo of Phoenix, Arizona called me and told me of a miraculous healing that has occured for her, through praying for Father Peter's intercession before God. She said that she had a strange, large lump which appeared out of nowhere, on her head, and was going to need surgery to remove it. She prayed and prayed, and it disappeared! Praise God!</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">27</td>
                        <td class="col-name" data-label="Name">Mark A. Zbylut</td>
                        <td class="col-text" data-label="Testimony">I first came to the healing Mass about November of 1992. The Basilica seemed to have no funds at all. I wanted to support the Church and decided to become an "Audio Missionary." I had spent 8 years in the Army as a Signal officer and wanted to use my gift for technology for Our Lady. Not being able to stay employed in Pro audio due do the economy, I made audio support for evangelism my avocation under the name Revelation Audio. About 02/93 I began bringing my own microphones, cables, mixer, stands and such to support the volunteer choir that attended the healing services. I did this for about 3 years. I regret that one day the pianist, who came from Grand Rapids, MI invited an electric guitarist to play with her; without regard for the opinions of the others from Chicago. I felt it was a Holy Mass and not a rock concert. I felt forced to leave and take my equipment being unable to reconcile. Father's love for everyone was precious and he loved serving our Lord. Hail Mary!</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">28</td>
                        <td class="col-name" data-label="Name">Cheryl Turner</td>
                        <td class="col-text" data-label="Testimony">I met Father Rookey In 1996 in Santa Fe, New Mexico at Saint Francis Cathedral. I attended his Mass. I smelled a fragrance of roses and lilies while praying the rosary with him. When father held up his crucifix over my head, I fell asleep in the spirit. I lay asleep on the ground for a while. I’ve written him letters over the years and he has responded typically with Bible verses, prayers and kindness. He made time to write back. He was kind, generous and patient with the multitude of people. Over the years I’ve received many miraculous healings within my family. My brother cured from pancreatic cancer (2023), my daughter from a spinal tumor(2003), my nephew for receiving all his sacraments before death (2017). I believe Father Rookey intercedes for us in heaven today! Many Blessings! Cheryl Turner</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">29</td>
                        <td class="col-name" data-label="Name">Olivia cabrera</td>
                        <td class="col-text" data-label="Testimony">I remember when I went to see him in Indiana he prayed for me and my friend I could feel the healing of God he blessed my statue of my virgen Mary....very powerful priest, he will be truly missed 😔</td>
                    </tr>
                    <tr>
                        <td class="col-no" data-label="No.">30</td>
                        <td class="col-name" data-label="Name">Mary Frausto</td>
                        <td class="col-text" data-label="Testimony">Married 10 ten years and we could not conceive due to a brain tumor I had. Father Peter Rookey prayed for me on Relevant Radio a Catholic Radion Station. He said I WOULD conceive, not if it's God's will. I WOULD CONCEIVE. He also said maybe you will have twins. We have two beautiful girls who are now 14/15 years old. We call them our Irish twins. So grateful for our two miracles. Father Rookey did not heal my tumor and the tumor was removed when the girls were 2/3 years old. We pray for Father Rookey; may he rest in peace. We pray that one day he will become a Saint because of all the people he healed on Earth. I pray The Miracle Prayer every day and I encourage you to do the same. With prayers, thanks and love - YSIC, Mary</td>
                    </tr>





                </tbody>

            </table>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/script-links.php'; ?>
</body>
</html>
