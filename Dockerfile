FROM alpine:latest
LABEL maintainer Alexander Sperling <alexander@sprlng.de>
RUN apk update -q && apk add \
	nginx \
	php7-fpm \
	supervisor
RUN mkdir /var/www/vita
RUN mkdir -p /run/nginx
ADD config/vita.conf /etc/nginx/conf.d/vita.conf
ADD config/supervisord.conf /etc/
ADD config/php.ini /etc/php7-fpm/php.ini
ADD config/start.sh /start.sh
RUN chmod +x /start.sh 
EXPOSE 8082
CMD ["./start.sh"]
