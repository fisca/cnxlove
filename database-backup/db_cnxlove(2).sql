-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `db_cnxlove`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_comment`
-- 

CREATE TABLE `tb_comment` (
  `id` int(11) NOT NULL auto_increment,
  `text` text collate utf8_unicode_ci NOT NULL,
  `reply` varchar(255) collate utf8_unicode_ci NOT NULL,
  `reply_id` int(11) NOT NULL,
  `date` varchar(255) collate utf8_unicode_ci NOT NULL,
  `update` varchar(255) collate utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `tb_comment`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_post`
-- 

CREATE TABLE `tb_post` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `author` varchar(255) collate utf8_unicode_ci NOT NULL,
  `date` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `category` varchar(255) collate utf8_unicode_ci NOT NULL,
  `update` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `tb_post`
-- 

INSERT INTO `tb_post` VALUES (1, 'ประชาชนแห่ซื้อดอกมะลิไหว้วันแม่', 'fisca', '2013-08-11 08:05:09', '&lt;p&gt;&lt;img src=&quot;http://localhost/cnxlove/src/uploads/2013/08/post-2-0-68109800-1376214543.jpg&quot; style=&quot;border:0px; height:auto; margin:0px; max-width:100%; padding:0px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;ประชาชนแห่ซื้อดอกมะลิเพื่อนำไปไหว้แม่สื่อความรักในวันแม่แห่งชาติปีนี้ เผยราคาแพงขึ้นจากปีที่ผ่านมาเนื่องจากพายุฝนถล่มดอกมะลิเน่า ราคาจึงแพงขึ้นกว่าปีที่ผ่านมามากขึ้น แต่บรรยากาศการซื้อดอกมะลิยังคึกคักอยู่&lt;/p&gt;\r\n\r\n&lt;p&gt;เมื่อวันที่ 11 ส.ค.56 สำหรับบรรยากาศก่อนวันแม่แห่งชาติประจำปีนี้ ในจังหวัดเชียงใหม่ประชาชนร่วมออกซื้อดอกมะลิ ซึ่งเป็นดอกไม้สัญลักษณ์สำคัญที่ใช้แสดงความรักที่มีต่อแม่กันแล้ว โดยที่บริเวณตลาดต้นลำไยซึ่งเป้นย่านค้าดอกไม้แห่งใหญ่ในเขตอำเภอเมืองเชียงใหม่ มีประชาชน นักเรียนนักศึกษาจำนวนมากเริ่มออกมาซื้อดอกมะลิเพื่อนำไปมอบให้แม่ในวันแม่แห่งชาติประจำปีนี้กันแล้ว โดยบรรยากาศขายดอกมะลิปีนี้เป็นไปอย่างคึกคักแม้ว่าจะมีราคาเพิ่มจากปีที่ผ่านมา โดยพ่อค้าแม่ค้านำเอามะลิเป็นพวงมาขาย พร้อมพวงมาลัยดอกมะลิ โดยพ่อค้าแม่ค้าก็มีการดีไซด์รูปแบบเพื่อให้แปลกใหม่แทนที่จะเป็นพวงธรรมดา เป็นรูปหัวใจที่สื่อถึงความรักที่สวยงามด้วย&lt;/p&gt;\r\n\r\n&lt;p&gt;สำหรับราคามะลิปีนี้ขึ้นราคาจากปีที่ผ่านมา โดยราคาขายร้อยสร้อยเป็นพวงจำนวน 10 พวง ขายราคา 150 บาท ตกราคาเส้นละ 15 บาท จากปีที่ผ่านมาขายเพียง 120 บาท ส่วนพวงมาลัยนั้นราคาเดิมปีที่แล้ว 120 บาท แต่ปีนี้ขายราคา 150 บาทขึ้นไป โดยดอกมะลิปีนี้ที่มาราคาแพงนั้นเนื่องจากออกมาน้อยเพราะถูกพายุฝนจนทำให้ดอกมะลิเน่า และดอกมะลิที่ได้ออกมาจำนวนน้อยไม่เพียงพอต่อความต้องการของตลาดราคาจึงแพงขึ้น&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;small&gt;ภาพและข่าวโดยทีมข่าว CM108.com .&lt;/small&gt;&lt;/p&gt;\r\n', 'general', '2013-09-12 16:36:33');
INSERT INTO `tb_post` VALUES (2, 'รายงานสถานการณ์น้ำ ในเชียงใหม่ มีน้ำไหลจากเชียงดาวมาในเมืองเชียงใหม่', 'fisca', '2013-08-11 08:52:11', '&lt;p&gt;&lt;img src=&quot;http://localhost/cnxlove/src/uploads/2013/08/post-2-0-97556300-1376213856.jpg&quot; style=&quot;border:0px; height:auto; margin:0px; max-width:100%; padding:0px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;11 สิงหาคม 2556 หัวหน้าสำนักงานป้องกันและบรรเทาสาธารณภัยจังหวัดเชียงใหม่ รายงานปริมาณน้ำ หลังเกิดภาวะฝนตกต่อเนื่องในจังหวัดเชียงใหม่ โดยน้ำจากอำเภอเชียงดาวได้ไหลลงมาสู่ตัวเมืองเชียงใหม่แล้ว ยังสามารถควบคุมได้ ขณะที่ประตูระบายน้ำที่ตำบลป่าแดด เปิดประตูระบายน้ำปิงแล้ว ทั้งหมด 6 บาน&lt;/p&gt;\r\n\r\n&lt;p&gt;นายคมสัน สุวรรณอัมพา หัวหน้าสำนักงานป้องกันและบรรเทาสาธารณภัยจังหวัดเชียงใหม่ เปิดเผยถึงสถานการณ์น้ำในจังหวัดเชียงใหม่ จากที่ตกต่อเนื่องระยะนี้ และตกตลอดทั้งคืนจนถึงวันนี้(11 ส.ค.56) ว่า ในพื้นที่อำเภอเมืองด้านทิศตะวันตก บริเวณดอยสุเทพ บ้านขุนช่างเคี่ยน มีปริมาณน้ำฝนสะสม 24 ชั่วโมง ตั้งแต่เมื่อคืน เกิน 100 มิลลิเมตร จังหวัดได้ประสานกับนายกองค์การบริหารส่วนตำบลช้างเผือก เข้าดำเนินการ เป็นไปด้วยความเรียบร้อย อีกหลายพื้นที่ ได้แก่ อำเภอจอมทอง แม่วางและแม่ริมบางส่วน ขณะนี้ มีปริมาณน้ำสะสมค่อนข้างมาก ทางจังหวัดได้เฝ้าดูอยู่ คาดว่าจะมีน้ำที่ไหลจากดอยสุเทพลงมา ทำให้น้ำในคันคลองชลประทานเพิ่มสูงขึ้น ซึ่งขณะนี้มีปริมาณมากอยู่แล้ว ทางชลประทานได้เร่งระบายน้ำ เพื่อเตรียมรองรับน้ำใหม่ โดยภายในตัวอำเภอเมือง ยังมีน้ำขังอยู่บ้างในพื้นที่ลุ่มต่ำ เช่น บริเวณศรีปิงเมือง ซอย 5 เทศบาลนครเชียงใหม่ ได้เร่งสูบน้ำออกแล้ว ขณะที่ อำเภอแม่ริมด้านหน้าบริเวณกองพันสัตว์ต่าง ลักษณะเป็นพื้นที่ลุ่มต่ำ ทำให้เกิดน้ำท่วมขัง มีปัญหาด้านการสัญจร องค์การบริหารส่วนตำบลดอนแก้ว ได้ดำเนินการอำนวยความสะดวกแล้ว สำหรับ น้ำจากอำเภอเชียงดาวได้ไหลลงมาสู่ตัวเมืองเชียงใหม่และยังสามารถควบคุมได้ สำหรับ ประตูระบายน้ำตำบลป่าแดด อำเภอเมือง ได้ดำเนินการเปิดประตูระบายน้ำทั้งหมด 6 บาน นั่นคือ ให้ปริมาณแม่น้ำปิงไหลทั้งหมด 100 % ไม่มีการบังคับน้ำ และระยะนี้ ต้องเตรียมรับมือ พายุ อูตอร์ ที่อาจส่งผลกระทบกับจังหวัดเชียงใหม่ เชียงรายได้&lt;/p&gt;\r\n\r\n&lt;p&gt;หัวหน้าสำนักงานป้องกันและบรรเทาสาธารณภัยจังหวัดเชียงใหม่ กล่าวด้วยว่า สำหรับพื้นที่ที่ได้รับความเสียหายจากอุทกภัย ได้แก่ พื้นที่ตำบลแม่เหียะ ประชาชนได้รับความเดือดร้อนจากน้ำป่าไหลผ่าน ในหมู่ที่ 5 ประมาณ 20 หลังคาเรือน ได้รับการช่วยเหลือแล้ว ส่วนอำเภอทางเหนือของจังหวัดเชียงใหม่ ที่มีน้ำท่วมขังระยะนี้ สถานการณ์คลี่คลายแล้ว คงเหลือแต่อำเภอแม่อาย ที่ยังมีปริมาณน้ำมาก ขณะที่ มูลนิธิราชประชานุเคราะห์ ได้เข้ามอบสิ่งของพระราชทานฯ ให้กับประชาชน ในพื้นที่อำเภอฝางและไชยปราการ อำเภอละ 500 ชุด&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;small&gt;ข่าวโดย กนกรัตน์ ปัญญา สวท. เชียงใหม่&amp;nbsp;&lt;br /&gt;\r\nภาพโดยคุณ Ake CNX&lt;/small&gt;&lt;/p&gt;\r\n', 'general', '2013-09-12 16:40:13');
INSERT INTO `tb_post` VALUES (3, 'แขวงการทางเชียงใหม่เตือน ระวังถนนหมายเลข 1229', 'Admin', '2013-09-06 14:18:18', '&lt;p&gt;&lt;strong&gt;แขวงการทางเชียงใหม่เตือนประชาชนเพิ่มความระมัดระวังในการใช้เส้นทางทางหมายเลข 1229 ตอน เชียงใหม่-เปาสามขา ที่อยู่ระหว่างดำเนินการเสริมผิวแอสฟัลด์&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.prdnorth.in.th/Images/NewsImg/D13/130904223121.gif&quot; style=&quot;height:350px; width:233px&quot; /&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;div style=&quot;margin: 0px; padding: 0px; color: rgb(40, 40, 40); font-family: helvetica, arial, sans-serif; font-size: 18px; line-height: 28px;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;margin: 0px; padding: 0px; color: rgb(40, 40, 40); font-family: helvetica, arial, sans-serif; font-size: 18px; line-height: 28px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;นายวสวัตติ์ ประภัสสร ผู้อำนวยการแขวงการทางเชียงใหม่ที่ 2 เปิดเผยว่า กรมทางหลวง โดย แขวงการทางเชียงใหม่ที่ 2 สำนักทางหลวงที่ 1 (เชียงใหม่) ได้จ้างเหมาทำการบำรุงรักษาทางหลวง โดยเสริมผิวแอสฟัลต์รวมทั้งแก้ไขจุดอ่อนตัว (SOFT SPOT) พร้อมทำเครื่องหมายจราจรบนผิวทาง ในทางหลวงหมายเลข 1229 ตอน เชียงใหม่-เปาสามขา ระหว่าง กม. 3 &amp;ndash; กม. 7 ระยะเวลาทำการ 120 วัน ตั้งแต่วันที่ 9 สิงหาคม &amp;ndash; 6 ธันวาคม 2556 ซึ่งในช่วงเวลาดำเนินการก่อสร้างอาจทำให้เกิดความไม่สะดวกในการจราจรแก่ผู้ใช้รถใช้ถนน&lt;/div&gt;\r\n\r\n&lt;div style=&quot;margin: 0px; padding: 0px; color: rgb(40, 40, 40); font-family: helvetica, arial, sans-serif; font-size: 18px; line-height: 28px;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;margin: 0px; padding: 0px; color: rgb(40, 40, 40); font-family: helvetica, arial, sans-serif; font-size: 18px; line-height: 28px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; ตลอดจนผู้อาศัยในพื้นที่ของเส้นทางดังกล่าว จึงขอให้ผู้ที่ใช้เส้นทางดังกล่าวเพิ่มความระมัดระวัง รวมทั้งขอให้ปฏิบัติตามป้ายแนะนำ และสัญญาณจราจรที่ติดตั้งไว้อย่างเคร่งครัด ทั้งนี้ สามารถสอบถามรายละเอียดเพิ่มเติมได้ที่ แขวงการทางเชียงใหม่ที่ 2 กรมทางหลวง Service Center 0-5326-0649 และ 0-5326-0676&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;margin: 0px; padding: 0px; color: rgb(40, 40, 40); font-family: helvetica, arial, sans-serif; font-size: 18px; line-height: 28px;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;margin: 0px; padding: 0px; color: rgb(40, 40, 40); font-family: helvetica, arial, sans-serif; font-size: 18px; line-height: 28px;&quot;&gt;&amp;nbsp; ข่าวโดย : ราตรี จักร์แก้ว&lt;/div&gt;\r\n\r\n&lt;div style=&quot;margin: 0px; padding: 0px; color: rgb(40, 40, 40); font-family: helvetica, arial, sans-serif; font-size: 18px; line-height: 28px;&quot;&gt;Credit: cm108.com&lt;/div&gt;\r\n', 'general', '2013-09-23 14:18:18');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_user`
-- 

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) collate utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) collate utf8_unicode_ci NOT NULL,
  `address` varchar(255) collate utf8_unicode_ci NOT NULL,
  `register_date` varchar(255) collate utf8_unicode_ci NOT NULL,
  `update` varchar(255) collate utf8_unicode_ci NOT NULL,
  `level` varchar(255) collate utf8_unicode_ci NOT NULL,
  `password` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `tb_user`
-- 

