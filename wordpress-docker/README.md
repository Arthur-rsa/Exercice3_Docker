# Exercice 3: WordPress Docker Stack (Nginx + PHP + MariaDB)

Ce projet propose un environnement WordPress complet et optimisé, basé sur Docker.

---
## Structure du projet

Exercice3_Docker/
    wordpress-docker/
     -docker-compose.yml
     -wordpress/
     -mariabd/
     -nginx/
     -php/
     -README.md

## 1. docker-compose.yml

Ce fichier orchestre les trois services : MariaDB, PHP-FPM et Nginx.

## 2. Configuration Nginx

Le fichier nginx.conf joue un rôle central dans l’architecture : c’est le reverse proxy qui permet d’accéder à WordPress proprement.

## 3. Configuration PHP (php.ini)

    upload_max_filesize = 128M
    post_max_size = 128M
    memory_limit = 512M
    max_execution_time = 300
    max_input_time = 300
    display_errors = Off
    log_errors = On
    error_log = /var/log/php_errors.log

## 4. Dockerfile PHP-FPM

    FROM php:8.2-fpm-alpine
    RUN apk update && apk add --no-cache     libpng-dev     libjpeg-turbo-dev     freetype-dev     libzip-dev     zip     curl     bash     git

    RUN docker-php-ext-configure gd --with-freetype --with-jpeg     && docker-php-ext-install -j$(nproc) gd     && docker-php-ext-install pdo_mysql mysqli zip exif

    RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

    RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar     && chmod +x wp-cli.phar     && mv wp-cli.phar /usr/local/bin/wp

    WORKDIR /var/www/html
    RUN chown -R www-data:www-data /var/www/html
    EXPOSE 9000
    CMD ["php-fpm"]

## 5. Entrez dans le conteneur PHP
    docker-compose exec php sh

## 6. Dans le conteneur, télécharger wordpress manuellement:
    cd /var/www/html
    wget https://wordpress.org/latest.tar.gz
    tar -xzvf latest.tar.gz --strip-components=1
    rm latest.tar.gz

## 7. Définir les permissions
    chown -R www-data:www-data /var/www/html
    chmod -R 755 /var/www/html
    chmod -R 644 /var/www/html/*.php

    exit

## 8. Lancer l'environnement

    docker-compose up -d
---
## 9. Accès à Wordpress    

    http://localhost

## 10. Configuration initiale Wordpress
    
    Completer l’install (langue, admin user, mot de passe)  

## 11. Identifiants de connexion

    login: admin
    password: Azerty_2025!
---
## 12. Commandes utiles
    docker exec -it wordpress_php bash
    wp core version
    docker-compose down -v
    docker system prune -a
    docker-compose build --no-cache php
    docker-compose ps
    docker-compose exec nginx ls -la /var/www/html
    docker-compose exec php php -v
    docker-compose exec php php -i | findstr memory
    docker-compose logs --tail=50
---
## 13. Sauvegardes

    docker exec wordpress_mariadb mysqldump -u root -p wordpress > backup.sql
--- 
##  Contenu disponible sur le repo

 **README.md** (ce fichier)   
 **Dossier de site Wordpress**   
 **Fichier docker-compose/yml**  
 **Fichier de configuration nginx**
 **Docker File**
 **Captures d’écran**
 
 --- 
**Auteur :** Arthur FOGUE (Laplateforme_Test_Msc_Cyber)  
**Date :** 12/12/2025 
**Version :** 1.0  
**Statut :** Complété