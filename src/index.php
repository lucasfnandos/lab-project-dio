<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Project - DIO</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <?php 
        class hero{
            public $name;
            public $age;
            public $hero;
            public $attack;
            
            function __construct($name,$age,$hero){
                $this->name = $name;
                $this->age = $age;
                $this->hero = $hero;
            }
            
            function getAttack($hero){
                switch($this->hero = $hero){
                    case "mago":
                        return $this->attack = "magia oriental";
                        break;
                    case "guerreiro":
                        return $this->attack = "espada de aço valeriano";
                        break;
                    case "monge":
                        return $this->attack = "artes marciais";
                        break;
                    case "ninja":
                        return $this->attack = "shuriken fatal";
                        break;
                }
            }
        }
        
        $name = $_GET["nome"];
        $age = intval($_GET["idade"]);
        $hero = $_GET["tipo"];
        $h = new hero(
        $name,
        $age,
        $hero);
        
        echo "<h1>";
        echo "O ".$h->hero." atacou utilizando ".$h->getAttack($hero);
        echo "</h1>";
    ?>
    <a href="index.html" class="back">Voltar</a>
</body>
</html>