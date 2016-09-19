# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  # Box
  config.vm.box = "ubuntu/trusty64"

  # Box Configurations - more power!
  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--memory", 2048]
    v.customize ["modifyvm", :id, "--cpus", 2]
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end

  # SSH Agent Forwarding
  config.ssh.forward_agent = true

  # Hostnames
  config.vm.hostname = "local.apptimists.dev"
  config.hostsupdater.aliases = ["production.apptimists.dev"]

  # Private Network
  config.vm.network :private_network, ip: "192.168.50.15"

  # Folders
  config.vm.synced_folder "build_local", "/var/www/local", :owner => "www-data", :mount_options => [ "dmode=775", "fmode=774" ]
  config.vm.synced_folder "build_production", "/var/www/production", :owner => "www-data", :mount_options => [ "dmode=775", "fmode=774" ]

  # Provisioning
  config.vm.provision "provision", type: "shell", :path => "provision.sh", args: [
    "local.apptimists.dev", # Local server name
    "production.apptimists.dev", # Production server alias
    "root@apptimists.dev" # Server admin
  ]

  config.vm.provision "no-tty-fix", type: "shell", inline: "sed -i '/tty/!s/mesg n/tty -s \\&\\& mesg n/' /root/.profile"
end
