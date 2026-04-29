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
2026-04-29
 

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

*Slides & code available at https://github.com/cboisen/2026-04-laravel-meetup*

# Emplate

![Emplate website](emplate-website.png)

# Before filament: Angular monorepo
![bg h:720 right:17%](frontend-project.png)

Multiple "projects", a shared component library and 2-4 applications

Code reuse for frontend OK

Worked ok with dedicated frontend developers

Potential discrepancy in API expectations between backend and frontend

# Something else