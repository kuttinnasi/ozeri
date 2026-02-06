<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/head-links.php'); ?>
    <style>
        .error-wrapper {
            /* background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.8)), 
                        url('<?php echo BASE_URL; ?>/assets/img/slider-1.jpg'); */
            background-size: cover;
            background-position: center;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
        }

        .error-container {
            max-width: 600px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            padding: 60px 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 51, 102, 0.1);
            text-align: center;
            border-top: 5px solid var(--color-primary);
            position: relative;
            overflow: hidden;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .error-code {
            font-family: 'Playfair Display', serif;
            font-size: 150px;
            font-weight: 700;
            color: var(--color-primary);
            margin: 0;
            line-height: 1;
            opacity: 0.1;
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            z-index: 0;
        }

        .error-content {
            position: relative;
            z-index: 1;
        }

        .error-icon {
            font-size: 60px;
            color: var(--color-accent);
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.8; }
            100% { transform: scale(1); opacity: 1; }
        }

        .error-title {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: var(--color-primary);
            margin-bottom: 15px;
        }

        .error-text {
            font-family: 'Inter', sans-serif;
            color: #555;
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.6;
            font-style: italic;
        }

        .back-home-btn {
            display: inline-block;
            background: var(--color-primary);
            color: #fff !important;
            padding: 14px 35px;
            border-radius: 50px;
            font-family: 'Oswald', sans-serif;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(31, 78, 121, 0.3);
        }

        .back-home-btn:hover {
            background: var(--color-secondary);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(192, 0, 0, 0.4);
        }

        .error-suggestions {
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px solid #eee;
        }

        .error-suggestions p {
            font-size: 14px;
            color: #888;
            margin-bottom: 15px;
        }

        .suggestion-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .suggestion-links a {
            font-size: 14px;
            color: var(--color-primary);
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s;
        }

        .suggestion-links a:hover {
            color: var(--color-secondary);
        }

        @media (max-width: 480px) {
            .error-container {
                padding: 40px 20px;
            }
            .error-code {
                font-size: 100px;
            }
            .error-title {
                font-size: 24px;
            }
            .error-text {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <main class="error-wrapper">
        <div class="error-container">
            <div class="error-code">404</div>
            <div class="error-content">
                <div class="error-icon">
                    <i class="fa-solid fa-compass-drafting"></i>
                </div>
                <h1 class="error-title">Oops! Page Not Found</h1>
                <p class="error-text">
                    We Are Sorry, but the Page You Requested Was Not Found
                </p>
                <a href="<?php echo BASE_URL; ?>/index.php" class="back-home-btn">
                    <i class="fa-solid fa-house me-2"></i> Return to Home
                </a>

                <!-- <div class="error-suggestions">
                    <p>Perhaps you were looking for one of these?</p>
                    <div class="suggestion-links">
                        <a href="<?php echo BASE_URL; ?>/biography/biography.php">Biography</a>
                        <a href="<?php echo BASE_URL; ?>/photo-album/photos.php">Photo Album</a>
                        <a href="<?php echo BASE_URL; ?>/prayer-requests.php">Prayer Requests</a>
                        <a href="<?php echo BASE_URL; ?>/relics/relics.php">Relics</a>
                    </div>
                </div> -->
            </div>
        </div>
    </main>

    <?php include('includes/footer.php'); ?>
    <?php include('includes/script-links.php'); ?>
</body>
</html>
