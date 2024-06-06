#!/bin/bash

# Nombre del archivo sin extensión
TARGET=TFT

xelatex ${TARGET}.tex

biber ${TARGET}

xelatex ${TARGET}.tex
xelatex ${TARGET}.tex
