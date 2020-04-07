# Morsecode

Pacote criado para a galera que desja brincar um pouco com o código morse, aqui você pode passar uma String (texto) para o método encode() como primeiro parâmetro e true ou false no segundo parâmetro, o true é caso você queira separar o código morse por barra já o false é para ficar sem barra, veja um exemplo abaixo.

````php
    require_once "__DIR__/morsecode";
    use morsecode\morsecode;
    
    $morse = new morsecode();
    $encoded = $morse->encode('guilherme', true);
    echo $encoded; 
    /* 
        code returned:    
        --./..-/../.-../...././.-./--/./
    */
````