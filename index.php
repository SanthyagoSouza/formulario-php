<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Colaborador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
        }

        .form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
        }

        input[type="text"]:required:invalid,
        input[type="date"]:required:invalid,
        select:required:invalid {
            border-color: red;
        }

        input[type="text"]:required:valid,
        input[type="date"]:required:valid,
        select:required:valid {
            border-color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Avaliação de Colaborador</h2>
        <div class="form">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>
            <label for="setor">Setor:</label>
            <input type="text" id="setor" name="setor" required>
            <label for="funcao">Função:</label>
            <input type="text" id="funcao" name="funcao" required>
            <label for="tipo">Tipo de Avaliação:</label>
            <select id="tipo" name="tipo">
                <option value="experiencia">Experiência</option>
                <option value="mudanca_cargo">Mudança de Cargo</option>
                <option value="periodica">Periódica</option>
            </select>
        </div>
    </div>
</body>
</html>
