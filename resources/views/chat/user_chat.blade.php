<!-- resources/views/chat/user_chat.blade.php -->

<div class="container">
    <h4>Chat with Vendor #{{ $vendor_id }}</h4>

    <div id="chat-box" style="height: 300px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;">
        @foreach($messages as $message)
            <div class="{{ $message->sender_type == 'user' ? 'text-end' : 'text-start' }}">
                <strong>{{ $message->sender_type }}:</strong> {{ $message->message }}
            </div>
        @endforeach
    </div>

    <form id="chat-form" method="POST">
        @csrf
        <input type="hidden" name="vendor_id" value="{{ $vendor_id }}">
        <input type="hidden" name="sender_type" value="user">
        <textarea name="message" class="form-control mt-2" rows="2" placeholder="Type your message..."></textarea>
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
        .then(res => res.json())
        .then(data => {
            location.reload();
        });
    });
</script>

<script>
    function fetchMessages() {
        fetch("{{ route('chat.fetch') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                user_id: "{{ isset($user_id) ? $user_id : auth()->id() }}",
                vendor_id: "{{ isset($vendor_id) ? $vendor_id : (auth('vendor')->check() ? auth('vendor')->id() : '') }}"
            })
        })
        .then(response => response.json())
        .then(messages => {
            let chatBox = document.getElementById("chat-box");
            chatBox.innerHTML = ''; // Clear old messages

            messages.forEach(message => {
                let div = document.createElement("div");
                div.className = message.sender_type === "{{ auth('vendor')->check() ? 'vendor' : 'user' }}" ? 'text-end' : 'text-start';
                div.innerHTML = `<strong>${message.sender_type}:</strong> ${message.message}`;
                chatBox.appendChild(div);
            });

            chatBox.scrollTop = chatBox.scrollHeight;
        });
    }

    // Fetch every 5 seconds
    setInterval(fetchMessages, 5000);

    // Optional: Fetch immediately when page loads
    fetchMessages();
</script>
