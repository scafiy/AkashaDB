-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 06:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genshindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `artifacts`
--

CREATE TABLE `artifacts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `keywords` text NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `category` text NOT NULL,
  `raritymax` text NOT NULL,
  `raritymin` text NOT NULL,
  `fivestar` text DEFAULT NULL,
  `fourstar` text DEFAULT NULL,
  `threestar` text DEFAULT NULL,
  `twostar` text DEFAULT NULL,
  `onestar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artifacts`
--

INSERT INTO `artifacts` (`id`, `name`, `keywords`, `img`, `url`, `category`, `raritymax`, `raritymin`, `fivestar`, `fourstar`, `threestar`, `twostar`, `onestar`) VALUES
(1, 'Initiate', 'Initiate', 'images/artifacts/Initiate/flower.png', 'Initiate', 'Artifact', '1', '1', '', '', NULL, NULL, '1'),
(8, 'Adventurer', 'Adventurer', 'images/artifacts/adventurer/flower.png', 'adventurer', 'Artifact', '3', '1', '', '', '3', '2', '1'),
(10, 'Lucky Dog', 'Lucky Dog LD', 'images/artifacts/lucky-dog/flower.png', 'lucky-dog', 'Artifact', '3', '1', '', '', '3', '2', '1'),
(11, 'Traveling Doctor', 'Traveling Doctor TD', 'images/artifacts/traveling-doctor/flower.png', 'traveling-doctor', 'Artifact', '3', '1', '', '', '3', '2', '1'),
(12, 'Resolution of Sojourner', 'Resolution of Sojourner ROS', 'images/artifacts/resolution-of-sojourner/flower.png', 'resolution-of-sojourner', 'Artifact', '4', '3', '', '4', '3', '', ''),
(13, 'Tiny Miracle', 'Tiny Miracle TM', 'images/artifacts/tiny-miracle/flower.png', 'tiny-miracle', 'Artifact', '4', '3', '', '4', '3', '', ''),
(14, 'Berserker', 'Berser Blood-Soakedker Blood Soaked', 'images/artifacts/berserker/flower.png', 'berserker', 'Artifact', '4', '3', '', '4', '3', '', ''),
(15, 'Instructor', 'Instructor', 'images/artifacts/instructor/flower.png', 'instructor', 'Artifact', '4', '3', '', '4', '3', '', ''),
(16, 'The Exile', 'The Exile TE', 'images/artifacts/the-exile/flower.png', 'the-exile', 'Artifact', '4', '3', '', '4', '3', '', ''),
(17, 'Defender\'s Will', 'Defender\'s Will Defenders Will Defender Will DW', 'images/artifacts/defenders-will/flower.png', 'defenders-will', 'Artifact', '4', '3', '', '4', '3', '', ''),
(18, 'Brave Heart', 'Brave Heart BH', 'images/artifacts/brave-heart/flower.png', 'brave-heart', 'Artifact', '4', '3', '', '4', '3', '', ''),
(19, 'Martial Artist', 'Martial Artist MA', 'images/artifacts/martial-artist/flower.png', 'martial-artist', 'Artifact', '4', '3', '', '4', '3', '', ''),
(20, 'Gambler', 'Gambler', 'images/artifacts/gambler/flower.png', 'gambler', 'Artifact', '4', '3', '', '4', '3', '', ''),
(21, 'Scholar', 'Scholar', 'images/artifacts/scholar/flower.png', 'scholar', 'Artifact', '4', '3', '', '4', '3', '', ''),
(22, 'Prayers for Illumination', 'Prayers for Illumination Prayer for Illumination PFI POI', 'images/artifacts/prayers-for-illumination/flower.png', 'prayers-for-illumination', 'Artifact', '4', '3', '', '4', '3', '', ''),
(23, 'Prayers for Destiny', 'Prayers for Destiny Prayer for Destiny PFD POD', 'images/artifacts/prayers-for-destiny/flower.png', 'prayers-for-destiny', 'Artifact', '4', '3', '', '4', '3', '', ''),
(24, 'Prayers for Wisdom', 'Prayers for Wisdom Prayer for Wisdom PFW POW', 'images/artifacts/prayers-to-springtime/flower.png', 'prayers-for-wisdom', 'Artifact', '4', '3', '', '4', '3', '', ''),
(25, 'Prayers to Springtime', 'Prayers to Springtime Prayer to Springtime PTS POS', 'images/artifacts/prayers-to-springtime/flower.png', 'prayers-to-springtime', 'Artifact', '4', '3', '', '4', '3', '', ''),
(26, 'Gladiator\'s Finale', 'Gladiator\'s Finale Gladiators Finale Gladiator Finale Glad GF', 'images/artifacts/gladiators-finale/flower.png', 'gladiators-finale', 'Artifact', '5', '4', '5', '4', NULL, '', ''),
(27, 'Wanderer\'s Troupe', 'Wanderer\'s Troupe Wanderers Troupe Wanderer Troupe WT', 'images/artifacts/wanderers-troupe/flower.png', 'wanderers-troupe', 'Artifact', '5', '4', '5', '4', '', '', ''),
(28, 'Noblesse Oblige', 'Noblesse Oblige NO', 'images/artifacts/noblesse-oblige/flower.png', 'noblesse-oblige', 'Artifact', '5', '4', '5', '4', '', '', ''),
(29, 'Bloodstained Chivalry', 'Bloodstained Chivalry Bloodstain Chivalry BC BSC', 'images/artifacts/bloodstained-chivalry/flower.png', 'bloodstained-chivalry', 'Artifact', '5', '4', '5', '4', '', '', ''),
(30, 'Maiden Beloved', 'Maiden Beloved MB Maidens', 'images/artifacts/maiden-beloved/flower.png', 'maiden-beloved', 'Artifact', '5', '4', '5', '4', '', '', ''),
(31, 'Viridescent Venerer', 'Viridescent Venerer VV', 'images/artifacts/viridescent-venerer/flower.png', 'viridescent-venerer', 'Artifact', '5', '4', '5', '4', '', '', ''),
(32, 'Archaic Petra', 'Archaic Petra AP', 'images/artifacts/archaic-petra/flower.png', 'archaic-petra', 'Artifact', '5', '4', '5', '4', '', '', ''),
(33, 'Retracing Bolide', 'Retracing Bolide RB', 'images/artifacts/retracing-bolide/flower.png', 'retracing-bolide', 'Artifact', '5', '4', '5', '4', '', '', ''),
(34, 'Thunder­soother', 'Thunder­soother Thunder ­Soother TS', 'images/artifacts/thundersoother/flower.png', 'thundersoother', 'Artifact', '5', '4', '5', '4', '', '', ''),
(35, 'Thundering Fury', 'Thundering Fury TF', 'images/artifacts/thundering-fury/flower.png', 'thundering-fury', 'Artifact', '5', '4', '5', '4', '', '', ''),
(36, 'Lavawalker', 'Lavawalker LW', 'images/artifacts/lavawalker/flower.png', 'lavawalker', 'Artifact', '5', '4', '5', '4', '', '', ''),
(37, 'Crimson Witch of Flames', 'Crimson Witch of Flames CWOF CW CWF', 'images/artifacts/crimson-witch-of-flames/flower.png', 'crimson-witch-of-flames', 'Artifact', '5', '4', '5', '4', '', '', ''),
(38, 'Blizzard Strayer', 'Blizzard Strayer BS', 'images/artifacts/blizzard-strayer/flower.png', 'blizzard-strayer', 'Artifact', '5', '4', '5', '4', '', '', ''),
(39, 'Heart of Depth', 'Heart of Depth HOD', 'images/artifacts/heart-of-depth/flower.png', 'heart-of-depth', 'Artifact', '5', '4', '5', '4', '', '', ''),
(40, 'Tenacity of the Millelith', 'Tenacity of the Millelith Tenacity of Millelith Tenacity Millelith TOM TM TOTM', 'images/artifacts/tenacity-of-the-millelith/flower.png', 'tenacity-of-the-millelith', 'Artifact', '5', '4', '5', '4', '', '', ''),
(41, 'Pale Flame', 'Pale Flame PF', 'images/artifacts/pale-flame/flower.png', 'pale-flame', 'Artifact', '5', '4', '5', '4', '', '', ''),
(42, 'Shimenawa\'s Reminiscence', 'Shimenawa\'s Reminiscence Shimenawas Reminiscence Shimenawa Reminiscence SR', 'images/artifacts/shimenawas-reminiscence/flower.png', 'shimenawas-reminiscence', 'Artifact', '5', '4', '5', '4', '', '', ''),
(43, 'Emblem of Severed Fate', 'Emblem of Severed Fate EOSF ESF', 'images/artifacts/emblem-of-severed-fate/flower.png', 'emblem-of-severed-fate', 'Artifact', '5', '4', '5', '4', '', '', ''),
(44, 'Husk of Opulent Dreams', 'Husk of Opulent Dreams HOOD HFOD ', 'images/artifacts/husk-of-opulent-dreams/flower.png', 'husk-of-opulent-dreams', 'Artifact', '5', '4', '5', '4', '', '', ''),
(45, 'Ocean-Hued Clam', ' Ocean-Hued Clam Ocean Hued Clam OHD OC', 'images/artifacts/ocean-hued-clam/flower.png', 'ocean-hued-clam', 'Artifact', '5', '4', '5', '4', '', '', ''),
(46, 'Vermillion Hereafter', 'Vermillion Hereafter VH', 'images/artifacts/vermillion-hereafter/flower.png', 'vermillion-hereafter', 'Artifact', '5', '4', '5', '4', '', '', ''),
(47, 'Echoes of an Offering', 'Echoes of an Offering Echoe of an Offering Echoes of Offering EOAO EOO', 'images/artifacts/echoes-of-an-offering/flower.png', 'echoes-of-an-offering', 'Artifact', '5', '4', '5', '4', '', '', ''),
(48, 'Deepwood Memories', 'Deepwood Memories DM', 'images/artifacts/deepwood-memories/flower.png', 'deepwood-memories', 'Artifact', '5', '4', '5', '4', '', '', ''),
(49, 'Gilded Dreams', 'Gilded Dreams GD', 'images/artifacts/gilded-dreams/flower.png', 'gilded-dreams', 'Artifact', '5', '4', '5', '4', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `keywords` text NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `rarity` text NOT NULL,
  `category` text NOT NULL,
  `element` text NOT NULL,
  `weapon` text NOT NULL,
  `region` text NOT NULL,
  `stat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `keywords`, `img`, `url`, `rarity`, `category`, `element`, `weapon`, `region`, `stat`) VALUES
