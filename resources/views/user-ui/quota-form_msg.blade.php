<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Request History</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
  :root {
    --primary-color: #0049a7;
    --secondary-color: #6c757d;
    --success-color: #198754;
    --warning-color: #ffc107;
    --danger-color: #dc3545;
    --light-bg: #f8f9fa;
    --card-bg: #ffffff;
    --text-color: #212529;
  }

  body {
    background-color: var(--light-bg);
    font-family: 'Segoe UI', sans-serif;
    color: var(--text-color);
  }

  .container {
    max-width: 1200px;
  }

  .card {
    background-color: var(--card-bg);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: none;
    border-radius: 10px;
  }
  .header-section{
    background-color: var(--primary-color);
    padding: 20px;
    border-radius: 10px;
  }

  .header-section h3 {
    color: white;
    font-weight: 600;
  }

  .header-section p {
    color: white;
  }

  .btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
  }

  .btn-primary:hover {
    background-color: #003c88;
    border-color: #003c88;
  }

  .btn-outline-secondary {
    color: var(--secondary-color);
    border-color: var(--secondary-color);
  }

  .btn-outline-secondary:hover {
    background-color: var(--secondary-color);
    color: white;
  }

  .status-badge {
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 5px;
  }

  .status-pending {
    background-color: var(--warning-color);
    color: #000;
  }

  .status-approved {
    background-color: var(--success-color);
    color: #fff;
  }

  .status-rejected {
    background-color: var(--danger-color);
    color: #fff;
  }

  .table th {
    color: white;
    font-weight: 600;
    font-size: 0.95rem;
    background-color: var(--primary-color);
    padding: 10px;
  }

  .table td {
    vertical-align: middle;
    font-size: 0.95rem;
    padding: 10px;
  }

  .message-btn {
    background-color: var(--secondary-color);
    color: white;
    border: none;
  }

  .message-btn:hover {
    background-color: #5a6268;
  }

  .message-count {
    background: var(--danger-color);
    color: white;
    border-radius: 50%;
    font-size: 0.75rem;
    padding: 2px 6px;
    margin-left: 5px;
  }

  .modal-header {
    background-color: var(--primary-color);
    color: white;
    border-bottom: none;
  }

  .modal-title {
    color: white;
  }

  .modal-body {
    background-color: #fefefe;
  }

  .image-gallery img {
    max-width: 100px;
    border-radius: 6px;
    margin-right: 10px;
    border: 1px solid #dee2e6;
  }

  .chat-modal .modal-header {
    background-color: var(--primary-color);
    color: white;
  }

  .chat-body {
    max-height: 300px;
    overflow-y: auto;
    background-color: #f4f7fb;
    padding: 1rem;
  }

  .chat-body .message {
    margin-bottom: 1rem;
  }

  .chat-body .sent {
    text-align: right;
  }

  .chat-body .received {
    text-align: left;
  }

  .chat-input {
    background-color: #f1f3f5;
    padding: 0.5rem;
  }
  .chat-body img {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5px;
}

</style>

</head>
<body>
 <!-- ===== NAVIGATION BAR ===== -->
 @include('user-ui.navbar')
