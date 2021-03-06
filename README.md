# spotlessleopard

## Secrets

Need a file called `secrets.env` that looks like this:

```
MYSQL_ROOT_PASSWORD=VALUE
MYSQL_PASSWORD=VALUE
MYSQL_USER=wordpress
MYSQL_DATABASE=wordpress
WORDPRESS_DB_USER=wordpress
WORDPRESS_DB_PASSWORD=VALUE
WORDPRESS_DB_NAME=wordpress
```


## Local development

The database backups need to be made available through updraftplus. From an existing instance

1. Make sure updraftplus plugin is installed
2. Export the database, plugins and uploads

Now create the wordpress environment in docker

```
git clone git@github.com:explodecomputer/spotlessleopard.git && cd spotlessleopard
wget https://github.com/interconnectit/Search-Replace-DB/archive/master.zip
unzip master.zip
docker-compose down
docker volume rm spotlessleopard_db_data
docker-compose up -d
docker exec -it spotlessleopard_wordpress_1 /bin/bash
chown -R www-data:www-data temporary/
chown -R www-data:www-data wp-content/
exit
```

Make sure that the backup files are in the `backup` folder. They look like this:

```
backup_2019-07-17-2145_The_Spotless_Leopard_9d03732cf672-db.gz
backup_2019-07-17-2145_The_Spotless_Leopard_9d03732cf672-plugins.zip
backup_2019-07-17-2145_The_Spotless_Leopard_9d03732cf672-uploads.zip
backup_2019-07-17-2145_The_Spotless_Leopard_9d03732cf672-uploads2.zip
backup_2019-07-17-2145_The_Spotless_Leopard_9d03732cf672-uploads3.zip
```

Navigate to [http://localhost:8000/wp-admin/](http://localhost:8000/wp-admin/)

Install updraftplus plugin

Activate updraftplus plugin

Upload backup files
- db
- uploads
- plugins
- other

Restore from these files.

Make sure that the following plugins are activated:

- Advanced Custom Fields
- Advanced Custom Fields: Date and Time Picker

## Backup files

The backup database files have urls in them, and need to reflect the location they are being served in. Could use sed e.g.

```
gunzip -c backup_2019-07-17-2145_The_Spotless_Leopard_9d03732cf672-db.gz > temp
sed -i 's@http://localhost:8000@http://thespotlessleopard.co.uk@g' temp
gzip -c temp > backup_2019-07-17-2145_The_Spotless_Leopard_9d03732cf672-db.gz
```


Or navigate to [http://localhost:8000/temporary/Search-Replace-DB-master/](http://localhost:8000/temporary/Search-Replace-DB-master/)

and replace in the database the url for the original instance for 'localhost:8000'.

Or try doing it using CLI:

```
docker exec -it spotlessleopard_wordpress_1 /bin/bash
php srdb.cli.php -h db --port 3306 -u root -p 0dme9Ft0Bk -n wordpress -s http://localhost:8000 -r http://68.183.45.84 -z
```


---

## To do

- compress new photos
- check that updraftplus is doing backups
- make backup of ACF json

