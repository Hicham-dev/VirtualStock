# VirtualStock
controle mangemeny system and exchange plateforme for electronique parts http://www.virtualstock.macontrole mangemeny system and exchange plateforme for electronique parts http://www.virtualstock.ma

# How to deploy for developpers 

1 - install <a href="https://getcomposer.org/">composer</a> <br>
2 - Execute the next commandes 

```sh
cd ./VirtualStock
composer install
php artisan key:generate
```
3 - create a vhost in your local server for the domaine 

```sh
virtualstock.ma
```

4 - if you can't find the public storage execute the next commandes

```sh
cd ./VirtualStock
php artisan storage:link
```