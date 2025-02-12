@extends('layouts.web')
@section('body-section')


{{-- welcoem page  --}}
  <livewire:frontend.components.welcome-service />



  <div data-elementor-type="wp-page" data-elementor-id="7183" class="elementor elementor-7183">

  {{-- service descriptions  --}}

  <livewire:frontend.components.service-service />



       {{-- project page  --}}
       <livewire:frontend.components.about-us />




           {{-- number summary section two  --}}

           <livewire:frontend.components.number-summary-with-circle />




           {{-- product prices  --}}
           <livewire:frontend.components.pricing />

  </div>


@endsection
