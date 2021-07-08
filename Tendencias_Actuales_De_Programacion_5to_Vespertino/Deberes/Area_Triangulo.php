<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title >Area de un Triangulo</title>
    </head>
    <body background ="../Imagenes/Fondon1.jpg">
        <div>
            <h1 style="text-align: center; color: white"> 
                Area de un Triangulo
            </h1>
            <table style="text-align: center; margin: 0px auto; width: 600px" border="1">
                <form action="" method="POST">
                    <tr>
                        <td style="color: white">Introduzca el valor de la base del triángulo: <br>
                            <input type="text" size=2 name="base" height="5"> <br></td>
                    </tr>

                    <tr >
                        <td style="color: white">Introduzca el valor de la altura del triángulo: <br>
                            <input type="text" size=2 name="altura"> <br> </td>
                    </tr>
                    <tr>
                        <td><input type=submit value="Resolver"></td>
                    </tr>
                    <?php
                    include './Clase/clase.area';
                    ?>
                </form>
                <br>
            </table>
        </div>  

    </body>
</html>
