@extends('layout.app')

@section('content')
        <!-- 右邊內容 -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <!-- 活動分析 -->
                    <h3 class="page-title">Ticket list</h3>
                    @include('common.message')
                    <div class="panel bg-transparent">
                        <div class="panel-body">
                            <div class="row">
                                <!-- 分析數據-->
                                <div class="col-md-12 wrap">
                                    <div class="panel" id="manager">
                                        <div class="panel-title">
                                            <i></i>Ticket list
                                        </div>
                                        <div class="panel-body">
                                            <div class="tabbable">
                                                <div class='coupon w-100'>
                                                    <form class='form-inline'>
                                                        <div class='btn-wrap'>
                                                            @if(Auth::user()->ticketPermission->type_featureRequest_create == 'Y' || Auth::user()->ticketPermission->type_testCase_create == 'Y')
                                                            <a href="{{ route('ticket.create') }}"><button class='btn-bright mr-s float-right r-w-100' type='button'>Add Ticket</button></a>
                                                            @endif
                                                        </div>
                                                    </form>
                                                </div>
                                                <table class="table table-hover table-striped" id="ticket-list">
                                                    <thead>
                                                        <tr>
                                                            <th>Severity</th>
                                                            <th>Priority</th>
                                                            <th>Type</th>
                                                            <th>Status</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($ticket as $ticket)
                                                        <tr>
                                                            <td> {{ $ticket->severity }}</td>
                                                            <td> {{ $ticket->priority }}</td>
                                                            <td> {{ $ticket->type }}</td>
                                                            @if($ticket->status == 'Y')
                                                                <td>resolved</td>
                                                            @else
                                                                <td>processing</td>
                                                            @endif
                                                            <td>
                                                                <form method="post" class="d-inline" action="{{ route('ticket.slove',['id'=>$ticket->id]) }}">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-success">Slove</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('modal')

@endsection

@section('scripts')
<script>
    $('#ticket-list').DataTable({

    })
</script>
@endsection