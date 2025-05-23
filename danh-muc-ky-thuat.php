<?php include "inc/header.php" ?>
<link rel="stylesheet" href="<?php echo $local ?>/css/danh-muc-ky-thuat.min.css">
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
                   1. Danh mục Kỹ Thuật Ngoại Khoa
                </div>
                <div class="technical_tb" >
                    <iframe width="100%" height="600px" src="<?php echo $local ?>/images/kythuat/ngoai_khoa.pdf" frameborder="0"></iframe>
                </div>

                <div class="technical_title" >
                   2. Danh mục Kỹ Thuật Da Liễu
                </div>
                <div class="technical_tb" >
                    <iframe width="100%" height="600px" src="<?php echo $local ?>/images/kythuat/da_lieu.pdf" frameborder="0"></iframe>
                </div>
            </section>

            </article>
    </main>
    
     <?php include_once 'inc/footer.php' ?>