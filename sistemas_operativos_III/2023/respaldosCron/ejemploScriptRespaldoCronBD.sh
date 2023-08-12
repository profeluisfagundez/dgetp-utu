fecha=$(date +%Y%m%d-%H-%M-%S-backup_bd)
#Realizamos el backup
mysqldump --opt --events --routines --triggers --default-character-set=utf8 -u root -proot crudlitesystem > crudlitesystem.sql
#Comprimimos el archivo.sql con la fecha para generar el respaldo
tar -czvf $fecha.tar.gz crudlitesystem.sql
#movemos el respaldo hacia el directorio 
mv $fecha.tar.gz /home/eduardo/respaldos
# eliminamos el archivo .sql
rm crudlitesystem.sql
