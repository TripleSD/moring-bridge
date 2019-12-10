<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MoringBridge</title>
    </head>
    <body>
        <div>
            Запросов всего: {{ $summaryCount }}
        </div>
        <div>
            Запросов за сутки: {{ $summaryDailyCount }}
        </div>
        <div>
            Установок за все время: {{ $summaryCopiesCount }}
        </div>
        <div>
            Активных копий за сутки: {{ $activeCopiesCount }}
        </div>
    </body>
</html>
