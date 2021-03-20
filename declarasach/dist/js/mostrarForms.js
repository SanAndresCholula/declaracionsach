
    function mostrar(id) {
        if (id == "1") {
            $("#1").show();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();
            $("#6").hide();
            $("#7").hide();
            $("#8").hide();
            $("#9").hide();
            $("#10").show();
        }

        if (id == "2") {
            $("#1").hide();
            $("#2").show();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();
            $("#6").hide();
            $("#7").hide();
            $("#8").hide();
            $("#9").hide();
            $("#10").show();
        }

        if (id == "3") {
            $("#1").hide();
            $("#2").hide();
            $("#3").show();
            $("#4").hide();
            $("#5").hide();
            $("#6").hide();
            $("#7").hide();
            $("#8").hide();
            $("#9").hide();
            $("#10").show();
        }

        if (id == "4") {
            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").show();
            $("#5").hide();
            $("#6").hide();
            $("#7").hide();
            $("#8").hide();
            $("#9").hide();
            $("#10").show();
        }

        if (id == "5") {
            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").show();
            $("#6").hide();
            $("#7").hide();
            $("#8").hide();
            $("#9").hide();
            $("#10").show();
        }

        if (id == "6") {
            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();
            $("#6").show();
            $("#7").hide();
            $("#8").hide();
            $("#9").hide();
            $("#10").show();
        }

        if (id == "7") {
            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();
            $("#6").hide();
            $("#7").show();
            $("#8").hide();
            $("#9").hide();
            $("#10").show();
        }

        if (id == "8") {
            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();
            $("#6").hide();
            $("#7").hide();
            $("#8").show();
            $("#9").hide();
            $("#10").show();
        }

        if (id == "9") {
            $("#1").hide();
            $("#2").hide();
            $("#3").hide();
            $("#4").hide();
            $("#5").hide();
            $("#6").hide();
            $("#7").hide();
            $("#8").hide();
            $("#9").show();
            $("#10").show();
        }

        if (id == "11") {
            $("#11").show();
            $("#12").hide();
            $("#13").hide();
            $("#14").hide();
            $("#15").hide();
            $("#16").hide();
            $("#17").hide();
            $("#18").hide();
            $("#19").hide();
        }

        if (id == "12") {
            $("#11").hide();
            $("#12").show();
            $("#13").hide();
            $("#14").hide();
            $("#15").hide();
            $("#16").hide();
            $("#17").hide();
            $("#18").hide();
            $("#19").hide();
        }

        if (id == "13") {
            $("#11").hide();
            $("#12").hide();
            $("#13").show();
            $("#14").hide();
            $("#15").hide();
            $("#16").hide();
            $("#17").hide();
            $("#18").hide();
            $("#19").hide();
        }

        if (id == "14") {
            $("#11").hide();
            $("#12").hide();
            $("#13").hide();
            $("#14").show();
            $("#15").hide();
            $("#16").hide();
            $("#17").hide();
            $("#18").hide();
            $("#19").hide();
        }

        if (id == "15") {
            $("#11").hide();
            $("#12").hide();
            $("#13").hide();
            $("#14").hide();
            $("#15").show();
            $("#16").hide();
            $("#17").hide();
            $("#18").hide();
            $("#19").hide();
        }

        if (id == "16") {
            $("#11").hide();
            $("#12").hide();
            $("#13").hide();
            $("#14").hide();
            $("#15").hide();
            $("#16").show();
            $("#17").hide();
            $("#18").hide();
            $("#19").hide();
        }

        if (id == "17") {
            $("#11").hide();
            $("#12").hide();
            $("#13").hide();
            $("#14").hide();
            $("#15").hide();
            $("#16").hide();
            $("#17").show();
            $("#18").hide();
            $("#19").hide();
        }

        if (id == "18") {
            $("#11").hide();
            $("#12").hide();
            $("#13").hide();
            $("#14").hide();
            $("#15").hide();
            $("#16").hide();
            $("#17").hide();
            $("#18").show();
            $("#19").hide();
        }

        if (id == "19") {
            $("#11").hide();
            $("#12").hide();
            $("#13").hide();
            $("#14").hide();
            $("#15").hide();
            $("#16").hide();
            $("#17").hide();
            $("#18").hide();
            $("#19").show();
        }
    }
 //mostrar segundo div mediante check
 function showContent(){
     element = document.getElementById("content");
     check = document.getElementById("check");

     if(check.checked){
         element.style.display = 'block';
     }
     else{
         element.style.display = 'none';
     }
 }