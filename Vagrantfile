#Took quite a bit from https://github.com/neonhomer/vagrant-craft-3 for the vagrant setup (scripting on the shell is mine
# need to run (if not installed): vagrant plugin install vagrant-vbguest  
# -*- mode: ruby -*-
# vi: set ft=ruby :

# Determine if we are running on windows
require 'rbconfig'
is_windows = (RbConfig::CONFIG['host_os'] =~ /mswin|mingw|cygwin/)

Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/bionic64"

  # Port is usually the phone-coded first 4 characters of the final URL (eg. test.com = 8378)
 
  config.vm.network "private_network", type: "dhcp"
  config.vm.network "private_network", ip: "192.168.50.4"
  # For windows use SMB else use NFS to sync files to guest host
  if is_windows
    config.vm.synced_folder "./var/www/", "/var/www/",
      type: "smb",
      owner: "www-data",
      group: "www-data",
      mount_options: [ "rw", "mfsymlinks" ]
  else
    config.vm.synced_folder "./var/www/", "/var/www/",
      nfs: true,
      mount_options: [ "rw", "tcp", "fsc", "actimeo=1" ]
  end

  # Set VirtualBox memory and allow symbolic links on Windows
  config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
	vb.cpus = 2
    vb.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]
  end

  # Run the shell commands
  config.vm.provision "shell", path: "bootstrap.sh"
end