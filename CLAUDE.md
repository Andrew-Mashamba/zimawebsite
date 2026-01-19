# ZIMA Solutions Limited Website

Corporate website and dashboard for ZIMA Solutions Limited - a technology and business innovation company specializing in digital transformation, fintech solutions, and enterprise systems.

**Tagline**: "Build Your Future"

---

## Tech Stack

- **Framework**: Laravel 11
- **Frontend**: Livewire 3, Tailwind CSS, Vite
- **Auth**: Laravel Fortify, Jetstream, Sanctum (with 2FA support)
- **Database**: SQLite (development)

## Brand Colors

- **Primary**: `#1F3B8D` (Deep Blue) - Trust, professionalism, stability
- **Secondary**: `#FF621B` (Orange) - Energy, innovation, action
- **White**: `#FEFFFF` - Clean backgrounds, breathing space
- **Text**: `#1A1A1A` (Dark) for body, `#6B7280` (Gray) for secondary

---

## Design Philosophy

### Core Principles (Apple-Inspired Minimalism)

1. **Less is More**: Every element must serve a purpose. Remove distractions that don't contribute to user goals or conversions.

2. **Product-Centric Focus**: Showcase services and solutions as the hero. Use high-quality visuals that make visitors feel the value.

3. **Reduce Cognitive Load**: Limit choices per section. One headline, one message, one CTA per viewport. Users form impressions in 0.05 seconds.

4. **Generous White Space**: Use negative space to focus attention on distinct imagery or messaging. Makes complex information digestible.

### Visual Hierarchy

- **Large imagery** and **bold typography** for primary messages
- **High contrast** between elements to guide the eye
- **Size and positioning** to establish importance (most important = largest, top)
- Treat hierarchy like storytelling: lead users from headline → supporting details → action

---

## UX Guidelines

### Navigation Structure

- **Three-tier navigation**: Broad categories → sub-categories → specific pages
- **Sticky header**: Always accessible navigation without scrolling
- **Clear current location**: Users should always know where they are
- **Maximum 7 items** in primary navigation (cognitive limit)

### User-Centric Design

- Design decisions based on user needs, not personal preference
- Intuitive layouts that reduce friction
- Anticipate user needs and remove barriers
- Mobile-first responsive approach

### Performance & Trust

- **Fast load times**: Optimize images, minimize scripts
- **SSL by default**: Security builds trust
- **Prominent About & Contact**: Easy to verify company legitimacy
- **Social proof**: Testimonials, client logos, case studies

---

## Content Strategy

### Homepage Content Hierarchy

1. **Hero Section**: Immediately communicate what ZIMA does and the value proposition
2. **Services Overview**: Quick scan of capabilities (3-4 max)
3. **Social Proof**: Client logos, testimonials, statistics
4. **Featured Work**: 2-3 standout projects
5. **CTA**: Clear next step (Contact, Learn More)

### Storytelling Approach

- **Brand narrative**: Innovation, transformation, building futures
- Combine videos, text, imagery, and animations to tell product stories
- Visual consistency strengthens brand recognition
- Use motion graphics purposefully (guide attention, not distract)

### B2B Content Best Practices

- Balance **SEO optimization** with **human readability**
- Create value-driven content: case studies, insights, solutions
- Address real problems your audience faces
- Keep copy concise: visitors spend ~47 seconds per page

---

## Call to Action (CTA) Guidelines

### Design Principles

- **Stand out**: CTAs should contrast with surrounding content
- **Primary CTA**: Use Secondary color `#FF621B` for main actions
- **Secondary CTA**: Use Primary color `#1F3B8D` or outlined style
- **Minimum 44x44px** touch target for mobile

### Copy Best Practices

- **Specific and active**: "Get Your Free Consultation" not "Submit"
- **Value-focused**: Emphasize what user receives
- **Create urgency** without being pushy
- **Brief**: 2-5 words maximum

### Strategic Placement

- One clear CTA per section/viewport
- Hero section: Primary conversion goal
- End of content sections: Logical next step
- Sticky/floating CTA for long pages
- Low-commitment options for new visitors (newsletter, download)

### CTA Hierarchy Per Page

| Page | Primary CTA | Secondary CTA |
|------|-------------|---------------|
| Home | "Get Started" / "Contact Us" | "View Our Work" |
| Services | "Request a Quote" | "Learn More" |
| About | "Meet the Team" | "Our Story" |
| Work/Portfolio | "Start Your Project" | "View Case Study" |
| Contact | "Send Message" | "Schedule a Call" |

---

## Component Guidelines

### Animation & Interactivity

- Animations are **functional**, not decorative
- Use motion to **guide attention** and **provide feedback**
- Micro-interactions make interface feel alive and responsive
- Scroll-triggered animations should be subtle and purposeful
- Avoid animation that delays content visibility

### Section Patterns

Each section should follow this structure:
```
┌─────────────────────────────────────┐
│  Section Title (Clear, Benefit-Focused)  │
│  Subtitle (Supporting context)           │
├─────────────────────────────────────┤
│                                           │
│  Content (Cards, Grid, Features)          │
│                                           │
├─────────────────────────────────────┤
│  CTA Button (Clear next action)          │
└─────────────────────────────────────┘
```

### Card Components

- Consistent padding and spacing
- Clear visual hierarchy within cards
- Hover states that provide feedback
- Link entire card when clickable (larger touch target)

---

## Project Structure

```
app/Livewire/Frontend/Components/   # 22 frontend Livewire components
app/Livewire/Dashboard/             # Dashboard components
resources/views/frontend/           # Main page templates
resources/views/livewire/           # Component blade views
public/vf/                          # Images and assets
docs/                               # Documentation
```

## Key Routes

| Route | Description |
|-------|-------------|
| `/` | Landing page |
| `/about` | About company |
| `/service` | Services showcase |
| `/team` | Team members |
| `/contact` | Contact form |
| `/dashboard` | Admin dashboard (auth required) |

## Development Commands

```bash
# Start development server
php artisan serve --port=8000

# Run Vite dev server
npm run dev

# Build for production
npm run build

# Run migrations
php artisan migrate

# Run tests
php artisan test
```

---

## Coding Conventions

- Use Livewire components for interactive UI elements
- Follow Laravel naming conventions (PascalCase for classes, snake_case for database)
- Blade components go in `resources/views/livewire/frontend/components/`
- Use Tailwind CSS utility classes for styling
- Brand colors: Primary `#1F3B8D`, Secondary `#FF621B`

## Component Pattern

Livewire components follow this structure:
- PHP class in `app/Livewire/Frontend/Components/`
- Blade view in `resources/views/livewire/frontend/components/`
- Component renders view with `return view('livewire.frontend.components.component-name')`

---

## Quality Checklist

Before deploying any page, verify:

- [ ] Clear value proposition above the fold
- [ ] One primary CTA visible without scrolling
- [ ] All images optimized (WebP, lazy loading)
- [ ] Mobile responsive and touch-friendly
- [ ] Consistent brand colors and typography
- [ ] White space creates visual breathing room
- [ ] Navigation is intuitive and accessible
- [ ] Page loads in under 3 seconds
- [ ] Forms have clear labels and validation
- [ ] Social proof elements present (testimonials, logos)
