# ベースイメージを選択
FROM php:8.1-apache

# 必要なモジュールをインストール
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install intl pdo_mysql zip

# 作業ディレクトリを設定
WORKDIR /var/www/html

# 権限設定（オプション）
RUN chown -R www-data:www-data /var/www/html
