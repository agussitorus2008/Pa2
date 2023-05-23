<x-app-layout title="Home">
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">

        <!-- Start User chat -->
        <div class="user-chat w-100 overflow-hidden">

            <div class="chat-content d-lg-flex">
                <!-- start chat conversation section -->
                <div class="w-100 overflow-hidden position-relative">
                    <!-- conversation user -->
                    <div class="position-relative">
                        <div class="p-3 user-chat-topbar">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 d-block d-lg-none me-3">
                                            <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1">
                                                <i class="ri-arrow-left-s-line align-bottom"></i></a>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                    {{-- <img src="assets/images/users/avatar-2.jpg"
                                                        class="rounded-circle avatar-xs" alt=""> --}}
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username"
                                                            data-bs-toggle="offcanvas" href="#userProfileCanvasExample"
                                                            aria-controls="userProfileCanvasExample">Admin</a></h5>
                                                    <p class="text-truncate text-muted mb-0 userStatus"><small
                                                            class="fs-13">Online</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-4">

                                </div>
                            </div>

                        </div>
                        <!-- end chat user head -->

                        <div class="position-relative" id="users-chat">
                            <div class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar>
                                <ul class="list-unstyled chat-conversation-list" id="users-conversation">
                                    @if ($chats->count() > 0)
                                        @foreach ($chats as $chat)
                                            @if ($chat->sent_by != 1)
                                                <li class="chat-list right">
                                                    <div class="conversation-list">
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content">{{ $chat->message }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small
                                                                    class="text-muted time">{{ $chat->created_at->diffForHumans() }}</small>
                                                                <span class="text-success check-message-icon"><i
                                                                        class="ri-check-double-line align-bottom"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @else
                                                <li class="chat-list left">
                                                    <div class="conversation-list">
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content">{{ $chat->message }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small
                                                                    class="text-muted time">{{ $chat->created_at->diffForHumans() }}</small>
                                                                <span class="text-success check-message-icon"><i
                                                                        class="ri-check-double-line align-bottom"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach

                                    @endif
                                </ul>
                                <!-- end chat-conversation-list -->

                            </div>
                        </div>
                    </div>

                    <!-- end chat-conversation -->

                    <div class="chat-input-section p-3 p-lg-4">

                        <form id="chatinput-form" enctype="multipart/form-data">
                            <div class="row g-0 align-items-center">
                                <div class="col-auto">
                                    <div class="chat-input-links me-2">
                                        <div class="links-list-item">
                                            <button type="button" class="btn btn-link text-decoration-none emoji-btn"
                                                id="emoji-btn">
                                                <i class="bx bx-smile align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="chat-input-feedback">
                                        Please Enter a Message
                                    </div>
                                    <input type="text" class="form-control chat-input bg-light border-light"
                                        id="message" placeholder="Type your message..." autocomplete="off"
                                        name="message">
                                </div>
                                <div class="col-auto">
                                    <div class="chat-input-links ms-2">
                                        <div class="links-list-item">
                                            <button type="button" onclick="send_chat()"
                                                class="btn btn-success chat-send waves-effect waves-light">
                                                <i class="ri-send-plane-2-fill align-bottom"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="replyCard">
                        <div class="card mb-0">
                            <div class="card-body py-3">
                                <div class="replymessage-block mb-0 d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="conversation-name"></h5>
                                        <p class="mb-0"></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <button type="button" id="close_toggle"
                                            class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                            <i class="bx bx-x align-middle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('custom_js')
        <script>
            $(document).ready(function() {
                $('#users-conversation').scrollTop($('#users-conversation')[0].scrollHeight);
            });

            function send_chat() {
                var message = $('#message').val();
                $.ajax({
                    url: "{{ route('web.chat.send') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        message: message,
                    },
                    success: function(response) {
                        if (response.alert == 'success') {
                            success_toastr(response.message);
                            $('#message').val('');
                            $('#users-conversation').append(
                                '<li class="chat-list right"><div class="conversation-list"><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content"><p class="mb-0 ctext-content">' +
                                response.content +
                                '</p></div></div><div class="conversation-name"><small class="text-muted time">' +
                                response.time +
                                '</small><span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div></div></div></li>'
                            );
                            $('#users-conversation').scrollTop($('#users-conversation')[0].scrollHeight);
                        } else {
                            error_toastr(response.message);
                        }
                    }
                });
            }
        </script>
    @endsection
    </x-app-layouts>
