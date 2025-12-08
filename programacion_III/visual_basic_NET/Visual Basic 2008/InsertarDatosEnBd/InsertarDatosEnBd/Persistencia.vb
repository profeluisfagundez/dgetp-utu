Imports System.Data.SqlClient

Public Class Persistencia

    'Atributo del tipo SqlConnection para generar la conexión de la base de datos.
    Private conexion As SqlConnection

    'En el constructor de la clase generamos la instancia del atriburo "conexion" y le
    'pasamos la cadena de conexión de la base de datos
    Public Sub New()
        conexion = New SqlConnection()
        conexion.ConnectionString = "Server=DESKTOP-IMSLO0Q; database=prueba; trusted_connection=yes"
    End Sub

    'Método que permite coenctar la base de datos
    Public Sub Conectar()
        conexion.Open()
    End Sub

    'Método que permite descoenctar la base de datos
    Public Sub Desconectar()
        conexion.Close()
    End Sub

    'El método Insertar() recibe de la ventana Principal un código y un nombre, este método armara la cadena de conexión
    'para ejecutar la consulta, gracias a que el método es del tipo Boolean se puede saber si la inserción de datos
    'tuvo éxito o no debido a que devuelve verdadero o falso.
    'Es necesario controlar una capa más arriba la excepción SqlException, debido a que puede dar problemas.
    Public Function Insertar(ByVal codigo As Integer, ByVal nombre As String) As Boolean
        Dim comandoSql As SqlClient.SqlCommand
        Dim cadena As String = "INSERT INTO prueba(id_prueba, nombre) VALUES(" + CStr(codigo) + "," + "'" + nombre + "'" + ")"
        Dim resultado As Integer
        comandoSql = New SqlClient.SqlCommand(cadena, conexion)
        resultado = comandoSql.ExecuteNonQuery
        If resultado > 0 Then
            Return True
        Else
            Return False
        End If
    End Function

End Class
