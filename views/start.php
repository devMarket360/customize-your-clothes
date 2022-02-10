<?php

function menu_customize() {
    add_menu_page ( 'Crear modelo', 'Crear Modelo', 'administrator', 'customize-clothes-settings', 'customize_clothes_page_settings', 'dashicons-color-picker', 101);
    add_submenu_page( 'customize-clothes-settings', 'Crear Colores', 'Crear Colores', 'administrator', '', 'crear-colores.php', '');
    add_submenu_page( 'customize-clothes-settings', 'Crear Estilos', 'Crear Estilos', 'administrator', 'upload_files', 'crear-estilos.php', '');
    add_submenu_page( 'customize-clothes-settings', 'Crear Tipos de Material', 'Crear Tipos de Material', 'administrator', 'read', 'crear-materiales.php', '');
}

add_action('admin_menu', 'menu_customize');
 
function customize_clothes_page_settings(){
    ?>
    <h2>Crea un modelo</h2>
    <ul><li>Recuerde que debe seguir las normas de nombres para las imagenes de los modelos, para su correcto funcionamiento.</li></ul>
    <div id="wpform">
        <form class="row g-3" enctype="multipart/form-data" action="javascript:void(0);" >
            <div class="col-md-4">
                <label for="inputState" class="form-label">Seleccione el tipo de modelo a crear</label>
                <select name="modelo" class="form-select" id="model_type">
                    <option selected disabled>Tipo de modelo</option>
                    <option value="chaqueta" >Chaqueta</option>
                    <option value="polo">Polo</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="model_style" class="form-label">Estilos del modelo</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineSCheckbox1" value="varsity-jacket">
                    <label class="form-check-label" for="inlineSCheckbox1">Varsity Jacket</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineSCheckbox2" value="varsity-hoodie">
                    <label class="form-check-label" for="inlineSCheckbox2">Varsity Hoodie</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineSCheckbox3" value="bomber-jacket">
                    <label class="form-check-label" for="inlineSCheckbox3">Bomber Jacket</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineSCheckbox4" value="zippered-hood">
                    <label class="form-check-label" for="inlineSCheckbox4">Zippered Hood</label>
                </div>
            </div>
            <div class="col-md-4">
                <label for="model_material" class="form-label">Material del modelo</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineMCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineMCheckbox1">Lana</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineMCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineMCheckbox2">Sintetico</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineMCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineMCheckbox3">Poliester</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineMCheckbox4" value="option3">
                    <label class="form-check-label" for="inlineMCheckbox4">Algodón</label>
                </div>
            </div>
            <div class="col-md-4">
                <label for="model_color" class="form-label">Seleccione el color del modelo</label>
                <select name="color" class="form-select" id="model_color">
                    <option selected disabled>Color del modelo</option>
                    <option value="amarillo">Amarillo</option>
                    <option value="azul">Azul</option>
                    <option value="azul-claro">Azul Claro</option>
                    <option value="beige">Beige</option>
                    <option value="blanco">Blanco</option>
                    <option value="cafe-claro">Cafe Claro</option>
                    <option value="cafe-oscuro">Cafe Oscuro</option>
                    <option value="verde">Verde</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="model_size" class="form-label">Tallaje del modelo</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineTCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineTCheckbox1">XXS</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineTCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineTCheckbox2">XS</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineTCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineTCheckbox3">S</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineTCheckbox4" value="option3">
                    <label class="form-check-label" for="inlineTCheckbox4">M</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineTCheckbox5" value="option3">
                    <label class="form-check-label" for="inlineTCheckbox5">L</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineTCheckbox6" value="option3">
                    <label class="form-check-label" for="inlineTCheckbox6">XL</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineTCheckbox7" value="option3">
                    <label class="form-check-label" for="inlineTCheckbox7">XXL</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineTCheckbox8" value="option3">
                    <label class="form-check-label" for="inlineTCheckbox8">XXXL</label>
                </div>
            </div>

            <h2 class="subtitle-file">Fotos parte delantera</h2>
            <div class="col-md-4">
                <label class="form-label" for="inputFrontFile01">Brazo Derecho</label>
                <input type="file" class="form-control" id="inputFrontFile01">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputFrontFile02">Brazo Izquierdo</label>
                <input type="file" class="form-control" id="inputFrontFile02">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputFrontFile03">Body/Pectoral</label>
                <input type="file" class="form-control" id="inputFrontFile03">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile04">Pectoral Linea</label>
                <input type="file" class="form-control" id="inputFrontFile04">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile05">Pectoral Linea 2</label>
                <input type="file" class="form-control" id="inputFrontFile05">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile06">Capucha</label>
                <input type="file" class="form-control" id="inputFrontFile06">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile07">Hombro Derecho</label>
                <input type="file" class="form-control" id="inputFrontFile07">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile08">Hombro Izquierdo</label>
                <input type="file" class="form-control" id="inputFrontFile08">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile09">Hombro Linea Derecha</label>
                <input type="file" class="form-control" id="inputFrontFile09">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile10">Hombro Linea Izquierda</label>
                <input type="file" class="form-control" id="inputFrontFile10">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile11">Bolsillos</label>
                <input type="file" class="form-control" id="inputFrontFile11">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile12">Linea 1 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputFrontFile12">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile13">Linea 2 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputFrontFile13">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile14">Linea 3 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputFrontFile14">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile15">Linea 4 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputFrontFile15">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputFrontFile16">Linea 5 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputFrontFile16">
            </div>

            <h2 class="subtitle-file">Fotos parte trasera</h2>
            <div class="col-md-4">
                <label class="form-label" for="inputBackFile01">Brazo Derecho</label>
                <input type="file" class="form-control" id="inputBackFile01">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputBackFile02">Brazo Izquierdo</label>
                <input type="file" class="form-control" id="inputBackFile02">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="inputBackFile03">Body/Espalda</label>
                <input type="file" class="form-control" id="inputBackFile03">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile04">Cuello</label>
                <input type="file" class="form-control" id="inputBackFile04">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile05">Mano Derecha</label>
                <input type="file" class="form-control" id="inputBackFile05">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile06">Mano Izquierda</label>
                <input type="file" class="form-control" id="inputBackFile06">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile07">Capucha</label>
                <input type="file" class="form-control" id="inputBackFile07">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile08">Hombro Derecho</label>
                <input type="file" class="form-control" id="inputBackFile08">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile09">Hombro Izquierdo</label>
                <input type="file" class="form-control" id="inputBackFile09">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile10">Hombro Linea Derecha</label>
                <input type="file" class="form-control" id="inputBackFile10">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile11">Hombro Linea Izquierda</label>
                <input type="file" class="form-control" id="inputBackFile11">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile12">Linea 1 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputBackFile12">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile13">Linea 2 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputBackFile13">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile14">Linea 3 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputBackFile14">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile15">Linea 4 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputBackFile15">
            </div>
            <div  class="col-md-4">
                <label class="form-label" for="inputBackFile16">Linea 5 Cuello y Mangas</label>
                <input type="file" class="form-control" id="inputBackFile16">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary enviar" onclick="crearmodelo()">Crear modelo</button>
            </div>
        </form>
    </div>

    <div id="overlaymodal" class="hidden"></div>
    <div id="modal-upload" class="hidden">
        <h2>ESTAMOS CARGANDO TU MODELO</h2>
        <span>Por favor no te salgas de esta pantalla hasta que se complete la carga</span>
        <img class="upload-img" src="http://localhost/plugin/wp-content/plugins/customize your clothes/includes/img/uploading.gif" alt="cargando">
    </div>
    <input type="text" name="upload_image" id="upload_image" value="" size='40' />
<input type="button" class='button-secondary' id="upload_image_button" value="Subir imagen" />
<?php
}
function my_admin_scripts() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('my-upload', WP_PLUGIN_URL.'/includes/mrkcyc.js', array('jquery','media-upload','thickbox'));
    wp_enqueue_script('my-upload');
    }
    
    function my_admin_styles() {
    wp_enqueue_style('thickbox');
    }
    
    if (isset($_GET['page']) && $_GET['page'] == 'customize-clothes-settings') {
    add_action('admin_print_scripts', 'my_admin_scripts');
    add_action('admin_print_styles', 'my_admin_styles');
    }
?>
</body>
</html>