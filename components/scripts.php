<!-- Swiper JS -->
<script crossorigin="anonymous"
    integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ=="
    referrerpolicy="no-referrer" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js">
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper only if the element exists
    const testimonialContainer = document.querySelector('.testimonialSwiper');
    if (testimonialContainer) {
        const testimonialSwiper = new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            // direction: 'horizontal',
            effect: 'slide',
            speed: 800,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom'
            },
            loop: true,
            grabCursor: true,
            keyboard: {
                enabled: true
            }
        });

        // Add event listeners only if custom navigation exists
        const nextButton = document.querySelector('.swiper-button-next-custom');
        const prevButton = document.querySelector('.swiper-button-prev-custom');

        if (nextButton) {
            nextButton.addEventListener('click', () => {
                testimonialSwiper.slideNext();
            });
        }

        if (prevButton) {
            prevButton.addEventListener('click', () => {
                testimonialSwiper.slidePrev();
            });
        }
    }
});
</script>
<!-- Testimonial Swiper Initialization -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check if Swiper is loaded and testimonials section exists
    if (typeof Swiper !== 'undefined') {
        const imageSwiper = document.querySelector('.testimonialImageSwiper');
        const contentSwiper = document.querySelector('.testimonialContentSwiper');

        if (imageSwiper && contentSwiper) {
            // Initialize image swiper
            const testimonialImageSwiper = new Swiper('.testimonialImageSwiper', {
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                speed: 500,
                allowTouchMove: false
            });

            // Initialize content swiper
            const testimonialContentSwiper = new Swiper('.testimonialContentSwiper', {
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                speed: 500,
                allowTouchMove: false
            });

            // Synchronize both swipers
            function syncSwipers(index) {
                testimonialImageSwiper.slideTo(index);
                testimonialContentSwiper.slideTo(index);

                // Update active dot
                document.querySelectorAll('.testimonial-dot').forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.add('bg-gonpay-orange');
                        dot.classList.remove('bg-gray-200');
                    } else {
                        dot.classList.remove('bg-gonpay-orange');
                        dot.classList.add('bg-gray-200');
                    }
                });
            }

            // Set first testimonial as active
            syncSwipers(0);

            // Avatar click handler
            document.querySelectorAll('.testimonial-avatar').forEach(avatar => {
                avatar.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    syncSwipers(index);
                });
            });

            // Dot click handler
            document.querySelectorAll('.testimonial-dot').forEach(dot => {
                dot.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    syncSwipers(index);
                });
            });

            // Auto-rotate testimonials if totalTestimonials exists
            const totalTestimonials = document.querySelectorAll('.testimonial-dot').length;
            if (totalTestimonials) {
                let currentIndex = 0;
                setInterval(() => {
                    currentIndex = (currentIndex + 1) % totalTestimonials;
                    syncSwipers(currentIndex);
                }, 5000);
            }
        }
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // Counter animation function - only if counters exist
    const counters = document.querySelectorAll('.counter');
    if (counters.length > 0) {
        let hasAnimated = false;

        function startCounting() {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const increment = target / 100;

                const updateCounter = () => {
                    const count = +counter.innerText;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };

                updateCounter();
            });
        }

        // Intersection Observer for stats section
        const statsSection = document.querySelector('.stats-container');
        if (statsSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !hasAnimated) {
                        hasAnimated = true;
                        startCounting();
                    }
                });
            }, {
                threshold: 0.5
            });

            observer.observe(statsSection);
        }
    }
});
</script>