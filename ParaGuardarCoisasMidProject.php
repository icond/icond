
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["nome"] = $_POST['nome'];
    $_SESSION["nifParc"] = $_POST['nifParc'];
    $_SESSION["nifCond"] = $_POST['nifCond'];
    $_SESSION["password"] = $_POST['password'];
    $_SESSION["morada"] = $_POST['rua'];
    $_SESSION["lote"] = $_POST['lote'];
    $_SESSION["codigoPostal"] = $_POST['postal1'].'-'.$_POST['postal2'];
    $_SESSION["localidade"] = $_POST['localidade'];
    $_SESSION["cidade"] = $_POST['cidade'];
    $_SESSION["pais"] = 1;
    $_SESSION["idEmpresa"] = 0;