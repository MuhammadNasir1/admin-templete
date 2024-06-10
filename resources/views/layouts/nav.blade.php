<div class="flex ">
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <div class=" md:hidden flex justify-center m-auto">
        <img class="w-48" src="{{ asset('images/Horeca-green.svg') }}" alt="logo">
    </div>
</div>
<aside id="sidebar-multi-level-sidebar"
    class="fixed  bg-primary text-white top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="flex  justify-center mt-[30px] pr-4 mb-3">
        <a href="../"> <img class=" w-48" src="{{ asset('') }}" alt="Logo"></a>
    </div>
    <div class="h-full  py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2  pl-3 pr-6 font-medium">
            <li>
                <a href="../"
                    class=" flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="20" height="15" viewBox="0 0 16 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.5 7.33333C0.5 7.88562 0.947715 8.33333 1.5 8.33333H6.16667C6.71895 8.33333 7.16667 7.88562 7.16667 7.33333V1C7.16667 0.447715 6.71895 0 6.16667 0H1.5C0.947714 0 0.5 0.447715 0.5 1V7.33333ZM0.5 14C0.5 14.5523 0.947715 15 1.5 15H6.16667C6.71895 15 7.16667 14.5523 7.16667 14V11C7.16667 10.4477 6.71895 10 6.16667 10H1.5C0.947714 10 0.5 10.4477 0.5 11V14ZM8.83333 14C8.83333 14.5523 9.28105 15 9.83333 15H14.5C15.0523 15 15.5 14.5523 15.5 14V7.66667C15.5 7.11438 15.0523 6.66667 14.5 6.66667H9.83333C9.28105 6.66667 8.83333 7.11438 8.83333 7.66667V14ZM9.83333 0C9.28105 0 8.83333 0.447715 8.83333 1V4C8.83333 4.55228 9.28105 5 9.83333 5H14.5C15.0523 5 15.5 4.55228 15.5 4V1C15.5 0.447715 15.0523 0 14.5 0H9.83333Z"
                            fill="#FFFFFF" />
                    </svg>
                    <span class="ms-3">@lang('lang.Dashboard')</span>
                </a>
            </li>
            <li>
                <a href="../customers"
                    class="mt-3 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="20" height="18" viewBox="0 0 20 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.0002 7.98469C11.491 7.98469 12.6995 6.77614 12.6995 5.28531C12.6995 3.79449 11.491 2.58594 10.0002 2.58594C8.50933 2.58594 7.30078 3.79449 7.30078 5.28531C7.30078 6.77614 8.50933 7.98469 10.0002 7.98469Z"
                            fill="white" />
                        <path
                            d="M14.2741 13.2241C14.2272 10.6453 12.3334 8.57031 10.0003 8.57031C7.66719 8.57031 5.77281 10.6459 5.72656 13.2241H14.2741Z"
                            fill="white" />
                        <path
                            d="M3.20977 4.16172C4.32987 4.16172 5.23789 3.2537 5.23789 2.13359C5.23789 1.01349 4.32987 0.105469 3.20977 0.105469C2.08966 0.105469 1.18164 1.01349 1.18164 2.13359C1.18164 3.2537 2.08966 4.16172 3.20977 4.16172Z"
                            fill="white" />
                        <path
                            d="M6.42188 8.09781C6.38687 6.16094 4.96438 4.60156 3.21063 4.60156C1.45688 4.60156 0.035 6.16094 0 8.09781H6.42188Z"
                            fill="white" />
                        <path
                            d="M16.7879 4.16172C17.908 4.16172 18.816 3.2537 18.816 2.13359C18.816 1.01349 17.908 0.105469 16.7879 0.105469C15.6678 0.105469 14.7598 1.01349 14.7598 2.13359C14.7598 3.2537 15.6678 4.16172 16.7879 4.16172Z"
                            fill="white" />
                        <path
                            d="M20.0006 8.09781C19.9656 6.16094 18.5431 4.60156 16.7894 4.60156C15.0356 4.60156 13.6137 6.16094 13.5781 8.09781H20.0006Z"
                            fill="white" />
                    </svg>


                    <span class="flex-1 ms-3 whitespace-nowrap"> @lang('lang.Customers')</span>
                </a>
            </li>
            <li>
                <a href="../setting"
                    class="mt-3 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="20" height="20" viewBox="0 0 20 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.0038 7.78846C9.2982 7.78846 8.6374 8.06222 8.13708 8.56254C7.63912 9.06286 7.363 9.72366 7.363 10.4293C7.363 11.1349 7.63912 11.7957 8.13708 12.2961C8.6374 12.794 9.2982 13.0701 10.0038 13.0701C10.7095 13.0701 11.3703 12.794 11.8706 12.2961C12.3686 11.7957 12.6447 11.1349 12.6447 10.4293C12.6447 9.72366 12.3686 9.06286 11.8706 8.56254C11.6262 8.31629 11.3354 8.12105 11.0149 7.98816C10.6944 7.85528 10.3508 7.78739 10.0038 7.78846ZM19.7341 13.3463L18.1907 12.027C18.2638 11.5786 18.3016 11.1208 18.3016 10.6653C18.3016 10.2098 18.2638 9.74962 18.1907 9.30358L19.7341 7.98434C19.8507 7.88452 19.9342 7.75158 19.9734 7.60319C20.0126 7.4548 20.0057 7.29799 19.9536 7.15362L19.9324 7.09226C19.5076 5.90444 18.8711 4.80342 18.0538 3.84253L18.0113 3.79297C17.9121 3.67627 17.7798 3.59239 17.6319 3.55236C17.4841 3.51234 17.3275 3.51806 17.183 3.56877L15.2666 4.25081C14.5586 3.67025 13.7704 3.21241 12.9161 2.89381L12.5456 0.89017C12.5176 0.739229 12.4444 0.600367 12.3356 0.492032C12.2269 0.383697 12.0877 0.311017 11.9367 0.283649L11.873 0.271849C10.6458 0.0500087 9.35248 0.0500087 8.12528 0.271849L8.06156 0.283649C7.91051 0.311017 7.77136 0.383697 7.66261 0.492032C7.55385 0.600367 7.48063 0.739229 7.45268 0.89017L7.0798 2.90325C6.23357 3.22439 5.44525 3.68112 4.74575 4.25553L2.81527 3.56877C2.67076 3.51766 2.51411 3.51173 2.36615 3.55178C2.21819 3.59183 2.08592 3.67595 1.98691 3.79297L1.94443 3.84253C1.12856 4.80445 0.492255 5.90519 0.0658702 7.09226L0.0446302 7.15362C-0.0615699 7.44862 0.0257502 7.77902 0.26411 7.98434L1.82643 9.31774C1.75327 9.76142 1.71787 10.2145 1.71787 10.6629C1.71787 11.1161 1.75327 11.5692 1.82643 12.0081L0.26883 13.3415C0.152236 13.4414 0.0687882 13.5743 0.0295827 13.7227C-0.00962273 13.8711 -0.00272807 14.0279 0.0493501 14.1723L0.0705902 14.2336C0.497751 15.4207 1.12787 16.5181 1.94915 17.4833L1.99163 17.5329C2.09088 17.6496 2.22316 17.7335 2.37103 17.7735C2.5189 17.8135 2.67543 17.8078 2.81999 17.7571L4.75047 17.0703C5.45375 17.6485 6.23728 18.1064 7.08452 18.4226L7.4574 20.4357C7.48535 20.5866 7.55857 20.7255 7.66733 20.8338C7.77608 20.9422 7.91523 21.0149 8.06628 21.0422L8.13 21.054C9.36927 21.2771 10.6384 21.2771 11.8777 21.054L11.9414 21.0422C12.0924 21.0149 12.2316 20.9422 12.3404 20.8338C12.4491 20.7255 12.5223 20.5866 12.5503 20.4357L12.9208 18.4321C13.7751 18.1111 14.5634 17.6556 15.2714 17.0751L17.1877 17.7571C17.3322 17.8082 17.4888 17.8141 17.6368 17.7741C17.7848 17.7341 17.917 17.6499 18.016 17.5329L18.0585 17.4833C18.8798 16.5134 19.5099 15.4207 19.9371 14.2336L19.9583 14.1723C20.0598 13.8796 19.9725 13.5516 19.7341 13.3463ZM10.0038 14.5782C7.71228 14.5782 5.85496 12.7209 5.85496 10.4293C5.85496 8.13774 7.71228 6.28042 10.0038 6.28042C12.2954 6.28042 14.1527 8.13774 14.1527 10.4293C14.1527 12.7209 12.2954 14.5782 10.0038 14.5782Z"
                            fill="white" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">@lang('lang.Setting')</span>
                </a>
            </li>
            <li>
                <a href="../help"
                    class="mt-3 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="20" height="20" viewBox="0 0 20 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 10.2207C20 15.7435 15.5228 20.2207 10 20.2207C4.47715 20.2207 0 15.7435 0 10.2207C0 4.69786 4.47715 0.220703 10 0.220703C15.5228 0.220703 20 4.69786 20 10.2207ZM1.82439 10.2207C1.82439 14.736 5.48474 18.3963 10 18.3963C14.5153 18.3963 18.1756 14.736 18.1756 10.2207C18.1756 5.70544 14.5153 2.04509 10 2.04509C5.48474 2.04509 1.82439 5.70544 1.82439 10.2207Z"
                            fill="white" />
                        <circle cx="10" cy="10.2207" r="9" fill="white" />
                        <path
                            d="M11.364 15.6752C11.364 16.4283 10.7534 17.0388 10.0004 17.0388C9.24726 17.0388 8.63672 16.4283 8.63672 15.6752C8.63672 14.9221 9.24726 14.3115 10.0004 14.3115C10.7534 14.3115 11.364 14.9221 11.364 15.6752Z"
                            fill="#339B96" />
                        <path
                            d="M9.09109 10.2206V12.0388C9.09109 12.0388 9.09109 12.9479 10.0002 12.9479C10.9093 12.9479 10.9093 12.0388 10.9093 12.0388V10.2206C10.9093 10.2206 11.3449 10.096 11.5119 10.0282C11.5119 10.0282 11.8155 9.9198 12.0281 9.75661C12.2407 9.59352 12.433 9.39971 12.6051 9.17543C12.7873 8.95107 12.929 8.69107 13.0302 8.39535C13.1314 8.09964 13.182 7.86043 13.182 7.49334C13.182 6.88153 13.0454 6.25402 12.7721 5.79516C12.5089 5.32611 12.1344 4.96412 11.6485 4.70921C11.1627 4.44409 10.5959 4.31152 9.94809 4.31152C9.54327 4.31152 9.18391 4.36251 8.87018 4.46448C8.55636 4.55625 8.27809 4.68371 8.03513 4.84686C7.80233 4.99981 7.60495 5.17316 7.44301 5.3669C7.29119 5.55044 7.16973 5.72889 7.07863 5.90223C6.98754 6.07558 6.92681 6.22852 6.89644 6.36109C6.83571 6.55482 6.81041 6.71288 6.82053 6.83524C6.84077 6.9576 6.9015 7.05957 7.00272 7.14114C7.10394 7.22271 7.26082 7.30939 7.47337 7.40116C7.69605 7.47254 7.86812 7.49803 7.98958 7.47764C8.12116 7.45724 8.22745 7.39606 8.30845 7.2941C8.30845 7.2941 8.74 6.68033 8.86145 6.55797C8.99309 6.42541 9.155 6.32345 9.34736 6.25207C9.53964 6.1705 9.75727 6.12971 10.0002 6.12971C10.5265 6.12971 10.9162 6.25717 11.1693 6.51209C11.4324 6.75681 11.5119 6.9627 11.5119 7.43175C11.5119 7.74785 11.4563 8.00278 11.3449 8.19651C11.2335 8.39025 11.0868 8.54834 10.9046 8.67071C10.9046 8.67071 10.6572 8.76525 10.4547 8.85698C10.2625 8.93852 9.90936 9.07343 9.72718 9.17543C9.55509 9.26716 9.45864 9.36362 9.34736 9.50643C9.236 9.64916 9.09109 9.97589 9.09109 10.2206Z"
                            fill="#339B96" />
                    </svg>


                    <span class="flex-1 ms-3 whitespace-nowrap">@lang('lang.Help')</span>
                </a>
            </li>

            <li class="absolute bottom-5">
                <form action="../weblogout" method="post" class=" cursor-pointer" id="logoutform">
                    @csrf
                    <div onclick="logoutform.submit()"
                        class="mt-3 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg width="20" height="20" viewBox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.54545 8.18182H11.8182V10H4.54545V12.7273L0 9.09091L4.54545 5.45455V8.18182ZM3.63636 14.5455H6.09818C7.1479 15.4712 8.44244 16.0744 9.82648 16.2827C11.2105 16.4909 12.6252 16.2954 13.9009 15.7195C15.1766 15.1437 16.259 14.212 17.0182 13.0362C17.7775 11.8604 18.1814 10.4905 18.1814 9.09091C18.1814 7.69129 17.7775 6.3214 17.0182 5.14563C16.259 3.96985 15.1766 3.03813 13.9009 2.46227C12.6252 1.88642 11.2105 1.69089 9.82648 1.89915C8.44244 2.10741 7.1479 2.71061 6.09818 3.63637H3.63636C4.48242 2.50653 5.5803 1.58956 6.84279 0.958313C8.10528 0.327069 9.49759 -0.00105786 10.9091 2.56208e-06C15.93 2.56208e-06 20 4.07 20 9.09091C20 14.1118 15.93 18.1818 10.9091 18.1818C9.49759 18.1829 8.10528 17.8548 6.84279 17.2235C5.5803 16.5923 4.48242 15.6753 3.63636 14.5455Z"
                                fill="white" />
                        </svg>



                        <span class="flex-1 ms-3 whitespace-nowrap">@lang('lang.logout')</span>
                    </div>
                </form>
            </li>

        </ul>


    </div>

