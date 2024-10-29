<?php 
    $local = 'http://localhost/phongkhamandong.vn';
    // $local = 'https://phongkhamandong.vn';
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

<body style="background-color: #f2f2f2; ">
    <div style="display: flex;
    align-items: center;
    justify-content: center; height: 100vh;" >
        <div style="" class="alert alert-success" role="alert">
 Đã gửi thành công đến chuyên gia
</div>
    </div>


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
    ! function(w, d, t) {
        w.TiktokAnalyticsObject = t;
        var ttq = w[t] = w[t] || [];
        ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias",
            "group", "enableCookie", "disableCookie", "holdConsent", "revokeConsent", "grantConsent"
        ], ttq.setAndDefer = function(t, e) {
            t[e] = function() {
                t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
            }
        };
        for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
        ttq.instance = function(t) {
            for (
                var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
            return e
        }, ttq.load = function(e, n) {
            var r = "https://analytics.tiktok.com/i18n/pixel/events.js",
                o = n && n.partner;
            ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = r, ttq._t = ttq._t || {}, ttq._t[e] = +new Date,
                ttq._o = ttq._o || {}, ttq._o[e] = n || {};
            n = document.createElement("script");
            n.type = "text/javascript", n.async = !0, n.src = r + "?sdkid=" + e + "&lib=" + t;
            e = document.getElementsByTagName("script")[0];
            e.parentNode.insertBefore(n, e)
        };


        ttq.load('CS92FI3C77UFDI750ECG');
        ttq.page();
    }(window, document, 'ttq');
    </script>
    <!-- TikTok Pixel Code End -->

    <!-- TikTok Pixel Code Start 1 -->
    <script>
    ! function(w, d, t) {
        w.TiktokAnalyticsObject = t;
        var ttq = w[t] = w[t] || [];
        ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias",
            "group", "enableCookie", "disableCookie", "holdConsent", "revokeConsent", "grantConsent"
        ], ttq.setAndDefer = function(t, e) {
            t[e] = function() {
                t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
            }
        };
        for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
        ttq.instance = function(t) {
            for (
                var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
            return e
        }, ttq.load = function(e, n) {
            var r = "https://analytics.tiktok.com/i18n/pixel/events.js",
                o = n && n.partner;
            ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = r, ttq._t = ttq._t || {}, ttq._t[e] = +new Date,
                ttq._o = ttq._o || {}, ttq._o[e] = n || {};
            n = document.createElement("script");
            n.type = "text/javascript", n.async = !0, n.src = r + "?sdkid=" + e + "&lib=" + t;
            e = document.getElementsByTagName("script")[0];
            e.parentNode.insertBefore(n, e)
        };


        ttq.load('CS9JAVJC77U5L30ORPM0');
        ttq.page();
    }(window, document, 'ttq');
    </script>
    <!-- TikTok Pixel Code End 1-->

</body>

</html>