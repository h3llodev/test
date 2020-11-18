@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card" style="min-height: 400px">

            <div class="col-md-5 mx-auto py-3">
                <form action="{{ route('validateBasic.index') }}">
                    <input class="form-control" type="text" name="keyword" placeholder="Type something...">
                </form>
            </div>

            <div class="col-md-5 mx-auto py-3">
                <pre>// {{ url()->full() }}</pre>

                <pre>{{ !empty(request()->get('keyword')) ? $data : '' }}</pre>
            </div>
        </div>
    </div>

@endsection