(1, 'Amber', 'Amber', 'images/characters/amber/profile.png', 'amber', '4', 'Character', 'Pyro', 'Bow', 'Mondstadt', 'ATK'),
(2, 'Kaeya', 'Kaeya', 'images/characters/Kaeya/profile.png', 'kaeya', '4', 'Character', 'Cryo', 'Sword', 'Mondstadt', 'ER'),
(533, 'Lisa', 'Lisa Minic', 'images/characters/lisa/profile.png', 'lisa', '4', 'Character', 'Electro', 'Catalyst', 'Mondstadt', 'EM'),
(534, 'Barbara', 'Barbara Pegg', 'images/characters/barbara/profile.png', 'barbara', '4', 'Character', 'Hydro', 'Catalyst', 'Mondstadt', 'HP'),
(535, 'Razor', 'Razor', 'images/characters/razor/profile.png', 'razor', '4', 'Character', 'Electro', 'Claymore', 'Mondstadt', 'physicalDMG'),
(536, 'Xiangling', 'Xiangling Mao XL', 'images/characters/xiangling/profile.png', 'xiangling', '4', 'Character', 'Pyro', 'Polearm', 'Liyue', 'EM'),
(537, 'Beidou', 'Beidou', 'images/characters/beidou/profile.png', 'beidou', '4', 'Character', 'Electro', 'Claymore', 'Liyue', 'electroDMG'),
(538, 'Xingqiu', 'Xingqiu XQ', 'images/characters/xingqiu/profile.png', 'xingqiu', '4', 'Character', 'Hydro', 'Sword', 'Liyue', 'ATK'),
(539, 'Ningguang', 'Ningguang', 'images/characters/ningguang/profile.png', 'ningguang', '4', 'Character', 'Geo', 'Catalyst', 'Liyue', 'geoDMG'),
(540, 'Fischl', 'Fischl Fish Amy', 'images/characters/fischl/profile.png', 'fischl', '4', 'Character', 'Electro', 'Bow', 'Mondstadt', 'ATK'),
(541, 'Bennett', 'Bennett', 'images/characters/bennett/profile.png', 'bennett', '4', 'Character', 'Pyro', 'Sword', 'Mondstadt', 'ER'),
(542, 'Noelle', 'Noelle', 'images/characters/noelle/profile.png', 'noelle', '4', 'Character', 'Geo', 'Claymore', 'Mondstadt', 'DEF'),
(543, 'Chongyun', 'Chongyun', 'images/characters/chongyun/profile.png', 'chongyun', '4', 'Character', 'Cryo', 'Claymore', 'Liyue', 'ATK'),
(544, 'Sucrose', 'Sucrose', 'images/characters/sucrose/profile.png', 'sucrose', '4', 'Character', 'Anemo', 'Catalyst', 'Mondstadt', 'anemoDMG'),
(545, 'Jean', 'Jean', 'images/characters/jean/profile.png', 'jean', '5', 'Character', 'Anemo', 'Sword', 'Mondstadt', 'HB'),
(546, 'Diluc', 'Diluc', 'images/characters/diluc/profile.png', 'diluc', '5', 'Character', 'Pyro', 'Claymore', 'Mondstadt', 'CR'),
(547, 'Qiqi', 'Qiqi', 'images/characters/qiqi/profile.png', 'qiqi', '5', 'Character', 'Cryo', 'Sword', 'Liyue', 'HB'),
(548, 'Mona', 'Mona Astrologist Mona Megistus', 'images/characters/mona/profile.png', 'mona', '5', 'Character', 'Hydro', 'Catalyst', 'Mondstadt', 'ER'),
(549, 'Keqing', 'Keqing KQ', 'images/characters/keqing/profile.png', 'keqing', '5', 'Character', 'Electro', 'Sword', 'Liyue', 'CD'),
(550, 'Venti', 'Venti', 'images/characters/venti/profile.png', 'venti', '5', 'Character', 'Anemo', 'Bow', 'Mondstadt', 'ER'),
(551, 'Klee', 'Klee', 'images/characters/klee/profile.png', 'klee', '5', 'Character', 'Pyro', 'Catalyst', 'Mondstadt', 'pyroDMG'),
(552, 'Diona', 'Diona', 'images/characters/diona/profile.png', 'diona', '4', 'Character', 'Cryo', 'Bow', 'Mondstadt', 'cryoDMG'),
(553, 'Tartaglia', 'Tartaglia Childe Ajax', 'images/characters/tartaglia/profile.png', 'tartaglia', '5', 'Character', 'Hydro', 'Bow', 'Liyue', 'hydroDMG'),
(554, 'Xinyan', 'Xinyan XN', 'images/characters/xinyan/profile.png', 'xinyan', '4', 'Character', 'Pyro', 'Claymore', 'Liyue', 'ATK'),
(555, 'Zhongli', 'Zhongli ZL', 'images/characters/zhongli/profile.png', 'zhongli', '5', 'Character', 'Geo', 'Polearm', 'Liyue', 'geoDMG'),
(556, 'Albedo', 'Albedo', 'images/characters/albedo/profile.png', 'albedo', '5', 'Character', 'Geo', 'Sword', 'Mondstadt', 'geoDMG'),
(557, 'Ganyu', 'Ganyu Cocogoat', 'images/characters/ganyu/profile.png', 'ganyu', '5', 'Character', 'Cryo', 'Bow', 'Liyue', 'CD'),
(558, 'Xiao', 'Xiao', 'images/characters/xiao/profile.png', 'xiao', '5', 'Character', 'Anemo', 'Polearm', 'Liyue', 'CR'),
(559, 'Hu Tao', 'Hu Tao HuTao Hu-Tao Who Tao WhoTao HT', 'images/characters/hutao/profile.png', 'hutao', '5', 'Character', 'Pyro', 'Polearm', 'Liyue', 'CD'),
(560, 'Rosaria', 'Rosaria', 'images/characters/rosaria/profile.png', 'rosaria', '4', 'Character', 'Cryo', 'Polearm', 'Mondstadt', 'ATK'),
(561, 'Yanfei', 'Yanfei Feiyan', 'images/characters/yanfei/profile.png', 'yanfei', '4', 'Character', 'Pyro', 'Catalyst', 'Liyue', 'pyroDMG'),
(562, 'Eula', 'Eula End User License Agreement', 'images/characters/eula/profile.png', 'eula', '5', 'Character', 'Cryo', 'Claymore', 'Mondstadt', 'CD'),
(563, 'Kazuha', 'Kazuha Kaedehara Kazuha', 'images/characters/kazuha/profile.png', 'kazuha', '5', 'Character', 'Anemo', 'Sword', 'Inazuma', 'EM'),
(564, 'Ayaka', 'Ayaka Kamisato Ayaka Ayaya', 'images/characters/ayaka/profile.png', 'ayaka', '5', 'Character', 'Cryo', 'Sword', 'Inazuma', 'CD'),
(565, 'Sayu', 'Sayu', 'images/characters/sayu/profile.png', 'sayu', '4', 'Character', 'Anemo', 'Claymore', 'Inazuma', 'EM'),
(566, 'Yoimiya', 'Yoimiya', 'images/characters/yoimiya/profile.png', 'yoimiya', '5', 'Character', 'Pyro', 'Bow', 'Inazuma', 'CR'),
(567, 'Aloy', 'Aloy', 'images/characters/aloy/profile.png', 'aloy', '5-5', 'Character', 'Cryo', 'Bow', 'NULL', 'cryoDMG'),
(568, 'Sara', 'Sara Kujou Sara', 'images/characters/sara/profile.png', 'sara', '4', 'Character', 'Electro', 'Bow', '0', 'ATK'),
(569, 'Raiden', 'Raiden Shogun Ei Baal', 'images/characters/raiden/profile.png', 'raiden', '5', 'Character', 'Electro', 'Polearm', 'Inazuma', 'ER'),
(570, 'Kokomi', 'Kokomi Sangonomiya Kokomi', 'images/characters/kokomi/profile.png', 'kokomi', '5', 'Character', 'Hydro', 'Catalyst', 'Inazuma', 'hydroDMG'),
(571, 'Thoma', 'Thoma', 'images/characters/thoma/profile.png', 'thoma', '4', 'Character', 'Pyro', 'Polearm', 'Inazuma', 'ATK'),
(572, 'Gorou', 'Gorou', 'images/characters/gorou/profile.png', 'gorou', '4', 'Character', 'Geo', 'Bow', 'Inazuma', 'geoDMG'),
(573, 'Itto', 'Itto Arataki Itto Oni', 'images/characters/itto/profile.png', 'itto', '5', 'Character', 'Geo', 'Claymore', 'Inazuma', 'CR'),
(574, 'Yun Jin', 'Yun Jin YunJin Yun-Jin', 'images/characters/yunjin/profile.png', 'yunjin', '4', 'Character', 'Geo', 'Polearm', 'Inazuma', 'ER'),
(575, 'Shenhe', 'Shenhe', 'images/characters/shenhe/profile.png', 'shenhe', '5', 'Character', 'Cryo', 'Polearm', 'Liyue', 'ATK'),
(576, 'Yae', 'Yae Miko', 'images/characters/yae/profile.png', 'yae', '5', 'Character', 'Electro', 'Catalyst', 'Inazuma', 'CR'),
(577, 'Ayato', 'Ayayo Kamisato Ayato Ayayo', 'images/characters/ayato/profile.png', 'ayato', '5', 'Character', 'Hydro', 'Sword', 'Inazuma', 'CD'),
(578, 'Yelan', 'Yelan', 'images/characters/yelan/profile.png', 'yelan', '5', 'Character', 'Hydro', 'Bow', 'Inazuma', 'CR'),
(579, 'Kuki', 'Kuki Shinobu Cookie', 'images/characters/kuki/profile.png', 'kuki', '4', 'Character', 'Electro', 'Sword', 'Inazuma', 'HP'),
(580, 'Heizou', 'Heizou Shikanoin Heizou', 'images/characters/heizou/profile.png', 'heizou', '4', 'Character', 'Anemo', 'Catalyst', 'Inazuma', 'anemoDMG'),
(581, 'Collei', 'Collei', 'images/characters/collei/profile.png', 'collei', '4', 'Character', 'Dendro', 'Bow', 'Sumeru', 'ATK'),
(582, 'Tighnari', 'Tighnari', 'images/characters/tighnari/profile.png', 'tighnari', '5', 'Character', 'Dendro', 'Bow', 'Sumeru', 'dendroDMG'),
(584, 'Dori', 'Dori', 'images/characters/dori/profile.png', 'dori', '4', 'Characters', 'Electro', 'Claymore', 'Sumeru', 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `keyword` text NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `rarity` text NOT NULL,
  `category` text NOT NULL,
  `weapon` text NOT NULL,
  `stat` text DEFAULT NULL,
  `basemin` text NOT NULL,
  `basemax` text NOT NULL,
  `statmin` text DEFAULT NULL,
  `statmax` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `keyword`, `img`, `url`, `rarity`, `category`, `weapon`, `stat`, `basemin`, `basemax`, `statmin`, `statmax`) VALUES
