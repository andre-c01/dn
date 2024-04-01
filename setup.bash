#!/usr/bin/bash

####

_ROOT_PASSWD='System32'
_USER='daniel'
_USER_PASSWD='System32'

_DB='php'
_DB_TABLE='utilizadores'
_DB_ROOT_PASSWD='System32'
_DB_USER='daniel'
_DB_USER_PASSWD='System32'

_PRIVATE_IP="$(hostname -I | awk '{print $1}')"

####

clear

### SYS USER ###

echo "root:$_USER_PASSWD" | chpasswd

useradd -m "$_USER"

echo "$_USER:$_USER_PASSWD" | chpasswd

usermod -aG sudo $_USER

### PACKAGES ###

systemctl disable nginx --now

apt uninstall nginx -y

apt update -y

apt install nano mariadb-server apache2 php php-mysql -y

systemctl enable mariadb apache2 --now

### MARIADB ###

mariadb  -s -u root -e "DROP DATABASE $_DB;"


mariadb  -s -u root -e "UPDATE mysql.user SET Password=PASSWORD('root') WHERE User='root';"
mariadb  -s -u root -e "DELETE FROM mysql.user WHERE User='';"
mariadb  -s -u root -e "DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');"
mariadb  -s -u root -e "DROP DATABASE IF EXISTS test;"
mariadb  -s -u root -e "DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';"
mariadb  -s -u root -e "FLUSH PRIVILEGES;"

mariadb  -s -u root -e "CREATE USER '$_DB_USER'@'localhost' IDENTIFIED BY '$_DB_USER_PASSWD';"

mariadb  -s -u root -e "CREATE DATABASE $_DB;"

mariadb  -s -u root -D "$_DB" -e "CREATE TABLE $_DB_TABLE(
	id INT auto_increment PRIMARY KEY,
	user VARCHAR(255) not null UNIQUE,
	passwd VARCHAR(255) not null);"

mariadb  -s -u root -e "GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES on $_DB.* TO '$_DB_USER'@'localhost' WITH GRANT OPTION;"

mariadb  -u root -D "$_DB" -e "desc $_DB_TABLE;"

### APACHE2 ###

mkdir /var/www/daniel

chown -R $USER:$USER /var/www/daniel

echo '<VirtualHost *:80>
    ServerName daniel
    ServerAlias daniel.local
    DocumentRoot /var/www/daniel
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>' > "/etc/apache2/sites-available/000-default.conf"

git clone
