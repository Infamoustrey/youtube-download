FROM hitalos/laravel:latest

RUN sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl

RUN sudo chmod a+rx /usr/local/bin/youtube-dl