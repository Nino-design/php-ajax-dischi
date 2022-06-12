<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
    <header class="container-fluid">
        <img src="./img/spotify-icon-marilyn-scott-0.png" alt="">
    </header>

    <main id="root">
        <section>
            <div class="container d-flex justify-content-start align-items-center mt-5 mb-5">
                <div class="row row-cols-5">
                    <div v-for="element in database" class="album-wrapper m-3 text-center">
                        <img class="pt-3" :src="element.poster" alt="" />
                        <h5 class="fw-bold mt-2 mb-2">{{ element.title }}</h5>
                        <p class="m-0">{{ element.author }}</p>
                        <span>{{ element.year }}</span>
                    </div>
                </div>
            </div>
        </section>
    </main>




    <script src="js/script.js"></script>
</body>

</html>