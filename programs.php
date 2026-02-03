<?php include 'includes/header.php'; ?>

<!-- Pro Hero Section -->
<section class="pro-header">
    <div class="container text-center">
        <span class="sub-badge">THE BLUEPRINT</span>
        <h1>Programs & Methodology</h1>
        <p>A structured approach to transforming students into innovators.</p>
    </div>
    <div class="header-overlay"></div>
</section>

<!-- Methodology: The Process Flow -->
<section class="section-padding bg-light relative">
    <div class="container">
        <h2 class="text-center section-title mb-5">Our Methodology</h2>
        
        <div class="process-timeline">
            <!-- Step 1 -->
            <div class="process-step">
                <div class="step-icon">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <div class="step-content">
                    <span class="step-num">Step 01</span>
                    <h3>Logic First</h3>
                    <p>We don't just type code. We start with **Low-Level Design (LLD)**, pseudo-coding, and flow charts. Developing the *mindset* of a problem solver is our priority.</p>
                </div>
            </div>

            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-angle-right"></i>
            </div>

            <!-- Step 2 -->
            <div class="process-step">
                <div class="step-icon">
                    <i class="fa-solid fa-code-branch"></i>
                </div>
                <div class="step-content">
                    <span class="step-num">Step 02</span>
                    <h3>Iterative Design</h3>
                    <p>Failure is data. Students refine their projects through multiple iterations, debugging, and testing until they achieve the desired outcome.</p>
                </div>
            </div>

            <!-- Arrow -->
            <div class="process-arrow">
                <i class="fa-solid fa-angle-right"></i>
            </div>

            <!-- Step 3 -->
            <div class="process-step">
                <div class="step-icon">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <div class="step-content">
                    <span class="step-num">Step 03</span>
                    <h3>Documentation</h3>
                    <p>Professional engineering requires documentation. Students use tools like **LEGO Digital Designer** to create manuals for their builds.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Toolkit: Modern Tech Stack Grid -->
<section class="section-padding bg-white">
    <div class="container">
        <h2 class="text-center section-title mb-5">The Toolkit</h2>
        <p class="text-center mb-5 text-gray" style="max-width: 600px; margin-left: auto; margin-right: auto;">
            We use industry-standard hardware and software to ensure our students are future-ready.
        </p>

        <div class="toolkit-grid">
            <!-- Robotics -->
            <div class="toolkit-card card-robotics">
                <div class="card-header-icon">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <h3>Robotics Platforms</h3>
                <div class="tech-tags">
                    <span class="tag">LEGO WeDo 2.0</span>
                    <span class="tag">Spike Prime</span>
                    <span class="tag">Mindstorms EV3</span>
                    <span class="tag">VEX IQ</span>
                    <span class="tag">Arduino</span>
                </div>
            </div>

            <!-- Languages -->
            <div class="toolkit-card card-code">
                <div class="card-header-icon">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3>Languages</h3>
                <div class="tech-tags">
                    <span class="tag">Scratch</span>
                    <span class="tag">Python</span>
                    <span class="tag">C# (Unity)</span>
                    <span class="tag">Java</span>
                    <span class="tag">C++</span>
                </div>
            </div>

            <!-- Advanced -->
            <div class="toolkit-card card-advanced">
                <div class="card-header-icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <h3>Advanced Tracks</h3>
                <div class="tech-tags">
                    <span class="tag">RPA</span>
                    <span class="tag">Embedded Systems</span>
                    <span class="tag">AI Models</span>
                    <span class="tag">IoT</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-banner">
    <div class="overlay"></div>
    <div class="container relative z-10 text-center text-white">
        <h2>Start Your Journey</h2>
        <p>From blocks to complex algorithms, we have a path for you.</p>
        <a href="contact.php" class="btn-glow">Book a Free Trial</a>
    </div>
</section>

<style>
/* Reset & Utils */
.mb-5 { margin-bottom: 3rem; }
.relative { position: relative; }
.z-10 { position: relative; z-index: 10; }
.text-gray { color: #64748b; }
.bg-light { background-color: #f8fafc; }
.bg-white { background-color: #ffffff; }

/* Pro Header */
.pro-header {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    padding: 6rem 0 4rem;
    position: relative;
    color: white;
    overflow: hidden;
}

.header-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(circle at top right, rgba(245, 158, 11, 0.15), transparent 40%);
    pointer-events: none;
}

.pro-header h1 { color: white; margin: 1rem 0; font-size: 3rem; }
.pro-header p { color: #cbd5e1; font-size: 1.25rem; }

.sub-badge {
    background: rgba(245, 158, 11, 0.2);
    color: #fbbf24;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

/* Process Timeline */
.process-timeline {
    display: flex;
    align-items: center; /* Center horizontally for desktop */
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}

.process-step {
    background: white;
    padding: 2.5rem;
    border-radius: 1.5rem;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
    flex: 1;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #f1f5f9;
    position: relative;
    overflow: hidden;
}

.process-step:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
}

.process-step::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #f59e0b, #d97706);
}

.step-icon {
    width: 70px;
    height: 70px;
    background: #fffbeb;
    color: #f59e0b;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 1.5rem;
    border: 2px dashed #fcd34d;
}

.step-num {
    display: block;
    font-size: 0.8rem;
    color: #94a3b8;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
}

.process-step h3 { font-size: 1.5rem; margin-bottom: 1rem; }
.process-step p { color: #475569; font-size: 0.95rem; }

.process-arrow {
    color: #cbd5e1;
    font-size: 2rem;
    flex: 0 0 auto;
}

/* Toolkit Grid */
.toolkit-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2.5rem;
}

.toolkit-card {
    background: white;
    padding: 2.5rem;
    border-radius: 1.5rem;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.card-header-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
    color: white;
}

.card-robotics .card-header-icon { background: #3b82f6; box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.4); }
.card-code .card-header-icon { background: #f59e0b; box-shadow: 0 10px 15px -3px rgba(245, 158, 11, 0.4); }
.card-advanced .card-header-icon { background: #8b5cf6; box-shadow: 0 10px 15px -3px rgba(139, 92, 246, 0.4); }

.toolkit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);
}

.tech-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    margin-top: 1.5rem;
}

.tag {
    background: #f1f5f9;
    color: #334155;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 600;
    transition: background 0.2s;
}

.card-robotics .tag:hover { background: #eff6ff; color: #1d4ed8; }
.card-code .tag:hover { background: #fffbeb; color: #b45309; }
.card-advanced .tag:hover { background: #f5f3ff; color: #6d28d9; }

/* CTA Banner */
.cta-banner {
    background: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%);
    padding: 4rem 0;
    position: relative;
    overflow: hidden;
}

.cta-banner .overlay {
    position: absolute;
    background: url('https://www.transparenttextures.com/patterns/cubes.png');
    opacity: 0.1;
    top: 0; left: 0; right: 0; bottom: 0;
}

.btn-glow {
    display: inline-block;
    background: white;
    color: #ea580c;
    padding: 1rem 2.5rem;
    border-radius: 50px;
    font-weight: 700;
    margin-top: 1.5rem;
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.btn-glow:hover {
    transform: scale(1.05);
    box-shadow: 0 20px 25px -5px rgba(0,0,0,0.3);
}

/* Mobile Adjustments */
@media (max-width: 900px) {
    .process-timeline {
        flex-direction: column;
    }
    
    .process-arrow {
        transform: rotate(90deg);
        margin: 0.5rem 0;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
