#!/bin/bash

# Nombre del archivo sin extensión
TARGET=TFT

# Crear la carpeta de salida si no existe
mkdir -p /data/output

xelatex -output-directory=/data/output /data/src/${TARGET}.tex

bibtex /data/output/${TARGET}

xelatex -output-directory=/data/output /data/src/${TARGET}.tex
xelatex -output-directory=/data/output /data/src/${TARGET}.tex

chmod -R 777 /data/output
