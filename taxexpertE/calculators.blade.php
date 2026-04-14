
  <meta charset="UTF-8" />
  <title>Calculators | The Tax Company</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="https://www.thetaxcompany.in/assets/img/6976159071ff1.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
/* ============================================================
   RESET & BASE
   ============================================================ */
*, *::before, *::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --black: #000000;
  --black-surface: #080808;
  --black-card: #0d0d0d;
  --black-elevated: #141414;
  --white: #ffffff;
  --white-90: rgba(255,255,255,0.9);
  --white-60: rgba(255,255,255,0.6);
  --white-30: rgba(255,255,255,0.3);
  --white-12: rgba(255,255,255,0.12);
  --white-06: rgba(255,255,255,0.06);
  --white-03: rgba(255,255,255,0.03);
  --glow-sm: 0 0 12px rgba(255,255,255,0.08), 0 0 30px rgba(255,255,255,0.04);
  --glow-md: 0 0 20px rgba(255,255,255,0.12), 0 0 50px rgba(255,255,255,0.06);
  --glow-lg: 0 0 40px rgba(255,255,255,0.18), 0 0 80px rgba(255,255,255,0.08);
  --border-subtle: 1px solid rgba(255,255,255,0.06);
  --border-mid: 1px solid rgba(255,255,255,0.14);
  --border-bright: 1px solid rgba(255,255,255,0.4);
  --radius-sm: 10px;
  --radius-md: 16px;
  --radius-lg: 22px;
  --radius-xl: 30px;
  --font: 'Montserrat', sans-serif;
  --topbar-h: 56px;
  --navpill-h: 52px;
  --sticky-total: 108px;
  --transition: all 0.22s cubic-bezier(0.2,0,0,1);
}

html { scroll-behavior: smooth; }

body {
  background: var(--black);
  font-family: var(--font);
  color: var(--white);
  -webkit-font-smoothing: antialiased;
  min-height: 100vh;
  /* subtle noise texture */
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
}

.tc-calculators { min-height: 100vh; }
.content-wrapper { display: flex; flex-direction: column; min-height: 100vh; }

/* ============================================================
   SCROLLBAR
   ============================================================ */
::-webkit-scrollbar { width: 4px; height: 4px; }
::-webkit-scrollbar-track { background: transparent; }
::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.15); border-radius: 4px; }
::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.3); }

/* ============================================================
   KEYFRAMES
   ============================================================ */
@keyframes fadeSlideUp {
  from { opacity: 0; transform: translateY(12px); }
  to   { opacity: 1; transform: translateY(0); }
}
@keyframes glowPulse {
  0%, 100% { box-shadow: 0 0 10px rgba(255,255,255,0.06); }
  50%       { box-shadow: 0 0 22px rgba(255,255,255,0.14); }
}
@keyframes shimmer {
  0%   { transform: translateX(-100%); }
  100% { transform: translateX(100%); }
}
@keyframes borderGlow {
  0%, 100% { border-color: rgba(255,255,255,0.08); }
  50%       { border-color: rgba(255,255,255,0.22); }
}
@keyframes staggerIn {
  from { opacity: 0; transform: translateY(8px) scale(0.98); }
  to   { opacity: 1; transform: translateY(0) scale(1); }
}
@keyframes dotPulse {
  0%, 100% { opacity: 1; transform: scale(1); }
  50%       { opacity: 0.5; transform: scale(0.7); }
}

/* ============================================================
   STICKY TOPBAR (brand + global controls in one line)
   ============================================================ */
.main-header {
  position: sticky;
  top: 0;
  z-index: 1200;
  height: var(--topbar-h);
  background: rgba(0,0,0,0.92);
  backdrop-filter: blur(20px) saturate(180%);
  -webkit-backdrop-filter: blur(20px) saturate(180%);
  border-bottom: 1px solid rgba(255,255,255,0.07);
}

.header-inner {
  max-width: 1480px;
  margin: 0 auto;
  padding: 0 20px;
  height: 100%;
  display: flex;
  align-items: center;
  gap: 20px;
}

/* Brand */
.brand {
  flex-shrink: 0;
  display: flex;
  align-items: center;
  gap: 10px;
  text-decoration: none;
}
.brand-icon {
  width: 32px;
  height: 32px;
  border-radius: 8px;
  background: var(--white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  flex-shrink: 0;
  box-shadow: var(--glow-sm);
}
.brand-text {
  font-weight: 800;
  font-size: 14px;
  letter-spacing: -0.3px;
  color: var(--white);
  white-space: nowrap;
}
.brand-sub {
  font-size: 9px;
  color: rgba(255,255,255,0.4);
  font-weight: 500;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  display: block;
  margin-top: -1px;
}

/* divider */
.header-divider {
  width: 1px;
  height: 28px;
  background: rgba(255,255,255,0.1);
  flex-shrink: 0;
}

/* Global controls row (AY + Age + Regime) */
.global-controls {
  display: flex;
  gap: 10px;
  align-items: center;
  flex: 1;
}
.control-item {
  display: flex;
  align-items: center;
  gap: 7px;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: 30px;
  padding: 5px 12px 5px 10px;
  transition: var(--transition);
  cursor: pointer;
}
.control-item:focus-within {
  border-color: rgba(255,255,255,0.3);
  background: rgba(255,255,255,0.07);
  box-shadow: var(--glow-sm);
}
.control-item label {
  font-size: 10px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  color: rgba(255,255,255,0.45);
  white-space: nowrap;
  cursor: pointer;
  flex-shrink: 0;
}
.control-item select,
.control-item input {
  background: transparent;
  border: none;
  color: var(--white);
  font-size: 12px;
  font-weight: 700;
  font-family: var(--font);
  outline: none;
  cursor: pointer;
  min-width: 0;
  padding: 0;
}
.control-item select { max-width: 100px; }
.control-item input  { max-width: 46px; }

/* lock note */
.header-lock {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 10px;
  color: rgba(255,255,255,0.3);
  white-space: nowrap;
  flex-shrink: 0;
}

/* hide old hero markup we don't need */
.header-hero-grid { display: none; }

/* ============================================================
   NAV (sticky below topbar)
   ============================================================ */
.main-nav {
  position: sticky;
  top: var(--topbar-h);
  z-index: 1100;
  height: var(--navpill-h);
  background: rgba(0,0,0,0.88);
  backdrop-filter: blur(16px);
  border-bottom: 1px solid rgba(255,255,255,0.05);
}

.nav-container {
  max-width: 1480px;
  margin: 0 auto;
  padding: 0 20px;
  height: 100%;
  display: flex;
  align-items: center;
  gap: 6px;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
}
.nav-container::-webkit-scrollbar { display: none; }

.nav-btn {
  flex-shrink: 0;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 30px;
  padding: 7px 16px;
  font-size: 11.5px;
  font-weight: 700;
  font-family: var(--font);
  color: rgba(255,255,255,0.55);
  cursor: pointer;
  transition: var(--transition);
  white-space: nowrap;
  letter-spacing: 0.01em;
}
.nav-btn:hover {
  border-color: rgba(255,255,255,0.25);
  color: var(--white);
  background: rgba(255,255,255,0.06);
}
.nav-btn.active {
  background: var(--white);
  color: var(--black);
  border-color: var(--white);
  box-shadow: 0 0 16px rgba(255,255,255,0.18), 0 0 40px rgba(255,255,255,0.06);
}

/* ============================================================
   MAIN APP CONTAINER
   ============================================================ */
.app-container {
  max-width: 1480px;
  margin: 0 auto;
  padding: 22px 20px 40px;
}

/* ============================================================
   CATEGORY SECTIONS
   ============================================================ */
.category-section {
  display: none;
  animation: fadeSlideUp 0.28s ease both;
}
.category-section.active { display: block; }

.category-title {
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.4);
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.category-title::after {
  content: '';
  flex: 1;
  height: 1px;
  background: linear-gradient(to right, rgba(255,255,255,0.1), transparent);
}

/* ============================================================
   CALCULATOR CARDS GRID  (denser: 5 col → 4 → 3 → 2)
   ============================================================ */
.calculator-buttons-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 10px;
}

/* card */
.calculator-button {
  position: relative;
  background: var(--black-card);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: var(--radius-md);
  padding: 16px 14px;
  cursor: pointer;
  transition: var(--transition);
  display: flex;
  flex-direction: column;
  overflow: hidden;
  animation: staggerIn 0.3s ease both;
}
/* shimmer overlay */
.calculator-button::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(105deg, transparent 40%, rgba(255,255,255,0.04) 50%, transparent 60%);
  transform: translateX(-100%);
  transition: transform 0.5s ease;
  border-radius: inherit;
  pointer-events: none;
}
.calculator-button:hover::before { transform: translateX(100%); }

.calculator-button:hover {
  border-color: rgba(255,255,255,0.28);
  background: var(--black-elevated);
  transform: translateY(-3px);
  box-shadow: 0 8px 30px rgba(0,0,0,0.6), 0 0 20px rgba(255,255,255,0.06), 0 0 1px rgba(255,255,255,0.15);
}
.calculator-button:active { transform: translateY(-1px) scale(0.99); }

.card-icon {
  font-size: 20px;
  margin-bottom: 10px;
  display: block;
}
.calculator-button h3 {
  font-size: 12px;
  font-weight: 800;
  line-height: 1.35;
  margin-bottom: 5px;
  letter-spacing: -0.1px;
}
.calculator-button p {
  font-size: 10.5px;
  color: rgba(255,255,255,0.42);
  line-height: 1.45;
  font-weight: 500;
}

/* stagger delay for visual delight */
.calculator-buttons-grid > *:nth-child(1)  { animation-delay: 0.02s; }
.calculator-buttons-grid > *:nth-child(2)  { animation-delay: 0.04s; }
.calculator-buttons-grid > *:nth-child(3)  { animation-delay: 0.06s; }
.calculator-buttons-grid > *:nth-child(4)  { animation-delay: 0.08s; }
.calculator-buttons-grid > *:nth-child(5)  { animation-delay: 0.10s; }
.calculator-buttons-grid > *:nth-child(6)  { animation-delay: 0.12s; }
.calculator-buttons-grid > *:nth-child(7)  { animation-delay: 0.14s; }
.calculator-buttons-grid > *:nth-child(8)  { animation-delay: 0.16s; }
.calculator-buttons-grid > *:nth-child(9)  { animation-delay: 0.18s; }
.calculator-buttons-grid > *:nth-child(10) { animation-delay: 0.20s; }

/* ============================================================
   CALCULATOR DETAIL VIEW
   ============================================================ */
.main-calculators {
  display: none;
  animation: fadeSlideUp 0.22s ease both;
}
.main-calculators.active { display: block; }

.back-button {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: 30px;
  padding: 8px 18px;
  margin-bottom: 20px;
  color: rgba(255,255,255,0.65);
  font-weight: 700;
  font-size: 12px;
  font-family: var(--font);
  cursor: pointer;
  transition: var(--transition);
  letter-spacing: 0.02em;
}
.back-button:hover {
  border-color: rgba(255,255,255,0.4);
  color: var(--white);
  transform: translateX(-3px);
  box-shadow: var(--glow-sm);
}

.calculator-container {
  display: none;
  gap: 20px;
  align-items: flex-start;
  justify-content: center;
  max-width: 900px;
  margin: 0 auto;
}
.calculator-container[style*="display: flex"] { display: flex !important; }

.calculator-card-wrapper {
  flex: 1;
  min-width: 0;
  max-width: 520px;
  width: 100%;
}

/* THE CALCULATOR CARD */
.calculator-card {
  background: var(--black-card);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: 0 0 0 1px rgba(255,255,255,0.03), 0 30px 60px rgba(0,0,0,0.8), var(--glow-sm);
  animation: glowPulse 4s ease infinite;
  /* compact: fits in one viewport scroll on mobile */
  max-height: calc(100vh - var(--sticky-total) - 100px);
  display: flex;
  flex-direction: column;
}

.calculator-card h2 {
  font-size: 16px;
  font-weight: 800;
  padding: 18px 22px 14px;
  border-bottom: 1px solid rgba(255,255,255,0.06);
  background: rgba(255,255,255,0.02);
  letter-spacing: -0.2px;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  gap: 10px;
}
.calculator-card h2::before {
  content: '';
  display: inline-block;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--white);
  box-shadow: 0 0 8px rgba(255,255,255,0.8);
  animation: dotPulse 2s ease infinite;
  flex-shrink: 0;
}

