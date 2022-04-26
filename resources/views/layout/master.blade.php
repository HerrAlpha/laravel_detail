<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>European Used Cars - @yield('title')</title>
    <script defer src="/js/bootstrap.bundle.js"></script>
    <script defer src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{url('assets/css/styles.css')}}" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"crossorigin="anonymous"/>
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"p crossorigin="anonymous"></script>
    <style>
        body{
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        font-weight: semibold;
    }
    </style>
</head>
<body>
    <div class="container" style="padding: 2%">
       @yield('content')
    </div>
    
</body>
<footer>
    <p style="text-align: center"> Copyright &copy; 2022-<script>document.write(new Date().getFullYear())</script> MAR Used Car All Rights Reserved | Collaboration of MAR Used Car and MAR Media Under MAR Group Company</p>
</footer>
</html>