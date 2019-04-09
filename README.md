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

navbar: http://code.tutsplus.com/tutorials/how-to-integrate-bootstrap-navbar-into-wordpress-theme--wp-33410

background vid
http://jsfiddle.net/mgmilcher/8R7Xx/sho/

Google calendar events 
http://spunmonkey.design/display-contents-google-calendar-php/

API key 
AIzaSyDMO5IzHHapmNae_i8pes_cOhE1G2k-SoQ
IPs 
Any IP allowed
Activation date 
Jun 6, 2015, 7:27:00 AM
Activated by    
explodecomputer@gmail.com (you)






Event Management
http://www.tribalcafe.co.uk/5-best-event-management-plugins-wordpress/


Directions for map


http://www.flaticon.com/free-icon/map-pin-silhouette_8753

https://github.com/brunob/leaflet.fullscreen

Using the following plugins:

https://wordpress.org/support/plugin/event-post
https://wordpress.org/plugins/duplicate-post/

Jo's suggestions:
- Move the menu bar to the footer. Could add a circular link in the top left to the footer but not sure this would be intuitive. You could make it a picture of a leopard tail.
- Make the [partners] text a readable colour.
- Set the logos of partners to link to partner web pages.
- Make the home page links work and the labels update from the calendar...and the other links on other pages too.
- Different picture for pop-ups page.
- Text overlay on menu photos.
- Contact page.
- Make spotless leopard logo in footer also a link to the home page.
- Pause button for video.





Notes 9-06

menu - just put a few main options and say follow us on facebook for regular updates


home page - we are [open closed] at regular spot - time when open

consider putting proper event manager in


## Notes 10-01-2018

UpdraftPlus backup system currently going to my dropbox. Need to free up space so moving previous backups to ~/backups/Updraft




## to do

- change photo attributes
- compress new photos
- catering page to be updated
- deploy to proper url
- check that updraftplus is doing backups
- make backup of ACF json

