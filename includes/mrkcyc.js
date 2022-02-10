/*var siteWeb = location.origin;
var $ = jQuery;

function crearModelo () {
    event.preventDefault();
    document.getElementById("overlaymodal").classList.remove("hidden");
    document.getElementById("modal-upload").classList.remove("hidden");

    var modelo = document.getElementById('model_type').value;
    var style1 = document.getElementById('inlineSCheckbox1');
    var style2 = document.getElementById('inlineSCheckbox2');
    var style3 = document.getElementById('inlineSCheckbox3');
    var style4 = document.getElementById('inlineSCheckbox4');
    var material1 = document.getElementById('inlineMCheckbox1');
    var material2 = document.getElementById('inlineMCheckbox2');
    var material3 = document.getElementById('inlineMCheckbox3');
    var material4 = document.getElementById('inlineMCheckbox4');
    var color = document.getElementById('model_color');
    var size1 = document.getElementById('inlineTCheckbox1');
    var size2 = document.getElementById('inlineTCheckbox2');
    var size3 = document.getElementById('inlineTCheckbox3');
    var size4 = document.getElementById('inlineTCheckbox4');
    var size5 = document.getElementById('inlineTCheckbox5');
    var size6 = document.getElementById('inlineTCheckbox6');
    var size7 = document.getElementById('inlineTCheckbox7');
    var size8 = document.getElementById('inlineTCheckbox8');
    var frontFile01 = document.getElementById('inputFrontFile01').files[0];
    var frontFile02 = document.getElementById('inputFrontFile02').files[0];
    var frontFile03 = document.getElementById('inputFrontFile03').files[0];
    var frontFile04 = document.getElementById('inputFrontFile04').files[0];
    var frontFile05 = document.getElementById('inputFrontFile05').files[0];
    var frontFile06 = document.getElementById('inputFrontFile06').files[0];
    var frontFile07 = document.getElementById('inputFrontFile07').files[0];
    var frontFile08 = document.getElementById('inputFrontFile08').files[0];
    var frontFile09 = document.getElementById('inputFrontFile09').files[0];
    var frontFile10 = document.getElementById('inputFrontFile10').files[0];
    var frontFile11 = document.getElementById('inputFrontFile11').files[0];
    var frontFile12 = document.getElementById('inputFrontFile12').files[0];
    var frontFile13 = document.getElementById('inputFrontFile13').files[0];
    var frontFile14 = document.getElementById('inputFrontFile14').files[0];
    var frontFile15 = document.getElementById('inputFrontFile15').files[0];
    var frontFile16 = document.getElementById('inputFrontFile16').files[0];
    var backFile01 = document.getElementById('inputBackFile01').files[0];
    var backFile02 = document.getElementById('inputBackFile02').files[0];
    var backFile03 = document.getElementById('inputBackFile03').files[0];
    var backFile04 = document.getElementById('inputBackFile04').files[0];
    var backFile05 = document.getElementById('inputBackFile05').files[0];
    var backFile06 = document.getElementById('inputBackFile06').files[0];
    var backFile07 = document.getElementById('inputBackFile07').files[0];
    var backFile08 = document.getElementById('inputBackFile08').files[0];
    var backFile09 = document.getElementById('inputBackFile09').files[0];
    var backFile10 = document.getElementById('inputBackFile10').files[0];
    var backFile11 = document.getElementById('inputBackFile11').files[0];
    var backFile12 = document.getElementById('inputBackFile12').files[0];
    var backFile13 = document.getElementById('inputBackFile13').files[0];
    var backFile14 = document.getElementById('inputBackFile14').files[0];
    var backFile15 = document.getElementById('inputBackFile15').files[0];
    var backFile16 = document.getElementById('inputBackFile16').files[0];

    var formData = new FormData();
    formData.append("modelo", modelo);
    formData.append("varsity",style1);
    formData.append("hoodie",style2);
    formData.append("bomber",style3);
    formData.append("zippered ",style4);
    formData.append("lana",material1);
    formData.append("sintetico",material2);
    formData.append("poliester",material3);
    formData.append("algodon",material4);
    formData.append("color",color);
    formData.append("tallaxxs", size1);
    formData.append("tallaxs", size2);
    formData.append("tallas", size3);
    formData.append("tallam", size4);
    formData.append("tallal", size5);
    formData.append("tallaxl", size6);
    formData.append("tallaxxl", size7);
    formData.append("tallaxxl", size8);
    formData.append("frontFile01", frontFile01);
    formData.append("frontFile02", frontFile02);
    formData.append("frontFile03", frontFile03);
    formData.append("frontFile04", frontFile04);
    formData.append("frontFile05", frontFile05);
    formData.append("frontFile06", frontFile06);
    formData.append("frontFile07", frontFile07);
    formData.append("frontFile08", frontFile08);
    formData.append("frontFile09", frontFile09);
    formData.append("frontFile10", frontFile10);
    formData.append("frontFile11", frontFile11);
    formData.append("frontFile12", frontFile12);
    formData.append("frontFile13", frontFile13);
    formData.append("frontFile14", frontFile14);
    formData.append("frontFile15", frontFile15);
    formData.append("frontFile16", frontFile16);
    formData.append("backFile01", backFile01);
    formData.append("backFile02", backFile02);
    formData.append("backFile03", backFile03);
    formData.append("backFile04", backFile04);
    formData.append("backFile05", backFile05);
    formData.append("backFile06", backFile06);
    formData.append("backFile07", backFile07);
    formData.append("backFile08", backFile08);
    formData.append("backFile09", backFile09);
    formData.append("backFile10", backFile10);
    formData.append("backFile11", backFile11);
    formData.append("backFile12", backFile12);
    formData.append("backFile13", backFile13);
    formData.append("backFile14", backFile14);
    formData.append("backFile15", backFile15);
    formData.append("backFile16", backFile16);

    //console.log(formData);

    $.ajax({
        type: 'POST',
        url: siteWeb + '/plugin/wp-content/plugins/customize your clothes/views/mrk-uploader.php',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data){
            console.log(data);
            //Cuando la interacción sea exitosa, se ejecutará esto.
        },
        error: function(data){
            //Cuando la interacción retorne un error, se ejecutará esto.
            console.log("Error");
        }
    });
    return false;
}*/

jQuery(document).ready(function() {

    jQuery('#upload_image_button').click(function() {
    formfield = jQuery('#upload_image').attr('name');
    alert("funciona");
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
    return false;
    });
    
    window.send_to_editor = function(html) {
    imgurl = jQuery('img',html).attr('src');
    jQuery('#upload_image').val(imgurl);
    tb_remove();
    }
    
    });