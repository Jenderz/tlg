ESQUELETO PARA COMENZAR EN SYMFONY 4.

## Caracteristicas

* Registro de usuario
* Editar usuario
* Restablecimiento de contraseña
* Opción doble opcional
* Inicio de sesión automático después de la activación del usuario y restablecimiento de contraseña
* Bootstrap 4

## Uso

Set environment variables in .env; you'll need a db, a mailer and recaptcha keys. Then run

	$ php bin/console doctrine:database:create
	$ php bin/console doctrine:migrations:migrate
