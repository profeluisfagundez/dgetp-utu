package persistencia

import (
	"database/sql"
	"errors"
	_ "github.com/go-sql-driver/mysql"
)

type Trabajador struct {
	Ci        string
	Nombre    string
	Apellido  string
	Direccion string
	Email     string
	Celular   string
}

type Persistencia struct {
	db *sql.DB
}

func NewPersistencia() (*Persistencia, error) {
	db, err := sql.Open("mysql", "root:root@tcp(localhost)/usuarios")
	if err != nil {
		return nil, err
	}

	return &Persistencia{db: db}, nil
}

func (p *Persistencia) Close() {
	p.db.Close()
}

func (p *Persistencia) RetornarRegistros() ([]Trabajador, error) {
	rows, err := p.db.Query("SELECT * FROM usuario")
	if err != nil {
		return nil, err
	}
	defer rows.Close()

	var trabajadores []Trabajador

	for rows.Next() {
		var t Trabajador
		err = rows.Scan(&t.Ci, &t.Nombre, &t.Apellido, &t.Direccion, &t.Email, &t.Celular)
		if err != nil {
			return nil, err
		}
		trabajadores = append(trabajadores, t)
	}

	return trabajadores, nil
}

func (p *Persistencia) AltaUsuario(t Trabajador) error {
	_, err := p.db.Exec("INSERT INTO usuario VALUES (?, ?, ?, ?, ?, ?)", t.Ci, t.Nombre, t.Apellido, t.Direccion, t.Email, t.Celular)
	if err != nil {
		return err
	}
	return nil
}

func (p *Persistencia) ExisteTrabajador(ci string) (bool, error) {
	var count int
	err := p.db.QueryRow("SELECT COUNT(*) FROM usuario WHERE ci = ?", ci).Scan(&count)
	if err != nil {
		return false, err
	}
	return count > 0, nil
}

func (p *Persistencia) RetornarRegistro(ci string) (Trabajador, error) {
	var t Trabajador
	err := p.db.QueryRow("SELECT * FROM usuario WHERE ci = ?", ci).Scan(&t.Ci, &t.Nombre, &t.Apellido, &t.Direccion, &t.Email, &t.Celular)
	if err != nil {
		return Trabajador{}, err
	}
	return t, nil
}

func (p *Persistencia) BorrarRegistro(ci string) error {
	existe, err := p.ExisteTrabajador(ci)
	if err != nil {
		return err
	}
	if existe {
		_, err = p.db.Exec("DELETE FROM usuario WHERE ci = ?", ci)
		if err != nil {
			return err
		}
	}
	return nil
}

func (p *Persistencia) ModificarRegistro(t Trabajador) error {
	_, err := p.db.Exec("UPDATE usuario SET nombre = ?, apellido = ?, direccion = ?, email = ?, celular = ? WHERE ci = ?", t.Nombre, t.Apellido, t.Direccion, t.Email, t.Celular, t.Ci)
	if err != nil {
		return err
	}
	return nil
}
