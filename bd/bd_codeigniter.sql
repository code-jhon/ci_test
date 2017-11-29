-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: bd_codeigniter
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_games`
--

DROP TABLE IF EXISTS `tbl_games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_games` (
  `ga_id` int(11) NOT NULL AUTO_INCREMENT,
  `ga_title` varchar(100) DEFAULT NULL,
  `ga_platform` varchar(100) DEFAULT NULL,
  `ga_developer` varchar(45) DEFAULT NULL,
  `ga_genre` varchar(45) DEFAULT NULL,
  `ga_review` text,
  `ga_image` text,
  `ga_status` tinyint(4) DEFAULT NULL,
  `ga_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_games`
--

LOCK TABLES `tbl_games` WRITE;
/*!40000 ALTER TABLE `tbl_games` DISABLE KEYS */;
INSERT INTO `tbl_games` VALUES (1,'Dragon Ball Xenoverse 2','Nintendo Switch','Dimps','Fighting, Role-Playing ','a fighting role-playing video game developed by Dimps and published by Bandai Namco Entertainment based on the Dragon Ball franchise. It is the sequel to Dragon Ball Xenoverse that was released on February 5, 2015. for PlayStation 4, Xbox One and on October 28 for Microsoft Windows. In Japan, Dragon Ball Xenoverse 2 has been released only on PlayStation 4. The game was released for the Nintendo Switch in Japan on September 7, 2017 and later released worldwide on September 22, 2017.','http://thegamesdb.net/banners/_gameviewcache/boxart/original/front/51362-1.jpg',NULL,'2017-11-29 17:15:39'),(2,'FIFA18','Nintendo Switch','EA Vancouver and EA Romania ','Sports','Are you ready for your biggest season yet?  FIFA 18 on Nintendo Switch™ is the most immersive, social, and authentic football game ever created for Nintendo players. Feature packed, you can now play the world\'s game anytime, anywhere and in unique ways with FIFA 18 on Nintendo Switch.  BUILT FOR NINTENDO SWITCH. Your FIFA, Your Way: Brand-new ways to play single and multiplayer on the most social FIFA experience ever. With a variety of controller and display configurations available, as well as split Joy-Con™ support, FIFA 18 on Nintendo Switch offers a responsive and engaging gaming experience – no matter how you play.  YOUR FAVOURITE FIFA MODES. With FIFA Ultimate Team, Career Mode, and Nintendo Switch-tailored Kickoff, and Local Seasons, FIFA 18 on Nintendo Switch is the deepest portable FIFA ever.  FUT ICONS. Ronaldo Nazario. Diego Maradona. Pele. Ronaldinho. Play with the most iconic legends of football in FIFA Ultimate Team. Experience unique versions of each ICON with Stories, with ratings that reflect how their style and attributes evolved throughout their illustrious careers.','http://thegamesdb.net/banners/_gameviewcache/boxart/original/front/50025-1.jpg',NULL,'2017-11-29 17:35:18'),(3,'Just Dance 2018','Nintendo Switch','Ubisoft Paris ','Music','Whether you\'re a party starter, a dancer in the making, or a seasoned pro, get ready to turn up the volume and unleash your inner dancer with Just Dance® 2018!   Just Dance 2018 is coming back on October 24th 2018 with over 40 tracks at launch, and more than 300 songs available with Just Dance Unlimited and the 3-month trial included!  From the hottest hits to family favorites, dance to 40 new tracks, including:  Despacito - Luis Fonsi & Daddy Yankee 24K Magic - Bruno Mars John Wayne - Lady Gaga Waka Waka - Shakira Naughty Girl - Beyoncé Rockabye - Clean Bandit Ft. Sean Paul & Anne-Marie ...and many more! Whether you are a young dancer in the making or a pro dancer looking for new challenges, it’s never been so easy to Just Dance.','http://thegamesdb.net/banners/_gameviewcache/boxart/original/front/49989-1.png',NULL,'2017-11-29 17:36:50'),(4,'The Legend of Zelda: Breath of the Wild','Nintendo Switch','Nintendo',' Action, Adventure ','The Legend of Zelda: Breath of the Wild is an action-adventure video game developed and published by Nintendo for the Nintendo Switch and Wii U video game consoles. The game is a part of The Legend of Zelda series, and follows amnesiac protagonist Link, who awakens from a hundred-year slumber to a mysterious voice that guides him to defeat Calamity Ganon before he can destroy the kingdom of Hyrule.  The title\'s gameplay and mechanics constitute a departure from the series\' usual conventions, featuring an open-world environment, a detailed physics engine, high-definition visuals, and voice acting. Announced in 2013, the game was initially planned for release as a Wii U exclusive in 2015, but was delayed twice prior to its release on March 3, 2017. Breath of the Wild was a launch title for the Switch, as well as the final Nintendo-produced game for the Wii U.  Breath of the Wild received universal acclaim from critics, who deemed it to be one of the greatest video games of all time. Critics praised the game\'s open-ended, physics-driven gameplay that encourages player experimentation and exploration, with many calling it a landmark title in open-world game design, although minor criticism was directed at the game\'s technical performance at launch.  Also Available Special Edition This bundle includes the game, a Nintendo Switch Sheikah Slate Carrying Case, a Sheikah Eye Collectible Coin, the Relic of Hyrule: Calamity Ganon Tapestry and Weather-Worn Map, and The Legend of Zelda: Breath of the Wild Sound Selection CD.  Master Edition This bundle includes the game, a Nintendo Switch Sheikah Slate Carrying Case, a Sheikah Eye Collectible Coin, the Relic of Hyrule: Calamity Ganon Tapestry and Weather-Worn Map, a Sound Selection CD, and the Master Sword of Resurrection statue.','http://thegamesdb.net/banners/_gameviewcache/boxart/original/front/42293-1.jpg',NULL,'2017-11-29 17:37:36'),(5,'Titanfall 2','PlayStation','Respawn Entertainment','Action','Pilot and Titan unite as never before in Respawn Entertainment\'s highly anticipated Titanfall® 2. Featuring a single player campaign that explores the unique bond between man and machine, and backed by a deeper multiplayer experience, Titanfall 2 delivers fast-paced action brimming with inventive twists.  Features: Advanced, Action-Packed Gameplay - Whether fighting as a Pilot, the apex predators of The Frontier, or as a Titan, 20-foot tall war machines, Titanfall 2 provides an incredibly fun, fluid, and thrilling combat experience that is unmatched. Captivating Single Player Campaign - Step on to The Frontier as a Militia rifleman with aspirations of becoming a Pilot. Stranded behind enemy lines, and against overwhelming odds, you must team up with a veteran Vanguard-class Titan and uphold a mission you were never meant to carry out. Deeper Multiplayer Action - With six brand-new Titans, a host of deadly new Pilot abilities, an expanded customization system, new modes and much more, Titanfall 2 gives players the deeper MP experience they have been asking for. Play with Friends, or Make New Ones - The social tissue of Titanfall 2, Networks makes it fast and easy to play with friends old and new. Whether Social or Competitive, players','http://thegamesdb.net/banners/_gameviewcache/boxart/original/front/40184-1.jpg',NULL,'2017-11-29 17:41:32'),(6,'Overwatch','PC','Blizzard','Action, Shooter ','After a devastating war against a combat-ready team of intelligent machines known as Omnics. The former agents of the heroic team known as Overwatch must join forces once more to fight a new threat! A strategy base multiplayer first person shooter game by Activision-Blizzard.  The game puts players into two teams of six, with each player selecting one of several pre-defined hero characters with unique movement, attributes, and skills; these heroes are divided into four classes: Offense, Defense, Tank, and Support. Players on a team work together to secure and defend control points on a map and/or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they continue to play in matches. The game was launched with casual play, while Blizzard added competitive ranked play about a month after launch. Blizzard states that all Overwatch updates will remain free, with the only additional cost to players is through microtransactions to earn additional cosmetic rewards.','http://thegamesdb.net/banners/_gameviewcache/boxart/original/front/32185-1.jpg',NULL,'2017-11-29 17:47:57');
/*!40000 ALTER TABLE `tbl_games` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-29 15:24:34
