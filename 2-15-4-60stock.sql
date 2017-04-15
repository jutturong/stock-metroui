-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2017 at 12:23 PM
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
  `category` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `category`) VALUES
(1, 'วัสดุโครงสร้าง'),
(2, 'ปูน'),
(3, 'เหล็ก'),
(4, 'หลังคา'),
(5, 'ไม้'),
(6, 'ท่อ'),
(7, 'กระเบื้องหลังคา'),
(8, 'ของตกแต่ง'),
(9, 'ตัวทำละลาย'),
(10, 'น้ำยา'),
(11, 'ของตกแต่ง');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `id_category`, `product_name`, `code_product`, `name_product`, `brand_product`, `number_product`, `price_product`, `description_product`) VALUES
(1, 7, 'PRD_cpacmonier_prakaitong1.jpg', 'AK1001', 'กระเบื้องหลังคาซีแพคโมเนีย ตราช้าง สีประกายกาญจน์ (BULLION FLASHED)', 'ตราช้าง', 5, 13.82, 'กลุ่มสีคอนแทรซ(Contrazz)....2อารมณ์สีสวย...ไม่ซ้ำใคร เมื่อความเข้มขรึมสาดเข้าหาความร้อนแรงด้วยจังหวะที่กลมกลืนก่อกำเนิดอารมณ์สีสวยโดดเด่นที่ผสานในแผ่นเดียว กระเบื้องหลังคาซีแพคโมเนีย ตราช้าง คอนแทรซ.. ศิลปะแห่งสีสันบนผืนหลังคาที่สวยไม่ซ้ำผืน ไม่ซ้ำใครน้ำหนักกระเบื้องหลังคาซีแพคโมเนีย ตราช้าง (โดยประมาณ) -ต่อแผ่น : 4.05 กิโลกรัม -ระยะแป 34 เซนติเมตร : 39.70 ก.ก/ตร.ม. -ระยะแป 32 เซนติเมตร : 42.20 ก.ก/ตร.ม. -ต่อ 1,000 แผ่น : 4.05 ตัน'),
(2, 1, '015.gif', 'S0041', 'เหล็กข้ออ้อย SD-40, 20 มิล 24.66kg ( โรงใหญ่ )', '-', 12, 599, 'เหล็กข้ออ้อย SD-40, 20 มิล 24.66kg ( โรงใหญ่ )'),
(3, 2, '0009b5.png', 'p001', 'ปูนก่อทั่วไป อินทรีมอร์ตาร์ 21', 'อินทรี', 5, 250, 'ปูนก่อทั่วไป อินทรีมอร์ตาร์ 21 คือ ปูนสำเร็จรูปที่มีส่วนผสมของปูนซีเมนต์ หินบดคุณภาพที่มีขนาดคละเหมาะสม และสารเคมีเพิ่มคุณสมบัติงานก่อ ทำให้ปูนก่อเหนียว มีการยึดเกาะอิฐที่ดี นุ่มเบามือ \nมีระยะแห้งตัวที่เหมาะสม จัดแนวก่อได้ง่ายได้ผนังที่แข็งแรงทนทาน'),
(4, 3, 'ibhbwf.png', 'S001', 'เหล็กเอชบีม เฮชบีม H-BEAMS', 'Bangkok  IRON', 100, 1100, 'หน้าตัดที่เป็นรูปทรงของเหล็กโครงสร้างรูปพรรณรีดร้อน ทำให้เหล็กมีคุณสมบัติในการรับแรงในแนวต่างๆอย่างมีประสิทธิภาพ ด้วยน้ำหนักที่เบากกว่าโครงสร้างคอนกรีต เหมาะสำหรับใช้งานโครงสร้างชนิดต่างๆ เช่น โรงงาน อาคารสูง สนามกีฬา เสาส่งไฟฟ้า ตลอดจนบ้านพักอาศัย เหล็กโครงสร้างรูปพรรณรีดร้อน มีหน้าตัดเป็นรูปตัวเอช เรียกกันว่า H-beam มีปีกกว้าง (Wide Flange) เหมาะสำหรับงานโครงสร้างคาน เสา และโครงหลังคา ส่วนหน้าตัดรูปตัวไอ I-beam ปีกเหล็กจะหนาขึ้นที่โคนปีก จึงรับแรงสั่นสะเทือนได้ดี เหมาะกับงานเครื่องจักร รางเครน สำหรับเหล็กฉากหรือ Angle มีหน้าตัดรูปตัว L ใช้งานโครงสร้างหลังคา เสาส่งไฟฟ้าแรงสูง เสาวิทยุ เสาโทรศัพท์ อีกหน้าตัดหนึ่ง คือ รางน้ำ หรือ Channel มีหน้าตัดรูปตัว C นิยมใช้ทำคานรองรับส่วนประกอบต่างๆ เช่น บันได คานขอบนอก นอกจากนั้น เอชบีมที่นำมาตัดแบ่งตามยาว เรียกว่า Cut Beam หรือ Cut-T ใช้ทำโครงสร้างของ Truss แทนการใช้เหล็กฉากเชื่อมประกบกัน\n\nข้อดีของการใช้เหล็กโครงสร้างรูปพรรณรีดร้อน \n+ ลดระยะเวลาการก่อสร้าง ทำให้ลดภาระดอกเบี้ยของโครงการ เปิดใช้งานได้รวดเร็ว \n+ เตรียมงานจากโรงงานได้ และใช้แรงงานน้อยกว่าการก่อสร้างด้วยระบบอื่น\n+ ออกแบบโครงสร้างให้มีช่วงเสากว้าง กว่าโครงสร้างระบบอื่น ไม่เปลืองพื้นที่ใช้งาน\n+ ออกแบบงานสถาปัตยกรรมได้หลากหลายเช่น ตัดโค้ง ทำใครงสร้างโปร่ง หรือทำส่วนยื่่นได้มาก\n+ โครงสร้างมีน้ำหนักเบา ทำให้ประหยัดฐานราก ลดการขนส่ง และพื้นที่กองเก็บวัสดุ\n+ ตรวจสอบ ควบคุมคุณภาพ และบำรุงรักษาได้สะดวกกว่าโครงสร้างอื่น \n+ มีความแข็งแรง สามารถรับแรงสั่นสะเทือนและแผ่นดินไหว ได้ดีกว่าโครงสร้างระบบอื่น \n+ ก่อสร้างในที่จำกัดได้สะดวก ไม่ก่อให้เกิดมลภาวะฝุ่น\n+ ดัดแปลง ต่อเติม หรือรื้อไปสร้างใหม่ได้ ไม่ต้องทุบทิ้ง \n+ สามารถนำวัสดุมาหมุนเวียนได้ 100%\n\nกระบวนการผลิตเหล็กโครงสร้าง รูปพรรณรีดร้อน เริ่มจากการนำเศษเหล็กมาหลอมในเบ้าขนาดใหญ่ด้วยความร้อนสูงกว่า 1600 องศาเซลเซียส จนกลายเป็นน้ำเหล็ก แล้วเติมโลหะปรุงแต่งส่วนผสมเพื่อให้มีความแข็งแรงตามเกรดที่ต้องการ เมื่อปรุงแต่งส่วนผสมแล้ว จึงนำมาหล่อให้เป็นแท่ง หลังจากนั้น นำเหล้กแท่งมารีดด้วยแท่นรีดขนาดใหญ่ ที่อุณหภูมิประมาณ 1200 องศาเซลเซียส รูปร่างหน้าตัดของเหล็กแท่งจะถูกลดขนาดและแปรเปลี่ยนไปตามแบบของลูกรีด จนมีขนาดมาตรฐาน จุดสำคัญในการการทำคือ การควบคุมส่วนประกอบทางเคมีของการหลอมแต่ละเบ้า Heat การรีดเหล็กร้อนให้เป็นรูปร่างที่มีความกว้างและความหนาให้พอดีตามที่กำหนด และการทดสอบความแข็งแรง\n\nเนื่องจากผลิตโดยการหลอมและรีดร้อนขึ้นเป็นท่อน เหล็กโครงสร้างชนิดนี้จึงมีเนื้อเดียวกัน ไม่มีรอยเชื่อมระหว่างส่วนต่างๆ ดังนั้นคุณสมบัติของหน้าตัดจึงสม่ำเสมอกว่าเหล็กโครงสร้างชนิดอื่นเช่น เหล็กรูปพรรณกลวงซึ่งทำจากเหล็กม้วนและเชื่อมตามยาว กับเหล็กโครงสร้างรูปพรรณเชื่อมประกอบที่ทำจากเหล็กแผ่นสามชิ้นเชื่อมเข้าด้วยกัน\n\nเกรดหรือชั้นคุณภาพ\nเกรดของเหล็กโครงสร้างรูปพรรณรีดร้อน เป็นตัวระบุความแข็งแรงของเนื้อเหล็ก เหล็กที่ใช้งานโครงสร้างมีความต้านแรงดึง Tensile Strength ในระดับ 400N/mm2 ขึ้นไป เช่น ASTM A36, JIS/TIS SS400, SM400 เป็นต้น \n\nวิศวกรบางท่านอาจคุ้นเคยกับเหล็ก ASTM A36 เนื่องจากมีในตำราออกแบบที่มีพื้นฐานจากต่างประเทศ แต่ไม่สามารถหาได้ในท้องตลาด จึงมักเกิดปัญหาการใช้งาน ดังนั้นการออกแบบในปัจจุบันจึงต้องใช้เหล็กตามมาตรฐาน TIS 1227-2539 ซึ่งเป็นมาตรฐานที่ใช้กับเหล็กที่มีจำหน่ายในประเทศ\n\nผู้ใช้สามารถทราบคุณสมบัติของเหล็กที่นำมาใช้งานได้จากเอกสาร Mill Certificate ที่ออกโดยผู้ผลิตและที่ตัวเหล็กแต่ละท่อนมีสติ๊กเกอร์ระบุเกรด Heat no. อาคาร จะใช้เกรดสูง หรือ High-Strength ซึ่งมีความต้านแรงดึงตั้งแต่ 490N/mm2 เช่น ASTM A572, ASTM A992, JIS/TIS SM490, SM520 เป็นต้น นอกจากนี้ยังมีเกรดเฉพาะงาน เช่น โครงสร้างในทะเล แท่นขุดเจาะก๊าซธรรมชาติในทะเล ที่ต้องใช้เหล็กโครงสร้างเกรดสูงและมีความต้านทานแรงกระแทกที่อุณหภูมิต่ำมากคือ -20องศา , -40องศา ซึ่งการผลิตและทดสอบก็จะเข้มงวดยิ่งขึ้น'),
(5, 4, 'brick_1_pd366390.jpg', '8852404047677', 'กระเบื้องหลังคาไฟเบอร์ซีเมนต์ เอสซีจี รุ่นไอยร่า คลาสสิก 9 นิ้ว เนเชอรัลบริค', 'SCG', 90, 30, 'วัสดุ : ไฟเบอร์ซีเมนต์ \nขนาดสินค้า\nความกว้าง : 60 ซม.\nความยาว : 44 ซม.\nความสูง/หนา : 0.6 ซม.\nน้ำหนัก : 2.5 กก.\nข้อมูลอื่นๆ\nจำนวนการใช้งาน : 11.11 แผ่น/ตร.ม. \nระยะแป : 15 ซม. \nองศาหลังคา : 30-45 องศา \nคำแนะนำ และข้อควรระวัง\n- ใช้ติดตั้งเป็นหลังคาบ้านพักอาศัย หรืออาคารที่มีความสูงของสันหลังคาจากพื้นดินไม่เกิน 23ม.เท่านั้น โดยต้องติดตั้งตามคู่มือการติดตั้ง และใช้อุปกรณ์ที่ได้มาตรฐานจากบริษัทผู้ผลิต\n- การทำงานบนหลังคา ต้องใช้อุปกรณ์ถ่ายน้ำหนักทีได้มาตรฐานเช่นบันได\n- สีของผลิตภัณฑ์ในภาพอาจแตกต่างจากสีของผลิตภัณฑ์จริง เนื่องจากการแสดงผลหน้าจอที่แตกต่างกัน ควรพิจารณาสีของผลิตภัณฑ์จริงที่ร้านค้าก่อนการสั่งซื้อ\n- สภาพของผลิตภัณฑ์อาจมีการเปลี่ยนแปลงหรือเกิดคราบดำ ขึ้นอยู่กับสภาพแวดล้อมและการใช้งาน'),
(6, 4, 'pd320748.jpg', '8852404046502', 'ครอบ 4 ทาง ไฟเบอร์ซีเมนต์ เอสซีจี รุ่นไอยร่า30องศา เนเชอรัลบริค', 'SCG', 88, 34, 'วัสดุ : ไฟเบอร์ซีเมนต์ \nขนาดสินค้า\nความกว้าง : 41 ซม.\nความยาว : 41 ซม.\nน้ำหนัก : 1.4 กก.\nข้อมูลอื่นๆ\nจำนวนการใช้งาน : 1 แผ่น/จุด');

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
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
