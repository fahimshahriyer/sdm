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
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Error 404: Page not found.</div>
        @if(Auth::user()->type == 'admin')
            <a href="{{ route('adminDashboard') }}">Go Home</a>
        @else
            <a href="{{ route('studentDashboard') }}">Go Home</a>
        @endif
    </div>
</div>
</body>
</html>