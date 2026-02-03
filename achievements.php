<?php include 'includes/header.php'; ?>

<!-- Hero Section with Gold/Trophy Theme -->
<section class="achieve-header">
    <div class="container text-center">
        <span class="gold-badge"><i class="fa-solid fa-trophy"></i> Hall of Fame</span>
        <h1>Achievements</h1>
        <p>Celebrating Excellence on National & Global Stages.</p>
    </div>
    <div class="gold-overlay"></div>
</section>

<!-- RoboFest 2026 Feature -->
<section class="section-padding bg-white relative">
    <div class="container">
        <div class="robofest-container">
            <div class="robofest-content">
                <span class="milestone-pill">Major Milestone</span>
                <h2>RoboFest 2026 Bangalore Nationals</h2>
                <p class="lead-text">A historic moment for Coding Yantra. Our students proved their mettle against the best in the country.</p>
                
                <div class="stat-row">
                    <div class="stat-item">
                        <span class="stat-num">3/3</span>
                        <span class="stat-label">Top Prizes Won</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-num">1st</span>
                        <span class="stat-label">Exhibition Category</span>
                    </div>
                </div>

                <div class="clean-sweep-box">
                    <i class="fa-solid fa-medal"></i>
                    <div>
                        <strong>"Clean Sweep"</strong>
                        <p>Bagged all three top spots in the Exhibition Category.</p>
                    </div>
                </div>
            </div>
            
            <div class="robofest-visual">
                <div class="image-frame">
                    <img src="assets/images/robofest.png" alt="RoboFest Winning Team">
                </div>
                <div class="floating-badge">
                    <i class="fa-solid fa-star"></i> National Winners
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Highlight: Hunterix -->
<section class="section-padding bg-dark text-white relative overflow-hidden">
    <div class="container relative z-10">
        <h2 class="text-center section-title white mb-5">Innovation Spotlight</h2>
        
        <div class="project-showcase">
            <div class="project-info">
                <h3>Hunterix</h3>
                <p class="project-subtitle">Smart Shoe for the Visually Impaired</p>
                <p class="project-desc">
                    Built on the **Arduino** platform and programmed in **C#**, Hunterix uses ultrasonic sensors to detect obstacles, vibrating to alert the user. A perfect blend of empathy and engineering.
                </p>
                <ul class="tech-specs">
                    <li><i class="fa-solid fa-microchip"></i> Arduino</li>
                    <li><i class="fa-solid fa-code"></i> C# / C++</li>
                    <li><i class="fa-solid fa-wifi"></i> Sensors</li>
                </ul>
                <div class="coach-tag">
                    <i class="fa-solid fa-user-tie"></i> Coached by <strong>Harsha G M</strong>
                </div>
            </div>
            <div class="project-icon-visual">
                <i class="fa-solid fa-shoe-prints"></i>
            </div>
        </div>
    </div>
    <div class="tech-overlay"></div>
</section>

<!-- Student Success Stories -->
<section class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center section-title mb-5">Student Success Stories</h2>
        <div class="stories-grid-pro">
            <!-- Card 1 -->
            <div class="story-card-pro bg-white">
                <div class="card-top color-1">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div class="card-body">
                    <h3>Alia Chambers</h3>
                    <span class="loc-badge">Jamaica</span>
                    <p>From zero to <strong>60 projects in 6 months</strong>. A true coding champion.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="story-card-pro bg-white">
                <div class="card-top color-2">
                    <i class="fa-solid fa-gamepad"></i>
                </div>
                <div class="card-body">
                    <h3>Adya</h3>
                    <span class="loc-badge">Grade 6</span>
                    <p>Published a custom game to the <strong>Google Play Store</strong> at age 11.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="story-card-pro bg-white">
                <div class="card-top color-3">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div class="card-body">
                    <h3>Muhammad Hamza</h3>
                    <span class="loc-badge">HP Codewars</span>
                    <p>Rank winner for "Deep Blue Sea" environmental awareness project.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Utilities */
