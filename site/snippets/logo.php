<!-- Checks if logo is set. If not it will display text -->
<?php
    $logoPng = 'images/logo.png';
    if (file_exists($logoPng)) {
        echo '<img src="' . $logoPng . '">';
    } else {
        echo '<span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Wondr.</span>';
    }
?>