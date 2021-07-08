Public Class Persona
    'Propiedades
    Public Property CI As Integer
    Public Property Nombre As String
    Public Property Apellido As String

    'Constructor de la clase
    Public Sub New(_ci As Integer, _nombre As String, _apellido As String)
        CI = _ci
        Nombre = _nombre
        Apellido = _apellido
    End Sub

    'Método ToString() para mostrar los datos del objeto
    Public Overrides Function ToString() As String
        Return " CI: " & CI & " Nombre: " & Nombre & " Apellido: " & Apellido
    End Function

End Class
