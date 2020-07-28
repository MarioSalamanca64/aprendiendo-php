<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>formularios php y html</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <div>
            <form action="" method="POST" enctype="multipart/data">
                <label for="nombre">Nombre:</label> 
             <p><input type="text" name="nombre"autofocus="autofocus" required="required" placeholder="pon tu nombre"/></p>
             <label for="apellido">Apellido:</label>
             <p><input type="text" name="apellido"  required="required" placeholder="Pon tu apellido"/></p>
             
             <label for="boton">Boton:</label>
             <p><input type="button" name="boton" value="click"  /></p>
             
             <label for="Sexo">Sexo:</label>
             <p>
                 Hombre <input type="checkbox" name="sexo" value="Hombre" checked="checked"/>
                Mujer <input type="checkbox" name="sexo" value="Mujer" />
             </p>
             
             <label for="color">Color:</label>
             <p><input type="color" name="color"  /></p>
             
             
             <label for="fecha">Fecha:</label>
             <p><input type="date" name="fecha"  /></p>
             
             <label for="correo">Email:</label>
             <p><input type="email" name="correo"  /></p>
             
             
             <label for="archivo">Archivo:</label>
             <p><input type="file" name="archivo" multiple="multiple" /></p>
            
             
             <label for="numero">Numero:</label>
             <p><input type="number" name="numero"  /></p>
             
             <label for="contraseña">Contraseña:</label>
             <p><input type="password" name="contraseña"  /></p>
             
             <label for="continente">Continente:</label><br><p>
             Europa <input type="radio" name="continente" value="europa" />
             America <input type="radio" name="continente" value="america" />
             America del sur <input type="radio" name="continente" value="america del sur" />
             </p>
             
             
             <label for="web">Pagina web:</label>
             <p><input type="url" name="web"  /></p>
  
             <textarea> </textarea><br/>
             
             Peliculas:
             
             <select name="peliculas">
                 <option value="Spiderman">Spiderman</option>
                 <option value="Batman">Batman</option>
                 <option value="Superman">Superman</option>
                 
             </select><br/>
             
             
             
             <input type="submit" value="Enviar"/>
             
            </form>
        </div>
    </body>
    
</html

