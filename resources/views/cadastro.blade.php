<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/cadastro/cadastro.css">
    <title>Login/Cadastro</title>
</head>
<body>
    <div id="containerForm" class="containerForm">
        <div id="avatarsContainer" class="avatarsContainer">
            <img class="imgAvatar" src="../images/maleTrainer.png">
            <img class="imgAvatar" src="../images/femaleTrainer.png">
        </div>
        <form id="form" action="register" class="form" method="POST">
            @csrf
            <!-- Nome do usuário -->
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username" required>
            <!-- Regiões do personagem -->
            <label for="region">Região:</label>
            <input list="regions" type="text" name="region" id="region" required>
            <datalist id="regions">
                <option value="Kanto"></option>
                <option value="Johto"></option>
                <option value="Hoenn"></option>
                <option value="Sinnoh"></option>
                <option value="Unova"></option>
                <option value="Kalos"></option>
                <option value="Alola"></option>
                <option value="Galar"></option>
            </datalist>
            <!-- Idade -->
            <label for="age">Idade:</label>
            <input type="number" min="1" max="110" name="age" id="age" required>
            <!-- Gênero do Personagem -->
            <label for="gender">Personagem:</label>
            <label for="masculino"><input type="radio" id="masculino" name="gender" value="masculino">Masculino</label>
            <label for="feminino"><input type="radio" id="feminino" name="gender" value="feminino">Feminino</label>
            <!-- Submit Button -->
            <button type="submit">Entrar</button>
        </form>
        <a href="./home">Voltar Para o Login</a>
    </div>
</body>
</html>