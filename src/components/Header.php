<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo isset($title) ? htmlspecialchars($title) : "TOPページ |【公式】habit+"; ?></title>
    <meta name="description" content="<?php echo isset($description) ? htmlspecialchars($description) : ''; ?>">
    <meta name="keywords" content="<?php echo isset($keywords) ? htmlspecialchars($keywords) : ''; ?>">
    <!-- Open Graph -->
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo isset($og_url) ? htmlspecialchars($og_url) : 'http://habitplus/'; ?>">
    <meta property="og:image" content="<?php echo isset($og_image) ? htmlspecialchars($og_image) : 'http://og.png'; ?>">
    <meta property="og:title" content="<?php echo isset($og_title) ? htmlspecialchars($og_title) : 'TOP |【公式】habit+'; ?>">
    <meta property="og:site_name" content="【公式】habit+">
    <meta property="og:description" content="<?php echo isset($og_description) ? htmlspecialchars($og_description) : ''; ?>">
    <!-- Favicons -->
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/assets/css/reset.css" rel="stylesheet">
    <link href="/assets/css/common.css" rel="stylesheet">
    <link href="/assets/css/items.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://kit.fontawesome.com/e8b4481f69.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="/assets/js/function.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="content-wrap">
            <div class="inner">
                <div id="drawer_toggle" class="ham-block">
                    <div class="inner">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="logo-block">
                    <a href="/" class="h-filter"><img src="/assets/images/logo.png" alt="habit+"></a>
                </div>
                <div class="c-info-block">
                    <div class="icon-area"><a href="/" class="h-filter"><img src="/assets/images/h_icon.svg" alt="マイページ"></a></div>
                    <div class="icon-area"><a href="/" class="h-filter"><img src="/assets/images/h_cart.svg" alt="カート"></a></div>
                    <div class="icon-area"><a href="/" class="h-filter"><img src="/assets/images/h_search.svg" alt="調べる"></a></div>
                </div>
            </div>
        </div>
    </header>
    <div id="open-menu">
        <div class="inner">
            <div class="menu-group">
                <p class="pink-txt zenkaku">menu</p>
                <ul>
                    <li><a href="/">アイテム一覧</a></li>
                    <span id="detail-menu">
                        <a href="">ドリンク・フード</a><a href="">サプリメント</a>
                    </span>
                    <li><a href="/">ブランドストーリー</a></li>
                    <li><a href="/">マスコットについて</a></li>
                    <li><a href="/">アンバサダー募集</a></li>
                    <li><a href="/">サポート</a></li>
                    <li><a href="/">新着情報</a></li>
                    <li><a href="/">お客様の声</a></li>
                    <span id="detail-menu" class="legal-note">
                        <a href="">特定商取引に関する法律に基づく表記</a>
                        <a href="">プライバシーポリシー</a>
                        <a href="">運営会社</a>
                    </span>
                </ul>
            </div>
            <div class="menu-group ac-menu-g">
                <p class="pink-txt zenkaku">account</p>
                <ul>
                    <li class="mypage-link"><a href="">マイページ</a></li>
                    <li class="mycart-link"><a href="">カート内確認</a></li>
                </ul>
            </div>
            <div class="menu-group">
                <p class="pink-txt zenkaku">contact</p>
                <ul>
                    <li><a href="">フォームからお問い合わせ</a></li>
                </ul>
            </div>
            <div class="sns-box">
                <a href="">
                    <picture>
                        <source srcset="/assets/images/line_bnr_sp.png" media="(max-width: 768px)" />
                        <img src="/assets/images/line_bnr.png" alt="公式LINEを追加する">
                    </picture>
                </a>
                <a href="">
                    <picture>
                        <source srcset="/assets/images/ins_bnr_sp.png" media="(max-width: 768px)" />
                        <img src="/assets/images/ins_bnr.png" alt="公式instagramを追加する">
                    </picture>
                </a>
            </div>
        </div>
    </div>
