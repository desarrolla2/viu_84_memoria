# Memoria del Trabajo de final de Grado - VIU 84

Este repositorio contiene la memoria del proyecto desarrollado como parte del programa de estudios en la Universidad Internacional de Valencia (VIU). La documentación está creada utilizando **LaTeX**
para garantizar un formato profesional y de alta calidad.

## Estructura del proyecto

La estructura del repositorio está diseñada para facilitar la navegación y edición de los diferentes componentes de la memoria:

- **`main.tex`**: Archivo principal que organiza el contenido del documento.
- **`sections/`**: Carpeta que contiene los capítulos y secciones individuales de la memoria.
- **`images/`**: Carpeta para almacenar imágenes, gráficos y diagramas utilizados en el documento.
- **`bibliography.bib`**: Archivo que contiene las referencias bibliográficas del proyecto, gestionado con BibTeX.
- **`templates/`**: Plantillas de formato personalizadas para garantizar una presentación uniforme.
- **`config/`**: Archivos de configuración como el estilo de las referencias, formato del índice, y más.

## Requisitos previos

Para compilar este proyecto, necesitas tener instalado lo siguiente en tu sistema:

1. **Docker**: Una herramienta de contenedores que permite aislar entornos y aplicaciones.
2. **Docker Compose**: Una herramienta que permite definir y administrar aplicaciones Docker con múltiples contenedores.

Ambas herramientas son necesarias para ejecutar el entorno pre configurado que se incluye en este proyecto, eliminando la necesidad de instalar una distribución de LaTeX localmente.

## Cómo usar este repositorio

Clona el repositorio:

```bash
git clone https://github.com/desarrolla2/viu_84_memoria.git
```

Navega a la carpeta del proyecto:

```bash
cd viu_84_memoria
```

Compila el documento ejecutando el siguiente comando:

```bash
make build
```

Este comando utiliza Docker y Docker Compose para construir el documento en un entorno pre configurado.
El archivo PDF generado estará disponible en el directorio output/.

Aquí tienes el apartado reescrito:

---

## Contenido

La memoria se estructura en las siguientes secciones principales:

1. **Introducción**  
   Se presenta una visión general del proyecto, destacando los objetivos que se persiguen y el alcance de la investigación.

2. **Estado del Arte**  
   Se realiza un análisis de los trabajos previos relacionados con el tema, incluyendo una revisión de los fundamentos teóricos que sustentan el proyecto.

3. **Metodología**  
   Se detallan las técnicas, herramientas y enfoques adoptados durante el desarrollo del proyecto, explicando su aplicabilidad y relevancia.

4. **Desarrollo**  
   Se expone de forma detallada el proceso llevado a cabo, los resultados obtenidos y los desafíos enfrentados a lo largo del trabajo.

5. **Conclusiones y Trabajo Futuro**  
   Se reflexiona sobre los principales hallazgos del proyecto, sus implicaciones y se plantean posibles líneas de investigación o desarrollo para futuros trabajos.

## Licencia

Este proyecto está bajo la licencia [MIT](LICENSE), lo que permite su uso, modificación y distribución, sujeto a las condiciones establecidas en el archivo de licencia.
