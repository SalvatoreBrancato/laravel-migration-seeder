@extends( 'layout.app' )

@section('trains')
<main>
    @foreach ($trains as $elem)
    <div id="container" class="d-flex">
        <div class="riga d-flex justify-content-center align-items-center">Compagnia: {{ $elem['Azienda'] }}</div>
        <div class="riga d-flex justify-content-center align-items-center">Arrivo: {{ $elem['Stazione_di_arrivo'] }}</div>
        <div class="riga d-flex justify-content-center align-items-center">Partenza: {{ $elem['Stazione_di_partenza'] }}</div>
        <div class="riga d-flex justify-content-center align-items-center">Orario di partenza: {{ $elem['Orario_di_partenza'] }}</div>
        <div class="riga d-flex justify-content-center align-items-center">Orario di arrivo: {{ $elem['Orario_di_arrivo'] }}</div>
        <div class="riga d-flex justify-content-center align-items-center">Treno: {{ $elem['Codice_Treno'] }}</div>
        <div class="riga d-flex justify-content-center align-items-center">Carrozza nr. {{ $elem['Numero_Carrozze'] }}</div>
        <div class="riga d-flex justify-content-center align-items-center">Ritardo: {{ $elem['In_orario'] }}</div>
        <div class="riga d-flex justify-content-center align-items-center">Cancellato: {{ $elem['Cancellato'] }}</div>
    </div>
    @endforeach
</main>
@endsection