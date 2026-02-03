<?php include 'includes/header.php'; ?>

<!-- Services Hero -->
<section class="services-hero">
    <div class="container text-center">
        <span class="pill-badge">Institutional Partnerships</span>
        <h1>We Build Future Tech Leaders</h1>
        <p>Comprehensive STEM solutions for Schools and Colleges.</p>
    </div>
    <div class="hero-bg-overlay"></div>
</section>

<!-- Schools Feature Row -->
<section class="section-padding bg-light relative overflow-hidden">
    <div class="container">
        <div class="feature-row">
            <div class="feature-text">
                <div class="feature-icon icon-blue">
                    <i class="fa-solid fa-school"></i>
                </div>
                <h2>School Support Programs</h2>
                <p class="lead-text">Empowering K-12 education with hands-on robotics and coding curriculums.</p>
                <div class="description-box">
                    <p>We partner with Parent-Teacher Organizations (PTOs) to integrate seamless after-school enrichment. Our "plug-and-play" labs require zero infrastructure changes from the school.</p>
                </div>
                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> K-12 Customized Curriculum</li>
                    <li><i class="fa-solid fa-check-circle"></i> On-site Robotics Labs</li>
                    <li><i class="fa-solid fa-check-circle"></i> Teacher Training Workshops</li>
                </ul>
            </div>
            <div class="feature-image">
                <div class="image-wrapper">
                    <img src="assets/images/school-partnership.png" alt="School Partnership Interaction">
                    <div class="float-card">
                        <i class="fa-solid fa-user-graduate"></i>
                        <span>Student Focused</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- College Feature Row -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="feature-row reverse">
            <div class="feature-text">
                <div class="feature-icon icon-purple">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <h2>College Partners</h2>
                <p class="lead-text">Elevating technical standards for Engineering institutions.</p>
                <div class="description-box">
                    <p>We assist colleges in achieving top performance in national competitions like the <strong>ATL Enhancement Championship</strong>. Our mentors work side-by-side with faculty to deliver project-based learning.</p>
                </div>
                <ul class="feature-list">
                    <li><i class="fa-solid fa-check-circle"></i> ATL Lab Setup & Enhancement</li>
                    <li><i class="fa-solid fa-check-circle"></i> National Competition Mentorship</li>
                    <li><i class="fa-solid fa-check-circle"></i> Embedded Systems Workshops</li>
                </ul>
            </div>
            <div class="feature-image">
                <div class="image-wrapper collage-wrapper">
                    <!-- Placeholder for collage effect if image not available, using gradient -->
                    <div class="collage-main gradient-bg">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <div class="float-card bottom-right">
                        <i class="fa-solid fa-award"></i>
                        <span>National Wins</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Internship Banner (Floating Card Style) -->
<section class="internship-section-wrapper">
    <div class="container">
        <!-- The Floating Card -->
        <div class="cta-card-dark">
            <div class="intern-grid">
                <div class="intern-info">
                    <span class="hiring-badge">Now Hiring Interns</span>
                    <h2>Robotics Internship Program</h2>
                    <p>Bridge the gap between theory and industry. Work on live commercial projects and gain real-world experience.</p>
                    <a href="careers.php" class="btn-shine">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="intern-spotlight-card">
                    <div class="spotlight-header">
                        <i class="fa-solid fa-star"></i> Intern Spotlight
                    </div>
                    <div class="spotlight-body">
                        <h4>Bangari Sri Charan</h4>
                        <p class="role">Business & Tech Intern</p>
                        <p class="quote">"Active participant in official business operations and expense management, gaining insights into the complete EdTech ecosystem."</p>
                    </div>
                </div>
            </div>
            <!-- Decorative Overlay inside card -->
            <div class="glow-overlay"></div>
        </div>
    </div>
</section>

