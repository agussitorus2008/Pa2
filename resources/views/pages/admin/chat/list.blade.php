@foreach ($users as $user)
    <ul class="list-unstyled chat-list chat-user-list" id="userList">
        <li class="active">
            <a href="javascript: void(0);" onclick="load_chat('{{ route('admin.chat.show', $user->id) }}')">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                        <div class="avatar-xxs">
                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle img-fluid userprofile"
                                alt="">
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
