<?php
ob_start();
session_start();
include 'lib/session.php';
Session::init();
?>


<?php
    include_once 'classes/bai_viet.php';
    include_once 'classes/benh.php';

    spl_autoload_register(function ($className) {
        include_once "classes/" . $className . ".php";
    });
    $dbReadStarTime = hrtime(true);

    $bai_viet = new post();
    $benh = new Benh();

    $dbReadEndTime = hrtime(true);
    $dbReadTotalTime = ($dbReadEndTime - $dbReadStarTime) / 1e+6;
?>

<?php
 header("Timing-Allow-Origin: *");
 header("Cache-Control: public, max-age=31536000");
 header("Cache-Control: private, no-cache");
 header('Server-Timing: db;desc="Database";dur=' . $dbReadTotalTime);

// $local = 'http://localhost/_andong/phongkhamandong.vn/';
$local = 'https://phongkhamandong.vn';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Phòng khám chuyên khoa chuyên điều trị bệnh ngoại khoa, da liễu uy tính tại thành phố Hồ Chí Minh">
    <title>Phòng khám chuyên khoa An Đông</title>
    <link rel="icon" href="<?php echo $local ?>/images/icons/icon_logo.webp" type="image/x-icon">
    <link rel="preload" href="<?php echo $local ?>/css/index.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>
    <link rel="preload" href="css/toastr.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>
    
    
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
        <link rel="stylesheet" href="<?php echo $local ?>/css/index.min.css">
        <link rel="stylesheet" href="<?php echo $local ?>/css/toastr.min.css">
    </noscript>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            function updateHeaderStylesheet() {
                // Xóa các stylesheet cũ nếu có
                const existingMobile = document.querySelectorAll('link[id^="mobile-"]');
                const existingDesktop = document.querySelectorAll('link[id^="desktop-"]');
                existingMobile.forEach(mobile => mobile.remove());
                existingDesktop.forEach(desktop => desktop.remove());

                // Thêm stylesheet mới dựa trên kích thước cửa sổ
                if (window.innerWidth < 1000) {
                    const mobileLink = [
                        {
                            href: 'css/header_mobile.min.css',
                            id: 'mobile-0'
                        },
                        {
                            href: 'css/foooter_mobile.min.css',
                            id: 'mobile-1'
                        },

                    ];
                    mobileLink.forEach(({
                        href,
                        id
                    }) => {
                        const link = document.createElement('link');
                        link.rel = 'stylesheet';
                        link.href = href;
                        link.id = id;
                        document.head.appendChild(link);
                    });

                } else {
                    const desktopLink = [
                        {
                            href: 'css/header.min.css',
                            id: 'desktop-0'
                        },
                        {
                            href: 'css/slider.min.css',
                            id: 'desktop-1'
                        },
                        {
                            href: 'css/footerPC.min.css',
                            id: 'desktop-2'
                        },

                    ];
                    desktopLink.forEach(({
                        href,
                        id
                    }) => {
                        const link = document.createElement('link');
                        link.rel = 'stylesheet';
                        link.href = href;
                        link.id = id;
                        document.head.appendChild(link);
                    });
                }
            }

            updateHeaderStylesheet();

          

            
            window.addEventListener('resize', () => {
                console.log('Window resized to:', window.innerWidth);
                updateHeaderStylesheet();
              
            });
        });
    </script>

