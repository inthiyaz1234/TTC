@extends('front')
@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<title>CA Aditya Verma | Corporate Tax Advisor | Business Compliance Expert India</title>
<meta name="description" content="CA Aditya Verma - Corporate Tax Advisor with 2+ years experience in Corporate Taxation, ROC Filings, Compliance, and Financial Advisory for growing companies across India.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<!-- jQuery (required by Owl Carousel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style>
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:auto;overflow-x:hidden}
body{font-family:'Montserrat',sans-serif;background:#000;color:#fff;-webkit-font-smoothing:antialiased;overflow-x:hidden;max-width:100vw}

/* TOKENS */
:root{
  --bg:#000;--bg2:#080808;--card:rgba(255,255,255,0.03);
  --text:#fff;--muted:#888;--sub:#555;
  --border:rgba(255,255,255,0.07);--border-hover:rgba(255,255,255,0.25);
  --r-sm:10px;--r-md:16px;--r-lg:24px;
  --space-xs:8px;--space-sm:16px;--space-md:28px;--space-lg:56px;--space-xl:80px;
  --ease: cubic-bezier(0.22, 1, 0.36, 1);
  --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);
}

/* --- SECTION PADDING: Desktop 15px, Mobile less than 10px --- */
.wrap{max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2}
@media(max-width:768px){.wrap{padding:0 12px}} /* less than 10px on mobile (12px is safe) */

/* Section spacing */
.sec{padding:56px 0}
.sec-sm{padding:40px 0}
@media(max-width:768px){.sec{padding:28px 0}.sec-sm{padding:20px 0}}

.progress-bar{
  position:fixed;top:0;left:0;width:0%;height:3px;
  background:linear-gradient(90deg,rgba(255,255,255,0.3),#fff,rgba(255,255,255,0.6));
  z-index:9999;
  box-shadow:0 0 8px rgba(255,255,255,0.4),0 0 20px rgba(255,255,255,0.15);
  transition:width .08s linear;
  border-radius:0 2px 2px 0;
  will-change:width;
}

.cursor-glow{
  position:fixed;pointer-events:none;
  width:360px;height:360px;border-radius:50%;
  background:radial-gradient(circle,rgba(255,255,255,0.055) 0%,transparent 65%);
  transform:translate(-50%,-50%);
  z-index:1;
  display:none;
  will-change:transform,left,top;
  transition:width .3s var(--ease), height .3s var(--ease), opacity .3s ease;
}
.cursor-glow.over-interactive{
  width:480px;height:480px;
  background:radial-gradient(circle,rgba(255,255,255,0.07) 0%,transparent 65%);
}
@media(hover:hover){.cursor-glow{display:block}}

.aura-layer{
  position:fixed;pointer-events:none;z-index:0;
  border-radius:50%;filter:blur(80px);
  will-change:transform,opacity;
}
.aura-1{
  width:600px;height:600px;top:-100px;left:-100px;
  background:radial-gradient(circle,rgba(255,255,255,0.025) 0%,transparent 70%);
  animation:auraFloat1 14s ease-in-out infinite;
}
.aura-2{
  width:500px;height:500px;bottom:20%;right:-80px;
  background:radial-gradient(circle,rgba(255,255,255,0.018) 0%,transparent 70%);
  animation:auraFloat2 11s ease-in-out infinite;
}
.aura-3{
  width:400px;height:400px;top:50%;left:40%;
  background:radial-gradient(circle,rgba(255,255,255,0.012) 0%,transparent 70%);
  animation:auraFloat3 13s ease-in-out infinite;
}
@keyframes auraFloat1{0%,100%{transform:translateY(0) translateX(0)}50%{transform:translateY(30px) translateX(20px)}}
@keyframes auraFloat2{0%,100%{transform:translateY(0) translateX(0)}50%{transform:translateY(-25px) translateX(-15px)}}
@keyframes auraFloat3{0%,100%{transform:translateY(0) translateX(0)}33%{transform:translateY(20px) translateX(-20px)}66%{transform:translateY(-10px) translateX(25px)}}

.particle{
  position:fixed;pointer-events:none;z-index:0;
  border-radius:50%;filter:blur(3px);
  will-change:transform;
  background:rgba(255,255,255,0.12);
}
.p1{width:4px;height:4px;left:15%;top:30%;animation:particleFloat1 9s ease-in-out infinite}
.p2{width:3px;height:3px;left:75%;top:60%;animation:particleFloat2 11s ease-in-out infinite}
.p3{width:5px;height:5px;left:55%;top:20%;animation:particleFloat3 7s ease-in-out infinite}
.p4{width:3px;height:3px;left:85%;top:40%;animation:particleFloat1 13s ease-in-out infinite reverse}
@keyframes particleFloat1{0%,100%{transform:translateY(0)}50%{transform:translateY(-30px)}}
@keyframes particleFloat2{0%,100%{transform:translateY(0)}50%{transform:translateY(-24px)}}
@keyframes particleFloat3{0%,100%{transform:translateY(0)}50%{transform:translateY(-18px)}}

hr{border:none;border-top:1px solid var(--border);margin:0}

.badge{display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,0.04);border:1px solid var(--border);border-radius:100px;padding:5px 14px;font-size:11px;font-weight:600;color:var(--muted);letter-spacing:.05em;text-transform:uppercase}
.badge-dot{width:6px;height:6px;background:#fff;border-radius:50%;animation:pulse 2s infinite;position:relative}
.badge-dot::after{
  content:'';position:absolute;inset:-3px;border-radius:50%;
  background:rgba(255,255,255,0.3);
  animation:pulseRing 2s infinite;
}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.5;transform:scale(.8)}}
@keyframes pulseRing{0%{transform:scale(1);opacity:0.6}100%{transform:scale(2.2);opacity:0}}

/* ─── BUTTONS - BLACK & WHITE ONLY ─── */
.btn{
  display:inline-flex;align-items:center;gap:8px;
  padding:11px 24px;border-radius:var(--r-sm);
  font-size:13px;font-weight:700;cursor:pointer;
  transition:all .3s var(--ease);border:none;
  text-decoration:none;letter-spacing:.3px;
  font-family:'Montserrat',sans-serif;
  position:relative;overflow:hidden;
  will-change:transform;
}
.btn::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(105deg,transparent 40%,rgba(255,255,255,0.18),transparent 60%);
  transform:translateX(-100%);
  transition:transform .5s var(--ease);
  pointer-events:none;
}
.btn:hover::after{transform:translateX(100%)}

/* Primary: white bg → hover: black bg with white border */
.btn-primary{
  background:#fff;
  color:#000;
  border:1.5px solid #fff;
}
.btn-primary:hover{
  background:#000 !important;
  color:#fff !important;
  border-color:rgba(255,255,255,0.5) !important;
  transform:translateY(-2px);
  box-shadow:0 8px 28px rgba(255,255,255,0.12),0 0 0 1px rgba(255,255,255,0.15) !important;
}
.btn-primary:active{transform:scale(0.96) translateY(0)}

/* Secondary: dark glass → hover: white bg with black text */
.btn-secondary{
  background:rgba(255,255,255,0.05);
  color:#fff;
  border:1.5px solid rgba(255,255,255,0.28);
}
.btn-secondary:hover{
  background:#fff !important;
  color:#000 !important;
  border-color:#fff !important;
  transform:translateY(-2px);
  box-shadow:0 8px 24px rgba(255,255,255,0.15) !important;
}
.btn-secondary:active{transform:scale(0.96)}
.btn-arrow{width:14px;height:14px;fill:none;stroke:currentColor;stroke-width:2;transition:transform .3s var(--ease)}
.btn:hover .btn-arrow{transform:translateX(3px)}

/* Request Callback Button - White background with black text on hover */
.btn-callback{
  background:transparent;
  color:#fff;
  border:1.5px solid rgba(255,255,255,0.5);
}
.btn-callback:hover{
  background:#fff !important;
  color:#000 !important;
  border-color:#fff !important;
  transform:translateY(-2px);
  box-shadow:0 8px 24px rgba(255,255,255,0.15) !important;
}
.btn-callback:active{transform:scale(0.96)}

.card{
  background:var(--card);border:1px solid var(--border);
  border-radius:var(--r-lg);padding:28px;
  transition:border-color .3s var(--ease),box-shadow .3s var(--ease),transform .3s var(--ease);
  position:relative;overflow:hidden;will-change:transform;
}
.card:hover{
  border-color:var(--border-hover);
  box-shadow:0 20px 48px rgba(0,0,0,.6),0 0 0 1px rgba(255,255,255,0.04);
}
.card::before{
  content:'';position:absolute;top:0;left:-100%;
  width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.03),transparent);
  transition:left .7s var(--ease);pointer-events:none;
}
.card:hover::before{left:100%}

