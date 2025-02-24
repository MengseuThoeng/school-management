@extends('backend.layouts.master')
@section('title', 'Create Course')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Create Course</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Course Code</label>
                    <input type="text" name="course_code" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="course_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Syllabus</label>
                    <input type="text" name="syllabus" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="duration">Duration (in hours)</label>
                    <input type="number" name="duration" id="duration" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Price ($)</label>
                    <input type="number" step="0.01" name="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>Major ID</label>
                    <input type="number" name="major_id" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ url('/backend/courses') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection