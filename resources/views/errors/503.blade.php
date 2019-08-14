<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
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
                font-size: 72px;
                margin-bottom: 40px;
            }

            strong {
                font-weight: 600;
                font-family: "Arial";
            }

            span {
                color: #ff8383;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Be right back.</div>
                <strong>
                    {!! $exception->getMessage() != null ? "<span>{$exception->getMessage()}</span>,<br />" : '' !!}
                    {!! $exception->willBeAvailableAt != null ? 'ETA: <time>'.\Carbon\Carbon::createFromTimestamp(strtotime($exception->willBeAvailableAt))->format('F d, Y, H:i (A)').'</time>' : '' !!}
                </strong>
            </div>
        </div>
    </body>
</html>
