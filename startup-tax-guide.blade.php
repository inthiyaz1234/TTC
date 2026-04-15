@extends('front')
@section('content')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultimate Startup Tax Guide 2026 | Tax Planning & Compliance for Startups | The Tax Company</title>
<meta name="description" content="Complete Startup Tax Guide in India 2026. Tax planning, compliance, GST, TDS, Startup India benefits, tax saving tips for startups, entrepreneurs & small businesses.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>

    /* Force white background on everything */
    html, body {
        background-color: #ffffff !important;
    }
    body > * {
        background-color: transparent;
    }

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --ink:    #0E0E0E;
  --ink-2:  #2C2C2C;
  --ink-3:  #4A4A4A;
  --ink-4:  #6B6B6B;
  --ink-5:  #909090;
  --ink-6:  #B8B8B8;
  --ink-7:  #D4D4D4;
  --bd:     #E8E8E8;
  --bd2:    #F0F0F0;
  --surf:   #F7F7F7;
  --white:  #FFFFFF;
  --font:   'Montserrat', sans-serif;
  --max:    1380px;
  --r:      14px;
  --rsm:    9px;
  --rxs:    6px;
  --sh:     0 1px 3px rgba(0,0,0,.04), 0 4px 16px rgba(0,0,0,.05);
}
html{scroll-behavior:smooth}
body{font-family:var(--font);color:var(--ink);background:var(--white);font-size:14px;line-height:1.6;-webkit-font-smoothing:antialiased;overflow-x:hidden}
h1,h2,h3,h4,h5{font-family:var(--font)}
a{text-decoration:none;color:inherit}
ul,ol{list-style:none}
button{font-family:var(--font);cursor:pointer;border:none;background:none;outline:none}
img,svg{display:block}

#pbar-wrap{position:fixed;top:0;left:0;width:100%;height:2.5px;background:var(--bd2);z-index:600}
#pbar{height:100%;width:0;background:var(--ink);transition:width .1s linear}

.topbar{background:var(--ink);color:rgba(255,255,255,.45);font-size:11.5px;font-weight:500;text-align:center;padding:7px 20px;letter-spacing:.02em;margin-top:2.5px}
.topbar b{color:rgba(255,255,255,.88)}

