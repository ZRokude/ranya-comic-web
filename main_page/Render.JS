$(document).ready(function() {
    $.getJSON("/webKomik/ranya-comic-web/main_page/Render.php", function(data) {
        let komik = $("#render")

        data.forEach(comic => {
            let komikelemen = $(`
                <div class="comic">
                <img src="${comic.cover}" alt="${comic.judul}">
                <p style="font-size: 1rem;">${comic.judul}</p>
                <div class="d-flex">
                <a href="/webKomik/ranya-web-comic/read.php?id=${comic.id}"><button>Read</button></a>
                <a href="/webKomik/ranya-web-comic/library.php?id=${comic.id}"><button>Add To Library</button></a>
                </div>
                </div>
                `);
                komik.append(komikelemen);
        });
    }).fail(function (){
        console.error("error");
        });
});

     