Imports Logica

Public Class BuscarAlumno
    Private Sub btnLimpiar_Click(sender As Object, e As EventArgs) Handles btnLimpiar.Click
        lblResultado.Text = "..."
        txtBuscarCedula.Clear()
    End Sub

    Private Sub btnBuscar_Click(sender As Object, e As EventArgs) Handles btnBuscar.Click

        Try
            Dim alumno As Alumno
            alumno = Sistema.getInstance().Buscar(txtBuscarCedula.Text)
            lblResultado.Text = alumno.ToString()

        Catch ex As KeyNotFoundException
            MessageBox.Show("La cedula ingresada no fue encontrada")

        Catch ex2 As InvalidCastException
            MessageBox.Show("Error no se ha ingresado ningun dato de busqueda")

        Catch ex3 As OverflowException
            MessageBox.Show("Se han ingresado demasiados caracteres")
        End Try

    End Sub

    Private Sub btnVolver_Click(sender As Object, e As EventArgs) Handles btnVolver.Click
        Me.Close()
        Principal.Show()
    End Sub

    Private Sub BuscarAlumno_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
    End Sub
End Class