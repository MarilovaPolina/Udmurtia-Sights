-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 17 2023 г., 17:40
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `udm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id_city` int NOT NULL,
  `name_city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id_city`, `name_city`) VALUES
(8, 'ВОТКИНСК'),
(3, 'ГЛАЗОВ'),
(1, 'ИЖЕВСК'),
(5, 'КАМБАРКА'),
(6, 'МОЖГА'),
(7, 'САРАПУЛ');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id_post` int NOT NULL,
  `id_topic` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_city` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id_post`, `id_topic`, `title`, `img`, `description`, `date`, `id_city`) VALUES
(44, 60, 'Памятник узникам Баржи смерти', '1694435763_orig.jpg', 'Баржи смерти - наименование плавучих тюрем, использовавшихся в ходе Гражданской войны в России обеими основными противоборствующими сторонами для массового содержания пленных и задержанных. Захватив при отходе из Сарапула в качестве заложников сотни людей, заподозренных в сочувствии большевикам, белогвардейцы заточили их в трюм баржи, поставленной на якорь у пристани села Гольяны (недалеко от города Сарапул). Несчастные подвергались пытке голодом; большинство из них не имело никакой одежды и укрывалось рогожами. Время от времени белогвардейцы выводили из трюма партию пленников и расстреливали их. 17 октября 1918 г. узников одной из таких плавучих тюрем, ,освободил командующий Волжской флотилией Ф. Ф. Раскольников — с помощью миноносца «Прыткий» он вывел баржу с акватории, контролируемой белгвардейцами]. К этому моменту из 600 политзаключённых в живых оставалось 432 человека.', '2023-09-11 11:57:31', 7),
(45, 61, 'Виолончель Вивальди', '1694434305_Снимок экрана 2023-09-11 160806.png', 'В столице Удмуртии появился новый арт-объект - «Виолончель Вивальди». Скульптура представляет собой кованную ажурную виолончель ручной работы. Любой желающий может ощутить себя музыкантом и сделать памятное фото. Идея создания арт-объекта принадлежит компании «Инком-Инвест», воплощение - мастерами кузницы «Морок» из Сарапульского района Удмуртии.', '2023-09-11 12:01:55', 1),
(46, 63, 'Памятник Крокодилу', '1694436244_caption.jpg', 'Памятник Крокодилу в Ижевске, открывшийся 17 сентября 2005 года, считается символом свободы и независимости. Вальяжно восседающий на скамейке чугунный крокодил в галстуке-бабочке и цилиндре сразу же завоевал симпатии жителей города. Образ крокодила выбран не случайно: он восходит к имени мифического подземного ящера древних удмуртов Оша. Кроме того, мастера-оружейники, которыми так славится Ижевск, за хорошую работу получали в награду зеленые кафтаны и зеленые цилиндры, сходство с крокодилом бросалась в глаза, поэтому всех жителей Ижевска называли \"крокодилами\".', '2023-09-11 12:44:04', 1),
(47, 60, 'Паровоз-памятник Ов 3705', '1694436654_75477f9e42e7749ef52a6de84dfd3c1e.jpg', 'Паровоз-памятник Ов 3705 установлен в честь местных крестьян, которые в 1919 г отправили в Москву и Питер 80 пудов хлеба. На тендере написано: «Дарственный хлеб от крестьян Сарапульского уезда голодающим Москвы и Петрограда»', '2023-09-11 12:50:54', 7),
(48, 63, 'Собака-космонавт Звездочка', '1694437948_126.jpg', 'Открыт памятник собаке-космонавту Звездочке был в марте 2006 года. Павел Медведев - ижевский скульптор, стал автором проекта.\r\n\r\nНа борту пятого по счету космического корабля-спутника, находилась Звездочка. Спутник был выведен на орбиту 25 марта 1961 года. В тот же день в Воткинском районе Удмуртии, корабль совершил посадку. Лев Оккельман — летчик, разыскал его, и доставил собаку в аэропорт, где она жила пока не увезли в Москву. Звездочка стала последней собакой-космонавтом, которая вернулась благополучно на Землю. После того, как Звездочка приземлилась, было принято решение о полете человека в космос.\r\n\r\nПамятник сделан так, как будто из люка спускового аппарата выглядывает собачка-дворняжка, а на поверхности написано много информации, передаваемой как обычным способом, так и шрифтом Брайля для слепых.\r\n\r\nСергею Пахомову – принадлежит идея памятника. Он вместе со школьниками, год назад вылепил аппарат и собаку из снега. После чего, детям захотелось видеть в свое районе памятник собаке-космонавту. Пахомов заразил своей идеей скульптора, и тот создал макет памятника, который в дальнейшем был отлит в чугуне.', '2023-09-11 13:12:28', 1),
(49, 60, 'Монумент Дружбы Народов', '1694438337_090c00269.jpg', 'Расположен монумент на берегу Ижевского пруда, к которому спускается широкая вымощенная желтым камнем лестница. В нашем городе его больше знают, как «Лыжи Кулаковой». Между двумя пилонами, символизирующими Удмуртию и Россию, располагается множество позолоченных металлических рельефов, изображающих жизнь рабоче-крестьянского народа. В 2008 году к празднованию 450-летия вхождения Удмуртии в состав Российского государства была проведена реконструкция монумента и окружающей его площади.', '2023-09-11 13:18:57', 1),
(54, 60, 'Памятник героям трудового фронта', '1694763391_героям.jpg', 'В сквере имени М.Т. Калашникова около ИжГТУ 7 ноября торжественно открыли памятник «Оружейникам Удмуртии, героям трудового фронта Великой Отечественной войны 1941-1945 гг.<br><br>\r\n\r\nАвтором памятника стал хорошо известный в Удмуртии и за ее пределами скульптор Павел Медведев, член Союза художников России, лауреат Государственной премии Удмуртии и заслуженный деятель искусств республики.<br><br>\r\n\r\nПеред собравшимися выступил ректор ИжГТУ Валерий Грахов. Он поблагодарил каждого, кто приложил руку к проекту памятника, и отметил, что место его установки неслучайно.<br><br>\r\n\r\nПосле торжественного открытия прозвучал гимн России, а к памятнику были возложены красные гвоздики.', '2023-09-15 07:36:31', 1),
(55, 61, 'Арт-объект «Мастерок»', '1694763423_мастерок.jpg', 'Стройотрядовцы называют арт-объект, созданный скульптором Павлом Медведевым, просто «Мастерок», потому что он представляет собой открытую сцену, которая выполнена в виде строительного мастерка, рядом расположись строительные козлы с наброшенной курткой-«целинкой» и шестиструнной гитарой. На заднике сцены — панно с подсветкой в виде контурной карты СССР с названиями населенных пунктов, где работали строительные/студенческие отряды технического университета. На скамейках возле сцены установлены таблички с названиями легендарных студотрядов ИМИ-ИжГТУ, и там же предусмотрено место для названий будущих отрядов.<br><br>\r\n\r\nИнициатором проекта стал штаб студенческих отрядов ИжГТУ «Механ», который в 2019 году по итогам Всероссийского конкурса был признан лучшим вузовским штабом студенческих отрядов России.', '2023-09-15 07:37:03', 1),
(56, 60, 'Памятник Надежде Дуровой', '1694763814_tt7b7e8m4rz10cuyp6figme8whaywfh1.jpg', 'Памятник первой кавалерист-девице Надежде Дуровой установлен 14 июня 2013 года в Сарапуле, где прошло ее детство. Надежда Дурова участвовала во многих битвах, всюду проявляя храбрость. За спасение раненного офицера в разгар сражения была награждена солдатским Георгиевским крестом и произведена в офицеры. В Отечественную войну 1812 года Н.А. Дурова участвовала в Бородинской битве была контужена ядром в ногу и уехала для лечения в Сарапул. После отпуска служила ординарцем у фельдмаршала Михаила Кутузова. В мае 1813 года она снова была в действующей армии и приняла участие в войне за освобождение Германии. Только в 1816 году по просьбе отца Надежда Андреевна вышла в отставку в чине штаб-ротмистра и приехала в Сарапул. Здесь она постоянно ходила в мужском костюме, все письма подписывала фамилией Александров. Когда её брата Василия Андреевича назначили городничим в город Елабугу, она поехала туда вместе с ним. Умерла кавалерист-девица в 1866 году и была похоронена с воинскими почестями.', '2023-09-15 07:43:34', 7),
(57, 61, 'Памятник Линейке', '1694764029_czg5sufp5sp69hdxgj730glih0792vmj.jpg', 'Можга. Удмуртия. В Можге установили памятник деревянной линейке и угольнику. Скульптуру в виде этих измерительных инструментов поставили рядом с проходной местного деревообрабатывающего предприятия, которое уже много лет производит школьные принадлежности и за это время стало известно не только в Удмуртии, но и в других регионах России. <br><br>\r\n\r\nПамятник выполнен в виде половинки глобуса, рядом с которым вертикально расположены угольник и линейка. Авторство принадлежит коллективу фабрики.<br><br>\r\n\r\nНа фабрике рассказали, что скульптура была установлена в сентябре, но официальная церемония открытия пока не проводилась. Ожидается, что на празднике также будет открыта доска почета предприятия.', '2023-09-15 07:47:09', 6),
(62, 96, 'Въездная скульптура Можги', '1694853667_orig (1).jpg', 'На въездной скульптуре Можга изображен стеклодув. Развитие поселения связано со строительством на речке Сюга в 1835 году Сюгинского стекольного завода. Завод был построен на средства елабужского купца Фёдора Григорьевича Чернова и был известен производством технического стекла, кувшинов, фигурок зверей. 3 апреля 1924 года посёлок Сюгинского завода был переименован в посёлок Красный, в который из села Можга был перенесён административный центр Можгинского уезда. 26 октября 1926 года поселок преобразован в город Красный, а 11 марта 1927 года переименован в город Можга.', '2023-09-16 08:39:34', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id_role` int NOT NULL,
  `title_role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_role`, `title_role`) VALUES
