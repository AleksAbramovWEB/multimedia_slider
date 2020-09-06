

require('angular');

require('swiper');

import Swiper from 'swiper';

let mySwiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: false,
    pagination: {
        el: '.swiper-pagination',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
})

let app = angular.module('swiper_ang', []);

    app.controller('swiper_ang_cntrl', function ($http) {
        mySwiper.on('slideNextTransitionStart', function() {
            var postLinkData = {get_img: mySwiper.realIndex + 9};
            var config = {params: {access_token: CSRF_TOKEN}};
            $http.post( HREF_API , postLinkData, config).then(function(data){
                var slide = document.getElementById('img_'+data.data.id);
                if (angular.equals({}, data.data) || slide != null) return;
                let html ='<div class="swiper-slide"><img id="img_'+data.data.id+'" src="'+data.data.path+'"></div>'
                mySwiper.appendSlide(html);
            });
        });
    }).directive('foo', function () {
            return  {
                template: function () {
                    var data = DataImages;
                    var html = '';
                    for (let i = 0; i < data.length; i++) {
                        html = html + '<div class="swiper-slide">\n' +
                            '               <img id="img_'+data[i].id+'" src="'+data[i].path+'">\n' +
                            '          </div>'
                    }
                    return   html;
                }
            };
        });

    mySwiper.on('touchStart', function (){
        this.update();
    })










