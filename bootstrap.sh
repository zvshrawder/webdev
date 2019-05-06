sudo echo “LANGUAGE=en_US.UTF-8” >> /etc/environment
sudo echo “LC_ALL=en_US.UTF-8” >> /etc/environment
sudo echo “LC_CTYPE=en_US.UTF-8” >> /etc/environment

sudo apt-get update && apt-get upgrade
sudo apt-get -y -q install nginx
sudo apt-get install -q -y php7.2 libapache2-mod-php7.2
sudo apt-get install -q -y php7.2-curl php7.2-gd php7.2-mbstring php7.2-mysql php7.2-xml php7.2-zip php7.2-bz2 php7.2-intl
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

chmod -R 755 /var/log/

sudo service nginx restart