# make
DC=docker-compose

# Docker
build:
	@$(DC) build
up:
	@$(DC) up -d
down:
	@$(DC) down
restart:
	@$(DC) restart
reload:
	@$(DC) down
	@$(DC) up -d
ps:
	@$(DC) ps

laravel:
	@$(DC) exec php composer create-project --prefer-dist laravel/laravel="7.*"
	mv laravel/* ./
	mv laravel/.[^\.]* ./
	rm -r laravel