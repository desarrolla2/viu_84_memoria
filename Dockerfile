FROM texlive/texlive:latest

RUN apt-get update && apt-get install -y \
    texlive-xetex \
    texlive-bibtex-extra \
    texlive-lang-spanish \
    texlive-fonts-recommended \
    texlive-fonts-extra \
    texlive-pictures \
    biber \
    fontconfig \
    && fc-cache -fv

WORKDIR /data/src

CMD ["compile.sh"]
