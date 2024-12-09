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

<main class="c-bg-yellow pt195 pb160">
    <div class="l-voice wide-wrap">
        <div class="c-hd-title-inner">
            <h2 class="c-hd-title-en zenkaku">Voice</h2>
            <p class="c-hd-title-ja">お客様の声</p>
        </div>
        <div class="c-breadcrumbs">
            <p class="c-breadcrumbs-inner">
                <img src="/assets/images/breadcrumbs\home.svg" alt="パンくずリストアイコン" class="c-breadcrumbs-img-home">
                <img src="/assets/images/breadcrumbs\arw-thin-min.svg" alt="パンくずリスト矢印" class="c-breadcrumbs-img-arw">
                <span class="c-breadcrumbs-txt">お客様の声</span>
            </p>
        </div>
        <div class="p-voice__inner">
            <p class="p-voice__txt">現在準備中です！<br class="pc">更新されるまでしばらくお待ちください。</p>
            <div class="p-voice__img">
                <picture>
                    <source srcset="/assets/images/voice/voice.png 1x, /assets/images/voice/voice@2x.png 2x" />
                    <img src="/assets/images/voice/voice.png 1x" alt="現在準備中です！更新されるまでしばらくお待ちください。">
                </picture>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/components/Footer.php';
?>
