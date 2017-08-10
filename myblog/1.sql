-- MySQL dump 10.13  Distrib 5.7.11, for Win32 (AMD64)
--
-- Host: localhost    Database: frameset_blog
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `my_admin`
--

DROP TABLE IF EXISTS `my_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_admin` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `titlename` varchar(255) NOT NULL,
  `urlname` varchar(255) NOT NULL,
  `url` varchar(245) NOT NULL,
  `file` varchar(255) NOT NULL,
  `isdel` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_admin`
--

LOCK TABLES `my_admin` WRITE;
/*!40000 ALTER TABLE `my_admin` DISABLE KEYS */;
INSERT INTO `my_admin` VALUES (2,'碧海青天夜夜心','Good Good study','http://www.baidu.com','那一刻，我们的心是如此的近，这就是我们开始的原因.....',0);
/*!40000 ALTER TABLE `my_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_book`
--

DROP TABLE IF EXISTS `my_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_book` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `authorid` int(11) NOT NULL COMMENT '用户id',
  `book_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发表时间',
  `book_content` text NOT NULL COMMENT '留言内容',
  `is_top` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `isdel` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否放入回收',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='留言板表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_book`
--

LOCK TABLES `my_book` WRITE;
/*!40000 ALTER TABLE `my_book` DISABLE KEYS */;
INSERT INTO `my_book` VALUES (2,4,'2017-06-17 19:36:01','哇哦！跑都跑的那么帅，我真幸福.....',0,0),(3,5,'2017-06-18 21:08:08','生活不止眼前的苟且，还有诗和远方.....',0,0),(4,4,'2017-06-18 21:08:08','人生就像魔法书,兜兜转转又是一年.....',0,0);
/*!40000 ALTER TABLE `my_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_details`
--

DROP TABLE IF EXISTS `my_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_details` (
  `did` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(500) DEFAULT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '回帖或发帖时间',
  `first` tinyint(2) NOT NULL DEFAULT '0' COMMENT '1是帖子 0是评论',
  `state` tinyint(4) DEFAULT '0' COMMENT '是否显示',
  `istop` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `comment_num` int(11) NOT NULL DEFAULT '0' COMMENT '评论数',
  `read_num` int(11) DEFAULT '0' COMMENT '阅读数',
  `nocomment` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否禁止评论0是否',
  `classid` int(11) NOT NULL COMMENT '板块的id',
  `authorid` int(11) DEFAULT NULL COMMENT '发布人id',
  `picture` varchar(200) DEFAULT NULL COMMENT '头像',
  `describer` text COMMENT '帖子描述',
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='帖子表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_details`
--

