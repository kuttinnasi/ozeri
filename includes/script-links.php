    <script src="<?php echo BASE_URL; ?>/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        // Disabled mobile toggle to keep navigation layout like first image
        document.addEventListener('DOMContentLoaded', () => {
            const mobileToggle = document.querySelector('.mobile-toggle');
            if (mobileToggle) mobileToggle.style.display = 'none';
            
            // GLightbox Initialization
            const lightbox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true,
                width: 'auto',
                height: 'auto',
                descPosition: 'bottom'
            });

            // Auto-setup GLightbox for Relics page if we are on it
            const relicItems = document.querySelectorAll('.relic-item');
            if (relicItems.length > 0) {
                relicItems.forEach(item => {
                    const link = item.querySelector('a');
                    const img = item.querySelector('img');
                    const caption = item.querySelector('.relic-caption');
                    
                    if (link && img) {
                        link.classList.add('glightbox');
                        link.setAttribute('href', img.getAttribute('src')); 
                        if (caption) {
                            link.setAttribute('data-description', caption.innerText);
                            // No title set to match reference image
                        }
                    }
                });
                
                // Refresh lightbox to recognize dynamically added glightbox classes
                lightbox.reload();
            }


        });
    </script>