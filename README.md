# BookKeeping
Приложение для расчета трат Приложение бухгалтерия – для расчета денежных трат, основана на СУБД MySQL, имеет 2 таблицы с отношением один ко многим, подключена библиотека PHPExcel для вывода результатов в файл Excel

index.php - включает автоматич.загрузку классов и запускает класс router по пути core/Router.php
core/Router.php - загружает класс и метод из директории page/...

Связь с СУБД MySQL через класс PDO самого php
2 таблицы : Buy - информация о покупках и Day - все покупки за определенный день
При внесении данных в таблицу Buy информация автаматич заносится и в Day 

tmpExcel - папка хранит временный файл типа Excel после скачивания очищвется

config - содержит файл ConfigDb - файл содержит массив параметров для подключения к СУБД
через драйвер PDO ядра самого php

В папке libs содержится папка phpExcel - содержит саму библиотеку 
для внесения данных в файл Excel