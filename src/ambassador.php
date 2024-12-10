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
    <div class="c-bg-yellow">
        <div class="wide-wrap">
            <div class="l-items mt195">
                <div class="c-hd-title-inner">
                    <h2 class="c-hd-title-en zenkaku">Ambassador</h2>
                    <p class="c-hd-title-ja">アンバサダー募集</p>
                </div>
                <div class="c-breadcrumbs">
                    <p class="c-breadcrumbs-inner">
                        <img src="/assets/images/breadcrumbs\home.svg" alt="パンくずリストアイコン" class="c-breadcrumbs-img-home">
                        <img src="/assets/images/breadcrumbs\arw-thin-min.svg" alt="パンくずリスト矢印" class="c-breadcrumbs-img-arw">
                        <span class="c-breadcrumbs-txt">アンバサダー募集</span>
                    </p>
                </div>
                <div class="l-mainVisual">
                    <p class="p-mainVisual__txt">Habit+(ハビットプラス)のアイテムや活動の認知・普及を、<br>
                        InstagramなどのSNSを通した発信でお手伝いしていただける仲間を募集しています。</p>
                    <picture>
                        <source srcset="/assets/images/ambassador/ambassador-phone.png 1x, /assets/images/ambassador/ambassador-phone@2.png 2x" />
                        <img src="/assets/images/ambassador/ambassador-phone.png 1x" alt="アンバサダー募集" class="p-mainVisual__img">
                    </picture>
                </div>
            </div>
        </div>
        <div class="c-bg-pink">
            <div class="l-ambassadorTxt">
                <p>「食べたい」「我慢したくない」「綺麗に、健康になりたい」<br>
                    みんなの願いをサポートするために生まれたHabit+(ハビットプラス)。</p>
                <p>ダイエットは辛いこと、我慢することという固定観念を払拭すると共に、<br>
                    たくさんの方に私たちのアイテムや活動を知ってもらいたいと考えています。</p>
                <p>「みんなと一緒にダイエットを頑張りたい」<br>
                    「健康や美に関する情報を発信していきたい」<br>
                    「頑張っている人たちの力になりたい」</p>
                <p>こんな気持ちを持っている方と共に、Habit+は成長していきたいです。<br>
                    あなたのご応募お待ちしております！</p>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/components/Footer.php';
?>