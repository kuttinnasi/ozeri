<?php
if(!function_exists('active_link')){
    function active_link($needle){
       $current_page = $_SERVER['REQUEST_URI'];
       if ($needle === 'index.php' && substr($current_page, -1) === '/') {
           return 'active';
       }
       if(stripos($current_page, $needle) !== false){
           return 'active';
       }
       return '';
    }
}
?>
<div class="top-header-wrapper">
    <div class="container">
        <div class="row align-items-center m-0 responsive">
            <!-- Collage Section -->
            <div class="col-lg-8 col-md-12 p-0">
                 <div class="banner-collage-wrapper">
                    <img src="<?= BASE_URL ?>/assets/img/header-1.png" alt="Fr. Peter Mary Rookey Life Collage" class="img-fluid w-100 d-block">
                 </div>
            </div>

            <!-- Branding Section -->
            <div class="col-lg-4 col-md-12">
                <div class="header-branding-area">
                    <div class="brand-content-wrapper">
                        <div class="brand-seal">
                            <a href="<?= BASE_URL ?>/index.php">
                                <img src="<?= BASE_URL ?>/assets/img/logo.png" alt="OSM Seal" class="seal-img">
                            </a>
                        </div>
                        <div class="brand-text">
                            <div class="cta-links">
                                <a href="<?= BASE_URL ?>/petition.php" target="_blank" class="cta-link red-link">Click here to sign petition</a>
                                <a href="#" class="cta-link blue-link">His Cause For Canonization</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- 2. Dual-Row Navigation -->
    <nav class="site-nav">
        <div class="container">
            <div class="mobile-toggle"><i class="fa-solid fa-bars"></i> </div>

            <div class="nav-menu">
                <!-- Row 1 -->
                <div class="nav-row primary-row">
                    <a href="<?= BASE_URL ?>/index.php" class="home-icon <?= active_link('index.php') ?>"><i class="fa-solid fa-house"></i></a>
                    <a href="<?= BASE_URL ?>/about-us/father-peter-mary-rookey.php" class="<?= active_link('about-us') ?>">About Us</a>
                    <a href="<?= BASE_URL ?>/biography/biography.php" class="<?= active_link('biography') ?>">Biography</a>
                    <a href="<?= BASE_URL ?>/photo-album/photos.php" class="<?= active_link('photo-album') ?>">Photo Album</a>
                    <div class="nav-dropdown">
                       <a href="#" class="dropdown-toggle <?= active_link('/videos/') ?>">Videos / Interviews <i class="fa-solid fa-caret-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="<?= BASE_URL ?>/videos/the-healing-priest-documentary.php" class="<?= active_link('the-healing-priest-documentary') ?>">The Healing Priest Documentary</a>
                            <a href="<?= BASE_URL ?>/videos/pilgrimage-of-love-holyland-film.php" class="<?= active_link('pilgrimage-of-love-holyland-film') ?>">Pilgrimage Of Love Holyland Film</a>
                            <a href="<?= BASE_URL ?>/videos/lumen-christi-tv-part-1.php" class="<?= active_link('lumen-christi-tv-part-1') ?>">Lumen Christi TV, Part 1</a>
                            <a href="<?= BASE_URL ?>/videos/lumen-christi-tv-part-2.php" class="<?= active_link('lumen-christi-tv-part-2') ?>">Lumen Christi TV, Part 2</a>
                            <a href="<?= BASE_URL ?>/videos/jerry-kelly-tv-show.php" class="<?= active_link('jerry-kelly-tv-show') ?>">Jerry Kelly TV Show</a>
                            <a href="<?= BASE_URL ?>/videos/pat-kenny-tv-show.php" class="<?= active_link('pat-kenny-tv-show') ?>">Pat Kenny TV Show</a>
                            <a href="<?= BASE_URL ?>/videos/new-life-in-jesus-tv-show.php" class="<?= active_link('new-life-in-jesus-tv-show') ?>">New Life In Jesus TV Show</a>
                            <a href="<?= BASE_URL ?>/videos/tv-news-interview-eau-claire-wisconsin.php" class="<?= active_link('tv-news-interview-eau-claire-wisconsin') ?>">TV News Interview-Eau Claire, Wisconsin</a>
                            <a href="<?= BASE_URL ?>/videos/healing-service-in-medjugorje.php" class="<?= active_link('healing-service-in-medjugorje') ?>">Healing Service In Medjugorje</a>
                            <a href="<?= BASE_URL ?>/videos/tridentine-mass.php" class="<?= active_link('tridentine-mass') ?>">Tridentine Mass</a>
                            <a href="<?= BASE_URL ?>/videos/tv-show-on-relics-of-saints.php" class="<?= active_link('tv-show-on-relics-of-saints') ?>">TV Show On Relics Of Saints</a>
                            <a href="<?= BASE_URL ?>/videos/fr-peter-rookey-and-friends.php" class="<?= active_link('fr-peter-rookey-and-friends') ?>">Fr. Peter Rookey & Friends</a>
                            <a href="<?= BASE_URL ?>/videos/healing-mass-our-lady-of-sorrows-1996.php" class="<?= active_link('healing-mass-our-lady-of-sorrows-1996') ?>">Healing Mass-Our Lady of Sorrows-1996</a>
                            <a href="<?= BASE_URL ?>/videos/missouri-charismatic-conference-mass.php" class="<?= active_link('missouri-charismatic-conference-mass') ?>">Missouri Charismatic Conference Mass</a>
                            <a href="<?= BASE_URL ?>/videos/missouri-charismatic-healing-service.php" class="<?= active_link('missouri-charismatic-healing-service') ?>">Missouri Charismatic Healing Service</a>
                            <a href="<?= BASE_URL ?>/videos/tulsa-marian-conference-mass-1992.php" class="<?= active_link('tulsa-marian-conference-mass-1992') ?>">Tulsa Marian Conference Mass 1992</a>
                            <a href="<?= BASE_URL ?>/videos/meeting-st-padre-pio.php" class="<?= active_link('meeting-st-padre-pio') ?>">Meeting St. Padre Pio</a>
                            <a href="<?= BASE_URL ?>/videos/david-parkes-story-of-healing-and-conversion.php" class="<?= active_link('david-parkes-story-of-healing-and-conversion') ?>">David Parkes-Story Of Healing & Conversion</a>
                        </div>
                    </div>
                    <a href="<?= BASE_URL ?>/memories-testimonies.php" class="<?= active_link('memories-testimonies') ?>">Memories / Testimonies</a>
                    <a href="<?= BASE_URL ?>/radio-broadcasts/radio-broadcasts.php" class="<?= active_link('radio-broadcasts') ?>">Radio Broadcasts</a>
                    <a href="<?= BASE_URL ?>/relics/relics.php" class="<?= active_link('relics') ?>">Relics</a>
                    <a href="<?= BASE_URL ?>/newspaper-articles/articles.php" class="<?= active_link('newspaper-articles') ?>">Newspaper Articles</a>
                </div>

                <!-- Row 2 -->
                <div class="nav-row secondary">
                    <a href="<?= BASE_URL ?>/prayers/pray-the-rosary.php" class="<?= active_link('pray-the-rosary') ?>">Pray the Rosary with Fr. Peter</a>
                    <a href="<?= BASE_URL ?>/podcasts-channels/podcasts.php" class="<?= active_link('podcasts') ?>">Podcasts Channels</a>
                    <a href="<?= BASE_URL ?>/pray-the-miracle-prayer-with-fr-peter/pray-the-miracle-prayer-with-fr-peter.php" class="<?= active_link('pray-the-miracle-prayer-with-fr-peter') ?>">Pray the Miracle Prayer with Fr. Peter</a>
                    <a href="<?= BASE_URL ?>/fr-peter-sings-the-stabat-mater/stabat-mater.php" class="<?= active_link('stabat-mater') ?>">Fr. Peter Sings the Stabat Mater</a>
                    <a href="<?= BASE_URL ?>/prayer-requests.php" class="<?= active_link('prayer-requests') ?>">Prayer Requests</a>
                    <a href="<?= BASE_URL ?>/admin-dashboard/petition-page-list.php" style="background:#8f9dbe; padding:3px 8px; border-radius:4px;">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>