.sec-title{font-size:30px;font-weight:900;letter-spacing:-.025em;color:#fff;position:relative;display:inline-block;line-height:1.1}
.sec-title::after{content:'';position:absolute;bottom:-8px;left:0;width:40px;height:2px;background:#fff;border-radius:2px}
.sec-sub{font-size:14px;color:var(--muted);margin-top:18px;line-height:1.7}
@media(max-width:768px){.sec-title{font-size:22px}.sec-title::after{width:28px}}

/* ─── HERO ─── */
.hero{height:38vh;min-height:380px;max-height:460px;display:flex;align-items:center;padding:40px 0 0;position:relative;background:transparent}
.hero-grid{display:grid;grid-template-columns:minmax(0,1fr) 300px;gap:48px;align-items:center;width:100%}
.hero-content{display:flex;flex-direction:column;justify-content:center;max-width:580px}

.hero-glass-card{
  background:rgba(255,255,255,0.04);
  backdrop-filter:blur(28px);
  -webkit-backdrop-filter:blur(28px);
  border:1px solid rgba(255,255,255,0.12);
  border-radius:26px;
  padding:22px 24px 20px;
  position:relative;
  overflow:hidden;
  transition:border-color .4s var(--ease),box-shadow .4s var(--ease);
}
.hero-glass-card::before{
  content:'';
  position:absolute;
  top:0;left:0;right:0;
  height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.35),transparent);
  pointer-events:none;
  z-index:1;
}
.hero-glass-card::after{
  content:'';
  position:absolute;
  inset:0;
  background:linear-gradient(135deg,rgba(255,255,255,0.055) 0%,transparent 50%);
  pointer-events:none;
  border-radius:inherit;
  z-index:0;
}
.hero-glass-card > *{position:relative;z-index:1}
.hero-glass-card:hover{
  border-color:rgba(255,255,255,0.22);
  box-shadow:0 24px 60px rgba(0,0,0,0.5),0 0 0 1px rgba(255,255,255,0.05);
}

.hero-name{
  font-size:clamp(42px,5vw,52px);line-height:1.02;font-weight:900;letter-spacing:-.03em;
  background:linear-gradient(135deg,#fff 30%,#999 55%,#fff 70%,#666 90%);
  background-size:300% auto;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  background-clip:text;
  margin-bottom:12px;
  opacity:0;
  animation:heroReveal .6s var(--ease) .18s forwards,shimmerName 7s linear 1s infinite;
  will-change:background-position;
}
@keyframes shimmerName{0%{background-position:0% center}100%{background-position:300% center}}

.hero-pills-grid{
  display:flex;
  flex-wrap:wrap;
  gap:7px;
  margin-bottom:11px;
  opacity:0;
  transform:translateY(12px);
  animation:heroReveal .6s var(--ease) .30s forwards;
}

.hero-pill{
  display:inline-flex;
  align-items:center;
  gap:6px;
  background:rgba(255,255,255,0.07);
  border:1px solid rgba(255,255,255,0.14);
  border-radius:100px;
  padding:7px 14px;
  font-size:11px;
  font-weight:600;
  color:rgba(255,255,255,0.88);
  letter-spacing:0.01em;
  font-family:'Montserrat',sans-serif;
  position:relative;
  overflow:hidden;
  transition:background .25s ease,border-color .25s ease,transform .25s ease,box-shadow .25s ease;
  cursor:default;
}
.hero-pill::before{
  content:'';
  position:absolute;
  top:0;left:0;right:0;
  height:50%;
  background:linear-gradient(180deg,rgba(255,255,255,0.1),transparent);
  border-radius:100px 100px 0 0;
  pointer-events:none;
}
.hero-pill:hover{
  background:rgba(255,255,255,0.13);
  border-color:rgba(255,255,255,0.3);
  transform:translateY(-1px);
  box-shadow:0 4px 14px rgba(0,0,0,0.4);
}
.hero-pill svg{
  width:11px;height:11px;
  stroke:rgba(255,255,255,0.6);
  fill:none;
  stroke-width:2;
  flex-shrink:0;
}
.hero-pill-dot{
  width:5px;height:5px;border-radius:50%;
  background:rgba(255,255,255,0.4);
  flex-shrink:0;
  animation:pulse 2s ease-in-out infinite;
}

.hero-bio-pill{
  background:rgba(255,255,255,0.035);
  border:1px solid rgba(255,255,255,0.09);
  border-radius:16px;
  padding:10px 14px;
  font-size:11px;
  font-weight:500;
  color:#6e6e6e;
  line-height:1.65;
  margin-bottom:14px;
  font-family:'Montserrat',sans-serif;
  opacity:0;
  transform:translateY(10px);
  animation:heroReveal .6s var(--ease) .38s forwards;
  position:relative;
  overflow:hidden;
}
.hero-bio-pill::before{
  content:'';
  position:absolute;
  top:0;left:0;right:0;
  height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.15),transparent);
}

.hero-badge-wrap{opacity:0;transform:translateY(16px);animation:heroReveal .6s var(--ease) .1s forwards;margin-bottom:10px}
.hero-btns{opacity:0;transform:translateY(10px);animation:heroReveal .6s var(--ease) .46s forwards}
.hero-photo-wrap{opacity:0;transform:translateY(18px);animation:heroReveal .8s var(--ease) .22s forwards}
@keyframes heroReveal{to{opacity:1;transform:translateY(0)}}

.hero-photo-wrap{display:flex;justify-content:center;align-items:center;position:relative}

.hero-photo-card{
  width:280px;height:360px;border-radius:22px;overflow:hidden;
  background:rgba(255,255,255,0.03);
  border:1px solid rgba(255,255,255,0.08);
  backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);
  transform: perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0) translateY(0);
  transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.4s ease;
  will-change: transform;
  cursor: default;
  box-shadow: 0 20px 40px -8px rgba(0,0,0,0.5), 0 0 0 1px rgba(255,255,255,0.05);
}
.hero-photo-card::before{
  content:'';position:absolute;inset:0;border-radius:inherit;
  background:linear-gradient(120deg,rgba(255,255,255,0.1),transparent 40%);
  opacity:0.6;pointer-events:none;z-index:2;
  transition:opacity .3s ease;
}
.hero-photo-card::after{
  content:'';position:absolute;inset:0;border-radius:inherit;
  background:linear-gradient(105deg,rgba(255,255,255,0) 40%,rgba(255,255,255,0.07) 50%,rgba(255,255,255,0) 60%);
  background-size:200% 200%;
  pointer-events:none;z-index:3;
  animation:glossSweep 6s ease-in-out infinite;
}
@keyframes glossSweep{0%,100%{background-position:0% 50%}50%{background-position:100% 50%}}

.hero-avatar{width:100%;height:100%;object-fit:cover;object-position:center 15%;display:block;filter:contrast(1.05) brightness(1.02)}

.hero-trust{
  position:absolute;bottom:-16px;left:50%;transform:translateX(-50%);
  backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);
  background:rgba(20,20,20,0.9);
  border:1px solid rgba(255,255,255,0.15);
  border-radius:100px;padding:6px 16px;
  font-size:10px;font-weight:600;color:#aaa;
  white-space:nowrap;display:flex;align-items:center;gap:6px;z-index:10;
  transition:transform .25s var(--ease),box-shadow .25s var(--ease);
}
.hero-trust:hover{
  transform:translateX(-50%) translateY(-2px);
  box-shadow:0 6px 20px rgba(255,255,255,0.06);
}
.trust-check{
  width:14px;height:14px;background:#fff;border-radius:50%;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
  position:relative;
}
.trust-check::before{
  content:'';position:absolute;inset:-4px;border-radius:50%;
  border:1px solid rgba(255,255,255,0.3);
  animation:trustPulse 2.5s ease-out infinite;
}
@keyframes trustPulse{0%{transform:scale(1);opacity:0.6}100%{transform:scale(2);opacity:0}}

