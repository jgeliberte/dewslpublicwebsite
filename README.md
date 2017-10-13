# DEWS-Landslide Public Website
This is for the DEWS-Landslide public website page.

*[HOW TO SETUP - UBUNTU]
1. Edit your apache documentroot  
  1.1 cd /apache2 <>  
  1.2 sudo vim apache2.conf  
  1.3 Replace the line for the <Directory> tag with:  
    
  /* <Directory /var/www/dewsl-public_website/html/>  
  /*     Options Indexes FollowSymLinks  
  /*      AllowOverride All  
  /*      Require all granted  
  /* < / Directory>
    
  1.4 cd ../sites-enabled  
  1.5 sudo vim 000-default.conf  
  1.6 Replace Documentroot with:  
    
  DocumentRoot /var/www/dewsl-public_website/html  
  
2. Restart Apache  
  2.1 sudo service apache2 restart  