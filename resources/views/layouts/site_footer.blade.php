<footer
class="main-footer m-auto text-center w-full"
>
@php
$footer = App\Models\Footer::latest('id')->first(); 
@endphp

<h1 class="text-[#33353D] relative">
  &copy; {{ $footer->footer_span  }}
</h1>
</footer>