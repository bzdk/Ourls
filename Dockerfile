FROM tutum/lamp:latest
MAINTAINER Leo <cn.leoyang@gmail.com>

RUN apt-get update && \
  apt-get -y install curl php5-cli
RUN curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
RUN rm -fr /app && git clone https://github.com/bzdk/Ourls.git /app
RUN composer install
RUN mysql -uroot < db.sql

EXPOSE 80 3306
CMD ["/run.sh"]