(0, 'Администратор'),
(1, 'Главный администратор');

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE `topics` (
  `id_topic` int NOT NULL,
  `title_topic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id_topic`, `title_topic`) VALUES
(61, 'Арт-объекты'),
(98, 'выаыва'),
(63, 'Животные'),
(60, 'Памятники'),
(97, 'свыа'),
(96, 'Скульптуры');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `id_role` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `id_role`, `login`, `password`, `name`, `surname`, `patronymic`, `phone`) VALUES
(68, 0, 'miniAdmin', '$2y$10$nhmI6F3i8QEsv3LUyQy4mOYr3QDOhxzzTHHDO7zNtuOMeVt1n6I5m', 'Мария', 'Егорова', 'Витальевна', '87485123658'),
(71, 1, 'MAdmin1', '$2y$10$RL.DnSmzaC4/8/R3ebdUYuyQRddnqBLKrQX3Az/ZHP3PqP27qfoNi', 'Петр', 'Шершнев', 'Вячеславович', '87452148752'),
(72, 1, 'Administrator', '$2y$10$1Cp8OGyMA4e47VPLyGZbsO4ABmI2XuOjJAK8.k.FkBNI/P.cVEfEC', 'Евгений', 'Сидоров', 'Петрович', '86231548752');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`),
  ADD UNIQUE KEY `name_city` (`name_city`) USING BTREE;

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_category` (`id_topic`),
  ADD KEY `id_city` (`id_city`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id_topic`),
  ADD UNIQUE KEY `title` (`title_topic`) USING BTREE;

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id_city` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id_topic` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id_topic`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id_city`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
