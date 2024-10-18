# Sistema de Contactos en PHP y MySQL

Este es un sistema de contactos desarrollado en PHP y MySQL, que incluye funcionalidades para dos tipos de usuarios: **administrador** y **usuario normal**. El sistema permite a los usuarios gestionar contactos, generar reportes, y tiene un sistema de roles y protección de rutas.

## Características

### Funcionalidades del Usuario Normal:
- Registrar, listar y gestionar (CRUD) contactos.
- Subir imágenes para los contactos.
- Generar reportes en PDF y Excel de los contactos.
  
### Funcionalidades del Administrador:
- Administrar usuarios (crear, editar y eliminar).
- Gestionar sus propios contactos.
- Generar reportes en PDF y Excel de todos los usuarios y sus contactos.
  
### Seguridad y Autenticación:
- Sistema de roles: Administrador y Usuario Normal.
- Protección de rutas según el rol de usuario.
- Autenticación de usuarios con manejo de sesiones.

## Requisitos del Sistema

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Composer (gestor de dependencias para PHP)

## Instalación

Sigue estos pasos para instalar el proyecto en tu máquina local:

### 1. Clonar el repositorio

```bash
git clone https://github.com/OmarRMC/sistema_contactos.git
cd sistema_contactos
```

# Instalar dependencias
El proyecto utiliza Composer para gestionar las dependencias de PHP. Ejecuta el siguiente comando en el directorio raíz del proyecto para instalar las dependencias:
```bash
composer install
```
Las dependencias incluidas en este proyecto son:
```json
{
    "require": {
        "setasign/fpdf": "^1.8",
        "phpoffice/phpspreadsheet": "^1.29"
    }
}
```
# Uso del Sistema
## Usuario Normal
- Inicia sesión con tus credenciales.
- Puedes gestionar tus contactos (crear, editar, eliminar, y ver la lista de contactos).
- También puedes generar reportes en PDF y Excel con la lista de tus contactos.
## Administrador
- Inicia sesión con una cuenta de administrador.
- Puedes gestionar usuarios (crear, editar, eliminar).
- También puedes gestionar tus propios contactos.
- Genera reportes en PDF y Excel con los detalles de los usuarios y sus contactos.
# Estructura del Proyecto
- ```index.php:``` El archivo de entrada principal del sistema.
- ```config/config.php:``` Archivo de configuración de base de datos.
- ```controladores/:``` Contiene los controladores principales como Layout.php, Contacto.php, Usuario.php, y Persona.php.
- ```modelos/:``` Contiene los modelos de datos como ContactoModel.php, UsuarioModel.php, y PersonaModel.php.
- ```vistas/:``` Contiene las vistas HTML con código PHP.
# Dependencias
El proyecto utiliza las siguientes dependencias:

- FPDF - Para generar documentos PDF.
- PhpSpreadsheet - Para trabajar con archivos de hojas de cálculo como Excel y CSV.