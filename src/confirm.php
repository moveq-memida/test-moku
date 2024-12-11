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
            <ul class="c-status-list">
                <li class="c-status-item">ご入力</li>
                <li><img src="/assets/images/contact/arw-bold.svg" class="c-status-item--arw"></li>
                <li class="c-status-item c-status-item--pink">ご確認</li>
                <li><img src="/assets/images/contact/arw-bold.svg" class="c-status-item--arw"></li>
                <li class="c-status-item c-status-item--gray">送信完了</li>
            </ul>
        </div>
        <div class="l-form">
            <div class="o-confirmation">
                <div class="o-confirmation__group">
                    <p><strong>お名前</strong></p>
                    <p id="name">山田花子</p>
                </div>

                <div class="o-confirmation__group">
                    <p><strong>お名前ふりがな</strong></p>
                    <p id="name-kana">やまだはなこ</p>
                </div>

                <div class="o-confirmation__group">
                    <p><strong>メールアドレス</strong></p>
                    <p id="email">example@mailaddress.co.jp</p>
                </div>

                <div class="o-confirmation__group">
                    <p><strong>お電話番号</strong></p>
                    <p id="phone">01234567891</p>
                </div>

                <div class="o-confirmation__group">
                    <p><strong>お問い合わせ種別</strong></p>
                    <p id="category">商品に関するご質問・ご意見</p>
                </div>

                <div class="o-confirmation__group">
                    <p><strong>お問い合わせ内容</strong></p>
                    <p id="message">お問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入ります</p>
                </div>

                <form action="" method="post">
                    <input type="hidden" name="name" value="山田花子">
                    <input type="hidden" name="name-kana" value="やまだはなこ">
                    <input type="hidden" name="email" value="example@mailaddress.co.jp">
                    <input type="hidden" name="phone" value="01234567891">
                    <input type="hidden" name="category" value="商品に関するご質問・ご意見">
                    <input type="hidden" name="message" value="お問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入りますお問い合わせ内容の文章がここに入ります">
                    <div class="o-confirmation__actions">
                        <button type="submit" class="c-button--primary">入力内容を送信する</button>
                        <button type="button" class="c-button--secondary">入力内容を修正</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </main>

    <?php
    include __DIR__ . '/components/Cta.php';
    include __DIR__ . '/components/Footer.php';
    ?>