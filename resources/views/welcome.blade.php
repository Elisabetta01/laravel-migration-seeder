@extends( 'layouts.app' )

@section('trains')

    <div>
        @foreach($trains as $element)
        <div class="card" style="width: 18rem;">
                
            <div class="card-body">
                <h5 class="card-title">{{$element->Azienda}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Partenza da: {{$element->Stazione_di_Partenza}}</li>
                <li class="list-group-item">Arrivo a: {{$element->Stazione_di_Arrivo}}</li>
                <li class="list-group-item">Orario di partenza: {{$element->Orario_di_Partenza}}</li>
                <li class="list-group-item">Orario di arrivo: {{$element->Orario_di_Arrivo}}</li>
                <li class="list-group-item">Codice Treno: {{$element->Codice_Treno}}</li>
                <li class="list-group-item">Num. Carrozze: {{$element->Numero_Carrozze}}</li>
                <li class="list-group-item">In orario: {{$element->In_orario}}</li>
                <li class="list-group-item">Cancellato: {{$element->Cancellato}}</li>
            </ul>
        </div>
        @endforeach
    </div>

@endsection

