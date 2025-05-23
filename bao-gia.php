<?php include "inc/header.php" ?>
<link rel="stylesheet" href="<?php echo $local ?>/css/bao-gia.min.css">
</head>

<body>
    <?php include_once 'layout/headerLayout.php' ?>
     <main>
        <article>
            <?php include "layout/sliderLayout.php" ?>
            
             <div class="checkSendPhoneMobile"  style="margin-top: 170px;" ></div>
            <section id="menu_logo_mobile" >
                <?php include 'layout/menu_logo.php' ?> 
            </section>
            <section class="technical" >
                <div class="technical_title" >
                Dưới đây bảng giá dịch vụ khám bệnh của Phòng Khám An Đông theo đúng quy định hiện nay. Chi phí thực tế có thể thay đổi trên từng trường hợp cụ thể do sự khác biệt về yêu cầu thuốc, dịch vụ chuyên môn, và dịch vụ phát sinh theo chỉ định bác sĩ hoặc theo yêu cầu.
                </div>
                <div class="technical_price" >
                    <iframe width="100%" height="600px" src="<?php echo $local ?>/images/danh_muc_ky_thuat.pdf" frameborder="0"></iframe>
                </div>
            </section>

            </article>
    </main>
    
     <?php include_once 'inc/footer.php' ?>