-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2026 at 02:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodfusiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactmsg`
--

CREATE TABLE `contactmsg` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Subject` varchar(30) DEFAULT NULL,
  `Message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactmsg`
--

INSERT INTO `contactmsg` (`ID`, `Username`, `Email`, `Subject`, `Message`) VALUES
(1, 'Yumi', 'yunaeindaryoo@gmail.com', 'feedback', 'Thank you for letting me come out of my laziness! This website inspires me to start cooking and please makes more recipes that is easy to cook.');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(11) NOT NULL,
  `FName` varchar(30) DEFAULT NULL,
  `LName` varchar(30) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Gender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `FName`, `LName`, `Username`, `Email`, `Password`, `Gender`) VALUES
(1, 'Yun', 'Oo', 'Yumi', 'yunaeindaryoo@gmail.com', '$2y$10$z1lXwlLtf0NG.SH7FyT4VurgguQJ/PTIlJsjqjxJGMW8z5llWW0Eu', 'Female'),
(2, 'Kamit', 'Su', 'Kami', 'Kamitsu@gmail.com', '$2y$10$mULvMekvTjZuS7uXWHT7a.2EnB.9k4BypCXehoq1MUDa8ukefhcci', 'Male'),
(3, 'Xiao', 'Demon', 'Xiao', 'xiao@gmail.com', '$2y$10$mwvl3AxIyRNVNq3rKRJN1O8Rc4CMD196PEPUWsrcurEZ7E.TOBGDq', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `RecipeID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Cuisine` varchar(100) DEFAULT NULL,
  `Difficulty` varchar(50) DEFAULT NULL,
  `DietaryPreference` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `RecipeImage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`RecipeID`, `Name`, `Cuisine`, `Difficulty`, `DietaryPreference`, `Description`, `RecipeImage`) VALUES
(1, 'Strawberry Blossom Mochi', 'Japanese', 'Intermediate', 'Vegetarian', 'Delicate pink mochi filled with a sweet and slightly tart strawberry jam and silky white bean paste, dusted with a hint of powdered sugar. This treat captures the essence of springtime in every chewy bite and is perfect for tea time or a light dessert.', 'mochi.jpg'),
(2, 'Traditional Napa Cabbage Kimchi', 'Korean', 'Moderate', 'Pescatarian', 'Traditional napa cabbage kimchi, or baechu kimchi, is Korea’s most iconic fermented dish. Made by salting napa cabbage and layering it with a flavorful paste of Korean red pepper flakes (gochugaru), garlic, ginger, scallions, and fish sauce, it’s then left to ferment until tangy and deeply umami. Enjoy it as a side dish, in stews, or even in fried rice. It’s bold, spicy, and packed with probiotics.', 'kimchi.jpg'),
(3, 'Mediterranean Sunshine Quinoa Salad', 'Mediterranean', 'Easy', 'Vegan', 'A fresh, zesty quinoa salad packed with cherry tomatoes, cucumbers, red onion, Kalamata olives, and chickpeas, tossed in a lemon-oregano vinaigrette. This vibrant dish is light yet satisfying, perfect as a main or side, and great for meal prep or picnics. Naturally gluten-free and full of plant-based protein.', 'quinoaSalad.jpg'),
(4, 'Margherita Pizza', 'Italian', 'Moderate', 'Vegetarian', 'A classic Neapolitan-style pizza with a thin, chewy crust, fresh tomato sauce, mozzarella cheese, and fragrant basil leaves. Simple, timeless, and full of flavor, best enjoyed straight from a hot oven.', 'margheritaPizza.jpg'),
(5, 'Chinese Vegetable Fried Rice', 'Chinese', 'Easy', 'Vegan', 'Fragrant jasmine rice stir-fried with garlic, ginger, soy sauce, and a medley of veggies like carrots, peas, and scallions. Quick, satisfying, and great as a main or side, customizable with tofu or egg.', 'chineseFriedRice.jpg'),
(6, 'Beef Tacos with Salsa Verde', 'Mexican', 'Easy', 'Meat-Based', 'Soft corn tortillas filled with seasoned ground beef, topped with fresh salsa verde, onions, and cilantro. Served with a wedge of lime for that perfect zesty kick. Taco night made right.', 'beefTaco.jpg'),
(7, 'Butter Chicken (Murgh Makhani)', 'Indian', 'Moderate', 'Meat-Based', 'Tender chicken simmered in a rich, creamy tomato gravy infused with butter, garlic, ginger, and warm Indian spices. Best served with naan or basmati rice. It’s comfort food with bold flavor.', 'butterChicken.jpg'),
(8, 'Pad Thai with Tofu', 'Thai', 'Moderate', 'Vegetarian', 'Stir-fried rice noodles tossed with tofu, bean sprouts, peanuts, tamarind sauce, and lime. Sweet, savory, tangy, and crunchy. A street food favorite that hits every flavor note.', 'padThai.jpg'),
(9, 'French Ratatouille', 'French', 'Moderate', 'Vegan', 'A slow-simmered vegetable medley of eggplant, zucchini, bell peppers, and tomatoes, seasoned with herbs de Provence. Rustic, comforting, and surprisingly rich for a vegetable dish, delicious warm or cold.', 'ratatouille.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `TeamMemberID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Role` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`TeamMemberID`, `Name`, `Role`, `Description`, `Image`) VALUES
(1, 'Xiao', 'Head Chef', 'Xiao brings 15 years of culinary excellence with a passion for fusion flavors and innovation in every dish.', 'images/xiao.jpg'),
(2, 'Hu Tao', 'Creative Director', 'Hu Tao is the creative mind behind our visual style, food presentation, and recipe storytelling.', 'images/hutao.jpg'),
(3, 'Kazuha', 'Nutritionist', 'Kazuha ensures every dish is not only delicious but also nutritious, balancing flavor and health.', 'images/kazuha.jpg'),
(4, 'Wanderer', 'Food Videographer', 'Wanderer brings recipes to life on screen, capturing every sizzle, stir, and smile with passion.', 'images/wanderer.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactmsg`
--
ALTER TABLE `contactmsg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`RecipeID`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`TeamMemberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactmsg`
--
ALTER TABLE `contactmsg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `RecipeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `TeamMemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