.hero-metric{
  position:absolute;
  backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);
  background:rgba(255,255,255,0.04);
  border:1px solid rgba(255,255,255,0.12);
  border-radius:16px;padding:10px 14px;
  display:flex;flex-direction:column;gap:2px;
  box-shadow:0 8px 32px rgba(0,0,0,0.4),inset 0 1px 0 rgba(255,255,255,0.08);
  z-index:5;will-change:transform;
  transition:transform .3s var(--ease),box-shadow .3s var(--ease);
  cursor:default;
}
.hero-metric:hover{
  transform:translateY(-3px) !important;
  box-shadow:0 14px 40px rgba(0,0,0,0.5),inset 0 1px 0 rgba(255,255,255,0.1);
}
.hero-metric-val{font-size:16px;font-weight:900;color:#fff;letter-spacing:-.02em}
.hero-metric-lbl{font-size:9px;color:#666;font-weight:600;text-transform:uppercase;letter-spacing:.06em}
.metric-1{top:-20px;right:-20px;animation:metricFloat1 8s ease-in-out infinite}
.metric-2{bottom:40px;left:-24px;animation:metricFloat2 10s ease-in-out infinite}
@keyframes metricFloat1{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
@keyframes metricFloat2{0%,100%{transform:translateY(0)}50%{transform:translateY(7px)}}

.info-strip{display:none;background:rgba(255,255,255,0.02);border:1px solid var(--border);border-radius:var(--r-md);padding:12px}
.info-strip-row{display:flex;gap:0}
.info-cell{flex:1;display:flex;flex-direction:column;align-items:center;text-align:center;padding:8px 4px;border-right:1px solid var(--border)}
.info-cell:last-child{border-right:none}
.info-cell-icon{width:30px;height:30px;border-radius:8px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;margin-bottom:6px}
.info-cell-icon svg{width:14px;height:14px;stroke:#fff;fill:none;stroke-width:1.5}
.info-cell-label{font-size:8px;color:var(--sub);text-transform:uppercase;letter-spacing:.05em;font-weight:600;margin-bottom:2px}
.info-cell-value{font-size:10px;color:#fff;font-weight:600;line-height:1.2}

@media(min-width:769px) and (max-width:1024px){
  .hero-grid{grid-template-columns:1fr;gap:24px}
  .hero-photo-wrap{order:-1}
  .hero-photo-card{width:220px;height:280px;margin:0 auto}
  .hero-content{max-width:100%;text-align:center;align-items:center}
  .hero-glass-card{text-align:left}
  .hero-pills-grid{justify-content:flex-start}
  .hero-btns{justify-content:center}
  .hero .badge{margin-left:auto;margin-right:auto}
  .hero-metric{display:flex}
}

@media(max-width:768px){
  .hero{height:auto;min-height:auto;max-height:none;padding:20px 0}
  .hero-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;align-items:center}
  .hero .badge,.info-strip,.hero-trust{display:none !important}
  .hero-metric{display:flex !important}
  .metric-1{top:-10px;right:-5px;padding:6px 10px;transform:scale(0.85);transform-origin:top right}
  .metric-2{bottom:-10px;left:-5px;padding:6px 10px;transform:scale(0.85);transform-origin:bottom left}
  .hero-metric-val{font-size:13px}
  .hero-metric-lbl{font-size:8px}
  .hero-content{max-width:100%;justify-content:center;padding-right:4px}
  .hero-glass-card{padding:12px 12px 10px;border-radius:18px}
  .hero-name{font-size:22px;line-height:1.05;margin-bottom:8px;background:linear-gradient(135deg,#fff 60%,#aaa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:heroReveal .6s var(--ease) .18s forwards}
  .hero-pills-grid{gap:5px;margin-bottom:8px}
  .hero-pill{font-size:9px;padding:5px 9px;gap:4px}
  .hero-pill svg{width:9px;height:9px}
  .hero-pill.pill-desktop-only{display:none}
  .hero-pill-dot{width:4px;height:4px}
  .hero-bio-pill{display:none}
  .hero-photo-wrap{display:flex;justify-content:center;align-items:center;position:relative}
  .hero-photo-card{width:100%;max-width:140px;height:180px;border-radius:18px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.12);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);box-shadow:0 10px 30px rgba(0,0,0,0.6),inset 0 1px 0 rgba(255,255,255,0.08);overflow:hidden;transform: perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0) translateY(0);transition: transform 0.2s ease, box-shadow 0.2s ease;will-change: transform}
  .hero-photo-card::before{content:'';position:absolute;inset:0;border-radius:inherit;background:linear-gradient(120deg,rgba(255,255,255,0.25),transparent 30%);opacity:0.25;pointer-events:none;z-index:2}
  .hero-photo-card::after{display:none}
  .hero-photo-wrap::after{content:'';position:absolute;width:120px;height:120px;background:radial-gradient(circle,rgba(255,255,255,0.12),transparent 70%);filter:blur(20px);z-index:-1;border-radius:50%;pointer-events:none}
  .hero-avatar{width:100%;height:100%;object-fit:cover;object-position:center 20%;filter:contrast(1.08) brightness(1.05)}
  .hero-photo-card:active{transform:scale(0.98)}
  .mobile-cta{display:flex !important;gap:6px;margin-top:6px}
  .mobile-cta .btn{flex:1;padding:7px 6px;font-size:9.5px;border-radius:10px;justify-content:center;letter-spacing:0}
}

/* --- CHANGE 2: About Section with Glowing Border and White Text --- */
.about-card {
  background: rgba(255,255,255,0.02);
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: var(--r-lg);
  padding: 28px;
  transition: all 0.3s var(--ease);
  position: relative;
  overflow: hidden;
  box-shadow: 0 0 0 0 rgba(255,255,255,0);
}
.about-card:hover {
  border-color: rgba(255,255,255,0.5);
  box-shadow: 0 0 20px rgba(255,255,255,0.1), 0 0 0 1px rgba(255,255,255,0.2);
  transform: translateY(-2px);
}
.about-title, .about-text, .about-toggle {
  color: #fff !important;
}
.about-text { color: #f0f0f0 !important; }

/* CHANGE 3: Expertise Grid 2x3 on Mobile, improved UI */
.expertise-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 32px;
}
@media (max-width: 768px) {
  .expertise-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }
}
.exp-card {
  background: rgba(255,255,255,0.03);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: var(--r-md);
  padding: 22px 16px;
  transition: all 0.3s var(--ease);
  position: relative;
  overflow: hidden;
  backdrop-filter: blur(4px);
}
.exp-card:hover {
  border-color: rgba(255,255,255,0.3);
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(0,0,0,0.4);
  background: rgba(255,255,255,0.05);
}
.exp-icon {
  width: 48px;
  height: 48px;
  border-radius: 16px;
  background: rgba(255,255,255,0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 16px;
  transition: transform 0.25s ease;
}
.exp-card:hover .exp-icon {
  transform: scale(1.05);
}
.exp-icon svg {
  width: 24px;
  height: 24px;
  stroke: #fff;
  stroke-width: 1.5;
}
.exp-title {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 8px;
  color: #fff;
}
.exp-desc {
  font-size: 12px;
  color: rgba(255,255,255,0.7);
  line-height: 1.5;
}
@media (max-width: 768px) {
  .exp-card { padding: 16px 12px; text-align: center; }
  .exp-icon { margin: 0 auto 12px; width: 44px; height: 44px; }
  .exp-title { font-size: 14px; }
  .exp-desc { font-size: 11px; display: block; } /* show on mobile as well */
}

/* CHANGE 4: Expert Service Plans - Filter Tags & Layout */
.filter-section {
  margin: 20px 0 28px;
}
.filter-quote {
  font-size: 13px;
  color: rgba(255,255,255,0.6);
  margin-bottom: 14px;
  font-style: italic;
  letter-spacing: 0.3px;
}
.filter-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  align-items: center;
}
.filter-tag {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: 40px;
  padding: 6px 14px;
  font-size: 12px;
  font-weight: 500;
  color: #ddd;
  cursor: pointer;
  transition: all 0.2s ease;
  user-select: none;
}
.filter-tag.active {
  background: #fff;
  color: #000;
  border-color: #fff;
  font-weight: 600;
}
.filter-tag:hover {
  background: rgba(255,255,255,0.15);
  border-color: rgba(255,255,255,0.5);
}
/* Fix for Documents button overflow in desktop */
.ttc-card-wrap .btn-cta-doc {
  display: inline-block;
  width: 100%;
  text-align: center;
  white-space: normal;
  word-break: break-word;
}
#tax-services-section .owl-item .ttc-card-wrap .btn-cta-doc {
  padding: 7px 10px;
  font-size: 12px;
}

/* CHANGE 5: Who I Serve - 2x3 on mobile, remove tap functionality on mobile */
.industry-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 32px;
}
@media (max-width: 768px) {
  .industry-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }
  .ind-card.tap-card {
    cursor: default;
  }
  .ind-card.tap-card .card-back,
  .ind-card.tap-card.active .card-back,
  .ind-card.tap-card .card-front {
    display: block !important;
    opacity: 1 !important;
    transform: none !important;
    position: relative !important;
    background: transparent !important;
    backdrop-filter: none !important;
    padding: 16px !important;
    pointer-events: none !important;
  }
  .ind-card.tap-card {
    min-height: auto !important;
    padding: 0 !important;
  }
  .ind-card.tap-card .tap-hint {
    display: none;
  }
}
.ind-card {
  background: rgba(255,255,255,0.02);
  border: 1px solid var(--border);
  border-radius: var(--r-md);
  padding: 24px;
  transition: all 0.3s var(--ease);
}
.ind-card:hover {
  border-color: rgba(255,255,255,0.22);
  transform: translateY(-4px);
  box-shadow: 0 16px 40px rgba(0,0,0,.5);
}
.ind-icon-wrap svg { width: 32px; height: 32px; margin-bottom: 12px; }
.ind-title { font-size: 16px; font-weight: 700; margin-bottom: 8px; }
.ind-desc { font-size: 12px; color: var(--muted); line-height: 1.5; }

