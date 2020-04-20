-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2020 at 03:25 AM
-- Server version: 5.5.58-0+deb7u1-log
-- PHP Version: 5.6.31-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unn_w18017928`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `ProductDescription` varchar(1000) DEFAULT NULL,
  `PictureRef` varchar(255) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Current` tinyint(4) DEFAULT NULL,
  `Category` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductDescription`, `PictureRef`, `Price`, `Current`, `Category`) VALUES
(11, '40 Winks Deep Plus Donut Bed', 'soft and cosy faux suede dog bed with a luxury plush inner. This stylish and modern bed is machine washable', 'Images\\DogBeds\\40WinksDeepPlusDonutPetBed.jpg', 9.99, 33, 'DogBeds'),
(12, '40 Winks Orthopaedic Dog Bed Red (small)', 'The soft plush inner promotes a restful sleep and provides added comfort and support whilst relieving pressure points making this bed perfect for older pets with joint problems. The cover is removable and machine washable.', 'Images\\DogBeds\\40WinksOrthopaedicDogBedRed.jpg', 19.99, 38, 'DogBeds'),
(13, '40 Winks Orthopaedic Dog Bed Red (large)', 'The soft plush inner promotes a restful sleep and provides added comfort and support whilst relieving pressure points making this bed perfect for older pets with joint problems. The cover is removable and machine washable.', 'Images\\DogBeds\\40WinksOrthopaedicDogBedRed.jpg', 30.99, 2, 'DogBeds'),
(14, 'Ancol Pewter Strip Buffer Dog Bed (small)', 'Exquisite tailoring and generous cushioning ensures a comfortable rest area for your dog\r\nThick padded base cushion provides insulation to help keep your animal cosy\r\nIdeal for older dogs to walk into, without having to climb\r\nEasily cleaned in a washing machine on a cool wash', 'Images\\DogBeds\\AncolPewterStripBufferDogBed.jpg', 18.99, 4, 'DogBeds'),
(15, 'Ancol Pewter Strip Buffer Dog Bed (medium)', 'Exquisite tailoring and generous cushioning ensures a comfortable rest area for your dog\r\nThick padded base cushion provides insulation to help keep your animal cosy\r\nIdeal for older dogs to walk into, without having to climb\r\nEasily cleaned in a washing machine on a cool wash', 'Images\\DogBeds\\40WinksOrthopaedicDogBedRed.jpg', 38.95, 2, 'DogBeds'),
(16, 'Danish Design Pet House 44x43cm', 'oft, lightweight igloo for your pet. Emblazoned with the Danish Design logo, this luxurious cave hideaway is ideal as a travel home while the fleece-lined inner keeps your pet snug and warm on cold nights.', 'Images\\DogBeds\\DanishDesignPetHouse44x43cm.jpg', 39.99, 4, 'DogBeds'),
(18, 'Danish Design 2 in 1 Dog Coat (12in/30cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 12.99, 4, 'DogCoats'),
(19, 'Danish Design 2 in 1 Dog Coat (16in/40cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 15.99, 4, 'DogCoats'),
(20, 'Danish Design 2 in 1 Dog Coat (18in/45cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 17.99, 4, 'DogCoats'),
(21, 'Danish Design 2 in 1 Dog Coat (20in/50cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 19.99, 4, 'DogCoats'),
(22, 'Danish Design 2 in 1 Dog Coat (22in/55cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 21.99, 4, 'DogCoats'),
(23, 'Danish Design 2 in 1 Dog Coat (24in/60cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 23.99, 4, 'DogCoats'),
(24, 'Danish Design 2 in 1 Dog Coat (26in/65cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 25.99, 4, 'DogCoats'),
(25, 'Danish Design 2 in 1 Dog Coat (28in/70cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 27.99, 2, 'DogCoats'),
(26, 'Danish Design 2 in 1 Dog Coat (30in/75cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 29.99, 0, 'DogCoats'),
(27, 'Ancol Heritage Diamond Tan Dog Collar (26-36cm)', 'Give your dog a classic look with this Ancol Heritage Diamond Dog Collar, which is a strong, traditional collar made using the best workmanship.', 'Images\\DogCollars\\AncolHeritageDiamondTanDogCollar.jpg', 4.99, 7, 'DogCollars'),
(28, 'Ancol Heritage Diamond Tan Dog Collar\r\n(46-56cm)', 'Give your dog a classic look with this Ancol Heritage Diamond Dog Collar, which is a strong, traditional collar made using the best workmanship.', 'Images\\DogCollars\\AncolHeritageDiamondTanDogCollar.jpg', 6.99, 8, 'DogCollars'),
(29, 'Rosewood Luxury Black Leather Dog Collar (10-14inch)', 'Give your dog a classic look with this Ancol Heritage Diamond Dog Collar, which is a strong, traditional collar made using the best workmanship.', 'Images\\DogCollars\\RosewoodLuxuryBlackLeatherDogCollar.jpg', 7.49, 5, 'DogCollars'),
(30, 'Rosewood Luxury Black Leather Dog Collar (14-18inch)', 'This comfortable and practical fit collar is crafted with the finest leather and suedette material using robust fittings and embellished with hand stitching, decorative buttons and charms', 'Images\\DogCollars\\RosewoodLuxuryBlackLeatherDogCollar.jpg', 9.99, 5, 'DogCollars'),
(31, 'Rosewood Luxury Black Leather Dog Collar (18-22inch)', 'This comfortable and practical fit collar is crafted with the finest leather and suedette material using robust fittings and embellished with hand stitching, decorative buttons and charms', 'Images\\DogCollars\\RosewoodLuxuryBlackLeatherDogCollar.jpg', 11.99, 8, 'DogCollars'),
(32, 'Flexi New Classic Cord Lead 5m (Red)', 'This well thought out lead has a robust plastic body, with a push button retractor and short stroke braking system. The ergonomic grip means that you can keep hold of your dog even when they try to pull, which gives you more control.', 'Images\\DogLeads\\FlexiClassicCordLead5mRed.jpg', 7.99, 9, 'DogLeads'),
(33, 'Flexi New Classic Cord Lead 5m (Black)', 'This well thought out lead has a robust plastic body, with a push button retractor and short stroke braking system. The ergonomic grip means that you can keep hold of your dog even when they try to pull, which gives you more control.', 'Images\\DogLeads\\FlexiClassicCordLead5mBlack.jpg', 7.99, 6, 'DogLeads'),
(36, 'Frontline Spot On Dog 2kg - 10kg (6 x 0.67ml)', 'effective in the treatment and prevention of infestations of fleas, ticks and biting lice on dogs and provides protection against ticks for up to 1 month and 8 weeks protection against fleas depending on the level of environmental challenge. Treatment can be administered on a 4 weekly basis', 'Images\\FleaAndTick\\FrontlineSpotOnDog2kg-10kg.jpg', 26.99, 5, 'FleaAndTick'),
(37, 'Frontline Spot On Dog 10kg - 20kg (6 x 1.34ml)', 'effective in the treatment and prevention of infestations of fleas, ticks and biting lice on dogs and provides protection against ticks for up to 1 month and 8 weeks protection against fleas depending on the level of environmental challenge. Treatment can be administered on a 4 weekly basis', 'Images\\FleaAndTick\\FrontlineSpotOnDog10kg-20kg.jpg', 33.99, 3, 'FleaAndTick'),
(42, 'Panacur Cat/Dog Worming Granules 22% 1.8g Pack of 3 Sachets', 'Panacur Granules are effective against both immature and mature Roundworms of the gastro-intestinal and respiratory tracts. It is also effective in the treatment of Lungworm in both cats and dogs. Panacur is suitable for the treatment of pregnant bitches to reduce prenatal infections of Roundworm. Panacur granules can also be safely used on pregnant queens.', 'Images\\Wormers\\Granules.jpg', 6.99, 14, 'Wormers'),
(43, 'Panacur Worming Liquid 10% 100ml', 'Panacur 10% Oral Suspension is effective against both immature and mature Roundworms in both cats and dogs. It is recomended that pregnant bitches are regularly treated to reduce the prenatal infections of Roundworm. Puppies and kittens can also safely be treated with Panacur Oral Suspension.', 'Images\\Wormers\\Liquid.jpg', 24.99, 5, 'Wormers'),
(44, 'Petplanet Puppy Training Pads 100 pcs', 'This is a convenient, and hygienic, way to create a designated toilet area for puppies as well as for indoor, confined or ill pets. Being antibacterial and odour eliminating these pads are ideal for making an unpleasant job far easier and clean. These can also be used in pet crates or carriers when your canine friend is travelling with you.', 'Images\\Hygiene\\PetplanetPuppyTrainingPads100pcs.jpg', 19.99, 11, 'Hygiene'),
(45, 'Simple Solution Stain & Odour Remover 750ml', 'More than just an ordinary deodoriser, Simple Solution Stain & Odour Remover completely eliminates all organic stains and odours. Ideal for urine, vomit, faeces, blood, dirt, grass, red wine, juice, coffee, tea, baby formula and more.', 'Images\\Hygiene\\SimpleSolutionStain&OdourRemover750ml.jpg', 5.99, 5, 'Hygiene'),
(46, 'Beaphar FLEAtec Household Flea Spray 600ml', ' premium flea control spray combining an insecticide with an Insect Growth Regulator that fully protects your home against all stages of the flea lifecycle.', 'Images\\Hygiene\\BeapharFLEAtecHouseholdFleaSpray600ml.jpg', 12.99, 9, 'Hygiene'),
(47, 'Yard Clean 946ml', 'Yard Clean works like magic to remove animal urine and general yard smells. An environmentally friendly odour eliminator, suitable to use in kennels, catteries, stables and for general refuse areas such as in and around wheelie bins and is also suitable for use on artificial grass. ', 'Images\\Hygiene\\YardClean964ml.jpg', 15.99, 0, 'Hygiene'),
(48, 'Henry Wag Glove Drying Towel 100 x 22cm', 'The Henry Wag Glove Drying Towel is a luxurious pet cleaning and drying towel that incorporates gloved ends from Henry Wag that easily removes dirt and water from your pet’s coat. The towel absorbs more water and dries quicker than regular towels', 'Images\\Hygiene\\HenryWagGloveDryingTowel100x22cm.jpg', 6.99, 9, 'Hygiene'),
(49, 'Petkin Tushie Wipes Pack of 100', 'These Tushie Wipes are great for taking optimal care of your pet''s bottom.\r\nWorking to clean and deodorise, these wipes have extra cleansing strength so they can tackle mess and odours', 'Images\\Hygiene\\PetkinTushieWipesPackof100.jpg', 7.99, 12, 'Hygiene'),
(50, 'Urine Off Urine Finder Mini LED Light', 'The Urine Off Urine Finder Mini LED Light is a special LED UV light finely tuned to find dried urine stains that are invisible to the naked eye, making it easy to find the area that requires treatment.', 'Images\\Hygiene\\UrineOffUrineFinderMiniLEDLight.jpg', 14.99, 8, 'Hygiene'),
(51, 'Pet Head Puppy Fun Shampoo - 475ml ', 'Ensure that your pet has a gentle and soothing bath time with Pet Head Puppy Fun Shampoo.', 'Images\\Bathing\\PetHeadPuppyFunShampoo-475ml.jpg', 9.99, 5, 'Bathing'),
(52, 'Pet Head Life An Itch Skin Soothing Shampoo - 475ml', 'Stop your pet''s itching with Pet Head Life''s An Itch Skin Soothing Shampoo. This amazing formula effectively relieves skin irritation caused by insect bites and dry skin. It contains no harsh chemicals, coal tar or drugs and has a delicious water melon fragrance.', 'Images\\Bathing\\PetHeadLifeAnItchSkinSoothingShampoo-475ml.jpg', 9.99, 5, 'Bathing'),
(53, 'FURminator Bathing Brush', 'The FURminator® Bathing Brush is a professional quality tool for grooming and loosening pet hair while bathing, it is perfect for short and medium coats.', 'Images\\Bathing\\FURminatorBathingBrush.jpg', 12.99, 4, 'Bathing'),
(54, 'SnuggleSafe Micro Fibre Towel (92x46cm)', 'Dries 4 times faster than a regular towel.', 'Images\\Bathing\\SnuggleSafeMicroFibreTowel.jpg', 6.99, 10, 'Bathing'),
(55, 'SnuggleSafe Micro Fibre Towel (140x76cm)', 'Dries 4 times faster than a regular towel.', 'Images\\Bathing\\SnuggleSafeMicroFibreTowel.jpg', 9.99, 12, 'Bathing'),
(56, 'Mikki Soft Pin Slicker For Fine and Medium Coats', 'The Mikki Soft Pin Slicker has specially shaped slicker pins which are mounted on an air cushion to enhance grooming action & reduce any excessive brushing force.\r\n\r\nRemoves dead hair from undercoat and top coat\r\nHelps brush out minor knots and tangles', 'Images\\Grooming\\MikkiSoftPinSlickerForFineandMediumCoats.jpg', 9.99, 23, 'Grooming'),
(58, 'Nylabone Chicken Puppy Bone Triple Pack - Small', 'This Nylabone Chicken Puppy Bone Triple Pack - Small is specially designed for young puppies and provides hours of healthy chewing fun. Discourage destructive chewing and fight boredom with these three bones. Each bone measures approximately 11cm', 'Images\\ChewToys\\NylaboneChickenPuppyBoneTriplePack-Small.jpg', 11.99, 21, 'ChewToys'),
(59, 'Nylabone Beef Extreme Bone - Large', 'Has your dog got a powerful chew? Then this Nylabone Beef Extreme Bone - Large is the one to get. Made from durable Nylon, the Nylabone, with its irresistible flavour, discourages destructive chewing and promotes appropriate, healthy chewing. As your four-legged friend chews happily away, the surface of the Nylabone becomes rougher, creating bristles, which help clean teeth and control plaque and tartar build up.', 'Images\\ChewToys\\NylaboneBeefExtremeBone-Large.jpg', 8.99, 17, 'ChewToys'),
(60, 'Nylabone Bacon Puppy Keys Chew - Small', 'These Nylabone Bacon Puppy Keys Chew - Small are for teething puppies up to 11kg. Made from inert soft thermoplastic polymer to satisfy the chewing instinct of teething puppies, and encourage non-destructive chewing. This product is specifically designed for young puppies to aid in the growth and development of their teeth and jaws and to encourage safe and non-destructive chewing. ', 'Images\\ChewToys\\NylaboneBaconPuppyKeysChew-Small.jpg', 10.99, 16, 'ChewToys'),
(61, 'Nylabone Chicken Puppy Bone - Medium', 'This tasty bone is made from inert soft thermoplastic polymer to satisfy the chewing instinct of teething puppies and encourage non-destructive chewing. Bristles raised during chewing will help clean teeth and prevent tartar build-up', 'Images\\ChewToys\\NylaboneChickenPuppyBone-Medium.jpg', 5.99, 31, 'ChewToys'),
(62, 'NERF Dog Tennis Ball Blaster 30cm for Small Dogs and Puppies', 'Take aim with the Nerf Dog Tennis Ball Blaster for Small Dogs and Puppies. High-powered blasting action launches your dog''s favourite fetching tennis ball over 50 feet in the air. ', 'Images\\OutdoorToys\\NERFDogTennisBallBlaster30cmforSmallDogsandPuppies.jpg', 19.99, 7, 'OutdoorToys'),
(63, 'Trixie Natural Rubber Ball with Rope', 'Dogs everywhere love a good, old-fashioned rubber ball, and the provide even more fun when they''re a tug toy as well! With its 1 metre long rope, the Trixie Natural Rubber Ball with Rope is a robust toy for smaller dogs, providing hours of tugging and fetching fun for you and your little canine companion, and you don''t even have to bend to retrieve it!', 'Images\\OutdoorToys\\TrixieNaturalRubberBallwithRope.jpg', 2.99, 19, 'OutdoorToys'),
(64, 'Twizzles', 'Twizzles Dog Toys, ideal  for your four legged friends fun at playtime. The plush feel is kind on your pets jaw and makes this toy great for snuggling. Easy for your pet to carry.', 'Images\\SoftToys\\Twizzles.jpg', 6.99, 9, 'SoftToys'),
(65, 'Squeaky Teddy Bear', 'Dr. Noy''s plush soft squeaky dog toy with replacable squeaker, spare squeaker included', 'Images\\SoftToys\\SqueakyTeddyBear.jpg', 3.99, 19, 'SoftToys'),
(66, 'Frankie Flamingo', ' Frankie flamingo Dog Toys, ideal  for your four legged friends fun at playtime. The plush feel is kind on your pets jaw and makes this toy great for snuggling. Easy for your pet to carry and for gentle games of tug of war. Frankie flamingo is larger that his friend Florence flamingo and measures 58cm long', 'Images\\SoftToys\\FrankieFlamingo.jpg', 5.99, 13, 'SoftToys');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`ProductID`), ADD KEY `ProductID` (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
