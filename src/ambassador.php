<?php
$title = "TOPページ |【公式】habit+";
$description = "ページの説明をここに記載";
$keywords = "キーワード1, キーワード2";
$og_url = "http://habitplus/";
$og_image = "http://og.png";
$og_title = "TOP |【公式】habit+";
$og_description = "Habit+の公式サイトへようこそ。";

require_once 'components/breadcrumbs.php';
require_once 'components/title.php';
include __DIR__ . '/components/header.php';
?>

<main class="l-main">
    <div class="c-bg-yellow">
        <div class="wide-wrap">
            <section class="l-main__header">
                <?php renderTitle('Ambassador', 'アンバサダー募集'); ?>
                <?php renderBreadcrumbs([
                    ['icon' => '/assets/images/breadcrumbs/home.svg', 'alt' => 'ホーム'],
                    ['text' => 'アンバサダー募集']
                ]); ?>
            </section>
            <div class="l-items mt195">
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
        <section class="p-entry-flow wide-wrap">
            <div class="l-container">
                <div class="c-section-header">
                    <h3 class="c-section-header__title">Entry Flow</h3>
                    <p class="c-section-header__subtitle">応募の流れ</p>
                </div>
                <ul class="p-entry-flow__list">
                    <li class="p-entry-flow__item">
                        <picture class="p-entry-flow__image-wrapper">
                            <source srcset="/assets/images/ambassador/entry.png 1x, /assets/images/ambassador/entry@2x.png 2x">
                            <img
                                src="/assets/images/ambassador/entry@2x.png"
                                alt="応募"
                                class="p-entry-flow__image">
                        </picture>
                        <h4 class="p-entry-flow__step">step１：<span class="p-entry-flow__step-highlight">応募</span></h4>
                        <p class="p-entry-flow__description">
                            このページの最下部にあるエントリーフォームより、必要事項を記入して送信してください。
                        </p>
                        <p class="p-entry-flow__note">
                            ※迷惑メール等の受信拒否設定をされている方は@move-q.comのドメインからのメールが受信されるよう、設定をご確認ください。
                        </p>
                    </li>
                    <li class="p-entry-flow__arrow">
                        <img src="/assets/images/ambassador/arw.svg" alt="Arrow" class="p-entry-flow__arrow-image">
                    </li>
                    <li class="p-entry-flow__item">
                        <picture class="p-entry-flow__image-wrapper">
                            <source srcset="/assets/images/ambassador/examination.png 1x, /assets/images/ambassador/examination@2x.png 2x">
                            <img
                                src="/assets/images/ambassador/examination@2x.png"
                                alt="審査"
                                class="p-entry-flow__image">
                        </picture>
                        <h4 class="p-entry-flow__step">step２：<span class="p-entry-flow__step-highlight">審査</span></h4>
                        <p class="p-entry-flow__description">
                            記入事項などの内容をもとに審査をおこない、審査通過者にご連絡をします。
                        </p>
                    </li>
                    <li class="p-entry-flow__arrow">
                        <img src="/assets/images/ambassador/arw.svg" alt="Arrow" class="p-entry-flow__arrow-image">
                    </li>
                    <li class="p-entry-flow__item">
                        <picture class="p-entry-flow__image-wrapper">
                            <source srcset="/assets/images/ambassador/action.png 1x, /assets/images/ambassador/action@2x.png 2x">
                            <img
                                src="/assets/images/ambassador/action@2x.png"
                                alt="活動開始"
                                class="p-entry-flow__image">
                        </picture>
                        <h4 class="p-entry-flow__step">step３：<span class="p-entry-flow__step-highlight">活動開始</span></h4>
                        <p class="p-entry-flow__description">
                            アンバサダー就任！様々な活動を通してHabit+(ハビットプラス)の魅力を発信していただきます。
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="p-faq wide-wrap">
            <div class="l-container">
                <div class="c-section-header">
                    <h3 class="c-section-header__title">Questions</h3>
                    <p class="c-section-header__subtitle">よくあるご質問</p>
                </div>
                <ul class="p-faq__list">
                    <li class="p-faq__item">
                        <div class="p-faq__question">
                            <img src="/assets/images/ambassador/q.svg" alt="質問" class="p-faq__icon">
                            <p class="p-faq__text">アンバサダー応募にあたって費用はかかりますか</p>
                        </div>
                        <div class="p-faq__answer">
                            <img src="/assets/images/ambassador/a.svg" alt="回答" class="p-faq__icon">
                            <p class="p-faq__text">費用は一切かかりません。安心してご応募ください。</p>
                        </div>
                    </li>
                    <li class="p-faq__item">
                        <div class="p-faq__question">
                            <img src="/assets/images/ambassador/q.svg" alt="質問" class="p-faq__icon">
                            <p class="p-faq__text">アンバサダー応募の応募期間はいつですか？</p>
                        </div>
                        <div class="p-faq__answer">
                            <img src="/assets/images/ambassador/a.svg" alt="回答" class="p-faq__icon">
                            <p class="p-faq__text">Habit+(ハビットプラス)のアンバサダー募集は通年行っております。<br>
                            ※募集人数が過多となった場合は予告なく募集を終了する場合がございます。ご了承ください。</p>
                        </div>
                    </li>
                    <li class="p-faq__item">
                        <div class="p-faq__question">
                            <img src="/assets/images/ambassador/q.svg" alt="質問" class="p-faq__icon">
                            <p class="p-faq__text">アンバサダーになったらどのような活動を行いますか？</p>
                        </div>
                        <div class="p-faq__answer">
                            <img src="/assets/images/ambassador/a.svg" alt="回答" class="p-faq__icon">
                            <p class="p-faq__text">
                                ・販売アイテムを実際に使用し、その様子や感想をSNSで発信する<br>
                                ・アイテム(企画段階を含む)を使用してフィードバックを行う<br>
                                ・Habit+(ハビットプラス)と共同して新アイテムを企画・商品化する<br>
                                ※不定期にお願いする場合や、ご協力をいただく案件がない期間も発生する可能性がございます。ご了承ください。</p>
                        </div>
                    </li>
                    <li class="p-faq__item">
                        <div class="p-faq__question">
                            <img src="/assets/images/ambassador/q.svg" alt="質問" class="p-faq__icon">
                            <p class="p-faq__text">Instagramのアカウントを持っていないのですが、応募できますか？</p>
                        </div>
                        <div class="p-faq__answer">
                            <img src="/assets/images/ambassador/a.svg" alt="回答" class="p-faq__icon">
                            <p class="p-faq__text">原則Instagramでの発信をお願いすることになるため、Instagramのアカウントを持っていない場合はお断りいただいています。</p>
                        </div>
                    </li>
                    <li class="p-faq__item">
                        <div class="p-faq__question">
                            <img src="/assets/images/ambassador/q.svg" alt="質問" class="p-faq__icon">
                            <p class="p-faq__text">アンバサダーの活動を途中でやめることはできますか？</p>
                        </div>
                        <div class="p-faq__answer">
                            <img src="/assets/images/ambassador/a.svg" alt="回答" class="p-faq__icon">
                            <p class="p-faq__text">やむを得ない事情がある場合は可能です。その場合は事務局にご相談ください。また、活動を一時お休みして再開を行うこともできます。その場合も事務局までご相談ください。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</main>

<?php
include __DIR__ . '/components/Footer.php';
?>