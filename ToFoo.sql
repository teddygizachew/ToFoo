-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 04:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ToFoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(8) NOT NULL,
  `street1` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `street2` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `city` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `state` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `zip` mediumint(5) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `street1`, `street2`, `city`, `state`, `zip`, `userID`) VALUES
(9, '10 Campbell Dr', '', 'Highland Heights', 'KY', 41076, 70),
(10, '123', '123', '123', 'AL', 123, 66);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(8) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `itemID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `price`, `itemID`) VALUES
(1, '20.00', 66),
(2, '20.00', 55),
(3, '1.00', 54);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(8) NOT NULL,
  `name` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `name`) VALUES
(1, 'American'),
(2, 'Mexican'),
(3, 'Vegan Friendly '),
(4, 'Asian'),
(5, 'Indian'),
(6, 'Dessert'),
(7, 'Halal Food');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `picture` varchar(32) NOT NULL,
  `restaurantID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `name`, `description`, `price`, `picture`, `restaurantID`) VALUES
(1, 'Royal Chicken Biryani', 'Long grained rice flavored with fragrant spices flavored along with saffron and layered with chicken and cooked with biryani masala gravy. Served with a side of yogurt raita and salan curry.', '9.99', '', 1),
(2, 'The Original Farmer\'s Choice', 'Our signature breakfast includes your choice of premium breakfast meat, two fresh-cracked eggs cooked-to-order, and hash browns or home fries. Served with three hotcakes or two slices of Brioche French toast', '13.79', '', 2),
(3, 'General Tso\'s Chicken', 'General Tso\'s Chicken', '9.25', '', 4),
(4, 'Quesadilla Grande', 'Large quesadilla filled with cheese, grilled chicken or steak. Topped with lettuce, sour cream and pico de gall', '14.99', '', 5),
(5, 'Buns N Roses', 'Our award winning black bean burger on a pretzel bun, spicy ketchup, lettuce, tomato, onion, and pickle.', '8.50', '', 6),
(6, 'Chicken Tikka Masala', 'Boneless shredded piece of roasted chicken cooked in rich tomato creamy sauce', '17.99', '', 3),
(7, 'Slow-Roasted Turkey & Dressing', 'Slow-roasted in the kitchen for hours with our savory blend of herbs and spices. Served with bread & celery dressing, homestyle gravy, cranberry relish, choice of two sides and dinner rolls', '16.99', '', 2),
(8, 'Rise & Shine Burger', 'Our legendary breakfast—and a burger— in every bite! 100% black Angus beef patty with crispy, seasoned hash browns, lettuce, melted American cheese, hardwood-smoked bacon and a fresh-cracked fried egg on a warm brioche bun. Served with our simply delicious spicy maple honey and choice of one or two sides', '15.19', '', 2),
(9, 'Western Omelet', 'Filled with hickory-smoked ham, sautéed onions, red & green bell peppers and cheddar cheese. Served with hash browns or home fries and freshly-baked biscuits', '14.39', '', 2),
(10, 'Peach Iced Tea', 'Peach Tea ', '3.79', '', 2),
(11, 'Coffee', '0 - 5 cal.', '3.59', '', 2),
(12, 'Sweet and Sour Chicken', 'Served with chicken egg roll and chicken fried rice or white rice.', '9.52', '', 4),
(13, 'Orange Chicken', 'Served with chicken egg roll and chicken fried rice or white rice.', '9.25', '', 4),
(14, 'Dumplings', 'Eight pieces', '6.45', '', 4),
(15, 'Vegetable Egg Roll', 'Vegetable Egg Roll', '1.45', '', 4),
(16, 'Shrimp Fried Rice', 'Fried rice with shrimp', '6.45', '', 4),
(17, 'Chicken Lo Mein', 'Soft noodles with chicken', '6.25', '', 4),
(18, 'Bottled Soda', 'Soda', '1.75', '', 4),
(19, 'Chicken Pakora', 'Tender boneless batter fried chicken breast pieces marinated with spices', '8.99', '', 8),
(20, 'Naan', 'Traditional Indian style baked bread', '3.99', '', 8),
(21, 'Bhatura', 'Crispy layered fried bread', '3.99', '', 8),
(22, 'Lamb Kabab', 'Minced Lamb meat mildly spiced and barbecuedon skewers over charcoal in tandoor', '20.99', '', 8),
(23, 'Mushroom Tandoori', 'Mushroom well papers onion and vegetables', '18.99', '', 8),
(24, 'Aam ras', 'Chilled sweet mango juice', '4.99', '', 8),
(25, 'Sweet Lassi', 'Lassi', '4.99', '', 8),
(26, 'Miso Soup', 'Soybean soup, tofu, seaweed and scallions', '2.50', '', 9),
(27, 'Sashimi Sampler', 'Appetizer, Chef\'s choice assortment of nigari sushi (5 pieces)', '9.00', '', 9),
(28, 'Shrimp Tempura', 'Deep-fried or steamed Japanese shrimp dumplings', '5.00', '', 9),
(29, 'Agge Tofu', 'Deep-fried soft tofu served with sauce', '5.00', '', 9),
(30, 'Chicken Ramen', 'Chicken ramen', '9.00', '', 9),
(31, 'Pork Udon', 'Pork udon', '9.00', '', 9),
(32, 'Caramel Macchiato Pint', 'A blend of caramel and coffee ice cream with milk chocolate caramel truffles and toffee pieces.', '7.79', '', 3),
(33, 'Peppermint Stick Pint', 'Get ready for the holidays with a classic red and white treat, dotted with candy and holiday cheer! Our handcrafted, Peppermint Stick ice cream is bejeweled with bits of peppermint candy and flavored with peppermint oil.', '6.99', '', 3),
(34, 'Black Raspberry Chocolate Chip', 'Our signature flavor in a larger family size! Made with black raspberries from Oregon\'s Williamette Valley and our gourmet bittersweet chocolate chips.', '19.99', '', 3),
(35, 'Vanilla Bean Family Size', 'There is nothing plain about our vanilla! Sourced from the Bourbon Isle off the coast of Madagascar, the fresh ground vanilla beans we use are considered the world\'s finest.', '19.99', '', 3),
(36, 'Double Chocolate Chip Wheelie', 'Our Dutch cocoa ice cream with bittersweet chocolate chips sandwiched between two chocolate chip cookies and rolled in chocolate sprinkles.', '4.75', '', 3),
(37, 'Black Raspberry Chip Wheelie', 'Our signature ice cream sandwiched between two chocolate chip cookies and rolled in chocolate sprinkles.', '4.75', '', 3),
(38, 'Sea Salt Toffee Cookie', 'A delicious infusion of toffee and milk chocolate chips topped with a dash of sea salt.', '4.49', '', 10),
(39, 'Peanut Butter Brittle Cookie', 'A perfect peanutty cookie smothered with a peanut brittle glaze and crunchy peanut brittle pieces.', '4.49', '', 10),
(40, 'Molten Lava Cookie', 'A sumptuous dark chocolate cookie oozing with hot fudge and sprinkled with powdered sugar.', '4.49', '', 10),
(41, 'Pecan Pie Cookie', 'Just like the iconic pie—a buttery sugar cookie with sparkly brown sugar and freshly-toasted pecan pie filling.', '4.49', '', 10),
(42, 'Orange Roll Cookie', 'A sweet orange sugar cookie with smooth orange cream cheese frosting and a fresh orange on top.', '4.49', '', 10),
(43, 'Classic Pink Sugar Cookie', 'An all-time favorite—a vanilla sugar cookie topped with a perfect pink swoop of real almond frosting. (Now containing real almond extract)', '4.49', '', 10),
(44, 'Cranberry Salad', 'The Cranberry Salad come with tomato, mushrooms, banana peppers, mozzarella cheese, and Craisins. Served with a roll and a side of Raspberry Vinaigrette', '8.50', '', 6),
(45, 'When Buns Cry', 'Mushroom cap on a pretzel bun, balsamic dressing, spinach, tomato, and caramelized onions.', '10.00', '', 6),
(46, 'Conney Bennet Vegan', 'Vegan gourmet hot dog with onion, mustard, and house made chili', '11.00', '', 6),
(47, 'Black Bean Sabbath Salad', 'Our spinach salad topped with tomato, onion, cucumber, and our very own Black Bean Burger served with at roll and a side of balsamic dressing.', '10.75', '', 6),
(48, 'Casa Fiesta Deluxe', 'California mixed vegetable plate topped with cheese dip and grilled chicken. Served with rice and tortillas.', '11.99', '', 12),
(49, 'Asado', 'Delicious Mexican-style hot sauce pork with rice, beans, and tortillas.', '11.99', '', 12),
(50, 'Taco Salad Fajitas', 'A crisp flour tortilla with chicken or beef, onions, bell peppers, tomatoes, lettuce, sour cream, and cheese.\r\n', '11.99', '', 12),
(51, 'Pollo Bandido', 'Slices of grilled chicken topped with cheese dip. Served with rice and refried beans.', '11.99', '', 12),
(52, 'Chimichanga', 'We stuff this flour tortilla with your choice of beef or chicken, then deep fry it until golden. Topped with cheese sauce, lettuce, sour cream, and pico de gallo. Served with Mexican rice and refried beans.', '11.99', '', 12),
(53, 'T-Bone Mexicano', 'Our delicious T-bone steak smothered with cooked onions, tomatoes, and bell peppers. Served with Mexican rice, refried beans, and flour tortillas.', '24.99', '', 12),
(54, '5ct. Grilled Nuggets', 'Bite-sized pieces of freshly marinated boneless breast of chicken, grilled for a tender and juicy backyard-smoky taste. Available with guest\'s choice of dipping sauce.', '4.55', '', 7),
(55, '5ct. Crispy Nuggets', 'Bite-sized pieces of boneless chicken breast, seasoned to perfection, freshly breaded and pressure cooked in 100% refined peanut oil. Available with choice of dipping sauce.', '3.85', '', 7),
(56, 'Spicy Chicken Sandwich', 'A boneless breast of chicken seasoned with a spicy blend of peppers, freshly breaded, pressure cooked in 100% refined peanut oil and served on a toasted, buttered bun with dill pickle chips. Also available on a multigrain bun.\r\n\r\n', '6.20', '', 7),
(57, 'Chicken Sandwich', 'A boneless breast of chicken seasoned to perfection, freshly breaded, pressure cooked in 100% refined peanut oil and served on a toasted, buttered bun with dill pickle chips. Also available on a multigrain bun.', '5.66', '', 7),
(58, 'Cobb Salad', 'Chick-fil-A® Nuggets, freshly breaded and pressure-cooked, sliced and served on a fresh bed of mixed greens, topped with roasted corn kernels, a blend of shredded Monterey Jack and Cheddar cheeses, crumbled bacon, sliced hard-boiled egg and grape tomatoes. Prepared fresh daily. Served with Charred Tomato and Crispy Red Bell Peppers. Pairs well with Avocado Lime Ranch dressing.', '12.09', '', 7),
(59, 'Cool Wrap', 'Sliced grilled chicken breast nestled in a fresh mix of green leaf lettuce with a blend of shredded Monterey Jack and Cheddar cheeses, tightly rolled in a flaxseed flour flat bread. Made fresh daily. Pairs well with Avocado Lime Ranch dressing.', '9.75', '', 7),
(60, 'Waffle Potato Fries', 'Waffle-cut potatoes cooked in canola oil until crispy outside and tender inside. Sprinkled with Sea Salt.', '2.99', '', 7),
(61, 'Fruit cup', 'A nutritious fruit mix made with chopped pieces of red and green apples, mandarin orange segments, fresh strawberry slices, and blueberries, served chilled. Prepared fresh daily.', '5.05', '', 7),
(62, 'Lemonade', 'Classic lemonade using three simple ingredients: real lemon juice—not from concentrate, cane sugar, and water.', '3.09', '', 7),
(63, 'Iced Tea', 'Freshly-brewed each day from a blend of tea leaves. Available sweetened with real cane sugar.', '3.09', '', 7),
(64, 'Chicken Tikka Masala', 'Chunks of roasted and marinated chicken in a spiced savory tomato + pureed onion based curry.', '12.00', '', 11),
(65, 'Garlic Naan', 'Garlic stuffed naan', '3.00', '', 11),
(66, 'Samosas', '2 deep fried crispy pastries with your choice of savory filling. Served with chutney.', '4.99', '', 11),
(67, 'Naan Nacho', 'Fresh made, crispy naan wedges topped with diced tomatoes, onions, bell peppers, house made Ewalk sauce and your choice of protein.', '9.99', '', 11),
(68, 'Sega Sambussa', '2 Deep fried crispy pastries filled with spiced beef.', '4.00', '', 11),
(69, 'Dal Soup', 'Deliciously mild lentil soup.', '5.00', '', 11),
(70, 'Mulligatawny Soup', 'Lentil soup with chicken, herbs and spices.', '7.00', '', 11),
(71, 'Jalfrezi', 'Protein cooked with green peppers, tomatoes, onions.', '12.00', '', 11),
(72, 'Veggie Combo', 'Combination sampler of Ethiopian favorites. Serving for one or two. yellow lentils [Kik Alicha] |seasoned collard greens [Gomen] | red Lentil [Misir Wot] | cabbage [Atakilti Alicha]', '12.00', '', 11),
(73, 'Awaze Tibs', 'Pan-seared tender lamb morsels sautéed with red onions | bell peppers | tomatoes | rosemary| berbere sauce', '14.00', '', 11),
(74, 'Chicken Tikka Feast', 'Classic Chicken curry with garlic, ginger, peppercorns, turmeric, cumin and onions. Served with a side of rice.', '17.99', '', 1),
(75, 'Royal Goat Biryani', 'Long grained rice flavored with fragrant spices flavored along with saffron and layered with goat and cooked with biryani masala gravy.Served with a side of yogurt raita and salan curry.', '20.39', '', 1),
(76, 'Crisp Samosas', 'Fried pastry with savory-filled spiced potatoes, onions, and peas served with chutneys.Served with tamarind and mint sauces/sauce.', '5.99', '', 1),
(77, 'Classic Yellow Lentils', 'Yellow lentils, cooked to perfection over a slow flame and tempered with cumin and spices.Served with a side of rice', '15.59', '', 1),
(78, 'Royal Veg Biryani', 'Long grained rice flavored with fragrant spices flavored along with saffron and layered with vegetables and cooked with biryani masala gravy.Served with a side of yogurt raita and salan curry.', '19.19', '', 1),
(79, 'Magic Mango Smoothie', 'Creamy mango lassi made with sweet mangoes, yogurt, and a touch of cardamom.', '4.39', '', 1),
(80, 'Roti Tandoori', 'House-made pulled and unleavened dough baked to perfection in an Indian clay oven.', '4.79', '', 1),
(81, 'Soda', 'Soda', '2.39', '', 1),
(82, 'Enchiladas Supreme', 'Five stuffed corn tortillas: one ground beef, one shredded beef, one shredded chicken, one cheese and one beans. Topped with red sauce, cheese, lettuce, tomatoes and sour cream', '13.99', '', 5),
(83, 'Camarones Al Chipotle', 'Grilled tender shrimp with chipotle\r\nsauce. Served with rice, lettuce, sour\r\ncream, tomatoes and tortillas', '15.99', '', 5),
(84, 'Parrillada Tapatia', 'Grilled steak, chicken, sausage, pork chops, queso fresco, tomatoes and onions. Served with rice, beans, lettuce, sour cream, guacamole, pico de gallo and tortillas', '20.99', '', 5),
(85, 'Pollo A La Plancha', 'Grilled chicken breast and shrimp with peppers, onions and cheese. Served with rice and salad', '16.99', '', 5),
(86, 'Pork Chop Combination', 'A tender grilled pork chop smothered with\r\nonions. Served with your choice of two beef\r\nor chicken enchiladas and rice', '14.99', '', 5),
(87, 'Tortas', 'Chicken, steak, pastor or chorizo. Topped with lettuce, tomatoes, onions, avocado, beans, mayo and queso fresco. Served with fries', '13.99', '', 5),
(88, 'Burrito Carne Asada', 'Tortilla stuffed with steak. Topped with\r\ncheese, lettuce, pico de gallo and sour\r\ncream. Served with rice and beans', '14.99', '', 5),
(89, 'Shrimp Chimichanga', 'A flour tortilla stuffed with shrimp, tomatoes, onions and bell pepper, and topped with cheese sauce, lettuce, sour cream, guacamole and pico de gallo. Served with rice and beans', '14.99', '', 5),
(90, 'Burritos al Carbon', 'Chicken or Steak burrito served with sour cream, pico de gallo, lettuce, Mexican rice, beans, and cheese sauce.', '12.49', '', 12),
(91, 'Arroz Con Pollo', 'Sauteed chicken with onions, bell pepper, and tomatoes,smothered with cheese sauce. Served with rice, lettuce, tomatoes, avocado, and sour cream.', '11.99', '', 12),
(92, 'Taquitos Mexicanos', 'Four rolled corn tortillas stuffed with beef or chicken, fried crispy and served with lettuce, guacamole, salad, and sour cream.', '12.99', '', 12),
(93, 'Camarones a la Diablo', 'Grilled shrimp smothered with our hot sauce. Served over Mexican rice with a side of lettuce.', '15.99', '', 12),
(94, 'Wildfire Chicken Salad', 'Fresh greens topped with Homestyle fried or grilled chicken, corn, diced tomato, cheddar cheese, tortilla strips and a drizzle of Bob Evans Wildfire® sauce. Pairs well with Wildfire® ranch dressing and served with dinner rolls', '11.09', '', 2),
(95, 'Lemmon Pepper Sole Fillets', 'Two wild-caught, mild white fish fillets seasoned with a blend of lemon and pepper then perfectly seared. Served with choice of two farmhouse sides and dinner rolls', '15.89', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(8) NOT NULL,
  `cardNum` bigint(16) NOT NULL,
  `securityCode` int(5) NOT NULL,
  `fullName` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expiration` int(4) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `cardNum`, `securityCode`, `fullName`, `expiration`, `userID`) VALUES
(5, 1233, 123, 'Abebe', 123, 46),
(6, 123123123, 123, 'teddy amare', 123, 58),
(7, 12, 12, 'qwe123', 12, 64),
(8, 1, 1, 'qqqqq', 1, 64),
(9, 5678, 555, 'Victor Viking', 5656, 66);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `ID` int(8) NOT NULL,
  `name` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `categoryID` int(8) NOT NULL,
  `city` varchar(32) NOT NULL,
  `state` varchar(32) NOT NULL,
  `street1` varchar(64) NOT NULL,
  `street2` varchar(64) NOT NULL,
  `zip` mediumint(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`ID`, `name`, `categoryID`, `city`, `state`, `street1`, `street2`, `zip`) VALUES
(4, 'Dragon City', 4, 'Florence', 'KY', '4960 Houston Rd', '', 41042),
(5, 'Rancho Grande Mexican Restaurant', 2, 'Cold Spring', 'KY', '220 Plaza Dr', '', 41076),
(6, 'Tickle Pickle Restaurant', 3, 'Cincinnati', 'OH', '4176 Hamilton Ave', '', 45223),
(7, 'Chick-fil-a', 1, 'Fort Wright', 'KY', '3436 Madison Pike #17', '', 41017),
(8, 'Grace Of India', 4, 'Cincinnati', 'OH', '6900 Cheviot Rd', '', 45247),
(9, 'Nittha Siam Kitchen', 4, 'Highland Heights', 'KY', '2415 Alexandria Pike', '', 41076),
(10, 'Crumbl Cookies', 6, 'Cincinnati', 'OH', '3321 Vandercar Way', '', 45209),
(11, 'Elephant Walk: Indian Ethiopian', 7, 'Cincinnati', 'OH', '170 W Mcmillan St', '', 45219),
(12, 'El Rio Grande Mexican Restaurant', 2, 'Newport', 'KY', '34 Carothers Rd', '', 41017);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(8) NOT NULL,
  `firstName` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `lastName` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `email` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `phone` int(16) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `email`, `password`, `phone`, `role`) VALUES
(61, 'tester', 'tester', 'tester@test.com', '123', 123, 9),
(66, 'Victor', 'Viking', 'victor@nku.edu', '123', 859123123, 1),
(70, 'admin', 'admin', 'admin@tofoo.com', '123', 859123098, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ItemID` (`itemID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MenuID` (`restaurantID`) USING BTREE;

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryID` (`categoryID`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `item` (`ID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`itemID`) REFERENCES `item` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
