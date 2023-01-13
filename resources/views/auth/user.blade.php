@extends('layouts.account')
@section('title')
User - UANGKU
@stop
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>USER INFORMATION</h1>
        </div>
        <div class="section-body">
          <div class="card p-2">
            <div class="card_header text-center">
              <h4>PROFILE SAYA</h4>
            </div>
            <div class="card_body">
              <div class="row">
                <div class="col col-sm-auto">
                  <p>NAMA</p>
                  <p>USERNAME</p>
                  <p>EMAIL</p>
                </div>
                <div class="col col-sm-auto">
                  <p>:</p>
                  <p>:</p>
                  <p>:</p>
                </div>
                <div class="col col-sm-auto">
                  <p>{{ auth()->user()->full_name }}</p>
                  <p>{{ auth()->user()->username }}</p>
                  <p>{{ auth()->user()->email }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
@endsection
