# php.oop


Создать приложение форум. Функционал:

1. Юзеры и авторизация. Возможность зарегистрироваться и войти под своим аккаунтом (емейл, пароль). Также есть возможность войти через соц. сеть (вк).

2. Темы и сообщения. На главной странице показаны все разделы форума (задаются в админке) с количеством тем и сообщений в них. Под каждым разделом 3 последние темы по новизне сообщений в них. В разделах показывается список тем с пагинацией, в темах список сообщений с пагинацией. У авторизированного юзера есть возможность создать тему и оставить сообщение в уже созданной.

2.1. Поиск по форуму. Страница с формой (1 инпут) поиска. Поиск происходит по сообщениям и в результатах показывает темы сообщений.

3. Личный кабинет юзера. У юзера есть возможность зайти в свой кабинет и изменить данные о себе: имя, емейл, пароль. Есть возможность просмотреть свои темы и сообщения.

4. Админка. Ограниченный доступ для юзеров с ролью админ. 4 раздела с CRUD функционалом: юзеры, разделы, темы, сообщения.

Таблицы в базе: 
`users`: `id`,`name`,`email`,`pass` (hashed), `is_admin`, `vk_id`(nullable) 
`sections`: `id`, `title`, `slug`
`topics`: `id`, `title`, `section_id`
`posts`: `id`, `text`, `topic_id`, `user_id`, `created_at`

Роуты:
/ - главная
/section/cars - раздел
/section/cars/1 - тема
/account - аккаунт юзера
/account/profile - раздел аккаунта юзера
/admin - админка
/admin/users - раздел админки
