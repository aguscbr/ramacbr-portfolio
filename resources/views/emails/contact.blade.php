<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: sans-serif;
            background: #f4f4f4;
            padding: 2rem;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            max-width: 520px;
            margin: 0 auto;
        }

        .label {
            font-size: 12px;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 4px;
        }

        .value {
            font-size: 15px;
            color: #111;
            margin-bottom: 1.5rem;
        }

        .message {
            background: #f9fafb;
            border-left: 3px solid #c8f04c;
            padding: 1rem;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2 style="margin-top:0; color:#0f1117;">Nuevo mensaje desde tu portfolio</h2>
        <div class="label">Nombre</div>
        <div class="value">{{ $senderName }}</div>
        <div class="label">Email</div>
        <div class="value"><a href="mailto:{{ $senderEmail }}">{{ $senderEmail }}</a></div>
        <div class="label">Mensaje</div>
        <div class="message">{{ $body }}</div>
    </div>
</body>

</html>
