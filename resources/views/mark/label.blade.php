<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$mark->book->name}} 60×30 мм</title>
    <style>
        @page {
            size: 60mm 30mm; /* Размер печатного листа */
            margin: 0; /* Без полей */
        }
        @media print {
            body {
                margin: 0;
                padding: 0;
            }
            .label {
                width: 60mm;
                height: 30mm;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                text-align: center;
                font-size: 14px;
                font-family: Arial, sans-serif;
                /*border: 1px solid black;  Убери, если не нужен контур */
            }
            .no-print {
                display: none;
            }
        }
        .label {
            width: 60mm;
            height: 30mm;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 14px;
            font-family: Arial, sans-serif;
            /* border: 1px solid black; */
        }
        .info{
            margin-left:2px;
            text-wrap: wrap;
        }
        
    </style>
</head>
<body>




<div class="label">
    <div class="info">
        
        {{$mark->book->name}}
        <br>
        Mahad
    </div>
    <div class="info">
        {!! QrCode::size(80)->generate($mark->id) !!}

    </div>
    
   
</div>
<script>
    document.addEventListener('load',window.print())
</script>
</body>
</html>
