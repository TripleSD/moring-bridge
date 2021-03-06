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
    Установок за все время (production): {{ $summaryProductionCopiesCount }}
</div>
<div>
    Установок за все время (local): {{ $summaryLocalCopiesCount }}
</div>
<div>
    Установок за все время (development): {{ $summaryDevelopmentCopiesCount }}
</div>
<div>
    Установок за все время (test): {{ $summaryTestCopiesCount }}
</div>
<div>
    Активных копий за сутки: {{ $activeCopiesCount }}
</div>
<div>
    Текущая версия: {{ $currentVersion }}
</div>
</body>
</html>
