---
name: Clive Christian
description: Portfolio of a full-stack developer, set in the Ralph de Vinca paper world, made minimal.
colors:
  paper: "#FAFAF7"
  surface: "#F2F0EB"
  ink: "#1A1A18"
  ink-hover: "#35342F"
  muted: "#67625A"
  gold: "#A8834F"
  gold-text: "#7A5E33"
  hair: "#E6E2DA"
  danger: "#A3352B"
typography:
  display:
    fontFamily: "Gloock, Georgia, serif"
    fontSize: "clamp(2.5rem, 6.2vw, 4.75rem)"
    fontWeight: 400
    lineHeight: 1.05
  display-case:
    fontFamily: "Gloock, Georgia, serif"
    fontSize: "clamp(2.75rem, 7vw, 5.5rem)"
    fontWeight: 400
    lineHeight: 1.03
  headline:
    fontFamily: "Gloock, Georgia, serif"
    fontSize: "clamp(2rem, 4vw, 3rem)"
    fontWeight: 400
    lineHeight: 1.1
  title:
    fontFamily: "Gloock, Georgia, serif"
    fontSize: "2rem"
    fontWeight: 400
    lineHeight: 1.1
  title-small:
    fontFamily: "Gloock, Georgia, serif"
    fontSize: "1.5rem"
    fontWeight: 400
    lineHeight: 1.33
  body-lead:
    fontFamily: "Hanken Grotesk, ui-sans-serif, system-ui, sans-serif"
    fontSize: "1.125rem"
    fontWeight: 400
    lineHeight: 1.625
  body:
    fontFamily: "Hanken Grotesk, ui-sans-serif, system-ui, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.5
  ui:
    fontFamily: "Hanken Grotesk, ui-sans-serif, system-ui, sans-serif"
    fontSize: "15px"
    fontWeight: 500
    lineHeight: 1.4
  small:
    fontFamily: "Hanken Grotesk, ui-sans-serif, system-ui, sans-serif"
    fontSize: "0.875rem"
    fontWeight: 400
    lineHeight: 1.43
  label:
    fontFamily: "Hanken Grotesk, ui-sans-serif, system-ui, sans-serif"
    fontSize: "13px"
    fontWeight: 600
    lineHeight: 1.4
    letterSpacing: "normal"
rounded:
  plate: "2px"
  pill: "9999px"
spacing:
  gutter-mobile: "20px"
  gutter-desktop: "48px"
  container: "1440px"
  nav-height: "72px"
  section-mobile: "96px"
  section-desktop: "160px"
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.paper}"
    typography: "{typography.ui}"
    rounded: "{rounded.pill}"
    padding: "12px 24px"
    height: "44px"
  button-primary-hover:
    backgroundColor: "{colors.ink-hover}"
    textColor: "{colors.paper}"
  button-ghost:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "{rounded.pill}"
    padding: "12px 24px"
    height: "44px"
  button-ghost-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.paper}"
  field:
    backgroundColor: "rgba(255, 255, 255, 0.6)"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.plate}"
    padding: "12px 14px"
  plate:
    backgroundColor: "{colors.surface}"
    rounded: "{rounded.plate}"
    padding: "clamp(12px, 5vw, 72px)"
  status-tag:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.pill}"
    padding: "2px 10px"
---

# Design System: Clive Christian

