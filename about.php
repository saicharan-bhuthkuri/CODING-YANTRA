<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Our Story: From Vision to Reality</h1>
        <p>The journey of Coding Yantra and our founder, Praveen Ollala.</p>
    </div>
</section>

<!-- Founder's Journey -->
<section class="section-padding">
    <div class="container">
        <div class="row" style="display: flex; gap: 4rem; align-items: center; /* flex-wrap: wrap; handled by media query */">
            <div class="col-text" style="flex: 1;">
                <h2 class="section-title">The Founder’s Journey</h2>
                <h4 style="color: var(--accent-color);">Praveen Ollala</h4>
                <p style="margin-bottom: 1rem;">
                    Born in the humble village of Odela, Telangana, Praveen Ollala's story is one of resilience and determination. Growing up in a household of daily wage laborers, he faced severe resource constraints but was fueled by his parents' steadfast belief in the power of education.
                </p>
                <p style="margin-bottom: 1rem;">
                    After overcoming financial insolvency that forced him to drop out temporarily, Praveen worked various jobs to fund his degree in Electronics and Communication Engineering (ECE). It was during his time as a teaching assistant that he identified a critical gap: the lack of practical, industry-aligned training for young students.
                </p>
                <div class="quote-box" style="border-left: 4px solid var(--accent-color); padding-left: 1.5rem; margin: 2rem 0; font-style: italic; color: #475569;">
                    "Technology is the tool to break the cycle of poverty. We are not just teaching robots; we are building futures."
                </div>
            </div>
            <div class="col-img" style="flex: 1;">
                <!-- Founder Image -->
                <div style="height: 400px; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img src="assets/images/praveen-ollala.png" alt="Praveen Ollala" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy -->
<section class="section-padding" style="background-color: var(--secondary-color); color: white;">
    <div class="container text-center">
        <h2 style="color: white; margin-bottom: 3rem;">Our Philosophy</h2>
        <div class="philosophy-grid">
            <div class="phil-card">
                <i class="fa-solid fa-lightbulb"></i>
                <h3>Think</h3>
                <p>Encouraging critical analysis to understand the 'Why' before the 'How'.</p>
            </div>
            <div class="phil-card">
                <i class="fa-solid fa-chalkboard-user"></i>
                <h3>Explain</h3>
                <p>Building confidence to face judges and defend technical ideas clearly.</p>
            </div>
            <div class="phil-card">
                <i class="fa-solid fa-hammer"></i>
                <h3>Execute</h3>
                <p>Moving beyond theory to build robust, functioning prototypes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mentorship Excellence -->
<section class="section-padding">
    <div class="container">
        <h2 class="text-center section-title">Mentorship Excellence</h2>
        <div class="mentorship-content" style="max-width: 800px; margin: 0 auto;">
            <div class="certification-badge" style="display: flex; align-items: center; gap: 1rem; background: #f0fdf4; padding: 1.5rem; border-radius: 1rem; border: 1px solid #bbf7d0; margin-bottom: 2rem;">
                <i class="fa-solid fa-certificate" style="font-size: 2rem; color: #16a34a;"></i>
                <div>
                    <h4 style="margin: 0; color: #166534;">CMU Certified Training</h4>
                    <p style="margin: 0;">Our staff are certified by the Carnegie Mellon Robotics Academy, ensuring global best practices.</p>
                </div>
            </div>

            <div class="mentor-profile">
                <h3>Featured Mentor: Shashi Vardhan Gurram</h3>
                <p>A Robotics and AI Trainer and Motivational Speaker, Shashi represents our holistic approach—combining technical prowess with the soft skills needed to succeed in the modern world.</p>
            </div>
        </div>
    </div>
</section>

<style>
/* Page Header */
.page-header {
    background: var(--gradient-main);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.page-header h1 { color: white; margin-bottom: 0.5rem; }
.page-header p { color: #cbd5e1; font-size: 1.2rem; }

/* Philosophy Overlay */
.philosophy-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.phil-card {
    background: rgba(255,255,255,0.05);
    padding: 2rem;
    border-radius: 1rem;
    border: 1px solid rgba(255,255,255,0.1);
}

.phil-card i {
    font-size: 2.5rem;
    color: var(--accent-color);
    margin-bottom: 1rem;
}

.phil-card h3 { color: white; }
.phil-card p { color: #cbd5e1; }

@media (max-width: 768px) {
    .row { flex-direction: column; }
}
</style>

<?php include 'includes/footer.php'; ?>
