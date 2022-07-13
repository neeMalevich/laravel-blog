var counted = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});
// Wait for window load
$(window).on('load', function () {
    // Animate loader off screen
    $(".edica-loader").fadeOut("slow");;
});
$('.edica-header .dropdown').hover(function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
});
var endDate = new Date().getTime() + 1000800000;

var x = setInterval(function() {

    var now =  new Date().getTime();

    var timeRemaining = endDate - now;

    var daysRemaining = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    var hoursRemaining = Math.floor((timeRemaining % (1000 * 60 * 60 * 24))/(1000 * 60 * 60));
    var minutesRemaining = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    var secondsRemaining = Math.floor((timeRemaining % (1000 * 60)) / (1000));

    document.getElementById("days").innerHTML = daysRemaining;
    document.getElementById("hours").innerHTML = hoursRemaining;
    document.getElementById("minutes").innerHTML = minutesRemaining;
    document.getElementById("seconds").innerHTML = secondsRemaining; 

    if (timeRemaining < 0) { 
        clearInterval(x);
		document.getElementById("days").innerHTML ='0'; 
		document.getElementById("hours").innerHTML ='0'; 
		document.getElementById("minutes").innerHTML ='0' ; 
        document.getElementById("seconds").innerHTML = '0';
        alert("Thank you for your patience");
    }

},1000);