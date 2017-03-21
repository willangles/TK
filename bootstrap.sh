# mysqldump -u root -p"root" -h localhost scotchbox > ../../var/www/database.sql;
# echo Setting up database..
# mysql -u root -p"root" -e "DROP DATABASE IF EXISTS scotchbox ; CREATE DATABASE scotchbox;"
# mysql -u root -p"root" -h localhost scotchbox < ../../var/www/will.sql;