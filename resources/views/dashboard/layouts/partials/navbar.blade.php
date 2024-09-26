<header class="header navbar navbar-expand-sm expand-header justify-content-between">
    {{-- <div class="search-animated toggle-search">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <form class="form-inline search-full form-inline search" role="search">
            <div class="search-bar">
                <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </div>
        </form>
        <span class="badge badge-secondary">Ctrl + /</span>
    </div> --}}
    <div class="d-md-flex align-items-center gap-3">
        <a href="javascript:void(0);" class="sidebarCollapse">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </a>
        <div class="d-none d-md-block">
            <h4 class="m-0 p-0 text-white text-capitalize">Hello, {{$username}}! 👋</h4>
            <p class="m-0 p-0" style="color: #9DA2AE;">Welcome back, we miss your coming</p>
        </div>
    </div>

    <ul class="navbar-item flex-row ms-lg-auto ms-0">

        <li class="nav-item theme-toggle-item d-none">
            <a href="javascript:void(0);" class="nav-link theme-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
            </a>
        </li>

        <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar-container">
                    <div class="avatar avatar-sm avatar-indicators avatar-online">
                        <img alt="avatar" src="{{asset('/assets/dashboard/src/assets/img/profile-30.png')}}" class="rounded-circle">
                    </div>
                </div>
            </a>

            <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                <div class="user-profile-section">
                    <div class="media mx-auto">
                        {{-- <div class="emoji me-2">
                            &#x1F44B;
                        </div> --}}
                        <div class="media-body">
                            <h5>Hello, {{$username}}</h5>
                            {{-- <p>Project Leader</p> --}}
                        </div>
                    </div>
                </div>
                @if($tingkatan == 'anggota')
                <div class="dropdown-item">
                    <a href="{{ route('member.user-profile') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                    </a>
                </div>
                <div class="dropdown-item">
                    <a href="{{ route('member.ubah_password') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Ubah Password</span>
                    </a>
                </div>
                @endif
                <div class="dropdown-item">
                    @if($tingkatan != 'anggota' && $tingkatan != 'rki')
                    <a href="/setting">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="setting">
                            <g fill="none" fill-rule="evenodd" stroke="#200E32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(2.5 1.5)">
                              <path d="M18.3066362,6.12356982 L17.6842106,5.04347829 C17.1576365,4.12955711 15.9906873,3.8142761 15.0755149,4.33867279 L15.0755149,4.33867279 C14.6398815,4.59529992 14.1200613,4.66810845 13.6306859,4.54104256 C13.1413105,4.41397667 12.7225749,4.09747295 12.4668193,3.66132725 C12.3022855,3.38410472 12.2138742,3.06835005 12.2105264,2.74599544 L12.2105264,2.74599544 C12.2253694,2.22917739 12.030389,1.72835784 11.6700024,1.3576252 C11.3096158,0.986892553 10.814514,0.777818938 10.2974829,0.778031878 L9.04347831,0.778031878 C8.53694532,0.778031878 8.05129106,0.97987004 7.69397811,1.33890085 C7.33666515,1.69793166 7.13715288,2.18454839 7.13958814,2.69107553 L7.13958814,2.69107553 C7.12457503,3.73688099 6.27245786,4.57676682 5.22654465,4.57665906 C4.90419003,4.57331126 4.58843537,4.48489995 4.31121284,4.32036615 L4.31121284,4.32036615 C3.39604054,3.79596946 2.22909131,4.11125048 1.70251717,5.02517165 L1.03432495,6.12356982 C0.508388616,7.03634945 0.819378585,8.20256183 1.72997713,8.73226549 L1.72997713,8.73226549 C2.32188101,9.07399614 2.68650982,9.70554694 2.68650982,10.3890161 C2.68650982,11.0724852 2.32188101,11.704036 1.72997713,12.0457667 L1.72997713,12.0457667 C0.820534984,12.5718952 0.509205679,13.7352837 1.03432495,14.645309 L1.03432495,14.645309 L1.6659039,15.7345539 C1.9126252,16.1797378 2.3265816,16.5082503 2.81617164,16.6473969 C3.30576167,16.7865435 3.83061824,16.7248517 4.27459956,16.4759726 L4.27459956,16.4759726 C4.71105863,16.2212969 5.23116727,16.1515203 5.71931837,16.2821523 C6.20746948,16.4127843 6.62321383,16.7330005 6.87414191,17.1716248 C7.03867571,17.4488473 7.12708702,17.764602 7.13043482,18.0869566 L7.13043482,18.0869566 C7.13043482,19.1435014 7.98693356,20.0000001 9.04347831,20.0000001 L10.2974829,20.0000001 C11.3504633,20.0000001 12.2054882,19.1490783 12.2105264,18.0961099 L12.2105264,18.0961099 C12.2080776,17.5879925 12.4088433,17.0999783 12.7681408,16.7406809 C13.1274382,16.3813834 13.6154524,16.1806176 14.1235699,16.1830664 C14.4451523,16.1916732 14.7596081,16.2797208 15.0389017,16.4393593 L15.0389017,16.4393593 C15.9516813,16.9652957 17.1178937,16.6543057 17.6475973,15.7437072 L17.6475973,15.7437072 L18.3066362,14.645309 C18.5617324,14.2074528 18.6317479,13.6859659 18.5011783,13.1963297 C18.3706086,12.7066935 18.0502282,12.2893121 17.6109841,12.0366133 L17.6109841,12.0366133 C17.17174,11.7839145 16.8513595,11.3665332 16.7207899,10.876897 C16.5902202,10.3872608 16.6602358,9.86577384 16.9153319,9.42791767 C17.0812195,9.13829096 17.3213574,8.89815312 17.6109841,8.73226549 L17.6109841,8.73226549 C18.5161253,8.20284891 18.8263873,7.04344892 18.3066362,6.13272314 L18.3066362,6.13272314 L18.3066362,6.12356982 Z"></path>
                              <circle cx="9.675" cy="10.389" r="2.636"></circle>
                            </g>
                          </svg> <span>Setting</span>
                    </a>
                    @elseif ($tingkatan !== 'rki')
                    <a href="/member/setting">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="setting">
                            <g fill="none" fill-rule="evenodd" stroke="#200E32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(2.5 1.5)">
                              <path d="M18.3066362,6.12356982 L17.6842106,5.04347829 C17.1576365,4.12955711 15.9906873,3.8142761 15.0755149,4.33867279 L15.0755149,4.33867279 C14.6398815,4.59529992 14.1200613,4.66810845 13.6306859,4.54104256 C13.1413105,4.41397667 12.7225749,4.09747295 12.4668193,3.66132725 C12.3022855,3.38410472 12.2138742,3.06835005 12.2105264,2.74599544 L12.2105264,2.74599544 C12.2253694,2.22917739 12.030389,1.72835784 11.6700024,1.3576252 C11.3096158,0.986892553 10.814514,0.777818938 10.2974829,0.778031878 L9.04347831,0.778031878 C8.53694532,0.778031878 8.05129106,0.97987004 7.69397811,1.33890085 C7.33666515,1.69793166 7.13715288,2.18454839 7.13958814,2.69107553 L7.13958814,2.69107553 C7.12457503,3.73688099 6.27245786,4.57676682 5.22654465,4.57665906 C4.90419003,4.57331126 4.58843537,4.48489995 4.31121284,4.32036615 L4.31121284,4.32036615 C3.39604054,3.79596946 2.22909131,4.11125048 1.70251717,5.02517165 L1.03432495,6.12356982 C0.508388616,7.03634945 0.819378585,8.20256183 1.72997713,8.73226549 L1.72997713,8.73226549 C2.32188101,9.07399614 2.68650982,9.70554694 2.68650982,10.3890161 C2.68650982,11.0724852 2.32188101,11.704036 1.72997713,12.0457667 L1.72997713,12.0457667 C0.820534984,12.5718952 0.509205679,13.7352837 1.03432495,14.645309 L1.03432495,14.645309 L1.6659039,15.7345539 C1.9126252,16.1797378 2.3265816,16.5082503 2.81617164,16.6473969 C3.30576167,16.7865435 3.83061824,16.7248517 4.27459956,16.4759726 L4.27459956,16.4759726 C4.71105863,16.2212969 5.23116727,16.1515203 5.71931837,16.2821523 C6.20746948,16.4127843 6.62321383,16.7330005 6.87414191,17.1716248 C7.03867571,17.4488473 7.12708702,17.764602 7.13043482,18.0869566 L7.13043482,18.0869566 C7.13043482,19.1435014 7.98693356,20.0000001 9.04347831,20.0000001 L10.2974829,20.0000001 C11.3504633,20.0000001 12.2054882,19.1490783 12.2105264,18.0961099 L12.2105264,18.0961099 C12.2080776,17.5879925 12.4088433,17.0999783 12.7681408,16.7406809 C13.1274382,16.3813834 13.6154524,16.1806176 14.1235699,16.1830664 C14.4451523,16.1916732 14.7596081,16.2797208 15.0389017,16.4393593 L15.0389017,16.4393593 C15.9516813,16.9652957 17.1178937,16.6543057 17.6475973,15.7437072 L17.6475973,15.7437072 L18.3066362,14.645309 C18.5617324,14.2074528 18.6317479,13.6859659 18.5011783,13.1963297 C18.3706086,12.7066935 18.0502282,12.2893121 17.6109841,12.0366133 L17.6109841,12.0366133 C17.17174,11.7839145 16.8513595,11.3665332 16.7207899,10.876897 C16.5902202,10.3872608 16.6602358,9.86577384 16.9153319,9.42791767 C17.0812195,9.13829096 17.3213574,8.89815312 17.6109841,8.73226549 L17.6109841,8.73226549 C18.5161253,8.20284891 18.8263873,7.04344892 18.3066362,6.13272314 L18.3066362,6.13272314 L18.3066362,6.12356982 Z"></path>
                              <circle cx="9.675" cy="10.389" r="2.636"></circle>
                            </g>
                          </svg> <span>Setting</span>
                    </a>
                    @endif
                </div>
                <div class="dropdown-item">
                    @if($tingkatan != 'anggota' && $tingkatan != 'rki')
                    <a href="/ubah-password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" enable-background="new 0 0 32 32" viewBox="0 0 32 32" id="change">
                            <path d="M12.945 9.962c.143 0 .285-.034.417-.101l6.495-3.332c.32-.164.517-.5.505-.863s-.23-.685-.56-.828l-6.387-2.764c-.282-.122-.607-.095-.865.075-.259.168-.416.456-.422.767l-.035 1.986c-4.971 1.68-8.268 6.37-8.087 11.651.144 4.194 2.542 8.049 6.26 10.059.139.075.288.11.435.11.33 0 .649-.179.815-.493.24-.455.071-1.02-.379-1.263-3.139-1.698-5.164-4.946-5.286-8.478-.145-4.224 2.36-8 6.207-9.584l-.037 2.107c-.005.327.159.634.434.808C12.604 9.915 12.774 9.962 12.945 9.962zM17.26 5.769l-3.364 1.726.056-3.158L17.26 5.769zM27.993 15.744c-.134-3.894-2.184-7.482-5.482-9.599-.434-.277-1.002-.148-1.275.288-.272.435-.145 1.012.285 1.288 2.785 1.787 4.516 4.81 4.628 8.087.135 3.918-2.026 7.486-5.472 9.246l-.054-2.106c-.01-.327-.187-.625-.468-.787-.281-.161-.626-.163-.907-.002l-6.347 3.602c-.313.178-.495.522-.469.884.027.361.258.674.594.803l6.502 2.492C19.635 29.98 19.745 30 19.855 30c.188 0 .376-.059.534-.172.251-.18.396-.475.389-.785l-.05-1.958C25.265 25.162 28.163 20.688 27.993 15.744zM15.528 26.41l3.288-1.866.081 3.157L15.528 26.41z"></path>
                          </svg>

                          </svg> <span>Ubah Password</span>
                    </a>
                    @elseif ($tingkatan !== 'rki')
                    <a href="/member/ubah-password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" enable-background="new 0 0 32 32" viewBox="0 0 32 32" id="change">
                            <path d="M12.945 9.962c.143 0 .285-.034.417-.101l6.495-3.332c.32-.164.517-.5.505-.863s-.23-.685-.56-.828l-6.387-2.764c-.282-.122-.607-.095-.865.075-.259.168-.416.456-.422.767l-.035 1.986c-4.971 1.68-8.268 6.37-8.087 11.651.144 4.194 2.542 8.049 6.26 10.059.139.075.288.11.435.11.33 0 .649-.179.815-.493.24-.455.071-1.02-.379-1.263-3.139-1.698-5.164-4.946-5.286-8.478-.145-4.224 2.36-8 6.207-9.584l-.037 2.107c-.005.327.159.634.434.808C12.604 9.915 12.774 9.962 12.945 9.962zM17.26 5.769l-3.364 1.726.056-3.158L17.26 5.769zM27.993 15.744c-.134-3.894-2.184-7.482-5.482-9.599-.434-.277-1.002-.148-1.275.288-.272.435-.145 1.012.285 1.288 2.785 1.787 4.516 4.81 4.628 8.087.135 3.918-2.026 7.486-5.472 9.246l-.054-2.106c-.01-.327-.187-.625-.468-.787-.281-.161-.626-.163-.907-.002l-6.347 3.602c-.313.178-.495.522-.469.884.027.361.258.674.594.803l6.502 2.492C19.635 29.98 19.745 30 19.855 30c.188 0 .376-.059.534-.172.251-.18.396-.475.389-.785l-.05-1.958C25.265 25.162 28.163 20.688 27.993 15.744zM15.528 26.41l3.288-1.866.081 3.157L15.528 26.41z"></path>
                          </svg>
                          <span>Ubah Password</span>
                    </a>
                    @endif
                </div>
                <div class="dropdown-item">
                    @if($tingkatan != 'anggota')
                    <a href="/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                    </a>
                    @else
                    <a href="/member/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                    </a>
                    @endif
                </div>

            </div>
        </li>
    </ul>
</header>
