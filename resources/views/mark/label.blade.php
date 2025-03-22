<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Печать этикеток 60×40 мм</title>
    <style>
        @page {
            size: 60mm 40mm; /* Размер печатного листа */
            margin: 0; /* Без полей */
        }
        @media print {
            body {
                margin: 0;
                padding: 0;
            }
            .label {
                width: 60mm;
                height: 40mm;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                font-size: 14px;
                font-family: Arial, sans-serif;
                border: 1px solid black; /* Убери, если не нужен контур */
            }
            .no-print {
                display: none;
            }
        }
        .label {
            width: 60mm;
            height: 40mm;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 14px;
            font-family: Arial, sans-serif;
            border: 1px solid black;
        }
    </style>
</head>
<body>




<div class="label">
    {{$mark->book->name}}<br><br>
    {!! QrCode::size(80)->generate($mark->id) !!}
    <br>
    Mahad
   
</div>

</body>
</html>
