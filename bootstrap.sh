sudo echo “LANGUAGE=en_US.UTF-8” >> /etc/environment
sudo echo “LC_ALL=en_US.UTF-8” >> /etc/environment
sudo echo “LC_CTYPE=en_US.UTF-8” >> /etc/environment

sudo apt-get update && apt-get upgrade
sudo apt-get -y -q install nginx
sudo apt-get -y -q install php7.2-cli php7.2-fpm php7.2-curl php7.2-gd php7.2-mysql php7.2-mbstring zip unzip php7.2-xml php7.2-zip
sudo apt-get -q -y install composer

#mariadb 10.2

sudo apt update
sudo add-apt-repository --remove 'deb [arch=amd64,arm64,ppc64el] http://sfo1.mirrors.digitalocean.com/mariadb/repo/10.1/ubuntu bionic main'
sudo apt-get install software-properties-common
echo Status: "Deb Maria DB key"
sudo add-apt-repository 'deb [arch=amd64,arm64,ppc64el] http://sfo1.mirrors.digitalocean.com/mariadb/repo/10.3/ubuntu bionic main'
echo Status: "APT-get Update"
sudo apt-get update
sudo sed -i 's/10.2/10.3/' /etc/apt/sources.list.d/MariaDB.list
echo Status: "New gpg keys"
sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xcbcb082a1bb943db
sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xF1656F24C74CD1D8
sudo apt update
sudo systemctl stop mariadb

sudo apt-get -q  -y remove mariadb-server




echo mariadb-server-10.3 mysql-server/root_password password "root" | debconf-set-selections
echo mariadb-server-10.3 mysql-server/root_password_again password "root" | debconf-set-selections
sudo apt-get install -y mariadb-server
sudo apt-get -q -y install mariadb-client libmariadb3

#import DB


#server conf files
sudo rm /etc/nginx/sites-enabled/default
sudo cp /vagrant/etc/nginx/sites-enabled/zvshrawder.conf /etc/nginx/sites-enabled/zvshrawder.conf
sudo cp /vagrant/etc/hosts /etc/hosts
sudo cp /vagrant/etc/nginx/nginx.conf /etc/nginx/nginx.conf
sudo cp  /vagrant/etc/php/7.2/fpm/pool.d/www.conf /etc/php/7.2/fpm/pool.d/www.conf

chmod -R 755 /var/log/

sudo chown -R www-data:www-data /var/www/
sudo chmod -R 775 /var/www/

sudo service php7.2-fpm restart
sudo service nginx restart