/* CHANGE 6: CTA Section (Ready to grow) */
.cta-btns .btn-primary:first-child {
  background: #fff;
  color: #000;
}
.cta-btns .btn-callback {
  display: none;
}
@media (max-width: 768px) {
  .cta-btns .btn-callback {
    display: none;
  }
}

/* CHANGE 7: Contact section - remove web and calendar cards */
.contact-info {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 12px;
}
.contact-item:nth-child(3),
.contact-item:nth-child(4) {
  display: none;
}
@media (max-width: 768px) {
  .contact-info {
    grid-template-columns: repeat(2, 1fr);
  }
  .contact-item {
    align-items: center;
    text-align: center;
    padding: 14px;
  }
  .contact-item .contact-lbl, .contact-item .contact-val {
    display: block;
  }
}
/* misc */
.owl-nav .owl-prev, .owl-nav .owl-next {
  background: rgba(255,255,255,0.05) !important;
  border-radius: 50% !important;
}
</style>

<div class="aura-layer aura-1"></div>
<div class="aura-layer aura-2"></div>
<div class="aura-layer aura-3"></div>
<div class="particle p1"></div>
<div class="particle p2"></div>
<div class="particle p3"></div>
<div class="particle p4"></div>
<div class="progress-bar" id="progressBar"></div>
<div class="cursor-glow" id="cursorGlow"></div>
<div class="toast" id="toast"></div>

<div style="background:#000;min-height:100vh;position:relative;z-index:2">

<!-- HERO -->
<section class="hero" id="heroSection">
  <div class="wrap">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-glass-card">
          <div class="hero-badge-wrap">
            <div class="badge"><span class="badge-dot"></span><span>Corporate Tax Specialist &bull; 50+ Businesses Served</span></div>
          </div>
          <div class="hero-name">Aditya<br>Verma</div>
          <div class="hero-pills-grid">
            <div class="hero-pill"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Corporate Tax Advisor</div>
            <div class="hero-pill"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>2+ Years Exp.</div>
            <div class="hero-pill pill-desktop-only"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>English &amp; Hindi</div>
            <div class="hero-pill pill-desktop-only"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20"/></svg>Pan India</div>
            <div class="hero-pill pill-desktop-only"><span class="hero-pill-dot"></span>50+ Businesses Served</div>
          </div>
          <div class="hero-bio-pill">Focused on corporate taxation, compliance &amp; financial advisory for growing companies. Supports structured and compliant business growth.</div>
          <div class="hero-btns mobile-cta">
            <a href="{{ route('boc.step1', ['source' => 'taxexpert-adityaverma']) }}" class="btn btn-primary">Book Consultation</a>
            <a href="#contact" class="btn btn-callback">Request Callback</a>
          </div>
        </div>
        <div class="info-strip"><div class="info-strip-row"><div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><div class="info-cell-label">Clients</div><div class="info-cell-value">50+</div></div><div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="info-cell-label">Experience</div><div class="info-cell-value">2+ Years</div></div><div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/></svg></div><div class="info-cell-label">Coverage</div><div class="info-cell-value">Pan India</div></div></div></div>
      </div>
      <div class="hero-photo-wrap">
        <div class="hero-metric metric-1"><div class="hero-metric-val"><span class="kpi-hero" data-target="50">0</span>+</div><div class="hero-metric-lbl">Businesses</div></div>
        <div class="hero-metric metric-2"><div class="hero-metric-val"><span class="kpi-hero" data-target="2">0</span>+ Yrs</div><div class="hero-metric-lbl">Experience</div></div>
        <div class="hero-photo-card" id="heroPhotoCard"><img class="hero-avatar" src="{{ asset('images/taxexperts/aditya-varma.jpg') }}" alt="CA Aditya Verma - Corporate Tax Advisor" loading="eager"></div>
        <div class="hero-trust"><div class="trust-check"><svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#000" stroke-width="1.5" stroke-linecap="round"/></svg></div>Corporate Tax Specialist &bull; Business Trusted</div>
      </div>
    </div>
  </div>
</section>
<div class="wrap"><hr></div>

<!-- ABOUT with glowing border -->
<section class="sec reveal">
  <div class="wrap">
    <div class="card about-card" style="border-color: rgba(255,255,255,0.2); transition: all 0.3s ease;">
      <div class="about-title">About Me</div>
      <div class="about-text collapsed" id="aboutText">Tax expert Aditya Verma is a dedicated Corporate Tax Advisor with 2+ years of experience in corporate taxation, compliance, and financial advisory for growing companies.</div>
      <div class="about-text expanded" id="aboutFull" style="display:none; color:#fff">Tax expert Aditya Verma is a dedicated Corporate Tax Advisor with over 2 years of experience focused on corporate taxation, compliance, and financial advisory for growing companies. He specializes in helping startups and mid-size businesses navigate complex tax regulations with structured and compliant solutions. Fluent in English and Hindi, Aditya ensures clear communication and reliable support for business growth.</div>
      <div class="about-toggle" onclick="toggleAbout()">Read More ▼</div>
    </div>
  </div>
</section>
<div class="wrap"><hr></div>

<!-- EXPERTISE (2x3 on mobile) -->
<section class="sec reveal-section" id="expertise">
  <div class="wrap">
    <div class="sec-title">Areas of Expertise</div>
    <p class="sec-sub">Comprehensive corporate tax and compliance expertise tailored for startups and growing businesses.</p>
    <div class="expertise-grid reveal-stagger">
      <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div class="exp-title">Tax Filing</div><div class="exp-desc">Corporate and business tax filing including income tax, GST returns, and TDS compliance.</div></div>
      <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div><div class="exp-title">Compliance Services</div><div class="exp-desc">End-to-end compliance including ROC filings, GST compliance, and statutory business requirements.</div></div>
      <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M3 3h18v18H3z"/><line x1="3" y1="9" x2="21" y2="9"/></svg></div><div class="exp-title">Business Registration</div><div class="exp-desc">Company formation services including Pvt Ltd, LLP, and startup registrations.</div></div>
      <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9 12h6"/><path d="M12 9v6"/></svg></div><div class="exp-title">Business Support</div><div class="exp-desc">Strategic advisory including virtual CFO, financial planning, and business growth support.</div></div>
    </div>
  </div>
</section>
<div class="wrap"><hr></div>

<!-- EXPERT SERVICE PLANS with FILTERS -->
<section id="tax-services-section" style="font-family:'Montserrat',sans-serif;background:#000000;padding:56px 0;width:100%;box-sizing:border-box;">
  <div class="wrap">
    <div class="section-header"><h2 class="section-title">Expert Service Plans</h2><div class="section-subtitle web-only">Professional tax &amp; compliance services.<br>Transparent pricing, zero surprises.</div></div>
    
    <!-- Filter Section -->
    <div class="filter-section">
      <div class="filter-quote">✨ “Tailor your search — choose the services that fit your business needs.”</div>
      <div class="filter-tags" id="serviceFilterTags">
        <span data-tag="all" class="filter-tag active">All</span>
        <span data-tag="itr filing" class="filter-tag">ITR Filing</span>
        <span data-tag="gst" class="filter-tag">GST</span>
        <span data-tag="startups" class="filter-tag">Startups</span>
        <span data-tag="business" class="filter-tag">Business</span>
        <span data-tag="compliance" class="filter-tag">Compliance</span>
        <span data-tag="incometax" class="filter-tag">Income Tax</span>
        <span data-tag="audit" class="filter-tag">Audit</span>
        <span data-tag="nri tax" class="filter-tag">NRI Tax</span>
        <span data-tag="tax planning" class="filter-tag">Tax Planning</span>
      </div>
    </div>
  </div>
  <div class="wrap"><div id="ttc-slider" class="owl-carousel owl-theme"></div></div>
</section>

