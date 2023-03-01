<x-layouts.app title="Home" meta-description="Home page">    

    <h1>Esto es de la home</h1>

    @dump($ejemplos)

    @foreach ( $ejemplos as $ejemplo)

        {{ $ejemplo['title']}}

    @endforeach

</x-layouts.app>