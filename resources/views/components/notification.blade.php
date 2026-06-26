<div id="notification-container" class="fixed top-5 right-5 z-[100] flex flex-col gap-3 pointer-events-none">
    <template id="notification-template">
        <div class="notification-item pointer-events-auto transform transition-all duration-300 translate-x-full opacity-0 flex items-center gap-3 px-4 py-3 rounded-xl shadow-2xl border backdrop-blur-md min-w-[300px] max-w-md">
            <div class="icon-container p-1.5 rounded-lg bg-white/10">
                </div>
            <div class="flex-grow">
                <p class="message-text text-sm font-medium text-white"></p>
            </div>
            <button class="close-btn text-white/50 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </template>
</div>

<script>
    window.showNotification = function(message, type = 'success') {
        const container = document.getElementById('notification-container');
        const template = document.getElementById('notification-template');
        const clone = template.content.cloneNode(true);
        const toast = clone.querySelector('.notification-item');
        
        // Setup Content
        toast.querySelector('.message-text').textContent = message;
        
        // Setup Styles based on type
        const iconContainer = toast.querySelector('.icon-container');
        if (type === 'success') {
            toast.classList.add('bg-emerald-900/90', 'border-emerald-500/30');
            iconContainer.innerHTML = '<svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
        } else if (type === 'error') {
            toast.classList.add('bg-rose-900/90', 'border-rose-500/30');
            iconContainer.innerHTML = '<svg class="w-5 h-5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
        } else {
            toast.classList.add('bg-sky-900/90', 'border-sky-500/30');
            iconContainer.innerHTML = '<svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
        }

        container.appendChild(toast);

        // Animation In
        setTimeout(() => {
            toast.classList.remove('translate-x-full', 'opacity-0');
            toast.classList.add('translate-x-0', 'opacity-100');
        }, 10);

        // Auto Remove
        const removeToast = () => {
            toast.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => toast.remove(), 300);
        };

        const timer = setTimeout(removeToast, 5000);

        // Manual Close
        toast.querySelector('.close-btn').onclick = () => {
            clearTimeout(timer);
            removeToast();
        };
    };

    // Auto-show Laravel Session Flash Messages
    @if(session('success'))
        showNotification("{{ session('success') }}", 'success');
    @endif
    @if(session('error'))
        showNotification("{{ session('error') }}", 'error');
    @endif
</script>