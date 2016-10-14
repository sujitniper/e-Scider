/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Author: Sujit
 */

/* global x_pos */

$(document).ready(function () {

    $('#glob_btn').click(function ()
    {
        $.post("glob_result.php",
                {glob_keyword: $('#glob_keyword').val()},
        function (data)
        {
            $('#globresult').html(data);
        }
        )
    });


    $("#flip1").click(function () {
        $("#abstract").slideToggle("slow");
        $("#fulltext").slideUp("slow");
        $("#batchoperation").slideUp("slow");
    });
    $("#flip2").click(function () {
        $("#fulltext").slideToggle("slow");
        $("#abstract").slideUp("slow");
        $("#batchoperation").slideUp("slow");
    });
    $("#flip3").click(function () {
        $("#batchoperation").slideToggle("slow");
        $("#abstract").slideUp("slow");
        $("#fulltext").slideUp("slow");
    });



    $("#animtn1").show();
    $("#animtn2").show();
    $("#animtn3").show();
    $("#animtn6").show();
    $("#pubmedsearch1").show();
    $("#pubmedsearch2").hide();
    $("#pubmedsearch3").hide();
    $("#pmcsearch").show();
    $("#pmcbetwnyers").hide();
    $("#algorithm_panel").show();
    


    $("#all_art_btn").click(function () {
        $("#pubmedsearch1").show();
        $("#pubmedsearch2").hide();
        $("#pubmedsearch3").hide();
        $("#pmcsearch").hide();
        $("#animtn1").show();
        $("#animtn2").hide();
        $("#animtn3").hide();
        var div1 = $("#animtn1");
        //div1.animate({height: '250px', opacity: '0.3'}, "slow");
        //div1.animate({width: '500px', opacity: '0.9'}, "slow");
    });
    $("#jour_yers_btn").click(function () {
        $("#pubmedsearch2").show();
        $("#pubmedsearch1").hide();
        $("#pubmedsearch3").hide();
        $("#pmcsearch").hide();
        $("#animtn2").show();
        $("#animtn1").hide();
        $("#animtn3").hide();
        var div2 = $("#animtn2");
        //div2.animate({height: '270px', opacity: '0.3'}, "slow");
        //div2.animate({width: '500px', opacity: '0.9'}, "slow");
    });
    $("#betwn_yers_btn").click(function () {
        $("#pubmedsearch3").show();
        $("#pubmedsearch1").hide();
        $("#pubmedsearch2").hide();
        $("#pmcsearch").hide();
        $("#animtn3").show();
        $("#animtn1").hide();
        $("#animtn2").hide();
        var div3 = $("#animtn3");
        //div3.animate({height: '270px', opacity: '0.3'}, "slow");
        //div3.animate({width: '500px', opacity: '0.9'}, "slow");
    });

    $("#date_relevnc").click(function () {
        $("#pmcsearch").show();
        $("#pmcbetwnyers").hide();
        $("#animtn4").show();
        $("#animtn5").hide();
        var div4 = $("#animtn4");
       // div4.animate({height: '270px', opacity: '0.3'}, "slow");
        //div4.animate({width: '500px', opacity: '0.9'}, "slow");
    });
    $("#pmc_betwnyrs_btn").click(function () {
        $("#pmcbetwnyers").show();
        $("#pmcsearch").hide();
        $("#animtn5").show();
        $("#animtn4").hide();
        var div5 = $("#animtn5");
        //div5.animate({height: '290px', opacity: '0.3'}, "slow");
        //div5.animate({width: '500px', opacity: '0.9'}, "slow");
    });

    $("#algorithm_btn").click(function () {
        $("#algorithm_panel").show();
        $("#animtn6").show();
        var div6 = $("#animtn6");
        //div6.animate({height: '220px', opacity: '0.4'}, "slow");
        //div6.animate({width: '650px', opacity: '0.8'}, "slow");

    });
});