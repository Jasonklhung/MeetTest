@extends('layout.app')

@section('content')
        <!-- 右邊內容 -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <!-- 活動分析 -->
                    <h3 class="page-title">Bug list</h3>
                    @include('common.message')
                    <div class="panel bg-transparent">
                        <div class="panel-body">
                            <div class="row">
                                <!-- 分析數據-->
                                <div class="col-md-12 wrap">
                                    <div class="panel" id="manager">
                                        <div class="panel-title">
                                            <i></i>Bug list
                                        </div>
                                        <div class="panel-body">
                                            <div class="tabbable">
                                                <div class='coupon w-100'>
                                                    <form class='form-inline'>
                                                        <div class='btn-wrap'>
                                                            @if(Auth::user()->bugPermission->create == 'Y')
                                                            <a href="{{ route('bug.create') }}"><button class='btn-bright mr-s float-right r-w-100' type='button'>Add Bug</button></a>
                                                            @endif
                                                        </div>
                                                    </form>
                                                </div>
                                                <table class="table table-hover table-striped" id="bug-list">
                                                    <thead>
                                                        <tr>
                                                            <th>Summary</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($bug as $bug)
                                                            @if($bug->is_deleted == 'N')
                                                            <tr>
                                                                <td>{{ $bug->summary }}</td>
                                                                <td>{{ $bug->description }}</td>
                                                                @if($bug->status == 'Y')
                                                                <td>resolved</td>
                                                                @else
                                                                <td>processing</td>
                                                                @endif
                                                                <td>
                                                                    @if(Auth::user()->bugPermission->edit == 'Y')
                                                                    <a href="{{ route('bug.edit',['id'=>$bug->id]) }}"><button type="button" class="btn btn-primary">編輯</button></a>
                                                                    @endif
                                                                    <form method="post" class="d-inline" action="{{ route('bug.slove',['id'=>$bug->id]) }}">
                                                                        @csrf
                                                                        @if(Auth::user()->bugPermission->slove == 'Y')
                                                                        <button type="submit" class="btn btn-success">Slove</button>
                                                                        @endif
                                                                    </form>
                                                                    <form method="post" class="d-inline" action="{{ route('bug.destroy',['id'=>$bug->id]) }}">
                                                                        @csrf
                                                                        @if(Auth::user()->bugPermission->delete == 'Y')
                                                                        <button type="submit" class="btn btn-default">Delete</button>
                                                                        @endif
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endif
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
    $(document).ready(function(){
        $('#bug-list').DataTable({
        
        })
    })
</script>
@endsection