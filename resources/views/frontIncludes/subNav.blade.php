<div x-data="feedbackSlider()" x-init="init()" class="feedback-container">

    <!-- Google Logo and Single-Line Auto Slider Track -->
    <div class="feedback-wrapper">
        <div class="feedback-brand">
            
        
        </div>

        <div class="feedback-window" x-ref="windowRef">
            <div class="feedback-track" :style="`transform: translateX(-${currentIndex * cardWidth}px)`">

                <template x-for="feedback in feedbacks" :key="feedback.id">
                    <div class="feedback-card" :style="`width: ${cardWidth}px; min-width: ${cardWidth}px;`">
                        <div class="feedback-inner">
                            <img :src="feedback.avatar" alt="Reviewer" class="feedback-avatar">
                            <span class="feedback-comment" x-text="`&quot;${feedback.comment}&quot;`"></span>
                            <div class="feedback-stars" x-text="'★'.repeat(feedback.rating)"></div>
                        </div>
                    </div>
                </template>

            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('feedbackSlider', () => ({
            feedbacks: [],
            currentIndex: 0,
            cardWidth: 0,
            timer: null,

            init() {
                fetch("/data/feedback.json")
                    .then(res => res.json())
                    .then(data => {
                        this.feedbacks = data;
                        this.calculateWidth();
                    })
                    .catch(err => console.error('Error fetching feedbacks:', err));

                // Recalculate precisely if the browser screen size changes
                window.addEventListener('resize', () => {
                    this.calculateWidth();
                });

                this.timer = setInterval(() => {
                    if (this.feedbacks.length === 0) return;
                    const itemsPerView = window.innerWidth >= 768 ? 2 : 1;
                    const maxIdx = Math.max(0, this.feedbacks.length - itemsPerView);
                    this.currentIndex = this.currentIndex < maxIdx ? this.currentIndex + 1 : 0;
                }, 4000);
            },

            calculateWidth() {
                if (this.$refs.windowRef) {
                    const totalWidth = this.$refs.windowRef.clientWidth;
                    const itemsPerView = window.innerWidth >= 768 ? 2 : 1;
                    this.cardWidth = totalWidth / itemsPerView;
                }
            }
        }));
    });
</script>