LOCK TABLES `my_details` WRITE;
/*!40000 ALTER TABLE `my_details` DISABLE KEYS */;
INSERT INTO `my_details` VALUES (3,'女孩都有浪漫的小情怀','   女孩子都有着浪漫的小情怀，对于求婚更是抱着满满的浪漫期待，也希望在求婚那一天对方可以给自己一个最浪漫的求婚词。\r\n\r\n    you are the apple of my eyes.\r\n\r\n    你是我这辈子最珍贵的人。请让我永远守护在你身边，我一定将你当成掌心的珍宝，一辈子悉心呵护。你，愿意嫁给我吗？','2017-06-17 14:23:04',1,0,1,0,0,0,1,0,NULL,NULL),(4,'也许下个路口就会遇见希望','      不要忽视了自己，因为有你，有些人的世界会灿烂起来！\r\n      爱和恨，从来就没有单独存在过，一直是一起存在的，只不过是某个阶段中，爱比恨多了一点儿，所以看见了爱，模糊了恨；或者恨比爱多了一点儿，所以看见了恨，模糊了爱，而我们，就都在这些被模糊了情感中，最终模糊了自己。\r\n       如果世上不存在对等的爱，那就让我爱多一些吧。\r\n       想你的时候，把你的名字写在手心，摊开是想念，握紧是幸福。幸福就是简简单单的依靠，就是手牵手的温柔。','2017-06-17 14:25:10',0,0,0,0,0,0,1,0,NULL,NULL),(5,'6月毕业季，祝福送给你','     时光荏苒，依稀记得开学那天兴奋不已的心情，可如今我们就要毕业了，各奔东西。\r\n     一天天的相聚如在眼前，一夜夜的奋斗有你陪伴，一次次的欢笑你我共享，一回回的困难你帮我解决。一千多个日夜，你我的情谊深厚弥坚。离别的汽笛已经鸣响，分别就在这迷人的六月。愿你别后宏图大展，梦想实现，我们将重逢在美好的明天！\r\n      知识的浪潮依然在我们脑海涌动，昂扬的斗志依然在我们的世界驻扎，相知的情意依然在我们的心田飘荡，离别的号角却已在我们的耳边奏响...','2017-06-17 14:27:18',0,0,0,0,0,0,2,0,NULL,NULL),(18,'啊是的大发光火','撒地方规划回家看','2017-06-19 19:28:56',0,0,0,0,0,0,1,NULL,'./public/upload/2017/06/19/5947b578a7875.bmp','撒地方规划回家，k'),(19,'啊是的大发光火','撒地方规划回家看','2017-06-19 19:29:31',0,0,0,0,0,0,1,NULL,'./public/upload/2017/06/19/5947b578a7875.bmp','撒地方规划回家，k'),(21,NULL,'这个是测试评论的','2017-06-19 22:17:46',1,4,0,0,0,0,1,9,NULL,NULL),(24,NULL,'这个评论真的好丑 讨厌前台的东西 我宁愿去找bug 好气....','2017-06-19 23:49:41',1,5,0,0,0,0,2,9,NULL,NULL),(25,NULL,'到底评论有没有完了 都十二点了','2017-06-19 23:53:22',1,5,0,0,0,0,2,9,NULL,NULL),(26,NULL,'啊啊啊啊啊啊吖吖.....\r\n\r\n  又错了','2017-06-20 00:00:15',1,5,0,0,0,0,2,9,NULL,NULL),(27,NULL,'活该....\r\n谁让你总粗心，一个破id你都搞不定','2017-06-20 00:01:15',1,5,0,0,0,0,2,9,NULL,NULL),(28,NULL,'生活不止眼前的苟且，还有诗和远方','2017-06-20 00:02:20',1,4,0,0,0,0,1,9,NULL,NULL),(29,NULL,'哇....\r\n跑都跑的那么帅，我真幸福','2017-06-20 00:02:50',1,4,0,0,0,0,1,9,NULL,NULL),(30,NULL,'人生就像魔法书，兜兜转转又是一年','2017-06-20 00:03:20',1,4,0,0,0,0,1,9,NULL,NULL),(31,NULL,'嘿...\r\n道行太浅，老实回家做宅男','2017-06-20 00:04:24',1,4,0,0,0,0,1,9,NULL,NULL),(32,NULL,'人之所以能，是因为相信能','2017-06-20 00:04:49',1,4,0,0,0,0,1,9,NULL,NULL),(33,'生活大多是枯燥','关于生活的命题，每个人都活有不同的答案，或浅显或高深，或伪高深 或真高深，所以表现出来的也千奇百怪，有时真的很庆幸自己有一个揣摩别人内心的一个嗜好，生活很枯燥，也乏味，就在这个枯燥乏味的世界里，给自己找点事做，也算是一种消遣吧，通过这个项目让我了解了太多的不足 心里急得不行， 不知道面临我的究竟会是什么 ，我依旧迷茫着，不知道走到那才是我内心的方向，我只有这么走着，在我还没倒下之前.....\r\n回想下以前的日子 突然觉得时间有时候很慢，慢的让人烦躁，不安，无力，有时候又很快，快的让你仿佛很久以前的事情就像在眼前，感觉自己有时太理智，相处的4个女朋友最后都让理智把两个人之间的绳子割断了，有时候又觉得自己太感性，感性的只有一瞬间就想和对方在一起.. 矛盾体。。就是矛盾体\r\n   也许是年纪大一些？亦或者是单身久了？感觉一个人没什么不好，就像刘同说的一样：也许你现在正在一个人吃饭，一个人睡觉，一个人看电影，然而你却可以一个人吃饭，一个人睡觉，一个人看电影，有些人离开另一个人就失去了自己，如果是这样，那这样的孤独是不是也是一种虽败犹荣？？？算么？？真的算么？？？无数次的问自己，你到底想要什么？？？？？？最后的答案依旧是我在乎的人快乐幸福，给身边的人带来一些快乐不想看到一点负面情绪，，也许这就是物极必反把 ，，偏偏自己的内心却是一个赤裸裸的反面教材 ，，真的是越不想让别人失望，就越不想别人让你失望  好乱 ，没有意思逻辑  水煎 明天还要上线  也许有时一堆的404 and 500','2017-06-20 00:39:27',0,0,0,0,0,0,3,NULL,'./public/upload/2017/06/20/5947fe3f3b584.bmp','不知道应该怎么说，像薯片，好看，好闻，但不是每个人都爱吃'),(34,NULL,'法国红酒 ','2017-06-20 00:45:50',1,4,0,0,0,0,1,9,NULL,NULL),(35,NULL,'哈哈...\r\n\r\n又发现一个bug 还好没睡！！给自己个赞','2017-06-20 00:51:49',1,33,0,0,0,0,3,9,NULL,NULL);
/*!40000 ALTER TABLE `my_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_plate`
--

DROP TABLE IF EXISTS `my_plate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_plate` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `lastpost` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_plate`
--

LOCK TABLES `my_plate` WRITE;
/*!40000 ALTER TABLE `my_plate` DISABLE KEYS */;
INSERT INTO `my_plate` VALUES (1,'碎言碎语','人生就是一个for循环，一直循环着死亡与重生的过程','null'),(2,'诗词歌赋','一句词、一本书、一个世界、一个人.....',NULL),(3,'慢生活','我们总在忙着认识各种人，以为是在丰富生命，其实，最有价值的遇见，是在某一个时刻重遇了自己.....',NULL);
/*!40000 ALTER TABLE `my_plate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_user`
--

DROP TABLE IF EXISTS `my_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `usertype` tinyint(2) NOT NULL DEFAULT '0',
  `regtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(50) DEFAULT NULL,
  `sex` tinyint(2) NOT NULL DEFAULT '0',
  `qq` varchar(40) DEFAULT NULL,
  `allowlogin` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_user`
--

LOCK TABLES `my_user` WRITE;
/*!40000 ALTER TABLE `my_user` DISABLE KEYS */;
INSERT INTO `my_user` VALUES (3,'laoleng','1985d434c0bc98a1a71b6e24190c7220','553703655@qq.com',0,'2017-06-18 11:40:29',NULL,0,NULL,0),(4,'caoxu','1985d434c0bc98a1a71b6e24190c7220','553703655@qq.com',0,'2017-06-18 12:06:51',NULL,0,NULL,0),(5,'xiaoleng','1985d434c0bc98a1a71b6e24190c7220','553703655@qq.com',0,'2017-06-18 12:32:28',NULL,0,NULL,0),(9,'admin','1985d434c0bc98a1a71b6e24190c7220','553703655@qq.com',1,'2017-06-18 12:50:20',NULL,0,NULL,0),(10,'jingjing','1985d434c0bc98a1a71b6e24190c7220','553703655@qq.com',0,'2017-06-18 20:58:30',NULL,0,NULL,0);
/*!40000 ALTER TABLE `my_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-20 10:30:09
