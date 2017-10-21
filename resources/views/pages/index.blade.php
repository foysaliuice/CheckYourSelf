@extends('master')
@section('title', 'Exam')
@section('content')
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12">
      <h2>Exam</h2>
      <div class="form-group">
        <label for="">Please select your Exam topic</label>
        <select class="form-control" name="testTopic">
          <option value="">Choose one</option>
          <option value="">English</option>
          <option value="">Bangla</option>
          <option value="">Mathematics</option>
          <option value="">General Knowledge</option>
        </select><br>
        <a href="#" class="btn btn-primary pull-right">Go <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
@endsection
