<?php 
    // $local = 'http://localhost/phongkhamandong.vn';
    $local = 'https://phongkhamandong.vn';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Phòng khám</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $local ?>/css/toastr.min.css" as="style"
        onload='this.onload=null,this.rel="stylesheet"'>
</head>

<body style="background-color: #f2f2f2;">

    <div style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100vh; ">
        <form id="form"
            style="width: 500px; margin: 0 auto; background-color: #b0b9a8; padding: 10px 20px; border-radius: 10px; ">
            <div style="text-align: center; font-size: 20px; font-weight: 600; ">Form điền thông tin</div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Họ và tên</label>
                <input name="hoten" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Nhập họ và tên">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Số điện thoại</label>
                <input name="sdt" type="number" class="form-control" id="exampleFormControlInput1"
                    placeholder="Nhập Số điện thoại">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Chọn bệnh</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Bao quy đầu</option>
                    <option>Sinh lý</option>
                    <option>Bệnh xã hội</option>
                    <option>Gói khám 190k</option>
                    <option>Viêm bao quy</option>
                </select>
            </div>
            <div style="display: flex; align-items: center; justify-content: center;">
                <button type="button" class="btn btn-primary">Gửi thông tin</button>
            </div>
        </form>
    </div>

    <script>
    function getCurrentVietnamTimestamp() {
        const utcOffset = 7 * 60 * 60 * 1000; // UTC+7 in milliseconds
        const localTime = Date.now() + utcOffset; // Adjust for Vietnam time
        return Math.floor(localTime / 1000); // Convert to Unix timestamp
    }
    document.querySelector('button').addEventListener('click', function() {
        // Lấy giá trị từ các trường trong form
        var hoten = document.getElementById('exampleFormControlInput1').value;
        var sdt = document.querySelector('input[name="sdt"]').value;
        var trieuchung = document.getElementById('exampleFormControlSelect1').value;

        let formData = {
            hoten: hoten,
            sdt: sdt,
            trieuchung: trieuchung,
            ngaykham: getCurrentVietnamTimestamp()
        };


        // if (formatPhoneNumber(formData.sdt)) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $local ?>/api/tu-van/creare-form-tikok.php",
        true); // PHP local variable
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    toastr.success(response.message);

                    // Clear form fields after submission
                    document.getElementById('form').reset();
                    window.location.href = `thong-bao.php`;

                } else {
                    toastr.error(response.message);
                }
            }
        };

        xhr.send(JSON.stringify(formData));
        // } else {
        //     toastr.error("Số điện thoại không hợp lệ! Vui lòng nhập số điện thoại đúng 10 số.");
        // }
    });
    </script>
    <script src="<?php echo $local ?>/js/toastr.min.js" defer></script>
    <script src="<?php echo $local ?>/js/jquery-3.7.1.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- TikTok Pixel Code Start -->
<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};


  ttq.load('CS92FI3C77UFDI750ECG');
  ttq.page();
}(window, document, 'ttq');
</script>
<!-- TikTok Pixel Code End -->

<!-- TikTok Pixel Code Start 1 -->
<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};


  ttq.load('CS9JAVJC77U5L30ORPM0');
  ttq.page();
}(window, document, 'ttq');
</script>
<!-- TikTok Pixel Code End 1-->

</body>

</html>