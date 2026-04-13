@extends('front')
@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CA Pooja Reddy | SME Tax Specialist | Small Business CA India</title>
<meta name="description" content="CA Pooja Reddy - SME Tax Specialist with 2+ years experience in GST filing, bookkeeping, compliance, and ITR services for small businesses across India.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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

/* ─── HERO GLASS CARD ─── */
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
  /* top highlight line */
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
/* inner corner gloss */
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

/* ─── HERO NAME ─── */
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

/* ─── HERO PILLS GRID ─── */
.hero-pills-grid{
  display:flex;
  flex-wrap:wrap;
  gap:7px;
  margin-bottom:11px;
  opacity:0;
  transform:translateY(12px);
  animation:heroReveal .6s var(--ease) .30s forwards;
}

/* Individual pill */
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
/* Gloss highlight inside pill */
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
/* Pill dot accent */
.hero-pill-dot{
  width:5px;height:5px;border-radius:50%;
  background:rgba(255,255,255,0.4);
  flex-shrink:0;
  animation:pulse 2s ease-in-out infinite;
}

/* Bio pill - wider card style */
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

/* Badge + buttons animation */
.hero-badge-wrap{opacity:0;transform:translateY(16px);animation:heroReveal .6s var(--ease) .1s forwards;margin-bottom:10px}
.hero-btns{opacity:0;transform:translateY(10px);animation:heroReveal .6s var(--ease) .46s forwards}
.hero-photo-wrap{opacity:0;transform:translateY(18px);animation:heroReveal .8s var(--ease) .22s forwards}
@keyframes heroReveal{to{opacity:1;transform:translateY(0)}}

.hero-photo-wrap{display:flex;justify-content:center;align-items:center;position:relative}

/* ─── HERO PHOTO CARD ─── */
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

/* Info strip */
.info-strip{display:none;background:rgba(255,255,255,0.02);border:1px solid var(--border);border-radius:var(--r-md);padding:12px}
.info-strip-row{display:flex;gap:0}
.info-cell{flex:1;display:flex;flex-direction:column;align-items:center;text-align:center;padding:8px 4px;border-right:1px solid var(--border)}
.info-cell:last-child{border-right:none}
.info-cell-icon{width:30px;height:30px;border-radius:8px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;margin-bottom:6px}
.info-cell-icon svg{width:14px;height:14px;stroke:#fff;fill:none;stroke-width:1.5}
.info-cell-label{font-size:8px;color:var(--sub);text-transform:uppercase;letter-spacing:.05em;font-weight:600;margin-bottom:2px}
.info-cell-value{font-size:10px;color:#fff;font-weight:600;line-height:1.2}

/* ─── TABLET HERO ─── */
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

/* ─── MOBILE HERO ─── */
@media(max-width:768px){
  .hero{height:auto;min-height:auto;max-height:none;padding:20px 0}
  .hero-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;align-items:center}

  .hero .badge,.info-strip,.hero-trust{display:none !important}
  
  /* Show metrics on mobile */
  .hero-metric{display:flex !important}
  .metric-1{top:-10px;right:-5px;padding:6px 10px;transform:scale(0.85);transform-origin:top right}
  /* Updated: Move metric-2 to bottom-left of image */
  .metric-2{bottom:-10px;left:-5px;padding:6px 10px;transform:scale(0.85);transform-origin:bottom left}
  .hero-metric-val{font-size:13px}
  .hero-metric-lbl{font-size:8px}

  .hero-content{max-width:100%;justify-content:center;padding-right:4px}

  /* Glass card mobile */
  .hero-glass-card{
    padding:12px 12px 10px;
    border-radius:18px;
  }

  .hero-name{
    font-size:22px;line-height:1.05;margin-bottom:8px;
    background:linear-gradient(135deg,#fff 60%,#aaa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;
    animation:heroReveal .6s var(--ease) .18s forwards;
  }

  /* Pills - mobile compact */
  .hero-pills-grid{
    gap:5px;
    margin-bottom:8px;
  }
  .hero-pill{
    font-size:9px;
    padding:5px 9px;
    gap:4px;
  }
  .hero-pill svg{width:9px;height:9px}
  .hero-pill.pill-desktop-only{display:none}
  .hero-pill-dot{width:4px;height:4px}

  /* Bio pill hidden on mobile */
  .hero-bio-pill{display:none}

  .hero-photo-wrap{display:flex;justify-content:center;align-items:center;position:relative}
  .hero-photo-card{
    width:100%;max-width:140px;height:180px;border-radius:18px;
    background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.12);
    backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);
    box-shadow:0 10px 30px rgba(0,0,0,0.6),inset 0 1px 0 rgba(255,255,255,0.08);
    overflow:hidden;
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
    padding:7px 6px;
    font-size:9.5px;
    border-radius:10px;
    justify-content:center;
    letter-spacing:0;
  }
}

