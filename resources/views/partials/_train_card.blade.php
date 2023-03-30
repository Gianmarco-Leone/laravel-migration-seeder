<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center mb-4">{{$train->azienda}}</h5>
        <h6 class="card-subtitle mb-0 text-muted">Codice treno:</h6>
        <p class="fw-semibold text-muted">{{$train->codice_treno}}</p>
        <h6>Stazione di partenza:</h6>
        <p class="card-text">
        {{$train->stazione_di_partenza}} 
        </p>
        <h6>Orario di partenza:</h6>
        <p class="card-text">
        {{$train->orario_partenza}} 
        </p>
        <hr>
        <h6>Stazione di arrivo:</h6>
        <p class="card-text">
        {{$train->stazione_di_arrivo}} 
        </p>
        <h6>Orario di arrivo:</h6>
        <p class="card-text">
        {{$train->orario_arrivo}} 
        </p>
        <div class="text-center">
            <a href="#" class="btn btn-success">Acquista</a>
        </div>
    </div>
</div>