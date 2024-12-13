<?php
function renderTitle($mainTitle, $subTitle)
{
    echo '<div class="p-title">';
    echo '<h1 class="p-title__main">' . htmlspecialchars($mainTitle) . '</h1>';
    echo '<p class="p-title__sub">' . htmlspecialchars($subTitle) . '</p>';
    echo '</div>';
}