(1, 'Apprentice\'s Notes', 'Apprentice\'s Notes Apprentices Notes', 'images/weapons/apprentices-notes/profile.png', 'apprentices-notes', '1', 'Weapon', 'Catalyst', 'n', '23', '185', 'n', 'n'),
(2, 'Beginner\'s Protector', 'Beginner\'s Protector Beginners Protector', 'images/weapons/beginners-protector/profile.png', 'beginners-protector', '1', 'Weapon', 'Polearm', 'n', '23', '185', 'n', 'n'),
(3, 'Dull Blade', 'Dull Blade', 'images/weapons/dull-blade/profile.png', 'dull-blade', '1', 'Weapon', 'Sword', 'n', '23', '185', 'n', 'n'),
(4, 'Hunter\'s Bow', 'Hunter\'s Bow Hunters Bow', 'images/weapons/hunters-bow/profile.png', 'hunters-bow', '1', 'Weapon', 'Bow', 'n', '23', '185', 'n', 'n'),
(5, 'Waster Greatsword', 'Waster Greatsword', 'images/weapons/waster-greatsword/profile.png', 'waster-greatsword', '1', 'Weapon', 'Claymore', 'n', '23', '185', 'n', 'n'),
(6, 'Iron Point', 'Iron Point', 'images/weapons/iron-point/profile.png', 'iron-point', '2', 'Weapon', 'Polearm', 'n', '33', '243', 'n', 'n'),
(7, 'Old Merc\'s Pal', 'Old Merc\'s Pal Old Mercs Pal', 'images/weapons/old-mercs-pal/profile.png', 'old-mercs-pal', '2', 'Weapon', 'Claymore', 'n', '33', '243', 'n', 'n'),
(8, 'Pocket Grimoire', 'Pocket Grimoire', 'images/weapons/pocket-grimoire/profile.png', 'pocket-grimoire', '2', 'Weapon', 'Catalyst', 'n', '33', '243', 'n', 'n'),
(9, 'Seasoned Hunter\'s Bow', 'Seasoned Hunter\'s Bow Seasoned Hunters Bow', 'images/weapons/seasoned-hunters-bow/profile.png', 'seasoned-hunters-bow', '2', 'Weapon', 'Bow', 'n', '33', '243', 'n', 'n'),
(10, 'Silver Sword', 'Silver Sword', 'images/weapons/silver-sword/profile.png', 'silver-sword', '2', 'Weapon', 'Sword', 'n', '33', '243', 'n', 'n'),
(11, 'Black Tassel', 'Black Tassel', 'images/weapons/black-tassel/profile.png', 'black-tassel', '3', 'Weapon', 'Polearm', 'HP', '38', '354', '10.2%', '46.9%'),
(12, 'Bloodtainted Greatsword', 'Bloodtainted Greatsword', 'images/weapons/bloodtainted-greatsword/profile.png', 'bloodtainted-greatsword', '3', 'Weapon', 'Claymore', 'EM', '38', '354', '41', '187'),
(13, 'Cool Steel', 'Cool Steel', 'images/weapons/cool-steel/profile.png', 'cool-steel', '3', 'Weapon', 'Sword', 'ATK', '39', '401', '7.7%', '35.2%'),
(14, 'Dark Iron Sword', 'Dark Iron Sword', 'images/weapons/dark-iron-sword/profile.png', 'dark-iron-sword', '3', 'Weapon', 'Sword', 'EM', '39', '401', '31', '141'),
(15, 'Debate Club', 'Debate Club', 'images/weapons/debate-club/profile.png', 'debate-club', '3', 'Weapon', 'Claymore', 'ATK', '39', '401', '7.7%', '35.2%'),
(16, 'Emerald Orb', 'Emerald Orb', 'images/weapons/emerald-orb/profile.png', 'emerald-orb', '3', 'Weapon', 'Catalyst', 'EM', '40', '448', '20', '94'),
(17, 'Ferrous Shadow', 'Ferrous Shadow', 'images/weapons/ferrous-shadow/profile.png', 'ferrous-shadow', '3', 'Weapon', 'Sword', 'HP', '39', '401', '7.7%', '35.2%'),
(18, 'Fillet Blade', 'Fillet Blade', 'images/weapons/fillet-blade/profile.png', 'fillet-blade', '3', 'Weapon', 'Sword', 'ATK', '39', '401', '7.7%', '35.2%'),
(19, 'Halberd', 'Halberd', 'images/weapons/halberd/profile.png', 'halberd', '3', 'Weapon', 'Polearm', 'ATK ', '40', '448', '5.1%', '23.4%'),
(20, 'Harbinger of Dawn', 'Harbinger of Dawn HOD', 'images/weapons/harbinger-of-dawn/profile.png', 'harbinger-of-dawn', '3', 'Weapon', 'Sword', 'CD', '39', '401', '10.2%', '46.9%'),
(21, 'Magic Guide', 'Magic Guide', 'images/weapons/magic-guide/profile.png', 'magic-guide', '3', 'Weapon', 'Catalyst', 'EM', '38', '354', '41', '187'),
(22, 'Messenger', 'Messenger', 'images/weapons/messenger/profile.png', 'messenger', '3', 'Weapon', 'Bow', 'CD', '40', '448', '6.8%', '31.2%'),
(23, 'Otherworldly Story', 'Otherworldly Story', 'images/weapons/otherworldly-story/profile.png', 'otherworldly-story', '3', 'Weapon', 'Catalyst', 'ER', '39', '401', '8.5%', '39.0%'),
(24, 'Raven Bow', 'Raven Bow', 'images/weapons/raven-bow/profile.png', 'raven-bow', '3', 'Weapon', 'Bow', 'EM', '40', '448', '20', '94'),
(25, 'Recurve Bow', 'Recurve Bow', 'images/weapons/recurve-bow/profile.png', 'recurve-bow', '3', 'Weapon', 'Bow', 'HP', '38', '354', '10.2%', '46.9%'),
(26, 'Sharpshooter\'s Oath', 'Sharpshooter\'s Oath Sharpshooters Oath', 'images/weapons/sharpshooters-oath/profile.png', 'sharpshooters-oath', '3', 'Weapon', 'Bow', 'CD', '39', '401', '10.2%', '46.9%'),
(27, 'Skyrider Greatsword', 'Skyrider Greatsword', 'images/weapons/skyrider-greatsword/profile.png', 'skyrider-greatsword', '3', 'Weapon', 'Claymore', 'physicalDMG', '39', '401', '9.6%', '43.9%'),
(28, 'Skyrider Sword', 'Skyrider Sword', 'images/weapons/skyrider-sword/profile.png', 'skyrider-sword', '3', 'Weapon', 'Sword', 'ER', '38', '354', '11.3%', '51.7%'),
(29, 'Slingshot', 'Slingshot', 'images/weapons/slingshot/profile.png', 'slingshot', '3', 'Weapon', 'Bow', 'CR', '38', '354', '6.8%', '31.2%'),
(30, 'Thrilling Tales of Dragon Slayers', 'Thrilling Tales of Dragon Slayers TTDS TTODS', 'images/weapons/thrilling-tales-of-dragon-slayers/profile.png', 'thrilling-tales-of-dragon-slayers', '3', 'Weapon', 'Catalyst', 'HP', '39', '401', '7.7%', '35.2%'),
(31, 'Traveler\'s Handy Sword', 'Traveler\'s Handy Sword Travelers Handy Sword THS', 'images/weapons/travelers-handy-sword/profile.png', 'travelers-handy-sword', '3', 'Weapon', 'Sword', 'DEF', '40', '448', '6.4%', '27.5%'),
(32, 'Twin Nephrite', 'Twin Nephrite TN', 'images/weapons/twin-nephrite/profile.png', 'twin-nephrite', '3', 'Weapon', 'Catalyst', 'CR', '40', '448', '3.4%', '15.6%'),
(33, 'White Iron Greatsword', 'White Iron Greatsword WIG', 'images/weapons/white-iron-greatsword/profile.png', 'white-iron-greatsword', '3', 'Weapon', 'Claymore', 'DEF', '39', '401', '9.6%', '43.9%'),
(34, 'White Tassel', 'White Tassel WT', 'images/weapons/white-tassel/profile.png', 'white-tassel', '3', 'Weapon', 'Polearm', 'CR', '39', '401', '5.1%', '23.4%'),
(35, 'Blackcliff Agate', 'Blackcliff Agate BCA', 'images/weapons/blackcliff-agate/profile.png', 'blackcliff-agate', '4', 'Weapon', 'Catalyst', 'CD', '42', '510', '12%', '55.1%'),
(36, 'Blackcliff Longsword', 'Blackcliff Longsword BCL', 'images/weapons/blackcliff-longsword/profile.png', 'blackcliff-longsword', '4', 'Weapon', 'Sword', 'CD', '44', '565', '8%', '36.8%'),
(37, 'Blackcliff Pole', 'Blackcliff Pole BCP', 'images/weapons/blackcliff-pole/profile.png', 'blackcliff-pole', '4', 'Weapon', 'Polearm', 'CD', '42', '510', '12%', '55.1%'),
(38, 'Blackcliff Slasher', 'Blackcliff Slasher BCS', 'images/weapons/blackcliff-slasher/profile.png', 'blackcliff-slasher', '4', 'Weapon', 'Claymore', 'CD', '42', '510', '12%', '55.1%'),
(39, 'Blackcliff Warbow ', 'Blackcliff Warbow BCW', 'images/weapons/blackcliff-warbow /profile.png', 'blackcliff-warbow', '4', 'Weapon', 'Bow', 'CD', '44', '565', '8%', '36.8%'),
(40, 'Compound Bow', 'Compound Bow CB', 'images/weapons/compound-bow/profile.png', 'compound-bow', '4', 'Weapon', 'Bow', 'physicalDMG', '41', '454', '15%', '69.0%'),
(41, 'Crescent Pike', 'Crescent Pike CP', 'images/weapons/crescent-pike/profile.png', 'crescent-pike', '4', 'Weapon', 'Polearm', 'physicalDMG', '44', '565', '7.5%', '34.5%'),
(42, 'Deathmatch', 'Deathmatch DM', 'images/weapons/deathmatch/profile.png', 'deathmatch', '4', 'Weapon', 'Polearm', 'CR', '41', '454', '8%', '36.8%'),
(43, 'Dragon\'s Bane', 'Dragon\'s Bane Dragons Bane DB', 'images/weapons/dragons-bane/profile.png', 'dragons-bane', '4', 'Weapon', 'Polearm', 'EM', '41', '454', '48', '221'),
(44, 'Eye of Perception', 'Eye of Perception EOP', 'images/weapons/eye-of-perception/profile.png', 'eye-of-perception', '4', 'Weapon', 'Catalyst', 'ATK', '41', '454', '12%', '55.1%'),
(45, 'Favonius Codex', 'Favonius Codex Fav Codex FC', 'images/weapons/favonius-codex/profile.png', 'favonius-codex', '4', 'Weapon', 'Catalyst', 'ER', '42', '510', '10.0%', '45.9%'),
(46, 'Favonius Greatsword', 'Favonius Greatsword Fav Greatsword FG', 'images/weapons/favonius-greatsword/profile.png', 'favonius-greatsword', '4', 'Weapon', 'Claymore', 'ER', '41', '454', '13.3%', '61.3%'),
(47, 'Favonius Lance', 'Favonius Lance Fav Lance FL', 'images/weapons/favonius-lance/profile.png', 'favonius-lance', '4', 'Weapon', 'Polearm', 'ER', '44', '565', '6.7%', '30.6%'),
(48, 'Favonius Sword', 'Favonius Sword Fav Sword FS', 'images/weapons/favonius-sword/profile.png', 'favonius-sword', '4', 'Weapon', 'Sword', 'ER', '41', '454', '13.3%', '61.3%'),
(49, 'Favonius Warbow', 'Favonius Warbow Fav Warbow FW', 'images/weapons/favonius-warbow/profile.png', 'favonius-warbow', '4', 'Weapon', 'Bow', 'ER', '41', '454', '13.3%', '61.3%'),
(50, 'Iron Sting', 'Iron Sting IS', 'images/weapons/iron-sting/profile.png', 'iron-sting', '4', 'Weapon', 'Sword', 'EM', '42', '510', '36', '165'),
(51, 'Lion\'s Roar', 'Lion\'s Roar Lions Roar LR', 'images/weapons/lions-roar/profile.png', 'lions-roar', '4', 'Weapon', 'Sword', 'ATK', '42', '510', '9%', '41.3%'),
(52, 'Mappa Mare', 'Mappa Mare MM', 'images/weapons/mappa-mare/profile.png', 'mappa-mare', '4', 'Weapon', 'Catalyst', 'EM', '44', '565', '24', '110'),
(53, 'Prototype Amber', 'Prototype Amber Prototype Malice PA\n', 'images/weapons/prototype-amber/profile.png', 'prototype-amber', '4', 'Weapon', 'Catalyst', 'HP', '42', '510', '9%', '41.3%'),
(54, 'Prototype Archaic', 'Prototype Archaic Prototype Aminus PA', 'images/weapons/prototype-archaic/profile.png', 'prototype-archaic', '4', 'Weapon', 'Claymore', 'ATK', '44', '565', '6%', '27.6%'),
(55, 'Prototype Crescent', 'Prototype Crescent PC', 'images/weapons/prototype-crescent/profile.png', 'prototype-crescent', '4', 'Weapon', 'Bow', 'ATK', '42', '510', '9%', '41.3%'),
(56, 'Prototype Rancour', 'Prototype Rancour PR', 'images/weapons/prototype-rancour/profile.png', 'prototype-rancour', '4', 'Weapon', 'Bow', 'physicalDMG', '44', '565', '7.5%', '34.5%'),
(57, 'Prototype Starglitter', 'Prototype Starglitter Prototype Grudge', 'images/weapons/prototype-starglitter/profile.png', 'prototype-starglitter', '4', 'Weapon', 'Polearm', 'ER', '42', '510', '10.0%', '45.9%'),
(58, 'Rainslasher', 'Rainslasher Painslasher RS', 'images/weapons/rainslasher/profile.png', 'rainslasher', '4', 'Weapon', 'Claymore', 'EM', '42', '510', '36', '165'),
(59, 'Royal Bow', 'Royal Bow RB', 'images/weapons/royal-bow/profile.png', 'royal-bow', '4', 'Weapon', 'Bow', 'ATK', '42', '510', '9%', '41.3%'),
(60, 'Royal Greatsword', 'Royal Greatsword RG', 'images/weapons/royal-greatsword/profile.png', 'royal-greatsword', '4', 'Weapon', 'Claymore', 'ATK', '44', '565', '6%', '27.6%'),
(61, 'Royal Grimoire', 'Royal Grimoire RG', 'images/weapons/royal-grimoire/profile.png', 'royal-grimoire', '4', 'Weapon', 'Catalyst', 'ATK', '44', '565', '6%', '27.6%'),
(62, 'Royal Longsword', 'Royal Longsword RLS', 'images/weapons/royal-longsword/profile.png', 'royal-longsword', '4', 'Weapon', 'Sword', 'ATK', '42', '510', '6%', '27.6%'),
(63, 'Rust', 'Rust', 'images/weapons/rust/profile.png', 'rust', '4', 'Weapon', 'Bow', 'ATK', '42', '510', '9%', '41.3%'),
(64, 'Sacrificial Bow', 'Sacrificial Bow Sac Bow', 'images/weapons/sacrificial-bow/profile.png', 'sacrificial-bow', '4', 'Weapon', 'Bow', 'ER', '44', '565', '6.7%', '30.6%'),
(65, 'Sacrificial Fragments', 'Sacrificial Fragments Sac Fragments', 'images/weapons/sacrificial-fragments/profile.png', 'sacrificial-fragments', '4', 'Weapon', 'Catalyst', 'EM', '41', '454', '48', '221'),
(66, 'Sacrificial Greatsword', 'Sacrificial Greatsword Sac Greatsword ', 'images/weapons/sacrificial-greatsword/profile.png', 'sacrificial-greatsword', '4', 'Weapon', 'Claymore', 'ER', '44', '565', '6.7%', '30.6%'),
(67, 'Sacrificial Sword', 'Sacrificial Sword Sac Sword', 'images/weapons/sacrificial-sword/profile.png', 'sacrificial-sword', '4', 'Weapon', 'Sword', 'ER', '41', '454', '13.3%', '61.3%'),
(68, 'Serpent Spine', 'Serpent Spine SS', 'images/weapons/serpent-spine/profile.png', 'serpent-spine', '4', 'Weapon', 'Claymore', 'CR', '42', '510', '6%', '27.6%'),
(69, 'Solar Pearl', 'Solar Pearl SP', 'images/weapons/solar-pearl/profile.png', 'solar-pearl', '4', 'Weapon', 'Catalyst', 'CR', '42', '510', '6%', '27.6%'),
(70, 'Sword of Descension', 'Sword of Descension', 'images/weapons/sword-of-descension/profile.png', 'sword-of-descension', '4', 'Weapon', 'Sword', 'ATK', '39', '440', '7.7%', '35.2%'),
(71, 'The Bell', 'The Bell', 'images/weapons/the-bell/profile.png', 'the-bell', '4', 'Weapon', 'Claymore', 'HP', '42', '510', '9%', '41.3%'),
(72, 'The Black Sword', 'The Black Sword TBS', 'images/weapons/the-black-sword/profile.png', 'the-black-sword', '4', 'Weapon', 'Sword', 'CR', '42', '510', '6%', '27.6%'),
(73, 'The Flute', 'The Flute', 'images/weapons/the-flute/profile.png', 'the-flute', '4', 'Weapon', 'Sword', 'ATK', '42', '510', '9%', '41.3%'),
(74, 'The Stringless', 'The Stringless', 'images/weapons/the-stringless/profile.png', 'the-stringless', '4', 'Weapon', 'Bow', 'EM', '42', '510', '36', '165'),
(75, 'The Viridescent Hunt', 'The Viridescent Hunt', 'images/weapons/the-viridescent-hunt/profile.png', 'the-viridescent-hunt', '4', 'Weapon', 'Bow', 'CR', '42', '510', '6%', '27.6%'),
(76, 'The Widsith', 'The Widsith', 'images/weapons/the-widsith/profile.png', 'the-widsith', '4', 'Weapon', 'Catalyst', 'CD', '42', '510', '12%', '55.1%'),
(77, 'Whiteblind', 'Whiteblind WB', 'images/weapons/whiteblind/profile.png', 'whiteblind', '4', 'Weapon', 'Claymore', 'DEF', '42', '510', '11.3%', '51.7%'),
(78, 'Amos\' Bow', 'Amos\' Bow Amos Bow Amo Bow AB', 'images/weapons/amos-bow/profile.png', 'amos-bow', '5', 'Weapon', 'Bow', 'ATK', '46', '608', '10.8%', '49.6%'),
(79, 'Aquila Favonia', 'Aquila Favonia AF', 'images/weapons/aquila-favonia/profile.png', 'aquila-favonia', '5', 'Weapon', 'Sword', 'physicalDMG', '48', '674', '9%', '41.3%'),
(80, 'Lost Prayer to the Sacred Winds', 'Lost Prayer to the Sacred Winds LPTHSW LPSW', 'images/weapons/lost-prayer-to-the-sacred-winds/profile.png', 'lost-prayer-to-the-sacred-winds', '5', 'Weapon', 'Catalyst', 'CR', '46', '608', '7.2%', '33.1%'),
(81, 'Primordial Jade Winged-Spear', 'Primordial Jade Winged-Spear PJWS', 'images/weapons/primordial-jade-winged-spear/profile.png', 'primordial-jade-winged-spear', '5', 'Weapon', 'Polearm', 'CR', '48', '674', '4.8%', '22.1%'),
(82, 'Skyward Atlas', 'Skyward Atlas SA', 'images/weapons/skyward-atlas/profile.png', 'skyward-atlas', '5', 'Weapon', 'Catalyst', 'ATK', '48', '674', '7.2%', '33.1%'),
(83, 'Skyward Blade', 'Skyward Blade SB', 'images/weapons/skyward-blade/profile.png', 'skyward-blade', '5', 'Weapon', 'Sword', 'ER', '46', '608', '12%', '55.1%'),
(84, 'Skyward Harp', 'Skyward Harp SH', 'images/weapons/skyward-harp/profile.png', 'skyward-harp', '5', 'Weapon', 'Bow', 'CR', '48', '674', '4.8%', '22.1%'),
(85, 'Skyward Pride', 'Skyward Pride SP', 'images/weapons/skyward-pride/profile.png', 'skyward-pride', '5', 'Weapon', 'Claymore', 'ER', '48', '674', '8%', '36.8%'),
(86, 'Skyward Spine', 'Skyward Spine SS', 'images/weapons/skyward-spine/profile.png', 'skyward-spine', '5', 'Weapon', 'Polearm', 'ER', '48', '674', '8%', '36.8%'),
(87, 'Wolf\'s Gravestone', 'Wolf\'s Gravestone Wolfs Gravestone Wolf Gravestone WGS', 'images/weapons/wolfs-gravestone/profile.png', 'wolfs-gravestone', '5', 'Weapon', 'Claymore', 'ATK', '46', '608', '10.8%', '49.6%'),
(88, 'Royal Spear', 'Royal Spear RS', 'images/weapons/royal-spear/profile.png', 'royal-spear', '4', 'Weapon', 'Polearm', 'ATK', '44', '565', '6%', '27.6%'),
(89, 'Memory of Dust', 'Memory of Dust MOD', 'images/weapons/memory-of-dust/profile.png', 'memory-of-dust', '5', 'Weapon', 'Catalyst', 'ATK', '46', '608', '10.8%', '49.6%'),
(90, 'The Unforged', 'The Unforged', 'images/weapons/the-unforged/profile.png', 'the-unforged', '5', 'Weapon', 'Claymore', 'ATK', '46', '608', '10.8%', '49.6%'),
(91, 'Vortex Vanquisher', 'Vortex Vanquisher VV', 'images/weapons/vortex-vanquisher/profile.png', 'vortex-vanquisher', '5', 'Weapon', 'Polearm', 'ATK', '46', '608', '10.8%', '49.6%'),
(92, 'Dragonspine Spear', 'Dragonspine Spear DSP', 'images/weapons/dragonspine-spear/profile.png', 'dragonspine-spear', '4', 'Weapon', 'Polearm', 'physicalDMG', '41', '454', '15%', '69.0%'),
(93, 'Festering Desire', 'Festering Desire FD', 'images/weapons/festering-desire/profile.png', 'festering-desire', '4', 'Weapon', 'Sword', 'ER', '42', '510', '10.0%', '45.9%'),
(94, 'Frostbearer', 'Frostbearer', 'images/weapons/frostbearer/profile.png', 'frostbearer', '4', 'Weapon', 'Catalyst', 'ATK', '42', '510', '9%', '41.3%'),
(95, 'Snow-Tombed Starsilver', 'Snow-Tombed Starsilver Snow Tombed Starsilver STS', 'images/weapons/snow-tombed-starsilver/profile.png', 'snow-tombed-starsilver', '4', 'Weapon', 'Claymore', 'physicalDMG', '44', '565', '7.5%', '34.5%'),
(96, 'Primordial Jade Cutter', 'Primordial Jade Cutter PJC', 'images/weapons/primordial-jade-cutter/profile.png', 'primordial-jade-cutter', '5', 'Weapon', 'Sword', 'CR', '44', '542', '9.6%', '44.1%'),
(97, 'Staff of Homa', 'Staff of Homa SH SOH', 'images/weapons/staff-of-homa/profile.png', 'staff-of-homa', '5', 'Weapon', 'Polearm', 'CD', '46', '608', '14.4%', '66.2%'),
(98, 'Summit Shaper', 'Summit Shaper SS', 'images/weapons/summit-shaper/profile.png', 'summit-shaper', '5', 'Weapon', 'Sword', 'ATK', '46', '608', '10.8%', '49.6%'),
(99, 'Lithic Blade', 'Lithic Blade LB', 'images/weapons/lithic-blade/profile.png', 'lithic-blade', '4', 'Weapon', 'Claymore', 'ATK', '42', '510', '9%', '41.3%'),
(100, 'Lithic Spear', 'Lithic Spear LS', 'images/weapons/lithic-spear/profile.png', 'lithic-spear', '4', 'Weapon', 'Polearm', 'ATK', '44', '565', '6%', '27.6%'),
(101, 'Alley Hunter', 'Alley Hunter AH', 'images/weapons/alley-hunter/profile.png', 'alley-hunter', '4', 'Weapon', 'Bow', 'ATK', '44', '565', '6%', '27.6%'),
(102, 'The Alley Flash', 'The Alley Flash AF', 'images/weapons/the-alley-flash/profile.png', 'the-alley-flash', '4', 'Weapon', 'Sword', 'EM', '45', '620', '12', '55'),
(103, 'Windblume Ode', 'Windblume Ode WO WBO', 'images/weapons/windblume-ode/profile.png', 'windblume-ode', '4', 'Weapon', 'Bow', 'EM', '42', '510', '36', '165'),
(104, 'Wine and Song', 'Wine and Song WS WAS', 'images/weapons/wine-and-song/profile.png', 'wine-and-song', '4', 'Weapon', 'Catalyst', 'ER', '44', '565', '6.7%', '30.6%'),
(105, 'Elegy for the End', 'Elegy for the End EFTD EE', 'images/weapons/elegy-for-the-end/profile.png', 'elegy-for-the-end', '5', 'Weapon', 'Bow', 'ER', '46', '608', '12%', '55.1%'),
(106, 'Song of Broken Pines', 'Song of Broken Pines SOBP SBP', 'images/weapons/song-of-broken-pines/profile.png', 'song-of-broken-pines', '5', 'Weapon', 'Claymore', 'physicalDMG', '49', '741', '4.5%', '20.7%'),
(107, 'Dodoco Tales', 'Dodoco Tales DT DDT', 'images/weapons/dodoco-tales/profile.png', 'dodoco-tales', '4', 'Weapon', 'Catalyst', 'ATK', '41', '454', '12%', '(55.1%'),
(108, 'Mitternachts Waltz', 'Mitternachts Waltz MW Fischl Bow Fish Bow', 'images/weapons/mitternachts-waltz/profile.png', 'mitternachts-waltz', '4', 'Weapon', 'Bow', 'physicalDMG', '42', '510', '11.3%', '51.7%'),
(109, 'Freedom-Sworn', 'Freedom-Sworn Freedom Sworn FS', 'images/weapons/freedom-sworn/profile.png', 'freedom-sworn', '5', 'Weapon', 'Sword', 'EM', '46', '608', '43', '198'),
(110, 'Hamayumi', 'Hamayumi', 'images/weapons/hamayumi/profile.png', 'hamayumi', '4', 'Weapon', 'Bow', 'ATK', '41', '454', '12%', '55.1%'),
(111, 'Amenoma Kageuchi', 'Amenoma Kageuchi AK', 'images/weapons/amenoma-kageuchi/profile.png', 'amenoma-kageuchi', '4', 'Weapon', 'Sword', 'ATK', '41', '454', '12%', '55.1%'),
(112, 'Kitain Cross Spear', 'Kitain Cross Spear KCS', 'images/weapons/kitain-cross-spear/profile.png', 'kitain-cross-spear', '4', 'Weapon', 'Polearm', 'EM', '44', '565', '24', '110'),
(113, 'Katsuragikiri Nagamasa', 'Katsuragikiri Nagamasa KN', 'images/weapons/katsuragikiri-nagamasa/profile.png', 'katsuragikiri-nagamasa', '4', 'Weapon', 'Claymore', 'ER', '42', '510', '10.0%', '45.9%'),
(114, 'Hakushin Ring', 'Hakushin Ring HR', 'images/weapons/hakushin-ring/profile.png', 'hakushin-ring', '4', 'Weapon', 'Catalyst', 'ER', '44', '565', '6.7%', '30.6%'),
(115, 'Thundering Pulse', 'Thundering Pulse TP', 'images/weapons/thundering-pulse/profile.png', 'thundering-pulse', '5', 'Weapon', 'Bow', 'CD', '46', '608', '14.4%', '66.2%'),
(116, 'Mistsplitter Reforged', 'Mistsplitter Reforged MR', 'images/weapons/mistsplitter-reforged/profile.png', 'mistsplitter-reforged', '5', 'Weapon', 'Sword', 'CD', '48', '674', '9.6%', '44.1%'),
(117, '\"The Catch\"', '\"The Catch\" The Catch TC', 'images/weapons/the-catch/profile.png', 'the-catch', '4', 'Weapon', 'Polearm', 'ER', '42', '510', '10.0%', '45.9%'),
(118, 'Luxurious Sea-Lord', 'Luxurious Sea-Lord Luxurious Sea Lord LSL Fish', 'images/weapons/luxurious-sea-lord/profile.png', 'luxurious-sea-lord', '4', 'Weapon', 'Claymore', 'ATK', '41', '454', '12%', '55.1%'),
(119, 'Predator', 'Predator', 'images/weapons/predator/profile.png', 'predator', '4', 'Weapon', 'Bow', 'ATK', '42', '510', '9%', '41.3%'),
(120, 'Engulfing Lightning', 'Engulfing Lightning EL', 'images/weapons/engulfing-lightning/profile.png', 'engulfing-lightning', '5', 'Weapon', 'Polearm', 'ER', '46', '608', '12%', '55.1%'),
(121, 'Everlasting Moonglow', 'Everlasting Moonglow EM ELMG Donut', 'images/weapons/everlasting-moonglow/profile.png', 'everlasting-moonglow', '5', 'Weapon', 'Catalyst', 'HP', '46', '608', '10.8%', '49.6%'),
(122, 'Akuoumaru', 'Akuoumaru', 'images/weapons/akuoumaru/profile.png', 'akuoumaru', '4', 'Weapon', 'Claymore', 'ATK', '42', '510', '9%', '41.3%'),
(123, 'Mouun\'s Moon', 'Mouun\'s Moon Mouuns Moon MM', 'images/weapons/mouuns-moon/profile.png', 'mouuns-moon', '4', 'Weapon', 'Bow', 'ATK', '44', '565', '6%', '27.6%'),
(124, 'Wavebreaker\'s Fin', 'Wavebreaker\'s Fin Wavebreakers Fin WF', 'images/weapons/wavebreakers-fin/profile.png', 'wavebreakers-fin', '4', 'Weapon', 'Polearm', 'ATK', '45', '620', '3%', '13.8%'),
(125, 'Polar Star', 'Polar Star PS', 'images/weapons/polar-star/profile.png', 'polar-star', '5', 'Weapon', 'Bow', 'CR', '46', '608', '7.2%', ' 33.1%'),
(126, 'Cinnabar Spindle', 'Cinnabar Spindle CS', 'images/weapons/cinnabar-spindle/profile.png', 'cinnabar-spindle', '4', 'Weapon', 'Sword', 'DEF', '41', '454', '15%', '69.0%'),
(127, 'Redhorn Stone­thresher', 'Redhorn Stone­thresher RS RHST', 'images/weapons/redhorn-stonethresher/profile.png', 'redhorn-stonethresher', '5', 'Weapon', 'Claymore', 'CD', '44', '542', '19.2%', '88.2%'),
(128, 'Calamity Queller', 'Calamity Queller CQ', 'images/weapons/calamity-queller/profile.png', 'calamity-queller', '5', 'Weapon', 'Polearm', 'ATK', '49', '741', '3.6%', '16.5%'),
(129, 'Oathsworn Eye', 'Oathsworn Eye OE', 'images/weapons/oathsworn-eye/profile.png', 'oathsworn-eye', '4', 'Weapon', 'Catalyst', 'ATK', '44', '565', '6%', '27.6%'),
(130, 'Kagura\'s Verity', 'Kagura\'s Verity Kaguras Verity KV', 'images/weapons/kaguras-verity/profile.png', 'kaguras-verity', '5', 'Weapon', 'Catalyst', 'CD', '46', '608', '14.4%', '66.2%'),
(131, 'Haran Geppaku Futsu', 'Haran Geppaku Futsu HGF', 'images/weapons/haran-geppaku-futsu/profile.png', 'haran-geppaku-futsu', '5', 'Weapon', 'Sword', 'CR', '46', '608', '7.2%', '33.1%'),
(132, 'Fading Twilight', 'Fading Twilight FT', 'images/weapons/fading-twilight/profile.png', 'fading-twilight', '4', 'Weapon', 'Bow', 'ER', '44', '565', '6.7%', '30.6%'),
(133, 'Aqua Simulacra', 'Aqua Simulacra AS', 'images/weapons/aqua-simulacra/profile.png', 'aqua-simulacra', '5', 'Weapon', 'Bow', 'CD', '44', '542', '19.2%', '88.2%'),
(134, 'Kagotsurube Isshin', 'Kagotsurube Isshin KI', 'images/weapons/kagotsurube-isshin/profile.png', 'kagotsurube-isshin', '4', 'Weapon', 'Sword', 'ATK', '42', '510', '9%', '41.3%'),
(135, 'End of the Line', 'End of the Line EOFL', 'images/weapons/end-of-the-line/profile.png', 'end-of-the-line', '4', 'Weapon', 'Bow', 'ER', '42', '510', '10.0%', '45.9%'),
(136, 'Forest Regalia', 'Forest Regalia FR', 'images/weapons/forest-regalia/profile.png', 'forest-regalia', '4', 'Weapon', 'Claymore', 'ER', '44', '565', '6.7%', '30.6%'),
(137, 'Fruit of Fulfillment', 'Fruit of Fulfillment FOF FF', 'images/weapons/fruit-of-fulfillment/profile.png', 'fruit-of-fulfillment', '4', 'Weapon', 'Catalyst', 'ER', '42', '510', '10.0%', '45.9%'),
(138, 'King\'s Squire', 'King\'s Squire Kings Squire KS', 'images/weapons/kings-squire/profile.png', 'kings-squire', '4', 'Weapon', 'Bow', 'ATK', '41', '454', '12%', '55.1%'),
(139, 'Moonpiercer', 'Moonpiercer', 'images/weapons/moonpiercer/profile.png', 'moonpiercer', '4', 'Weapon', 'Polearm', 'EM', '44', '565', '24', '110'),
(140, 'Sapwood Blade', 'Sapwood Blade SB', 'images/weapons/sapwood-blade/profile.png', 'sapwood-blade', '4', 'Weapon', 'Sword', 'ER', '44', '565', '6.7%', '30.6%'),
(141, 'Hunter\'s Path', 'Hunter\'s Path Hunters Path HP', 'images/weapons/hunters-path/profile.png', 'hunters-path', '5', 'Weapon', 'Bow', 'CR', '44', '542', '9.6%', '44.1%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artifacts`
--
ALTER TABLE `artifacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artifacts`
--
ALTER TABLE `artifacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=585;

--
-- AUTO_INCREMENT for table `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
