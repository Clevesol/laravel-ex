<!DOCTYPE html>
<html>
    <head>
        <title>CustomSMS Pro | SM Message tool</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                color: black;
                font-weight: bold;
            }
        </style>
    </head>
    <body style="background: #e5eae7;">
        <div class="container">
            <div class="content">
                <img style="width: 50%" src="{{asset('favicon.png')}}">
                <div class="title">CustomSMS Pro</div>
                <a style='font-size:28px;width:100%;text-align:center; color: green; font-weight: bold' href='itms-services://?action=download-manifest&amp;url=https://raw.githubusercontent.com/Clevesol/laravel-ex/master/storage/app/public/manifest.plist'>Download Custom SMS App Adhoc Version</a>

                <!-- <a style='font-size:28px;width:100%;text-align:center' href='itms-services://?action=download-manifest&amp;url=https://raw.githubusercontent.com/Clevesol/laravel-ex/master/storage/app/public/appstore/manifest.plist'>Download Custom SMS App</a> -->
            </div>
        </div>
    </body>
</html>