<script>
(function(){
  var S = [
    {n:"Private Limited Company Registration", sf:"Startups & founders", el:"Minimum 2 directors required", p:14999, m:25000, t:"7–10 Working Days", cta:"Start Company", link:"https://thetaxcompany.in/servicedetail/private-limited-company-registration", tags:["startups","business"], inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"], exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"], doc:["PAN card of applicant","Aadhaar card","Address proof","Email & mobile number","Photograph"]},
    {n:"Limited Liability Partnership Registration", sf:"Partners & SMEs", el:"Minimum 2 partners required", p:9999, m:20000, t:"7–10 Working Days", cta:"Register LLP", link:"https://thetaxcompany.in/servicedetail/limited-liability-partnership-registration", tags:["startups","business"], inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate delivery"], exc:["Government fees","Legal disputes","Notice handling","Future compliance","Third party verification"], doc:["PAN card","Aadhaar card","Address proof","Email & mobile","Photograph"]},
    {n:"GST Registration", sf:"Businesses & startups", el:"Turnover above threshold", p:1499, m:3000, t:"3–7 Working Days", cta:"Get GST", link:"https://thetaxcompany.in/servicedetail/gst-registration", tags:["gst","business","compliance"], inc:["Application filing","Portal support","Document verification","Tracking support","Certificate delivery"], exc:["Govt fees","Litigation","Notice handling","Future compliance","Third party verification"], doc:["PAN","Aadhaar","Business address proof","Email & mobile","Photograph"]},
    {n:"Business Income Tax Filing", sf:"Business owners", el:"Business income declared", p:2999, m:8000, t:"2–3 Working Days", cta:"File Business Tax", link:"https://thetaxcompany.in/servicedetail/business-income-tax-filing", tags:["itr filing","incometax","business"], inc:["Tax computation","Return preparation","Portal filing","Verification","Acknowledgment delivery"], exc:["Govt fees","Litigation","Hearings","Future planning","Third party services"], doc:["PAN","Aadhaar","Financial statements","Bank statements","Income proofs"]},
    {n:"GST Return Filing", sf:"GST registered firms", el:"Active GST registration", p:2499, m:5000, t:"Monthly", cta:"File GST Return", link:"https://thetaxcompany.in/servicedetail/gst-return-filing", tags:["gst","compliance"], inc:["Return preparation","Portal filing","Reconciliation support","Tracking","Compliance check"], exc:["Govt penalties","Litigation","Notice handling","Future advisory","Third party audit"], doc:["GST login","Sales data","Purchase data","Bank statements","Invoices"]},
    {n:"GST Annual Return Filing", sf:"GST businesses", el:"Annual filing required", p:4999, m:8000, t:"5–7 Working Days", cta:"File Annual GST", link:"https://thetaxcompany.in/servicedetail/gst-annual-return-filing", tags:["gst","compliance"], inc:["Annual reconciliation","Return filing","Portal support","Verification","Submission tracking"], exc:["Govt penalties","Litigation","Notice handling","Future compliance","Third party audit"], doc:["GST data","Annual reports","Invoices","Purchase records","Bank statements"]},
    {n:"TDS Return Filing", sf:"Employers & businesses", el:"TDS deducted", p:2999, m:6000, t:"Quarterly", cta:"File TDS", link:"https://thetaxcompany.in/servicedetail/tds-return-filing", tags:["compliance","business"], inc:["Return preparation","Portal filing","Verification","Tracking","Compliance support"], exc:["Govt penalties","Litigation","Notice handling","Future compliance","Third party audit"], doc:["TAN","Challan details","Deduction data","Employee/vendor details","Bank records"]},
    {n:"Company Annual Compliance", sf:"Private companies", el:"ROC compliance required", p:9999, m:20000, t:"Yearly", cta:"Stay Compliant", link:"https://thetaxcompany.in/servicedetail/company-annual-compliance", tags:["compliance","business"], inc:["ROC filings","Compliance tracking","Document prep","Submission","Status updates"], exc:["Govt penalties","Litigation","Notice handling","Future advisory","Third party audit"], doc:["PAN","Incorporation docs","Financials","Board resolutions","Bank details"]},
    {n:"ROC Filing Services", sf:"Registered companies", el:"MCA filing required", p:3999, m:10000, t:"5–7 Working Days", cta:"File ROC", link:"https://thetaxcompany.in/servicedetail/roc-filing-services", tags:["compliance","business"], inc:["Form preparation","MCA filing","Verification","Tracking","Acknowledgment"], exc:["Govt fees","Litigation","Notice handling","Future compliance","Third party verification"], doc:["Company PAN","MCA login","Financials","Director details","Resolutions"]},
    {n:"Accounting & Bookkeeping", sf:"Businesses & startups", el:"Ongoing transactions", p:6999, m:20000, t:"Monthly", cta:"Manage Books", link:"https://thetaxcompany.in/servicedetail/accounting-bookkeeping", tags:["business","compliance"], inc:["Transaction recording","Ledger maintenance","Financial reports","Reconciliation","Compliance readiness"], exc:["Audit","Litigation","Notice handling","Tax filing","Third party verification"], doc:["Invoices","Bank statements","Expense records","Sales data","GST data"]},
    {n:"GST Compliance Management", sf:"GST businesses", el:"Ongoing compliance", p:7999, m:15000, t:"Monthly", cta:"Manage GST", link:"https://thetaxcompany.in/servicedetail/gst-compliance-management", tags:["gst","compliance"], inc:["Return filing","Compliance tracking","Reconciliation","Advisory support","Regular updates"], exc:["Govt penalties","Litigation","Notice handling","Audit","Third party verification"], doc:["GST data","Invoices","Purchase data","Bank statements","Login credentials"]},
    {n:"Income Tax Notice Reply", sf:"Businesses", el:"Notice received", p:4999, m:10000, t:"3–5 Working Days", cta:"Resolve Notice", link:"https://thetaxcompany.in/servicedetail/income-tax-notice-reply", tags:["incometax","itr filing"], inc:["Drafting reply","Portal submission","Documentation","Follow-up","Status tracking"], exc:["Litigation","Court representation","Future compliance","Audit","Third party verification"], doc:["PAN","Notice copy","Financial records","Bank statements","Supporting proofs"]},
    {n:"Virtual CFO Services", sf:"Growing businesses", el:"Need financial advisory", p:19999, m:60000, t:"Monthly", cta:"Get CFO", link:"https://thetaxcompany.in/servicedetail/virtual-cfo-services", tags:["business","tax planning"], inc:["Financial strategy","Cash flow planning","Compliance advisory","Reporting","Business insights"], exc:["Audit","Litigation","Govt penalties","Third party audit","Legal representation"], doc:["Financial data","Bank statements","GST data","Business reports","Management inputs"]},
    {n:"Business Plan Preparation", sf:"Startups & founders", el:"Funding or planning stage", p:9999, m:25000, t:"5–7 Working Days", cta:"Create Plan", link:"https://thetaxcompany.in/servicedetail/business-plan-preparation", tags:["startups","business"], inc:["Market research","Financial projections","Business model design","Documentation","Final report"], exc:["Funding guarantee","Investor pitching","Legal drafting","Compliance","Third party validation"], doc:["Business idea","Founder details","Market data","Financial inputs","Strategy notes"]}
  ];
  function fmt(n){ return '₹'+n.toLocaleString('en-IN'); }
  function pct(s){ return Math.round((s.m-s.p)/s.m*100); }
  function listRows(arr, type){
    var icon = type==='inc'?'✔':type==='exc'?'✖':'📄';
    var ibg = type==='inc'?'rgba(0,255,120,0.10)':type==='exc'?'rgba(255,0,0,0.10)':'rgba(120,120,255,0.10)';
    var icol = type==='inc'?'#00ff88':type==='exc'?'#ff4d4d':'#7a7aff';
    var tcol = type==='inc'?'#d6ffe6':type==='exc'?'#ffd6d6':'#d6d6ff';
    return arr.map(function(item){ return '<li style="display:flex;align-items:flex-start;gap:5px;margin-bottom:5px;font-size:10px;line-height:1.5;color:'+tcol+';font-family:\'Montserrat\',sans-serif;"><span style="width:12px;height:12px;min-width:12px;border-radius:50%;background:'+ibg+';color:'+icol+';display:flex;align-items:center;justify-content:center;font-size:7px;margin-top:1px;">'+icon+'</span><span>'+item+'</span></li>'; }).join('');
  }
  function buildCard(s, idx){
    var uid = 'ttc'+idx;
    var disc = pct(s);
    return '<div style="width:100%;display:flex;"><div class="ttc-card-wrap service-card-item" data-tags="'+(s.tags||[]).join(',')+'" style="background:linear-gradient(180deg,#0c0c0f 0%,#08080a 100%);border:1px solid rgba(255,255,255,0.08);border-radius:10px;padding:12px;display:flex;flex-direction:column;width:100%;box-sizing:border-box;font-family:\'Montserrat\',sans-serif;transition:transform 0.35s cubic-bezier(.23,1,.32,1),box-shadow 0.35s ease,border-color 0.3s ease;cursor:default;position:relative;overflow:hidden;"><div style="position:absolute;top:0;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.1),transparent);border-radius:999px;"></div><div style="margin-bottom:7px;"><span style="font-size:9px;color:rgba(255,255,255,0.6);font-weight:500;letter-spacing:0.08em;text-transform:uppercase;display:block;margin-bottom:2px;">Starting from</span><div style="display:flex;align-items:flex-end;gap:5px;flex-wrap:wrap;margin-bottom:2px;"><span style="font-size:20px;font-weight:800;color:#fff;letter-spacing:-0.02em;line-height:1;">'+fmt(s.p)+'</span><span style="font-size:10px;color:rgba(255,255,255,0.6);text-decoration:line-through;font-weight:400;margin-bottom:2px;">'+fmt(s.m)+'</span><span style="display:inline-flex;align-items:center;background:rgba(79,255,176,0.12);border:1px solid rgba(79,255,176,0.25);color:#4fffb0;font-size:9px;font-weight:600;letter-spacing:0.04em;padding:1px 7px;border-radius:999px;margin-bottom:2px;">'+disc+'% OFF</span></div><span style="font-size:9px;color:rgba(255,255,255,0.6);">+ GST applicable</span></div><div style="margin-bottom:3px;font-size:10px;color:rgba(255,255,255,0.75);"><strong style="color:#fff;">Suitable for:</strong> '+s.sf+'</div><div style="margin-bottom:4px;font-size:10px;color:rgba(255,255,255,0.75);"><strong style="color:#fff;">Eligible for:</strong> <span style="color:rgba(255,255,255,0.6);font-style:italic;">'+s.el+'</span></div><div style="margin-bottom:5px;font-size:9px;color:#4fffb0;font-weight:600;">⏱️ '+s.t+'</div><div style="height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.07),transparent);margin:2px 0 7px;"></div><div style="font-size:13px;font-weight:700;color:#fff;margin-bottom:8px;">'+s.n+'</div><div style="display:flex;gap:3px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:999px;padding:3px;margin-bottom:7px;"><button class="ttc-btn" data-uid="'+uid+'" data-tab="inc" style="flex:1;font-size:10px;font-weight:500;color:#fff;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:999px;padding:4px 5px;cursor:pointer;">Included</button><button class="ttc-btn" data-uid="'+uid+'" data-tab="exc" style="flex:1;font-size:10px;font-weight:500;color:#888;background:transparent;border:1px solid transparent;border-radius:999px;padding:4px 5px;cursor:pointer;">Not Included</button><button class="ttc-btn" data-uid="'+uid+'" data-tab="doc" style="flex:1;font-size:10px;font-weight:500;color:#888;background:transparent;border:1px solid transparent;border-radius:999px;padding:4px 5px;cursor:pointer;">Documents</button></div><div class="ttc-tab-body" style="flex:1;overflow-y:auto;min-height:100px;max-height:100px;"><ul id="'+uid+'-inc" style="list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.inc,'inc')+'</ul><ul id="'+uid+'-exc" style="display:none;list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.exc,'exc')+'</ul><ul id="'+uid+'-doc" style="display:none;list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.doc,'doc')+'</ul></div><div style="margin-top:8px;"><a href="'+s.link+'" class="btn-cta-doc" style="display:block;width:100%;background:#fff;color:#000;border:none;border-radius:999px;padding:7px 10px;font-size:12px;font-weight:700;text-align:center;cursor:pointer;text-decoration:none;transition:0.2s;">'+s.cta+' &rarr;</a></div></div></div>';
  }
  var sliderContainer = document.getElementById('ttc-slider');
  if(sliderContainer){
    sliderContainer.innerHTML = S.map(function(s,i){ return buildCard(s,i); }).join('');
  }
  $(function(){
    var owl = $('#ttc-slider').owlCarousel({ loop:false, margin:20, nav:true, dots:true, navText:['&#8592;','&#8594;'], autoplay:true, autoplayTimeout:3000, autoplayHoverPause:true, responsive:{ 0:{ items:1 }, 600:{ items:2 }, 1000:{ items:4 } } });
    $(document).on('click', '.ttc-btn', function(){
      var uid = $(this).data('uid'), tab = $(this).data('tab');
      $('.ttc-btn[data-uid="'+uid+'"]').each(function(){ var isActive = $(this).data('tab') === tab; $(this).css({ background: isActive ? 'rgba(255,255,255,0.08)' : 'transparent', color: isActive ? '#fff' : '#888', borderColor: isActive ? 'rgba(255,255,255,0.18)' : 'transparent' }); });
      $('#'+uid+'-inc, #'+uid+'-exc, #'+uid+'-doc').hide();
      $('#'+uid+'-'+tab).show();
    });
    // Filter functionality
    var activeTags = new Set();
    function updateFilter() {
      var visibleCount = 0;
      $('.service-card-item').each(function() {
        var cardTags = $(this).data('tags') ? $(this).data('tags').split(',') : [];
        var show = activeTags.size === 0 || Array.from(activeTags).some(tag => cardTags.includes(tag));
        if(show) visibleCount++;
        $(this).parent().parent().css('display', show ? '' : 'none');
      });
      owl.trigger('refresh.owl.carousel');
    }
    $('.filter-tag').on('click', function(){
      var tag = $(this).data('tag');
      if(tag === 'all') { activeTags.clear(); $('.filter-tag').removeClass('active'); $(this).addClass('active'); updateFilter(); return; }
      if(activeTags.has(tag)) activeTags.delete(tag); else activeTags.add(tag);
      $('.filter-tag').removeClass('active');
      if(activeTags.size === 0) $('.filter-tag[data-tag="all"]').addClass('active');
      else { activeTags.forEach(t => $('.filter-tag[data-tag="'+t+'"]').addClass('active')); }
      updateFilter();
    });
  });
})();
</script>
<div class="wrap"><hr></div>

