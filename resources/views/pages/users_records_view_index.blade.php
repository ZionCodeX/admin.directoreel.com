
@extends('layouts.base')


@section('title', 'Users Record')


@section('header_links')
    @parent
@endsection


@section('alert_messages')
    @parent
@endsection


@section('sidebar')
    @parent
@endsection

 
<!-- MAIN PAGE CONTENT STARTS -->
@section('content')
    <!---------------------------------------------------------->
    <div class="card card-custom gutter-b">
      <div class="card-header">
       <div class="card-title">
        <h3 class="card-label">
            {{ $account_type ?? '' }} Accounts
         <small></small>
        </h3>
       </div>
      </div>
      <div class="card-body">
<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">UUID</th>
            <th scope="col">Name / Company</th>
            <th scope="col">Contact</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($users_show_all as $record )
        @if($record->account_type == $account_type)

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $record->pid_user ?? '' }}</td>
            <td>{{ $record->first_name ?? '' }} {{ $record->last_name ?? '' }} {{ $record->company_name ?? '' }} {{ $record->governing_body_name ?? '' }}</td>
            <td>
                <b>Profession: </b>{{ $record->profession ?? 'NA' }} <br>
                <b>Email: </b>{{ $record->email ?? '' }} <br> 
                <b>Phone: </b>{{ $record->phone ?? '' }}</td>
            <td>
                <span class="label label-inline label-light-success font-weight-bold">
                    ACTIVATED
                </span>
            </td>
            <td>{{ $record->created_at ?? '' }}</td>
        </tr>

        @endif
    @endforeach

    </tbody>
</table>



<!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
      </div>
     </div>
    <!---------------------------------------------------------->
@endsection 
<!-- MAIN PAGE CONTENT STOPS -->


@section('footer')
    @parent
@endsection 



@section('footer_scripts')
    @parent
@endsection  