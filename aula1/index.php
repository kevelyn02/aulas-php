<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html" ; charset= UTF-8">
    <title>Cadastro de Cliente</title>
   
</head>
<body>
    <h3>Sistema de Cliente</h3>
    <form action="gravar.php" method="post">
        Nome..:
        <br>
        <input type="text" name="nome"/>
        <br><br>
        Email..:
        <br>
        <input type="text" name="email"/>
        <br><br>
        Idade..:
        <br>
        <input type="text" name="idade"/>
        <br><br>
        Estado civil..:
        <select name="estado">
            <option value=""> Selecione</option>
            <option value="solteiro">Solteiro</option>
            <option value="casado">Casado</option>
            <option value="viuvo">Viuvo</option>
            <option value="divorciado">Divorciado</option>
        </select>
        <br><br>
        <input type="submit" value="cadastrar clientes">
        <input type="reset" value="Limpar Cadastro">
    </form>
</body>
</html>