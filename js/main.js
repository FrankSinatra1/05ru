getTime();

$(document).ready(function(){
  $(".header-popup_menu").click(function(){
    $(".hamburger").toggleClass("is-active");
  });
});


function getTime() {
    var deadline='2020-09-02 08:00:00',
    time=Date.parse(deadline)-Date.parse(new Date()),
    seconds = Math.floor((time/1000) % 60),
    minutes = Math.floor((time/1000/60) % 60),
    hours = Math.floor((time/(1000*60*60)) % 24),
    timerHours = $(".timer_hours span"),
    timerMinutes = $(".timer_minutes span"),
    timerSecond = $(".timer_second span");

    $(timerHours).empty();
    $(timerMinutes).empty();
    $(timerSecond).empty();

    $(timerHours).append(hours);
    $(timerMinutes).append(minutes);
    $(timerSecond).append(seconds);

    if (minutes <= 9) {
        $(timerMinutes).empty();
        $(timerMinutes).append("0"+minutes);
    }

    if (seconds <= 9) {
        $(timerSecond).empty();
        $(timerSecond).append("0"+seconds);
    }

  return {
   'Часов': hours,
   'Минут': minutes,
   'Секунд': seconds
  };

};

var timer = setInterval(function() {
    getTime();
}, 1000);


// Форма поиска, Ajax
$(function () {
    $("#search").on('keyup',function(){
        $.get(
            '../components/search.php',
            {
                search_param: $(this).val(),
            },
        ).done(function (e) {
            var results = JSON.parse(e);
            $('.result-search').empty();
            results.forEach(function(result){
                $('.result-search').append("<a href='tovar.php?id="+result['id']+"' target='_blank' class='flex ourResult'>\
                    <div><img src='../img/"+result['image']+"'/></div>\
                    <div>\
                        <p>"+result['name']+"</p>\
                        <p class='search-price'>"+result['price']+"&#8381</p>\
                    </div>\
                    </a>")
                })
            $("#search").addClass("active");
            $(".result-search").addClass("active");
            if ($(".result-search").text() == "" || $("#search").val() == "") {
                $("#search").removeClass("active");
                $(".result-search").removeClass("active");
                $('.result-search').empty();
            }
        })
    });

    $("#search").on('focusout', function() {
        if ($(this).val() == "") {
            $('.result-search').empty();
            $("#search").removeClass("active");
            $(".result-search").removeClass("active");
        }
    });
});