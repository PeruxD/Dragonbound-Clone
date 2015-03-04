/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50534
Source Host           : localhost:3306
Source Database       : db_clone

Target Server Type    : MYSQL
Target Server Version : 50534
File Encoding         : 65001

Date: 2014-02-03 19:25:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for amigos
-- ----------------------------
DROP TABLE IF EXISTS `amigos`;
CREATE TABLE `amigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_yo` int(11) NOT NULL,
  `id_amigo` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of amigos
-- ----------------------------
INSERT INTO `amigos` VALUES ('1', '1', '2');
INSERT INTO `amigos` VALUES ('2', '2', '1');

-- ----------------------------
-- Table structure for guild
-- ----------------------------
DROP TABLE IF EXISTS `guild`;
CREATE TABLE `guild` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of guild
-- ----------------------------
INSERT INTO `guild` VALUES ('1', '1', 'XPGG');

-- ----------------------------
-- Table structure for guild_members
-- ----------------------------
DROP TABLE IF EXISTS `guild_members`;
CREATE TABLE `guild_members` (
  `id_guild` int(4) DEFAULT NULL,
  `id_user` int(4) NOT NULL DEFAULT '0',
  `rango` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of guild_members
-- ----------------------------
INSERT INTO `guild_members` VALUES ('1', '1', '0');
INSERT INTO `guild_members` VALUES ('1', '2', '155');

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` bigint(20) NOT NULL,
  `genero` char(2) DEFAULT NULL,
  `parte` char(2) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1066 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', '3289', 'm', 'h', 'Default');
INSERT INTO `items` VALUES ('2', '3288', 'm', 'b', 'Default');
INSERT INTO `items` VALUES ('3', '3312', 'f', 'h', 'Default');
INSERT INTO `items` VALUES ('4', '3313', 'f', 'b', 'Default');
INSERT INTO `items` VALUES ('5', '1', 'm', 'h', 'Space Marine');
INSERT INTO `items` VALUES ('6', '12', 'm', 'h', '(RARE) Soccer Hat');
INSERT INTO `items` VALUES ('7', '13', 'm', 'h', 'Cowboy Hat');
INSERT INTO `items` VALUES ('8', '16', 'm', 'h', 'Robin Hood Hat');
INSERT INTO `items` VALUES ('9', '25', 'm', 'h', 'Laurel Crown');
INSERT INTO `items` VALUES ('10', '28', 'm', 'h', 'Magician Hat');
INSERT INTO `items` VALUES ('11', '29', 'm', 'h', 'Chief Hair');
INSERT INTO `items` VALUES ('12', '37', 'm', 'h', '(RARE) Birthday Hat');
INSERT INTO `items` VALUES ('13', '39', 'm', 'h', 'Santa');
INSERT INTO `items` VALUES ('14', '41', 'm', 'h', 'Golden Helmet');
INSERT INTO `items` VALUES ('15', '43', 'm', 'h', 'Indiana Hat');
INSERT INTO `items` VALUES ('16', '44', 'm', 'h', 'Bridegroom Hair');
INSERT INTO `items` VALUES ('17', '50', 'm', 'h', '(RARE) Clown Costume');
INSERT INTO `items` VALUES ('18', '51', 'm', 'h', 'Hip-Hop Hair');
INSERT INTO `items` VALUES ('19', '67', 'm', 'h', 'Rocker Hair');
INSERT INTO `items` VALUES ('20', '70', 'm', 'h', 'Panda Hat');
INSERT INTO `items` VALUES ('21', '71', 'm', 'h', 'Great Devil Head');
INSERT INTO `items` VALUES ('22', '1', 'm', 'b', 'Space Marine');
INSERT INTO `items` VALUES ('23', '12', 'm', 'b', 'Cowboy');
INSERT INTO `items` VALUES ('24', '15', 'm', 'b', 'Robin Hood');
INSERT INTO `items` VALUES ('25', '18', 'm', 'b', 'Arch Angel');
INSERT INTO `items` VALUES ('26', '26', 'm', 'b', 'Magician A');
INSERT INTO `items` VALUES ('27', '37', 'm', 'b', 'Santa');
INSERT INTO `items` VALUES ('28', '39', 'm', 'b', 'Golden Armor');
INSERT INTO `items` VALUES ('29', '41', 'm', 'b', 'Indiana Wear');
INSERT INTO `items` VALUES ('30', '42', 'm', 'b', 'Tuxedo');
INSERT INTO `items` VALUES ('31', '48', 'm', 'b', '(RARE) Clown Costume');
INSERT INTO `items` VALUES ('32', '71', 'm', 'b', 'Panda Clothing');
INSERT INTO `items` VALUES ('33', '72', 'm', 'b', 'Great Devil Clothing');
INSERT INTO `items` VALUES ('34', '9', 'f', 'h', 'Rabbit Hair');
INSERT INTO `items` VALUES ('35', '11', 'f', 'h', 'Fruit Angel Hat');
INSERT INTO `items` VALUES ('36', '14', 'f', 'h', 'Magician Hat');
INSERT INTO `items` VALUES ('37', '38', 'f', 'h', '(RARE) Birthday Hat');
INSERT INTO `items` VALUES ('38', '42', 'f', 'h', 'Santa');
INSERT INTO `items` VALUES ('39', '47', 'f', 'h', 'Bride Hair');
INSERT INTO `items` VALUES ('40', '52', 'f', 'h', '(RARE) Clown Costume');
INSERT INTO `items` VALUES ('41', '55', 'f', 'h', 'Golden Helmet');
INSERT INTO `items` VALUES ('42', '68', 'f', 'h', 'Elf Hair');
INSERT INTO `items` VALUES ('43', '75', 'f', 'h', 'Great Devil Head');
INSERT INTO `items` VALUES ('44', '34', 'f', 'b', 'Devil Clothing');
INSERT INTO `items` VALUES ('45', '37', 'f', 'b', 'Red Dress');
INSERT INTO `items` VALUES ('46', '40', 'f', 'b', 'Santa');
INSERT INTO `items` VALUES ('47', '45', 'f', 'b', 'Wedding Dress');
INSERT INTO `items` VALUES ('48', '50', 'f', 'b', '(RARE) Clown Costume');
INSERT INTO `items` VALUES ('49', '53', 'f', 'b', 'Golden Armor');
INSERT INTO `items` VALUES ('50', '71', 'f', 'b', 'Panda Clothing');
INSERT INTO `items` VALUES ('51', '72', 'f', 'b', 'Great Devil Clothing');
INSERT INTO `items` VALUES ('52', '11', 'f', 'b', 'Nymph Clothing');
INSERT INTO `items` VALUES ('53', '13', 'f', 'b', 'Magician');
INSERT INTO `items` VALUES ('54', '21', 'f', 'b', 'Arch Angel');
INSERT INTO `items` VALUES ('55', '31', 'f', 'b', 'Hawaiian Wear');
INSERT INTO `items` VALUES ('56', '5', 'm', 'g', 'Heart Painting');
INSERT INTO `items` VALUES ('57', '8', 'm', 'g', 'Sunglasses');
INSERT INTO `items` VALUES ('58', '22', 'm', 'g', 'Pet-01');
INSERT INTO `items` VALUES ('59', '23', 'm', 'g', 'Rudolph Nose');
INSERT INTO `items` VALUES ('60', '19', 'm', 'g', '(RARE) Orbiting Moon');
INSERT INTO `items` VALUES ('61', '25', 'm', 'g', 'Love Eye');
INSERT INTO `items` VALUES ('62', '30', 'm', 'g', 'M. Sunglasses');
INSERT INTO `items` VALUES ('63', '31', 'm', 'g', 'Snorkel');
INSERT INTO `items` VALUES ('64', '32', 'm', 'g', 'Pet-02');
INSERT INTO `items` VALUES ('65', '33', 'm', 'g', 'Pet-03');
INSERT INTO `items` VALUES ('66', '34', 'm', 'g', 'Pet-AD');
INSERT INTO `items` VALUES ('67', '37', 'm', 'g', 'Eagle');
INSERT INTO `items` VALUES ('68', '38', 'm', 'g', 'Parrot');
INSERT INTO `items` VALUES ('69', '39', 'm', 'g', 'Silver Hawk');
INSERT INTO `items` VALUES ('70', '41', 'm', 'g', '(RARE) Red Parrot');
INSERT INTO `items` VALUES ('71', '43', 'm', 'g', 'Tears');
INSERT INTO `items` VALUES ('72', '46', 'm', 'g', 'Shocked');
INSERT INTO `items` VALUES ('73', '47', 'm', 'g', 'WorldCup 2006');
INSERT INTO `items` VALUES ('74', '54', 'm', 'g', 'Legendary Staff');
INSERT INTO `items` VALUES ('75', '59', 'm', 'g', 'Blue Light Saber');
INSERT INTO `items` VALUES ('76', '60', 'm', 'g', 'Red Light Saber');
INSERT INTO `items` VALUES ('77', '62', 'm', 'g', '(RARE) Inca Bird');
INSERT INTO `items` VALUES ('78', '64', 'm', 'g', '(RARE) Candle Stick');
INSERT INTO `items` VALUES ('79', '4', 'f', 'g', 'Heart Painting');
INSERT INTO `items` VALUES ('80', '6', 'f', 'g', 'Sunglasses');
INSERT INTO `items` VALUES ('81', '23', 'f', 'g', 'Rudolph Nose');
INSERT INTO `items` VALUES ('82', '25', 'f', 'g', 'Love Eye');
INSERT INTO `items` VALUES ('83', '30', 'f', 'g', 'M. Sunglasses');
INSERT INTO `items` VALUES ('84', '22', 'f', 'g', 'Pet-01');
INSERT INTO `items` VALUES ('85', '32', 'f', 'g', 'Pet-02');
INSERT INTO `items` VALUES ('86', '19', 'f', 'g', '(RARE) Orbiting Moon');
INSERT INTO `items` VALUES ('87', '33', 'f', 'g', 'Pet-03');
INSERT INTO `items` VALUES ('88', '34', 'f', 'g', 'Pet-AD');
INSERT INTO `items` VALUES ('89', '37', 'f', 'g', 'Eagle');
INSERT INTO `items` VALUES ('90', '38', 'f', 'g', 'Parrot');
INSERT INTO `items` VALUES ('91', '39', 'f', 'g', 'Silver Hawk');
INSERT INTO `items` VALUES ('92', '43', 'f', 'g', 'Tears');
INSERT INTO `items` VALUES ('93', '41', 'f', 'g', '(RARE) Red Parrot');
INSERT INTO `items` VALUES ('94', '46', 'f', 'g', 'Shocked');
INSERT INTO `items` VALUES ('95', '48', 'f', 'g', 'Napoleon');
INSERT INTO `items` VALUES ('96', '47', 'f', 'g', 'WorldCup 2006');
INSERT INTO `items` VALUES ('97', '50', 'f', 'g', 'Nunchakus');
INSERT INTO `items` VALUES ('98', '59', 'f', 'g', 'Red Light Saber');
INSERT INTO `items` VALUES ('99', '55', 'f', 'g', 'Legendary Staff');
INSERT INTO `items` VALUES ('100', '60', 'f', 'g', 'Blue Light Saber');
INSERT INTO `items` VALUES ('101', '64', 'f', 'g', '(RARE) Candle Stick');
INSERT INTO `items` VALUES ('102', '62', 'f', 'g', '(RARE) Inca Bird');
INSERT INTO `items` VALUES ('103', '49', 'm', 'f', 'Bang Chun');
INSERT INTO `items` VALUES ('104', '50', 'm', 'f', 'Shield Spear');
INSERT INTO `items` VALUES ('105', '51', 'm', 'f', 'Golden Hammer');
INSERT INTO `items` VALUES ('106', '52', 'm', 'f', 'Japan Umbrella');
INSERT INTO `items` VALUES ('107', '57', 'm', 'f', 'Radar');
INSERT INTO `items` VALUES ('108', '58', 'm', 'f', 'Parasol');
INSERT INTO `items` VALUES ('109', '59', 'm', 'f', 'GM Hammer');
INSERT INTO `items` VALUES ('110', '60', 'm', 'f', 'Scorpion');
INSERT INTO `items` VALUES ('111', '63', 'm', 'f', 'Halloween Sword');
INSERT INTO `items` VALUES ('112', '65', 'm', 'f', 'Lion Axe');
INSERT INTO `items` VALUES ('113', '69', 'm', 'f', 'Fish Spear');
INSERT INTO `items` VALUES ('114', '68', 'm', 'f', 'Card Man');
INSERT INTO `items` VALUES ('115', '71', 'm', 'f', 'Bikini Tube 1');
INSERT INTO `items` VALUES ('116', '72', 'm', 'f', 'Bikini Tube 2');
INSERT INTO `items` VALUES ('117', '73', 'a', 'f', '(RARE) Easter Chicke');
INSERT INTO `items` VALUES ('118', '74', 'm', 'f', '(VERY RARE) WOWLG');
INSERT INTO `items` VALUES ('119', '76', 'm', 'f', 'Fortune');
INSERT INTO `items` VALUES ('120', '78', 'm', 'f', 'X-mas Tree');
INSERT INTO `items` VALUES ('121', '79', 'm', 'f', 'Halloween');
INSERT INTO `items` VALUES ('122', '80', 'm', 'f', 'Vampire Casket');
INSERT INTO `items` VALUES ('123', '81', 'm', 'f', 'Electric Shock');
INSERT INTO `items` VALUES ('124', '83', 'm', 'f', 'Magic Eye');
INSERT INTO `items` VALUES ('125', '86', 'm', 'f', 'Cupid Arrow');
INSERT INTO `items` VALUES ('126', '95', 'm', 'f', '(RARE) Peacock');
INSERT INTO `items` VALUES ('127', '118', 'm', 'f', 'Wedding Flower');
INSERT INTO `items` VALUES ('128', '103', 'm', 'f', 'Lightning Hammer');
INSERT INTO `items` VALUES ('129', '124', 'm', 'f', 'Robot X');
INSERT INTO `items` VALUES ('130', '130', 'm', 'f', 'Happy Stick');
INSERT INTO `items` VALUES ('131', '96', 'm', 'f', '(RARE) Valentine Cho');
INSERT INTO `items` VALUES ('132', '119', 'm', 'f', 'Wedding Balloon');
INSERT INTO `items` VALUES ('133', '132', 'm', 'f', 'Ghost');
INSERT INTO `items` VALUES ('134', '134', 'm', 'f', 'Rain Cloud');
INSERT INTO `items` VALUES ('135', '163', 'm', 'f', '(RARE) Lucky');
INSERT INTO `items` VALUES ('136', '138', 'm', 'f', 'Black Devil');
INSERT INTO `items` VALUES ('137', '164', 'm', 'f', 'Bazooka');
INSERT INTO `items` VALUES ('138', '20', 'm', 'h', '(RARE) Friendship');
INSERT INTO `items` VALUES ('139', '58', 'm', 'h', 'Riding Hat');
INSERT INTO `items` VALUES ('140', '69', 'm', 'h', 'Fireman Helmet');
INSERT INTO `items` VALUES ('141', '72', 'm', 'h', 'Frankenstein');
INSERT INTO `items` VALUES ('142', '74', 'm', 'h', 'Angel of Death');
INSERT INTO `items` VALUES ('143', '75', 'm', 'h', 'Metallic Armor');
INSERT INTO `items` VALUES ('144', '76', 'm', 'h', 'Scarecrow Boy');
INSERT INTO `items` VALUES ('145', '77', 'm', 'h', 'Creature Violet');
INSERT INTO `items` VALUES ('146', '78', 'm', 'h', 'Prince Mermaid');
INSERT INTO `items` VALUES ('147', '81', 'm', 'h', 'Viking');
INSERT INTO `items` VALUES ('148', '83', 'm', 'h', 'Elvis Hair');
INSERT INTO `items` VALUES ('149', '84', 'm', 'h', 'Statue of Liberty');
INSERT INTO `items` VALUES ('150', '90', 'm', 'h', 'Indian Chief Hair');
INSERT INTO `items` VALUES ('151', '91', 'm', 'h', 'Jr. Wizard');
INSERT INTO `items` VALUES ('152', '92', 'm', 'h', 'The Great General');
INSERT INTO `items` VALUES ('153', '93', 'm', 'h', 'General');
INSERT INTO `items` VALUES ('154', '94', 'm', 'h', 'Kangsi');
INSERT INTO `items` VALUES ('155', '95', 'm', 'h', 'Archangel II');
INSERT INTO `items` VALUES ('156', '96', 'm', 'h', 'Insect Warrior');
INSERT INTO `items` VALUES ('157', '97', 'm', 'h', 'Black Wizard');
INSERT INTO `items` VALUES ('158', '98', 'm', 'h', 'Anubis');
INSERT INTO `items` VALUES ('159', '99', 'm', 'h', '(RARE) Snowman');
INSERT INTO `items` VALUES ('160', '100', 'm', 'h', 'Medic');
INSERT INTO `items` VALUES ('161', '101', 'm', 'h', 'Cyber Rabbit');
INSERT INTO `items` VALUES ('162', '109', 'm', 'h', 'Erap Hair');
INSERT INTO `items` VALUES ('163', '110', 'm', 'h', 'Katipunero Hat');
INSERT INTO `items` VALUES ('164', '111', 'm', 'h', 'Salakot');
INSERT INTO `items` VALUES ('165', '112', 'm', 'h', 'Legendary Helm');
INSERT INTO `items` VALUES ('166', '113', 'm', 'h', 'Dragon Helm');
INSERT INTO `items` VALUES ('167', '114', 'm', 'h', 'Thunderhawk Mask');
INSERT INTO `items` VALUES ('168', '119', 'm', 'h', 'Bat Mask');
INSERT INTO `items` VALUES ('169', '120', 'm', 'h', '(RARE) Invisible');
INSERT INTO `items` VALUES ('170', '121', 'm', 'h', '(RARE) WOWLG');
INSERT INTO `items` VALUES ('171', '122', 'm', 'h', 'Silver Moth');
INSERT INTO `items` VALUES ('172', '123', 'm', 'h', 'Magic Pierrot');
INSERT INTO `items` VALUES ('173', '124', 'm', 'h', 'Dios');
INSERT INTO `items` VALUES ('174', '125', 'm', 'h', 'Guardsman');
INSERT INTO `items` VALUES ('175', '126', 'm', 'h', 'Super Fly');
INSERT INTO `items` VALUES ('176', '128', 'm', 'h', 'Skeleton Halloween');
INSERT INTO `items` VALUES ('177', '130', 'm', 'h', 'Lion Mask');
INSERT INTO `items` VALUES ('178', '131', 'm', 'h', 'Knight');
INSERT INTO `items` VALUES ('179', '132', 'm', 'h', 'Nightmare');
INSERT INTO `items` VALUES ('180', '133', 'm', 'h', 'Observador');
INSERT INTO `items` VALUES ('181', '134', 'm', 'h', 'Nyx Hero');
INSERT INTO `items` VALUES ('182', '135', 'm', 'h', 'Blade');
INSERT INTO `items` VALUES ('183', '137', 'm', 'h', '(RARE) Chinese Pierr');
INSERT INTO `items` VALUES ('184', '138', 'm', 'h', '(RARE) Fish Warrior');
INSERT INTO `items` VALUES ('185', '139', 'm', 'h', 'Poseidon');
INSERT INTO `items` VALUES ('186', '140', 'm', 'h', 'Future Cop');
INSERT INTO `items` VALUES ('187', '141', 'm', 'h', '(RARE) Valentine 200');
INSERT INTO `items` VALUES ('188', '142', 'm', 'h', 'Lion King');
INSERT INTO `items` VALUES ('189', '143', 'm', 'h', 'Love Cupid');
INSERT INTO `items` VALUES ('190', '144', 'm', 'h', 'Short Track');
INSERT INTO `items` VALUES ('191', '145', 'm', 'h', 'Norway Warrior');
INSERT INTO `items` VALUES ('192', '146', 'm', 'h', 'Honey Bee');
INSERT INTO `items` VALUES ('193', '147', 'm', 'h', '(RARE) Easter Bunny');
INSERT INTO `items` VALUES ('194', '148', 'm', 'h', '(RARE) Celestial War');
INSERT INTO `items` VALUES ('195', '149', 'm', 'h', 'Ent Warrior');
INSERT INTO `items` VALUES ('196', '150', 'm', 'h', 'Cleric');
INSERT INTO `items` VALUES ('197', '285', 'm', 'h', 'GM');
INSERT INTO `items` VALUES ('198', '632', 'm', 'h', 'DN');
INSERT INTO `items` VALUES ('199', '3', 'f', 'h', 'Flower Pin');
INSERT INTO `items` VALUES ('200', '5', 'f', 'h', 'Pirate Hat');
INSERT INTO `items` VALUES ('201', '6', 'f', 'h', 'Pucca Hair');
INSERT INTO `items` VALUES ('202', '10', 'f', 'h', 'RedDevil Hood');
INSERT INTO `items` VALUES ('203', '13', 'f', 'h', '(RARE) Soccer Hat');
INSERT INTO `items` VALUES ('204', '21', 'f', 'h', '(RARE) Friendship');
INSERT INTO `items` VALUES ('205', '24', 'f', 'h', 'Marine Helmet');
INSERT INTO `items` VALUES ('206', '31', 'f', 'h', 'Indian Hair');
INSERT INTO `items` VALUES ('207', '33', 'f', 'h', 'Hawaiian Hair');
INSERT INTO `items` VALUES ('208', '36', 'f', 'h', 'Crocodile');
INSERT INTO `items` VALUES ('209', '49', 'f', 'h', 'Baseball Cap');
INSERT INTO `items` VALUES ('210', '53', 'f', 'h', 'Hip-Hop Hair');
INSERT INTO `items` VALUES ('211', '57', 'f', 'h', 'Cat Head');
INSERT INTO `items` VALUES ('212', '72', 'f', 'h', 'Chief Hair');
INSERT INTO `items` VALUES ('213', '73', 'f', 'h', 'Fireman Helmet');
INSERT INTO `items` VALUES ('214', '74', 'f', 'h', 'Panda Hat');
INSERT INTO `items` VALUES ('215', '76', 'f', 'h', 'Frankenstein');
INSERT INTO `items` VALUES ('216', '78', 'f', 'h', 'Angel of Death');
INSERT INTO `items` VALUES ('217', '79', 'f', 'h', 'Metallic Armor');
INSERT INTO `items` VALUES ('218', '80', 'f', 'h', 'Scarecrow Girl');
INSERT INTO `items` VALUES ('219', '81', 'f', 'h', 'Creature Pink');
INSERT INTO `items` VALUES ('220', '82', 'f', 'h', 'Princess Mermaid');
INSERT INTO `items` VALUES ('221', '85', 'f', 'h', 'Viking');
INSERT INTO `items` VALUES ('222', '87', 'f', 'h', 'Elvis Hair');
INSERT INTO `items` VALUES ('223', '90', 'f', 'h', 'Musketeer');
INSERT INTO `items` VALUES ('224', '94', 'f', 'h', 'Indian Chief(H)');
INSERT INTO `items` VALUES ('225', '96', 'f', 'h', 'The Great General');
INSERT INTO `items` VALUES ('226', '97', 'f', 'h', 'General');
INSERT INTO `items` VALUES ('227', '98', 'f', 'h', 'Kangsi');
INSERT INTO `items` VALUES ('228', '99', 'f', 'h', 'Archangel II');
INSERT INTO `items` VALUES ('229', '100', 'f', 'h', 'Insect Warrior');
INSERT INTO `items` VALUES ('230', '101', 'f', 'h', 'Black Wizard');
INSERT INTO `items` VALUES ('231', '102', 'f', 'h', 'Anubis');
INSERT INTO `items` VALUES ('232', '103', 'f', 'h', '(RARE) Snowman');
INSERT INTO `items` VALUES ('233', '104', 'f', 'h', 'Medic');
INSERT INTO `items` VALUES ('234', '105', 'f', 'h', 'Cyber Rabbit');
INSERT INTO `items` VALUES ('235', '106', 'f', 'h', 'Uma Hair');
INSERT INTO `items` VALUES ('236', '107', 'f', 'h', 'Bat Mask');
INSERT INTO `items` VALUES ('237', '108', 'f', 'h', 'Ski Costume');
INSERT INTO `items` VALUES ('238', '110', 'f', 'h', 'Furry Cat Party Dres');
INSERT INTO `items` VALUES ('239', '111', 'f', 'h', 'Furry Puppy Party Dr');
INSERT INTO `items` VALUES ('240', '115', 'f', 'h', 'Silk Helm');
INSERT INTO `items` VALUES ('241', '117', 'f', 'h', 'Dragon Helm');
INSERT INTO `items` VALUES ('242', '121', 'f', 'h', '(RARE) DragonBound 1');
INSERT INTO `items` VALUES ('243', '125', 'f', 'h', '(RARE) WOWLG');
INSERT INTO `items` VALUES ('244', '126', 'f', 'h', 'Silver Moth');
INSERT INTO `items` VALUES ('245', '127', 'f', 'h', 'Magic Pierrot');
INSERT INTO `items` VALUES ('246', '128', 'f', 'h', 'Dios');
INSERT INTO `items` VALUES ('247', '130', 'f', 'h', 'Super Fly');
INSERT INTO `items` VALUES ('248', '132', 'f', 'h', 'Skeleton Halloween');
INSERT INTO `items` VALUES ('249', '134', 'f', 'h', 'Lion Mask');
INSERT INTO `items` VALUES ('250', '135', 'f', 'h', 'Knight');
INSERT INTO `items` VALUES ('251', '136', 'f', 'h', 'Nightmare');
INSERT INTO `items` VALUES ('252', '137', 'f', 'h', 'Observador');
INSERT INTO `items` VALUES ('253', '138', 'f', 'h', 'Nyx Hero');
INSERT INTO `items` VALUES ('254', '139', 'f', 'h', 'Blade');
INSERT INTO `items` VALUES ('255', '140', 'f', 'h', 'Alice');
INSERT INTO `items` VALUES ('256', '141', 'f', 'h', '(RARE) Chinese Pierr');
INSERT INTO `items` VALUES ('257', '142', 'f', 'h', '(RARE) Fish Warrior');
INSERT INTO `items` VALUES ('258', '143', 'f', 'h', 'Poseidon');
INSERT INTO `items` VALUES ('259', '144', 'f', 'h', 'Future Cop');
INSERT INTO `items` VALUES ('260', '145', 'f', 'h', '(RARE) Valentine 200');
INSERT INTO `items` VALUES ('261', '147', 'f', 'h', 'Love Cupid');
INSERT INTO `items` VALUES ('262', '149', 'f', 'h', 'Norway Warrior');
INSERT INTO `items` VALUES ('263', '150', 'f', 'h', 'Honey Bee');
INSERT INTO `items` VALUES ('264', '151', 'f', 'h', '(RARE) Easter Bunny');
INSERT INTO `items` VALUES ('265', '122', 'f', 'h', '(RARE) DragonBound 2');
INSERT INTO `items` VALUES ('266', '19', 'm', 'b', '(RARE) FriendShip A');
INSERT INTO `items` VALUES ('267', '65', 'm', 'b', 'Muay Thai Clothing');
INSERT INTO `items` VALUES ('268', '66', 'm', 'b', 'Elf Clothing A');
INSERT INTO `items` VALUES ('269', '67', 'm', 'b', 'Ice Hockey Uniform');
INSERT INTO `items` VALUES ('270', '68', 'm', 'b', 'Rocker Suit');
INSERT INTO `items` VALUES ('271', '69', 'm', 'b', 'Kendo Uniform');
INSERT INTO `items` VALUES ('272', '70', 'm', 'b', 'Fireman Uniform');
INSERT INTO `items` VALUES ('273', '73', 'm', 'b', 'Frankenstein');
INSERT INTO `items` VALUES ('274', '74', 'm', 'b', 'Skeleton');
INSERT INTO `items` VALUES ('275', '75', 'm', 'b', 'Angel of Death');
INSERT INTO `items` VALUES ('276', '76', 'm', 'b', 'Metallic Armor');
INSERT INTO `items` VALUES ('277', '77', 'm', 'b', 'Scarecrow Boy');
INSERT INTO `items` VALUES ('278', '78', 'm', 'b', 'Creature Violet');
INSERT INTO `items` VALUES ('279', '79', 'm', 'b', 'Prince Mermaid');
INSERT INTO `items` VALUES ('280', '80', 'm', 'b', 'Ocean King');
INSERT INTO `items` VALUES ('281', '81', 'm', 'b', 'Dracula');
INSERT INTO `items` VALUES ('282', '82', 'm', 'b', 'Viking');
INSERT INTO `items` VALUES ('283', '83', 'm', 'b', 'Elvis Jumpsuit');
INSERT INTO `items` VALUES ('284', '84', 'm', 'b', 'Statue of Liberty');
INSERT INTO `items` VALUES ('285', '85', 'm', 'b', 'Latin Clothing');
INSERT INTO `items` VALUES ('286', '86', 'm', 'b', 'Musketeer');
INSERT INTO `items` VALUES ('287', '87', 'm', 'b', 'Persian king');
INSERT INTO `items` VALUES ('288', '89', 'm', 'b', 'Shamanist');
INSERT INTO `items` VALUES ('289', '90', 'm', 'b', 'Indian Chief');
INSERT INTO `items` VALUES ('290', '91', 'm', 'b', 'Celestial Warrior');
INSERT INTO `items` VALUES ('291', '92', 'm', 'b', 'The Great General');
INSERT INTO `items` VALUES ('292', '93', 'm', 'b', 'General');
INSERT INTO `items` VALUES ('293', '94', 'm', 'b', 'Kangsi');
INSERT INTO `items` VALUES ('294', '95', 'm', 'b', 'Archangel II');
INSERT INTO `items` VALUES ('295', '96', 'm', 'b', 'Insect Warrior');
INSERT INTO `items` VALUES ('296', '97', 'm', 'b', 'Black Wizard');
INSERT INTO `items` VALUES ('297', '98', 'm', 'b', 'Anubis');
INSERT INTO `items` VALUES ('298', '99', 'm', 'b', '(RARE) Snowman');
INSERT INTO `items` VALUES ('299', '100', 'm', 'b', 'Medic');
INSERT INTO `items` VALUES ('300', '101', 'm', 'b', 'Cyber Rabbit');
INSERT INTO `items` VALUES ('301', '103', 'm', 'b', 'Cyber Police');
INSERT INTO `items` VALUES ('302', '108', 'm', 'b', 'Cleric');
INSERT INTO `items` VALUES ('303', '111', 'm', 'b', 'Legendary Armor');
INSERT INTO `items` VALUES ('304', '112', 'm', 'b', 'Dragon Armor');
INSERT INTO `items` VALUES ('305', '113', 'm', 'b', 'Thunderhawk Armor');
INSERT INTO `items` VALUES ('306', '118', 'm', 'b', 'Batman');
INSERT INTO `items` VALUES ('307', '119', 'm', 'b', '(RARE) Invisible');
INSERT INTO `items` VALUES ('308', '121', 'm', 'b', '(RARE) WOWLG');
INSERT INTO `items` VALUES ('309', '122', 'm', 'b', 'Silver Moth');
INSERT INTO `items` VALUES ('310', '123', 'm', 'b', 'Magic Pierrot');
INSERT INTO `items` VALUES ('311', '126', 'm', 'b', 'Super Fly');
INSERT INTO `items` VALUES ('312', '127', 'm', 'b', 'Bikini');
INSERT INTO `items` VALUES ('313', '128', 'm', 'b', 'Skeleton Halloween');
INSERT INTO `items` VALUES ('314', '131', 'm', 'b', 'Knight');
INSERT INTO `items` VALUES ('315', '132', 'm', 'b', 'Nightmare');
INSERT INTO `items` VALUES ('316', '133', 'm', 'b', 'Observador');
INSERT INTO `items` VALUES ('317', '134', 'm', 'b', 'Nyx Hero');
INSERT INTO `items` VALUES ('318', '135', 'm', 'b', 'Blade');
INSERT INTO `items` VALUES ('319', '137', 'm', 'b', '(RARE) Chinese Pierr');
INSERT INTO `items` VALUES ('320', '138', 'm', 'b', '(RARE) Fish Warrior');
INSERT INTO `items` VALUES ('321', '139', 'm', 'b', 'Poseidon');
INSERT INTO `items` VALUES ('322', '140', 'm', 'b', 'Future Cop');
INSERT INTO `items` VALUES ('323', '141', 'm', 'b', '(RARE) Valentine 200');
INSERT INTO `items` VALUES ('324', '143', 'm', 'b', 'Love Cupid');
INSERT INTO `items` VALUES ('325', '146', 'm', 'b', 'Honey Bee');
INSERT INTO `items` VALUES ('326', '147', 'm', 'b', '(RARE) Easter Bunny');
INSERT INTO `items` VALUES ('327', '285', 'm', 'b', 'GM');
INSERT INTO `items` VALUES ('328', '632', 'm', 'b', 'DN');
INSERT INTO `items` VALUES ('329', '20', 'f', 'b', '(RARE) Friendship A');
INSERT INTO `items` VALUES ('330', '68', 'f', 'b', 'Rocker Suit');
INSERT INTO `items` VALUES ('331', '69', 'f', 'b', 'Kendo Uniform');
INSERT INTO `items` VALUES ('332', '70', 'f', 'b', 'Fireman Uniform');
INSERT INTO `items` VALUES ('333', '73', 'f', 'b', 'Frankenstein');
INSERT INTO `items` VALUES ('334', '74', 'f', 'b', 'Skeleton');
INSERT INTO `items` VALUES ('335', '75', 'f', 'b', 'Angel of Death');
INSERT INTO `items` VALUES ('336', '76', 'f', 'b', 'Metallic Armor');
INSERT INTO `items` VALUES ('337', '77', 'f', 'b', 'Scarecrow Girl');
INSERT INTO `items` VALUES ('338', '78', 'f', 'b', 'Creature Pink');
INSERT INTO `items` VALUES ('339', '79', 'f', 'b', 'Princess Mermaid');
INSERT INTO `items` VALUES ('340', '80', 'f', 'b', 'Sky Goddess');
INSERT INTO `items` VALUES ('341', '81', 'f', 'b', 'Dracula');
INSERT INTO `items` VALUES ('342', '82', 'f', 'b', 'Viking');
INSERT INTO `items` VALUES ('343', '83', 'f', 'b', 'Elvis Jumpsuit');
INSERT INTO `items` VALUES ('344', '84', 'f', 'b', 'Statue of Liberty');
INSERT INTO `items` VALUES ('345', '89', 'f', 'b', 'Shamanist');
INSERT INTO `items` VALUES ('346', '90', 'f', 'b', 'Indian Chief');
INSERT INTO `items` VALUES ('347', '91', 'f', 'b', 'Jr. Wizard');
INSERT INTO `items` VALUES ('348', '92', 'f', 'b', 'The Great General');
INSERT INTO `items` VALUES ('349', '93', 'f', 'b', 'General');
INSERT INTO `items` VALUES ('350', '94', 'f', 'b', 'Kangsi');
INSERT INTO `items` VALUES ('351', '95', 'f', 'b', 'Archangel II');
INSERT INTO `items` VALUES ('352', '96', 'f', 'b', 'Insect Warrior');
INSERT INTO `items` VALUES ('353', '97', 'f', 'b', 'Black Wizard');
INSERT INTO `items` VALUES ('354', '98', 'f', 'b', 'Anubis');
INSERT INTO `items` VALUES ('355', '99', 'f', 'b', '(RARE) Snowman');
INSERT INTO `items` VALUES ('356', '100', 'f', 'b', 'Medic');
INSERT INTO `items` VALUES ('357', '101', 'f', 'b', 'Cyber Rabbit');
INSERT INTO `items` VALUES ('358', '102', 'f', 'b', 'Napoleon');
INSERT INTO `items` VALUES ('359', '103', 'f', 'b', 'Mr. Sushi');
INSERT INTO `items` VALUES ('360', '104', 'f', 'b', 'Ski Costume');
INSERT INTO `items` VALUES ('361', '110', 'f', 'b', 'Silk Armor');
INSERT INTO `items` VALUES ('362', '112', 'f', 'b', 'Dragon Armor');
INSERT INTO `items` VALUES ('363', '119', 'f', 'b', 'Cyber Police');
INSERT INTO `items` VALUES ('364', '121', 'f', 'b', '(RARE) WOWLG');
INSERT INTO `items` VALUES ('365', '122', 'f', 'b', 'Silver Moth');
INSERT INTO `items` VALUES ('366', '126', 'f', 'b', 'Super Fly');
INSERT INTO `items` VALUES ('367', '127', 'f', 'b', 'Bikini');
INSERT INTO `items` VALUES ('368', '128', 'f', 'b', 'Skeleton Halloween');
INSERT INTO `items` VALUES ('369', '130', 'f', 'b', 'Lion Mask');
INSERT INTO `items` VALUES ('370', '131', 'f', 'b', 'Knight');
INSERT INTO `items` VALUES ('371', '132', 'f', 'b', 'Nightmare');
INSERT INTO `items` VALUES ('372', '133', 'f', 'b', 'Observador');
INSERT INTO `items` VALUES ('373', '134', 'f', 'b', 'Nyx Hero');
INSERT INTO `items` VALUES ('374', '135', 'f', 'b', 'Blade');
INSERT INTO `items` VALUES ('375', '137', 'f', 'b', '(RARE) Chinese Pierr');
INSERT INTO `items` VALUES ('376', '138', 'f', 'b', '(RARE) Fish Warrior');
INSERT INTO `items` VALUES ('377', '139', 'f', 'b', 'Poseidon');
INSERT INTO `items` VALUES ('378', '140', 'f', 'b', 'Future Cop');
INSERT INTO `items` VALUES ('379', '141', 'f', 'b', '(RARE) Valentine 200');
INSERT INTO `items` VALUES ('380', '142', 'f', 'b', 'Lion King');
INSERT INTO `items` VALUES ('381', '143', 'f', 'b', 'Love Cupid');
INSERT INTO `items` VALUES ('382', '147', 'f', 'b', '(RARE) Easter Bunny');
INSERT INTO `items` VALUES ('383', '148', 'f', 'b', 'Cheap N Lookin Good ');
INSERT INTO `items` VALUES ('384', '149', 'f', 'b', 'Cheap N Lookin Good ');
INSERT INTO `items` VALUES ('385', '405', 'm', 'f', 'GM');
INSERT INTO `items` VALUES ('387', '684', 'm', 'f', 'Facebook');
INSERT INTO `items` VALUES ('388', '1000', 'm', 'f', '(RARE) Beta Flag');
INSERT INTO `items` VALUES ('389', '4805', 'a', '1', 'Magic Circle');
INSERT INTO `items` VALUES ('390', '4806', 'a', '1', 'Cave');
INSERT INTO `items` VALUES ('391', '4807', 'a', '1', 'Green Field');
INSERT INTO `items` VALUES ('392', '4812', 'a', '1', 'Witch Village');
INSERT INTO `items` VALUES ('393', '4815', 'a', '1', '(RARE) XMAS');
INSERT INTO `items` VALUES ('394', '4816', 'a', '1', '(RARE) Cash Charger ');
INSERT INTO `items` VALUES ('395', '4818', 'a', '1', '(RARE) Igloo');
INSERT INTO `items` VALUES ('396', '4821', 'a', '1', 'Force');
INSERT INTO `items` VALUES ('397', '4824', 'a', '1', '(RARE) XMAS Sky');
INSERT INTO `items` VALUES ('399', '4827', 'a', '1', '(RARE) XMAS Santa');
INSERT INTO `items` VALUES ('400', '4829', 'a', '1', 'Holy Night');
INSERT INTO `items` VALUES ('401', '4836', 'a', '1', 'Sunset');
INSERT INTO `items` VALUES ('402', '4838', 'a', '1', 'Waterfall');
INSERT INTO `items` VALUES ('403', '4840', 'a', '1', 'Bamboo Forest');
INSERT INTO `items` VALUES ('404', '4843', 'a', '1', 'Chinese Wall');
INSERT INTO `items` VALUES ('405', '4845', 'a', '1', 'Ice Castle');
INSERT INTO `items` VALUES ('406', '4847', 'a', '1', 'Rainbow Dream');
INSERT INTO `items` VALUES ('407', '4848', 'a', '1', 'Dreamy Cloud');
INSERT INTO `items` VALUES ('408', '4850', 'a', '1', 'Full Moon Night');
INSERT INTO `items` VALUES ('409', '4852', 'a', '1', 'Snowy Mountain');
INSERT INTO `items` VALUES ('410', '4857', 'a', '1', 'Forest Path');
INSERT INTO `items` VALUES ('411', '4859', 'a', '1', 'Water Mill');
INSERT INTO `items` VALUES ('412', '4861', 'a', '1', 'Heavenly Lake');
INSERT INTO `items` VALUES ('413', '4863', 'a', '1', 'Magical Lake');
INSERT INTO `items` VALUES ('414', '4865', 'a', '1', 'Heart Land');
INSERT INTO `items` VALUES ('415', '4867', 'a', '1', 'Lake Jurassic');
INSERT INTO `items` VALUES ('416', '4869', 'a', '1', '(RARE) Romantic Gard');
INSERT INTO `items` VALUES ('417', '4871', 'a', '1', '(RARE) Mount Jurassi');
INSERT INTO `items` VALUES ('418', '4872', 'a', '1', '(RARE) WOW LG');
INSERT INTO `items` VALUES ('419', '4873', 'a', '1', 'Maple Road');
INSERT INTO `items` VALUES ('420', '4875', 'a', '1', '(RARE) Airplane');
INSERT INTO `items` VALUES ('421', '4808', 'a', '2', 'Bat');
INSERT INTO `items` VALUES ('422', '4809', 'a', '2', 'Spider');
INSERT INTO `items` VALUES ('423', '4810', 'a', '2', 'Larva');
INSERT INTO `items` VALUES ('424', '4811', 'a', '2', 'Rose');
INSERT INTO `items` VALUES ('425', '4813', 'a', '2', '(RARE) Pumpkin');
INSERT INTO `items` VALUES ('426', '4814', 'a', '2', 'Snoman');
INSERT INTO `items` VALUES ('427', '4817', 'a', '2', '(RARE) Cash Charger ');
INSERT INTO `items` VALUES ('428', '4819', 'a', '2', 'Heart');
INSERT INTO `items` VALUES ('429', '4820', 'a', '2', 'Fireworks');
INSERT INTO `items` VALUES ('430', '4822', 'a', '2', 'Lightning');
INSERT INTO `items` VALUES ('431', '4823', 'a', '2', '(RARE) XMAS Gifts');
INSERT INTO `items` VALUES ('432', '4825', 'a', '2', '(RARE) XMAS Lights');
INSERT INTO `items` VALUES ('433', '4828', 'a', '2', '(RARE) Bells');
INSERT INTO `items` VALUES ('434', '4830', 'a', '2', '(RARE) Lights');
INSERT INTO `items` VALUES ('435', '4837', 'a', '2', '(RARE) Buggy Crab');
INSERT INTO `items` VALUES ('436', '4839', 'a', '2', 'Butterflies');
INSERT INTO `items` VALUES ('437', '4841', 'a', '2', 'Yellow Sparrow');
INSERT INTO `items` VALUES ('438', '4844', 'a', '2', 'Chinese Lamp');
INSERT INTO `items` VALUES ('439', '4846', 'a', '2', 'Penguin');
INSERT INTO `items` VALUES ('440', '4849', 'a', '2', 'Heart in the sky');
INSERT INTO `items` VALUES ('441', '4851', 'a', '2', 'Howling Wolf');
INSERT INTO `items` VALUES ('442', '4853', 'a', '2', 'Dandelion Breeze');
INSERT INTO `items` VALUES ('443', '4855', 'a', '2', '(RARE) Happy Easter');
INSERT INTO `items` VALUES ('444', '4856', 'a', '2', '(RARE) Buggy Frog');
INSERT INTO `items` VALUES ('445', '4858', 'a', '2', '(RARE) Stem of Magic');
INSERT INTO `items` VALUES ('446', '4860', 'a', '2', 'Love Mail');
INSERT INTO `items` VALUES ('447', '4862', 'a', '2', 'Magic Bubbles');
INSERT INTO `items` VALUES ('448', '4864', 'a', '2', 'Apricot Flower');
INSERT INTO `items` VALUES ('449', '4866', 'a', '2', 'Bell Ornament');
INSERT INTO `items` VALUES ('450', '4868', 'a', '2', 'Puppy');
INSERT INTO `items` VALUES ('451', '4870', 'a', '2', 'Digi Cam');
INSERT INTO `items` VALUES ('452', '4874', 'a', '2', 'Korean Sparrow');
INSERT INTO `items` VALUES ('453', '4876', 'a', '2', 'Pacific Gull');
INSERT INTO `items` VALUES ('454', '4983', 'a', '1', '(RARE) Cash Charger');
INSERT INTO `items` VALUES ('455', '304', 'm', 'h', 'Frozen Warrior');
INSERT INTO `items` VALUES ('456', '304', 'f', 'h', 'Frozen Warrior');
INSERT INTO `items` VALUES ('457', '304', 'm', 'b', 'Frozen Warrior');
INSERT INTO `items` VALUES ('458', '304', 'f', 'b', 'Frozen Warrior');
INSERT INTO `items` VALUES ('459', '40', 'm', 'g', 'Phoenix');
INSERT INTO `items` VALUES ('460', '149', 'm', 'g', 'Frozen Warrior');
INSERT INTO `items` VALUES ('461', '40', 'f', 'g', 'Phoenix');
INSERT INTO `items` VALUES ('462', '149', 'f', 'g', 'Frozen Warrior');
INSERT INTO `items` VALUES ('463', '422', 'm', 'f', 'Frozen Warrior');
INSERT INTO `items` VALUES ('464', '9000', 'a', 'x', 'Power User');
INSERT INTO `items` VALUES ('465', '3000', 'a', '1', 'Power User');
INSERT INTO `items` VALUES ('466', '3001', 'a', '1', '(RARE) Falling Stars');
INSERT INTO `items` VALUES ('468', '3003', 'a', '1', '(RARE) Green Stars');
INSERT INTO `items` VALUES ('469', '3004', 'a', '1', '(RARE) Dubstep');
INSERT INTO `items` VALUES ('470', '3005', 'm', 'h', 'Snow Devil Head');
INSERT INTO `items` VALUES ('471', '3006', 'm', 'h', '(SET) Luffy&apos;s H');
INSERT INTO `items` VALUES ('472', '3007', 'm', 'b', '(SET) Luffy&apos;s B');
INSERT INTO `items` VALUES ('473', '3008', 'a', 'f', '(SET) Luffy&apos;s F');
INSERT INTO `items` VALUES ('474', '3009', 'a', '1', '(SET) Luffy&apos;s B');
INSERT INTO `items` VALUES ('475', '3010', 'a', '1', 'Peru');
INSERT INTO `items` VALUES ('476', '61', 'a', 'g', 'Blue Phoenix');
INSERT INTO `items` VALUES ('477', '130', 'a', 'g', 'Skull Staff');
INSERT INTO `items` VALUES ('478', '3011', 'a', '1', 'Argentina');
INSERT INTO `items` VALUES ('479', '3012', 'a', '1', 'Spain');
INSERT INTO `items` VALUES ('480', '3013', 'a', '1', 'Italy');
INSERT INTO `items` VALUES ('481', '3014', 'a', '1', 'Philippines');
INSERT INTO `items` VALUES ('482', '3015', 'a', '1', 'USA');
INSERT INTO `items` VALUES ('483', '3016', 'a', '1', 'Japan');
INSERT INTO `items` VALUES ('484', '3017', 'a', '1', 'Bolivia');
INSERT INTO `items` VALUES ('485', '3018', 'a', '1', 'Chile');
INSERT INTO `items` VALUES ('486', '3019', 'a', '1', 'Brazil');
INSERT INTO `items` VALUES ('487', '3020', 'a', '1', 'Venezuela');
INSERT INTO `items` VALUES ('488', '3021', 'a', '1', 'Vietnam');
INSERT INTO `items` VALUES ('489', '3022', 'a', '1', 'Mexico');
INSERT INTO `items` VALUES ('490', '3023', 'a', '1', 'Colombia');
INSERT INTO `items` VALUES ('491', '3024', 'a', '1', 'Canada');
INSERT INTO `items` VALUES ('492', '3025', 'a', '1', 'Machu Picchu');
INSERT INTO `items` VALUES ('493', '3026', 'a', '1', 'Plane');
INSERT INTO `items` VALUES ('494', '3027', 'm', 'b', 'Snow Devil Body');
INSERT INTO `items` VALUES ('495', '3028', 'a', '1', 'BabolaT');
INSERT INTO `items` VALUES ('496', '3029', 'a', 'g', '(SET) Luffy&apos;s S');
INSERT INTO `items` VALUES ('497', '3030', 'a', '2', '(SET) Luffy&apos;s M');
INSERT INTO `items` VALUES ('498', '3031', 'f', 'h', 'Pink Devil Head');
INSERT INTO `items` VALUES ('499', '3032', 'a', 'f', 'Love Monkey');
INSERT INTO `items` VALUES ('500', '3033', 'f', 'b', 'Pink Devil Body');
INSERT INTO `items` VALUES ('501', '3034', 'a', '1', 'United Kingdom');
INSERT INTO `items` VALUES ('502', '3035', 'a', '1', '(RARE) Equalizer');
INSERT INTO `items` VALUES ('503', '3036', 'a', '1', '(RARE) Slend');
INSERT INTO `items` VALUES ('504', '3037', 'a', '1', '(RARE) Slender');
INSERT INTO `items` VALUES ('505', '3038', 'a', 'f', 'Zombie Pirate');
INSERT INTO `items` VALUES ('506', '3039', 'a', '1', 'Rocker Boy');
INSERT INTO `items` VALUES ('507', '3040', 'a', '2', 'Rocker Boy');
INSERT INTO `items` VALUES ('508', '3041', 'a', 'f', 'Rocker Boy');
INSERT INTO `items` VALUES ('509', '3042', 'a', 'f', 'Pala');
INSERT INTO `items` VALUES ('510', '3043', 'a', 'f', 'Dragon Murk');
INSERT INTO `items` VALUES ('514', '3047', 'a', '1', 'Arrow');
INSERT INTO `items` VALUES ('515', '3048', 'a', '1', 'Night Thunder');
INSERT INTO `items` VALUES ('516', '3049', 'a', '1', 'White Force');
INSERT INTO `items` VALUES ('517', '3050', 'a', '1', 'Summer');
INSERT INTO `items` VALUES ('518', '3051', 'a', '1', 'Rave');
INSERT INTO `items` VALUES ('519', '3052', 'a', 'f', 'Gift');
INSERT INTO `items` VALUES ('520', '3053', 'a', 'f', 'Shenlong');
INSERT INTO `items` VALUES ('521', '3054', 'm', 'g', 'Legendary Phoenix');
INSERT INTO `items` VALUES ('522', '3055', 'f', 'g', 'Legendary Phoenix');
INSERT INTO `items` VALUES ('523', '3056', 'a', '1', 'Cosmo');
INSERT INTO `items` VALUES ('524', '3057', 'a', '1', 'Ifrit');
INSERT INTO `items` VALUES ('525', '3058', 'f', 'b', 'Dark Witch');
INSERT INTO `items` VALUES ('526', '3059', 'f', 'h', 'Dark Witch');
INSERT INTO `items` VALUES ('527', '3060', 'a', '1', 'Blue Force');
INSERT INTO `items` VALUES ('528', '3061', 'a', '2', 'Stereo');
INSERT INTO `items` VALUES ('529', '3062', 'a', '2', 'Cham Kyuubi');
INSERT INTO `items` VALUES ('530', '3063', 'a', '1', 'Milotic');
INSERT INTO `items` VALUES ('531', '3064', 'a', '1', 'Barcelona');
INSERT INTO `items` VALUES ('532', '3065', 'a', '1', 'Real Madrid');
INSERT INTO `items` VALUES ('533', '3066', 'a', '1', 'Poker');
INSERT INTO `items` VALUES ('534', '3067', 'a', '1', 'Angry Birds');
INSERT INTO `items` VALUES ('535', '3068', 'a', 'g', 'D-Balls');
INSERT INTO `items` VALUES ('536', '3069', 'a', '1', 'Chelsea');
INSERT INTO `items` VALUES ('537', '3070', 'f', 'h', '(SET) Vane-moon');
INSERT INTO `items` VALUES ('538', '3071', 'f', 'b', '(SET) Vane-moon');
INSERT INTO `items` VALUES ('539', '3072', 'a', 'g', '(SET) Vane-moon');
INSERT INTO `items` VALUES ('540', '3073', 'a', 'f', '(SET) Vane-moon');
INSERT INTO `items` VALUES ('541', '3074', 'a', '2', 'Shin Chan');
INSERT INTO `items` VALUES ('542', '3075', 'a', '1', 'Nyan Cat');
INSERT INTO `items` VALUES ('543', '3076', 'm', 'h', '(SET) Goku');
INSERT INTO `items` VALUES ('544', '3077', 'm', 'b', '(SET) Goku');
INSERT INTO `items` VALUES ('545', '3078', 'a', 'g', '(SET) Goku');
INSERT INTO `items` VALUES ('546', '3079', 'a', 'f', '(SET) Goku');
INSERT INTO `items` VALUES ('547', '3080', 'a', '1', '(SET) Goku');
INSERT INTO `items` VALUES ('548', '3081', 'a', '1', 'Stellar Space');
INSERT INTO `items` VALUES ('549', '3082', 'm', 'h', '(SET) Desert CVT');
INSERT INTO `items` VALUES ('550', '3083', 'm', 'b', '(SET) Desert CVT');
INSERT INTO `items` VALUES ('551', '3084', 'a', 'g', '(SET) Desert CVT');
INSERT INTO `items` VALUES ('552', '3085', 'a', 'f', '(SET) Desert CVT');
INSERT INTO `items` VALUES ('553', '3086', 'a', '2', '(SET) Desert CVT');
INSERT INTO `items` VALUES ('554', '3087', 'a', '1', '(SET) Desert CVT');
INSERT INTO `items` VALUES ('555', '3088', 'a', 'g', 'Green Phoenix');
INSERT INTO `items` VALUES ('556', '3089', 'a', '1', '(RARE) Mustang');
INSERT INTO `items` VALUES ('557', '3090', 'a', '1', 'Moon');
INSERT INTO `items` VALUES ('558', '3091', 'a', 'g', '(RARE) Pokeball');
INSERT INTO `items` VALUES ('559', '3092', 'm', 'h', '(RARE) Ash');
INSERT INTO `items` VALUES ('560', '3093', 'm', 'b', '(RARE) Ash');
INSERT INTO `items` VALUES ('561', '3094', 'a', 'f', '(RARE) Pika');
INSERT INTO `items` VALUES ('562', '3095', 'a', '1', 'Pokemon');
INSERT INTO `items` VALUES ('563', '3096', 'a', 'f', 'Kitten Cloud');
INSERT INTO `items` VALUES ('564', '3097', 'a', '1', '(RARE) Green Archers');
INSERT INTO `items` VALUES ('565', '3098', 'a', 'f', 'Charmander');
INSERT INTO `items` VALUES ('566', '3099', 'a', '1', 'Blue Gona');
INSERT INTO `items` VALUES ('567', '3100', 'm', 'h', '(SET) Naturo');
INSERT INTO `items` VALUES ('568', '3101', 'm', 'b', '(SET) Naturo');
INSERT INTO `items` VALUES ('569', '3102', 'a', 'g', '(SET) Naturo');
INSERT INTO `items` VALUES ('570', '3103', 'a', 'f', '(SET) Naturo');
INSERT INTO `items` VALUES ('571', '3104', 'a', '1', '(SET) Naturo');
INSERT INTO `items` VALUES ('572', '3105', 'a', '2', '(SET) Naturo');
INSERT INTO `items` VALUES ('573', '3106', 'f', 'h', '(SET) Sakura');
INSERT INTO `items` VALUES ('574', '3107', 'f', 'b', '(SET) Sakura');
INSERT INTO `items` VALUES ('575', '3108', 'a', 'g', '(SET) Sakura');
INSERT INTO `items` VALUES ('576', '3109', 'a', 'f', '(SET) Sakura');
INSERT INTO `items` VALUES ('577', '3110', 'a', '2', '(SET) Sakura');
INSERT INTO `items` VALUES ('578', '3111', 'a', '1', '(SET) Sakura');
INSERT INTO `items` VALUES ('579', '3112', 'm', 'h', '(SET) Kartoz');
INSERT INTO `items` VALUES ('580', '3113', 'm', 'b', '(SET) Kartoz');
INSERT INTO `items` VALUES ('581', '3114', 'a', 'g', '(SET) Kartoz');
INSERT INTO `items` VALUES ('582', '3115', 'a', 'f', '(SET) Kartoz');
INSERT INTO `items` VALUES ('583', '3116', 'a', '1', 'Hearts Day');
INSERT INTO `items` VALUES ('584', '3117', 'a', '1', '(RARE) Valentines');
INSERT INTO `items` VALUES ('586', '3119', 'a', '1', '(RARE) Pilot');
INSERT INTO `items` VALUES ('587', '3120', 'a', '1', 'Stripes');
INSERT INTO `items` VALUES ('588', '3121', 'a', '1', 'Toxic');
INSERT INTO `items` VALUES ('589', '3122', 'a', '1', 'Dolanpls');
INSERT INTO `items` VALUES ('601', '3134', 'a', '1', '(RARE) Thunder');
INSERT INTO `items` VALUES ('602', '3135', 'a', '1', 'Colors');
INSERT INTO `items` VALUES ('603', '3136', 'a', '1', 'Swirl');
INSERT INTO `items` VALUES ('604', '3137', 'm', 'h', '(SET) Thanatos');
INSERT INTO `items` VALUES ('605', '3138', 'm', 'b', '(SET) Thanatos');
INSERT INTO `items` VALUES ('606', '3139', 'a', 'f', '(SET) Thanatos');
INSERT INTO `items` VALUES ('607', '3140', 'a', 'g', 'Black Phoenix');
INSERT INTO `items` VALUES ('608', '3141', 'f', 'h', '(SET) Rylai');
INSERT INTO `items` VALUES ('609', '3142', 'f', 'b', '(SET) Rylai');
INSERT INTO `items` VALUES ('610', '3143', 'a', 'g', '(SET) Rylai');
INSERT INTO `items` VALUES ('611', '3144', 'a', 'f', '(SET) Rylai');
INSERT INTO `items` VALUES ('612', '3145', 'a', 'g', 'Dark Magic');
INSERT INTO `items` VALUES ('613', '3146', 'a', 'f', 'Dark Magic');
INSERT INTO `items` VALUES ('614', '3147', 'a', '1', 'Princess Luna');
INSERT INTO `items` VALUES ('615', '3148', 'a', '1', 'Kame Hame');
INSERT INTO `items` VALUES ('616', '3149', 'a', '2', '(RARE) You Love Me');
INSERT INTO `items` VALUES ('617', '3150', 'a', '1', '(RARE) Floating Hear');
INSERT INTO `items` VALUES ('618', '3151', 'f', 'h', '(SET) Sakura Card Ca');
INSERT INTO `items` VALUES ('619', '3152', 'f', 'b', '(SET) Sakura Card Ca');
INSERT INTO `items` VALUES ('620', '3153', 'a', 'g', '(SET) Sakura Card Ca');
INSERT INTO `items` VALUES ('621', '3154', 'a', 'f', '(SET) Sakura Card Ca');
INSERT INTO `items` VALUES ('622', '3155', 'a', '1', '(SET) Sakura Card Ca');
INSERT INTO `items` VALUES ('623', '3156', 'm', 'h', 'Mummy');
INSERT INTO `items` VALUES ('624', '3157', 'm', 'b', 'Mummy');
INSERT INTO `items` VALUES ('625', '3158', 'a', 'f', 'Mummy');
INSERT INTO `items` VALUES ('626', '3159', 'm', 'h', '(SET) Death Note');
INSERT INTO `items` VALUES ('627', '3160', 'm', 'b', '(SET) Death Note');
INSERT INTO `items` VALUES ('628', '3161', 'm', 'h', '(SET) Death Note 2');
INSERT INTO `items` VALUES ('629', '3162', 'm', 'b', '(SET) Death Note 2');
INSERT INTO `items` VALUES ('630', '3163', 'f', 'h', 'Teddy');
INSERT INTO `items` VALUES ('631', '3164', 'f', 'b', 'Teddy');
INSERT INTO `items` VALUES ('632', '3165', 'f', 'h', '(SET) Witch');
INSERT INTO `items` VALUES ('633', '3166', 'f', 'b', '(SET) Witch');
INSERT INTO `items` VALUES ('634', '3167', 'a', 'f', '(SET) Witch');
INSERT INTO `items` VALUES ('635', '3168', 'm', 'h', '(SET) Paul');
INSERT INTO `items` VALUES ('636', '3169', 'm', 'b', '(SET) Paul');
INSERT INTO `items` VALUES ('637', '3170', 'a', 'g', '(SET) Paul');
INSERT INTO `items` VALUES ('638', '3171', 'a', 'f', '(SET) Paul');
INSERT INTO `items` VALUES ('639', '3172', 'm', 'h', '(SET) Natzu');
INSERT INTO `items` VALUES ('640', '3173', 'm', 'b', '(SET) Natzu');
INSERT INTO `items` VALUES ('641', '3174', 'a', 'g', '(SET) Natzu');
INSERT INTO `items` VALUES ('642', '3175', 'a', 'f', '(SET) Natzu');
INSERT INTO `items` VALUES ('643', '3176', 'a', '1', '(SET) Natzu');
INSERT INTO `items` VALUES ('644', '3177', 'm', 'h', '(SET) Bleach');
INSERT INTO `items` VALUES ('645', '3178', 'm', 'b', '(SET) Bleach');
INSERT INTO `items` VALUES ('646', '3179', 'a', 'g', '(SET) Bleach');
INSERT INTO `items` VALUES ('647', '3180', 'a', 'f', '(SET) Bleach');
INSERT INTO `items` VALUES ('648', '3181', 'a', '1', '(SET) Bleach');
INSERT INTO `items` VALUES ('649', '3182', 'a', '2', '(SET) Bleach');
INSERT INTO `items` VALUES ('650', '3183', 'm', 'h', '(SET) Sasuke Uchica');
INSERT INTO `items` VALUES ('651', '3184', 'm', 'b', '(SET) Sasuke Uchica');
INSERT INTO `items` VALUES ('652', '3185', 'a', 'g', '(SET) Sasuke Uchica');
INSERT INTO `items` VALUES ('653', '3186', 'a', 'f', '(SET) Sasuke Uchica');
INSERT INTO `items` VALUES ('654', '3187', 'f', 'h', '(SET) Shaman King');
INSERT INTO `items` VALUES ('655', '3188', 'f', 'b', '(SET) Shaman King');
INSERT INTO `items` VALUES ('656', '3189', 'a', 'g', '(SET) Shaman King');
INSERT INTO `items` VALUES ('657', '3190', 'a', 'f', '(SET) Shaman King');
INSERT INTO `items` VALUES ('658', '3191', 'm', 'h', '(SET) Shaman King');
INSERT INTO `items` VALUES ('659', '3192', 'm', 'b', '(SET) Shaman King');
INSERT INTO `items` VALUES ('660', '3193', 'a', 'g', '(SET) Shaman King');
INSERT INTO `items` VALUES ('661', '3194', 'a', 'f', '(SET) Shaman King');
INSERT INTO `items` VALUES ('662', '3195', 'a', '1', '(SET) Shaman King');
INSERT INTO `items` VALUES ('663', '3196', 'a', '2', '(SET) Shaman King');
INSERT INTO `items` VALUES ('664', '3197', 'm', 'h', 'Tsuna');
INSERT INTO `items` VALUES ('665', '3198', 'm', 'b', 'Tsuna');
INSERT INTO `items` VALUES ('666', '3199', 'm', 'h', '(SET) YuGiOh');
INSERT INTO `items` VALUES ('667', '3200', 'm', 'b', '(SET) YuGiOh');
INSERT INTO `items` VALUES ('668', '3201', 'a', 'g', '(SET) YuGiOh');
INSERT INTO `items` VALUES ('669', '3202', 'a', 'f', '(SET) YuGiOh');
INSERT INTO `items` VALUES ('670', '3203', 'a', '1', '(SET) YuGiOh');
INSERT INTO `items` VALUES ('671', '3204', 'm', 'h', 'Romeo');
INSERT INTO `items` VALUES ('672', '3205', 'm', 'b', 'Romeo');
INSERT INTO `items` VALUES ('673', '3206', 'f', 'b', 'Juliet');
INSERT INTO `items` VALUES ('674', '3207', 'f', 'h', 'Juliet');
INSERT INTO `items` VALUES ('675', '3208', 'a', '1', 'Nebulosa');
INSERT INTO `items` VALUES ('676', '3209', 'a', '1', '(RARE) Tree');
INSERT INTO `items` VALUES ('677', '3210', 'a', '1', '(RARE) Time Travel');
INSERT INTO `items` VALUES ('678', '3211', 'm', 'h', 'Anderson Silva');
INSERT INTO `items` VALUES ('679', '3212', 'm', 'b', 'Anderson Silva');
INSERT INTO `items` VALUES ('680', '3213', 'm', 'h', '(SET) Inazuma Eleven');
INSERT INTO `items` VALUES ('681', '3214', 'm', 'b', '(SET) Inazuma Eleven');
INSERT INTO `items` VALUES ('682', '3215', 'a', 'f', '(SET) Inazuma Eleven');
INSERT INTO `items` VALUES ('683', '3216', 'a', '2', '(SET) Inazuma Eleven');
INSERT INTO `items` VALUES ('684', '3217', 'a', '1', '(SET) Inazuma Eleven');
INSERT INTO `items` VALUES ('685', '3218', 'm', 'h', 'Bart Simpson');
INSERT INTO `items` VALUES ('686', '3219', 'm', 'b', 'Bart Simpson');
INSERT INTO `items` VALUES ('687', '3220', 'm', 'h', 'Bob Marley');
INSERT INTO `items` VALUES ('688', '3221', 'm', 'b', 'Bob Marley');
INSERT INTO `items` VALUES ('689', '3222', 'a', '1', 'Bob Marley');
INSERT INTO `items` VALUES ('690', '3223', 'f', 'h', 'Hinata');
INSERT INTO `items` VALUES ('691', '3224', 'f', 'b', 'Hinata');
INSERT INTO `items` VALUES ('692', '3225', 'm', 'h', 'Luan Santana');
INSERT INTO `items` VALUES ('693', '3226', 'm', 'b', 'Luan Santana');
INSERT INTO `items` VALUES ('694', '3227', 'a', '1', 'Luan Santana');
INSERT INTO `items` VALUES ('695', '3228', 'm', 'h', 'Racer');
INSERT INTO `items` VALUES ('696', '3229', 'm', 'b', 'Racer');
INSERT INTO `items` VALUES ('697', '3230', 'm', 'h', 'Saint Seya');
INSERT INTO `items` VALUES ('698', '3231', 'm', 'b', 'Saint Seya');
INSERT INTO `items` VALUES ('699', '3232', 'a', '1', 'Saint Seya');
INSERT INTO `items` VALUES ('700', '3233', 'a', '1', 'Alianza Lima');
INSERT INTO `items` VALUES ('701', '3234', 'a', '1', 'Sporting Cristal');
INSERT INTO `items` VALUES ('702', '3235', 'a', '1', 'Universitario');
INSERT INTO `items` VALUES ('704', '3237', 'a', '2', '(SET) YuGiOh');
INSERT INTO `items` VALUES ('705', '3238', 'm', 'h', '(SET) Goget');
INSERT INTO `items` VALUES ('706', '3239', 'm', 'b', '(SET) Goget');
INSERT INTO `items` VALUES ('707', '3240', 'a', 'g', '(SET) Goget');
INSERT INTO `items` VALUES ('710', '3243', 'f', 'h', 'Cheryl');
INSERT INTO `items` VALUES ('711', '3244', 'f', 'b', 'Cheryl');
INSERT INTO `items` VALUES ('712', '3245', 'm', 'h', 'Hero');
INSERT INTO `items` VALUES ('713', '3246', 'm', 'b', 'Hero');
INSERT INTO `items` VALUES ('714', '3247', 'a', 'g', 'Hero');
INSERT INTO `items` VALUES ('715', '3248', 'a', 'f', 'Hero');
INSERT INTO `items` VALUES ('716', '3249', 'f', 'h', '(RARE) Misty');
INSERT INTO `items` VALUES ('717', '3250', 'f', 'b', '(RARE) Misty');
INSERT INTO `items` VALUES ('718', '3251', 'a', 'f', '(RARE) Togepi');
INSERT INTO `items` VALUES ('719', '3252', 'm', 'h', '(SET) PSY');
INSERT INTO `items` VALUES ('720', '3253', 'm', 'b', '(SET) PSY');
INSERT INTO `items` VALUES ('721', '3254', 'a', 'g', '(SET) PSY');
INSERT INTO `items` VALUES ('722', '3255', 'a', 'f', '(SET) PSY');
INSERT INTO `items` VALUES ('724', '3257', 'm', 'h', '(SET) Black Warrior');
INSERT INTO `items` VALUES ('725', '3258', 'm', 'b', '(SET) Black Warrior');
INSERT INTO `items` VALUES ('726', '3259', 'a', 'g', '(SET) Black Warrior');
INSERT INTO `items` VALUES ('727', '3260', 'a', 'f', '(SET) Black Warrior');
INSERT INTO `items` VALUES ('728', '3261', 'a', '1', 'Solitaire');
INSERT INTO `items` VALUES ('729', '3262', 'f', 'h', '(RARE) Invisible');
INSERT INTO `items` VALUES ('730', '3263', 'f', 'b', '(RARE) Invisible');
INSERT INTO `items` VALUES ('731', '3264', 'a', 'b', 'Angel');
INSERT INTO `items` VALUES ('732', '3265', 'a', 'h', 'Angel');
INSERT INTO `items` VALUES ('733', '3266', 'm', 'h', 'Yoshiken');
INSERT INTO `items` VALUES ('734', '3267', 'm', 'b', 'Yoshiken');
INSERT INTO `items` VALUES ('735', '3268', 'm', 'h', 'DJ Rapper');
INSERT INTO `items` VALUES ('736', '3269', 'm', 'b', 'DJ Rapper');
INSERT INTO `items` VALUES ('737', '3270', 'm', 'h', 'Turtle Hat');
INSERT INTO `items` VALUES ('738', '3271', 'm', 'b', 'Turtle Body');
INSERT INTO `items` VALUES ('739', '3272', 'm', 'b', 'Deamonic Body');
INSERT INTO `items` VALUES ('740', '3273', 'm', 'h', 'Deamonic Hat');
INSERT INTO `items` VALUES ('741', '3274', 'm', 'h', 'Bone Man');
INSERT INTO `items` VALUES ('742', '3275', 'm', 'b', 'Bone Man');
INSERT INTO `items` VALUES ('743', '3276', 'm', 'h', 'Eros');
INSERT INTO `items` VALUES ('744', '3277', 'm', 'b', 'Eros');
INSERT INTO `items` VALUES ('745', '3278', 'm', 'b', 'Thor&apos;s Wealth');
INSERT INTO `items` VALUES ('746', '3279', 'm', 'h', 'Thor&apos;s Wealth');
INSERT INTO `items` VALUES ('747', '3280', 'm', 'h', 'Hiphop Flamer');
INSERT INTO `items` VALUES ('748', '3281', 'm', 'b', 'Hiphop Flamer Body');
INSERT INTO `items` VALUES ('749', '3282', 'm', 'h', 'Nyx Abyss');
INSERT INTO `items` VALUES ('750', '3283', 'm', 'b', 'Nyx Abyss');
INSERT INTO `items` VALUES ('751', '3284', 'm', 'h', 'Cannon');
INSERT INTO `items` VALUES ('752', '3285', 'm', 'b', 'Cannon');
INSERT INTO `items` VALUES ('753', '3286', 'm', 'b', 'Army Private Body');
INSERT INTO `items` VALUES ('754', '3287', 'm', 'h', 'Army Private Hat');
INSERT INTO `items` VALUES ('757', '3290', 'm', 'h', 'African Boy');
INSERT INTO `items` VALUES ('758', '3291', 'm', 'b', 'African Boy');
INSERT INTO `items` VALUES ('759', '3292', 'm', 'h', 'Celtic Warrior');
INSERT INTO `items` VALUES ('760', '3293', 'm', 'b', 'Celtic Warrior');
INSERT INTO `items` VALUES ('761', '3294', 'a', 'f', 'Ola Ke Ase');
INSERT INTO `items` VALUES ('762', '3295', 'm', 'h', 'Gaucho Hat');
INSERT INTO `items` VALUES ('763', '3296', 'm', 'b', 'Gaucho Body');
INSERT INTO `items` VALUES ('764', '3297', 'a', 'f', 'Dragon Glass');
INSERT INTO `items` VALUES ('765', '3298', 'a', 'f', 'Dragon Thunder');
INSERT INTO `items` VALUES ('766', '3299', 'm', 'b', 'Roman Executioner');
INSERT INTO `items` VALUES ('767', '3300', 'm', 'h', 'Roman Executioner');
INSERT INTO `items` VALUES ('768', '3301', 'm', 'b', 'Mutant');
INSERT INTO `items` VALUES ('769', '3302', 'm', 'h', 'Mutant');
INSERT INTO `items` VALUES ('770', '3303', 'm', 'h', 'Toilet Hat');
INSERT INTO `items` VALUES ('771', '3304', 'm', 'b', 'Toilet Body');
INSERT INTO `items` VALUES ('772', '3305', 'a', 'h', 'Team Force');
INSERT INTO `items` VALUES ('773', '3306', 'a', 'b', 'Team Force');
INSERT INTO `items` VALUES ('774', '3307', 'a', 'g', 'Dragon Sword');
INSERT INTO `items` VALUES ('775', '3308', 'a', 'f', 'Horse Shadow');
INSERT INTO `items` VALUES ('776', '3309', 'a', 'f', 'Inner Strength');
INSERT INTO `items` VALUES ('777', '3310', 'a', 'f', 'Butterfly');
INSERT INTO `items` VALUES ('778', '3311', 'a', 'g', 'Sword Warrior');
INSERT INTO `items` VALUES ('781', '3314', 'f', 'h', 'Deamonic Hat');
INSERT INTO `items` VALUES ('782', '3315', 'f', 'b', 'Deamonic Body');
INSERT INTO `items` VALUES ('783', '3316', 'f', 'h', 'Roman Executioner');
INSERT INTO `items` VALUES ('784', '3317', 'f', 'b', 'Roman Executioner');
INSERT INTO `items` VALUES ('785', '3318', 'a', 'b', 'Space Adventurer');
INSERT INTO `items` VALUES ('786', '3319', 'a', 'h', 'Space Adventurer');
INSERT INTO `items` VALUES ('787', '3320', 'f', 'h', 'Tonkserverus');
INSERT INTO `items` VALUES ('788', '3321', 'f', 'b', 'Tonkserverus');
INSERT INTO `items` VALUES ('789', '3322', 'f', 'b', 'Nyx Beth');
INSERT INTO `items` VALUES ('790', '3323', 'f', 'h', 'Nyx Beth');
INSERT INTO `items` VALUES ('791', '3324', 'a', 'g', 'Stressed Z');
INSERT INTO `items` VALUES ('792', '3325', 'm', 'b', 'Cow Boy');
INSERT INTO `items` VALUES ('793', '3326', 'm', 'h', 'Cow Boy');
INSERT INTO `items` VALUES ('794', '3327', 'm', 'h', 'Demon Boy');
INSERT INTO `items` VALUES ('795', '3328', 'm', 'b', 'Demon Boy');
INSERT INTO `items` VALUES ('796', '3329', 'a', 'f', 'Cow Flag');
INSERT INTO `items` VALUES ('797', '3330', 'm', 'h', 'Afro 80');
INSERT INTO `items` VALUES ('798', '3331', 'm', 'b', 'Afro 80');
INSERT INTO `items` VALUES ('799', '3332', 'm', 'b', 'DragonPower');
INSERT INTO `items` VALUES ('800', '3333', 'm', 'h', 'DragonPower');
INSERT INTO `items` VALUES ('801', '3334', 'a', 'g', 'Guitar');
INSERT INTO `items` VALUES ('802', '3335', 'a', 'g', 'Sword Laser');
INSERT INTO `items` VALUES ('803', '3336', 'a', 'g', 'Nebula');
INSERT INTO `items` VALUES ('804', '3337', 'f', 'b', 'Cow Woman');
INSERT INTO `items` VALUES ('805', '3338', 'f', 'h', 'Cow Woman');
INSERT INTO `items` VALUES ('806', '3339', 'f', 'h', 'PinkPower');
INSERT INTO `items` VALUES ('807', '3340', 'f', 'b', 'PinkPower');
INSERT INTO `items` VALUES ('808', '3341', 'a', 'g', 'Sun Cute');
INSERT INTO `items` VALUES ('809', '3342', 'a', 'g', 'Mega Power');
INSERT INTO `items` VALUES ('810', '3343', 'a', 'f', 'Chocobo');
INSERT INTO `items` VALUES ('811', '3344', 'a', 'f', 'Moon Red');
INSERT INTO `items` VALUES ('812', '3345', 'a', 'g', 'GM Sign');
INSERT INTO `items` VALUES ('813', '3346', 'a', 'f', 'Teddy Flag');
INSERT INTO `items` VALUES ('814', '3347', 'a', '1', '(RARE) Thunderbolt');
INSERT INTO `items` VALUES ('815', '3348', 'a', 'g', 'Fire Dragon');
INSERT INTO `items` VALUES ('816', '3349', 'f', 'h', 'Lady Green');
INSERT INTO `items` VALUES ('817', '3350', 'f', 'b', 'Lady Green');
INSERT INTO `items` VALUES ('818', '3351', 'm', 'h', '(SET) Capitan Americ');
INSERT INTO `items` VALUES ('819', '3352', 'm', 'b', '(SET) Capitan Americ');
INSERT INTO `items` VALUES ('820', '3353', 'a', 'g', '(SET) Capitan Americ');
INSERT INTO `items` VALUES ('821', '3354', 'a', '1', '(SET) Capitan Americ');
INSERT INTO `items` VALUES ('822', '3355', 'm', 'h', '(SET) Vegeta');
INSERT INTO `items` VALUES ('823', '3356', 'm', 'b', '(SET) Vegeta');
INSERT INTO `items` VALUES ('824', '3357', 'a', 'g', '(SET) Vegeta');
INSERT INTO `items` VALUES ('825', '3358', 'a', 'f', '(SET) Vegeta');
INSERT INTO `items` VALUES ('826', '3359', 'a', '2', '(SET) Vegeta');
INSERT INTO `items` VALUES ('827', '3360', 'a', '1', '(SET) Vegeta');
INSERT INTO `items` VALUES ('828', '3361', 'f', 'h', '(SET) Lillymon');
INSERT INTO `items` VALUES ('829', '3362', 'f', 'b', '(SET) Lillymon');
INSERT INTO `items` VALUES ('830', '3363', 'a', 'g', '(SET) Lillymon');
INSERT INTO `items` VALUES ('831', '3364', 'a', 'f', '(SET) Lillymon');
INSERT INTO `items` VALUES ('832', '3365', 'm', 'h', 'Holk');
INSERT INTO `items` VALUES ('833', '3366', 'm', 'b', 'Holk');
INSERT INTO `items` VALUES ('834', '3367', 'f', 'h', 'Sexy Bulma');
INSERT INTO `items` VALUES ('835', '3368', 'f', 'b', 'Sexy Bulma');
INSERT INTO `items` VALUES ('836', '3369', 'm', 'h', '(SET) Thor');
INSERT INTO `items` VALUES ('837', '3370', 'm', 'b', '(SET) Thor');
INSERT INTO `items` VALUES ('838', '3371', 'a', 'g', '(SET) Thor');
INSERT INTO `items` VALUES ('839', '3372', 'a', 'f', '(SET) Thor');
INSERT INTO `items` VALUES ('840', '3373', 'm', 'g', '(SET) SUPER AVATAR');
INSERT INTO `items` VALUES ('841', '3374', 'm', 'b', '(SET) SUPER AVATAR');
INSERT INTO `items` VALUES ('842', '3375', 'm', 'h', '(SET) SUPER AVATAR');
INSERT INTO `items` VALUES ('843', '3376', 'f', 'g', '(SET) SUPER AVATAR');
INSERT INTO `items` VALUES ('844', '3377', 'f', 'b', '(SET) SUPER AVATAR');
INSERT INTO `items` VALUES ('845', '3378', 'f', 'h', '(SET) SUPER AVATAR');
INSERT INTO `items` VALUES ('846', '3379', 'm', 'h', 'Iron Man');
INSERT INTO `items` VALUES ('847', '3380', 'm', 'b', 'Iron Man');
INSERT INTO `items` VALUES ('848', '3381', 'a', 'g', 'Iron Man');
INSERT INTO `items` VALUES ('849', '3382', 'f', 'h', 'Red Girl Fantasy');
INSERT INTO `items` VALUES ('850', '3383', 'f', 'b', 'Red Girl Fantasy');
INSERT INTO `items` VALUES ('853', '3386', 'a', 'g', 'Dragon');
INSERT INTO `items` VALUES ('854', '3387', 'm', 'h', 'Emo');
INSERT INTO `items` VALUES ('855', '3388', 'm', 'b', 'Emo');
INSERT INTO `items` VALUES ('856', '3389', 'f', 'h', 'Emo');
INSERT INTO `items` VALUES ('857', '3390', 'f', 'b', 'Emo');
INSERT INTO `items` VALUES ('858', '3391', 'm', 'h', 'Nyx Marth');
INSERT INTO `items` VALUES ('859', '3392', 'm', 'b', 'Nyx Marth');
INSERT INTO `items` VALUES ('860', '3393', 'a', 'g', 'Blue Dragon');
INSERT INTO `items` VALUES ('861', '3394', 'a', 'g', 'Red Dragon');
INSERT INTO `items` VALUES ('862', '3395', 'a', 'g', 'Green Dragon');
INSERT INTO `items` VALUES ('863', '3396', 'm', 'g', 'Gold Dragon');
INSERT INTO `items` VALUES ('864', '3397', 'f', 'g', 'Fuchsia Dragon');
INSERT INTO `items` VALUES ('865', '3398', 'a', 'g', 'Black Dragon');
INSERT INTO `items` VALUES ('866', '3399', 'a', 'f', '(SET) SUPER AVATAR');
INSERT INTO `items` VALUES ('867', '3400', 'm', 'b', '(Set) Golden Warrior');
INSERT INTO `items` VALUES ('868', '3401', 'm', 'h', '(Set) Golden Warrior');
INSERT INTO `items` VALUES ('869', '3402', 'a', 'f', 'Flag Tournament');
INSERT INTO `items` VALUES ('870', '3403', 'f', 'h', '(Set) Toujo');
INSERT INTO `items` VALUES ('871', '3404', 'f', 'b', '(Set) Toujo');
INSERT INTO `items` VALUES ('872', '3405', 'a', 'f', '(RARE) Tournament Go');
INSERT INTO `items` VALUES ('873', '3406', 'a', 'f', '(RARE) Tournament Si');
INSERT INTO `items` VALUES ('874', '3407', 'a', 'f', '(RARE) Tournament Br');
INSERT INTO `items` VALUES ('875', '3408', 'a', '1', 'ZeRo.');
INSERT INTO `items` VALUES ('876', '3409', 'm', 'h', 'Astronaut');
INSERT INTO `items` VALUES ('877', '3410', 'f', 'h', 'Astronaut');
INSERT INTO `items` VALUES ('878', '3411', 'a', 'b', 'Astronaut');
INSERT INTO `items` VALUES ('879', '3412', 'a', 'g', 'Astronaut');
INSERT INTO `items` VALUES ('880', '3413', 'a', 'f', 'Astronaut');
INSERT INTO `items` VALUES ('881', '3414', 'a', 'f', 'Astronaut');
INSERT INTO `items` VALUES ('882', '3415', 'm', 'h', 'Designer');
INSERT INTO `items` VALUES ('883', '3416', 'm', 'b', 'Designer');
INSERT INTO `items` VALUES ('884', '3417', 'a', 'f', 'Designer');
INSERT INTO `items` VALUES ('885', '3418', 'a', '1', 'Fire');
INSERT INTO `items` VALUES ('886', '3419', 'a', '2', 'zPaul');
INSERT INTO `items` VALUES ('887', '3420', 'a', '2', 'Zamy');
INSERT INTO `items` VALUES ('888', '3421', 'm', 'h', '(SET) MetaBee');
INSERT INTO `items` VALUES ('889', '3422', 'm', 'b', '(SET) MetaBee');
INSERT INTO `items` VALUES ('890', '3423', 'a', 'g', '(SET) MetaBee');
INSERT INTO `items` VALUES ('891', '3424', 'a', 'f', '(SET) MetaBee');
INSERT INTO `items` VALUES ('892', '3425', 'a', '1', '(SET) MetaBee');
INSERT INTO `items` VALUES ('893', '9001', 'a', 'x', '+10% GP');
INSERT INTO `items` VALUES ('895', '9003', 'a', 'x', '[Mobile] Fox');
INSERT INTO `items` VALUES ('896', '3426', 'm', 'h', 'Goku SSJ2');
INSERT INTO `items` VALUES ('897', '3427', 'm', 'b', 'Goku SSJ2');
INSERT INTO `items` VALUES ('898', '3428', 'm', 'h', 'Vegeta SSJ2');
INSERT INTO `items` VALUES ('899', '3429', 'm', 'b', 'Vegeta SSJ2');
INSERT INTO `items` VALUES ('900', '2430', 'a', 'g', 'Kit SSJ2');
INSERT INTO `items` VALUES ('901', '2431', 'a', 'f', 'Kit SSJ2');
INSERT INTO `items` VALUES ('902', '3432', 'f', 'h', 'Milk');
INSERT INTO `items` VALUES ('903', '3433', 'f', 'b', 'Milk');
INSERT INTO `items` VALUES ('904', '3434', 'f', 'h', 'Bulma');
INSERT INTO `items` VALUES ('905', '3435', 'f', 'b', 'Bulma');
INSERT INTO `items` VALUES ('906', '3436', 'm', 'h', 'Sonic');
INSERT INTO `items` VALUES ('907', '3437', 'm', 'b', 'Sonic');
INSERT INTO `items` VALUES ('908', '3438', 'f', 'h', 'Amy Rose');
INSERT INTO `items` VALUES ('909', '3439', 'f', 'b', 'Amy Rose');
INSERT INTO `items` VALUES ('910', '3440', 'a', '1', 'Sky');
INSERT INTO `items` VALUES ('911', '3441', 'm', 'h', '(SET) Chapulin?');
INSERT INTO `items` VALUES ('912', '3442', 'm', 'b', '(SET) Chapulin?');
INSERT INTO `items` VALUES ('913', '3443', 'a', 'g', '(SET) Chapulin?');
INSERT INTO `items` VALUES ('914', '3444', 'a', 'f', '(SET) Chapulin?');
INSERT INTO `items` VALUES ('915', '3445', 'a', '1', '(SET) Chapulin?');
INSERT INTO `items` VALUES ('916', '3446', 'f', 'h', 'Viuda Negra');
INSERT INTO `items` VALUES ('917', '3447', 'f', 'b', 'Viuda Negra');
INSERT INTO `items` VALUES ('918', '3448', 'a', 'f', 'Viuda Negra');
INSERT INTO `items` VALUES ('919', '3449', 'a', '1', 'Limón?');
INSERT INTO `items` VALUES ('921', '3451', 'a', '2', '(RARE) Funny Spider ');
INSERT INTO `items` VALUES ('922', '3452', 'a', '1', '(RARE) Neon Pumpkin');
INSERT INTO `items` VALUES ('923', '3453', 'a', 'h', 'Delerium');
INSERT INTO `items` VALUES ('924', '3454', 'a', 'b', 'Delerium');
INSERT INTO `items` VALUES ('925', '3455', 'a', 'f', 'Aemeth');
INSERT INTO `items` VALUES ('926', '3456', 'm', 'h', 'Freddy');
INSERT INTO `items` VALUES ('927', '3457', 'm', 'b', 'Freddy');
INSERT INTO `items` VALUES ('928', '3458', 'm', 'h', 'Clown Evil');
INSERT INTO `items` VALUES ('929', '3459', 'm', 'b', 'Clown Evil');
INSERT INTO `items` VALUES ('930', '3460', 'm', 'h', 'Pirate Evil');
INSERT INTO `items` VALUES ('931', '3461', 'm', 'b', 'Pirate Evil');
INSERT INTO `items` VALUES ('932', '3462', 'm', 'b', 'Wolf');
INSERT INTO `items` VALUES ('933', '3463', 'm', 'h', 'Wolf');
INSERT INTO `items` VALUES ('934', '3464', 'a', 'f', 'Wolf ');
INSERT INTO `items` VALUES ('935', '3465', 'a', 'f', 'Halloween DB 2013');
INSERT INTO `items` VALUES ('936', '3466', 'f', 'h', 'Military');
INSERT INTO `items` VALUES ('937', '3467', 'f', 'b', 'Military');
INSERT INTO `items` VALUES ('938', '3468', 'a', 'f', 'Military');
INSERT INTO `items` VALUES ('940', '3470', 'f', 'h', 'Lady');
INSERT INTO `items` VALUES ('941', '3471', 'f', 'b', 'Lady');
INSERT INTO `items` VALUES ('942', '3472', 'a', 'f', 'Spider Flag');
INSERT INTO `items` VALUES ('943', '3473', 'a', 'g', 'Sr Cat');
INSERT INTO `items` VALUES ('946', '2476', 'a', 'f', 'Monster');
INSERT INTO `items` VALUES ('947', '3477', 'a', 'g', 'Ball of Fire');
INSERT INTO `items` VALUES ('948', '3478', 'm', 'h', '(SET) Luffy ll');
INSERT INTO `items` VALUES ('949', '3479', 'm', 'b', '(SET) Luffy ll');
INSERT INTO `items` VALUES ('950', '3480', 'a', 'g', 'I ? YOU');
INSERT INTO `items` VALUES ('951', '3481', 'a', 'g', 'Eyes of Love');
INSERT INTO `items` VALUES ('952', '3482', 'a', 'g', 'Bat ');
INSERT INTO `items` VALUES ('953', '3483', 'f', 'h', 'Zamantha');
INSERT INTO `items` VALUES ('954', '3484', 'f', 'b', 'Zamantha');
INSERT INTO `items` VALUES ('955', '3485', 'f', 'h', 'Princess Flame');
INSERT INTO `items` VALUES ('956', '3486', 'f', 'b', 'Princess Flame');
INSERT INTO `items` VALUES ('957', '3487', 'a', 'f', '(SET) Luffy ll');
INSERT INTO `items` VALUES ('962', '3492', 'a', 'g', '(RARE) Cash Charger ');
INSERT INTO `items` VALUES ('969', '3499', 'a', '1', 'Gizem');
INSERT INTO `items` VALUES ('970', '3500', 'a', '1', 'Bath');
INSERT INTO `items` VALUES ('971', '3501', 'a', '2', 'Bath');
INSERT INTO `items` VALUES ('972', '3502', 'a', '1', 'Halloween');
INSERT INTO `items` VALUES ('973', '3503', 'a', '2', 'Halloween');
INSERT INTO `items` VALUES ('974', '2504', 'a', '1', '(RARE) Tournament Wi');
INSERT INTO `items` VALUES ('975', '2505', 'a', '1', '(RARE) Tournament Go');
INSERT INTO `items` VALUES ('976', '2506', 'a', '1', '(RARE) Tournament Si');
INSERT INTO `items` VALUES ('977', '2507', 'a', '1', '(RARE) Tournament Br');
INSERT INTO `items` VALUES ('1014', '3544', 'm', 'h', 'Santa Claus DB 2013');
INSERT INTO `items` VALUES ('1015', '3545', 'm', 'b', 'Santa Claus DB 2013');
INSERT INTO `items` VALUES ('1016', '3546', 'f', 'h', 'Mrs Claus DB 2013');
INSERT INTO `items` VALUES ('1017', '3547', 'f', 'b', 'Mrs Claus DB 2013');
INSERT INTO `items` VALUES ('1018', '3548', 'a', 'g', 'Rudolf DB 2013');
INSERT INTO `items` VALUES ('1019', '3549', 'a', 'f', '(RARE) Xmas 2013');
INSERT INTO `items` VALUES ('1020', '3550', 'a', '2', 'Renzo');
INSERT INTO `items` VALUES ('1024', '3554', 'a', '1', 'Tournament B');
INSERT INTO `items` VALUES ('1025', '3555', 'a', '1', 'Tournament B Gold');
INSERT INTO `items` VALUES ('1026', '3556', 'a', '1', 'Tournament B Silver');
INSERT INTO `items` VALUES ('1027', '3557', 'a', '1', 'Tournament B Bronze');
INSERT INTO `items` VALUES ('1028', '3558', 'a', 'f', 'Valentine&apos;s Cup');
INSERT INTO `items` VALUES ('1029', '3559', 'a', 'f', 'Valentine&apos;s Cho');
INSERT INTO `items` VALUES ('1030', '3560', 'a', 'f', 'Valentine&apos;s Pho');
INSERT INTO `items` VALUES ('1060', '9004', 'a', 'x', 'Rose (get relationsh');
INSERT INTO `items` VALUES ('1061', '9005', 'a', 'x', 'Engagement Ring');
INSERT INTO `items` VALUES ('1062', '9006', 'a', 'x', 'Marriage Ring');
INSERT INTO `items` VALUES ('1063', '9007', 'a', 'x', 'Tissue (break friend');
INSERT INTO `items` VALUES ('1064', '9008', 'a', 'x', 'Hammer (break engage');
INSERT INTO `items` VALUES ('1065', '9009', 'a', 'x', 'Lawyer (break marria');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) DEFAULT 'null',
  `Key` varchar(60) DEFAULT 'null',
  `rank` int(2) DEFAULT '0',
  `version` int(3) DEFAULT '0',
  `gold` int(6) DEFAULT '0',
  `cash` int(6) DEFAULT '0',
  `clan` int(6) DEFAULT '0',
  `gender` varchar(6) DEFAULT 'm',
  `gp` int(6) DEFAULT '0',
  `online` int(2) DEFAULT '0',
  `fbid` bigint(60) DEFAULT NULL,
  `foto` int(5) DEFAULT '1',
  `baneado` smallint(5) DEFAULT '0',
  `guild` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'CarlosX', '688bafc7eb1846d822f8', '24', '39', '95149', '99989', '0', 'm', '9999', '0', '100000014337670', '1', '0', '1');
INSERT INTO `users` VALUES ('2', 'Darkz', 'null', '24', '39', '71000', '99999', '0', 'm', '0', '0', '100000101071519', '1', '0', '1');

-- ----------------------------
-- Table structure for user_items
-- ----------------------------
DROP TABLE IF EXISTS `user_items`;
CREATE TABLE `user_items` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` int(11) DEFAULT NULL,
  `puesto` int(1) DEFAULT '0',
  `tipo_precio` char(1) DEFAULT 'G',
  `periodo` char(1) DEFAULT 'W',
  `expira` datetime DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_items
-- ----------------------------
INSERT INTO `user_items` VALUES ('13', '567', '0', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('14', '686', '0', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('15', '568', '0', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('16', '687', '1', 'g', '2', '0000-00-00 00:00:00', '2');
INSERT INTO `user_items` VALUES ('17', '569', '0', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('18', '688', '1', 'g', '2', '0000-00-00 00:00:00', '2');
INSERT INTO `user_items` VALUES ('19', '653', '1', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('20', '542', '0', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('21', '895', '0', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('22', '528', '1', 'g', '2', '0000-00-00 00:00:00', '2');
INSERT INTO `user_items` VALUES ('23', '689', '1', 'g', '2', '0000-00-00 00:00:00', '2');
INSERT INTO `user_items` VALUES ('24', '546', '1', 'g', '2', '0000-00-00 00:00:00', '2');
INSERT INTO `user_items` VALUES ('25', '900', '1', 'g', '2', '0000-00-00 00:00:00', '2');
INSERT INTO `user_items` VALUES ('26', '923', '1', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('27', '924', '1', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('28', '529', '1', 'g', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `user_items` VALUES ('29', '892', '1', 'g', '0', '0000-00-00 00:00:00', '1');
