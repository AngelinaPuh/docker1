FROM php:latest
COPY . /var/www/html
# Установка рабочей директории
WORKDIR /var/www/html
# Открываем порт 80
EXPOSE 80
# Команда для запуска встроенного PHP сервера
CMD ["php", "-S", "0.0.0.0:80", "-t", "."]