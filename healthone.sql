-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2022 om 16:29
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE `categorie` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `categorie`
--

INSERT INTO `categorie` (`id`, `name`, `picture`) VALUES
(1, 'Roeitrainer', '/img/categories/roeitrainer.jpg'),
(2, 'Crosstrainer', '/img/categories/crosstrainer.jpg'),
(3, 'Hometrainer', '/img/categories/hometrainer.jpg'),
(4, 'Loopband', '/img/categories/loopband.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opening_hours`
--

CREATE TABLE `opening_hours` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `open_time` time DEFAULT NULL,
  `close_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `opening_hours`
--

INSERT INTO `opening_hours` (`id`, `day`, `open_time`, `close_time`) VALUES
(1, ' maandag', '08:00:00', '23:00:00'),
(2, 'dinsdag', '08:00:00', '23:00:00'),
(3, 'woensdag', '08:00:00', '23:00:00'),
(4, 'donderdag', '08:00:00', '23:00:00'),
(5, 'vrijdag', '08:00:00', '20:00:00'),
(6, 'zaterdag', '10:00:00', '17:00:00'),
(7, 'zondag', '10:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `cat_id`) VALUES
(19, 'fitness apparat 1', '/img/uploads/product-500x500.jpeg', 'mooie apparaat', 2),
(20, 'Crosstrainer-Focus Fitness Senator', '\\img\\categories\\crosstrainer\\Crosstrainer3.jpg', 'With the Focus Fitness Senator elliptical cross trainer you have the complete package elliptical cross trainer at home. This Front Driven elliptical cross trainer gives you a comfortable and natural running movement due to its length stride of no less than 60 centimeters and a flywheel swing mass of 12 kg. In addition, the Senator elliptical cross trainer is very stable in use due to its own weight of 67 kg.\r\n\r\n\r\nFRONT FLYWHEEL\r\nThe flywheel of the Senator crosstrainer is located at the front of the crosstrainer. Front Driven elliptical cross trainers provide a smooth and natural gait while cruising, because the movement of the foot is alternated from the heel to the toe. The Senator crosstrainer has a very narrow construction, so that the inside of the feet are only 9 cm apart! With a total length of 174 cm, this Front Driven elliptical cross trainer is relatively small and will fit effortlessly into most bedrooms.\r\n\r\n\r\nDISPLAY\r\nThe display of the Senator crosstrainer has a subtle and sleek design. This way you can easily scroll through the many functions of this crosstrainer with the easy-to-use controller. This controller gives you access to; 12 specific training programs, 32 training levels and individually definable programs. In addition, the display gives you access to many data, such as distance, speed, number of calories burned, heart rate, wattage and much more.\r\n\r\n\r\nSTABLE TRAINING\r\nDue to its own weight of 70 kg, the Senator elliptical cross trainer enables a very stable training. The three support points, which also ensure that the crosstrainer can be leveled, make this crosstrainer one of the most stable pieces of equipment in the Focus Fitness range. This makes your training on the Senator Crosstrainer very comfortable.\r\n\r\n\r\nHEART RATE PROGRAM\r\nThe Focus Fitness Senator Crosstrainer offers you various tools for achieving your personal training goals. An example of this are the training programs based on your heart rate. The advantage of training on heart rate is that you always train at the right load. Simply choose the heart rate program in the training computer, enter your personal data and indicate at what percentage of your heart rate you want to train. By training based on your heart rate, you can work much more accurately on burning fat, improving fitness or improving your endurance. Indicate your goal for your training and press start.\r\n\r\nFrom that moment on, the computer continuously monitors your heart rate. If you go above the preset bandwidth during your training, the resistance will decrease. If your heart rate is too low, the intensity will increase. This way you always train at exactly the right level to achieve your goal.\r\n\r\n\r\nTRAIN BY WATTAGE\r\nIn addition to the aforementioned programs, the Senator elliptical cross trainer also has a wattage program. With a wattage program you can train accurately on the basis of a training schedule or rehabilitation schedule. You set the desired wattage on the training computer prior to your training and you simply start exercising. By means of the training computer you continuously train at the prescribed resistance. The maximum training wattage of this machine is 350 watts.\r\n\r\n\r\nERGONOMIC DESIGN\r\nWhile training on the Focus Fitness Senator elliptical cross trainer, you get the feeling that you are training on a machine with sophisticated ergonomic details. Take, for example, the long 60 cm stride, which ensures a smooth running movement. The Senator also limits the load on your knee and ankle joints. In addition, you train with the help of a front-wheel-driven crosstrainer with a straighter back, so that your back is also loaded as little as possible during training. The right angle at which your wrists are when you hold the outer handles ensures minimal strain on your wrists during training.', 2),
(21, 'Crosstrainer-Proform 325 CSEi', '\\img\\categories\\crosstrainer\\Crosstrainer4.jpg', 'The Proform 325 CSEi is a very suitable elliptical cross trainer if you want to maintain your fitness level or burn calories, but don\'t want to go to the gym for that. This crosstrainer is perfect for home use because of the easy-to-use display. It is well finished and has many advantages, such as the bottle and tablet holder and the fan and speakers in the display.\r\n\r\n\r\nPROGRAMS\r\nThe elliptical cross trainer has 20 programs, of which 10 are interval training and 10 tempo training, so that there is a suitable training for every user at every level. For example, the interval workouts are good for building fitness in an efficient way and adding more explosiveness to the workout, and the tempo workouts are good for burning calories and building fitness by following a more constructive workout, where less explosiveness is required. The Proform 325 CSEi is therefore perfect for the novice athlete who wants to stay flexible and for the expert who wants to go 100%. The cardio machine also has no less than 20 different resistance levels with which you can always find an appropriate level with which you can improve your condition or work out those extra kilos.\r\n\r\n\r\nDISPLAY\r\nThe display of the crosstrainer is very useful, thanks to the handles next to it with the heart rate sensors that measure your heart rate during exercise and display it on the screen. The screen also shows you useful information such as:\r\n\r\nTime\r\nDistance\r\nSpeed\r\nResistance\r\nRevolutions Per Minute (RPM)\r\nCalories\r\nWattage\r\nThe elliptical cross trainer uses a round LED wattage meter to show your performance as shown in the photos. By means of a chest strap you can monitor your heart rate even more accurately without holding the sensors. This chest strap can be ordered separately. On top of the display is a handy tablet holder where you can place your iOS or Android tablet to, for example, read a book or the newspaper during exercise or to watch your favorite series. The tablet can also be connected to the crosstrainer, with which you can be trained with a virtual route through various apps.\r\n\r\n\r\nTRAINING WITH IFIT\r\nTo be motivated in an interactive way, this crosstrainer has the option to train with iFit. iFit works through the integrated display. iFit is your personal coach in the field of exercise, nutrition and sleep. Based on your level and your training goals, iFit selects the ideal workouts (and even recipes) for you. In short, a coach for every aspect of your life. In addition to all these extras, it is also possible to put together your own routes on Google Maps. The fun interactive aspect of this is that the crosstrainer adapts to the environment. If you go uphill in real life, the slope is automatically adjusted accordingly.', 2),
(22, 'Hometrainer - FitBike Ride 2', '\\img\\categories\\Hometrainer\\Hometrainer1.jpg', 'The FitBike Ride 2 is an excellent exercise bike intended for home use. This exercise bike has a pleasant way of training and is very quiet. The Ride 2 has a 5 kg flywheel, which ensures a pleasant way of training.\r\n\r\nThe exercise bike has a U-shaped handlebar, which contributes to a comfortable position during training. In addition, both the saddle and handlebars are adjustable, so that people up to a body length of 180 centimeters can use this exercise bike! Thanks to the built-in tablet holder you can enjoy music, movies or series while training!\r\n\r\nBenefits of the FitBike Ride 2:\r\n✔ Training programs for different purposes\r\n✔Comfortable U-shaped handlebar\r\n✔ With heart rate function\r\n✔ With built-in tablet holder\r\n✔ Stable and silent\r\n✔ 12 training programs\r\n✔Easy to operate\r\n✔Display of distance, speed, time, calorie consumption, RPM, heart rate\r\n\r\nMaterial\r\nIn order to achieve a good training, the exercise bike must of course be strong and stable. The Ride 2 has a robust steel construction and high-quality bearings. Thanks to this sturdy construction it is possible to train up to a body weight of 125 kg. This already indicates that the exercise bike is stable and strong enough to use it at home. The Ride 2 weighs a total of 21 kg.\r\nThis exercise bike is equipped with transport wheels. These wheels make it easy to move the Ride 2 when not in use. The Ride 2 is powered by a V-belt, making the exercise bike noiseless in use. The Fitbike Ride 2 is recommended for athletes who want to train easily with an electronically adjustable resistance system and pre-programmed training programs.\r\n\r\nResistance\r\nThe resistance of the Ride 2 is easy to set yourself via the manual program. In addition, the Ride 2 also has a number of pre-programmed programs in which the resistance is automatically increased or decreased. The Ride 2 has 16 different resistance levels, which increase in severity, making the exercise bike challenging for everyone.\r\n\r\nTraining methods\r\nThe Ride 2 has 4 user profiles where the user data is remembered. With the Ride 2 you can train in different ways. First of all, there is the option to train quickly. You don\'t set anything and you start training right away. The time, speed and other data will just start to add up. It is also possible with this manual program to set a training target. For example, you can enter the time you want to train or the distance you want to cycle in advance.\r\nIn addition, the Fitbike Ride 2 is equipped with several training programs. These training programs are divided into the aforementioned manual program, various diet programs, a sports program and health programs. The exercise bike is also equipped with heart rate programs. Thanks to the built-in heart rate sensors, it is possible to train with a heart rate control program. You train based on your heart rate and if you go out of the set heart rate zone, the resistance on the exercise bike is increased or decreased, depending on your current heart rate. This training method is ideal for fat burning and endurance training. If you want to train more accurately on heart rate, a more expensive exercise bike is recommended that can be connected with a chest strap.', 3),
(23, 'Hometrainer Fitbike Ride 5', '\\img\\categories\\Hometrainer\\Hometrainer2.jpg', 'The FitBike Ride 5 iPlus is a revolutionary exercise bike that is suitable for a wide audience. Whether you want to lose weight, relax or improve your endurance, this exercise bike is made to help everyone achieve their goal. In addition to a flywheel of 10 kg, the exercise bike is equipped with all kinds of new techniques. Think of the built-in Bluetooth function.\r\n\r\nBenefits of the FitBike Ride 5 iPlus:\r\n✔ iPlus module: connectable with phone or tablet\r\n✔Bluetooth connection\r\n✔ Interactive Apps\r\n✔ Clear and beautiful LCD display\r\n✔ 19 training programs\r\n✔Easy way to keep moving or lose weight\r\n\r\nTraining with apps\r\nThis exercise bike is equipped with the iPlus module, which means that the exercise bike can be connected to a tablet or smartphone via Bluetooth. For example, the training can be done using an application. Place your tablet/smartphone on the tablet holder of the exercise bike and download the corresponding training application. The application then supports the display function of the exercise bike. Your smartphone/tablet has now become your training computer and from there you can use the various functions of the application. When your tablet/smartphone is connected via Bluetooth, the resistance adjusts automatically. For example, if you climb a mountain, the resistance increases.\r\nVisit the fitness applications page to see which applications are currently compatible with the Ride 6 iPlus. This page can be found on fitness apps.', 3),
(24, 'Tunturi FitCycle 20', '\\img\\categories\\Hometrainer\\TunturiFit3.jpg', 'The Tunturi FitCycle 20 is an exercise bike for anyone who regularly wants to exercise at home. With 8 different resistance levels you will challenge yourself every time. Don\'t worry about jarring pedals. The heavy flywheel of 5 kg ensures that you make smooth movements. Because the exercise bike has a V-drive belt, it does not make much noise and is fairly wear-resistant. During your training you can see how well you are doing on the built-in LCD screen. It shows your calorie consumption, heart rate, speed, distance, time and energy consumption. To make sports more enjoyable, adjust the handlebars and saddle to your desired height. In addition, you put your filled water bottle in the special holder and your tablet in the designated place. Then you can distract yourself with a series. Would you rather put the FitCycle 20 in a different place? This can be done smoothly thanks to the transport wheels under the exercise bike.', 3),
(25, 'Virtufit HTR 1.0', '\\img\\categories\\Hometrainer\\Virtufit4.jpg', 'The VirtuFit HTR 1.0 is an entry-level exercise bike that, thanks to the built-in heart rate sensor, is suitable for building up a good condition in a short time. The screen has a built-in odometer and shows your heart rate, calorie consumption, speed, time and distance. With the rotary knob under the handlebars you manually determine the resistance level at which you train. Thanks to the adjustable handlebars and saddle, you ensure a comfortable sitting position. In addition, the bottle cage and tablet holder offer you the opportunity to have a drink and watch a movie during your efforts. The HTR 1.0 is level adjustable and has a wide stabilizer at the back for more stability. With the transport wheels you can easily drive it to a corner of the room after use.', 3),
(26, 'Loopband-Focus Fitness Jet 9 iPlus', '\\img\\categories\\loopband\\Loopband1.jpg', 'The modern Focus Fitness Jet 9 iPlus is a robust, strong treadmill suitable for intensive use. Thanks to the large running surface and the many options, including Bluetooth, you have plenty of options to enjoy your training at home. In addition, the Jet 9 is easy to assemble. The complete treadmill is completely pre-assembled and you only have to fold it up and tighten 8 screws.\r\nTraining with your tablet or smartphone\r\nWith the Bluetooth receiver you can wirelessly connect a tablet or smartphone to the treadmill. By pairing, you can control the treadmill via your smartphone or tablet. You can adjust the resistance and speed while watching your favorite series or movie, for example. With one of the training apps, which can be downloaded for free, it is possible to train anywhere in the world from home. The app connects via Google maps, where you determine the route you want to take. Think, for example, of the marathon of New York, Rotterdam or a round in your own hometown.\r\n\r\nTraining programs\r\nBesides the many possibilities that the Jet 9 iPlus offers thanks to the iPlus module, you can also use pre-programmed training programs. You have a wide choice of 25 different training options. The programs differ between speed, interval, hrc and mountain programs. The treadmill also has a manual program. The electronically adjustable inclination angle of the Focus Fitness Jet 9 iPlus treadmill can be adjusted entirely to your own preference from 0 to 15 levels. If you choose a pre-programmed program, you will notice that the incline is automatically increased or decreased. This entirely depends on which choice you make. The higher the slope, the more intensively your legs are trained.\r\n\r\nHeartbeat\r\nThe Jet 9 iPlus is equipped with integrated heart rate sensors. These sensors provide an indication of your heart rate. You can also use an HRC program. With this HRC program you can train fully automatically based on heart rate.\r\n\r\nMaterial\r\nThe Jet 9 treadmill is equipped with a powerful and whisper-quiet 2.5 hp motor. Thanks to this motor you can train up to 20 KM/H. The wide tread is also equipped with an eight-way damping system. This system provides extra cushioning and conformability during training.', 4),
(27, 'Loopband-Focus Fitness Senator iPlus', '\\img\\categories\\loopband\\Loopband2.jpg', 'The Senator iPlus is the top model of Focus Fitness. This robust and semi-professional treadmill can be loaded up to 160 kg. Furthermore, the Senator Plus is equipped with Bluetooth. Thanks to the integrated Bluetooth system, you can connect your tablet or smartphone to the treadmill. The Senator iPlus is delivered including the Focus Fitness iPlus module.\r\n\r\nHow do I train with a tablet or smartphone?\r\nPlace your tablet on the tablet holder of your treadmill. Download the EHealth app at. Connect to your tablet via Bluetooth. The software takes over the function of the training computer. Your tablet has now become your training computer and you can choose from even more different training programs that the EHealth application offers. Because your tablet is connected to the computer of your treadmill via Bluetooth, the treadmill will automatically become heavier and lighter during the course of the training program. By using your tablet as a training computer, your training data is graphically displayed even more beautifully.\r\n\r\neHealth application\r\nThanks to the EHealth app, which you can download for free from the app store, it is possible to train from home anywhere in the world. EHealth connects via Google maps, where you determine the route you want to take. Think, for example, of the marathon of New York, Rotterdam or a round in your own hometown.\r\n\r\nTraining programs\r\nThe training computer of the Senator iPlus offers a wide choice of 25 pre-programmed training programs. These programs range from incline programs, speed programs to heart rate programs\r\n\r\nInclination angle\r\nThe Senator\'s angle of inclination is unprecedented. For example, you can electronically adjust the height from 0 to 15 levels. By adjusting the heights you will experience more walking/running uphill. The steeper the incline, the more you train your legs. You will also train your muscles more intensively because increasing the slope makes the slope harder.\r\n\r\nHeartbeat\r\nWith the Senator it is possible to train based on heart rate. You can train on heart rate by means of: the hand sensors that you can find on the handles. This way you get an indication of your heart rate. If you want an exact heart rate measurement, you can use a chest strap. Please note that this chest strap can be connected wirelessly and is NOT included.\r\n\r\nDisplay\r\nThe beautiful display is made in such a way that it is easy to operate and that you can read all your training data. So you can read your speed, distance, time, heart rate, calorie consumption, graph programs during training. The Senator also has a number of handy shortcuts with which you can change your settings in one click.\r\n\r\nMaterial\r\nThe Senator is equipped with a quiet and extremely strong, 3 HP motor. This motor cools itself by means of the self-cooling system. It is possible to train from 1 to 22 KM/H. The tread is equipped with an eight-way flex suspension suspension. This suspension provides extra compliance during training. The tread is also extra large and wide. For example, the tread is 147 cm long and 57 cm wide.', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `stars` double NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `title`, `description`, `stars`, `product_id`, `date`) VALUES
(149, 9, '', 'this equipement is great, i really love it,&#13;&#10;i use it always if i&#39;am in the gym ', 5, 18, '2022-01-20'),
(150, 14, '', 'its gerat equipement i love ot', 3, 18, '2022-01-20');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(27, 'Admin', 'admin@healthone.com', '$2y$10$yRyNbGhWX/4PwjPpPk/uwumxeCttiLp0NszcF33ih8VrloiSzLZom', 'admin'),
(30, 'Zakaria Ennaji', 'zakaria.ennaji@outlook.com', '$2y$10$d33ydHuit9.ZIt337u6BJ.PFu3a.VOTB6z5vANjqzna50XiTMYIOO', 'user');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `opening_hours`
--
ALTER TABLE `opening_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_prod` (`cat_id`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `opening_hours`
--
ALTER TABLE `opening_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cat_prod` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
