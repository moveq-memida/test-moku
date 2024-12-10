<?php
$title = "TOPページ |【公式】habit+";
$description = "ページの説明をここに記載";
$keywords = "キーワード1, キーワード2";
$og_url = "http://habitplus/";
$og_image = "http://og.png";
$og_title = "TOP |【公式】habit+";
$og_description = "Habit+の公式サイトへようこそ。";

include __DIR__ . '/components/Header.php';
?>

<main>
    <section class="l-topic section">
        <ul class="p-topic__list">
            <li class="p-topic__item">
                <figure>
                    <img src="assets/images/noimg.png" alt="新商品をリリースしました。">
                </figure>
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">新商品をリリースしました。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item no-img">
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">お知らせの文章がここに入ります。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item no-img">
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">お知らせの文章がここに入りますお知らせの文章がここに入りますここにお知らせの文章が入りますここにお知らせの文章が入ります。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item no-img">
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">お知らせの文章がここに入ります。お知らせの文章がここに入ります。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item no-img">
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">お知らせの文章がここに入ります。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item no-img">
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">お知らせの文章がここに入りますお知らせの文章がここに入りますここにお知らせの文章が入りますここにお知らせの文章が入ります。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item no-img">
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">お知らせの文章がここに入ります。お知らせの文章がここに入ります。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item">
                <figure>
                    <img src="assets/images/img-ex-1.png" alt="Habit+のブランドサイトを公開しました。">
                </figure>
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">Habit+のブランドサイトを公開しました。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item no-img">
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">お知らせの文章がここに入りますお知らせの文章がここに入りますここにお知らせの文章が入りますここにお知らせの文章が入ります。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
            <li class="p-topic__item no-img">
                <div class="p-topic__news-txt">
                    <h2 class="p-topic__news-txt-ttl">お知らせの文章がここに入ります。お知らせの文章がここに入ります。</h2>
                    <time class="p-topic__news-txt-date">2024/08/30 </time>
                </div>
            </li>
        </ul>
        <div class="pagination">
            <ul class="pagination__list">
                <li class="pagination__item">
                    <a href="#" class="pagination__link pagination__link--prev"></a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">1</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">2</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">3</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">...</a>
                </li>
                <li class="pagination__item">
                    <a href="#" class="pagination__link">10</a>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/components/Cta.php';
include __DIR__ . '/components/Footer.php';
?>
