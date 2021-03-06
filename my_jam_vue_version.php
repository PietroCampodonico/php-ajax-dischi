<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <link rel="stylesheet" href="dist/app.css">
    <title>Vue-dischi</title>
</head>

<body>
    <div id="app">

        <h1>MyJam</h1>

        <div v-if="this.loading">
            <label for="musicGenre">Scegli il tuo genere preferito!</label>
            <select name="musicGenre" id="musicGenre" v-model="selectedGenre" @change="onChange()">
                <option value="">All genres</option>
                <option :value="genre" v-for="(genre, index) in genres">{{genre}}</option>
            </select>

        </div>


        <h2 v-if="!this.loading">La tua musica si sta caricando!</h2>


        <div class="album-container" v-else="this.loading">
            <div class="album" v-for="album in filteredArray">
                <img :src="album.poster" >
                <h3 class="album-title">{{album.author}}</h3>
                <h4 class="album-release-year">{{album.year}}</h4>
            </div>

        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>