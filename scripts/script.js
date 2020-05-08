$(function() {

    let componentsSpecs,
        componentsPrice,
        $componentsSpecsHolder,
        $componentsPriceHolder,
        $componentsPriceUSDHolder;

    $componentsPriceHolder = $("#result #componentsPrice");
    $componentsSpecsHolder = $("#result #componentsSpecs");
    $componentsPriceUSDHolder = $("#result #componentsPriceUSD");

    componentsPrice = 0;
    componentsSpecs = "";

    $(".options input").on("change", function() {
        calculatePrice();
        compileSpecs();
        calculateUSD();
    });

    calculatePrice();
    compileSpecs();

    $("#colors .picker").on("click", function() {
        let imgPath = $(this).attr("data-img-path");
        $(".info #system_unit_img").attr("src", imgPath);
    });

    function calculatePrice() {
        componentsPrice = 20000;
        componentsPrice += parseInt($("input[name=processor]:checked", "#processor").val());
        componentsPrice += parseInt($("input[name=videocard]:checked", "#videocard").val());
        componentsPrice += parseInt($("input[name=ram]:checked", "#ram").val());
        componentsPrice += parseInt($("input[name=ssd]:checked", "#ssd").val());
        $componentsPriceHolder.text(addSpace(componentsPrice) + " ₽");
    }

    function compileSpecs() {
        componentsSpecs = $("input[name=processor]:checked", "#processor").parent().text() + "<br>";
        componentsSpecs += $("input[name=videocard]:checked", "#videocard").parent().text() + "<br>";
        componentsSpecs += $("input[name=ram]:checked", "#ram").parent().text() + "<br>";
        componentsSpecs += $("input[name=ssd]:checked", "#ssd").parent().text() + "<br>";
        $componentsSpecsHolder.html(componentsSpecs);
    }

    function addSpace(nStr) {
        return nStr.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    }

    let currencyUrl = "https://cors-anywhere.herokuapp.com/https://currate.ru/api/?get=rates&pairs=USDRUB&key=82dd22a523537226266edc787e262904";
    let usdRubRate = 0;

    $.ajax({
        url: currencyUrl,
        cache: false,
        success: function (html) {
            usdRubRate = parseInt(html.substr(50,2));
            calculateUSD()
        }
    });
    
    function calculateUSD() {
        let componentsPriceUSD = componentsPrice / usdRubRate;
        $componentsPriceUSDHolder.text("$ " + addSpace(componentsPriceUSD.toFixed(0)));
    }
});