-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2018 lúc 05:41 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btlweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoidethi`
--

CREATE TABLE `cauhoidethi` (
  `macauhoidethi` varchar(40) NOT NULL,
  `macauhoi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dapan`
--

CREATE TABLE `dapan` (
  `madapan` varchar(40) NOT NULL,
  `macauhoi` varchar(20) NOT NULL,
  `loaicau` varchar(4) NOT NULL,
  `noidung` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dapan`
--

INSERT INTO `dapan` (`madapan`, `macauhoi`, `loaicau`, `noidung`) VALUES
('DADCHHH', 'CHHH', 'Đúng', '25 phút 10 giây'),
('DADCHHH1', 'CHHH1', 'Đúng', '3 cạnh'),
('DADCHHH10', 'CHHH10', 'Đúng', '89,2'),
('DADCHHH11', 'CHHH11', 'Đúng', '46'),
('DADCHHH12', 'CHHH12', 'Đúng', '63,5km'),
('DADCHHH13', 'CHHH13', 'Đúng', '12 em'),
('DADCHHH14', 'CHHH14', 'Đúng', '300m'),
('DADCHHH15', 'CHHH15', 'Đúng', '912,67'),
('DADCHHH16', 'CHHH16', 'Đúng', '3,4kg'),
('DADCHHH17', 'CHHH17', 'Đúng', '38km/giờ'),
('DADCHHH18', 'CHHH18', 'Đúng', 'Bốn nghìn hai trăm tám mươi lăm phẩy chín mươi bảy'),
('DADCHHH19', 'CHHH19', 'Đúng', '13'),
('DADCHHH2', 'CHHH2', 'Đúng', '943 750 đồng'),
('DADCHHH20', 'CHHH20', 'Đúng', '3'),
('DADCHHH21', 'CHHH21', 'Đúng', '15 năm'),
('DADCHHH22', 'CHHH22', 'Đúng', '57,2 với 5,3'),
('DADCHHH23', 'CHHH23', 'Đúng', '5,4216m2'),
('DADCHHH24', 'CHHH24', 'Đúng', '4'),
('DADCHHH25', 'CHHH25', 'Đúng', '10km'),
('DADCHHH26', 'CHHH26', 'Đúng', '38,4m'),
('DADCHHH27', 'CHHH27', 'Đúng', '230 800'),
('DADCHHH28', 'CHHH28', 'Đúng', '47 000'),
('DADCHHH29', 'CHHH29', 'Đúng', '20'),
('DADCHHH3', 'CHHH3', 'Đúng', '2,16'),
('DADCHHH30', 'CHHH30', 'Đúng', '56,278'),
('DADCHHH4', 'CHHH4', 'Đúng', '31500'),
('DADCHHH5', 'CHHH5', 'Đúng', '5 tuổi'),
('DADCHHH6', 'CHHH6', 'Đúng', '18 000ha'),
('DADCHHH7', 'CHHH7', 'Đúng', '54cm2'),
('DADCHHH8', 'CHHH8', 'Đúng', '875kg'),
('DADCHHH9', 'CHHH9', 'Đúng', '9 giờ 10 phút'),
('DADCHML111', 'CHML111', 'Đúng', 'Sự chuyển biến về tư tưởng từ chủ nghĩa duy tâm và dân chủ cách mạng sang chủnghĩa duy vật và cộng sản chủ nghĩa'),
('DADCHML112', 'CHML112', 'Đúng', 'Hình thành những nguyên lý triết học duy vật biện chứng, duy vật lịch sử và chủnghĩa xã hội khoa học.'),
('DADCHML113', 'CHML113', 'Đúng', 'Tuyên ngôn của Đảng Cộng sản.'),
('DADCHML114', 'CHML114', 'Đúng', 'Bộ Tư bản'),
('DADCHML115', 'CHML115', 'Đúng', 'Chống Duy-rinh'),
('DADCHML116', 'CHML116', 'Đúng', 'Các nhà triết học đã chỉ giải thích thế giới bằng nhiều cách khác nhau, song vấn đề là cải tạo thế giới'),
('DADCHML117', 'CHML117', 'Đúng', 'Ba đáp án trên đều sai'),
('DADCHML118', 'CHML118', 'Đúng', 'Cả ba đáp án trên'),
('DADCHML119', 'CHML119', 'Đúng', 'Chủ nghĩa duy vật và chủ nghĩa kinh nghiệm phê phán'),
('DADCHML120', 'CHML120', 'Đúng', 'Qui luật về sự phát triển không đồng đều của các nước tư bản chủ nghĩa'),
('DADCHML121', 'CHML121', 'Đúng', 'NEP'),
('DADCHML122', 'CHML122', 'Đúng', 'Bản sơ thảo lần thứ nhất về những vấn đề dân tộc và thuộc địa.'),
('DADCHML123', 'CHML123', 'Đúng', 'Tháng Mười Nga năm 1917'),
('DADCHML124', 'CHML124', 'Đúng', 'Một số nước khu vực Mỹ La tinh'),
('DADCHML125', 'CHML125', 'Đúng', 'Bao gồm cả ba đáp án trên'),
('DADCHML126', 'CHML126', 'Đúng', 'Bao gồm ba đáp án trên'),
('DADCHML127', 'CHML127', 'Đúng', 'Vật chất có trước, ý thức có sau, vật chất quyết định ý thức'),
('DADCHML128', 'CHML128', 'Đúng', 'Con người hoàn toàn có khả năng nhận thức được thế giới'),
('DADCHML129', 'CHML129', 'Đúng', 'Chủ nghĩa duy tâm'),
('DADCHML130', 'CHML130', 'Đúng', 'Do cả ba nguyên nhân trên'),
('DADCHML131', 'CHML131', 'Đúng', 'Chủ nghĩa duy tâm chủ quan và chủ nghĩa duy tâm khách quan'),
('DADCHML132', 'CHML132', 'Đúng', 'Chủ nghĩa duy tâm chủ quan'),
('DADCHML133', 'CHML133', 'Đúng', 'Chủ nghĩa nhị nguyên triết học'),
('DADCHML134', 'CHML134', 'Đúng', 'Chủ nghĩa duy vật'),
('DADCHML135', 'CHML135', 'Đúng', 'Đã cung cấp công cụ vĩ đại cho hoạt động nhận thức khoa học và thực tiễn cáchmạng'),
('DADCHML136', 'CHML136', 'Đúng', 'Chủ nghĩa duy vật siêu hình.'),
('DADCHML137', 'CHML137', 'Đúng', 'Thuyết nguyên tử của Đề-mô-crít'),
('DADCHML138', 'CHML138', 'Đúng', 'Cả ba đáp án trên'),
('DADCHML139', 'CHML139', 'Đúng', 'Nguyên tử của Đề-mô-crít'),
('DADCHML140', 'CHML140', 'Đúng', 'Đồng nghĩa vật chất với các sự vật hiện tượng cụ thể của thế giới khách quan'),
('DAS1CHHH', 'CHHH', 'Sai', '30 phút 27 giây'),
('DAS1CHHH1', 'CHHH1', 'Sai', '4 cạnh'),
('DAS1CHHH10', 'CHHH10', 'Sai', '161,2'),
('DAS1CHHH11', 'CHHH11', 'Sai', '56'),
('DAS1CHHH12', 'CHHH12', 'Sai', '65km'),
('DAS1CHHH13', 'CHHH13', 'Sai', '8 em'),
('DAS1CHHH14', 'CHHH14', 'Sai', '15,55m'),
('DAS1CHHH15', 'CHHH15', 'Sai', '9,1267'),
('DAS1CHHH16', 'CHHH16', 'Sai', '3,24kg'),
('DAS1CHHH17', 'CHHH17', 'Sai', '41km/giờ'),
('DAS1CHHH18', 'CHHH18', 'Sai', 'Bốn trăm hai mươi tám nghìn năm trăm chín mươi bảy'),
('DAS1CHHH19', 'CHHH19', 'Sai', '12'),
('DAS1CHHH2', 'CHHH2', 'Sai', '950 000đồng'),
('DAS1CHHH20', 'CHHH20', 'Sai', '0,003'),
('DAS1CHHH21', 'CHHH21', 'Sai', '51 năm'),
('DAS1CHHH22', 'CHHH22', 'Sai', '56,2 với 4,3'),
('DAS1CHHH23', 'CHHH23', 'Sai', '4,2561m2'),
('DAS1CHHH24', 'CHHH24', 'Sai', '6'),
('DAS1CHHH25', 'CHHH25', 'Sai', '9,6km'),
('DAS1CHHH26', 'CHHH26', 'Sai', '35,4cm'),
('DAS1CHHH27', 'CHHH27', 'Sai', '2308'),
('DAS1CHHH28', 'CHHH28', 'Sai', '48 001'),
('DAS1CHHH29', 'CHHH29', 'Sai', '19'),
('DAS1CHHH3', 'CHHH3', 'Sai', '21,6'),
('DAS1CHHH30', 'CHHH30', 'Sai', '56, 872'),
('DAS1CHHH4', 'CHHH4', 'Sai', '315'),
('DAS1CHHH5', 'CHHH5', 'Sai', '15 tuổi'),
('DAS1CHHH6', 'CHHH6', 'Sai', '1800ha'),
('DAS1CHHH7', 'CHHH7', 'Sai', '27cm2'),
('DAS1CHHH8', 'CHHH8', 'Sai', '8,75kg'),
('DAS1CHHH9', 'CHHH9', 'Sai', '8 giờ 70 phút'),
('DAS1CHML111', 'CHML111', 'Sai', 'Kế tục triết học Hê-ghen.'),
('DAS1CHML112', 'CHML112', 'Sai', 'Tiếp tục hoàn thành các tác phẩm triết học nhằm phê phán tôn giáo'),
('DAS1CHML113', 'CHML113', 'Sai', 'Bản thảo kinh tế - triết học năm 1844'),
('DAS1CHML114', 'CHML114', 'Sai', 'Chống Duy-rinh'),
('DAS1CHML115', 'CHML115', 'Sai', 'Biện chứng của tư nhiên'),
('DAS1CHML116', 'CHML116', 'Sai', 'Phương pháp biện chứng của tôi không những khác phương pháp của Hê-ghen về cơ bảnmà còn đối lập hẳn với phương pháp ấy nữa'),
('DAS1CHML117', 'CHML117', 'Sai', 'Toàn cầu hoá.'),
('DAS1CHML118', 'CHML118', 'Sai', 'Phê phán, khắc phục và chống lại những quan điểm sai lầm xuất hiện trong thời đại đếquốc chủ nghĩa như: chủ nghĩa xét lại chủ nghĩa Mác; chủ nghĩa duy tâm vật lý học, bệnhấu trĩ tả khuynh trong triết học, chủ nghĩa giáo điều…'),
('DAS1CHML119', 'CHML119', 'Sai', 'Thế nào là người bạn dân'),
('DAS1CHML120', 'CHML120', 'Sai', 'Qui luật về kinh tế thị trường XHCN'),
('DAS1CHML121', 'CHML121', 'Sai', 'Học thuyết giai cấp và đấu tranh giai cấp'),
('DAS1CHML122', 'CHML122', 'Sai', 'Bàn về quyền dân tộc tự quyết'),
('DAS1CHML123', 'CHML123', 'Sai', 'Công xã Pa-ri'),
('DAS1CHML124', 'CHML124', 'Sai', 'Các nước SNG'),
('DAS1CHML125', 'CHML125', 'Sai', 'Xây dựng thế giới quan, phương pháp luận khoa học và vận dụng sáng tạo những nguyênlý đó trong hoạt động nhận thức và thực tiễn'),
('DAS1CHML126', 'CHML126', 'Sai', 'Cần phải theo nguyên tắc thường xuyên gắn kết những quan điểm cơ bản của Chủ nghĩaMác – Lênin với thực tiễn của đất nước và thời đại'),
('DAS1CHML127', 'CHML127', 'Sai', 'Ý thức có trước, sinh ra và quyết định vật chất'),
('DAS1CHML128', 'CHML128', 'Sai', 'Cuộc sống con người sẽ đi về đâu'),
('DAS1CHML129', 'CHML129', 'Sai', 'Chủ nghĩa xét lại triết học.'),
('DAS1CHML130', 'CHML130', 'Sai', 'Sự tuyệt đối hóa vai trò của ý thức'),
('DAS1CHML131', 'CHML131', 'Sai', 'Chủ nghĩa hoài nghi và thuyết bất khả tri'),
('DAS1CHML132', 'CHML132', 'Sai', 'Chủ nghĩa duy lý trí'),
('DAS1CHML133', 'CHML133', 'Sai', 'Chủ nghĩa duy tâm chủ quan'),
('DAS1CHML134', 'CHML134', 'Sai', 'Chủ nghĩa thực chứng.'),
('DAS1CHML135', 'CHML135', 'Sai', 'Sáng tạo ra một khuynh hướng triết học.'),
('DAS1CHML136', 'CHML136', 'Sai', 'Chủ nghĩa duy vật duy lý'),
('DAS1CHML137', 'CHML137', 'Sai', 'Quan điểm cho rằng “con người là thước đo của vạn vật ” của Prô-ta-go'),
('DAS1CHML138', 'CHML138', 'Sai', 'Khoa học tự nhiên phát triển mạnh mẽ'),
('DAS1CHML139', 'CHML139', 'Sai', 'Lửa của Hê-ra-clít'),
('DAS1CHML140', 'CHML140', 'Sai', 'Đồng nhất vật chất với giới tự nhiên'),
('DAS2CHHH', 'CHHH', 'Sai', '35 phút 10 giây'),
('DAS2CHHH1', 'CHHH1', 'Sai', '1 cạnh'),
('DAS2CHHH10', 'CHHH10', 'Sai', '229,9'),
('DAS2CHHH11', 'CHHH11', 'Sai', '62'),
('DAS2CHHH12', 'CHHH12', 'Sai', '66,5km'),
('DAS2CHHH13', 'CHHH13', 'Sai', '10 em'),
('DAS2CHHH14', 'CHHH14', 'Sai', '18,75m'),
('DAS2CHHH15', 'CHHH15', 'Sai', '9126,7'),
('DAS2CHHH16', 'CHHH16', 'Sai', '3,04kg'),
('DAS2CHHH17', 'CHHH17', 'Sai', '40km/giờ'),
('DAS2CHHH18', 'CHHH18', 'Sai', 'Bốn trăm hai mươi tám phẩy năm trăm chín mươi bảy'),
('DAS2CHHH19', 'CHHH19', 'Sai', '14'),
('DAS2CHHH2', 'CHHH2', 'Sai', '1 010 000 đồng'),
('DAS2CHHH20', 'CHHH20', 'Sai', '0,3'),
('DAS2CHHH21', 'CHHH21', 'Sai', '42 năm'),
('DAS2CHHH22', 'CHHH22', 'Sai', '57,2 với 4,8'),
('DAS2CHHH23', 'CHHH23', 'Sai', '4,5216m2'),
('DAS2CHHH24', 'CHHH24', 'Sai', '12'),
('DAS2CHHH25', 'CHHH25', 'Sai', '8km'),
('DAS2CHHH26', 'CHHH26', 'Sai', '8km'),
('DAS2CHHH27', 'CHHH27', 'Sai', '23 080'),
('DAS2CHHH28', 'CHHH28', 'Sai', '47 999'),
('DAS2CHHH29', 'CHHH29', 'Sai', '17'),
('DAS2CHHH3', 'CHHH3', 'Sai', '2, 06'),
('DAS2CHHH30', 'CHHH30', 'Sai', '56,807002000'),
('DAS2CHHH4', 'CHHH4', 'Sai', '3150'),
('DAS2CHHH5', 'CHHH5', 'Sai', '20 tuổi'),
('DAS2CHHH6', 'CHHH6', 'Sai', '180ha'),
('DAS2CHHH7', 'CHHH7', 'Sai', '108cm2'),
('DAS2CHHH8', 'CHHH8', 'Sai', '8,075kg'),
('DAS2CHHH9', 'CHHH9', 'Sai', '9 giờ'),
('DAS2CHML111', 'CHML111', 'Sai', 'Phê phán các thành tựu triết học của nhân loại.'),
('DAS2CHML112', 'CHML112', 'Sai', 'Nghiên cứu về vai trò của hoạt động thực tiễn đối với nhận thức'),
('DAS2CHML113', 'CHML113', 'Sai', 'Hệ tư tưởng Đức'),
('DAS2CHML114', 'CHML114', 'Sai', 'Biện chứng của tự nhiên'),
('DAS2CHML115', 'CHML115', 'Sai', 'Nguồn gốc của gia đình, của chế độ tư hữu và của nhà nước'),
('DAS2CHML116', 'CHML116', 'Sai', 'Tôn giáo là thuốc phiện của nhân dân'),
('DAS2CHML117', 'CHML117', 'Sai', 'Chủ nghĩa tư bản chuyển thành chủ nghĩa Đế quốc và thường xuyên tiến hành những cuộcchiến tranh giành thuộc địa'),
('DAS2CHML118', 'CHML118', 'Sai', 'Hiện thực hóa lý luận chủ nghĩa Mác bằng sự thắng lợi của Cách mạng tháng 10 Nga'),
('DAS2CHML119', 'CHML119', 'Sai', 'Chủ nghĩa duy vật chiến đấu'),
('DAS2CHML120', 'CHML120', 'Sai', 'Qui luật về cạnh tranh quốc tế'),
('DAS2CHML121', 'CHML121', 'Sai', 'Lý thuyết về sự phân kỳ trong thời kỳ quá độ lên CNXH'),
('DAS2CHML122', 'CHML122', 'Sai', 'Làm gì'),
('DAS2CHML123', 'CHML123', 'Sai', 'Cách mạng tháng tám 1945 ở Việt Nam'),
('DAS2CHML124', 'CHML124', 'Sai', 'Các nước Bắc Âu'),
('DAS2CHML125', 'CHML125', 'Sai', 'Giúp sinh viên hiểu rõ nền tảng tư tưởng của Đảng cộng sản VN'),
('DAS2CHML126', 'CHML126', 'Sai', 'Học tập nghiên cứu những nguyên lý cơ bản của chủ nghĩa Mác – Lênin cần phải hiểuđúng tinh thần, thực chất của nó, tránh bệnh kinh viện, giáo điều trong quá trình học tập,nghiên cứu và vận dụng các nguyên lý cơ bản đó trong thực tiễn'),
('DAS2CHML127', 'CHML127', 'Sai', 'Không thể xác định vật chất và ý thức cái nào có trước cái nào, cái nào sinh ra cái nào vàquyết định cái nào'),
('DAS2CHML128', 'CHML128', 'Sai', 'Con người có khả năng nhận thức được thế giới không'),
('DAS2CHML129', 'CHML129', 'Sai', 'Chủ nghĩa hoài nghi'),
('DAS2CHML130', 'CHML130', 'Sai', 'Xem xét phiến diện, tuyệt đối hóa, thần thánh hóa một mặt, một đặc tính nào đó của quátrình nhận thức mang tính biện chứng của con người'),
('DAS2CHML131', 'CHML131', 'Sai', 'Chủ nghĩa duy linh và thần học'),
('DAS2CHML132', 'CHML132', 'Sai', 'Chủ nghĩa duy vật duy cảm'),
('DAS2CHML133', 'CHML133', 'Sai', 'Chủ nghĩa duy tâm khách quan'),
('DAS2CHML134', 'CHML134', 'Sai', 'chủ nghĩa duy lý trí'),
('DAS2CHML135', 'CHML135', 'Sai', 'Đấu tranh chống thần học'),
('DAS2CHML136', 'CHML136', 'Sai', 'Chủ nghĩa duy vật duy cảm'),
('DAS2CHML137', 'CHML137', 'Sai', 'Lôgíc học của A-ri-stốt'),
('DAS2CHML138', 'CHML138', 'Sai', 'Do ảnh hưởng của khuynh hướng chống lại chủ nghĩa kinh viện của thần học thiên chúagiáo'),
('DAS2CHML139', 'CHML139', 'Sai', 'Không khí của A-na-xi-men'),
('DAS2CHML140', 'CHML140', 'Sai', 'Đồng nhất vật chất với những sự vật cảm tính'),
('DAS3CHHH', 'CHHH', 'Sai', '25 phút 7 giây'),
('DAS3CHHH1', 'CHHH1', 'Sai', '2 cạnh'),
('DAS3CHHH10', 'CHHH10', 'Sai', '157,9'),
('DAS3CHHH11', 'CHHH11', 'Sai', '63'),
('DAS3CHHH12', 'CHHH12', 'Sai', '68km'),
('DAS3CHHH13', 'CHHH13', 'Sai', '6 em'),
('DAS3CHHH14', 'CHHH14', 'Sai', '15,75m'),
('DAS3CHHH15', 'CHHH15', 'Sai', '0,91267'),
('DAS3CHHH16', 'CHHH16', 'Sai', '3,14kg'),
('DAS3CHHH17', 'CHHH17', 'Sai', '39km/giờ'),
('DAS3CHHH18', 'CHHH18', 'Sai', 'Bốn mươi hai phẩy tám nghìn năm trăm chín mươi bảy'),
('DAS3CHHH19', 'CHHH19', 'Sai', '18'),
('DAS3CHHH2', 'CHHH2', 'Sai', '760 000đồng'),
('DAS3CHHH20', 'CHHH20', 'Sai', '0,03'),
('DAS3CHHH21', 'CHHH21', 'Sai', '21 năm'),
('DAS3CHHH22', 'CHHH22', 'Sai', '57,2 với4,3'),
('DAS3CHHH23', 'CHHH23', 'Sai', '4,1256m2'),
('DAS3CHHH24', 'CHHH24', 'Sai', '18'),
('DAS3CHHH25', 'CHHH25', 'Sai', '12km'),
('DAS3CHHH26', 'CHHH26', 'Sai', '37,4m'),
('DAS3CHHH27', 'CHHH27', 'Sai', '2 308 000'),
('DAS3CHHH28', 'CHHH28', 'Sai', '48 999'),
('DAS3CHHH29', 'CHHH29', 'Sai', '18'),
('DAS3CHHH3', 'CHHH3', 'Sai', '20,16'),
('DAS3CHHH30', 'CHHH30', 'Sai', '5687'),
('DAS3CHHH4', 'CHHH4', 'Sai', '31,5'),
('DAS3CHHH5', 'CHHH5', 'Sai', '10 tuổi'),
('DAS3CHHH6', 'CHHH6', 'Sai', '18ha'),
('DAS3CHHH7', 'CHHH7', 'Sai', '15cm2'),
('DAS3CHHH8', 'CHHH8', 'Sai', '87,5kg'),
('DAS3CHHH9', 'CHHH9', 'Sai', '9 giờ 15 phú'),
('DAS3CHML111', 'CHML111', 'Sai', 'Phê phán tôn giáo'),
('DAS3CHML112', 'CHML112', 'Sai', 'Hoàn thành bộ “Tư Bản”'),
('DAS3CHML113', 'CHML113', 'Sai', 'Gia đình thần thánh'),
('DAS3CHML114', 'CHML114', 'Sai', 'Nguồn gốc của gia đình, của chế độ tư hữu và của nhà nước'),
('DAS3CHML115', 'CHML115', 'Sai', 'Lút-vích Phoi-ơ-bắc và sự cáo chung của triết học cổ điển Đức'),
('DAS3CHML116', 'CHML116', 'Sai', 'Bản chất của con người là tổng hòa những mối quan hệ xã hội'),
('DAS3CHML117', 'CHML117', 'Sai', 'CNTB Tổ chức cuộc chiến tranh thế giới lần thứ II để phân chia thị trường thế giới'),
('DAS3CHML118', 'CHML118', 'Sai', 'Bổ sung và hoàn chỉnh về mặt lý luận và thực tiễn những vấn đề như lý luận về cáchmạng vô sản trong thời đại đế quốc chủ nghĩa, lý luận về nhà nước chuyên chính vô sản,chính sách kinh tế mới…'),
('DAS3CHML119', 'CHML119', 'Sai', 'Cả ba tác phẩm trên'),
('DAS3CHML120', 'CHML120', 'Sai', 'Cả ba đáp án trên'),
('DAS3CHML121', 'CHML121', 'Sai', 'Học thuyết về nhà nước và cách mạng'),
('DAS3CHML122', 'CHML122', 'Sai', 'Chủ nghĩa đế quốc giai đoạn tột cùng của chủ nghĩa tư bản'),
('DAS3CHML123', 'CHML123', 'Sai', 'Chiến tranh thế giới lần thứ II'),
('DAS3CHML124', 'CHML124', 'Sai', 'Các nước ASEAN'),
('DAS3CHML125', 'CHML125', 'Sai', 'Xây dựng niềm tin, lý tưởng cho sinh viên'),
('DAS3CHML126', 'CHML126', 'Sai', 'Học tập nghiên cứu mỗi nguyên lý cơ bản của chủ nghĩa Mác – lênin trong mối quan hệvới các nguyên lý khác, mỗi bộ phận cấu thành trong mối quan hệ với các bộ phận cấuthành khác để thấy sự thống nhất phong phú và nhất quán của chủ nghĩa Mác – Lêninđồn'),
('DAS3CHML127', 'CHML127', 'Sai', 'Vật chất và ý thức cùng xuất hiện đồng thời và có sự tác động qua lại ngang nhau'),
('DAS3CHML128', 'CHML128', 'Sai', 'Cả ba đáp án trên'),
('DAS3CHML129', 'CHML129', 'Sai', 'Chủ nghĩa tương đối'),
('DAS3CHML130', 'CHML130', 'Sai', 'Tuyệt đối hóa vai trò của lao động trí óc và của giai cấp thống trị'),
('DAS3CHML131', 'CHML131', 'Sai', 'Chủ nghĩa thực chứng và chủ nghĩa thực dụng'),
('DAS3CHML132', 'CHML132', 'Sai', 'Cả ba đáp án trên'),
('DAS3CHML133', 'CHML133', 'Sai', 'Chủ nghĩa duy vật'),
('DAS3CHML134', 'CHML134', 'Sai', 'Chủ nghĩa duy tâm vật lý học'),
('DAS3CHML135', 'CHML135', 'Sai', 'Tạo nên tiếng tăm cho C.Mác'),
('DAS3CHML136', 'CHML136', 'Sai', 'Chủ nghĩa duy vật biện chứng'),
('DAS3CHML137', 'CHML137', 'Sai', 'Học thuyết về tồn tại của Pác-mê-nít.'),
('DAS3CHML138', 'CHML138', 'Sai', 'Phương thức sản xuất tư bản chủ nghĩa hình thành và phát triển'),
('DAS3CHML139', 'CHML139', 'Sai', 'Âm dương –ngũ hành của Âm dương gia'),
('DAS3CHML140', 'CHML140', 'Sai', 'Đồng nhất vật chất với vận động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(20) NOT NULL,
  `tenkhoa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('CNTT', 'Công Nghệ Thông Tin'),
('DA', 'Điện Ảnh'),
('HTTT2', 'Hệ Thống Thông Tin 2'),
('MT', 'Môi Trường'),
('XD', 'Xây Dựng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamon` varchar(20) NOT NULL,
  `tenmon` varchar(50) NOT NULL,
  `ghichu` varchar(200) NOT NULL,
  `makhoa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamon`, `tenmon`, `ghichu`, `makhoa`) VALUES
