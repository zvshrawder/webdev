sudo echo Status: Installing NGINX
sudo apt-get update
sudo apt-get install -y nginx

sudo echo Status: Installing PHP
sudo apt-get update
sudo apt-get install -y php7.2

sudo echo Status: Installing Curl
sudo apt-get update
sudo apt-get install -y curl


sudo echo Status: Installing Composer
sudo curl -Ss https://getcomposer.org/installer | php > /dev/null
sudo sudo mv composer.phar /usr/bin/composer