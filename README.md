# simpletask
----------------

Devops Challenge

----------------

The purpose of this project is to demonstrate automated deployment for an application environment. The components are:
- PHP-Apache - frontend simple application runs on three containers.
- PHP Admin - to demonstrate DB connectivity.
- MySQL - backend.
- Prometheus - application to monitor the environment.
- Nginx - is used as a load balancer.

The environment uses Debian-like distros and uses apt package manager.

Clone the git repo locally and run setup_vm.sh script to deploy the environment.

The simple application is reachable through your browser with http://your-ip, press F5 to load the page and see which container is in use.

The monitoring application Prometheus is located: http://your-ip:9090/targets

PHPAdmin application is reachable on http://your-ip:8085 and uses the credentials to access MySQL.


Have fun.
