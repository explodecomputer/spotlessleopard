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

## Deployment

Get mysql and wordpress docker containers

```
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

Navigate to [http://localhost:8000/wp-admin/](http://localhost:8000/wp-admin/)

Install updraftplus plugin

Activate updraftplus plugin

Upload backup files
- db
- uploads
- plugins
- other

Restore from these files

Now update the url address. Navigate to [http://localhost:8000/temporary/Search-Replace-DB-master/](http://localhost:8000/temporary/Search-Replace-DB-master/)

Or try doing it using CLI:

```
docker exec -it spotlessleopard_wordpress_1 /bin/bash
php srdb.cli.php -h db --port 3306 -u root -p 0dme9Ft0Bk -n wordpress -s http://localhost:8000 -r http://68.183.45.84 -z
```

Or, change the URL directly in the `db.gz` file to be uploaded.

Make sure that the following plugins are activated:

- Advanced Custom Fields
- Advanced Custom Fields: Date and Time Picker

---

## To do

- change photo attributes
- compress new photos
- catering page to be updated
- deploy to proper url
- check that updraftplus is doing backups
- make backup of ACF json

