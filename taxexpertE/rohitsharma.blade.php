@extends('front')
@section('content')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rohit Sharma | Senior Tax Consultant | Income Tax Filing Expert India</title>
<meta name="description" content=" Rohit Sharma - Verified Senior Tax Consultant with 8+ years experience in ITR Filing, GST Compliance, Tax Planning for individuals and businesses across India.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

.wrap{max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2}
@media(max-width:768px){.wrap{padding:0 16px}}

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
  background:linear-gradient(105deg,transparent 40%,rgba(255,255,255,0.15),transparent 60%);
  transform:translateX(-100%);
  transition:transform .5s var(--ease);
  pointer-events:none;
}
.btn:hover::after{transform:translateX(100%)}
.btn-primary{background:#fff;color:#000}
.btn-primary:hover{background:#e8e8e8;transform:translateY(-2px);box-shadow:0 8px 28px rgba(255,255,255,0.18)}
.btn-primary:active{transform:scale(0.96) translateY(0)}
.btn-secondary{background:transparent;color:#fff;border:1px solid rgba(255,255,255,0.2)}
.btn-secondary:hover{border-color:#fff;background:rgba(255,255,255,0.06);transform:translateY(-2px);box-shadow:0 8px 20px rgba(255,255,255,0.06)}
.btn-secondary:active{transform:scale(0.96)}
.btn-arrow{width:14px;height:14px;fill:none;stroke:currentColor;stroke-width:2;transition:transform .3s var(--ease)}
.btn:hover .btn-arrow{transform:translateX(3px)}

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

.hero{height:38vh;min-height:380px;max-height:460px;display:flex;align-items:center;padding:40px 0 0; ;position:relative;background:transparent}
.hero-grid{display:grid;grid-template-columns:minmax(0,1fr) 300px;gap:48px;align-items:center;width:100%}
.hero-content{display:flex;flex-direction:column;justify-content:center;max-width:580px}
.hero-content .badge{margin-bottom:14px}

.hero-name{
  font-size:clamp(42px,5vw,52px);line-height:1.02;font-weight:900;letter-spacing:-.03em;
  background:linear-gradient(135deg,#fff 30%,#999 55%,#fff 70%,#666 90%);
  background-size:300% auto;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  background-clip:text;
  margin-bottom:6px;
  animation:shimmerName 7s linear infinite;
  will-change:background-position;
}
@keyframes shimmerName{0%{background-position:0% center}100%{background-position:300% center}}

.hero-role{font-size:17px;font-weight:600;color:var(--muted);margin-bottom:4px}
.hero-exp{font-size:13px;color:var(--sub);margin-bottom:14px}
.hero-bio{font-size:13px;color:#777;line-height:1.65;margin-bottom:20px;max-width:520px}
.hero-btns{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:0}
.hero-photo-wrap{display:flex;justify-content:center;align-items:center;position:relative}

/* ---------- UPGRADED .hero-photo-card (magnetic + depth) ---------- */
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

.hero-badge-wrap{opacity:0;transform:translateY(16px);animation:heroReveal .6s var(--ease) .1s forwards}
.hero-name{opacity:0;transform:translateY(16px);animation:heroReveal .6s var(--ease) .18s forwards,shimmerName 7s linear 1s infinite}
.hero-role{opacity:0;transform:translateY(14px);animation:heroReveal .6s var(--ease) .26s forwards}
.hero-exp{opacity:0;transform:translateY(12px);animation:heroReveal .6s var(--ease) .32s forwards}
.hero-bio{opacity:0;transform:translateY(12px);animation:heroReveal .6s var(--ease) .38s forwards}
.hero-btns{opacity:0;transform:translateY(10px);animation:heroReveal .6s var(--ease) .46s forwards}
.hero-photo-wrap{opacity:0;transform:translateY(18px);animation:heroReveal .8s var(--ease) .22s forwards}
@keyframes heroReveal{to{opacity:1;transform:translateY(0)}}

.hero-name{
  opacity:0;
  animation:heroReveal .6s var(--ease) .18s forwards, shimmerName 7s linear 1s infinite;
}

@media(min-width:769px) and (max-width:1024px){
  .hero-grid{grid-template-columns:1fr;gap:24px}
  .hero-photo-wrap{order:-1}
  .hero-photo-card{width:220px;height:280px;margin:0 auto}
  .hero-content{max-width:100%;text-align:center;align-items:center}
  .hero-bio{max-width:100%}
  .hero-btns{justify-content:center}
  .hero .badge{margin-left:auto;margin-right:auto}
  .hero-metric{display:none}
}

/* ─── MOBILE HERO ─── */
@media(max-width:768px){
  .hero{height:40vh;min-height:260px;max-height:320px;padding:0}
  .hero-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;align-items:center}

  .hero .badge,.hero-bio,.info-strip,.hero-trust,.hero-metric{display:none !important}

  .hero-content{max-width:100%;justify-content:center;padding-right:4px}
  .hero-name{
    font-size:24px;line-height:1.05;margin-bottom:4px;
    background:linear-gradient(135deg,#fff 60%,#aaa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;
    animation:heroReveal .6s var(--ease) .18s forwards;
  }
  .hero-role{font-size:13px;margin-bottom:2px;letter-spacing:0.3px}
  .hero-exp{font-size:11px;margin-bottom:0}
  .hero-photo-wrap{display:flex;justify-content:center;align-items:center;position:relative}
  .hero-photo-card{
    width:100%;max-width:140px;height:180px;border-radius:18px;
    background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.12);
    backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);
    box-shadow:0 10px 30px rgba(0,0,0,0.6),inset 0 1px 0 rgba(255,255,255,0.08);
    overflow:hidden;
    /* floatSoft removed — stable idle */
    transform: perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0) translateY(0);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    will-change: transform;
  }
  .hero-photo-card::before{
    content:'';position:absolute;inset:0;border-radius:inherit;
    background:linear-gradient(120deg,rgba(255,255,255,0.25),transparent 30%);
    opacity:0.25;pointer-events:none;z-index:2
  }
  .hero-photo-card::after{display:none}
  .hero-photo-wrap::after{
    content:'';position:absolute;width:120px;height:120px;
    background:radial-gradient(circle,rgba(255,255,255,0.12),transparent 70%);
    filter:blur(20px);z-index:-1;border-radius:50%;pointer-events:none
  }
  .hero-avatar{width:100%;height:100%;object-fit:cover;object-position:center 20%;filter:contrast(1.08) brightness(1.05)}
  .hero-photo-card:active{transform:scale(0.98)}

  /* ─── MOBILE CTA BUTTONS ─── */
  .mobile-cta{
    display:flex !important;
    gap:6px;
    margin-top:6px;
  }
  .mobile-cta .btn{
    flex:1;
    padding:7px 8px;
    font-size:10px;
    border-radius:10px;
    justify-content:center;
  }
}

/* ─── ABOUT ─── */
.about-card{padding:24px;border-radius:20px}
.about-title{font-size:18px;font-weight:800;margin-bottom:12px}
.about-text{font-size:13px;color:#bbb;line-height:1.7}
.about-toggle{margin-top:12px;font-size:12px;font-weight:700;color:#6ea8ff;cursor:pointer;transition:opacity .2s ease}
.about-toggle:hover{opacity:0.7}
.info-strip{display:none;background:rgba(255,255,255,0.02);border:1px solid var(--border);border-radius:var(--r-md);padding:12px}
.info-strip-row{display:flex;gap:0}
.info-cell{flex:1;display:flex;flex-direction:column;align-items:center;text-align:center;padding:8px 4px;border-right:1px solid var(--border)}
.info-cell:last-child{border-right:none}
.info-cell-icon{width:30px;height:30px;border-radius:8px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;margin-bottom:6px}
.info-cell-icon svg{width:14px;height:14px;stroke:#fff;fill:none;stroke-width:1.5}
.info-cell-label{font-size:8px;color:var(--sub);text-transform:uppercase;letter-spacing:.05em;font-weight:600;margin-bottom:2px}
.info-cell-value{font-size:10px;color:#fff;font-weight:600;line-height:1.2}

.sec{padding:56px 0}
.sec-sm{padding:40px 0}
@media(max-width:768px){.sec{padding:32px 0}.sec-sm{padding:24px 0}}

/* ─── SCROLL REVEAL ─── */
.reveal{opacity:0;transform:translateY(24px);transition:opacity .6s var(--ease),transform .6s var(--ease)}
.reveal.visible{opacity:1;transform:translateY(0)}

.reveal-stagger > *{
  opacity:0;transform:translateY(20px);
  transition:opacity .55s var(--ease),transform .55s var(--ease);
}
.reveal-stagger.visible > *:nth-child(1){opacity:1;transform:translateY(0);transition-delay:.05s}
.reveal-stagger.visible > *:nth-child(2){opacity:1;transform:translateY(0);transition-delay:.12s}
.reveal-stagger.visible > *:nth-child(3){opacity:1;transform:translateY(0);transition-delay:.19s}
.reveal-stagger.visible > *:nth-child(4){opacity:1;transform:translateY(0);transition-delay:.26s}
.reveal-stagger.visible > *:nth-child(5){opacity:1;transform:translateY(0);transition-delay:.33s}
.reveal-stagger.visible > *:nth-child(6){opacity:1;transform:translateY(0);transition-delay:.4s}

.reveal-section .sec-title{opacity:0;transform:translateY(18px);transition:opacity .55s var(--ease),transform .55s var(--ease)}
.reveal-section .sec-sub{opacity:0;transform:translateY(14px);transition:opacity .55s var(--ease) .08s,transform .55s var(--ease) .08s}
.reveal-section.visible .sec-title{opacity:1;transform:translateY(0)}
.reveal-section.visible .sec-sub{opacity:1;transform:translateY(0)}

/* ─── EXPERTISE GRID ─── */
.expertise-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:32px}
@media(max-width:768px){.expertise-grid{grid-template-columns:repeat(2,1fr);gap:10px}}

.exp-card{
  background:rgba(255,255,255,0.02);border:1px solid var(--border);
  border-radius:var(--r-md);padding:20px;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  position:relative;overflow:hidden;will-change:transform;
}
.exp-card::before{
  content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.04),transparent);
  transition:left .6s var(--ease);pointer-events:none;
}
.exp-card:hover{border-color:rgba(255,255,255,0.22);transform:translateY(-4px) scale(1.01);box-shadow:0 16px 40px rgba(0,0,0,.5)}
.exp-card:hover::before{left:100%}
.exp-icon{width:40px;height:40px;border-radius:10px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;margin-bottom:14px;transition:transform .3s var(--ease)}
.exp-card:hover .exp-icon{transform:scale(1.1) rotate(3deg)}
.exp-icon svg{width:18px;height:18px;stroke:#fff;fill:none;stroke-width:1.5}
.exp-title{font-size:14px;font-weight:700;color:#fff;margin-bottom:6px}
.exp-desc{font-size:12px;color:var(--muted);line-height:1.6}

/* CHANGE 2: Hide description in expertise on mobile */
@media(max-width:768px){
  .exp-card .exp-desc{display:none}
  .exp-card .exp-icon{margin-bottom:8px}
  .exp-card .exp-title{font-size:12px}
}

/* ─── SERVICES GRID ─── */
.services-clean{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:32px}
.service-main-card{
  background:rgba(255,255,255,0.03);border:1px solid var(--border);
  border-radius:14px;padding:28px;text-align:center;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  cursor:pointer;position:relative;overflow:hidden;will-change:transform;
}
.service-main-card::before{
  content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.04),transparent);
  transition:left .6s var(--ease);pointer-events:none;
}
.service-main-card:hover{border-color:#fff;transform:translateY(-4px) scale(1.01);box-shadow:0 16px 40px rgba(0,0,0,.5)}
.service-main-card:hover::before{left:100%}
.service-icon{width:48px;height:48px;margin:0 auto 14px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.06);border-radius:12px;transition:transform .3s var(--ease)}
.service-main-card:hover .service-icon{transform:scale(1.1) rotate(-3deg)}
.service-icon svg{width:22px;height:22px;stroke:#fff;fill:none;stroke-width:1.5}
.service-title{font-size:14px;font-weight:700}
@media(max-width:768px){
  .services-clean{grid-template-columns:repeat(3,1fr);gap:10px}
  .service-main-card{padding:14px}
  .service-title{font-size:12px}
}

/* ─── TAP-CARD SYSTEM ─── */
.tap-card{transition:transform 0.22s var(--ease),border-color 0.22s var(--ease),background 0.22s var(--ease)}
.tap-card:active{transform:scale(0.97)}
.card-front{}
.card-back{}

@media(max-width:768px){
  .exp-card.tap-card{
    position:relative;overflow:hidden;min-height:120px;
    display:flex;align-items:stretch;padding:0;
  }
  .exp-card.tap-card .card-front{
    width:100%;padding:16px 14px;display:flex;flex-direction:column;
    transition:opacity .3s var(--ease),transform .3s var(--ease);
    transform:translateY(0);opacity:1;
  }
  .exp-card.tap-card .card-back{
    position:absolute;inset:0;padding:14px 12px;
    opacity:0;transform:translateY(10px);
    transition:opacity .3s var(--ease),transform .3s var(--ease);
    display:flex;flex-direction:column;align-items:center;justify-content:center;
    text-align:center;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);
    pointer-events:none;
  }
  .service-main-card.tap-card{
    position:relative;overflow:hidden;min-height:96px;
    display:flex;align-items:stretch;padding:0;
  }
  .service-main-card.tap-card .card-front{
    width:100%;padding:14px 10px;
    display:flex;flex-direction:column;align-items:center;justify-content:center;
    transition:opacity .3s var(--ease),transform .3s var(--ease);
    transform:translateY(0);opacity:1;
  }
  .service-main-card.tap-card .card-back{
    position:absolute;inset:0;padding:12px 10px;
    opacity:0;transform:translateY(10px);
    transition:opacity .3s var(--ease),transform .3s var(--ease);
    display:flex;flex-direction:column;align-items:center;justify-content:center;
    text-align:center;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);
    pointer-events:none;
  }

  /* CHANGE 3: ind-card tap system */
  .ind-card.tap-card{
    position:relative;overflow:hidden;min-height:100px;padding:0;
  }
  .ind-card.tap-card .card-front{
    padding:14px;text-align:center;
    transition:opacity .3s var(--ease),transform .3s var(--ease);
    transform:translateY(0);opacity:1;
  }
  .ind-card.tap-card .card-back{
    position:absolute;inset:0;
    opacity:0;transform:translateY(10px);
    transition:all .28s var(--ease);
    display:flex;flex-direction:column;
    justify-content:center;align-items:center;
    text-align:center;padding:12px;
    background:rgba(255,255,255,0.04);
    backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);
    pointer-events:none;
  }
  .ind-card.tap-card.active .card-front{opacity:0;transform:translateY(-6px);pointer-events:none}
  .ind-card.tap-card.active .card-back{opacity:1;transform:translateY(0);pointer-events:auto}

  .tap-card.active .card-front{opacity:0;transform:translateY(-6px);pointer-events:none}
  .tap-card.active .card-back{opacity:1;transform:translateY(0);pointer-events:auto}
  .tap-card.active{border-color:rgba(255,255,255,0.3) !important;background:rgba(255,255,255,0.05) !important}
  .card-back-title{font-size:11px;font-weight:800;color:#fff;margin-bottom:5px;letter-spacing:.01em}
  .card-back-desc{font-size:10px;color:var(--muted);line-height:1.5}
  .tap-card .tap-hint{
    position:absolute;bottom:7px;right:8px;
    width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,0.2);
    transition:opacity .2s ease;pointer-events:none;
  }
  .tap-card.active .tap-hint{opacity:0}
}
@media(min-width:769px){
  .tap-hint{display:none !important}
  .card-back{display:none}
  .card-front{display:contents}
}

/* ─── PROCESS ─── */
.process-grid{display:grid;grid-template-columns:repeat(6,1fr);gap:0;margin-top:36px;position:relative}
.process-grid::before{content:'';position:absolute;top:24px;left:5%;width:90%;height:1px;background:linear-gradient(90deg,transparent,var(--border),var(--border),transparent)}
.process-step{display:flex;flex-direction:column;align-items:center;text-align:center;padding:0 8px;position:relative;z-index:1}
.step-num{
  width:48px;height:48px;border-radius:50%;background:#fff;color:#000;
  display:flex;align-items:center;justify-content:center;
  font-weight:900;font-size:17px;margin-bottom:14px;flex-shrink:0;
  box-shadow:0 0 0 4px #000,0 0 0 5px rgba(255,255,255,0.12);
  transition:transform .3s var(--ease),box-shadow .3s var(--ease);
}
.process-step:hover .step-num{transform:scale(1.1);box-shadow:0 0 0 4px #000,0 0 0 5px rgba(255,255,255,0.3),0 0 20px rgba(255,255,255,0.1)}
.step-icon{margin:10px 0;transition:transform .3s var(--ease)}
.process-step:hover .step-icon{transform:scale(1.1)}
.step-icon svg{width:22px;height:22px;stroke:#fff;fill:none;stroke-width:1.6}
.step-title{font-size:12px;font-weight:700;color:#fff;margin-bottom:5px;line-height:1.3}
.step-desc{font-size:11px;color:var(--muted);line-height:1.5}
@media(max-width:768px){
  .process-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
  .process-step{padding:14px;background:rgba(255,255,255,0.02);border:1px solid var(--border);border-radius:14px;text-align:center}
  .step-desc{display:none}
  .step-title{font-size:11px}
  .step-num{font-size:11px;width:28px;height:28px}
  .process-grid::before{display:none}
}

/* ─── INDUSTRY ─── */
.industry-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:32px}
.ind-card{
  background:rgba(255,255,255,0.02);border:1px solid var(--border);
  border-radius:var(--r-md);padding:24px;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  position:relative;overflow:hidden;will-change:transform;
}
.ind-card::before{
  content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.035),transparent);
  transition:left .6s var(--ease);pointer-events:none;
}
.ind-card:hover{border-color:rgba(255,255,255,0.22);transform:translateY(-4px) scale(1.01);box-shadow:0 16px 40px rgba(0,0,0,.5)}
.ind-card:hover::before{left:100%}
.ind-icon-wrap{margin-bottom:12px;display:flex;align-items:center;justify-content:flex-start;transition:transform .3s var(--ease)}
.ind-card:hover .ind-icon-wrap{transform:scale(1.1)}
.ind-icon-wrap svg{width:28px;height:28px;stroke:#fff;fill:none;stroke-width:1.5}
.ind-title{font-size:15px;font-weight:700;color:#fff;margin-bottom:6px}
.ind-desc{font-size:12px;color:var(--muted);line-height:1.6}
@media(max-width:768px){
  .industry-grid{grid-template-columns:repeat(2,1fr);gap:10px}
  /* Center icon when in tap mode */
  .ind-card.tap-card .ind-icon-wrap{justify-content:center}
}

/* ─── CITIES ─── */
.cities-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:32px}
.city-card{
  border-radius:var(--r-md);padding:20px;border:1px solid var(--border);
  transition:transform .35s var(--ease),border-color .3s var(--ease),box-shadow .3s var(--ease);
  cursor:default;position:relative;overflow:hidden;min-height:140px;
  display:flex;flex-direction:column;align-items:center;justify-content:space-between;
  will-change:transform;
}
.city-card::before{
  content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.03),transparent);
  transition:left .6s var(--ease);pointer-events:none;
}
.city-card:hover{transform:translateY(-6px);border-color:rgba(255,255,255,0.2);box-shadow:0 20px 50px rgba(0,0,0,.6)}
.city-card:hover::before{left:100%}
.city-illustration{height:72px;width:100%;display:flex;align-items:center;justify-content:center;margin-bottom:12px}
.city-illustration svg{height:72px;width:auto;max-width:120px}
.city-name{font-size:14px;font-weight:700;color:#fff;letter-spacing:.01em;text-align:center}
.city-tag{font-size:10px;color:var(--muted);text-align:center;margin-top:3px;font-weight:500}
@media(max-width:768px){.cities-grid{grid-template-columns:repeat(2,1fr);gap:10px}.city-card{min-height:110px}}

/* ─── VALUES ─── */
.values-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:32px}
.val-card{
  background:rgba(255,255,255,0.02);border:1px solid var(--border);
  border-radius:var(--r-md);padding:24px;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  position:relative;overflow:hidden;will-change:transform;
}
.val-card::before{
  content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.035),transparent);
  transition:left .6s var(--ease);pointer-events:none;
}
.val-card:hover{border-color:rgba(255,255,255,0.22);transform:translateY(-4px) scale(1.01);box-shadow:0 16px 40px rgba(0,0,0,.5)}
.val-card:hover::before{left:100%}
.val-icon{width:40px;height:40px;margin-bottom:12px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.06);border-radius:10px;transition:transform .3s var(--ease)}
.val-card:hover .val-icon{transform:scale(1.1) rotate(5deg)}
.val-icon svg{width:20px;height:20px;stroke:#fff;fill:none;stroke-width:1.5}
.val-title{font-size:15px;font-weight:700;color:#fff;margin-bottom:8px}
.val-desc{font-size:12px;color:var(--muted);line-height:1.7}
@media(max-width:768px){.values-grid{display:none}}

/* ─── FEATURES ─── */
.features-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:32px}
.feat-item{
  background:rgba(255,255,255,0.02);border:1px solid var(--border);
  border-radius:var(--r-md);padding:18px;text-align:center;
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  will-change:transform;
}
.feat-item:hover{border-color:rgba(255,255,255,0.22);transform:translateY(-3px);box-shadow:0 12px 32px rgba(0,0,0,.4)}
.feat-icon{display:flex;align-items:center;justify-content:center;margin-bottom:8px;transition:transform .3s var(--ease)}
.feat-item:hover .feat-icon{transform:scale(1.15)}
.feat-icon svg{width:22px;height:22px;stroke:#fff;fill:none;stroke-width:1.6}
.feat-text{font-size:12px;font-weight:700;color:#fff;margin-bottom:4px}
.feat-sub{font-size:11px;color:var(--muted)}
@media(max-width:768px){.features-grid{grid-template-columns:repeat(2,1fr)}}

/* ─── CTA ─── */
.cta{text-align:center;padding:72px 0}
.cta h2{
  font-size:42px;font-weight:900;letter-spacing:-.025em;margin-bottom:12px;
  background:linear-gradient(135deg,#fff 40%,#777 70%,#fff 90%);
  background-size:200% auto;
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  line-height:1.1;
  animation:shimmerName 8s linear infinite;
}
.cta p{font-size:14px;color:var(--muted);max-width:480px;margin:0 auto 28px;line-height:1.7}
.cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap}
@media(max-width:768px){.cta{padding:40px 0}.cta h2{font-size:26px}}

/* ─── FAQ ─── */
.faq-item{border-bottom:1px solid var(--border);padding:18px 0}
.faq-q{
  display:flex;justify-content:space-between;align-items:center;
  cursor:pointer;font-size:14px;font-weight:600;color:#fff;gap:16px;
  transition:color .2s ease;
}
.faq-q:hover{color:rgba(255,255,255,0.8)}
.faq-toggle{
  width:22px;height:22px;border-radius:50%;background:rgba(255,255,255,0.08);
  display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:14px;
  transition:background .2s ease,transform .3s var(--ease);
}
.faq-q:hover .faq-toggle{background:rgba(255,255,255,0.14)}
.faq-a{display:none;font-size:13px;color:var(--muted);line-height:1.7;margin-top:12px;padding-right:30px}
.faq-a.open{display:block;animation:fadeUp .35s var(--ease) forwards}
@keyframes fadeUp{from{opacity:0;transform:translateY(6px)}to{opacity:1;transform:translateY(0)}}

/* ─── FOOTER LINKS ─── */
.footer-link{
  padding:7px 16px;background:rgba(255,255,255,0.03);
  border:1px solid var(--border);border-radius:100px;
  font-size:11px;font-weight:500;color:var(--muted);text-decoration:none;
  transition:border-color .25s var(--ease),color .25s var(--ease),transform .25s var(--ease);
  display:inline-block;
}
.footer-link:hover{border-color:#fff;color:#fff;transform:translateY(-2px)}

/* ─── CONTACT ─── */
.contact-grid{display:grid;grid-template-columns:1fr;gap:24px;margin-top:32px}
.contact-info{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
.contact-item{
  display:flex;flex-direction:column;align-items:flex-start;gap:12px;padding:14px;
  background:rgba(255,255,255,0.02);border:1px solid var(--border);border-radius:var(--r-sm);
  transition:border-color .3s var(--ease),transform .3s var(--ease),box-shadow .3s var(--ease);
  cursor:pointer;will-change:transform;
}
.contact-item:hover{border-color:rgba(255,255,255,0.2);transform:translateY(-3px);box-shadow:0 10px 28px rgba(0,0,0,.4)}
.contact-icon{width:36px;height:36px;border-radius:8px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;transition:transform .3s var(--ease)}
.contact-item:hover .contact-icon{transform:scale(1.1)}
.contact-icon svg{width:16px;height:16px;stroke:#fff;fill:none;stroke-width:1.5}
.contact-lbl{font-size:10px;color:var(--sub);text-transform:uppercase;letter-spacing:.06em;font-weight:600;margin-bottom:2px}
.contact-val{font-size:13px;color:#fff;font-weight:600}

/* CHANGE 5: Contact icon-only on mobile */
@media(max-width:768px){
  .contact-lbl,.contact-val{display:none}
  .contact-item{
    align-items:center;justify-content:center;
    text-align:center;padding:18px;
  }
}

/* ─── FOOTER ─── */
.footer{padding:36px 0 24px}
.footer-links{display:flex;flex-wrap:wrap;gap:8px;margin-top:20px}
.footer-copy{font-size:11px;color:#333;margin-top:24px;border-top:1px solid var(--border);padding-top:20px}

/* CHANGE 6: Hide footer on mobile */
@media(max-width:768px){
  .footer{display:none}
}

/* ─── UTILITIES ─── */
.toast{
  position:fixed;bottom:24px;right:24px;
  background:rgba(15,15,15,.97);border:1px solid rgba(255,255,255,.25);
  border-radius:12px;padding:12px 20px;font-size:13px;font-weight:500;color:#fff;
  transform:translateY(80px);opacity:0;transition:all .35s var(--ease);z-index:9998;
}
.toast.show{transform:translateY(0);opacity:1}

.kpi-num{display:inline}
#heroSection{will-change:transform,opacity}
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

<!-- ─── HERO ─── -->
<section class="hero" id="heroSection">
  <div class="wrap">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-badge-wrap">
          <div class="badge">
            <span class="badge-dot"></span>
            <span>Verified Tax Expert &bull; 500+ Clients Served</span>
          </div>
        </div>
        <div class="hero-name">Rohit<br>Sharma</div>
        <div class="hero-role">Senior Tax Consultant</div>
        <div class="hero-exp">8+ Years Experience &nbsp;&middot;&nbsp; English &amp; Hindi</div>
        <p class="hero-bio">Expert in income tax filing, GST compliance, and tax planning for individuals and businesses across India. Focused on accurate, fast, and maximum tax-saving solutions.</p>

        <!-- CHANGE 1: Mobile CTA buttons (desktop keeps original labels via CSS show/hide) -->
        <div class="hero-btns mobile-cta">
<a href="{{ route('boc.step1', ['source' => 'taxexpert-rohitsharma']) }}" 
   class="btn btn-primary">
   Book Consultation
</a>
          <a href="#contact" class="btn btn-secondary">Request Callback</a>
        </div>

        <div class="info-strip">
          <div class="info-strip-row">
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><div class="info-cell-label">Clients</div><div class="info-cell-value">500+</div></div>
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="info-cell-label">Experience</div><div class="info-cell-value">8+ Years</div></div>
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/></svg></div><div class="info-cell-label">Coverage</div><div class="info-cell-value">Pan India</div></div>
          </div>
        </div>
      </div>
      <div class="hero-photo-wrap">
        <div class="hero-metric metric-1">
          <div class="hero-metric-val"><span class="kpi-hero" data-target="500">0</span>+</div>
          <div class="hero-metric-lbl">Clients</div>
        </div>
        <div class="hero-metric metric-2">
          <div class="hero-metric-val"><span class="kpi-hero" data-target="8">0</span>+ Yrs</div>
          <div class="hero-metric-lbl">Experience</div>
        </div>
        <div class="hero-photo-card" id="heroPhotoCard">
          <img class="hero-avatar" src="{{ asset('images/taxexperts/rohit-sharma.jpg') }}"  alt="Rohit Sharma - Senior Tax Consultant" loading="eager">
        </div>
        <div class="hero-trust">
          <div class="trust-check"><svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#000" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          Verified Tax Experts&bull; ICAI Member
        </div>
      </div>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── ABOUT ─── -->
<section class="sec reveal">
  <div class="wrap">
    <div class="card about-card">
      <div class="about-title">About Me</div>
      <div class="about-text collapsed" id="aboutText">
        Rohit Sharma is a dedicated and results-driven Tax Expert with 8+ years of experience in income tax filing, GST compliance, and tax planning. He specializes in helping individuals, startups, and businesses stay compliant while maximizing tax savings.
      </div>
      <div class="about-text expanded" id="aboutFull" style="display:none;">
        Rohit Sharma is a dedicated and results-driven Tax Expert with over 8 years of experience in income tax filing, GST compliance, and strategic tax planning. He has successfully served 500+ clients across India, including salaried individuals, freelancers, SMEs, and startups. With deep expertise in Indian tax laws and regulatory frameworks, he provides accurate, fast, and fully compliant solutions tailored to each client's needs. His approach focuses on maximizing tax savings while ensuring zero penalties and complete peace of mind.
      </div>
      <div class="about-toggle" onclick="toggleAbout()">Read More ▼</div>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>
<section class="sec reveal-section" id="services">
  <div class="wrap">
    <div class="sec-title">Areas of Expertise</div>
    <p class="sec-sub">Expertise areas handled by Rohit Sharma.</p>

    <div class="services-clean reveal-stagger">

      <!-- 1 -->
      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon">
            <!-- Income Tax Filing -->
            <svg viewBox="0 0 24 24">
              <path d="M6 2h9l5 5v15H6z"/>
              <path d="M14 2v6h6"/>
            </svg>
          </div>
          <div class="service-title">Income Tax Filing</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Income Tax Filing</div>
          <div class="card-back-desc">Complete ITR filing for salaried individuals and professionals.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <!-- 2 -->
      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon">
            <!-- Investment Taxation -->
            <svg viewBox="0 0 24 24">
              <path d="M3 17l6-6 4 4 7-7"/>
            </svg>
          </div>
          <div class="service-title">Investment Taxation</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Investment Taxation</div>
          <div class="card-back-desc">Tax planning for capital gains, investments & wealth optimisation.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <!-- 3 -->
      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon">
            <!-- Tax Analysis -->
            <svg viewBox="0 0 24 24">
              <circle cx="11" cy="11" r="7"/>
              <path d="M20 20l-3-3"/>
            </svg>
          </div>
          <div class="service-title">Tax Analysis</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Tax Analysis</div>
          <div class="card-back-desc">Deep analysis of AIS/TIS and tax optimisation strategies.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <!-- 4 -->
      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon">
            <!-- Business Registration -->
            <svg viewBox="0 0 24 24">
              <rect x="3" y="7" width="18" height="13" rx="2"/>
              <path d="M16 7V5a4 4 0 0 0-8 0v2"/>
            </svg>
          </div>
          <div class="service-title">Business Registration</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Business Registration</div>
          <div class="card-back-desc">Company, LLP & startup registration support end-to-end.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <!-- 5 -->
      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon">
            <!-- Tax Filing -->
            <svg viewBox="0 0 24 24">
              <rect x="2" y="5" width="20" height="14" rx="2"/>
              <path d="M2 10h20"/>
            </svg>
          </div>
          <div class="service-title">Tax Filing</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Tax Filing</div>
          <div class="card-back-desc">GST, business tax & TDS filing with full compliance.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <!-- 6 -->
      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon">
            <!-- Compliance Services -->
            <svg viewBox="0 0 24 24">
              <path d="M9 12l2 2 4-4"/>
              <circle cx="12" cy="12" r="9"/>
            </svg>
          </div>
          <div class="service-title">Compliance Services</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Compliance Services</div>
          <div class="card-back-desc">ROC, GST & annual compliance for businesses.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

    </div>
  </div>
</section>
<div class="wrap"><hr></div>
<!-- ─── EXPERTISE ─── -->
<section class="sec reveal-section" id="expertise">
  <div class="wrap">
    <div class="sec-title">Services offered</div>
    <p class="sec-sub">Comprehensive tax and compliance solutions tailored for your financial goals.</p>
    <div class="expertise-grid reveal-stagger" style="margin-top:32px">

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></div>
          <div class="exp-title">ITR Filing</div>
          <div class="exp-desc">End-to-end income tax return filing for salaried individuals, freelancers, and business owners across all ITR forms.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">ITR Filing</div>
          <div class="card-back-desc">End-to-end ITR filing for salaried, freelancers &amp; business owners across all ITR forms — fast &amp; accurate.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
          <div class="exp-title">GST Compliance</div>
          <div class="exp-desc">GST registration, monthly/quarterly return filing, reconciliation, and notice handling for businesses of all sizes.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">GST Compliance</div>
          <div class="card-back-desc">Registration, monthly returns, reconciliation &amp; notice handling for businesses of all sizes.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M6 3h12M6 7h10M6 11h8M10 11c-2 0-4 1-4 3s2 3 4 3 4 1 4 3-2 3-4 3"/></svg></div>
          <div class="exp-title">Tax Planning</div>
          <div class="exp-desc">Proactive tax planning strategies to legally minimize liability and maximize savings under the Income Tax Act.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Tax Planning</div>
          <div class="card-back-desc">Legal strategies to minimize tax liability &amp; maximize savings — 80C, 80D, HRA and beyond.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
          <div class="exp-title">ROC Filings</div>
          <div class="exp-desc">Annual ROC compliance, company annual returns, MCA filings, and director-related submissions handled accurately.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">ROC Filings</div>
          <div class="card-back-desc">Annual returns, MCA filings &amp; director submissions handled accurately and on time.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg></div>
          <div class="exp-title">Business Registration</div>
          <div class="exp-desc">Pvt Ltd, LLP, OPC, proprietorship, MSME, GST, and other registrations with complete government compliance.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Business Registration</div>
          <div class="card-back-desc">Pvt Ltd, LLP, OPC, MSME &amp; GST registrations with complete government compliance.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
          <div class="exp-title">Tax Advisory</div>
          <div class="exp-desc">Expert advisory on capital gains, NRI taxation, salary structuring, HRA, 80C deductions, and business tax matters.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Tax Advisory</div>
          <div class="card-back-desc">Capital gains, NRI taxation, salary structuring &amp; all deduction advisory under one roof.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── SERVICES ─── -->
{{-- ==================== TAX SERVICES CAROUSEL ==================== --}}
{{-- ==================== TAX SERVICES CAROUSEL ==================== --}}
<section id="tax-services-section" style="font-family:'Montserrat',sans-serif;background:#000000;padding:56px 0;width:100%;box-sizing:border-box;">

  <style>
    #tax-services-section {
      width: 100%;
      padding: 56px 0;
    }
    #tax-services-section .section-header {
      margin-bottom: 28px;
    }
    #tax-services-section .section-title {
      font-size: 30px;
      font-weight: 900;
      letter-spacing: -0.02em;
      color: #ffffff;
      margin: 0 0 16px 0;
      font-family: 'Montserrat', sans-serif;
      line-height: 1.1;
    }
    #tax-services-section .section-subtitle {
      font-size: 14px;
      color: rgba(255,255,255,0.75);
      font-weight: 400;
      line-height: 1.6;
      margin: 0;
      max-width: 600px;
      font-family: 'Montserrat', sans-serif;
    }
    /* Show subtitle only on desktop */
    .web-only {
      display: block;
    }
    @media (max-width: 768px) {
      .web-only {
        display: none;
      }
    }

    @keyframes ttc-pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.4;transform:scale(1.5)}}
    
    /* Equal height card fixes */
    #tax-services-section .owl-stage {
      display: flex !important;
      align-items: stretch !important;
    }
    #tax-services-section .owl-item {
      display: flex !important;
      height: auto;
    }
    #tax-services-section .owl-item > div {
      display: flex;
      width: 100%;
    }
    #tax-services-section .ttc-card-wrap {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      gap: 6px;
    }
    
    #tax-services-section .owl-nav {
      display: flex !important;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin-top: 20px !important;
    }
    #tax-services-section .owl-prev,
    #tax-services-section .owl-next {
      width: 23px !important;
      height: 23px !important;
      background: rgba(255,255,255,0.05) !important;
      border: 1px solid rgba(255,255,255,0.1) !important;
      border-radius: 50% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: #fff !important;
      font-size: 10px !important;
      transition: all 0.25s ease !important;
      line-height: 1 !important;
      margin: 0 !important;
    }
    #tax-services-section .owl-prev:hover,
    #tax-services-section .owl-next:hover {
      background: rgba(79,255,176,0.1) !important;
      border-color: rgba(79,255,176,0.25) !important;
      box-shadow: 0 0 8px rgba(79,255,176,0.1) !important;
    }
    /* Disabled nav button styles */
    #tax-services-section .owl-prev.disabled,
    #tax-services-section .owl-next.disabled {
      opacity: 0.3;
      pointer-events: none;
    }
    
    #tax-services-section .owl-dots {
      display: flex !important;
      justify-content: center !important;
      gap: 4px !important;
      margin-top: 10px !important;
    }
    #tax-services-section .owl-dot span {
      width: 3px !important;
      height: 3px !important;
      background: rgba(255,255,255,0.15) !important;
      border-radius: 999px !important;
      transition: all 0.3s ease !important;
      margin: 0 !important;
    }
    #tax-services-section .owl-dot.active span {
      background: #4fffb0 !important;
      width: 11px !important;
      box-shadow: 0 0 4px rgba(79,255,176,0.4) !important;
    }
    #tax-services-section .ttc-tab-body::-webkit-scrollbar {
      width: 2px;
    }
    #tax-services-section .ttc-tab-body::-webkit-scrollbar-track {
      background: transparent;
    }
    #tax-services-section .ttc-tab-body::-webkit-scrollbar-thumb {
      background: rgba(255,255,255,0.08);
      border-radius: 99px;
    }
    /* Discount badge color (green) */
    #tax-services-section .discount-badge {
      background: rgba(79,255,176,0.12) !important;
      color: #4fffb0 !important;
      border: 1px solid rgba(79,255,176,0.25) !important;
      box-shadow: 0 0 8px rgba(79,255,176,0.15) !important;
      font-weight: 600 !important;
    }
  </style>

  <div class="wrap">
    <div class="section-header">
      <h2 class="section-title">Expert Service Plans</h2>
      <div class="section-subtitle web-only">
        Professional tax &amp; compliance services.<br>
        Transparent pricing, zero surprises.
      </div>
    </div>
  </div>

  <div class="wrap">
    <div id="ttc-slider" class="owl-carousel owl-theme"></div>
  </div>

