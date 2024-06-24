build:
	docker-compose up --build latex
	cp memoria.pdf ~/Documents/Dropbox/Shared/TFG

clean:
	rm -rf output/*

.PHONY: clean build
