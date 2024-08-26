<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - MILLENIUM SYSTEM</title>
    <style>
        body {
            background-color: #1a1a3d;
            font-family: Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            padding: 10px;
            text-align: center;
            position: relative;
        }

        .navbar span {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: linear-gradient(to bottom, #000000, #000033);
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            text-align: left;
        }

        .input-group input, .input-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #333;
            margin-top: 5px;
            background-color: #1a1a3d;
            color: #fff;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <span>MILLENIUM SYSTEM</span>
    </div>

    <div class="container">
        <div class="login-box">
            <h2>Cadastro</h2>

            <form action="process.php" method="POST">
                <div class="input-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome" required />
                </div>
                <div class="input-group">
                    <label for="surname">Sobrenome</label>
                    <input type="text" name="surname" id="surname" placeholder="Sobrenome" required />
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="E-mail" required />
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha" required />
                </div>
                <div class="input-group">
                    <label for="role">Função</label>
                    <select name="role" id="role" required>
                        <option value="Desenvolvedor">Desenvolvedor</option>
                        <option value="Documentação">Documentação</option>
                        <option value="Expansão">Expansão</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <button type="submit" name="register">Cadastrar</button>
            </form>
        </div>
    </div>

</body>
</html>