</section>

<script>
(function(){

/* ── SERVICE DATA ── */
var S = [ 
{n:"ITR-1 Return Filing",        sf:"Salaried individuals",          el:"Income up to ₹50L, no capital gains",     p:1499,  m:3000,  t:"1–2 Working Days",    cta:"File ITR Now",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"ITR-2 Return Filing",        sf:"Investors & high income",        el:"Capital gains or income above ₹50L",      p:1999,  m:4000,  t:"1–2 Working Days",    cta:"File ITR Now",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"ITR-3 Return Filing",        sf:"Business owners & professionals",el:"Business or professional income",          p:2499,  m:6000,  t:"2–3 Working Days",    cta:"File ITR Now",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"ITR-4 Presumptive Filing",   sf:"Freelancers & small businesses", el:"Presumptive income up to ₹50L",           p:1499,  m:4000,  t:"1–2 Working Days",    cta:"File ITR Now",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Revised Income Tax Return",  sf:"Error correction filers",        el:"Original ITR filed with mistakes",         p:1499,  m:3500,  t:"1–2 Working Days",    cta:"Revise ITR",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Belated Income Tax Return",  sf:"Late taxpayers",                  el:"Missed ITR deadline filing",              p:1499,  m:3500,  t:"1–2 Working Days",    cta:"File Belated ITR",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Updated ITR (ITR-U)",        sf:"Non-filers / corrections",       el:"Update within 2 years allowed",           p:1999,  m:5000,  t:"2–3 Working Days",    cta:"Update ITR",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  /* Tax Notices */
  {n:"Income Tax Notice Reply",    sf:"Notice recipients",               el:"Received IT department notice",           p:2999,  m:8000,  t:"3–5 Working Days",    cta:"Resolve Notice",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Scrutiny Assistance",        sf:"Scrutiny cases",                  el:"Case selected for scrutiny",              p:4999,  m:12000, t:"5–7 Working Days",    cta:"Get Assistance",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Defective Return Notice Reply",sf:"ITR error cases",               el:"Notice u/s 139(9) received",              p:1999,  m:5000,  t:"2–3 Working Days",    cta:"Resolve Notice",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Income Tax Refund Assistance",sf:"Refund pending users",           el:"Refund stuck or delayed",                 p:999,   m:3000,  t:"2–3 Working Days",    cta:"Track Refund",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"PAN Aadhaar Linking",        sf:"PAN holders",                     el:"Link before deadline",                    p:499,   m:1000,  t:"1 Day",               cta:"Link PAN Aadhaar",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  /* Government Certificates (Individual) */
  {n:"PAN Card Application",       sf:"New applicants",                  el:"No PAN issued earlier",                   p:699,   m:2000,  t:"3–5 Working Days",    cta:"Apply PAN",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"PAN Card Correction",        sf:"PAN holders",                     el:"Update name / DOB / details",             p:699,   m:2000,  t:"3–5 Working Days",    cta:"Correct PAN",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Aadhaar Update Assistance",  sf:"Aadhaar holders",                 el:"Update mobile / address",                 p:699,   m:2000,  t:"3–5 Working Days",    cta:"Update Aadhaar",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Income Certificate Application",sf:"Low income individuals",       el:"State income proof needed",               p:1499,  m:2500,  t:"3–7 Working Days",    cta:"Apply Certificate",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Domicile Certificate Application",sf:"Residents",                  el:"State residence proof needed",            p:999,   m:2500,  t:"3–7 Working Days",    cta:"Apply Certificate",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Digital Signature Certificate",sf:"Businesses & professionals",    el:"Required for filings / signing",          p:1499,  m:3000,  t:"1 Working Day",       cta:"Get DSC",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  /* NRI Tax Services */
  {n:"NRI Income Tax Return Filing",sf:"NRIs earning in India",          el:"Income taxable in India",                 p:3499,  m:8000,  t:"2–3 Working Days",    cta:"File NRI ITR",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"NRI Capital Gain Tax Filing", sf:"NRI property sellers",           el:"Capital gains on sale",                   p:4499,  m:10000, t:"3–5 Working Days",    cta:"File Capital Gains",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Lower TDS Certificate",       sf:"NRIs with high TDS",             el:"Apply for reduced TDS rate",              p:3999,  m:9000,  t:"5–7 Working Days",    cta:"Apply Certificate",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"NRI Property Tax Advisory",   sf:"NRI property owners",            el:"Own / sell property in India",            p:4999,  m:12000, t:"3–5 Working Days",    cta:"Get Advisory",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  /* Investment Taxation */
  {n:"Capital Gains Tax Calculation",sf:"Investors",                     el:"Asset sale with profit",                  p:1499,  m:3000,  t:"1–2 Working Days",    cta:"Calculate Tax",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Stock Market Tax Filing",     sf:"Traders & investors",            el:"Stock trading income",                    p:2499,  m:6000,  t:"2–3 Working Days",    cta:"File Stock Taxes",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Crypto Tax Filing",           sf:"Crypto investors",               el:"Crypto transactions done",                p:2999,  m:8000,  t:"2–3 Working Days",    cta:"File Crypto Tax",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Rental Income Tax Filing",    sf:"Property owners",                el:"Rental income earned",                    p:1499,  m:4000,  t:"1–2 Working Days",    cta:"File Rental Income",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"Tax Planning Consultation",   sf:"Individuals & HNIs",             el:"Tax saving planning needed",              p:1999,  m:5000,  t:"1–2 Working Days",    cta:"Book Consultation",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  {n:"AIS TIS Tax Analysis",        sf:"All taxpayers",                  el:"AIS / TIS mismatch or review",            p:1499,  m:3000,  t:"1–2 Working Days",    cta:"Analyze Tax Data",
   inc:["Application preparation support","Government portal filing help","Document verification support","Status tracking till completion","Certificate or filing delivery"],
   exc:["Government fees if applicable","Legal disputes representation","Department hearing support","Future compliance services","Third party verification"],
   doc:["PAN card copy","Aadhaar card copy","Mobile and email ID","Bank statement or Form 16","Supporting income proofs"]},

  /* ─── BUSINESS TAXPAYER ─── */

  /* Business Registration */
  {n:"Private Limited Company Registration",sf:"Startups & founders",   el:"Min 2 directors required",                p:14999, m:25000, t:"7–10 Working Days",   cta:"Register Now",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"LLP Registration",            sf:"Partners & SMEs",                el:"Min 2 partners required",                 p:9999,  m:20000, t:"7–10 Working Days",   cta:"Register LLP",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"One Person Company Registration",sf:"Solo entrepreneurs",          el:"Single director / shareholder",           p:11999, m:22000, t:"7–10 Working Days",   cta:"Register OPC",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Partnership Firm Registration",sf:"Small business partners",       el:"2 or more partners needed",               p:6999,  m:15000, t:"5–7 Working Days",    cta:"Register Firm",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Sole Proprietorship Registration",sf:"Individual business owners", el:"Single owner business setup",             p:3999,  m:8000,  t:"3–5 Working Days",    cta:"Register Now",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Startup India Registration",  sf:"Eligible startups",              el:"DPIIT criteria applicable",               p:8999,  m:10000, t:"3–5 Working Days",    cta:"Register Startup",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  /* Government Certificates (Business) */
  {n:"GST Registration",            sf:"Businesses & startups",          el:"Turnover above threshold",                p:1499,  m:3000,  t:"3–7 Working Days",    cta:"Register GST",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"MSME Udyam Registration",     sf:"Small businesses",               el:"MSME turnover limits apply",              p:999,   m:2000,  t:"1 Day",               cta:"Register MSME",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Shop & Establishment License",sf:"Shops & offices",                el:"Local state registration needed",         p:3999,  m:7000,  t:"5–10 Working Days",   cta:"Get License",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Import Export Code Registration",sf:"Exporters & traders",         el:"Import / export business required",       p:2499,  m:6000,  t:"2–3 Working Days",    cta:"Get IEC",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"FSSAI Food License Registration",sf:"Food businesses",             el:"Food activity involved",                  p:3999,  m:6000,  t:"7–15 Working Days",   cta:"Get License",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Professional Tax Registration",sf:"Employers & professionals",     el:"State PT applicability",                  p:2499,  m:5000,  t:"3–7 Working Days",    cta:"Register Now",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Labour License Registration", sf:"Contractors & firms",            el:"Contract labour engaged",                 p:7999,  m:12000, t:"7–15 Working Days",   cta:"Get License",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Digital Signature Certificate",sf:"Businesses & directors",        el:"Required for filings",                    p:2999,  m:4000,  t:"1 Day",               cta:"Get DSC",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  /* Trademark & IP */
  {n:"Trademark Registration",      sf:"Brands & startups",              el:"Unique name / logo required",             p:6999,  m:15000, t:"1–2 Working Days",    cta:"Register Trademark",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Trademark Objection Reply",   sf:"Applicants with objection",      el:"Objection notice received",               p:4999,  m:12000, t:"3–5 Working Days",    cta:"Reply Now",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Trademark Renewal",           sf:"Trademark owners",               el:"Valid trademark expiring",                p:4499,  m:8000,  t:"3–5 Working Days",    cta:"Renew Trademark",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Trademark Assignment",        sf:"Brand owners",                   el:"Ownership transfer needed",               p:6999,  m:15000, t:"5–7 Working Days",    cta:"Transfer Now",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Copyright Registration",      sf:"Content creators",               el:"Original work created",                   p:3999,  m:8000,  t:"5–10 Working Days",   cta:"Register Copyright",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Design Registration",         sf:"Product designers",              el:"New design protection",                   p:7999,  m:15000, t:"7–10 Working Days",   cta:"Register Design",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  /* Tax Filing (Business) */
  {n:"Income Tax Return Filing",    sf:"Individuals & businesses",       el:"Taxable income earned",                   p:1999,  m:5000,  t:"1–2 Working Days",    cta:"File ITR",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Business Income Tax Filing",  sf:"Business owners",                el:"Business income declared",                p:2999,  m:8000,  t:"2–3 Working Days",    cta:"File Tax",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"GST Return Filing",           sf:"GST registered firms",           el:"Active GST registration",                 p:2499,  m:5000,  t:"Monthly",             cta:"File GST",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"GST Annual Return Filing",    sf:"Businesses under GST",           el:"GST annual filing required",              p:4999,  m:8000,  t:"5–7 Working Days",    cta:"File Annual GST",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"TDS Return Filing",           sf:"Employers & businesses",         el:"TDS deducted on payments",                p:2999,  m:6000,  t:"Quarterly",           cta:"File TDS",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Income Tax Notice Reply",     sf:"Notice recipients",              el:"IT notice received",                      p:4999,  m:10000, t:"3–5 Working Days",    cta:"Resolve Notice",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  /* Compliance Services */
  {n:"Company Annual Compliance",   sf:"Private companies",              el:"ROC compliance required",                 p:9999,  m:20000, t:"Yearly",              cta:"Get Compliance",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"LLP Annual Compliance",       sf:"LLP entities",                   el:"Annual filing mandatory",                 p:6999,  m:15000, t:"Yearly",              cta:"Get Compliance",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"GST Compliance Management",   sf:"GST businesses",                 el:"Ongoing GST compliance",                  p:7999,  m:15000, t:"Monthly",             cta:"Manage GST",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Accounting & Bookkeeping",    sf:"Businesses & startups",          el:"Regular transactions ongoing",            p:6999,  m:20000, t:"Monthly",             cta:"Get Started",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Payroll Compliance Services", sf:"Employers",                      el:"Employees on payroll",                    p:4999,  m:12000, t:"Monthly",             cta:"Manage Payroll",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"ROC Filing Services",         sf:"Registered companies",           el:"MCA filing required",                     p:3999,  m:10000, t:"5–7 Working Days",    cta:"File ROC",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  /* Business Support */
  {n:"Business PAN Registration",   sf:"New businesses",                 el:"PAN not yet issued",                      p:1499,  m:3000,  t:"3–5 Working Days",    cta:"Apply PAN",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"TAN Registration",            sf:"Businesses deducting TDS",       el:"TDS deduction applicable",                p:1499,  m:3000,  t:"3–5 Working Days",    cta:"Register TAN",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Current Account Assistance",  sf:"Businesses & startups",          el:"Business bank account needed",            p:2499,  m:5000,  t:"3–7 Working Days",    cta:"Open Account",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Business Plan Preparation",   sf:"Startups & founders",            el:"Funding or planning stage",               p:9999,  m:25000, t:"5–7 Working Days",    cta:"Get Plan",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Virtual CFO Services",        sf:"Growing businesses",             el:"Need financial guidance",                 p:19999, m:60000, t:"Monthly",             cta:"Hire vCFO",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]},

  {n:"Company Name Search",         sf:"Founders & startups",            el:"Name availability check",                 p:1999,  m:5000,  t:"1–2 Working Days",    cta:"Search Name",
   inc:["Application preparation and review","Government portal filing support","Document verification assistance","Status tracking till completion","Certificate download and delivery"],
   exc:["Government fees or taxes payment","Legal disputes or litigation help","Department notice handling","Future compliance or renewals","Third party verification services"],
   doc:["PAN card of applicant or business","Aadhaar card identity verification","Business or residential address proof","Active email and mobile number","Passport size photograph copy"]}

];

/* ── HELPERS ── */
function fmt(n){ return '₹'+n.toLocaleString('en-IN'); }
function pct(s){ return Math.round((s.m-s.p)/s.m*100); }

function listRows(arr, type){
  var icon  = type==='inc'?'✔':type==='exc'?'✖':'📄';
  var ibg   = type==='inc'?'rgba(0,255,120,0.10)':type==='exc'?'rgba(255,0,0,0.10)':'rgba(120,120,255,0.10)';
  var icol  = type==='inc'?'#00ff88':type==='exc'?'#ff4d4d':'#7a7aff';
  var tcol  = type==='inc'?'#d6ffe6':type==='exc'?'#ffd6d6':'#d6d6ff';
  return arr.map(function(item){
    return '<li style="display:flex;align-items:flex-start;gap:5px;margin-bottom:5px;font-size:10px;line-height:1.5;color:'+tcol+';font-family:\'Montserrat\',sans-serif;">'+
      '<span style="width:12px;height:12px;min-width:12px;border-radius:50%;background:'+ibg+';color:'+icol+';display:flex;align-items:center;justify-content:center;font-size:7px;margin-top:1px;">'+icon+'</span>'+
      '<span>'+item+'</span></li>';
  }).join('');
}

function buildCard(s, idx){
  var uid = 'ttc'+idx;
  var disc = pct(s);
  return '<div style="width:100%;display:flex;">'+
    '<div class="ttc-card-wrap" style="background:linear-gradient(180deg,#0c0c0f 0%,#08080a 100%);border:1px solid rgba(255,255,255,0.08);border-radius:10px;padding:12px;display:flex;flex-direction:column;width:100%;box-sizing:border-box;font-family:\'Montserrat\',sans-serif;transition:transform 0.35s cubic-bezier(.23,1,.32,1),box-shadow 0.35s ease,border-color 0.3s ease;cursor:default;position:relative;overflow:hidden;"'+
      ' onmouseenter="this.style.transform=\'translateY(-3px)\';this.style.borderColor=\'rgba(255,255,255,0.14)\';this.style.boxShadow=\'0 10px 30px rgba(0,0,0,0.6),0 0 20px rgba(79,255,176,0.04)\';"'+
      ' onmouseleave="this.style.transform=\'translateY(0)\';this.style.borderColor=\'rgba(255,255,255,0.08)\';this.style.boxShadow=\'none\';">'+

    /* top shimmer line */
    '<div style="position:absolute;top:0;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.1),transparent);border-radius:999px;"></div>'+

    /* price block */
    '<div style="margin-bottom:7px;">'+
      '<span style="font-size:9px;color:rgba(255,255,255,0.6);font-weight:500;letter-spacing:0.08em;text-transform:uppercase;display:block;margin-bottom:2px;font-family:\'Montserrat\',sans-serif;">Starting from</span>'+
      '<div style="display:flex;align-items:flex-end;gap:5px;flex-wrap:wrap;margin-bottom:2px;">'+
        '<span style="font-size:20px;font-weight:800;color:#fff;letter-spacing:-0.02em;line-height:1;font-family:\'Montserrat\',sans-serif;">'+fmt(s.p)+'</span>'+
        '<span style="font-size:10px;color:rgba(255,255,255,0.6);text-decoration:line-through;font-weight:400;margin-bottom:2px;font-family:\'Montserrat\',sans-serif;">'+fmt(s.m)+'</span>'+
        '<span class="discount-badge" style="display:inline-flex;align-items:center;background:rgba(79,255,176,0.12);border:1px solid rgba(79,255,176,0.25);color:#4fffb0;font-size:9px;font-weight:600;letter-spacing:0.04em;padding:1px 7px;border-radius:999px;margin-bottom:2px;font-family:\'Montserrat\',sans-serif;box-shadow:0 0 8px rgba(79,255,176,0.15);">'+disc+'% OFF</span>'+
      '</div>'+
      '<span style="font-size:9px;color:rgba(255,255,255,0.6);font-family:\'Montserrat\',sans-serif;">+ GST applicable</span>'+
    '</div>'+

    /* suitability */
    '<div style="margin-bottom:3px;font-size:10px;color:rgba(255,255,255,0.75);font-family:\'Montserrat\',sans-serif;"><strong style="color:#fff;">Suitable for:</strong> '+s.sf+'</div>'+
    '<div style="margin-bottom:4px;font-size:10px;color:rgba(255,255,255,0.6);font-style:italic;line-height:1.4;font-family:\'Montserrat\',sans-serif;">'+s.el+'</div>'+

    /* turnaround */
    '<div style="margin-bottom:5px;font-size:9px;color:#4fffb0;font-weight:600;letter-spacing:0.04em;font-family:\'Montserrat\',sans-serif;">&#9201; '+s.t+'</div>'+

    /* divider */
    '<div style="height:1px;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.07),transparent);margin:2px 0 7px;"></div>'+

    /* title */
    '<div style="font-size:13px;font-weight:700;color:#fff;letter-spacing:-0.01em;margin-bottom:8px;line-height:1.3;font-family:\'Montserrat\',sans-serif;">'+s.n+'</div>'+

    /* tab switcher */
    '<div style="display:flex;gap:3px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:999px;padding:3px;margin-bottom:7px;">'+
      '<button class="ttc-btn" data-uid="'+uid+'" data-tab="inc" style="flex:1;font-size:10px;font-weight:500;color:#fff;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:999px;padding:4px 5px;cursor:pointer;transition:all 0.25s;font-family:\'Montserrat\',sans-serif;white-space:nowrap;">Included</button>'+
      '<button class="ttc-btn" data-uid="'+uid+'" data-tab="exc" style="flex:1;font-size:10px;font-weight:500;color:#888;background:transparent;border:1px solid transparent;border-radius:999px;padding:4px 5px;cursor:pointer;transition:all 0.25s;font-family:\'Montserrat\',sans-serif;white-space:nowrap;">Not Included</button>'+
      '<button class="ttc-btn" data-uid="'+uid+'" data-tab="doc" style="flex:1;font-size:10px;font-weight:500;color:#888;background:transparent;border:1px solid transparent;border-radius:999px;padding:4px 5px;cursor:pointer;transition:all 0.25s;font-family:\'Montserrat\',sans-serif;white-space:nowrap;">Documents</button>'+
    '</div>'+

    /* tab body */
    '<div class="ttc-tab-body" style="flex:1;overflow-y:auto;overflow-x:hidden;min-height:100px;max-height:100px;scrollbar-width:thin;scrollbar-color:rgba(255,255,255,0.08) transparent;">'+
      '<ul id="'+uid+'-inc" style="list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.inc,'inc')+'</ul>'+
      '<ul id="'+uid+'-exc" style="display:none;list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.exc,'exc')+'</ul>'+
      '<ul id="'+uid+'-doc" style="display:none;list-style:none;padding:0 2px 0 0;margin:0;">'+listRows(s.doc,'doc')+'</ul>'+
    '</div>'+

    /* cta */
    '<div style="margin-top:8px;">'+
      '<a href="#" style="display:block;width:100%;background:#fff;color:#000;border:none;border-radius:999px;padding:7px 10px;font-size:12px;font-weight:700;text-align:center;cursor:pointer;letter-spacing:0.02em;text-decoration:none;transition:background 0.25s ease,transform 0.2s ease;box-sizing:border-box;font-family:\'Montserrat\',sans-serif;"'+
        ' onmouseenter="this.style.background=\'#e8e8e8\';this.style.transform=\'translateY(-1px)\';"'+
        ' onmouseleave="this.style.background=\'#fff\';this.style.transform=\'translateY(0)\';">'+
        s.cta+' &rarr;'+
      '</a>'+
    '</div>'+

  '</div></div>';
}

/* ── INJECT CARDS ── */
var slider = document.getElementById('ttc-slider');
if(slider){
  slider.innerHTML = S.map(function(s,i){ return buildCard(s,i); }).join('');
}

/* ── INIT OWL + TABS + EDGE DISABLE ── */
$(function(){

  var owl = $('#ttc-slider').owlCarousel({
    loop       : false,               // ← Disable infinite scroll
    margin     : 20,
    nav        : true,
    dots       : true,
    autoHeight : false,
    navText    : ['&#8592;','&#8594;'],
    responsive : {
      0    : { items: 1 },
      600  : { items: 2 },
      1000 : { items: 5 }
    }
  });

  // Disable prev/next at edges
  owl.on('changed.owl.carousel', function(event) {
    var carousel = event.relatedTarget;
    var current = carousel.current();
    var total = carousel.items().length;
    var visible = carousel.settings.items;
    
    if (current === 0) {
      $('.owl-prev').addClass('disabled');
    } else {
      $('.owl-prev').removeClass('disabled');
    }
    
    if (current + visible >= total) {
      $('.owl-next').addClass('disabled');
    } else {
      $('.owl-next').removeClass('disabled');
    }
  });

  /* tab switching */
  $(document).on('click', '.ttc-btn', function(){
    var uid = $(this).data('uid');
    var tab = $(this).data('tab');

    $('.ttc-btn[data-uid="'+uid+'"]').each(function(){
      var isActive = $(this).data('tab') === tab;
      $(this).css({
        background   : isActive ? 'rgba(255,255,255,0.08)' : 'transparent',
        color        : isActive ? '#fff' : '#888',
        borderColor  : isActive ? 'rgba(255,255,255,0.18)' : 'transparent'
      });
    });

    $('#'+uid+'-inc, #'+uid+'-exc, #'+uid+'-doc').hide();
    $('#'+uid+'-'+tab).show();
  });

});

})();
</script>
{{-- ==================== END TAX SERVICES CAROUSEL ==================== --}}

<div class="wrap"><hr></div>

<!-- ─── HOW IT WORKS ─── -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">How It Works</div>
    <p class="sec-sub">A simple, transparent process designed to make professional tax services effortless.</p>
    <div class="process-grid reveal-stagger">
      <div class="process-step"><div class="step-num">01</div><div class="step-icon"><svg viewBox="0 0 24 24"><path d="M4 20h16"/><path d="M8 16l4-8 4 8"/></svg></div><div class="step-title">Submit Enquiry</div><div class="step-desc">Tell us your service requirement and our team reviews your needs immediately.</div></div>
      <div class="process-step"><div class="step-num">02</div><div class="step-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M8 2v4M16 2v4M3 10h18"/></svg></div><div class="step-title">Book Consultation</div><div class="step-desc">Speak with a dedicated tax expert who recommends the right registration structure.</div></div>
      <div class="process-step"><div class="step-num">03</div><div class="step-icon"><svg viewBox="0 0 24 24"><path d="M12 19V5"/><path d="M5 12l7-7 7 7"/></svg></div><div class="step-title">Choose Service</div><div class="step-desc">Select and purchase the required service from our transparent pricing list.</div></div>
      <div class="process-step"><div class="step-num">04</div><div class="step-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a6.5 6.5 0 0 1 13 0"/></svg></div><div class="step-title">Assigned</div><div class="step-desc">A Tax Expert is assigned and manages the entire process end-to-end.</div></div>
      <div class="process-step"><div class="step-num">05</div><div class="step-icon"><svg viewBox="0 0 24 24"><path d="M6 2h9l5 5v15H6z"/><path d="M14 2v6h6"/></svg></div><div class="step-title">Documentation</div><div class="step-desc">We prepare, verify, and submit all required documents to the government portal.</div></div>
      <div class="process-step"><div class="step-num">06</div><div class="step-icon"><svg viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg></div><div class="step-title">Compliance Done</div><div class="step-desc">Registration finalised and all certificates delivered directly to you.</div></div>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── WHO I SERVE ─── -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Who I Serve</div>
    <p class="sec-sub">Tailored solutions for every type of taxpayer and business across India.</p>
    <div class="industry-grid reveal-stagger">

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><circle cx="12" cy="7" r="4"/><path d="M4 21c2-4 6-6 8-6s6 2 8 6"/></svg></div>
          <div class="ind-title">Salaried Individuals</div>
          <div class="ind-desc">Employees, professionals, and those with salary + other income. Maximize your refund and plan 80C deductions smartly.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Salaried Individuals</div>
          <div class="card-back-desc">Employees &amp; professionals. Maximize refund, plan 80C &amp; HRA deductions smartly.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8"/></svg></div>
          <div class="ind-title">Freelancers &amp; Consultants</div>
          <div class="ind-desc">Independent professionals with variable income. Proper ITR-3/4 filing, presumptive taxation, and advance tax management.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Freelancers &amp; Consultants</div>
          <div class="card-back-desc">ITR-3/4 filing, presumptive taxation &amp; advance tax management for variable income.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 21V9h6v12"/></svg></div>
          <div class="ind-title">SMEs &amp; Traders</div>
          <div class="ind-desc">Small and medium businesses needing GST filing, bookkeeping, audit, and complete tax compliance management.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">SMEs &amp; Traders</div>
          <div class="card-back-desc">GST filing, bookkeeping, audit &amp; complete tax compliance for small &amp; medium businesses.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><path d="M4 13l6-6 4 4-6 6H4z"/><path d="M14 7l3-3 3 3-3 3z"/></svg></div>
          <div class="ind-title">Startups</div>
          <div class="ind-desc">New founders needing company registration, startup India benefits, GST, ROC compliance, and ongoing advisory.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Startups</div>
          <div class="card-back-desc">Company registration, Startup India benefits, GST &amp; ROC compliance for new founders.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/></svg></div>
          <div class="ind-title">NRIs</div>
          <div class="ind-desc">Non-resident Indians with India income. NRI ITR filing, DTAA benefits, FEMA compliance, and repatriation advisory.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">NRIs</div>
          <div class="card-back-desc">NRI ITR filing, DTAA benefits, FEMA compliance &amp; repatriation advisory.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><path d="M3 17l6-6 4 4 7-7"/></svg></div>
          <div class="ind-title">Investors</div>
          <div class="ind-desc">Equity, mutual fund, and real estate investors. Capital gains computation, tax harvesting, and optimized filing.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Investors</div>
          <div class="card-back-desc">Capital gains computation, tax harvesting &amp; optimized filing for equity, MF &amp; real estate.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── CITIES ─── -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Cities Served</div>
    <p class="sec-sub">Serving clients across major Indian cities and remote locations nationwide.</p>
    <div class="cities-grid reveal-stagger">
      
      <div class="city-card" style="background:rgba(79,125,243,0.06);border-color:rgba(79,125,243,0.15)">
        <div class="city-illustration">

          <svg viewBox="0 0 120 72" fill="none">
            <path d="M10 50 Q 30 30 50 50 T 90 50" stroke="rgba(79,125,243,0.3)" stroke-width="2" fill="none"/>
            <rect x="20" y="45" width="80" height="20" fill="rgba(79,125,243,0.2)" stroke="rgba(79,125,243,0.8)" stroke-width="1"/>
            <rect x="25" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="35" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="45" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="71" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="81" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="91" y="45" width="4" height="20" fill="rgba(79,125,243,0.4)"/>
            <rect x="52" y="35" width="16" height="30" fill="rgba(79,125,243,0.3)" stroke="rgba(79,125,243,0.9)" stroke-width="1"/>
            <path d="M50 35 Q 60 15 70 35 Z" fill="rgba(79,125,243,0.5)" stroke="rgba(79,125,243,1)" stroke-width="1"/>
            <line x1="60" y1="15" x2="60" y2="5" stroke="rgba(79,125,243,1)" stroke-width="1"/>
            <polygon points="60,5 68,9 60,13" fill="rgba(79,125,243,0.8)"/>
            <line x1="0" y1="65" x2="120" y2="65" stroke="rgba(79,125,243,0.5)" stroke-width="1"/>
            </svg>

        </div>
        <div>
          <div class="city-name">Bengaluru</div>
          <div class="city-tag">Tech Capital</div>
        </div>
      </div>

      <div class="city-card" style="background:rgba(245,158,11,0.06);border-color:rgba(245,158,11,0.15)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <rect x="40" y="35" width="40" height="30" fill="rgba(245,158,11,0.2)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/>
            <path d="M 48 65 L 48 50 A 12 12 0 0 1 72 50 L 72 65 Z" fill="rgba(245,158,11,0.1)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/>
            <rect x="36" y="15" width="8" height="50" fill="rgba(245,158,11,0.3)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/>
            <rect x="76" y="15" width="8" height="50" fill="rgba(245,158,11,0.3)" stroke="rgba(245,158,11,0.8)" stroke-width="1"/>
            <path d="M 34 15 Q 40 5 46 15 Z" fill="rgba(245,158,11,0.5)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/>
            <path d="M 74 15 Q 80 5 86 15 Z" fill="rgba(245,158,11,0.5)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/>
            <rect x="40" y="30" width="40" height="5" fill="rgba(245,158,11,0.4)" stroke="rgba(245,158,11,0.9)" stroke-width="1"/>
            <path d="M 52 30 Q 56 22 60 30 Q 64 22 68 30" fill="none" stroke="rgba(245,158,11,0.7)" stroke-width="1.5"/>
            <line x1="0" y1="65" x2="120" y2="65" stroke="rgba(245,158,11,0.4)" stroke-width="1"/>
          </svg>
        </div>
        <div>
          <div class="city-name">Hyderabad</div>
          <div class="city-tag">City of Pearls</div>
        </div>
      </div>

      <div class="city-card" style="background:rgba(16,185,129,0.06);border-color:rgba(16,185,129,0.15)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <path d="M 0 65 Q 15 60 30 65 T 60 65 T 90 65 T 120 65" fill="none" stroke="rgba(16,185,129,0.5)" stroke-width="2"/>
            <path d="M 0 70 Q 15 65 30 70 T 60 70 T 90 70 T 120 70" fill="none" stroke="rgba(16,185,129,0.3)" stroke-width="2"/>
            <line x1="30" y1="65" x2="50" y2="20" stroke="rgba(16,185,129,0.8)" stroke-width="2"/>
            <line x1="50" y1="20" x2="80" y2="65" stroke="rgba(16,185,129,0.8)" stroke-width="2"/>
            <line x1="50" y1="20" x2="90" y2="40" stroke="rgba(16,185,129,0.8)" stroke-width="2"/>
            <path d="M 50 20 L 80 65 Q 65 50 50 20" fill="rgba(16,185,129,0.2)" stroke="rgba(16,185,129,0.6)" stroke-width="1"/>
            <path d="M 50 20 L 90 40 Q 70 30 50 20" fill="rgba(16,185,129,0.3)" stroke="rgba(16,185,129,0.6)" stroke-width="1"/>
            <circle cx="95" cy="25" r="8" fill="rgba(16,185,129,0.15)" stroke="rgba(16,185,129,0.4)" stroke-width="1"/>
          </svg>
        </div>
        <div>
          <div class="city-name">Kochi</div>
          <div class="city-tag">Financial Hub</div>
        </div>
      </div>

      <div class="city-card" style="background:rgba(59,130,246,0.06);border-color:rgba(59,130,246,0.15)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <rect x="35" y="25" width="50" height="40" fill="rgba(59,130,246,0.2)" stroke="rgba(59,130,246,0.8)" stroke-width="1"/>
            <rect x="33" y="20" width="14" height="45" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/>
            <rect x="73" y="20" width="14" height="45" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/>
            <path d="M 47 65 L 47 45 A 13 13 0 0 1 73 45 L 73 65 Z" fill="rgba(59,130,246,0.1)" stroke="rgba(59,130,246,0.9)" stroke-width="1"/>
            <path d="M 31 20 Q 40 8 49 20 Z" fill="rgba(59,130,246,0.5)" stroke="rgba(59,130,246,1)" stroke-width="1"/>
            <path d="M 71 20 Q 80 8 89 20 Z" fill="rgba(59,130,246,0.5)" stroke="rgba(59,130,246,1)" stroke-width="1"/>
            <line x1="0" y1="65" x2="120" y2="65" stroke="rgba(59,130,246,0.4)" stroke-width="1"/>
          </svg>

        </div>
        <div>
          <div class="city-name">Mumbai</div>
          <div class="city-tag">Financial Capital</div>
        </div>
      </div>

      <div class="city-card" style="background:rgba(139,92,246,0.06);border-color:rgba(139,92,246,0.15)">
        <div class="city-illustration">

          <svg viewBox="0 0 120 72" fill="none">
            <rect x="35" y="60" width="50" height="5" fill="rgba(139,92,246,0.2)" stroke="rgba(139,92,246,0.7)" stroke-width="1"/>
            <rect x="40" y="20" width="40" height="40" fill="rgba(139,92,246,0.25)" stroke="rgba(139,92,246,0.8)" stroke-width="1"/>
            <rect x="43" y="15" width="34" height="5" fill="rgba(139,92,246,0.3)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/>
            <rect x="47" y="10" width="26" height="5" fill="rgba(139,92,246,0.4)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/>
            <path d="M 52 10 Q 60 5 68 10 Z" fill="rgba(139,92,246,0.5)"/>
            <path d="M 48 60 L 48 38 A 12 12 0 0 1 72 38 L 72 60 Z" fill="rgba(139,92,246,0.1)" stroke="rgba(139,92,246,0.9)" stroke-width="1"/>
            <rect x="58" y="55" width="4" height="5" fill="rgba(139,92,246,0.6)"/>
            <path d="M 58 55 Q 60 50 62 55 Z" fill="rgba(139,92,246,0.9)"/>
            <line x1="0" y1="65" x2="120" y2="65" stroke="rgba(139,92,246,0.3)" stroke-width="1"/>
          </svg>
        </div>
        <div>
          <div class="city-name">Delhi NCR</div>
          <div class="city-tag">National Capital</div>
        </div>
      </div>

      <div class="city-card" style="background:rgba(255,255,255,0.03);border-color:rgba(255,255,255,0.12)">
        <div class="city-illustration">
          <svg viewBox="0 0 120 72" fill="none">
            <path d="M 10 36 C 30 10, 60 60, 110 36" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2" stroke-dasharray="4 2"/>
            <path d="M 10 50 C 40 70, 80 10, 110 50" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>
            <circle cx="60" cy="36" r="8" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>
            <circle cx="60" cy="36" r="3" fill="rgba(255,255,255,0.8)"/>
            <line x1="60" y1="36" x2="25" y2="22" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
            <circle cx="25" cy="22" r="4" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.4)" stroke-width="1"/>
            <circle cx="25" cy="22" r="1.5" fill="rgba(255,255,255,0.6)"/>
            <line x1="60" y1="36" x2="95" y2="20" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
            <circle cx="95" cy="20" r="4" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.4)" stroke-width="1"/>
            <circle cx="95" cy="20" r="1.5" fill="rgba(255,255,255,0.6)"/>
            <line x1="60" y1="36" x2="35" y2="55" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
            <circle cx="35" cy="55" r="5" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>
            <circle cx="35" cy="55" r="2" fill="rgba(255,255,255,0.7)"/>
            <line x1="60" y1="36" x2="85" y2="52" stroke="rgba(255,255,255,0.2)" stroke-width="1.5"/>
            <circle cx="85" cy="52" r="3" fill="rgba(255,255,255,0.2)" stroke="rgba(255,255,255,0.3)" stroke-width="1"/>
            <circle cx="85" cy="52" r="1" fill="rgba(255,255,255,0.5)"/>
            <circle cx="60" cy="36" r="24" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
          </svg>
        </div>
        <div>
          <div class="city-name">Pan India</div>
          <div class="city-tag">Remote • All States</div>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── WHY CHOOSE ─── -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Why Choose US</div>
    <p class="sec-sub">Experience the difference of working with a dedicated, verified professional.</p>
    <div class="values-grid reveal-stagger">
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="3"/></svg></div><div class="val-title">Maximum Tax Saving</div><div class="val-desc">Every filing is optimized to legally minimize your tax liability. We leave no deduction unclaimed — 80C, 80D, HRA, and beyond.</div></div>
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><path d="M13 2L3 14h8l-2 8 10-12h-8l2-8z"/></svg></div><div class="val-title">Fast Turnaround</div><div class="val-desc">Efficient processes mean faster filings. Most ITR filings completed within 24–48 hours of receiving complete documents.</div></div>
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="val-title">100% Secure</div><div class="val-desc">Your financial data is treated with strict confidentiality. We use secure channels for all document exchange and communication.</div></div>
    </div>
    <div class="features-grid reveal-stagger" style="margin-top:0">
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a6.5 6.5 0 0 1 13 0"/><path d="M9 12l2 2 4-4"/></svg></div><div class="feat-text">Verified ICAI  Tax Expert</div><div class="feat-sub">Qualified &amp; certified professional</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/><path d="M7 8h10M7 12h6"/></svg></div><div class="feat-text">Bilingual Support</div><div class="feat-sub">English &amp; Hindi communication</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15 15 0 0 1 0 20"/></svg></div><div class="feat-text">Pan India Service</div><div class="feat-sub">All 28 states &amp; 8 UTs covered</div></div>
      <div class="feat-item"><div class="feat-icon">
        <svg viewBox="0 0 24 24"><path d="M6 3h12M6 7h10M6 11h8M10 11c-2 0-4 1-4 3s2 3 4 3 4 1 4 3-2 3-4 3"/></svg>
      </div><div class="feat-text">Transparent Fees</div><div class="feat-sub">Clear pricing, no hidden charges</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg></div><div class="feat-text">Digital Process</div><div class="feat-sub">100% online — no office visit needed</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12l2 2 4-4"/></svg></div><div class="feat-text">Zero Penalties</div><div class="feat-sub">Accurate &amp; timely compliance guaranteed</div></div>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── CTA ─── -->
<section class="cta reveal">
  <div class="wrap">
    <h2>Ready to simplify<br>your taxes?</h2>
    <p>Whether you're a salaried individual, startup, or growing business — Rohit Sharma is here to help.</p>
    <div class="cta-btns">
      <a href="{{ route('boc.step1', ['source' => 'taxexpert-rohitsharma-cta']) }}" class="btn btn-primary magnetic-btn">Book Consultation<svg class="btn-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="#services" class="btn btn-secondary magnetic-btn">View All Services</a>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── CONTACT ─── -->
<section class="sec reveal-section" id="contact">
  <div class="wrap">
    <div class="sec-title">Get In Touch</div>
    <p class="sec-sub">Reach out for a free consultation. Typically responds within a few hours.</p>
    <div class="contact-grid">
      <div class="contact-info reveal-stagger">
        <div class="contact-item" onclick="window.location.href='alerts@thetaxcompany.in'">
          <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
          <div><div class="contact-lbl">Email</div><div class="contact-val">alerts@thetaxcompany.in</div></div>
        </div>
        <div class="contact-item" onclick="window.location.href='tel:+91 7032891111'">
          <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.45a2 2 0 0 1 1.99-2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.1A16 16 0 0 0 14 15.08l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
          <div><div class="contact-lbl">WhatsApp / Phone</div><div class="contact-val">+91 70328 11111</div></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/></svg></div>
          <div><div class="contact-lbl">Coverage</div><div class="contact-val">Pan India — Remote</div></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <div><div class="contact-lbl">Response Time</div><div class="contact-val">Within 2–4 hours</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── FAQ ─── -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Frequently Asked Questions</div>
    <p class="sec-sub">Common questions about working with Rohit Sharma.</p>
    <div class="card reveal" style="margin-top:28px">
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>What documents do I need for ITR filing?</span><span class="faq-toggle">+</span></div><div class="faq-a">For salaried individuals: Form 16, bank statements, investment proofs (80C, 80D), and PAN/Aadhaar. For business owners: profit &amp; loss account, balance sheet, GST returns, and bank statements. Rohit will send you a detailed checklist specific to your situation.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>How long does ITR filing typically take?</span><span class="faq-toggle">+</span></div><div class="faq-a">Most ITR filings are completed within 24–48 hours of receiving all required documents. For complex cases like capital gains, business income, or NRI taxation, it may take 3–5 business days.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>Do you serve clients outside my city?</span><span class="faq-toggle">+</span></div><div class="faq-a">Absolutely. Rohit Sharma provides 100% remote services across all 28 states and 8 Union Territories of India. Everything is handled digitally — documents via WhatsApp/email, consultations via call/video.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>What if I receive an income tax notice?</span><span class="faq-toggle">+</span></div><div class="faq-a">Rohit handles all types of income tax notices — scrutiny assessments, demand notices, defective return notices, and more. Share the notice details for a prompt review and response strategy.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>What are your fees for ITR filing?</span><span class="faq-toggle">+</span></div><div class="faq-a">Fees are transparent and fixed based on the ITR form type and complexity. Salaried ITR-1 starts from ₹499. Contact Rohit for an exact quote based on your specific requirements — no hidden charges ever.</div></div>
    </div>
  </div>
</section>



<script>
/* ─── PROGRESS BAR ─── */
let targetProgress = 0, currentProgress = 0;
const progressBar = document.getElementById('progressBar');

function updateProgress() {
  const s = document.documentElement;
  targetProgress = (s.scrollTop / (s.scrollHeight - s.clientHeight)) * 100;
}

function lerpProgress() {
  currentProgress += (targetProgress - currentProgress) * 0.12;
  progressBar.style.width = currentProgress + '%';
  const isScrolling = Math.abs(targetProgress - currentProgress) > 0.05;
  progressBar.style.height = isScrolling ? '3px' : '2px';
  requestAnimationFrame(lerpProgress);
}

window.addEventListener('scroll', updateProgress, { passive: true });
lerpProgress();

/* ─── CURSOR GLOW ─── */
const cg = document.getElementById('cursorGlow');
let mouseX = 0, mouseY = 0, cgX = 0, cgY = 0;
const isMobile = window.innerWidth <= 768;

if (!isMobile) {
  document.addEventListener('mousemove', e => {
    mouseX = e.clientX; mouseY = e.clientY;
    const el = document.elementFromPoint(e.clientX, e.clientY);
    const interactive = el && (
      el.closest('.btn') || el.closest('.card') ||
      el.closest('.exp-card') || el.closest('.service-main-card') ||
      el.closest('.ind-card') || el.closest('.city-card') ||
      el.closest('.val-card') || el.closest('.feat-item') ||
      el.closest('.contact-item') || el.closest('.hero-photo-card')
    );
    cg.classList.toggle('over-interactive', !!interactive);
  }, { passive: true });

  function animateCursor() {
    cgX += (mouseX - cgX) * 0.1;
    cgY += (mouseY - cgY) * 0.1;
    cg.style.left = cgX + 'px';
    cg.style.top  = cgY + 'px';
    requestAnimationFrame(animateCursor);
  }
  animateCursor();
}

/* ─── HERO PARALLAX ─── */
const heroSection = document.getElementById('heroSection');
function updateHeroParallax() {
  const scrollY = window.scrollY;
  const heroH   = heroSection.offsetHeight;
  if (scrollY < heroH * 1.5) {
    const progress = Math.min(scrollY / heroH, 1);
    heroSection.style.opacity  = 1 - progress * 0.6;
    heroSection.style.transform = `translateY(${scrollY * 0.12}px)`;
  }
}
window.addEventListener('scroll', updateHeroParallax, { passive: true });

/* ────────── MAGNETIC + DEPTH SYSTEM FOR .hero-photo-card (UPGRADED) ────────── */
(function() {
  if (window.innerWidth <= 768) return; // mobile safe, only tap scale

  const card = document.getElementById('heroPhotoCard');
  if (!card) return;

  // state
  let targetRotX = 0, targetRotY = 0;
  let targetTransX = 0, targetTransY = 0;
  let targetShadowX = 0, targetShadowY = 0;
  
  let currentRotX = 0, currentRotY = 0;
  let currentTransX = 0, currentTransY = 0;
  let currentShadowX = 0, currentShadowY = 0;

  const magneticRadius = 200;       // px
  const magneticStrength = 0.08;    // subtle pull
  const maxRotate = 8;              // degrees
  const shadowFactor = 0.15;

  let mouseX = 0, mouseY = 0;
  let isOverCard = false;
  let rafId = null;

  // Default shadow base
  const baseShadow = '0 20px 40px -8px rgba(0,0,0,0.5), 0 0 0 1px rgba(255,255,255,0.05)';

  function resetCard() {
    targetRotX = targetRotY = 0;
    targetTransX = targetTransY = 0;
    targetShadowX = targetShadowY = 0;
    // smooth transition will handle it
  }

  // Debounced scroll reset
  let scrollDebounce;
  function onScrollReset() {
    if (scrollDebounce) clearTimeout(scrollDebounce);
    scrollDebounce = setTimeout(() => {
      resetCard();
    }, 100);
  }
  window.addEventListener('scroll', onScrollReset, { passive: true });

  // Mouse move tracking
  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  }, { passive: true });

  card.addEventListener('mouseenter', () => {
    isOverCard = true;
  });

  card.addEventListener('mouseleave', () => {
    isOverCard = false;
    resetCard();
  });

  // Animation loop (rAF)
  function updateCard() {
    const rect = card.getBoundingClientRect();
    const centerX = rect.left + rect.width / 2;
    const centerY = rect.top + rect.height / 2;
    
    const dx = mouseX - centerX;
    const dy = mouseY - centerY;
    const distance = Math.sqrt(dx*dx + dy*dy);

    // Magnetic field (proximity)
    if (distance < magneticRadius) {
      // pull toward cursor (subtle)
      targetTransX = dx * magneticStrength;
      targetTransY = dy * magneticStrength;
      
      // shadow: opposite direction for depth illusion
      targetShadowX = -dx * shadowFactor;
      targetShadowY = -dy * shadowFactor;
    } else {
      targetTransX = 0;
      targetTransY = 0;
      targetShadowX = 0;
      targetShadowY = 0;
    }

    // Tilt only when directly over card (inside rect)
    if (isOverCard) {
      const relX = (mouseX - rect.left) / rect.width;   // 0..1
      const relY = (mouseY - rect.top) / rect.height;
      // rotateY: left-right, rotateX: up-down
      targetRotY = (relX - 0.5) * 2 * maxRotate;
      targetRotX = (relY - 0.5) * -2 * maxRotate;  // invert for natural feel
    } else {
      targetRotX = 0;
      targetRotY = 0;
    }

    // Smooth interpolation (lerp)
    const ease = 0.12;
    currentRotX += (targetRotX - currentRotX) * ease;
    currentRotY += (targetRotY - currentRotY) * ease;
    currentTransX += (targetTransX - currentTransX) * ease;
    currentTransY += (targetTransY - currentTransY) * ease;
    currentShadowX += (targetShadowX - currentShadowX) * ease;
    currentShadowY += (targetShadowY - currentShadowY) * ease;

    // Clamp rotation to avoid flipping (safety)
    const clamp = (val, max) => Math.min(max, Math.max(-max, val));
    const rotX = clamp(currentRotX, maxRotate);
    const rotY = clamp(currentRotY, maxRotate);
    
    // Apply transform
    card.style.transform = `perspective(1000px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateX(${currentTransX}px) translateY(${currentTransY}px)`;
    
    // Dynamic shadow: combine with base shadow
    const blur = 40;
    const shadowOpacity = 0.4;
    const shadowStr = `${currentShadowX}px ${currentShadowY}px ${blur}px rgba(0,0,0,${shadowOpacity})`;
    card.style.boxShadow = `${shadowStr}, 0 0 0 1px rgba(255,255,255,0.05)`;

    rafId = requestAnimationFrame(updateCard);
  }

  // Start animation
  rafId = requestAnimationFrame(updateCard);

  // Cleanup on page unload (optional)
  window.addEventListener('beforeunload', () => {
    if (rafId) cancelAnimationFrame(rafId);
  });

  // Also reset on window resize (optional)
  window.addEventListener('resize', () => resetCard());
})();

/* ─── METRIC FLOAT (keep subtle) ─── */
if (!isMobile) {
  const metrics = document.querySelectorAll('.hero-metric');
  document.addEventListener('mousemove', e => {
    const px = (e.clientX / window.innerWidth - 0.5);
    const py = (e.clientY / window.innerHeight - 0.5);
    metrics.forEach((m, i) => {
      const factor = i === 0 ? 8 : -6;
      m.style.transform = `translate(${px * factor}px, ${py * factor}px)`;
    });
  }, { passive: true });
}

/* ─── MAGNETIC BUTTONS (keep) ─── */
if (!isMobile) {
  document.querySelectorAll('.magnetic-btn').forEach(btn => {
    btn.addEventListener('mousemove', e => {
      const rect = btn.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      const dx = (e.clientX - cx) * 0.25;
      const dy = (e.clientY - cy) * 0.25;
      btn.style.transform = `translate(${dx}px, ${dy}px)`;
    });
    btn.addEventListener('mouseleave', () => {
      btn.style.transform = '';
      btn.style.transition = 'transform .4s cubic-bezier(0.22,1,0.36,1)';
      setTimeout(() => btn.style.transition = '', 400);
    });
  });
}

/* ─── SCROLL REVEAL ─── */
const revealObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      revealObs.unobserve(e.target);
    }
  });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.reveal, .reveal-section, .reveal-stagger').forEach(el => revealObs.observe(el));

/* ─── KPI COUNTERS ─── */
function animateCount(el, target, duration) {
  const start = performance.now();
  function step(now) {
    const elapsed = now - start;
    const progress = Math.min(elapsed / duration, 1);
    const eased = 1 - (1 - progress) * (1 - progress);
    el.textContent = Math.floor(eased * target);
    if (progress < 1) requestAnimationFrame(step);
    else el.textContent = target;
  }
  requestAnimationFrame(step);
}

window.addEventListener('load', () => {
  setTimeout(() => {
    document.querySelectorAll('.kpi-hero').forEach(el => {
      const target = parseInt(el.dataset.target);
      animateCount(el, target, 1400);
    });
  }, 600);
});

/* ─── FAQ ─── */
function toggleFAQ(el) {
  const ans = el.nextElementSibling;
  const tog = el.querySelector('.faq-toggle');
  const open = ans.classList.contains('open');
  document.querySelectorAll('.faq-a').forEach(a => a.classList.remove('open'));
  document.querySelectorAll('.faq-toggle').forEach(t => { t.textContent = '+'; t.style.transform = ''; });
  if (!open) {
    ans.classList.add('open');
    tog.textContent = '−';
    tog.style.transform = 'rotate(180deg)';
  }
}

/* ─── TOAST + COPY ─── */
function showToast(msg) {
  const t = document.getElementById('toast');
  t.textContent = msg; t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3000);
}
function copyText(txt, msg) {
  navigator.clipboard.writeText(txt)
    .then(() => showToast(msg || 'Copied!'))
    .catch(() => showToast('Copied: ' + txt));
}

/* ─── ABOUT TOGGLE ─── */
function toggleAbout() {
  const short = document.getElementById('aboutText');
  const full  = document.getElementById('aboutFull');
  const btn   = document.querySelector('.about-toggle');
  if (full.style.display === 'none') {
    full.style.display = 'block'; short.style.display = 'none'; btn.innerHTML = 'Read Less ▲';
  } else {
    full.style.display = 'none'; short.style.display = 'block'; btn.innerHTML = 'Read More ▼';
  }
}

/* ─── TAP-TO-REVEAL (MOBILE ONLY) ─── */
(function () {
  let activeCard = null;
  let tapListenersAttached = false;
  let scrollObservers = [];

  function attachTapListeners() {
    if (tapListenersAttached) return;
    tapListenersAttached = true;
    document.querySelectorAll('.tap-card').forEach(card => {
      card.addEventListener('click', handleTap);
    });
  }

  function closeAll() {
    document.querySelectorAll('.tap-card.active').forEach(c => c.classList.remove('active'));
    activeCard = null;
  }

  function handleTap() {
    if (window.innerWidth > 768) return;
    const card = this;
    if (activeCard === card) { card.classList.remove('active'); activeCard = null; return; }
    if (activeCard) activeCard.classList.remove('active');
    card.classList.add('active');
    activeCard = card;
  }

  function attachScrollObservers() {
    if (scrollObservers.length) return;
    document.querySelectorAll('.expertise-grid, .services-clean, .industry-grid').forEach(section => {
      const obs = new IntersectionObserver(entries => {
        entries.forEach(entry => { if (!entry.isIntersecting) closeAll(); });
      }, { threshold: 0.15 });
      obs.observe(section);
      scrollObservers.push(obs);
    });
  }

  function init() {
    if (window.innerWidth <= 768) { attachTapListeners(); attachScrollObservers(); }
  }

  init();
  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) closeAll(); else init();
  });
}());
</script>

@endsection