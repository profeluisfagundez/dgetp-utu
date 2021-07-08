Public Class Alumno
    Inherits Persona

    Public Property Materia As String

    Public Sub New(ByVal cedula As Integer, ByVal nombre As String, ByVal fechaNacimiento As DateTime, ByVal nacionalidad As String, materia As String)
        MyBase.New(cedula, nombre, fechaNacimiento, nacionalidad)
        Me.Materia = materia
    End Sub


    Public Overrides Function ToString() As String
        Return "Cedula: " & Cedula & vbCrLf & " Nombre: " & Nombre & vbCrLf & " Fecha Nacimiento: " & FechaNacimiento & vbCrLf & " Nacionalidad: " & Nacionalidad & vbCrLf & " Materia que cursa: " & Materia & vbCrLf
    End Function

    Public Overrides Function Equals(obj As Object) As Boolean
        Dim valido As Boolean = False
        If TypeOf obj Is Alumno Then
            Dim alumno As Alumno
            alumno = DirectCast(obj, Alumno)
            If alumno.Cedula() = Me.Cedula() Then
                valido = True
            End If
        End If
        Return valido
    End Function

End Class
