1. Создать таблицу Продажи (Declarative Schema)
Поля:
Номенклатурный номер (числовое, целое) - первичный индекс
Название проданного товара (текстовое)
Количество проданного товара (числовое, целое)
Дата продажи (дата)
Скидка (числовое дробное) - процент в формате сотых 0,05; 0,1
2. Заполнить таблицу пятью записями о продажах. Предусмотреть, чтобы две продажи имели одинаковое название товара.
(Data Patch)
3. Добавить в таблицу Продажи поле Стоимость единицы товара
4. Заполнить этот столбик данными для пяти записей
5. Переименовать столбик Скидка на Бонус
6. Создать модель по таблице Продажи
7. Добавить еще две записи в таблицу с помощью модели
8. Выполнить фильтрацию и вывести результат на кастомную страницу
Вывести продажи по определенному названию товара (там, где таких продаж несколько) и посчитать стоимость данной
продажи:
если продажа совершена в текущий день, то Стоимость за ед * Количество * (1-Бонус)
если продажа совершена раньше, то Бонус не использовать