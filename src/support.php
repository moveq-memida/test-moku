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
    <div class="wrapper wide-wrap">
        <!-- <div class="l-support">
            <div class="p-support__title">
                <h2 class="c-title">Support</h2>
                <p class="c-subtitle">サポート</p>
            </div>
            <div class="p-support__bread">
                <span>サポート</span>
            </div>
        </div>
        <div class="l-category">
            <h4 class="p-category__title">カテゴリーから探す</h4>
            <ul class="p-category__list">
                <li class="p-category__item">
                    <a href="#">
                        <picture>
                            <source media="(max-width: 767px)" srcset="assets/images/support_receipt@2x.png 2x">
                            <img src="assets/images/support_receipt.png 1x" alt="ご注文/お支払い" class="p-category__item-img--01">
                        </picture>
                        <span>ご注文/お支払い</span>
                    </a>
                </li>
                <li class="p-category__item">
                    <a href="#">
                        <picture>
                            <source media="(max-width: 767px)" srcset="assets/images/support_receipt@2x.png 2x">
                            <img src="assets/images/support_receipt.png 1x" alt="領収書等" class="p-category__item-img--02">
                        </picture>
                        <span>領収書等</span>
                    </a>
                </li>
                <li class="p-category__item">
                    <a href="#">
                        <picture>
                            <source media="(max-width: 767px)" srcset="assets/images/support_receipt.png 1x">
                            <img src="assets/images/support_receipt.png 1xassets/images/support_receipt.png 1x" alt="ラッピング/包装" class="p-category__item-img--03">
                        </picture>
                        <span>ラッピング/包装</span>
                    </a>
                </li>
                <li class="p-category__item">
                    <a href="#">
                        <picture>
                            <source media="(max-width: 767px)" srcset="assets/images/support_receipt.png 1x">
                            <img src="assets/images/support_receipt.png 1xassets/images/support_receipt.png 1x" alt="配送" class="p-category__item-img">
                        </picture>
                        <span>配送</span>
                    </a>
                </li>
                <li class="p-category__item">
                    <a href="#">
                        <picture>
                            <source media="(max-width: 767px)" srcset="assets/images/support_receipt.png 1x">
                            <img src="assets/images/support_receipt.png 1xassets/images/support_receipt.png 1x" alt="注文変更/キャンセル" class="p-category__item-img">
                        </picture>
                        <span>注文変更/キャンセル</span>
                    </a>
                </li>
                <li class="p-category__item">
                    <a href="#">
                        <picture>
                            <source media="(max-width: 767px)" srcset="assets/images/support_receipt.png 1x">
                            <img src="assets/images/support_receipt.png 1xassets/images/support_receipt.png 1x" alt="返品・交換" class="p-category__item-img">
                        </picture>
                        <span>返品・交換</span>
                    </a>
                </li>
            </ul>
        </div> -->
        <section class="l-payment">
            <div class="p-payment__title">
                <h4 class="c-title">Order/Payment</h4>
                <p class="c-subtitle">ご注文/お支払い</p>
            </div>
            <p class="p-payment__txt">
                Habit+(ハビットプラス)のアイテムは、オンラインショップ(PCまたはスマートフォンなど)のみからご購入いただけます。お電話でのご注文は原則承っておりません。
            </p>
            <div class="p-about__fee">
                <h5 class="p-about__title">送料について</h5>
                <p class="p-about__txt">送料は全国一律で750円です(沖縄県・離島・一部地域は除く)。税込10,000円以上のご購入で送料無料となります。</p>
            </div>
            <div class="p-about__means">
                <h5 class="p-about__title">お支払い方法について</h5>
                <p class="p-about__txt">Habit+(ハビットプラス)公式サイトでご利用いただけるお支払い方法は以下の通りです。</p>
                <div class="p-about__means-list">
                    <h6 class="p-about__means-title">クレジットカード</h6>
                    <div class="p-about__means-card">
                        <p class="p-about__means-brand">取り扱いカードは以下の通りです。</p>
                        <div class="p-about__means-card-img">
                            <img src="assets/images/jcb.png" alt="visa" class="p-about__means-img">
                            <img src="assets/images/visa.png" alt="mastercard" class="p-about__means-img">
                            <img src="assets/images/master.png" alt="jcb" class="p-about__means-img">
                            <img src="assets/images/amex.png" alt="jcb" class="p-about__means-img">
                            <img src="assets/images/diners.png" alt="jcb" class="p-about__means-img">
                        </div>
                        <p class="p-about__means-txt">
                            Habit+(ハビットプラス)ではSSL暗号化技術を採用し、クレジットカード情報を安全に送信しています。ご安心してご利用ください。 <br>
                            カードの承認が得られなかった場合、指定の期日までにご連絡がない場合は、誠に勝手ながらご注文をキャンセルとさせていただきます。
                        </p>
                    </div>
                    <div class="p-about__means-bank">
                        <h6 class="p-about__means-title">銀行振込み(代金先払い)</h6>
                        <p class="p-about__means-txt">
                            銀行振込をご選択の場合は前払いとなります。ご注文日から7日以内に代金をお振り込みください。 <br>
                            主要コンビニエンスストア(セブンイレブン、ローソン、ファミリーマート、ミニストップ、セイコーマート、デイリーヤマザキ)でのお支払いも可能です。 お客様からのご入金を確認後、速やかに商品の手配を進めさせていただきます。
                        </p>
                        <div class="p-about__means-bank-careful">
                            <ul class="p-about__means-bank-careful-list">
                                <li class="p-about__means-bank-careful-item">＊振込手数料はお客様のご負担です。</li>
                                <li class="p-about__means-bank-careful-item">＊ご注文後、ご注文商品とお支払い金額、振込先等を自動送信メールにてご連絡します。</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-about__means-amazon">
                        <h6 class="p-about__means-title">Amazon Pay</h6>
                    </div>
                    <div class="p-about__means-paypay">
                        <h6 class="p-about__means-title">PayPay</h6>
                    </div>
                </div>
            </div>
            <div class="p-about__change">
                <h5 class="p-about__title">お支払い方法の変更について</h5>
                <p class="p-about__txt">お支払い方法の変更については原則行っておりません。お支払い方法のお間違えのないよう、ご注文の際はご確認をお願いいたします。</p>
            </div>
        </section>
        <section class="l-receipt">
            <div class="p-receipt__title">
                <h4 class="c-title">Receipt</h4>
                <p class="c-subtitle">領収書等</p>
            </div>
            <div class="p-about__issue">
                <h5 class="p-about__title">領収書の発行について</h5>
                <p class="p-about__txt">Habit+(ハビットプラス)では領収書・請求書のご用意がございません。商品と同梱させて頂く納品書を領収書としてご利用ください。</p>
            </div>
            <div class="p-about__issue">
                <h5 class="p-about__title">納品書(インボイス登録番号)の発行について</h5>
                <p class="p-about__txt">商品発送時に、発送通知メールをお送りいたします。このメールに納品書を添付しておりますので、ご確認ください。 納品書にはインボイス制度に対応したインボイス登録番号(インボイスNo.)も記載しております。必要な場合は、この納品書を印刷してお使いいただけます。</p>
            </div>
        </section>
        <section class="l-wrapping">
            <div class="p-wrapping__title">
                <h4 class="c-title">Wrapping</h4>
                <p class="c-subtitle">ラッピング・包装</p>
            </div>
            <p class="p-wrapping__txt">
                Habit+(ハビットプラス)ではラッピング包装のご用意をしておりません。<br>
                発送は全て小型の段ボールでのお届けとなります。<br>
                商品保護のために緩衝材などを使用する場合があります。包装の簡易化については承りかねますのでご了承ください。
            </p>
        </section>
        <section class="l-delivery">
            <div class="p-delivery__title">
                <h4 class="c-title">Delivery</h4>
                <p class="c-subtitle">配送</p>
            </div>
            <div class="p-about__due">
                <h5 class="p-about__title">納期について</h5>
                <p class="p-about__txt">ご注文・お支払い完了をもって配送の手続き開始となります。<br>
                    平日PM12時までにご注文いただいた場合、最短で翌日に配送が完了します。</p>
            </div>
            <div class="p-about__means-bank-careful">
                <ul class="p-about__means-bank-careful-list">
                    <li class="p-about__means-bank-careful-item">＊土・日・祝の発送はございません。左記でご注文いただいた場合、発送の手続き開始は翌営業日となります。</li>
                    <li class="p-about__means-bank-careful-item">＊沖縄県・離島への配送は、天候などにより遅れる場合がございます。</li>
                </ul>
            </div>
            <div class="p-about__absence">
                <h5 class="p-about__title">ご不在の場合</h5>
                <p class="p-about__txt">
                    配達時にご不在の場合、不在票に記載された連絡先に10日以内にご連絡の上、再配達をお申し込みください。<br>
                    予定のお届け日を過ぎても商品が到着しない場合は、必ずHabit+(ハビットプラス)または配送業者にお問い合わせください。<br>
                    長期不在や住所の誤記などにより商品が当店に返送された場合、原則として再送はいたしかねます。 また、お受け取りがないまま保管期限が過ぎて返送された場合、往復送料および手数料として1,500円を請求させていただきます。</p>
            </div>
            <div class="p-about__date">
                <h5 class="p-about__title">お届け日時の指定について</h5>
                <p class="p-about__txt">
                    Habit+(ハビットプラス)の商品はお届け日時の指定ができません。平日PM12時までのご注文につきましては、原則当日発送をさせていただきます。</p>
            </div>
        </section>
        <section class="l-cancel">
            <div class="p-cancel__title">
                <h4 class="c-title">Change/Cancel</h4>
                <p class="c-subtitle">注文変更/キャンセル</p>
            </div>
            <p class="p-cancel__txt">
                商品ご注文・お支払い後のお客様都合による商品変更・キャンセルはできませんのでご了承ください。<br>
                代金お振込み前にキャンセルが発生した場合は、お振込み期限の超過をもって商品キャンセルとさせていただきます。<br>
                通信販売は、法律上クーリングオフ制度の適用対象外となっております。 そのため、理由の如何を問わず、一度ご注文いただいた商品のキャンセルはお受けできません。 ご注文の際は、十分にご検討いただきますようお願い申し上げます。
            </p>
        </section>
        <section class="l-exchange">
            <div class="p-exchange__title">
                <h4 class="c-title">Return/Exchange</h4>
                <p class="c-subtitle">返品・交換</p>
            </div>
            <div class="p-about__date">
                <h5 class="p-about__title">届いた商品に問題があった場合</h5>
                <p class="p-about__txt">
                    商品到着後は、速やかに商品の状態をご確認ください。 不良品や誤配送等の問題がある場合、当店負担で良品との交換を迅速に行わせていただきます。<br>
                    交換商品が在庫切れの場合は、商品代金を速やかにご返金いたします。 いずれの場合も、お問い合わせフォームを通じて当店サポートセンターまでご連絡ください。 送料および手数料は当店が負担いたしますので、ご安心ください。</p>
            </div>
            <div class="p-about__means-yes">
                <h6 class="p-about__means-title">返品・交換に応じる場合</h6>
                <ul class="p-about__means-yes-list">
                    <li class="p-about__means-yes-item">発送時にキズが付いた場合</li>
                    <li class="p-about__means-yes-item">商品に何らかの不良・欠陥があった場合(賞味期限切れなど)</li>
                    <li class="p-about__means-yes-item">ご注文した商品と異なる商品が届いた場合</li>
                    <li class="p-about__means-yes-item">その他Habit+(ハビットプラス)側に瑕疵があるトラブルが生じた場合</li>
                </ul>
            </div>
            <div class="p-about__means-no">
                <h6 class="p-about__means-title">返品・交換に応じられない場合</h6>
                <ul class="p-about__means-no-list">
                    <li class="p-about__means-no-item">一度お客様等が使用された商品</li>
                    <li class="p-about__means-no-item">お客様のもとでキズが生じた場合</li>
                    <li class="p-about__means-no-item">事前にご連絡のない場合</li>
                    <li class="p-about__means-no-item">お届けから10日以上経過した場合</li>
                    <li class="p-about__means-no-item">イメージや使用感等、お客様都合の場合</li>
                </ul>
            </div>
            <div class="p-about__over18">
                <h5 class="p-about__title">未成年の方のご注文について</h5>
                <p class="p-about__txt">
                20歳未満の方がご購入される場合は、必ず保護者の同意を得てからご注文ください。 ご注文が完了した商品については、保護者の同意を得たものとみなします。 そのため、未成年者であることを理由とする返品は受け付けておりませんのでご注意ください。 ご購入の際は、十分にご検討いただきますようお願い申し上げます。</p>
            </div>
        </section>
    </div>
</main>