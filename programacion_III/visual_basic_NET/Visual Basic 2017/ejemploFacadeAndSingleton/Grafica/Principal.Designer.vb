<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Principal
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(Principal))
        Me.ToolStripMenuItem1 = New System.Windows.Forms.ToolStripMenuItem()
        Me.AgregarAlumnoToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.BuscarAlumnoToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.ModificarAlumnoToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.BorrarAlumnoToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.ListarAlumnosToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.CreditosToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.SalirToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.MenuStrip1 = New System.Windows.Forms.MenuStrip()
        Me.MenuStrip1.SuspendLayout()
        Me.SuspendLayout()
        '
        'ToolStripMenuItem1
        '
        Me.ToolStripMenuItem1.DropDownItems.AddRange(New System.Windows.Forms.ToolStripItem() {Me.AgregarAlumnoToolStripMenuItem, Me.BuscarAlumnoToolStripMenuItem, Me.ModificarAlumnoToolStripMenuItem, Me.BorrarAlumnoToolStripMenuItem, Me.ListarAlumnosToolStripMenuItem})
        Me.ToolStripMenuItem1.Name = "ToolStripMenuItem1"
        Me.ToolStripMenuItem1.Size = New System.Drawing.Size(60, 20)
        Me.ToolStripMenuItem1.Text = "Archivo"
        '
        'AgregarAlumnoToolStripMenuItem
        '
        Me.AgregarAlumnoToolStripMenuItem.Name = "AgregarAlumnoToolStripMenuItem"
        Me.AgregarAlumnoToolStripMenuItem.Size = New System.Drawing.Size(169, 22)
        Me.AgregarAlumnoToolStripMenuItem.Text = "Agregar alumno"
        '
        'BuscarAlumnoToolStripMenuItem
        '
        Me.BuscarAlumnoToolStripMenuItem.Name = "BuscarAlumnoToolStripMenuItem"
        Me.BuscarAlumnoToolStripMenuItem.Size = New System.Drawing.Size(169, 22)
        Me.BuscarAlumnoToolStripMenuItem.Text = "Buscar alumno"
        '
        'ModificarAlumnoToolStripMenuItem
        '
        Me.ModificarAlumnoToolStripMenuItem.Name = "ModificarAlumnoToolStripMenuItem"
        Me.ModificarAlumnoToolStripMenuItem.Size = New System.Drawing.Size(169, 22)
        Me.ModificarAlumnoToolStripMenuItem.Text = "Modificar alumno"
        '
        'BorrarAlumnoToolStripMenuItem
        '
        Me.BorrarAlumnoToolStripMenuItem.Name = "BorrarAlumnoToolStripMenuItem"
        Me.BorrarAlumnoToolStripMenuItem.Size = New System.Drawing.Size(169, 22)
        Me.BorrarAlumnoToolStripMenuItem.Text = "Borrar alumno"
        '
        'ListarAlumnosToolStripMenuItem
        '
        Me.ListarAlumnosToolStripMenuItem.Name = "ListarAlumnosToolStripMenuItem"
        Me.ListarAlumnosToolStripMenuItem.Size = New System.Drawing.Size(169, 22)
        Me.ListarAlumnosToolStripMenuItem.Text = "Listar alumnos"
        '
        'CreditosToolStripMenuItem
        '
        Me.CreditosToolStripMenuItem.Name = "CreditosToolStripMenuItem"
        Me.CreditosToolStripMenuItem.Size = New System.Drawing.Size(63, 20)
        Me.CreditosToolStripMenuItem.Text = "Creditos"
        '
        'SalirToolStripMenuItem
        '
        Me.SalirToolStripMenuItem.Name = "SalirToolStripMenuItem"
        Me.SalirToolStripMenuItem.Size = New System.Drawing.Size(41, 20)
        Me.SalirToolStripMenuItem.Text = "Salir"
        '
        'MenuStrip1
        '
        Me.MenuStrip1.Items.AddRange(New System.Windows.Forms.ToolStripItem() {Me.ToolStripMenuItem1, Me.CreditosToolStripMenuItem, Me.SalirToolStripMenuItem})
        Me.MenuStrip1.Location = New System.Drawing.Point(0, 0)
        Me.MenuStrip1.Name = "MenuStrip1"
        Me.MenuStrip1.Size = New System.Drawing.Size(624, 24)
        Me.MenuStrip1.TabIndex = 0
        Me.MenuStrip1.Text = "MenuStrip1"
        '
        'Principal
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackgroundImage = CType(resources.GetObject("$this.BackgroundImage"), System.Drawing.Image)
        Me.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Zoom
        Me.ClientSize = New System.Drawing.Size(624, 441)
        Me.Controls.Add(Me.MenuStrip1)
        Me.DoubleBuffered = True
        Me.Name = "Principal"
        Me.Text = "Ejemplo de Fachada y Singleton"
        Me.MenuStrip1.ResumeLayout(False)
        Me.MenuStrip1.PerformLayout()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents ToolStripMenuItem1 As ToolStripMenuItem
    Friend WithEvents AgregarAlumnoToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents BuscarAlumnoToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents ModificarAlumnoToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents BorrarAlumnoToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents ListarAlumnosToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents CreditosToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents SalirToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents MenuStrip1 As MenuStrip
End Class
