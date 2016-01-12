#!/usr/bin/env bash

## Install
export DEBIAN_FRONTEND=noninteractive;
apt-get -y install unzip build-essential git php5-fpm php5-cli php5-dev nginx mysql-client mysql-server php5-mysql php5-radius php5-sqlite php5-xdebug php5-intl php5-imap php5-gd php5-curl php5-imagick php-pear 2>&1;

curl -sS https://getcomposer.org/installer | php;
mv composer.phar /usr/local/bin/composer;

sed -i.bak s/bind-address/#bind-address/g /etc/mysql/my.cnf;
mysql -u root < /vagrant/vagrant/db_setup.sql 2>&1;

cp /vagrant/vagrant/nginx/sites-available/default /etc/nginx/sites-available/default;
cp /vagrant/vagrant/php5/fpm/php.ini /etc/php5/fpm/php.ini;
cp /vagrant/vagrant/php5/fpm/pool.d/www.conf /etc/php5/fpm/pool.d/www.conf;

service mysql restart;
service php5-fpm restart;
service nginx restart;

chmod -R 777 /vagrant/data;
chmod -R 777 /vagrant/public;

su vagrant;
composer global require fxp/composer-asset-plugin;

if [ -f "/vagrant/vagrant/local/bootstrap.sh" ]; then
   source '/vagrant/vagrant/local/bootstrap.sh';
fi;

