#!/bin/bash

TARGET=memoria

xelatex ${TARGET}.tex

biber ${TARGET}

xelatex ${TARGET}.tex
xelatex ${TARGET}.tex
