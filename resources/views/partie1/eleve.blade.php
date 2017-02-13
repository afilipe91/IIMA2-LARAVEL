<h1>Eleve n° {{ $id }}</h1>

@if ($id > 20)
    <p>Tu es dans le fin de la classe</p>
@else
    <p>Tu es dans les 20 premiers de la classe</p>
@endif