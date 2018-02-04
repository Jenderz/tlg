ESQUELETO PARA COMENZAR EN SYMFONY 4.

## Caracteristicas

* Registro de usuario
* Editar usuario
* Restablecimiento de contraseña
* Opción doble opcional
* Inicio de sesión automático después de la activación del usuario y restablecimiento de contraseña
* Bootstrap 4

## Uso

Establecer variables de entorno en .env; necesitarás una base de datos mysq

	$ php bin/console doctrine:database:create
	$ php bin/console doctrine:migrations:migrate
