@extends('layouts.default')

@section('content')

<div class="container">
    <h3>Add Employee</h3>

    <form action="{{ url('/employees') }}" method="POST" class="needs-validation" novalidate>
    @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <small class="form-text text-muted">Enter your name.</small>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class="invalid-feedback">
              Please enter a valid email address.
            </div>
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" required="required" min="20" max="50">
            <small class="form-text text-muted">Enter your age as on today.</small>
            <div class="invalid-feedback">
              Please enter the age between 20 and 50.
            </div>
          </div>

          <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" required="true">
            <small class="form-text text-muted">Enter your position or title.</small>
          </div>

          <div class="form-group">
            <label for="grade">Grade</label>
            <input type="number" class="form-control" id="grade" name="grade" required max="5" min="1">
            <small class="form-text text-muted">Enter the grade - 1 is top and 5 is low.</small>
          </div>

          <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
    
@endsection