<style>
/* Utils */
.bg-light { background-color: #f8fafc; }
.bg-white { background-color: #ffffff; }
.relative { position: relative; }
.overflow-hidden { overflow: hidden; }

/* Hero */
.services-hero {
    background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
    padding: 6rem 0 5rem;
    position: relative;
    color: white;
    overflow: hidden;
}

.hero-bg-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
}

.services-hero h1 { margin-top: 1rem; font-size: 3rem; }
.pill-badge { background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.9rem; letter-spacing: 0.5px; }

/* Feature Rows */
.feature-row {
    display: flex;
    align-items: center;
    gap: 4rem;
    padding: 2rem 0;
}

.feature-row.reverse { flex-direction: row-reverse; }

.feature-text { flex: 1; }
.feature-image { flex: 1; position: relative; }

.feature-icon {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
    color: white;
    margin-bottom: 1.5rem;
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
}

.icon-blue { background: linear-gradient(135deg, #3b82f6, #2563eb); }
.icon-purple { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }

.feature-text h2 { font-size: 2.25rem; margin-bottom: 0.5rem; }
.lead-text { font-size: 1.1rem; color: #64748b; font-weight: 500; margin-bottom: 2rem; }

.description-box {
    border-left: 4px solid #e2e8f0;
    padding-left: 1.5rem;
    margin-bottom: 2rem;
    color: #475569;
}

.feature-list { list-style: none; }
.feature-list li {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0.75rem;
    color: #334155;
    font-weight: 500;
}

.feature-list i { color: #10b981; }

/* Images */
.image-wrapper {
    position: relative;
    border-radius: 2rem;
    overflow: hidden;
    box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
}

.image-wrapper img { width: 100%; height: auto; display: block; transition: transform 0.5s ease; }
.image-wrapper:hover img { transform: scale(1.05); }

.float-card {
    position: absolute;
    bottom: 20px;
    left: 20px;
    background: white;
    padding: 0.75rem 1.5rem;
    border-radius: 12px;
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-weight: 700;
    color: #334155;
    z-index: 2;
}

.float-card i { color: #f59e0b; }
.float-card.bottom-right { left: auto; right: 20px; }

.collage-main.gradient-bg {
    height: 350px;
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 5rem;
    color: rgba(255,255,255,0.3);
}

/* Internship Section Wrapper */
.internship-section-wrapper {
    background: #ffffff; /* White bg for separation */
    padding: 4rem 0 6rem; /* Padding bottom to separate from footer */
}

.cta-card-dark {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    border-radius: 2.5rem;
    padding: 4rem;
    color: white;
    position: relative;
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Decorate the card */
.cta-card-dark::before {
    content: '';
    position: absolute;
    top: -50%; left: -50%;
    width: 200%; height: 200%;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.intern-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 4rem;
    align-items: center;
    position: relative;
    z-index: 10;
}

.hiring-badge {
    background: #ef4444;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 1rem;
    animation: pulse-red 2s infinite;
}

@keyframes pulse-red {
    0% { box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(239, 68, 68, 0); }
    100% { box-shadow: 0 0 0 0 rgba(239, 68, 68, 0); }
}

.intern-info h2 { color: white; margin-bottom: 1rem; font-size: 2.5rem; }
.intern-info p { color: #94a3b8; font-size: 1.1rem; margin-bottom: 2.5rem; max-width: 500px; }

.btn-shine {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: white;
    color: #0f172a;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-weight: 700;
    transition: all 0.3s ease;
}

.btn-shine:hover { background: #f8fafc; transform: translateX(5px); }

.intern-spotlight-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 1.5rem;
    padding: 2.5rem;
    backdrop-filter: blur(10px);
}

.spotlight-header {
    color: #f59e0b;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.85rem;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.spotlight-body h4 { font-size: 1.25rem; margin-bottom: 0.25rem; color: white; }
.role { color: #94a3b8; font-size: 0.9rem; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 0.5px; }
.quote { font-style: italic; color: #e2e8f0; line-height: 1.6; border-left: 3px solid #f59e0b; padding-left: 1rem; }

@media (max-width: 900px) {
    .feature-row, .feature-row.reverse, .intern-grid { flex-direction: column; grid-template-columns: 1fr; }
    .feature-image { width: 100%; }
    .cta-card-dark { padding: 2.5rem; }
    .intern-info h2 { font-size: 2rem; }
}
</style>

<?php include 'includes/footer.php'; ?>