.nav{position:sticky;top:2.5px;z-index:400;background:rgba(255,255,255,.97);backdrop-filter:blur(20px);border-bottom:1px solid var(--bd);display:flex;align-items:center;justify-content:space-between;padding:0 28px;height:56px}
.nav-logo{font-size:16px;font-weight:800;color:var(--ink);letter-spacing:-.025em;display:flex;align-items:center;gap:7px}
.nav-links{display:flex;gap:22px}
.nav-links a{font-size:12.5px;font-weight:500;color:var(--ink-3);transition:color .15s}
.nav-links a:hover{color:var(--ink)}
.nav-r{display:flex;align-items:center;gap:9px}
.btn-login{font-size:12.5px;font-weight:600;color:var(--ink-2)}
.btn-nav{background:var(--ink);color:#fff;padding:8px 16px;border-radius:7px;font-size:12.5px;font-weight:700;transition:opacity .18s}
.btn-nav:hover{opacity:.8}

.bc{border-bottom:1px solid var(--bd);padding:9px 28px}
.bc-in{max-width:var(--max);margin:0 auto;display:flex;align-items:center;gap:6px;font-size:11.5px;color:var(--ink-5);font-weight:500}
.bc-in a:hover{color:var(--ink)}
.bcsep{color:var(--ink-7)}
.bccur{color:var(--ink-2);font-weight:600}

.ph{border-bottom:1px solid var(--bd);padding:32px 28px 28px;background:var(--white)}
.ph-in{max-width:var(--max);margin:0 auto}
.ph-chip{display:inline-flex;align-items:center;gap:6px;background:var(--surf);border:1px solid var(--bd);border-radius:50px;padding:4px 12px;font-size:10.5px;font-weight:700;letter-spacing:.09em;text-transform:uppercase;color:var(--ink-5);margin-bottom:14px}
.ph h1{font-size:clamp(20px,2.6vw,32px);font-weight:800;color:var(--ink);line-height:1.18;letter-spacing:-.028em;margin-bottom:9px}
.ph-sub{font-size:14.5px;color:var(--ink-3);max-width:580px;line-height:1.72}
.ph-meta{display:flex;gap:16px;margin-top:14px;flex-wrap:wrap}
.ph-mi{display:flex;align-items:center;gap:5px;font-size:11.5px;color:var(--ink-5);font-weight:500}
.ph-mi svg{width:13px;height:13px;stroke:var(--ink-5);fill:none;stroke-width:1.8;stroke-linecap:round}

.doc-wrap{max-width:var(--max);margin:0 auto;padding:0 28px;display:grid;grid-template-columns:220px 1fr 230px;gap:0;align-items:start}

.left-col{position:sticky;top:66px;height:max-content;padding:24px 20px 24px 0;border-right:1px solid var(--bd2)}
.toc-lbl{font-size:9.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--ink-6);margin-bottom:9px;padding-left:2px;display:block}
.toc-nav{display:flex;flex-direction:column;gap:1px}
.tl{display:flex;align-items:center;gap:7px;padding:6px 8px 6px 10px;border-radius:var(--rxs);font-size:11.5px;font-weight:500;color:var(--ink-5);border-left:2px solid transparent;transition:all .14s}
.tl:hover{color:var(--ink);background:var(--surf)}
.tl.active{color:var(--ink);font-weight:700;background:var(--surf);border-left-color:var(--ink)}
.tl .tn{font-size:9px;font-weight:800;color:var(--ink-7);min-width:16px;text-align:right;transition:color .14s;flex-shrink:0}
.tl.active .tn{color:var(--ink)}
.toc-div{height:1px;background:var(--bd);margin:6px 0 6px 10px}
.toc-cta-box{margin-top:14px;background:var(--ink);border-radius:10px;padding:13px 12px;text-align:center}
.toc-cta-box p{font-size:11px;color:#ffffff;margin-bottom:8px;line-height:1.5}
.toc-cta-btn{display:block;width:100%;background:#fff;color:var(--ink);border-radius:6px;padding:8px 10px;font-family:var(--font);font-size:11px;font-weight:700;transition:opacity .18s;cursor:pointer;border:none;text-decoration:none;text-align:center}
.toc-cta-btn:hover{opacity:.87}

.main-col{padding:24px 32px 64px;min-width:0}
.sec{padding-bottom:32px;margin-bottom:4px;border-bottom:1px solid var(--bd2)}
.sec:last-child{border-bottom:none;padding-bottom:0}
.s-lbl{font-size:9.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--ink-5);margin-bottom:5px;display:block}
.s-ttl{font-size:19px;font-weight:800;color:var(--ink);line-height:1.2;letter-spacing:-.022em;margin-bottom:12px}
.s-desc{font-size:13px;color:var(--ink-4);margin-bottom:12px;line-height:1.65}
.panel{background:var(--surf);border:1px solid var(--bd);border-radius:12px;padding:17px 16px;margin-bottom:12px}
.panel p{font-size:13.5px;color:var(--ink-2);line-height:1.77}
.panel p+p{margin-top:10px}
.panel strong{color:var(--ink);font-weight:700}

.right-col{position:sticky;top:66px;height:max-content;padding:24px 0 24px 20px;border-left:1px solid var(--bd2)}
.r-card{background:var(--surf);border:1px solid var(--bd);border-radius:var(--r);padding:14px;font-size:12.5px;margin-bottom:12px}
.r-card h5{font-size:11.5px;font-weight:700;color:var(--ink);margin-bottom:10px}
.r-row{display:flex;justify-content:space-between;padding:6px 0;border-bottom:1px solid var(--bd2);font-size:11.5px}
.r-row:last-child{border-bottom:none}
.r-row span:first-child{color:var(--ink-4)}
.r-row span:last-child{font-weight:600;color:var(--ink-2)}
.r-link{display:flex;align-items:center;gap:7px;padding:8px 0;font-size:12px;color:var(--ink-3);border-bottom:1px solid var(--bd2);transition:color .15s}
.r-link:last-child{border-bottom:none}
.r-link svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:1.6;stroke-linecap:round}
.r-link:hover{color:var(--ink)}
.r-cta{background:var(--ink);color:#fff;display:block;width:100%;padding:11px 14px;border-radius:8px;text-align:center;font-family:var(--font);font-size:12px;font-weight:700;margin-top:11px;cursor:pointer;transition:opacity .18s;border:none;text-decoration:none}
.r-cta:hover{opacity:.85}
.r-cta-g{background:transparent;color:var(--ink-3);display:block;width:100%;padding:9px 14px;border-radius:8px;text-align:center;font-family:var(--font);font-size:12px;font-weight:600;margin-top:7px;cursor:pointer;transition:all .18s;border:1px solid var(--bd);text-decoration:none}
.r-cta-g:hover{border-color:var(--ink);color:var(--ink)}

.g2{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-top:12px}
.g3{display:grid;grid-template-columns:repeat(3,1fr);gap:9px;margin-top:12px}
.span2{grid-column:1/-1}
.icard{background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:14px;display:flex;flex-direction:column;gap:9px;transition:border-color .18s,transform .2s,box-shadow .2s}
.icard:hover{border-color:#CDCDCD;transform:translateY(-2px);box-shadow:var(--sh)}
.ico-box{width:38px;height:38px;border-radius:9px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.ico-box svg{width:17px;height:17px;stroke:var(--ink-2);stroke-width:1.6;fill:none;stroke-linecap:round;stroke-linejoin:round}
.icard-t{font-size:12.5px;font-weight:700;color:var(--ink);letter-spacing:-.01em;line-height:1.3}
.icard-d{font-size:11.5px;color:var(--ink-3);line-height:1.55}

.hl-strip{background:var(--surf);border:1px solid var(--bd);border-radius:12px;padding:15px 16px;margin-bottom:12px}
.hl-strip-ttl{font-size:11.5px;font-weight:700;color:var(--ink);margin-bottom:10px;display:flex;align-items:center;gap:6px}
.hl-item{display:flex;align-items:center;gap:7px;font-size:12px;color:var(--ink-3);margin-bottom:5px}
.hl-item svg{width:13px;height:13px;stroke:var(--ink-4);fill:none;stroke-width:2;stroke-linecap:round;flex-shrink:0}

.chips{display:flex;flex-wrap:wrap;gap:6px;margin-top:12px}
.chip{padding:5px 12px;background:var(--surf);border:1px solid var(--bd);border-radius:50px;font-size:11px;font-weight:600;color:var(--ink-4);transition:all .15s}
.chip:hover{border-color:#bbb;color:var(--ink)}

/* STEP CARDS */
.steps-g{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-top:20px}
.step-card{background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:17px 13px 20px;text-align:center;position:relative;opacity:0;transform:perspective(700px) rotateX(-28deg) scale(.95);transform-origin:top center;transition:box-shadow .25s,border-color .22s}
.step-card.vis{animation:flipIn .65s cubic-bezier(.16,1,.3,1) forwards}
@keyframes flipIn{0%{opacity:0;transform:perspective(700px) rotateX(-28deg) scale(.95);filter:blur(4px)}58%{filter:blur(0)}100%{opacity:1;transform:perspective(700px) rotateX(0) scale(1);filter:blur(0)}}
.step-card:hover{transform:translateY(-4px) scale(1.01)!important;box-shadow:0 12px 28px rgba(0,0,0,.09);border-color:#aaa}
.s-badge{width:28px;height:28px;border-radius:50%;background:var(--ink);color:#fff;font-size:10px;font-weight:800;display:flex;align-items:center;justify-content:center;margin:0 auto 10px;box-shadow:0 2px 8px rgba(0,0,0,.22)}
.s-ico{width:42px;height:42px;border-radius:11px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;margin:0 auto 10px}
.s-ico svg{width:19px;height:19px;stroke:var(--ink-2);stroke-width:1.6;fill:none;stroke-linecap:round;stroke-linejoin:round}
.step-card h4{font-size:12.5px;font-weight:700;color:var(--ink);margin-bottom:5px;letter-spacing:-.01em}
.step-card p{font-size:11.5px;color:var(--ink-4);line-height:1.6}

/* TIMELINE */
.stl{position:relative;height:24px;display:grid;grid-template-columns:repeat(6,1fr);gap:12px;align-items:center;margin-top:12px}
.stl::before{content:'';position:absolute;top:50%;left:calc(8.33% + 5px);right:calc(8.33% + 5px);height:2px;background:var(--bd);transform:translateY(-50%)}
.stl::after{content:'';position:absolute;top:50%;left:calc(8.33% + 5px);width:0;height:2px;background:var(--ink);transform:translateY(-50%);transition:width 1.8s cubic-bezier(.4,0,.2,1)}
.stl.go::after{width:calc(83.34% - 10px)}
.stl-c{display:flex;justify-content:center}
.stl-d{width:10px;height:10px;border-radius:50%;background:var(--bd);border:2px solid var(--white);transition:background .3s}
.stl-d.lit{background:var(--ink)}

.tab-bar{display:flex;border:1px solid var(--bd);border-radius:10px;overflow:hidden;background:var(--surf)}
.tab-btn{flex:1;padding:9px 7px;font-family:var(--font);font-size:11px;font-weight:600;color:var(--ink-4);background:transparent;border:none;border-right:1px solid var(--bd);transition:all .15s;text-align:center;cursor:pointer;line-height:1.3}
.tab-btn:last-child{border-right:none}
.tab-btn.on{background:var(--ink);color:#fff}
.tab-btn .tsub{font-size:9.5px;font-weight:400;opacity:.7;display:block;margin-top:1px}
.tab-panels{margin-top:9px}
.tab-panel{display:none;background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:16px}
.tab-panel.on{display:block}
.tp-head{display:flex;align-items:flex-start;gap:11px;margin-bottom:13px;padding-bottom:13px;border-bottom:1px solid var(--bd2)}
.tp-ico{width:42px;height:42px;border-radius:10px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.tp-ico svg{width:19px;height:19px;stroke:var(--ink-2);stroke-width:1.5;fill:none;stroke-linecap:round;stroke-linejoin:round}
.tp-ttl{font-size:13.5px;font-weight:700;color:var(--ink);margin-bottom:2px}
.tp-sub{font-size:11.5px;color:var(--ink-4)}
.tp-body p{font-size:12.5px;color:var(--ink-3);line-height:1.72;margin-bottom:9px}
.tp-list{display:flex;flex-direction:column}
.tp-li{display:flex;gap:8px;padding:7px 0;border-bottom:1px solid var(--bd2);font-size:12px;color:var(--ink-3);align-items:flex-start;line-height:1.5}
.tp-li:last-child{border-bottom:none}
.tp-li svg{width:13px;height:13px;stroke:var(--ink-5);fill:none;stroke-width:2;stroke-linecap:round;flex-shrink:0;margin-top:2px}
.tp-tags{display:flex;gap:6px;flex-wrap:wrap;margin-top:11px}
.tp-tag{background:var(--surf);border:1px solid var(--bd);border-radius:5px;padding:3px 8px;font-size:10.5px;font-weight:600;color:var(--ink-3)}

.kb-stack{display:flex;flex-direction:column;gap:7px;margin-top:12px}
.kb{border:1px solid var(--bd);border-radius:12px;overflow:hidden;transition:border-color .18s}
.kb.open{border-color:#c6c6c6;box-shadow:var(--sh)}
.kb-hd{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:13px 15px;cursor:pointer;background:var(--white);transition:background .15s}
.kb-hd:hover{background:var(--surf)}
.kb-left{display:flex;align-items:center;gap:9px}
.kb-ico{width:32px;height:32px;border-radius:7px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.kb-ico svg{width:15px;height:15px;stroke:var(--ink-3);stroke-width:1.6;fill:none;stroke-linecap:round}
.kb-t{font-size:12.5px;font-weight:700;color:var(--ink);line-height:1.3}
.kb-s{font-size:10.5px;color:var(--ink-5);margin-top:1px}
.kb-chev{width:22px;height:22px;border-radius:5px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:transform .22s,background .18s}
.kb-chev svg{width:11px;height:11px;stroke:var(--ink-4);stroke-width:2;fill:none;stroke-linecap:round;transition:stroke .18s}
.kb.open .kb-chev{transform:rotate(180deg);background:var(--ink);border-color:var(--ink)}
.kb.open .kb-chev svg{stroke:#fff}
.kb-body{max-height:0;overflow:hidden;transition:max-height .32s ease}
.kb.open .kb-body{max-height:600px}
.kb-in{padding:0 15px 15px;border-top:1px solid var(--bd)}
.kb-in p{font-size:12.5px;color:var(--ink-3);line-height:1.72;margin-top:11px}
.kb-in ul{margin-top:9px;display:flex;flex-direction:column}
.kb-li{display:flex;gap:8px;align-items:flex-start;padding:7px 0;border-bottom:1px solid var(--bd2);font-size:12px;color:var(--ink-3);line-height:1.5}
.kb-li:last-child{border-bottom:none}
.kb-li svg{width:12px;height:12px;stroke:var(--ink-5);fill:none;stroke-width:2;stroke-linecap:round;flex-shrink:0;margin-top:2px}

.rate-strip{display:grid;grid-template-columns:repeat(5,1fr);gap:9px;margin-top:12px}
.rcard{background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:14px 12px;transition:all .2s}
.rcard:hover{border-color:#ccc;transform:translateY(-2px);box-shadow:var(--sh)}
.rcard-pct{font-size:26px;font-weight:800;color:var(--ink);letter-spacing:-.03em;line-height:1;margin-bottom:5px;display:block}
.rcard-lbl{font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px}
.rcard-d{font-size:11px;color:var(--ink-4);line-height:1.5}

.bslider{overflow:hidden;border-radius:var(--r);border:1px solid var(--bd);margin-top:12px}
.btrack{display:flex;transition:transform .45s cubic-bezier(.4,0,.2,1)}
.bslide{flex:0 0 100%;display:grid;grid-template-columns:1fr 1fr;gap:1px;background:var(--bd)}
.bs-cell{background:var(--white);padding:18px 16px;display:flex;flex-direction:column;gap:9px}
.bs-ico{width:38px;height:38px;border-radius:9px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center}
.bs-ico svg{width:17px;height:17px;stroke:var(--ink-2);stroke-width:1.6;fill:none;stroke-linecap:round;stroke-linejoin:round}
.bs-t{font-size:12.5px;font-weight:700;color:var(--ink)}
.bs-d{font-size:11.5px;color:var(--ink-3);line-height:1.55}
.bctrl{display:flex;align-items:center;justify-content:space-between;padding:9px 13px;border-top:1px solid var(--bd);background:var(--surf)}
.bdots{display:flex;gap:5px}
.bdot{width:5px;height:5px;border-radius:50%;background:var(--ink-7);border:none;cursor:pointer;transition:all .2s;padding:0}
.bdot.on{background:var(--ink);width:16px;border-radius:3px}
.barrs{display:flex;gap:5px}
.barr{width:26px;height:26px;border-radius:5px;background:var(--white);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all .15s}
.barr:hover{background:var(--ink);border-color:var(--ink)}
.barr:hover svg{stroke:#fff}
.barr svg{width:13px;height:13px;stroke:var(--ink-3);stroke-width:2;fill:none;stroke-linecap:round;transition:stroke .15s}

.tbl-wrap{border-radius:12px;border:1px solid var(--bd);overflow:hidden;margin-top:12px;overflow-x:auto}
table.ttbl{width:100%;border-collapse:collapse;background:var(--white);font-size:12.5px}
table.ttbl thead{background:var(--ink)}
table.ttbl th{padding:10px 13px;text-align:left;font-size:9.5px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.42)}
table.ttbl td{padding:10px 13px;color:var(--ink-2);border-bottom:1px solid var(--bd);font-weight:500;line-height:1.5}
table.ttbl td b{color:var(--ink);font-weight:700}
table.ttbl tr:last-child td{border-bottom:none}
table.ttbl tbody tr:hover td{background:var(--surf)}

.faq-wrap{display:flex;flex-direction:column;gap:6px;margin-top:12px}
.faq{border:1px solid var(--bd);border-radius:var(--rsm);overflow:hidden;transition:border-color .18s}
.faq.open{border-color:#c6c6c6}
.faq-q{width:100%;display:flex;align-items:center;justify-content:space-between;gap:11px;padding:12px 15px;background:none;border:none;font-family:var(--font);font-size:12.5px;font-weight:600;color:var(--ink);text-align:left;cursor:pointer}
.faq-arr{width:21px;height:21px;border-radius:5px;background:var(--surf);border:1px solid var(--bd);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:transform .22s,background .18s}
.faq-arr svg{width:10px;height:10px;stroke:var(--ink-4);stroke-width:2.2;fill:none;stroke-linecap:round;transition:stroke .18s}
.faq.open .faq-arr{transform:rotate(180deg);background:var(--ink);border-color:var(--ink)}
.faq.open .faq-arr svg{stroke:#fff}
.faq-body{max-height:0;overflow:hidden;transition:max-height .28s ease}
.faq.open .faq-body{max-height:400px}
.faq-in{padding:11px 15px 14px;font-size:12.5px;color:var(--ink-3);line-height:1.75;border-top:1px solid var(--bd)}

.faq-view-more{background:transparent;border:1px solid var(--bd);border-radius:30px;padding:8px 20px;font-size:13px;font-weight:600;color:var(--ink-3);margin-top:12px;cursor:pointer;transition:all .15s}
.faq-view-more:hover{border-color:var(--ink);color:var(--ink)}

.guide-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:9px;margin-top:12px}
.gcard{background:var(--white);border:1px solid var(--bd);border-radius:var(--r);padding:14px;display:flex;flex-direction:column;transition:all .18s}
.gcard:hover{border-color:#ccc;transform:translateY(-2px);box-shadow:var(--sh)}
.g-tag{font-size:9px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-5);margin-bottom:5px;display:flex;align-items:center;gap:4px}
.g-tag svg{width:11px;height:11px;stroke:var(--ink-5);fill:none;stroke-width:1.8;stroke-linecap:round}
.gcard h4{font-size:12.5px;font-weight:700;color:var(--ink);line-height:1.45;flex:1}
.g-read{font-size:11px;font-weight:700;color:var(--ink-4);margin-top:9px;display:flex;align-items:center;gap:4px;transition:color .15s}
.g-read svg{width:11px;height:11px;stroke:currentColor;stroke-width:2;fill:none;stroke-linecap:round;transition:transform .15s}
.gcard:hover .g-read{color:var(--ink)}
.gcard:hover .g-read svg{transform:translateX(3px)}

.cta{background:var(--ink);text-align:center;padding:52px 28px}
.cta h3{font-size:24px;font-weight:800;color:#fff;letter-spacing:-.025em;margin-bottom:8px}
.cta p{font-size:14px;color:rgba(255,255,255,.38);margin-bottom:22px}
.cta-btns{display:flex;gap:10px;justify-content:center;flex-wrap:wrap}
.btn-w{background:#fff;color:var(--ink);padding:11px 24px;border-radius:40px;font-family:var(--font);font-size:13px;font-weight:700;transition:opacity .18s;cursor:pointer;border:none;text-decoration:none;display:inline-block}
.btn-w:hover{opacity:.88}
.btn-g{background:transparent;color:rgba(255,255,255,.7);border:1.5px solid rgba(255,255,255,.18);padding:10px 22px;border-radius:40px;font-family:var(--font);font-size:13px;font-weight:600;transition:all .18s;cursor:pointer;text-decoration:none;display:inline-block}
.btn-g:hover{border-color:rgba(255,255,255,.5);color:#fff}

footer{background:#070707;padding:26px 28px;text-align:center;color:rgba(255,255,255,.28);font-size:11.5px;letter-spacing:.02em}
footer b{color:rgba(255,255,255,.55)}

.mob-nav{display:none}

/* ── RESPONSIVE ── */
@media(max-width:1120px){
  .doc-wrap{grid-template-columns:196px 1fr 210px}
  .main-col{padding:22px 24px 64px}
}
@media(max-width:900px){
  .doc-wrap{grid-template-columns:1fr;gap:0;padding:0}
  .left-col,.right-col{display:none}
  .main-col{padding:0 16px 56px}
  .nav{padding:0 16px;height:52px}
  .nav-links{display:none}
  .bc{padding:8px 16px}
  .ph{padding:20px 16px 18px}
  .cta{padding:40px 20px}
  .cta h3{font-size:20px}
  .cta-btns{flex-direction:column;align-items:center}
  .g2{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;-webkit-overflow-scrolling:touch;scrollbar-width:none;gap:10px;padding-bottom:4px}
  .g2::-webkit-scrollbar{display:none}
  .g2 .icard{flex:0 0 calc(72vw - 16px);scroll-snap-align:start;min-width:0}
  .g2 .span2{flex:0 0 calc(88vw - 16px)}
  .g3{grid-template-columns:repeat(2,1fr);gap:8px}
  .steps-g{grid-template-columns:repeat(2,1fr);gap:8px}
  .stl{display:none}
  .rate-strip{grid-template-columns:repeat(5,minmax(120px,1fr));overflow-x:auto;scrollbar-width:none;padding-bottom:4px}
  .rate-strip::-webkit-scrollbar{display:none}
  .bslide{grid-template-columns:1fr}
  .guide-grid{grid-template-columns:1fr;gap:8px}
  footer{padding:24px 16px}
  .mob-nav{display:flex;position:fixed;bottom:16px;left:50%;transform:translateX(-50%);z-index:500;background:rgba(14,14,14,.94);backdrop-filter:blur(16px);border-radius:50px;overflow:hidden;max-width:calc(100vw - 32px)}
  .mob-tgl{display:flex;align-items:center;gap:7px;padding:10px 16px;color:#fff;font-size:12px;font-weight:600;cursor:pointer;white-space:nowrap}
  .mob-tgl svg{width:13px;height:13px;stroke:#fff;stroke-width:1.8;fill:none;stroke-linecap:round;flex-shrink:0}
  .mob-cur{max-width:160px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
  .mob-panel{position:fixed;bottom:60px;left:50%;transform:translateX(-50%);background:rgba(14,14,14,.96);backdrop-filter:blur(18px);border-radius:14px;padding:8px 6px;width:min(320px,calc(100vw - 32px));max-height:0;overflow:hidden;transition:max-height .28s ease,opacity .22s;opacity:0;pointer-events:none}
  .mob-panel.open{max-height:440px;overflow-y:auto;opacity:1;pointer-events:all}
  .mob-link{display:flex;align-items:center;gap:8px;padding:8px 12px;border-radius:8px;font-size:12px;font-weight:500;color:rgba(255,255,255,.6);transition:all .15s}
  .mob-link:hover,.mob-link.act{background:rgba(255,255,255,.1);color:#fff}
  .mob-link .mn{font-size:9.5px;color:rgba(255,255,255,.3);min-width:18px}
  .mob-cta-bar{display:flex;position:fixed;bottom:0;left:0;width:100%;background:var(--white);border-top:1px solid var(--bd);padding:10px 16px;z-index:490}
  .mob-cta-bar a{display:block;width:100%;background:var(--ink);color:#fff;padding:12px;border-radius:9px;font-family:var(--font);font-size:13px;font-weight:700;border:none;cursor:pointer;text-decoration:none;text-align:center}
}
@media(max-width:500px){
  .g2 .icard{flex:0 0 calc(82vw - 16px)}
  .g3{grid-template-columns:repeat(2,1fr)}
  .steps-g{grid-template-columns:repeat(2,1fr);gap:8px}
  .step-card{padding:13px 9px 15px}
  .ph h1{font-size:19px}
}
.doc-wrap{
    display:grid !important;
    grid-template-columns:220px 1fr 230px !important;
}

.left-col{
    display:block !important;
}

/* Hide mobile TOC on desktop */
@media (min-width: 901px){
  .mob-nav,
  .mob-panel{
      display:none !important;
  }
}

/* ================= MOBILE FIX FOR BLOG LAYOUT ================= */

@media (max-width: 900px){

    /* Hide sidebars */
    .left-col,
    .right-col{
        display:none !important;
    }

    /* Make layout single column */
    .doc-wrap{
        grid-template-columns:1fr !important;
        display:block !important;
        padding:0 !important;
    }

    /* Main content full width */
    .main-col{
        width:100% !important;
        padding:0 16px 60px !important;
    }

    /* Hide mobile TOC panel initially */
    .mob-panel{
        display:none;
    }

    /* Show when JS toggles */
    .mob-panel.open{
        display:block;
    }

}
</style>

<!-- ══ SVG SPRITE ═══════════════════════════════════════════ -->
<svg style="display:none" xmlns="http://www.w3.org/2000/svg">
  <symbol id="I-globe"   viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><ellipse cx="10" cy="10" rx="3.5" ry="8"/><line x1="2" y1="10" x2="18" y2="10"/><line x1="3" y1="6.5" x2="17" y2="6.5"/><line x1="3" y1="13.5" x2="17" y2="13.5"/></symbol>
  <symbol id="I-id"      viewBox="0 0 20 20"><rect x="2" y="5" width="16" height="11" rx="2"/><circle cx="7" cy="10.5" r="2"/><line x1="11" y1="9" x2="16" y2="9"/><line x1="11" y1="12" x2="15" y2="12"/></symbol>
  <symbol id="I-phone"   viewBox="0 0 20 20"><rect x="6" y="2" width="8" height="16" rx="2"/><line x1="10" y1="15" x2="10" y2="15.5" stroke-width="2.5"/></symbol>
  <symbol id="I-upload"  viewBox="0 0 20 20"><polyline points="13,8 10,5 7,8"/><line x1="10" y1="5" x2="10" y2="13"/><path d="M5 13v3a1 1 0 001 1h8a1 1 0 001-1v-3"/></symbol>
  <symbol id="I-receipt" viewBox="0 0 20 20"><path d="M5 2h10v16l-2-1.5-2 1.5-2-1.5-2 1.5-2-1.5z"/><line x1="8" y1="7" x2="12" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/></symbol>
  <symbol id="I-badge"   viewBox="0 0 20 20"><path d="M10 2l1.8 3.6 4 .6-2.9 2.8.7 4L10 11l-3.6 1.9.7-4L4.2 6.2l4-.6z"/><circle cx="10" cy="15.5" r="2.5"/></symbol>
  <symbol id="I-factory" viewBox="0 0 20 20"><path d="M2 16V9l5-3v4l5-3v4l4-2v6z"/><rect x="4" y="12" width="2" height="3"/><rect x="9" y="12" width="2" height="3"/><rect x="14" y="12" width="2" height="3"/></symbol>
  <symbol id="I-tools"   viewBox="0 0 20 20"><path d="M14 2a4 4 0 00-4 4c0 .6.1 1.2.4 1.7L3 15a2 2 0 002.8 2.8l7.3-7.4c.5.3 1.1.4 1.7.4a4 4 0 000-8z"/></symbol>
  <symbol id="I-cart"    viewBox="0 0 20 20"><path d="M2 3h2l2.5 9h9l1.5-6H6"/><circle cx="9" cy="16.5" r="1.5"/><circle cx="15" cy="16.5" r="1.5"/></symbol>
  <symbol id="I-truck"   viewBox="0 0 20 20"><path d="M2 12V6h10v8H2z"/><path d="M12 8h4l2 4v2h-6z"/><circle cx="5.5" cy="15.5" r="1.5"/><circle cx="15.5" cy="15.5" r="1.5"/></symbol>
  <symbol id="I-plane"   viewBox="0 0 20 20"><path d="M18 10L3 5l2 5-2 5 15-5z"/><line x1="7" y1="10" x2="18" y2="10"/></symbol>
  <symbol id="I-cal"     viewBox="0 0 20 20"><rect x="3" y="4" width="14" height="13" rx="2"/><line x1="3" y1="8" x2="17" y2="8"/><line x1="7" y1="2" x2="7" y2="6"/><line x1="13" y1="2" x2="13" y2="6"/></symbol>
  <symbol id="I-doc"     viewBox="0 0 20 20"><path d="M6 2h8l4 4v12a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/><polyline points="14,2 14,6 18,6"/><line x1="7" y1="10" x2="13" y2="10"/><line x1="7" y1="13" x2="13" y2="13"/></symbol>
  <symbol id="I-home"    viewBox="0 0 20 20"><path d="M3 9.5L10 3l7 6.5V18H13v-5H7v5H3z"/></symbol>
  <symbol id="I-bank"    viewBox="0 0 20 20"><polygon points="10,2 18,7 2,7"/><rect x="4" y="7" width="2" height="7"/><rect x="9" y="7" width="2" height="7"/><rect x="14" y="7" width="2" height="7"/><rect x="2" y="14" width="16" height="2.5" rx=".5"/></symbol>
  <symbol id="I-pen"     viewBox="0 0 20 20"><path d="M14 3l3 3-10 10H4v-3z"/><line x1="11" y1="6" x2="14" y2="9"/></symbol>
  <symbol id="I-outw"    viewBox="0 0 20 20"><path d="M4 16V4"/><polyline points="4,4 10,10 16,4"/><line x1="4" y1="16" x2="16" y2="16"/></symbol>
  <symbol id="I-chart"   viewBox="0 0 20 20"><rect x="3" y="12" width="3" height="5"/><rect x="8.5" y="8" width="3" height="9"/><rect x="14" y="4" width="3" height="13"/><line x1="2" y1="17" x2="18" y2="17"/></symbol>
  <symbol id="I-folder"  viewBox="0 0 20 20"><path d="M2 6h6l2 2h8v9a1 1 0 01-1 1H3a1 1 0 01-1-1z"/></symbol>
  <symbol id="I-audit"   viewBox="0 0 20 20"><rect x="3" y="2" width="14" height="17" rx="1.5"/><line x1="7" y1="7" x2="13" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/><path d="M7 13h4"/><circle cx="14" cy="15" r="3"/><line x1="16.5" y1="17.5" x2="18.5" y2="19.5"/></symbol>
  <symbol id="I-check"   viewBox="0 0 20 20"><polyline points="4,10 8,14 16,6"/></symbol>
  <symbol id="I-block"   viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><line x1="4" y1="4" x2="16" y2="16"/></symbol>
  <symbol id="I-invoice" viewBox="0 0 20 20"><rect x="4" y="2" width="12" height="16" rx="1.5"/><line x1="7" y1="7" x2="13" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/><line x1="7" y1="13" x2="10" y2="13"/><polyline points="12,13 14,15 17,12" stroke-width="1.8"/></symbol>
  <symbol id="I-books"   viewBox="0 0 20 20"><rect x="3" y="3" width="4" height="14" rx="1"/><rect x="8" y="5" width="4" height="12" rx="1"/><path d="M13 7l4 10"/><line x1="12" y1="10" x2="16" y2="10"/></symbol>
  <symbol id="I-clock"   viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><polyline points="10,5 10,10 13.5,13.5"/></symbol>
  <symbol id="I-pay"     viewBox="0 0 20 20"><rect x="2" y="5" width="16" height="11" rx="2"/><line x1="2" y1="9" x2="18" y2="9"/><line x1="6" y1="13" x2="9" y2="13"/></symbol>
  <symbol id="I-code"    viewBox="0 0 20 20"><polyline points="7,6 3,10 7,14"/><polyline points="13,6 17,10 13,14"/><line x1="11" y1="4" x2="9" y2="16"/></symbol>
  <symbol id="I-sync"    viewBox="0 0 20 20"><path d="M3 10a7 7 0 0112.4-4.4L17 7"/><path d="M17 10a7 7 0 01-12.4 4.4L3 13"/><polyline points="15,5 17,7 15,9"/><polyline points="5,11 3,13 5,15"/></symbol>
  <symbol id="I-warn"    viewBox="0 0 20 20"><path d="M10 3L18 17H2z"/><line x1="10" y1="9" x2="10" y2="13"/><line x1="10" y1="15.5" x2="10" y2="15.6" stroke-width="2.5"/></symbol>
  <symbol id="I-shield"  viewBox="0 0 20 20"><path d="M10 2l7 3v5c0 4-3 7-7 8-4-1-7-4-7-8V5z"/><polyline points="7,10 9,12 13,8"/></symbol>
  <symbol id="I-legal"   viewBox="0 0 20 20"><path d="M10 2v16"/><path d="M5 6l-3 4 3 4"/><path d="M15 6l3 4-3 4"/><line x1="5" y1="17" x2="15" y2="17"/></symbol>
  <symbol id="I-trust"   viewBox="0 0 20 20"><path d="M4 7h12M4 10h8M4 13h6"/><rect x="2" y="4" width="16" height="13" rx="1.5"/></symbol>
  <symbol id="I-clarity" viewBox="0 0 20 20"><circle cx="10" cy="10" r="3"/><line x1="10" y1="3" x2="10" y2="4.5"/><line x1="10" y1="15.5" x2="10" y2="17"/><line x1="3" y1="10" x2="4.5" y2="10"/><line x1="15.5" y1="10" x2="17" y2="10"/></symbol>
  <symbol id="I-taxd"    viewBox="0 0 20 20"><path d="M5 4h10M7 4v3l-2 4h10l-2-4V4"/><line x1="10" y1="11" x2="10" y2="16"/><polyline points="7,14 10,17 13,14"/></symbol>
  <symbol id="I-reg"     viewBox="0 0 20 20"><path d="M5 2h10v16l-5-3-5 3z"/><line x1="8" y1="7" x2="12" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/></symbol>
  <symbol id="I-filing"  viewBox="0 0 20 20"><path d="M4 4h12v3H4z"/><path d="M4 7l2 10h8l2-10"/><line x1="10" y1="9" x2="10" y2="14"/><line x1="7.5" y1="11.5" x2="12.5" y2="11.5"/></symbol>
  <symbol id="I-advisory"viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><line x1="10" y1="9" x2="10" y2="14"/><line x1="10" y1="6.5" x2="10" y2="7" stroke-width="2.5"/></symbol>
  <symbol id="I-max"     viewBox="0 0 20 20"><polyline points="10,16 10,8 6,12"/><line x1="10" y1="8" x2="14" y2="12"/><path d="M5 6a5 5 0 0110 0"/><line x1="3" y1="18" x2="17" y2="18"/></symbol>
  <symbol id="I-ongoing" viewBox="0 0 20 20"><circle cx="10" cy="10" r="7.5"/><polyline points="10,5.5 10,10 13,13"/></symbol>
  <symbol id="I-arr-r"   viewBox="0 0 20 20"><polyline points="7,5 13,10 7,15"/></symbol>
  <symbol id="I-arr-l"   viewBox="0 0 20 20"><polyline points="13,5 7,10 13,15"/></symbol>
  <symbol id="I-menu"    viewBox="0 0 20 20"><line x1="3" y1="6" x2="17" y2="6"/><line x1="3" y1="10" x2="17" y2="10"/><line x1="3" y1="14" x2="17" y2="14"/></symbol>
  <symbol id="I-chevd"   viewBox="0 0 20 20"><polyline points="5,8 10,13 15,8"/></symbol>
  <symbol id="I-li"      viewBox="0 0 20 20"><polyline points="5,10 8,13 15,7"/></symbol>
  <symbol id="I-star"    viewBox="0 0 20 20"><polygon points="10,2 12.5,7 18,7.5 14,11.5 15,17 10,14 5,17 6,11.5 2,7.5 7.5,7"/></symbol>
  <symbol id="I-book"    viewBox="0 0 20 20"><path d="M4 2h9l4 4v13H4z"/><polyline points="13,2 13,6 17,6"/><line x1="7" y1="10" x2="13" y2="10"/><line x1="7" y1="13" x2="13" y2="13"/></symbol>
  <symbol id="I-compare" viewBox="0 0 20 20"><line x1="10" y1="2" x2="10" y2="18"/><rect x="2" y="5" width="6" height="10" rx="1.5"/><rect x="12" y="5" width="6" height="10" rx="1.5"/></symbol>
  <symbol id="I-chklist" viewBox="0 0 20 20"><rect x="3" y="2" width="14" height="16" rx="1.5"/><line x1="7" y1="7" x2="13" y2="7"/><line x1="7" y1="10" x2="13" y2="10"/><line x1="7" y1="13" x2="10" y2="13"/><polyline points="11,12 13,14 16,11" stroke-width="1.8"/></symbol>
  <symbol id="I-itc"     viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><line x1="10" y1="7" x2="10" y2="13"/><line x1="7" y1="10" x2="13" y2="10"/></symbol>
  <symbol id="I-dl"      viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><polyline points="10,6 10,10 13,12"/><line x1="6" y1="2" x2="6" y2="4"/><line x1="14" y1="2" x2="14" y2="4"/></symbol>
  <symbol id="I-penalty" viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><line x1="7" y1="7" x2="13" y2="13"/><line x1="13" y1="7" x2="7" y2="13"/></symbol>
  <symbol id="I-dl-arr"  viewBox="0 0 20 20"><path d="M10 3v10"/><polyline points="6,9 10,13 14,9"/><line x1="3" y1="17" x2="17" y2="17"/></symbol>
  <symbol id="I-share"   viewBox="0 0 20 20"><circle cx="15" cy="5" r="2"/><circle cx="5" cy="10" r="2"/><circle cx="15" cy="15" r="2"/><line x1="7" y1="9" x2="13" y2="6"/><line x1="7" y1="11" x2="13" y2="14"/></symbol>
  <symbol id="I-building"viewBox="0 0 20 20"><rect x="3" y="6" width="14" height="12"/><polygon points="1,6 10,2 19,6"/><rect x="8" y="12" width="4" height="6"/><line x1="6" y1="9" x2="8" y2="9"/><line x1="12" y1="9" x2="14" y2="9"/></symbol>
  <symbol id="I-map"     viewBox="0 0 20 20"><polygon points="2,4 7,2 13,4 18,2 18,16 13,18 7,16 2,18"/><line x1="7" y1="2" x2="7" y2="16"/><line x1="13" y1="4" x2="13" y2="18"/></symbol>
  <symbol id="I-startup" viewBox="0 0 20 20"><path d="M10 3l2 4 5 .5-3 3 1 5-5-2-5 2 1-5-3-3 5-.5z"/><line x1="10" y1="10" x2="10" y2="14"/></symbol>
  <symbol id="I-gst"     viewBox="0 0 20 20"><rect x="3" y="5" width="14" height="10" rx="1.5"/><line x1="7" y1="8" x2="13" y2="8"/><line x1="7" y1="12" x2="13" y2="12"/></symbol>
  <symbol id="I-tds"     viewBox="0 0 20 20"><path d="M5 4h10M7 4v3l-2 4h10l-2-4V4"/><circle cx="10" cy="15" r="2"/></symbol>
  <symbol id="I-funding" viewBox="0 0 20 20"><circle cx="10" cy="8" r="3"/><rect x="5" y="11" width="10" height="5" rx="1"/><path d="M3 16l14-6"/></symbol>
  <symbol id="I-llp"     viewBox="0 0 20 20"><rect x="4" y="4" width="12" height="12" rx="1.5"/><line x1="7" y1="8" x2="13" y2="8"/><line x1="7" y1="12" x2="11" y2="12"/></symbol>
  <symbol id="I-msme"    viewBox="0 0 20 20"><path d="M3 5h14v10H3z"/><line x1="6" y1="8" x2="14" y2="8"/><line x1="6" y1="11" x2="12" y2="11"/></symbol>
  <symbol id="I-ppf"     viewBox="0 0 20 20"><rect x="3" y="3" width="14" height="14" rx="2"/><line x1="8" y1="7" x2="12" y2="7"/><line x1="8" y1="10" x2="12" y2="10"/><line x1="8" y1="13" x2="10" y2="13"/></symbol>
  <symbol id="I-car"     viewBox="0 0 20 20"><path d="M3 8l2-4h10l2 4"/><rect x="2" y="8" width="16" height="7" rx="1.5"/><circle cx="6.5" cy="13.5" r="1.5"/><circle cx="13.5" cy="13.5" r="1.5"/></symbol>
  <symbol id="I-nps"     viewBox="0 0 20 20"><path d="M5 5h10v10H5z"/><circle cx="10" cy="10" r="2"/><line x1="10" y1="5" x2="10" y2="3"/><line x1="10" y1="17" x2="10" y2="15"/></symbol>
</svg>

<!-- ══ PROGRESS BAR ══ -->
<div id="pbar-wrap"><div id="pbar"></div></div>

<!-- ══ PAGE HEADER ══ -->
<div class="ph">
  <div class="ph-in">
    <div class="ph-chip">
      <svg width="12" height="12" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><use href="#I-startup"/></svg>
      Knowledge Center · Startup Tax Guide
    </div>
    <h1>Ultimate Startup Tax Guide<br>in India (2026)</h1>
    <p class="ph-sub">Tax Planning, Compliance & Tax Saving Tips for Startups, Entrepreneurs & Small Businesses. Income tax, GST, TDS, Startup India benefits & more.</p>
    <div class="ph-meta">
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-cal"/></svg>Updated January 2026</span>
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg>13 min read</span>
      <span class="ph-mi"><svg viewBox="0 0 20 20"><use href="#I-shield"/></svg>CA Verified</span>
    </div>
  </div>
</div>

<!-- ══ MOBILE BOTTOM NAV ══ -->
<div class="mob-nav" id="mobNav">
  <div class="mob-tgl" onclick="toggleMob()">
    <svg viewBox="0 0 20 20"><use href="#I-menu"/></svg>
    <span class="mob-cur" id="mobCur">On this page</span>
    <svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg>
  </div>
</div>
<div class="mob-panel" id="mobPanel">
  <a class="mob-link" href="#intro"              onclick="closeMob(this,'Introduction')">              <span class="mn">—</span>Introduction</a>
  <a class="mob-link" href="#understanding"      onclick="closeMob(this,'Startup Taxation')">          <span class="mn">01</span>Startup Taxation</a>
  <a class="mob-link" href="#structure"          onclick="closeMob(this,'Business Structure')">        <span class="mn">02</span>Business Structure</a>
  <a class="mob-link" href="#registration"       onclick="closeMob(this,'Register Properly')">         <span class="mn">03</span>Register Properly</a>
  <a class="mob-link" href="#corporate-tax"      onclick="closeMob(this,'Corporate Tax')">             <span class="mn">04</span>Corporate Tax</a>
  <a class="mob-link" href="#startup-exemption"  onclick="closeMob(this,'Startup Exemption')">         <span class="mn">05</span>Startup Exemption</a>
  <a class="mob-link" href="#gst"                onclick="closeMob(this,'GST Compliance')">            <span class="mn">06</span>GST Compliance</a>
  <a class="mob-link" href="#deductions"         onclick="closeMob(this,'Tax Deductions')">            <span class="mn">07</span>Tax Deductions</a>
  <a class="mob-link" href="#accounting"         onclick="closeMob(this,'Accounting Records')">        <span class="mn">08</span>Accounting Records</a>
  <a class="mob-link" href="#tds"                onclick="closeMob(this,'TDS Compliance')">            <span class="mn">09</span>TDS Compliance</a>
  <a class="mob-link" href="#salary"             onclick="closeMob(this,'Founder Salary')">            <span class="mn">10</span>Founder Salary</a>
  <a class="mob-link" href="#mistakes"           onclick="closeMob(this,'Common Mistakes')">           <span class="mn">11</span>Common Mistakes</a>
  <a class="mob-link" href="#advisory"           onclick="closeMob(this,'Professional Advisory')">     <span class="mn">12</span>Professional Advisory</a>
  <a class="mob-link" href="#why-us"             onclick="closeMob(this,'Why Tax Company')">           <span class="mn">13</span>Why Tax Company</a>
  <a class="mob-link" href="#faq"                onclick="closeMob(this,'FAQ')">                       <span class="mn">—</span>FAQ</a>
</div>
<div class="mob-cta-bar" style="display:none" id="mobCtaBar">
  <a href="{{ route('callback.page', ['source' => 'startup-tax-guide']) }}">Request a Callback</a>
</div>

<!-- ══════════════════════════════════════════════════
     3-COLUMN DOC LAYOUT
══════════════════════════════════════════════════ -->
<div class="doc-wrap">

  <!-- ════ LEFT TOC ════ -->
  <aside class="left-col">
    <span class="toc-lbl">On this page</span>
    <nav class="toc-nav" id="tocNav">
      <a href="#intro"              class="tl" data-s="intro">            <span class="tn">—</span>Introduction</a>
      <a href="#understanding"      class="tl" data-s="understanding">    <span class="tn">01</span>Understanding Startup Taxation</a>
      <a href="#structure"          class="tl" data-s="structure">        <span class="tn">02</span>Choose the Right Business Structure</a>
      <a href="#registration"       class="tl" data-s="registration">     <span class="tn">03</span>Register Your Startup Properly</a>
      <a href="#corporate-tax"      class="tl" data-s="corporate-tax">    <span class="tn">04</span>Corporate Tax for Startups</a>
      <a href="#startup-exemption"  class="tl" data-s="startup-exemption"><span class="tn">05</span>Claim Startup Tax Exemption</a>
      <a href="#gst"                class="tl" data-s="gst">              <span class="tn">06</span>Manage GST Compliance</a>
      <a href="#deductions"         class="tl" data-s="deductions">       <span class="tn">07</span>Use Tax Deductions</a>
      <a href="#accounting"         class="tl" data-s="accounting">       <span class="tn">08</span>Maintain Accounting Records</a>
      <a href="#tds"                class="tl" data-s="tds">              <span class="tn">09</span>Understand TDS Compliance</a>
      <a href="#salary"             class="tl" data-s="salary">           <span class="tn">10</span>Plan Tax Efficient Salaries</a>
      <a href="#mistakes"           class="tl" data-s="mistakes">         <span class="tn">11</span>Common Startup Tax Mistakes</a>
      <a href="#advisory"           class="tl" data-s="advisory">         <span class="tn">12</span>Benefits of Professional Advisory</a>
      <a href="#why-us"             class="tl" data-s="why-us">           <span class="tn">13</span>Why The Tax Company</a>
      <div class="toc-div"></div>
      <a href="#faq"                class="tl" data-s="faq">              <span class="tn">—</span>FAQ</a>
    </nav>
    <div class="toc-cta-box">
      <p>Get expert help with startup tax planning</p>
      <a href="{{ route('boc.step1', ['source' => 'startup-tax-guide']) }}" class="toc-cta-btn">📞 Book Free Consultation</a>
    </div>
  </aside>

  <!-- ════ MAIN CONTENT ════ -->
  <main class="main-col">

    <!-- ── INTRO ── -->
    <div class="sec" id="intro">
      <div class="panel">
        <p><strong>Starting a business in India</strong> involves not only innovation and growth but also proper tax planning and compliance. Startups must understand income tax regulations, GST obligations, deductions, and government incentives to operate efficiently and avoid penalties.</p>
        <p>This <strong>Ultimate Startup Tax Guide</strong> by The Tax Company provides practical tax tips, compliance requirements, and tax-saving strategies for startups, entrepreneurs, and small businesses in India.</p>
      </div>
      <div class="hl-strip">
        <div class="hl-strip-ttl">
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" viewBox="0 0 20 20"><use href="#I-startup"/></svg>
          What this guide covers
        </div>
        <div class="g3" style="margin-top:0">
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Startup tax exemptions</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>GST & TDS compliance</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Corporate tax rates</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Business deductions</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Founder salary planning</div>
          <div class="hl-item"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Common mistakes</div>
        </div>
      </div>
      <div class="chips">
        <a href="#structure"          class="chip">Business Structure</a>
        <a href="#startup-exemption"  class="chip">Startup Benefits</a>
        <a href="#gst"                class="chip">GST</a>
        <a href="#tds"                class="chip">TDS</a>
        <a href="#deductions"         class="chip">Deductions</a>
        <a href="#faq"                class="chip">FAQ</a>
      </div>
    </div>

    <!-- ── 01 UNDERSTANDING STARTUP TAXATION ── -->
    <div class="sec" id="understanding">
      <span class="s-lbl">Section 01</span>
      <h2 class="s-ttl">Understanding Startup Taxation in India</h2>
      <div class="panel">
        <p>Startups in India are subject to various taxes depending on their structure and business activities.</p>
        <p><strong>Common taxes applicable to startups include:</strong></p>
        <p>• Income Tax<br>• Goods and Services Tax (GST)<br>• Professional Tax<br>• TDS (Tax Deducted at Source)<br>• Corporate Tax (for companies)</p>
        <p>Understanding these tax obligations helps startups plan finances effectively.</p>
      </div>
    </div>

    <!-- ── 02 CHOOSE THE RIGHT BUSINESS STRUCTURE ── -->
    <div class="sec" id="structure">
      <span class="s-lbl">Section 02</span>
      <h2 class="s-ttl">Choose the Right Business Structure</h2>
      <p class="s-desc">Your business structure significantly affects taxation.</p>
      
      <div class="g2">
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-id"/></svg></div>
          <div class="icard-t">Sole Proprietorship</div>
          <div class="icard-d">Simplest structure. Taxed as personal income.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-legal"/></svg></div>
          <div class="icard-t">Partnership Firm</div>
          <div class="icard-d">Profits taxed at firm level. Partners pay tax on share.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-llp"/></svg></div>
          <div class="icard-t">Limited Liability Partnership (LLP)</div>
          <div class="icard-d">Lower compliance compared to companies. Taxed at 30%.</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-building"/></svg></div>
          <div class="icard-t">Private Limited Company</div>
          <div class="icard-d">Preferred for startups seeking funding. Corporate tax applies.</div>
        </div>
      </div>
      <p class="s-desc">Choosing the right structure can reduce tax burden and improve scalability.</p>
    </div>

    <!-- ── 03 REGISTER YOUR STARTUP PROPERLY ── -->
    <div class="sec" id="registration">
      <span class="s-lbl">Section 03</span>
      <h2 class="s-ttl">Register Your Startup Properly</h2>
      <p class="s-desc">Proper registration ensures tax compliance and business credibility.</p>
      
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-building"/></svg></div><div class="icard-t">Company/LLP Registration</div><div class="icard-d">MCA registration with CIN</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-gst"/></svg></div><div class="icard-t">GST Registration</div><div class="icard-d">If turnover exceeds threshold</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-msme"/></svg></div><div class="icard-t">MSME/Udyam Registration</div><div class="icard-d">Government benefits for small businesses</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-startup"/></svg></div><div class="icard-t">Startup India Registration</div><div class="icard-d">Tax exemptions & funding support</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-legal"/></svg></div><div class="icard-t">Trademark Registration</div><div class="icard-d">Protect brand identity</div></div>
      </div>
      <p class="s-desc">These registrations also unlock government benefits and funding opportunities.</p>
    </div>

    <!-- ── 04 CORPORATE TAX FOR STARTUPS ── -->
    <div class="sec" id="corporate-tax">
      <span class="s-lbl">Section 04 · Tax Rates</span>
      <h2 class="s-ttl">Understand Corporate Tax for Startups</h2>
      <p class="s-desc">Corporate tax rates in India vary depending on the company structure and eligibility.</p>
      
      <div class="rate-strip" style="grid-template-columns:repeat(3,1fr)">
        <div class="rcard">
          <span class="rcard-pct">25%</span>
          <div class="rcard-lbl">Turnover up to ₹400 Cr</div>
          <div class="rcard-d">For companies with turnover below threshold</div>
        </div>
        <div class="rcard">
          <span class="rcard-pct">22%</span>
          <div class="rcard-lbl">New Regime</div>
          <div class="rcard-d">No exemptions/deductions</div>
        </div>
        <div class="rcard">
          <span class="rcard-pct">15%</span>
          <div class="rcard-lbl">Manufacturing Startups</div>
          <div class="rcard-d">For eligible new manufacturing companies</div>
        </div>
      </div>
      
      <div class="panel" style="margin-top:12px">
        <p><strong>For LLPs:</strong> Tax rate of 30% on profits plus surcharge and cess.</p>
        <p><strong>For Sole Proprietorship:</strong> Taxed as per individual income tax slabs.</p>
      </div>
      <p class="s-desc">Understanding corporate tax rates helps founders plan finances effectively.</p>
    </div>

    <!-- ── 05 CLAIM STARTUP TAX EXEMPTION (STARTUP INDIA) ── -->
    <div class="sec" id="startup-exemption">
      <span class="s-lbl">Section 05 · Government Benefits</span>
      <h2 class="s-ttl">Claim Startup Tax Exemption (Startup India)</h2>
      <p class="s-desc">Eligible startups registered under Startup India may receive tax benefits.</p>
      
      <div class="g2">
        <div class="icard" style="border:2px solid var(--ink)">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-taxd"/></svg></div>
          <div class="icard-t">Tax Holiday (Section 80-IAC)</div>
          <div class="icard-d">100% tax exemption for 3 consecutive years within first 10 years</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-chart"/></svg></div>
          <div class="icard-t">Capital Gains Exemption</div>
          <div class="icard-d">Exemption on capital gains reinvested in eligible startups</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-funding"/></svg></div>
          <div class="icard-t">Funding Support</div>
          <div class="icard-d">Access to Fund of Funds and government schemes</div>
        </div>
        <div class="icard">
          <div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg></div>
          <div class="icard-t">Fast Patent Processing</div>
          <div class="icard-d">Expedited patent examination and reduced fees</div>
        </div>
      </div>
      <p class="s-desc">Eligibility depends on innovation and business criteria defined by the government.</p>
    </div>

    <!-- ── 06 MANAGE GST COMPLIANCE ── -->
    <div class="sec" id="gst">
      <span class="s-lbl">Section 06 · GST</span>
      <h2 class="s-ttl">Manage GST Compliance</h2>
      <p class="s-desc">Startups dealing in goods or services may need GST registration.</p>
      
      <div class="kb-stack">
        <div class="kb" id="kb1">
          <div class="kb-hd" onclick="toggleKB('kb1')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-check"/></svg></div>
              <div><div class="kb-t">GST Registration Thresholds</div><div class="kb-s">When is GST mandatory?</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Goods: ₹40 lakh (₹20 lakh for special category states)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Services: ₹20 lakh (₹10 lakh for special category states)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Mandatory for interstate supply</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Required for e-commerce operators</li>
            </ul>
          </div></div>
        </div>
        
        <div class="kb" id="kb2">
          <div class="kb-hd" onclick="toggleKB('kb2')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-clock"/></svg></div>
              <div><div class="kb-t">GST Return Filing</div><div class="kb-s">Monthly or quarterly filings</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>GSTR-1: Monthly/quarterly (outward supplies)</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>GSTR-3B: Monthly summary return</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>GSTR-9: Annual return</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Due dates: 11th, 20th, 30th/31st of month</li>
            </ul>
          </div></div>
        </div>
        
        <div class="kb" id="kb3">
          <div class="kb-hd" onclick="toggleKB('kb3')">
            <div class="kb-left">
              <div class="kb-ico"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div>
              <div><div class="kb-t">Input Tax Credit (ITC)</div><div class="kb-s">Claim tax paid on purchases</div></div>
            </div>
            <div class="kb-chev"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div>
          </div>
          <div class="kb-body"><div class="kb-in">
            <ul>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Claim GST paid on business purchases</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Valid invoices required</li>
              <li class="kb-li"><svg viewBox="0 0 20 20"><use href="#I-li"/></svg>Cannot claim on personal expenses</li>
            </ul>
          </div></div>
        </div>
      </div>
    </div>

    <!-- ── 07 USE TAX DEDUCTIONS TO REDUCE TAX LIABILITY ── -->
    <div class="sec" id="deductions">
      <span class="s-lbl">Section 07 · Save Tax</span>
      <h2 class="s-ttl">Use Tax Deductions to Reduce Tax Liability</h2>
      <p class="s-desc">Startups can reduce tax burden through various deductions.</p>
      
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-ppf"/></svg></div><div class="icard-t">Section 80C</div><div class="icard-d">Investments up to ₹1.5 lakh (PPF, ELSS, etc.)</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-shield"/></svg></div><div class="icard-t">Section 80D</div><div class="icard-d">Health insurance premiums for employees</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg></div><div class="icard-t">Section 24</div><div class="icard-d">Home loan interest deduction</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-building"/></svg></div><div class="icard-t">Business Expenses</div><div class="icard-d">Rent, salaries, equipment, marketing</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-tools"/></svg></div><div class="icard-t">Depreciation</div><div class="icard-d">On assets like computers, furniture, machinery</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-advisory"/></svg></div><div class="icard-t">Professional Fees</div><div class="icard-d">Legal, accounting, consulting expenses</div></div>
      </div>
    </div>

    <!-- ── 08 MAINTAIN PROPER ACCOUNTING RECORDS ── -->
    <div class="sec" id="accounting">
      <span class="s-lbl">Section 08 · Records</span>
      <h2 class="s-ttl">Maintain Proper Accounting Records</h2>
      <p class="s-desc">Accurate accounting helps startups track income, expenses, and taxes.</p>
      
      <div class="g3">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-doc"/></svg></div><div class="icard-t">Sales Invoices</div><div class="icard-d">All revenue transactions</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-receipt"/></svg></div><div class="icard-t">Purchase Bills</div><div class="icard-d">All business expenses</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div><div class="icard-t">Bank Statements</div><div class="icard-d">Monthly reconciliation</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-pay"/></svg></div><div class="icard-t">Expense Receipts</div><div class="icard-d">Supporting documents</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-id"/></svg></div><div class="icard-t">Payroll Records</div><div class="icard-d">Employee salaries and TDS</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-gst"/></svg></div><div class="icard-t">GST Records</div><div class="icard-d">Returns and input tax credit</div></div>
      </div>
      <p class="s-desc">Maintaining organized records simplifies tax filing and compliance.</p>
    </div>

    <!-- ── 09 UNDERSTAND TDS COMPLIANCE ── -->
    <div class="sec" id="tds">
      <span class="s-lbl">Section 09 · TDS</span>
      <h2 class="s-ttl">Understand TDS Compliance</h2>
      <p class="s-desc">Startups must deduct Tax Deducted at Source (TDS) in certain cases.</p>
      
      <div class="tbl-wrap">
        <table class="ttbl">
          <thead><tr><th>Payment Type</th><th>TDS Rate</th><th>Threshold</th></tr></thead>
          <tbody>
            <tr><td>Salary</td><td><b>As per slab</b></td><td>Above exemption limit</td></tr>
            <tr><td>Professional Fees</td><td><b>10%</b></td><td>₹30,000 per transaction</td></tr>
            <tr><td>Contractor Payments</td><td><b>1% or 2%</b></td><td>₹30,000 per transaction</td></tr>
            <tr><td>Rent</td><td><b>10%</b></td><td>₹2,40,000 per year</td></tr>
            <tr><td>Interest</td><td><b>10%</b></td><td>₹5,000 per year</td></tr>
          </tbody>
        </table>
      </div>
      
      <div class="panel" style="margin-top:12px">
        <p><strong>TDS Compliance Steps:</strong></p>
        <p>• Obtain TAN (Tax Deduction Account Number)<br>• Deduct TDS at applicable rates<br>• Deposit TDS by 7th of next month<br>• File TDS returns quarterly<br>• Issue TDS certificates (Form 16/16A)</p>
        <p>Failure to comply with TDS rules may result in penalties.</p>
      </div>
    </div>

    <!-- ── 10 PLAN TAX EFFICIENT SALARIES FOR FOUNDERS ── -->
    <div class="sec" id="salary">
      <span class="s-lbl">Section 10 · Founder Compensation</span>
      <h2 class="s-ttl">Plan Tax Efficient Salaries for Founders</h2>
      <p class="s-desc">Founders can structure their compensation to optimize taxes.</p>
      
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-pay"/></svg></div><div class="icard-t">Basic Salary</div><div class="icard-d">Fully taxable, part of retirement benefits</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-home"/></svg></div><div class="icard-t">House Rent Allowance</div><div class="icard-d">Exemption available if living in rented accommodation</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-plane"/></svg></div><div class="icard-t">Leave Travel Allowance</div><div class="icard-d">Exemption for travel within India</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-car"/></svg></div><div class="icard-t">Reimbursements</div><div class="icard-d">Mobile, internet, fuel (with bills)</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-bank"/></svg></div><div class="icard-t">Dividend Income</div><div class="icard-d">Taxed in hands of shareholders (for companies)</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-nps"/></svg></div><div class="icard-t">Employer NPS Contribution</div><div class="icard-d">Up to 10% of salary deductible</div></div>
      </div>
    </div>

    <!-- ── 11 AVOID COMMON STARTUP TAX MISTAKES ── -->
    <div class="sec" id="mistakes">
      <span class="s-lbl">Section 11 · Avoid These</span>
      <h2 class="s-ttl">Avoid Common Startup Tax Mistakes</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Not Registering for GST</div><div class="icard-d">Operating without GST when mandatory</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Ignoring Tax Deadlines</div><div class="icard-d">Late filing leads to penalties</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Improper Bookkeeping</div><div class="icard-d">Disorganized records cause compliance issues</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Claiming Incorrect Deductions</div><div class="icard-d">Unsupported claims invite scrutiny</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Mixing Personal & Business</div><div class="icard-d">Separate accounts essential</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-warn"/></svg></div><div class="icard-t">Not Filing TDS Returns</div><div class="icard-d">Non-compliance attracts penalties</div></div>
      </div>
    </div>

    <!-- ── 12 BENEFITS OF PROFESSIONAL TAX ADVISORY ── -->
    <div class="sec" id="advisory">
      <span class="s-lbl">Section 12 · Expert Help</span>
      <h2 class="s-ttl">Benefits of Professional Tax Advisory</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-check"/></svg></div><div class="icard-t">Accurate Compliance</div><div class="icard-d">Avoid penalties and notices</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-chart"/></svg></div><div class="icard-t">Better Tax Planning</div><div class="icard-d">Optimize tax liability legally</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-shield"/></svg></div><div class="icard-t">Reduced Penalties</div><div class="icard-d">Timely filing and correct payments</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-clarity"/></svg></div><div class="icard-t">Financial Transparency</div><div class="icard-d">Clear financial picture for investors</div></div>
      </div>
      <p class="s-desc">Professional support allows founders to focus on business growth.</p>
    </div>

    <!-- ── 13 WHY THE TAX COMPANY ── -->
    <div class="sec" id="why-us">
      <span class="s-lbl">Section 13 · Our Services</span>
      <h2 class="s-ttl">Why Choose The Tax Company for Startup Tax Support?</h2>
      <div class="g2">
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-startup"/></svg></div><div class="icard-t">Startup Tax Consultation</div><div class="icard-d">Expert guidance on tax planning</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-filing"/></svg></div><div class="icard-t">Income Tax Filing</div><div class="icard-d">Accurate and timely filing</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-gst"/></svg></div><div class="icard-t">GST Registration & Filing</div><div class="icard-d">Complete GST compliance support</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-building"/></svg></div><div class="icard-t">Business Registration</div><div class="icard-d">Company, LLP, MSME registration</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-advisory"/></svg></div><div class="icard-t">Compliance Advisory</div><div class="icard-d">Ongoing support for startups</div></div>
        <div class="icard"><div class="ico-box"><svg viewBox="0 0 20 20"><use href="#I-funding"/></svg></div><div class="icard-t">Investor-Ready Compliance</div><div class="icard-d">Prepare for due diligence</div></div>
      </div>
    </div>

    <!-- ── FAQ ── -->
    <div class="sec" id="faq">
      <span class="s-lbl">FAQ</span>
      <h2 class="s-ttl">Frequently Asked Questions</h2>
      <div class="faq-wrap">
        <div class="faq open" id="f1">
          <button class="faq-q" onclick="toggleFaq('f1')"><span>What taxes do startups need to pay in India?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Startups in India may be required to pay several types of taxes depending on their structure and operations, including income tax, GST, professional tax, TDS (Tax Deducted at Source), and corporate tax. Compliance requirements vary based on the type of business entity.</div></div>
        </div>
        <div class="faq" id="f2">
          <button class="faq-q" onclick="toggleFaq('f2')"><span>Which business structure is best for tax efficiency in India?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">The most common startup structures are Private Limited Company, LLP (Limited Liability Partnership), and Sole Proprietorship. Private Limited Companies are generally preferred by startups planning to raise funding, while LLPs have relatively simpler compliance requirements.</div></div>
        </div>
        <div class="faq" id="f3">
          <button class="faq-q" onclick="toggleFaq('f3')"><span>What are the tax benefits available for startups in India?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Eligible startups registered under the Startup India initiative can receive benefits such as tax holidays for three consecutive years, capital gains exemptions, and government funding support.</div></div>
        </div>
        <div class="faq" id="f4">
          <button class="faq-q" onclick="toggleFaq('f4')"><span>What is the Startup India tax exemption?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">Startup India provides eligible startups with an income tax exemption for any three consecutive financial years within the first ten years of incorporation, subject to government approval and eligibility criteria.</div></div>
        </div>
        <div class="faq" id="f5">
          <button class="faq-q" onclick="toggleFaq('f5')"><span>Is GST registration required for startups?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
          <div class="faq-body"><div class="faq-in">GST registration is required if a startup's annual turnover exceeds the prescribed threshold or if it sells goods or services across states, operates through e-commerce platforms, or falls under certain regulated categories.</div></div>
        </div>
        <div class="faq-hidden" style="display:none">
          <div class="faq" id="f6">
            <button class="faq-q" onclick="toggleFaq('f6')"><span>Can startups claim business expenses to reduce tax?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Yes, startups can deduct legitimate business expenses such as office rent, employee salaries, marketing expenses, equipment purchases, and professional services while calculating taxable income.</div></div>
          </div>
          <div class="faq" id="f7">
            <button class="faq-q" onclick="toggleFaq('f7')"><span>What is TDS and when should startups deduct it?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">TDS (Tax Deducted at Source) must be deducted by startups when making certain payments such as salary payments, professional fees, contractor payments, and rent payments as per Income Tax rules.</div></div>
          </div>
          <div class="faq" id="f8">
            <button class="faq-q" onclick="toggleFaq('f8')"><span>Do startups need to file income tax returns every year?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Yes, all registered businesses, including startups, must file income tax returns annually, even if the company has not generated profits during the financial year.</div></div>
          </div>
          <div class="faq" id="f9">
            <button class="faq-q" onclick="toggleFaq('f9')"><span>What records should startups maintain for tax compliance?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Startups should maintain proper financial records including sales invoices, purchase bills, bank statements, payroll records, expense receipts, and GST records (if applicable). Accurate records simplify tax filing and ensure compliance.</div></div>
          </div>
          <div class="faq" id="f10">
            <button class="faq-q" onclick="toggleFaq('f10')"><span>How can startups legally reduce their tax liability?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Startups can reduce tax liability by claiming eligible deductions, utilizing government tax benefits, structuring founder salaries efficiently, claiming legitimate business expenses, and maintaining proper financial planning.</div></div>
          </div>
          <div class="faq" id="f11">
            <button class="faq-q" onclick="toggleFaq('f11')"><span>What happens if startups fail to comply with tax regulations?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Non-compliance with tax regulations may result in penalties, interest charges, legal notices, and additional scrutiny from tax authorities.</div></div>
          </div>
          <div class="faq" id="f12">
            <button class="faq-q" onclick="toggleFaq('f12')"><span>Should startups hire a tax consultant?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Hiring a tax professional helps startups with tax planning, compliance management, GST filing, and financial structuring, allowing founders to focus on growing their business.</div></div>
          </div>
          <div class="faq" id="f13">
            <button class="faq-q" onclick="toggleFaq('f13')"><span>Do startups need to maintain accounting records from the beginning?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Yes, maintaining proper accounting records from the beginning is essential for tax compliance, investor reporting, financial planning, and regulatory filings.</div></div>
          </div>
          <div class="faq" id="f14">
            <button class="faq-q" onclick="toggleFaq('f14')"><span>What is presumptive taxation for small businesses?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">Presumptive taxation allows eligible small businesses and professionals to pay tax based on a fixed percentage of turnover, reducing the need for detailed accounting records.</div></div>
          </div>
          <div class="faq" id="f15">
            <button class="faq-q" onclick="toggleFaq('f15')"><span>How can The Tax Company help startups with tax compliance?</span><div class="faq-arr"><svg viewBox="0 0 20 20"><use href="#I-chevd"/></svg></div></button>
            <div class="faq-body"><div class="faq-in">The Tax Company provides comprehensive support for startups including startup tax consultation, income tax filing, GST registration and return filing, business registration services, compliance advisory, and financial guidance. Our experts help startups stay compliant while optimizing their tax strategy.</div></div>
          </div>
        </div>
      </div>
      <button class="faq-view-more" onclick="toggleMoreFAQs(this)">View More</button>
    </div>

    <!-- RELATED GUIDES -->
    <div class="sec" style="border-bottom:none">
      <span class="s-lbl">Knowledge Center</span>
      <h2 class="s-ttl">Startup Tax Tips – Resources & Knowledge Center</h2>
      <div class="guide-grid">
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-book"/></svg>Guide</div><h4>Startup India Registration – Complete Process & Benefits</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-compare"/></svg>Comparison</div><h4>Pvt Ltd vs LLP – Which is Better for Your Startup?</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-chklist"/></svg>Checklist</div><h4>GST Compliance Checklist for Startups</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-itc"/></svg>Tax Saving</div><h4>Tax Deductions Every Startup Should Know</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-dl"/></svg>TDS</div><h4>TDS Guide for Startups – Rates, Due Dates & Returns</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
        <a href="#" class="gcard"><div class="g-tag"><svg viewBox="0 0 20 20"><use href="#I-penalty"/></svg>Compliance</div><h4>Common Tax Penalties Startups Should Avoid</h4><div class="g-read">Read <svg viewBox="0 0 20 20"><use href="#I-arr-r"/></svg></div></a>
      </div>
    </div>

  </main>

  <!-- ════ RIGHT SIDEBAR ════ -->
  <aside class="right-col">
    <div class="r-card">
      <h5>Guide Information</h5>
      <div class="r-row"><span>Reading time</span><span>13 minutes</span></div>
      <div class="r-row"><span>Difficulty</span><span>Beginner to Intermediate</span></div>
      <div class="r-row"><span>Updated</span><span>Jan 2026</span></div>
      <div class="r-row"><span>Sections</span><span>13 + FAQ</span></div>
      <div class="r-row"><span>Reviewed by</span><span>CA Expert</span></div>
    </div>
    <div class="r-card">
      <h5>Quick Actions</h5>
      <a href="#" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-dl-arr"/></svg>Download PDF</a>
      <a href="#" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-share"/></svg>Share this guide</a>
      <a href="#process" class="r-link"><svg viewBox="0 0 20 20"><use href="#I-startup"/></svg>Startup Consultation</a>
    </div>
    <a href="{{ route('boc.step1', ['source' => 'startup-tax-guide']) }}" class="r-cta">📞 Book Consultation</a>
    <a href="{{ route('callback.page', ['source' => 'startup-tax-guide']) }}" class="r-cta-g">Request a Callback</a>
    <div class="r-card" style="margin-top:14px">
      <h5>Quick Facts</h5>
      <div class="r-row"><span>Startup tax holiday</span><span>3 years</span></div>
      <div class="r-row"><span>Corporate tax (new)</span><span>22%</span></div>
      <div class="r-row"><span>LLP tax rate</span><span>30%</span></div>
      <div class="r-row"><span>GST threshold (goods)</span><span>₹40 lakh</span></div>
      <div class="r-row"><span>GST threshold (services)</span><span>₹20 lakh</span></div>
      <div class="r-row"><span>TDS on fees</span><span>10%</span></div>
      <div class="r-row"><span>80C limit</span><span>₹1.5 lakh</span></div>
    </div>
  </aside>

</div><!-- /.doc-wrap -->

<!-- ══ CTA SECTION ══ -->
<div class="cta">
  <h3>Need Tax Help for Your Startup?</h3>
  <p>Our experienced tax professionals can help your startup with registration, tax planning, and compliance.</p>
  <div class="cta-btns">
    <a href="{{ route('boc.step1', ['source' => 'startup-tax-guide']) }}" class="btn-w">📞 Book Consultation</a>
    <a href="{{ route('callback.page', ['source' => 'startup-tax-guide']) }}" class="btn-g">Request a Callback</a>
  </div>
</div>

<footer>
  © 2026 The Tax Company · <b>Startup Tax Guide</b> · All rights reserved
</footer>

<script>
/* ── PROGRESS BAR ── */
window.addEventListener('scroll',()=>{
  const st=document.documentElement.scrollTop;
  const sh=document.documentElement.scrollHeight-document.documentElement.clientHeight;
  document.getElementById('pbar').style.width=(st/sh*100)+'%';
});

/* ── KNOWLEDGE BLOCKS ── */
function toggleKB(id){document.getElementById(id).classList.toggle('open')}

/* ── FAQ ── */
function toggleFaq(id){
  const el=document.getElementById(id),was=el.classList.contains('open');
  document.querySelectorAll('.faq').forEach(f=>f.classList.remove('open'));
  if(!was)el.classList.add('open');
}

/* ── FAQ VIEW MORE TOGGLE ── */
function toggleMoreFAQs(btn){
  var hidden=document.querySelector('.faq-hidden');
  if(!hidden)return;
  if(hidden.style.display==='none'||getComputedStyle(hidden).display==='none'){
    hidden.style.display='block';
    btn.textContent='View Less';
  }else{
    hidden.style.display='none';
    btn.textContent='View More';
  }
}

/* ── SCROLL-LINKED TOC ── */
(function(){
  const secs=document.querySelectorAll('.sec[id]');
  const tls=document.querySelectorAll('.tl');
  const mls=document.querySelectorAll('.mob-link');
  let cur='';
  const map={};
  tls.forEach(a=>{const s=a.getAttribute('data-s');if(s)map[s]=a});
  function setActive(id){
    if(id===cur)return; cur=id;
    tls.forEach(a=>a.classList.remove('active'));
    if(map[id])map[id].classList.add('active');
    mls.forEach(a=>a.classList.toggle('act',a.getAttribute('href')==='#'+id));
    const ce=document.getElementById('mobCur');
    if(ce&&map[id])ce.textContent=map[id].textContent.trim();
  }
  const obs=new IntersectionObserver(es=>{
    es.forEach(e=>{if(e.isIntersecting)setActive(e.target.id)});
  },{rootMargin:'-15% 0px -72% 0px'});
  secs.forEach(s=>obs.observe(s));
})();

/* ── MOBILE NAV ── */
function toggleMob(){document.getElementById('mobPanel').classList.toggle('open')}
function closeMob(link,label){
  document.getElementById('mobPanel').classList.remove('open');
  document.getElementById('mobCur').textContent=label;
}
document.addEventListener('click',function(e){
  const n=document.getElementById('mobNav'),p=document.getElementById('mobPanel');
  if(n&&p&&!n.contains(e.target)&&!p.contains(e.target))p.classList.remove('open');
});
(function(){
  const bar=document.getElementById('mobCtaBar');
  if(!bar)return;
  function onResize(){bar.style.display=window.innerWidth<=900?'flex':'none'}
  onResize(); window.addEventListener('resize',onResize);
})();
</script>

@endsection