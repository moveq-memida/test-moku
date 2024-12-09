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
            <h2 class="c-hd-title-en zenkaku">Brand story</h2>
            <p class="c-hd-title-ja">ブランドストーリー</p>
        </div>
        <div class="c-breadcrumbs">
            <p class="c-breadcrumbs-inner">
                <img src="/assets/images/breadcrumbs\home.svg" alt="パンくずリストアイコン" class="c-breadcrumbs-img-home">
                <img src="/assets/images/breadcrumbs\arw-thin-min.svg" alt="パンくずリスト矢印" class="c-breadcrumbs-img-arw">
                <span class="c-breadcrumbs-txt">ブランドストーリー</span>
            </p>
        </div>
    </div>
    <section class="l-story">
        <div class="p-story__list">
            <picture class="c-center">
                <source srcset="/assets/images/brand-story/brand-story01.png" media="(max-width: 768px)" />
                <img src="/assets/images/brand-story/brand-story01.png" alt="ブランドストーリー01" class="p-story__img">
            </picture>
            <p class="p-story__txt">私たちが本当に望んでいるのは、<br>「痩せたい」ではなく、<br>「食べたい」です。</p>
        </div>
    </section>
    <section class="l-story mt380">
        <div class="p-story__list">
            <picture class="c-center">
                <source srcset="/assets/images/brand-story/brand-story02.png" media="(max-width: 768px)" />
                <img src="/assets/images/brand-story/brand-story02.png" alt="ブランドストーリー02" class="p-story__img p-story__img--02">
            </picture>
            <p class="p-story__txt--black">
                <span>私たちは以前に比べ、自分のカラダと向き合う機会が多くなりました。健康診断や体重計の数値だったり、他人との比較だったり、いろいろなタイミングがあります。</span>
                <span>それを受けて「美しくなりたい」「健康になりたい」と思うことは自然なことです。</span>
                <span>しかし、そのせいで私たちは「食べたい気持ちを我慢しないといけない」と、考えるようになってしまいました。</span>
            </p>
        </div>
    </section>
    <section class="l-story mt380">
        <div class="p-story__list">
            <picture class="c-center">
                <source srcset="/assets/images/brand-story/brand-story03.png" media="(max-width: 768px)" />
                <img src="/assets/images/brand-story/brand-story03.png" alt="ブランドストーリー03" class="p-story__img p-story__img--03">
            </picture>
            <p class="p-story__txt--black">
                <span>勉強や仕事、家のことなど、私たちは毎日が忙しい。そんな日々の中で楽しみになるのは、やっぱり「食べること」です。しかしカラダことを考えると、好き放題に楽しむことはできません。</span>
                <span>毎日頑張っているのに、食べることまで我慢や努力をしないといけないの？</span>
                <span>毎日のことだからこそストレスに感じるタイミングも多く、自己嫌悪や罪悪感に悩む機会もたくさんありました。</span>
            </p>
        </div>
    </section>
    <section class="l-story mt380">
        <div class="p-story__list">
            <picture class="c-center">
                <source srcset="/assets/images/brand-story/brand-story04.png" media="(max-width: 768px)" />
                <img src="/assets/images/brand-story/brand-story04.png" alt="ブランドストーリー03" class="p-story__img p-story__img--04">
            </picture>
            <p class="p-story__txt--black">
                <span>忙しい中でも私たちは「痩せたい」「健康になりたい」「美しくなりたい」という目標を持っています。それはとても素敵なこと。</span>
                <span>食べていたって、怠けていたって、その気持ちがあるだけで私たちは偉いんだと認めたい。</span>
                <span>そして、「痩せたい」じゃなくて「食べたい」が本当の気持ちなんだと、自分のココロを肯定してあげたい。</span>
            </p>
        </div>
    </section>
    <section class="l-story section-full p-story__list--bottom">
        <div class="p-story__list wide-wrap">
            <picture class="c-center">
                <source srcset="/assets/images/brand-story/brand-story-logo.png" media="(max-width: 768px)" />
                <img src="/assets/images/brand-story/brand-story-logo.png" alt="ブランドストーリーロゴ" class="p-story__img p-story__img--logo">
            </picture>
            <div class="p-story__txt--pink">
                <p class="p-story__txt">Habit+(ハビットプラス)は、<br>私たちの食べたい気持ちを肯定し、<br>サポートしていきます。</p>
                <p><span>毎日を頑張る人が「食べること」の楽しみまで奪われないように。そんな思いで生まれたのが「Habit+(ハビットプラス)」です。</span>
                    <span>単に痩せることをお手伝いするのではありません。<br>生活週間や環境を大きく変えることなく、<br>ココロとカラダを満たせるものを届けることが私たちの目標です。</span>
                </p>
            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/components/Cta.php';
include __DIR__ . '/components/Footer.php';
?>