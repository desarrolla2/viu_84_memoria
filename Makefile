run:
	mkdir -p output/chapter
	docker-compose up --build latex

clean:
	rm -rf output/*

.PHONY: clean run
