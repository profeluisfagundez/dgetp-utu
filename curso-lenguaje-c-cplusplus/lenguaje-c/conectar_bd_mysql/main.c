/* Sencillo programa C que establece una conexión a un servidor de base de datos MySQL,
es necesario tener el modulo libmysqlclient-dev instalado en el sistema para su funcionamiento
Se debe de compilar de la siguiente forma: 
gcc -o conexion_mysql $(mysql_config --cflags) $(mysql_config --libs) conexion_mysql.c */

#include <stdio.h>
#include <stdlib.h>
#include <mysql.h>

int main() {
 MYSQL *conn;
 MYSQL_RES *res;
 MYSQL_ROW row;
 char *server = "localhost";
 char *user = "root";
 char *password = "root"; /* Poner la contraseña */
 char *database = "mysql";
 conn = mysql_init(NULL);
 /* Conectarse a la base de datos */
 if (!mysql_real_connect(conn, server, user, password, database, 0, NULL, 0)) {
     fprintf(stderr, "%s\n", mysql_error(conn));
     exit(1);
 }

 /* enviar la consulta SQL */
 if (mysql_query(conn, "show tables")) {
     fprintf(stderr, "%s\n", mysql_error(conn));
     exit(1);
 }
 res = mysql_use_result(conn);
 /* imprimir los nombres de las tablas */
 printf("Tablas en la base de datos 'mysql':\n");
 while ((row = mysql_fetch_row(res)) != NULL) printf("%s \n", row[0]);
 /* liberar los recursos y cerrar la conexion */
 mysql_free_result(res);
 mysql_close(conn);
 return 0;
}
