<html>
<body>
<?php
   echo('perfil em php');

   $v1 = array(
      'img' => 'https://www.grancursosonline.com.br/upload/projeto/thumbnail/ifbaiano-instituto-federal-de-educacao-ciencia-e-tecnologia-baiano.png?1486039037',
   );
   $resultado_de_uma_consulta = array(
      'alunos' => array('joao','maria','lucas'),
      'cidade' => array('cacule','guanambi','petrolina),
      'cursos' => array('informatica','agropecuaria','agroindustria'),
'endereço'=> array('av 15 de novembro',' rua 9 de julho'),
      'ano' => 2020
   );

  echo('nome:'); echo($resultado_de_uma_consulta['alunos'][1] );
echo('<br>');

echo('cidade'); echo($resultado_de_uma_consulta['cidade'][1]);
   echo('<br>');

echo('curso');
echo($resultado_de_uma_consulta['cursos'][1]);
echo('<br>');
echo('endereço');
echo($resultado_de_uma_consulta['endereço'][1]);
 print_r($resultado_de_uma_consulta);

   echo('<br>');
   echo('<img src=' . $v1['img'] .'>');

?>

</body>
</html>
