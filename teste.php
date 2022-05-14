$email = htmlspecialchars($_POST["email"]);
  $pw1 = $_POST["pw1"];
  $pw2 = $_POST["pw2"];
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $date = $_POST["dataN"];

  if($pw1 === $pw2){

    $hash = password_hash($pw1, PASSWORD_DEFAULT);
    $lig = new mysqli("localhost", "root", "", "myworld");
    if($lig->connect_error){
      die("<p>Serviço indisponível. Por favor tente mais tarde</p>");
    }
    $sql = "INSERT INTO utilizadores(email, password, nome, sobrenome, data_nascimento) VALUES(?, ?, ?, ?, ?,)";

    $stmt = $lig->prepare($sql);
    $stmt->bind_param("ssiss", $email, $hash, $nome, $sobrenome, $date);

    if($stmt->execute() === TRUE){
      echo "<p>Bem vindo, " . $email . "</p>";
    }
    else{
      echo "<p>Registo não efetuado. Email indisponível</p>";
    }
    $stmt->close();

  }
  else{
    echo "<p>As passwords não coincidem! Por favor <a href='index.html'>repita o registo</a></p>";
  }

  $lig->close();