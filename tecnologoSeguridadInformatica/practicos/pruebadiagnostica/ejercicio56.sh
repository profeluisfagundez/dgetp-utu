# Programar un trabajo para ejecutarse en el minuto 40 de cada hora de cada día
40 * * * * /ruta/a/tu/script/miScript.sh

# Programar un trabajo para ejecutarse cada día a las 21:35hs
35 21 * * * /ruta/a/tu/script/miScript.sh

# Programar un trabajo para ejecutarse de lunes a viernes a las 22:31hs
31 22 * * 1-5 /ruta/a/tu/script/miScript.sh

# Programar un trabajo para ejecutarse los martes y los jueves a las 21:32hs
32 21 * * 2,4 /ruta/a/tu/script/miScript.sh

# Programar un trabajo para ejecutarse los días 10 y 20 de todos los meses a las 10:00hs
0 10 10,20 * * /ruta/a/tu/script/miScript.sh

# Programar un trabajo para ejecutarse cada 15 minutos
*/15 * * * * /ruta/a/tu/script/miScript.sh

# Programar un trabajo para ejecutarse cada día a las 00:00hs
0 0 * * * /ruta/a/tu/script/miScript.sh

# Programar un trabajo para ejecutarse cada primer día de mes a las 01:00hs
0 1 1 * * /ruta/a/tu/script/miScript.sh

# Programar un trabajo para ejecutarse durante los días laborables a las 20:00hs
0 20 * * 1-5 /ruta/a/tu/script/miScript.sh

# Ejecutar un trabajo el primer viernes de cada mes a las 00:00hs
0 0 * * 5 [ "$(date +\%m)" != "$(date +\%m -d next fri)" ] && /ruta/a/tu/script/miScript.sh
