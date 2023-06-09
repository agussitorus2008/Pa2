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

                        <div class="search-box ms-2">
                            <form id="content_filter">
                                <input type="text" name="keyword" onkeyup="load_list(1);" class="form-control"
                                    placeholder="Search Chat...">
                                <i class="ri-search-line search-icon"></i>
                            </form>
                        </div>
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

                        <div class="chat-message-list" id="list_result">

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
    @section('custom_js')
        <script>
            load_list(1);
        </script>
    @endsection


</x-app-layout>
