<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Student Life</h1>
        <p>Beyond the classroom: Contests, Blogs, and Culture.</p>
    </div>
</section>

<!-- Blog / News Section -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title">Latest Updates</h2>
        <div class="blog-grid">
            <!-- Article 1 -->
            <article class="blog-card">
                <div class="blog-img">
                    <i class="fa-solid fa-microscope"></i>
                </div>
                <div class="blog-content">
                    <span class="blog-date">Feb 01, 2026</span>
                    <h3>DeepLung-XAI Research Analysis</h3>
                    <p>Understanding how AI is revolutionizing medical diagnostics. A look at the "DeepLung-XAI" survey.</p>
                    <a href="#" class="read-more">Read Full Report <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="blog-card">
                <div class="blog-img" style="background: #fff7ed; color: #ea580c;">
                    <i class="fa-solid fa-hands-holding-child"></i>
                </div>
                <div class="blog-content">
                    <span class="blog-date">Jan 15, 2026</span>
                    <h3>WE Hub & Women Entrepreneurs</h3>
                    <p>Supporting urban women-led startups through mentorship and technical expertise.</p>
                    <a href="#" class="read-more">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="blog-card">
                <div class="blog-img" style="background: #f0fdf4; color: #16a34a;">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <div class="blog-content">
                    <span class="blog-date">Dec 20, 2025</span>
                    <h3>Preparing for RoboFest 2026</h3>
                    <p>Behind the scenes of our intensive bootcamps leading up to the Nationals.</p>
                    <a href="#" class="read-more">View Gallery <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Testimonial Slider (Static for now) -->
<section class="section-padding" style="background: #f8fafc;">
    <div class="container">
        <h2 class="text-center section-title">What Students Say</h2>
        <div class="testimonial-card text-center" style="max-width: 700px; margin: 0 auto;">
            <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testimonial-text">"Before Coding Yantra, I just played games. Now, I make them. The mentors here don't just teach code, they teach you how to think."</p>
            <div class="student-info">
                <h4>Adya</h4>
                <span>Grade 6, Game Developer</span>
            </div>
        </div>
    </div>
</section>

<style>
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.blog-card {
    border: 1px solid #e2e8f0;
    border-radius: 1rem;
    overflow: hidden;
    transition: transform 0.3s ease;
    background: white;
}

.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
}

.blog-img {
    height: 200px;
    background: #e0f2fe;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-color);
    font-size: 3rem;
}

.blog-content {
    padding: 1.5rem;
}

.blog-date {
    font-size: 0.85rem;
    color: var(--text-gray);
    margin-bottom: 0.5rem;
    display: block;
}

.blog-content h3 {
    font-size: 1.25rem;
    margin-bottom: 0.8rem;
}

.read-more {
    font-weight: 600;
    color: var(--accent-color);
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 1rem;
}

/* Testimonial */
.quote-icon {
    font-size: 2rem;
    color: #cbd5e1;
    margin-bottom: 1.5rem;
}

.testimonial-text {
    font-size: 1.5rem;
    font-style: italic;
    color: var(--text-dark);
    margin-bottom: 2rem;
}

.student-info h4 {
    margin-bottom: 0;
    color: var(--primary-color);
}
</style>

<?php include 'includes/footer.php'; ?>
