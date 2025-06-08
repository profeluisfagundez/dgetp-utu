Public MustInherit Class Persona

    Public Property Cedula As Integer
    Public Property Nombre As String
    Public Property FechaNacimiento As DateTime
    Public Property Nacionalidad As String

    Public Sub New(ByVal cedula As Integer, ByVal nombre As String, ByVal fechaNacimiento As DateTime, ByVal nacionalidad As String)
        Me.Cedula = cedula
        Me.Nombre = nombre
        Me.FechaNacimiento = fechaNacimiento
        Me.Nacionalidad = nacionalidad
    End Sub

End Class

