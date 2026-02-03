<?php include 'includes/header.php'; ?>

<!-- Careers Hero -->
<section class="careers-hero">
    <div class="container text-center">
        <span class="badge-hiring">We Are Hiring</span>
        <h1>Build the Future of EdTech</h1>
        <p>Join a passionate team dedicated to transforming education through robotics and AI.</p>
        <div class="hero-actions">
            <a href="#openings" class="btn btn-primary">View Openings</a>
            <a href="about.php" class="btn btn-outline" style="border-color: rgba(255,255,255,0.3); color: white;">Our Culture</a>
        </div>
    </div>
    <div class="particles-overlay"></div>
</section>

<!-- Why Join Us -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Why Work at Coding Yantra?</h2>
            <p class="text-gray" style="max-width: 600px; margin: 0 auto;">More than just a job. It's a calling to inspire the next generation.</p>
        </div>

        <div class="benefits-grid">
            <!-- Benefit 1 -->
            <div class="benefit-card">
                <div class="icon-box icon-growth">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <h3>Accelerated Growth</h3>
                <p>Work with cutting-edge tech like **ROS 2, AI, and RPA**. We invest in your upskilling.</p>
            </div>

            <!-- Benefit 2 -->
            <div class="benefit-card">
                <div class="icon-box icon-impact">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>
                <h3>Real Impact</h3>
                <p>Don't just write code. Influence the minds of thousands of students and shape their futures.</p>
            </div>

            <!-- Benefit 3 -->
            <div class="benefit-card">
                <div class="icon-box icon-cert">
                    <i class="fa-solid fa-certificate"></i>
                </div>
                <h3>Global Certification</h3>
                <p>Get trained and certified by prestigious bodies like **Carnegie Mellon Robotics Academy**.</p>
            </div>
        </div>
    </div>
</section>

<!-- Current Openings -->
<section id="openings" class="section-padding bg-light relative">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Current Openings</h2>
        </div>
        
        <div class="job-list-container">
            <!-- Job 1 -->
            <div class="job-row">
                <div class="job-main">
                    <h3>STEM Trainer (Robotics & AI)</h3>
                    <div class="job-meta">
                        <span class="meta-item"><i class="fa-solid fa-briefcase"></i> Full-time</span>
                        <span class="meta-item"><i class="fa-solid fa-location-dot"></i> Uppal, Hyderabad</span>
                        <span class="meta-item badge-hot">Hot Job</span>
                    </div>
                </div>
                <div class="job-action">
                    <a href="contact.php?subject=Job Application - STEM Trainer" class="btn btn-outline-dark">Apply Now</a>
                </div>
            </div>
            
            <!-- Job 2 -->
            <div class="job-row">
                <div class="job-main">
                    <h3>Business Development Associate</h3>
                    <div class="job-meta">
                        <span class="meta-item"><i class="fa-solid fa-briefcase"></i> Full-time / Part-time</span>
                        <span class="meta-item"><i class="fa-solid fa-location-dot"></i> Hybrid</span>
                    </div>
                </div>
                <div class="job-action">
                    <a href="contact.php?subject=Job Application - BDA" class="btn btn-outline-dark">Apply Now</a>
                </div>
            </div>

            <!-- Job 3 (Internship) -->
            <div class="job-row featured-job">
                <div class="job-main">
                    <h3>Robotics Intern</h3>
                    <div class="job-meta">
                        <span class="meta-item"><i class="fa-solid fa-graduation-cap"></i> Internship</span>
                        <span class="meta-item"><i class="fa-solid fa-location-dot"></i> On-site</span>
                        <span class="meta-item badge-intern">Students Welcome</span>
                    </div>
                    <p class="job-preview mt-2">Perfect for B.E./B.Tech students. Gain hands-on experience with commercial projects.</p>
                </div>
                <div class="job-action">
                    <a href="contact.php?subject=Internship Application" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Utils */
.bg-light { background-color: #f8fafc; }
.bg-white { background-color: #ffffff; }
.text-gray { color: #64748b; }
.mb-5 { margin-bottom: 3rem; }
.mt-2 { margin-top: 0.5rem; }

/* Hero */
.careers-hero {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    padding: 6rem 0 5rem;
    color: white;
    position: relative;
    overflow: hidden;
}

.particles-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 30px 30px;
    opacity: 0.2;
}

.careers-hero h1 { font-size: 3rem; margin: 1rem 0; }
.careers-hero p { color: #cbd5e1; font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem; }

.badge-hiring {
    background: #f59e0b;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.8rem;
    letter-spacing: 1px;
}

.hero-actions { display: flex; gap: 1rem; justify-content: center; }

/* Benefits Grid */
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.benefit-card {
    background: white;
    padding: 2.5rem;
    border-radius: 1.5rem;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    text-align: center;
}

.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);
    border-color: #cbd5e1;
}

.icon-box {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin: 0 auto 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
}

.icon-growth { background: #ecfdf5; color: #10b981; }
.icon-impact { background: #fef2f2; color: #ef4444; }
.icon-cert { background: #fffbeb; color: #f59e0b; }

.benefit-card h3 { margin-bottom: 1rem; }
.benefit-card p { color: #64748b; line-height: 1.6; }

/* Job List */
.job-list-container {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.job-row {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: all 0.2s ease;
    border: 1px solid transparent;
}

.job-row:hover {
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
    transform: scale(1.01);
}

.job-main h3 { font-size: 1.25rem; margin-bottom: 0.5rem; color: #1e293b; }

.job-meta { display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; }

.meta-item {
    font-size: 0.85rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.4rem;
}

.badge-hot {
    background: #fef2f2;
    color: #ef4444;
    padding: 0.1rem 0.5rem;
    border-radius: 4px;
    font-weight: 700;
    font-size: 0.7rem;
    text-transform: uppercase;
}

.badge-intern {
    background: #eff6ff;
    color: #3b82f6;
    padding: 0.1rem 0.5rem;
    border-radius: 4px;
    font-weight: 700;
    font-size: 0.7rem;
    text-transform: uppercase;
}

.btn-outline-dark {
    border: 2px solid #e2e8f0;
    color: #334155;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s;
}

.btn-outline-dark:hover {
    border-color: #0f172a;
    background: #0f172a;
    color: white;
}

.featured-job {
    border: 1px solid #f59e0b;
    background: #fffbeb;
}

.job-preview { font-size: 0.9rem; color: #475569; }

@media (max-width: 768px) {
    .job-row { flex-direction: column; align-items: flex-start; gap: 1.5rem; }
    .job-action { width: 100%; }
    .btn-outline-dark, .btn-primary { width: 100%; text-align: center; display: block; }
}
</style>

<?php include 'includes/footer.php'; ?>
