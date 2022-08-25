# simpletask
----------------

Devops Challenge

----------------

The purpose of this project is to demonstrate automated deployment for an application environment. The components are:
- PHP-Apache - frontend simple application runs on three containers.
- PHP Admin - to demonstrate DB connectivity and database management.
- MySQL - backend, database.
- Prometheus - application to monitor the environment.
- Nginx - is used as a load balancer.

The environment uses Debian-like distros and uses apt package manager.


You could deploy this application in two deployment scenario:
- locally: 
    
     Vagrantfile is used and vagrant.yaml must be populate with proper values.
- cloud provider as AWS:
    
     In this scenario you should use Vagrantfile_AWS and instances.yaml file must be populate with proper values.
     Please note that you will need more that t2.micro type of instance because of number of the containers. You will need more that 1Gb of RAM and at least 8Gb of disk space.


The steps after clone locally the repo are:
- Clone the gip repo in an empty folder
- Populate the proper vagrant file.
- Run command vagrant up to create virtual machine. 
- Open your browser and access the application: http://your-ip, press F5 to load the page and see which container is in use. If the deployment is in AWS please use your public DNS or IP.
- Monitor the application with Prometheus which reachable through your browser: http://your-ip:9090/targets
- Manage your MySQL database with UI through PHPAdmin application reachable on http://your-ip:8085 and uses the same credentials as MySQL has been configured.


Have fun.
