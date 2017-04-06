@extends('layouts.master')

@section('title')
  Password Generator
@endsection

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

  <h5>Populate the fields below to generate a random password that you may use.</h5>

  <!-- Form Section -->

  <form method='POST' action='output'>
    {{ csrf_field() }}
      <div class="row">
        <div class="twelve columns">
          <label for="length">* Password Length:</label>
          <input type="number" id="length" name="password_length" min="5" max="20" value="5" required>
          <p class="italic">Length must be between 5 and 20 characters.</p>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
          <label for="case">* Letter Case:</label>
          <input type="radio" name="case" value="lower_case" checked> Lower Only
          <input type="radio" name="case" value="mixed_case"> Upper and Lower
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
          <label>Include:</label>
          <input type="checkbox" name="numbers"> Numbers
          <input type="checkbox" name="special_characters"> Special Characters
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
          <input class="button-primary buttonCustom" type="submit" value="Submit">
        </div>
      </div>
    </form>

    <p class="italic">* Indicates a required field.</p>

  </div>
@endsection
