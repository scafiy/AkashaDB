-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 11:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akashadb`
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
  `flowerdescription` text NOT NULL,
  `twopiece` text NOT NULL,
  `fourpiece` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artifacts`
--

INSERT INTO `artifacts` (`id`, `name`, `keywords`, `img`, `url`, `category`, `raritymax`, `raritymin`, `flowerdescription`, `twopiece`, `fourpiece`) VALUES
(1, 'Initiate', 'Initiate', 'images/artifacts/Initiate/flower.png', 'Initiate', 'Artifact', '1', '1', 'A small flower. Cute and adorable, just like the early spring of North Teyvat.', '', ''),
(2, 'Adventurer', 'Adventurer', 'images/artifacts/adventurer/flower.png', 'adventurer', 'Artifact', '3', '1', 'A resilient flower that survived the harsh environment of an ancient city. It is now proudly worn like a medal.', 'Max HP increased by 1,000.', 'Opening a chest regenerates 30% Max HP over 5s.'),
(3, 'Lucky Dog', 'Lucky Dog LD', 'images/artifacts/lucky-dog/flower.png', 'lucky-dog', 'Artifact', '3', '1', 'A four-leaf clover that grows in the wild. It was picked because it is said to bring good luck.', 'DEF increased by 100.', 'Picking up Mora restores 300 HP.'),
(4, 'Traveling Doctor', 'Traveling Doctor TD', 'images/artifacts/traveling-doctor/flower.png', 'traveling-doctor', 'Artifact', '3', '1', 'A precious medicinal ingredient that has lost all medicinal value after years in storage.', 'Increases incoming healing by 20%.', 'Using Elemental Burst restores 20% HP.'),
(5, 'Resolution of Sojourner', 'Resolution of Sojourner ROS', 'images/artifacts/resolution-of-sojourner/flower.png', 'resolution-of-sojourner', 'Artifact', '4', '3', 'A small cerulean flower with somebody\'s ribbon pinned to the stem.', 'ATK +18%.', 'Increases Charged Attack CRIT Rate by 30%.'),
(6, 'Tiny Miracle', 'Tiny Miracle TM', 'images/artifacts/tiny-miracle/flower.png', 'tiny-miracle', 'Artifact', '4', '3', 'A flower that grew from a rock, breaking through the stone as it strove to reach the light.', 'All Elemental RES increased by 20%.', 'Incoming Elemental DMG increases corresponding Elemental RES by 30% for 10s. Can only occur once every 10s.'),
(7, 'Berserker', 'Berser Blood-Soakedker Blood Soaked', 'images/artifacts/berserker/flower.png', 'berserker', 'Artifact', '4', '3', 'An exquisite flower that has been dyed red. It represents the qualities of the Berserker.', 'CRIT Rate +12%.', 'When HP is below 70%, CRIT Rate increases by an additional 24%.'),
(8, 'Instructor', 'Instructor', 'images/artifacts/instructor/flower.png', 'instructor', 'Artifact', '4', '3', 'Whenever the instructor wore this brooch, it meant there would be no training sessions that day.', 'Increases Elemental Mastery by 80.', 'Upon triggering an Elemental Reaction, increases all party members\' Elemental Mastery by 120 for 8s.'),
(9, 'The Exile', 'The Exile TE', 'images/artifacts/the-exile/flower.png', 'the-exile', 'Artifact', '4', '3', 'A withered flower worn on the shirt. Its former owner insisted on wearing it even in exile, so it must mean something.', 'Energy Recharge +20%.', 'Using an Elemental Burst regenerates 2 Energy for all party members (excluding the wearer) every 2s for 6s. This effect cannot stack.'),
(10, 'Defender\'s Will', 'Defender\'s Will Defenders Will Defender Will DW', 'images/artifacts/defenders-will/flower.png', 'defenders-will', 'Artifact', '4', '3', 'An iris that was cherished by the Guardian. Unfortunately, the chance never came for it to be given to whom the Guardian loved.', 'DEF +30%.', 'For each different element present in your own party, the wearer\'s Elemental RES to that corresponding element is increased by 30%.'),
(11, 'Brave Heart', 'Brave Heart BH', 'images/artifacts/brave-heart/flower.png', 'brave-heart', 'Artifact', '4', '3', 'A simple flower brooch that is a keepsake from someone\'s first adventure.', ' ATK +18%.', 'ncreases DMG by 30% against opponents with more than 50% HP.'),
(12, 'Martial Artist', 'Martial Artist MA', 'images/artifacts/martial-artist/flower.png', 'martial-artist', 'Artifact', '4', '3', 'http://localhost/Akasha/artifacts/martial-artist.php', 'Increases Normal Attack and Charged Attack DMG by 15%.', 'After using Elemental Skill, increases Normal Attack and Charged Attack DMG by 25% for 8s.'),
(13, 'Gambler', 'Gambler', 'images/artifacts/gambler/flower.png', 'gambler', 'Artifact', '4', '3', 'This particular kind of red flower was the only thing that could alleviate the Martial Artist\'s pain.', 'Increases Elemental Skill DMG by 20%.', 'Defeating an opponent has 100% chance to remove Elemental Skill CD. Can only occur once every 15s.'),
(14, 'Scholar', 'Scholar', 'images/artifacts/scholar/flower.png', 'scholar', 'Artifact', '4', '3', 'A dried flower used as a bookmark, it had absorbed the scent from the pages.', 'Energy Recharge +20%.', 'Gaining Elemental Particles or Orbs gives 3 Energy to all party members who have a bow or a catalyst equipped. Can only occur once every 3s.'),
(15, 'Prayers for Illumination', 'Prayers for Illumination Prayer for Illumination PFI POI', 'images/artifacts/prayers-for-illumination/flower.png', 'prayers-for-illumination', 'Artifact', '4', '3', 'A tiara worn by those tasked with offering sacrifices in ancient times. After being subjected to the dancing sacrificial flames year in and year out, it possesses remarkable resistance.', 'Affected by Pyro for 40% less time.', ''),
(16, 'Prayers for Destiny', 'Prayers for Destiny Prayer for Destiny PFD POD', 'images/artifacts/prayers-for-destiny/flower.png', 'prayers-for-destiny', 'Artifact', '4', '3', 'A tiara worn by those tasked with offering sacrifices in ancient times. Because it was submerged in water year in and year out, it possesses remarkable resistance.', 'Affected by Hydro for 40% less time.', ''),
(17, 'Prayers for Wisdom', 'Prayers for Wisdom Prayer for Wisdom PFW POW', 'images/artifacts/prayers-to-springtime/flower.png', 'prayers-for-wisdom', 'Artifact', '4', '3', 'A tiara worn by those tasked with offering sacrifices in ancient times. Because it was submerged in water year in and year out, it possesses remarkable resistance.', 'Affected by Electro for 40% less time.', ''),
(18, 'Prayers to Springtime', 'Prayers to Springtime Prayer to Springtime PTS POS', 'images/artifacts/prayers-to-springtime/flower.png', 'prayers-to-springtime', 'Artifact', '4', '3', 'A tiara worn by those tasked with offering sacrifices in ancient times. Because it was submerged in water year in and year out, it possesses remarkable resistance.', 'Affected by Cryo for 40% less time.', ''),
(19, 'Gladiator\'s Finale', 'Gladiator\'s Finale Gladiators Finale Gladiator Finale Glad GF', 'images/artifacts/gladiators-finale/flower.png', 'gladiators-finale', 'Artifact', '5', '4', 'No one knows why the legendary gladiator wore this flower on his chest. It was the brutal warrior\'s only weakness.', 'ATK +18%.', 'If the wielder of this artifact set uses a Sword, Claymore or Polearm, increases their Normal Attack DMG by 35%.'),
(20, 'Wanderer\'s Troupe', 'Wanderer\'s Troupe Wanderers Troupe Wanderer Troupe WT', 'images/artifacts/wanderers-troupe/flower.png', 'wanderers-troupe', 'Artifact', '5', '4', 'A small flower-shaped insignia. If you listen carefully, you can almost hear a flute playing and voices singing.', 'Increases Elemental Mastery by 80.', 'Increases Charged Attack DMG by 35% if the character uses a Catalyst or Bow.'),
(21, 'Noblesse Oblige', 'Noblesse Oblige NO', 'images/artifacts/noblesse-oblige/flower.png', 'noblesse-oblige', 'Artifact', '5', '4', 'A satin flower with a glossy finish, fit for an elegant gathering. It still looks as distinguished as it did on the day it was cast aside.', 'Elemental Burst DMG +20%.', 'Using an Elemental Burst increases all party members\' ATK by 20% for 12s. This effect cannot stack.'),
(22, 'Bloodstained Chivalry', 'Bloodstained Chivalry Bloodstain Chivalry BC BSC', 'images/artifacts/bloodstained-chivalry/flower.png', 'bloodstained-chivalry', 'Artifact', '5', '4', 'A dried flower stained black with blood and now as hard as steel. Probably some sort of a memento for its former master.', 'Physical DMG Bonus +25%.', 'After defeating an opponent, increases Charged Attack DMG by 50%, and reduces its Stamina cost to 0 for 10s. Also triggers with wild animals such as boars, squirrels and frogs.'),
(23, 'Maiden Beloved', 'Maiden Beloved MB Maidens', 'images/artifacts/maiden-beloved/flower.png', 'maiden-beloved', 'Artifact', '5', '4', 'A fragrant flower that will bloom for all eternity and never wither.', ' Character Healing Effectiveness +15%.', 'Using an Elemental Skill or Burst increases healing received by all party members by 20% for 10s.'),
(24, 'Viridescent Venerer', 'Viridescent Venerer VV', 'images/artifacts/viridescent-venerer/flower.png', 'viridescent-venerer', 'Artifact', '5', '4', 'A wild flower that was once a ubiquitous sight in its homeland. It was picked by a hunter who wore it on their chest.', 'Anemo DMG Bonus +15%.', 'Increases Swirl DMG by 60%. Decreases opponent\'s Elemental RES to the element infused in the Swirl by 40% for 10s.'),
(25, 'Archaic Petra', 'Archaic Petra AP', 'images/artifacts/archaic-petra/flower.png', 'archaic-petra', 'Artifact', '5', '4', 'A flower born of the minerals and rocks of cliffside cracks. The way its petals blow in the wind makes it seem alive.', 'Geo DMG Bonus +15%.', 'Upon obtaining an Elemental Shard created through a Crystallize Reaction, all party members gain 35% DMG Bonus for that particular element for 10s. Only one form of Elemental DMG Bonus can be gained in this manner at any one time.'),
(26, 'Retracing Bolide', 'Retracing Bolide RB', 'images/artifacts/retracing-bolide/flower.png', 'retracing-bolide', 'Artifact', '5', '4', 'A man-made flower in eternal bloom. Who knows if there truly is life in there?', 'Increases Shield Strength by 35%.', 'While protected by a shield, gain an additional 40% Normal and Charged Attack DMG.'),
(27, 'Thundersoother', 'Thundersoother Thunder Soother TS', 'images/artifacts/thundersoother/flower.png', 'thundersoother', 'Artifact', '5', '4', 'A flower that blooms even amidst ferocious thunder and lightning. To this day, it still grants courage to travelers in thunderstorms.', 'Electro RES increased by 40%.', 'Increases DMG against opponents affected by Electro by 35%.'),
(28, 'Thundering Fury', 'Thundering Fury TF', 'images/artifacts/thundering-fury/flower.png', 'thundering-fury', 'Artifact', '5', '4', 'A lightning-infused flower, somehow spared the fate of being trodden underfoot or reduced to ash by the furious purple fire, making it the sole survivor on the day of disaster.', '.Electro DMG Bonus +15%.', 'Increases DMG caused by Overloaded, Electro-Charged, Superconduct, and Hyperbloom by 40%, and the DMG Bonus conferred by Aggravate is increased by 20%. When Quicken or the aforementioned Elemental Reactions are triggered, Elemental Skill CD is decreased by 1s. Can only occur once every 0.8s.'),
(29, 'Lavawalker', 'Lavawalker LW', 'images/artifacts/lavawalker/flower.png', 'lavawalker', 'Artifact', '5', '4', 'A flower that blooms amidst burning flames. It is said that long ago, a sage once wore it as he walked into a sea of fire.', 'Pyro RES increased by 40%.', 'Increases DMG against opponents affected by Pyro by 35%.'),
(30, 'Crimson Witch of Flames', 'Crimson Witch of Flames CWOF CW CWF', 'images/artifacts/crimson-witch-of-flames/flower.png', 'crimson-witch-of-flames', 'Artifact', '5', '4', 'A flower touched by the witch who once dreamt of burning away all the demons in the world. The anonymous flames affectionately caress the hands of those who touch it.', '.Pyro DMG Bonus +15%.', 'Increases Overloaded and Burning, and Burgeon DMG by 40%. Increases Vaporize and Melt DMG by 15%. Using Elemental Skill increases the 2-Piece Set Bonus by 50% of its starting value for 10s. Max 3 stacks.'),
(31, 'Blizzard Strayer', 'Blizzard Strayer BS', 'images/artifacts/blizzard-strayer/flower.png', 'blizzard-strayer', 'Artifact', '5', '4', 'A long-extinct flower, covered in beads of frost, that once grew on the glaciers. There was a time when even the proudest and most arrogant warriors bowed before it.', 'Cryo DMG Bonus +15%.', 'When a character attacks an opponent affected by Cryo, their CRIT Rate is increased by 20%. If the opponent is Frozen, CRIT Rate is increased by an additional 20%.'),
(32, 'Heart of Depth', 'Heart of Depth HOD', 'images/artifacts/heart-of-depth/flower.png', 'heart-of-depth', 'Artifact', '5', '4', 'A mantle brooch that has lost its luster. The gold plating that once adorned it was ground away by the wind and the waves long ago.', 'Hydro DMG Bonus +15%.', 'After using an Elemental Skill, increases Normal Attack and Charged Attack DMG by 30% for 15s.'),
(33, 'Tenacity of the Millelith', 'Tenacity of the Millelith Tenacity of Millelith Tenacity Millelith TOM TM TOTM', 'images/artifacts/tenacity-of-the-millelith/flower.png', 'tenacity-of-the-millelith', 'Artifact', '5', '4', 'A flower made from gold leaf. It represents the glories and honors attained by its wearer', 'HP +20%.', 'When an Elemental Skill hits an opponent, the ATK of all nearby party members is increased by 20% and their Shield Strength is increased by 30% for 3s. This effect can be triggered once every 0.5s. This effect can still be triggered even when the character who is using this artifact set is not on the field.'),
(34, 'Pale Flame', 'Pale Flame PF', 'images/artifacts/pale-flame/flower.png', 'pale-flame', 'Artifact', '5', '4', 'A hard, blue artificial flower. Its petals shall never wither, nor shall its colors fade.', 'Physical DMG Bonus +25%.', ' When an Elemental Skill hits an opponent, ATK is increased by 9% for 7s. This effect stacks up to 2 times and can be triggered once every 0.3s. Once 2 stacks are reached, the 2-set effect is increased by 100%.'),
(35, 'Shimenawa\'s Reminiscence', 'Shimenawa\'s Reminiscence Shimenawas Reminiscence Shimenawa Reminiscence SR', 'images/artifacts/shimenawas-reminiscence/flower.png', 'shimenawas-reminiscence', 'Artifact', '5', '4', 'A lovely amulet made from twisted paper cord. It is said to hold the power to make wishes come true.', 'ATK +18%.', 'When casting an Elemental Skill, if the character has 15 or more Energy, they lose 15 Energy and Normal/Charged/Plunging Attack DMG is increased by 50% for 10s. This effect will not trigger again during that duration.'),
(36, 'Emblem of Severed Fate', 'Emblem of Severed Fate EOSF ESF', 'images/artifacts/emblem-of-severed-fate/flower.png', 'emblem-of-severed-fate', 'Artifact', '5', '4', 'Legends has it that this ornate hand guard was once fitted upon a sword gifted to the oni who betrayed the Shogun.', 'Energy Recharge +20%.', 'Increases Elemental Burst DMG by 25% of Energy Recharge. A maximum of 75% bonus DMG can be obtained in this way.'),
(37, 'Husk of Opulent Dreams', 'Husk of Opulent Dreams HOOD HFOD ', 'images/artifacts/husk-of-opulent-dreams/flower.png', 'husk-of-opulent-dreams', 'Artifact', '5', '4', 'A small golden ornament with six petals that shall never wilt. It symbolizes the transience of mortal glories.', 'DEF +30%.', 'A character equipped with this Artifact set will obtain the Curiosity effect in the following conditions: When on the field, the character gains 1 stack after hitting an opponent with a Geo attack, triggering a maximum of once every 0.3s. When off the field, the character gains 1 stack every 3s. Curiosity can stack up to 4 times, each providing 6% DEF and a 6% Geo DMG Bonus. When 6 seconds pass without gaining a Curiosity stack, 1 stack is lost.'),
(38, 'Ocean-Hued Clam', ' Ocean-Hued Clam Ocean Hued Clam OHD OC', 'images/artifacts/ocean-hued-clam/flower.png', 'ocean-hued-clam', 'Artifact', '5', '4', 'A soft flower that has taken on the many shades of the capricious ocean. It shines with wondrous colors under the moon\'s silver light.', 'Healing Bonus +15%.', 'When the character equipping this artifact set heals a character in the party, a Sea-Dyed Foam will appear for 3 seconds, accumulating the amount of HP recovered from healing (including overflow healing). At the end of the duration, the Sea-Dyed Foam will explode, dealing DMG to nearby opponents based on 90% of the accumulated healing. (This DMG is calculated similarly to Reactions such as Electro-Charged, and Superconduct, but it is not affected by Elemental Mastery, Character Levels, or Reaction DMG Bonuses). Only one Sea-Dyed Foam can be produced every 3.5 seconds. Each Sea-Dyed Foam can accumulate up to 30,000 HP (including overflow healing). There can be no more than one Sea-Dyed Foam active at any given time. This effect can still be triggered even when the character who is using this artifact set is not on the field.'),
(39, 'Vermillion Hereafter', 'Vermillion Hereafter VH', 'images/artifacts/vermillion-hereafter/flower.png', 'vermillion-hereafter', 'Artifact', '5', '4', 'An ancient memento. It still looks as alive as the being that preserved it several centuries ago.', 'ATK +18%.', 'After using an Elemental Burst. this character will gain the Nascent Light effect, increasing their ATK by 8% for 16s. When the character\'s HP decreases, their ATK will further increase by 10%. This increase can occur this way maximum of 4 times. This effect can be triggered once every 0.8s. Nascent Light will be dispelled when the character leaves the field. If an Elemental Burst is used again during the duration of Nascent Light, the original Nascent Light will be dispelled.'),
(40, 'Echoes of an Offering', 'Echoes of an Offering Echoe of an Offering Echoes of Offering EOAO EOO', 'images/artifacts/echoes-of-an-offering/flower.png', 'echoes-of-an-offering', 'Artifact', '5', '4', 'A jade carved into the shape of a flower. A phantom scent, here one instant and gone the next, swirls around it.', 'ATK +18%.', 'When Normal Attacks hit opponents, there is a 36% chance that it will trigger Valley Rite, which will increase Normal Attack DMG by 70% of ATK. This effect will be dispelled 0.05s after a Normal Attack deals DMG. If a Normal Attack fails to trigger Valley Rite, the odds of it triggering the next time will increase by 20%. This trigger can occur once every 0.2s.'),
(41, 'Deepwood Memories', 'Deepwood Memories DM', 'images/artifacts/deepwood-memories/flower.png', 'deepwood-memories', 'Artifact', '5', '4', 'This lovely gold-plated flower was plucked from the crown of the ruler of the forest.', 'Dendro DMG Bonus +15%', 'After Elemental Skills or Bursts hit opponents, the targets\' Dendro RES will be decreased by 30% for 8s. This effect can be triggered even if the equipping character is not on the field.'),
(42, 'Gilded Dreams', 'Gilded Dreams GD', 'images/artifacts/gilded-dreams/flower.png', 'gilded-dreams', 'Artifact', '5', '4', 'A flower bud made of hammered dark gold. Its crimson core is wrapped by petals that shall never open.', 'Elemental Mastery +80. ', 'Within 8s of triggering an Elemental Reaction, the character equipping this will obtain buffs based on the Elemental Type of the other party members, ATK is increased by 14% for each party member whose Elemental Type is the same as the equipping character, and Elemental Mastery is increased by 50 for every party member with a different Elemental Type. Each of the aforementioned buffs will count up to 3 characters. This effect can be triggered once every 8s. The character who equips this can still trigger its effects when not on the field.'),
(43, 'Desert Pavilion Chronicle', 'Desert Pavilion Chronicle DPC', 'images/artifacts/desert-pavilion-chronicle/flower.png', 'desert-pavilion-chronicle', 'Artifact', '5', '4', 'An artificial flower that shimmers with a strange light. If you incline your ear to it, you can vaguely hear charming laughter issuing from within.', 'Anemo DMG Bonus +15%.', 'When Charged Attacks hit opponents, the equipping character\'s Normal Attack SPD will increase by 10% while Normal, Charged, and Plunging Attack DMG will increase by 40% for 15s.'),
(51, 'Flower of Paradise Lost', 'Flower of Paradise Lost FOPL FPL', 'images/artifacts/flower-of-paradise-lost/flower.png', 'flower-of-paradise-lost', 'Artifact', '5', '5', 'An amethyst bloom that has been beautifully sculpted in the image of an ancient, extinct flower.', 'Increases Elemental Mastery by 80.', 'The equipping character\'s Bloom, Hyperbloom, and Burgeon reaction DMG are increased by 40%. Additionally, after the equipping character triggers Bloom, Hyperbloom, or Burgeon, they will gain another 25% bonus to the effect mentioned prior. Each stack of this lasts 10s. Max 4 stacks simultaneously. This effect can only be triggered once per second. The character who equips this can still trigger its effects when not on the field.');

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
  `stat` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `keywords`, `img`, `url`, `rarity`, `category`, `element`, `weapon`, `region`, `stat`, `description`) VALUES
