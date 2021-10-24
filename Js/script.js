var app = new Vue({
    el: '#root',
    data: {
        arrayA : [0,1,2,3],
        arrayB : [],

        fullAlbums: [],
        albums: [],
        albumsFiltered: [],
        genreSelected: ""
    },

    created() {
        axios.get('http://localhost/php-ajax-dischi/api/')
        .then( (response) => {
            // handle success
            // console.log(response.data[0]['author']);
            this.albums = (response.data);
            this.fullAlbums = (response.data);
            // console.log(this.albums);
        })
        .catch( (error) => {
            // handle error
            // console.log(error);
        })
    },

    methods: {
        selectGenre() {

            if (this.genreSelected != '') {

                this.albumsFiltered = [];

                this.albums = this.fullAlbums;             

                // 1. ciclo l'array albums
                this.albums.forEach((element) => {
                    // console.log(element['genre']);
                    if ( this.genreSelected == element['genre'] ) {
                        this.albumsFiltered.push(element);
                    }
                });

                // 2. svuoto l'array originale             
                this.albums = [];               

                // 2. sostituisco l'originale con il filtrato 
                this.albums = this.albumsFiltered;
                

            } else if (this.genreSelected == '') {
                this.albums = this.fullAlbums;
            }
        }
    }
});