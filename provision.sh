#!/bin/bash

# Arguments
SERVER_NAME=${1}
PRODUCTION_SERVER_ALIAS=${2}
SERVER_ADMIN=${3}

# Basics
apt-get -y -q update
apt-get -y -q upgrade

## Nice colors
echo '[[ -s "$HOME/.profile" ]] && source "$HOME/.profile" # Load the default .profile
export PS1="\[\033[36m\]\u\[\033[m\]@\[\033[32m\]\h:\[\033[33;1m\]\w\[\033[m\]\$ "
export CLICOLOR=1
export LSCOLORS=ExFxBxDxCxegedabagacad
alias ls="ls -GFh"' > ~/.bash_profile

# Install packages
apt-get -y -q install git apache2 php5 php5-cli

# Setup webserver
echo '<VirtualHost *:80>
  # General
  ServerName '$SERVER_NAME'
  ServerAlias www.'$SERVER_NAME'
  ServerAdmin '$SERVER_ADMIN'

  # Site
  DocumentRoot /var/www/local
  <Directory "/var/www/local">
    Require all granted
  </Directory>

  # Logs
  ErrorLog ${APACHE_LOG_DIR}/error.log
  CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
' > /etc/apache2/sites-available/000-local.conf

echo '<VirtualHost *:80>
  # General
  ServerName '$SERVER_NAME'
  ServerAlias '$PRODUCTION_SERVER_ALIAS'
  ServerAlias www.'$PRODUCTION_SERVER_ALIAS'
  ServerAdmin '$SERVER_ADMIN'

  # Site
  DocumentRoot /var/www/production
  <Directory "/var/www/production">
    Require all granted
  </Directory>

  # Logs
  ErrorLog ${APACHE_LOG_DIR}/error.log
  CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
' > /etc/apache2/sites-available/100-production.conf

a2enmod rewrite
a2dissite 000-default
a2dissite default-ssl
a2ensite 000-local
a2ensite 100-production

## Clean up virtual hosts
rm /etc/apache2/sites-available/000-default.conf
rm /etc/apache2/sites-available/default-ssl.conf

service apache2 restart
