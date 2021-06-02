<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz21</title>
    <style>
        .main-content {
            display: flex;
            height: 90%;
            justify-content: center;
            align-items: center;
            background-color: aliceblue;
        }
        
        .form-fizz {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        label {
            font-size: 1.5rem;
        }
        
        form input {
            margin: 1rem 0;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>FizzBuzz21</h1>
    <div class="main-content">
        
        <form class="form-fizz" action="FizzBuzz21.php" method="POST">
            <label for="inicio">Inicio da faixa de números</label>
            <input type="number" id="inicio" name="inicio">
            <label for="fim">Fim da faixa de números</label>
            <input type="number" id="fim" name="fim">
            <input type=submit value="Enviar" name="enviar">
        </form>
    </div>
     
    <?php if(isset($_POST['inicio']) && isset($_POST['fim'])) { 
        //html e php dentro de um único arquivo
         $inicio = $_POST['inicio'];
         $fim = $_POST['fim'];
         
         for($i = $inicio; $i <= $fim; $i++) {
             if(!($i % 3) && !($i % 5)) {
                 echo "FizzBuzz"."<br>";
             }
             elseif(!($i % 3)) {
                 echo "Fizz"."<br>";
             }
             elseif(!($i % 5)) {
                 echo "Buzz"."<br>";
             }
             else {
                 echo $i. "<br>";
             }
         }
    } ?>
      

</body>
</html>