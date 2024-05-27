run:
	mkdir -p output/chapter output/cover
	docker-compose up --build latex

clean:
	rm -rf output/*

.PHONY: clean run
