Imports Logica

Public Class BorrarAlumno
    Private Sub btnBuscar_Click(sender As Object, e As EventArgs) Handles btnBuscar.Click

        Try
            Dim respuesta As String
            Dim alumno As Alumno
            Dim sistema As Sistema = Sistema.getInstance()
            alumno = Sistema.getInstance().Buscar(txtBuscarCedula.Text)
            lblResultado.Text = alumno.ToString()
            respuesta = InputBox("Desea eliminar el alumno? si/no")
            If respuesta = "si" Then
                Sistema.getInstance().Borrar(alumno)
                lblResultado.Text = "..."
                MessageBox.Show("El alumno ha sido borrado")
            Else
                MessageBox.Show("El alumno no ha sido borrado")
            End If

        Catch ex As KeyNotFoundException
            MessageBox.Show("La cedula ingresada no fue encontrada")

        Catch ex2 As InvalidCastException
            MessageBox.Show("Error no se ha ingresado ningun dato de busqueda")

        Catch ex3 As OverflowException
            MessageBox.Show("Se han ingresado demasiados caracteres")
        End Try

    End Sub

    Private Sub btnLimpiar_Click(sender As Object, e As EventArgs) Handles btnLimpiar.Click
        lblResultado.Text = "..."
        txtBuscarCedula.Clear()
    End Sub

    Private Sub btnVolver_Click(sender As Object, e As EventArgs) Handles btnVolver.Click
        Me.Close()
        Principal.Show()
    End Sub

    Private Sub BorrarAlumno_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
    End Sub
End Class