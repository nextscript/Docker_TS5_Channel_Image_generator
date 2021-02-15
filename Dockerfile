FROM debian:stretch

RUN apt update && \
    apt upgrade -y && \
    apt-get install -y bzip2 unzip nano htop locales w3m wget git nginx php-fpm php php7.0-gd php7.0-curl php-sqlite3 php7.0-cli php7.0-cgi php7.0-gd php7.0-geoip php7.0-intl php7.0-json php7.0-mbstring php7.0-mcrypt php7.0-mysql php7.0-opcache php7.0-readline php7.0-xml php7.0-xsl php7.0-zip

RUN rm -rf /var/www/html/*
RUN rm /etc/php/7.0/cli/php.ini
RUN rm /etc/php/7.0/fpm/php.ini
RUN rm /etc/nginx/sites-available/default
RUN rm /etc/nginx/nginx.conf
RUN cd /var/www/html/ && \        
           git clone https://github.com/nextscript/TS5-Channel-Image-Generator.git .

COPY php.ini /etc/php/7.0/cli/
COPY php.ini /etc/php/7.0/fpm/
COPY default /etc/nginx/sites-available/
COPY nginx.conf /etc/nginx/
COPY fastcgi-php.conf /etc/nginx/snippets/
COPY fastcgi.conf /etc/nginx/



VOLUME /var/www/html
WORKDIR /var/www/html

EXPOSE 80 443 9000

CMD service php7.0-fpm start && nginx -g "daemon off;"
