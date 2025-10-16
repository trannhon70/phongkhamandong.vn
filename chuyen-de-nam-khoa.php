<?php
ob_start("ob_gzhandler");
header("Timing-Allow-Origin: *");
header("Cache-Control: public, max-age=31536000, must-revalidate");

// $local = 'http://localhost/_andong/phongkhamandong.vn';
$local = 'https://nk.phongkhamandonghcm.com';
?>
<!DOCTYPE html>
<html ⚡ lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="description"
        content="Phòng khám chuyên khoa chuyên điều trị bệnh nam khoa, bệnh xã hội, da liễu, hậu môn - trực tràng uy tính tại thành phố Hồ Chí Minh">
    <title>Phòng khám chuyên khoa</title>
    <link rel="icon" href="<?php echo $local ?>/images/nam_khoa/icons/icon_logo.webp" type="image/x-icon">
    <link rel="preload" href="css/chuyen-de-nam-khoa.min.css" as="style"
        onload='this.onload=null,this.rel="stylesheet"'>
    <noscript>
        <link rel="stylesheet" href="css/chuyen-de-nam-khoa.min.css">
    </noscript>
    <!-- <script>
    document.addEventListener('scroll', function loadGA() {
        console.log('Người dùng cuộn xuống - Tải Google Analytics');
        var g = document.createElement('script'),
            s = document.scripts[0];
        g.src = 'https://www.googletagmanager.com/gtag/js?id=G-XWJ4VGC40M';
        g.async = true;
        s.parentNode.insertBefore(g, s);
        g.onload = function() {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-XWJ4VGC40M');
        };
        document.removeEventListener('scroll', loadGA);
    });
    </script> -->
</head>
<?php
$slides = [
    [
        "image" => "/images/nam_khoa/banner/sui_mau_ga.webp",
        "alt" => "Sùi mào gà",
        "symptom" => "Nổi các nốt sần, gai thịt mềm tại lỗ sáo, quy đầu, bao quy đầu, thân dương vật.",
        "complication" => "Ảnh hưởng đến tâm lý, chất lượng cuộc sống và sức khỏe tổng thể. Thậm chí dẫn tới dương vật."
    ],
    [
        "image" => "/images/nam_khoa/banner/benh_lau.webp",
        "alt" => "Bệnh lậu",
        "symptom" => "Tiểu buốt, tiểu rát, nước tiểu đục, nặng mùi, có thể lẫn máu hoặc mủ. Lỗ sáo sưng đỏ, chảy mủ trắng đục hoặc vàng xanh.",
        "complication" => "Ảnh hưởng đến tâm lý, chất lượng cuộc sống và sức khỏe tổng thể, làm tăng nguy cơ vô sinh hiếm muộn."
    ],
    [
        "image" => "/images/nam_khoa/banner/roi_loan_cuong_duong.webp",
        "alt" => "Rối loạn cương dương",
        "symptom" => "Dương vật khó cương, cương không đủ cứng để thực hiện quan hệ, thời gian cương cứng ngắn, dương vật đau nhức khi sau xuất tinh.",
        "complication" => "Tác động tiêu cực đến tâm lý, gây suy giảm ham muốn và có thể dẫn đến liệt dương, tăng vô sinh hiếm muộn."
    ],
    [
        "image" => "/images/nam_khoa/banner/viem_bao_quy_dau.webp",
        "alt" => "Rối loạn cương dương",
        "symptom" => "Quy đầu, bao quy đầu tấy đỏ, mọng nước và nổi nhiều nốt mụn nhỏ, tiết dịch nhầy và bợn trắng, gây ngứa ngáy và đau rát khó chịu.",
        "complication" => "Viêm nhiễm lan sang có bộ phận khác, ảnh hưởng đến tâm lý và sức khỏe tổng thể của nam giới. Có thể gây hoại tử quy đầu, ung thư dương vật."
    ],
    [
        "image" => "/images/nam_khoa/banner/benh_tinh_hoan.webp",
        "alt" => "Bệnh tinh hoàn",
        "symptom" => "Đau một hoặc cả hai bên tinh hoàn, tinh hoàn sưng tấy, bầm tím hoặc to mọng, lệch bên. Sốt cao và ớn lạnh, buồn nôn và nôn, tiểu buốt rát…",
        "complication" => "Bệnh tinh hoàn cần được hỗ trợ điều trị sớm, tránh để lâu có thể dẫn đến hoại tử hoặc teo tinh hoàn, tăng nguy cơ vô sinh nam, thậm chí ung thư tinh hoàn."
    ],

    [
        "image" => "/images/nam_khoa/banner/viem_nhiem_nam_khoa.webp",
        "alt" => "Bệnh tinh hoàn",
        "symptom" => " Dương vật nổi mụn và tiết dịch lạ, tiểu buốt rát, tiểu nhiều lần, nước tiểu đục. Dương vật có mùi hôi, khó cương và đau nhức khi cương…",
        "complication" => "Ảnh hưởng trực tiếp đến sức khỏe tình dục, sinh sản và tiết niệu của nam giới. Bệnh tiến triển nặng có thể gây ung thư, vô sinh nam."
    ],
    [
        "image" => "/images/nam_khoa/banner/xuat_tinh_som.webp",
        "alt" => "Bệnh tinh hoàn",
        "symptom" => "Xuất tinh rất nhanh, từ 1 – 2 phút. Xuất tinh khi vừa đưa dương vật vào âm đạo hoặc ngay trong khúc dạo đầu. Dương vật xìu liền sau khi xuất tinh.",
        "complication" => "Lo lắng và căng thẳng, ảnh hưởng công việc và cuộc sống. Né tránh quan hệ, lâu dần dẫn đến lãnh cảm, rối loạn cương dương, thậm chí liệt dương."
    ],

];
?>

