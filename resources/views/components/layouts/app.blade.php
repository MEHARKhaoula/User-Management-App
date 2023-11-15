<!DOCTYPE html>
<html>
<head>
   
   
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script> --}}
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    @vite('resources/css/app.css')
    <title>@yield('title', 'Flex Test')</title>
    @livewireScripts

</head>
<body>
  
    
   

    <livewire:navbar/>
    <div class='mx-14 mt-10 '>

    
    {{$slot}}
</div>
   </div>

   @livewireScripts 
   @livewire('wire-elements-modal')
 
</body>
</html>
