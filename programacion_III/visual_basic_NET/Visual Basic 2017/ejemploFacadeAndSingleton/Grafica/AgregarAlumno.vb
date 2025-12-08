Imports Logica

Public Class AgregarAlumno
    Private Sub btnVolver_Click(sender As Object, e As EventArgs) Handles btnVolver.Click
        Close()
        Principal.Show()
    End Sub

    Private Sub AgregarAlumno_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
        cmbMateria.Items.Add("Programación")
        cmbMateria.Items.Add("Base de Datos")
        cmbMateria.Items.Add("Taller de Mantenimiento")
        cmbMateria.Items.Add("Diseño Web")
        cmbMateria.Items.Add("Diseño Gráfico")
        cmbMateria.Items.Add("Redes")
        cmbMateria.Items.Add("Sistemas Operativos")
        cmbMateria.SelectedIndex = 0
    End Sub

    Private Sub btnAgregar_Click(sender As Object, e As EventArgs) Handles btnAgregar.Click
        Dim bandera As Boolean = True
        Dim cedula As Integer
        Dim nombre As String = txtNombre.Text.Trim()
        Dim fechaDeNacimiento As Date = dptFechaNacimiento.Value.Date
        Dim nacionalidad As String = txtNacionalidad.Text.Trim()
        Dim materia As String = cmbMateria.SelectedItem
        If String.IsNullOrEmpty(txtNombre.Text.Trim()) Then
            bandera = False
        End If
        If String.IsNullOrEmpty(txtNacionalidad.Text.Trim()) Then
            bandera = False
        End If
        Try
            cedula = txtCedula.Text.Trim()
        Catch ex As InvalidCastException
            MessageBox.Show("Debe de ingresar una cedula")
            bandera = False
        Catch ex3 As OverflowException
            MessageBox.Show("Se han ingresado demasiados caracteres, no es una cedula valida")
            bandera = False
        End Try
        If bandera = True Then
            Try
                Dim alumno As Alumno = New Alumno(cedula, nombre, fechaDeNacimiento, nacionalidad, materia)
                Sistema.getInstance.Agregar(alumno)
            Catch ex As ArgumentException
                MessageBox.Show("El código ya existe")
            End Try
        Else
            MessageBox.Show("No se ha podido crear el objeto")
        End If
        Close()
        Principal.Show()
    End Sub
End Class