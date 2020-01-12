# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.
      config.vm.provider :virtualbox do |virtualbox_config|
          virtualbox_config.memory = 2048
          virtualbox_config.cpus = 2
      end


  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
   config.vm.box = "ubuntu/bionic64"
  

  config.vm.provision :shell, path: "bootstrap.sh"
  config.vm.network "private_network", ip: "192.168.50.4"
  #added for windows as I wasn't getting a command prompt on vagrant ssh
  config.ssh.extra_args = "-tt"
  config.vm.synced_folder "./var/www/", "/var/www/"



end
