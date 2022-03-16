FROM node:15.0.1-alpine as node
FROM python:3.9.0-alpine as python
FROM golang:1.15.3-alpine as golang
FROM rust:1.47.0-alpine as rust
FROM php:7.4-apache

# 設定ファイルをdockerコンテナ内のPHP、Apacheに読み込ませる
ADD php.ini /usr/local/etc/php/
ADD 000-default.conf /etc/apache2/sites-enabled/

# Composerのインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# ミドルウェアインストール
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libpng-dev \
libpq-dev \
&& docker-php-ext-install pdo_mysql

# Laravelで必要になるmodRewriteを有効化する
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite

# 各言語の動作環境設定
# clang, c++, and deps
# RUN apt-get update
# RUN apt-get install -y --no-cache libc-dev gcc g++ make cmake tzdata

# java
# RUN apt-get update
# RUN apt-get -y upgrade
# RUN apt-get install -y openjdk-8-jdk
# ENV JAVA_HOME=/usr/lib/jvm/java-1.8-openjdk
# ENV PATH="$JAVA_HOME/bin:${PATH}"

# nodejs
COPY --from=node /usr/local/bin /usr/local/bin
COPY --from=node /usr/local/lib/node_modules/npm /usr/local/lib/node_modules/npm
COPY --from=node /opt/yarn* /opt/yarn
RUN ln -fs /opt/yarn/bin/yarn /usr/local/bin/yarn && \
    ln -fs /opt/yarn/bin/yarnpkg /usr/local/bin/yarnpkg

# # python
# COPY --from=python /usr/local/bin /usr/local/bin
# COPY --from=python /usr/local/lib /usr/local/lib
# COPY --from=python /usr/local/include /usr/local/include
# RUN pip install pipenv

# golang
COPY --from=golang /usr/local/go /usr/local/go
ENV PATH $PATH:/usr/local/go/bin/

# rust
COPY --from=rust /usr/local/cargo /usr/local/cargo
COPY --from=rust /usr/local/rustup /usr/local/rustup
ENV PATH $PATH:/usr/local/cargo/bin/
ENV RUSTUP_HOME /usr/local/rustup

# common
# USER user
WORKDIR /var/www/html