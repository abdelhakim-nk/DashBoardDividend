$(document).ready(function () {
    $.ajax({
        url: 'http://api.mediastack.com/v1/news',
        data: {
            access_key: '4097d1f48e917f927ea3c0c54249814c',
            categories: 'business',
            languages: 'en,-fr',
            countries: 'us',
            limit: 20,
            offset: 20,
        }
    }).done(function (data) {
        let arrayReponse = data;
        let article = "";
        let blockImage = "";
        let i;
        for (i = 0; i < arrayReponse.data.length; i++) {
            article += '<h2>' + arrayReponse.data[i]['author'] + '</h2>';
            article += '<p>' + arrayReponse.data[i]['published_at'] + '</p>';
            article += '<p>Source : ' + arrayReponse.data[i]['source'] + '</p>';
            article += '<p>' + arrayReponse.data[i]['description'] + '</p>';
            article += '<a href="' + arrayReponse.data[i]['url'] + '">Lien vers la page d\'information</a>';
        }
        $('#texte').append(article);
    });
})
