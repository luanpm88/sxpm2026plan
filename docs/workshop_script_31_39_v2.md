# Workshop Presentation Script V2 (Slides 31–39)

Style: straightforward presenter script, simple English, no interactive Q&A.

---

## Opening (before Slide 31)

Hello everyone, thank you for joining this workshop.
Today we focus on one practical topic: using AI fast, while keeping full control of software design.

This is training plus workshop style.
I will walk slide by slide with clear actions and examples.

Before we start, one important context.
Verification Service is a plugin layer in our SaaS email-sending platform.
Its job is to validate email quality before sending campaigns.
It supports two modes: single email verification and bulk list verification.
It also supports multiple provider services behind one common interface contract.

Today we keep one clear scope.
Add one provider class, Reoon, that conforms to two interfaces and existing flow.

---

## Slide 31 — Embracing AI, the Emotsy Way

In this workshop, AI is an implementation engine.
Humans still own architecture, boundaries, and quality decisions.

Our case is simple and real.
We add a new email verification service provider, Reoon, in a clean and controlled way.

Next, we align on both sides of AI usage: benefits and risks.

---

## Slide 32 — AI in Development: Benefits & Risks

AI helps us move faster by reducing repetitive coding work.
It improves delivery speed and lets engineers focus more on design decisions.

At the same time, risk appears when constraints are unclear.
AI can generate code that drifts from architecture and creates regression.

So our operating rule is clear.
AI writes code, humans define intent and guardrails.

Next, we use a control loop to keep quality stable.

---

## Slide 33 — Design-First Control Loop

Our control loop has four steps.
First, define interfaces and contracts.
Second, model interaction and callback flow.
Third, write tests as executable rules.
Fourth, ask AI to implement only inside those boundaries.

Keep these method signatures visible during implementation:
`verify($email)`
`bulkSubmit(Builder $subscriberQuery)`
`bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback)`

When design is clear, AI output is predictable.
When design is weak, AI output becomes risky.

Now we apply this loop to a real provider integration.

---

## Slide 34 — Workshop Use Case: Add Email Verification Service

Our workshop case is adding Reoon provider.
This is not a standalone feature.
It is a plugin extension inside a bigger SaaS email product workflow.

Business value is direct.
The plugin verifies addresses to reduce bounce and protect sender reputation.
It supports one-by-one verification and bulk verification.

Scope is intentionally small.
We add one provider class and one service config entry.
No core workflow changes.
No architecture rewrite.

Next, we look at architecture boundaries.

---

## Slide 35 — Email Verification Architecture Snapshot

This slide is the core design view.
Two interfaces, two jobs, one consistent provider pattern.

VerifyInterface handles single email verification through `verify($email)`.
BulkVerifyInterface handles bulk list verification through:
`bulkSubmit(Builder $subscriberQuery)` and
`bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback)`.

Existing classes like Emailable, Bouncify, MyEmailVerifier, and the new Reoon class follow the same structure.
That is why we can add a new service without redesigning core workflow.

AI should modify provider layer only.
Core orchestration stays unchanged.

Next, we move to prompting quality.

---

## Slide 36 — AI Prompting with Constraints

A good prompt includes design contract, constraints, expected output, and scope limits.
A bad prompt is vague and asks AI to “build quickly” without boundaries.

With clear constraints, output is reviewable and stable.
Without constraints, AI may invent architecture and break behavior.

Next, we organize execution with clear roles.

---

## Slide 37 — Workshop Flow & Roles

Workshop flow has four phases.
Design brief, interaction mapping, AI implementation, and verification.

Role separation keeps speed and quality balanced.
Design Owner controls architecture intent.
AI Driver executes within scope.
Verifier validates tests and behavior.

Next, we summarize the principles.

---

## Slide 38 — Principles & Takeaways

Three principles stay constant.
Human-led design.
Interface contract discipline.
AI as accelerator, not authority.

When we follow this consistently, we deliver faster with less regression and cleaner code.

Now we move to the practical playbook.

---

## Slide 39 — Practice Playbook: Add Reoon Fast & Safely

This slide is the step-by-step execution checklist.

Step 1: Ask AI to analyze current interfaces and generate markdown design contract.
This contract must clearly define `verify($email)`, `bulkSubmit(...)`, and `bulkCheck(...)` behavior.
Step 2: Add Reoon to verification config with one clean service entry.
Step 3: Ask AI to implement or update Reoon provider class based on the contract.
Step 4: Ask AI to write focused unit tests for Reoon, then run `php artisan test --filter=ReoonVerificationTest`.
Step 5: Run one consolidated debug/finalize prompt to close edge cases and improve robustness.
Step 6: Open the application UI and confirm provider appears and works end-to-end, using both screenshots as evidence.

This is a full production-style workflow.
It is fast with AI, controlled by design, and safe for maintenance.

Thank you everyone.
In the next workshop, we can run this as a live role-based implementation session.
