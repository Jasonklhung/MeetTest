<!-- 左邊選單pc -->
        <div class="sidebar pc" id="sidebar-nav">
            <div class="sidebar-scroll">
                <!-- 使用者 -->
                <div class="user" style="text-align: left; padding: 30px;">
                    <p class="title">Ticket Tracking System</p>
                    </select>
                    <p class="show-login-option">{{Auth::user()->name}}，Hello <a class="m-0 float-right" href="{{ route('logout') }}">Logout</a></p>
                </div>
                <nav>
                    <ul class="nav">
                    <!-------Ticket------->
                        <li class="c-l">
                            <a class="collapsed" data-toggle="collapse" href="#sub-1"><i class="fas fa-ticket-alt fa-fw"></i> <span>Ticket</span> <span class="float-right">+</span></a>
                            <div class="collapse" id="sub-1">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('ticket.index')}}">Ticket list</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <!-------Ticket End------->

                    <!-------Bug------->
                        <li class="c-l">
                            <a class="collapsed" data-toggle="collapse" href="#sub-2"><i class="fa fa-bug fa-fw"></i> <span>Bug</span> <span class="float-right">+</span></a>
                            <div class="collapse" id="sub-2">
                                <ul class="nav">
                                    <li class="selected">
                                        <a href="{{ route('bug.index')}}">Bug list</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <!-------Bug End------->

                    <!-------User------->
                    @if(Auth::user()->permission_id == '4')
                        <li class="c-l">
                            <a class="collapsed" data-toggle="collapse" href="#sub-3"><i class="fa fa-user fa-fw"></i> <span>User</span> <span class="float-right">+</span></a>
                            <div class="collapse" id="sub-3">
                                <ul class="nav">
                                    <li class="selected">
                                        <a href="{{ route('user.index')}}">User list</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                    <!-------User End------->
                    </ul>
                </nav>
            </div>
        </div>