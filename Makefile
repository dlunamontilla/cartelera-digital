TRANSPILADOR = scss
PARAMETROS = -w -t expanded
RUTA = recursos/activos/sass:vista/css

main:
	${TRANSPILADOR} ${PARAMETROS} ${RUTA}

server:
	php -S localhost:1100

correr:
	${TRANSPILADOR} ${PARAMETROS} ${RUTA} & php -S localhost:1100