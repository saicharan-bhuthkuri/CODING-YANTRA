<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Programs & Methodology</h1>
        <p>The "Learn by Doing" Approach.</p>
    </div>
</section>

<!-- Methodology -->
<section class="section-padding">
    <div class="container">
        <h2 class="text-center section-title">Our Methodology</h2>
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">01</div>
                <h3>Logic First</h3>
                <p>We start with Low-Level Design (LLD), pseudo-coding, and flow charts. Understanding the logic is crucial before writing a single line of code.</p>
            </div>
            <div class="step-card">
                <div class="step-number">02</div>
                <h3>Iterative Design</h3>
                <p>Students refine projects through multiple stages, learning that failure is just a step towards success.</p>
            </div>
            <div class="step-card">
                <div class="step-number">03</div>
                <h3>Documentation</h3>
                <p>Building instructions are documented using professional tools like Lego Digital Designer.</p>
            </div>
        </div>
    </div>
</section>

<!-- The Toolkit -->
<section class="section-padding" style="background: #f8fafc;">
    <div class="container">
        <h2 class="text-center section-title">The Toolkit</h2>
        
        <div class="toolkit-container">
            <div class="toolkit-category">
                <h3><i class="fa-solid fa-robot text-accent"></i> Robotics Platforms</h3>
                <ul class="check-list">
                    <li>LEGO WeDo 2.0</li>
                    <li>LEGO Spike Prime</li>
                    <li>LEGO Mindstorms EV3</li>
                    <li>VEX IQ</li>
                    <li>Arduino</li>
                </ul>
            </div>

            <div class="toolkit-category">
                <h3><i class="fa-solid fa-code text-accent"></i> Programming Languages</h3>
                <ul class="check-list">
                    <li>Scratch (Block-based)</li>
                    <li>Python (AI & General)</li>
                    <li>C# (Unity & Apps)</li>
                    <li>Java</li>
                    <li>C++ (Embedded Systems)</li>
                </ul>
            </div>

            <div class="toolkit-category">
                <h3><i class="fa-solid fa-microchip text-accent"></i> Advanced Tracks</h3>
                <ul class="check-list">
                    <li>Robotic Process Automation (RPA)</li>
                    <li>Embedded Systems (B.E. Projects)</li>
                    <li>AI & Machine Learning Models</li>
                    <li>Internet of Things (IoT)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-mini section-padding text-center">
    <div class="container">
        <h2>Start Your Journey Today</h2>
        <p>Whether you are in Pre-K or College, we have a program for you.</p>
        <a href="contact.php" class="btn btn-primary" style="margin-top: 1rem;">View Course Schedule</a>
    </div>
</section>

<style>
/* Steps Grid */
.steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.step-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: var(--shadow-sm);
    text-align: center;
    position: relative;
    border-top: 5px solid var(--accent-color);
}

.step-number {
    background: var(--primary-color);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    margin: -3.5rem auto 1.5rem; /* Pop out top */
}

/* Toolkit */
.toolkit-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.toolkit-category {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: var(--shadow-md);
}

.toolkit-category h3 {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    border-bottom: 1px solid #e2e8f0;
    padding-bottom: 1rem;
    margin-bottom: 1.5rem;
}

.check-list li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.8rem;
    color: var(--text-dark);
}

.check-list li::before {
    content: '\f00c'; /* FontAwesome check */
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--accent-color);
}
</style>

<?php include 'includes/footer.php'; ?>
