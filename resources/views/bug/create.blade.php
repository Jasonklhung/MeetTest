@extends('layout.app')

@section('content')
<div class="main dispatch-form">
            <div class="main-content">
                <div class="container-fluid">
                    <!-- 活動分析 -->
                    <h3 class="page-title">Add Bug</h3>
                    <div class="panel bg-transparent">
                        <div class="panel-body">
                            <div class="row">
                                <!-- 分析數據-->
                                <div class="col-md-12 wrap">
                                    <div class="panel" id="manager">
                                        <div class="panel-title">
                                            <i class="fas fa-tasks"></i>Add a new Bug
                                        </div>
                                        <div class="panel-body">
                                            <div class="tabbable">
                                                <form method="post" action="{{ route('bug.store') }}">
                                                    @csrf
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Summary</label>
                                                        <input type="text" class="form-control" name="summary" placeholder="Summary" required="">
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Description</label>
                                                        <input type="text" class="form-control" name="description" placeholder="Description" required="">
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('bug.index') }}"><button type="button" class="btn btn-default">Back</button></a>
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