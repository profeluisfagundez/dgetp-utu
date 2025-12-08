Imports Logica

Public Class ListarAlumnos
    Private Sub btnVolver_Click(sender As Object, e As EventArgs) Handles btnVolver.Click
        Me.Close()
        Principal.Show()
    End Sub

    Private Sub ListarAlumnos_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
        Dim iterador As Dictionary(Of Integer, Alumno).Enumerator
        iterador = Sistema.getInstance().Listado()
        While iterador.MoveNext
            Dim alumno As Alumno
            alumno = iterador.Current.Value
            lstbx.Items.Add(alumno.ToString())
        End While
    End Sub
End Class