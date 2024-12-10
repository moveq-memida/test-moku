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
        <section class="l-confirm">
            <div class="p-confirm__title">
                <h2 class="p-confirm__en">Contact</h2>
                <p class="p-confirm__ja">お問い合わせ</p>
            </div>
            <div class="p-confirm__bread">
                <span class="p-confirm___bread-txt">お問い合わせ</span>
            </div>
        </section>
        <div class="l-status">
            <!-- ステータス -->
        </div>
        <div class="l-form">
            <form action="" method="post" class="p-form__area">
                <div class="c-form-group">
                    <label for="name" class="c-form-label">お名前</label>
                    <p class=""><span>山田花子</span></p>
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
                    <input type="tel" name="tel" id="tel" class="c-form-input" placeholder="例）01234567891 (ハイフンなし" required>
                </div>
                <div class="c-form-group">
                    <label for="kind" class="c-form-label">お問い合わせ種別<span class="c-form-required">必須</span></label>
                    <div class="c-form-group-kind">
                        <label for="kind" class="c-form-label-kind">
                            <input type="radio" name="kind" id="kind" class="c-form-input-kind" required>
                            商品に関するご質問・ご意見
                        </label>
                        <label for="kind" class="c-form-label-kind">
                            <input type="radio" name="kind" id="kind" class="c-form-input-kind" required>
                            Habit+に関するお問い合わせ
                        </label>
                        <label for="kind" class="c-form-label-kind">
                            <input type="radio" name="kind" id="kind" class="c-form-input-kind" required>
                            Habit+公式サイトに関するお問い合わせ
                        </label>
                        <label for="kind" class="c-form-label-kind">
                            <input type="radio" name="kind" id="kind" class="c-form-input-kind" required>
                            その他(お問い合わせ内容に詳細をご記入ください)
                        </label>
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
                    <input type="checkbox" name="policy" id="policy" class="c-form-input-policy" required>
                    <p class="c-policy-txt"><span>プライバシーポリシー</span>に同意する</p>
                </div>
                <div class="c-btn-area">
                    <button type="submit" class="c-btn c-btn--pink">入力内容を確認する</button>
                    <button type="button" class="c-btn c-btn--gray">入力内容をリセット</button>
                </div>
            </form>
        </div>
    </main>

    <?php
    include __DIR__ . '/components/Cta.php';
    include __DIR__ . '/components/Footer.php';
    ?>