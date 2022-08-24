require 'vagrant-aws'
require 'yaml'

system = YAML.load_file(File.join(File.dirname(__FILE__), 'instances.yaml'))

hosts = system['host']
guests = system['guest']

Vagrant.require_version '>= 1.6.0'
VAGRANTFILE_API_VERSION = '2'
ENV['VAGRANT_DEFAULT_PROVIDER'] = 'aws'
ENV['AWS_ACCESS_KEY_ID'] = 'AKIAZIN7DNUV7TDSR5NE'
ENV['AWS_SECRET_ACCESS_KEY'] = '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'

class Hash
    def slice(*keep_keys)
      h = {}
      keep_keys.each { |key| h[key] = fetch(key) if has_key?(key) }
      h
    end unless Hash.method_defined?(:slice)
    def except(*less_keys)
      slice(*keys - less_keys)
    end unless Hash.method_defined?(:except)
  end
  


Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  # Use dummy AWS box
  config.vm.box = 'aws-dummy'

  # Specify AWS provider configuration
  config.vm.provider 'aws' do |aws, override|
    aws.access_key_id = ENV['AWS_ACCESS_KEY_ID']
    aws.secret_access_key = ENV['AWS_SECRET_ACCESS_KEY']
    aws.keypair_name = system['keypair_name']

    aws.region = system['region']
    aws.ami = system['ami']
    aws.security_groups = system['security_groups']
    aws.instance_type = system['instance_type']

    # Specify username and private key path
    override.ssh.username = system['user']
    override.ssh.private_key_path = system['key_path']

#    aws.user_data = "cd /vagrant/ansible/scripts/ && setup_vm.sh"
    end
    config.vm.synced_folder hosts, guests, type: "rsync" # current folder will be sync
    config.vm.synced_folder '.', '/vagrant', disabled: true
    config.vm.provision "shell", path: system['shell_path']
end
 
