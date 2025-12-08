Imports System.Data.SqlClient

Public Class Principal

    Private Sub Principal_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
    End Sub

    Private Sub btnInsertar_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnInsertar.Click
        Dim baseDeDatos As Persistencia = New Persistencia()
        baseDeDatos.Conectar()
        Try
            Dim codigo As Integer = txtCodigo.Text
            Dim nombre As String = txtNombre.Text().Trim()

            If nombre.Equals("") Then
                MessageBox.Show("El nombre no puede ser vacío")
            Else
                Try
                    If baseDeDatos.Insertar(codigo, nombre) Then
                        MessageBox.Show("Se ingreso el registro en la base de datos")
                    Else
                        MessageBox.Show("No se pudo ingresar el registro")
                    End If
                Catch ex As SqlException
                    MessageBox.Show("Error al insertar datos")
                End Try
            End If
        Catch ex As InvalidCastException
            MessageBox.Show("Ingrese un código valido")
        End Try

    End Sub

End Class
