-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 05:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appspages`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap_apks`
--

CREATE TABLE `ap_apks` (
  `ap_id` int(6) NOT NULL,
  `ap_name` varchar(100) NOT NULL,
  `apk_link` varchar(200) NOT NULL,
  `ap_logo_url` varchar(200) NOT NULL,
  `ap_featured` varchar(500) NOT NULL,
  `ap_screenshots` varchar(1000) NOT NULL,
  `ap_description` varchar(2000) NOT NULL,
  `ap_tag` varchar(100) NOT NULL,
  `ap_version` varchar(20) NOT NULL,
  `user` int(6) NOT NULL,
  `ap_stars` varchar(6) NOT NULL,
  `ap_views` int(6) NOT NULL,
  `ap_downloads` int(6) NOT NULL,
  `ap_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `ap_youtube` varchar(40) NOT NULL,
  `ap_website` varchar(60) NOT NULL,
  `ap_custom_html` varchar(1000) NOT NULL,
  `ap_likes` int(6) NOT NULL,
  `ap_dislikes` int(6) NOT NULL,
  `ap_hearts` int(6) NOT NULL,
  `ap_size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ap_apks`
--

INSERT INTO `ap_apks` (`ap_id`, `ap_name`, `apk_link`, `ap_logo_url`, `ap_featured`, `ap_screenshots`, `ap_description`, `ap_tag`, `ap_version`, `user`, `ap_stars`, `ap_views`, `ap_downloads`, `ap_timestamp`, `ap_youtube`, `ap_website`, `ap_custom_html`, `ap_likes`, `ap_dislikes`, `ap_hearts`, `ap_size`) VALUES
(1, 'Firefox Browser: fast, private & safe web browser', 'https://apkpure.com/firefox-browser-fast-private-safe-web-browser/org.mozilla.firefox/download?from=details', 'https://i.imgur.com/pm4alC9.png', 'https://cdn.mos.cms.futurecdn.net/pSNH4Z4ueAwMYtjaErFnMG.jpg', 'https://i.imgur.com/IORqLPK.jpg|https://i.imgur.com/zBTIHbX.jpg|https://i.imgur.com/DLMqYn3.jpg|https://i.imgur.com/QfLxm5q.jpg|https://i.imgur.com/pMCaZjm.jpg|https://i.imgur.com/PfHCSYo.jpg|https://i.imgur.com/nP2JQHA.jpg|https://i.imgur.com/bMa2voG.jpg', 'The description of Firefox App\r\nGo bold with more control of your internet experience than ever before. Now you can see your open tabs, recent searches and favorite sites all in one place. The new Firefox home screen adapts to you. The more you use it, the smarter it gets. Firefox makes it easier for you to pick up right where you left off.\r\n\r\nWhen it comes to your life online, you have a choice: accept the factory settings or put your privacy first. When you choose Firefox as your default browser, you’re choosing to protect your data while supporting an independent tech company. Firefox is also the only major browser backed by a non-profit fighting to give you more openness, transparency and control of your life online. Join hundreds of millions of people who choose to protect what\'s important by choosing Firefox.\r\n\r\nTL;DR\r\n- Feel more in control of your internet experience. The new home screen lets you pick up right where you left off every time\r\n- Even more industry-leading privacy and security from the most trusted name in tech\r\n\r\nPERSONALIZED HOME SCREEN\r\nPick up right where you left off. Now you can see all your open tabs intuitively grouped and displayed along with your recent searches, bookmarks and favorite sites. You’ll also see popular articles recommended by Pocket, updated daily.\r\n\r\nMOVE THE SEARCH BAR WHERE YOU WANT IT\r\nFirefox lets you choose the default placement of the search bar, either at the top or the bottom of your screen. Sometimes it’s easier to search for things if you put the search bar at the bottom — especially if you’re using one hand.\r\n\r\nFAST. PRIVATE. SAFE.\r\nKeep what’s personal private without sacrificing speed. With Firefox, you can have more control to decide what to share online and when, because your life is your business. We designed Firefox with smart browsing features that let you take your privacy, password and bookmarks with you safely wherever you go.\r\n\r\nMAKE FIREFOX YOUR OWN\r\nMake Firefox your go-to, get-it-done, default br', 'Communication', '94.1.1', 1, '', 5, 7, '2021-11-06 11:58:39', '', '', '', 0, 0, 0, '73.2'),
(2, 'Firefox Browser2: fast, private & safe web browser', 'https://apkpure.com/firefox-browser-fast-private-safe-web-browser/org.mozilla.firefox/download?from=details', 'https://i.imgur.com/pm4alC9.png', 'https://cdn.mos.cms.futurecdn.net/pSNH4Z4ueAwMYtjaErFnMG.jpg', 'https://i.imgur.com/IORqLPK.jpg|https://i.imgur.com/IORqLPK.jpg|https://i.imgur.com/IORqLPK.jpg|https://i.imgur.com/IORqLPK.jpg|https://i.imgur.com/IORqLPK.jpg|https://i.imgur.com/IORqLPK.jpg|https://i.imgur.com/IORqLPK.jpg', 'The description of Firefox App\r\nGo bold with more control of your internet experience than ever before. Now you can see your open tabs, recent searches and favorite sites all in one place. The new Firefox home screen adapts to you. The more you use it, the smarter it gets. Firefox makes it easier for you to pick up right where you left off.\r\n\r\nWhen it comes to your life online, you have a choice: accept the factory settings or put your privacy first. When you choose Firefox as your default browser, you’re choosing to protect your data while supporting an independent tech company. Firefox is also the only major browser backed by a non-profit fighting to give you more openness, transparency and control of your life online. Join hundreds of millions of people who choose to protect what\'s important by choosing Firefox.\r\n\r\nTL;DR\r\n- Feel more in control of your internet experience. The new home screen lets you pick up right where you left off every time\r\n- Even more industry-leading privacy and security from the most trusted name in tech\r\n\r\nPERSONALIZED HOME SCREEN\r\nPick up right where you left off. Now you can see all your open tabs intuitively grouped and displayed along with your recent searches, bookmarks and favorite sites. You’ll also see popular articles recommended by Pocket, updated daily.\r\n\r\nMOVE THE SEARCH BAR WHERE YOU WANT IT\r\nFirefox lets you choose the default placement of the search bar, either at the top or the bottom of your screen. Sometimes it’s easier to search for things if you put the search bar at the bottom — especially if you’re using one hand.\r\n\r\nFAST. PRIVATE. SAFE.\r\nKeep what’s personal private without sacrificing speed. With Firefox, you can have more control to decide what to share online and when, because your life is your business. We designed Firefox with smart browsing features that let you take your privacy, password and bookmarks with you safely wherever you go.\r\n\r\nMAKE FIREFOX YOUR OWN\r\nMake Firefox your go-to, get-it-done, default br', 'Communication', '94.1.1', 2, '', 0, 0, '2021-11-06 11:59:20', '', '', '', 0, 0, 0, '73.2'),
(3, '2ndLine Second Phone Number', 'https://apkpure.com/2ndline-second-phone-number/com.enflick.android.tn2ndLine/download?from=details', 'https://i.imgur.com/XvYviR2.png', 'https://img.youtube.com/vi/3Du7R_qklZI/maxresdefault.jpg', 'https://image.winudf.com/v2/image1/Y29tLmVuZmxpY2suYW5kcm9pZC50bjJuZExpbmVfc2NyZWVuXzBfMTU1NTUzMDkxMV8wMzI/screen-0.jpg?h=355&fakeurl=1&type=.jpg|https://image.winudf.com/v2/image1/Y29tLmVuZmxpY2suYW5kcm9pZC50bjJuZExpbmVfc2NyZWVuXzNfMTU1NTUzMDkxMl8wMjU/screen-3.jpg?h=355&fakeurl=1&type=.jpg|https://image.winudf.com/v2/image1/Y29tLmVuZmxpY2suYW5kcm9pZC50bjJuZExpbmVfc2NyZWVuXzNfMTU1NTUzMDkxMl8wMjU/screen-3.jpg?h=355&fakeurl=1&type=.jpg|https://image.winudf.com/v2/image1/Y29tLmVuZmxpY2suYW5kcm9pZC50bjJuZExpbmVfc2NyZWVuXzRfMTU1NTUzMDkxMl8wNDk/screen-4.jpg?h=355&fakeurl=1&type=.jpg|https://image.winudf.com/v2/image1/Y29tLmVuZmxpY2suYW5kcm9pZC50bjJuZExpbmVfc2NyZWVuXzhfMTU1NTUzMDkxNF8wNDc/screen-5.jpg?h=355&fakeurl=1&type=.jpg|https://image.winudf.com/v2/image1/Y29tLmVuZmxpY2suYW5kcm9pZC50bjJuZExpbmVfc2NyZWVuXzlfMTU1NTUzMDkxNF8wODc/screen-6.jpg?h=355&fakeurl=1&type=.jpg', 'The description of 2ndLine App\r\n2ndLine is a second US or Canada phone number that works on your smartphone, tablets as a full-featured business phone system, designed for mobile professionals, freelancers, and entrepreneurs. Call and message from a separate number on devices you and your team already have, via Wi-Fi or your existing cellular network, with anyone in the U.S. and Canada.\r\n\r\nLocal Phone number\r\nGive your friends your very own phone number they can call!\r\n\r\nUnlimited Text & Picture Messaging\r\nYou can send as many text messages as you want to US & Canada - FREE!\r\n\r\nUnlimited Calling to USA and Canada\r\nMake unlimited free phone calls to any phone number in the US & Canada!\r\n\r\nCheap International Calling\r\nAdd money or earn free money by completing offers to your account and make low-cost international calls\r\n\r\nFeatures:\r\n- Make and receive voice calls\r\n- Emojis, stickers and gifs\r\n- Full picture messaging : send, receive and save pictures!\r\n- Voicemail Transcription: transcript of your voicemail\r\n- Caller ID\r\n- PassCode: keep your messages under lock and key\r\n- Google SmartLock: no need to remember your password\r\n- Call Forwarding\r\n- Signatures: add your own signature to each text\r\n- Customizable text-tone, ringtone & vibration\r\n- Customizable backgrounds\r\n- Assign individual contacts their own ringtone & background\r\n- Quick Reply to easily (and quickly) respond to friends\r\n- Unified inbox: send and receive your texts directly via 2ndLine - use 2ndLine as your one-stop SMS texting app!\r\n-Elastic calling is 2ndLine\'s unique ability to have our calls choose the best possible route for your call to improve quality\r\n\r\nPrivacy policy: https://www.2ndline.co/privacy\r\nPrivacy Policy for California Residents Only: https://www.2ndline.co/california-privacy\r\nTerms of use: https://www.2ndline.co/terms', 'Communication', '21.42.0.0', 1, '', 0, 0, '2021-11-08 04:50:46', 'https://youtu.be/3Du7R_qklZI', 'https://apkpure.com/2ndline-second-phone-number/com.enflick.', '2ndLine App 21.42.0.0 Update\r\n2021-11-03\r\nNew & Noticeable:\r\n• No new features this week, but keep checking this space for any future announcements.\r\n\r\nNew and Not-so Noticeable:\r\n• Lots of under-the-hood optimizations, minor bug fixes, performance, and stability improvements.', 0, 0, 0, '80.4'),
(7, '2ndLine Second Phone Number', 'efw', 'ewf', 'ewf', 'efw', 'fe', 'few', 'few', 1, '', 0, 0, '2021-11-14 16:03:47', 'ewf', 'ewf', '', 0, 0, 0, 'wef');

-- --------------------------------------------------------

--
-- Table structure for table `ap_users`
--

CREATE TABLE `ap_users` (
  `ur_id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ur_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ur_bio` varchar(1000) NOT NULL,
  `ur_website` varchar(100) NOT NULL,
  `ur_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ur_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ap_users`
--

INSERT INTO `ap_users` (`ur_id`, `username`, `password`, `ur_name`, `email`, `ur_bio`, `ur_website`, `ur_time`, `ur_logo`) VALUES
(1, 'shr4', 'deep', 'SHASWAT RAJ', 'sh@sh.com', 'Bio', '', '2021-11-09 12:18:00', ''),
(2, '618a69060db72', '618a69060db72', 'rye5ry', 'tr5uytr@gs.hdt', '', '', '2021-11-09 12:26:46', ''),
(3, '618a6962893a1', '618a6962893a1', 'Mozilla', 'mozilla@firefox.com', '', '', '2021-11-09 12:28:18', ''),
(4, '618a699ee9342', 'mozillapass', 'Mozilla', 'mozilla@firefox.com', 'b', 'we', '2021-11-09 12:29:18', 'l'),
(5, '618a704aebb8c', 'mozillapass', 'Mozilla', 'mozilla@firefox.com', '', '', '2021-11-09 12:57:46', ''),
(6, '618a77d54ea2c', '', '', 'e@mail.com', '', '', '2021-11-09 13:29:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(6) NOT NULL,
  `userid` int(6) NOT NULL,
  `content` varchar(500) NOT NULL,
  `reply` tinyint(1) NOT NULL,
  `replycommentid` int(6) NOT NULL,
  `likes` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap_apks`
--
ALTER TABLE `ap_apks`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `ap_users`
--
ALTER TABLE `ap_users`
  ADD PRIMARY KEY (`ur_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ap_apks`
--
ALTER TABLE `ap_apks`
  MODIFY `ap_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ap_users`
--
ALTER TABLE `ap_users`
  MODIFY `ur_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
