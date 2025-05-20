<?php
    require '../html/cabecera.html';
    require '../html/menu.html';
?>

    <main>
        <h2>Consulta sobre Preferencia</h2>
        <form action="sesion.php" method="POST" class="consulta">
            <label for="categ">Categoría</label>
                <input type="text" name="categoria" id="categ" maxlength="40">
            <label for="fecha">Fecha Vencimiento</label>
                <input type="date" name="fecha" id="fecha">
            <input type="submit" value="Guardar">
        </form>
    </main>
</body>
</html>