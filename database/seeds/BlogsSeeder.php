<?php

use Illuminate\Database\Seeder;
use App\Blogs;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listBlogs =
            [
            [
                "title" => "Phà Vàm Cống dừng hoạt động từ ngày 30/6",
              "des" => "Hơn một tháng sau khi cầu dây văng thứ hai bắc qua sông Hậu thông xe, phà Vàm Cống kết thúc nhiệm vụ 100 năm.",
              "detail" => "Ngày 27/6, ông Nguyễn Phúc Nguyên - Trưởng bến phà Vàm Cống (An Giang - Đồng Tháp) cho biết, đơn vị đã nhận được quyết định của Tổng cục Đường bộ về việc dừng hoạt động bến phà này vào 9h ngày 30/6. ổng cục Đường bộ yêu cầu thông báo rộng rãi về thời gian kết thúc nhiệm vụ của bến phà, tổ chức phân luồng để người tham gia giao thông biết. Cục Quản lý Đường bộ IV được phân công làm việc với Tổng công ty Đầu tư phát triển và Quản lý dự án hạ tầng giao thông Cửu Long để bảo đảm giao thông an toàn, thông suốt trên cầu Vàm Cống và các tuyến kết nối...Bến phà Vàm Cống đã hoạt động khoảng 100 năm, có 170 nhân sự, 10 chiếc phà. Khi cầu thông xe, đơn vị đã chấm dứt hợp đồng lao động thời vụ với 50 người. 50 nhân viên cùng 5 chiếc phà được chuyển đến phục vụ ở các bến khác tại miền Tây.Hơn tháng qua, mỗi ngày bến phà Vàm Cống có 2-3 chiếc chở 4.000 - 5.000 xe máy và khoảng 100 ôtô. \"Sắp tới, 70 người cùng 5 chiếc phà còn lại tiếp tục được điều đến các bến trong khu vực\", ông Nguyên nói.",
              "category" => 0,
              "public" => false,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/27/pha-Vam-Cong-7303-1561651034.jpg",
              "id" => 1
            ],
            [
                "id" => 2,
              "title" => "Hai dự án cao tốc Bắc Nam sẽ khởi công vào tháng 8",
              "des" => "Bộ Giao thông Vận tải sẽ mời thanh tra, kiểm toán tham gia vào các dự án từ đầu nhằm tăng cường công tác giám sát. ",
              "detail" => "Tại cuộc họp về tiến độ cao tốc Bắc Nam chiều 26/6, ông Nguyễn Văn Thể, Bộ trưởng Giao thông Vận tải cho biết, các dự án cao tốc sử dụng vốn đầu tư công là Cam Lộ - La Sơn (đi qua 2 tỉnh Quảng Trị và Thừa Thiên Huế) và Cao Bồ - Mai Sơn (nằm trên tỉnh Nam Định và Ninh Bình) sẽ khởi công trong tháng 8. Dự án đường dẫn hai đầu cầu Mỹ Thuận 2 khởi công cuối năm 2019.\"Từ nay đến tháng 12, toàn bộ gói thầu của ba dự án đầu tư công sẽ được khởi công, riêng phần cầu chính Mỹ Thuận 2 sẽ bắt đầu vào quý I năm sau\", Bộ trưởng Thể nói.Với 8 dự án cao tốc Bắc Nam khác được đầu tư theo hình thức PPP, Bộ Giao thông Vận tải sẽ báo cáo Chính phủ để xin ý kiến chỉ đạo thực hiện các bước tiếp theo. Hiện nay Bộ bán hồ sơ thầu các dự án, đã có 120 nhà đầu tư mua hồ sơ. Với công tác đấu thầu dự án cao tốc Bắc Nam theo hình thức đầu tư công, Bộ trưởng Nguyễn Văn Thể chỉ đạo các chủ đầu tư, ban quản lý dự án lựa chọn những gói thầu phù hợp, kể cả gói thầu xây lắp để tổ chức đầu thầu qua mạng, đảm bảo tỷ lệ gói thầu qua mạng trên 50%. ",
              "category" => 0,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/26/anh-1-1533376007-680x0-8743-15-6639-9178-1561555738.jpg"
            ],
            [
                "title" => "Nắng nóng như 'đầu lâu tử thần' trên bản đồ nhiệt châu Âu",
              "des" => "Bản đồ nền nhiệt châu Âu trong đợt nắng nóng 40 độ C được mô tả là rất giống biểu tượng của thần chết.",
              "detail" => "Nhà khí tượng học người Pháp Ruben Hallali hôm qua đăng ảnh bản đồ dự báo nhiệt độ châu Âu và phát hiện biểu tượng rất giống một \"đầu lâu tử thần\" khổng lồ trên phần lãnh thổ Pháp, nơi đang phải đối mặt với mức nhiệt được dự báo cao kỷ lục. Để người xem dễ hình dung, Hallali còn đặt tấm bản đồ cạnh bức họa \"The Scream\" (Tiếng thét) của danh họa người Na Uy Edvard Munch. Bức họa thể hiện một gương mặt đầy âu lo, tuyệt vọng và là một trong bốn bản sáng tác in trên đá, theo trường phái biểu hiện của Munch vào khoảng năm 1893 và 1910.\"Tôi chưa từng thấy điều gì tương tự trong suốt 15 năm làm nghề khí tượng của mình\", Hallali cho biết.Tấm bản đồ nhiệt do trang web Meteociel của Pháp công bố, sử dụng các phương thức dự báo khác nhau nhằm trực quan hóa hiện tượng thời tiết. Theo phát ngôn viên của Meteociel, bản đồ này dựa trên Hệ thống Dự báo Toàn cầu của Mỹ và hình dạng đặc biệt trên hoàn toàn là tình cờ.",
              "category" => 1,
              "public" => false,
              "data_pubblic" => "2019-06-28",
              "position" => [
                2
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/28/map1-2203-1561686007.jpg",
              "id" => 3
            ],
            [
                "title" => "Trump lại dọa 'xóa sổ' Iran bằng lực lượng áp đảo",
              "des" => "Tổng thống Mỹ lên án những bình luận \"xúc phạm\" của Iran và cảnh báo sẽ \"xóa sổ\" nước này nếu họ thực hiện bất cứ cuộc tấn công nào.",
              "detail" => "\"Những phát biểu vô cùng ngu ngốc và xúc phạm mà Iran đưa ra hôm nay chỉ thể hiện rằng họ không hiểu thực tế. Bất cứ cuộc tấn công nào của Iran nhắm tới Mỹ đều sẽ vấp phải lực lượng vĩ đại và áp đảo. Trong một số trường hợp, áp đảo đồng nghĩa với xóa sổ\", Tổng thống Mỹ Donald Trump hôm nay viết trên Twitter. ",
              "category" => 1,
              "public" => true,
              "data_pubblic" => "2019-06-12",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/25/president-trump-02-gty-jef-190-3586-8058-1561478000.jpg",
              "id" => 4
            ],
            [
                "title" => "Giá Bitcoin mất hơn 3.000 USD một ngày",
              "des" => "Vừa chạm đỉnh 17 tháng sáng hôm qua (27/6), giá tiền kỹ thuật số phổ biến nhất thế giới  đã lao dốc.",
              "detail" => "Cách đây vài giờ, giá Bitcoin chỉ còn 10.314 USD một đồng, giảm tới 3.600 USD so với đỉnh 17 tháng hôm qua. Hiện tại, mỗi đồng giao dịch quanh 11.460 USD. Hôm qua, Bitcoin có lúc mất hơn 1.700 USD chỉ trong 15 phút. Việc mất giá diễn ra khi sàn giao dịch tiền ảo hàng đầu thế giới Coinbase gặp sự cố. Trên CNBC, người phát ngôn Coinbase cho biết website của họ không thể truy cập \"trong thời gian ngắn vì khối lượng giao dịch lớn\".Dù vậy, giới chuyên gia cũng nhận định đà tăng của Bitcoin gần đây không bền vững. \"Kể cả những người lạc quan nhất vào tiền số cũng sẽ nói rằng mức tăng hơn 50% một tuần là quá nhanh, quá nhiều\", CEO Michael Moro của Genesis Global Trading cho biết. Ông khẳng định \"lực đẩy chính\" đằng sau diễn biến này là việc nhà đầu tư dùng đòn bẩy (vay nợ) để giao dịch. ",
              "category" => 2,
              "public" => true,
              "data_pubblic" => "2019-06-04",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-kinhdoanh.vnecdn.net/2019/06/28/bit-4750-1561686878.jpg",
              "id" => 5
            ],
            [
                "title" => "Giá vàng thế giới lên đỉnh 6 năm vì Mỹ, Iran",
              "des" => "Kim loại quý tiếp tục tăng vọt nhờ tín hiệu nới lỏng từ các ngân hàng trung ương và căng thẳng Mỹ - Iran.",
              "detail" => "Chốt phiên hôm qua, giá vàng thế giới tăng tới 20 USD, lên 1.419 USD một ounce, cao nhất kể từ giữa năm 2013. Mức tăng chủ yếu diễn ra trong phiên Mỹ. Sang phiên châu Á sáng nay, giá tiếp tục đi lên, hiện chạm 1.427 USD một ounce. \"Đồng đôla yếu đi, lực đẩy kỹ thuật của vàng và sự quan tâm của nhà đầu tư đã kéo thị trường lên, đặc biệt sau đợt mua vào khổng lồ của các quỹ ETF vàng\", Eugen Weinberg – nhà phân tích tại Commerzbank nhận xét. Căng thẳng giữa Mỹ và Iran cũng hỗ trợ kim loại quý.",
              "category" => 2,
              "public" => false,
              "data_pubblic" => "2019-06-04",
              "position" => [
                2
            ],
              "thumbs" => "https =>//i-kinhdoanh.vnecdn.net/2019/06/25/gold-2091-1561422558.jpg",
              "id" => 6
            ],
            [
                "title" => "Song Hye Kyo - 'ngọc nữ' giàu có, đa tình",
              "des" => "Danh tiếng của minh tinh Hàn Quốc gắn liền với sắc đẹp, các bộ phim đình đám ở châu Á cùng tình yêu với nhiều bạn diễn.",
              "detail" => "Sau khi Song Hye Kyo - Song Joong Ki thông báo ly hôn hôm 27/6, nhiều người đồn đoán lý do đổ vỡ từ phía nữ diễn viên. Luật sư của nam diễn viên nói => \"Ly hôn là lỗi của Song Hye Kyo\". Theo Sohu, trong ấn tượng của không ít khán giả Hàn Quốc, Hye Kyo là diễn viên đa tình. Người đẹp thường hẹn hò bạn diễn và vướng tin đồn tình ái với nhiều sao nam. Năm 2003, Song Hye Kyo đóng chung Lee Byung Hun trong All In. Người đẹp 22 tuổi rung động trước vẻ nam tính, mạnh mẽ của bạn diễn. Hai người hẹn hò khoảng một năm. Trên Newsen, một người bạn của Hye Kyo nói nữ diễn viên đau khổ thời gian dài, mất ăn mất ngủ vì mối tình đầu.Khi đóng vợ Lương Triều Vỹ trong Nhất đại tông sư, Song Hye Kyo cho biết rung động vì ánh mắt của tài tử Hong Kong. \"Nhiều người biết Lương Triều Vỹ có ánh mắt chết người. Lúc diễn riêng với anh ấy, tôi cảm nhận được sức mạnh từ ánh mắt ấy\", Hye Kyo từng nói trên QQ.",
              "category" => 3,
              "public" => true,
              "data_pubblic" => "2019-06-20",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-giaitri.vnecdn.net/2019/06/28/lee-byung-hun-8385-1561686128.jpg",
              "id" => 7
            ],
            [
                "title" => "Đặng Văn Lâm ôm chầm chị họ Linh Nga khi hội ngộ",
              "des" => "Thủ môn khóc khi gặp lại người thân sau nhiều tháng thi đấu ở Thái Lan.",
              "detail" => "Tối 23/6, thủ môn Đặng Văn Lâm tham gia giao lưu với danh thủ bóng đá Luis Figo, Roberto Carlos, Didier Drogba, Park Ji Sung và Rio Ferdinand tại TP HCM. Lịch làm việc dày đặc nên anh không có thời gian thăm gia đình.Nghệ sĩ Linh Nga cùng bố mẹ và em trai đã đến sự kiện gặp anh. \"Vừa thấy chị, Lâm ôm chầm, lúc cười lúc khóc vì nhớ người thân\", Linh Nga kể. Linh Nga nói cả nhà cô phải xếp hàng 10 phút để gặp Văn Lâm do sự kiện quá đông khách mời. Con gái Linh Nga - bé Luna - đến buổi giao lưu nhưng không được gặp cậu vì chương trình hạn chế khán giả dưới 18 tuổi.\"Cả nhà dõi theo từng bước đường hoạt động của Văn Lâm ở Thái Lan, luôn ủng hộ tinh thần em\", Linh Nga cho biết.",
              "category" => 3,
              "public" => true,
              "data_pubblic" => "2019-06-19",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-giaitri.vnecdn.net/2019/06/24/linh-nga-2_1561341904_680x0.jpg",
              "id" => 8
            ],
            [
                "title" => "HLV Venezuela => 'Đã tới lúc cạnh tranh, thay vì ngưỡng mộ Messi'",
              "des" => "Ông Rafael Dudamel kêu gọi học trò dừng sự ngưỡng mộ dành cho Messi, để cạnh tranh vé vào bán kết.",
              "detail" => "\"Thật đặc biệt khi thi đấu với Messi, bởi cậu ấy đem đến sự khích lệ và động lực bổ sung cho bất kỳ cầu thủ nào. Cậu ấy đặc biệt và khác biệt đến nỗi đồng đội cũng không thể tận hưởng hết cậu ấy. Tuy nhiên, chúng tôi hiểu rằng, đã đến lúc cạnh tranh thế chỗ. Sự ngưỡng mộ chỉ trở lại, khi Messi trở về khoác áo Barca\", HLV Dudamel cho biết hôm 26/6. Venezuela của Dudamel chuẩn bị gặp Argentina của Messi, nơi họ sẽ tranh vé vào bán kết Copa America 2019. Trận đấu diễn ra theo thể thức loại trực tiếp, với loạt đá luân lưu nếu 120 phút kết thúc với tỷ số hòa. Venezuela hiện có phong độ tốt. Trước khi bất bại ở bảng A (thắng một, hòa hai), đội quân của HLV Dudamel từng thắng Argentina 3-1 trong một trận giao hữu hồi tháng Ba.",
              "category" => 4,
              "public" => true,
              "data_pubblic" => "2019-06-19",
              "position" => [
                2
            ],
              "thumbs" => "https =>//i-thethao.vnecdn.net/2019/06/27/mes4-2318-1561614140.jpg",
              "id" => 9
            ],
            [
                "title" => "Chelsea có thể mua Kovacic dù đang bị cấm chuyển nhượng",
              "des" => "Đội bóng Anh được phép mua đứt tiền vệ người Croatia từ Real Madrid vì đã đăng ký anh từ mùa trước.",
              "detail" => "Chelsea sẽ mất 51 triệu USD để chiêu mộ Mateo Kovacic từ Real, theo BBC. Đội chủ sân Stamford Bridge bị FIFA cấm mua cầu thủ trong hai kỳ chuyển nhượng (mùa hè 2019 và đầu năm 20202). Tuy nhiên, vì Kovacic đã khoác áo Chelsea mùa trước theo diện cho mượn, nên đội bóng Anh không phải đăng ký mới. Để làm được điều này, Chelsea cần hoàn tất cả thủ tục mua đứt trước ngày 30/6 - thời hạn mà thỏa thuận mượn Kovacic từ Real kết thúc. Chelsea đang kháng cáo án phạt của FIFA lên Tòa trọng tài thể thao. Nhưng trước khi có quyết định cuối cùng, họ phải thi hành án phạt. Kovacic đã 32 lần khoác áo Chelsea ở Ngoại hạng Anh mùa trước. Tuy nhiên, cựu HLV Maurizio Sarri sử dụng anh song song với Ross Barkley. Điều này làm dấy lên mối hoài nghi về tính hiệu quả của Kovacic.",
              "category" => 4,
              "public" => true,
              "data_pubblic" => "2019-06-12",
              "position" => [
                2
            ],
              "thumbs" => "https =>//i-thethao.vnecdn.net/2019/06/27/Untitled-3-3749-1561630955.jpg",
              "id" => 10
            ],
            [
                "id" => 11,
              "title" => "Thiếu tướng Dương Văn Thăng làm Chánh án Tòa án Quân sự Trung ương",
              "des" => "Tân Chánh án Tòa án Quân sự Trung ương hứa sẽ \"không ngừng học tập, nâng cao năng lực chuyên môn và hoàn thành nhiệm vụ được giao\". ",
              "detail" => "Chiều 26/6, theo ủy quyền của Chủ tịch nước, Chánh án Tòa án nhân dân tối cao Nguyễn Hoà Bình đã trao quyết định bổ nhiệm chức vụ Phó chánh án Tòa án nhân dân tối cao, Chánh án Tòa án Quân sự Trung ương với Thiếu tướng Dương Văn Thăng.Ông Nguyễn Hòa Bình nói, \"đây là một chức vụ tư pháp cao quý, vinh dự, nhiều trọng trách mà Đảng, Nhà nước và nhân dân tin cậy giao phó\". Vì vậy, ông mong muốn tân Phó chánh án toà tối cao, Chánh án Toà án Quân sự Trung ương nhận thức sâu sắc về trách nhiệm, nỗ lực cùng tập thể xây dựng tòa án nhân dân các cấp ngày càng trong sạch, vững mạnh.Thiếu tướng Dương Văn Thăng hứa sẽ không ngừng học tập, nâng cao năng lực chuyên môn và hoàn thành nhiệm vụ được giao.Ông Dương Văn Thăng sinh năm 1969 (50 tuổi), đang là Thẩm phán Tòa án nhân dân tối cao, Quyền Chánh án Tòa án Quân sự Trung ương.",
              "category" => 5,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/27/DuongVanThang-4683-1561607688.jpg"
            ],
            [
                "id" => 12,
              "title" => "Lý do pháp luật Mỹ phạt nặng hành vi ngược đãi động vật",
              "des" => "Nhiều nghiên cứu khoa học chỉ ra những người từng ngược đãi động vật cũng có xu hướng phạm tội với con người.",
              "detail" => "Trong lịch sử nước Mỹ, nhiều kẻ giết người hàng loạt có xu hướng tàn ác với động vật. Ví dụ, Albert DeSalvo, kẻ giết 13 phụ nữ, từng đánh bẫy và dùng cung tên bắn chết động vật. Những kẻ tham gia vụ xả súng trường học ở thành phố Parkland (bang Florida) và thành phố Pearl (bang Mississippi) cũng từng tra tấn động vật trước khi thực hiện tội ác. Một số nghiên cứu chỉ ra mối liên hệ trực tiếp giữa hành vi ngược đãi động vật và bạo lực với con người (ngược đãi người già và trẻ em, bạo lực gia đình). Nghiên cứu có tính cột mốc thực hiện năm 1997 của Hội Ngăn chặn tàn bạo với động vật bang Massachusetts và Đại học Northeastern của Mỹ cho rằng kẻ ngược đãi động vật có khả năng làm hại người khác cao gấp năm lần so với người không có xu hướng này. Một nghiên cứu khác vào năm 2013 cho thấy 43% những kẻ thực hiện thảm sát tại trường học từng có hành vi ngược đãi động vật, thường là chó mèo.Nhiều chuyên gia còn cho rằng hành vi ngược đãi động vật là dấu hiệu của bạo lực gia đình khi có nghiên cứu cho thấy 88% người bị nghi ngược đãi trẻ em cũng từng ngược đãi động vật. Ngoài ra, trẻ em nếu tàn ác với động vật cũng có thể là dấu hiệu cho thấy chính em này trước đó từng bị bạo hành hoặc bỏ bê. Những em chứng kiến cảnh động vật bị ngược đãi cũng dễ trở thành người có tính tình hung hãn.Trong nghiên cứu năm 2017, người ta chỉ ra rằng thú nuôi cũng có thể trở thành công cụ của bạo lực gia đình vì kẻ bạo hành thường sẽ làm hại hoặc đe dọa làm hại con vật để kiểm soát nạn nhân (chủ nhân của con vật). Hơn một nửa số phụ nữ sống tại những cơ sở bảo trợ cho biết họ thường trì hoãn việc bỏ trốn vì lo sợ cho tính mạng thú nuôi của mình.",
              "category" => 5,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                2
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/26/1-9528-1561551878.jpg"
            ],
            [
                "id" => 13,
              "title" => "Giám thị ở TP HCM phát đề sớm 6 phút",
              "des" => "Cán bộ coi thi tại THPT Trần Hưng Đạo (Gò Vấp) phát đề Vật lý trong tổ hợp Khoa học tự nhiên sớm so với quy định. ",
              "detail" => "Chiều 27/6, tổng kết kỳ thi THPT quốc gia 2019, Phó giám đốc Sở Giáo dục và Đào tạo TP HCM Nguyễn Văn Hiếu cho biết, trong giờ thi bài Khoa học xã hội sáng nay, các điểm thi hoạt động nghiêm túc, không có sự cố.ịch sử có 27.352 thí sinh đăng ký, vắng 271 em; Địa lý 26.886 đăng ký, vắng 223; Giáo dục công dân 23.145 em đăng ký, vắng 115.ại buổi thi tổ hợp Khoa học tự nhiên sáng hôm qua, một cán bộ coi thi tại trường Trần Hưng Đạo phát đề môn Vật lý sớm 6 phút so với quy định 7h35.Cán bộ giám sát ngay sau đó yêu cầu tất cả thí sinh trong phòng úp đề, chờ đến đúng giờ quy định mới làm bài. \"Giám thị đã bị phê bình và sẽ xem xét trách nhiệm\", ông Hiếu nói.",
              "category" => 6,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/27/pho-giam-doc-nguyen-van-hieu-7030-1561622423.jpg"
            ],
            [
                "id" => 14,
              "title" => "Phụ huynh đồng hành cùng con trong mùa thi",
              "des" => "Dù trời nắng nóng hay mưa to, nhiều ông bố bà mẹ vẫn đứng ngoài cổng trường, chào đón con bước ra khỏi điểm thi THPT quốc gia. ",
              "detail" => "Miền Trung từ ngày 4/6 đến nay liên tục nắng nóng, nhiệt độ tại Thừa Thiên Huế thường xuyên 39 độ C. Tại điểm trường THPT Chuyên Quốc học Huế, sau khi con vào phòng thi, nhiều phụ huynh vẫn nán lại dưới cổng trường ngóng theo bóng con.Nhà cách điểm thi 10 km, ông Lý bỏ lại công việc để đưa đón con trai đi thi tại trường THPT Trấn Biên (TP Biên Hòa, Đồng Nai). \"Người ta ngồi một chỗ chứ tôi hồi hộp lắm, không biết đề năm nay có khó lắm không nên cứ nhìn vào trong hoài\", ông Lý giải thích, cho biết con trai đăng ký vào Đại học Kinh tế.",
              "category" => 6,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/26/10-1561527966_680x0.jpg"
            ],
            [
                "id" => 15,
              "title" => "Trẻ em có nên ăn chay hay không?",
              "des" => "Viện Hàn Lâm Y khoa Hoàng gia Bỉ khuyến cáo trẻ em không nên ăn chay, trong khi viện dinh dưỡng Anh và Mỹ khuyên \"ăn chay hợp lý\". ",
              "detail" => "Ngày càng nhiều bố mẹ châu Âu cho con ăn chay từ bé nhằm mục đích nâng cao sức khỏe. Tuy nhiên, các chuyên gia cho rằng chế độ dinh dưỡng này không phù hợp với trẻ em.\"Hiện có khoảng 3% trẻ em Bỉ duy trì thói quen ăn chay, tức là loại bỏ các sản phẩm từ trứng, sữa, thịt có nguồn gốc động vật. Chế độ ăn uống này về lâu dài sẽ tạo ra một sự thiếu hụt dinh dưỡng trầm trọng cho cơ thể, dẫn đến chậm phát triển\", bác sĩ Georgia Casimir từ Bệnh viện Nhi Queen Fabiola, Chủ tịch Ủy ban Nghiên cứu về Ăn chay của Viện Hàn lâm Y khoa Hoàng gia Bỉ cho biết. Hành động ép trẻ em hoặc phụ nữ mang thai ăn chay sẽ bị khởi tố tội ngược đãi trẻ em hoặc không giúp đỡ người khi gặp nguy hiểm.",
              "category" => 7,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-suckhoe.vnecdn.net/2019/06/25/phpthumb-generated-thumbnail-j-5687-7499-1561448855.png"
            ],
            [
                "id" => 16,
              "title" => "Lò thuốc phóng xạ hỏng, bệnh nhân Sài Gòn phải ra Hà Nội",
              "des" => " Hệ thống sản xuất thuốc phóng xạ cung cấp cho toàn TP HCM bị hỏng một tháng nay, bệnh nhân phải ra Hà Nội, Đà Nẵng chụp PET/CT.",
              "detail" => "Hệ thống Cyclotron sản xuất thuốc 18F-FDG đặt tại bệnh viện Chợ Rẫy là nguồn duy nhất cung cấp thuốc phóng xạ cho việc chụp PET/CT ở ba bệnh viện, gồm Chợ Rẫy, Quân y 175 và Nhân dân 115. PET/CT là phương tiện chẩn đoán, theo dõi, điều trị nhiều bệnh lý, đặc biệt là phát hiện sớm ung thư, đang có nhu cầu sử dụng cao. Bác sĩ Nguyễn Xuân Cảnh, Trưởng Khoa Y học hạt nhân, Bệnh viện Chợ Rẫy, xác nhận hệ thống bị hỏng một tháng nay, khiến các bệnh viện dùng PET/CT đều phải ngừng phương pháp. Hệ thống đã được gửi sang Mỹ để sửa chữa. \"Thuốc phóng xạ sản xuất ra có thời gian rất ngắn, phải sử dụng trong khoảng 6-8 tiếng.Vì vậy chúng tôi không thể chuyển thuốc từ các tỉnh thành xa đến thay thế\", bác sĩ Cảnh nói. ",
              "category" => 7,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-suckhoe.vnecdn.net/2019/06/28/PET-CT-5624-1561678794.jpg"
            ],
            [
                "id" => 17,
              "title" => "Đưa bạn gái đi ăn, chàng trai gặp 9 người yêu cũ tại quán",
              "des" => " Chàng trai Nhật Bản lúng túng không biết phải nói gì khi giáp mặt 'dàn' người yêu cũ.",
              "detail" => "Raphael là một Youtuber nổi tiếng Nhật Bản, có 1,1 triệu người theo dõi, nhưng anh chưa bao giờ lộ mặt. Trong một chương trình camera giấu kín, một người luôn xuất hiện trong các video cùng anh đã đẩy Raphael vào tình huống trớ trêu. Người này đã đặt chỗ cho anh và bạn gái hiện tại tới một nhà hàng sushi cao cấp, nơi được sắp xếp 9 bạn gái cũ, để xem anh chàng phản ứng thế nào.Trước khi Raphael xuất hiện, các bạn gái trước đây của anh đã tự giới thiệu trước ống kính. Họ đều trong độ tuổi đôi mươi, nổi bật về ngoại hình. Họ có chung nhận xét rằng \"Raphael rất khó chịu\". Khi dẫn người yêu hiện tại bước vào quán, Raphael dần nhận ra tất cả khách ngồi quanh mình đều là bạn gái cũ. Anh chàng cố gắng che giấu cảm xúc, chỉ có thể nói với bạn gái về món sushi trước mặt => \"Em ăn nhiều vào nhé. Anh không thấy đói\".",
              "category" => 8,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-giadinh.vnecdn.net/2019/06/27/henho0-9691-1561628012.jpg"
            ],
            [
                "id" => 18,
              "title" => "Dễ mất tiền oan khi mua điều hòa Nhật bãi một cục nóng, hai cục mát",
              "des" => "Mua máy điều hòa bãi một cục nóng dùng được cho 2 dàn lạnh, chị Hương (Hà Nội) chưa kịp vui đã phải bán lại với giá một nửa. ",
              "detail" => "Căn chung cư của chị Đỗ Thu Hương (40 tuổi, Bắc Từ Liêm, Hà Nội) có nhiều phòng nhưng ban công nhỏ, chỉ 2 m2, vừa để phơi quần áo, trồng cây cảnh, vừa để máy giặt và lắp cục nóng điều hòa.\"Nhà mình muốn lắp điều hòa cho 2 phòng ngủ, nhưng mới một cục nóng đã chịu không nổi. Bố mẹ từ quê ra hay ngủ phòng khách, hơi nóng từ ban công phả vào không thể ngủ được\", chị Hương chia sẻ. Đầu tháng 6, vô tình thấy trên mạng có loại điều hòa hàng bãi Nhật, chỉ cần một cục nóng dùng được 2 dàn lạnh, chị Hương đã quyết định bỏ 30 triệu để mua. Ban đầu, chị rất hài lòng vì máy vận hành rất êm ái, số điện không nhảy lên nhiều.Hai ngày sau chị nhận ra rằng điều hòa này chỉ ở mức cố định 20 độ C. Hỏi người bán, chị mới biết khi cả hai dàn lạnh bật công suất cao đôi khi sẽ khiến cục nóng bị \"đơ\", không thể tăng hạ nhiệt độ hoặc có thể ngưng hoạt động. Khi cục nóng gặp trục trặc, cả hai dàn lạnh sẽ phải \"nghỉ việc\". Cảm thấy hối hận, chị đăng bán lại ngay sau 3 tuần sử dụng.",
              "category" => 8,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-giadinh.vnecdn.net/2019/06/26/dieu-hoa-3-5058-1561533971.jpg"
            ],
            [
                "id" => 19,
              "title" => "'Mùa hè tuyết rơi' ở các quốc gia nam bán cầu",
              "des" => " Trái ngược với bắc bán cầu, các quốc gia ở nửa nam như Australia đón mùa đông lạnh giá, thậm chí có tuyết rơi vào tháng 6.",
              "detail" => "New Zealand có tự nhiên đa dạng, bao gồm sông băng, núi lửa, công viên tự nhiên... Mùa đông ở đây cũng bắt đầu từ tháng 6-8. Ngoài trượt tuyết, du khách có thể trải nghiệm trung tâm Nam cực quốc tế, nơi cung cấp các hoạt động thú vị như lái xe Hagglund và gặp gỡ chim cánh cụt. Địa chỉ gợi ý khác là đảo Nam với dãy núi phủ tuyết trắng xóa, dòng sông băng cùng những hồ nước nóng tự nhiên. Ảnh => William Patino.Với phong cảnh tự nhiên độc đáo, văn hóa và ẩm thực phong phú, Australia là điểm đến lý tưởng để tránh nóng cho du khách Việt. Trái ngược với các quốc gia ở bắc bán cầu, mùa đông ở Australia bắt đầu từ tháng 6 đến hết tháng 8, nơi có nền nhiệt thấp nhất là thủ đô Canberra và bang Tasmania. Một trong những trải nghiệm thú vị khi du lịch Australia là ngắm dòng cá voi di cư ở bờ biển bang New South Wales. Vào mùa đông, đàn cá voi di chuyển về bắc bán cầu để tránh rét, vì vậy du khách có thể dễ dàng bắt gặp cảnh tượng thiên nhiên kỳ thú này ở cầu cảng Sydney và thành phố Newcastle. Ngoài ra, du khách có thể thể tham gia những sự kiện được tổ chức trong tháng 6-8 của Australia như lễ hội âm nhạc và ánh sáng thành phố Sydney, lễ hội mùa đông ở khu vực miền núi Blue Mountains.Mùa đông từ tháng 6-8 là thời gian để du lịch Argentina và tránh cái nóng của bắc bán cầu. Khi đó, phía bắc nước này có nhiệt độ ôn hòa, còn phía nam tiết trời lạnh giá. Một trong những chuyến tham quan được du khách yêu thích là ngắm nhìn cá voi di cư ở bán đảo Valdes, thành phố Puerto Madryn. Với đặc tính độc đáo này của cá voi, mùa đông ở Argentina là thời điểm thích hợp nhất để chiêm ngưỡng loài sinh vật to lớn của biển cả bằng mắt thường. Tại khu vực Patagonia, du khách có thể trượt tuyết trên núi Cerro Catedra, thành phố Bariloche và núi Cerro Castor, thành phố Ushuaia.",
              "category" => 9,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-dulich.vnecdn.net/2019/06/07/5-1559870330_680x0.jpg"
            ],
            [
                "id" => 20,
              "title" => "Phượng khoe sắc đỏ bên dòng sông Hương",
              "des" => " Đến Huế mùa này, du khách có thể bắt gặp những cô gái mặc áo dài trắng chụp ảnh kỷ niệm dưới tán phượng đỏ trong nắng hè.",
              "detail" => "Những tán hoa phượng ven sông Hương, phía xa là cầu Phú Xuân. Dòng sông nổi tiếng của Huế được nhà văn Hoàng Phủ Ngọc Tường nhắc đến trong tập ký “Ai đã đặt tên cho dòng sông?”. Một trích đoạn trong tập ký này vừa được đưa vào đề Ngữ văn kỳ thi THPT quốc gia 2019.Huế trồng khoảng 1.000 cây phượng, nhưng nổi tiếng nhất phải kể đến cây bên cầu Trường Tiền. “Cây phượng già này được xem là một phần của vùng đất cố đô. Vào mùa hoa nở, ngày nào ở đây cũng nhộn nhịp du khách đến vui chơi và chụp ảnh kỷ niệm”, nhiếp ảnh gia Lê Huy Hoàng Hải, sống tại Huế cho biết.Hệ thống sông Hương có hai nguồn chính, đều bắt nguồn từ dãy núi Trường Sơn. Dòng chính là Tả Trạch dài khoảng 67 km, dòng phụ dài 60 km, chảy uốn quanh qua Kinh thành Huế.Sáng sớm, bạn hãy đạp xe một vòng quanh xứ Huế để tận hưởng không khí trong lành trên các tuyến đường Đặng Thái Thân (ảnh), Lê Duẩn, Lê Trực hay Tống Duy Tân.",
              "category" => 9,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-dulich.vnecdn.net/2019/06/26/2-1561535424_680x0.jpg"
            ],
            [
                "id" => 21,
              "title" => "San hô từ chối trứng tôm, chọn ăn hạt vi nhựa",
              "des" => " Một cá thể san hô có thể hấp thụ tới hơn 100 sợi vi nhựa và được coi là món ăn khoái khẩu đang gây độc cho chúng. ",
              "detail" => "Các nhà khoa học đã phát hiện ra rằng, một số loài san hô hoang dã đang ăn những mảnh rác nhỏ bằng nhựa. Các hạt vi nhựa có thể gây hại cho san hô nhưng kết quả nghiên cứu cho thấy chúng thích những hạt vi nhựa hơn là thức ăn tự nhiên, nghiên cứu mới vừa được công bố trong Kỷ yếu Hội Hoàng gia về khoa học sinh học (Proceedings of the Royal Society B).Nhà nghiên cứu sinh học Randi Rotjan đại học Boston đã có nghiên cứu mới về hệ sinh thái biển, cô và đồng nghiệp đã bắt đầu thu thập loài san hô nhỏ có tên là poculata sống ở bờ biển Đại Tây Dương, từ Massachusetts đến vịnh Mexico. Khu vực này gần với một khu đô thị được dự đoán là có nguy cơ ô nhiễm nguồn nước từ nhựa.Nhóm đã phát hiện có hơn 100 sợi vi nhựa có trong một cá thể san hô. Sau đó, họ tiến hành thí nghiệm bằng cách nuôi từng cá thể san hô bằng 2 loại thức ăn đó là hạt vi nhựa huỳnh quang màu xanh và trứng tôm ngâm trong nước muối. Vi nhựa huỳnh quang màu xanh là loại nhựa phổ biến trong xà phòng, mỹ phẩm, thậm chí là trong các loại thuốc. Kết quả khiến cho nhóm nghiên cứu phải ngạc nhiên rằng san hô ăn nhiều hạt vi nhựa gấp đôi trứng tôm ngâm muối.",
              "category" => 10,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/28/san-ho-bien-8281-1561684472.jpg"
            ],
            [
                "id" => 22,
              "title" => "Phát hiện loài khủng long ăn thịt mới từng sống ở sa mạc",
              "des" => " Hóa thạch được tìm thấy ở miền nam Brazil hé lộ một loài khủng long ăn thịt cỡ nhỏ mới thích nghi tốt với môi trường sa mạc.",
              "detail" => "Các nhà cổ sinh vật học từ Brazil và Argentina hôm 26/6 công bố phát hiện một loài khủng long ăn thịt mới từng lang thang trên vùng đất sa mạc khô cằn cách đây 90 triệu năm. Hóa thạch được tìm thấy tại thành phố Cruzeiro do Oeste, thuộc bang Parana, phía nam Brazil.Loài mới được đặt tên là Vespersaurus paranaensis. Chúng là những con khủng long ăn thịt cỡ nhỏ có chiều dài khoảng 1,6 m và đi bằng hai chân. Mẫu vật được khai quật ở Cruzeiro do Oeste có những vết răng cắn, dấu hiệu cho thấy nó bị tấn công và ăn thịt bởi những kẻ săn mồi lớn hơn.Dấu chân của loài V. paranaensis lần đầu tiên được phát hiện vào những năm 1970, nhưng phải mất gần 50 năm, các nhà cổ sinh vật học mới xác định được loài khủng long nào đã tạo ra những dấu vết bí ẩn đó. \"Phát hiện này thật tuyệt vời vì đây là loài khủng long đầu tiên được tìm thấy ở bang Parana. Chúng là những con khủng long ăn thịt rất hiếm\", Chủ tịch Hiệp hội Cổ sinh vật học Brazil, Renato Pirani Ghilardi cho biết.",
              "category" => 10,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-dulich.vnecdn.net/2019/06/26/0_680x0.jpg"
            ],
            [
                "id" => 23,
              "title" => "Các hãng chip của Mỹ nối lại kinh doanh với Huawei",
              "des" => " Micron và Intel được cho đã kinh doanh trở lại với công ty Trung Quốc bất chấp lệnh cấm vận của chính phủ Mỹ.",
              "detail" => "Theo Reuters, hãng sản xuất chip nhớ Micron Technology đã bắt đầu giao hàng trở lại một số loại linh kiện cho Huawei Technologies từ 2 tuần trước, sau khi đã xem xét lại lệnh cấm vận kinh doanh của chính phủ Mỹ đối với hãng viễn thông Trung Quốc. Sanjay Mehrotra, giám đốc điều hành của công ty sản xuất chip có trụ sở ở bang Idaho (Mỹ), xác nhận điều này trong một hội nghị với các nhà đầu tư. Mehrotra cho biết việc nối lại kinh doanh và tiếp tục cung cấp hàng cho Huawei không vi phạm quy định hạn chế xuất khẩu và kinh doanh trong lệnh cấm vận mà chính phủ Mỹ áp dụng.Ngoài Micron, nhà cung cấp vi xử lý lớn nhất thế giới cho máy tính, Intel cũng được cho đã nối lại việc kinh doanh và giao hàng trở lại một số loại linh kiện cho Huawei. Tuy nhiên, Intel từ chối bình luận và xác nhận về điều này.",
              "category" => 11,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-sohoa.vnecdn.net/2019/06/27/screen-shot-2019-06-27-at-7-08-4851-4490-1561594260.png"
            ],
            [
                "id" => 24,
              "title" => "Dell Latitude phiên bản nâng cấp giá từ 12,99 triệu",
              "des" => " Dòng laptop Latitude được Dell mang thiết kế mới, dùng ổ cứng SSD 256 GB, Ram 8 GB, CPU Intel thế hệ 8, giá từ 12,99 triệu tại Synnex FPT.",
              "detail" => "Dell Latitude thường nhắm đến tập khách hàng doanh nhân, những người có công việc di động, cần thiết bị có độ bền cao, chống sốc tốt, cùng thời gian sử dụng pin lâu dài và cấu hình mạnh. Hiện tại, thế hệ Latitude mới dễ tiếp cận với những người trẻ, những nhà kinh doanh start-up, với giá bán vừa phải.Những giá trị về độ bền của Latitude được duy trì, tuy nhiên 2 phiên bản mới mang đến giá trị thẩm mĩ cao hơn. Thiết kế mới có xu hướng lai sự mềm mại, hiện đại của dòng Vostro. Dell Latitude 3400 và 3500 nặng chưa đến 2kg, thay đổi trong thiết kế nắp gập, màn hình, khung máy mỏng nhẹ, khá giống với người anh em Vostro. Sản phẩm vẫn đáp ứng các tiêu chuẩn về độ bền quân sự Mỹ MIL-STD 810G, giúp bảo vệ máy tốt hơn trong những công việc có sự tác động trực tiếp từ môi trường bên ngoài.Thông thường, các hãng chọn cách thay đổi cấu hình máy để laptop có giá hợp lý. Tuy nhiên, Dell Latitude 3400 phiên bản mới giải quyết tốt bài toán cân bằng này, mang đến một thiết bị cạnh tranh về giá.",
              "category" => 11,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-sohoa.vnecdn.net/2019/06/27/Screen-Shot-2019-06-27-at-2-02-6330-5884-1561619177.png"
            ],
            [
                "id" => 25,
              "title" => "Toyota và hành trình thứ hai của những chiếc lốp xe",
              "des" => " Hàng trăm chiếc lốp xe đã qua sử dụng tiếp tục lăn bánh trên hành trình thứ hai tại sân chơi trẻ em ở những xã khó khăn của Việt Nam.",
              "detail" => "Tết thiếu nhi 2019, trẻ em tại xã Vĩnh Trạch Đông nhận được quà sớm. \"Món quà\" được đặt tại mảnh đất diện tích 500m2 tại khu nhà ở Hữu Nghị, ấp Biến Đông B, Bạc Liêu. 120 chiếc lốp xe đầy màu sắc được hãng xe sử dụng làm xích đu, bập bênh, cầu trượt hay những giá trồng hoa. Tại xã ven biển của tỉnh Bạc Liêu, cuộc sống người dân nơi đây hiện còn nhiều khó khăn, thiếu thốn, đặc biệt là không gian vui chơi cho trẻ em.Một tuần sau, tại xã Cao Minh, Vĩnh Phúc, một sân chơi tương tự được khánh thành. \"Em rất vui vì có sân chơi nhiều màu sắc, nhiều trò chơi như thế này\", bé Dương Thế Quỳnh, 7 tuổi tại thôn Cao Quang nói. Hàng trăm chiếc lốp được thu gom từ các đại lý ôtô tại sân chơi được tái chế thành những trò chơi quen thuộc của trẻ nhỏ. \"Từ nay, xã Cao Minh đã có chỗ an toàn cho bọn trẻ chơi đùa rồi\", người dân xã cho biết.",
              "category" => 12,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/27/1696917373-w500-2666-1561631597.png"
            ],
            [
                "id" => 26,
              "title" => "Hàng ghế sau không còn là nơi an toàn nhất trên ôtô",
              "des" => " Dây an toàn ở hàng ghế sau chưa có các công nghệ như chống quá tải và căng đai khẩn cấp nên có thể gây nguy hiểm cho người dùng.",
              "detail" => "Theo New York Times - Hàng ghế sau, hàng chục năm nay, vẫn được cho là nơi an toàn nhất trên ôtô khi xảy ra tai nạn. Nhưng niềm tin này không còn được bảo đảm, khi những tiến bộ trong công nghệ dây an toàn ở hàng ghế trước còn chưa được áp dụng cho hàng ghế sau.Gần đây các nhà nghiên cứu an toàn có những đề xuất mới về việc nên mua ôtô nào và nên ngồi ở đâu, nhấn mạnh hàng ghế sau của những loại xe nào có hệ thống dây an toàn tự căng, thứ đã bảo vệ được người ở hàng ghế trước trong 10 năm qua.Hệ thống đai an toàn này thít chặt khi cảm biến phát hiện va chạm sắp xảy ra. Chúng cũng có thể nới lỏng ra một chút khi người dùng thắt dây đai quá mạnh khiến dây đai có thể gây nguy hiểm.Nếu hệ thống đai an toàn với công nghệ ưu việt này chưa được áp dụng ở hàng ghế sau, những người ở độ tuổi từ 55 trở lên nên ngồi ở hàng ghế trước, theo Cơ quan Quản trị An toàn Lưu thông đường bộ Quốc gia Mỹ.",
              "category" => 12,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/27/Seatbelts-and-Child-Restraints-3157-1561610734.jpg"
            ],
            [
                "id" => 27,
              "title" => "Người Ấn Độ có thể đi tù nếu để trẻ vị thành niên lái xe",
              "des" => " Dự luật bổ sung nếu được Thượng viện Ấn Độ thông qua sẽ tăng mức tiền phạt lên 10 lần và thậm chí án tù với lỗi cho mượn xe.",
              "detail" => "Nội các Ấn Độ đã thông qua dự luật bổ sung với mục tiêu tăng mức phạt nhằm đảm bảo trật tự và an toàn giao thông. Nếu được Thượng viện thông qua, dự luật sẽ được áp dụng trên toàn lãnh thổ Ấn Độ, theo Business Today.Theo dự luật, mức phạt vi phạm giao thông sẽ tăng 10 lần. Lái xe không bằng lái sẽ bị phạt tới 72 USD so với 7,2 USD như hiện nay. Gọi điện thoại di động khi đang lái xe có cùng mức phạt 72 USD so với 14 USD hiện nay. Người điều khiển phương tiện say rượu sẽ phải nộp tới 144 USD thay vì 29 USD.",
              "category" => 12,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/26/Xe-3-3795-1561526551.jpg"
            ],
            [
                "id" => 28,
              "title" => "10 xe bán chạy nhất thế giới đầu 2019",
              "des" => "Toyota Altis đứng đầu danh sách, Honda CR-V thống trị phân khúc, trong khi Ford F-series là xe bán tải duy nhất góp mặt trong top 10.",
              "detail" => "1. Toyota Corolla Altis - 282.637 xe Theo Carbuzz, số liệu của Global Auto Database tính đến hết tháng 5/2019 cho thấy sự áp đảo Volkswagen trong danh sách top 10 xe bán chạy nhất thế giới. Tuy nhiên, dẫn đầu vẫn là cái tên quen thuộc, Toyota Corolla Altis. Mẫu xe Nhật tiêu thụ hơn 280.000 xe trong gần nửa đầu 2019. Bất chấp sự bùng nổ của nhu cầu xe đa dụng gầm cao, kể cả thị hiếu chuộng xe bán tải tại Mỹ, Corolla Altis vẫn là ông vua doanh số. 2. Ford F-Series - 252.013 xe .3. Honda Civic - 203.103 xe .4. Honda CR-V - 190.319 xe .",
              "category" => 5,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/26/Toyota-RAV4-VNEXPRESS-1561541307_680x0.jpg"
            ],
            [
                "id" => 29,
              "title" => "Pháp kêu gọi Mỹ không kéo NATO vào chiến dịch quân sự ở Vùng Vịnh",
              "des" => "Các nước NATO đang tìm cách làm dịu căng thẳng Mỹ - Iran, trong bối cảnh Washington vẫn để ngỏ biện pháp quân sự đáp trả Tehran. ",
              "detail" => "Bộ trưởng Quốc phòng Pháp Florence Parly hôm qua kêu gọi Mỹ không lôi kéo Tổ chức Hiệp ước Bắc Đại Tây Dương (NATO) vào bất kỳ chiến dịch quân sự nào tại Vùng Vịnh, đồng thời hối thúc Washington trở lại thỏa thuận hạt nhân ký năm 2015 với Tehran. Thông tin được đưa ra sau cuộc họp kín giữa quyền Bộ trưởng Quốc phòng Mỹ Mark Esper với những người đồng cấp NATO tại Bỉ.\"Phía Pháp bày tỏ quan điểm rất rõ ràng và toàn diện => 'Đúng, chúng tôi thấy điều gì đã xảy ra'. Tuy nhiên, họ cũng phát tín hiệu rằng hai bên cần hạ nhiệt căng thẳng\", quan chức giấu tên tham gia cuộc họp cho biết.",
              "category" => 1,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                2
            ],
              "thumbs" => "https =>//i-vnexpress.vnecdn.net/2019/06/28/Florence-Parly-JPG-7292-1561681171.jpg"
            ],
            [
                "id" => 30,
              "title" => "Những điều ít người biết về Tây Tạng",
              "des" => " Từng bí ẩn với thế giới trong hàng thế kỷ, Tây Tạng là vùng đất có văn hóa lâu đời và phong cảnh thiên nhiên hùng vĩ.",
              "detail" => "Nằm trên cao nguyên Thanh Hải - Tây Tạng, Tây Tạng trải dài 1,2 triệu km2, chiếm 1/8 tổng diện tích của Trung Quốc. Không chỉ sở hữu núi cao, địa hình vùng đất này còn đa dạng với thung lũng sâu, sông băng và sa mạc. Từ tỉnh Nyingchi xanh mướt tới khu vực Ngari hiu quạnh phía tây bắc, Tây Tạng có nhiều địa điểm để khám phá.Với độ cao trung bình 4.500 m so với mực nước biển, trên vùng núi Himalaya, Tây Tạng là cao nguyên cao nhất hành tinh. Khi du lịch ở đây, du khách có thể cần sử dụng bình oxy.Không giống khách du lịch, người Tây Tạng có gen khác biệt, giúp thích nghi với địa hình khắc nghiệt. Đó là lý do họ có hệ tuần hoàn và tim mạch khỏe mạnh, để có thể sinh sống ở độ cao như vậy.",
              "category" => 9,
              "public" => true,
              "data_pubblic" => "2019-06-28",
              "position" => [
                1
            ],
              "thumbs" => "https =>//i-dulich.vnecdn.net/2019/06/26/tibet-discovery-7317-1561539785.jpg"
            ],
            [
                "title" => "Chủ dự án 'khu dân cư Alibaba' cho lấp lại đường nhựa",
              "des" => "Tỉnh Bà Rịa - Vũng Tàu cho rằng chủ đất lấp đường, trồng sắn trên đất nông nghiệp bị phân lô bán nền là nhằm đối phó nên vẫn cưỡng chế.",
              "detail" => "Khu đất rộng gần 135.000 m2 ở xã Châu Pha (thị xã Phú Mỹ, Bà Rịa - Vũng Tàu) do ông Nguyễn Ngọc Sự (quê Hà Nội) đứng tên sở hữu được làm đường, xây bó vỉa, kéo điện rồi phân lô bán nền dưới danh nghĩa \"dự án Alibaba Tân Thành Center City 1\".\n\nHơn một năm qua, trong căn nhà rộng hàng trăm m2 được xây ở mặt tiền khu đất, hàng chục người mặc đồng phục địa ốc Alibaba túc trực dẫn người dân ở các địa phương đến xem, mua đất nền tấp nập.\n\nGần 10 ngày trước, UBND xã Châu Pha đến dán quyết định cưỡng chế khiến việc giao dịch trở nên yên ắng. Chỉ vài người túc trực ở ngôi nhà. Hai con đường chính bị căng dây chặn lại, chủ đất thuê xe đến lấp bó vỉa hè, những con đường nhựa. Sắn vừa được trồng trên những khoảnh đất đã đâm chồi xanh.",
              "category" => 4,
              "public" => false,
              "data_pubblic" => "2019-06-28",
              "position" => [
                2,
                1,
                3,
                4
            ],
              "thumbs" => "amess.jpg",
              "id" => 31
            ]
        ];
        foreach ($listBlogs as $blog) {
            Blogs::create($blog);
        }
    }
}
