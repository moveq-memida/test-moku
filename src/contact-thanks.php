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
    <section class="l-thanks">
        <div class="p-thanks">
            <h2 class="p-thanks__title">お問い合わせありがとうございます</h2>
            <p class="p-thanks__txt">
                お問い合わせ内容を送信いたしました。<br>
                頂いた内容を確認後、担当者からご返答を差し上げます。<br>
                ご返答までに2～3営業日ほど頂きますのでご了承いただければ幸いです。
            </p>
            <div class="p-thanks__business">
                <p class="p-thanks__business-txt">
                    お客様相談窓口営業時間：10:00am～18:00pm(土日祝はお休みです)
                </p>
            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/components/Cta.php';
include __DIR__ . '/components/Footer.php';
?>