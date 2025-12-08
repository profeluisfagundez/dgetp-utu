ls /home/dramon
ls -la /home/dramon
mkdir -p /home/dramon/scripts /home/dramon/archivos /home/dramon/otros
mkdir -p /home/dramon/{scripts, archivos, otros}
touch /home/dramon/otros/archivo_{1..1000}
mkdir /home/dramon/otros/directorio_{1..1000}
mv /home/dramon/otros/archivo_* /home/dramon/archivos/
# mv origen destino