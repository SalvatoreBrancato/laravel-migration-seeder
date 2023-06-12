@extends( 'layout.app' )

@section('trains')
<main>
    @foreach ($trains as $elem)
    <div class="d-flex">
        <div>Compagnia: {{ $elem['Azienda'] }}</div>
        <div>Arrivo: {{ $elem['Stazione_di_arrivo'] }}</div>
        <div>Partenza: {{ $elem['Stazione_di_partenza'] }}</div>
        <div>Orario di partenza: {{ $elem['Orario_di_partenza'] }}</div>
        <div>Orario di arrivo: {{ $elem['Orario_di_arrivo'] }}</div>
        <div>Treno: {{ $elem['Codice_Treno'] }}</div>
        <div>Carrozza nr. {{ $elem['Numero_Carrozze'] }}</div>
        <div>Ritardo: {{ $elem['In_orario'] }}</div>
        <div>Cancellato: {{ $elem['Cancellato'] }}</div>
    </div>
    @endforeach
</main>
@endsection