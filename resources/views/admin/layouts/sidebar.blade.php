<div :class="{ 'dark text-white-dark': $store.app.semidark }">
    <nav
        class="sidebar fixed top-0 bottom-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300">
        <div class="h-full bg-white dark:bg-[#0e1726]">
            <div class="flex items-center justify-between px-4 py-3">
                <a href="{{ route('admin') }}" class="main-logo flex shrink-0 items-center">
                    <img class="ml-[5px] w-8 flex-none" src="{{ asset('/template/admin/assets/images/logo.png') }}"
                        alt="image">
                    <span
                        class="align-middle text-2xl font-semibold ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light lg:inline">
                        VeXe
                    </span>
                </a>
                <a href="javascript:;"
                    class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10"
                    @click="$store.app.toggleSidebar()">
                    <img src="{{ asset('/template/admin/assets/images/icons/ic_toggle.svg') }}"  alt="Icon">
                </a>
            </div>
            <ul class="pt-3 perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold">
                <li class="nav-item">
                    <a href="{{ route('admin') }}" type="button" class="nav-link group {{ request()->is('admin') ? 'active' : '' }}">
                        <div class="flex items-center">
                            <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5"
                                    d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                    fill="currentColor"></path>
                            </svg>

                            <span
                                class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blogs.index') }}" class="nav-link group {{ request()->segment(2) == 'blogs' ? 'active' : '' }}">
                        <div class="flex items-center">
                            <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.4036 22.4797L10.6787 22.015C11.1195 21.2703 11.3399 20.8979 11.691 20.6902C12.0422 20.4825 12.5001 20.4678 13.4161 20.4385C14.275 20.4111 14.8523 20.3361 15.3458 20.1317C16.385 19.7012 17.2106 18.8756 17.641 17.8365C17.9639 17.0571 17.9639 16.0691 17.9639 14.093V13.2448C17.9639 10.4683 17.9639 9.08006 17.3389 8.06023C16.9892 7.48958 16.5094 7.0098 15.9388 6.66011C14.919 6.03516 13.5307 6.03516 10.7542 6.03516H8.20964C5.43314 6.03516 4.04489 6.03516 3.02507 6.66011C2.45442 7.0098 1.97464 7.48958 1.62495 8.06023C1 9.08006 1 10.4683 1 13.2448V14.093C1 16.0691 1 17.0571 1.32282 17.8365C1.75326 18.8756 2.57886 19.7012 3.61802 20.1317C4.11158 20.3361 4.68882 20.4111 5.5477 20.4385C6.46368 20.4678 6.92167 20.4825 7.27278 20.6902C7.6239 20.8979 7.84431 21.2703 8.28514 22.015L8.5602 22.4797C8.97002 23.1721 9.9938 23.1721 10.4036 22.4797ZM13.1928 14.5171C13.7783 14.5171 14.253 14.0424 14.253 13.4568C14.253 12.8713 13.7783 12.3966 13.1928 12.3966C12.6072 12.3966 12.1325 12.8713 12.1325 13.4568C12.1325 14.0424 12.6072 14.5171 13.1928 14.5171ZM10.5422 13.4568C10.5422 14.0424 10.0675 14.5171 9.48193 14.5171C8.89637 14.5171 8.42169 14.0424 8.42169 13.4568C8.42169 12.8713 8.89637 12.3966 9.48193 12.3966C10.0675 12.3966 10.5422 12.8713 10.5422 13.4568ZM5.77108 14.5171C6.35664 14.5171 6.83133 14.0424 6.83133 13.4568C6.83133 12.8713 6.35664 12.3966 5.77108 12.3966C5.18553 12.3966 4.71084 12.8713 4.71084 13.4568C4.71084 14.0424 5.18553 14.5171 5.77108 14.5171Z"
                                    fill="currentColor"></path>
                                <path opacity="0.5"
                                    d="M15.486 1C16.7529 0.999992 17.7603 0.999986 18.5683 1.07681C19.3967 1.15558 20.0972 1.32069 20.7212 1.70307C21.3632 2.09648 21.9029 2.63623 22.2963 3.27821C22.6787 3.90219 22.8438 4.60265 22.9226 5.43112C22.9994 6.23907 22.9994 7.24658 22.9994 8.51343V9.37869C22.9994 10.2803 22.9994 10.9975 22.9597 11.579C22.9191 12.174 22.8344 12.6848 22.6362 13.1632C22.152 14.3323 21.2232 15.2611 20.0541 15.7453C20.0249 15.7574 19.9955 15.7691 19.966 15.7804C19.8249 15.8343 19.7039 15.8806 19.5978 15.915H17.9477C17.9639 15.416 17.9639 14.8217 17.9639 14.093V13.2448C17.9639 10.4683 17.9639 9.08006 17.3389 8.06023C16.9892 7.48958 16.5094 7.0098 15.9388 6.66011C14.919 6.03516 13.5307 6.03516 10.7542 6.03516H8.20964C7.22423 6.03516 6.41369 6.03516 5.73242 6.06309V4.4127C5.76513 4.29934 5.80995 4.16941 5.86255 4.0169C5.95202 3.75751 6.06509 3.51219 6.20848 3.27821C6.60188 2.63623 7.14163 2.09648 7.78361 1.70307C8.40759 1.32069 9.10805 1.15558 9.93651 1.07681C10.7445 0.999986 11.7519 0.999992 13.0188 1H15.486Z"
                                    fill="currentColor"></path>
                            </svg>
                            <span
                                class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Blog</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user') }}" class="nav-link group {{ request()->segment(2) == 'users' ? 'active' : '' }}">
                        <div class="flex items-center">
                            <svg class="shrink-0 group-hover:!text-primary" width="20" height="20"
                                viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.5" cx="15" cy="6" r="3" fill="currentColor">
                                </circle>
                                <ellipse opacity="0.5" cx="16" cy="17" rx="5" ry="3"
                                    fill="currentColor"></ellipse>
                                <circle cx="9.00098" cy="6" r="4" fill="currentColor"></circle>
                                <ellipse cx="9.00098" cy="17.001" rx="7" ry="4"
                                    fill="currentColor"></ellipse>
                            </svg>
                            <span
                                class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Users</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.banner') }}" class="nav-link group {{ request()->segment(2) == 'banner' ? 'active' : '' }}">
                        <div class="flex items-center">
                            <img src="{{ URL::asset('/template/admin/assets/images/icons/slider-icon.svg') }}" class="h-5 w-5" alt="" srcset="">
                            <span
                                class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Banner</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.booking') }}" class="nav-link group {{ request()->segment(2) == 'booking' ? 'active' : '' }}">
                        <div class="flex items-center">
                            <i class="fa-solid fa-ticket"></i>
                               <span
                                class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Booking</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
