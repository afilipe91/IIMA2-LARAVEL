<strong>Institut de l'Internet et du multimédia</strong>

@if(Auth::check())
    <p>Mais attend tu es connecté en plus !</p>
@else
    <p>Tu n'est même pas connecté infidèle</p>
@endif