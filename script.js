new Vue({
    el: "#app",
    data: {
        albumList: [],
        genres: [],
        loading: false,
        selectedGenre: "",
        filteredArray: [],
    },

    methods: {
        onChange() {

            if (this. selectedGenre == "") {
                this.filteredArray = this.albumList

                return
            }
            
            this.filteredArray = this.albumList.filter((album) =>  this.selectedGenre == album.genre)
        }   
    },

    mounted() {
        
        setTimeout(() => {
            axios.get("json.php")
                .then((resp) => {
                    this.albumList.push(...resp.data)

                    this.albumList.map((album) => {
                        if(!this.genres.includes(album.genre)){
                            this.genres.push(album.genre)
                        }
                    })

                    this.filteredArray.push(...resp.data)

                    this.loading = true
                })
        }, 3000)
            
    },
})