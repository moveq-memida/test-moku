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
            <section class="l-section l-section--flow wide-wrap">
                <div class="l-container">
                    <div class="c-section-header">
                        <h3 class="c-section-header__title">Entry Flow</h3>
                        <p class="c-section-header__subtitle">応募の流れ</p>
                    </div>
                    <ul class="c-flow">
                        <li class="c-flow__item">
                            <picture class="c-flow__image-wrapper">
                                <source srcset="/assets/images/ambassador/entry.png 1x, /assets/images/ambassador/entry@2x.png 2x">
                                <img
                                    src="/assets/images/ambassador/entry@2x.png"
                                    alt="応募"
                                    class="c-flow__image">
                            </picture>
                            <h4 class="c-flow__step">step１：<span class="c-flow__step-highlight">応募</span></h4>
                            <p class="c-flow__description">
                                このページの最下部にあるエントリーフォームより、必要事項を記入して送信してください。
                            </p>
                            <p class="c-flow__note">
                                ※迷惑メール等の受信拒否設定をされている方は@move-q.comのドメインからのメールが受信されるよう、設定をご確認ください。
                            </p>
                        </li>
                        <li class="c-flow__arrow">
                            <img src="/assets/images/ambassador/arw.svg" alt="Arrow" class="c-flow__arrow-image">
                        </li>
                        <li class="c-flow__item">
                            <picture class="c-flow__image-wrapper">
                                <source srcset="/assets/images/ambassador/examination.png 1x, /assets/images/ambassador/examination@2x.png 2x">
                                <img
                                    src="/assets/images/ambassador/examination@2x.png"
                                    alt="審査"
                                    class="c-flow__image">
                            </picture>
                            <h4 class="c-flow__step">step２：<span class="c-flow__step-highlight">審査</span></h4>
                            <p class="c-flow__description">
                                記入事項などの内容をもとに審査をおこない、審査通過者にご連絡をします。
                            </p>
                        </li>
                        <li class="c-flow__arrow">
                            <img src="/assets/images/ambassador/arw.svg" alt="Arrow" class="c-flow__arrow-image">
                        </li>
                        <li class="c-flow__item">
                            <picture class="c-flow__image-wrapper">
                                <source srcset="/assets/images/ambassador/action.png 1x, /assets/images/ambassador/action@2x.png 2x">
                                <img
                                    src="/assets/images/ambassador/action@2x.png"
                                    alt="活動開始"
                                    class="c-flow__image">
                            </picture>
                            <h4 class="c-flow__step">step３：<span class="c-flow__step-highlight">活動開始</span></h4>
                            <p class="c-flow__description">
                                アンバサダー就任！様々な活動を通してHabit+(ハビットプラス)の魅力を発信していただきます。
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/components/Footer.php';
?>