('HH', 'Hình Học', '', 'CNTT'),
('ML', 'Tư Tưởng Mác - Lênin', 'Học vui lắm ker', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `mand` varchar(20) NOT NULL,
  `tennd` varchar(100) NOT NULL,
  `makhoa` varchar(20) NOT NULL,
  `gioitinh` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`mand`, `tennd`, `makhoa`, `gioitinh`) VALUES
('gv01', 'Nguyễn Văn A', 'CNTT', 'Nam'),
('gv02', 'Nguyễn Văn BD', 'DA', 'Nam'),
('gv03', 'Nguyễn Thị C', 'XD', 'Nam'),
('gv04', 'Lê Văn C2', 'MT', 'Nam'),
('gv05', 'Trần Thị B', 'DA', 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtindethi`
--

CREATE TABLE `thongtindethi` (
  `mand` varchar(10) NOT NULL,
  `mamon` varchar(10) NOT NULL,
  `ghichu` varchar(200) NOT NULL,
  `madethi` varchar(10) NOT NULL,
  `tieude` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongtindethi`
--

INSERT INTO `thongtindethi` (`mand`, `mamon`, `ghichu`, `madethi`, `tieude`) VALUES
('gv01', 'HH', '', 'HHEXAM01', 'Kiểm Tra Cuối Học Kì 1'),
('gv03', 'ML', '', 'MLEXAM01', 'Kiểm Tra Cuối HK II');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tvcauhoi`
--

CREATE TABLE `tvcauhoi` (
  `macauhoi` varchar(20) NOT NULL,
  `mamon` varchar(20) NOT NULL,
  `intdokho` tinyint(1) NOT NULL,
  `strdokho` varchar(10) NOT NULL,
  `noidung` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tvcauhoi`
--

INSERT INTO `tvcauhoi` (`macauhoi`, `mamon`, `intdokho`, `strdokho`, `noidung`) VALUES
('CHHH', 'HH', 1, 'Dễ', 'An giải bài toán thứ nhất hết 30 phút 17 giây, giải bài toán thứ hai nhanh hơn bài toán thứ nhất 5 phút 10 giây.An giải bài toán thứ hai hết bao lâu'),
('CHHH1', 'HH', 1, 'Dễ', 'Tam giâc có mấy cạnh?'),
('CHHH10', 'HH', 3, 'Khó', 'Giá trị của biểu thức 2 + 0,5 x 37 + 68,7 x 2 là'),
('CHHH11', 'HH', 3, 'Khó', 'Cho dãy số: 1, 3, 7, 15, 31,....... Số thích hợp điền vào chỗ chấm là'),
('CHHH12', 'HH', 3, 'Khó', 'Một ô tô đi được 266,5km trong 3 giờ 25 phút. Hỏi ô tô đi được quãng đường dài bao nhiêu ki -lô -mét trong 50 phú'),
('CHHH13', 'HH', 3, 'Khó', 'ớp 5A có số học sinh giỏi nhiều hơn 1/5 số học sinh của lớp là 2 em. Số học sinh còn lại nhiều hơn 1/2 số học sinh của lớp là 7 em. Tính số học sinh giỏi của lớp 5A'),
('CHHH14', 'HH', 3, 'Khó', '25% của 75m là'),
('CHHH15', 'HH', 3, 'Khó', '1,267 x 100 ='),
('CHHH16', 'HH', 1, 'Dễ', 'Cứ 6,5 lít dầu hoả cân nặng 4,94kg. Hỏi 4 lít dầu hoả cân nặng bao nhiêuki -lô -gam'),
('CHHH17', 'HH', 2, 'Trung Bình', 'Một ô tô đi được 164km trong 4 giờ. Vận tốc của ô tô là'),
('CHHH18', 'HH', 2, 'Trung Bình', 'Số 428,597 đọc là'),
('CHHH19', 'HH', 1, 'Dễ', 'Cho dãy số:  1 ; 3 ; 4 ; 7 ; 11 ; ..........  Số thích hợp điền vào chỗ chấm là'),
('CHHH2', 'HH', 1, 'Dễ', 'Sau khi giảm giá 25% thì giá một chiếc xe đạp là 757 500 đồng. Hỏi ban đầu giá  chiếc xe đạpđó là bao nhiêu tiền'),
('CHHH20', 'HH', 3, 'Khó', 'Giá trị của biểu thức 0,5 x 0,3 x 0,02 là'),
('CHHH21', 'HH', 1, 'Dễ', 'Hiện nay mẹ 36 tuổi , con gái 10 tuổi và con trai 5 tuổi. Hỏi mấy năm nữa tuổi mẹ bằng tổng số tuổi hai con'),
('CHHH22', 'HH', 1, 'Dễ', 'Số 245,96 là tích của'),
('CHHH23', 'HH', 1, 'Dễ', 'Chu vi hình tròn là 7,536m. Diện tích hình tròn là'),
('CHHH24', 'HH', 1, 'Dễ', 'Từ ba chữ số 0,1,2 ta viết được bao nhiêu số có 3 chữ số'),
('CHHH25', 'HH', 2, 'Trung Bình', 'ai người đi xe đạp xuất phát từ A và B cùng lúc vàđi ngược chiều nhau, sau  20 phút họ gặp nhau. Tính quãng đường AB, biết vận tốc của hai xe đạp là 11km/giờ và 13 km/ giờ'),
('CHHH26', 'HH', 2, 'Trung Bình', 'Một mảnh vườn hình chữ nhật có diện tích bằng 910m2, chiều rộng bằng 25. Chiều dài của mảnhvườn là'),
('CHHH27', 'HH', 2, 'Trung Bình', 'Số thích hợp để viết vào chỗ chấm của 2,308m3 = ...cm3là'),
('CHHH28', 'HH', 3, 'Khó', ' Số liền trước của 48 000 là'),
('CHHH29', 'HH', 3, 'Khó', ' Bác Hồ sinh năm 1890, tức là vào thế kỉ'),
('CHHH3', 'HH', 1, 'Dễ', '12% của 180 kg là'),
('CHHH30', 'HH', 3, 'Khó', 'Viết số thập phân có: Năm mươi sáu đơn vị, tám phần mười, bảy phần trăm, hai phần nghìn'),
('CHHH4', 'HH', 1, 'Dễ', 'Số thích hợp để viết vào chỗ chấm của 3,15m2= ...dm2là'),
('CHHH5', 'HH', 2, 'Trung Bình', 'Hiện nay, tuổi của hai bà cháu cộng lại là 70 tuổi. Cháu kém bà 50 tuổi. Tuổi của cháu 5 năm sau là'),
('CHHH6', 'HH', 2, 'Trung Bình', 'Viết số đo sau dưới dạng số đo có đơn vị là ha: 1 800 000m2'),
('CHHH7', 'HH', 2, 'Trung Bình', 'Diện tích hình tam giác có độ dài đáy 9cm và chiều cao 6cm là'),
('CHHH8', 'HH', 2, 'Trung Bình', 'Viết số đo 8kg 75dag dưới dạng số đo có đơn vị là ki -lô -gam'),
('CHHH9', 'HH', 2, 'Trung Bình', '3 giờ 45 phút + 5 giờ 30 phút ='),
('CHML111', 'ML', 1, 'Dễ', 'Đặc điểm cơ bản của chủ nghĩa Mác giai đoạn 1842 – 1844'),
('CHML112', 'ML', 1, 'Dễ', 'Xét về lịch sử hình thành và giá trị tư tưởng thì chủ nghĩa Ph.Ăngghen ở giai đoạn1844 – 1848'),
('CHML113', 'ML', 1, 'Dễ', 'Tác phẩm nào được xem là văn kiện có tính chất cương lĩnh đầu tiên của chủ nghĩaMác'),
('CHML114', 'ML', 1, 'Dễ', 'Tác phẩm là quan trọng và điển hình nhất của chủ nghĩa Mác trong giai đoạn1848 – 1895'),
('CHML115', 'ML', 1, 'Dễ', 'Trong giai đoạn từ năm 1876 đến năm 1878, tác phẩm nào của Ph.Ăngghen đã chỉra mối liên hệ hữu cơ giữa ba bộ phận hợp thành chủ nghĩa Mác'),
('CHML116', 'ML', 1, 'Dễ', 'Khi bàn về vai trò của triết học trong đời sống, C.Mác đã có một phát biểu một luậnđiểm rất sâu sắc, cho thấy sự khác biệt về chất giữa triết học của Ông với các tràolưu triết học trước đó, nguyên văn của phát biểu đó là gì'),
('CHML117', 'ML', 1, 'Dễ', 'Đặc điểm chính trị của thế giới những năm cuối thế kỷ XIX – đầu thế kỷ XX'),
('CHML118', 'ML', 1, 'Dễ', 'Những cống hiến của V.I.Lênin đối với triết học Mác - Ăngghen'),
('CHML119', 'ML', 1, 'Dễ', 'V. I. Lênin đã đưa ra định nghĩa khoa học về phạm trù vật chất trong tác phẩm nào'),
('CHML120', 'ML', 2, 'Trung Bình', 'Luận điểm của Lênin về khả năng thắng lợi của CNXH bắt đầu ở một số nước, thậmchí ở một nước riêng rẽ được rút ra từ sự phân tích quy luật nào'),
('CHML121', 'ML', 2, 'Trung Bình', 'V. I. Lênin đã đưa ra quan điểm về việc xây dựng nền kinh tế thị trường trong thờikỳ quá độ lên CNXH trong lý luận nào'),
('CHML122', 'ML', 2, 'Trung Bình', 'Nguyễn Ái Quốc đã tìm ra con đường giải phóng dân tộc ta từ việc tìm hiểu tácphẩm nào của V.I.Lênin'),
('CHML123', 'ML', 2, 'Trung Bình', 'Sự kiện xã hội nào lần đầu tiên đã chứng minh tính hiện thực của chủ nghĩa Mác -Lênin trong lịch sử'),
('CHML124', 'ML', 2, 'Trung Bình', 'từ những năm 90 của thế kỷ thứ XX, hệ thống xã hội chủ nghĩa bị khủng hoảng vàrơi vào giai đoạn thoái trào. Tuy nhiên, ở hiện nay tư tưởng xã hội chủ nghĩa vẫntồn tại trên phạm vi toàn cầu; quyết tâm xây dựng thành công chủ nghĩa xã hội vẫnđược khẳng'),
('CHML125', 'ML', 2, 'Trung Bình', 'Mục đích Học tập nghiên cứu những nguyên lý cơ bản của chủ nghĩa Mác-Lênin ởnước ta hiện nay'),
('CHML126', 'ML', 2, 'Trung Bình', 'Những yêu cầu Học tập nghiên cứu những nguyên lý cơ bản của chủ nghĩa Mác-Lênin'),
('CHML127', 'ML', 2, 'Trung Bình', 'Quan điểm của CNDV về mặt thứ nhất của vấn đề cơ bản của triết học'),
('CHML128', 'ML', 2, 'Trung Bình', 'Quan điểm của CNDV về mặt thứ hai của vấn đề cơ bản của triết học'),
('CHML129', 'ML', 2, 'Trung Bình', 'Về thực chất, chủ nghĩa nhị nguyên triết học có cùng bản chất với hệ thống triết lýnào'),
('CHML130', 'ML', 2, 'Trung Bình', 'Nguồn gốc ra đời của CNDT'),
('CHML131', 'ML', 3, 'Khó', 'Trong lịch sử, chủ nghĩa duy tâm có hình thức cơ bản nào'),
('CHML132', 'ML', 3, 'Khó', 'Sự khẳng định: mọi sự vật, hiện tượng chỉ là “phức hợp những cảm giác” của cánhân là quan điểm của trường phái triết học nào'),
('CHML133', 'ML', 3, 'Khó', 'A-ri-stốt là đại diện của trường phái triết học nào ở phương tây thời cổ đại'),
('CHML134', 'ML', 3, 'Khó', 'Khuynh hướng triết học nào mà sự tồn tại, phát triển của nó có nguồn gốc từ sựphát triển của khoa học và thực tiễn, đồng thời thường gắn với lợi ích của giai cấpvà lực lượng tiến bộ trong lịch sử, vừa định hướng cho các lực lượng xã hội tiến bộhoạt đ'),
('CHML135', 'ML', 3, 'Khó', 'Vai trò của CNDVBC'),
('CHML136', 'ML', 3, 'Khó', 'Thế giới như một cỗ máy cơ giới khổng lồ mà mỗi bộ phận tạo nên nó luôn ở trongtrạng thái biệt lập, tĩnh tại; nếu có biến đổi thì đó chỉ là sự tăng, giảm đơn thuần vềlượng và do những nguyên nhân bên ngoài gây nên, là quan niệm của khuynh tướngtriết '),
('CHML137', 'ML', 3, 'Khó', 'Tư tưởng nào dưới dây được xem là đỉnh cao về triết học duy vật ở Hy Lạp thời cổ đại'),
('CHML138', 'ML', 3, 'Khó', 'Tại sao ở Tây Âu thời cận đại, triết học duy vật lại phát triển mạnh mẽ'),
('CHML139', 'ML', 3, 'Khó', 'Đỉnh cao của quan niệm duy vật cổ đại về phạm trù vật chất'),
('CHML140', 'ML', 3, 'Khó', 'Quan niệm về phạm trù vật chất của các trào lưu triết học duy vật thời cổ đại có đặcđiểm gì');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tvdethi`
--

CREATE TABLE `tvdethi` (
  `mabodethi` varchar(40) NOT NULL,
  `madethi` varchar(20) NOT NULL,
  `macauhoidethi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoidethi`
--
ALTER TABLE `cauhoidethi`
  ADD PRIMARY KEY (`macauhoidethi`),
  ADD KEY `macahoi_fk` (`macauhoi`);

--
-- Chỉ mục cho bảng `dapan`
--
ALTER TABLE `dapan`
  ADD PRIMARY KEY (`madapan`),
  ADD KEY `macaudung` (`loaicau`),
  ADD KEY `macauhoi_fk` (`macauhoi`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamon`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`mand`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `thongtindethi`
--
ALTER TABLE `thongtindethi`
  ADD PRIMARY KEY (`madethi`),
  ADD KEY `mand` (`mand`),
  ADD KEY `mamon` (`mamon`);

--
-- Chỉ mục cho bảng `tvcauhoi`
--
ALTER TABLE `tvcauhoi`
  ADD PRIMARY KEY (`macauhoi`),
  ADD KEY `mamon_fk` (`mamon`);

--
-- Chỉ mục cho bảng `tvdethi`
--
ALTER TABLE `tvdethi`
  ADD PRIMARY KEY (`mabodethi`),
  ADD KEY `cauhoidethi_fk` (`macauhoidethi`),
  ADD KEY `madethi_fk` (`madethi`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dapan`
--
ALTER TABLE `dapan`
  ADD CONSTRAINT `macauhoi_fk` FOREIGN KEY (`macauhoi`) REFERENCES `tvcauhoi` (`macauhoi`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `thongtindethi`
--
ALTER TABLE `thongtindethi`
  ADD CONSTRAINT `thongtindethi_ibfk_1` FOREIGN KEY (`mand`) REFERENCES `nguoidung` (`mand`) ON DELETE CASCADE,
  ADD CONSTRAINT `thongtindethi_ibfk_2` FOREIGN KEY (`mamon`) REFERENCES `monhoc` (`mamon`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tvcauhoi`
--
ALTER TABLE `tvcauhoi`
  ADD CONSTRAINT `mamon_fk` FOREIGN KEY (`mamon`) REFERENCES `monhoc` (`mamon`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tvdethi`
--
ALTER TABLE `tvdethi`
  ADD CONSTRAINT `cauhoidethi_fk` FOREIGN KEY (`macauhoidethi`) REFERENCES `cauhoidethi` (`macauhoidethi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `madethi_fk` FOREIGN KEY (`madethi`) REFERENCES `thongtindethi` (`madethi`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
