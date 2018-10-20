<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src="{{asset('assets/imgs/sms.png')}}">
                <div class="title">CustomSMS Pro</div>
                <a style='font-size:28px;width:100%;text-align:center' href='itms-services://?action=download-manifest&amp;url=https://raw.githubusercontent.com/Clevesol/laravel-ex/master/storage/app/public/manifest.plist'>Download Custom SMS App Adhoc Version</a>

                <a style='font-size:28px;width:100%;text-align:center' href='itms-services://?action=download-manifest&amp;url=https://raw.githubusercontent.com/Clevesol/laravel-ex/master/storage/app/public/appstore/manifest.plist'>Download Custom SMS App</a>
            </div>
        </div>
    </body>
</html>
