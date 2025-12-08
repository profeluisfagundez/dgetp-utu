#!/bin/bash
#creo una variable con un ls
variable=$(ls -l)
for datos in $variable
do
  echo $datos
done