(1, 'Aether', 'Aether Traveler Main Character Anemo Aether Anemo Traveler Anemo Main Character AMC AT AA Aether Traveler Main Character Geo Aether Geo Traveler Geo Main Character GMC GT GA Aether Traveler Main Character Dendro Aether Dendro Traveler Dendro Main Character DMC DT DA Aether Traveler Main Character Electro Aether Electro Traveler Electro Main Character EMC ET EA', 'images/characters/aether/profile.png', 'aether', '5', 'Characters', 'Anemo', 'Sword', 'none', 'ATK', 'A traveler from another world who had their only kin taken away, forcing them to embark on a journey to find The Seven.'),
(2, 'Lumine', 'Lumine Traveler Main Character Anemo Lumine Anemo Traveler Anemo Main Character AMC AT ALLumine Traveler Main Character Geo Lumine Geo Traveler Geo Main Character GMC GT GL Lumine Traveler Main Character Dendro Lumine Dendro Traveler Dendro Main Character DMC DT DL Lumine Traveler Main Character Electro Lumine Electro Traveler Electro Main Character EMC ET', 'images/characters/lumine/profile.png', 'lumine', '5', 'Characters', 'Anemo', 'Sword', 'none', 'ATK', 'A traveler from another world who had their only kin taken away, forcing them to embark on a journey to find The Seven.'),
(5, 'Amber', 'Amber', 'images/characters/amber/profile.png', 'amber', '4', 'Character', 'Pyro', 'Bow', 'Mondstadt', 'ATK', 'Always energetic and full of life, Amber\'s the best - albeit only - Outrider of the Knights of Favonius.'),
(6, 'Kaeya', 'Kaeya', 'images/characters/Kaeya/profile.png', 'kaeya', '4', 'Character', 'Cryo', 'Sword', 'Mondstadt', 'ER', 'A thinker in the Knights of Favonius with a somewhat exotic appearance.'),
(7, 'Lisa', 'Lisa Minic', 'images/characters/lisa/profile.png', 'lisa', '4', 'Character', 'Electro', 'Catalyst', 'Mondstadt', 'EM', 'The languid but knowledgeable Librarian of the Knights of Favonius, deemed by Sumeru Akademiya to be their most distinguished graduate in the past two centuries.'),
(8, 'Barbara', 'Barbara Pegg', 'images/characters/barbara/profile.png', 'barbara', '4', 'Character', 'Hydro', 'Catalyst', 'Mondstadt', 'HP', 'Every citizen of Mondstadt adores Barbara. She learned the word idol from a magazine.'),
(9, 'Razor', 'Razor', 'images/characters/razor/profile.png', 'razor', '4', 'Character', 'Electro', 'Claymore', 'Mondstadt', 'physicalDMG', 'A boy who lives among the wolves in Wolvendom of Mondstadt, away from human civilization. As agile as lightning.'),
(10, 'Xiangling', 'Xiangling Mao XL', 'images/characters/xiangling/profile.png', 'xiangling', '4', 'Character', 'Pyro', 'Polearm', 'Liyue', 'EM', 'A renowned chef from Liyue. She\'s extremely passionate about cooking and excels at making her signature hot and spicy dishes.'),
(11, 'Beidou', 'Beidou', 'images/characters/beidou/profile.png', 'beidou', '4', 'Character', 'Electro', 'Claymore', 'Liyue', 'electroDMG', 'Captain of her crew, The Crux. She\'s quite an unbound and forthright woman.'),
(12, 'Xingqiu', 'Xingqiu XQ', 'images/characters/xingqiu/profile.png', 'xingqiu', '4', 'Character', 'Hydro', 'Sword', 'Liyue', 'ATK', 'A young man carrying a longsword who is frequently seen at book booths. He has a chivalrous heart and yearns for justice and fairness for all.'),
(13, 'Ningguang', 'Ningguang', 'images/characters/ningguang/profile.png', 'ningguang', '4', 'Character', 'Geo', 'Catalyst', 'Liyue', 'geoDMG', 'The Tianquan of the Liyue Qixing. Her wealth is unsurpassed in all of Teyvat.'),
(14, 'Fischl', 'Fischl Fish Amy', 'images/characters/fischl/profile.png', 'fischl', '4', 'Character', 'Electro', 'Bow', 'Mondstadt', 'ATK', 'A mysterious girl who calls herself \"Prinzessin der Verurteilung\" and travels with a night raven named Oz.'),
(15, 'Bennett', 'Bennett', 'images/characters/bennett/profile.png', 'bennett', '4', 'Character', 'Pyro', 'Sword', 'Mondstadt', 'ER', 'A good-natured adventurer from Mondstadt who\'s unfortunately extremely unlucky.'),
(16, 'Noelle', 'Noelle', 'images/characters/noelle/profile.png', 'noelle', '4', 'Character', 'Geo', 'Claymore', 'Mondstadt', 'DEF', 'A maid who faithfully serves the Knights of Favonius. She dreams of joining their ranks someday.'),
(17, 'Chongyun', 'Chongyun', 'images/characters/chongyun/profile.png', 'chongyun', '4', 'Character', 'Cryo', 'Claymore', 'Liyue', 'ATK', 'A young exorcist from a family of exorcists. He does everything he can to suppress his abundance of yang energy.'),
(18, 'Sucrose', 'Sucrose', 'images/characters/sucrose/profile.png', 'sucrose', '4', 'Character', 'Anemo', 'Catalyst', 'Mondstadt', 'anemoDMG', 'An adepti disciple with a most unusual air about her. Having spent much time cultivating in isolation in Liyue\'s mountains, she has become every bit as cool and distant as the adepti themselves.'),
(19, 'Jean', 'Jean', 'images/characters/jean/profile.png', 'jean', '5', 'Character', 'Anemo', 'Sword', 'Mondstadt', 'HB', 'The righteous and rigorous Dandelion Knight, and Acting Grand Master of the Knights of Favonius of Mondstadt.'),
(20, 'Diluc', 'Diluc', 'images/characters/diluc/profile.png', 'diluc', '5', 'Character', 'Pyro', 'Claymore', 'Mondstadt', 'CR', 'The tycoon of a winery empire in Mondstadt, unmatched in every possible way.'),
(21, 'Qiqi', 'Qiqi', 'images/characters/qiqi/profile.png', 'qiqi', '5', 'Character', 'Cryo', 'Sword', 'Liyue', 'HB', 'An apprentice and herb gatherer at Bubu Pharmacy. An undead with a bone-white complexion, she seldom has much in the way of words or emotion.'),
(22, 'Mona', 'Mona Astrologist Mona Megistus', 'images/characters/mona/profile.png', 'mona', '5', 'Character', 'Hydro', 'Catalyst', 'Mondstadt', 'ER', 'A mysterious young astrologer who proclaims herself to be \"Astrologist Mona Megistus,\" and who possesses abilities to match the title. Erudite, but prideful.'),
(23, 'Keqing', 'Keqing KQ', 'images/characters/keqing/profile.png', 'keqing', '5', 'Character', 'Electro', 'Sword', 'Liyue', 'CD', 'The Yuheng of the Liyue Qixing. Keqing has much to say about Rex Lapis\' unilateral approach to policymaking in Liyue - but in truth, gods admire skeptics such as her quite a lot.'),
(24, 'Venti', 'Venti', 'images/characters/venti/profile.png', 'venti', '5', 'Character', 'Anemo', 'Bow', 'Mondstadt', 'ER', 'One of the many bards of Mondstadt, who freely wanders the city\'s streets and alleys.'),
(25, 'Klee', 'Klee', 'images/characters/klee/profile.png', 'klee', '5', 'Character', 'Pyro', 'Catalyst', 'Mondstadt', 'pyroDMG', 'An explosives expert and a regular at the Knights of Favonius\' confinement room. Also known as Fleeing Sunlight.'),
(26, 'Diona', 'Diona', 'images/characters/diona/profile.png', 'diona', '4', 'Character', 'Cryo', 'Bow', 'Mondstadt', 'cryoDMG', 'A young lady who has inherited trace amounts of non-human blood. She is the incredibly popular bartender of the Cat\'s Tail tavern.'),
(27, 'Tartaglia', 'Tartaglia Childe Ajax', 'images/characters/tartaglia/profile.png', 'tartaglia', '5', 'Character', 'Hydro', 'Bow', 'Liyue', 'hydroDMG', 'No. 11 of The Harbingers, also known as \"Childe.\" His name is highly feared onthe battlefield.'),
(28, 'Xinyan', 'Xinyan XN', 'images/characters/xinyan/profile.png', 'xinyan', '4', 'Character', 'Pyro', 'Claymore', 'Liyue', 'ATK', 'Liyue\'s sole rock \'n\' roll musician. She rebels against ossified prejudices using her music and passionate singing.'),
(29, 'Zhongli', 'Zhongli ZL', 'images/characters/zhongli/profile.png', 'zhongli', '5', 'Character', 'Geo', 'Polearm', 'Liyue', 'geoDMG', 'A mysterious expert contracted by the Wangsheng Funeral Parlor. Extremely knowledgeable in all things.'),
(30, 'Albedo', 'Albedo', 'images/characters/albedo/profile.png', 'albedo', '5', 'Character', 'Geo', 'Sword', 'Mondstadt', 'geoDMG', 'A genius known as the Kreideprinz, he is the Chief Alchemist and Captain of the Investigation Team of the Knights of Favonius.'),
(31, 'Ganyu', 'Ganyu Cocogoat', 'images/characters/ganyu/profile.png', 'ganyu', '5', 'Character', 'Cryo', 'Bow', 'Liyue', 'CD', 'The secretary at Yuehai Pavilion. The blood of the qilin, an illuminated beast, flows within her veins.'),
(32, 'Xiao', 'Xiao', 'images/characters/xiao/profile.png', 'xiao', '5', 'Character', 'Anemo', 'Polearm', 'Liyue', 'CR', 'A Yaksha Adeptus who defends Liyue. Also heralded as the \"Conquer of Demons\" or \"Vigilant Yaksha\"'),
(33, 'Hu Tao', 'Hu Tao HuTao Hu-Tao Who Tao WhoTao HT', 'images/characters/hutao/profile.png', 'hutao', '5', 'Character', 'Pyro', 'Polearm', 'Liyue', 'CD', 'The 77th Director of the Wangsheng Funeral Parlor. She took over the business at a rather young age.'),
(34, 'Rosaria', 'Rosaria', 'images/characters/rosaria/profile.png', 'rosaria', '4', 'Character', 'Cryo', 'Polearm', 'Mondstadt', 'ATK', 'A sister of the church, though you wouldn\'t know it if it weren\'t for her attire. Known for her sharp, cold words and manner, she often works alone.'),
(35, 'Yanfei', 'Yanfei Feiyan', 'images/characters/yanfei/profile.png', 'yanfei', '4', 'Character', 'Pyro', 'Catalyst', 'Liyue', 'pyroDMG', 'A well-known legal adviser active in Liyue Harbor. A briliant young lady in whose veins runs the blood of an illuminated beast.'),
(36, 'Eula', 'Eula End User License Agreement', 'images/characters/eula/profile.png', 'eula', '5', 'Character', 'Cryo', 'Claymore', 'Mondstadt', 'CD', 'The Spindrift Knight, a scion of old aristocracy, and the Captain of the Knights of Favonius Reconnaissance Company.'),
(37, 'Kazuha', 'Kazuha Kaedehara Kazuha', 'images/characters/kazuha/profile.png', 'kazuha', '5', 'Character', 'Anemo', 'Sword', 'Inazuma', 'EM', 'A wandering samurai from Inazuma who is currently with Liyue\'s Crux Fleet. A gentle and carefree soul whose heart hides a great many burdens from the past.'),
(40, 'Ayaka', 'Ayaka Kamisato Ayaka Ayaya', 'images/characters/ayaka/profile.png', 'ayaka', '5', 'Character', 'Cryo', 'Sword', 'Inazuma', 'CD', 'Daughter of the Yashiro Commission\'s Kamisato Clan. Dignified and elegant, as well as wise and strong.'),
(41, 'Sayu', 'Sayu', 'images/characters/sayu/profile.png', 'sayu', '4', 'Character', 'Anemo', 'Claymore', 'Inazuma', 'EM', 'A pint-sized ninja attached to the Shuumatsuban, who always seems sleep-deprived.'),
(42, 'Yoimiya', 'Yoimiya', 'images/characters/yoimiya/profile.png', 'yoimiya', '5', 'Character', 'Pyro', 'Bow', 'Inazuma', 'CR', 'Owner of Naganohara Fireworks. Known as the \"Queen of the Summer Festival,\" she excels in her craft of creating fireworks that symbolize people\'s hopes and dreams.'),
(43, 'Aloy', 'Aloy', 'images/characters/aloy/profile.png', 'aloy', '5-5', 'Character', 'Cryo', 'Bow', 'NULL', 'cryoDMG', 'Formerly an outcast, now a hunter of unparalleled skill. Ready to do the right thing at any time.'),
(44, 'Sara', 'Sara Kujou Sara', 'images/characters/sara/profile.png', 'sara', '4', 'Character', 'Electro', 'Bow', 'Inazuma', 'ATK', 'A general of the Tenryou Commission. Bold, decisive, and skilled in battle.'),
(45, 'Raiden', 'Raiden Shogun Ei Baal', 'images/characters/raiden/profile.png', 'raiden', '5', 'Character', 'Electro', 'Polearm', 'Inazuma', 'ER', 'Her Excellency, the Almighty Narukami Ogosho, who promised the people of Inazuma an unchanging Eternity.'),
(46, 'Kokomi', 'Kokomi Sangonomiya Kokomi', 'images/characters/kokomi/profile.png', 'kokomi', '5', 'Character', 'Hydro', 'Catalyst', 'Inazuma', 'hydroDMG', 'The Divine Priestess of Watatsumi Island. All of the island\'s affairs are at this young lady\'s fingertips.'),
(47, 'Thoma', 'Thoma', 'images/characters/thoma/profile.png', 'thoma', '4', 'Character', 'Pyro', 'Polearm', 'Inazuma', 'ATK', 'The Kamisato Clan\'s housekeeper. A well-known \"fixer\" in Inazuma.'),
(48, 'Gorou', 'Gorou', 'images/characters/gorou/profile.png', 'gorou', '4', 'Character', 'Geo', 'Bow', 'Inazuma', 'geoDMG', 'The great general of Watatsumi Island\'s forces. He is deeply trusted by his subordinates.'),
(49, 'Itto', 'Itto Arataki Itto Oni', 'images/characters/itto/profile.png', 'itto', '5', 'Character', 'Geo', 'Claymore', 'Inazuma', 'CR', 'The first and greatest head of the Arataki Gang, famed throughout Inazuma City\'s Hanamizaka... Wait, what? You\'ve never heard of them? Are you trying to be funny here?'),
(50, 'Yun Jin', 'Yun Jin YunJin Yun-Jin', 'images/characters/yunjin/profile.png', 'yunjin', '4', 'Character', 'Geo', 'Polearm', 'Inazuma', 'ER', 'A renowned Liyue opera singer who is skilled in both playwriting and singing. Her style is one-of-a-kind, exquisite and delicate, much like the person herself.'),
(51, 'Shenhe', 'Shenhe', 'images/characters/shenhe/profile.png', 'shenhe', '5', 'Character', 'Cryo', 'Polearm', 'Liyue', 'ATK', 'An adepti disciple with a most unusual air about her. Having spent much time cultivating in isolation in Liyue\'s mountains, she has become every bit as cool and distant as the adepti themselves.'),
(52, 'Yae', 'Yae Miko', 'images/characters/yae/profile.png', 'yae', '5', 'Character', 'Electro', 'Catalyst', 'Inazuma', 'CR', 'Lady Guuji of the Grand Narukami Shrine also serves as the editor-in-chief of Yae Publishing House. Unimaginable intelligence and cunning are hidden under her beautiful appearance.'),
(53, 'Ayato', 'Ayayo Kamisato Ayato Ayayo', 'images/characters/ayato/profile.png', 'ayato', '5', 'Character', 'Hydro', 'Sword', 'Inazuma', 'CD', 'The young but highly accomplished head of the Yashiro Commission\'s Kamisato Clan. Cultured and polite, he is a man of many ways and means.'),
(54, 'Yelan', 'Yelan', 'images/characters/yelan/profile.png', 'yelan', '5', 'Character', 'Hydro', 'Bow', 'Inazuma', 'CR', 'A mysterious person who claims to work for the Ministry of Civil Affairs, but is a \"non-entity\" on the Ministry of Civil Affairs\' list.'),
(55, 'Kuki', 'Kuki Shinobu Cookie', 'images/characters/kuki/profile.png', 'kuki', '4', 'Character', 'Electro', 'Sword', 'Inazuma', 'HP', 'The capable and reliable deputy leader of the \"Arataki Gang.\" Please note: capable and reliable are not appellations for the \"Arataki Gang,\" but for their deputy leader in specific.'),
(56, 'Heizou', 'Heizou Shikanoin Heizou', 'images/characters/heizou/profile.png', 'heizou', '4', 'Character', 'Anemo', 'Catalyst', 'Inazuma', 'anemoDMG', 'A young prodigy detective from the Tenryou Commission. His senses are sharp and his thoughts are clear.'),
(59, 'Collei', 'Collei', 'images/characters/collei/profile.png', 'collei', '4', 'Character', 'Dendro', 'Bow', 'Sumeru', 'ATK', 'A trainee ranger active in Avidya Forest. Behind her enthusiastic words and actions hides a slightly introverted personality.'),
(60, 'Tighnari', 'Tighnari', 'images/characters/tighnari/profile.png', 'tighnari', '5', 'Character', 'Dendro', 'Bow', 'Sumeru', 'dendroDMG', 'A young researcher well-versed in botany who currently serves as a Forest Watcher in Avidya Forest. He is a straight shooter with a warm heart - and a dab hand at guiding even the dullest of pupils.'),
(61, 'Dori', 'Dori', 'images/characters/dori/profile.png', 'dori', '4', 'Character', 'Electro', 'Claymore', 'Sumeru', 'HP', 'An elusive merchant who has a fondness for glittering Mora.'),
(62, 'Candace', 'Candace Candice Kandake ', 'images/characters/candace/profile.png', 'candace', '4', 'Character', 'Hydro', 'Polearm', 'Sumeru', 'HP', 'A descendant of King Deshret with an amber left eye. The defender of Aaru Village.'),
(63, 'Cyno', 'Cyno', 'images/characters/cyno/profile.png', 'cyno', '5', 'Character', 'Electro', 'Polearm', 'Sumeru', 'CD', 'The General Mahamatra in charge of supervising the researchers of the Akademiya. It is said that when he gets down to work, the General Mahamatra is even more efficient than the \"Great Vayuvyastra\" made by the Kshahrewar.'),
(64, 'Nilou', 'Nilou', 'images/characters/nilou/profile.png', 'nilou', '5', 'Character', 'Hydro', 'Sword', 'Sumeru', 'HP', 'A dancer under the Zubayr Theater, Nilou\'s dancing is but elegant and graceful - however, outside the stage\'s spotlight, she\'s just like any girl her age; warm, smiling, and friendly.'),
(65, 'Nahida', 'Nahida Kusanali', 'images/characters/nahida/profile.png', 'nahida', '5', 'Character', 'Dendro', 'Catalyst', 'Sumeru', 'EM', 'A caged bird secluded within the confines of the Sanctuary of Surasthana who can only see the world in her dreams.'),
(66, 'Layla', 'Layla', 'images/characters/layla/profile.png', 'layla', '4', 'Character', 'Cryo', 'Sword', 'Sumeru', 'HP', 'A Rtawahist student who specializes in Theoretical Astrology. Heavily prone to somnambulism and locked in a grinding war with sleep deprivation, the problem of restful slumber is a most troubling one to her.'),
(67, 'Faruzan', 'Faruzan', 'images/characters/faruzan/profile.png', 'faruzan', '4', 'Characters', 'Anemo', 'Bow', 'Sumeru', 'ATK', 'A researcher from \"one hundred years ago.\" She enjoys self-identifying as everyone\'s senior, and has significant knowledge of ancient scripts and machines of all kinds.'),
(68, 'Wanderer', 'Wanderer Scaramouche', 'images/characters/wanderer/profile.png', 'wanderer', '5', 'Characters', 'Anemo', 'Catalyst', 'Sumeru', 'CR', 'A wayfaring figure whose identity is a mystery. He dresses like a shugenja, but he certainly does not act the part.');

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `keywords` text NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `keywords`, `img`, `url`, `rarity`, `category`, `weapon`, `stat`, `basemin`, `basemax`, `statmin`, `statmax`) VALUES
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
(17, 'Ferrous Shadow', 'Ferrous Shadow', 'images/weapons/ferrous-shadow/profile.png', 'ferrous-shadow', '3', 'Weapon', 'Claymore', 'HP', '39', '401', '7.7%', '35.2%'),
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
(49, 'Favonius Warbow', 'Favonius Warbow Fav Warbow FW Fav Bow', 'images/weapons/favonius-warbow/profile.png', 'favonius-warbow', '4', 'Weapon', 'Bow', 'ER', '41', '454', '13.3%', '61.3%'),
(50, 'Iron Sting', 'Iron Sting IS', 'images/weapons/iron-sting/profile.png', 'iron-sting', '4', 'Weapon', 'Sword', 'EM', '42', '510', '36', '165'),
(51, 'Lion\'s Roar', 'Lion\'s Roar Lions Roar LR', 'images/weapons/lions-roar/profile.png', 'lions-roar', '4', 'Weapon', 'Sword', 'ATK', '42', '510', '9%', '41.3%'),
(52, 'Mappa Mare', 'Mappa Mare MM', 'images/weapons/mappa-mare/profile.png', 'mappa-mare', '4', 'Weapon', 'Catalyst', 'EM', '44', '565', '24', '110'),
(53, 'Prototype Amber', 'Prototype Amber Prototype Malice PA\n', 'images/weapons/prototype-amber/profile.png', 'prototype-amber', '4', 'Weapon', 'Catalyst', 'HP', '42', '510', '9%', '41.3%'),
(54, 'Prototype Archaic', 'Prototype Archaic Prototype Aminus PA', 'images/weapons/prototype-archaic/profile.png', 'prototype-archaic', '4', 'Weapon', 'Claymore', 'ATK', '44', '565', '6%', '27.6%'),
(55, 'Prototype Crescent', 'Prototype Crescent PC', 'images/weapons/prototype-crescent/profile.png', 'prototype-crescent', '4', 'Weapon', 'Bow', 'ATK', '42', '510', '9%', '41.3%'),
(56, 'Prototype Rancour', 'Prototype Rancour PR', 'images/weapons/prototype-rancour/profile.png', 'prototype-rancour', '4', 'Weapon', 'Sword', 'physicalDMG', '44', '565', '7.5%', '34.5%'),
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
(127, 'Redhorn Stonethresher', 'Redhorn Stonethresher RS RHST', 'images/weapons/redhorn-stonethresher/profile.png', 'redhorn-stonethresher', '5', 'Weapon', 'Claymore', 'CD', '44', '542', '19.2%', '88.2%'),
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
(141, 'Hunter\'s Path', 'Hunter\'s Path Hunters Path HP', 'images/weapons/hunters-path/profile.png', 'hunters-path', '5', 'Weapon', 'Bow', 'CR', '44', '542', '9.6%', '44.1%'),
(145, 'Xiphos\' Moonlight', 'Xiphos\' Moonlight XM ', 'images/weapons/xiphos-moonlight/profile.png', 'xiphos-moonlight', '4', 'Weapon', 'Sword', 'EM', '42', '510', '36', '165'),
(146, 'Makhaira Aquamarine', 'Makhaira Aquamarine MA', 'images/weapons/makhaira-aquamarine/profile.png', 'makhaira-aquamarine', '4', 'Weapon', 'Claymore', 'EM', '42', '510', '36', '165'),
(147, 'Wandering Evenstar', 'Wandering Evenstar WE', 'images/weapons/wandering-evenstar/profile.png', 'wandering-evenstar', '4', 'Weapon', 'Catalyst', 'EM', '42', '510', '36', '165'),
(148, 'Missive Windspear', 'Missive Windspear MWS', 'images/weapons/missive-windspear/profile.png', 'missive-windspear', '4', 'Weapon', 'Polearm', 'ATK', '42', '510', '9%', '41.3%'),
(149, 'Staff of the Scarlet Sands', 'Staff of the Scarlet Sands SOTSS SSS', 'images/weapons/staff-of-the-scarlet-sands/profile.png', 'staff-of-the-scarlet-sands', '5', 'Weapon', 'Polearm', 'CR', '44', '542', '9.6%', '44.1%'),
(150, 'Key of Khaj-Nisut', 'Key of Khaj-Nisut KOKN KKN', 'images/weapons/key-of-khaj-nisut/profile.png', 'key-of-khaj-nisut', '5', 'Weapon', 'Sword', 'HP', '44', '542', '14.4%', '66.2%'),
(151, 'A Thousand Floating Dreams', 'A Thousand Floating Dreams ATFD', 'images/weapons/a-thousand-floating-dreams/profile.png', 'a-thousand-floating-dreams', '5', 'Weapon', 'Catalyst', 'EM', '44', '542', '58', '265');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
