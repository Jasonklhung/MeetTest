@extends('layout.app')

@section('content')
        <!-- 右邊內容 -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <!-- 活動分析 -->
                    <h3 class="page-title">User list</h3>
                    @include('common.message')
                    <div class="panel bg-transparent">
                        <div class="panel-body">
                            <div class="row">
                                <!-- 分析數據-->
                                <div class="col-md-12 wrap">
                                    <div class="panel" id="manager">
                                        <div class="panel-title">
                                            <i></i>User list
                                        </div>
                                        <div class="panel-body">
                                            <div class="tabbable">
                                                <div class='coupon w-100'>
                                                    <form class='form-inline'>
                                                        <div class='btn-wrap'>
                                                            <a href="{{ route('user.create') }}"><button class='btn-bright mr-s float-right r-w-100' type='button'>Add User</button></a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <table class="table table-hover table-striped" id="user-list">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Account</th>
                                                            <th>Permission</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($user as $user)
                                                        <tr>
                                                            <td> {{$user->name}} </td>
                                                            <td> {{$user->account}} </td>
                                                            <td> {{$user->job_name}} </td>
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