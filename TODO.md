# Popup Contact Form Optimization Task

## Plan
- Rewrite the popup HTML in `application/views/website/components/navbar.php`:
  - Responsive two-column layout on desktop, single column on mobile.
  - Keep form fields: name, company_name, phone, email, services select, products select, message-free (original has no textarea).
  - Keep Services/Products checkboxes on the same row.
  - Compact heading/subtitle, compact submit button aligned right.
  - Preserve all IDs/names/JS hooks and form action.
- Rewrite the popup CSS in `assets/website/css/main.css`:
  - Center popup both axes, max-height 90vh, internal scroll only if needed.
  - Reduce padding/margins, reduce input height, compact Choices.js dropdowns.
  - Modern SaaS look.

## Steps
- [x] Analyze existing popup HTML and CSS
- [x] Create TODO.md
- [ ] Rewrite popup HTML in navbar.php
- [ ] Rewrite popup CSS in main.css
- [ ] Verify no JS changes needed (IDs/names preserved)
