@extends('layouts.app') @section('content')
<div class="container py-4">
    <div class="row shadow rounded overflow-hidden chat-container">
        <!-- Sidebar - Contacts List -->
        <div class="col-md-4 border-end bg-white p-0 contacts-panel">
            <div class="contacts-header p-3 border-bottom bg-light">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Messages</h5>
                </div>
                <!-- Search Bar -->
                <div class="position-relative">
                    <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                    <input type="search" id="contact-search" class="form-control ps-5" placeholder="Search contacts..." aria-label="Search contacts" />
                    <button class="btn btn-sm position-absolute top-50 end-0 translate-middle-y me-2 clear-search d-none">
                        <i class="bi bi-x"></i>
                    </button>
                </div>
            </div>
            <div class="list-group list-group-flush contacts-list">
                <!-- Active Chat -->
                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between active">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-circle me-3" width="48" height="48" alt="John Doe" />
                        <div>
                            <h6 class="mb-0">John Doe</h6>
                            <p class="mb-0 text-truncate small" style="max-width: 150px;">Hi this is my testing message</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <small class="text-white-50">2:30 PM</small>
                        <span class="badge bg-white text-primary rounded-pill mt-1">2</span>
                    </div>
                </a>

                <!-- Other Contacts -->
                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle me-3" width="48" height="48" alt="Jane Smith" />
                        <div>
                            <h6 class="mb-0">Jane Smith</h6>
                            <p class="mb-0 text-truncate small" style="max-width: 150px;">This is testing</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <small class="text-muted">3:15 PM</small>
                        <span class="badge bg-danger rounded-pill mt-1">5</span>
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle me-3" width="48" height="48" alt="Mike Johnson" />
                        <div>
                            <h6 class="mb-0">Mike Johnson</h6>
                            <p class="mb-0 text-truncate small" style="max-width: 150px;">Hi ?</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <small class="text-muted">4:00 PM</small>
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="https://randomuser.me/api/portraits/women/13.jpg" class="rounded-circle me-3" width="48" height="48" alt="Alice Brown" />
                        <div>
                            <h6 class="mb-0">Alice Brown</h6>
                            <p class="mb-0 text-truncate small" style="max-width: 150px;">Ok I am in.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <small class="text-muted">5:45 PM</small>
                        <span class="badge bg-danger rounded-pill mt-1">3</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Chat Area -->
        <div class="col-md-8 d-flex flex-column p-0 chat-area">
            <!-- Chat Header -->
            <div class="p-3 border-bottom bg-white d-flex align-items-center chat-header">
                <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-circle me-3" width="40" height="40" alt="John Doe" />
                <div>
                    <h6 class="mb-0">John Doe</h6>
                    <small class="text-muted">Online</small>
                </div>
            </div>

            <!-- Chat Messages -->
            <div id="chat-box" class="flex-grow-1 p-3 overflow-auto messages-container">
                <!-- Date Separator -->
                <div class="text-center my-3">
                    <span class="badge bg-light text-muted fw-normal">Today</span>
                </div>

                <!-- Incoming Message -->
                <div class="d-flex mb-3">
                    <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-circle me-2 align-self-start" width="32" height="32" alt="User" />
                    <div>
                        <div class="bg-white border p-3 rounded message-incoming">
                            To give a more professional and polished look that distinguishes whether the message comes from the left or right side, you can add some specific styles like background color differentiation, border radius
                            adjustments, and more noticeable margins. This will make it visually clear which side the message is coming from.
                        </div>
                        <small class="text-muted ms-2">{{ now()->format('h:i A') }}</small>
                    </div>
                </div>

                <!-- Outgoing Message -->
                <div class="d-flex mb-3 justify-content-end">
                    <div class="text-end">
                        <div class="bg-primary text-white p-3 rounded message-outgoing">
                            I'm good, thanks! How about you?
                        </div>
                        <small class="text-muted me-2">{{ now()->format('h:i A') }}</small>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-circle me-2 align-self-start" width="32" height="32" alt="User" />
                    <div>
                        <div class="bg-white border p-3 rounded message-incoming">
                            i am also good
                        </div>
                        <small class="text-muted ms-2">{{ now()->format('h:i A') }}</small>
                    </div>
                </div>

                <!-- Outgoing Image Message -->
                <div class="d-flex mb-3 justify-content-end">
                    <div class="text-end">
                        <div class="bg-light border p-2 rounded">
                            <img src="https://mir-s3-cdn-cf.behance.net/projects/404/33aeca149514125.Y3JvcCwxMzgwLDEwODAsMTE5LDA.jpg" class="img-fluid rounded" alt="Uploaded Image" style="max-width: 200px; height: auto;" />
                        </div>
                        <small class="text-muted me-2">{{ now()->format('h:i A') }}</small>
                    </div>
                </div>
            </div>

            <!-- Message Input -->
            <div class="border-top bg-white p-3 message-input-area">
                <form id="chat-form" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="text" id="message-input" class="form-control border-0" placeholder="Type your message..." autocomplete="off" />

                        <!-- File Upload -->
                        <label for="file-input" class="btn btn-light border-0" title="Attach file">
                            <i class="bi bi-paperclip"></i>
                            <input type="file" id="file-input" class="d-none" multiple />
                        </label>

                        <button class="btn btn-primary rounded" type="submit">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                    <div id="file-preview" class="mt-2"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection @push('scripts')
<script>
    // Script for handling chat functionality
    document.addEventListener("DOMContentLoaded", function () {
        // Scroll to bottom of chat
        const chatBox = document.getElementById("chat-box");
        chatBox.scrollTop = chatBox.scrollHeight;

        // File input handling
        const fileInput = document.getElementById("file-input");
        const filePreview = document.getElementById("file-preview");

        fileInput.addEventListener("change", function () {
            if (this.files.length > 0) {
                filePreview.style.display = "block";
                filePreview.innerHTML = `
                    <div class="d-flex align-items-center bg-light p-2 rounded">
                        <i class="bi bi-file-earmark-text fs-4 me-2"></i>
                        <div class="flex-grow-1">
                            <small class="d-block">${this.files[0].name}</small>
                            <small class="text-muted">${(this.files[0].size / 1024).toFixed(1)} KB</small>
                        </div>
                        <button type="button" class="btn-close" onclick="clearFileInput()"></button>
                    </div>
                `;
            }
        });

        // Form submission
        document.getElementById("chat-form").addEventListener("submit", function (e) {
            e.preventDefault();
            const messageInput = document.getElementById("message-input");
            if (messageInput.value.trim() !== "" || fileInput.files.length > 0) {
                // Here you would typically send the message via AJAX
                console.log("Message sent:", messageInput.value);
                messageInput.value = "";
                fileInput.value = "";
                filePreview.style.display = "none";
            }
        });
    });

    function clearFileInput() {
        document.getElementById("file-input").value = "";
        document.getElementById("file-preview").style.display = "none";
    }
</script>
@endpush
