@extends('layouts.master')
@section('title', 'index')

@section('content')
    <div class="card text-center">
        <div class="card-body">
            <h3 class="card-title">List of Invited Affiliates:</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                </tr>
                </thead>

                <?php $count = 0?>
                @foreach($invited_affiliates as $invited_affiliate)
                <tbody>
                <tr>
                    <th scope="row"><?php echo ++$count?></th>
                    <td>{{ $invited_affiliate->affiliate_id }}</td>
                    <td>{{ $invited_affiliate->name }}</td>
                </tr>
                </tbody>
                @endforeach
            </table>
            <form method="get" action="{{ route('welcome') }}">
                <button class="btn btn-primary" type="submit">Back</button>
            </form>
        </div>
    </div>
@endsection

