var site = {
    fiets: [],
    accessoire: [],
    startdate: "",
    enddate: "",
    quotationPrice: 0,
    step: 1,
    init: function(){
        $('#banner').slick({
            autoplay: true
        });

        $( "#fietsen .categories .accordion" ).accordion();
        $( "#fietsen .myorder .accordion" ).accordion();
        $( ".faq .faq-items" ).accordion();

        $('.date').datepicker({
            constrainInput: true,
            showOn: 'button',
            buttonText: 'Fiets huren'
        });

        $('.offerte .startdatum .datepicker').datepicker({
            minDate: 0,
            onSelect: function (selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() + 1);
                $(".offerte .einddatum .datepicker").datepicker("option", "minDate", dt);
                site.startdate = selected;
            }
        });
        $('.offerte .einddatum .datepicker').datepicker({
            onSelect: function (selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() - 1);
                $(".offerte .startdatum .datepicker").datepicker("option", "maxDate", dt);
                site.enddate = selected;
            }
        });

        $('.slick-prev').text('<');
        $('.slick-next').text('>');

        $('#reviews .reviews-tabs .customer').click(function(){
            site.reviewTabs(this);
        });

        $('.help').click(function(){
            $('.helpdesk').addClass('active');
        });

        $('.helpdesk .close, .helpdesk button').click(function(){
            $('.helpdesk').removeClass('active');
        });

        $('.offerte #fietsen .addToCart').click(function(){
            site.addToCart(this);
        });

        $('body').on('click', '.removeFromCart', function(){
            site.removeFromCart(this);
        });

        $('.bekijk-details').click(function(){
            site.viewDetails(this);
        });

        $('.beheer-rollen').click(function(){
            site.manageRoles(this);
        });

        $('.klantendetails .close').click(function(){
            $('.overlay').removeClass('active');
        });

        $('.prevNext .next').click(function(){
            site.progressBarNext();
            site.nextStep();
        });

        $('.prevNext .prev').click(function(){
            site.progressBarPrevious();
            site.previousStep();
        });

        $('.roleSaved').delay(3000).fadeOut('slow');
    },
    viewDetails: function(button){
        // Maak modal leeg
        $('.overlay').removeClass('active');
        $('.klantendetails tbody').html('');
        $('.kd-header h3').text('');
        // Zet klant nummer variabele en haal JSON data op
        var klantNr = $(button).data('klant');
        $.getJSON('huurovereenkomsten.php', function(data) {
            // Pak alleen de data van de bijbehorende klant
            var returnedData = $.grep(data, function (element) {
              return element.KlantNr == klantNr;
            });
            // Maak array aan voor de table tr's
            var items = [];
            $.each( returnedData, function( key, val ) {
                // Vul de array met records
                items.push('<tr><td>' + val.HuurovereenkomstNr + '</td><td>' + val.Startdatum + '</td><td>' + val.Einddatum + '</td><td>' + val.StatusOmschrijving + '</td></tr>');
            });
            // Pas de titel van de modal aan
            $('.kd-header h3').text('Klantendetails ' + returnedData[0].Klant + ' (' + klantNr + ')');
            // Koppel klant met link naar offerte
            $('.kd-footer a').attr('href', 'offerte.php?klantNr=' + klantNr);
            // Voeg de array to aan de modal
            $('.klantendetails tbody').append(items);
            // Toon modal
            $('.overlay').addClass('active');
        });
    },
    manageRoles: function(button){
        // Maak modal leeg
        $('.overlay').removeClass('active');
        $('.klantendetails form input').val('');
        // Zet klant nummer variabele en haal JSON data op
        var loginNaam = $(button).data('medewerker');

        // Toon modal
        $('.overlay').addClass('active');

    },
    addToCart: function(button){
        // Knoppen veranderingen
        var amount = $(button).parent().find('input').val();
        var addButton = $(button).text('Toegevoegd ('+amount+')').addClass('btn-green');
        var frameNr = $(button).parent().find('#frameNr').data('framenr');
        var barcode = $(button).parent().find('#barcode').data('barcode');
        var dagprijs = $(button).parent().find('#dagprijs').data('dagprijs');
        var deleteButton = '<button type="button" class="btn btn-primary btn-red removeFromCart" data-framenummer="'+frameNr+'" data-dagprijs="'+dagprijs+'" data-aantal="'+amount+'">X</button>';
        if($(button).parent().find('.removeFromCart').length < 1){
            $(addButton).parent().append(deleteButton);
        }

        // Winkelwagen updaten
        if($.inArray(frameNr, site.fiets["frameNr"]) == -1){
            site.fiets = $.grep(site.fiets, function(value) {
               return value.frameNr != frameNr;
            });
        }

        if(frameNr != undefined){
            site.fiets.push({
                frameNr: frameNr,
                aantal: parseInt(amount)
            });
        }

        if($.inArray(barcode, site.accessoire["barcode"]) == -1){
            site.accessoire = $.grep(site.accessoire, function(value) {
               return value.barcode != barcode;
            });
        }

        if(barcode != undefined){
            site.accessoire.push({
                barcode: barcode,
                aantal: parseInt(amount)
            });
        }

        // Update subtotaal
        //var price = $(button).parent().find('#dagprijs').data('dagprijs');
        //site.calculateQuotation(price * amount);
    },
    removeFromCart: function(button){
        // Knoppen veranderingen
        $(button).parent().find('input').val(1);
        $(button).parent().find('.addToCart').removeClass('btn-green').text('Voeg toe');
        $(button).remove();

        // Winkelwagen updaten
        var frameNr = $(button).data('framenummer');
        site.fiets = $.grep(site.fiets, function(value) {
           return value.frameNr != frameNr;
        });

        // Update subtotaal
        // var amount = $(button).data('aantal');
        // var dagprijs = $(button).data('dagprijs');
        // var price = amount * dagprijs;
        //
        // site.calculateQuotation(Math.abs(price) * -1);
    },
    calculateQuotation: function(newPrice){
        var currentPrice = $('.currentQuotationPrice .price').text();
        var calculatedPrice = parseInt(currentPrice) + newPrice;
        $('.currentQuotationPrice .price').text(calculatedPrice);
    },
    progressBarPrevious: function(){
        var lastActive = $('.offerte-status .progressbar').find('li.active').last();
        if($('.offerte-status .progressbar').find('li.active').length > 1){
            $(lastActive).removeClass('active');
        }
    },
    progressBarNext: function(){
        if(site.step == 1 && site.fiets.length == 0){
            return false;
        }

        var lastActive = $('.offerte-status .progressbar').find('li.active').last();
        $(lastActive).next().addClass('active');
    },
    reviewTabs: function(reviewCustomer){
        var customer = $(reviewCustomer).index() + 1;
        $('#reviews .reviews-tabs .customer').removeClass('active');
        $(reviewCustomer).addClass('active');
        $('#reviews .review').removeClass('active');
        $('#reviews').find(`[data-customer='${customer}']`).addClass('active');
    },
    nextStep: function(){
        $('.noBikeSelected').hide();
        if(site.step == 1 && site.fiets.length == 0){
            $('.noBikeSelected').show();
            return false;
        }

        if(site.step < 4){
            site.step++;
            $('.step').removeClass('active');
            var nextStep = $('.offerte').find(`[data-step='${site.step}']`);
            $(nextStep).addClass('active');
        }
        if(site.step == 4){
            $('input[name="fiets"]').val(JSON.stringify(site.fiets));
            $('input[name="accessoire"]').val(JSON.stringify(site.accessoire));
            $('input[name="startdatum"]').val(site.startdate);
            $('input[name="einddatum"]').val(site.enddate);
        }
    },
    previousStep: function(){
        if(site.step > 1){
            site.step--;
            $('.step').removeClass('active');
            var nextStep = $('.offerte').find(`[data-step='${site.step}']`);
            $(nextStep).addClass('active');
        }
    }
}

$(document).ready(function(){
    site.init();
});
