# MercaTodo

## Descripción del reto
> El administrador de MercaTodo necesita un sistema que le permita realizar la venta
de sus productos de mercadería online. El sistema deberá permitir permitir registrar
cada producto así como también administrar las cuentas de sus clientes, quienes
también deberán identificarse para realizar compras de los artículos de mercadería.
Para el administrador de MercaTodo es sumamente importante que el sistema
permita realizar pagos online y generar reportes que permitan tomar decisiones.
También es indispensable que el sistema permita administrar productos de manera
masiva.

## Requerimientos técnicos para todas las etapas del reto
- Usar GIT como sistema de gestión de versiones. 
-  Formato de código usando PSR (PHP Standards Recommendations) 
 - PSR 1: Basic Coding Standard .
 - PSR 12: Extended Coding Style Guide .
- Usar COMPOSER como herramienta de gestión de dependencias. 
- Usar separación por capas (mínimo MVC) .
- Usar Laravel como framework de desarrollo .
- Flujo de trabajo basado en GIT-FLOW .
- Desarrollo guiado por pruebas - TDD (Opcional en las etapas 1 y 2, requerido en las etapas 3 y 4) .
- Especificar los tipos de dato y tipo de retorno en la declaración de funciones y métodos.

## Ítems que otorgan puntos 
- Uso de Caché (PSR-6) (**2 puntos**)
- Gestión de logs (PSR-3) (**2 puntos**)
- Uso de preprocesadores para la construcción de las vistas de usuario (SASS) (**2 puntos**)
- Uso de Laravel Mix para la construcción de los assets del proyecto (CSS, JS) (**2 puntos**)
- Implementar al menos un patrón de diseño (**4 puntos**)
- Adoptar la especificación *"Conventional Commits"*  en el manejo del repositorio GIT (**2 puntos**)
- Documentación de código (DocBlock) (**2 puntos**)
- Implementación de herramientas de análisis estático (PHPStan) (**3 puntos**).
- Implementación de herramientas de integración continua (Travis CI) (**2 puntos**)

# Etapa 1: PHP Básico (**10 puntos**)
## Requerimientos funcionales.
- Un cliente podrá registrarse y loguearse en el sistema.
- Para evitar el ataque de bots o usuarios fake, el cliente deberá verificar su correo electrónico para completar el registro.
- El administrador podrá gestionar sus clientes de tal manera que pueda verlos, actualizarlos, habilitarlos e inhabilitarlos.
## Requerimientos técnicos
- Uso de migraciones para la creación de la estructura de base de datos.

# Etapa 2: PHP Intermedio (**15 puntos**)
## Requerimientos funcionales
- El administrador podrá gestionar sus productos de tal manera que pueda crearlos, actualizarlos, habilitarlos e inhabilitarlos.
- Los clientes registrados podrán ver la lista de productos creados, de tal manera que puedan ver una vitrina de productos separados por páginas y sus datos como foto y precio.
- Los clientes también podrán realizar una búsqueda personalizada de dichos productos para encontrar con rápidez lo que se está buscando.

## Requerimientos técnicos
- Hacer uso de variables de entorno
- Validar todos los datos ingresados por el usuario al sistema.

# Etapa 3: PHP Avanzado (**25 puntos**)
## Requerimientos funcionales
- Los clientes podrán visualizar los productos disponibles y adicionarlos a un carrito de compra.
- El cliente podrá consultar su pedido y realizar modificaciones antes de confirmar la orden y proceder con el pago.
- El pago debe realizarse con la pasarela de pagos de Placetopay. El sistema debe redireccionar al cliente a la página de pagos de la pasarela. Una vez el usuario retorne al sistema este debe mostrarle el resultado del pago.
- Las órdenes en el sistema deben tener un estado consistente con el estado de la transacción en la pasarela de pagos. 
- Los clientes deben poder revisar su historial de compras, y reintentar el pago de aquellas que no fueron satisfactorias.
## Requerimientos técnicos
- Integración con Web Checkout de Placetopay 

# Etapa 4: PHP Avanzado (50 puntos)
## Requerimientos funcionales
- El administrador podrá importar al sistema de manera masiva una lista de productos en excel.
- El administrador podrá descargar una lista en excel de los productos registrados para realizar su modificación y subirlos nuevamente al sistema de manera masiva.
- El administrador podrá generar reportes del sistema con información relevante para la gestión de su negocio.
- El uso de las funcionalidades del sistema debe estar permitido únicamente para aquellos usuarios con permisos (ACL).
- El sistema debe permitir gestionar productos desde una API REST.
## Requerimientos técnicos
- La generación de reportes debe hacerse mediante trabajos encolados

### Documentación para el proyecto. 
- [Git ](https://git-scm.com/ "Git ")
- [PSR ](https://www.php-fig.org/psr/ "PSR ")
- [PSR-1 ](https://www.php-fig.org/psr/psr-1/ "PSR-1 ")
- [PSR-12](https://www.php-fig.org/psr/psr-12/ "PSR-12")
- [Composer](https://getcomposer.org/ "Composer")
- [MVC](https://es.wikipedia.org/wiki/Modelo%E2%80%93vista%E2%80%93controlador "MVC")
- [Laravel](https://laravel.com/docs/7.x "Laravel")
- [Git Branching Model](https://nvie.com/posts/a-successful-git-branching-model/ "Git Branching Model")
- [Test driven development](https://en.wikipedia.org/wiki/Test-driven_development "Test driven development")
- [PSR-6 ](https://www.php-fig.org/psr/psr-6/ "PSR-6 ")
- [PSR-3](https://www.php-fig.org/psr/psr-3/ "PSR-3")
- [Sass ](https://sass-lang.com/ "SASS ")
- [Laravel Mix](https://laravel-mix.com/ "LARAVEL MIX")
- [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/ "Conventional Commits")
- [Docblock](https://en.wikipedia.org/wiki/Docblock "Docblock")
- [PHPStan](https://github.com/phpstan/phpstan "PHPStan")
- [Travis CI](https://travis-ci.org/ "Travis CI")
