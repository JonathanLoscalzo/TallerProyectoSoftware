<!DOCTYPE html>
<html>
    <head>
        <title> EJERCICIO 2</title>
        <link rel="stylesheet" type="text/css" href="./ejercicio2.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <form id="form0" action="./parte-servidor.php" method="post">
            <fieldset> 
                <legend> Datos Personales </legend>
                <div class="bloque">
                    <div class="content"><label>Nombres: </label><input id="name" name="name" placeholder="ingrese su nombre" required></div>
                    <div class="content"><label>Apellido:</label><input id="lastname" name="lastname" placeholder="ingrese su apellido"required></div>
                    <div class="content"><label>Mail:</label><input type="email"id="email" name="email" placeholder="ingrese su mail" required></div>
                    <div class="content"><label>Telefono:</label><input type="tel" id="phone" name="phone" placeholder="ingrese su telefono" required></div>
                    <div class="content"><label>Fecha de nacimiento:</label><input type="date" id="date" name="date" placeholder="ingrese su fecha de nacimiento" required></div>
                    <div class="content"><label>Nº de documento:</label>
                        <select id="docType" name="docType" required>
                            <option value="DNI"> DNI </option>
                            <option value="PASSPORT"> Pasaporte </option>
                        </select>
                        <input type="number" placeholder="ingrese su numero" name="docNumber" required>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Datos Reserva</legend>
                <div class="bloque">
                    <div class="content"><label>Fecha Reserva:</label><input type="date" id="reserveDate" name="reserveDate" required></div>
                    <div class="content"><label>Cantidad:</label><input type="number" id="cant" name="cant" style="width:5%" min="0" max="10"required></div>

                    <label style="display:block;">Observaciones:</label>
                    <textarea id="observations" name="observations" colspan="10" required>
                    </textarea>
                </div>
            </fieldset>

            <button type="submit" onclick="preSubmit()">Establecer reserva</button>
            <button type="reset">Borrar todo</button>
        </form>
    </body>
    <script type="text/javascript">
        function preSubmit()
        {


        }

    </script>


</html>