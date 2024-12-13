<?php
function renderBreadcrumbs($breadcrumbs)
{
    echo '<nav class="p-breadcrumbs">';
    echo '<ul class="p-breadcrumbs__list p-breadcrumbs__list-ambassador">';
    foreach ($breadcrumbs as $index => $breadcrumb) {
        echo '<li class="p-breadcrumbs__item">';
        if (isset($breadcrumb['icon'])) {
            echo '<img src="' . htmlspecialchars($breadcrumb['icon']) . '" alt="' . htmlspecialchars($breadcrumb['alt']) . '" class="p-breadcrumbs__icon">';
        } else {
            echo '<span class="p-breadcrumbs__text">' . htmlspecialchars($breadcrumb['text']) . '</span>';
        }
        if ($index < count($breadcrumbs) - 1) {
            echo '<img src="/assets/images/breadcrumbs/arw-thin-min.svg" alt="矢印" class="p-breadcrumbs__separator">';
        }
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}
