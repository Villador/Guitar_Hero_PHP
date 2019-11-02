<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="../css/contacto1.css">
</head>
<body>

<form>
   <div class="container">
    <h1>Contactanos!</h1>

    <label for="fname">Nombre</label>
    <input type="text" id="fname" name="firstname" placeholder="Escribí tu nombre...">

    <label for="lname">Apellido</label>
    <input type="text" id="lname" name="lastname" placeholder="Acá tu apellido...">

    <label for="country">País</label>
    <select id="country" name="country">
      <option value="australia">Argentina</option>
      <option value="canada">Brasil</option>
      <option value="usa">Uruguay</option>
    </select>

    <label for="subject">Mensaje</label>
    <textarea id="subject" name="subject" placeholder="Y, por último, tu mensaje..." style="height:200px"></textarea>

    <input type="submit" value="Enviar!">

    <div class="volverHome" >
      <p><a href="../index.php">Volver al Home!</a></p>
    </div>

   </div>


  </form>


</body>
