    <style>
        /* Chat Button */
        .chat-btn {
            position: fixed;
            bottom: 45px;
            right: 16px;
            z-index: 10000; /* Increased z-index */
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
        .chat-box {
            position: fixed;
            bottom: 105px;
            right: 20px;
            width: 320px;
            height: 400px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
            display: flex;
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
        .hidden {
            display: none !important;
        }
    </style>

    <!-- Chat Button (Below) -->
<div class="floating-btn chat-btn">
    <button onclick="toggleChat()" aria-label="Chat Now" id="chatToggleBtn">
        <span id="msgIcon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" viewBox="0 0 28 28">
                <path fill="white"
                    d="M17.959 4.667h-7.917c-.752 0-1.372 0-1.877.04-.525.042-1.007.132-1.46.357A3.7 3.7 0 0 0 5.074 6.66c-.231.443-.323.915-.366 1.427-.041.494-.041 1.1-.041 1.835v11.507c0 .214 0 .433.016.612.016.172.058.495.29.779.266.325.669.515 1.095.514.37 0 .656-.17.803-.265.153-.1.328-.236.5-.37l2.252-1.761c.484-.379.627-.486.777-.56q.226-.113.474-.163c.164-.033.344-.037.964-.037h6.12c.752 0 1.372 0 1.877-.04.525-.042-1.007.132-1.46-.358a3.7 3.7 0 0 0 1.631-1.595c.231-.443.323.914.366-1.427.041-.494.041-1.1.041-1.834V9.92c0-.735 0-1.34-.04-1.835-.044-.512-.136-.984-.367-1.427a3.7 3.7 0 0 0-1.631-1.595c-.453-.225-.935-.315-1.46-.357-.505-.04-1.125-.04-1.876-.04" />
            </svg>
        </span>
        <span id="closeIcon" class="hidden" style="font-size:22px;color:white;">✖</span>
    </button>
</div>

<div id="chatBox" class="chat-box hidden">
    <div class="chat-header">Live Chat</div>
    <div class="chat-body" id="chatBody">
        <p><strong>Support:</strong> Hello! 👋 How can I help you?</p>
    </div>
    <div class="chat-footer">
        <input type="text" id="chatInput" placeholder="Type your message..." class="form-control" style="color: black !important;">
        <button id="sendButton" class="btn btn-primary">➤</button>
    </div>
</div>
<script>
    function toggleChat() {
        const chatBox = document.getElementById("chatBox");
        const msgIcon = document.getElementById("msgIcon");
        const closeIcon = document.getElementById("closeIcon");

        chatBox.classList.toggle("hidden");
        msgIcon.classList.toggle("hidden");
        closeIcon.classList.toggle("hidden");
    }
</script>