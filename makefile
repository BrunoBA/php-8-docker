IMAGE_NAME=php-8-test
HASH=$(shell git log -1 --format="%h")

command:
	@echo "Executing...  HASH=$(HASH)"
build:
	@docker build -t $(IMAGE_NAME) .
stop:
	@echo "Stoping..."
	@docker stop $$(docker ps -a -q)
run:
	CONTAINER_ID=$(shell docker run -d -p 80:80 $(IMAGE_NAME))
	@echo "Execute 'docker exec -it CONTAINER_ID bash'"
	
restart: command stop build run
	@echo "Done!"
