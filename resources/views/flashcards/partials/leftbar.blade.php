<div class="card text-white bg-dark">
    <div class="card-body px-4">
        <div class="card">
            <div class="card-body text-center">
                <p class="text-green-custom h5">Flashcards</p>
                <p class="text-muted">Tiempo transcurrido</p>
                <p class="h4 text-dark">00h : 05m : 25 s</p>
            </div>
        </div>
        <hr class="bg-white">    
        <div class="row">
            <div class="text-center text-white col-12">
                <p>Cantidad de cards</p>
            </div>
            @for ($i = 1; $i < 21; $i++)
                <div class="col-3 my-3 text-center">
                    <div class="py-2 card bg-danger">
                        {{$i}}
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>