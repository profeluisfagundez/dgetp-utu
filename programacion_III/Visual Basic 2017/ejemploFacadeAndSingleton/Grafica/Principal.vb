Public Class Principal
    Private Sub SalirToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles SalirToolStripMenuItem.Click
        Me.Close()
    End Sub

    Private Sub CreditosToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles CreditosToolStripMenuItem.Click
        Me.Hide()
        Creditos.Show()
    End Sub

    Private Sub AgregarAlumnoToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles AgregarAlumnoToolStripMenuItem.Click
        Me.Hide()
        AgregarAlumno.Show()
    End Sub

    Private Sub ListarAlumnosToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles ListarAlumnosToolStripMenuItem.Click
        Me.Hide()
        ListarAlumnos.Show()
    End Sub

    Private Sub BuscarAlumnoToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles BuscarAlumnoToolStripMenuItem.Click
        Me.Hide()
        BuscarAlumno.Show()
    End Sub

    Private Sub BorrarAlumnoToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles BorrarAlumnoToolStripMenuItem.Click
        Me.Hide()
        BorrarAlumno.Show()
    End Sub

    Private Sub ModificarAlumnoToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles ModificarAlumnoToolStripMenuItem.Click
        Me.Hide()
        ModificarAlumno.Show()
    End Sub

    Private Sub Principal_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.CenterToScreen()
    End Sub
End Class
