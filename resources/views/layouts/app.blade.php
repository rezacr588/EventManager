<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Community Event Management') }}</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="/css/bootstrap-timepicker.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <script src="/js/bootstrap.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/bootstrap-timepicker.js"></script>

    <script>
        $(function () {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });

            $('.timepicker').timepicker({
                showInputs: false
            });
        });
    </script>
</body>
</html>
