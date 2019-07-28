FROM    nginx:1.16

WORKDIR /app

RUN docker-php-ext-install pdo_mysql

EXPOSE 80