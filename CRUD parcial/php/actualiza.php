<?php
    require '../html/cabecera.html';
    require '../html/menu.html';
?>

<?php
    
    require 'funciones-conexion.php';
    $conexion = conectar();

    //hacer controles

    $consulta = 'SELECT ';
    // completar código

    desconectar($conexion);
?>
    <main>
        <h3>Actualizar producto</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo ?>" id="nombre" maxlength="60" required><br>
            <label for="stock">Stock</label>
            <input type="number" name="stock"value="<?php echo ?>" id="stock" min="1" step="1" required><br>
            <label for="fecha_vencimiento">Fecha de Vencimiento</label>
            <input type="date" name="fecha_vencimiento" value="<?php echo ?>" id="fecha_vencimiento" required><br>
            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" value="<?php echo ?>" id="categoria" maxlength="40" required><br>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" accept="image/*" required><br>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>