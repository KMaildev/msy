<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="user-pro">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img
                            src="{{ asset('design/assets/images/users/1.jpg') }}" alt="user-img"
                            class="img-circle">
                        <span class="hide-menu">
                            MSY
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>

                <li hidden>
                    <a class="waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false">
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('passport.index') }}" aria-expanded="false">
                        <span class="hide-menu">Passport</span>
                    </a>
                </li>


                <li>
                    <a class="waves-effect waves-dark" href="{{ route('reject.index') }}" aria-expanded="false">
                        <span class="hide-menu">Reject Passport</span>
                    </a>
                </li>


                <li>
                    <a class="waves-effect waves-dark" href="{{ route('new_demand.index') }}" aria-expanded="false">
                        <span class="hide-menu">New Demand</span>
                    </a>
                </li>


                <li>
                    <a class="waves-effect waves-dark" href="{{ route('old_demand.index') }}" aria-expanded="false">
                        <span class="hide-menu">Old Demand</span>
                    </a>
                </li>


                <li>
                    <a class="waves-effect waves-dark" href="{{ route('contract.index') }}" aria-expanded="false">
                        <span class="hide-menu">Contract</span>
                    </a>
                </li>


                <li>
                    <a class="waves-effect waves-dark" href="{{ route('sending.index') }}" aria-expanded="false">
                        <span class="hide-menu">Sending</span>
                    </a>
                </li>


                <li>
                    <a class="waves-effect waves-dark" href="{{ route('file_manager.index') }}"
                        aria-expanded="false">
                        <span class="hide-menu">File Manager</span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('overseas_agent.index') }}"
                        aria-expanded="false">
                        <span class="hide-menu">Overseas Agent</span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('country.index') }}" aria-expanded="false">
                        <span class="hide-menu">Country</span>
                    </a>
                </li>


            </ul>
        </nav>
    </div>
</aside>
