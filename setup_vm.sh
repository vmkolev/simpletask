#!/bin/bash

sudo su -
# follow folder structure
echo "Setup to project folder :"
project_dir="/data"

# install ansible
echo "Install Ansible :"
apt-get update && apt-get install python3-pip tree ansible -y

echo "Run Ansible :"
ansible-playbook $project_dir/setup-docker.yml
