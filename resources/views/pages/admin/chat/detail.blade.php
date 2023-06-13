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
                                    <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i
                                            class="ri-arrow-left-s-line align-bottom"></i></a>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                            {{-- <img src="{{ asset('images/profile/image/' . Auth::user()->image) }}"
                                                class="rounded-circle avatar-xs" alt="" /> --}}
                                            <span class="user-status"></span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username"
                                                    data-bs-toggle="offcanvas" href="#userProfileCanvasExample"
                                                    aria-controls="userProfileCanvasExample">{{ $user->nama }}</a>
                                            </h5>
                                            <p class="text-truncate text-muted mb-0 userStatus"><small
                                                    class="fs-13">Online</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end chat user head -->

                <div class="position-relative" id="users-chat">
                    <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar>
                        <ul class="list-unstyled chat-conversation-list" id="users-conversation">
                            @if ($chats != null)
                                @if ($chats->sent_by == 1)
                                    <li class="chat-list right">
                                        <div class="conversation-list">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" />
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">{{ $chats->message }}</p>
                                                    </div>
                                                </div>
                                                <div class="conversation-name">
                                                    <small
                                                        class="text-muted time">{{ $chats->created_at->diffForHumans() }}</small>
                                                    <span class="text-success check-message-icon"><i
                                                            class="ri-check-double-line align-bottom"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->
                                @else
                                    <li class="chat-list left">
                                        <div class="conversation-list">
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">{{ $chats->message }}</p>
                                                    </div>
                                                </div>
                                                <div class="conversation-name">
                                                    <small
                                                        class="text-muted time">{{ $chats->created_at->diffForHumans() }}</small>
                                                    <span class="text-success check-message-icon"><i
                                                            class="ri-check-double-line align-bottom"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                                @foreach ($chats->children as $chat)
                                    @if ($chat->sent_by == 1)
                                        <li class="chat-list right ">
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
                            @else
                                <div class="d-flex flex-column-fluid message p-3">
                                    <div class="message-wrapper">
                                        <div class="arrow"></div>
                                        <div class="text-wrapper">
                                            <div class="text">No chats yet</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </ul>
                        <!-- end chat-conversation-list -->
                    </div>
                </div>

                <!-- end chat-conversation -->

                <div class="chat-input-section p-3 p-lg-4">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="chat-input-links me-2">
                                <div class="links-list-item">
                                    {{-- <button type="button" class="btn btn-link text-decoration-none emoji-btn"
                                        id="emoji-btn">
                                        <i class="bx bx-smile align-middle"></i>
                                    </button> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="chat-input-feedback">Please Enter a Message</div>
                            <input type="text" class="form-control chat-input bg-light border-light" id="message"
                                placeholder="Type your message..." autocomplete="off" />
                        </div>
                        <div class="col-auto">
                            <div class="chat-input-links ms-2">
                                <div class="links-list-item">
                                    <button type="submit" onclick="send_chat()"
                                        class="btn btn-success chat-send waves-effect waves-light">
                                        <i class="ri-send-plane-2-fill align-bottom"></i>
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
<script>
    $(document).ready(function() {
        $('#users-conversation').scrollTop($('#users-conversation')[0].scrollHeight);
    });

    function send_chat() {
        var message = $('#message').val();
        $.ajax({
            url: "{{ route('admin.chat.send') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                message: message,
                sent_to: "{{ $user->id }}"
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
