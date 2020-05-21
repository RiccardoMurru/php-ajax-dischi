$(document).ready(function () {

    // refs
    var container = $('.album');
    var searchBar = $('.searchbar');

    // handlebars
    var src = $('#album-template').html();
    var template = Handlebars.compile(src);


    // Ajax request
    ajaxAlbum(container, template);

    searchBar.keyup(function () {
        search(searchBar);
    });


}); // end doc ready

/***********
 * Functions
 ***********/

// Ajax album
function ajaxAlbum(container, template) {
    $.ajax({
        url: 'http://localhost:8888/php-ajax-dischi/partials/script.php',
        method: 'GET'
    }).done(function (res) {
        for (var i = 0; i < res.length; i++) {
            var item = res[i];
            var context = {
                cover: item.cover,
                alt: item.title,
                title: item.title,
                author: item.author,
                year: item.year
            }
            var output = template(context);
            container.append(output);

        }
    }).fail(function () {
        console.log('Errore richiesta Ajax');
    });
}

// ricerca artisti
function search(input) {
    var searchWord = input.val().toLowerCase().trim();
    $('.author').each(function () {
        var artist = $(this).text().toLowerCase();
        if (artist.includes(searchWord)) {
            $(this).parents('.album-details').show();
        } else {
            $(this).parents('.album-details').hide();
        }
    });
}