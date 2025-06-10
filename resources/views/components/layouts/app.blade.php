@props(['title' => '', 'subtitle' => ''])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head :title="$title" :subtitle="$subtitle" />
    <body>
        {{-- <x-layouts.navbar :title="$title" :subtitle="$subtitle" /> --}}
        
        <div class="container-fluid d-flex flex-column">
            <x-layouts.preloader />
            <div class="main-content ">
                <x-layouts.sidebar :title="$title" :subtitle="$subtitle" />
                <x-layouts.header :title="$title" :subtitle="$subtitle" />
                @yield(section: 'content')
            </div>
            <x-layouts.footer />
        </div>
        <x-layouts.js />
    </body>
</html>
