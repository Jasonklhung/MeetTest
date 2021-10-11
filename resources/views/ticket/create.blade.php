@extends('layout.app')

@section('content')
<div class="main dispatch-form">
            <div class="main-content">
                <div class="container-fluid">
                    <!-- 活動分析 -->
                    <h3 class="page-title">Add Ticket</h3>
                    <div class="panel bg-transparent">
                        <div class="panel-body">
                            <div class="row">
                                <!-- 分析數據-->
                                <div class="col-md-12 wrap">
                                    <div class="panel" id="manager">
                                        <div class="panel-title">
                                            <i class="fas fa-tasks"></i>Add a new Ticket
                                        </div>
                                        <div class="panel-body">
                                            <div class="tabbable">
                                                <form method="post" action="{{ route('ticket.store') }}">
                                                    @csrf
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Severity</label>
                                                        <select class="form-control" name="severity" required="">
                                                            <option value="high">High</option>
                                                            <option value="middle">Middle</option>
                                                            <option value="low">Low</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Priority</label>
                                                        <select class="form-control" name="priority" required="">
                                                            <option value="high">High</option>
                                                            <option value="middle">Middle</option>
                                                            <option value="low">Low</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-item">
                                                        <label class="d-block title-deco">Type</label>
                                                        <select class="form-control" name="type" required="">
                                                            @if(Auth::user()->ticketPermission->type_featureRequest_create == 'Y')
                                                            <option value="featureRequest">Feature Request</option>
                                                            @endif
                                                            @if(Auth::user()->ticketPermission->type_testCase_create == 'Y')
                                                            <option value="testCase">Test Case</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('ticket.index') }}"><button type="button" class="btn btn-default">Back</button></a>
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