.relative { position: relative; }
.z-10 { position: relative; z-index: 10; }
.text-white { color: white; }
.bg-dark { background-color: #0f172a; }
.bg-light { background-color: #f8fafc; }
.mb-5 { margin-bottom: 3rem; }
.section-title.white { color: white; border-bottom-color: rgba(255,255,255,0.2); }

/* Header */
.achieve-header {
    background: linear-gradient(135deg, #FFD700 0%, #FDB931 100%); /* Gold Gradient */
    padding: 6rem 0 4rem;
    position: relative;
    color: #422006;
    overflow: hidden;
}

.achieve-header h1 { color: #422006; margin: 1rem 0; font-size: 3rem; }
.achieve-header p { font-weight: 600; font-size: 1.2rem; opacity: 0.9; }

.gold-badge {
    background: rgba(255,255,255,0.3);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.8rem;
    letter-spacing: 1px;
    border: 1px solid rgba(255,255,255,0.4);
}

.gold-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background-image: radial-gradient(circle, rgba(255,255,255,0.4) 1px, transparent 1px);
    background-size: 20px 20px;
    opacity: 0.3;
    pointer-events: none;
}

/* RoboFest Section */
.robofest-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.milestone-pill {
    background: #e0f2fe;
    color: #0369a1;
    padding: 0.25rem 0.75rem;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.robofest-content h2 {
    font-size: 2.5rem;
    margin-top: 1rem;
    line-height: 1.1;
}

.lead-text { font-size: 1.1rem; color: #475569; margin-bottom: 2rem; }

.stat-row { display: flex; gap: 3rem; margin-bottom: 2rem; }
.stat-item { display: flex; flex-direction: column; }
.stat-num { font-size: 2.5rem; font-weight: 800; color: #f59e0b; line-height: 1; }
.stat-label { font-size: 0.9rem; color: #64748b; font-weight: 600; text-transform: uppercase; }

.clean-sweep-box {
    background: linear-gradient(to right, #fef3c7, #fff7ed);
    border: 1px solid #fcd34d;
    padding: 1.5rem;
    border-radius: 1rem;
    display: flex;
    gap: 1.5rem;
    align-items: center;
}

.clean-sweep-box i { font-size: 2.5rem; color: #d97706; }

.robofest-visual { position: relative; }

.image-frame {
    border-radius: 2rem;
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    border: 8px solid white;
    transform: rotate(2deg);
    transition: transform 0.3s ease;
}

.image-frame:hover { transform: rotate(0deg) scale(1.02); }

.floating-badge {
    position: absolute;
    bottom: -20px;
    left: -20px;
    background: #f59e0b;
    color: white;
    padding: 1rem 2rem;
    border-radius: 1rem;
    font-weight: 700;
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Project Showcase */
.project-showcase {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 2rem;
    padding: 4rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4rem;
    backdrop-filter: blur(10px);
}

.project-info h3 { color: white; font-size: 2.5rem; margin-bottom: 0.2rem; }
.project-subtitle { color: #f59e0b; font-size: 1.2rem; margin-bottom: 1.5rem; font-family: 'Courier New', monospace; }
.project-desc { color: #cbd5e1; font-size: 1.1rem; margin-bottom: 2rem; max-width: 500px; }

.tech-specs { display: flex; gap: 1.5rem; margin-bottom: 2rem; }
.tech-specs li {
    background: rgba(255,255,255,0.1);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.coach-tag { color: #94a3b8; font-size: 0.9rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; display: inline-block; }

.project-icon-visual {
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 5rem;
    color: white;
    box-shadow: 0 0 50px rgba(59, 130, 246, 0.5);
    animation: pulse 3s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7); }
    70% { transform: scale(1.05); box-shadow: 0 0 0 20px rgba(59, 130, 246, 0); }
    100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(59, 130, 246, 0); }
}

/* Stories Pro */
.stories-grid-pro {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.story-card-pro {
    border-radius: 1.5rem;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    border: 1px solid #e2e8f0;
}

.story-card-pro:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); }

.card-top {
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: white;
}

.color-1 { background: linear-gradient(135deg, #ec4899, #be185d); }
.color-2 { background: linear-gradient(135deg, #8b5cf6, #6d28d9); }
.color-3 { background: linear-gradient(135deg, #10b981, #059669); }

.card-body { padding: 2rem; text-align: center; }
.card-body h3 { margin-bottom: 0.5rem; font-size: 1.25rem; }
.loc-badge { display: inline-block; background: #f1f5f9; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem; margin-bottom: 1rem; color: #64748b; }

@media (max-width: 900px) {
    .robofest-container, .project-showcase { grid-template-columns: 1fr;  display: flex; flex-direction: column; }
    .image-frame { transform: rotate(0); }
    .floating-badge { left: 0; bottom: -15px; }
    .project-icon-visual { width: 150px; height: 150px; font-size: 3rem; }
}
</style>

<?php include 'includes/footer.php'; ?>
