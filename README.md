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

Now navigate to [http://localhost:8000](http://localhost:8000), install and activate the updraftplus plugin, and restore from the backups that were made from the existing instance.

Finally, navigate to [http://localhost:8000/temporary/Search-Replace-DB](http://localhost:8000/temporary/Search-Replace-DB) and replace in the database the url for the original instance for 'localhost:8000'.

Make sure that the following plugins are activated:

- Advanced Custom Fields
- Advanced Custom Fields: Date and Time Picker

---

## To do

- compress new photos
- check that updraftplus is doing backups
- make backup of ACF json

