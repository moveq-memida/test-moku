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

<main class="wide-wrap">
    <div class="l-items mt195">
        <div class="c-hd-title-inner">
            <h2 class="c-hd-title-en zenkaku">Contact</h2>
            <p class="c-hd-title-ja">お問い合わせ</p>
        </div>
        <div class="c-breadcrumbs">
            <p class="c-breadcrumbs-inner">
                <img src="/assets/images/breadcrumbs\home.svg" alt="パンくずリストアイコン" class="c-breadcrumbs-img-home">
                <img src="/assets/images/breadcrumbs\arw-thin-min.svg" alt="パンくずリスト矢印" class="c-breadcrumbs-img-arw">
                <span class="c-breadcrumbs-txt">お問い合わせ</span>
            </p>
        </div>
    </div>
    <div class="l-contact">
        <div class="c-status">
            <ul class="c-status-list">
                <li class="c-status-item c-status-item--pink">ご入力</li>
                <li><img src="/assets/images/contact\arw-bold.svg" class="c-status-item--arw"></li>
                <li class="c-status-item c-status-item--gray">ご確認</li>
                <li><img src="/assets/images/contact\arw-bold.svg" class="c-status-item--arw"></li>
                <li class="c-status-item c-status-item--gray">送信完了</li>
            </ul>
        </div>
        <div class="c-form-wrapper">
            <form action="" method="post" class="c-form">
                <div class="c-form-group">
                    <label for="name" class="c-form-label">お名前<span class="c-form-required">必須</span></label>
                    <input type="text" name="name" id="name" class="c-form-input" placeholder="例）山田花子" required>
                </div>
                <div class="c-form-group">
                    <label for="name" class="c-form-label">お名前ふりがな<span class="c-form-required">必須</span></label>
                    <input type="text" name="name" id="name" class="c-form-input" placeholder="例）やまだはなこ" required>
                </div>
                <div class="c-form-group">
                    <label for="email" class="c-form-label">メールアドレス<span class="c-form-required">必須</span></label>
                    <input type="email" name="email" id="email" class="c-form-input" placeholder="例）example@mailaddress.co.jp" required>
                </div>
                <div class="c-form-group">
                    <label for="email" class="c-form-label">メールアドレス(確認用)<span class="c-form-required">必須</span></label>
                    <input type="email" name="email" id="email" class="c-form-input" required>
                </div>
                <div class="c-form-group">
                    <label for="tel" class="c-form-label">お電話番号</label>
                    <input type="tel" name="tel" id="tel" class="c-form-input" placeholder="例）01234567891 (ハイフンなし)" required>
                </div>
                <div class="c-form-group">
                    <label for="kind" class="c-form-label">お問い合わせ種別<span class="c-form-required">必須</span></label>
                    <div class="c-form-group-kind">
                        <div class="c-form-group-kind-item">
                            <input type="radio" name="kind" id="kind01" class="c-form-input-kind" required>
                            <label for="kind01" class="c-form-label-kind">商品に関するご質問・ご意見</label>
                        </div>
                        <div class="c-form-group-kind-item">
                            <input type="radio" name="kind" id="kind02" class="c-form-input-kind" required>
                            <label for="kind02" class="c-form-label-kind">Habit+に関するお問い合わせ</label>
                        </div>
                        <div class="c-form-group-kind-item">
                            <input type="radio" name="kind" id="kind03" class="c-form-input-kind" required>
                            <label for="kind03" class="c-form-label-kind">Habit+公式サイトに関するお問い合わせ</label>
                        </div>
                        <div class="c-form-group-kind-item">
                            <input type="radio" name="kind" id="kind04" class="c-form-input-kind" required>
                            <label for="kind04" class="c-form-label-kind">その他(お問い合わせ内容に詳細をご記入ください)</label>
                        </div>
                    </div>
                </div>
                <div class="c-form-group c-form-group-content">
                    <label for="content" class="c-form-label">お問い合わせ内容<span class="c-form-required">必須</span></label>
                    <textarea name="content" id="content" class="c-form-textarea" placeholder="お問い合わせ内容をご記入ください。" required></textarea>
                    <div class="c-form-group-num">
                        <span>0/1000</span>
                    </div>
                </div>
                <div class="c-policy">
                <label class="c-policy-txt check-box">
                    <input type="checkbox" name="policy" id="policy" class="c-form-input-policy" required>
                    <span class="text"><a>プライバシーポリシー</a>に同意する</span>
                </label>
                  
                </div>
                <div class="c-btn-area">
                    <button type="submit" class="c-btn c-btn--pink">入力内容を確認する</button>
                    <button type="button" class="c-btn c-btn--gray">入力内容をリセット</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/components/Cta.php';
include __DIR__ . '/components/Footer.php';
?>