

const app = new Vue({
    
    el: '#app',
    data: {
        albums: [],
        genereSelezionato: "",
    },

    mounted(){
        axios.get("http://localhost/php-ajax-dischi/src/server.php")
            .then(response => {
                this.albums = response.data;
            })
            .catch(function (error) {
                console.log(error);
            })        
    },

    computed:{
        filtraAlbumsGenere(){
            if(this.genereSelezionato != ""){
                return this.albums.filter(album => album.genre == this.genereSelezionato);
               
            }else{
                return this.albums;
            }
        },

        genres(){
            let generi = [];
            this.albums.forEach(album =>{
                if(!generi.includes(album.genre)){
                    generi.push(album.genre);
                } 
            });

            return generi;
        }
    },
})