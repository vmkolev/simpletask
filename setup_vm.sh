#!/bin/bash

sudo su -
# Get ip addr and save it in variable
echo "IP route :"
#ips=`ip route get 8.8.8.8 | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}'` && export ips

# install ansible
echo "Install Ansible :"
apt-get update && apt-get install tree ansible -y


# follow folder structure
echo "Setup to project folder :"
project_dir="/app"

# replace ip for prometheus monitoring
#sed -i "s/localhost:9323/$ips:9323/" $project_dir/prometheus.yml
#sed -i "s/localhost:9104/$ips:9104/" $project_dir/prometheus.yml
#sed -i "s/localhost:9323/$ips:9323/" $project_dir/daemon.json

echo "Run Ansible :"
ansible-playbook $project_dir/setup-docker.yml
