run:
	docker-compose up --build latex

clean:
	rm -rf output/*

.PHONY: clean run
