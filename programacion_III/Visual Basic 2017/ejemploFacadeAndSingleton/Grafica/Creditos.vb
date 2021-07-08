Public Class Creditos
    Private Sub btnVolver_Click(sender As Object, e As EventArgs) Handles btnVolver.Click
        Principal.Show()
        Me.Close()
    End Sub

    Private Sub Creditos_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
    End Sub
End Class