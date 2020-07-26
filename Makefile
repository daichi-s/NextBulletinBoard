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
	@$(DC) exec php cd html | composer create-project --prefer-dist laravel/laravel="6.*"
	mv laravel/* ./
	mv laravel/.[^\.]* ./
	rm -r laravel