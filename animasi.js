
function openInvitation() {
    $("body").removeClass("modal-opened");
    $(".modalUndangan").animate({
        top: '100vh',
        opacity: '0'
    });
    // $(".modalUndangan").fadeOut(1000);
    // $(".modalUndangan").css('display','none');

    // cari panjang halaman website
    var panjangHalaman = $(document).height();
    var totalPanjang = panjangHalaman * 0.4;
    // console.log(panjangHalaman);

    // trigger when scroll over digit pixel
    var hasBeenTrigged = false;
    $(window).scroll(function() {
        if ($(this).scrollTop() >= totalPanjang && !
            hasBeenTrigged) { // if equal to or greater than 100 and hasBeenTrigged is set to false.
            // alert("You've scrolled 100 pixels.");

            $('#myModal').modal("show");
            hasBeenTrigged = true;
        }
    });
    // end trigger when scroll

    $("#myAudio").get(0).play();
}


$(document).ready(function() {

    var playing = true;
    $('.btnSong').click(function() {
        if (playing == false) {
            document.getElementById('myAudio').play();
            playing = true;
            $(this).html('<i class="fa fa-pause"></i>');

        } else {
            document.getElementById('myAudio').pause();
            playing = false;
            $(this).html('<i class="fa fa-play"></i>');
        }
    });



    // Scroll smooth
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .not('[href^="#collapse"]')
        .not('[href^="#cek"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);

                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                        // scrollTop: target.offset().top+cek

                    }, 400, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex',
                                '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });



});


        // Set the date we're counting down to
        // var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
        // var countDownDate = new Date("7/9/2021 23:39:00").getTime();
        var countDownDate = new Date("03/11/2023 09:00:00").getTime(); // m/d/Y H:i:s

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (days > 0 || hours > 0 || minutes > 0 || seconds > 0) {
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("mins").innerHTML = minutes;
                document.getElementById("secs").innerHTML = seconds;
            } else {
                document.getElementById("days").innerHTML = '00';
                document.getElementById("hours").innerHTML = '00';
                document.getElementById("mins").innerHTML = '00';
                document.getElementById("secs").innerHTML = '00';
            }



            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                // document.getElementById("cdExpired").innerHTML = "COUNTDOWN ALREADY EXPIRED";
            }
        }, 1000);



        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }


        // klik kanan
        // if (document.addEventListener) {
        //     document.addEventListener('contextmenu', function (e) {

        //         e.preventDefault();
        //     }, false);
        // } else {
        //     document.attachEvent('oncontextmenu', function () {

        //         window.event.returnValue = false;
        //     });
        // }
   

    
        $(function() {


            //animasi falling
            var snowflakeURl = [
                'webview/template/front/falling-effect/bola.png',
                'webview/template/front/falling-effect/bola2.png',
                'webview/template/front/falling-effect/bola.png',
                'webview/template/front/falling-effect/bola2.png',
                'webview/template/front/falling-effect/bola.png',
                'webview/template/front/falling-effect/bola2.png',
                'webview/template/front/falling-effect/bola.png',
            ]

            var container = $("#content");
            visualWidth = container.width();
            visualHeight = container.height();
            //Get the width and height of content
            ///////
            //Snowflakes / /
            ///////
            function snowflake() {
                // Snowflake container
                var $flakeContainer = $('#snowflake');

                // Six random graphs
                function getImagesName() {
                    return snowflakeURl[[Math.floor(Math.random() * 7)]];
                }
                // Create a snowflake element
                function createSnowBox() {
                    var url = getImagesName();
                    return $('<div class="snowbox" />').css({
                        // 'width': 40,
                        // 'height': 45,
                        'width': 50,
                        'height': 55,
                        'position': 'fixed',
                        'backgroundSize': 'cover',
                        'zIndex': 17000,
                        // 'top': '-41px',
                        // 'backgroundImage': 'url(' + url + ')'
                        // 'backgroundImage': 'url(webview/template/front/falling-effect/flower-2.png)'
                        'backgroundImage': 'url(' + url + ')'
                    }).addClass('snowRoll');
                }
                // Began to float flowers
                setInterval(function() {
                    // Trajectory of motion
                    var startPositionLeft = Math.random() * visualWidth - 100,
                        startOpacity = 1,
                        endPositionTop = visualHeight - 40,
                        endPositionLeft = startPositionLeft - 100 + Math.random() * 500,
                        duration = visualHeight * 10 + Math.random() * 5000;

                    // Random transparency, no less than 0.5
                    var randomStart = Math.random();
                    randomStart = randomStart < 0.5 ? startOpacity : randomStart;
                    // Create a snowflake
                    var $flake = createSnowBox();
                    // Design start position
                    $flake.css({
                        left: startPositionLeft,
                        opacity: randomStart
                    });
                    // Add to container
                    $flakeContainer.append($flake);
                    // Start animation
                    /* $flake.transition({
                        top: endPositionTop,
                        left: endPositionLeft,
                        opacity: 0.7
                    }, duration, 'ease-out', function() {
                        $(this).remove() //Delete after end
                    }); */

                    //jquery does not introduce other js writing methods
                    $flake.animate({
                        top: endPositionTop,
                        left: endPositionLeft,
                        opacity: 0.7
                    }, duration, 'linear', function() {
                        $(this).remove() //Delete after end
                    });

                }, 1200); // default 200
            }
            snowflake()
            //Execution function

        })
   