{{-- Use your vendor layout if different --}}
<div class="container mt-4">
    <h4>Chat with User #{{ $user_id }}</h4>

    <div id="chat-box" style="height: 300px; overflow-y: auto; border: 1px solid #ccc; padding: 10px; background-color: #f9f9f9;">
        @forelse($messages as $message)
            <div class="mb-2 {{ $message->sender_type == 'vendor' ? 'text-end' : 'text-start' }}">
                <strong>{{ ucfirst($message->sender_type) }}:</strong> {{ $message->message }}
                
                {{-- Check if there is an attachment --}}
                @if($message->file_path)
                    @php
                        $filePath = asset('storage/' . $message->file_path);
                        $fileType = $message->file_type;
                    @endphp

                    {{-- Display image if the file is an image --}}
                    @if(in_array($fileType, ['jpg', 'jpeg', 'png', 'gif']))
                        <div class="mt-2">
                            <img src="{{ $filePath }}" alt="Image" style="max-width: 300px; max-height: 200px;">
                        </div>
                    @else
                        {{-- Display a download button for other files --}}
                        <div class="mt-2">
                            <a href="{{ $filePath }}" download>
                                <button class="btn btn-sm btn-primary">Download File</button>
                            </a>
                        </div>
                    @endif
                @endif
            </div>
        @empty
            <p class="text-muted">No messages yet.</p>
        @endforelse
    </div>

    <form id="chat-form" method="POST" class="mt-3" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <input type="hidden" name="vendor_id" value="{{ auth('vendor')->id() }}">
        <input type="hidden" name="sender_type" value="vendor">
        <div class="form-group">
            <textarea name="message" class="form-control" rows="2" placeholder="Type your message..." required></textarea>
        </div>
        <div class="form-group mt-2">
            <input type="file" name="attachment" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Send</button>
    </form>
</div>

<script>
    document.getElementById("chat-form").addEventListener("submit", function(e) {
        e.preventDefault();
        let form = this;
        let formData = new FormData(form);

        fetch("{{ route('chat.send') }}", {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'Message Sent') {
                form.reset(); // Clear message input
                fetchMessages(); // Refresh chat without reloading
            } else {
                console.error("Failed to send message:", data);
            }
        })
        .catch(error => {
            console.error("Error sending message:", error);
        });
    });

    function fetchMessages() {
        fetch("{{ route('chat.fetch') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                user_id: "{{ $user_id }}",
                vendor_id: "{{ auth('vendor')->id() }}"
            })
        })
        .then(response => response.json())
        .then(messages => {
            let chatBox = document.getElementById("chat-box");
            chatBox.innerHTML = ''; // Clear old messages

            messages.forEach(message => {
                let div = document.createElement("div");
                div.className = message.sender_type === "vendor" ? 'text-end' : 'text-start';
                div.innerHTML = `<strong>${message.sender_type}:</strong> ${message.message}`;

                // Check for file attachment
                if (message.file_path) {
                    let filePath = '/storage/' + message.file_path;
                    let fileType = message.file_type;
                    
                    if (['jpg', 'jpeg', 'png', 'gif'].includes(fileType)) {
                        div.innerHTML += `<div class="mt-2"><img src="${filePath}" alt="Image" style="max-width: 300px; max-height: 200px;"></div>`;
                    } else {
                        div.innerHTML += `<div class="mt-2"><a href="${filePath}" download><button class="btn btn-sm btn-primary">Download File</button></a></div>`;
                    }
                }

                chatBox.appendChild(div);
            });

            chatBox.scrollTop = chatBox.scrollHeight;
        })
        .catch(error => {
            console.error("Error fetching messages:", error);
        });
    }

    // Fetch every 5 seconds
    setInterval(fetchMessages, 5000);

    // Fetch immediately when page loads
    fetchMessages();
</script>
