@extends('layout.master')
@section('content')

<!-- Default Card -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">
        @yield('link')
      </h5>
        
      {{-- View Form --}}
        <table class="table table-striped">
            <thead>
            @yield('thead')
            </thead>
            <tbody>
            @yield('tbody')
            </tbody>
        </table>
        {{-- End View Form --}}  

    </div>
  </div><!-- End Default Card -->
@endsection