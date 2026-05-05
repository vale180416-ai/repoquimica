<?php
$historia = [
    [
        "titulo" => "Alquimia (Edad Antigua)",
        "descripcion" => "La alquimia fue una práctica antigua que combinaba filosofía, misticismo y experimentación. Su objetivo principal era transformar metales comunes en oro y encontrar el elixir de la vida. Aunque no era una ciencia formal, sentó las bases de la química."
    ],
    [
        "titulo" => "Edad Media",
        "descripcion" => "Durante la Edad Media, la alquimia avanzó especialmente en el mundo árabe. Se desarrollaron técnicas como la destilación, filtración y sublimación, fundamentales en la química actual."
    ],
    [
        "titulo" => "Revolución Científica (Siglo XVII - XVIII)",
        "descripcion" => "La química comenzó a convertirse en ciencia gracias a científicos como Robert Boyle y Antoine Lavoisier, quien estableció la ley de conservación de la masa y ayudó a eliminar ideas erróneas como la teoría del flogisto."
    ],
    [
        "titulo" => "Siglo XIX",
        "descripcion" => "Se desarrolló la química moderna con grandes avances como la teoría atómica de John Dalton y la tabla periódica creada por Dmitri Mendeléyev, que organiza los elementos químicos."
    ],
    [
        "titulo" => "Siglo XX",
        "descripcion" => "Se descubrieron partículas subatómicas (electrones, protones y neutrones). Se desarrollaron áreas como la química orgánica, bioquímica y química nuclear, impulsando avances en medicina e industria."
    ],
    [
        "titulo" => "Actualidad",
        "descripcion" => "La química juega un papel clave en la vida diaria: desarrollo de medicamentos, energías limpias, materiales inteligentes y cuidado del medio ambiente."
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historia de la Química</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
            color: #fff;
        }

        header {
            text-align: center;
            padding: 50px 20px;
            background: rgba(0,0,0,0.4);
        }

        header h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2em;
            opacity: 0.8;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            padding: 40px;
        }

        .card {
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .card:hover {
            transform: translateY(-10px);
            background: rgba(255,255,255,0.2);
        }

        .card h2 {
            color: #ffd700;
            margin-bottom: 10px;
        }

        .card p {
            line-height: 1.5;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0,0,0,0.4);
            margin-top: 20px;
        }
    </style>
</head>

<body>

<header>
    <h1>Historia de la Química</h1>
    <p>Desde la alquimia hasta la ciencia moderna</p>
</header>

<div class="container">
    <?php foreach ($historia as $etapa): ?>
        <div class="card">
            <h2><?php echo $etapa["titulo"]; ?></h2>
            <p><?php echo $etapa["descripcion"]; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<footer>
    <p>Proyecto educativo en PHP - 2026</p>
</footer>

</body>
</html>