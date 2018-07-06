<!DOCTYPE html>
<html>
    <head>
        @include('layouts._head')
        @yield('extra_styles')
    </head>

    @include('layouts._sidebar')

   <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
        
    @include('layouts._scripts')
    @yield('extra_scripts')
   
</html>
