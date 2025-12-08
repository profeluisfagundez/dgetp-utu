Public Class Principal
    Private Sub Principal_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
    End Sub

    Private Sub btnSalir_Click(sender As Object, e As EventArgs) Handles btnSalir.Click
        Me.Close()
    End Sub

    Private Sub btnCrear_Click(sender As Object, e As EventArgs) Handles btnCrear.Click
        Dim ci As Integer
        Dim nombre As String
        Dim apellido As String
        Dim bandera = True
        Try
            ci = txtCi.Text().Trim()
        Catch ex As InvalidCastException
            MessageBox.Show("No se ingreso un valor numerico")
            bandera = False
        End Try
        nombre = txtNombre.Text().Trim()
        apellido = txtApellido.Text().Trim()
        If nombre.Equals("") Then
            MessageBox.Show("El campo del nombre quedo vacio")
            bandera = False
        End If
        If apellido.Equals("") Then
            MessageBox.Show("El campo del apellido quedo vacío")
            bandera = False
        End If
        If (bandera = True) Then
            Dim persona As New Persona(ci, nombre, apellido)
            MessageBox.Show(persona.ToString())
        Else
            MessageBox.Show("Error al crear objeto")
        End If


    End Sub
End Class
