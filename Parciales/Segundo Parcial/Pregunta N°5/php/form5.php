<form action="javascript:cambiarCalendario()" id="f5">
<select id="mes">
    <option value="Enero">Enero</option>
    <option value="Febrero">Febrero</option>
    <option value="Marzo">Marzo</option>
    <option value="Abril">Abril</option>
    <option value="Mayo">Mayo</option>
    <option value="Junio">Junio</option>
    <option value="Julio">Julio</option>
    <option value="Agosto">Agosto</option>
    <option value="Septiembre">Septiembre</option>
    <option value="Octubre">Octubre</option>
    <option value="Noviembre">Noviembre</option>
    <option value="Diciembte">Diciembte</option>
</select>
<select id="anio">
    <?php
        for($i=1975; $i<=2020; $i++) echo "<option value='$i'>$i</option>"
    ?>
</select>
<button id="enviar5">Cambiar</button>
</form>