-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2017 at 03:03 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `allow` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `category`, `allow`) VALUES
(1, 'วัสดุโครงสร้าง', 1),
(2, 'ปูน', 1),
(3, 'เหล็ก', 1),
(4, 'หลังคา', 1),
(5, 'ไม้', 1),
(6, 'ท่อ', 1),
(7, 'กระเบื้องหลังคา', 1),
(8, 'ของตกแต่ง', 1),
(9, 'ตัวทำละลาย', 1),
(10, 'น้ำยา', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
  `id_member` int(11) NOT NULL,
  `us` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ps` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(35) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `level` int(1) NOT NULL,
  `authentic` int(1) NOT NULL,
  `id_department` int(5) NOT NULL,
  `point` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `us`, `ps`, `name`, `lastname`, `level`, `authentic`, `id_department`, `point`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'jutturong', 'charoenrit', 1, 1, 1, 9000),
(2, 'client1', '81dc9bdb52d04dc20036dbd8313ed055', 'kanda', 'laster', 2, 1, 2, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
  `id_product` int(11) NOT NULL,
  `id_category` int(10) NOT NULL,
  `product_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `code_product` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name_product` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `brand_product` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `number_product` int(10) NOT NULL,
  `price_product` float NOT NULL,
  `description_product` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `id_category`, `product_name`, `code_product`, `name_product`, `brand_product`, `number_product`, `price_product`, `description_product`) VALUES
(1, 7, 'PRD_cpacmonier_prakaitong1.jpg', 'AK1001', 'กระเบื้องหลังคาซีแพคโมเนีย ตราช้าง สีประกายกาญจน์ (BULLION FLASHED)', 'ตราช้าง', 5, 13.82, 'กลุ่มสีคอนแทรซ(Contrazz)....2อารมณ์สีสวย...ไม่ซ้ำใคร เมื่อความเข้มขรึมสาดเข้าหาความร้อนแรงด้วยจังหวะที่กลมกลืนก่อกำเนิดอารมณ์สีสวยโดดเด่นที่ผสานในแผ่นเดียว กระเบื้องหลังคาซีแพคโมเนีย ตราช้าง คอนแทรซ.. ศิลปะแห่งสีสันบนผืนหลังคาที่สวยไม่ซ้ำผืน ไม่ซ้ำใครน้ำหนักกระเบื้องหลังคาซีแพคโมเนีย ตราช้าง (โดยประมาณ) -ต่อแผ่น : 4.05 กิโลกรัม -ระยะแป 34 เซนติเมตร : 39.70 ก.ก/ตร.ม. -ระยะแป 32 เซนติเมตร : 42.20 ก.ก/ตร.ม. -ต่อ 1,000 แผ่น : 4.05 ตัน'),
(2, 1, '015.gif', 'S0041', 'เหล็กข้ออ้อย SD-40, 20 มิล 24.66kg ( โรงใหญ่ )', '-', 12, 599, 'เหล็กข้ออ้อย SD-40, 20 มิล 24.66kg ( โรงใหญ่ )'),
(3, 2, '0009b5.png', 'p001', 'ปูนก่อทั่วไป อินทรีมอร์ตาร์ 21', 'อินทรี', 5, 250, 'ปูนก่อทั่วไป อินทรีมอร์ตาร์ 21 คือ ปูนสำเร็จรูปที่มีส่วนผสมของปูนซีเมนต์ หินบดคุณภาพที่มีขนาดคละเหมาะสม และสารเคมีเพิ่มคุณสมบัติงานก่อ ทำให้ปูนก่อเหนียว มีการยึดเกาะอิฐที่ดี นุ่มเบามือ \nมีระยะแห้งตัวที่เหมาะสม จัดแนวก่อได้ง่ายได้ผนังที่แข็งแรงทนทาน'),
(4, 3, 'ibhbwf.png', 'S001', 'เหล็กเอชบีม เฮชบีม H-BEAMS', 'Bangkok  IRON', 100, 1100, 'หน้าตัดที่เป็นรูปทรงของเหล็กโครงสร้างรูปพรรณรีดร้อน ทำให้เหล็กมีคุณสมบัติในการรับแรงในแนวต่างๆอย่างมีประสิทธิภาพ ด้วยน้ำหนักที่เบากกว่าโครงสร้างคอนกรีต เหมาะสำหรับใช้งานโครงสร้างชนิดต่างๆ เช่น โรงงาน อาคารสูง สนามกีฬา เสาส่งไฟฟ้า ตลอดจนบ้านพักอาศัย เหล็กโครงสร้างรูปพรรณรีดร้อน มีหน้าตัดเป็นรูปตัวเอช เรียกกันว่า H-beam มีปีกกว้าง (Wide Flange) เหมาะสำหรับงานโครงสร้างคาน เสา และโครงหลังคา ส่วนหน้าตัดรูปตัวไอ I-beam ปีกเหล็กจะหนาขึ้นที่โคนปีก จึงรับแรงสั่นสะเทือนได้ดี เหมาะกับงานเครื่องจักร รางเครน สำหรับเหล็กฉากหรือ Angle มีหน้าตัดรูปตัว L ใช้งานโครงสร้างหลังคา เสาส่งไฟฟ้าแรงสูง เสาวิทยุ เสาโทรศัพท์ อีกหน้าตัดหนึ่ง คือ รางน้ำ หรือ Channel มีหน้าตัดรูปตัว C นิยมใช้ทำคานรองรับส่วนประกอบต่างๆ เช่น บันได คานขอบนอก นอกจากนั้น เอชบีมที่นำมาตัดแบ่งตามยาว เรียกว่า Cut Beam หรือ Cut-T ใช้ทำโครงสร้างของ Truss แทนการใช้เหล็กฉากเชื่อมประกบกัน\n\nข้อดีของการใช้เหล็กโครงสร้างรูปพรรณรีดร้อน \n+ ลดระยะเวลาการก่อสร้าง ทำให้ลดภาระดอกเบี้ยของโครงการ เปิดใช้งานได้รวดเร็ว \n+ เตรียมงานจากโรงงานได้ และใช้แรงงานน้อยกว่าการก่อสร้างด้วยระบบอื่น\n+ ออกแบบโครงสร้างให้มีช่วงเสากว้าง กว่าโครงสร้างระบบอื่น ไม่เปลืองพื้นที่ใช้งาน\n+ ออกแบบงานสถาปัตยกรรมได้หลากหลายเช่น ตัดโค้ง ทำใครงสร้างโปร่ง หรือทำส่วนยื่่นได้มาก\n+ โครงสร้างมีน้ำหนักเบา ทำให้ประหยัดฐานราก ลดการขนส่ง และพื้นที่กองเก็บวัสดุ\n+ ตรวจสอบ ควบคุมคุณภาพ และบำรุงรักษาได้สะดวกกว่าโครงสร้างอื่น \n+ มีความแข็งแรง สามารถรับแรงสั่นสะเทือนและแผ่นดินไหว ได้ดีกว่าโครงสร้างระบบอื่น \n+ ก่อสร้างในที่จำกัดได้สะดวก ไม่ก่อให้เกิดมลภาวะฝุ่น\n+ ดัดแปลง ต่อเติม หรือรื้อไปสร้างใหม่ได้ ไม่ต้องทุบทิ้ง \n+ สามารถนำวัสดุมาหมุนเวียนได้ 100%\n\nกระบวนการผลิตเหล็กโครงสร้าง รูปพรรณรีดร้อน เริ่มจากการนำเศษเหล็กมาหลอมในเบ้าขนาดใหญ่ด้วยความร้อนสูงกว่า 1600 องศาเซลเซียส จนกลายเป็นน้ำเหล็ก แล้วเติมโลหะปรุงแต่งส่วนผสมเพื่อให้มีความแข็งแรงตามเกรดที่ต้องการ เมื่อปรุงแต่งส่วนผสมแล้ว จึงนำมาหล่อให้เป็นแท่ง หลังจากนั้น นำเหล้กแท่งมารีดด้วยแท่นรีดขนาดใหญ่ ที่อุณหภูมิประมาณ 1200 องศาเซลเซียส รูปร่างหน้าตัดของเหล็กแท่งจะถูกลดขนาดและแปรเปลี่ยนไปตามแบบของลูกรีด จนมีขนาดมาตรฐาน จุดสำคัญในการการทำคือ การควบคุมส่วนประกอบทางเคมีของการหลอมแต่ละเบ้า Heat การรีดเหล็กร้อนให้เป็นรูปร่างที่มีความกว้างและความหนาให้พอดีตามที่กำหนด และการทดสอบความแข็งแรง\n\nเนื่องจากผลิตโดยการหลอมและรีดร้อนขึ้นเป็นท่อน เหล็กโครงสร้างชนิดนี้จึงมีเนื้อเดียวกัน ไม่มีรอยเชื่อมระหว่างส่วนต่างๆ ดังนั้นคุณสมบัติของหน้าตัดจึงสม่ำเสมอกว่าเหล็กโครงสร้างชนิดอื่นเช่น เหล็กรูปพรรณกลวงซึ่งทำจากเหล็กม้วนและเชื่อมตามยาว กับเหล็กโครงสร้างรูปพรรณเชื่อมประกอบที่ทำจากเหล็กแผ่นสามชิ้นเชื่อมเข้าด้วยกัน\n\nเกรดหรือชั้นคุณภาพ\nเกรดของเหล็กโครงสร้างรูปพรรณรีดร้อน เป็นตัวระบุความแข็งแรงของเนื้อเหล็ก เหล็กที่ใช้งานโครงสร้างมีความต้านแรงดึง Tensile Strength ในระดับ 400N/mm2 ขึ้นไป เช่น ASTM A36, JIS/TIS SS400, SM400 เป็นต้น \n\nวิศวกรบางท่านอาจคุ้นเคยกับเหล็ก ASTM A36 เนื่องจากมีในตำราออกแบบที่มีพื้นฐานจากต่างประเทศ แต่ไม่สามารถหาได้ในท้องตลาด จึงมักเกิดปัญหาการใช้งาน ดังนั้นการออกแบบในปัจจุบันจึงต้องใช้เหล็กตามมาตรฐาน TIS 1227-2539 ซึ่งเป็นมาตรฐานที่ใช้กับเหล็กที่มีจำหน่ายในประเทศ\n\nผู้ใช้สามารถทราบคุณสมบัติของเหล็กที่นำมาใช้งานได้จากเอกสาร Mill Certificate ที่ออกโดยผู้ผลิตและที่ตัวเหล็กแต่ละท่อนมีสติ๊กเกอร์ระบุเกรด Heat no. อาคาร จะใช้เกรดสูง หรือ High-Strength ซึ่งมีความต้านแรงดึงตั้งแต่ 490N/mm2 เช่น ASTM A572, ASTM A992, JIS/TIS SM490, SM520 เป็นต้น นอกจากนี้ยังมีเกรดเฉพาะงาน เช่น โครงสร้างในทะเล แท่นขุดเจาะก๊าซธรรมชาติในทะเล ที่ต้องใช้เหล็กโครงสร้างเกรดสูงและมีความต้านทานแรงกระแทกที่อุณหภูมิต่ำมากคือ -20องศา , -40องศา ซึ่งการผลิตและทดสอบก็จะเข้มงวดยิ่งขึ้น'),
(5, 4, 'brick_1_pd366390.jpg', '8852404047677', 'กระเบื้องหลังคาไฟเบอร์ซีเมนต์ เอสซีจี รุ่นไอยร่า คลาสสิก 9 นิ้ว เนเชอรัลบริค', 'SCG', 90, 30, 'วัสดุ : ไฟเบอร์ซีเมนต์ \nขนาดสินค้า\nความกว้าง : 60 ซม.\nความยาว : 44 ซม.\nความสูง/หนา : 0.6 ซม.\nน้ำหนัก : 2.5 กก.\nข้อมูลอื่นๆ\nจำนวนการใช้งาน : 11.11 แผ่น/ตร.ม. \nระยะแป : 15 ซม. \nองศาหลังคา : 30-45 องศา \nคำแนะนำ และข้อควรระวัง\n- ใช้ติดตั้งเป็นหลังคาบ้านพักอาศัย หรืออาคารที่มีความสูงของสันหลังคาจากพื้นดินไม่เกิน 23ม.เท่านั้น โดยต้องติดตั้งตามคู่มือการติดตั้ง และใช้อุปกรณ์ที่ได้มาตรฐานจากบริษัทผู้ผลิต\n- การทำงานบนหลังคา ต้องใช้อุปกรณ์ถ่ายน้ำหนักทีได้มาตรฐานเช่นบันได\n- สีของผลิตภัณฑ์ในภาพอาจแตกต่างจากสีของผลิตภัณฑ์จริง เนื่องจากการแสดงผลหน้าจอที่แตกต่างกัน ควรพิจารณาสีของผลิตภัณฑ์จริงที่ร้านค้าก่อนการสั่งซื้อ\n- สภาพของผลิตภัณฑ์อาจมีการเปลี่ยนแปลงหรือเกิดคราบดำ ขึ้นอยู่กับสภาพแวดล้อมและการใช้งาน'),
(6, 4, 'pd320748.jpg', '8852404046502', 'ครอบ 4 ทาง ไฟเบอร์ซีเมนต์ เอสซีจี รุ่นไอยร่า30องศา เนเชอรัลบริค', 'SCG', 88, 34, 'วัสดุ : ไฟเบอร์ซีเมนต์ \nขนาดสินค้า\nความกว้าง : 41 ซม.\nความยาว : 41 ซม.\nน้ำหนัก : 1.4 กก.\nข้อมูลอื่นๆ\nจำนวนการใช้งาน : 1 แผ่น/จุด'),
(7, 5, '_1_20140313_1864908508.jpg', 'M4416', 'ไม้เยลโล', 'สายสองค้าไม้', 100, 700, 'จำหน่าย : ไม้เยลโล หลากหลายขนาด ได้แก่ 1×6, 1×8,1×10 ความยาวเริ่มตั้งแต่ 2-6 เมตร ไม้เยลโลจะเป็นไม้ที่มีความละเอียดอ่อนมาก และยังมีน้ำหนักเบาคล้ายกับไม้กะบากต่างกันเพียงน้ำหนัก ไม้เยลโล่จะออกสีเหลืองอ่อนๆ ไปทางเข้ม\n\nการใช้งาน : ใช้ทำแบบเสา เทพื้น มีความคงทนสูงกว่าเบญจพรรณ'),
(8, 5, '_1_20140314_1145996801.jpg', 'M88906', 'ไม้อัดเคลือบฟิลม์', 'สายสองค้าไม้', 80, 300, 'จำหน่าย : ไม้อัดเคลือบฟิลม์ ความกว้าง และความยาวจะเป็นขนาดมาตรฐานคือ ขนาด 4'' x 8'' (1220 x 2440 มม.) ส่วนความหนาอยู่ที่ 10, 15 และ 20 มม\n\nคุณสมบัติ \n1. ทำจากไม้เนื้อแข็งที่คัดคุณภาพพิเศษ\n2. เคลือบผิวด้วย ฟิล์มฟิโนลิค ทั้ง 2 ด้าน ป้องกันด่างและการซึมของความชื้น ได้ดีเป็นพิเศษ ทนทานกว่าไม้อัดธรรมดา\n3. ขอบทั้ง 4 ด้าน เคลือบด้วยสารกันน้ำชนิดพิเศษ\n4. ประหยัดและคุ้มค่ากว่าไม้อัดธรรมดา เพราะสามารถใช้งานซ้ำได้หลายครั้ง\n5. ถอดแบบง่าย ผิวคอนกรีตเรียบสวย\n6. น้ำหนักเบา ใช้งานง่าย'),
(9, 6, 'PVC.jpg', 'P00987', 'ท่อพีวีซี Pvc Pipe Price List', 'SCG', 34, 700, 'ท่อพีวีซีราคา ราคาท่อ pvc ราคาท่อ pvc สีฟ้า ราคาท่อ pvc สีเหลือง ราคาท่อ pvc สีเทา ราคาท่อพีวีซี ราคาท่อพีวีซีสีฟ้า ราคาท่อพีวีซีสีเหลือง ราคาท่อพีวีซีสีเทา ท่อพีวีซี ราคา pvc ราคา pvc ราคาถูกท่อ pvc ราคา ราคาท่อน้ำประปา ราคา ท่อน้ํา pvc ท่อเหลือง ราคา ท่อร้อยสายไฟ ราคาราคาท่อประปา ราคาท่อประปาพีวีซี ราคาท่อเกษตรท่อประปาราคาถูก ท่อเกษตรราคาถูก ท่อน้ำราคาถูก ราคาท่อน้ำในประเทศไทย Pvc Pipe Price List ราคาท่อพีวีซีpvc ทุกชนิด ทุกขนาด สีฟ้า(ท่อประปา,ท่อเกษตร,ท่อน้ำดื่ม) สีเหลือง(ท่อร้อยสายไฟ) สีเทา(ท่อเกษตร) ราคาท่อประปา ราคาท่อเกษตร ราคาท่อน้ำ ราคาท่อร้อยสายไฟ ราคาท่อพีวีซี สีเหลือง ราคาท่อพีวีซี สีฟ้า ราคาท่อพีวีซี สีเทา ขายส่งท่อพีวีซี ราคาส่ง ราคาถูก ราคาโรงงาน ขนส่งฟรีทั่วประเทศ'),
(10, 7, 'B760-24S1.gif', 'B750-24S', 'หลังคาเหล็ก ระบบยิงสกรู (BOLT SYSTEM)', 'JCRoof', 89, 900, 'แผ่นหลังคาเหล็ก แบบ Bolt Type (Roofing Bolt Type) การขึ้นรูปแผ่นหลังคาในแบบ นี้ชอบเรียกกันว่า ลอนต่ำ โดยใช้สกรูเป็นตัวยึดแผ่นหลังคาติดกับโครงสร้าง โดยมีแบบลอนมาตรฐานที่ใช้งานกันอยู่ทั่วไป มี 2 แบบ ได้แก่ ลอนอกไก่ และท้องลอนคู่ หรือ ผู้ผลิตบางราย อาจจะมีแตกต่างกันออกไป เช่น ท้องลอนเดี่ยว เป็นต้น ส่วนความกว้างลอน เป็นความกว้าง มาตรฐาน ที่เรียกกันว่า ลอน 760, ลอน 750, ลอน 730 เป็นต้น ส่วนที่มาของตัวเลข ได้มาจาก ความกว้างของแผ่นหลังคา โดยวัดจาก เซ็นเตอร์ลอน ถึง เซ็นเตอร์ลอนอีกด้านนึง ก็จะได้ความกว้างของลอน'),
(11, 8, '3_3_60.jpg', 'SL33456', 'เตียงเสริม Springmate รุ่น Ultra Smart พร้อมที่นอนฟองน้ำ', 'Springmate', 5, 2990, 'เสริมความนุ่ม อบอุ่นยามหลับไหล เพิ่มพื้นที่ในการนอนให้สะดวกสบายไม่ว่าที่ไหน กับเตียงเสริม Springmate รุ่น Ultra Smart เตียงทำจากไม้ยึดติดกับโครงเหล็กที่ผ่านการอบสีในความร้อนสูงมาเป็นอย่างดี มีความแข็งแรงทนทานมากเป็นพิเศษ เคลื่อนย้ายสะดวกด้วยล้อเลื่อนทั้งหมด 4 ล้อ พร้อมที่นอนฟองน้ำหนาแน่นอย่างดีขนาด 3 ฟุต หุ้มด้วยผ้าฝ้าย 100% ลายริ้วเทา สามารถพับเก็บทั้งที่นอนและเตียงเข้าเป็นชิ้นเดียวกัน ประหยัดพื้นที่ใช้สอย น้ำหนักเบา'),
(12, 10, 'coupon_click.jpg', '240388', 'ทินเนอร์ JOTUN #2 5L', 'TOA', 11, 529, 'ทินเนอร์ JOTUN #2 5L\n\nช่วยลดการแห้งตัวอย่างรวดเร็วของสีรองพื้น\nใช้ล้างแปรงและอุปกรณ์ทาสีได้\nยึดเกาะดีเยี่ยม\nฟิล์มสีทนนานไม่ซีดจาง\nช่วยแทรกซึมลึกเข้าเนื้อวัสดุได้ดี\n\nวัสดุ:	THINNER\nกว้าง:	16.6 ซม.\nสี:	ใส\nน้ำหนัก:	5 กก.\nสูง:	33.8 ซม.\nลึก:	16.6 ซม.\nรหัส:	#2\nการใช้งาน:	ENAMEL'),
(13, 9, '105415_L.jpg', 'A240388', 'ทินเนอร์ JOTUN #2 15L', 'TOA_', 5, 400, 'ทินเนอร์ JOTUN #2 5L\n\nช่วยลดการแห้งตัวอย่างรวดเร็วของสีรองพื้น\nใช้ล้างแปรงและอุปกรณ์ทาสีได้\nยึดเกาะดีเยี่ยม\nฟิล์มสีทนนานไม่ซีดจาง\nช่วยแทรกซึมลึกเข้าเนื้อวัสดุได้ดี\n\nวัสดุ:	THINNER\nกว้าง:	16.6 ซม.\nสี:	ใส\nน้ำหนัก:	5 กก.\nสูง:	33.8 ซม.\nลึก:	16.6 ซม.\nรหัส:	#2\nการใช้งาน:	ENAMEL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
