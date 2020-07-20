

## Получение списка новостей

GET news.wmapps.ru/api/news

Возвращаемые значения  JSON

        "id" - id новости
        "title" - название новости
        "description" - Содержимое новости 
        "created_at" - дата создания
        "updated_at" - дата изменения

## Получение списка топ новостей

GET news.wmapps.ru/api/topnews (сортировка по кол-ву лайков, выводит только понравившиеся)

Возвращаемые значения  JSON

        "likes" - кол-во лайков 
        "id" - id новости
        "title" - название новости
        "description" - Содержимое новости 
        "created_at" - дата создания
        "updated_at" - дата изменения

## Оценка новости (лайк)

POST news.wmapps.ru/api/like/up 

параметры для POST запроса

```
(int)iduser - id пользователя
(int)idnews - id нужной новости
```

Возвращаемые значения  JSON

        "result" - 1 удачно  или 0 неудачно


## Снятие оценки новости (отменить лайк)

POST news.wmapps.ru/api/like/down 

параметры для POST запроса

```
(int)iduser - id пользователя
(int)idnews - id нужной новости
```

Возвращаемые значения  JSON

        "result" - 1 удачно  или 0 неудачно


## Добавление новости

POST news.wmapps.ru/api/addnews

параметры для POST запроса

```
title - название (max:250)
description - текст новости
```

Возвращаемые значения  JSON

        "result" - 1 удачно  или 0 неудачно


