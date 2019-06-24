FROM debian:jessie
LABEL maintainer Alexander Reinelt <alexander@reinelt.de.com>
RUN apt-get update && apt-get dist-upgrade -y
RUN apt-get install -y ca-certificates \
	nginx \
	php5-fpm \
	vim	\
	git \
	curl \
	wget \
	unzip \
	locales
RUN mkdir /var/www/vita
ADD config/vita.conf /etc/nginx/conf.d/vita.conf
ADD config/php.ini /etc/php5-fpm/php.ini
ADD config/start.sh /start.sh
RUN chmod +x /start.sh 

CMD ["./start.sh"]