/* ─── ABOUT ─── */
.about-card{padding:24px;border-radius:20px}
.about-title{font-size:18px;font-weight:800;margin-bottom:12px}
.about-text{font-size:13px;color:#bbb;line-height:1.7}
.about-toggle{margin-top:12px;font-size:12px;font-weight:700;color:#6ea8ff;cursor:pointer;transition:opacity .2s ease}
.about-toggle:hover{opacity:0.7}

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

      <!-- LEFT: Content inside glass card -->
      <div class="hero-content">
        <div class="hero-glass-card">

          <!-- Badge (hidden on mobile via CSS) -->
          <div class="hero-badge-wrap">
            <div class="badge">
              <span class="badge-dot"></span>
              <span>Small Business Tax Expert &bull; 200+ Clients Served</span>
            </div>
          </div>

          <!-- Name -->
          <div class="hero-name">Pooja<br>Reddy</div>

          <!-- Pills row: role, experience, language, coverage, clients -->
          <div class="hero-pills-grid">
            <!-- Role pill -->
            <div class="hero-pill">
              <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              SME Tax Specialist
            </div>
            <!-- Experience pill -->
            <div class="hero-pill">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              2+ Years Exp.
            </div>
            <!-- Language pill - hidden on mobile -->
            <div class="hero-pill pill-desktop-only">
              <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              English, Telugu &amp; Kannada
            </div>
            <!-- Pan India pill - hidden on mobile -->
            <div class="hero-pill pill-desktop-only">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20"/></svg>
              Pan India
            </div>
            <!-- Clients pill - hidden on mobile -->
            <div class="hero-pill pill-desktop-only">
              <span class="hero-pill-dot"></span>
              200+ Clients Served
            </div>
          </div>

          <!-- Bio pill (hidden on mobile) -->
          <div class="hero-bio-pill">
            Specializes in GST, bookkeeping, and tax compliance for small businesses. Focuses on simplifying financial processes and ensuring accurate filings.
          </div>

          <!-- Buttons -->
          <div class="hero-btns mobile-cta">
            <a href="{{ route('boc.step1', ['source' => 'taxexpert-poojareddy']) }}" class="btn btn-primary">
              Book Consultation
            </a>
            <a href="#contact" class="btn btn-callback">Request Callback</a>
          </div>

        </div><!-- /hero-glass-card -->

        <div class="info-strip">
          <div class="info-strip-row">
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><div class="info-cell-label">Clients</div><div class="info-cell-value">200+</div></div>
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="info-cell-label">Experience</div><div class="info-cell-value">2+ Years</div></div>
            <div class="info-cell"><div class="info-cell-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/></svg></div><div class="info-cell-label">Coverage</div><div class="info-cell-value">Pan India</div></div>
          </div>
        </div>
      </div><!-- /hero-content -->

      <!-- RIGHT: Photo -->
      <div class="hero-photo-wrap">
        <div class="hero-metric metric-1">
          <div class="hero-metric-val"><span class="kpi-hero" data-target="200">0</span>+</div>
          <div class="hero-metric-lbl">Clients</div>
        </div>
        <div class="hero-metric metric-2">
          <div class="hero-metric-val"><span class="kpi-hero" data-target="2">0</span>+ Yrs</div>
          <div class="hero-metric-lbl">Experience</div>
        </div>
        <div class="hero-photo-card" id="heroPhotoCard">
          <img class="hero-avatar" src="{{ asset('images/taxexperts/pooja-reddy.jpg') }}" alt="CA Pooja Reddy - SME Tax Specialist" loading="eager">
        </div>
        <div class="hero-trust">
          <div class="trust-check"><svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#000" stroke-width="1.5" stroke-linecap="round"/></svg></div>
          SME Tax Expert &bull; Compliance Specialist
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
        Pooja Reddy is an SME tax specialist with 2+ years of experience helping small businesses manage GST, bookkeeping, and tax compliance efficiently. She focuses on simplifying financial processes and ensuring accurate filings.
      </div>
      <div class="about-text expanded" id="aboutFull" style="display:none;">
        Pooja Reddy specializes in GST filing, bookkeeping, and compliance for small businesses and retail traders. She has worked with multiple small business owners to streamline financial operations, maintain proper records, and ensure timely tax filings.<br><br>Her approach focuses on making finance simple and accessible for entrepreneurs while ensuring full compliance with tax regulations. She helps businesses stay organized, avoid penalties, and maintain clean financial records.<br><br>Known for her reliability, clarity, and practical approach, Pooja ensures that small business owners can focus on growth while she handles their tax and accounting needs efficiently.
      </div>
      <div class="about-toggle" onclick="toggleAbout()">Read More ▼</div>
    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── EXPERTISE ─── -->
<section class="sec reveal-section" id="expertise">
  <div class="wrap">
    <div class="sec-title">Areas of Expertise</div>
    <p class="sec-sub">Specialized tax, GST, and accounting solutions designed for small businesses and retail owners.</p>
    <div class="expertise-grid reveal-stagger" style="margin-top:32px">

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M6 2h9l5 5v15H6z"/><path d="M14 2v6h6"/></svg></div>
          <div class="exp-title">GST Filing</div>
          <div class="exp-desc">Accurate GST return filing for small businesses ensuring timely compliance.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">GST Filing</div>
          <div class="card-back-desc">Timely and accurate GST filing with zero compliance stress.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h10"/></svg></div>
          <div class="exp-title">Bookkeeping</div>
          <div class="exp-desc">Maintaining accurate financial records and tracking daily transactions.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Bookkeeping</div>
          <div class="card-back-desc">Clean and organized books for better financial clarity.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/></svg></div>
          <div class="exp-title">Compliance</div>
          <div class="exp-desc">Ensuring GST and tax compliance with zero penalties.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Compliance</div>
          <div class="card-back-desc">Stay fully compliant with all GST and tax regulations.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M6 2h9l5 5v15H6z"/></svg></div>
          <div class="exp-title">ITR Filing</div>
          <div class="exp-desc">Income tax return filing for small business owners and individuals.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">ITR Filing</div>
          <div class="card-back-desc">Accurate income tax filing with maximum compliance.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16"/></svg></div>
          <div class="exp-title">Accounting Support</div>
          <div class="exp-desc">End-to-end accounting assistance for small businesses.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Accounting Support</div>
          <div class="card-back-desc">Complete accounting support to keep your business finances organized.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="exp-card tap-card">
        <div class="card-front">
          <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg></div>
          <div class="exp-title">Tax Advisory</div>
          <div class="exp-desc">Simple and practical tax advice for business owners.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Tax Advisory</div>
          <div class="card-back-desc">Smart tax guidance to reduce liability and improve efficiency.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── SERVICES ─── -->
<section class="sec reveal-section" id="services">
  <div class="wrap">
    <div class="sec-title">Services Offered</div>
    <p class="sec-sub">Practical tax, GST, and accounting services designed specifically for small businesses and retail owners.</p>
    <div class="services-clean reveal-stagger">

      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M6 2h9l5 5v15H6z"/><path d="M14 2v6h6"/></svg></div>
          <div class="service-title">GST Filing</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">GST Filing</div>
          <div class="card-back-desc">Monthly and quarterly GST return filing with complete accuracy.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h10"/></svg></div>
          <div class="service-title">Accounting</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Accounting</div>
          <div class="card-back-desc">Complete bookkeeping and accounting support to keep finances organized.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="service-main-card tap-card">
        <div class="card-front">
          <div class="service-icon"><svg viewBox="0 0 24 24"><path d="M6 2h9l5 5v15H6z"/></svg></div>
          <div class="service-title">ITR Filing</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">ITR Filing</div>
          <div class="card-back-desc">Income tax return filing for small business owners and individuals with compliance.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

    </div>
  </div>
</section>

<div class="wrap"><hr></div>

<!-- ─── WHO I SERVE ─── -->
<section class="sec reveal-section">
  <div class="wrap">
    <div class="sec-title">Who I Serve</div>
    <p class="sec-sub">Specialized tax and accounting solutions tailored for small businesses and entrepreneurs.</p>
    <div class="industry-grid reveal-stagger">

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/></svg></div>
          <div class="ind-title">Small Businesses</div>
          <div class="ind-desc">Helping small business owners manage GST, bookkeeping, and compliance efficiently.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Small Businesses</div>
          <div class="card-back-desc">Complete GST, accounting &amp; compliance support for small businesses.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><path d="M3 9l9-6 9 6v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg></div>
          <div class="ind-title">Retail Businesses</div>
          <div class="ind-desc">GST filing, billing, and bookkeeping support for shop owners and traders.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Retail Businesses</div>
          <div class="card-back-desc">Tax and accounting solutions for retail shops and traders.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><circle cx="12" cy="7" r="4"/><path d="M4 21c2-4 6-6 8-6s6 2 8 6"/></svg></div>
          <div class="ind-title">Entrepreneurs</div>
          <div class="ind-desc">Supporting new business owners with tax setup, compliance, and financial clarity.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Entrepreneurs</div>
          <div class="card-back-desc">End-to-end support for new business owners and founders.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><path d="M12 12c2.5 0 4-2 4-4s-1.5-4-4-4-4 2-4 4 1.5 4 4 4z"/><path d="M6 20c0-3 3-5 6-5s6 2 6 5"/></svg></div>
          <div class="ind-title">Freelancers</div>
          <div class="ind-desc">Helping freelancers manage taxes, GST, and income reporting smoothly.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Freelancers</div>
          <div class="card-back-desc">Simple tax and GST solutions for independent professionals.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><path d="M6 6h12v12H6z"/><path d="M9 6v12"/></svg></div>
          <div class="ind-title">Local Businesses</div>
          <div class="ind-desc">GST and accounting support for local shops and service providers.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Local Businesses</div>
          <div class="card-back-desc">Complete compliance support for neighborhood businesses.</div>
        </div>
        <span class="tap-hint"></span>
      </div>

      <div class="ind-card tap-card">
        <div class="card-front">
          <div class="ind-icon-wrap"><svg viewBox="0 0 24 24" width="28" height="28" stroke="#fff" fill="none" stroke-width="1.5"><path d="M3 17l6-6 4 4 7-7"/></svg></div>
          <div class="ind-title">Growing SMEs</div>
          <div class="ind-desc">Businesses scaling operations needing structured accounting and tax systems.</div>
        </div>
        <div class="card-back">
          <div class="card-back-title">Growing SMEs</div>
          <div class="card-back-desc">Structured finance and compliance for growing businesses.</div>
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
    <div class="sec-title">Why Choose Me</div>
    <p class="sec-sub">Experience reliable and accurate tax solutions with a dedicated SME tax specialist.</p>
    <div class="values-grid reveal-stagger">
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="3"/></svg></div><div class="val-title">Maximum Tax Saving</div><div class="val-desc">Every filing is optimized to legally minimize your tax liability. We leave no deduction unclaimed — 80C, 80D, HRA, and beyond.</div></div>
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><path d="M13 2L3 14h8l-2 8 10-12h-8l2-8z"/></svg></div><div class="val-title">Fast Turnaround</div><div class="val-desc">Efficient processes mean faster filings. Most ITR filings completed within 24–48 hours of receiving complete documents.</div></div>
      <div class="val-card"><div class="val-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="val-title">100% Secure</div><div class="val-desc">Your financial data is treated with strict confidentiality. We use secure channels for all document exchange and communication.</div></div>
    </div>
    <div class="features-grid reveal-stagger" style="margin-top:0">
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a6.5 6.5 0 0 1 13 0"/><path d="M9 12l2 2 4-4"/></svg></div><div class="feat-text">Verified SME Tax Expert</div><div class="feat-sub">Qualified &amp; certified professional</div></div>
      <div class="feat-item"><div class="feat-icon"><svg viewBox="0 0 24 24"><path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/><path d="M7 8h10M7 12h6"/></svg></div><div class="feat-text">Trilingual Support</div><div class="feat-sub">English, Telugu &amp; Kannada</div></div>
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
    <h2>Simplify Your Business<br>Finances Today</h2>
    <p>Whether you're a small business owner, retailer, or entrepreneur — Pooja Reddy helps you manage GST, bookkeeping, and tax compliance with ease and accuracy.</p>
    <div class="cta-btns">
      <a href="{{ route('boc.step1', ['source' => 'taxexpert-poojareddy-cta']) }}" class="btn btn-primary">Book Consultation<svg class="btn-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="#contact" class="btn btn-callback">Request Callback</a>
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
        <div class="contact-item" onclick="window.location.href='mailto:alerts@thetaxcompany.in'">
          <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
          <div><div class="contact-lbl">Email</div><div class="contact-val">alerts@thetaxcompany.in</div></div>
        </div>
        <div class="contact-item" onclick="window.location.href='tel:+917032811111'">
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
    <p class="sec-sub">Common questions about GST, accounting, and tax services with Pooja Reddy.</p>
    <div class="card reveal" style="margin-top:28px">
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>What documents are required for GST filing or ITR?</span><span class="faq-toggle">+</span></div><div class="faq-a">You typically need invoices, purchase records, bank statements, and basic business details. Pooja Reddy provides a simple checklist and helps you organize everything for accurate filing.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>Do you provide bookkeeping and accounting services?</span><span class="faq-toggle">+</span></div><div class="faq-a">Yes. Pooja Reddy offers complete bookkeeping and accounting support, helping small businesses maintain clean records, track expenses, and stay financially organized.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>How often do I need to file GST returns?</span><span class="faq-toggle">+</span></div><div class="faq-a">GST returns are usually filed monthly or quarterly depending on your business type and turnover. Pooja ensures timely filing so you never miss deadlines or face penalties.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>Can you manage complete compliance for my business?</span><span class="faq-toggle">+</span></div><div class="faq-a">Yes. From GST filing to bookkeeping and tax compliance, Pooja Reddy provides end-to-end support so you can focus on running your business.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>Do you provide services across India?</span><span class="faq-toggle">+</span></div><div class="faq-a">Absolutely. All services are provided online across India. Documents are shared digitally, and consultations are conducted via call or video for a seamless experience.</div></div>
      <div class="faq-item"><div class="faq-q" onclick="toggleFAQ(this)"><span>How quickly can GST filing or accounting be completed?</span><span class="faq-toggle">+</span></div><div class="faq-a">GST filings are typically completed within 24–48 hours after receiving all details. Bookkeeping timelines depend on data volume, but regular updates ensure everything stays up to date.</div></div>
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
      el.closest('.contact-item') || el.closest('.hero-photo-card') ||
      el.closest('.hero-glass-card') || el.closest('.hero-pill')
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

/* ─── MAGNETIC + DEPTH SYSTEM FOR HERO PHOTO CARD ─── */
(function() {
  if (window.innerWidth <= 768) return;

  const card = document.getElementById('heroPhotoCard');
  if (!card) return;

  let targetRotX = 0, targetRotY = 0;
  let targetTransX = 0, targetTransY = 0;
  let targetShadowX = 0, targetShadowY = 0;
  let currentRotX = 0, currentRotY = 0;
  let currentTransX = 0, currentTransY = 0;
  let currentShadowX = 0, currentShadowY = 0;

  const magneticRadius = 200;
  const magneticStrength = 0.08;
  const maxRotate = 8;
  const shadowFactor = 0.15;

  let mouseX = 0, mouseY = 0;
  let isOverCard = false;
  let rafId = null;

  function resetCard() {
    targetRotX = targetRotY = 0;
    targetTransX = targetTransY = 0;
    targetShadowX = targetShadowY = 0;
  }

  let scrollDebounce;
  function onScrollReset() {
    if (scrollDebounce) clearTimeout(scrollDebounce);
    scrollDebounce = setTimeout(() => { resetCard(); }, 100);
  }
  window.addEventListener('scroll', onScrollReset, { passive: true });

  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX; mouseY = e.clientY;
  }, { passive: true });

  card.addEventListener('mouseenter', () => { isOverCard = true; });
  card.addEventListener('mouseleave', () => { isOverCard = false; resetCard(); });

  function updateCard() {
    const rect = card.getBoundingClientRect();
    const centerX = rect.left + rect.width / 2;
    const centerY = rect.top + rect.height / 2;
    const dx = mouseX - centerX;
    const dy = mouseY - centerY;
    const distance = Math.sqrt(dx*dx + dy*dy);

    if (distance < magneticRadius) {
      targetTransX = dx * magneticStrength;
      targetTransY = dy * magneticStrength;
      targetShadowX = -dx * shadowFactor;
      targetShadowY = -dy * shadowFactor;
    } else {
      targetTransX = 0; targetTransY = 0;
      targetShadowX = 0; targetShadowY = 0;
    }

    if (isOverCard) {
      const relX = (mouseX - rect.left) / rect.width;
      const relY = (mouseY - rect.top) / rect.height;
      targetRotY = (relX - 0.5) * 2 * maxRotate;
      targetRotX = (relY - 0.5) * -2 * maxRotate;
    } else {
      targetRotX = 0; targetRotY = 0;
    }

    const ease = 0.12;
    currentRotX += (targetRotX - currentRotX) * ease;
    currentRotY += (targetRotY - currentRotY) * ease;
    currentTransX += (targetTransX - currentTransX) * ease;
    currentTransY += (targetTransY - currentTransY) * ease;
    currentShadowX += (targetShadowX - currentShadowX) * ease;
    currentShadowY += (targetShadowY - currentShadowY) * ease;

    const clamp = (val, max) => Math.min(max, Math.max(-max, val));
    const rotX = clamp(currentRotX, maxRotate);
    const rotY = clamp(currentRotY, maxRotate);

    card.style.transform = `perspective(1000px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateX(${currentTransX}px) translateY(${currentTransY}px)`;
    const shadowStr = `${currentShadowX}px ${currentShadowY}px 40px rgba(0,0,0,0.4)`;
    card.style.boxShadow = `${shadowStr}, 0 0 0 1px rgba(255,255,255,0.05)`;

    rafId = requestAnimationFrame(updateCard);
  }

  rafId = requestAnimationFrame(updateCard);
  window.addEventListener('beforeunload', () => { if (rafId) cancelAnimationFrame(rafId); });
  window.addEventListener('resize', () => resetCard());
})();

/* ─── METRIC FLOAT ─── */
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

/* ─── MAGNETIC BUTTONS (DISABLED FOR CTA BUTTONS TO FIX MOVING ISSUE) ─── */
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