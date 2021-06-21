<?php
    //Marcos Gabriel Barreto RA: 102409
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'aula');

    $bd = new PDO('mysql:host='.HOST.'; dbname='.DB_NAME,USER,PASSWORD);

    $id = 12345;
    $nome = "Marcos";
    $email = "marcosgabriel@alunos.fho.edu.br";
    
    $id = 54321;
    $nome = "Fabricio";
    $email = "fabricio@alunos.fho.edu.br";
    
    $id = 55443;
    $nome = "João";
    $email = "joao@alunos.fho.edu.br";

    $nova_pessoa = array($id,$nome,$email);

    $inserir = $bd->prepare('INSERT into pessoa (id, nome, email) values(?,?,?)');
    $inserir->execute($nova_pessoa);

    $consultar = $bd->prepare("SELECT * from pessoa;");
    $consultar->execute();
    $linhas = $consultar->fetchAll(PDO::FETCH_OBJ);
    
    foreach($linhas as $p){
        echo("<br><b>ID = </b>".$p->id."<br><b>Nome = </b>".$p->nome."<br><b>Email = </b>".$p->email);
        echo("<br>----------------------------------------------------------------------------------<br>");
    }

    $atualizar = $bd->prepare("UPDATE pessoa set id=? where nome=?");
    $nome = "Marcos"; 
    $id = 66778;
    //$atualizar->execute(array($id,$nome));
    

    $deletar = $bd->prepare("delete from pessoa where nome=?");
    $nome = "Marcos";
    //$deletar->execute(array($nome));
?>
    
    

    