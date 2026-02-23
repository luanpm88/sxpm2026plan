# Workshop Presentation Script (Slides 31–39)

Tone: training + workshop, friendly, simple English, clear for both native and non-native speakers.

---

## Opening (before Slide 31)

Hello everyone, thank you for joining.
Today is a practical workshop: how to use AI fast, but still keep control of software design.

Our focus is not “how many prompts we can write.”
Our focus is: clear design, safe implementation, and confident delivery.

You can stop me any time for questions.
This is interactive.

Before we begin, one quick context:
Verification Service is a plugin layer inside our SaaS email platform.
It helps check email quality before sending campaigns.
It supports two modes: verify one email, or verify a bulk list.
And it can switch between different providers through the same interface contract.

For this workshop, keep one simple target:
add one new provider class (Reoon) that conforms to two interfaces.
Single purpose: verify one email.
Bulk purpose: verify many emails with submit + check callback flow.

---

## Slide 31 — Embracing AI, the Emotsy Way

### Speaker script
Welcome to Workshop #1.
Today we use AI as an implementation engine, not as a decision maker.
Humans still own architecture and quality.

In this session, we will walk through one real case:
adding a new email verification service with clean design.

### Interaction cue
Ask:
“Who already uses AI coding tools every day?”
“Who feels AI is fast, but sometimes risky?”

### Transition
Great. Let’s align on both sides: benefits and risks.

---

## Slide 32 — AI in Development: Benefits & Risks

### Speaker script
AI can speed up repetitive coding and reduce boilerplate.
That is very useful.

But risk appears when AI changes design unintentionally.
Then we get hidden coupling, unstable behavior, and hard maintenance.

So our principle is simple:
AI writes code, humans define intent and guardrails.

### Interaction cue
Ask:
“Which risk is most painful in your current projects: regression, coupling, or readability?”

### Transition
Now we move to the control loop that keeps AI safe.

---

## Slide 33 — Design-First Control Loop

### Speaker script
This is our 4-step control loop.

Step 1: define interfaces and contracts.
Step 2: model interactions and callback flow.
Step 3: write tests as executable rules.
Step 4: ask AI to implement only inside boundaries.

Method signatures we keep visible in workshop:
- verify($email)
- bulkSubmit(Builder $subscriberQuery)
- bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback)

If design is clear, AI becomes very reliable.
If design is vague, AI becomes dangerous.

### Interaction cue
Ask:
“If we skip tests, what happens to confidence when AI changes code?”

### Transition
Let’s apply this loop to a real integration case.

---

## Slide 34 — Workshop Use Case: Add Email Verification Service

### Speaker script
Our practical case is adding Reoon provider.

What is this service in business terms?
It is a plugin in our bigger SaaS email-sending system.
This plugin validates email addresses to reduce bounce and protect sender reputation.

What can it do?
- verify one address in real time
- verify many addresses in bulk process
- keep one common workflow even when provider changes

Important constraints:
- no core workflow changes
- keep compatibility with existing interfaces
- keep implementation small and maintainable

We only add one provider class and configure the service.
That is all.

### Interaction cue
Ask:
“Why is this a good workshop case?”
Expected answer: small scope, real business value, strong architecture lesson.

### Transition
Next, we look at architecture positions and boundaries.

---

## Slide 35 — Email Verification Architecture Snapshot

### Speaker script
Here is the architecture map.

Think simple:
two interfaces, two jobs, one provider pattern.

VerifyInterface handles single verification: verify($email).
BulkVerifyInterface handles bulk verification:
bulkSubmit(Builder $subscriberQuery) + bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback).

Provider classes like Emailable, Bouncify, MyEmailVerifier, and Reoon follow the same shape.
That is why we can add Reoon without touching core modules.

Single flow and bulk flow stay the same before and after adding Reoon.

### Interaction cue
Ask:
“Which layer should AI modify?”
Expected answer: provider implementation layer only.

### Transition
Now, we need the right prompting style.

---

## Slide 36 — AI Prompting with Constraints

### Speaker script
Good prompt = design + constraints + expected output.
Bad prompt = “just build it quickly.”

When we provide contract details,
AI output is predictable, reviewable, and safe.

When constraints are missing,
AI may invent architecture and break behavior.

### Interaction cue
Ask:
“Can someone share one prompt improvement they already use?”

### Transition
Great. Let’s run this in a workshop flow with team roles.

---

## Slide 37 — Workshop Flow & Roles

### Speaker script
This workshop has four phases:
design brief, interaction mapping, AI implementation, verification.

And three roles:
- Design Owner
- AI Driver
- Verifier

These roles keep speed and quality balanced.
One person does not carry all risk.

### Interaction cue
Ask:
“Who wants to play Design Owner in today’s practice?”

### Transition
Before execution, let’s lock key principles.

---

## Slide 38 — Principles & Takeaways

### Speaker script
Key principles:
- human-led design
- interface contract discipline
- AI as accelerator, not authority

If we do this consistently,
we deliver faster with less regression and cleaner code.

### Interaction cue
Ask:
“What is one principle you will apply this week?”

### Transition
Now we go to the practical playbook you can follow step by step.

---

## Slide 39 — Practice Playbook: Add Reoon Fast & Safely

### Speaker script (step-by-step walkthrough)
Now we execute.
This slide is our operating checklist.

Step 1:
Ask AI to learn current interfaces and produce a markdown design contract.
No coding yet.

Contract must include:
verify($email), bulkSubmit(Builder $subscriberQuery), bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback).

Step 2:
Add Reoon in config file.
Keep one clean service entry.

Step 3:
Ask AI to implement provider class using the markdown contract.
No core module changes.

Step 4:
Ask AI to write focused unit tests for Reoon only.
Run: php artisan test --filter=ReoonVerificationTest

Step 5:
Use one consolidated debug/finalize prompt to close gaps.
Fix edge cases and improve defensive checks.

Step 6:
Open application UI and confirm provider appears and works end-to-end.
Use both screenshots as evidence:
- adding service
- using service in verification flow

### Interaction cue
Ask:
“Which step should never be skipped?”
Suggested answer: contract step + tests.

### Closing lines
That’s the complete workflow.
In practice, this can be done in minutes,
but still with strong architecture control.

Thank you everyone.
If you want, next session we can do a live coding run with role-play.

---

## Q&A Backup Lines (optional)

- “Good question. Let’s map that to contract first, then implementation.”
- “If AI output looks smart but violates interface, we reject it.”
- “Fast is good, but predictable is mandatory.”
- “Our quality comes from constraints, not from luck.”
