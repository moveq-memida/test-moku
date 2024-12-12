<?php
function renderStatus($steps)
{
    echo '<ul class="p-status">';
    foreach ($steps as $step) {
        $stateClass = isset($step['state']) ? ' p-status__item--' . htmlspecialchars($step['state']) : '';
        if (isset($step['icon'])) {
            echo '<li class="p-status__icon"><img src="' . htmlspecialchars($step['icon']) . '" alt="矢印"></li>';
        } else {
            echo '<li class="p-status__item' . $stateClass . '">' . htmlspecialchars($step['text']) . '</li>';
        }
    }
    echo '</ul>';
}
