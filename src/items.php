<?php
$title = "TOPページ |【公式】habit+";
$description = "ページの説明をここに記載";
$keywords = "キーワード1, キーワード2";
$og_url = "http://habitplus/";
$og_image = "http://og.png";
$og_title = "TOP |【公式】habit+";
$og_description = "Habit+の公式サイトへようこそ。";

require_once 'components/header.php';
require_once 'components/breadcrumbs.php';
require_once 'components/status.php';
require_once 'components/title.php';
?>

<main class="l-main l-items wide-wrap">
    <section class="l-main__header">
        <?php renderTitle('Our items', 'アイテムご紹介'); ?>
        <?php renderBreadcrumbs([
            ['icon' => '/assets/images/breadcrumbs/home.svg', 'alt' => 'ホーム'],
            ['text' => 'アイテムご紹介']
        ]); ?>
    </section>
    <section class="p-food-drink">
        <div class="secttl-box">
            <h2 class="sec-ttl zenkaku">Food/Drink</h2>
            <p class="ja-ttl">フード・ドリンク</p>
        </div>
        <div class="p-item-list-wrapper">
            <ul class="p-item-list">
                <li class="p-item">
                    <picture class="p-item__picture">
                        <source srcset="/assets/images/items/item-food.png 1x, /assets/images/items/item-food@2x.png 2x">
                        <img src="/assets/images/items/item-food@2x.png" alt="MITASERU グリーンスムージー ミックスフルーツ味 180g(30日分)" class="p-item__image">
                    </picture>
                    <span class="p-item__category zenkaku">drink</span>
                    <h3 class="p-item__title">MITASERU グリーンスムージー<br>ミックスフルーツ味 180g(30日分)</h3>
                    <p class="p-item__description">【初回限定割引・定期配送】一食14.5kcal 野菜・果物140種類以上 レタス1/2分の食物繊維 ビタミン10種 大豆イソフラボン 合成着色料不使用</p>
                    <p class="p-item__price"><span class="p-item__price-symbol zenkaku">￥</span>1,980<span class="p-item__price-tax">( 税込 )</span></p>
                </li>
                <li class="p-item">
                    <picture class="p-item__picture">
                        <source srcset="/assets/images/items/item-food.png 1x, /assets/images/items/item-food@2x.png 2x">
                        <img src="/assets/images/items/item-food@2x.png" alt="MITASERU グリーンスムージー ミックスフルーツ味 180g(30日分)" class="p-item__image">
                    </picture>
                    <span class="p-item__category">drink</span>
                    <h3 class="p-item__title">MITASERU グリーンスムージー<br>ミックスフルーツ味 180g(30日分)</h3>
                    <p class="p-item__description">【初回限定割引・定期配送】一食14.5kcal 野菜・果物140種類以上 レタス1/2分の食物繊維 ビタミン10種 大豆イソフラボン 合成着色料不使用</p>
                    <p class="p-item__price"><span class="p-item__price-symbol zenkaku">￥</span>1,980<span class="p-item__price-tax">( 税込 )</span></p>
                </li>
                <li class="p-item p-item--highlighted">
                    <picture class="p-item__picture">
                        <source srcset="/assets/images/items/item-food.png 1x, /assets/images/items/item-food@2x.png 2x">
                        <img src="/assets/images/items/item-food@2x.png" alt="MITASERU グリーンスムージー ミックスフルーツ味 180g(30日分)" class="p-item__image">
                    </picture>
                    <span class="p-item__category">drink</span>
                    <h3 class="p-item__title">MITASERU グリーンスムージー<br>ミックスフルーツ味 180g(30日分)</h3>
                    <p class="p-item__description">【初回限定割引・定期配送】一食14.5kcal 野菜・果物140種類以上 レタス1/2分の食物繊維 ビタミン10種 大豆イソフラボン 合成着色料不使用</p>
                    <p class="p-item__price"><span class="p-item__price-symbol zenkaku">￥</span>1,980<span class="p-item__price-tax">( 税込 )</span></p>
                </li>
            </ul>
        </div>
    </section>
    <section class="p-supplement">
        <div class="secttl-box">
            <h2 class="sec-ttl zenkaku">Supplement</h2>
            <p class="ja-ttl">サプリメント</p>
        </div>
        <div class="p-item-list-wrapper">
            <ul class="p-item-list">
                <li class="p-item">
                    <picture class="p-item__picture">
                        <source srcset="/assets/images/items/item-supplement.png 1x, /assets/images/items/item-supplement@2x.png 2x">
                        <img src="/assets/images/items/item-supplement@2x.png" alt="ナチュラルエラグスリム" class="p-item__image">
                    </picture>
                    <span class="p-item__category zenkaku">supplement</span>
                    <h3 class="p-item__title">ナチュラルエラグスリム</h3>
                    <p class="p-item__description">【初回限定割引・定期配送】肥満着もの方の脂肪減少をサポート BMI 体脂肪 ウエスト 内臓脂肪 血中中性脂肪 機能性関与成分エラグ酸3mg</p>
                    <p class="p-item__price"><span class="p-item__price-symbol zenkaku">￥</span>6,000<span class="p-item__price-tax">( 税込 )</span></p>
                </li>
                <li class="p-item">
                    <picture class="p-item__picture">
                    <source srcset="/assets/images/items/item-supplement.png 1x, /assets/images/items/item-supplement@2x.png 2x">
                        <img src="/assets/images/items/item-supplement@2x.png" alt="ナチュラルエラグスリム" class="p-item__image">
                    </picture>
                    <span class="p-item__category">supplement</span>
                    <h3 class="p-item__title">ナチュラルエラグスリム</h3>
                    <p class="p-item__description">【初回限定割引・定期配送】肥満着もの方の脂肪減少をサポート BMI 体脂肪 ウエスト 内臓脂肪 血中中性脂肪 機能性関与成分エラグ酸3mg</p>
                    <p class="p-item__price"><span class="p-item__price-symbol zenkaku">￥</span>6,000<span class="p-item__price-tax">( 税込 )</span></p>
                </li>
                <li class="p-item p-item--highlighted">
                    <picture class="p-item__picture">
                        <source srcset="/assets/images/items/item-supplement.png 1x, /assets/images/items/item-supplement@2x.png 2x">
                        <img src="/assets/images/items/item-supplement@2x.png" alt="ナチュラルエラグスリム" class="p-item__image">
                    </picture>
                    <span class="p-item__category">supplement</span>
                    <h3 class="p-item__title">ナチュラルエラグスリム</h3>
                    <p class="p-item__description">【初回限定割引・定期配送】肥満着もの方の脂肪減少をサポート BMI 体脂肪 ウエスト 内臓脂肪 血中中性脂肪 機能性関与成分エラグ酸3mg</p>
                    <p class="p-item__price"><span class="p-item__price-symbol zenkaku">￥</span>6,000<span class="p-item__price-tax">( 税込 )</span></p>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php
require_once 'components/cta.php';
require_once 'components/footer.php';
?>
