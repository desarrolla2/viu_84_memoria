#!/bin/bash

# Nombre del archivo sin extensión
TARGET=TFT

xelatex ${TARGET}.tex

bibtex ${TARGET}

xelatex ${TARGET}.tex
