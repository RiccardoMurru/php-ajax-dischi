$(document).ready(function () {

    // refs
    var container = $('.album');

    // handlebars
    var src = $('#album-template').html();
    var template = Handlebars.compile(src);

    // Ajax request
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

}); // end doc ready