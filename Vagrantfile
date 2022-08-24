# -*- mode: ruby -*-
# vi: set ft=ruby :

require 'yaml'
settings = YAML.load_file 'vagrant.yaml'
netmasks = settings['system']['network']['netmask']
types = settings['system']['network']['type']
bridges = settings['system']['network']['bridge']
hosts = settings['system']['artifacts_dir']['host']
guests = settings['system']['artifacts_dir']['guest']


ENV["LC_ALL"] = "en_US.UTF-8"
Vagrant.require_version ">= 1.4.0"

Vagrant.configure("2") do |config|

############### Server ###############
config.vm.define "server", primary: true do |server|
	server.vm.box = settings['system']['box']
	server.vm.hostname = settings['server']['hostname']
	server.vm.network "public_network", ip: settings['server']['ip_address'], netmask: netmasks, type: types, bridge: bridges
	server.vm.synced_folder hosts, guests, type: "rsync", rsync__auto: true, rsync__exclude: [ 'simpletask' ] # current folder will be sync
	server.vm.synced_folder '.', '/vagrant', disabled: true
	server.vm.provider "virtualbox" do |vb|
		vb.memory = settings['system']['vm_memory']
		vb.cpus = settings['system']['vm_cpu']
		vb.name = settings['server']['name']
	end
	server.vm.provision "shell", path: settings['system']['shell_path']['dir']
end
end
