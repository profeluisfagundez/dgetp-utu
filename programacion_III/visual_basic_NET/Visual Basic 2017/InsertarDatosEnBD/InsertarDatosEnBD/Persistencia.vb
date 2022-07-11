Imports System.Data.SqlClient

Public Class Persistencia

    'Generamos una propiedad automática del tipo SqlConnection, la cual manejara la conexión
    'a la base de datos. 
    Public Property Conexion As SqlConnection

    'En el constructor de la clase generamos la instancia de la propiedad "Conexion" y le
    'pasamos la cadena de conexión de la base de datos
    Public Sub New()
        Conexion = New SqlConnection With {
            .ConnectionString = "Server=DESKTOP-IMSLO0Q; database=prueba; trusted_connection=yes"
        }
    End Sub

    'Método que permite coenctar la base de datos
    Public Sub Conectar()
        Conexion.Open()
    End Sub

    'Método que permite descoenctar la base de datos
    Public Sub Desconectar()
        Conexion.Close()
    End Sub

    'El método Insertar() recibe de la ventana Principal un código y un nombre, este método armara la cadena de conexión
    'para ejecutar la consulta, gracias a que el método es del tipo Boolean se puede saber si la inserción de datos
    'tuvo éxito o no debido a que devuelve verdadero o falso.
    'Es necesario controlar una capa más arriba la excepción SqlException, debido a que puede dar problemas.
    Public Function Insertar(ByVal codigo As String, ByVal nombre As String) As Boolean
        Dim comandoSql As SqlCommand
        Dim cadena As String = "INSERT INTO prueba(id_prueba, nombre) VALUES(" + CStr(codigo) + "," + "'" + nombre + "'" + ")"
        Dim resultado As Integer
        comandoSql = New SqlCommand(cadena, Conexion)
        resultado = comandoSql.ExecuteNonQuery
        If resultado > 0 Then
            Return True
        Else
            Return False
        End If
    End Function
End Class