</aside>


<div class="p-4 sm:ml-[240px] bg-white relative sm:z-50 rounded-[20px] min-h-[100vh] ">
    <nav>
        <div class="flex justify-end items-center gap-5">

            {{-- =============language dropdown======================== --}}
            <button type="button" data-dropdown-toggle="language-dropdown-menu"
                class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                @if (session()->get('locale') !== 'de')
                    <svg class="w-6 h-6 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                        <path fill="#b22234" d="M0 0h7410v3900H0z" />
                        <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                            stroke-width="300" />
                        <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                        <g fill="#fff">
                            <g id="d">
                                <g id="c">
                                    <g id="e">
                                        <g id="b">
                                            <path id="a"
                                                d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                            <use xlink:href="#a" y="420" />
                                            <use xlink:href="#a" y="840" />
                                            <use xlink:href="#a" y="1260" />
                                        </g>
                                        <use xlink:href="#a" y="1680" />
                                    </g>
                                    <use xlink:href="#b" x="247" y="210" />
                                </g>
                                <use xlink:href="#c" x="494" />
                            </g>
                            <use xlink:href="#d" x="988" />
                            <use xlink:href="#c" x="1976" />
                            <use xlink:href="#e" x="2470" />
                        </g>
                    </svg>
                    English (US)
                @else
                    <svg class="h-6 w-6 rounded-full me-2" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256"
                        viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                            transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path
                                d="M 2.57 30 l 84.859 0 C 81.254 12.534 64.611 0.015 45.033 0 l -0.068 0 C 25.388 0.015 8.745 12.534 2.57 30 z"
                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 87.429 60 L 2.57 60 C 8.749 77.476 25.408 90 45 90 S 81.25 77.476 87.429 60 z"
                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,206,0); fill-rule: nonzero; opacity: 1;"
                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path
                                d="M 87.429 60 C 89.088 55.307 90 50.261 90 45 c 0 -5.261 -0.911 -10.307 -2.571 -15 L 2.57 30 C 0.911 34.693 0 39.739 0 45 c 0 5.261 0.912 10.307 2.571 15 L 87.429 60 z"
                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(221,0,0); fill-rule: nonzero; opacity: 1;"
                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                    German
                @endif


            </button>
            <!-- Dropdown -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                id="language-dropdown-menu">
                <ul class="py-2 font-medium" role="none">
                    <li>
                        <a href="../lang?lang=en"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                                    xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path fill="#bd3d44"
                                                d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                        </g>
                                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                        <path fill="#fff"
                                            d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                            transform="scale(3.9385)" />
                                    </g>
                                </svg>
                                English (US)
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="../lang?lang=de"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256"
                                    height="256" viewBox="0 0 256 256" xml:space="preserve">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path
                                            d="M 2.57 30 l 84.859 0 C 81.254 12.534 64.611 0.015 45.033 0 l -0.068 0 C 25.388 0.015 8.745 12.534 2.57 30 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path
                                            d="M 87.429 60 L 2.57 60 C 8.749 77.476 25.408 90 45 90 S 81.25 77.476 87.429 60 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,206,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path
                                            d="M 87.429 60 C 89.088 55.307 90 50.261 90 45 c 0 -5.261 -0.911 -10.307 -2.571 -15 L 2.57 30 C 0.911 34.693 0 39.739 0 45 c 0 5.261 0.912 10.307 2.571 15 L 87.429 60 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(221,0,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                </svg>
                                German
                            </div>
                        </a>
                    </li>
                </ul>
            </div>



            <div class="flex justify-end gap-6">
                <button>


                    <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                        class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                        type="button">
                        <svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.13043 0.130859C4.80824 0.130859 1.30439 3.63472 1.30439 7.95694V12.6341L0.38207 13.5564C0.00902661 13.9294 -0.10256 14.4904 0.0993266 14.9779C0.301214 15.4653 0.776831 15.783 1.30439 15.783H16.9565C17.4841 15.783 17.9597 15.4653 18.1616 14.9779C18.3635 14.4904 18.2519 13.9294 17.8788 13.5564L16.9565 12.6341V7.95694C16.9565 3.63472 13.4527 0.130859 9.13043 0.130859Z"
                                fill="#67748E" />
                            <path
                                d="M9.13082 21C6.96971 21 5.21777 19.2481 5.21777 17.0869H13.0439C13.0439 19.2481 11.292 21 9.13082 21Z"
                                fill="#67748E" />
                        </svg>

                        <div
                            class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
                        </div>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownNotification"
                        class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
                        aria-labelledby="dropdownNotificationButton">
                        <div class="block px-4 py-2 font-medium text-center text-white rounded-t-lg bg-primary mr-5">
                            @lang('lang.Notifications')
                        </div>
                        <div class="divide-y divide-white mr-5">
                            <a href="#" class="flex px-4 pt-3 hover:bg-gray-100 dark:hover:bg-gray-700">

                                <div class="w-full ps-3 pb-3 border-b-2 border-primary">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                                            class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                        what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                            </a>
                            <a href="#" class="flex px-4 pt-3 hover:bg-gray-100 dark:hover:bg-gray-700">

                                <div class="w-full ps-3 pb-3 border-b-2 border-primary">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                                            class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                        what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                            </a>
                            <a href="#" class="flex px-4 pt-3 hover:bg-gray-100 dark:hover:bg-gray-700">

                                <div class="w-full ps-3 pb-3 border-b-2 border-primary">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                                            class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                        what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                            </a>
                            <a href="#" class="flex px-4 pt-3 hover:bg-gray-100 dark:hover:bg-gray-700">

                                <div class="w-full ps-3 pb-3 border-b-2 border-primary">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                                            class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                        what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                            </a>




                        </div>
                        <a href="#"
                            class="block py-2 text-sm font-medium text-center text-white rounded-b-lg bg-primary mr-5">
                            <div class="inline-flex items-center ">
                                <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path
                                        d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                </svg>
                                @lang('lang.View_all')
                            </div>
                        </a>
                    </div>

                </button>
                <div class="flex items-center gap-2">
                    <div class="leading-tight  text-end">
                        <h2 class="text-md">{{ session('user_det')['name'] }}</h2>
                        <p class="text-xs  text-gray">{{ session('user_det')['role'] }}</p>
                    </div>
                    <div>
                        <img height="42px" width="42px" class="rounded-[5px] h-[42px] object-fill"
                            src="{{ session()->has('user_image') && session('user_image.user_image') !== null ? asset(session('user_image.user_image')) : asset('images/user.png') }}"
                            alt="user">
                    </div>
                </div>
            </div>
        </div>
    </nav>
