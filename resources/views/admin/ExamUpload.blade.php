@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="/exam" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pub">Cohort start</label>
                            <input type="text" class="form-control-file" name="session_start" id="start"><br>

                            <label for="pub">Cohort end</label>
                            <input type="text" class="form-control-file" name="end" id="session_end"><br>

                            <label for="pub">Exam Timetable</label>
                            <input type="file" class="form-control-file" name="exam" id="exam" aria-describedby="fileHelp"><br>

                            <small id="fileHelp" class="form-text text-muted"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

