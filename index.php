<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Técnico - Azure & PHP</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #0078d4;
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }
        header h2 {
            font-size: 18px;
            font-weight: 600;
        }
        .sites-container {
            display: flex;
            flex: 1;
            gap: 12px;
            padding: 12px;
            background-color: #2d2d2d;
        }
        .site-card {
            flex: 1;
            display: flex;
            flex-direction: column;
            border: 2px solid #0078d4;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
        }
        .site-title {
            background-color: #f3f3f3;
            color: #333;
            padding: 10px 15px;
            font-weight: bold;
            font-size: 14px;
            border-bottom: 1px solid #ccc;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>

    <header>
        <h2> Manual de Procedimentos — Deploy de PHP no Azure App Service</h2>
    </header>

    <div class="sites-container">
        <!-- LADO ESQUERDO: CARREGA O SITE 1 -->
        <div class="site-card">
            <div class="site-title">Etapa 1: Versionamento e Estrutura (/site1)</div>
            <iframe src="./site1/index.php"></iframe>
        </div>

        <!-- LADO DIREITO: CARREGA O SITE 2 -->
        <div class="site-card">
            <div class="site-title">Etapa 2: Publicação na Nuvem (/site2)</div>
            <iframe src="./site2/index.php"></iframe>
        </div>
    </div>

</body>
</html>