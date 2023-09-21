<?php

     // Read the contents of db/slider.json
                $json = file_get_contents('application/widgets/db/slider.json');

                // Convert the JSON string to an array
                $data = json_decode($json, true);

// Generar el HTML del slider
echo '<div class="nk-image-slider" data-autoplay="8000">';
foreach ($data as $item) {
    echo '<div class="nk-image-slider-item">';
    echo '<img src="' . $item['image'] . '" alt="" class="nk-image-slider-img" data-thumb="' . $item['thumb'] . '">';
    if (isset($item['content'])) {
        echo '<div class="nk-image-slider-content">';
        echo '<h3 class="h4">' . $item['content']['title'] . '</h3>';
        echo '<p class="text-white">' . $item['content']['text'] . '</p>';
        echo '<a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">' . $item['content']['button_text'] . '</a>';
        echo '</div>';
    }
    echo '</div>';
}
echo '</div>';

?>