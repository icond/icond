    $("#jquery").hide();
    $( document ).ready(function() {
        $("#jquery").slideUp( 0 ).delay( 300 ).fadeIn( 400 );
        $( "#bt1" ).click(function() {
            //ir buscar width do ecra
            var windowWidth = $(window).width();
            if(windowWidth > 992) {
                $("#form2").hide();
                $("#form3").hide();
                document.getElementById("presentationSHOW").style.marginTop="20px";
                $("#form1").slideToggle(400);
            }
            else {
                $("#form2Mobile").hide();
                $("#form3Mobile").hide();
                $("#form1Mobile").slideToggle(400);
            }

            if($("#bt1").hasClass("active")){
                $("#bt1").removeClass("active");
                document.getElementById("presentationSHOW").style.marginTop="0px";
            }else{
                $("#bt1").addClass("active");
            }
            $("#bt2").removeClass("active");
            $("#bt3").removeClass("active");
        });
        $( "#bt2" ).click(function() {
            //ir buscar width do ecra
            var windowWidth = $(window).width();
            if(windowWidth > 992)
            {
                $("#form1").hide();
                $("#form3").hide();
                document.getElementById("presentationSHOW").style.marginTop="20px";
                $("#form2").slideToggle(400);
            }
            else 
            {
                $("#form1Mobile").hide();
                $("#form3Mobile").hide();
                $("#form2Mobile").slideToggle(400);
            }

            $("#bt1").removeClass("active");

            if($("#bt2").hasClass("active")){
                $("#bt2").removeClass("active");
                document.getElementById("presentationSHOW").style.marginTop="0px";
            }else{
                $("#bt2").addClass("active");
            }

            $("#bt3").removeClass("active");
        });
        $( "#bt3" ).click(function() {
            //ir buscar width do ecra
            var windowWidth = $(window).width();
            if(windowWidth > 992)
            {
                $("#form1").hide();
                $("#form2").hide();
                document.getElementById("presentationSHOW").style.marginTop="20px";
                $("#form3").slideToggle(400);
            }
            else 
            {
                $("#form1Mobile").hide();
                $("#form2Mobile").hide();
                $("#form3Mobile").slideToggle(400);
            }

            $("#bt1").removeClass("active");
            $("#bt2").removeClass("active");

            if($("#bt3").hasClass("active")){
                $("#bt3").removeClass("active");
                document.getElementById("presentationSHOW").style.marginTop="0px";
            }else{
                $("#bt3").addClass("active");
            }


        });

    });
    $(document).ready(function() {
      $("#popup").click(function() {
        $("#modal-overlay").fadeIn();
        $("#modal").fadeIn();
        $(".body").addClass("blur-in");
        $(".body").removeClass("blur-out");
    });
      $("#modal-overlay").click(function() {
        $("#modal-overlay").fadeOut();
        $("#modal").fadeOut();
        $(".body").removeClass("blur-in");
        $(".body").addClass("blur-out");
    });
      $("#close").click(function() {
        $("#modal-overlay").fadeOut();
        $("#modal").fadeOut();
        $(".body").removeClass("blur-in");
        $(".body").addClass("blur-out");
    });
  });

//So permitir numeros no field
//from http://stackoverflow.com/questions/469357/html-text-input-allow-only-numeric-input
$(document).ready(function() {
    $("#sonumeros").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                            // Allow: Ctrl+A
                            (e.keyCode == 65 && e.ctrlKey === true) ||
                         // Allow: Ctrl+C
                         (e.keyCode == 67 && e.ctrlKey === true) ||
                         // Allow: Ctrl+X
                         (e.keyCode == 88 && e.ctrlKey === true) ||
                         // Allow: home, end, left, right
                         (e.keyCode >= 35 && e.keyCode <= 39)) {
                             // let it happen, don't do anything
                         return;
                     }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
});