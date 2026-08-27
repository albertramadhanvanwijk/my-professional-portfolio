up:
	docker compose up -d

down:
	docker compose down

restart:
	docker compose restart

logs:
	docker compose logs -f

mysql:
	docker exec -it albert-portfolio-mysql mysql -uportfolio -pportfolio_secret portfolio

redis:
	docker exec -it albert-portfolio-redis redis-cli

api:
	cd apps/api && php artisan serve --host=0.0.0.0 --port=8000

web:
	cd apps/web && npm run dev