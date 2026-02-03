<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <span class="hero-badge">Hands-on training always pays off</span>
        <h1>Empowering the Next Generation of <br> <span class="text-gradient">Real Innovators</span></h1>
        <p>Join the movement of creators, builders, and problem solvers.</p>
        <div class="hero-buttons">
            <a href="programs.php" class="btn btn-primary">Explore Programs</a>
            <a href="contact.php" class="btn btn-outline" style="color: white; border-color: white;">Book a Free Trial</a>
        </div>
    </div>
</section>

<!-- Impact Metrics -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="metrics-grid">
            <div class="metric-card">
                <i class="fa-solid fa-school metric-icon"></i>
                <h3>100+</h3>
                <p>Schools Partnered</p>
            </div>
            <div class="metric-card">
                <i class="fa-solid fa-user-graduate metric-icon"></i>
                <h3>100+</h3>
                <p>Students Rated 4.8/5</p>
            </div>
            <div class="metric-card">
                <i class="fa-solid fa-chalkboard-user metric-icon"></i>
                <h3>20+</h3>
                <p>Certified Trainers</p>
            </div>
            <div class="metric-card">
                <i class="fa-solid fa-hands-holding-circle metric-icon"></i>
                <h3>100%</h3>
                <p>Practical Sessions</p>
            </div>
        </div>
    </div>
</section>

<!-- Key Pillars -->
<section class="section-padding" style="background-color: #f1f5f9;">
    <div class="container">
        <div class="text-center" style="max-width: 600px; margin: 0 auto 3rem;">
            <h2 class="section-title">Why Choose Coding Yantra?</h2>
            <p>We don't just teach code; we build confidence through creation.</p>
        </div>
        
        <div class="pillars-grid">
            <!-- Robotics -->
            <div class="pillar-card">
                <div class="pillar-icon" style="background: #e0f2fe; color: #0284c7;">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <h3>Robotics</h3>
                <p>From LEGO WeDo to VEX IQ, build autonomous robots that solve real-world challenges.</p>
                <a href="programs.php" class="learn-more">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- Coding -->
            <div class="pillar-card">
                <div class="pillar-icon" style="background: #fef3c7; color: #d97706;">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3>Coding</h3>
                <p>Master languages like Python, Java, and C++ through interactive project-based learning.</p>
                <a href="programs.php" class="learn-more">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- AI -->
            <div class="pillar-card">
                <div class="pillar-icon" style="background: #f3e8ff; color: #9333ea;">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <h3>AI & ML</h3>
                <p>Understand the future with hands-on AI model training and Machine Learning concepts.</p>
                <a href="programs.php" class="learn-more">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <!-- RPA -->
            <div class="pillar-card">
                <div class="pillar-icon" style="background: #dcfce7; color: #16a34a;">
                    <i class="fa-solid fa-gears"></i>
                </div>
                <h3>RPA</h3>
                <p>Automate the boring stuff. Advanced Robotic Process Automation training for career readiness.</p>
                <a href="programs.php" class="learn-more">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container text-center">
        <h2>Ready to Start Your Journey?</h2>
        <p>Join the best STEAM education institute in Hyderabad.</p>
        <a href="contact.php" class="btn btn-primary" style="background: white; color: var(--primary-color);">Enquire Now</a>
    </div>
</section>

<style>
/* Hero Styles */
.hero-section {
    height: 85vh;
    background: url('https://images.unsplash.com/photo-1581092921461-eab62e97a780?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    margin-top: -80px; /* Counteract header height if transparent, but here header is sticky white, so maybe not needed unless we make header transparent */
    padding-top: 80px;
}

.hero-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.8) 0%, rgba(15, 23, 42, 0.6) 100%);
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-badge {
    display: inline-block;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.2);
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.hero-section h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    color: white;
}

.text-gradient {
    background: var(--gradient-accent);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-section p {
    font-size: 1.25rem;
    max-width: 600px;
    margin: 0 auto 2rem;
    color: #cbd5e1;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
}

/* Metrics Styles */
.metrics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    text-align: center;
}

.metric-card {
    padding: 2rem;
    background: white;
    border-radius: 1rem;
    border: 1px solid #e2e8f0;
    transition: transform 0.3s ease;
}

.metric-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
    border-color: var(--accent-color);
}

.metric-icon {
    font-size: 2.5rem;
    color: var(--accent-color);
    margin-bottom: 1rem;
}

.metric-card h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

/* Pillars Styles */
.pillars-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    padding-top: 2rem;
}

.pillar-card {
    background: white;
    padding: 2.5rem;
    border-radius: 1.5rem;
    box-shadow: var(--shadow-sm);
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.pillar-card:hover {
    box-shadow: var(--shadow-xl);
    transform: translateY(-5px);
    border-color: rgba(245, 158, 11, 0.2);
}

.pillar-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
}

.learn-more {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    font-weight: 600;
    margin-top: 1rem;
}

.learn-more:hover {
    gap: 0.8rem;
    color: var(--accent-color);
}

/* CTA Styles */
.cta-section {
    background: var(--gradient-main);
    color: white;
    padding: 5rem 0;
}

.cta-section h2 {
    color: white;
    margin-bottom: 1rem;
}

.cta-section p {
    margin-bottom: 2rem;
    font-size: 1.2rem;
    color: #cbd5e1;
}

@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2.5rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