<div class="container py-5 mt-5">
  <div class="card p-2">
    <div class="header-section text-center">
      <h3>Request History</h3>
      <p class="mb-0">View and manage your submitted requests</p>
    </div>

    <div class="search-filter-section mt-4">
      <div class="row g-3">
        <div class="col-12 col-md-9">
          <div class="input-group w-100">
            <span class="input-group-text bg-white border-end-0">
              <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Search requests..." disabled>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <select class="form-select w-100" disabled>
            <option selected>All Status</option>
            <option>Pending</option>
            <option>Approved</option>
            <option>Rejected</option>
          </select>
        </div>
      </div>
    </div>

    <div class="table-responsive mt-4">
      <table class="table">
        <thead class="table-header">
          <tr>
            <th>Request ID</th>
            <th>Vessel Name</th>
            <th>Voyage Number</th>
            <th>ETA</th>
            <th>Request Type</th>
            <th>Status</th>
            <th>Submitted Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($requests as $request)
            <tr>
              <td>#REQ{{ str_pad($request->id, 3, '0', STR_PAD_LEFT) }}</td>
              <td>{{ $request->vessel_name }}</td>
              <td>{{ $request->voyage_number }}</td>
              <td>{{ $request->eta }}</td>
              <td>{{ $request->request_type }}</td>
              <td>
                <span class="status-badge 
                  @if($request->status == 'Pending') status-pending 
                  @elseif($request->status == 'Approved') status-approved 
                  @elseif($request->status == 'Rejected') status-rejected 
                  @endif">
                  <i class="bi 
                    @if($request->status == 'Pending') bi-clock 
                    @elseif($request->status == 'Approved') bi-check-circle 
                    @elseif($request->status == 'Rejected') bi-x-circle 
                    @endif"></i> 
                  {{ $request->status }}
                </span>
              </td>
              <td>{{ $request->created_at->format('Y-m-d') }}</td>
              <td>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#requestDetailsModal{{ $request->id }}">
                    <i class="bi bi-eye"></i> View
                  </button>
                  <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#chatModal{{ $request->vendor_id }}">
                    <i class="bi bi-chat-dots"></i> Message
                </button>
                
                  <!-- Optional Chat Button -->
                </div>
              </td>
            </tr>
          </tbody>
                  <!-- Chat Modal for Vendor  start here -->
            <div class="modal fade" id="chatModal{{ $request->vendor_id }}" tabindex="-1" aria-labelledby="chatModalLabel{{ $request->vendor_id }}" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <i class="bi bi-chat-dots me-2"></i>
                    <h5 class="modal-title mb-0" id="chatModalLabel{{ $request->vendor_id }}">Chat with Vendor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <div id="chat-box-{{ $request->vendor_id }}" class="chat-box" style="height: 300px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;">
                      <!-- Messages will be loaded here -->
                    </div>
                    <form id="chat-form-{{ $request->vendor_id }}" method="POST" enctype="multipart/form-data" class="mt-3">
                      @csrf
                      <input type="hidden" name="vendor_id" value="{{ $request->vendor_id }}">
                      <input type="hidden" name="sender_type" value="user">
                      <textarea name="message" class="form-control" rows="2" placeholder="Type your message..."></textarea>
                      <input type="file" name="attachment" class="form-control mt-2" accept="image/*,.pdf,.doc,.docx">
                      <button type="submit" class="btn btn-primary mt-2">Send</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Chat Modal for Vendor  End here -->

            <!-- Chat Modal script for Vendor  Start here -->
            <script>
              document.addEventListener("DOMContentLoaded", function () {
                  @foreach($requests as $request)
                      const form{{ $request->vendor_id }} = document.getElementById("chat-form-{{ $request->vendor_id }}");
                      const chatBox{{ $request->vendor_id }} = document.getElementById("chat-box-{{ $request->vendor_id }}");
              
                      // Submit form
                      form{{ $request->vendor_id }}.addEventListener("submit", function(e) {
                          e.preventDefault();
              
                          const formData = new FormData(form{{ $request->vendor_id }});
              
                          // ✅ Don't manually set headers when using FormData
                          fetch("{{ route('chat.send') }}", {
                              method: "POST",
                              body: formData
                          })
                          .then(res => res.json())
                          .then(() => {
                              fetchMessages{{ $request->vendor_id }}(); // Refresh messages
                              form{{ $request->vendor_id }}.reset();    // Clear form
                          })
                          .catch(error => console.error("Error sending message:", error));
                      });
              
                      // Fetch messages
                      function fetchMessages{{ $request->vendor_id }}() {
                          fetch("{{ route('chat.fetch') }}", {
                              method: "POST",
                              headers: {
                                  "Content-Type": "application/json",
                                  "X-CSRF-TOKEN": "{{ csrf_token() }}"
                              },
                              body: JSON.stringify({
                                  user_id: "{{ auth()->id() }}",
                                  vendor_id: "{{ $request->vendor_id }}"
                              })
                          })
                          .then(response => response.json())
                          .then(messages => {
                              chatBox{{ $request->vendor_id }}.innerHTML = '';
                              messages.forEach(message => {
                                  const div = document.createElement("div");
                                  div.className = message.sender_type === 'user' ? 'text-end mb-2' : 'text-start mb-2';
              
                                  let sender = message.sender_type === 'user' ? 'You' : (message.sender_name || 'Vendor');
                                  let messageHtml = `<strong>${sender}:</strong> ${message.message || ''}`;
              
                                  if (message.file_path) {
                                      const ext = message.file_path.split('.').pop().toLowerCase();
                                      const fullPath = `/storage/${message.file_path}`;
              
                                      if (['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'].includes(ext)) {
                                          messageHtml += `<br><img src="${fullPath}" style="max-width:150px; border-radius:8px;" alt="Image">`;
                                      } else {
                                          const fileName = message.file_path.split('/').pop();
                                          messageHtml += `<br><a href="${fullPath}" target="_blank">📎 ${fileName}</a>`;
                                      }
                                  }
              
                                  div.innerHTML = messageHtml;
                                  chatBox{{ $request->vendor_id }}.appendChild(div);
                              });
                              chatBox{{ $request->vendor_id }}.scrollTop = chatBox{{ $request->vendor_id }}.scrollHeight;
                          });
                      }
              
                      // Auto-refresh
                      setInterval(fetchMessages{{ $request->vendor_id }}, 5000);
                      fetchMessages{{ $request->vendor_id }}();
                  @endforeach
              });
              </script>
              
              
                    
                        <!-- Request Details Modal -->
                        <div class="modal fade" id="requestDetailsModal{{ $request->id }}" tabindex="-1">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Request Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row mb-4">
                                  <div class="col-md-6">
                                    <h6 class="text-primary mb-3"><i class="bi bi-ship"></i> Vessel Information</h6>
                                    <p><strong>Vessel Name:</strong> {{ $request->vessel_name }}</p>
                                    <p><strong>Voyage Number:</strong> {{ $request->voyage_number }}</p>
                                    <p><strong>IMO Number:</strong> {{ $request->imo_number }}</p>
                                    <p><strong>ETA:</strong> {{ $request->eta }}</p>
                                  </div>
                                  <div class="col-md-6">
                                    <h6 class="text-primary mb-3"><i class="bi bi-clipboard-check"></i> Service Details</h6>
                                    <p><strong>Request Type:</strong> {{ $request->request_type }}</p>
                                    <p><strong>Status:</strong> {{ $request->status }}</p>
                                    <p><strong>Submitted Date:</strong> {{ $request->created_at->format('Y-m-d') }}</p>
                                  </div>
                                </div>
                                <div class="row mb-4">
                                  <div class="col-12">
                                    <h6 class="text-primary mb-3"><i class="bi bi-card-text"></i> Description</h6>
                                    <p class="p-3 bg-light rounded">{{ $request->description }}</p>
                                  </div>
                                </div>
                                @if($request->images)
                                <div class="row">
                                  <div class="col-12">
                                    <h6 class="text-primary mb-3"><i class="bi bi-images"></i> Images</h6>
                                    @foreach(json_decode($request->images, true) as $img)
                                      <img src="{{ asset('storage/' . $img) }}" class="gallery-image" alt="Image">
                                    @endforeach
                                  </div>
                                </div>
                                @endif
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                      @empty
                        <tr>
                          <td colspan="8" class="text-center text-muted">No requests submitted to this vendor. 
                            <br>
                            <p class="btn btn-primary btn-lg quote-btn" style="color: white;">
                            <i class="bi bi-card-text me-2"></i><a href="{{ route('quota.quota-form', ['vendor_id' => $vendor->id]) }}" class="text-decoration-none" style="color: white;">Submit your Quote</a>
                        </p></td>
                          
                        </tr>
                      @endforelse
                    </tbody>        
                  </table>
                </div>

                <!-- Static Request Details Modal -->
                <div class="modal fade" id="requestDetailsModal" tabindex="-1" aria-labelledby="requestDetailsModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Request Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row mb-4">
                          <div class="col-md-6">
                            <h6 class="text-primary mb-3"><i class="bi bi-ship"></i> Vessel Information</h6>
                            <p><strong>Vessel Name:</strong> MV Ocean Star</p>
                            <p><strong>Voyage Number:</strong> VOY123</p>
                            <p><strong>IMO Number:</strong> IMO1234567</p>
                            <p><strong>ETA:</strong> 2024-03-15 14:00</p>
                          </div>
                          <div class="col-md-6">
                            <h6 class="text-primary mb-3"><i class="bi bi-clipboard-check"></i> Service Details</h6>
                            <p><strong>Request Type:</strong> Hold Cleaning</p>
                            <p><strong>Status:</strong> <span class="status-badge status-pending"><i class="bi bi-clock"></i> Pending</span></p>
                            <p><strong>Submitted Date:</strong> 2024-03-10</p>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-12">
                            <h6 class="text-primary mb-3"><i class="bi bi-card-text"></i> Service Description</h6>
                            <p class="p-3 bg-light rounded">Full hold cleaning required for next cargo loading. Special attention needed for hold #3 due to previous cargo residue.</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <h6 class="text-primary mb-3"><i class="bi bi-images"></i> Hold Images</h6>
                            <img src="hold1.jpg" class="gallery-image" alt="Hold 1">
                            <img src="hold2.jpg" class="gallery-image" alt="Hold 2">
                            <img src="hold3.jpg" class="gallery-image" alt="Hold 3">
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary"><i class="bi bi-download"></i> Download Report</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
      <!-- Chat Modal script for Vendor  End here -->
      
    @include('user-ui.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
