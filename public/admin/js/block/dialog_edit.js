requirejs(['jquery'], function( $ ) {

    $('.call_dialog_edit').click(function(){
        var click_obj = $(this);
        var modal_name = 'dialog_edit';
        if (click_obj.data('modal') != undefined)
            modal_name = click_obj.data('modal');

        $('#'+modal_name+' .form-control').each(function(){
            if (!$(this).hasClass('continue_class')){
                var name = $(this).attr('name');
                $(this).val(click_obj.data('val-'+name));
            }
        });

        if ($("#map").length > 0){
            if (parseInt(click_obj.data('val-id')) > 0){
                var coord =click_obj.data('val-geo_coord');

                jQuery("#lng").val(parseFloat(coord.lng));
                jQuery("#lat").val(parseFloat(coord.lat));
                console.log(coord);
                changeMap(true);
            }
            else {
                jQuery("#lng").val('51.14345176');
                jQuery("#lat").val('71.44592914');
                changeMap(false);
            }
            //
        }

        $('#'+modal_name).modal('show');
    });

    if ($("#map").length > 0){
        var myMap;
        var myPlacemark;
        ymaps.ready(init);

        function init()
        {

            lng = jQuery("#lng").val();
            lat = jQuery("#lat").val();

            if ((lng == '' && lat == '')  || lng == undefined){
                myMap = new ymaps.Map("map",{
                    center: [51.14345176, 71.44592914],
                    zoom: 10,
                    behaviors: ["default", "scrollZoom"]
                },
                {
                    balloonMaxWidth: 300
                });
            }
            else{
                var center = [];
                center.push(lng);
                center.push(lat);

                console.log(center);

                myMap = new ymaps.Map("map",{
                    center: center,
                    zoom: 10,
                    behaviors: ["default", "scrollZoom"]
                },
                {
                    balloonMaxWidth: 300
                });
            }

            myPlacemark = new ymaps.Placemark([lng, lat]);
            myMap.geoObjects.add(myPlacemark);

            myMap.events.add("click", function(e){
                var coords = e.get("coordPosition");

                myMap.geoObjects.remove(myPlacemark);

                myPlacemark = new ymaps.Placemark([coords[0].toPrecision(10), coords[1].toPrecision(10)]);
                myMap.geoObjects.add(myPlacemark);

                jQuery("#lng").val(coords[0].toPrecision(10));
                jQuery("#lat").val(coords[1].toPrecision(10));
            });

            myMap.controls.add("zoomControl");
            myMap.controls.add("mapTools");
            myMap.controls.add("typeSelector");
        }

        function changeMap(show_placemark = false){
            lng = parseFloat(jQuery("#lng").val());
            lat = parseFloat(jQuery("#lat").val());




            myMap.geoObjects.remove(myPlacemark)

            if (show_placemark){
                myPlacemark = new ymaps.Placemark([lng, lat]);
                myMap.geoObjects.add(myPlacemark);
            }



        }
    }



    if ($('.js_show_on_map_spec').length > 0){
        $("#map").css('visibility', 'hidden');
        $('.js_show_on_map_spec').click(function(){
            if ($("#map").css('visibility') == 'visible')
                $("#map").css('visibility', 'hidden');
            else
                $("#map").css('visibility', 'visible');
        });
    }



});
