<?php
$files = [
    'c:\laragon\www\ozeri\frrookey\photo-album\fr-rookey-and-family.php',
    'c:\laragon\www\ozeri\frrookey\photo-album\fr-rookey-priesthood-1941-1995.php',
    'c:\laragon\www\ozeri\frrookey\photo-album\fr-rookey-priesthood-1995-2014.php',
    'c:\laragon\www\ozeri\frrookey\photo-album\fr-rookey-and-friends.php'
];

foreach ($files as $file) {
    echo "Processing $file...\n";
    $content = file_get_contents($file);
    
    // Pattern matches the gallery item structure
    // We capture:
    // 1. Image SRC
    // 2. Rest of Image tag attributes (alt, etc)
    // 3. Caption content
    $pattern = '/<div class="gallery-item">\s*<img src="([^"]+)"([^>]*)>\s*<div class="caption">(.*?)<\/div>\s*<\/div>/s';
    
    $replacement = '<div class="gallery-item">
                    <a href="$1" class="glightbox" data-description="$3">
                        <img src="$1"$2>
                    </a>
                    <div class="caption">$3</div>
                </div>';
    
    // Make sure we preserve indentation roughly or just let it be (HTML doesn't care much, but nicely formatted is better)
    // The simplified replacement above will mess up indentation slightly but is functional.
    
    // Let's refine replacement to match the surrounding whitespace if possible, 
    // but a fixed indentation is fine given the context.
    
    $newContent = preg_replace($pattern, $replacement, $content);
    
    if ($newContent !== null && $newContent !== $content) {
        file_put_contents($file, $newContent);
        echo "Updated $file\n";
    } else {
        echo "No changes or error for $file\n";
    }
}
?>