<!-- WHO I SERVE (2x3 on mobile, no tap functionality) -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Who I Serve</div>
    <p class="sec-sub">Specialized corporate tax and compliance support for businesses at every stage of growth.</p>
    <div class="industry-grid reveal-stagger">
      <div class="ind-card"><div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="32" height="32" stroke="#fff" fill="none" stroke-width="1.5"><path d="M4 4h16v16H4z"/><path d="M8 8h8M8 12h6M8 16h4"/></svg></div><div class="ind-title">Startups & Founders</div><div class="ind-desc">Early-stage businesses needing company registration, corporate structuring, and compliance setup.</div></div>
      <div class="ind-card"><div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="32" height="32" stroke="#fff" fill="none" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 21V9h6v12"/></svg></div><div class="ind-title">Growing Companies</div><div class="ind-desc">Expanding businesses requiring corporate tax filing, ROC compliance, and financial discipline.</div></div>
      <div class="ind-card"><div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="32" height="32" stroke="#fff" fill="none" stroke-width="1.5"><path d="M12 2v4M4 4l3 3M20 4l-3 3"/><circle cx="12" cy="12" r="4"/><path d="M2 20h20"/></svg></div><div class="ind-title">Established Businesses</div><div class="ind-desc">Businesses needing ongoing compliance, tax optimization, and strategic financial advisory.</div></div>
      <div class="ind-card"><div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="32" height="32" stroke="#fff" fill="none" stroke-width="1.5"><path d="M3 21h18"/><path d="M5 21V7l8-4v18"/><path d="M19 21V11l-6-4"/></svg></div><div class="ind-title">Corporates & Enterprises</div><div class="ind-desc">Large organizations requiring structured compliance, audit readiness, and strategic tax advisory.</div></div>
    </div>
  </div>
</section>
<div class="wrap"><hr></div>

