$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var myMap;
ymaps.ready(init);

function init()
{
    lng = jQuery("#lng").val();
    lat = jQuery("#lat").val();


    myMap = new ymaps.Map("yandex_map",{
        center: [51.14345176, 71.44592914],
        zoom: 12,
        balloonPanelMaxMapArea: Infinity,
        behaviors: ["default", "scrollZoom"],
        yandexMapDisablePoiInteractivity: true
    },
    {
        balloonMaxWidth: 300
    });

    ymaps.panorama.Base.call();

    function getPlacemark(){
        $('#budjet_desc').hide();
        $('#org_desc').show('slow');
        $.post( "/org-list", { cat_id:1, city_id: 1}).done(function( data ) {
            setPlacemark(data);
        });
    }

    function getSumm(){
        myMap.geoObjects.removeAll();
        var ar_coord = [
            [71.423554,51.127433],[71.440034,51.128081],[71.478486,51.135425],[71.485352,51.154214],
            [71.456513,51.167814],[71.434884,51.166951],[71.421494,51.142769],[71.494622,51.130457],
            [71.507668,51.143201],[71.512818,51.152054],[71.492219,51.16436],[71.472306,51.144928],
            [71.472306,51.139745],[71.481919,51.162633],[71.464066,51.167382],
            [71.43454,51.172347],[71.446557,51.148168],[71.449647,51.142769],[71.45823,51.143417],
            [71.458916,51.15227],[71.44587,51.159611],[71.44896,51.163281]
        ]

        for (i = 0; i<(parseInt(ar_coord.length / 3)); i++){
            var rand_k = Math.floor(Math.random() * ar_coord.length);
            var coor = ar_coord[rand_k];
            var random_summ = Math.floor(Math.random() * 15000000);

            var placemark = new ymaps.GeoObject({
                geometry: {
                    type: "Point",
                    coordinates: [coor[1], coor[0]]
                },
                properties: {
                    iconContent: random_summ + " тг.",
                    balloonContentBody: [
                        '<address>',
                        '<strong>Ремонт школы №22</strong>',
                        '<br/>',
                        'Подрядчик: ТОО ООП',
                        '<br/>',
                        'Сумма: ' + random_summ + ' тг.',
                        '</address>'
                    ].join('')
                }
            }, {
                preset: 'islands#blackStretchyIcon',
                balloonPanelMaxMapArea: Infinity
            });

            myMap.geoObjects.add(placemark);
            $('#budjet_desc').show('slow');
            $('#org_desc').hide('slow');
        }

    }

    var place_types = Array('islands#grayCircleDotIcon','islands#darkOrangeCircleDotIcon','islands#redCircleDotIcon','islands#blackCircleDotIcon');


    function setPlacemark(data){
        myMap.geoObjects.removeAll();

        for (var i = 0; i < data.items.length; i++) {
            var item = data.items[i];
            var coor = JSON.parse(item.geo_coord);
            var ar = [parseFloat(coor.lng), parseFloat(coor.lat)];

            myPlacemark = new ymaps.Placemark(ar, {
               balloonContentBody: [
                   '<address>',
                   '<strong>Название организации</strong>',
                   '<br/>',
                   'Услуга: лесопосадка в канализациях астаны',
                   '<br/>',
                   'Подробнее: <a href="/about">перейти</a>',
                   '</address>'
               ].join('')
           }, {
               preset: place_types[Math.floor(Math.random()*place_types.length)],
               balloonPanelMaxMapArea: Infinity
           });

            /*myPlacemark.data = item;
            myPlacemark.events.add('click', function () {

            });
            */


            myMap.geoObjects.add(myPlacemark);

            //console.log();
        }


    }

    getPlacemark();

    $('.js_change_map').change(function(){
        console.log('js_change_map');
        getPlacemark();
    });

    $('.js_show_map_summ').click(function(){
        getSumm();
    });

    console.log(myMap.controls);
}
