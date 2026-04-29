<footer class="footer pt-5">
    <button onclick="window.scrollTo({top:0, behavior:'smooth'})"
        class="scroll-top-btn bg-blue_bg text-white p-2 shadow-lg hover:bg-blue-600" aria-label="scroll top">

        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            stroke="#fff">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.02975 3.3437C10.9834 2.88543 13.0166 2.88543 14.9703 3.3437C17.7916 4.00549 19.9945 6.20842 20.6563 9.02975C21.1146 10.9834 21.1146 13.0166 20.6563 14.9703C19.9945 17.7916 17.7916 19.9945 14.9703 20.6563C13.0166 21.1146 10.9834 21.1146 9.02975 20.6563C6.20842 19.9945 4.0055 17.7916 3.3437 14.9703C2.88543 13.0166 2.88543 10.9834 3.3437 9.02974C4.0055 6.20841 6.20842 4.00549 9.02975 3.3437ZM13.987 13.3634C14.2114 13.5877 14.575 13.5877 14.7993 13.3634C15.0236 13.1391 15.0236 12.7754 14.7993 12.5511L12.4061 10.1579C12.2984 10.0502 12.1523 9.98967 12 9.98967C11.8476 9.98967 11.7015 10.0502 11.5938 10.1579L9.20062 12.5511C8.97631 12.7754 8.97631 13.1391 9.20062 13.3634C9.42492 13.5877 9.7886 13.5877 10.0129 13.3634L12 11.3763L13.987 13.3634Z"
                fill="#ffffff"></path>
        </svg>
    </button>

    <div class="container-fluid px-5">


        <!-- Logo -->
        <div class="text-center mb-4">
            <a href="/">
                <img src="{{ asset('frontend/assets/images/footer-logo.png') }}" alt="YESEDU Logo" width="180">
            </a>
        </div>

        <!-- Footer Main Layout -->
<!-- Footer Main Layout -->
<div class="row align-items-start">

    <!-- COLUMN 1 -->
    <div class="col-6 col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold mb-3">Useful Links</h5>
        <ul class="list-unstyled">
            <li><a href="{{ route('search', ['action' => 'location-data', 'location' => 'London']) }}" class="footer-link">Find a University</a></li>
            <li><a href="{{ route('courseIn') }}" class="footer-link">Find a Course</a></li>
            <li><a href="{{ route('courseIn') }}" class="footer-link">Popular Courses</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Contact Us</a></li>
        </ul>
    </div>

    <!-- COLUMN 2 -->
    <div class="col-6 col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold mb-3">About YESEDU</h5>
        <ul class="list-unstyled">
            <li><a href="{{ route('about') }}" class="footer-link">About Us</a></li>
            <li><a href="{{ route('eventDetails', 'What Can I Study?') }}" class="footer-link">What We Do</a></li>
            <li><a href="{{ route('studyInUk', 'Why Choose UK') }}" class="footer-link">Why Choose Us</a></li>
            <li><a href="#" class="footer-link">Success Stories</a></li>
        </ul>
    </div>

    <!-- COLUMN 3 -->
    <div class="col-6 col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold mb-3">Community</h5>
        <ul class="list-unstyled">
            <li><a href="#" class="footer-link">YESEDU News</a></li>
            <li><a href="{{ route('blog') }}" class="footer-link">Latest Blogs</a></li>
            <li><a href="{{ route('event') }}" class="footer-link">Upcoming Events</a></li>
            <li><a href="#" class="footer-link">Refer a Friend</a></li>
        </ul>
    </div>

    <!-- COLUMN 4 - CONTACT -->
    <div class="col-6 col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold mb-3">Contact</h5>
        <p class="mb-1"><i class="fas fa-phone"></i> +8809611656889, </p>
        <p class="mb-1"><i class="fas fa-phone-m"></i> +8801898828980</p>
        <p class="mb-1"><i class="fas fa-envelope"></i> support@yesedu.com</p>
        <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</p>

        <div class="mt-2 d-flex align-items-center">
            <a href="{{ $ws->fb_url }}" target="_blank" class="footer-social fb d-flex align-items-center justify-content-center me-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{ $ws->instagram_url }}" target="_blank" class="footer-social ig d-flex align-items-center justify-content-center me-2">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="{{ $ws->linkedin_url }}" target="_blank" class="footer-social in d-flex align-items-center justify-content-center me-2">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="footer-social tt d-flex align-items-center justify-content-center" target="_blank">
                <img src="{{ asset('frontend/assets/images/icons/tiktok-icon.png') }}" width="40" height="40" alt="TikTok">
            </a>
        </div>

    </div>

