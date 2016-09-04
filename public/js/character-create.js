(function($) {
    var carouselRace = $(".carousel-race");
    var carouselGender = $(".carousel-gender");
    var carouselElement = $(".carousel-element");

    var carouselRaceControl = $('#race-carousel');
    var carouselGenderControl = $('#gender-carousel');
    var carouselElementControl = $('#element-carousel');

    // Enable Carousel Controls
    function changeRace() {
        var raceIdRegex = /^(?:\w+)-(?:\w+)-([0-9]+)$/;
        var raceIdString = $('.item.active', carouselRaceControl).attr('id');
        var matches = raceIdRegex.exec(raceIdString);
        $('#race_id').val(matches[1]);
    }

    function changeGender() {
        var gender = $('.item.active', carouselGenderControl).attr('id');
        $('.img-race',carouselRace).hide();
        $('.img-'+gender, carouselRace).show();
        $('#gender').val(gender);
    };
    
    function changeElement() {
        var element = $('.item.active', carouselElementControl).attr('id');
        $('.img-element',carouselElement).hide();
        $('.img-'+element, carouselElement).show();
        $('#element').val(element);
    };

    $(".left-race").click(function () {
        carouselRace.carousel("prev");
        changeRace();
    });
    $(".right-race").click(function () {
        carouselRace.carousel("next");
        changeRace();
    });

    $(".left-gender").click(function () {
        carouselGender.carousel("prev");
        changeGender();
    });
    $(".right-gender").click(function () {
        carouselGender.carousel("next");
        changeGender();
    });
    
    $(".left-element").click(function () {
        carouselElement.carousel("prev");
        changeElement();
    });
    $(".right-element").click(function () {
        carouselElement.carousel("next");
        changeElement();
    });
    
    
    var strengthStat = 5;
    var enduranceStat = 5;
    var agilityStat = 5;
    var perceptionStat = 5;
    
    $(".incStrengthStat").click(function () {
        strengthStat++;
        $('#strengthStat').html(strengthStat);
        $('#strength').val(strengthStat); 
        
        $(".decStrengthStat").show();  
    });
    $(".decStrengthStat").hide();
    $(".decStrengthStat").click(function () {
        strengthStat--;
        $('#strengthStat').html(strengthStat);
        $('#strength').val(strengthStat);
        
        if ( strengthStat == 5 ) {
	        $(".decStrengthStat").hide();
        }
    });
    
    $(".incEnduranceStat").click(function () {
        enduranceStat++;
        $('#enduranceStat').html(enduranceStat);
        $('#endurance').val(enduranceStat);
        
        $(".decEnduranceStat").show();
    });
    $(".decEnduranceStat").hide();
    $(".decEnduranceStat").click(function () {
        enduranceStat--;
        $('#enduranceStat').html(enduranceStat);
        $('#endurance').val(enduranceStat);
        
        if ( enduranceStat == 5 ) {
	        $(".decEnduranceStat").hide();
        }
    });
    
    $(".incAgilityStat").click(function () {
        agilityStat++;
        $('#agilityStat').html(agilityStat);
        $('#agility').val(agilityStat);
        
        $(".decAgilityStat").show();
    });
    $(".decAgilityStat").hide();
    $(".decAgilityStat").click(function () {
        agilityStat--;
        $('#agilityStat').html(agilityStat);
        $('#agility').val(agilityStat);
        
        if ( agilityStat == 5 ) {
	        $(".decAgilityStat").hide();
        }
    });
    
    $(".incPerceptionStat").click(function () {
        perceptionStat++;
        $('#perceptionStat').html(perceptionStat);
        $('#perception').val(perceptionStat);
        
        $(".decPerceptionStat").show();
    });
    $(".decPerceptionStat").hide();
    $(".decPerceptionStat").click(function () {
        perceptionStat--;
        $('#perceptionStat').html(perceptionStat);
        $('#perception').val(perceptionStat);
        
        if ( perceptionStat == 5 ) {
	        $(".decPerceptionStat").hide();
        }      
    });
    
})(jQuery );