Design file: [Figma, Clive Christian portfolio](https://www.figma.com/design/O94GIsIUDsIQzqvm7QivPi) (variables collection "Tokens", text styles Display/XL to Label/S). The values below are taken from the shipped code (`resources/css/app.css` and the React pages). Where Figma and code disagree, follow the code.

## Overview

**Creative North Star: "The Perfumer's Paper"**

This is the Ralph de Vinca world stripped down to three materials: warm off-white paper, near-black ink, and one aged gold used only on display words. Pages read like a fragrance house's printed note card. A heavy, high-contrast serif carries the voice, a quiet grotesk handles everything functional, and hairline rules divide the page. The site has no cards, no shadows and no tinted panels apart from the warm surface plate that frames each screenshot.

Density is low and the layout is generous: one idea per band, wide vertical gaps (160px between sections on desktop), and content capped at 1440px with 48px gutters. The work is the loudest thing on the page. Each project screenshot sits on a surface plate at full content width, and the chrome around it stays quiet.

The theme is light only, by decision. Ralph de Vinca is a light paper world, so there is no dark variant.

**Key Characteristics:**
- Paper ground, ink type, gold reserved for the last phrase of a display line.
- Gloock 400 for every heading; Hanken Grotesk 400/500/600 for body and UI.
- Hairline (1px) rules for structure; a 1px or 2px ink rule marks the active or featured row.
- Pill buttons and status tags; 2px corners on images, plates and inputs.
- Flat. Depth comes from the surface plate behind images, never from shadow.
- Motion is limited to a press scale and a layer crossfade, and both collapse under reduced motion.

## Colors

A warm neutral paper-and-ink palette with a single restrained metallic accent.

### Primary
- **Ralph de Vinca Gold** (gold): the brand mark color, used only for display-size words: the last phrase of an h1 or h2 ("the surface.", "to build?", a project's last word) and the active nav underline. It measures 3.3:1 on paper, so it is never used for body or label text.
- **Deep Gold Ink** (gold-text): the readable gold for small text (5.8:1 on paper). Used for the "Shown below" marker, the "Featured" flag, the inbox count, and the global focus outline.

### Neutral
- **Gallery Paper** (paper): the page ground, nav background, and the text color on ink buttons. It is also the browser theme color.
- **Warm Plate** (surface): the only fill. It sits behind screenshots and portraits as a mat.
- **Pressed Ink** (ink): all primary text, primary buttons, focused input borders, and the active or featured rule.
- **Soft Ink** (ink-hover): the hover state of the primary button only.
- **Smoke** (muted): secondary copy, metadata (category, year), labels and inactive layer tabs.
- **Hairline** (hair): every 1px rule and border, input strokes, the resting underline of text links, and the off state of the switch.

### Semantic
- **Oxide Red** (danger): validation messages, invalid field borders and destructive confirms. Used only in forms and admin.

### Named Rules
**The Gold Is a Word Rule.** Gold (#A8834F) appears only on display-size type and thin marks, and only on the closing phrase of a line. Any gold text below 24px uses gold-text instead. Never use gold as a button or a fill.

**The One Fill Rule.** Surface is the only background fill. Every other division on the page is a hairline.

## Typography

**Display Font:** Gloock (with Georgia, serif), weight 400 only
**Body Font:** Hanken Grotesk (with ui-sans-serif, system-ui, sans-serif), weights 400, 500, 600

Both fonts are self-hosted through laravel-vite-plugin `bunny()` and loaded with `Vite::fonts()`.

**Character:** The heavy serif with high stroke contrast echoes the Ralph de Vinca headline and does the speaking. The grotesk stays neutral, sentence case, and never draws attention to itself.

### Hierarchy
- **Display** (Gloock 400, clamp(2.5rem, 6.2vw, 4.75rem), line-height 1.05): page h1 on Home, Contact, About and the error pages. Two lines at most.
- **Display Case** (Gloock 400, clamp(2.75rem, 7vw, 5.5rem), line-height 1.03): the case study title only.
- **Headline** (Gloock 400, clamp(2rem, 4vw, 3rem), line-height 1.1): the featured project title, the next-project link, and the closing call to action.
- **Title** (Gloock 400, 2rem): section headings ("More work", "Send a message", "Read it in three layers").
- **Title Small** (Gloock 400, 1.5rem): project titles in lists and cards, layer tab names (1.125rem on mobile), and the wordmark.
- **Body Lead** (Hanken 400, 1.125rem, line-height 1.625, muted): sublines and summaries, capped at 34 to 40rem.
- **Body** (Hanken 400, 1rem): running text and definition values. Long passages are capped at 56 to 60ch.
- **UI** (Hanken 500, 15px): nav links, buttons, field labels, text links.
- **Small** (Hanken 400, 0.875rem, muted): metadata lines, hints, captions, the footer.
- **Label** (Hanken 600, 13px, sentence case, normal tracking, muted): definition terms (Year, Role, Based), table heads, and status tags.

### Named Rules
**The Sentence Case Rule.** No uppercase and no letter-spaced labels. Labels are 13px semibold in sentence case.

**The Single Weight Serif Rule.** Gloock is used only at 400. Hierarchy comes from size, never from synthetic bold.

## Layout

- **Container:** max 1440px, centered, with a 20px gutter on mobile and 48px from `md` (768px) up. Every band (nav, sections, footer) uses the same container, so all edges align.
- **Nav:** sticky, 64px tall on mobile and 72px from `md`, on paper with a hairline bottom border. `scroll-padding-top` is 88px.
- **Section rhythm:** bands are separated by 96px of bottom padding on mobile and 160px from `md`. Hero top padding is 48px on mobile and 88px on desktop.
- **Hero grid:** an asymmetric two-column grid from `lg` (1024px): a flexible text column plus a fixed side column (440px on Home, 400px for case-study facts, 560px for the contact form), bottom-aligned, with a 96px gap. It stacks below `lg`.
- **Lists of work:** two columns from `md` with a 32px gap; one column with a 56px gap on mobile.
- **Fact lists:** label and value in a fixed 80 to 100px label column, with hairline rules between rows (`grid-cols-[80px_1fr]`).
- **Breakpoints:** Tailwind defaults: sm 640px, md 768px, lg 1024px.

## Elevation & Depth

The system is flat and uses no box-shadow anywhere. Depth comes from tonal layering only: a screenshot sits on the warm surface plate with clamp(12px, 5vw, 72px) of mat around it, and a hairline border outlines the image itself. Shadows that show up inside project screenshots belong to those products, not to this system.

### Named Rules
**The Mat Not Shadow Rule.** To lift an image, put it on a surface plate. Never add a shadow.

## Shapes

Two radii only. **Near-square (2px)** for anything that holds content: images, plates, inputs, admin thumbnails. **Full pill (9999px)** for anything you press or anything that reports a state: buttons, status tags, the switch track and thumb, and file-input buttons. Rules are 1px hairlines. An ink rule (1px, or 2px on the active layer tab) marks the current item. Nothing else is rounded, clipped or angled.

## Components

### Buttons
Calm, solid and tactile.
- **Shape:** full pill, at least 44px tall, 12px by 24px padding, UI type (15px / 500), no wrapping.
- **Primary:** ink fill with paper text. Hover (fine pointers only) moves to ink-hover. Used for the single contact intent, labelled "Start a conversation", and for form submits.
- **Ghost:** 1px ink border with ink text. On hover it fills with ink and the text turns paper. Used for secondary navigation ("Read the case study", "See all work", "Visit the live site") and the mobile Menu toggle.
- **Press:** scale 0.97 over 140ms with ease-out-strong (cubic-bezier(0.23, 1, 0.32, 1)). Color changes run over 200ms.
- **Disabled:** 50% opacity with a not-allowed cursor.

### Text Links
Underline offset 6px in the hairline color. On hover the underline turns to currentColor over 200ms. Nav links have no resting underline. The current page gets a gold underline.

### Status Tags
A pill with a 1px border, 2px by 10px padding, and Label type. An ink border means the item needs action ("Awaiting reply"). A hairline border with muted text means it is resolved or inactive ("Replied", "Draft"). Used in admin only.

### Inputs / Fields
- **Style:** 1px hairline stroke, 60% white over paper, 2px radius, 12px by 14px padding, 16px ink text, muted placeholder at 70%.
- **Focus:** the border moves to ink over 150ms. There is no glow.
- **Error:** danger border via `aria-invalid`, with the message below in small danger text. Labels are UI type, and "required" is set inline in 13px muted.
- **Switch:** a 40 by 24px pill track, hair when off and ink when on, with an 18px paper thumb.

### Navigation
The Gloock wordmark sits left. On the right are Work and About in UI type, then the primary pill. Below `md` this collapses to a ghost "Menu" pill that opens a full-height paper panel with links in Gloock at 1.875rem, separated by hairlines. Escape closes the panel.

### Plate (signature)
The surface-color mat behind every project image, with a 2px radius. The image keeps the 1920 by 928 aspect ratio (2.07:1), is anchored to the top, and has a hairline border. Padding is clamp(12px, 5vw, 72px) at full width, 12px to 32px in grids, and 18px in the next-project thumbnail.

### Layer Pyramid (signature)
Each project is read in three layers: Surface, Function and Foundation. A plate sits on top. Below it are three tab buttons in a three-column grid, each topped by a rule. The active tab gets a 2px ink rule and an ink Gloock name; inactive tabs get a hairline and a muted name. Choosing a layer swaps the screenshot with a 220ms opacity crossfade, and outgoing images blur by 2px (ease-out-strong). The tabs are buttons with `aria-pressed`, so they work from the keyboard. On desktop every layer's item list stays visible; on mobile only the active list shows. Under reduced motion, all transitions collapse to 0.01ms and the blur is removed.

### Selected-Work Index
An ordered list of project titles (Gloock 1.5rem) with "category, year" in small muted text and hairline rules between rows. The featured row gets an ink top rule and a "Shown below" marker in gold-text. Rows have no numerals.

## Do's and Don'ts

### Do:
- **Do** keep gold (#A8834F) on display-size words and the active nav underline only. Use gold-text (#7A5E33) for any small gold text.
- **Do** frame every project screenshot in a surface plate at 2px radius, with a hairline on the image. Portraits take the 2px radius without a plate.
- **Do** use pills for buttons and status tags, and 2px corners for images, plates and inputs.
- **Do** separate content with 1px hairline rules, and mark the current item with an ink rule.
- **Do** keep one contact intent, labelled "Start a conversation", as the primary pill.
- **Do** keep motion to the 140ms press scale and the 220ms layer crossfade, and let reduced motion collapse both.
- **Do** use the 2px gold-text focus outline at a 3px offset for every focusable element.

### Don't:
- **Don't** add box-shadows, gradients or a dark theme.
- **Don't** wrap content in bordered or filled cards. Surface fill belongs only behind imagery.
- **Don't** use uppercase or letter-spaced labels, or set Gloock at any weight other than 400.
- **Don't** put gold on buttons, fills, body text, or anything below display size.
- **Don't** use em dash characters in visible copy.
- **Don't** split the hero into two equal halves or lay projects out as a row of three equal cards.
