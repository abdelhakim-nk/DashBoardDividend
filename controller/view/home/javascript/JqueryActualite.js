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
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status === 0 && textStatus === "error") {
                console.log(jqXHR);
                let card = '';
                card += '<h1>Aucun accès à Internet</h1>' +
                    '<p>Voici quelques conseils </p>' +
                    '<li>Vérifiez les câbles réseau, le modem et le routeur.</li>' +
                    '<li>Reconnectez-vous au réseau Wi-Fi</li>';
                $('#texte').append(card);
            }
        }
    }).done(function (data) {
        console.log(data);
        let arrayReponse = data;
        let article = "";
        let blockImage = "";
        let i;
        let card = '<div className="row row-cols-1 row-cols-md-2">';

        for (i = 0; i < arrayReponse.data.length; i++) {
            card += '  <div class="col mb-4">\n' +
                '    <div class="card">\n' +
                '      <img src="../../assets/img/news.png" alt="..." style="width: 18rem;">\n' +
                '      <div class="card-body">\n' +
                '        <h5 class="card-title">' + arrayReponse.data[i]['author'] + '</h5>\n' +
                '        <p class="card-text">' + arrayReponse.data[i]['published_at'] + '</p>\n' +
                '        <p class="card-text">Source : ' + arrayReponse.data[i]['source'] + '</p>\n' +
                '        <p class="card-text">' + arrayReponse.data[i]['description'] + '</p>\n' +
                '        <a href="' + arrayReponse.data[i]['url'] + '" class="btn btn-primary">Lien vers la page d\'information</a>\n' +
                '      </div>\n' +
                '    </div>\n' +
                '  </div>';
        }

        card += '</div>';

        /*
        for (i = 0; i < arrayReponse.data.length; i++) {
            article += '<h2 class="card-body">' + arrayReponse.data[i]['author'] + '</h2>';
            article += '<p>' + arrayReponse.data[i]['published_at'] + '</p>';
            article += '<p>Source : ' + arrayReponse.data[i]['source'] + '</p>';
            article += '<p>' + arrayReponse.data[i]['description'] + '</p>';
            article += '<a href="' + arrayReponse.data[i]['url'] + '">Lien vers la page d\'information</a>';
        }
        */

        $('#texte').append(card);
    });
})
