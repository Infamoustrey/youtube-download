FROM hitalos/laravel:latest

# Install youtube dl
RUN wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl
RUN chmod a+rx /usr/local/bin/youtube-dl

COPY ./ /var/www

WORKDIR /var/www

RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=$PORT