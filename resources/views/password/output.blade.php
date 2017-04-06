@extends('layouts.master')

<!-- Start of HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  @section('title')
    New Password!
  @endsection
</head>
<body>

@section('content')
  <!-- Header Section -->

  <div class="container">
    <header>
      <div class="row">
        <div class="twelve columns">
          <h1>Password Generator</h1>
        </div>
      </div>
    </header>

    <!-- Main Output Section -->

    <div class="row">
      <div class="four columns">
          <h5>Your random password is: </h5>
      </div>
      <div class="eight columns">
        <h4 class="password">{{ $password }}</h4>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <input class="button" type="submit" value="Try Again" onclick="window.location.href='/a3/public/'">
      </div>
    </div>

    <!-- Supplementary Details -->

    <div class="row pushDown">
      <div class="twelve columns">
        <p>Your password includes the following specifications:</p>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <ul>
          <li>Length: {{ $password_length }}</li>
          <li>Case: {{ $case }}</li>
          <li>Numbers: {{ $numbers }}</li>
          <li>Special Characters: {{ $special_characters }}</li>
        </ul>
      </div>
    </div>
  </div>
@endsection
