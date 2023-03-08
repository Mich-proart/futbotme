<x-layouts.app title="Home" meta-description="Home page">    

    <h1>Esto es de la home</h1>

    @dump($users)

    {{-- @foreach ( $users as $ejemplo)

        {{ $ejemplo['title']}}

    @endforeach --}}

</x-layouts.app>