<?php
use Aline\formulary\persons;
use Aline\formulary\searchdata;
use Aline\formulary\register;
require_once 'C:\xampp\htdocs\dev\tespis\formulary\classes\register.php';
require 'C:\xampp\htdocs\dev\tespis\formulary\classes\persons.php';


?>
<DOCTYPE html>
    <head>
      <title>Téspis| Seu Registro</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<!-- Váriavel contem todos os dados do banco de dados.-->
<?php 


$class= new Persons("persons", "localhost", "root", "");
$data = $class->searchdata();
?>

<!--//echo "<pre>"
//var_dump();
//echo "</pre>"
//-------------
//se a contagem de dados for >0.-->



<!-- TABLE MEMBERS -->


<body>
<section style="display: flex; flex-direction:column; justfy-content:center; background-color:white">

<table class="table">
  <!--titulos ficam acima do código php-->
  <thead>
    <tr>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">E-mail</th>
      <th scope="col">password</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">District</th>
    </tr>
  </thead>
  
<!-- Váriavel contem todos os dados do banco de dados.-->


<script>
  function alert(){
    alert("You just deleted a record, is that right?");
  }
</script>
<?php
if(count($data) >0){
  //for cria uma linha 0 para os valores e posteriormente retorna ao valor 1 e assim por diante.
  // se $i =0, a partir de $i contamos $data, assim por diante.
  for($i=0; $i < count($data); $i++){
    echo"<tbody>
    <tr>";
    //$data é um array, de chave e valores.
    foreach ($data[$i] as $key => $value){
      //excluindo o id da amostra.
      if($key != "id"){
        echo"<td>".$value."</td>";
      }
    }

    ?>
    <td><a href="index.php?id_up=<?php echo $data[$i]['id'];?>">Edit</td> 
      <!--criando método get, com '?=id'.-->
    <td><a onclick="alert()"; href="index.php?id=<?php echo $data[$i]['id'];?>">Exclude</td>
    <?php
  
  }
  
}; 
    echo"</tr>
    </tbody>";
    ?>

<?php
  
  if (isset($_GET['id'])){
    $id=addslashes($_GET['id']);
    $class->excludeperson($id);
    //não tem header location
  }
  ?>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</section>
</body>
</html>
