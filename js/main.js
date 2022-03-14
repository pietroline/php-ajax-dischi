

const app = new Vue({
    
    el: '#app',
    data: {
        albums: [],
    },

    mounted(){
        this.getInfoSong();
    },


    
    methods:{
        
        getInfoSong(){
            
        
            axios.get("http://localhost/php-ajax-dischi/src/server.php")
            .then(response => {
                this.albums = response.data;
            })
            .catch(function (error) {
                console.log(error);
            })
            
        }
    }
})