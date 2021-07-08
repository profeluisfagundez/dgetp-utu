#!/bin/bash
#PROGRAMADOR: Luis Eduardo Fagúndez
#FECHA DE ÚLTIMA MODIFICACIÓN: 24/10/2016
#LICENCIA: GPL3
echo "Configurar vim para programar"
touch .vimrc
echo "syntax on" >> .vimrc
echo "set tabstop=4" >> .vimrc
echo "set number" >> .vimrc
echo "set shiftwidth=4" >> .vimrc
echo "set autoindent" >> .vimrc 
echo "set encoding=utf-8" >> .vimrc 
echo "Se ha configurado vim, presione una tecla para continuar"
read b
