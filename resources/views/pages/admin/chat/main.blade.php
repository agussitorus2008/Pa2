<x-app-layout title="Message">
    <div id="content_list">
        <div class="container-fluid">
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="chat-leftsidebar">
                    <div class="px-4 pt-4 mb-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="mb-4">Chats</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                                    title="Add Contact">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="search-box ms-2">
                            <form id="content_filter">
                                <input type="text" name="keyword" onkeyup="load_list(1);" class="form-control"
                                    placeholder="Search Chat...">
                                <i class="ri-search-line search-icon"></i>
                            </form>
                        </div> --}}

                        {{-- <div class="search-box ms-2">
                            <form id="content_filter">
                                <input type="text" name="keyword" onkeyup="load_list(1);" class="form-control"
                                    placeholder="Cari Data Pesanan...">
                                <i class="ri-search-line search-icon"></i>
                            </form>
                        </div> --}}
                        <form id="search-form" action="{{ route('admin.chat.index') }}" method="GET">
                            <div class="search-box">
                                <input type="text" name="search" id="search-input"
                                    class="form-control bg-light border-light search-input"
                                    placeholder="Cari Usernamae...">
                                <button type="submit" class="btn btn-outline-secondary search-icon">
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                        </form>
                        {{-- <div class="search-box">
                            <input type="text" class="form-control bg-light border-light" onclick="load_list(1)"
                                placeholder="Search here...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div> --}}

                    </div> <!-- .p-4 -->

                    <div class="chat-room-list" data-simplebar>

                        <div class="d-flex align-items-center px-4 mb-2">
                            <div class="flex-grow-1">
                                <h4 class="mb-0 fs-12 text-muted text-uppercase">Direct Messages</h4>
                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                                    title="New Message">
                                </div>
                            </div>
                        </div>

                        <div class="chat-message-list">
                            @foreach ($users as $user)
                                <ul class="list-unstyled chat-list chat-user-list" id="userList">
                                    <li class="active">
                                        <a href="javascript: void(0);"
                                            onclick="load_detail('{{ route('admin.chat.show', $user->id) }}')">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                    <div class="avatar-xxs">
                                                        <img src="assets/images/users/avatar-2.jpg"
                                                            class="rounded-circle img-fluid userprofile" alt="">
                                                    </div>
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-truncate mb-0">{{ $user->nama }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- end chat leftsidebar -->
                <!-- Start User chat -->
                <div class="user-chat w-100 overflow-hidden">

                    <div class="chat-content d-lg-flex" id="content_detail">

                    </div>
                </div>

            </div>
            <!-- end chat-wrapper -->

        </div>
    </div>


    <script>
        document.getElementById("search-input").addEventListener("keyup", function(event) {
            event.preventDefault();
            if (event.keyCode === 13) {
                document.getElementById("search-form").submit();
            }
        });
    </script>
    {{-- <div id="content_detail"></div>
    @section('custom_js')
        <script>
            load_list(1);
        </script>
    @endsection --}}


</x-app-layout>
