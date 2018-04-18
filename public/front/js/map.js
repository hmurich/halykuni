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
        $.post( "/org-list", { cat_id:1, city_id: 1}).done(function( data ) {
            setPlacemark(data);
        });
    }

    function setPlacemark(data){
        for (var i = 0; i < data.items.length; i++) {
            var item = data.items[i];
            var coor = JSON.parse(item.geo_coord);
            var ar = [parseFloat(coor.lng), parseFloat(coor.lat)];

            myPlacemark = new ymaps.Placemark(ar, {
               balloonContentBody: [
                   '<address>',
                   '<strong>Офис Яндекса в Москве</strong>',
                   '<br/>',
                   'Адрес: 119021, Москва, ул. Льва Толстого, 16',
                   '<br/>',
                   'Подробнее: <a href="/about">перейти</a>',
                   '</address>'
               ].join('')
           }, {
               preset: 'islands#blueLeisureCircleIcon',
               balloonPanelMaxMapArea: Infinity
           });

            /*myPlacemark.data = item;
            myPlacemark.events.add('click', function () {

            });
            */

            myMap.geoObjects.add(myPlacemark);
        }
    }

    getPlacemark();

    console.log(myMap.controls);
}