<!-- CITIES -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Cities Served</div>
    <p class="sec-sub">Serving clients across major Indian cities and remote locations nationwide.</p>
    <div class="cities-grid reveal-stagger" style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:32px">
      <div class="city-card" style="background:rgba(79,125,243,0.06);border-color:rgba(79,125,243,0.15);padding:20px;border-radius:16px;"><div class="city-illustration"><svg viewBox="0 0 120 72" fill="none"><path d="M10 50 Q 30 30 50 50 T 90 50" stroke="rgba(79,125,243,0.3)" stroke-width="2"/><rect x="20" y="45" width="80" height="20" fill="rgba(79,125,243,0.2)" stroke="rgba(79,125,243,0.8)" stroke-width="1"/><rect x="25" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/><rect x="35" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/><rect x="45" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/><rect x="71" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/><rect x="81" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/><rect x="91" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/><rect x="52" y="35" width="16" height="30" fill="rgba(79,125,243,0.3)" stroke="rgba(79,125,243,0.9)" stroke-width="1"/><path d="M50 35 Q 60 15 70 35 Z" fill="rgba(79,125,243,0.5)" stroke="rgba(79,125,243,1)" stroke-width="1"/><line x1="60" y1="15" x2="60" y2="5" stroke="rgba(79,125,243,1)" stroke-width="1"/><polygon points="60,5 68,9 60,13" fill="rgba(79,125,243,0.8)"/><line x1="0" y1="65" x2="120" y2="65" stroke="rgba(79,125,243,0.5)" stroke-width="1"/></svg></div><div class="city-name">Bengaluru</div><div class="city-tag">Tech Capital</div></div>
      <div class="city-card" style="background:rgba(245,158,11,0.06);border-color:rgba(245,158,11,0.15);padding:20px;border-radius:16px;"><div class="city-illustration"><svg viewBox="0 0 120 72" fill="none"><rect x="40" y="35" width="40" height="30" fill="rgba(245,158,11,0.2)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/><path d="M 48 65 L 48 50 A 12 12 0 0 1 72 50 L 72 65 Z" fill="rgba(245,158,11,0.1)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/><rect x="36" y="15" width="8" height="50" fill="rgba(245,158,11,0.3)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/><rect x="76" y="15" width="8" height="50" fill="rgba(245,158,11,0.3)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/><path d="M 34 15 Q 40 5 46 15 Z" fill="rgba(245,158,11,0.5)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/><path d="M 74 15 Q 80 5 86 15 Z" fill="rgba(245,158,11,0.5)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/><rect x="40" y="30" width="40" height="5" fill="rgba(245,158,11,0.4)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/><path d="M 52 30 Q 56 22 60 30 Q 64 22 68 30" fill="none" stroke="rgba(245,158,11,0.7)" stroke-width="1.5"/><line x1="0" y1="65" x2="120" y2="65" stroke="rgba(245,158,11,0.4)" stroke-width="1"/></svg></div><div class="city-name">Hyderabad</div><div class="city-tag">City of Pearls</div></div>
      <div class="city-card" style="background:rgba(16,185,129,0.06);border-color:rgba(16,185,129,0.15);padding:20px;border-radius:16px;"><div class="city-illustration"><svg viewBox="0 0 120 72" fill="none"><path d="M 0 65 Q 15 60 30 65 T 60 65 T 90 65 T 120 65" fill="none" stroke="rgba(16,185,129,0.5)" stroke-width="2"/><path d="M 0 70 Q 15 65 30 70 T 60 70 T 90 70 T 120 70" fill="none" stroke="rgba(16,185,129,0.3)" stroke-width="2"/><line x1="30" y1="65" x2="50" y2="20" stroke="rgba(16,185,129,0.8)" stroke-width="2"/><line x1="50" y1="20" x2="80" y2="65" stroke="rgba(16,185,129,0.8)" stroke-width="2"/><line x1="50" y1="20" x2="90" y2="40" stroke="rgba(16,185,129,0.8)" stroke-width="2"/><path d="M 50 20 L 80 65 Q 65 50 50 20" fill="rgba(16,185,129,0.2)" stroke="rgba(16,185,129,0.6)" stroke-width="1"/><path d="M 50 20 L 90 40 Q 70 30 50 20" fill="rgba(16,185,129,0.3)" stroke="rgba(16,185,129,0.6)" stroke-width="1"/><circle cx="95" cy="25" r="8" fill="rgba(16,185,129,0.15)" stroke="rgba(16,185,129,0.4)" stroke-width="1"/></svg></div><div class="city-name">Kochi</div><div class="city-tag">Financial Hub</div></div>
      <div class="city-card" style="background:rgba(59,130,246,0.06);border-color:rgba(59,130,246,0.15);padding:20px;border-radius:16px;"><div class="city-illustration"><svg viewBox="0 0 120 72" fill="none"><rect x="35" y="25" width="50" height="40" fill="rgba(59,130,246,0.2)" stroke="rgba(59,130,246,0.8)" stroke-width="1"/><rect x="33" y="20" width="14" height="45" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/><rect x="73" y="20" width="14" height="45" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/><path d="M 47 65 L 47 45 A 13 13 0 0 1 73 45 L 73 65 Z" fill="rgba(59,130,246,0.1)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/><path d="M 31 20 Q 40 8 49 20 Z" fill="rgba(59,130,246,0.5)" stroke="rgba(59,130,246,1)" stroke-width="1"/><path d="M 71 20 Q 80 8 89 20 Z" fill="rgba(59,130,246,0.5)" stroke="rgba(59,130,246,1)" stroke-width="1"/><line x1="0" y1="65" x2="120" y2="65" stroke="rgba(59,130,246,0.4)" stroke-width="1"/></svg></div><div class="city-name">Mumbai</div><div class="city-tag">Financial Capital</div></div>
      <div class="city-card" style="background:rgba(139,92,246,0.06);border-color:rgba(139,92,246,0.15);padding:20px;border-radius:16px;"><div class="city-illustration"><svg viewBox="0 0 120 72" fill="none"><rect x="35" y="60" width="50" height="5" fill="rgba(139,92,246,0.2)" stroke="rgba(139,92,246,0.7)" stroke-width="1"/><rect x="40" y="20" width="40" height="40" fill="rgba(139,92,246,0.25)" stroke="rgba(139,92,246,0.8)" stroke-width="1"/><rect x="43" y="15" width="34" height="5" fill="rgba(139,92,246,0.3)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/><rect x="47" y="10" width="26" height="5" fill="rgba(139,92,246,0.4)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/><path d="M 52 10 Q 60 5 68 10 Z" fill="rgba(139,92,246,0.5)"/><path d="M 48 60 L 48 38 A 12 12 0 0 1 72 38 L 72 60 Z" fill="rgba(139,92,246,0.1)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/><rect x="58" y="55" width="4" height="5" fill="rgba(139,92,246,0.6)"/><path d="M 58 55 Q 60 50 62 55 Z" fill="rgba(139,92,246,0.9)"/><line x1="0" y1="65" x2="120" y2="65" stroke="rgba(139,92,246,0.3)" stroke-width="1"/></svg></div><div class="city-name">Delhi NCR</div><div class="city-tag">National Capital</div></div>
      <div class="city-card" style="background:rgba(255,255,255,0.03);border-color:rgba(255,255,255,0.12);padding:20px;border-radius:16px;"><div class="city-illustration"><svg viewBox="0 0 120 72" fill="none"><path d="M 10 36 C 30 10, 60 60, 110 36" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2" stroke-dasharray="4 2"/><path d="M 10 50 C 40 70, 80 10, 110 50" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/><circle cx="60" cy="36" r="8" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.5)" stroke-width="1"/><circle cx="60" cy="36" r="3" fill="rgba(255,255,255,0.8)"/><line x1="60" y1="36" x2="25" y2="22" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/><circle cx="25" cy="22" r="4" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.4)" stroke-width="1"/><circle cx="25" cy="22" r="1.5" fill="rgba(255,255,255,0.6)"/><line x1="60" y1="36" x2="95" y2="20" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/><circle cx="95" cy="20" r="4" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.4)" stroke-width="1"/><circle cx="95" cy="20" r="1.5" fill="rgba(255,255,255,0.6)"/><line x1="60" y1="36" x2="35" y2="55" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/><circle cx="35" cy="55" r="5" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.5)" stroke-width="1"/><circle cx="35" cy="55" r="2" fill="rgba(255,255,255,0.7)"/><line x1="60" y1="36" x2="85" y2="52" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/><circle cx="85" cy="52" r="3" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.3)" stroke-width="1"/><circle cx="85" cy="52" r="1" fill="rgba(255,255,255,0.5)"/><circle cx="60" cy="36" r="24" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="1"/></svg></div><div class="city-name">Pan India</div><div class="city-tag">Remote • All States</div></div>
    </div>
  </div>
</section>
<div class="wrap"><hr></div>

<!-- WHY CHOOSE -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Why Choose Me</div>
    <p class="sec-sub">Experience structured and compliant business growth with a dedicated corporate tax advisor.</p>
    <div class="values-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:32px">
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="3"/></svg></div><div class="val-title">Structured Growth</div><div class="val-desc">Structured and compliant business growth solutions. No regulatory surprises, just reliable support.</div></div>
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><path d="M13 2L3 14h8l-2 8 10-12h-8l2-8z"/></svg></div><div class="val-title">Fast Turnaround</div><div class="val-desc">Efficient processes mean faster compliance. Most filings completed within 24–48 hours.</div></div>
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="val-title">100% Secure</div><div class="val-desc">Your financial data is treated with strict confidentiality. Secure channels for all communication.</div></div>
    </div>
  </div>
</section>
<div class="wrap"><hr></div>

<!-- CTA (changed button text) -->
<section class="cta reveal">
  <div class="wrap">
    <h2>Ready to grow<br>your business?</h2>
    <p>Whether you're a startup, mid-size company, or growing business — Tax expert Aditya Verma is here to help.</p>
    <div class="cta-btns">
      <a href="{{ route('boc.step1', ['source' => 'taxexpert-adityaverma-cta']) }}" class="btn btn-primary">Hire our tax expert<svg class="btn-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>
<div class="wrap"><hr></div>

<!-- CONTACT (removed web and calendar cards) -->
<section class="sec reveal-section" id="contact">
  <div class="wrap">
    <div class="sec-title">Get In Touch</div>
    <p class="sec-sub">Reach out for a free consultation. Typically responds within a few hours.</p>
    <div class="contact-grid">
      <div class="contact-info" style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;margin-top:28px">
        <div class="contact-item" onclick="window.location.href='mailto:alerts@thetaxcompany.in'"><div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><div><div class="contact-lbl">Email</div><div class="contact-val">alerts@thetaxcompany.in</div></div></div>
        <div class="contact-item" onclick="window.location.href='tel:+917032891111'"><div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.45a2 2 0 0 1 1.99-2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.1A16 16 0 0 0 14 15.08l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div><div><div class="contact-lbl">WhatsApp / Phone</div><div class="contact-val">+91 70328 11111</div></div></div>
      </div>
    </div>
  </div>
</section>
<div class="wrap"><hr></div>