/* Scrollable body */
.calc-scroll-area,
.calculator-card > .input-group,
.calculator-card > .input-row,
.calculator-card > .result-box,
.calculator-card > .inline-cta-group {
  /* handled by the scroll wrapper below */
}

/* We wrap the calculator card inner content in a scroll container */
/* This is done via JS in the original — we style all direct children */
.calculator-card > *:not(h2):not(.calc-sticky-footer) {
  padding-left: 22px;
  padding-right: 22px;
}
.calculator-card > .input-group:first-of-type,
.calculator-card > .input-row:first-of-type {
  margin-top: 16px;
}

/* Create internal scroll area for all non-h2, non-button content */
/* We wrap via overflow on the card */
.calc-body {
  flex: 1;
  overflow-y: auto;
  padding: 16px 22px;
  scrollbar-width: thin;
  scrollbar-color: rgba(255,255,255,0.12) transparent;
}
.calc-body::-webkit-scrollbar { width: 3px; }
.calc-body::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.12); border-radius: 3px; }

/* Input groups */
.input-group {
  margin-bottom: 12px;
}
.input-group label {
  font-size: 9.5px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: rgba(255,255,255,0.38);
  margin-bottom: 6px;
  display: block;
}
.input-group input,
.input-group select {
  width: 100%;
  padding: 10px 14px;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: var(--radius-sm);
  color: var(--white);
  font-size: 13px;
  font-weight: 600;
  font-family: var(--font);
  transition: var(--transition);
  -webkit-appearance: none;
}
.input-group input:focus,
.input-group select:focus {
  border-color: rgba(255,255,255,0.35);
  background: rgba(255,255,255,0.07);
  outline: none;
  box-shadow: 0 0 0 3px rgba(255,255,255,0.04), var(--glow-sm);
}
.input-group input::placeholder { color: rgba(255,255,255,0.2); }

.input-row {
  display: flex;
  gap: 10px;
}
.input-row .half { flex: 1; min-width: 0; }

/* Result box */
.result-box {
  background: rgba(255,255,255,0.03);
  border: 1px solid rgba(255,255,255,0.09);
  border-left: 3px solid rgba(255,255,255,0.7);
  border-radius: var(--radius-sm);
  padding: 14px;
  margin: 14px 0 12px;
  display: none;
  animation: fadeSlideUp 0.2s ease both;
  box-shadow: 0 0 20px rgba(255,255,255,0.03);
}
.result-box.active { display: block; }

.result-box p {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 5px 0;
  font-size: 12.5px;
  border-bottom: 1px dashed rgba(255,255,255,0.06);
  color: rgba(255,255,255,0.75);
}
.result-box p:last-child { border-bottom: none; }
.result-box p strong {
  color: var(--white);
  font-weight: 800;
  font-size: 13px;
}

/* Primary calculate button */
.tc-btn-primary {
  width: 100%;
  background: var(--white);
  color: var(--black);
  border: none;
  border-radius: 30px;
  padding: 13px 24px;
  font-weight: 800;
  font-size: 13px;
  cursor: pointer;
  transition: var(--transition);
  font-family: var(--font);
  letter-spacing: 0.03em;
  position: relative;
  overflow: hidden;
  margin-top: 6px;
}
.tc-btn-primary::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(105deg, transparent 40%, rgba(0,0,0,0.08) 50%, transparent 60%);
  transform: translateX(-100%);
  transition: transform 0.4s ease;
}
.tc-btn-primary:hover::before { transform: translateX(100%); }
.tc-btn-primary:hover {
  background: rgba(255,255,255,0.9);
  transform: translateY(-1px);
  box-shadow: 0 8px 24px rgba(255,255,255,0.16), 0 0 40px rgba(255,255,255,0.08);
}
.tc-btn-primary:active { transform: scale(0.99); }

/* Sticky footer (kept for compatibility) */
.calc-sticky-footer {
  padding: 14px 22px 20px;
  background: rgba(0,0,0,0.4);
  border-top: 1px solid rgba(255,255,255,0.05);
  flex-shrink: 0;
}

/* Side enquiry panel */
.enquiry-form-space {
  width: 280px;
  flex-shrink: 0;
}

.cta-box {
  background: var(--black-card);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: 22px 18px;
  position: sticky;
  top: calc(var(--sticky-total) + 16px);
  display: flex;
  flex-direction: column;
  gap: 10px;
  box-shadow: var(--glow-sm);
}
.cta-box::before {
  content: '💼 Need Help?';
  font-size: 11px;
  font-weight: 800;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.35);
  display: block;
  margin-bottom: 4px;
}

.cta-primary, .cta-secondary {
  display: block;
  text-align: center;
  border-radius: 30px;
  padding: 12px;
  font-weight: 800;
  font-size: 12px;
  font-family: var(--font);
  cursor: pointer;
  transition: var(--transition);
  text-decoration: none;
}
.cta-primary {
  background: var(--white);
  color: var(--black);
  border: 1px solid var(--white);
}
.cta-primary:hover {
  background: rgba(255,255,255,0.88);
  box-shadow: var(--glow-md);
  transform: translateY(-1px);
}
.cta-secondary {
  background: transparent;
  border: 1px solid rgba(255,255,255,0.18);
  color: rgba(255,255,255,0.7);
}
.cta-secondary:hover {
  border-color: rgba(255,255,255,0.4);
  color: var(--white);
  background: rgba(255,255,255,0.05);
}
.cta-trust {
  font-size: 9.5px;
  color: rgba(255,255,255,0.25);
  text-align: center;
  margin-top: 2px;
}

/* Inline CTA (old compat) */
.inline-cta-group {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  margin-top: 14px;
  margin-bottom: 6px;
}
.cta-primary-sm, .cta-secondary-sm {
  flex: 1;
  text-align: center;
  border-radius: 30px;
  padding: 11px 10px;
  font-weight: 800;
  font-size: 12px;
  text-decoration: none;
  transition: var(--transition);
  border: none;
  cursor: pointer;
  font-family: var(--font);
}
.cta-primary-sm { background: var(--white); color: var(--black); }
.cta-primary-sm:hover { background: rgba(255,255,255,0.88); box-shadow: var(--glow-sm); }
.cta-secondary-sm { background: transparent; border: 1px solid rgba(255,255,255,0.2); color: var(--white); }
.cta-secondary-sm:hover { background: rgba(255,255,255,0.07); border-color: rgba(255,255,255,0.4); }
.cta-trust-note { font-size: 9.5px; color: rgba(255,255,255,0.25); text-align: center; margin-top: 8px; }

/* ============================================================
   LEGACY TABLE (master summary)
   ============================================================ */
.tax-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 12px;
  margin: 12px 0;
}
.tax-table td, .tax-table th {
  padding: 8px 10px;
  border-bottom: 1px solid rgba(255,255,255,0.05);
  text-align: left;
}
.tax-table th {
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: rgba(255,255,255,0.4);
  font-weight: 700;
}
.tax-table td:last-child { text-align: right; }
.tax-table th:last-child { text-align: right; }
.final-row td {
  font-weight: 800;
  font-size: 13px;
  background: rgba(255,255,255,0.04);
  border-top: 1px solid rgba(255,255,255,0.12);
}

/* ============================================================
   HIDE OLD HERO / OLD HEADER markup
   ============================================================ */
.hero-left, .hero-control-card, .control-header, .control-note { display: none; }

/* ============================================================
   RESPONSIVE BREAKPOINTS
   ============================================================ */
@media (max-width: 1280px) {
  .calculator-buttons-grid { grid-template-columns: repeat(4, 1fr); }
}
@media (max-width: 960px) {
  .calculator-buttons-grid { grid-template-columns: repeat(3, 1fr); }
  .enquiry-form-space { display: none; }
  .calculator-container { max-width: 100%; }
  .calculator-card-wrapper { max-width: 100%; }
}
@media (max-width: 720px) {
  :root {
    --topbar-h: 100px; /* expands on mobile for 2-row controls */
    --sticky-total: 152px;
  }
  .header-inner { flex-wrap: wrap; gap: 10px; padding: 10px 16px; height: auto; }
  .header-divider { display: none; }
  .global-controls { flex-wrap: nowrap; overflow-x: auto; scrollbar-width: none; gap: 8px; }
  .global-controls::-webkit-scrollbar { display: none; }
  .control-item label { display: none; }  /* hide label text on mobile, keep value */
  .header-lock { display: none; }
  .calculator-buttons-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 8px; }
  .calculator-button { padding: 13px 11px; }
  .card-icon { font-size: 18px; }
  .calculator-button h3 { font-size: 11.5px; }
  .calculator-button p { font-size: 10px; }
  .app-container { padding: 16px 14px 32px; }
  .calculator-card { max-height: none; } /* allow natural height on mobile */
  .input-row { flex-direction: column; gap: 0; }
  .main-nav { height: auto; min-height: var(--navpill-h); }
  .nav-container { padding: 10px 14px; }
  .enquiry-form-space { display: none; }
}
@media (max-width: 400px) {
  .calculator-buttons-grid { gap: 7px; }
  .nav-btn { font-size: 10.5px; padding: 6px 12px; }
}

/* ============================================================
   MISC UTILITY
   ============================================================ */
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
input[type=number] { -moz-appearance: textfield; }

