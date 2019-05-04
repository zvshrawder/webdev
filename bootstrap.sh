#!/usr/bin/env bash
#remove apache as I prefer nginx
sudo echo -e Status: \e[45mRemoving APACHE
sudo service apache2 stop
sudo apt-get -y purge apache2 apache2-utils apache2.2-bin apache2-common
sudo apt-get -y autoremove
sudo rm -rf /etc/apache2



sudo echo -e Status: \e[45mInstalling NGINX
sudo apt-get update
sudo apt-get install -y nginx

sudo echo -e Status: \e[45mInstalling PHP
sudo apt-get update
sudo apt-get install -y php7.2

sudo echo -e Status: \e[45mInstalling Curl
sudo apt-get update
sudo apt-get install -y curl


sudo echo -e Status: \e[45mInstalling Composer
sudo curl -Ss https://getcomposer.org/installer | php > /dev/null
sudo sudo mv composer.phar /usr/bin/composer