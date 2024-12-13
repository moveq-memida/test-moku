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
    <section class="p-entry-form wide-wrap">
        <div class="c-section-header">
            <h3 class="c-section-header__title">Entry form</h3>
            <p class="c-section-header__subtitle">応募フォーム</p>
        </div>
        <div class="p-entry-form__container l-container">
            <p class="p-entry-form__description">
                Habit+(ハビットプラス)アンバサダーにご興味を持っていただきありがとうございます。<br>
                下記のフォームに必要事項を入力し、送信をお願いいたします。
            </p>
            <form action="" method="post" class="p-entry-form__form">
                <div class="p-form-group">
                    <label for="name" class="p-form-group__label">お名前<span class="p-form-group__required">必須</span></label>
                    <input type="text" name="name" id="name" class="p-form-group__input" placeholder="例）山田花子" required>
                </div>
                <div class="p-form-group">
                    <label for="name_kana" class="p-form-group__label">お名前ふりがな<span class="p-form-group__required">必須</span></label>
                    <input type="text" name="name_kana" id="name_kana" class="p-form-group__input" placeholder="例）やまだはなこ" required>
                </div>
                <div class="p-form-group">
                    <label for="email" class="p-form-group__label">メールアドレス<span class="p-form-group__required">必須</span></label>
                    <input type="email" name="email" id="email" class="p-form-group__input" placeholder="例）example@mailaddress.co.jp" required>
                </div>
                <div class="p-form-group">
                    <label for="email_confirm" class="p-form-group__label">メールアドレス(確認用)<span class="p-form-group__required">必須</span></label>
                    <input type="email" name="email_confirm" id="email_confirm" class="p-form-group__input" required>
                </div>
                <div class="p-form-group">
                    <label for="tel" class="p-form-group__label">お電話番号</label>
                    <input type="tel" name="tel" id="tel" class="p-form-group__input" placeholder="例）01234567891 (ハイフンなし)">
                </div>
                <div class="p-form-group">
                    <label for="birth_date" class="p-form-group__label">生年月日</label>
                    <input type="text" name="birth_date" id="birth_date" class="p-form-group__input" placeholder="例）2000年4月1日">
                </div>
                <div class="p-form-group">
                    <label class="p-form-group__label">活用している媒体<span class="p-form-group__required">必須</span></label>
                    <div class="p-form-group__media">
                        <div class="p-form-group__media-item">
                            <input type="checkbox" name="media[]" id="media-instagram" class="p-form-group__checkbox">
                            <label for="media-instagram" class="p-form-group__checkbox-label">Instagram</label>
                        </div>
                        <div class="p-form-group__media-item">
                            <input type="checkbox" name="media[]" id="media-x" class="p-form-group__checkbox">
                            <label for="media-x" class="p-form-group__checkbox-label">X(旧Twitter)</label>
                        </div>
                        <div class="p-form-group__media-item">
                            <input type="checkbox" name="media[]" id="media-tiktok" class="p-form-group__checkbox">
                            <label for="media-tiktok" class="p-form-group__checkbox-label">TikTok</label>
                        </div>
                        <div class="p-form-group__media-item">
                            <input type="checkbox" name="media[]" id="media-youtube" class="p-form-group__checkbox">
                            <label for="media-youtube" class="p-form-group__checkbox-label">Youtube</label>
                        </div>
                        <div class="p-form-group__media-item">
                            <input type="checkbox" name="media[]" id="media-blog" class="p-form-group__checkbox">
                            <label for="media-blog" class="p-form-group__checkbox-label">ブログ</label>
                        </div>
                        <div class="p-form-group__media-item">
                            <input type="checkbox" name="media[]" id="media-other" class="p-form-group__checkbox">
                            <label for="media-other" class="p-form-group__checkbox-label">その他</label>
                            <input type="text" name="media_other" id="media_other" class="p-form-group__input" placeholder="その他の媒体の名称">
                        </div>
                    </div>
                </div>
                <div class="p-form-group">
                    <label for="instagram_account" class="p-form-group__label">Instagramアカウント<span class="p-form-group__required">必須</span></label>
                    <input type="text" name="instagram_account" id="instagram_account" class="p-form-group__input" placeholder="例）@instagram_account">
                    <p class="p-form-group__note">＊その他媒体についてはアピール項目にご入力ください</p>
                </div>
                <div class="p-form-group">
                    <label for="attachment" class="p-form-group__label">添付資料</label>
                    <input type="file" multiple accept="image/*" style="display:none" name="attachment" id="attachment" class="p-form-group__input">
                    <button id="fileSelect" type="button">ファイルをアップロード</button>
                </div>
                <div class="p-form-group">
                    <label for="appeal" class="p-form-group__label">自己アピール<span class="p-form-group__required">必須</span></label>
                    <textarea name="appeal" id="appeal" class="p-form-group__textarea" placeholder="活動歴やアンバサダーに対する意気込みなど、ご自由にお書きください。" required></textarea>
                    <div class="p-form-group__counter">
                        <span>0/1000</span>
                    </div>
                </div>
                <div class="p-entry-form__regulation">
                    <label for="regulation" class="p-form-group__label">応募前に応募規約をご一読ください<span class="p-form-group__required">必須</span></label>
                    <div class="p-entry-form__regulation-content">
                        <p class="p-entry-form__regulation-text">
                            ■応募規約<br>
                            以下の規約をご確認いただき同意の上、ご応募ください。<br><br>
                            ■名称<br>
                            Habit+(ハビットプラス)アンバサダー募集(以下、「本募集」といいます)<br><br>
                            ■本募集の運営<br>
                            MOVE Q株式会社(以下「当社」といいます)が提供する本募集の運営一切は、Habit+(ハビットプラス)事務局(以下、「事務局」といいます)が行います。<br>
                            事務局は、必要と判断した場合には、本規約を任意に変更できる他、本募集の適切な運用を行うために必要な対応をとることができるものとします。<br><br>
                            ■アンバサダー応募方法<br>
                            応募フォームよりアンケートにご回答いただくことで、ご応募いただけます。※ご回答内容に基づき選定を行い、本募集審査通過者様(以下「審査通過者様」といいます)を決定し、審査通過者様にのみメールにてご連絡いたします
                        </p>
                    </div>
                </div>
                <div class="p-policy__agree">
                    <label class="p-policy__checkbox">
                        <input type="checkbox" name="policy_agree" id="policy_agree" class="p-policy__input" required>
                        <span class="p-policy__text">応募規約を確認しました</span>
                    </label>
                </div>

                <div class="p-policy__policy">
                    <label class="p-policy__checkbox">
                        <input type="checkbox" name="privacy_policy" id="privacy_policy" class="p-policy__input" required>
                        <span class="p-policy__text"><a href="#">プライバシーポリシー</a>に同意する</span>
                    </label>
                </div>
                <div class="o-confirmation__actions">
                    <button type="submit" class="c-button c-button--primary">入力内容を送信する</button>
                    <button type="button" class="c-button c-button--secondary">入力内容を修正</button>
                </div>
            </form>
        </div>
    </section>
</main>

<!-- 仮設置 -->
<script>
    const fileSelect = document.getElementById("fileSelect");
    const fileElem = document.getElementById("attachment");

    fileSelect.addEventListener("click", (e) => {
        if (fileElem) {
            fileElem.click();
        }
    }, false);
</script>

<?php
include __DIR__ . '/components/Footer.php';
?>