select option { background: #111; color: #fff; }

/* checkbox styling */
.input-group input[type=checkbox] {
  width: auto;
  accent-color: var(--white);
  width: 15px;
  height: 15px;
  cursor: pointer;
  border-radius: 4px;
}
.input-group label[for] { display: inline; cursor: pointer; font-size: 12px; }

/* ============================================================
   GLOW SCAN LINE — decorative atmospheric effect
   ============================================================ */
.tc-calculators::after {
  content: '';
  position: fixed;
  top: 0; left: 0; right: 0;
  height: 1px;
  background: linear-gradient(to right, transparent, rgba(255,255,255,0.06), transparent);
  pointer-events: none;
  z-index: 9999;
}
</style>


<div class="tc-calculators">
<div class="content-wrapper">

  {{-- ========== UNIFIED STICKY TOPBAR ========== --}}
  <header class="main-header">
    <div class="header-inner">
      {{-- Brand --}}
      <a class="brand" href="#">
        <div class="brand-icon">🧾</div>
        <div>
          <span class="brand-text">The Tax Company</span>
          <span class="brand-sub">Financial Toolkit · FY 2024-25</span>
        </div>
      </a>

      <div class="header-divider"></div>

      {{-- Global controls in one row --}}
      <div class="global-controls">
        <div class="control-item">
          <label for="global-ay">Year</label>
          <select id="global-ay">
            <option value="2025-26">2025-26</option>
            <option value="2024-25" selected>2024-25</option>
            <option value="2023-24">2023-24</option>
            <option value="2022-23">2022-23</option>
            <option value="2021-22">2021-22</option>
            <option value="2020-21">2020-21</option>
            <option value="2019-20">2019-20</option>
            <option value="2018-19">2018-19</option>
            <option value="2017-18">2017-18</option>
            <option value="2016-17">2016-17</option>
            <option value="2015-16">2015-16</option>
          </select>
        </div>
        <div class="control-item">
          <label for="global-age">Age</label>
          <input id="global-age" type="number" placeholder="Age" min="0" max="120" value="30">
        </div>
        <div class="control-item">
          <label for="global-regime">Regime</label>
          <select id="global-regime">
            <option value="old">Old</option>
            <option value="new" selected>New</option>
          </select>
        </div>
      </div>

      <div class="header-lock">🔒 Private</div>
    </div>
  </header>

  {{-- ========== NAVIGATION PILLS ========== --}}
  <nav class="main-nav">
    <div class="app-container" style="padding-top:0;padding-bottom:0;">
      <div class="nav-container">
        <button class="nav-btn active" onclick="showCategory('all-individuals')">All Individuals</button>
        <button class="nav-btn" onclick="showCategory('salaried')">Salaried</button>
        <button class="nav-btn" onclick="showCategory('business')">Business</button>
        <button class="nav-btn" onclick="showCategory('gst')">GST</button>
        <button class="nav-btn" onclick="showCategory('loans')">Loans</button>
        <button class="nav-btn" onclick="showCategory('investments')">Investments</button>
        <button class="nav-btn" onclick="showCategory('deductions')">Deductions</button>
        <button class="nav-btn" onclick="showCategory('company')">Company</button>
        <button class="nav-btn" onclick="showCategory('utilities')">Utilities</button>
      </div>
    </div>
  </nav>

  {{-- ========== MAIN CONTENT ========== --}}
  <main class="app-container">

    {{-- CATEGORY SECTIONS --}}
    <div id="category-all-individuals" class="category-section active">
      <h2 class="category-title">Individual Tax Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('income-tax-calculator')">
          <span class="card-icon">💰</span>
          <h3>Income Tax Calculator</h3>
          <p>Calculate total tax liability based on all income sources</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('taxable-income-calculator')">
          <span class="card-icon">📊</span>
          <h3>Taxable Income</h3>
          <p>Net taxable income after deductions and exemptions</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('tax-liability-calculator')">
          <span class="card-icon">⚖️</span>
          <h3>Tax Liability / Refund</h3>
          <p>Final tax payable or refund after TDS</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('advance-tax-calculator')">
          <span class="card-icon">📅</span>
          <h3>Advance Tax</h3>
          <p>Quarterly advance tax installments</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('tax-saving-calculator')">
          <span class="card-icon">💡</span>
          <h3>Tax Saving</h3>
          <p>Savings from investments and deductions</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('regime-compare-calculator')">
          <span class="card-icon">🔄</span>
          <h3>Regime Comparison</h3>
          <p>Old vs new tax regime comparison</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('net-take-home-calculator')">
          <span class="card-icon">🏠</span>
          <h3>Net Take Home</h3>
          <p>Monthly take-home after all deductions</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('loss-setoff-calculator')">
          <span class="card-icon">📉</span>
          <h3>Loss Set-off</h3>
          <p>Set off losses across income sources</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('carry-forward-calculator')">
          <span class="card-icon">📆</span>
          <h3>Carry Forward Loss</h3>
          <p>Track losses carried to future years</p>
        </div>
        <div class="calculator-button" onclick="showCalculator('master-tax-summary-calculator')">
          <span class="card-icon">📋</span>
          <h3>Tax Computation</h3>
          <p>Complete tax computation summary</p>
        </div>
      </div>
    </div>

    <div id="category-salaried" class="category-section">
      <h2 class="category-title">Salaried Employee Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('salary-breakup-calculator')"><span class="card-icon">💼</span><h3>Salary Breakup</h3><p>Detailed CTC component breakdown</p></div>
        <div class="calculator-button" onclick="showCalculator('hra-calculator')"><span class="card-icon">🏢</span><h3>HRA Calculator</h3><p>HRA exemption based on rent and city</p></div>
        <div class="calculator-button" onclick="showCalculator('take-home-salary-calculator')"><span class="card-icon">💵</span><h3>Take Home Salary</h3><p>Monthly and annual take-home salary</p></div>
        <div class="calculator-button" onclick="showCalculator('form-16-calculator')"><span class="card-icon">📄</span><h3>Form-16</h3><p>Form-16 components and tax deductions</p></div>
        <div class="calculator-button" onclick="showCalculator('standard-deduction-calculator')"><span class="card-icon">📏</span><h3>Standard Deduction</h3><p>Tax impact of standard deduction</p></div>
        <div class="calculator-button" onclick="showCalculator('bonus-tax-calculator')"><span class="card-icon">🎁</span><h3>Bonus / Incentive Tax</h3><p>Tax on bonus and incentives</p></div>
      </div>
    </div>

    <div id="category-business" class="category-section">
      <h2 class="category-title">Business &amp; Professional Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('business-tax-calculator')"><span class="card-icon">🏭</span><h3>Business Tax</h3><p>Tax for businesses and professionals</p></div>
        <div class="calculator-button" onclick="showCalculator('presumptive-tax-calculator')"><span class="card-icon">📈</span><h3>Presumptive Tax</h3><p>Tax under presumptive taxation scheme</p></div>
        <div class="calculator-button" onclick="showCalculator('advance-tax-business-calculator')"><span class="card-icon">⏳</span><h3>Advance Tax</h3><p>Advance tax for businesses</p></div>
        <div class="calculator-button" onclick="showCalculator('profit-after-tax-calculator')"><span class="card-icon">📊</span><h3>Profit After Tax</h3><p>Net profit after tax</p></div>
        <div class="calculator-button" onclick="showCalculator('tds-payable-calculator')"><span class="card-icon">🧾</span><h3>TDS Payable</h3><p>TDS on various payments</p></div>
        <div class="calculator-button" onclick="showCalculator('professional-tds-calculator')"><span class="card-icon">👔</span><h3>Professional TDS 194J</h3><p>TDS on professional fees</p></div>
        <div class="calculator-button" onclick="showCalculator('business-depreciation-calculator')"><span class="card-icon">🏗️</span><h3>Business Depreciation</h3><p>Depreciation as per Income Tax Act</p></div>
        <div class="calculator-button" onclick="showCalculator('cash-flow-calculator')"><span class="card-icon">💧</span><h3>Cash Flow</h3><p>Business cash flow statement</p></div>
      </div>
    </div>

    <div id="category-gst" class="category-section">
      <h2 class="category-title">GST Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('gst-calculator')"><span class="card-icon">🧾</span><h3>GST Calculator</h3><p>GST inclusive/exclusive amounts</p></div>
        <div class="calculator-button" onclick="showCalculator('gst-payable-calculator')"><span class="card-icon">💰</span><h3>GST Payable</h3><p>Net GST payable after ITC</p></div>
        <div class="calculator-button" onclick="showCalculator('gst-invoice-calculator')"><span class="card-icon">📃</span><h3>GST Invoice</h3><p>Invoice with full tax breakdown</p></div>
        <div class="calculator-button" onclick="showCalculator('gst-itc-calculator')"><span class="card-icon">🔄</span><h3>Input Tax Credit</h3><p>Available input tax credit</p></div>
        <div class="calculator-button" onclick="showCalculator('gst-rcm-calculator')"><span class="card-icon">↩️</span><h3>Reverse Charge</h3><p>GST under reverse charge mechanism</p></div>
        <div class="calculator-button" onclick="showCalculator('gst-interest-calculator')"><span class="card-icon">⏱️</span><h3>GST Interest</h3><p>Interest on delayed GST payment</p></div>
        <div class="calculator-button" onclick="showCalculator('net-gst-calculator')"><span class="card-icon">📊</span><h3>Net GST Liability</h3><p>Final GST liability calculation</p></div>
      </div>
    </div>

    <div id="category-loans" class="category-section">
      <h2 class="category-title">Loan Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('home-loan-emi-calculator')"><span class="card-icon">🏡</span><h3>Home Loan EMI</h3><p>EMI and total interest on home loan</p></div>
        <div class="calculator-button" onclick="showCalculator('personal-loan-emi-calculator')"><span class="card-icon">💳</span><h3>Personal Loan EMI</h3><p>Personal loan EMI calculator</p></div>
        <div class="calculator-button" onclick="showCalculator('education-loan-calculator')"><span class="card-icon">🎓</span><h3>Education Loan</h3><p>Education loan interest and EMI</p></div>
        <div class="calculator-button" onclick="showCalculator('loan-amortization-calculator')"><span class="card-icon">📅</span><h3>Loan Amortization</h3><p>Full loan amortization schedule</p></div>
        <div class="calculator-button" onclick="showCalculator('prepayment-calculator')"><span class="card-icon">💸</span><h3>Prepayment Savings</h3><p>Savings from loan prepayment</p></div>
        <div class="calculator-button" onclick="showCalculator('interest-vs-principal-calculator')"><span class="card-icon">📉</span><h3>Interest vs Principal</h3><p>EMI breakdown into components</p></div>
        <div class="calculator-button" onclick="showCalculator('loan-cost-calculator')"><span class="card-icon">🧮</span><h3>Total Loan Cost</h3><p>Total cost of loan including interest</p></div>
      </div>
    </div>

    <div id="category-investments" class="category-section">
      <h2 class="category-title">Investment Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('capital-gains-calculator')"><span class="card-icon">📈</span><h3>Capital Gains</h3><p>Capital gains tax on investments</p></div>
        <div class="calculator-button" onclick="showCalculator('cg-indexation-calculator')"><span class="card-icon">📊</span><h3>CG Indexation</h3><p>Indexed capital gains for LTCG</p></div>
        <div class="calculator-button" onclick="showCalculator('property-gains-calculator')"><span class="card-icon">🏘️</span><h3>Property Gains</h3><p>Capital gains on property sale</p></div>
        <div class="calculator-button" onclick="showCalculator('equity-mf-tax-calculator')"><span class="card-icon">📉</span><h3>Equity / MF Tax</h3><p>Tax on equity and mutual funds</p></div>
        <div class="calculator-button" onclick="showCalculator('dividend-tax-calculator')"><span class="card-icon">💹</span><h3>Dividend Tax</h3><p>Tax on dividend income</p></div>
        <div class="calculator-button" onclick="showCalculator('indexation-calculator')"><span class="card-icon">📐</span><h3>Indexation Benefit</h3><p>Indexation benefit on investments</p></div>
        <div class="calculator-button" onclick="showCalculator('investment-returns-calculator')"><span class="card-icon">📈</span><h3>Investment Returns</h3><p>Future value of investments</p></div>
        <div class="calculator-button" onclick="showCalculator('post-tax-return-calculator')"><span class="card-icon">🧾</span><h3>Post Tax Return</h3><p>Net returns after tax</p></div>
      </div>
    </div>

    <div id="category-deductions" class="category-section">
      <h2 class="category-title">Deduction Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('80c-planner-calculator')"><span class="card-icon">📝</span><h3>80C Planner</h3><p>Plan investments under Section 80C</p></div>
        <div class="calculator-button" onclick="showCalculator('80d-calculator')"><span class="card-icon">🏥</span><h3>80D Medical</h3><p>Deduction for health insurance</p></div>
        <div class="calculator-button" onclick="showCalculator('nps-calculator')"><span class="card-icon">🏦</span><h3>NPS Tax Benefit</h3><p>Tax benefits from NPS investment</p></div>
        <div class="calculator-button" onclick="showCalculator('80e-calculator')"><span class="card-icon">🎓</span><h3>80E Education</h3><p>Education loan interest deduction</p></div>
        <div class="calculator-button" onclick="showCalculator('80g-calculator')"><span class="card-icon">❤️</span><h3>80G Donations</h3><p>Deduction for eligible donations</p></div>
        <div class="calculator-button" onclick="showCalculator('senior-citizen-calculator')"><span class="card-icon">👴</span><h3>Senior Citizen</h3><p>Deductions for senior citizens</p></div>
        <div class="calculator-button" onclick="showCalculator('max-tax-saving-calculator')"><span class="card-icon">💡</span><h3>Max Tax Saving</h3><p>Maximum possible tax savings</p></div>
      </div>
    </div>

    <div id="category-company" class="category-section">
      <h2 class="category-title">Company Tax Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('company-tax-calculator')"><span class="card-icon">🏢</span><h3>Company Income Tax</h3><p>Tax calculation for companies</p></div>
        <div class="calculator-button" onclick="showCalculator('llp-tax-calculator')"><span class="card-icon">🤝</span><h3>LLP / Partnership</h3><p>Tax for LLPs and partnerships</p></div>
        <div class="calculator-button" onclick="showCalculator('trust-tax-calculator')"><span class="card-icon">🤲</span><h3>Trust / NGO Tax</h3><p>Tax for trusts and NGOs</p></div>
        <div class="calculator-button" onclick="showCalculator('mat-calculator')"><span class="card-icon">⚖️</span><h3>MAT Calculator</h3><p>Minimum Alternate Tax</p></div>
        <div class="calculator-button" onclick="showCalculator('mat-credit-calculator')"><span class="card-icon">💳</span><h3>MAT Credit</h3><p>MAT credit carry forward</p></div>
        <div class="calculator-button" onclick="showCalculator('amt-calculator')"><span class="card-icon">📊</span><h3>AMT Calculator</h3><p>Alternate Minimum Tax</p></div>
        <div class="calculator-button" onclick="showCalculator('book-profit-calculator')"><span class="card-icon">📚</span><h3>Book Profit</h3><p>Book profit for MAT computation</p></div>
        <div class="calculator-button" onclick="showCalculator('audit-check-calculator')"><span class="card-icon">🔍</span><h3>Audit Applicability</h3><p>Check audit requirement u/s 44AB</p></div>
      </div>
    </div>

    <div id="category-utilities" class="category-section">
      <h2 class="category-title">Utility Calculators</h2>
      <div class="calculator-buttons-grid">
        <div class="calculator-button" onclick="showCalculator('percentage-calculator')"><span class="card-icon">%</span><h3>Percentage</h3><p>Calculate percentages easily</p></div>
        <div class="calculator-button" onclick="showCalculator('inflation-calculator')"><span class="card-icon">📈</span><h3>Inflation Impact</h3><p>Future value considering inflation</p></div>
        <div class="calculator-button" onclick="showCalculator('budget-calculator')"><span class="card-icon">💰</span><h3>Budget Planner</h3><p>Plan your monthly budget</p></div>
        <div class="calculator-button" onclick="showCalculator('retirement-calculator')"><span class="card-icon">🏖️</span><h3>Retirement Corpus</h3><p>Corpus needed for retirement</p></div>
        <div class="calculator-button" onclick="showCalculator('net-worth-calculator')"><span class="card-icon">💎</span><h3>Net Worth</h3><p>Calculate your total net worth</p></div>
        <div class="calculator-button" onclick="showCalculator('savings-goal-calculator')"><span class="card-icon">🎯</span><h3>Savings Goal</h3><p>Monthly savings for financial goals</p></div>
        <div class="calculator-button" onclick="showCalculator('future-value-calculator')"><span class="card-icon">⏳</span><h3>Future Value</h3><p>Future value of investments</p></div>
      </div>
    </div>

    {{-- ===== MAIN CALCULATORS DETAIL VIEW ===== --}}
    <div class="main-calculators">
      <button class="back-button" onclick="showCategoryFromCalculator()">← Back</button>

      {{-- INCOME TAX CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="income-tax-calculator" class="calculator-card">
            <h2>Income Tax Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Salary Income</label><input id="it-salary-income" type="number" placeholder="e.g., 800000"></div>
              <div class="input-group"><label>House Property Income</label><input id="it-house-income" type="number" placeholder="e.g., 120000"></div>
              <div class="input-group"><label>Business Income</label><input id="it-business-income" type="number" placeholder="e.g., 0"></div>
              <div class="input-group"><label>Other Income</label><input id="it-other-income" type="number" placeholder="e.g., 25000"></div>
              <div class="input-row">
                <div class="input-group half"><label>80C Deduction</label><input id="it-80c" type="number" placeholder="Max 1.5L"></div>
                <div class="input-group half"><label>80D Deduction</label><input id="it-80d" type="number" placeholder="Health Ins."></div>
              </div>
              <div class="input-group"><label>NPS Deduction</label><input id="it-nps" type="number" placeholder="Additional 50K"></div>
              <button class="tc-btn-primary" onclick="calculateIncomeTax()">Calculate Tax</button>
              <div id="income-tax-result" class="result-box">
                <p><span>Old Regime Tax</span> <strong>₹<span id="old-regime-tax">0</span></strong></p>
                <p><span>New Regime Tax</span> <strong>₹<span id="new-regime-tax">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space">
          <div class="cta-box">
            <a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a>
            <button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button>
            <p class="cta-trust">✓ 100% Confidential • No Spam</p>
          </div>
        </div>
      </div>

      {{-- TAXABLE INCOME CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="taxable-income-calculator" class="calculator-card">
            <h2>Taxable Income Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Salary</label><input id="ti_salary" type="number" placeholder="Salary"></div>
              <div class="input-group"><label>House Income</label><input id="ti_house" type="number" placeholder="House Income"></div>
              <div class="input-group"><label>Business Income</label><input id="ti_business" type="number" placeholder="Business Income"></div>
              <div class="input-group"><label>Other Income</label><input id="ti_other" type="number" placeholder="Other Income"></div>
              <div class="input-row">
                <div class="input-group half"><label>80C</label><input id="ti_80c" type="number" placeholder="80C"></div>
                <div class="input-group half"><label>80D Self</label><input id="ti_80d" type="number" placeholder="80D Self"></div>
              </div>
              <div class="input-group"><label>80D Parents</label><input id="ti_80d_par" type="number" placeholder="80D Parents"></div>
              <div class="input-group"><label>NPS</label><input id="ti_nps" type="number" placeholder="NPS"></div>
              <div class="input-group"><label>80E Education Loan</label><input id="ti_80e" type="number" placeholder="80E"></div>
              <button class="tc-btn-primary" onclick="calculateTaxableIncome()">Calculate</button>
              <div id="ti_box" class="result-box">
                <p><span>Taxable Income</span> <strong>₹<span id="ti_result">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- TAX LIABILITY CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="tax-liability-calculator" class="calculator-card">
            <h2>Tax Liability / Refund</h2>
            <div class="calc-body">
              <div class="input-group"><label>Tax</label><input id="tl_tax" type="number" placeholder="Tax"></div>
              <div class="input-group"><label>TDS</label><input id="tl_tds" type="number" placeholder="TDS"></div>
              <div class="input-group"><label>Advance Tax</label><input id="tl_adv" type="number" placeholder="Advance Tax"></div>
              <button class="tc-btn-primary" onclick="calculateTaxLiability()">Calculate</button>
              <div id="tl_box" class="result-box"><p><span>Result</span> <strong>₹<span id="tl_result">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- ADVANCE TAX CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="advance-tax-calculator" class="calculator-card">
            <h2>Advance Tax Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Total Tax</label><input id="at_tax" type="number" placeholder="Total Tax"></div>
              <button class="tc-btn-primary" onclick="calculateAdvanceTax()">Calculate</button>
              <div id="at_box" class="result-box">
                <p><span>15% Installment</span> <strong>₹<span id="at_q1">0</span></strong></p>
                <p><span>45% Installment</span> <strong>₹<span id="at_q2">0</span></strong></p>
                <p><span>75% Installment</span> <strong>₹<span id="at_q3">0</span></strong></p>
                <p><span>100% Installment</span> <strong>₹<span id="at_q4">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- TAX SAVING CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="tax-saving-calculator" class="calculator-card">
            <h2>Tax Saving Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Tax Before</label><input id="ts_before" type="number" placeholder="Tax Before"></div>
              <div class="input-group"><label>Tax After</label><input id="ts_after" type="number" placeholder="Tax After"></div>
              <button class="tc-btn-primary" onclick="calculateTaxSaving()">Calculate</button>
              <div id="ts_box" class="result-box"><p><span>Tax Saved</span> <strong>₹<span id="ts_saved">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- REGIME COMPARE CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="regime-compare-calculator" class="calculator-card">
            <h2>Tax Regime Comparison</h2>
            <div class="calc-body">
              <div class="input-group"><label>Taxable Income</label><input id="tr_income" type="number" placeholder="Taxable Income"></div>
              <button class="tc-btn-primary" onclick="calculateRegimeCompare()">Compare</button>
              <div id="tr_box" class="result-box">
                <p><span>Old Regime Tax</span> <strong>₹<span id="tr_old">0</span></strong></p>
                <p><span>New Regime Tax</span> <strong>₹<span id="tr_new">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- NET TAKE HOME CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="net-take-home-calculator" class="calculator-card">
            <h2>Net Take Home Income</h2>
            <div class="calc-body">
              <div class="input-group"><label>CTC</label><input id="nth_ctc" type="number" placeholder="CTC"></div>
              <div class="input-group"><label>PF</label><input id="nth_pf" type="number" placeholder="PF"></div>
              <div class="input-group"><label>Tax</label><input id="nth_tax" type="number" placeholder="Tax"></div>
              <button class="tc-btn-primary" onclick="calculateNetTakeHome()">Calculate</button>
              <div id="nth_box" class="result-box"><p><span>Net Income</span> <strong>₹<span id="nth_result">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- LOSS SETOFF CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="loss-setoff-calculator" class="calculator-card">
            <h2>Loss Set-off Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>STCG Income</label><input id="ls-stcg" type="number" placeholder="STCG Income"></div>
              <div class="input-group"><label>LTCG Income</label><input id="ls-ltcg" type="number" placeholder="LTCG Income"></div>
              <div class="input-group"><label>STCL Loss</label><input id="ls-stcl" type="number" placeholder="STCL Loss"></div>
              <div class="input-group"><label>LTCL Loss</label><input id="ls-ltcl" type="number" placeholder="LTCL Loss"></div>
              <div class="input-group"><label>Business Income</label><input id="ls-business-income" type="number" placeholder="Business Income"></div>
              <div class="input-group"><label>Business Loss</label><input id="ls-business-loss" type="number" placeholder="Business Loss"></div>
              <div class="input-group"><label>House Property Loss</label><input id="ls-house-loss" type="number" placeholder="House Property Loss"></div>
              <button class="tc-btn-primary" onclick="calculateLossSetoff()">Calculate</button>
              <div id="loss-setoff-box" class="result-box" style="display:none;">
                <p><span>Adjusted STCG</span> <strong>₹<span id="ls-stcg-result"></span></strong></p>
                <p><span>Adjusted LTCG</span> <strong>₹<span id="ls-ltcg-result"></span></strong></p>
                <p><span>Adjusted Business Income</span> <strong>₹<span id="ls-business-result"></span></strong></p>
                <p><span>House Loss Allowed</span> <strong>₹<span id="ls-house-result"></span></strong></p>
                <h4>Set-off Notes:</h4>
                <ul id="ls-notes"></ul>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- CARRY FORWARD CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="carry-forward-calculator" class="calculator-card">
            <h2>Carry Forward Loss Tracker</h2>
            <div class="calc-body">
              <div class="input-group"><label>Select Loss Type</label>
                <select id="cf-type">
                  <option value="">Select Loss Type</option>
                  <option value="STCL">Short Term Capital Loss (STCL)</option>
                  <option value="LTCL">Long Term Capital Loss (LTCL)</option>
                  <option value="BUSINESS">Business Loss</option>
                  <option value="HOUSE">House Property Loss</option>
                  <option value="SPECULATION">Speculation Loss</option>
                  <option value="DEPRECIATION">Unabsorbed Depreciation</option>
                </select>
              </div>
              <div class="input-group"><label>Loss Amount</label><input id="cf-amount" type="number" placeholder="Loss Amount"></div>
              <div class="input-group"><label>Assessment Year</label><input id="cf-ay" placeholder="Assessment Year"></div>
              <button class="tc-btn-primary" onclick="addCarryForwardLoss()">Add</button>
              <button class="tc-btn-primary" onclick="viewCarryForwardLoss()" style="margin-top:10px;">View Ledger</button>
              <div id="cf-box" class="result-box"></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- SALARY BREAKUP CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="salary-breakup-calculator" class="calculator-card">
            <h2>Salary Breakup</h2>
            <div class="calc-body">
              <div class="input-group"><label>Annual CTC</label><input id="ctc" type="number" placeholder="Annual CTC"></div>
              <div class="input-group"><label>City</label>
                <select id="sb-city">
                  <option value="non-metro">Non Metro</option>
                  <option value="metro">Metro</option>
                </select>
              </div>
              <button class="tc-btn-primary" onclick="calculateSalaryBreakup()">Calculate</button>
              <div id="salary-breakup-result" class="result-box">
                <p><span>Basic</span> <strong>₹<span id="sb-basic">0</span></strong></p>
                <p><span>HRA</span> <strong>₹<span id="sb-hra">0</span></strong></p>
                <p><span>PF</span> <strong>₹<span id="sb-pf">0</span></strong></p>
                <p><span>Gratuity</span> <strong>₹<span id="sb-gratuity">0</span></strong></p>
                <p><span>Special Allowance</span> <strong>₹<span id="sb-special">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- HRA CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="hra-calculator" class="calculator-card">
            <h2>HRA Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Basic Salary</label><input id="hra-basic" type="number" placeholder="Basic Salary"></div>
              <div class="input-group"><label>DA</label><input id="hra-da" type="number" placeholder="DA"></div>
              <div class="input-group"><label>HRA Received</label><input id="hra-received" type="number" placeholder="HRA Received"></div>
              <div class="input-group"><label>Rent Paid</label><input id="hra-rent" type="number" placeholder="Rent Paid"></div>
              <div class="input-group"><label>City</label>
                <select id="hra-city">
                  <option value="non-metro">Non Metro</option>
                  <option value="metro">Metro</option>
                </select>
              </div>
              <button class="tc-btn-primary" onclick="calculateHRA()">Calculate HRA</button>
              <div id="hra-result" class="result-box">
                <p><span>Exempt</span> <strong>₹<span id="hra-exempt">0</span></strong></p>
                <p><span>Taxable</span> <strong>₹<span id="hra-taxable">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- TAKE HOME SALARY CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="take-home-salary-calculator" class="calculator-card">
            <h2>Take Home Salary Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Annual CTC</label><input id="th-ctc" type="number" placeholder="Annual CTC"></div>
              <div class="input-group"><label>Annual PF</label><input id="th-pf" type="number" placeholder="Annual PF"></div>
              <div class="input-group"><label>Professional Tax</label><input id="th-pt" type="number" placeholder="Professional Tax"></div>
              <div class="input-group"><label>Income Tax</label><input id="th-tax" type="number" placeholder="Income Tax"></div>
              <button class="tc-btn-primary" onclick="calculateTakeHome()">Calculate Take Home</button>
              <div id="take-home-result" class="result-box">
                <p><span>Annual Take Home</span> <strong>₹<span id="th-annual">0</span></strong></p>
                <p><span>Monthly Take Home</span> <strong>₹<span id="th-monthly">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- FORM-16 CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="form-16-calculator" class="calculator-card">
            <h2>Form-16 Tax Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Gross Salary</label><input id="f16-gross" type="number" placeholder="Gross Salary"></div>
              <div class="input-group"><label>HRA Exempt</label><input id="f16-hra-exempt" type="number" placeholder="HRA Exempt"></div>
              <div class="input-group"><label>Standard Deduction</label><input id="f16-std" type="number" placeholder="Standard Deduction"></div>
              <div class="input-group"><label>80C</label><input id="f16-80c" type="number" placeholder="80C"></div>
              <div class="input-group"><label>80D</label><input id="f16-80d" type="number" placeholder="80D"></div>
              <div class="input-group"><label>NPS</label><input id="f16-nps" type="number" placeholder="NPS"></div>
              <div class="input-group"><label>TDS Paid</label><input id="f16-tds" type="number" placeholder="TDS Paid"></div>
              <button class="tc-btn-primary" onclick="calculateForm16()">Calculate Form-16</button>
              <div id="f16-result" class="result-box">
                <p><span>Taxable Income</span> <strong>₹<span id="f16-taxable">0</span></strong></p>
                <p><span>Total Tax</span> <strong>₹<span id="f16-tax">0</span></strong></p>
                <p><span>Refund / Payable</span> <strong>₹<span id="f16-balance">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- STANDARD DEDUCTION CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="standard-deduction-calculator" class="calculator-card">
            <h2>Standard Deduction Impact</h2>
            <div class="calc-body">
              <div class="input-group"><label>Gross Salary</label><input id="sd-gross" type="number" placeholder="Gross Salary"></div>
              <button class="tc-btn-primary" onclick="calculateStandardDeduction()">Calculate Impact</button>
              <div id="sd-result" class="result-box">
                <p><span>Tax Without Standard Deduction</span> <strong>₹<span id="sd-tax-without">0</span></strong></p>
                <p><span>Tax With Standard Deduction</span> <strong>₹<span id="sd-tax-with">0</span></strong></p>
                <p><span>Tax Saved</span> <strong>₹<span id="sd-tax-saved">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- BONUS TAX CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="bonus-tax-calculator" class="calculator-card">
            <h2>Bonus / Incentive Tax</h2>
            <div class="calc-body">
              <div class="input-group"><label>Annual Salary (without bonus)</label><input id="bonus-salary" type="number" placeholder="Annual Salary"></div>
              <div class="input-group"><label>Bonus / Incentive Amount</label><input id="bonus-amount" type="number" placeholder="Bonus Amount"></div>
              <button class="tc-btn-primary" onclick="calculateBonusTax()">Calculate Bonus Tax</button>
              <div id="bonus-tax-result" class="result-box">
                <p><span>Tax on Salary Only</span> <strong>₹<span id="bonus-tax-old">0</span></strong></p>
                <p><span>Tax After Bonus</span> <strong>₹<span id="bonus-tax-new">0</span></strong></p>
                <p><span>Extra Tax Due to Bonus</span> <strong>₹<span id="bonus-tax-extra">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- BUSINESS TAX CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="business-tax-calculator" class="calculator-card">
            <h2>Business Tax Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Gross Profit</label><input id="bt-profit" type="number" placeholder="Gross Profit"></div>
              <div class="input-group"><label>Expenses</label><input id="bt-expenses" type="number" placeholder="Expenses"></div>
              <div class="input-group"><label>Depreciation</label><input id="bt-depreciation" type="number" placeholder="Depreciation"></div>
              <button class="tc-btn-primary" onclick="calculateBusinessTax()">Calculate Tax</button>
              <div id="business-tax-result" class="result-box">
                <p><span>Taxable Income</span> <strong>₹<span id="bt-taxable">0</span></strong></p>
                <p><span>Tax Payable</span> <strong>₹<span id="bt-tax">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- PRESUMPTIVE TAX CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="presumptive-tax-calculator" class="calculator-card">
            <h2>Presumptive Tax</h2>
            <div class="calc-body">
              <div class="input-group"><label>Turnover</label><input id="pt-turnover" type="number" placeholder="Turnover"></div>
              <div class="input-group"><label>Section</label>
                <select id="pt-section">
                  <option value="44AD">44AD</option>
                  <option value="44ADA">44ADA</option>
                </select>
              </div>
              <button class="tc-btn-primary" onclick="calculatePresumptiveTax()">Calculate</button>
              <div id="pt-result" class="result-box">
                <p><span>Presumptive Income</span> <strong>₹<span id="pt-income">0</span></strong></p>
                <p><span>Tax</span> <strong>₹<span id="pt-tax">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- ADVANCE TAX BUSINESS --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="advance-tax-business-calculator" class="calculator-card">
            <h2>Advance Tax Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Total Tax Liability</label><input id="at-tax" type="number" placeholder="Total Tax Liability"></div>
              <button class="tc-btn-primary" onclick="calculateAdvanceTaxBusiness()">Calculate</button>
              <div id="advance-tax-result" class="result-box">
                <p><span>15%</span> <strong>₹<span id="bat-q1">0</span></strong></p>
                <p><span>45%</span> <strong>₹<span id="bat-q2">0</span></strong></p>
                <p><span>75%</span> <strong>₹<span id="bat-q3">0</span></strong></p>
                <p><span>100%</span> <strong>₹<span id="bat-q4">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- PROFIT AFTER TAX --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="profit-after-tax-calculator" class="calculator-card">
            <h2>Profit After Tax</h2>
            <div class="calc-body">
              <div class="input-group"><label>Profit Before Tax</label><input id="pat-profit" type="number" placeholder="Profit Before Tax"></div>
              <div class="input-group"><label>Tax</label><input id="pat-tax" type="number" placeholder="Tax"></div>
              <button class="tc-btn-primary" onclick="calculatePAT()">Calculate</button>
              <div id="pat-box" class="result-box"><p><span>Profit After Tax</span> <strong>₹<span id="pat-result">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- TDS PAYABLE --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="tds-payable-calculator" class="calculator-card">
            <h2>TDS Payable</h2>
            <div class="calc-body">
              <div class="input-group"><label>Payment Amount</label><input id="tds-income" type="number" placeholder="Payment Amount"></div>
              <div class="input-group"><label>TDS %</label><input id="tds-rate" type="number" placeholder="TDS %"></div>
              <button class="tc-btn-primary" onclick="calculateTDSPayable()">Calculate</button>
              <div id="tds-box" class="result-box"><p><span>TDS</span> <strong>₹<span id="tds-result">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- PROFESSIONAL TDS --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="professional-tds-calculator" class="calculator-card">
            <h2>Professional TDS (194J)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Professional Fee</label><input id="pro-fee" type="number" placeholder="Professional Fee"></div>
              <button class="tc-btn-primary" onclick="calculateProfessionalTDS()">Calculate</button>
              <div id="pro-box" class="result-box"><p><span>TDS</span> <strong>₹<span id="pro-tds">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- BUSINESS DEPRECIATION --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="business-depreciation-calculator" class="calculator-card">
            <h2>Business Depreciation (Section 32)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Opening WDV</label><input id="dep-opening" type="number" placeholder="Opening WDV"></div>
              <div class="input-group"><label>Additions During Year</label><input id="dep-addition" type="number" placeholder="Additions During Year"></div>
              <div class="input-group"><label>Sale / Disposal</label><input id="dep-sale" type="number" placeholder="Sale / Disposal"></div>
              <div class="input-group"><label>Depreciation Rate</label>
                <select id="dep-rate">
                  <option value="15">Plant &amp; Machinery – 15%</option>
                  <option value="10">Furniture – 10%</option>
                  <option value="40">Computer – 40%</option>
                </select>
              </div>
              <div class="input-group"><label>Usage Period</label>
                <select id="dep-days">
                  <option value="full">Used ≥ 180 days</option>
                  <option value="half">Used &lt; 180 days</option>
                </select>
              </div>
              <button class="tc-btn-primary" onclick="calculateDepreciation()">Calculate Depreciation</button>
              <div id="dep-box" class="result-box">
                <p><span>Depreciation</span> <strong>₹<span id="dep-amount">0</span></strong></p>
                <p><span>Closing WDV</span> <strong>₹<span id="dep-closing">0</span></strong></p>
                <p><span>Unabsorbed Depreciation</span> <strong>₹<span id="dep-unabsorbed">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- CASH FLOW --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="cash-flow-calculator" class="calculator-card">
            <h2>Cash Flow Statement</h2>
            <div class="calc-body">
              <div class="input-group"><label>Opening Cash</label><input id="cf-opening" type="number" placeholder="Opening Cash"></div>
              <div class="input-group"><label>Receipts</label><input id="cf-receipts" type="number" placeholder="Receipts"></div>
              <div class="input-group"><label>Expenses</label><input id="cf-expenses" type="number" placeholder="Expenses"></div>
              <div class="input-group"><label>Tax</label><input id="cf-tax" type="number" placeholder="Tax"></div>
              <div class="input-group"><label>Loan Payments</label><input id="cf-loan" type="number" placeholder="Loan Payments"></div>
              <div class="input-group"><label>Investments</label><input id="cf-investment" type="number" placeholder="Investments"></div>
              <button class="tc-btn-primary" onclick="calculateCashFlow()">Calculate</button>
              <div id="cash-flow-result" class="result-box">
                <p><span>Cash In</span> <strong>₹<span id="cf-cash-in">0</span></strong></p>
                <p><span>Cash Out</span> <strong>₹<span id="cf-cash-out">0</span></strong></p>
                <p><span>Net Cash Flow</span> <strong>₹<span id="cf-net">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- GST CALCULATOR --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="gst-calculator" class="calculator-card">
            <h2>GST Inclusive / Exclusive</h2>
            <div class="calc-body">
              <div class="input-group"><label>Amount</label><input id="gst-amount" type="number" placeholder="Amount"></div>
              <div class="input-group"><label>GST %</label><input id="gst-rate" type="number" placeholder="GST %"></div>
              <div class="input-group"><label>Mode</label>
                <select id="gst-mode">
                  <option value="exclusive">Exclusive</option>
                  <option value="inclusive">Inclusive</option>
                </select>
              </div>
              <button class="tc-btn-primary" onclick="calculateGST()">Calculate GST</button>
              <div id="gst-result" class="result-box">
                <p><span>Base Amount</span> <strong>₹<span id="gst-base">0</span></strong></p>
                <p><span>GST Amount</span> <strong>₹<span id="gst-tax">0</span></strong></p>
                <p><span>Total Amount</span> <strong>₹<span id="gst-total">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- GST PAYABLE --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="gst-payable-calculator" class="calculator-card">
            <h2>GST Payable Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Output GST</label><input id="gst-output" type="number" placeholder="Output GST"></div>
              <div class="input-group"><label>Input Tax Credit (ITC)</label><input id="gst-itc" type="number" placeholder="ITC"></div>
              <button class="tc-btn-primary" onclick="calculateGSTPayable()">Calculate GST Payable</button>
              <div id="gst-payable-box" class="result-box"><p><span>GST Payable</span> <strong>₹<span id="gst-payable">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- GST INVOICE --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="gst-invoice-calculator" class="calculator-card">
            <h2>GST Invoice Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Invoice Amount</label><input id="inv-amount" type="number" placeholder="Invoice Amount"></div>
              <div class="input-group"><label>GST %</label><input id="inv-rate" type="number" placeholder="GST %"></div>
              <button class="tc-btn-primary" onclick="calculateGSTInvoice()">Generate Invoice</button>
              <div id="gst-invoice-result" class="result-box">
                <p><span>GST</span> <strong>₹<span id="inv-gst">0</span></strong></p>
                <p><span>Total Invoice</span> <strong>₹<span id="inv-total">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- GST ITC --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="gst-itc-calculator" class="calculator-card">
            <h2>GST Input Tax Credit</h2>
            <div class="calc-body">
              <div class="input-group"><label>Purchase Amount</label><input id="itc-purchase" type="number" placeholder="Purchase Amount"></div>
              <div class="input-group"><label>GST %</label><input id="itc-rate" type="number" placeholder="GST %"></div>
              <button class="tc-btn-primary" onclick="calculateGSTITC()">Calculate ITC</button>
              <div id="gst-itc-box" class="result-box"><p><span>Available ITC</span> <strong>₹<span id="itc-value">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- GST RCM --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="gst-rcm-calculator" class="calculator-card">
            <h2>GST Reverse Charge (RCM)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Supply Amount</label><input id="rcm-amount" type="number" placeholder="Supply Amount"></div>
              <div class="input-group"><label>GST %</label><input id="rcm-rate" type="number" placeholder="GST %"></div>
              <button class="tc-btn-primary" onclick="calculateGSTRCM()">Calculate RCM</button>
              <div id="gst-rcm-box" class="result-box"><p><span>GST Under RCM</span> <strong>₹<span id="rcm-gst">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- GST INTEREST --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="gst-interest-calculator" class="calculator-card">
            <h2>GST Interest Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Tax Amount</label><input id="int-tax" type="number" placeholder="Tax Amount"></div>
              <div class="input-group"><label>Delay Days</label><input id="int-days" type="number" placeholder="Delay Days"></div>
              <button class="tc-btn-primary" onclick="calculateGSTInterest()">Calculate Interest</button>
              <div id="gst-interest-box" class="result-box"><p><span>Interest Payable</span> <strong>₹<span id="gst-interest">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- NET GST --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="net-gst-calculator" class="calculator-card">
            <h2>Net GST Liability</h2>
            <div class="calc-body">
              <div class="input-group"><label>Output GST</label><input id="net-output" type="number" placeholder="Output GST"></div>
              <div class="input-group"><label>ITC</label><input id="net-itc" type="number" placeholder="ITC"></div>
              <div class="input-group"><label>Interest</label><input id="net-interest" type="number" placeholder="Interest"></div>
              <button class="tc-btn-primary" onclick="calculateGSTNet()">Calculate Net GST</button>
              <div id="gst-net-box" class="result-box"><p><span>Net GST Liability</span> <strong>₹<span id="gst-net">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- HOME LOAN EMI --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="home-loan-emi-calculator" class="calculator-card">
            <h2>Home Loan EMI Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Loan Amount</label><input id="hl-principal" type="number" placeholder="Loan Amount"></div>
              <div class="input-group"><label>Interest Rate %</label><input id="hl-rate" type="number" placeholder="Interest Rate %"></div>
              <div class="input-group"><label>Tenure (Years)</label><input id="hl-years" type="number" placeholder="Tenure (Years)"></div>
              <button class="tc-btn-primary" onclick="calculateHomeLoanEMI()">Calculate EMI</button>
              <div id="hl-box" class="result-box"><p><span>Monthly EMI</span> <strong>₹<span id="hl-emi">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- PERSONAL LOAN EMI --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="personal-loan-emi-calculator" class="calculator-card">
            <h2>Personal Loan EMI Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Loan Amount</label><input id="pl-principal" type="number" placeholder="Loan Amount"></div>
              <div class="input-group"><label>Interest Rate %</label><input id="pl-rate" type="number" placeholder="Interest Rate %"></div>
              <div class="input-group"><label>Tenure (Months)</label><input id="pl-months" type="number" placeholder="Tenure (Months)"></div>
              <button class="tc-btn-primary" onclick="calculatePersonalLoanEMI()">Calculate EMI</button>
              <div id="pl-box" class="result-box"><p><span>Monthly EMI</span> <strong>₹<span id="pl-emi">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- EDUCATION LOAN --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="education-loan-calculator" class="calculator-card">
            <h2>Education Loan Interest</h2>
            <div class="calc-body">
              <div class="input-group"><label>Loan Amount</label><input id="el-principal" type="number" placeholder="Loan Amount"></div>
              <div class="input-group"><label>Interest Rate %</label><input id="el-rate" type="number" placeholder="Interest Rate %"></div>
              <div class="input-group"><label>Tenure (Years)</label><input id="el-years" type="number" placeholder="Tenure (Years)"></div>
              <button class="tc-btn-primary" onclick="calculateEducationLoan()">Calculate Interest</button>
              <div id="el-box" class="result-box"><p><span>Total Interest</span> <strong>₹<span id="el-interest">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- LOAN AMORTIZATION --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="loan-amortization-calculator" class="calculator-card">
            <h2>Loan Amortization Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Loan Amount</label><input id="am-principal" type="number" placeholder="Loan Amount"></div>
              <div class="input-group"><label>Interest Rate %</label><input id="am-rate" type="number" placeholder="Interest Rate %"></div>
              <div class="input-group"><label>Tenure (Months)</label><input id="am-months" type="number" placeholder="Tenure (Months)"></div>
              <button class="tc-btn-primary" onclick="calculateAmortization()">Calculate</button>
              <div id="am-box" class="result-box"><p><span>Monthly EMI</span> <strong>₹<span id="am-emi">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- PREPAYMENT --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="prepayment-calculator" class="calculator-card">
            <h2>Prepayment Savings Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Monthly EMI</label><input id="pp-emi" type="number" placeholder="Monthly EMI"></div>
              <div class="input-group"><label>Remaining Months</label><input id="pp-months" type="number" placeholder="Remaining Months"></div>
              <div class="input-group"><label>Prepayment Amount</label><input id="pp-amount" type="number" placeholder="Prepayment Amount"></div>
              <button class="tc-btn-primary" onclick="calculatePrepayment()">Calculate Savings</button>
              <div id="pp-box" class="result-box"><p><span>Interest Saved</span> <strong>₹<span id="pp-saved">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- INTEREST VS PRINCIPAL --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="interest-vs-principal-calculator" class="calculator-card">
            <h2>Interest vs Principal</h2>
            <div class="calc-body">
              <div class="input-group"><label>EMI Amount</label><input id="ip-emi" type="number" placeholder="EMI Amount"></div>
              <div class="input-group"><label>Interest Component</label><input id="ip-interest" type="number" placeholder="Interest Component"></div>
              <button class="tc-btn-primary" onclick="calculateInterestVsPrincipal()">Calculate</button>
              <div id="ip-box" class="result-box"><p><span>Principal Component</span> <strong>₹<span id="ip-principal">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- LOAN COST --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="loan-cost-calculator" class="calculator-card">
            <h2>Total Loan Cost Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Monthly EMI</label><input id="lc-emi" type="number" placeholder="Monthly EMI"></div>
              <div class="input-group"><label>Total Months</label><input id="lc-months" type="number" placeholder="Total Months"></div>
              <div class="input-group"><label>Loan Amount</label><input id="lc-principal" type="number" placeholder="Loan Amount"></div>
              <button class="tc-btn-primary" onclick="calculateLoanCost()">Calculate Loan Cost</button>
              <div id="lc-box" class="result-box">
                <p><span>Total Paid</span> <strong>₹<span id="lc-total">0</span></strong></p>
                <p><span>Total Interest</span> <strong>₹<span id="lc-interest">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- CAPITAL GAINS --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="capital-gains-calculator" class="calculator-card">
            <h2>Capital Gains Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Buy Price</label><input id="cg-buy" type="number" placeholder="Buy Price"></div>
              <div class="input-group"><label>Sell Price</label><input id="cg-sell" type="number" placeholder="Sell Price"></div>
              <div class="input-group"><label>Type</label>
                <select id="cg-type">
                  <option value="stcg">Short Term</option>
                  <option value="ltcg">Long Term</option>
                </select>
              </div>
              <button class="tc-btn-primary" onclick="calculateCapitalGains()">Calculate</button>
              <div id="cg-box" class="result-box">
                <p><span>Capital Gain</span> <strong>₹<span id="cg-gain">0</span></strong></p>
                <p><span>Tax Payable</span> <strong>₹<span id="cg-tax">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- CG INDEXATION --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="cg-indexation-calculator" class="calculator-card">
            <h2>Capital Gains Indexation</h2>
            <div class="calc-body">
              <div class="input-group"><label>Purchase Price</label><input id="idx-buy" type="number" placeholder="Purchase Price"></div>
              <div class="input-group"><label>Sale Price</label><input id="idx-sell" type="number" placeholder="Sale Price"></div>
              <div class="input-group"><label>Purchase Year CII</label><input id="idx-buy-cii" type="number" placeholder="Purchase Year CII"></div>
              <div class="input-group"><label>Sale Year CII</label><input id="idx-sell-cii" type="number" placeholder="Sale Year CII"></div>
              <button class="tc-btn-primary" onclick="calculateCGIndexation()">Calculate Indexed Gain</button>
              <div id="idx-box" class="result-box">
                <p><span>Indexed Cost</span> <strong>₹<span id="idx-cost">0</span></strong></p>
                <p><span>LTCG</span> <strong>₹<span id="idx-gain">0</span></strong></p>
                <p><span>Tax @20%</span> <strong>₹<span id="idx-tax">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- PROPERTY GAINS --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="property-gains-calculator" class="calculator-card">
            <h2>Property Capital Gains</h2>
            <div class="calc-body">
              <div class="input-group"><label>Purchase Price</label><input id="pg-buy" type="number" placeholder="Purchase Price"></div>
              <div class="input-group"><label>Sale Price</label><input id="pg-sell" type="number" placeholder="Sale Price"></div>
              <div class="input-group"><label>Expenses / Brokerage</label><input id="pg-exp" type="number" placeholder="Expenses / Brokerage"></div>
              <button class="tc-btn-primary" onclick="calculatePropertyGains()">Calculate</button>
              <div id="pg-box" class="result-box">
                <p><span>Capital Gain</span> <strong>₹<span id="pg-gain">0</span></strong></p>
                <p><span>Tax Payable</span> <strong>₹<span id="pg-tax">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- EQUITY MF TAX --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="equity-mf-tax-calculator" class="calculator-card">
            <h2>Equity / MF Tax</h2>
            <div class="calc-body">
              <div class="input-group"><label>Capital Gain Amount</label><input id="eq-gain" type="number" placeholder="Capital Gain Amount"></div>
              <button class="tc-btn-primary" onclick="calculateEquityMFTax()">Calculate Tax</button>
              <div id="eq-box" class="result-box"><p><span>Tax Payable</span> <strong>₹<span id="eq-tax">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- DIVIDEND TAX --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="dividend-tax-calculator" class="calculator-card">
            <h2>Dividend Tax Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Dividend Amount</label><input id="div-amount" type="number" placeholder="Dividend Amount"></div>
              <div class="input-group"><label>Your Tax Slab %</label><input id="div-rate" type="number" placeholder="Your Tax Slab %"></div>
              <button class="tc-btn-primary" onclick="calculateDividendTax()">Calculate</button>
              <div id="div-box" class="result-box"><p><span>Tax Payable</span> <strong>₹<span id="div-tax">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- INDEXATION --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="indexation-calculator" class="calculator-card">
            <h2>Indexation Benefit Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Purchase Cost</label><input id="ind-buy" type="number" placeholder="Purchase Cost"></div>
              <div class="input-group"><label>CII Purchase Year</label><input id="ind-cii-buy" type="number" placeholder="CII Purchase Year"></div>
              <div class="input-group"><label>CII Sale Year</label><input id="ind-cii-sell" type="number" placeholder="CII Sale Year"></div>
              <button class="tc-btn-primary" onclick="calculateIndexation()">Calculate</button>
              <div id="ind-box" class="result-box"><p><span>Indexed Cost</span> <strong>₹<span id="ind-cost">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- INVESTMENT RETURNS --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="investment-returns-calculator" class="calculator-card">
            <h2>Investment Returns Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Investment Amount</label><input id="ir-principal" type="number" placeholder="Investment Amount"></div>
              <div class="input-group"><label>Annual Return %</label><input id="ir-rate" type="number" placeholder="Annual Return %"></div>
              <div class="input-group"><label>Years</label><input id="ir-years" type="number" placeholder="Years"></div>
              <button class="tc-btn-primary" onclick="calculateInvestmentReturns()">Calculate</button>
              <div id="ir-box" class="result-box"><p><span>Future Value</span> <strong>₹<span id="ir-fv">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- POST TAX RETURN --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="post-tax-return-calculator" class="calculator-card">
            <h2>Post Tax Return Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Total Return</label><input id="ptr-return" type="number" placeholder="Total Return"></div>
              <div class="input-group"><label>Tax Paid</label><input id="ptr-tax" type="number" placeholder="Tax Paid"></div>
              <button class="tc-btn-primary" onclick="calculatePostTaxReturn()">Calculate</button>
              <div id="ptr-box" class="result-box"><p><span>Net Return</span> <strong>₹<span id="ptr-net">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- 80C PLANNER --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="80c-planner-calculator" class="calculator-card">
            <h2>80C Investment Planner</h2>
            <div class="calc-body">
              <div class="input-group"><label>PPF</label><input id="c-ppf" type="number" placeholder="PPF"></div>
              <div class="input-group"><label>ELSS</label><input id="c-elss" type="number" placeholder="ELSS"></div>
              <div class="input-group"><label>LIC Premium</label><input id="c-lic" type="number" placeholder="LIC Premium"></div>
              <div class="input-group"><label>Tax Saving FD</label><input id="c-fd" type="number" placeholder="Tax Saving FD"></div>
              <button class="tc-btn-primary" onclick="calculate80CPlanner()">Calculate</button>
              <div id="c-box" class="result-box">
                <p><span>Total Investment</span> <strong>₹<span id="c-total">0</span></strong></p>
                <p><span>Allowed Deduction</span> <strong>₹<span id="c-allowed">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- 80D --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="80d-calculator" class="calculator-card">
            <h2>80D Medical Insurance</h2>
            <div class="calc-body">
              <div class="input-group"><label>Self / Family Premium</label><input id="d-self" type="number" placeholder="Self / Family Premium"></div>
              <div class="input-group"><label>Parents Premium</label><input id="d-parents" type="number" placeholder="Parents Premium"></div>
              <div class="input-group"><input type="checkbox" id="d-senior"> <label for="d-senior">Parents are Senior Citizens</label></div>
              <button class="tc-btn-primary" onclick="calculate80D()">Calculate</button>
              <div id="d-box" class="result-box"><p><span>Allowed Deduction</span> <strong>₹<span id="d-allowed">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- NPS --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="nps-calculator" class="calculator-card">
            <h2>NPS Tax Benefit Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Employer Contribution</label><input id="nps-emp" type="number" placeholder="Employer Contribution"></div>
              <div class="input-group"><label>Self Contribution</label><input id="nps-self" type="number" placeholder="Self Contribution"></div>
              <button class="tc-btn-primary" onclick="calculateNPS()">Calculate</button>
              <div id="nps-box" class="result-box"><p><span>Allowed Deduction</span> <strong>₹<span id="nps-allowed">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- 80E --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="80e-calculator" class="calculator-card">
            <h2>Education Loan Interest (80E)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Interest Paid</label><input id="e-interest" type="number" placeholder="Interest Paid"></div>
              <button class="tc-btn-primary" onclick="calculate80E()">Calculate</button>
              <div id="e-box" class="result-box"><p><span>Allowed Deduction</span> <strong>₹<span id="e-allowed">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- 80G --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="80g-calculator" class="calculator-card">
            <h2>Donation Deduction (80G)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Donation Amount</label><input id="g-amount" type="number" placeholder="Donation Amount"></div>
              <div class="input-group"><label>Eligible % (50 or 100)</label><input id="g-rate" type="number" placeholder="50 or 100"></div>
              <button class="tc-btn-primary" onclick="calculate80G()">Calculate</button>
              <div id="g-box" class="result-box"><p><span>Allowed Deduction</span> <strong>₹<span id="g-allowed">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- SENIOR CITIZEN --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="senior-citizen-calculator" class="calculator-card">
            <h2>Senior Citizen Deduction</h2>
            <div class="calc-body">
              <div class="input-group"><label>Total Income</label><input id="s-income" type="number" placeholder="Total Income"></div>
              <button class="tc-btn-primary" onclick="calculateSeniorCitizen()">Calculate</button>
              <div id="s-box" class="result-box"><p><span>Basic Exemption Limit</span> <strong>₹<span id="s-exempt">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- MAX TAX SAVING --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="max-tax-saving-calculator" class="calculator-card">
            <h2>Maximum Tax Saving</h2>
            <div class="calc-body">
              <div class="input-group"><label>Your Tax Slab %</label><input id="m-slab" type="number" placeholder="Your Tax Slab %"></div>
              <button class="tc-btn-primary" onclick="calculateMaxTaxSaving()">Calculate</button>
              <div id="m-box" class="result-box">
                <p><span>Maximum Deduction</span> <strong>₹<span id="m-total">0</span></strong></p>
                <p><span>Tax Saved</span> <strong>₹<span id="m-saved">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- COMPANY TAX --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="company-tax-calculator" class="calculator-card">
            <h2>Company Income Tax</h2>
            <div class="calc-body">
              <div class="input-group"><label>Taxable Profit</label><input id="ct-profit" type="number" placeholder="Taxable Profit"></div>
              <div class="input-group"><label>Book Profit (for MAT)</label><input id="ct-book" type="number" placeholder="Book Profit (for MAT)"></div>
              <div class="input-group"><label>Turnover</label><input id="ct-turnover" type="number" placeholder="Turnover"></div>
              <div class="input-group"><input type="checkbox" id="ct-115baa" checked> <label for="ct-115baa">Opted for Section 115BAA (22%)</label></div>
              <button class="tc-btn-primary" onclick="calculateCompanyTax()">Calculate Tax</button>
              <div id="ct-box" class="result-box">
                <p><span>Normal Tax</span> <strong>₹<span id="ct-normal">0</span></strong></p>
                <p><span>MAT Tax</span> <strong>₹<span id="ct-mat">0</span></strong></p>
                <p><span><b>Final Tax Payable</b></span> <strong>₹<span id="ct-final">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- LLP TAX --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="llp-tax-calculator" class="calculator-card">
            <h2>LLP / Partnership Tax</h2>
            <div class="calc-body">
              <div class="input-group"><label>Taxable Profit</label><input id="llp-profit" type="number" placeholder="Taxable Profit"></div>
              <button class="tc-btn-primary" onclick="calculateLLPTax()">Calculate Tax</button>
              <div id="llp-box" class="result-box"><p><span>Total Tax Payable</span> <strong>₹<span id="llp-tax">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- TRUST TAX --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="trust-tax-calculator" class="calculator-card">
            <h2>Trust / NGO Tax</h2>
            <div class="calc-body">
              <div class="input-group"><label>Taxable Income</label><input id="tr-income" type="number" placeholder="Taxable Income"></div>
              <div class="input-group"><label>Applicable Tax %</label><input id="tr-rate" type="number" placeholder="Applicable Tax %"></div>
              <button class="tc-btn-primary" onclick="calculateTrustTax()">Calculate Tax</button>
              <div id="tr-box" class="result-box"><p><span>Total Tax Payable</span> <strong>₹<span id="tr-tax">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- MAT --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="mat-calculator" class="calculator-card">
            <h2>MAT Calculator (115JB)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Book Profit</label><input id="mat-book" type="number" placeholder="Book Profit"></div>
              <button class="tc-btn-primary" onclick="calculateMAT()">Calculate MAT</button>
              <div id="mat-box" class="result-box">
                <p><span>MAT Tax @15%</span> <strong>₹<span id="mat-tax">0</span></strong></p>
                <p><span>Surcharge</span> <strong>₹<span id="mat-surcharge">0</span></strong></p>
                <p><span>Cess (4%)</span> <strong>₹<span id="mat-cess">0</span></strong></p>
                <p><span><b>Total MAT Payable</b></span> <strong>₹<span id="mat-total">0</span></strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- MAT CREDIT --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="mat-credit-calculator" class="calculator-card">
            <h2>MAT Credit (115JAA)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Normal Tax Liability</label><input id="mc-normal" type="number" placeholder="Normal Tax Liability"></div>
              <div class="input-group"><label>MAT Paid</label><input id="mc-mat" type="number" placeholder="MAT Paid"></div>
              <button class="tc-btn-primary" onclick="calculateMATCredit()">Calculate MAT Credit</button>
              <div id="mat-credit-box" class="result-box">
                <p><span>MAT Credit Generated</span> <strong>₹<span id="mat-credit">0</span></strong></p>
                <p><span>Carry Forward Years</span> <strong>15 AY</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- AMT --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="amt-calculator" class="calculator-card">
            <h2>AMT Calculator (115JC)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Adjusted Total Income</label><input id="amt-income" type="number" placeholder="Adjusted Total Income"></div>
              <button class="tc-btn-primary" onclick="calculateAMT()">Calculate AMT</button>
              <div id="amt-box" class="result-box"><p><span>AMT Payable</span> <strong>₹<span id="amt-tax">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- BOOK PROFIT --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="book-profit-calculator" class="calculator-card">
            <h2>Book Profit (115JB)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Net Profit as per P&amp;L</label><input id="bp-net" type="number" placeholder="Net Profit as per P&L"></div>
              <div class="input-group"><label>Additions</label><input id="bp-add" type="number" placeholder="Additions"></div>
              <div class="input-group"><label>Deductions</label><input id="bp-less" type="number" placeholder="Deductions"></div>
              <button class="tc-btn-primary" onclick="calculateBookProfit()">Calculate Book Profit</button>
              <div id="bp-box" class="result-box"><p><span>Book Profit</span> <strong>₹<span id="bp-book">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- AUDIT CHECK --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="audit-check-calculator" class="calculator-card">
            <h2>Audit Applicability (44AB)</h2>
            <div class="calc-body">
              <div class="input-group"><label>Turnover / Gross Receipts</label><input id="au-turnover" type="number" placeholder="Turnover / Gross Receipts"></div>
              <button class="tc-btn-primary" onclick="calculateAuditCheck()">Check Audit Requirement</button>
              <div id="au-box" class="result-box"><p><span>Status:</span> <strong id="au-result">—</strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- PERCENTAGE --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="percentage-calculator" class="calculator-card">
            <h2>Percentage Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Base Value</label><input id="per-base" type="number" placeholder="Base Value"></div>
              <div class="input-group"><label>Part Value</label><input id="per-part" type="number" placeholder="Part Value"></div>
              <button class="tc-btn-primary" onclick="calculatePercentage()">Calculate</button>
              <div id="per-box" class="result-box"><p><span>Percentage</span> <strong><span id="per-result">0</span>%</strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- INFLATION --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="inflation-calculator" class="calculator-card">
            <h2>Inflation Impact Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Present Amount</label><input id="inf-amount" type="number" placeholder="Present Amount"></div>
              <div class="input-group"><label>Inflation %</label><input id="inf-rate" type="number" placeholder="Inflation %"></div>
              <div class="input-group"><label>Years</label><input id="inf-years" type="number" placeholder="Years"></div>
              <button class="tc-btn-primary" onclick="calculateInflation()">Calculate</button>
              <div id="inf-box" class="result-box"><p><span>Future Value</span> <strong>₹<span id="inf-result">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- BUDGET --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="budget-calculator" class="calculator-card">
            <h2>Monthly Budget Planner</h2>
            <div class="calc-body">
              <div class="input-group"><label>Monthly Income</label><input id="bud-income" type="number" placeholder="Monthly Income"></div>
              <div class="input-group"><label>Monthly Expenses</label><input id="bud-expenses" type="number" placeholder="Monthly Expenses"></div>
              <button class="tc-btn-primary" onclick="calculateBudget()">Calculate</button>
              <div id="bud-box" class="result-box"><p><span>Monthly Savings</span> <strong>₹<span id="bud-savings">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- RETIREMENT --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="retirement-calculator" class="calculator-card">
            <h2>Retirement Corpus Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Monthly Investment</label><input id="ret-monthly" type="number" placeholder="Monthly Investment"></div>
              <div class="input-group"><label>Years to Invest</label><input id="ret-years" type="number" placeholder="Years to Invest"></div>
              <div class="input-group"><label>Expected Return %</label><input id="ret-rate" type="number" placeholder="Expected Return %"></div>
              <button class="tc-btn-primary" onclick="calculateRetirement()">Calculate</button>
              <div id="ret-box" class="result-box"><p><span>Retirement Corpus</span> <strong>₹<span id="ret-corpus">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- NET WORTH --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="net-worth-calculator" class="calculator-card">
            <h2>Net Worth Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Total Assets</label><input id="nw-assets" type="number" placeholder="Total Assets"></div>
              <div class="input-group"><label>Total Liabilities</label><input id="nw-liabilities" type="number" placeholder="Total Liabilities"></div>
              <button class="tc-btn-primary" onclick="calculateNetWorth()">Calculate</button>
              <div id="nw-box" class="result-box"><p><span>Net Worth</span> <strong>₹<span id="nw-result">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- SAVINGS GOAL --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="savings-goal-calculator" class="calculator-card">
            <h2>Savings Goal Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Target Amount</label><input id="sg-goal" type="number" placeholder="Target Amount"></div>
              <div class="input-group"><label>Months to Save</label><input id="sg-months" type="number" placeholder="Months to Save"></div>
              <button class="tc-btn-primary" onclick="calculateSavingsGoal()">Calculate</button>
              <div id="sg-box" class="result-box"><p><span>Required Monthly Saving</span> <strong>₹<span id="sg-result">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- FUTURE VALUE --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="future-value-calculator" class="calculator-card">
            <h2>Future Value Calculator</h2>
            <div class="calc-body">
              <div class="input-group"><label>Present Amount</label><input id="fv-present" type="number" placeholder="Present Amount"></div>
              <div class="input-group"><label>Return %</label><input id="fv-rate" type="number" placeholder="Return %"></div>
              <div class="input-group"><label>Years</label><input id="fv-years" type="number" placeholder="Years"></div>
              <button class="tc-btn-primary" onclick="calculateFutureValue()">Calculate</button>
              <div id="fv-box" class="result-box"><p><span>Future Value</span> <strong>₹<span id="fv-result">0</span></strong></p></div>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

      {{-- MASTER TAX SUMMARY --}}
      <div class="calculator-container">
        <div class="calculator-card-wrapper">
          <div id="master-tax-summary-calculator" class="calculator-card">
            <h2>Income Tax Computation Summary</h2>
            <div class="calc-body">
              <table class="tax-table">
                <tr><th>Particulars</th><th>Amount (₹)</th></tr>
                <tr><td>Gross Total Income</td><td id="mts-gross-summary">0</td></tr>
                <tr><td>Less: Deductions (Chapter VI-A)</td><td id="mts-deductions-summary">0</td></tr>
                <tr><td style="padding-left:16px; color:rgba(255,255,255,0.5); font-size:11px;">80C / 80D / NPS / 80E / 80G</td><td id="mts-deduction-breakup">0</td></tr>
                <tr><td><b>Taxable Income</b></td><td id="mts-taxable-summary">0</td></tr>
                <tr><td>Income Tax</td><td id="mts-tax-summary">0</td></tr>
                <tr><td>Rebate u/s 87A</td><td id="mts-rebate-summary">0</td></tr>
                <tr><td>Tax After Rebate</td><td id="mts-after-rebate-summary">0</td></tr>
                <tr><td>Surcharge</td><td id="mts-surcharge-summary">0</td></tr>
                <tr><td>Health &amp; Education Cess</td><td id="mts-cess-summary">0</td></tr>
                <tr class="final-row">
                  <td><b>Net Tax Payable</b></td>
                  <td><b id="mts-net-summary">0</b></td>
                </tr>
              </table>
              <button class="tc-btn-primary" onclick="calculateMasterTaxSummary()">Generate Summary</button>
            </div>
          </div>
        </div>
        <div class="enquiry-form-space"><div class="cta-box"><a href="{{ route('boc.step1', ['source' => 'calculator-side-consult']) }}" class="cta-primary">📞 Book Consultation</a><button class="cta-secondary" onclick="openCallbackModal()">Request Call Back</button><p class="cta-trust">✓ 100% Confidential • No Spam</p></div></div>
      </div>

    </div>{{-- end main-calculators --}}
  </main>
</div>{{-- end content-wrapper --}}

{{-- ===== SCRIPTS (unchanged) ===== --}}
<script src="{{ asset('js/calculators/core/utils.js') }}"></script>
<script src="{{ asset('js/calculators/core/tax-config.js') }}"></script>
<script src="{{ asset('js/calculators/core/tax-engine.js') }}"></script>
<script src="{{ asset('js/calculators/core/global-context.js') }}"></script>
<script src="{{ asset('js/calculators/core/deductions-engine.js') }}"></script>
<script src="{{ asset('js/calculators/core/marginal-relief.js') }}"></script>
<script src="{{ asset('js/calculators/income-tax/income-tax.logic.js') }}"></script>
<script src="{{ asset('js/calculators/all-individuals/taxable-income.js') }}"></script>
<script src="{{ asset('js/calculators/all-individuals/tax-liability.js') }}"></script>
<script src="{{ asset('js/calculators/all-individuals/advance-tax.js') }}"></script>
<script src="{{ asset('js/calculators/all-individuals/tax-saving.js') }}"></script>
<script src="{{ asset('js/calculators/all-individuals/tax-regime-compare.js') }}"></script>
<script src="{{ asset('js/calculators/income-tax/loss-setoff.js') }}"></script>
<script src="{{ asset('js/calculators/income-tax/carry-forward.js') }}"></script>
<script src="{{ asset('js/calculators/all-individuals/net-take-home.js') }}"></script>
<script src="{{ asset('js/calculators/core/master-tax-summary.js') }}"></script>
<script src="{{ asset('js/calculators/salaried/hra.js') }}"></script>
<script src="{{ asset('js/calculators/salaried/salary-breakup.js') }}"></script>
<script src="{{ asset('js/calculators/salaried/take-home-salary.js') }}"></script>
<script src="{{ asset('js/calculators/salaried/form-16.js') }}"></script>
<script src="{{ asset('js/calculators/salaried/standard-deduction.js') }}"></script>
<script src="{{ asset('js/calculators/salaried/bonus-tax.js') }}"></script>
<script src="{{ asset('js/calculators/business/business-tax.js') }}"></script>
<script src="{{ asset('js/calculators/business/presumptive-tax.js') }}"></script>
<script src="{{ asset('js/calculators/business/advance-tax-business.js') }}"></script>
<script src="{{ asset('js/calculators/business/profit-after-tax.js') }}"></script>
<script src="{{ asset('js/calculators/business/tds-payable.js') }}"></script>
<script src="{{ asset('js/calculators/business/professional-tds.js') }}"></script>
<script src="{{ asset('js/calculators/business/cash-flow.js') }}"></script>
<script src="{{ asset('js/calculators/business/depreciation.js') }}"></script>
<script src="{{ asset('js/calculators/gst/gst-calculator.js') }}"></script>
<script src="{{ asset('js/calculators/gst/gst-payable.js') }}"></script>
<script src="{{ asset('js/calculators/gst/gst-invoice.js') }}"></script>
<script src="{{ asset('js/calculators/gst/gst-itc.js') }}"></script>
<script src="{{ asset('js/calculators/gst/gst-rcm.js') }}"></script>
<script src="{{ asset('js/calculators/gst/gst-interest.js') }}"></script>
<script src="{{ asset('js/calculators/gst/net-gst.js') }}"></script>
<script src="{{ asset('js/calculators/loans/home-loan-emi.js') }}"></script>
<script src="{{ asset('js/calculators/loans/personal-loan-emi.js') }}"></script>
<script src="{{ asset('js/calculators/loans/education-loan.js') }}"></script>
<script src="{{ asset('js/calculators/loans/loan-amortization.js') }}"></script>
<script src="{{ asset('js/calculators/loans/prepayment.js') }}"></script>
<script src="{{ asset('js/calculators/loans/interest-vs-principal.js') }}"></script>
<script src="{{ asset('js/calculators/loans/loan-cost.js') }}"></script>
<script src="{{ asset('js/calculators/investments/capital-gains.js') }}"></script>
<script src="{{ asset('js/calculators/investments/property-gains.js') }}"></script>
<script src="{{ asset('js/calculators/investments/equity-mf-tax.js') }}"></script>
<script src="{{ asset('js/calculators/investments/dividend-tax.js') }}"></script>
<script src="{{ asset('js/calculators/investments/indexation.js') }}"></script>
<script src="{{ asset('js/calculators/investments/investment-returns.js') }}"></script>
<script src="{{ asset('js/calculators/investments/post-tax-return.js') }}"></script>
<script src="{{ asset('js/calculators/investments/cg-indexation.js') }}"></script>
<script src="{{ asset('js/calculators/deductions/80c-planner.js') }}"></script>
<script src="{{ asset('js/calculators/deductions/80d.js') }}"></script>
<script src="{{ asset('js/calculators/deductions/nps.js') }}"></script>
<script src="{{ asset('js/calculators/deductions/80e.js') }}"></script>
<script src="{{ asset('js/calculators/deductions/80g.js') }}"></script>
<script src="{{ asset('js/calculators/deductions/senior-citizen.js') }}"></script>
<script src="{{ asset('js/calculators/deductions/max-tax-saving.js') }}"></script>
<script src="{{ asset('js/calculators/core/company-tax-engine.js') }}"></script>
<script src="{{ asset('js/calculators/company/company-tax.js') }}"></script>
<script src="{{ asset('js/calculators/company/llp-tax.js') }}"></script>
<script src="{{ asset('js/calculators/company/trust-tax.js') }}"></script>
<script src="{{ asset('js/calculators/company/mat.js') }}"></script>
<script src="{{ asset('js/calculators/company/mat-credit.js') }}"></script>
<script src="{{ asset('js/calculators/company/amt.js') }}"></script>
<script src="{{ asset('js/calculators/company/book-profit.js') }}"></script>
<script src="{{ asset('js/calculators/company/audit-check.js') }}"></script>
<script src="{{ asset('js/calculators/utilities/percentage.js') }}"></script>
<script src="{{ asset('js/calculators/utilities/inflation.js') }}"></script>
<script src="{{ asset('js/calculators/utilities/budget.js') }}"></script>
<script src="{{ asset('js/calculators/utilities/retirement.js') }}"></script>
<script src="{{ asset('js/calculators/utilities/net-worth.js') }}"></script>
<script src="{{ asset('js/calculators/utilities/savings-goal.js') }}"></script>
<script src="{{ asset('js/calculators/utilities/future-value.js') }}"></script>
<script src="{{ asset('js/calculators/registry.js') }}"></script>
<script src="{{ asset('js/calculators/core/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="pdf-service.js"></script>

<script>
  let currentCategory = 'all-individuals';

  function showCategory(category) {
    currentCategory = category;
    document.querySelectorAll('.nav-btn').forEach(btn => btn.classList.remove('active'));
    const activeBtn = document.querySelector(`.nav-btn[onclick*="${category}"]`);
    if (activeBtn) activeBtn.classList.add('active');
    document.querySelectorAll('.category-section').forEach(section => section.classList.remove('active'));
    document.querySelector('.main-calculators')?.classList.remove('active');
    document.querySelectorAll('.calculator-container').forEach(container => container.style.display = 'none');
    const target = document.getElementById(`category-${category}`);
    if (target) target.classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function showCalculator(calculatorId) {
    document.querySelectorAll('.category-section').forEach(section => section.classList.remove('active'));
    document.querySelectorAll('.calculator-container').forEach(container => container.style.display = 'none');
    document.querySelector('.main-calculators').classList.add('active');
    const calculatorCard = document.getElementById(calculatorId);
    if (calculatorCard) {
      const container = calculatorCard.closest('.calculator-container');
      if (container) container.style.display = 'flex';
    }
    window.scrollTo({ top: 0, behavior: 'smooth' });
    if (window.pdfService) window.pdfService.injectPDFButtons();
  }

  function showCategoryFromCalculator() {
    document.querySelector('.main-calculators').classList.remove('active');
    document.querySelectorAll('.calculator-container').forEach(container => container.style.display = 'none');
    const target = document.getElementById(`category-${currentCategory}`);
    if (target) target.classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  document.addEventListener("DOMContentLoaded", () => {});
</script>
