var app = new Vue({
    el: '#root',
    data: {
        albums: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/')
        .then( (response) => {
            // handle success
            // console.log(response.data[0]['author']);
            this.albums = (response.data);
            console.log(this.albums);
        })
        .catch( (error) => {
            // handle error
            console.log(error);
        })
    }
});