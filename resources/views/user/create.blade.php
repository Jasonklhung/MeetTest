@extends('layout.app')

@section('content')
<div class="main dispatch-form">
            <div class="main-content">
                <div class="container-fluid">
                    <!-- 活動分析 -->
                    <h3 class="page-title">Add User</h3>
                    <div class="panel bg-transparent">
                        <div class="panel-body">
                            <div class="row">
                                <!-- 分析數據-->
                                <div class="col-md-12 wrap">
                                    <div class="panel" id="manager">
                                        <div class="panel-title">
                                            <i class="fas fa-tasks"></i>Add a new User
                                        </div>
                                        <div class="panel-body">
                                            <div class="tabbable">
                                                <form method="post" action="{{ route('user.store') }}">
                                                    @csrf
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Name</label>
                                                        <input type="text" class="form-control" name="name" placeholder="name" required="">
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Account</label>
                                                        <input type="text" class="form-control" name="account" placeholder="account" required="">
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="password" required="">
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Permission</label>
                                                        <select class="form-control" name="permission" required="">
                                                            @foreach($permission as $permission)
                                                            <option value="{{ $permission->id }}">{{ $permission->job_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('user.index') }}"><button type="button" class="btn btn-default">Back</button></a>
                                                        <button type="submit" class="btn btn-primary">Create</button>
                                                    </div>
                                                </form>
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

@section('scripts')

@endsection