Imports Logica

Public Class ModificarAlumno
    Private Sub btnVolver_Click(sender As Object, e As EventArgs) Handles btnVolver.Click
        Me.Close()
        Principal.Show()
    End Sub

    Private Sub ModificarAlumno_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
        txtNacionalidad.Visible = False
        txtNombre.Visible = False
        cmbMateria.Visible = False
        dptFechaNacimiento.Visible = False
        cmbMateria.Items.Add("Programación")
        cmbMateria.Items.Add("Base de Datos")
        cmbMateria.Items.Add("Taller de Mantenimiento")
        cmbMateria.Items.Add("Diseño Web")
        cmbMateria.Items.Add("Diseño Gráfico")
        cmbMateria.Items.Add("Redes")
        cmbMateria.Items.Add("Sistemas Operativos")
        cmbMateria.SelectedIndex = 0
    End Sub

    Private Sub btnBuscar_Click(sender As Object, e As EventArgs) Handles btnBuscar.Click

        Try
            Dim respuesta As String
            Dim alumno As Alumno
            alumno = Sistema.getInstance().Buscar(txtCedula.Text)
            respuesta = InputBox("Desea modificar el alumno si / no")
            If respuesta = "si" Then
                MessageBox.Show("Se han borrado los datos del alumno, ingrese los nuevos datos")
                Sistema.getInstance().Borrar(alumno)
                'txtCedula.Text = ""
                txtNombre.Visible = True
                txtNacionalidad.Visible = True
                cmbMateria.Visible = True
                dptFechaNacimiento.Visible = True
            End If

        Catch ex As KeyNotFoundException
        MessageBox.Show("La cedula ingresada no fue encontrada")


        Catch ex2 As InvalidCastException
        MessageBox.Show("Error no se ha ingresado ningun dato de busqueda")

        Catch ex3 As OverflowException
        MessageBox.Show("Se han ingresado demasiados caracteres")
        End Try

    End Sub

    Private Sub btnModificar_Click(sender As Object, e As EventArgs) Handles btnModificar.Click
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
                Sistema.getInstance().Agregar(alumno)
                Me.Close()
                Principal.Show()
            Catch ex As ArgumentException
                MessageBox.Show("El código ya existe")
            End Try

        Else
            MessageBox.Show("No se ha podido crear el objeto")
        End If
    End Sub

End Class