</div>
<style>
    .footer-social {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: 0.2s;
}
.footer-social.fb { background:#1877f2; }
.footer-social.ig { background: linear-gradient(45deg,#fd5949,#d6249f,#285AEB); }
.footer-social.in { background:#0A66C2; }
.footer-social.tt { background: black; } /* TikTok background */
.footer-social:hover { opacity: 0.8; }

</style>

<!-- MAP -->
<!-- <div class="row mt-3">
    <div class="col-12">
        <iframe 
            src="https://maps.google.com/maps?q=dhaka%20bangladesh&output=embed"
            class="footer-map-full">
        </iframe>
    </div>
</div> -->

        <hr class="footer-divider">


        <!-- Global Branches -->
        <div class="text-center small mb-3">
            <strong>Global Branches: </strong>
            <a href="{{ route('globalOffice') }}" class="footer-link">Bangladesh</a> |
            <a href="{{ route('globalOffice') }}" class="footer-link">UAE</a> |
            <a href="{{ route('globalOffice') }}" class="footer-link">UK</a> |
            <a href="{{ route('globalOffice') }}" class="footer-link">Nigeria</a> |
        </div>

        <hr class="footer-divider">

        <!-- Footer Bottom -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div>© 2025-26 YESEDU. All rights reserved.</div>

            <div class="my-2 my-md-0">
                <a href="#" class="footer-link">Privacy Policy</a> -
                <a href="#" class="footer-link">Terms of Use</a>
            </div>

            <!-- Social Icons -->
            <div class="d-flex">
                <a href="#" class="footer-link mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

    </div>
</footer>

<!-- Phone Button (Above) -->
<div class="floating-btn phone-btn">
    <button onclick="window.location.href='tel:+1234567890'" aria-label="Call Now">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
            class="phone-icon">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
            </path>
        </svg>
    </button>
</div>

<!-- Chat Button (Below) -->
<div class="floating-btn chat-btn">
    <button onclick="toggleChat()" aria-label="Chat Now" id="chatToggleBtn">
        <span id="msgIcon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" viewBox="0 0 28 28">
                <path fill="white"
                    d="M17.959 4.667h-7.917c-.752 0-1.372 0-1.877.04-.525.042-1.007.132-1.46.357A3.7 3.7 0 0 0 5.074 6.66c-.231.443-.323.915-.366 1.427-.041.494-.041 1.1-.041 1.835v11.507c0 .214 0 .433.016.612.016.172.058.495.29.779.266.325.669.515 1.095.514.37 0 .656-.17.803-.265.153-.1.328-.236.5-.37l2.252-1.761c.484-.379.627-.486.777-.56q.226-.113.474-.163c.164-.033.344-.037.964-.037h6.12c.752 0 1.372 0 1.877-.04.525-.042 1.007-.132 1.46-.358a3.7 3.7 0 0 0 1.631-1.595c.231-.443.323-.914.366-1.427.041-.494.041-1.1.041-1.834V9.92c0-.735 0-1.34-.04-1.835-.044-.512-.136-.984-.367-1.427a3.7 3.7 0 0 0-1.631-1.595c-.453-.225-.935-.315-1.46-.357-.505-.04-1.125-.04-1.876-.04" />
            </svg>
        </span>

        <span id="closeIcon" style="display:none;font-size:22px;color:white;">✖</span>
    </button>
</div>

<div id="chatBox" class="chat-box">
    <div class="chat-header">Live Chat</div>

    <div class="chat-body" id="chatBody">
        <p><strong>Support:</strong> Hello! 👋 How can I help you?</p>
    </div>

    <div class="chat-footer">
        <input type="hidden" id="conversationIdStore">
        <input type="text" id="chatInput" placeholder="Type your message..." class="form-control" style="color: black !important;">
        <button id="sendButton" class="btn btn-primary">➤</button>
    </div>
</div>

<style>
/* Phone Button */
.phone-btn {
    position: fixed;
    bottom: 90px;
    right: 20px;
    z-index: 100;
}

.phone-btn button {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    border: none;
    background: linear-gradient(90deg, #171F67, #3B308B);
    animation: blink 1s infinite;
    /* blinking animation */
}

.phone-icon {
    width: 28px;
    /* smaller icon */
    height: 28px;
}

/* Chat Button */
.chat-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 100;
}

.chat-btn button {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    border: none;
    background: #000000;
}

.chat-btn svg path {
    fill: white;
    /* ensure icon fully white */
}

/* Hover effect */
.phone-btn button:hover,
.chat-btn button:hover {
    transform: translateY(-4px);
    opacity: 0.9;
}

/* Blinking animation */
/* Phone button pulse animation */
@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }

    50% {
        transform: scale(1.2);
        /* slightly zoom in */
        opacity: 0.7;
        /* slightly fade */
    }

    100% {
        transform: scale(1);
        opacity: 1;
    }
}

.phone-btn button {
    animation: pulse 2s infinite ease-in-out;
}
</style>



<style>
.footer {
    background-color: #242E69;
    color: #ffffff;
    position: relative;
    /* REQUIRED */
}


.footer * {
    color: #ffffff !important;
}

.footer-link {
    color: #ffffff !important;
    text-decoration: none;
    transition: 0.3s;
}

.footer-link:hover {
    opacity: 0.7;
}

.footer-divider {
    border-color: rgba(255, 255, 255, 0.3);
}
</style>

<style>
.scroll-top-btn {
    position: absolute;
    top: -48px;
    /* slightly above footer */
    right: 6px;
    /* top-right corner */
    background: #242E69;
    /* square background color */
    color: #ffffff !important;
    width: 45px;
    /* square width */
    height: 45px;
    /* square height */
    border-radius: 6px;
    /* small rounded edges */
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
    transition: 0.3s ease;
    z-index: 99;
}

/* Hover effect */
.scroll-top-btn:hover {
    transform: translateY(-3px);
    opacity: 0.9;
}

/* White arrow */
.scroll-top-btn svg path {
    fill: #ffffff !important;
}
</style>
<style>
.chat-box {
    position: fixed;
    bottom: 85px;
    right: 20px;
    width: 320px;
    height: 400px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
    display: none;
    flex-direction: column;
    z-index: 9999;
}

.chat-header {
    background: #F8F9FC;
    color: black;
    padding: 10px;
    border-radius: 15px 15px 0 0;
    text-align: center;
    font-weight: bold;
}

.chat-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
}

.chat-footer {
    display: flex;
    padding: 8px;
    gap: 6px;
    border-top: 1px solid #F8F9FC;
}

.chat-footer input {
    flex: 1;
    padding: 7px;
    border-radius: 20px;
    border: 1px solid #ccc;
}

.chat-footer button {
    background: #030303ff;
    color: white;
    border: none;
    border-radius: 50%;
    padding: 8px 12px;
}
</style>

<style>
.footer-social {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin: 6px;
    border-radius: 50%;
    color: white !important;
    font-size: 18px;
    transition: 0.3s ease;
}

.fb {
    background: #1877f2;
}

.ig {
    background: #e1306c;
}

.in {
    background: #0077b5;
}

.tt {
    background: #000000;
}

.footer-social:hover {
    transform: scale(1.1);
}

.footer-map {
    width: 100%;
    height: 160px;
    border-radius: 10px;
    border: none;
}

.footer-map-full {
    width: 100%;
    height: 230px;
    border-radius: 12px;
    border: none;
}

.footer-social svg {
    width: 20px;
    height: 20px;
}

</style>
<style>
/* More refined styling for messages */
.chat-body .message { margin-bottom: 10px; padding: 8px 12px; border-radius: 18px; max-width: 80%; line-height: 1.4; }
.chat-body .message strong { display: block; font-size: 0.8em; margin-bottom: 4px; color: #555; }
.chat-body .sent { background-color: black; color: white; align-self: flex-end; margin-left: auto; }
.chat-body .sent strong { color: white; }
.chat-body .received { background-color: #e9e9eb; color: black; align-self: flex-start; }
.chat-body { display: flex; flex-direction: column; }
.chat-footer .form-control { color: black !important; }
</style>

<!-- Dependencies for Chat -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.2/dist/echo.iife.js"></script>
<!-- Bootstrap JS (make sure you include it) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        if (typeof axios === 'undefined' || typeof Pusher === 'undefined' || typeof Echo === 'undefined') {
            console.error("Chat Error: A required library (axios, Pusher, or Echo) is not loaded.");
            const chatBody = document.getElementById('chatBody');
            if(chatBody) chatBody.innerHTML = "<p>Error: Chat libraries not loaded.</p>";
            return;
        }

        // Axios configuration
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        const csrfToken = document.querySelector('meta[name="csrf-token"]');
        if (csrfToken) {
            axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken.getAttribute('content');
        } else {
            console.error('CSRF token not found!');
        }


        // Echo configuration
        const echo = new Echo({
            broadcaster: 'pusher',
            key: '{{ env('PUSHER_APP_KEY') }}',
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            forceTLS: true,
            authEndpoint: '/broadcasting/auth'
        });

        let chatInitialized = false;
        const chatInput = document.getElementById('chatInput');
        const sendButton = document.getElementById('sendButton');
        const chatBody = document.getElementById('chatBody');
        const conversationIdStore = document.getElementById('conversationIdStore');

        const startChatSession = async () => {
            if(chatInitialized) return;
            try {
                chatBody.innerHTML = "<p>Connecting to chat...</p>";
                const response = await axios.post('/chat/start');
                conversationIdStore.value = response.data.conversation_id;
                await fetchMessages();
                listenForMessages();
                chatInitialized = true;
            } catch (error) {
                console.error("Error starting chat session:", error);
                chatBody.innerHTML = "<p>Could not connect to chat. Please try again later.</p>";
            }
        };

        const fetchMessages = async () => {
            const conversationId = conversationIdStore.value;
            if (!conversationId) return;
            try {
                const response = await axios.get(`/chat/${conversationId}/messages`);
                chatBody.innerHTML = '';
                response.data.forEach(appendMessage);
                chatBody.scrollTop = chatBody.scrollHeight;
            } catch (error) {
                console.error("Error fetching messages:", error);
            }
        };

        const listenForMessages = () => {
            const conversationId = conversationIdStore.value;
            if (!conversationId) return;

            echo.private(`chat.${conversationId}`)
                .listen('.message.sent', (e) => {
                     @if(auth()->check())
                        if (e.message.user_id != {{ auth()->id() }}) {
                            appendMessage(e.message);
                        }
                     @else
                        if(e.message.user_id != null) { // Only show messages from support
                             appendMessage(e.message);
                        }
                     @endif
                });
        };

        const sendMessage = async () => {
            const messageBody = chatInput.value.trim();
            const conversationId = conversationIdStore.value;
            if (messageBody === "" || !conversationId) return;

            const tempMessage = { body: messageBody, user: { name: 'You' }, temp: true };
            appendMessage(tempMessage);
            chatInput.value = '';

            try {
                await axios.post(`/chat/${conversationId}/send`, { body: messageBody });
            } catch (error) {
                console.error("Error sending message:", error);
                const sentMessages = chatBody.getElementsByClassName('sent');
                const lastSentMessage = sentMessages[sentMessages.length - 1];
                if(lastSentMessage) {
                    const p = lastSentMessage.querySelector('p');
                    if (p) p.innerText += " (failed)";
                }
            }
        };

        const appendMessage = (message) => {
            const msgElement = document.createElement('div');
            let senderName = 'Support';
            let msgClass = 'message received';
            
            const currentUserId = '{{ auth()->check() ? auth()->id() : '' }}';

            if (message.user_id == currentUserId || (message.user && message.user.name === 'You')) {
                senderName = 'You';
                msgClass = 'message sent';
            } else if (message.user) {
                senderName = message.user.name;
            }

            msgElement.className = msgClass;
            msgElement.innerHTML = `<strong>${senderName}</strong><p>${message.body}</p>`;
            chatBody.appendChild(msgElement);
            chatBody.scrollTop = chatBody.scrollHeight;
        };

        window.toggleChat = () => {
            const chatBox = document.getElementById("chatBox");
            const msgIcon = document.getElementById("msgIcon");
            const closeIcon = document.getElementById("closeIcon");
            const isOpening = chatBox.style.display !== "flex";

            if (isOpening) {
                chatBox.style.display = "flex";
                msgIcon.style.display = "none";
                closeIcon.style.display = "block";
                if (!chatInitialized) {
                    startChatSession();
                }
            } else {
                chatBox.style.display = "none";
                msgIcon.style.display = "block";
                closeIcon.style.display = "none";
            }
        };

        sendButton.addEventListener('click', sendMessage);
        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });
    });
</script>