<body>
    <header style="margin: 0 auto;">
        <div class="header">
            <img width="30" height="30" loading="lang" src="<?php echo $local ?>/images/chuyen_de/icons/icon_menu.webp"
                alt="...">
            <div class="header_center">Chuyên khoa <strong>An Đông</strong></div>
            <img width="30" height="30" loading="lazy" src="<?php echo $local ?>/images/chuyen_de/icons/icon_dot.webp"
                alt="...">
        </div>
    </header>
    <section class="banner">
        <div class="banner__body">
            <img loading="lazy" width="100%" height="auto"
                srcset="<?php echo $local ?>/images/nam_khoa/banner/banner.webp 1024w, <?php echo $local ?>/images/nam_khoa/banner/banner.webp 640w"
                sizes="(max-width: 640px) 100vw, 1024px" src="<?php echo $local ?>/images/nam_khoa/banner/banner.webp"
                alt="...">
        </div>
    </section>

    <section class="section__button">
        <a aria-label="liên hệ" class="animated-button"
            href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            tư vấn với bác sĩ tại đây</a>
    </section>

    <session class="expert">
        <h2 class="expert__title">
            KHÁM NAM KHOA
        </h2>
        <div class="expert__span">
            <img width="20px" height="17px" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
            <div>
                Khám nam khoa là quá trình kiểm tra, đánh giá toàn diện sức khỏe sinh sản và sinh lý của nam giới.
            </div>
        </div>
        <div class="expert__span">
            <img width="20px" height="17px" loading="lazy"
                src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
            <div>
                Đây không chỉ là bước thăm khám khi có dấu hiệu bất thường, mà còn là hoạt động y tế dự phòng quan trọng
                để theo dõi chức năng sinh dục, tầm soát bệnh lý và nhiều vấn đề tiềm ẩn khác.
            </div>
        </div>
        </section>

        <session class="expert">
            <h2 class="expert__title">
                LÍ DO NÊN KHÁM NAM KHOA
            </h2>
            <div class="expert__text">
                Phát hiện sớm:
            </div>
            <div class="expert__span">
                <img width="20px" height="17px" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                <div>
                    Vấn đề về sinh lý, viêm nhiễm… nếu được phát hiện sớm sẽ điều trị nhanh, ít tốn kém hơn.
                </div>
            </div>

            </section>

            <session class="expert">
                <div class="expert__text">
                    Ngừa biến chứng:
                </div>
                <div class="expert__span">
                    <img width="20px" height="17px" loading="lazy"
                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                    <div>
                        Một số bệnh nam khoa nếu bỏ qua có thể dẫn tới viêm nhiễm phức tạp, khó điều trị, suy giảm sinh
                        lí.
                    </div>
                </div>

            </session>

            <session class="expert">
                <div class="expert__text">
                    Bảo vệ khả năng sinh sản:
                </div>
                <div class="expert__span">
                    <img width="20px" height="17px" loading="lazy"
                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                    <div>
                        Khám và điều trị nam khoa hiệu quả giúp duy trì chất lượng tinh trùng, bảo vệ chức năng sinh
                        sản.
                    </div>
                </div>
            </session>

            <session class="expert">
                <div class="expert__text">
                    Cải thiện chất lượng cuộc sống:
                </div>
                <div class="expert__span">
                    <img width="20px" height="17px" loading="lazy"
                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                    <div>
                        Sức khỏe tốt giúp nam giới tự tin, giảm căng thẳng và duy trì phong độ trong công việc lẫn đời
                        sống cá nhân.
                    </div>
                </div>
            </session>

            <section class="expert expert__container">

                <img class="expert__img" width="100%" height="auto" loading="lazy"
                    src="<?php echo $local ?>/images/nam_khoa/banner/bacsi_kham.webp" alt="...">
            </section>
            <section class="treatment">
                <a aria-label="chat" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"
                    class="expert__chat">
                    <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/icons/chat_dakhoa.gif" alt="...">
                </a>
            </section>
            <section class="expert">
                <h2 class="expert__title">
                    BS. VÕ MINH NGUYỄN - Phòng Khám Nam Khoa Uy Tín Tại TPHCM
                </h2>
            </section>



            <session class="expert">
                <!-- <div class="expert__title">
            GIỚI THIỆU THÔNG TIN BÁC SĨ
        </div> -->
                <div class="expert__content">
                    Đi thăm khám Nam khoa hiệu quả và an toàn bắt buộc cần có bác sĩ trình độ cao,
                    chuyên môn tốt và nhiều kinh nghiệm thăm khám.
                </div>
                <img loading="lazy" width="100%" height="auto"
                    src="<?php echo $local ?>/images/nam_khoa/banner/bac_si_1.webp" alt="...">

            </session>
            <section class="expert">
                <div class="expert__title1">
                    BS. VÕ MINH NGUYỄN
                </div>
                <span>
                    Quá trình công tác
                </span>
            </section>
            <section class="expert expert_ul">
                <ul>
                    <li><strong>+ </strong> CÔNG TÁC TẠI KHỐI NGOẠI tại Bệnh viện Chuyên khoa Sainpaul Hà Nội</li>
                    <li><strong>+ </strong> CHUYÊN GIA Y TẾ TẠI NƯỚC NGOÀI</li>
                    <li><strong>+ </strong> TRƯỞNG KHOA NGOẠI BỆNH VIỆN Chuyên khoa TÂM TRÍ SÀI GÒN</li>
                </ul>
            </section>
            <section class="expert">
                <div class="expert__spacialty">
                    <div class="expert__spacialty-title">
                        Chuyên khoa :
                    </div>
                    <ul>
                        <li>- Sinh sản nam</li>
                        <li>- Bệnh ngoại tiết niệu</li>
                        <li>- Rối lọa tiết tố nam</li>
                        <li>- Cấp cưu nam khoa</li>
                    </ul>
                </div>
            </section>
            <session class="expert">
                <h2 class="expert__title">
                    TRƯỜNG HỢP CẦN ĐI KHÁM NAM KHOA
                </h2>
                <div class="expert__text">
                    Biểu hiệu bất thường:
                </div>
                <div class="expert__span">
                    <img width="20px" height="17px" loading="lazy"
                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                    <div>
                        Tiểu buốt, tiểu đêm nhiều lần, cương đau, nhanh xìu, giảm ham muốn, nổi mụn ở vùng kín…
                    </div>
                </div>
                <div class="expert__text">
                    Kiểm tra sức khỏe đều đặn:
                </div>
                <div class="expert__span">
                    <img width="20px" height="17px" loading="lazy"
                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                    <div>
                        Giải pháp bảo vệ sức khỏe an toàn. Từ 6 – 12 tháng/lần có thể phát hiện sớm những nguy cơ tiềm
                        ẩn.
                    </div>
                </div>
                <div class="expert__text">
                    Quan hệ tình dục không an toàn:
                </div>
                <div class="expert__span">
                    <img width="20px" height="17px" loading="lazy"
                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                    <div>
                        Việc không dùng bao cao su dễ lây nhiễm nhiều bệnh lý. Khám nam khoa giúp phát hiện và điều trị
                        kịp thời.
                    </div>
                </div>
                <div class="expert__text">
                    Chuẩn bị kết hôn hoặc sinh con:
                </div>
                <div class="expert__span">
                    <img width="20px" height="17px" loading="lazy"
                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                    <div>
                        Người sắp kết hôn, có kế hoạch sinh con nên khám nam khoa để đảm bảo chất lượng tinh trùng và
                        sức khỏe sinh sản.
                    </div>
                </div>

                </section>
                <section class="expert">

                    <a aria-label="chat" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"
                        class="expert__chat">
                        <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/icons/chat_dakhoa.gif" alt="...">
                    </a>
                </section>


                <section class="section__button">
                    <a aria-label="liên hệ" class="animated-button"
                        href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Đặt lịch khám ngay</a>
                </section>

                <session class="expert">
                    <h2 class="expert__title">
                        CẦN GHI NHỚ TRƯỚC KHI ĐI KHÁM NAM KHOA
                    </h2>
                    <div class="expert__text">
                        Kiêng quan hệ:
                    </div>
                    <div class="expert__span">
                        <img width="20px" height="17px" loading="lazy"
                            src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                        <div>
                            Từ 24 – 48h trước khi đi khám để kết quả xét nghiệm tinh dịch và khám tổng quát được chính
                            xác
                        </div>
                    </div>
                    <div class="expert__text">
                        Khám khi phù hợp:
                    </div>
                    <div class="expert__span">
                        <img width="20px" height="17px" loading="lazy"
                            src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                        <div>
                            Khám khi có đủ thời gian nghỉ ngơi, để trao đổi với bác sĩ được đầy đủ. Đặt lịch trước để
                            không phải chờ lâu.
                        </div>
                    </div>
                    <div class="expert__text">
                        Vệ sinh vùng kín sạch sẽ:
                    </div>
                    <div class="expert__span">
                        <img width="20px" height="17px" loading="lazy"
                            src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                        <div>
                            Vệ sinh sạch sẽ bằng nước ấm, không dùng xà phòng hoặc dung dịch tẩy rửa mạnh, tránh ảnh
                            hưởng kết quả.
                        </div>
                    </div>
                    <div class="expert__text">
                        Nắm rõ triệu chứng đang gặp:
                    </div>
                    <div class="expert__span">
                        <img width="20px" height="17px" loading="lazy"
                            src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                        <div>
                            Liệt kê các triệu chứng đang gặp để giúp bác sĩ có thể chẩn đoán chính xác và đưa ra hướng
                            điều trị phù hợp.
                        </div>
                    </div>
                    <div class="expert__text">
                        Mang theo kết quả lần khám trước:
                    </div>
                    <div class="expert__span">
                        <img width="20px" height="17px" loading="lazy"
                            src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                        <div>
                            Từng khám chữa nam khoa nơi khác, hãy mang theo bệnh án, đơn thuốc, kết quả siêu âm hoặc xét
                            nghiệm cũ.
                        </div>
                    </div>
                    <div class="expert__text">
                        Chuẩn bị tâm lý thoải mái, tránh e ngại:
                    </div>
                    <div class="expert__span">
                        <img width="20px" height="17px" loading="lazy"
                            src="<?php echo $local ?>/images/nam_khoa/icons/icon_next1.gif" alt="...">
                        <div>
                            Anh em cần trao đổi thẳng thắn khi đi khám. Qua đó, bác sĩ phát hiện sớm các nguy cơ và chỉ
                            định can thiệp kịp thời.
                        </div>
                    </div>
                    </section>


                    <section class="feedback">
                        <div class="feedback_body">
                            <div class="feedback_body-container">
                                <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/banner/feedback.webp"
                                    alt="...">
                                <div class="feedback_body-list">
                                    <div class="feedback_body-list-item activeFeedback">
                                        <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/banner/chat.webp"
                                            alt="...">
                                    </div>
                                    <div class="feedback_body-list-item ">
                                        <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/banner/chat1.webp"
                                            alt="...">
                                    </div>
                                </div>
                                <div class="index-feedbacks">
                                    <div class="feedback-item feedback-item-0 activeFeedback"></div>
                                    <div class="feedback-item feedback-item-1"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section__button">
                        <a aria-label="liên hệ" class="animated-button"
                            href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Liên hệ ngay</a>
                    </section>
                    <section class="service">
                        <div class="service__body">
                            <div class="service__body-item">
                                <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/icons/icon_bs.webp"
                                    alt="...">
                            </div>
                            <div class="service__body-item">
                                <div class="service__body-item-card">
                                    <img width="44px" height="44px" loading="lazy"
                                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_check.webp" alt="...">
                                    <div>
                                        Mức chi phí hợp lý, rõ ràng
                                    </div>
                                </div>
                                <div class="service__body-item-card">
                                    <img width="44px" height="44px" loading="lazy"
                                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_check.webp" alt="...">
                                    <div>
                                        Dịch vụ chuyên nghiệp
                                    </div>
                                </div>
                                <div class="service__body-item-card">
                                    <img width="44px" height="44px" loading="lazy"
                                        src="<?php echo $local ?>/images/nam_khoa/icons/icon_check.webp" alt="...">
                                    <div>
                                        Bảo mật thông tin
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="license">
                        <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/banner/giay_phep.webp" alt="...">
                    </section>
                    <section class="time">
                        <div class="ping-wrapper">
                            <div class="ping-border">
                                <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/banner/time.webp"
                                    alt="...">
                            </div>
                        </div>
                    </section>
                    <section class="contact">
                        <div class="contact__title">
                            LIÊN HỆ TƯ VẤN VÀ ĐẶT LỊCH KHÁM
                        </div>
                        <div class="contact__body">
                            <div>
                                <a aria-label="phone" href="tel:+0968063109">
                                    <strong>HOTLINE: </strong> <span>0968 063 109</span>
                                </a>
                            </div>
                            <div>
                                <a aria-label="phone"
                                    href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                                    <strong>ZALO: </strong> <span>0968 063 109</span>
                                </a>
                            </div>
                            <div>
                                <a aria-label="phone"
                                    href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                                    <strong>CHAT TRỰC TIẾP </strong>
                                </a>
                            </div>
                            <div>
                                <strong>ĐỊA CHỈ: </strong> <span>Số 360 đường An Dương Vương, Phường Chợ Quán, TP Hồ Chí
                                    Minh,
                                    Việt
                                    Nam</span>
                            </div>
                        </div>
                    </section>
                    <footer class="footer">
                        <img loading="lazy" src="<?php echo $local ?>/images/nam_khoa/banner/footer.webp" alt="...">
                        <div class="footer__body">
                            <div class="footer__body-top">
                                <a aria-label="left"
                                    href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                                <a aria-label="center"
                                    href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                                <a aria-label="right"
                                    href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                            </div>
                            <div class="footer__body-botom">
                                <a aria-label="bottom" href="tel:+0968063109"></a>
                            </div>
                        </div>
                    </footer>
                    <div class="footer_fixed">
                        <img style="width: 100%; height: auto;" loading="lazy"
                            src="<?php echo $local ?>/images/chuyen_de/users/footer_mobile.gif" alt="...">
                    </div>
                    <!-- <?php include_once 'layout/modalKhuyenMai.php' ?> -->

                    <script language="javascript"
                        src="https://npa.zoosnet.net/JS/LsJS.aspx?siteid=NPA46777247&float=1&lng=en">
                    </script>

                    <script defer>
                        const feedbacks = document.querySelectorAll('.feedback_body-list-item');
                        const listItems = document.querySelectorAll('.feedback-item');
                        let currentIndex = 0;

                        const showFeedback = (index) => {
                            feedbacks.forEach((feedback, idx) => {
                                feedback.classList.toggle('activeFeedback', idx === index);
                            });
                            listItems.forEach((listItem, idx) => {
                                listItem.classList.toggle('activeFeedback', idx === index);
                            });
                        };

                        const handleChangeSlideFeedback = () => {
                            currentIndex = (currentIndex + 1) % feedbacks.length;
                            showFeedback(currentIndex);
                        };

                        showFeedback(currentIndex); // Initialize the first feedback as active
                        setInterval(handleChangeSlideFeedback, 4000);
                    </script>
                    <script defer>
                        // Số lượng lớp ping cần tạo
                        const numberOfLayers = 10;
                        // Lấy phần tử chứa các lớp ping
                        const pingWrapper = document.querySelector('.ping-wrapper');
                        // Hàm tạo màu ngẫu nhiên tươi sáng
                        function getRandomBrightColor() {
                            // Sử dụng HSL để tạo màu với độ bão hòa và độ sáng cao
                            const hue = Math.floor(Math.random() * 360);
                            const saturation = 50;
                            const lightness = Math.floor(Math.random() * 21) + 20;
                            return `hsl(${hue}, ${saturation}%, ${lightness}%)`;
                        }

                        // Tạo các lớp ping
                        for (let i = 1; i <= numberOfLayers; i++) {
                            const pingLayer = document.createElement('div');
                            pingLayer.className = `ping-layer ping-layer${i}`;
                            pingLayer.style.width = `calc(100% + ${10 * i}px)`;
                            pingLayer.style.height = `calc(100% + ${10 * i}px)`;
                            pingLayer.style.border = '4px solid';
                            pingLayer.style.borderColor = getRandomBrightColor();
                            pingLayer.style.animationDelay = `${0.2 * (i - 0.6)}s`;
                            pingWrapper.appendChild(pingLayer);
                        }
                    </script>

</body>

</html>