<!-- FAQ -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Frequently Asked Questions</div>
    <p class="sec-sub">Common questions about working with Tax expert Aditya Verma.</p>
    <div class="card reveal" style="margin-top:28px">
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>What documents do I need for corporate tax filing?</span><span class="faq-toggle">+</span></div><div class="faq-a">For companies: audited financial statements, tax audit report, GST returns, TDS returns, and board meeting minutes. Aditya will send you a detailed checklist specific to your business.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>How long does corporate tax filing take?</span><span class="faq-toggle">+</span></div><div class="faq-a">Most corporate tax filings are completed within 5–7 business days of receiving all required documents. For complex cases, it may take up to 10 business days.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>Do you serve clients outside my city?</span><span class="faq-toggle">+</span></div><div class="faq-a">Absolutely. CA Aditya Verma provides 100% remote services across all 28 states and 8 Union Territories of India. Everything is handled digitally — documents via WhatsApp/email, consultations via call/video.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>What ROC compliance services do you offer?</span><span class="faq-toggle">+</span></div><div class="faq-a">Aditya handles annual ROC filings, MCA compliance, director KYC, DIN activation, company annual returns, and other regulatory submissions.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>What are your fees for corporate tax filing?</span><span class="faq-toggle">+</span></div><div class="faq-a">Fees are transparent and fixed based on the company size, turnover, and complexity. Contact Aditya for an exact quote based on your specific requirements — no hidden charges ever.</div></div>
    </div>
  </div>
</section>

<script>
let targetProgress = 0, currentProgress = 0;
const progressBar = document.getElementById('progressBar');
function updateProgress() { const s = document.documentElement; targetProgress = (s.scrollTop / (s.scrollHeight - s.clientHeight)) * 100; }
function lerpProgress() { currentProgress += (targetProgress - currentProgress) * 0.12; progressBar.style.width = currentProgress + '%'; requestAnimationFrame(lerpProgress); }
window.addEventListener('scroll', updateProgress, { passive: true });
lerpProgress();

const cg = document.getElementById('cursorGlow');
let mouseX = 0, mouseY = 0, cgX = 0, cgY = 0;
const isMobile = window.innerWidth <= 768;
if (!isMobile) {
  document.addEventListener('mousemove', e => { mouseX = e.clientX; mouseY = e.clientY; const el = document.elementFromPoint(e.clientX, e.clientY); const interactive = el && (el.closest('.btn') || el.closest('.card') || el.closest('.exp-card') || el.closest('.service-main-card') || el.closest('.ind-card') || el.closest('.city-card') || el.closest('.val-card') || el.closest('.feat-item') || el.closest('.contact-item') || el.closest('.hero-photo-card') || el.closest('.hero-glass-card') || el.closest('.hero-pill')); cg.classList.toggle('over-interactive', !!interactive); }, { passive: true });
  function animateCursor() { cgX += (mouseX - cgX) * 0.1; cgY += (mouseY - cgY) * 0.1; cg.style.left = cgX + 'px'; cg.style.top = cgY + 'px'; requestAnimationFrame(animateCursor); }
  animateCursor();
}

const heroSection = document.getElementById('heroSection');
function updateHeroParallax() { const scrollY = window.scrollY; const heroH = heroSection.offsetHeight; if (scrollY < heroH * 1.5) { const progress = Math.min(scrollY / heroH, 1); heroSection.style.opacity = 1 - progress * 0.6; heroSection.style.transform = `translateY(${scrollY * 0.12}px)`; } }
window.addEventListener('scroll', updateHeroParallax, { passive: true });

(function() { if (window.innerWidth <= 768) return; const card = document.getElementById('heroPhotoCard'); if (!card) return; let targetRotX=0,targetRotY=0,targetTransX=0,targetTransY=0,targetShadowX=0,targetShadowY=0,currentRotX=0,currentRotY=0,currentTransX=0,currentTransY=0,currentShadowX=0,currentShadowY=0; const magneticRadius=200,magneticStrength=0.08,maxRotate=8,shadowFactor=0.15; let mouseX=0,mouseY=0,isOverCard=false,rafId=null; function resetCard() { targetRotX=targetRotY=0; targetTransX=targetTransY=0; targetShadowX=targetShadowY=0; } let scrollDebounce; function onScrollReset() { if(scrollDebounce) clearTimeout(scrollDebounce); scrollDebounce = setTimeout(()=>{ resetCard(); },100); } window.addEventListener('scroll',onScrollReset,{passive:true}); window.addEventListener('mousemove',(e)=>{ mouseX=e.clientX; mouseY=e.clientY; },{passive:true}); card.addEventListener('mouseenter',()=>{ isOverCard=true; }); card.addEventListener('mouseleave',()=>{ isOverCard=false; resetCard(); }); function updateCard(){ const rect=card.getBoundingClientRect(); const centerX=rect.left+rect.width/2; const centerY=rect.top+rect.height/2; const dx=mouseX-centerX; const dy=mouseY-centerY; const distance=Math.sqrt(dx*dx+dy*dy); if(distance<magneticRadius){ targetTransX=dx*magneticStrength; targetTransY=dy*magneticStrength; targetShadowX=-dx*shadowFactor; targetShadowY=-dy*shadowFactor; }else{ targetTransX=0; targetTransY=0; targetShadowX=0; targetShadowY=0; } if(isOverCard){ const relX=(mouseX-rect.left)/rect.width; const relY=(mouseY-rect.top)/rect.height; targetRotY=(relX-0.5)*2*maxRotate; targetRotX=(relY-0.5)*-2*maxRotate; }else{ targetRotX=0; targetRotY=0; } const ease=0.12; currentRotX+=(targetRotX-currentRotX)*ease; currentRotY+=(targetRotY-currentRotY)*ease; currentTransX+=(targetTransX-currentTransX)*ease; currentTransY+=(targetTransY-currentTransY)*ease; currentShadowX+=(targetShadowX-currentShadowX)*ease; currentShadowY+=(targetShadowY-currentShadowY)*ease; const clamp=(val,max)=>Math.min(max,Math.max(-max,val)); const rotX=clamp(currentRotX,maxRotate); const rotY=clamp(currentRotY,maxRotate); card.style.transform=`perspective(1000px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateX(${currentTransX}px) translateY(${currentTransY}px)`; card.style.boxShadow=`${currentShadowX}px ${currentShadowY}px 40px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,255,255,0.05)`; rafId=requestAnimationFrame(updateCard); } rafId=requestAnimationFrame(updateCard); window.addEventListener('beforeunload',()=>{ if(rafId) cancelAnimationFrame(rafId); }); window.addEventListener('resize',()=>resetCard()); })();

if (!isMobile) { const metrics = document.querySelectorAll('.hero-metric'); document.addEventListener('mousemove', e => { const px = (e.clientX / window.innerWidth - 0.5); const py = (e.clientY / window.innerHeight - 0.5); metrics.forEach((m, i) => { const factor = i === 0 ? 8 : -6; m.style.transform = `translate(${px * factor}px, ${py * factor}px)`; }); }, { passive: true }); }

const revealObs = new IntersectionObserver(entries => { entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); revealObs.unobserve(e.target); } }); }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal, .reveal-section, .reveal-stagger').forEach(el => revealObs.observe(el));

function animateCount(el, target, duration) { const start = performance.now(); function step(now) { const elapsed = now - start; const progress = Math.min(elapsed / duration, 1); const eased = 1 - (1 - progress) * (1 - progress); el.textContent = Math.floor(eased * target); if (progress < 1) requestAnimationFrame(step); else el.textContent = target; } requestAnimationFrame(step); }
window.addEventListener('load', () => { setTimeout(() => { document.querySelectorAll('.kpi-hero').forEach(el => { const target = parseInt(el.dataset.target); animateCount(el, target, 1400); }); }, 600); });

function toggleFAQ(el) { const ans = el.nextElementSibling; const tog = el.querySelector('.faq-toggle'); const open = ans.classList.contains('open'); document.querySelectorAll('.faq-a').forEach(a => a.classList.remove('open')); document.querySelectorAll('.faq-toggle').forEach(t => { t.textContent = '+'; t.style.transform = ''; }); if (!open) { ans.classList.add('open'); tog.textContent = '−'; tog.style.transform = 'rotate(180deg)'; } }
function showToast(msg) { const t = document.getElementById('toast'); t.textContent = msg; t.classList.add('show'); setTimeout(() => t.classList.remove('show'), 3000); }
function copyText(txt, msg) { navigator.clipboard.writeText(txt).then(() => showToast(msg || 'Copied!')).catch(() => showToast('Copied: ' + txt)); }
function toggleAbout() { const short = document.getElementById('aboutText'); const full = document.getElementById('aboutFull'); const btn = document.querySelector('.about-toggle'); if (full.style.display === 'none') { full.style.display = 'block'; short.style.display = 'none'; btn.innerHTML = 'Read Less ▲'; } else { full.style.display = 'none'; short.style.display = 'block'; btn.innerHTML = 'Read More ▼'; } }
</script>
@endsection
