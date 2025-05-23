<?php include "inc/header.php" ?>
<link rel="stylesheet" href="<?php echo $local ?>/css/doi-ngu-bac-si.min.css">
</head>

<body>
    <?php include_once 'layout/headerLayout.php' ?>
    <main>
        <article>
            <?php include "layout/sliderLayout.php" ?>

            <div class="checkSendPhoneMobile" style="margin-top: 170px;"></div>
            <section id="menu_logo_mobile">
                <?php include 'layout/menu_logo.php' ?>
            </section>
            <section class="team">
                 <div class="team__title">
                        Phòng Khám Chuyên khoa An Đông luôn chú trọng tuyển dụng và đào tạo những bác sĩ giàu trình độ chuyên môn và tay nghề cao trong khám và điều trị bệnh để người bệnh yên tâm khi khám chữa bệnh tại đây.
                    </div>
                <div class="team__container">
                    
                    <div class="team__bs">
                         khoa xét nghiệm
                    </div>
                    <div class="team__text">
                        BS phụ trách: Lê Phương Thảo 
                    </div>
                    <div class="team__img">
                        <img loading="lazy" src="<?php echo $local ?>/images/users/le_phuong_thao-xet_nghiem.webp" alt="...">
                    </div>
                </div>

                <div class="team__container">
                   
                    <div class="team__bs">
                         khoa siêu âm
                    </div>
                    <div class="team__text">
                    BS phụ trách: Lưu Minh Phúc
                    </div>
                    <div class="team__img">
                        <img loading="lazy" src="<?php echo $local ?>/images/users/luu_minh_phuc-sieu_am.webp" alt="...">
                    </div>
                </div>

                <div class="team__container">
                    
                    <div class="team__bs">
                         khoa da liễu
                    </div>
                    <div class="team__text">
                        BS phụ trách: Trần Thị Mai Hồng 
                    </div>
                    <div class="team__img">
                        <img loading="lazy" src="<?php echo $local ?>/images/users/tran_thi_mai_hong-da_lieu.webp" alt="...">
                    </div>
                </div>

                <div class="team__container">
                    
                    <div class="team__bs">
                         khoa khoa ngoại
                    </div>
                    <div class="team__text">
                        BS phụ trách: Võ Minh Nguyễn 
                    </div>
                    <div class="team__img">
                        <img loading="lazy" src="<?php echo $local ?>/images/users/vo_minh_nguyen-khoa_ngoai.webp" alt="...">
                    </div>
                </div>
            </section>

        </article>
    </main>

    <?php include_once 'inc/footer.php' ?>