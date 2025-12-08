Public Class Sistema

    Private Shared _objeto As Sistema = Nothing
    Private _listaOrdenada As Dictionary(Of Integer, Alumno)

    Private Sub New()
        _listaOrdenada = New Dictionary(Of Integer, Alumno)
    End Sub

    Public Shared Function getInstance() As Sistema
        If _objeto Is Nothing Then
            _objeto = New Sistema()
        End If
        Return _objeto
    End Function

    Public Sub Agregar(ByVal alumno As Alumno)
        _listaOrdenada.Add(alumno.Cedula(), alumno)
    End Sub

    Public Sub Borrar(ByVal alumno As Alumno)
        _listaOrdenada.Remove(alumno.Cedula())
    End Sub

    Public Function Buscar(ByVal cedula As Integer) As Alumno
        Return _listaOrdenada(cedula)
    End Function

    Public Function Listado() As Dictionary(Of Integer, Alumno).Enumerator
        Return _listaOrdenada.GetEnumerator
    End Function

End Class
