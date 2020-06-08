<?php
$NOMBRE = $_POST['nombre'];
$APPAT = $_POST['ap'];
$APMAT = $_POST['am'];
//-------------------------
$fechaNacimiento = $_POST['nacimiento'];
$colegio = $_POST['colegio'];
//-------------------------
$RFC = $_POST['rfc'];
//Validación de los datos------------
$nombre = preg_match("/([^0-9 ])/",$NOMBRE);//\gm
$apPat = preg_match("/([^0-9 ])/",$APPAT);//\gm
$apMat = preg_match("/([^0-9 ])/",$APMAT);//\gm
$rfc = preg_match("/([A-Z][A-Z][A-Z][A-Z][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z][0-9])/",$RFC);//\gm
if ($nombre==true)
{
  if ($apPat==true)
  {
    if ($apMat==true)
    {
      if ($rfc==true)
      {
        echo '<!DOCTYPE html>
        <html lang="es" dir="ltr">
          <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="act7DMG.css">
            <title>FELICITACIONES</title>
          </head>
          <body>
            <section class="container">
              <div class="bienvenido">
                <h3>Felicitaciones, ha sido aceptado para las</h3>
              </div>
              <div class="ES">
                <h1>ELEMENT SERIES</h1>
              </div>
              <div class="info">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend mi ac finibus vestibulum. Aenean ullamcorper ex ut nulla dignissim dapibus. Nunc fermentum facilisis blandit. Etiam eleifend cursus arcu id mollis. Mauris vel porttitor justo. Nulla pharetra lacus quis leo fringilla pulvinar. Sed sodales rhoncus purus, et vestibulum orci suscipit in. In et faucibus augue, quis sollicitudin quam. Cras non nulla id urna semper auctor. Suspendisse potenti. Mauris nec scelerisque ex. Suspendisse interdum erat vitae augue bibendum, vel vestibulum sapien finibus. Vestibulum scelerisque tortor sed gravida molestie. Ut laoreet eu sem id viverra. Morbi non eros tellus. Praesent venenatis est eu orci cursus, vestibulum suscipit velit condimentum.</p>
                <p>Nunc pellentesque ac lorem interdum imperdiet. Mauris ut vestibulum ex. Donec lacinia turpis at sem ullamcorper rhoncus. In hac habitasse platea dictumst. Aliquam at ante porta nulla molestie commodo. Sed sit amet tincidunt sapien, in sollicitudin mauris. Etiam hendrerit quam sed molestie scelerisque. Duis sagittis, urna a aliquam malesuada, arcu est vehicula lacus, vel accumsan diam sapien sed ante. Duis condimentum lacus eget hendrerit fermentum. Etiam eget suscipit justo. Pellentesque augue sem, suscipit quis ex ac, auctor lacinia enim. Sed egestas risus porttitor ornare hendrerit.</p>
                <p>Nulla eget leo eget diam convallis consectetur. Maecenas sed ex tempus magna scelerisque semper. Vestibulum auctor eros magna. Aliquam erat volutpat. Vestibulum tincidunt interdum massa, eu pellentesque ex euismod non. Vivamus varius maximus odio eu pharetra. Aenean mattis efficitur lectus at euismod. In ac condimentum ante. Integer sit amet lacinia nulla. Quisque rutrum, orci sit amet varius cursus, sapien lacus pretium nibh, ac malesuada erat urna sit amet mauris. Duis ornare nisi ac elementum iaculis. Etiam condimentum porttitor nibh ac elementum. Curabitur mi leo, dignissim a ex id, ornare maximus leo. Donec a faucibus massa, vehicula finibus velit. Nullam congue eros scelerisque turpis semper, sed porttitor arcu ultrices.</p>
                <p>Nulla eget leo eget diam convallis consectetur. Maecenas sed ex tempus magna scelerisque semper. Vestibulum auctor eros magna. Aliquam erat volutpat. Vestibulum tincidunt interdum massa, eu pellentesque ex euismod non. Vivamus varius maximus odio eu pharetra. Aenean mattis efficitur lectus at euismod. In ac condimentum ante. Integer sit amet lacinia nulla. Quisque rutrum, orci sit amet varius cursus, sapien lacus pretium nibh, ac malesuada erat urna sit amet mauris. Duis ornare nisi ac elementum iaculis. Etiam condimentum porttitor nibh ac elementum. Curabitur mi leo, dignissim a ex id, ornare maximus leo. Donec a faucibus massa, vehicula finibus velit. Nullam congue eros scelerisque turpis semper, sed porttitor arcu ultrices.</p>
                <p>Aliquam velit libero, consectetur vel urna et, malesuada luctus felis. In iaculis aliquam quam, tempus consequat dolor rhoncus in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum finibus velit nec nibh gravida dictum. Duis hendrerit urna eu ultricies fermentum. Aliquam bibendum ac arcu at consectetur. Quisque non egestas velit, non consequat sem. Quisque odio neque, gravida ac commodo et, euismod ac dui. Fusce nec augue vestibulum, imperdiet odio non, dignissim mi. Morbi tempus libero nec dolor aliquam imperdiet. Vestibulum mollis efficitur risus sit amet semper. Ut interdum eros at enim elementum, id ornare ligula mollis. Integer laoreet ligula sed mauris porttitor iaculis. Curabitur placerat neque vel metus tempor vehicula. Integer metus ex, porttitor ac efficitur eu, dapibus ac libero. Quisque tempor, sapien non imperdiet condimentum, eros diam egestas ligula, non ornare elit sem non tellus.</p>
                <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis imperdiet luctus nisi id varius. Vestibulum convallis sagittis rhoncus. Aenean nisi dolor, accumsan in augue et, sollicitudin dapibus quam. Proin lacus elit, imperdiet at tincidunt eu, eleifend id mi. Ut imperdiet vitae velit quis consectetur. Vivamus vitae bibendum odio, blandit consectetur lorem. Etiam tincidunt neque porttitor libero semper viverra. Curabitur interdum pellentesque nibh, sodales dignissim elit accumsan sit amet. Vivamus vel nulla turpis. Vestibulum efficitur massa nunc, tincidunt imperdiet lacus dapibus vitae.</p>
                <p>Phasellus hendrerit orci et luctus congue. Nunc volutpat eu nibh eu porta. Sed feugiat varius aliquam. Vestibulum eget tincidunt odio. Integer vestibulum faucibus magna et dignissim. Suspendisse potenti. In hac habitasse platea dictumst. Aenean tincidunt mauris vel venenatis euismod. Ut magna nulla, dignissim sed facilisis ut, fermentum ac libero. Quisque luctus, quam sit amet posuere ultrices, tellus nulla aliquet quam, ac rutrum mauris ligula quis justo.</p>
                <p>Curabitur eleifend posuere aliquet. Praesent ac leo dolor. Etiam venenatis nulla dignissim sapien pulvinar, id tincidunt urna iaculis. Curabitur convallis tristique sagittis. In faucibus viverra imperdiet. Nulla facilisi. Donec lacinia tortor eget felis faucibus auctor. Integer non finibus nibh. Proin sapien ex, tincidunt nec enim eu, viverra tempus turpis. Cras quis nibh non urna luctus malesuada. Proin at enim vel augue vehicula dignissim. Sed maximus sem nisi, sit amet consequat dui posuere at. In euismod maximus diam, a interdum orci laoreet eu. Nunc laoreet eros a euismod viverra. Vestibulum at libero sollicitudin, suscipit nibh ac, fermentum ligula.</p>
                <p>Pellentesque sed facilisis risus. In id ex quam. Duis tincidunt, tortor ac pretium egestas, dolor ante mattis nisi, ut ornare nisi nunc eu ex. Maecenas dolor sem, ultricies sit amet viverra vel, pulvinar at nunc. Donec ornare dui nec augue sagittis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras quis metus tincidunt, porttitor urna nec, ultrices magna. Vestibulum imperdiet risus eget efficitur vehicula. Ut maximus dui et magna dapibus pellentesque. In tincidunt egestas rhoncus. Phasellus aliquam cursus pellentesque. Nulla eu varius enim, vitae placerat sapien. Fusce hendrerit arcu ac nunc rutrum, sed lobortis risus tristique.</p>
              </div>
            </section>
          </body>
        </html>';
      }
      else
      {
        echo 'El dato de Nombre de Usuario (RFC) fue inválido, coloque 13 caracteres <a href="https://definicion.de/alfanumerico/">Alfanuméricos</a>, ingresado: '.$RFC;
      }
    }
    else
    {
      echo 'El dato de Apellido Materno fue inválido, ingresado: '.$APMAT;
    }
  }
  else
  {
    echo 'El dato de Apellido Paterno fue inválido, coloque solo letras, ingresado: '.$APPAT;
  }
}
else
{
  echo 'El dato de nombre fue inválido, coloque solo letras y si es necesario espacios, ingresado: '.$NOMBRE;
}
?>
