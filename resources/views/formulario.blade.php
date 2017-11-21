<html>
    <body>
        <form method="post" action="usuarioAnadido">
            {{ csrf_field()}}
            <input type="text" placeholder="Usuario" name="nombreUsu">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>