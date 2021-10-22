var app = new Vue({
    el: '#root',
    data: {
        array: [
            'a',
            'b',
            'c',
            'd',
        ],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/')
        .then( (response) => {
            // handle success
            console.log(response.data[0]['author']);
        })
        .catch( (error) => {
            // handle error
            console.log(error);
        })
    }
});