<!-- JavaScript to show custom pop-up -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            showPopup("{{ session('success') }}", "success");
        @elseif (session('error'))
            showPopup("{{ session('error') }}", "error");
        @elseif (session('info'))
            showPopup("{{ session('info') }}", "info");
        @endif
    });

    function showPopup(message, type) {
        const iconMap = {
            success: 'bi-check-circle-fill',
            error: 'bi-x-circle-fill',
            info: 'bi-info-circle-fill'
        };

        const popup = document.createElement('div');
        popup.classList.add('popup', type);
        popup.innerHTML = `
                <i class="bi ${iconMap[type]}"></i>
                <span>${message}</span>
            `;

        document.body.appendChild(popup);

        // Trigger animation
        setTimeout(() => popup.classList.add('show'), 50);

        // Auto-dismiss after 5 seconds
        setTimeout(() => {
            popup.classList.remove('show');
            setTimeout(() => popup.remove(), 300);
        }, 5000);
    }
</script>

<style>
    .popup {
        position: fixed;
        top: 30px;
        right: 30px;
        background-color: #ffffff;
        color: #333;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 500;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        opacity: 0;
        display: flex;
        align-items: center;
        gap: 12px;
        z-index: 9999;
        transform: translateX(120%);
        /* start off-screen to the right */
        transition: transform 0.4s ease, opacity 0.4s ease;
        border-left: 6px solid;
        border-bottom: 6px solid;
        max-width: 90%;
        width: auto;
    }

    .popup.show {
        opacity: 1;
        transform: translateX(0);
        /* slide into view */
    }

    .popup.success {
        border-color: #28a745;
    }

    .popup.error {
        border-color: #dc3545;
    }

    .popup.info {
        border-color: #17a2b8;
    }

    .popup i {
        font-size: 1.2rem;
    }

    .popup.success i {
        color: #28a745;
    }

    .popup.error i {
        color: #dc3545;
    }

    .popup.info i {
        color: #17a2b8;
    }
</style>
