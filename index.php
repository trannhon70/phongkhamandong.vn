<?php
ob_start("ob_gzhandler");
header("Timing-Allow-Origin: *");
header("Cache-Control: public, max-age=31536000, must-revalidate");

// $local = 'http://localhost/_andong/phongkhamandong.vn';
$local = 'https://phongkhamandong.vn';
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
    <link rel="preload" href="css/chuyen-de-cat-bao-quy-dau.min.css" as="style"
        onload='this.onload=null,this.rel="stylesheet"'>
    <noscript>
        <link rel="stylesheet" href="css/chuyen-de-cat-bao-quy-dau.min.css">
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
    <main>
        <section style="margin-top: 50px;">
            <a aria-label="liên hệ" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                <img style="width: 100%; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/chuyen_de/users/banner.webp" alt="...">
            </a>
            <div>
                <img style="width: 100%; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/chuyen_de/users/ban_co_biet_1.webp" alt="...">
            </div>
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
        <section class="title_h2">
            <h2>Trường hợp cần cắt bao quy đầu <span></span></h2>

        </section>
        <section style="margin-top: 10px;">
            <div class="glans">
                <div class="glans_left">
                    <img style="width: 30px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/quy_dau_1.webp" alt="...">
                </div>
                <div class="glans_right">
                    <div class="glans_right_title">dài bao quy đầu</div>
                    <div class="glans_right_text">Bao trùm toàn bộ khó vệ sinh</div>
                </div>
            </div>
            <div class="glans">
                <div class="glans_left">
                    <img style="width: 30px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/quy_dau_2.webp" alt="...">
                </div>
                <div class="glans_right">
                    <div class="glans_right_title">hẹp quy đầu</div>
                    <div class="glans_right_text">Gây khó tiểu, dễ viêm nhiễm</div>
                </div>
            </div>
            <div class="glans">
                <div class="glans_left">
                    <img style="width: 30px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/quy_dau_3.webp" alt="...">
                </div>
                <div class="glans_right">
                    <div class="glans_right_title">nghẹt bao quy đầu</div>
                    <div class="glans_right_text">Nguy cơ hoại tử, cần xử lý ngay</div>
                </div>
            </div>
            <div class="glans">
                <div class="glans_left">
                    <img style="width: 30px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/quy_dau_4.webp" alt="...">
                </div>
                <div class="glans_right">
                    <div class="glans_right_title">viêm nhiễm tái phát</div>
                    <div class="glans_right_text">Xuất tinh sớm, ảnh hưởng sinh lý</div>
                </div>
            </div>
        </section>
        <section style="margin-top: 10px;">
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/users/ban_co_biet_2.webp" alt="...">
        </section>
        <section class="title_h2">
            <h2>các phương pháp cắt bao quy đầu <span></span></h2>
        </section>
        <section class="method">
            <div class="method_card">
                <div class="method_card_absolute">
                    <img style="width: 50px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/icon_keo.webp" alt="...">
                </div>
                <div class="method_card_title">truyền thống</div>
                <div class="method_card_text">Chi phí thấp, nhưng gây đau, lâu hồi phục.</div>
            </div>
            <div class="method_card">
                <div style="background-color: #00baff;" class="method_card_absolute">
                    <img style="width: 50px; height: 40px;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/icon_laser.webp" alt="...">
                </div>
                <div class="method_card_title">bằng laser</div>
                <div class="method_card_text">ít chảy máu, thẩm mỹ, lành nhanh hơn.</div>
            </div>
        </section>
        <section class="title_h2">
            <h2>cắt bao quy đầu bao nhiêu tiền? <span></span></h2>
        </section>
        <section class="expense">
            <div class="expense_title">
                Chi phí cắt bao quy phụ thuộc vào?
            </div>
            <div class="expense_body">
                <div class="expense_body_title">
                    <strong>Tình trạng bao quy đầu: </strong>Dài hẹp, hay tình trạng viêm nhiễm
                </div>
                <div style="margin-top: 10px;" class="expense_body_title">
                    <strong>Phương pháp lựa chọn: </strong>Truyền thống, laser, xâm lấn tối thiểu
                </div>
                <div style="margin-top: 10px;" class="expense_body_title">
                    <strong>Cơ sở thực hiện: </strong>Uy tín, bác sĩ chuyên khoa, trang thiết bị hiện đại
                </div>
            </div>
        </section>
        <a aria-label="liên hệ" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"
            style="margin-top: 10px; display: block;">
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/users/banner_1.webp" alt="...">
        </a>
        <section class="title_h2">
            <h2>trường hợp cần cắt bao quy đầu <span></span></h2>
        </section>
        <section>
            <div class="expense_body">
                <div class="expense_body_title">
                    Cắt bao quy đầu ở độ tuổi nào là tốt nhất? <br />
                    Đây là câu hỏi nhiều phụ huynh và nam giới quan tâm!
                </div>

            </div>
        </section>
        <section style="margin-top: 10px;">
            <div class="glans">
                <div class="glans_left">
                    <img style="width: 50px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/icon_user_1.webp" alt="...">
                </div>
                <div class="glans_right">
                    <div style="text-transform: none;" class="glans_right_title">Trẻ em từ 7 đến 12 tuổi</div>
                    <div class="glans_right_text">Khi bao quy chưa tự tuột xuống</div>
                </div>
            </div>
            <div class="glans">
                <div style="background-color: #00bbff;" class="glans_left">
                    <img style="width: 50px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/icon_user_2.webp" alt="...">
                </div>
                <div class="glans_right">
                    <div style="text-transform: none;" class="glans_right_title">Thanh thiếu niên 13 đến 18 tuổi</div>
                    <div class="glans_right_text">Tránh viêm, ảnh hưởng tuổi dậy thì</div>
                </div>
            </div>
            <div class="glans">
                <div style="background-color: #f7a43a;" class="glans_left">
                    <img style="width: 50px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/icon_user_3.webp" alt="...">
                </div>
                <div class="glans_right">
                    <div style="text-transform: none;" class="glans_right_title">Người trưởng thành</div>
                    <div class="glans_right_text">Viêm, đau, ảnh hưởng đến quan hệ</div>
                </div>
            </div>
        </section>
        <section style="margin-top: 10px;">
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/users/ban_co_biet_3.webp" alt="...">
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
        <section class="title_h2">
            <h2>phòng khám cắt bao quy đầu BS võ minh nguyễn <span></span></h2>
        </section>
        <section style="margin-top: 10px;">
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/users/ban_co_biet_4.webp" alt="...">
        </section>
        <section class="expense">
            <div class="expense_body">
                <div class="expense_body_title">
                    Bác sĩ Võ Minh Nguyễn trực tiếp thăm khám và điều trị
                </div>
            </div>
        </section>
        <section class="method">
            <div class="method_card">
                <div class="method_card_absolute">
                    <img style="width: 35px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/icon_file.webp" alt="...">
                </div>
                <div class="method_card_title">quy trình</div>
                <div class="method_card_text">Hiện đại, xâm lấn tối thiểu, giảm đau, hạn chế sẹo</div>
            </div>
            <div class="method_card">
                <div style="background-color: #00baff;" class="method_card_absolute">
                    <img style="width: 35px; height: auto;" loading="lazy"
                        src="<?php echo $local ?>/images/chuyen_de/icons/icon_time.webp" alt="...">
                </div>
                <div class="method_card_title">thời gian</div>
                <div class="method_card_text">Nhanh chóng, ít chảy máu, phục hồi sớm, thẩm mỹ</div>
            </div>
        </section>
        <section class="note">
            <div class="note_1">
                <img style="width: 30px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/chuyen_de/icons/icon_celendar.webp" alt="...">
                Thời gian làm việc: <strong>8:00 - 20:00</strong>
            </div>
            <div class="note_1">
                (Cả cuối tuần và lễ)
            </div>
            <div class="note_1">
                <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" class="note_1_button">Đặt lịch
                    tư vấn 24/7</a>
            </div>
            <div class="note_1">
                <img style="width: 25px; height: auto;" loading="lazy"
                    src="<?php echo $local ?>/images/chuyen_de/icons/icon_security.webp" alt="...">
                Thông tin các nhan và hồ sơ bệnh án
            </div>
            <div class="note_1">
                được lưu giữ an toàn, bảo mật.
            </div>

        </section>
        <section style="margin-top: 10px;">
            <img style="width: 100%; height: auto;" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/users/giay_phep.webp" alt="...">
        </section>
    </main>
    <footer class="footer">
        <div class="footer_title">
            <img width="60" height="auto" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/icons/icon_logo.webp" alt="...">
            <div class="footer_title_right">
                <h5>AN ĐÔNG</h5>
                <span>PHÒNG KHÁM CHUYÊN KHOA </span>
            </div>
        </div>
        <div class="footer_item">
            <img width="25" height="auto" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/icons/icon_location.webp" alt="...">
            Số 360 đường An Dương Vương, Phường Chợ Quán, TP Hồ Chí Minh, Việt Nam
        </div>
        <a href="tel:+0968063109" class="footer_item">
            <img width="20" height="auto" loading="lazy"
                src="<?php echo $local ?>/images/chuyen_de/icons/icon_phone.webp" alt="...">
            Hotline: 0968 063 109
        </a>
    </footer>
    <div class="footer_fixed">
        <img style="width: 100%; height: auto;" loading="lazy"
            src="<?php echo $local ?>/images/chuyen_de/users/footer_mobile.gif" alt="...">
    </div>

    <script language="javascript" src="https://npa.zoosnet.net/JS/LsJS.aspx?siteid=NPA46777247&float=1&lng=en"></script>
</body>

</html>