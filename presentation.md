---
marp: true
title: "From Angular to Filament: Ditching the SPA"
paginate: true
footer: '![Emplate Logo](https://cdn.prod.website-files.com/5fc8c78a42bdacb22b8abbb5/624d7afab894000ec2796fed_emplate-logo.svg)'

style: |
    h1, h2, h3, h4, h5, h6 {
    color: #140d53;
    }
    section.lead {
        text-align:center;
    }

---
<!-- headingDivider: 1 -->

<!-- _class: lead -->
# From Angular to Filament: Ditching the SPA
Laravel Meetup Aarhus
2026-04-30
 

# Christoffer Berg Boisen

![Christoffer Berg Boisen w:200](https://cdn.prod.website-files.com/5fc8c78a42bdacb22b8abbb5/64c0d776d38288bedf56075f_christoffer-circle-70px.png)
Co-founder & CTO Emplate ApS

# Agenda

* Before Filament: Angular monorepo
* Introduction to Filament
    * Concepts
    * Code time!
* State of migration
* Verdict

*Slides & code available at [github.com/cboisen/2026-04-laravel-meetup](https://github.com/cboisen/2026-04-laravel-meetup)*

# Emplate

![Emplate website](emplate-website.png)

# Before filament: Angular monorepo
![bg h:720 right:17%](frontend-project.png)

Multiple "projects", a shared component library and 2-4 applications

Code reuse for frontend OK

Worked ok with dedicated frontend developers

Potential discrepancy in API expectations between backend and frontend

**An Agent is not able to make features e2e**

# What are we looking for in a solution?

1. One unified code base
2. Integrates well with Laravel
3. A comprehensive UI library (tables, input fields¸ media handling)
4. Easy to make our own custom components and tweaks
5. Extensive documentation
6. Feel familiar to us (Laravel + Livewire knowledge)
7. Open source, stong community backing

# Comparison of some options

| Option | Laravel fit | CMS-friendly | Customizable | Docs / community | Licensing |
| --- | --- | --- | --- | --- | --- |
| **Filament** | 🟢 | 🟢 | 🟢 | 🟢 | 🆓 |
| **Backpack** | 🟢 | 🟢 | 🟡 | 🟢 | 💵 |
| **Nova** | 🟢 | 🟢 | 🟡 | 🟢 | :lock:💵 |
| **Livewire + Flux / Volt** | 🟢 | 🟡 | 🟢 | 🟡 | 💵 |
| **Inertia + Vue** | 🟡 | 🔴 | 🟢 | 🟢 | 🆓 |

*`🆓` fully open source, `💵` open core / paid upgrades for full experience*


# Filament
Livewire components & views

Centers around the concept of a **resource**

CRUD & Tables at the center, but you can bring your own Livewire components

Filament has a Laravel Boost skill ⚡️

https://filamentphp.com/

# State of migration
1 app done ✅
1 app in progress: 3 of 12 modules done.

Established own UI patterns and concepts

The more you diverge from "Filament default", the more code you have to bring


![bg contain right:34%](linear-project-progress.png)

# Games
[emplate.dev](emplate.dev/cms)
![bg contain right:75%](list-of-games.png)

# Verdict
👍️ Development much faster than before

🤖 Surprised with how well an agent is able to flesh out modules

Traits til common patterns - det er bare PHP

⚠️ Testing is good, but know what you test (they are not browser tests)