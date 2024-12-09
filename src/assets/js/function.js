// TOPスライダー
$(function () {
    $('.slider-wrap02').slick({
      arrows: false,//左右の矢印はなし
      autoplay: true,//自動的に動き出すか。初期値はfalse。
      autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
      speed: 5500,//スライドのスピード。初期値は300。
      infinite: true,//スライドをループさせるかどうか。初期値はtrue。
      pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
      pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
      cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
      slidesToShow: 3,//スライドを画面に4枚見せる
      slidesToScroll: 1,//1回のスライドで動かす要素数
      responsive: [
        {
        breakpoint: 769,//モニターの横幅が769px以下の見せ方
        settings: {
          slidesToShow: 2,//スライドを画面に2枚見せる
        }
      },
      {
        breakpoint: 426,//モニターの横幅が426px以下の見せ方
        settings: {
          slidesToShow: 3,//スライドを画面に1.5枚見せる
        }
      }
    ]
    });
  });


  $(function () {
    $('.slider-wrap').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        swipe :true,

        responsive: [
          {
            breakpoint: 768, // ブレークポイント
            settings: {
              // centerMode: true,
              slidesToShow: 1,
            }
          }
        ]
       
    });
  });

// FVアニメーション
window.onload = function() {
  // .s-up-ill 要素をすべて取得
  var elements = document.querySelectorAll('.s-up-ill');
  
  // 各要素に対してクラスを追加
  elements.forEach(function(element) {
    element.classList.add('s-up-top');
  });
};

// ハンバーガーメニュー
$(function(){

  $("#drawer_toggle").click(function(){
    $(this).toggleClass("open");
    $("#open-menu").toggleClass("sp_open");
  });

});

//フェードイン
// JavaScriptでスクロール時にクラスを付与
document.addEventListener('DOMContentLoaded', function () {
  const fadeInElements = document.querySelectorAll('.fade-in');

  const observerOptions = {
    threshold: 0.1  // 要素が10%表示されたら発火
  };

  const fadeInOnScroll = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // 一度フェードインしたら監視を終了
      }
    });
  }, observerOptions);

  fadeInElements.forEach(function(element) {
    fadeInOnScroll.observe(element); // 各要素を監視
  });
});

// テキストアニメーション
// テキストアニメーション
$(document).ready(function() {
  // ページが読み込まれたらアニメーションを開始
  $('.text-anime-top').each(function() {
    // 要素が存在していて、offsetが有効であるかを確認
    if ($(this).length > 0 && $(this).offset()) {
      if (!$(this).hasClass('animated')) { // まだアニメーションが開始されていない場合
        $(this).addClass('animated'); // アニメーション開始フラグを追加

        var content = $(this).html(); // HTMLを含めたコンテンツを取得
        $(this).html(''); // コンテナをクリア

        // <br>タグ、&nbsp;、スペースも含めて分割し、文字列以外はそのまま扱う
        var characters = content.split(/(<br\s*\/?>|&nbsp;| )/);

        // 各文字ごとに処理
        characters.forEach(function(charGroup) {
          if (charGroup === ' ') {
            $(this).append('&nbsp;'); // 半角スペースを保持
          } else if (charGroup.match(/<br\s*\/?>/)) {
            $(this).append('<br>'); // 改行タグをそのまま追加
          } else {
            // 文字列をさらに一文字ごとに分割
            charGroup.split('').forEach(function(char, i) {
              // 通常の文字にspanを追加
              var span = $('<span />').addClass('char').text(char);
              span.css('animation-delay', (i * 0.2) + 's'); // 遅延を設定
              $(this).append(span);
            }.bind(this));
          }
        }.bind(this));
      }
    }
  });
});



$(document).ready(function() {
  // スクロールイベントにリスナーを登録
  $(window).on('scroll', function() {
    // .text-anime 要素を全てループ処理
    $('.text-anime').each(function() {
      // 要素が存在していて、offsetが有効であるかを確認
      if ($(this).length > 0 && $(this).offset()) {
        var elemPos = $(this).offset().top; // 要素の位置を取得
        var scroll = $(window).scrollTop(); // 現在のスクロール位置を取得
        var windowHeight = $(window).height(); // ウィンドウの高さを取得

        if (scroll > elemPos - windowHeight + 50) { // 要素が表示されたら
          if (!$(this).hasClass('animated')) { // まだアニメーションが開始されていない場合
            $(this).addClass('animated'); // アニメーション開始フラグを追加

            var content = $(this).html(); // HTMLを含めたコンテンツを取得
            $(this).html(''); // コンテナをクリア

            // <br>タグ、&nbsp;、スペースも含めて分割し、文字列以外はそのまま扱う
            var characters = content.split(/(<br\s*\/?>|&nbsp;| )/);

            // 各文字ごとに処理
            characters.forEach(function(charGroup) {
              if (charGroup === ' ') {
                $(this).append('&nbsp;'); // 半角スペースを保持
              } else if (charGroup.match(/<br\s*\/?>/)) {
                $(this).append('<br>'); // 改行タグをそのまま追加
              } else {
                // 文字列をさらに一文字ごとに分割
                charGroup.split('').forEach(function(char, i) {
                  // 通常の文字にspanを追加
                  var span = $('<span />').addClass('char').text(char);
                  span.css('animation-delay', (i * 0.2) + 's'); // 遅延を設定
                  $(this).append(span);
                }.bind(this));
              }
            }.bind(this));
          }
        }
      }
    });
  });
});


//背景色を変更
document.addEventListener('scroll', function() {
  // 要素の位置を取得
  var element = document.querySelector('#intro .c-inner');
  var elementPosition = element.getBoundingClientRect().top;

  // 現在のウィンドウの高さを取得
  var windowHeight = window.innerHeight;
  // 要素がウィンドウの200px上までスクロールされたとき
  if (elementPosition < windowHeight - 200) {
    // アニメーションのクラスを追加
    element.classList.add('animate-bg');
  }
});

//斜め上から移動
document.addEventListener('scroll', function() {
  var element = document.querySelector('#ouritems .secttl-box');
  var elementPosition = element.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  // 要素がウィンドウの200px上に来たときにアニメーション発動
  if (elementPosition < windowHeight - 200) {
    element.classList.add('animate-fly-in');
  }
});


//下から上のアニメーション
document.addEventListener('scroll', function() {
  var element = document.querySelector('.intro-slider-box .up-illu-block');
  var elementPosition = element.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  // 要素がウィンドウの200px上に来たときにアニメーション発動
  if (elementPosition < windowHeight - 200) {
    element.classList.add('s-up');
  }
});

// Ouritems
document.addEventListener('scroll', function() {
  var elements = document.querySelectorAll('.bown-flip, .up-masco'); // 複数の要素を取得

  elements.forEach(function(element) {
    var elementPosition = element.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;

    // 要素がウィンドウの200px上に来たときにアニメーション発動
    if (elementPosition < windowHeight - 200) {
      element.classList.add('animation-illu'); // 各要素に対してクラスを追加
    }
  });
});






