-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 10:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coach_z`
--
CREATE DATABASE IF NOT EXISTS `coach_z` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coach_z`;

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `U_ID` int(10) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `PASS_CODE` varchar(200) NOT NULL,
  `ACTIVE` varchar(1) DEFAULT 'Y',
  `USER_ROLE` varchar(30) NOT NULL,
  `USER_IMAGE` varchar(200) DEFAULT NULL,
  `CREATED_BY` varchar(50) DEFAULT '-1',
  `CREATION_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LAST_UPDATED_BY` varchar(50) DEFAULT NULL,
  `LAST_UPDATION_DATE` date DEFAULT NULL,
  `LAST_LOGIN_DATE` date DEFAULT NULL,
  `USER_NAME` varchar(100) DEFAULT NULL,
  `USER_MODE` varchar(50) DEFAULT 'R'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`U_ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASS_CODE`, `ACTIVE`, `USER_ROLE`, `USER_IMAGE`, `CREATED_BY`, `CREATION_DATE`, `LAST_UPDATED_BY`, `LAST_UPDATION_DATE`, `LAST_LOGIN_DATE`, `USER_NAME`, `USER_MODE`) VALUES
(20, '', '', 'raja@gmail.com', 'raja', 'Y', '', NULL, '-1', '2017-03-30 14:52:50', NULL, NULL, NULL, 'raja', 'true'),
(21, '', '', 'Admin@gmail.com', 'Admin', 'Y', '', NULL, '-1', '2017-04-11 07:33:08', NULL, NULL, NULL, 'Admin', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `cz_evg_answers`
--

CREATE TABLE `cz_evg_answers` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `eq1_Morning` varchar(50) DEFAULT NULL,
  `eq1_Afternoon` varchar(50) DEFAULT NULL,
  `eq1_Evening` varchar(50) DEFAULT NULL,
  `eq2_Exercise` varchar(50) DEFAULT NULL,
  `eq3_Alcohol` varchar(50) DEFAULT NULL,
  `eq4_Nap` varchar(50) DEFAULT NULL,
  `eq5_Mood` varchar(50) DEFAULT NULL,
  `eq6_Phone` varchar(50) DEFAULT NULL,
  `eq6_ReadHomeWork` varchar(50) DEFAULT NULL,
  `eq6_WatchTV` varchar(50) DEFAULT NULL,
  `eq6_PlayVideoGames` varchar(50) DEFAULT NULL,
  `eq6_None` varchar(50) DEFAULT NULL,
  `eq7_TimeOfDay` varchar(50) DEFAULT NULL,
  `tip_code` varchar(50) DEFAULT NULL,
  `creation_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modification_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `eq1_caffeine` varchar(50) DEFAULT NULL,
  `log_day` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cz_evg_answers`
--

INSERT INTO `cz_evg_answers` (`id`, `uid`, `eq1_Morning`, `eq1_Afternoon`, `eq1_Evening`, `eq2_Exercise`, `eq3_Alcohol`, `eq4_Nap`, `eq5_Mood`, `eq6_Phone`, `eq6_ReadHomeWork`, `eq6_WatchTV`, `eq6_PlayVideoGames`, `eq6_None`, `eq7_TimeOfDay`, `tip_code`, `creation_time`, `modification_time`, `eq1_caffeine`, `log_day`) VALUES
(6, 21, '1', '1', '1', 'Yes', 'Yes', 'Yes', '1', 'false', '', 'true', 'false', 'false', '1', 'S2', '2017-04-11 00:07:58', NULL, 'Yes', '1'),
(7, 21, '0', '0', '0', 'No', 'No', 'No', '2', 'false', '', 'true', 'true', 'false', '2', '', '2017-04-11 02:50:15', NULL, 'Yes', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cz_mng_answers`
--

CREATE TABLE `cz_mng_answers` (
  `id` int(11) NOT NULL,
  `uid` int(10) NOT NULL,
  `mq1_bedTime` datetime DEFAULT NULL,
  `mq1_wakeTime` datetime DEFAULT NULL,
  `mq2_problemsFallingAsleep` varchar(50) DEFAULT NULL,
  `mq2_minutesToFallAsleep` varchar(50) DEFAULT NULL,
  `mq3_didWakeDuringTheNight` varchar(50) DEFAULT NULL,
  `mq3_minutesToFallBackToSleep` varchar(50) DEFAULT NULL,
  `mq4_howDidYouFeel` varchar(50) DEFAULT NULL,
  `mq5_noise` varchar(50) DEFAULT NULL,
  `mq5_light` varchar(50) DEFAULT NULL,
  `mq5_stress` varchar(50) DEFAULT NULL,
  `mq5_temp` varchar(50) DEFAULT NULL,
  `mq5_nota` varchar(50) DEFAULT NULL,
  `tip_code` varchar(50) DEFAULT NULL,
  `creation_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modification_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `LOG_DAY` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cz_mng_answers`
--

INSERT INTO `cz_mng_answers` (`id`, `uid`, `mq1_bedTime`, `mq1_wakeTime`, `mq2_problemsFallingAsleep`, `mq2_minutesToFallAsleep`, `mq3_didWakeDuringTheNight`, `mq3_minutesToFallBackToSleep`, `mq4_howDidYouFeel`, `mq5_noise`, `mq5_light`, `mq5_stress`, `mq5_temp`, `mq5_nota`, `tip_code`, `creation_time`, `modification_time`, `LOG_DAY`) VALUES
(4, 21, '2017-04-11 00:00:00', '2017-04-11 03:15:00', 'No', '0', 'No', '0', 'Alert', 'false', 'true', 'false', 'false', 'false', 'S1', '2017-04-11 00:04:10', '2017-04-11 01:39:06', '1'),
(8, 21, '2017-04-11 00:00:00', '2017-04-11 08:00:00', 'Yes', '5', 'No', '0', 'Sleepy', 'true', 'true', 'false', 'false', 'false', '', '2017-04-11 02:39:04', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `cz_tips`
--

CREATE TABLE `cz_tips` (
  `id` int(10) NOT NULL,
  `tip_code` varchar(10) DEFAULT NULL,
  `tip_type` varchar(10) DEFAULT NULL,
  `tip_question` varchar(10) DEFAULT NULL,
  `tip_number` int(10) DEFAULT NULL,
  `tip_message` varchar(1000) DEFAULT NULL,
  `creation_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cz_tips`
--

INSERT INTO `cz_tips` (`id`, `tip_code`, `tip_type`, `tip_question`, `tip_number`, `tip_message`, `creation_date`) VALUES
(1, 'M1', 'Morning', 'Q1', 1, 'Did you know that not sleeping enough can impact your grades?  Pulling an all-nighter to study for a test can actually worsen your recall and memory the next day.  Getting the right amount of sleep that your body needs is important for your sleep health!', '2017-03-06 16:40:10'),
(2, 'M2', 'Morning', 'Q1', 2, 'The average amount sleep adults need is about 8 hours.  Some people may need more or less to feel rested.  Not getting enough sleep can cause daytime sleepiness, which is very common among students. Sleepiness can impact your mood, your memory, and overall your performance abilities- in both school and sports. Try to give your body the chance to sleep for about 8 hours every night.', '2017-03-06 16:40:10'),
(3, 'M3', 'Morning', 'Q1', 3, 'The average amount of sleep adults need is about 8 hours.  Some people need more or less sleep to feel rested.  But if you are sleeping for more than 9 hours some nights- it is important to question if this is due to your sleep habits.  Maybe you sleep longer on some nights because you are not getting enough sleep during the other nights of the week.', '2017-03-06 16:40:10'),
(4, 'M4', 'Morning', 'Q1', 4, 'Did you know that sleeping for many hours (10+) in one night is not a good way to catch up your sleep? Once your body experiences a sleep debt you cannot just simply catch up by sleeping more over the next few days.  Keeping a consistent sleep schedule is the best way to build healthy sleep habits.', '2017-03-06 16:40:10'),
(5, 'M5', 'Morning', 'Q1', 5, 'The average amount of sleep adults need is about 8 hours night, some individuals need more or less sleep to feel rested.  It is important to learn whether you are a short or long sleeper.  Then, keeping a consistent sleep schedule is a good way to have healthy sleep habits.', '2017-03-06 16:40:10'),
(6, 'M6', 'Morning', 'Q1', 6, 'You did not fill out your bed and wake time for the diary entry today, but I still wanted to share a sleep tip with you.  The average amount of sleep adults need is about 8 hours night, some individuals need more or less sleep to feel rested.  It is important to learn whether you are a short or long sleeper.  Then, keeping a consistent sleep schedule is a good way to have healthy sleep habits.', '2017-03-06 16:40:10'),
(7, 'M7', 'Morning', 'Q2', 7, 'Last night you reported that you fell asleep pretty easily.  Is this how it usually is for you?  If so, falling asleep easily at night is an important part of healthy sleep- it seems like you are doing a good job with that.  It is normal to have a night every once in a while when you are tossing and turning- so do not worry about that!', '2017-03-06 16:40:10'),
(8, 'M8', 'Morning', 'Q2', 8, 'It seems like last night you fell asleep pretty easily.  Ever have those nights where you stay awake tossing and turning.  This is totally normal.  However, be mindful if this becomes a habit.', '2017-03-06 16:40:10'),
(9, 'M9', 'Morning', 'Q2', 9, 'Last night you said that you did not have a problem falling asleep.  Is this a typical night for you? If it is- great job, falling asleep easily often means that your body is associating your bed with sleep.  As you continue to go through bootcamp, you will learn more about your sleep to see if there are any areas of your sleep you can improve upon.', '2017-03-06 16:40:10'),
(10, 'M10', 'Morning', 'Q2', 10, 'Last night you reported that you had a problem falling asleep.   Something that can help is having a bedtime routine.  Using a routine before bed is a great way to tell your body to get ready for sleep.', '2017-03-06 16:40:10'),
(11, 'M11', 'Morning', 'Q2', 11, 'You had a problem falling asleep last night, try to uncover whether there are any patterns that relate to this.  Are there certain nights of the week you have this problem? Why it is taking you a long time to fall asleep (stress/worry, something in your bedroom environment, caffeine before bed, eating habits)?', '2017-03-06 16:40:10'),
(12, 'M12', 'Morning', 'Q2', 12, 'Having a hard time falling asleep can be related to your sleep habits, or maybe even stress.  One thing that can make it harder to fall asleep at night is if you watch the clock.  Do not watch the clock, this adds stress to your sleep time!', '2017-03-06 16:40:10'),
(13, 'M13', 'Morning', 'Q2', 13, 'Bedtime routines can be helpful if you are trying to fall asleep faster.  These can be different for everyone, but can be something like taking a shower before bed, or doing some relaxation exercises.  Anything that you find to be a calming way to tell your body you are winding down.  Just make sure your bedtime routine doesn’t involve eating an entire pizza and drinking a liter of soda…heavy eating and caffeine before bed can make it harder to fall asleep!', '2017-03-06 16:40:10'),
(14, 'M14', 'Morning', 'Q2', 14, 'This morning you did not respond about whether you had any problems asleep last night.  In case you do have a problem with this, I just wanted to mention that bedtime routines can be helpful if you are trying to fall asleep faster.  These can be different for everyone, but can be something like taking a shower before bed, or doing some relaxation exercises.  Anything that you find to be a calming way to tell your body you are winding down.  Just make sure your bedtime routine doesn’t involve eating an entire pizza and drinking a liter of soda…heavy eating and caffeine before bed can make it harder to fall asleep!', '2017-03-06 16:40:10'),
(15, 'M15', 'Morning', 'Q3', 15, 'Once you fall asleep, staying asleep throughout the night can be an important part of your sleep health.  You have not reported a problem with waking up multiple times throughout the night which is great!  This means you may be getting restful and uninterrupted sleep, exactly what your body needs.', '2017-03-06 16:40:10'),
(16, 'M16', 'Morning', 'Q3', 16, 'I have noticed that you have reported waking up a few times during the night.  This can be normal for some people.  It can disrupt the quality of your sleep, but it seems like when you do wake up in the middle of the night, you are able to fall back asleep pretty quickly and that is great.', '2017-03-06 16:40:10'),
(17, 'M17', 'Morning', 'Q3', 17, 'Waking up in the middle of night can disrupt the quality of your sleep.  If it takes you a long time to fall back to sleep once you wake up, this is important area of your sleep to work on.  As you are tracking your sleep habits, see if you can notice a pattern to try to change it.  Are there certain nights of the week that you have this problem?  Why is it taking you a long time to fall back to sleep, are you worrying or thinking about things you need to do? Are you turning on the tv or using your phone if you wake up?', '2017-03-06 16:40:10'),
(18, 'M18', 'Morning', 'Q3', 18, 'Sometimes when we wake up in the middle of the night it can be hard to fall back to sleep.  Something that can make it difficult to fall back to sleep is watching the clock, and thinking about wanting to fall back asleep.  Try to avoid this and just relax!', '2017-03-06 16:40:10'),
(19, 'M19', 'Morning', 'Q3', 19, 'Do you wake up sometimes in the middle of the night?  Waking up in the middle of the night can be normal for some people.  However, it can become a problem and impact the quality of your sleep especially if takes you a long time to fall back to sleep.  If this is happening to try to think about why is it taking you a long time to fall back to sleep, are you worrying or thinking about things you need to do? Are you turning on the tv or using your phone if you wake up?', '2017-03-06 16:40:10'),
(20, 'M20', 'Morning', 'Q4', 20, 'If you wake up feeling sleepy, then you may not be getting the amount of sleep you need.  Look at your sleep graphs, do you see any sleep patterns that you can change?  Are you going to bed and waking up at similar times each night? Having a consistent sleep schedule is an important part of your sleep health.', '2017-03-06 16:40:10'),
(21, 'M21', 'Morning', 'Q4', 21, 'Daytime sleepiness is a common problem for students.  Feeling sleepy can be related to not getting enough sleep the night before, but it can also be related your overall sleep patterns.  Even if you sleep 10 hours in one night, you can still wake up feeling sleepy, keeping a consistent sleep schedule is important to how you wake up feeling.', '2017-03-06 16:40:10'),
(22, 'M22', 'Morning', 'Q4', 22, 'Going to class sleepy is a rough way to start the day.  It already puts you behind in the classroom.  If you can not get more sleep at night, you can combat daytime sleepiness by taking naps.', '2017-03-06 16:40:10'),
(23, 'M23', 'Morning', 'Q4', 23, 'If your alarm goes off and you wake up feeling kind of sleepy, there is definitely room for some improvement.  We are not meant to feel sleepy, so even a little sleepiness means that you can make some improvements in your sleep habits.  Check out your sleep graphs.  See if you can recognize patterns of your sleep schedule that you can change.  Remember try to go to bed and wake up on similar times each night of the week.', '2017-03-06 16:40:10'),
(24, 'M24', 'Morning', 'Q4', 24, 'Waking up alert is a great help as a student.  Being alert and well-rested in class or even in sports can improve your performance.  Keep up the good work.', '2017-03-06 16:40:10'),
(25, 'M25', 'Morning', 'Q4', 25, 'You did not report how you felt when you woke up this morning.  But if you wake up feeling sleepy, then you may not be getting the amount of sleep you need.  Look at your sleep graphs, do you see any sleep patterns that you can change?  Are you going to bed and waking up at similar times each night? Having a consistent sleep schedule is an important part of your sleep health.', '2017-03-06 16:40:10'),
(26, 'M26', 'Morning', 'Q5', 26, 'Noises can disrupt your sleep but there are a couple things you can try if noise is a problem.  First, what about ear plugs?  Ear plugs are a cheap and simple way to try to block out some noise.  If that is not your style buy a white noise machine, or use a loud fan as a noise buffer in your room.', '2017-03-06 16:40:10'),
(27, 'M27', 'Morning', 'Q5', 27, 'Light does not seem like that big of a deal, but it is actually one of the strongest signals our bodies uses for maintaining a sleep-wake cycle.  Both sunlight and artificial light tell our body on a cellular level to be awake.  If you sleep in an environment that is bright, or if prior to bed you are using a phone/computer/tv that puts out artificial light this can impact your sleep, as the light is telling your body to stay awake.  Try disconnecting as much as possible before bed.', '2017-03-06 16:40:10'),
(28, 'M28', 'Morning', 'Q5', 28, 'Minimizing light is important prior to bed.  If light in your sleep environment is a problem, try getting thick curtains especially if you have to sleep during the day, or an eye mask may help. Also, cutting back screen usage right before bedtime is something small you can try that may make a difference.', '2017-03-06 16:40:10'),
(29, 'M29', 'Morning', 'Q5', 29, 'Stress can impact everything in your life, so it is no surprise that it causes a problem for your sleep.  If you find yourself worrying- it is best to not think about these things while in bed.  When you start doing this, your body creates a habit, and starts think- okay my bed is where I think about my problems.  That is a dangerous habit for your sleep.  Get your stressful thoughts out prior to getting into bed. You can do this by journaling, keeping a “to do list” next to your bed.  If a thought comes up, get out of your bed, write it down or put it in your phone.  Clear your mind before you get back to bed.', '2017-03-06 16:40:10'),
(30, 'M30', 'Morning', 'Q5', 30, 'Thinking about your problems in bed is an easy thing to do, it may be the first time all day you are in silence and have time to think.  Do not start doing this!  It is important that you train your body to only associate your bed with sleeping, not thinking or worrying.  To do this, start by keeping a journal.  Or if your stress is task related, put reminders on your phone so you can focus on these tasks tomorrow and not have to stay up all night worrying.  Find another time to address these things other than while you are trying to sleep.', '2017-03-06 16:40:10'),
(31, 'M31', 'Morning', 'Q5', 31, 'Stress and worry can be a drain on your sleep.  Relaxation techniques, like deep breathing, or yoga poses can help you prior to bed.  Exercise, reading a book, any type of calming activity for mind will help, whatever works for you.', '2017-03-06 16:40:10'),
(32, 'M32', 'Morning', 'Q5', 32, 'It is weird to think that room temperature could impact your sleep, but it does.  When you are asleep your body temperature cools down, so if you go to bed in a cooler setting this can help kick-start your sleep process.', '2017-03-06 16:40:10'),
(33, 'M33', 'Morning', 'Q5', 33, 'Sleeping in a cooler environment around 65 degrees can help your body prepare for sleep.  Maybe you get too cold at night, or you can''t control your temp because of a pushy roommate, or maybe you are just cheap like me and do not want to run your AC.  If you cannot or do not want to keep your bedroom at a cooler temperature, a trick to help cool down is to take a warm shower or bath before bed. This cools down your skin temperature and can help you fall asleep easier.', '2017-03-06 16:40:10'),
(34, 'M34', 'Morning', 'Q5', 34, 'You reported the light, stress/worry, room temperature, and noise were all things that do not bother your sleep.  If you are still having problems with sleep you may need to think bigger.  Sleep can be related to all sorts of your habits, such as exercise, diet, alcohol use, smoking, and mood.', '2017-03-06 16:40:10'),
(35, 'M35', 'Morning', 'Q5', 35, 'You reported the light, stress/worry, room temperature, and noise were all things that do not bother your sleep, but I maybe think about it a little more.  When I asked about light, I was not just asking about a bright room or the sunlight.  Light also comes from tvs, smartphones, or computer screens.  Our bodies are designed to need sleep, and light is a big factor in this.  When we started adding more light into our bedrooms through tvs, phones, and constant screen use, we never thought this would impact our sleep, but it has. Cutting out light is an important of letting your body know it is time to sleep.', '2017-03-06 16:40:10'),
(36, 'E1', 'Evening', 'Q1', 1, 'A lot of people say they drink caffeine in the morning to help them wake up.  The best way to really combat morning sleepiness is to get healthy sleep. Sure caffeine and sugar can fight sleepiness in the short-term, but the problem is once they wear off you crash and can feel even sleepier than before.', '2017-03-06 16:40:10'),
(37, 'E2', 'Evening', 'Q1', 2, 'Just remember, caffeine is in a lot of drinks and foods, so if you think you are only having it in the morning, be sure about this. Caffeine is not just in coffee, other drinks such as a tea, soda, and energy waters have caffeine, so does chocolate. Having caffeine later in the day can make it harder to fall asleep.', '2017-03-06 16:40:10'),
(38, 'E3', 'Evening', 'Q1', 3, 'Having caffeine in the afternoon may seem harmless, but did you know caffeine can stay in your body for 4-6 hours.  Caffeine in the afternoon can impact your sleep. You might not even realize the impact, but even if you fall asleep easily, it can still disrupt the quality of your sleep.', '2017-03-06 16:40:10'),
(39, 'E4', 'Evening', 'Q1', 4, 'Having caffeine at night to increase your alertness or focus can make it harder to fall asleep. Caffeine can stay in your body for 4-6 hours.  So the little burst of energy you get from caffeine is not really worth it when it pushes off your sleep and can result in you feeling sleepy the next day.', '2017-03-06 16:40:10'),
(40, 'E5', 'Evening', 'Q1', 5, 'Your sleep can be impacted by caffeine, and having caffeine in the evening increases the chances of this.  You might not even realize the impact, but it can still disrupt how well you sleep.  If caffeine in the evening is part of your nightly habit make an effort to look for non-caffeinated alternatives.', '2017-03-06 16:40:10'),
(41, 'E6', 'Evening', 'Q1', 6, 'You reported that you did not have caffeine at all today, is this common for you?  We are asking you about caffeine in a sleep diary, because caffeine can negatively impact your sleep, especially if you are having caffeine late in the day.  If you are not a regular caffeine user, keep up the good work.  Having a healthy sleep is really the best way to feel alert anyways!', '2017-03-06 16:40:10'),
(42, 'E7', 'Evening', 'Q2', 7, 'You did not respond about your caffeine intake.  But I wanted to mention about how caffeine can impact your sleep.  Having caffeine at night to increase your alertness or focus can make it harder to fall asleep. Caffeine can stay in your body for 4-6 hours.  So the little burst of energy you get from caffeine is not really worth it when it pushes off your sleep and can result in you feeling sleepy the next day.', '2017-03-06 16:40:10'),
(43, 'E8', 'Evening', 'Q2', 8, 'We all know that exercise is a good health habit, but did you know that it can also improve your sleep?  Regular exercise can help reduce the time it takes you to fall asleep, and  help improve the quality of your sleep.  Keep up the good work.', '2017-03-06 16:40:10'),
(44, 'E9', 'Evening', 'Q2', 9, 'Exercise can help improve your daytime alertness- so it is non-caffeine combatant against sleepiness.  It can also help you fall asleep easier at night.  Keep up the good work.', '2017-03-06 16:40:10'),
(45, 'E10', 'Evening', 'Q2', 10, 'The benefits of sleep and exercise go both ways.  Exercise can help you sleep better, but sleeping better can also improve your exercise.  When you wake up feeling refreshed you are more likely to have a productive and injury free workout.  Some professional sport teams actually have sleep physicians on staff- that is how important sleep is for fitness performance!', '2017-03-06 16:40:10'),
(46, 'E11', 'Evening', 'Q2', 11, 'Not exercising on a regular basis can negatively impact your sleep.  Daily exercise can improve your sleep quality and even reduce the time it takes to fall asleep.', '2017-03-06 16:40:10'),
(47, 'E12', 'Evening', 'Q2', 12, 'Just like training your body to have a sleep schedule, it is also helpful to have an exercise schedule.  Did you know benefits of sleep and exercise go both ways?  Exercise can help you sleep better, but sleeping better can also improve your exercise.  Think about which one is going to be easier for you to start working on first (sleep or exercise).  Improvement in either sleep or exercise may help the other out, and both are healthy habits to have!', '2017-03-06 16:40:10'),
(48, 'E13', 'Evening', 'Q2', 13, 'Is exercise something you are wanting to do more of? If so, you’re in luck- did you know that healthy sleep can improve your exercise?  Although dreaming that you are going to the gym doesn’t count- you still have to go, but sleeping well can help your body feel more refreshed which means you are more likely to hit the gym or have a productive workout.  Try starting a routine to help you get started.', '2017-03-06 16:40:10'),
(49, 'E14', 'Evening', 'Q3', 14, '', '2017-03-06 16:40:10'),
(50, 'E15', 'Evening', 'Q3', 15, 'You may have already noticed that alcohol impacts your sleep.  The amount you drink and the time of day can influence how you sleep at night.  Heavy alcohol use before bed can help you fall asleep faster, but it worsens the quality of your sleep.  It is not uncommon to wake up still feeling tired after a night of drinking.', '2017-03-06 16:40:10'),
(51, 'E16', 'Evening', 'Q3', 16, 'It is dangerous to use alcohol as a sleep aid.  While it may seem that alcohol can help your sleep because you fall asleep faster, it actually disrupts your sleep more than you realize.  That benefit of falling to sleep faster is actually useless because your overall night of sleep is often pretty restless.', '2017-03-06 16:40:10'),
(52, 'E17', 'Evening', 'Q3', 17, 'The amount of alcohol that you drink can impact your sleep, but did you know even 1-2 drinks close to bedtime is enough to for alcohol to disrupt your sleep.', '2017-03-06 16:40:10'),
(53, 'E18', 'Evening', 'Q3', 18, 'During one night of sleep it is not uncommon to go through 6-7 cycles of sleep, however, going to sleep with alcohol in your system can reduce the number of sleep cycles your body completes.  That is why despite sleeping for several hours after a night of drinking, you can still wake up feeling exhausted.', '2017-03-06 16:40:10'),
(54, 'E19', 'Evening', 'Q3', 19, 'Sleep deprivation can also influence how you feel when you are drinking.  If you are short on sleep and go out to a party, this may result in you heading home earlier than expected.  Drinking alcohol when short on sleep can intensify feelings of fatigue.  So if you haven’t slept well and you start drinking you are going to have to leave the party earlier than planned.', '2017-03-06 16:40:10'),
(55, 'E20', 'Evening', 'Q3', 20, 'I know you mentioned that you do not drink alcohol, but just something to keep in mind is that alcohol can disrupt your sleep.  Alcohol can cause people to fall asleep faster, but they get worse quality of sleep, people usually wake up feeling tired and unrefreshed after of drinking.', '2017-03-06 16:40:10'),
(56, 'E21', 'Evening', 'Q3', 21, 'I know you mentioned that you do not drink, but it is important to know that alcohol can negatively impact your sleep. Alcohol can prevent the restorative sleep, which may be the most important part of your sleep cycle for your physical health.  Heavy alcohol use has a lot of health consequences, and disrupting your sleep is also on that list!', '2017-03-06 16:40:10'),
(57, 'E22', 'Evening', 'Q4', 22, '', '2017-03-06 16:40:10'),
(58, 'E23', 'Evening', 'Q4', 23, 'Not a nap person? Me either- I do not nap because I wake up feel groggy, but if you nap for the right amount of time, naps can really help fight daytime sleepiness.  Optimal nap time is about 20 mins or 90 mins.  20 mins allows for an increase in alertness, 90 mins allows you to get through a cycle of sleep.', '2017-03-06 16:40:10'),
(59, 'E24', 'Evening', 'Q4', 24, 'It can be tough to nap based on your school or work schedule, but if you have the chance to nap without getting fired from your job or sleeping through a class, then naps can help protect against sleep debt.  Sleep debt is when you cheat your body out of sleep. Although you can’t make up for sleep debt days later if you have lost sleep, if you have a night of short sleep- like staying up late studying for a test or going to a party- taking a nap the next day can help you regain some of that lost sleep.', '2017-03-06 16:40:10'),
(60, 'E25', 'Evening', 'Q4', 25, 'I see you took a nap today.  Have you ever heard of optimal nap time?  Optimal nap time refers to a recommended duration of nap, this is often thought to be 20 mins or 90 mins.  20 mins is quick nap that allows you to increase your alertness, 90 mins allows you to get through a cycle of sleep helping you feel more rested.', '2017-03-06 16:40:10'),
(61, 'E26', 'Evening', 'Q4', 26, 'If taking naps is something you find helpful to improve sleep- try taking it a step further.  Do you know what the best time of day is to nap?  This can differ for everyone, but typically our bodies get tired after lunch time, and so 1pm can be a good time of day for a nap.', '2017-03-06 16:40:10'),
(62, 'E27', 'Evening', 'Q5', 27, '', '2017-03-06 16:40:10'),
(63, 'E28', 'Evening', 'Q5', 28, 'Your mood can be influenced by a lot of things- but did you know mood is closely related to sleep.  Poor sleep can cause irritability, or intensify feelings of depression or anxiety.', '2017-03-06 16:40:10'),
(64, 'E29', 'Evening', 'Q5', 29, 'On days you are feeling irritated or down, look at your sleep tracker and see if you notice any patterns.  Sleep and mood are closely related, having healthy sleep can be a good way to protect your mental health.', '2017-03-06 16:40:10'),
(65, 'E30', 'Evening', 'Q5', 30, 'One of the reasons why sleep is so important is because it can relate to your mood or mental health.  Getting healthy sleep can be a protective factor in your mental health.  We cannot always control the amount of stress we experience in life, but we can help our body be equipped to dealing with such, and sleep is great weapon for this!', '2017-03-06 16:40:10'),
(66, 'E31', 'Evening', 'Q5', 31, 'The relationship between your sleep and mood goes both ways.  Sleep can impact your mood, and your mood can impact your ability to fall asleep.  Awareness of this is important.  I hope using the sleep tips you get during this bootcamp can help you start to tackle this.', '2017-03-06 16:40:10'),
(67, 'E32', 'Evening', 'Q6', 32, 'Using your phone in bed can impact your sleep.  Why? it is all about conditioning.  You need to train your mind and body to only associate sleep with your bed, and if you are doing other things in your bed, your body is going to be confused.', '2017-03-06 16:40:10'),
(68, 'E33', 'Evening', 'Q6', 33, 'Using your phone in bed or late at night also exposes you to light.  Light can delay your sleep, as any light cue, even if it is just coming from a little screen is telling your body it is still light out and not time for sleep.', '2017-03-06 16:40:10'),
(69, 'E34', 'Evening', 'Q6', 34, 'While it is good that you are doing your homework, it is bad that you are doing it in bed.  When you do anything other than sleep in bed your body begins to think of your bed a place to do homework, so when you are trying to fall asleep you might start thinking about homework- which is never a good thing.  Another problem with homework in bed can relate to light, if you are using a laptop or e-reader in bed the light can phase delay your sleep.  This just means that anytime your body is exposed to light your body naturally tries to stay awake.', '2017-03-06 16:40:10'),
(70, 'E35', 'Evening', 'Q6', 35, 'Watching tv in bed is a common thing to do, but it creates some confusion for your body.  If you are watching tv in bed your body will start to think of your bed as a place of activity, rather than a place of rest.', '2017-03-06 16:40:10'),
(71, 'E36', 'Evening', 'Q6', 36, 'Playing video games in bed can also be confusing for your body.  Any activity in bed tells your body that your sleep is place of activity rather than place of rest.  It is important to mention the light from your gaming system (whether it is a tv or mobile phone or ipad) can make it harder to fall asleep.  Any time your body sees light, it thinks it is time to stay up.  Stop confusing yourself already!  Don’t play video games or watch tv or use your phone in bed!', '2017-03-06 16:40:10'),
(72, 'E37', 'Evening', 'Q6', 37, 'If you are not doing any of these activities in bed you are either lying to me, or you have great sleep habits.  This is a really important part of your habits, you should only use your bed for sleeping.  It is important that you train your mind/body to only associate your bed with sleep.', '2017-03-06 16:40:10'),
(73, 'E38', 'Evening', 'Q6', 38, 'All of these boxes above relate to two things, activity in bed and light.  Both of which can disrupt your sleep.  Keep up the good work of not doing any of these things in bed.  Use your bed for sleeping only.', '2017-03-06 16:40:10'),
(74, 'E39', 'Evening', 'Q7', 39, 'If you have the most energy and motivation in the morning, you are lark or a morning person.  The world was made for morning people- have you noticed that?  Most schedules or jobs start early in the morning.  Knowing your ''best'' time of day is important to adjusting your schedule, it can relate to when you do work, or go to the gym.  If you are a morning person getting to bed early can be important to making sure you get the amount of sleep your body needs.  This can be tough though- because most fun things are happening at night.  Think about how you can manage this if you have late nights (napping the next day), also remember to try to keep a consistent sleep schedule.', '2017-03-06 16:40:10'),
(75, 'E40', 'Evening', 'Q7', 40, 'Some people feel the most motivation in the afternoons- this means you may not really describe yourself as morning person, but you are also not a night owl.  Knowing when you are most focused or motivated can also relate to when you study, or when you go the gym.  Knowing your “best” time of day is important to adjusting your schedule.  When you are kind of the middle this gives you the chance to build healthy sleep schedule based your preferences and daily activities.  If you function best in the afternoon you don’t need to wake up super early to get going, and you do not need to stay up super late to get things accomplished.', '2017-03-06 16:40:10'),
(76, 'E41', 'Evening', 'Q7', 41, 'Today you reported that you feel you have more energy in the evening.  Is this how you always feel?  If so, you might be an evening or night owl person.  This means your preference is to go to sleep later in the evening.  Once you know this about yourself, pick your courses based on this when you can, try to pick jobs etc.  Knowing when you are most focused or motivated can also relate to when you study, or when you go the gym.  Knowing your best time of day is important to adjusting your schedule.', '2017-03-06 16:40:10'),
(77, 'E42', 'Evening', 'Q7', 42, 'If you are an evening person, it is okay to go to bed later and sleep in later if that is how your body is working, but be attentive to the amount of sleep you are getting.  Don’t keep a late schedule at the expense of your sleep, your schedule is something you can adjust to, being sleep deprived is something your body won’t adjust to.  Think about ways you can manage this.', '2017-03-06 16:40:10'),
(78, 'S1', 'Standard', 'S1', 1, 'Welcome to Coach Z Sleep Boot Camp.  For the next two weeks I would like you to keep a sleep diary, completing it twice a day in the morning and evening.  As you fill your diary out each day I will send you personalized tips to help you improve your sleep.  Sleep may not be something you really think about, but we spend about 33% of our lives sleeping…we might as well try to be good at it!', '2017-03-06 16:40:10'),
(79, 'S2', 'Standard', 'S2', 2, 'Before I start sending you tips tomorrow, I wanted to mention why sleep matters.  Sleep is a health behavior, just like diet and exercise. Sleep is not just something that happens every night, you are in control of how well you sleep and how much sleep you get.  Getting a healthy amount of sleep each night is an important and it is in your control.  Sleep relates to your health, mood, and can even help you manage your weight do not believe me google it.', '2017-03-06 16:40:10'),
(80, 'S3', 'Standard', 'S3', 3, 'You have completed your first week of boot-camp, great job!  Something you may not have used yet is the tracker part of the app.  Every day I use your diary entries to calculate your total sleep time and your sleep efficiency scores.  Sleep efficiency is a percentage that represents how long you are actually asleep during the time you are in bed.  If you have a low sleep efficiency score this means that you spend a lot of time in your bed, trying to sleep, but not being able to sleep. Anything lower than 85% says that you definitely have room for improvement.', '2017-03-06 16:40:10'),
(81, 'S4', 'Standard', 'S4', 4, 'Do you go to bed and wake up around the same time every day?  Use the sleep tracker part of the app to check this.  That is a really important part of healthy sleep.  It is common for students to get less sleep during the week, and more sleep on the weekends.  While a schedule like this may seem like you are catching up on the weekends, this is not how it works, and oversleeping  on the weekends can throw your sleep cycle off even further.  Try to get close to the same amount of sleep each night, and keep similar bed times and wake times (as best you can)!', '2017-03-06 16:40:10'),
(82, 'S5', 'Standard', 'S5', 5, 'Did you know the amount of sleep you need and the quality of your sleep can change with age.  When you were younger you needed more sleep.  Kids often need about 10-13 hours of sleep at night.  Teens need a little less sleep than kids, but still more than the average adult.  Adults typically need about 8 hours of sleep a night- although everyone is a little different.  People also report having worse sleep as they age- that is why developing good sleep habits now can really help you out in the future.', '2017-03-06 16:40:10'),
(83, 'S6', 'Standard', 'S6', 6, 'Chronotype just describes your preference for the time of day that you like to sleep.  Some people like to go to bed early, and wake up early.  Other people like to stay up late, and may not wake up until late afternoon the next day.  Some people are in the middle.  Knowing your chronotype can help you improve your sleep habits.  To make things easier you should try to build your sleep schedule around the time your body is naturally tired.  Your chronotype can change throughout your life, or sometimes you have to fight against your chronotype due to work or school or family.  Using good sleep habits are important for this.', '2017-03-06 16:40:10'),
(84, 'S7', 'Standard', 'S7', 7, 'I do not think anyone really knows for sure the true function of sleep, but we know that sleep matters.  Sleep is not just a time when our bodies passively rest, lots of things take place when we sleep.  Our body is actively working during sleep and changes happen such as tissue repair, increased blood flow to our organs, and some people even think that sleep helps with memory creation.  Sleep occurs throughout different cycles (REM and Non-REM), it is thought that different cycles of sleep serve different purposes.  That is why getting healthy sleep uninterrupted sleep is so important,each stage of sleep matters and relates to the next!', '2017-03-06 16:40:10'),
(85, 'S8', 'Standard', 'S8', 8, 'The diary does not ask any questions about your smoking habits, but I just wanted to mention that smoking can impact your sleep in a few ways.  Nicotine is a stimulant, so like caffeine it can affect the quality of your sleep and the ability to fall asleep due to the disruption on your sleep-wake schedule.  People who smoke are often more likely to wake up several times throughout the night, this can impact your ability to get deep sleep- which is really important for your health.', '2017-03-06 16:40:10'),
(86, 'S9', 'Standard', 'S9', 9, 'Having sleep habits that you can improve upon are very different than having a sleep disorder.  Sleep disorders are clinical health problems that you should see a sleep doctor for in order receive a diagnosis and treatment.  Sleep apnea is sleep-related breathing disorder where people stop breathing for short periods of time throughout the night. Narcolepsy is a neurological disorder that results in your brain not being able to regulate a sleep-wake cycle.  Insomnia is a chronic problem falling to sleep or staying asleep.  Periodic limb movement disorder is a sleep-related movement disorder that can result in repeated cramping and movement of your legs.  If you have concerns about having a sleep disorder you should discuss this with your doctor.  This two week boot-camp is just related to giving you tips about your bedtime habits, and is not intended as treatment for sleep disorders.', '2017-03-06 16:40:10'),
(87, 'S10', 'Standard', 'S10', 10, 'Another way sleep relates to your health is through safety.  Doing any task while sleepy increases your chances of errors.  Playing checkers while sleepy and making an error is not a serious thing, driving while sleepy and making a mistake can be a deadly situation.  Teens and young adults have high rates of accidents and death due to drowsy driving.  Driving involves a great deal of attention and focus.  The ability to focus, think clearly, make decisions quickly can all be more difficult when you are sleepy.  If you drive a vehicle, getting the healthy amount of sleep that your body needs and avoiding sleep deprivation prior to driving is a vital part of safety that you are responsible for.', '2017-03-06 16:40:10'),
(88, 'S11', 'Standard', 'S11', 11, 'Today is your last day of boot camp, you have done a great job with tracking your sleep.  Tracking your sleep can be an important way to learn more about your sleep habits and learn for yourself what you can change to improve your sleep.  There are many ways to track your sleep- there are wearable devices that do this for you, there are other apps that you lay on your bed that can track movements.  Coach Z’s bootcamp has been about you actively tracking your sleep.  I hope this two week experience has raised your awareness of your sleep!', '2017-03-06 16:40:10'),
(89, 'S12', 'Standard', 'S12', 12, 'Today is your last day of boot camp.  It seems you had a difficult time completing your diary entries, but I hope you still learned something about your sleep.  If you are interested you can start boot camp over at any time.', '2017-03-06 16:40:10'),
(90, 'S13', 'Standard', 'S13', 13, 'Congratulations! You have completed the two week sleep boot-camp.  I hope that you have gained some useful tips to help improve your sleep.  Feel free to use the archive section of the app to revisit old tips at any time.  Also if you notice any changes in your sleep you can log back into the app for a refresher, which means just a few days of tracking/tips, or you can go through the entire boot-camp again.  Sleep is a vital part of your health and developing good sleep habits is important to many things!', '2017-03-06 16:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `cz_usr_bootcamp_log`
--

CREATE TABLE `cz_usr_bootcamp_log` (
  `LOG_ID` int(10) NOT NULL,
  `UID` int(10) DEFAULT NULL,
  `LOG_DAY` int(10) DEFAULT NULL,
  `LOG_TYPE` varchar(50) DEFAULT NULL,
  `LOG_TIME` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cz_usr_bootcamp_log`
--

INSERT INTO `cz_usr_bootcamp_log` (`LOG_ID`, `UID`, `LOG_DAY`, `LOG_TYPE`, `LOG_TIME`) VALUES
(61, 21, 1, 'M', '2017-04-10 00:00:00'),
(62, 21, 1, 'E', '2017-04-10 00:00:00'),
(63, 21, 2, 'M', '2017-04-11 00:00:00'),
(64, 21, 2, 'E', '2017-04-11 02:50:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `cz_evg_answers`
--
ALTER TABLE `cz_evg_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cz_mng_answers`
--
ALTER TABLE `cz_mng_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cz_tips`
--
ALTER TABLE `cz_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cz_usr_bootcamp_log`
--
ALTER TABLE `cz_usr_bootcamp_log`
  ADD PRIMARY KEY (`LOG_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `U_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `cz_evg_answers`
--
ALTER TABLE `cz_evg_answers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cz_mng_answers`
--
ALTER TABLE `cz_mng_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cz_tips`
--
ALTER TABLE `cz_tips`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `cz_usr_bootcamp_log`
--
ALTER TABLE `cz_usr_bootcamp_log`
  MODIFY `LOG_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
